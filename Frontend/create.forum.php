<?php include 'navbar.php';

include 'navbar_body.php'; ?>
<span class="text-center">
    <?php if (isset($_GET['error'])) {
        if ($_GET['error'] == 'emptyfields') {
            echo '<h5 class="text-danger">Veuillez remplir tous les champs</h5>';
        } elseif ($_GET['error'] == 'sqlerror') {
            echo '<h5 class="text-danger">Erreur : Veuillez contacter tous l\' admin</h5>';
        }
    } elseif (isset($_GET['operation']) == 'success') {
        echo '<h5 class="text-success">Forum creer avec Success</h5>';
    } ?>
</span>

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
<br><br>
<form method="post" action="../Backend/create.forum.back.php">
    <div class="col-lg-6  fadeIn" style="margin-left: 25%;">
        <h1 style="margin-left: 30%;">Création de Forum</h1>
        <div class="p-5 rounded contact-form">
            <div class="mb-4">
                <input type="text" name="sujet_forum" class="form-control border-0 py-3"
                    placeholder="Le sujet du forum">
            </div>
            <div class="mb-4">
                <select class="form-control" name="cat_forum">
                    <?php while ($row = mysqli_fetch_assoc($result)) {
                        echo '<option value=' .
                            $row['cat_id'] .
                            '>' .
                            $row['cat_name'] .
                            '</option>';
                    } ?>
                </select><br><br>
            </div>
            <div class="mb-4">
                <textarea class="w-100 form-control border-0 py-3" name="post_content" id="content" cols="30" rows="10"
                    placeholder="Contenus du sujet"></textarea>
            </div>
            <div class="text-start">
                <input class="btn bg-primary text-white py-3 px-5" type="submit" value="Creer un forum"
                    name="create_forum">
            </div>
        </div>
    </div>
</form><br><br>

<?php
    }
}
?>
<?php include 'footer.php'; ?>
