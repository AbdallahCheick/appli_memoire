<?php

session_start();

if (
    isset($_GET['id']) &&
    isset($_SESSION['userId']) &&
    isset($_GET['page'])
) {
    if($_GET['page']== 'admin'){
        $page = "Frontend/admin/forum.admin";
    }elseif($_GET['page']== 'user'){
        $page = "Frontend/forum";
    }else{
        header('Location: ../Frontend/404');
        exit();
    }
    include 'connexion.php';

    $topic = decoder($_GET['id']);

    $sql = 'delete from topics where topic_id=?';
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('Location: ../'.$page.'?error=sqlerror');
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, 's', $topic);
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
