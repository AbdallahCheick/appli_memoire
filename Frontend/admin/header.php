<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Admin</title>
    <link rel="stylesheet" href="style.dashboad.css">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

</head>

<?php
session_start();
include_once '../../Backend/connexion.php';
if (!isset($_SESSION['userId'])) {
    header('Location: index.php');
    exit();
}
else{
    if($_SESSION['userLevel'] != 3){
        header('Location: index.php');
        exit();
    }
}
?>

<body>
    <input type="checkbox" id="menu-toggle">
    <div class="sidebar">
        <div class="side-header">
            <h3>ENT<span>FINC</span></h3>
        </div>

        <div class="side-content">
            <div class="profile">
                <div class="profile-img bg-img" style="background-image: url(../uploads/<?php echo $_SESSION[
                    'userImg'
                ]; ?>)"></div>
                <h4><?php echo $_SESSION['userUid']; ?> </h4>
                <small>Admin</small>
            </div>

            <div class="side-menu">
                <ul>
                    <li>
                        <a href="dashboad.php" class="<?php if ($page == 1) {
                            echo 'active';
                        } else {
                            echo '';
                        } ?>">
                            <span class="las la-home"></span>
                            <small>Tableau de Bord</small>
                        </a>
                    </li>
                    <li>
                        <a href="profile.admin.php" class="<?php if (
                            $page == 2
                        ) {
                            echo 'active';
                        } else {
                            echo '';
                        } ?>">
                            <span class="las la-user-alt"></span>
                            <small>Profil</small>
                        </a>
                    </li>
                    <li>
                        <a href="users.admin.php" class="<?php if ($page == 3) {
                            echo 'active';
                        } else {
                            echo '';
                        } ?>">
                            <span class="las la-user-tie"></span>
                            <small>Utilisateurs</small>
                        </a>
                    </li>
                    <li>
                        <a href="invest.admin.php" class="<?php if (
                            $page == 4
                        ) {
                            echo 'active';
                        } else {
                            echo '';
                        } ?>">
                            <span class="las la-users"></span>
                            <small>Investisseurs</small>
                        </a>
                    </li>
                    <li>
                        <a href="project.admin.php" class="<?php if (
                            $page == 5
                        ) {
                            echo 'active';
                        } else {
                            echo '';
                        } ?>">
                            <span class="las la-briefcase"></span>
                            <small>Projets</small>
                        </a>
                    </li>
                    <li>
                        <a href="blogs.admin.php" class="<?php if ($page == 6) {
                            echo 'active';
                        } else {
                            echo '';
                        } ?>">
                            <span class="lab la-blogger-b"></span>
                            <small>Blogs</small>
                        </a>
                    </li>
                    <li>
                        <a href="forum.admin.php" class="<?php if ($page == 7) {
                            echo 'active';
                        } else {
                            echo '';
                        } ?>">
                            <span class="lab la-forumbee"></span>
                            <small>Forum</small>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>

    <div class="main-content">

        <header>
            <div class="header-content">
                <label for="menu-toggle">
                    <span class="las la-bars"></span>
                </label>

                <div class="header-menu">

                    <div class="user">
                        <div class="bg-img" style="background-image: url(../uploads/<?php echo $_SESSION[
                            'userImg'
                        ]; ?>)"></div>

                        <span class="las la-power-off"></span>
                        <span><a href="../../Backend/logout.admin.back.php"
                                class="nav-item nav-link text-white">Déconnexion</a></span>
                    </div>
                </div>
            </div>
        </header>