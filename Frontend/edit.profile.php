<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
include 'navbar.php';

include 'navbar_body.php';

define('TITLE', 'modifier le profil');

if (!isset($_SESSION['userId'])) {
    header('Location: login');
    exit();
}
?>

<body><br><br>
    <div>
        <img class="profile-img" id="blah" src="#" style="margin-left: 45%;" width="150" height="150" alt="">
    </div>
    <form form action="../Backend/profile.update.back" method='post' enctype="multipart/form-data">
        <label class="btn btn-primary">
            Changer la photo de profil <input type="file" id="imgInp" name='dp' hidden>
        </label>
        <div class="form-row">
            <div class=" form-group col-md-6">
                <label for="inputEmail4">Nom</label>
                <input type="text" class="form-control" name="f-name" value="<?php echo $_SESSION[
                    'f_name'
                ]; ?>">
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">prenoms</label>
                <input type="text" class="form-control" name="l-name" value="<?php echo $_SESSION[
                    'l_name'
                ]; ?>">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">email</label>
                <input type="text" class="form-control" name="email" value="<?php echo $_SESSION[
                    'emailUsers'
                ]; ?>">
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">bio</label>
                <textarea name="bio" class="form-control" id="" cols="30" rows="2"><?php echo $_SESSION[
                    'bio'
                ]; ?></textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12" style="border-bottom: 2px solid grey;padding-bottom: 30px;">
                <label for="inputEmail4">Sexe</label>
                <select class="form-select" name="gender" aria-label="Default select example">
                    <option selected><?php
                    if ($_SESSION['genre'] === 'M') {
                        echo 'Masculin';
                    }
                    if ($_SESSION['genre'] === 'F') {
                        echo 'Feminin';
                    }
                    ?></option>
                    <?php if ($_SESSION['genre'] === 'M') {
                        echo '<option value="F">Feminin</option>';
                    } else {
                        echo '<option value="M">Masculin</option>';
                    } ?>
                </select>
            </div>
        </div>
        <label class="col-md-12" style="margin-left: 42%; display: block;">Modifier du mot de passe</label>
        <div class="form-group col-md-12">
            <label for="inputEmail4">Mot de passe actuel</label>
            <input type="text" class="form-control" name="old-pwd" placeholder="Mot de passe actuel">
        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">Nouveau Mot de passe</label>
            <input type="text" class="form-control" name="pwd" placeholder="Nouveau mot de passe">
        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">Confirmation du mot de passe</label>
            <input type="text" class="form-control" name="pwd-repeat" placeholder="Confirmation du mot de passe">
        </div>
        <input type="submit" value="Mettre à jour" class="btn btn-primary"
            style="margin-left: 46.5%;margin-top: 1%;margin-bottom: 5%;" name="update-profile">
    </form>
</body>
<script src="js/jquery.min.js"></script>
<?php include 'footer.php'; ?>
<script>
var dp = '<?php echo $_SESSION['userImg']; ?>';

$('#blah').attr('src', 'uploads/' + dp);

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

</html>