<?php

if (isset($_POST['sub_log'])) {
    include 'connexion.php';

    $mailuid = $_POST['user'];
    $password = $_POST['pwd'];

    if (empty($mailuid) || empty($password)) {
        header('Location: ../Frontend/login.php?error=emptyfields');
        exit();
    } else {
        $sql = 'SELECT * FROM users WHERE uidUsers=?;';
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header('Location: ../Frontend/login.php?error=sqlerror');
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, 's', $mailuid);
            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['pwdUsers']);
                if ($pwdCheck == false) {
                    header('Location: ../Frontend/login.php?error=wrongpwd');
                    exit();
                } elseif ($pwdCheck == true) {
                    session_start();
                    $_SESSION['userId'] = $row['idUsers'];
                    $_SESSION['userUid'] = $row['uidUsers'];
                    $_SESSION['userLevel'] = $row['userLevel'];
                    $_SESSION['emailUsers'] = $row['emailUsers'];
                    $_SESSION['f_name'] = $row['f_name'];
                    $_SESSION['l_name'] = $row['l_name'];
                    $_SESSION['genre'] = $row['gender'];
                    $_SESSION['headline'] = $row['headline'];
                    $_SESSION['bio'] = $row['bio'];
                    $_SESSION['userImg'] = $row['userImg'];
                    $_SESSION['coverImg'] = $row['coverImg'];

                    if($_SESSION['userLevel'] ==3){
                        header('Location: ../Frontend/admin/dashboad');
                        exit();
                    }
                    header('Location: ../Frontend/index?login=success');
                    exit();
                } else {
                    header('Location: ../Frontend/login.php?error=wrongpwd');
                    exit();
                }
            } else {
                header('Location: ../Frontend/login.php?error=nouser');
                exit();
            }
        }
    }
} else {
    header('Location: ../Frontend/login.php');
    exit();
}
