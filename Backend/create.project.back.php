<?php
if (isset($_POST['sub_project'])) {
    session_start();
    require 'connexion.php';

    // Recuperation des variables
    $theme = $_POST['t_projet'];
    $cat_project = $_POST['cat_project'];
    $descr_project = $_POST['descr_project'];

    // Verification des erreurs lors de la creation
    if (empty($theme) || empty($cat_project) || empty($descr_project)) {
        header(
            'Location: ../Frontend/create.project.php?error=emptyfields&uid=' .
                $theme .
                '&mail=' .
                $descr_project
        );
        exit();
    } else {
        //voir si le titre n'eiste pas deja
        $sql =
            'select projet_theme from projet where projet_theme=? AND projet_by=?;';
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header('Location: ../Frontend/create.project.php?error=sqlerror');
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, 'ss', $theme, $_SESSION['userId']);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                header(
                    'Location: ../Frontend/create.project.php?error=usertaken&theme=' .
                        $theme
                );
                exit();
            } else {
                $FileNameNew = 'default.pdf';
                include 'upload.pdf.back.php';

                $sql =
                    'INSERT INTO projet (projet_theme, projet_date, projet_cat, projet_by, projet_descr, projet_file) ' .
                    'VALUES (?, NOW(), ?, ?, ?, ?)';

                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header(
                        'Location: ../Frontend/create.project.php?error=sqlerror'
                    );
                    exit();
                } else {
                    mysqli_stmt_bind_param(
                        $stmt,
                        'sssss',
                        $theme,
                        $cat_project,
                        $_SESSION['userId'],
                        $descr_project,
                        $FileNameNew
                    );
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);

                    header(
                        'Location: ../Frontend/create.project.php?signup=success'
                    );
                    exit();
                }
            }
        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    header('Location: ../Frontend/create.project.php');
    exit();
}
?>
