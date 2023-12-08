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

    <div class="records table-responsive">
        <div>
            <table width="100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th><span class="las la-sort"></span> THEME</th>
                        <th><span class="las la-sort"></span> DATE</th>
                        <th><span class="las la-sort"></span> AUTEUR</th>
                        <th><span class="las la-sort"></span> CATEGORIE</th>
                        <th><span class="las la-sort"></span> STATUT</th>
                        <th><span class="las la-sort"></span> SOMMETTRE</th>
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



                    <?php
                    $pro_id = $row['projet_id'];
                    $req = 'SELECT * FROM users WHERE userLevel = 2;';
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $req)) {
                        die('sql error');
                    } else {
                        mysqli_stmt_execute($stmt);
                        $res = mysqli_stmt_get_result($stmt);
                        if (mysqli_num_rows($res) == 0) {
                            echo "<h5 class='text-center text-muted'>Aucun sujet creer avec" .
                                'cette categorie</h5>';
                        } else {
                             ?>

                    <div class="modal">
                        <button class="closeModal" tabindex="5"></button>
                        <form action="assign.projet.php" method='post' enctype="multipart/form-data">
                            <h2 class="modalTitle">Assignation des projets</h2>
                            <fieldset>
                                <?php
                                $quer = 'SELECT * FROM projet';
                                // Exécution de la requête
                                $resul = $conn->query($quer);

                                // Vérification des erreurs d'exécution
                                if (!$resul) {
                                    die(
                                        'Erreur dans la requête SQL: ' .
                                            $conn->error
                                    );
                                }
                                $r = $resul->fetch_assoc();
                                ?>
                                <p class="inputTitle">Id projet</p>
                                <input type="text" value="<?php echo $row[
                                    'projet_id'
                                ]; ?>">
                            </fieldset>
                            <fieldset>
                                <p class="inputTitle">Investisseur</p>
                                <select class="inputText" name="inv_pro">
                                    <?php while (
                                        $ligne = mysqli_fetch_assoc($res)
                                    ) {
                                        echo '<option value=' .
                                            $ligne['idUsers'] .
                                            '>' .
                                            $ligne['f_name'] .
                                            '</option>';
                                    } ?>
                                </select><br><br>
                                <?php
                        }
                    }
                    ?>
                            </fieldset>
                            <fieldset>
                                <button type="submit" class="requireBtn" name="requestButton"
                                    tabindex="4">Assigné</button>
                            </fieldset>
                        </form>
                    </div>




                    <tr>
                        <td><?php echo $pro_id; ?></td>
                        <td>
                            <div class="client">
                                <div class="client-img bg-img" style="background-image: url(img/3.jpeg)">
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
                            } elseif ($statut == 2) {
                                echo '<div style="width:30px; height:30px; background-color:orange;border-radius: 100% 100% 100% 100%;"></div>';
                            } else {
                                echo '<div style="width:30px; height:30px; background-color:green;border-radius: 100% 100% 100% 100%;"></div>';
                            }
                            ?>

                        </td>
                        <td>
                            <div class="actions">
                                <button class="openBtn openModal">Assigné le projet</button>
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
<script src="../../dist/script.js"></script>

</html>