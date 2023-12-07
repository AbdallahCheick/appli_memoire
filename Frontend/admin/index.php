<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="./style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
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
                            <a href="reset-pwd.php" class="alert-link">Mot de passe oublié?</a>
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
                                        <strong>Inscription reussis</strong> connecter vous
                                      </div>';
} ?>

<body>
    <div id="back">
        <canvas id="canvas" class="canvas-back"></canvas>
        <div class="backRight">
        </div>
        <div class="backLeft">
        </div>
    </div>

    <div id="slideBox">
        <div class="topLayer">
            <div class="left">
                <div class="content">
                    <h2>Incription</h2>
                    <form id="form-signup" action="../../Backend/signup.admin.back.php" method="post"
                        enctype="multipart/form-data">
                        <div class="form-element form-stack">
                            <label for="username-signup" class="form-label">Nom de famille</label>
                            <input id="username-signup" type="text" name="f_name" required>
                        </div>
                        <div class="form-element form-stack">
                            <label for="username-signup" class="form-label">Prenoms</label>
                            <input id="username-signup" type="text" name="l_name" required>
                        </div>
                        <div class="form-element form-stack">
                            <label for="username-signup" class="form-label">Nom d'utilisateur</label>
                            <input id="username-signup" type="text" name="uid" required>
                        </div>
                        <div class="form-element form-stack">
                            <label for="email" class="form-label">Email</label>
                            <input id="email" type="email" name="email" required>
                        </div>
                        <div class="form-element form-stack">
                            <label for="password-signup" class="form-label">Mot de passe</label>
                            <input id="password-signup" type="password" name="pwd" required>
                        </div>
                        <div class="form-element form-stack">
                            <label for="password-signup" class="form-label">Confirmation de mot de passe</label>
                            <input id="password-signup" type="password" name="pwd_re" required>
                        </div>
                        <label class="form-label">Genre</label><br>
                        <div class="input-group">

                            <div class="wrap wrap-first">
                                <label class="lab-radio">
                                    <input type="radio" class="option-input radio" name="genre" value="Masculin"
                                        id="masc" checked />
                                    Masculin
                                </label>
                            </div>
                            <div class="wrap">
                                <label class="lab-radio">
                                    <input type="radio" class="option-input radio" name="genre" value="Feminin"
                                        id="fem" />
                                    Feminin
                                </label><br>
                            </div>
                        </div>
                        <div class="form-element form-stack">
                            <label for="username-signup" class="form-label">Biographie</label><br>
                            <textarea name="bio_user" id="bio_user" rows="1"></textarea>
                        </div>
                        <div class="form-element form-stack">
                            <label for="username-signup" class="form-label">Photo</label><br>
                            <input type="file" id="imgInp" name='dp'>
                        </div>

                        <div class="form-element form-submit">
                            <input type="submit" class="form-btn" name="sub_inp" value="S'inscrire" />
                            <button id="signUp" class="signup" type="submit" name="sub_inp">S'inscrire </button>
                            <button id="goLeft" class="signup off">Se connecter</button>
                        </div>
                    </form>
                </div>
            </div>







            <div class="right">
                <div class="content">
                    <h2>Connexion</h2>
                    <form id="form-login" method="post" action="../../Backend/login.admin.back.php">
                        <div class="form-element form-stack">
                            <label for="username-login" class="form-label">Nom d'utilisateur</label>
                            <input id="username-login" type="text" name="user">
                        </div>
                        <div class="form-element form-stack">
                            <label for="password-login" class="form-label">Mot de passe</label>
                            <input id="password-login" type="password" name="pwd">
                        </div>
                        <div class="form-element form-submit">
                            <button id="logIn" class="login" type="submit" name="sub_log">Se connecter</button>
                            <button id="goRight" class="login off" name="signup">S'incrire</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/paper.js/0.11.3/paper-full.min.js'></script>
    <script src="./script.js"></script>

</body>

</html>