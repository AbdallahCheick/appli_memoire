<?php
$page = 5;
include 'header.php';
?>

<main>

    <div class="page-header">
        <h1>Gestion des projets</h1>
        <small>Accueil / Projets</small>
    </div>

    <div class="page-content">

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
                        <tr>
                            <td><?php echo $row['projet_id']; ?></td>
                            <td>
                                <div class="client">
                                    <div class="client-img bg-img" style="background-image: url(img/3.jpeg)">
                                    </div>
                                    <div class="client-info">
                                        <h4><?php echo $row[
                                            'projet_theme'
                                        ]; ?></h4>
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
                            $id = $row['projet_id'];
                            $sqli = "SELECT * FROM users
                                                WHERE idUsers = $id;
                                                ";
                            $resultat = $conn->query($sqli);
                            if (!$resultat) {
                                die(
                                    'Erreur dans la requête SQL: ' .
                                        $conn->error
                                );
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
                                die(
                                    'Erreur dans la requête SQL: ' .
                                        $conn->error
                                );
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
                                } else {
                                    echo '<div style="width:30px; height:30px; background-color:green;border-radius: 100% 100% 100% 100%;"></div>';
                                }
                                ?>

                            </td>
                            <td>
                                <div class="actions">
                                    <a href="project.page.admin.php?id=<?php echo $row[
                                        'projet_id'
                                    ]; ?>
                            " class="text-center">Assigné le projet</a>
                                </div>
                            </td>
                        </tr>

                        <?php }
                        ?>


                    </tbody>
                </table>
            </div>

        </div>

    </div>

</main>

</div>
</body>

</html>