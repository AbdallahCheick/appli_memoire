<?php

if (isset($_SESSION['userId'])) {
    header('Location: index.php');
    exit();
} ?>
<!-- header start-->
<?php include 'navbar.php'; ?>
<!-- header end-->
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
                                            <strong>Error: </strong> Ce nom d utilisateur est deja utilisé
                                          </div>';
    } elseif ($_GET['error'] == 'invalidimagetype') {
        echo '<div class="alert alert-danger" role="alert">
                                            <strong>Error: </strong> Veuillez choisir le bon type d image
                                          </div>';
    } elseif ($_GET['error'] == 'imguploaderror') {
        echo '<div class="alert alert-danger" role="alert">
                                            <strong>Error: </strong> Erreur lors du telecharger de l image, veuillez reessayer
                                          </div>';
    } elseif ($_GET['error'] == 'imgsizeexceeded') {
        echo '<div class="alert alert-danger" role="alert">
                                            <strong>Error: </strong> taille de l image trop grande
                                          </div>';
    } elseif ($_GET['error'] == 'sqlerror') {
        echo '<div class="alert alert-danger" role="alert">
                                            <strong>Website Error: </strong> Contacter l\' admin pour plus d\'info
                                          </div>';
    }
} elseif (isset($_GET['signup']) == 'success') {
    echo '<div class="alert alert-success" role="alert">
                                        <strong>Signup Successful</strong> Enregistrerment reussis connecter vous
                                      </div>';
} ?>

<h1 class="mt-5">Inscription</h1>

<form class="form-signin mt-4" method="post" action="../Backend/signup.back.php" enctype="multipart/form-data">
    <div class="form-row">
        <div class="form-group col-md-6">
            <input type="text" class="form-control" placeholder="Nom de famille" id="f_name" name="f_name" required>
        </div>
        <div class="form-group col-md-6">
            <input type="text" class="form-control" placeholder="Prenoms" id="l_name" name="l_name" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <input type="text" class="form-control" placeholder="Nom utilisateur" name="uid" id="uid" required>
        </div>
        <div class="form-group col-md-6">
            <input type="text" class="form-control" placeholder="Email" name="email" id="email" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <input type="password" class="form-control" placeholder="Mot de passe" name="pwd" id="pwd" required>
        </div>
        <div class="form-group col-md-6">
            <input type="password" class="form-control" placeholder="Confirmer le mot de passe" name="pwd_re"
                id="pwd_re" required>
        </div>
    </div>
    <div class="form-group">
        <label>Genre</label><br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="genre" value="Masculin" checked>
            <label class="form-check-label">M</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="genre" value="Feminin">
            <label class="form-check-label">F</label>
        </div>
    </div>
    <div class="form-group">
        <textarea class="form-control" name="bio_user" id="bio_user" rows="5" placeholder="Bio"></textarea>
    </div>
    <div class="form-group">
        <img id="blah" src="#" alt="your image" style="height: 200px; width: 190px;">
        <input type="file" class="form-control-file" id="imgInp" name="dp">
    </div>
    <button type="submit" class="btn btn-primary" name="sub_inp" id="signup">S'Inscrire</button>
    <br>
    <a href="login.php">Se connecter</a>
</form>
<!-- header start-->
<?php include 'footer.php'; ?>
<!-- header end-->
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