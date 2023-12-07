    <?php include 'navbar.php'; ?>





    <?php
    if (!isset($_SESSION['userId'])) {
        header('Location: login.php');
        exit();
    }

    if (isset($_GET['id'])) {
        $projetId = $_GET['id'];
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
        die('SQL error');
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
    <!-- Page Header End -->
    <img class="blog-cover" src="img/projet.jpg">

    <img class="blog-author" src="uploads/<?php echo $row['userImg']; ?>">
    <h1><?php echo ucwords($row['projet_theme']); ?></h1>
    <p class="text-justify"><?php echo $row['projet_descr']; ?></p>
    <p class="text-muted">Auteur: <?php echo ucwords($row['uidUsers']); ?></p>

    <?php if (!empty($row['file'])) {
        echo '<a href="download.php?file=' .
            $row['projet_file'] .
            '">Télécharger le fichier PDF du projet</a>';
    } ?>

    <?php include 'footer.php'; ?>
