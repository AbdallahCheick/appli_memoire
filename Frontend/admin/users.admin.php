<?php
$page = 3;
include 'header.php'; ?>

<main>
<div class="page-header">
    <h1>Gestion des utilisateurs</h1>
    <small>Accueil / utilisateurs</small>
</div><br><br>
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
                        $query = 'SELECT * FROM users ';
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
                            <td><?php $i +=1; echo $i;?></td>
                            <td>
                                <div class="client">
                                    <div class="client-img bg-img" style="background-image: url(../uploads/<?php echo $row['userImg'] ?>)">
                                    </div>
                                    <div class="client-info">
                                        <h4><?php echo $row['l_name'].' '.$row['f_name'] ?></h4>
                                        <!--<small>andrewbruno.com</small>-->
                                    </div>
                                </div>
                            </td>
                            <td>
                            <?php echo $row['emailUsers'] ?>

                            </td>
                            <td>
                            <?php if ($row['gender'] === 'M'){
                                    echo "Masculin";
                                }else{
                                    echo "Feminin";
                                }
                                ?>
                            </td>
                            <td>
                                <?php if ($row['userLevel'] == 1){
                                        echo "Utilisateur standard";
                                    }elseif($row['userLevel'] == 2){
                                        echo "Investisseur";
                                    }else{
                                        echo "Administrateur";
                                    }
                                    ?>
                            </td>
                            <td>
                                <div class="actions">
                                    <span class="lab la-telegram-plane"></span>
                                    <span class="las la-eye"></span>
                                    <span class="las la-ellipsis-v"></span>
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
