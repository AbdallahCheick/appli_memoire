<?php include 'header.login.php'; ?>
<div class="main-box">
    <div class="slider-cont">
        <div class="signup-slider">
            <div class="img-txt">
                <div class="img-layer"></div>
                <h1>Notre plateforme dédiée à la soumission de projets offre aux entrepreneurs un espace intuitif et
                    efficace pour présenter leurs idées novatrices.</h1>
                <img src="the/cov1.png" />
            </div>
            <div class="img-txt">
                <div class="img-layer"></div>
                <h1>
                    Facilitez le processus de proposition de projets avec notre site web spécialisé, offrant aux
                    entrepreneurs un moyen convivial de partager et de concrétiser leurs visions.</h1>
                <img src="the/cov2.png" />
            </div>
            <div class="img-txt">
                <div class="img-layer"></div>
                <h1>Rejoignez nous</h1>
                <img src="the/cov3.png" />
            </div>
        </div>
    </div>


    <div class="form-cont">

        <div class="top-buttons">
            <button class="to-signup ">
                S'inscrire
            </button>
            <button class="to-signin top-active-button">
                Se connecter
            </button>
        </div>

        <div class="form form-signup">
            <form action="../Backend/signup.back.php" method="post" enctype="multipart/form-data">
                <div class="input-group">
                    <div class="wrap wrap-first">
                        <lable>Nom de famille</lable>
                        <input type="text" placeholder="Nom de famille" id="f_name" name="f_name" required>
                    </div>
                    <div class="wrap">
                        <lable>Prenoms</lable>
                        <input type="text" placeholder="Prenoms" id="l_name" name="l_name" required>
                    </div>
                </div>
                <div class="input-group">
                    <div class="wrap wrap-first">
                        <lable>Nom d'utilisateur</lable>
                        <input type="text" placeholder="Nom utilisateur" name="uid" id="uid" required>
                    </div>
                    <div class="wrap">
                        <lable>Email</lable>
                        <input type="email" placeholder="Email" name="email" id="email" required>
                    </div>
                </div>
                <div class="input-group">
                    <div class="wrap wrap-first">
                        <lable>Mot de passe</lable>
                        <input type="password" placeholder="Mot de passe" name="pwd" id="pwd" required>
                    </div>
                    <div class="wrap">
                        <lable>Confirmation mot de passe</lable>
                        <input type="password" placeholder="Confirmer le mot de passe" name="pwd_re" id="pwd_re"
                            required>
                    </div>
                </div>
                <lable>Genre</lable><br>
                <div class="input-group">

                    <div class="wrap wrap-first">
                        <label class="lab-radio">
                            <input type="radio" class="option-input radio" name="genre" value="Masculin" id="masc"
                                checked />
                            Masculin
                        </label>
                    </div>
                    <div class="wrap">
                        <label class="lab-radio">
                            <input type="radio" class="option-input radio" name="genre" value="Feminin" id="fem" />
                            Feminin
                        </label><br>
                    </div>
                </div><br>
                <div class="input-group">
                    <div class="wrap wrap-first">
                        <lable>Biographie</lable>
                        <textarea name="bio_user" id="bio_user" rows="1" placeholder="Bio"></textarea>
                    </div>
                    <div class="wrap">
                        <input type="file" id="imgInp" name='dp'>
                    </div>

                </div>
                <input type="submit" class="form-btn" name="sub_inp" value="S'inscrire" />
                <br>
            </form>
        </div>

        <div class="form form-signin">
            <form method="post" action="../Backend/login.back.php">
                <lable>Nom d'utilisateur</lable>
                <input type="text" name="user" id="user" placeholder="Entrer votre Nom d'utilisateur">
                <lable>Mot de passe</lable>
                <input type="password" name="pwd" id="pwd" placeholder="Entrer votre mot de passe">
                <input type="submit" class="form-btn" name="sub_log" value="Se connecter" />
                <br><br>
                <a href="#" class="lined-link to-signup-link">Creer un nouveau compte</a>
            </form>
        </div>
    </div>
    <div class="clear-fix"></div>
</div>
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