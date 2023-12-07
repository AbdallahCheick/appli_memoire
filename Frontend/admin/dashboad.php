<?php
$page = 1;
include 'header.php';
?>
<main>

    <div class="page-header">
        <h1>Tableau de Bord</h1>
        <small>Accueil / Tableau de bord</small>
    </div>

    <div class="page-content">

        <div class="analytics">
            <?php
            $sql = "SELECT COUNT(*) as nb_user
                FROM users
                WHERE userLevel = 1;
                ";
            $result = $conn->query($sql);
            if (!$result) {
                die('Erreur dans la requête SQL: ' . $conn->error);
            }

            // Récupération du résultat
            $row = $result->fetch_assoc();
            $nb_user = $row['nb_user'];
            ?>

            <div class="card">
                <div class="card-head">
                    <h2><?php echo $nb_user; ?> </h2>
                    <span class="las la-user-friends"></span>
                </div>
                <div class="card-progress">
                    <small>Utilisateurs</small>
                    <div class="card-indicator">
                        <div class="indicator one" style="width: 60%"></div>
                    </div>
                </div>
            </div>

            <?php
            $sql = "SELECT COUNT(*) as nb_proj
                FROM projet;
                ";
            $result = $conn->query($sql);
            if (!$result) {
                die('Erreur dans la requête SQL: ' . $conn->error);
            }

            // Récupération du résultat
            $row = $result->fetch_assoc();
            $nb_proj = $row['nb_proj'];
            ?>
            <div class="card">
                <div class="card-head">
                    <h2><?php echo $nb_proj; ?> </h2>
                    <span class="las la-eye"></span>
                </div>
                <div class="card-progress">
                    <small>Projets</small>
                    <div class="card-indicator">
                        <div class="indicator two" style="width: 80%"></div>
                    </div>
                </div>
            </div>

            <?php
            $sql = "SELECT COUNT(*) as nb_inv
                FROM users
                WHERE userLevel = 2;
                ";
            $result = $conn->query($sql);
            if (!$result) {
                die('Erreur dans la requête SQL: ' . $conn->error);
            }

            // Récupération du résultat
            $row = $result->fetch_assoc();
            $nb_inv = $row['nb_inv'];
            ?>

            <div class="card">
                <div class="card-head">
                    <h2><?php echo $nb_inv; ?> </h2>
                    <span class="las la-shopping-cart"></span>
                </div>
                <div class="card-progress">
                    <small>Investisseurs</small>
                    <div class="card-indicator">
                        <div class="indicator three" style="width: 65%"></div>
                    </div>
                </div>
            </div>
            <?php
            $sql = "SELECT COUNT(*) as nb_blog
                FROM blogs;
                ";
            $result = $conn->query($sql);
            if (!$result) {
                die('Erreur dans la requête SQL: ' . $conn->error);
            }

            // Récupération du résultat
            $row = $result->fetch_assoc();
            $nb_blog = $row['nb_blog'];
            ?>
            <div class="card">
                <div class="card-head">
                    <h2><?php echo $nb_blog; ?> </h2>
                    <span class="las la-envelope"></span>
                </div>
                <div class="card-progress">
                    <small>Blogs</small>
                    <div class="card-indicator">
                        <div class="indicator four" style="width: 90%"></div>
                    </div>
                </div>
            </div>

        </div>


        <div class="records table-responsive">

            <div>
                <table width="100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th><span class="las la-sort"></span> EXPERT</th>
                            <th><span class="las la-sort"></span> THEME</th>
                            <th><span class="las la-sort"></span> EXPERT ENCADREUR</th>
                            <th><span class="las la-sort"></span> L'ETAT PROJET</th>
                            <th><span class="las la-sort"></span> ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#5035</td>
                            <td>
                                <div class="client">
                                    <div class="client-img bg-img" style="background-image: url(img/3.jpeg)">
                                    </div>
                                    <div class="client-info">
                                        <h4>Andrew Bruno</h4>
                                        <small>andrewbruno.com</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                Integration de l'ntranet a allakro

                            </td>
                            <td>
                                FRANCIS DUBOIS
                            </td>
                            <td>
                                Avancé
                            </td>
                            <td>
                                <div class="actions">
                                    <span class="lab la-telegram-plane"></span>
                                    <span class="las la-eye"></span>
                                    <span class="las la-ellipsis-v"></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#5036</td>
                            <td>
                                <div class="client">
                                    <div class="client-img bg-img" style="background-image: url(img/1.jpeg)">
                                    </div>
                                    <div class="client-info">
                                        <h4>Exty Bruno</h4>
                                        <small>extbruno@.com</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                Application de geston Hotelière
                            </td>
                            <td>
                                OCEANE TANOH
                            </td>
                            <td>
                                Moins Avancé
                            </td>
                            <td>
                                <div class="actions">
                                    <span class="lab la-telegram-plane"></span>
                                    <span class="las la-eye"></span>
                                    <span class="las la-ellipsis-v"></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#5038</td>
                            <td>
                                <div class="client">
                                    <div class="client-img bg-img" style="background-image: url(img/1.jpeg)">
                                    </div>
                                    <div class="client-info">
                                        <h4>DIB Bruno</h4>
                                        <small>exty@brunor.org</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                Innovation cybersécurité en Afrique
                            </td>
                            <td>
                                SORO KARIM
                            </td>
                            <td>
                                <span class="paid">Avancé</span>
                            </td>
                            <td>
                                <div class="actions">
                                    <span class="lab la-telegram-plane"></span>
                                    <span class="las la-eye"></span>
                                    <span class="las la-ellipsis-v"></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#5033</td>
                            <td>
                                <div class="client">
                                    <div class="client-img bg-img" style="background-image: url(img/3.jpeg)">
                                    </div>
                                    <div class="client-info">
                                        <h4>Andrew Charles</h4>
                                        <small>charles@andrew.org</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                Production de Texalab
                            </td>
                            <td>
                                FANCIS JUNIOR
                            </td>
                            <td>
                                Avancé
                            </td>
                            <td>
                                <div class="actions">
                                    <span class="lab la-telegram-plane"></span>
                                    <span class="las la-eye"></span>
                                    <span class="las la-ellipsis-v"></span>
                                </div>
                            </td>
                        </tr>



                        <tr>






                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>

    </div>

</main>

</div>
</body>

</html>