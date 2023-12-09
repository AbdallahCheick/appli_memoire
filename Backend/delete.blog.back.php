<?php

session_start();

if (
    isset($_GET['id']) &&
    isset($_SESSION['userId']) &&
    $_SESSION['userLevel'] == 3
) {
    include 'connexion.php';

    $blog = $_GET['id'];

    $sql = 'delete from blogs where blog_id=?';
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('Location: ../Frontend/admin/blogs.admin.php?error=sqlerror');
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, 's', $blog);
        mysqli_stmt_execute($stmt);
        header('Location: ../Frontend/admin/blogs.admin.php');
        exit();
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    header('Location: ../Frontend/admin/blogs.admin.php');
    exit();
}
