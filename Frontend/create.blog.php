<?php
include 'navbar.php';

if (!isset($_SESSION['userId'])) {
    header('Location: login.php');
    exit();
}
?>

<span class="text-center">
    <?php if (isset($_GET['error'])) {
        if ($_GET['error'] == 'emptyfields') {
            echo '<h5 class="text-danger">*Fill In All The Fields</h5>';
        } elseif ($_GET['error'] == 'titletaken') {
            echo '<h5 class="text-danger">Le titre existe deja</h5>';
        } elseif ($_GET['error'] == 'sqlerror') {
            echo '<h5 class="text-danger">*Website Erreur : Veuillez contacter l\' administrateur</h5>';
        }
    } elseif (isset($_GET['catcreation']) == 'success') {
        echo '<h5 class="text-success">Blog creer avec success</h5>';
    } ?>
</span>
<br><br>

<form action="../Backend/create.blog.back.php" enctype="multipart/form-data" method="post">
    <div class="col-lg-6  fadeIn" style="margin-left: 25%;">
        <h1 style="margin-left: 20%;">Création de Blog</h1>
        <div class="p-5 rounded contact-form">
            <div class="mb-4">
                <input type="text" name="btitle" id="title" class="form-control border-0 py-3"
                    placeholder="Le titre du blog">
            </div>
            <div class="mb-4">
                <input type="file" id="imgInp" name='dp' class="form-control border-0 py-3" placeholder="Project">
            </div>
            <div class="mb-4">
                <textarea class="w-100 form-control border-0 py-3" name="bcontent" id="content" cols="30" rows="10"
                    placeholder="Contenus du blog"></textarea>
            </div>
            <div class="text-start">
                <input class="btn bg-primary text-white py-3 px-5" type="submit" value="Creer un blog"
                    name="create_blog">
            </div>
        </div>
    </div>
</form><br><br>
<script src="js/jquery.min.js"></script>
<script>
var dp = 'img/cover_image.jpg';

$('#blah').attr('src', dp);

function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#blah').attr('src', e.target.result);

        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#imgInp").change(function() {
    readURL(this);
});
</script>
<?php include 'footer.php'; ?>
