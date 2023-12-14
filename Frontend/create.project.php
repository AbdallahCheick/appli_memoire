
<?php
include 'navbar.php';
if(!isset($_SESSION['userId'])){
    header('Location:index.php');
    exit();
}else{
    if($_SESSION['userLevel']==2){
        header('Location:ass.project.php');
        exit();
    }
}
include 'navbar_body.php';


?><br><br>

<?php if (isset($_GET['error'])) {
    if ($_GET['error'] == 'emptyfields') {
        echo '<div class="alert alert-danger" role="alert">
                                            <strong>Error: </strong> Remplissez tous les champs
                                          </div>';
    } elseif ($_GET['error'] == 'invalidmailuid') {
        echo '<div class="alert alert-danger" role="alert">
                                            <strong>Error: </strong> Veuillez entrer un mail et un nom d utilisateur valide
                                          </div>';
    } elseif ($_GET['error'] == 'invalidmail') {
        echo '<div class="alert alert-danger" role="alert">
                                            <strong>Error: </strong> Veuillez entrer un mail valide
                                          </div>';
    } elseif ($_GET['error'] == 'invaliduid') {
        echo '<div class="alert alert-danger" role="alert">
                                            <strong>Error: </strong> Veuillez entrer un nom d utilisateur valide
                                          </div>';
    } elseif ($_GET['error'] == 'passwordcheck') {
        echo '<div class="alert alert-danger" role="alert">
                                            <strong>Error: </strong> les deux mot de passe ne corresondent pas
                                          </div>';
    } elseif ($_GET['error'] == 'usertaken') {
        echo '<div class="alert alert-danger" role="alert">
                                            <strong>Error: </strong> Vous avez deja utiliser ce theme' .
            $_GET['theme'] .
            '
                                          </div>';
    } elseif ($_GET['error'] == 'invalidimagetype') {
        echo '<div class="alert alert-danger" role="alert">
                                            <strong>Error: </strong> Veuillez choisir le bon type de fichier Ex : pdf, docx
                                          </div>';
    } elseif ($_GET['error'] == 'imguploaderror') {
        echo '<div class="alert alert-danger" role="alert">
                                            <strong>Error: </strong> Erreur lors du telecharger de l image, veuillez reessayer
                                          </div>';
    } elseif ($_GET['error'] == 'imgsizeexceeded') {
        echo '<div class="alert alert-danger" role="alert">
                                            <strong>Erreur : </strong> taille de l image trop grande
                                          </div>';
    } elseif ($_GET['error'] == 'sqlerror') {
        echo '<div class="alert alert-danger" role="alert">
                                            <strong>Erreur : </strong> Contacter l\' admin pour plus d\'info
                                          </div>';
    }
} elseif (isset($_GET['signup']) == 'success') {
    echo '<div class="alert alert-success" role="alert">
                                        <strong>Sucess : </strong> Soumission du projet reussis
                                      </div>';
} ?>
<?php
$sql = 'select cat_id, cat_name from categories;';
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    die('sql error');
} else {
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if (mysqli_num_rows($result) == 0) {
        echo "<h5 class='text-center text-muted'>Aucun sujet creer avec" .
            'cette categorie</h5>';
    } else {
         ?>
<form method="post" action="../Backend/create.project.back.php" enctype="multipart/form-data">
    <div class="col-lg-6  fadeIn" style="margin-left: 25%;">
        <h1 style="margin-left: 30%;">Soumission de projet</h1>
        <div class="p-5 rounded contact-form">
            <div class="mb-4">
                <input type="text" class="form-control border-0 py-3" placeholder="Theme du projet" id="t_projet"
                    name="t_projet">
            </div>
            <div class="mb-4">
                <select class="form-control border-0 py-3" name="cat_project">
                    <?php while ($row = mysqli_fetch_assoc($result)) {
                        echo '<option value=' .
                            $row['cat_id'] .
                            '>' .
                            $row['cat_name'] .
                            '</option>';
                    } ?>
                </select><br><br>
                <?php
    }
}
?>
            </div>
            <div class="mb-4">
                <input type="file" id="imgInp" name='dp' class="form-control border-0 py-3" placeholder="Project">
            </div>
            <div class="mb-4">
                <textarea class="w-100 form-control border-0 py-3" name="descr_project" id="descr_project" rows="6"
                    cols="10" placeholder="Message"></textarea>
            </div>
            <div class="text-start">
                <input class="btn bg-primary text-white py-3 px-5" type="submit" value="Soumettre" name="sub_project"
                    id="projet">
            </div>
        </div>
    </div>
</form><br><br>
</body>
<script src="js/jquery.min.js"></script>
<script>
$('#blah').attr('src', 'uploads/default.png');

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
