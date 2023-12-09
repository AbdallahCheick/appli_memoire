<?php
$page = 7;
include 'header.php';
?>
<link rel="stylesheet" href="style.modal.css">
<style>
.hidden {
    display: none;
}
</style>
<main>
    <span class="text-center">
        <?php if (isset($_GET['error'])) {
            if ($_GET['error'] == 'emptyfields') {
                echo '<h5 class="text-danger">Veuillez remplir tous les champs</h5>';
            } elseif ($_GET['error'] == 'sqlerror') {
                echo '<h5 class="text-danger">Erreur : Veuillez contacter tous l\' admin</h5>';
            }
        }
//elseif (isset($_GET['operation']) == 'success') {
// echo '<h5 class="text-success">Forum creer avec Success</h5>';
//}
?>
    </span>
    <div class="page-header">
        <h1>Gestion des Forums</h1>
        <small>Accueil / Forums</small>
    </div><br><br>


    <button class="openBtn" id="click-me-btn" style="margin-left: 2%;"><i class="las la-plus-circle"></i>Ajouter un
        Forum
    </button> <br><br>

    <div id="form-template" class="hidden">
        <form method="post" action="../../Backend/create.forum.admin.back.php" id="requestResources">
            <h3 class="modalTitle">Ajout d'un forum</h3>
            <fieldset><br>
                <p class="inputTitle">Sujet du forum</p>
                <input type="text" name="sujet_forum" class="inputText" placeholder="Le sujet du forum" required>
            </fieldset>
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
            <fieldset>
                <p class="inputTitle">Categories du forum</p>
                <select class="inputText" name="cat_forum">
                    <?php while ($row = mysqli_fetch_assoc($result)) {
                        echo '<option value=' .
                            $row['cat_id'] .
                            '>' .
                            $row['cat_name'] .
                            '</option>';
                    } ?>
                </select><br><br>
            </fieldset>
            <?php
                }
            }
            ?>
            <fieldset>
                <p class="inputTitle">Contenu du blog</p>
                <textarea class="inputText" name="post_content" id="content" cols="30" rows="10"
                    placeholder="Contenus du sujet"></textarea>
            </fieldset>
            <fieldset>
                <button type="submit" class="requireBtn" name="create_forum" id="requestButton" tabindex="4">Ajouter
                    le forum</button>
            </fieldset>
        </form>
    </div>



    <div class="records table-responsive">
        <div>
            <table width="100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th><span class="las la-sort"></span> TITRE</th>
                        <th><span class="las la-sort"></span> AUTEUR</th>
                        <th><span class="las la-sort"></span> DATE</th>
                        <th><span class="las la-sort"></span> CATEGORIE</th>
                        <th><span class="las la-sort"></span> ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = 'SELECT * FROM topics ';
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
                                <div class="client-img bg-img" style="background-image: url(../img/cover_forum.png)">
                                </div>
                                <div class="client-info">
                                    <h4><?php echo substr(
                                        $row['topic_subject'],
                                        0,
                                        40
                                    ) . '...'; ?></h4>
                                    <!--<small>andrewbruno.com</small>-->
                                </div>
                            </div>
                        </td>
                        <?php
                        $sql =
                            'SELECT * FROM users where idUsers= ' .
                            $row['topic_by'] .
                            ' ;';
                        $resultat = $conn->query($sql);
                        if (!$result) {
                            die('Erreur dans la requête SQL: ' . $conn->error);
                        }

                        // Récupération du résultat
                        $rows = $resultat->fetch_assoc();
                        $auteur = $rows['l_name'] . ' ' . $rows['f_name'];
                        ?>
                        <td>
                            <?php echo $auteur; ?>

                        </td>
                        <td>
                            <?php echo $row['topic_date']; ?>
                        </td>

                        <?php
                        $idcat = $row['topic_cat'];
                        $sqlie = "SELECT * FROM categories
                                        WHERE cat_id = $idcat;
                                        ";
                        $resultats = $conn->query($sqlie);
                        if (!$resultats) {
                            die('Erreur dans la requête SQL: ' . $conn->error);
                        }

                        // Récupération du résultat
                        $rowss = $resultats->fetch_assoc();
                        $nom_cat = $rowss['cat_name'];
                        ?>

                        <td>
                            <?php echo $nom_cat; ?>
                        </td>
                        <td>
                            <div class="actions">
                                <a href="../../Backend/delete.forum.back.php?id=<?php echo $row[
                                    'topic_id'
                                ]; ?>&page=forum" class="delBtn">suprimer</a> <br><br>
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