<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Connexion</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,600' rel='stylesheet' type='text/css'><link rel="stylesheet" href="./style.css">

</head>
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
        <form id="form-signup" method="post" onsubmit="return false;">
        <div class="form-element form-stack">
            <label for="username-signup" class="form-label">Nom de famille</label>
            <input id="username-signup" type="text" name="username" name="f_name" required>
          </div>
        <div class="form-element form-stack">
            <label for="username-signup" class="form-label">Username</label>
            <input id="username-signup" type="text" name="username">
          </div>
          <div class="form-element form-stack">
            <label for="email" class="form-label">Email</label>
            <input id="email" type="email" name="email">
          </div>
          <div class="form-element form-stack">
            <label for="password-signup" class="form-label">Mot de passe</label>
            <input id="password-signup" type="password" name="pwd" required>
          </div>
          <div class="form-element form-stack">
            <label for="password-signup" class="form-label">Confirmation de mot de passe</label>
            <input id="password-signup" type="password" name="pwd_re" required>
          </div>
          <div class="form-element form-checkbox">
            <input id="confirm-terms" type="checkbox" name="confirm" value="yes" class="checkbox">
            <label for="confirm-terms">I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></label>
          </div>
          <div class="form-element form-submit">
            <button id="signUp" class="signup" type="submit" name="signup">S'inscrire </button>
            <button id="goLeft" class="signup off">Se connecter</button> 
          </div>
        </form>
      </div>
    </div>







    <div class="right">
      <div class="content">
        <h2>Connexion</h2>
        <form id="form-login" method="post" onsubmit="return false;">
          <div class="form-element form-stack">
            <label for="username-login" class="form-label">Nom d'utilisateur</label>
            <input id="username-login" type="text" name="username">
          </div>
          <div class="form-element form-stack">
            <label for="password-login" class="form-label">Mot de passe</label>
            <input id="password-login" type="password" name="password">
          </div>
          <div class="form-element form-submit">
            <button id="logIn" class="login" type="submit" name="login">Se connecter</button>
            <button id="goRight" class="login off" name="signup">S'incrire</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/paper.js/0.11.3/paper-full.min.js'></script><script  src="./script.js"></script>

</body>
</html>
