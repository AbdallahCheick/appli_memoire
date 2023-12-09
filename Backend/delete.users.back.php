<?php

session_start();

if (
    isset($_GET['id']) &&
    isset($_SESSION['userId']) &&
    $_SESSION['userLevel'] == 3
) {
    include 'connexion.php';

    $user = $_GET['id'];
}
if (isset($_GET['page']) == 'user') {
    $page = 'users';
} elseif (isset($_GET['page']) == 'invest') {
    $page = 'invest';
} elseif (isset($_GET['page']) == 'admin') {
    $page = 'admin';
}

$sql = 'delete from users where idUsers=?';
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    header(
        'Location: ../Frontend/admin/' . $page . '.admin.php?error=sqlerror'
    );
    exit();
} else {
    mysqli_stmt_bind_param($stmt, 's', $user);
    mysqli_stmt_execute($stmt);
    header('Location: ../Frontend/admin/' . $page . '.admin.php');
    exit();
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
