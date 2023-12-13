    <?php include 'navbar.php'; ?>
    <?php
    if (!isset($_SESSION['userId'])) {
        header('Location: login.php');
        exit();
    }

    if (isset($_GET['id'])) {
        $projetId = decoder($_GET['id']);
    } else {
        header('Location: index.php');
        exit();
    }
    ?>

    <?php
    $sql = "SELECT *, projet.projet_file as file FROM projet, users 
        WHERE projet_id = ? 
        AND projet.projet_by = users.idUsers";

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        die('SQL error error');
    } else {
        mysqli_stmt_bind_param($stmt, 's', $projetId);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        $row = mysqli_fetch_assoc($result);
    }
    ?>
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Projet</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="project.php">Projet</a></li>
                    <li class="breadcrumb-item" aria-current="page"> <?php echo $row[
                        'projet_theme'
                    ]; ?> </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <br><br>
                <h1>Statut</h1>
                <?php
                    $statut = $row['projet_statut'];
                    if ($statut == 0) {
                        echo '<div style="width:100px; height:100px; background-color:red;border-radius: 100% 100% 100% 100%;"></div>';
                    } elseif ($statut == 1) {
                        echo '<div style="width:100px; height:100px; background-color:orange;border-radius: 100% 100% 100% 100%;"></div>';
                    } else {
                        echo '<div style="width:100px; height:100px; background-color:green;border-radius: 100% 100% 100% 100%;"></div>';
                    }
                ?>
            </div>

            <div class="col-md-6">
                <summary>
                    <h3><?php echo ucwords($row['projet_theme']); ?></h3>
                    <div class="blog-date">Crée le  : <?php echo $row[
                        'projet_date']; ?></div>
                    <br>
                </summary>
                <p><?php echo nl2br($row['projet_descr']); ?></p><br><br>
                <?php if (!empty($row['file'])) {
        echo '<a href="download.php?file=' .
            $row['projet_file'] .
            '" class="btn btn-primary py-3 px-5" >Télécharger le projet </a>';
    } ?>
            </div>
            
            <div class="col-md-4">
                <div class="sidebar-box">
                    <img style="width: 15%; height: 15%;" src="uploads/<?php echo $row[
                        'userImg'
                    ]; ?>" alt="Image placeholder" class="img-fluid mb-4 w-50 rounded-circle">
                    <h3 class="text-black">Auteur: <?php echo ucwords(
                        $row['uidUsers']
                    ); ?></h3>
                    <p><?php echo ucwords($row['bio']); ?></p>
                    <?php if($_SESSION['userLevel'] ==2){?>
                    <p><a href="../Backend/submit.project.back.php?statut=2&id=<?php echo $row['projet_id']; ?>" class="btn btn-success py-3 px-5 ">Valider le projet</a></p>
                    <?php } ?>
                </div>
            </div>
            
        </div>

    </div><br><br>



    <?php include 'footer.php'; ?>
