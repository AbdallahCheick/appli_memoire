<?php
$page = 6;
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
                echo '<h5 class="text-danger">*Remplissez tous le champs</h5>';
            } elseif ($_GET['error'] == 'titletaken') {
                echo '<h5 class="text-danger">Le titre existe deja</h5>';
            } elseif ($_GET['error'] == 'sqlerror') {
                echo '<h5 class="text-danger">* Erreur : Veuillez contacter l\' administrateur</h5>';
            }
        } elseif (isset($_GET['catcreation']) == 'success') {
            echo '<h5 class="text-success">Blog creer avec success</h5>';
        } ?>
    </span>
    <div class="page-header">
        <h1>Gestion des Blogs</h1>
        <small>Accueil / Blogs</small>
    </div><br><br>


    <button class="openBtn" id="click-me-btn" style="margin-left: 2%;"><i class="las la-plus-circle"></i>Ajouter un
        Blogs
    </button> <br><br>

    <div id="form-template" class="hidden">
        <form action="../../Backend/create.blog.admin.back.php" enctype="multipart/form-data" method="post"
            id="requestResources">
            <h3 class="modalTitle">Ajout d'un blog</h3>
            <fieldset><br>
                <p class="inputTitle">Titre du blog</p>
                <input type="text" name="btitle" id="title" class="inputText" placeholder="Le titre du blog" required>
            </fieldset>
            <fieldset>
                <p class="inputTitle">Photo illustrateur du blog</p>
                <input type="file" id="imgInp" name='dp' class="inputText" placeholder="Project" required>
            </fieldset>
            <fieldset>
                <p class="inputTitle">Contenu du blog</p>
                <textarea class="inputText" name="bcontent" id="content" cols="30" rows="10"
                    placeholder="Contenus du blog" required></textarea>
            </fieldset>
            <fieldset>
                <button type="submit" class="requireBtn" name="create_blog" id="requestButton" tabindex="4">Ajouter
                    le blog</button>
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
                        <th><span class="las la-sort"></span> ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = 'SELECT * FROM blogs ';
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
                                    'blog_img'
                                ]; ?>)">
                                </div>
                                <div class="client-info">
                                    <h4><?php echo substr(
                                        $row['blog_title'],
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
                            $row['blog_by'] .
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
                            <?php echo $row['blog_date']; ?>
                        </td>
                        <td>
                            <div class="actions">
                                <a href="../../Backend/delete.blog.back.php?id=<?php echo $row[
                                    'blog_id'
                                ]; ?>&page=blog" class="delBtn">suprimer</a> <br><br>
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