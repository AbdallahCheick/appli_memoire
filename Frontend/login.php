<?php

function strip_bad_chars($input)
{
    $output = preg_replace('/[^a-zA-Z0-9_-]/', '', $input);
    return $output;
}

if (isset($_SESSION['userId'])) {
    header('Location: index');
    exit();
}
?>
<!-- header start-->
<?php include 'navbar.php';

include 'navbar_body.php'; ?>

<!-- header end-->
<?php if (isset($_GET['error'])) {
    if ($_GET['error'] == 'emptyfields') {
        echo '<div class="alert alert-danger" role="alert">
                                    <strong>Erreur: </strong>Veuillez renseigner les champs
                                  </div>';
    } elseif ($_GET['error'] == 'nouser') {
        echo '<div class="alert alert-danger" role="alert">
                                    <strong>Error: </strong>Nom d\'utilisateur n existe pas
                                  </div>';
    } elseif ($_GET['error'] == 'wrongpwd') {
        echo '<div class="alert alert-danger" role="alert">
                            <strong>Erreur: </strong>Mauvais mot de passe - 
                            <a href="reset-pwd" class="alert-link">Mot de passe oublié?</a>
                                  </div>';
    } elseif ($_GET['error'] == 'sqlerror') {
        echo '<div class="alert alert-danger" role="alert">
                                    <strong>Erreur: </strong>Erreur contacter l admin pour plus d info
                                  </div>';
    }
} elseif (isset($_GET['newpwd'])) {
    if ($_GET['newpwd'] == 'passwordupdated') {
        echo '<div class="alert alert-success" role="alert">
                                    <strong>mot de passe mis a jour </strong>Connecté vous avec votre mot de passe
                                  </div>';
    }
} ?>
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
<!--<form method="post" action="../Backend/login.back">
    <input type="text" name="user" id="user" placeholder="nom d'utilisateur">
    <input type="password" name="pwd" id="pwd" placeholder="mot de passe">
    <input type="submit" name="sub_log" value="valider">
</form>-->

 
<?php include 'th/formulaire.php'; ?>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
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

<!-- header start-->
<?php include 'footer.php'; ?>
<!-- header end-->