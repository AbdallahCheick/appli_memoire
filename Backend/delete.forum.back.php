<?php

session_start();

if (
    isset($_GET['id']) &&
    isset($_SESSION['userId']) &&
    $_SESSION['userLevel'] == 3
) {
    include 'connexion.php';

    $topic = $_GET['id'];

    $sql = 'delete from topics where topic_id=?';
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('Location: ../Frontend/admin/forum.admin.php?error=sqlerror');
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, 's', $topic);
        mysqli_stmt_execute($stmt);
        header('Location: ../Frontend/admin/forum.admin.php');
        exit();
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    header('Location: ../Frontend/admin/forum.admin.php');
    exit();
}
