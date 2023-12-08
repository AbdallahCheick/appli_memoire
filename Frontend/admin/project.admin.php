<?php
$page = 5;
include 'header.php';
?>

<link rel="stylesheet" href="style.modal.css">
<main>

    <div class="page-header">
        <h1>Gestion des projets</h1>
        <small>Accueil / Projets</small>
    </div><br><br>

    <button class="openBtn" id="openModal" style="margin-left: 2%;">Assigner un projet</button> <br><br>

    <section class="container">
        <div class="modal" id="myModal">
            <button class="closeModal" id="closeModal" tabindex="5"></button>
            <form action="assign.projet.php" method='post' enctype="multipart/form-data" id="requestResources">
                <h3 class="modalTitle">Assignation</h3>
                <?php
                $sql = 'SELECT projet_id, projet_theme FROM projet;';
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    die('sql error');
                } else {
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                    if (mysqli_num_rows($result) == 0) {
                        echo "<h5 class='text-center text-muted'>Aucun projet</h5>";
                    } else {
                        ?>
                        <fieldset><br>
                            <p class="inputTitle">Projet</p>
                            <select class="inputText" name="projet_id">
                                <?php while ($row = mysqli_fetch_assoc($result)) {
                                    echo '<option value=' .
                                        $row['projet_id'] .
                                        '>' .
                                        $row['projet_theme'] .
                                        '</option>';
                                } ?>
                            </select><br><br>
                            <?php
                        }
                    }
                    ?>
                        </fieldset>

                        <?php
                        $sql = 'SELECT idUsers, f_name, l_name FROM users WHERE userLevel = 2;';
                        $stmt = mysqli_stmt_init($conn);
                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                            die('sql error');
                        } else {
                            mysqli_stmt_execute($stmt);
                            $result = mysqli_stmt_get_result($stmt);
                            if (mysqli_num_rows($result) == 0) {
                                echo "<h5 class='text-center text-muted'>Aucun Expert</h5>";
                            } else {
                                ?>
                                <fieldset><br>
                                    <p class="inputTitle">Investisseur</p>
                                    <select class="inputText" name="projet_ass">
                                        <?php while ($row = mysqli_fetch_assoc($result)) {
                                            echo '<option value=' .
                                                $row['idUsers'] .
                                                '>' .
                                                $row['f_name'] . ' ' . $row['l_name'] .
                                                '</option>';
                                        } ?>
                                    </select><br><br>
                                    <?php
                                }
                            }
                            ?>
                                </fieldset>
                                <fieldset>
                                    <button class="requireBtn" name="requestButton" id="requestButton" tabindex="4">Assigné</button>
                                </fieldset>
            </form>
        </div>
    </section>

    <div class="records table-responsive">
        <div>
            <table width="100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th><span class="las la-sort"></span> THEME</th>
                        <th><span class="las la-sort"></span> DATE</th>
                        <th><span class="las la-sort"></span> AUTEUR</th>
                        <th><span class="las la-sort"></span> INVESTISSEUR </th>
                        <th><span class="las la-sort"></span> CATEGORIE</th>
                        <th><span class="las la-sort"></span> STATUT</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = 'SELECT * FROM projet';
                    // Exécution de la requête
                    $result = $conn->query($query);

                    // Vérification des erreurs d'exécution
                    if (!$result) {
                        die('Erreur dans la requête SQL: ' . $conn->error);
                    }

                    // Affichage des résultats
                    while ($row = $result->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $row['projet_id']; ?></td>
                            <td>
                                <div class="client">
                                    <div class="client-img bg-img" style="background-image: url(img/4.jpg)">
                                    </div>
                                    <div class="client-info">
                                        <h4><?php echo $row['projet_theme']; ?></h4>
                                        <small><?php echo $row[
                                            'projet_descr'
                                        ]; ?></small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <?php echo $row['projet_date']; ?>

                            </td>
                            <?php
                            $id = $row['projet_by'];
                            $sqli = "SELECT * FROM users
                                        WHERE idUsers = $id;
                                        ";
                            $resultat = $conn->query($sqli);
                            if (!$resultat) {
                                die('Erreur dans la requête SQL: ' . $conn->error);
                            }

                            // Récupération du résultat
                            $rows = $resultat->fetch_assoc();
                            $nom_user = $rows['f_name'];
                            ?>
                            <td>
                                <?php echo $nom_user . ' ' . $rows['l_name']; ?>
                            </td>

                            <?php
                            $iden = $row['projet_ass'];
                            if($iden){
                            $sqlimy = "SELECT * FROM users
                                        WHERE idUsers = $iden;
                                        ";
                            $resulta = $conn->query($sqlimy);
                            if (!$resulta) {
                                die('Erreur dans la requête SQL: ' . $conn->error);
                            }

                            // Récupération du résultat
                            $ral = $resulta->fetch_assoc();
                            $nom = $ral['f_name'];
                            $prenom=$ral['l_name'];
                            }else{
                                $nom = "Aucun";
                                $prenom = "";
                            }
                            ?>
                            <td>
                                <?php echo $nom . ' ' . $prenom ?>
                            </td>

                            <?php
                            $idcat = $row['projet_cat'];
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

                                <?php
                                $statut = $row['projet_statut'];
                                if ($statut == 0) {
                                    echo '<div style="width:30px; height:30px; background-color:red;border-radius: 100% 100% 100% 100%;"></div>';
                                } elseif ($statut == 1) {
                                    echo '<div style="width:30px; height:30px; background-color:orange;border-radius: 100% 100% 100% 100%;"></div>';
                                } else {
                                    echo '<div style="width:30px; height:30px; background-color:green;border-radius: 100% 100% 100% 100%;"></div>';
                                }
                                ?>

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
<script src="script.modal.js"></script>

</html>
