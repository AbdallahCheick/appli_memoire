<?php

session_start();

if (
    isset($_GET['id']) &&
    isset($_SESSION['userId']) &&
    isset($_GET['page'])
) {
    if($_GET['page']== 'admin'){
        $page = "Frontend/admin/blogs.admin";
    }elseif($_GET['page']== 'user'){
        $page = "Frontend/blog";
    }else{
        header('Location: ../Frontend/404');
        exit();
    }
    include 'connexion.php';

    $blog = decoder($_GET['id']);

    $sql = 'delete from blogs where blog_id=?';
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('Location: ../'.$page.'?error=sqlerror');
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, 's', $blog);
        mysqli_stmt_execute($stmt);
        header('Location: ../'.$page.'');
        exit();
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    header('Location: ../Frontend/404');
    exit();
}
