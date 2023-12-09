<?php
$page = 3;
include 'header.php';
?>
<link rel="stylesheet" href="style.modal.css">
<style>
.hidden {
    display: none;
}
</style>
<main>
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
    }
/**elseif (isset($_GET['signup']) == 'success') {
        echo '<div class="alert alert-success" role="alert">
                                        <strong>Signup Successful</strong> Enregistrerment reussis connecter vous
                                      </div>';
    } **/
?>
    <div class="page-header">
        <h1>Gestion des utilisateurs</h1>
        <small>Accueil / utilisateurs</small>
    </div><br><br>


    <button class="openBtn" id="click-me-btn" style="margin-left: 2%;"><i class="las la-plus-circle"></i>Ajouter un
        utilisateur
    </button> <br><br>

    <div id="form-template" class="hidden">
        <form action="../../Backend/signup.back.user.admin.php" method="post" enctype="multipart/form-data"
            id="requestResources">
            <h3 class="modalTitle">Ajout d'utilisateur</h3>
            <fieldset><br>
                <p class="inputTitle">Nom de famille Utilisateur</p>
                <input type="text" placeholder="Nom de famille" class="inputText" id="f_name" name="f_name" required>
            </fieldset>
            <fieldset>
                <p class="inputTitle">Prenoms utilisateur</p>
                <input type="text" placeholder="Prenoms" class="inputText" id="l_name" name="l_name" required>
            </fieldset>
            <fieldset>
                <p class="inputTitle">nom d'utilisateur</p>
                <input type="text" placeholder="Nom utilisateur" class="inputText" name="uid" id="uid" required>
            </fieldset>
            <fieldset>
                <p class="inputTitle">Email utilisateur</p>
                <input type="email" placeholder="Email" class="inputText" name="email" id="email" required>
            </fieldset>
            <fieldset>
                <p class="inputTitle">Mot de passe utilisateur</p>
                <input type="password" placeholder="Mot de passe" class="inputText" name="pwd" id="pwd" required>
            </fieldset>
            <fieldset>
                <p class="inputTitle">Mot de passe utilisateur</p>
                <input type="password" placeholder="Confirmer le mot de passe" class="inputText" name="pwd_re"
                    id="pwd_re" required>
            </fieldset>
            <fieldset>
                <p class="inputTitle">Genre utilisateur</p>
                <select name="genre" class="inputText">
                    <option value="Masculin">Masculin</option>
                    <option value="Feminin">Feminin</option>
                </select>
            </fieldset>
            <fieldset>
                <button type="submit" class="requireBtn" name="sub_inp" id="requestButton" tabindex="4">Ajouter
                    l'utilisateur</button>
            </fieldset>
        </form>
    </div>



    <div class="records table-responsive">
        <div>
            <table width="100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th><span class="las la-sort"></span> Nom et prenoms</th>
                        <th><span class="las la-sort"></span> EMAIL</th>
                        <th><span class="las la-sort"></span> GENRE</th>
                        <th><span class="las la-sort"></span> RÔLE</th>
                        <th><span class="las la-sort"></span> ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = 'SELECT * FROM users WHERE userLevel = 1 ';
                    // Exécution de la requête
                    $result = $conn->query($query);

                    // Vérification des erreurs d'exécution
                    if (!$result) {
                        die('Erreur dans la requête SQL: ' . $conn->error);
                    }
                    $i = 0;
                    // Affichage des résultats
                    while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php
                        $i += 1;
                        echo $i;
                        ?></td>
                        <td>
                            <div class="client">
                                <div class="client-img bg-img" style="background-image: url(../uploads/<?php echo $row[
                                    'userImg'
                                ]; ?>)">
                                </div>
                                <div class="client-info">
                                    <h4><?php echo $row['l_name'] .
                                        ' ' .
                                        $row['f_name']; ?></h4>
                                    <!--<small>andrewbruno.com</small>-->
                                </div>
                            </div>
                        </td>
                        <td>
                            <?php echo $row['emailUsers']; ?>

                        </td>
                        <td>
                            <?php if ($row['gender'] === 'M') {
                                echo 'Masculin';
                            } else {
                                echo 'Feminin';
                            } ?>
                        </td>
                        <td>
                            <?php if ($row['userLevel'] == 1) {
                                echo 'Utilisateur';
                            } elseif ($row['userLevel'] == 2) {
                                echo 'Investisseur';
                            } else {
                                echo 'Administrateur';
                            } ?>
                        </td>
                        <td>
                            <div class="actions">
                                <a href="../../Backend/delete.users.back.php?id=<?php echo $row[
                                    'idUsers'
                                ]; ?>&page=user" class="delBtn">suprimer</a> <br><br>
                            </div>
                        </td>
                    </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</main>
</div>
</body>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/sweetalert@2.0.8/dist/sweetalert.min.js'></script>
<script>
var formTemplate = $('#form-template > form').clone()[0];
$('#form-template').remove();

// prepare SweetAlert configuration
var swalConfig = {
    content: formTemplate,
    button: {
        text: 'Annuler'
    }
};

$('#click-me-btn').click(function() {
    swal(swalConfig);
});
</script>

</html>