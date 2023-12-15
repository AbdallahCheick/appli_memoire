<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Admin</title>
    <link rel="stylesheet" href="style.dashboad.css">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css'>


</head>

<?php
session_start();
include_once '../../Backend/connexion.php';
if (!isset($_SESSION['userId'])) {
    header('Location: index.php');
    exit();
} else {
    if ($_SESSION['userLevel'] != 3) {
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
            <a href="profile.admin">
                <div class="profile">

                    <div class="profile-img bg-img" style="background-image: url(../uploads/<?php echo $_SESSION[
                        'userImg'
                    ]; ?>)"></div>

                    <h4><?php echo $_SESSION['userUid']; ?> </h4>
                    <small>Admin</small>
                </div>
            </a>

            <div class="side-menu">
                <ul>
                    <li>
                        <a href="dashboad" class="<?php if ($page == 1) {
                            echo 'active';
                        } else {
                            echo '';
                        } ?>">
                            <span class="las la-home"></span>
                            <small>Tableau de Bord</small>
                        </a>
                    </li>
                    <li>
                        <a href="admin.admin" class="<?php if ($page == 2) {
                            echo 'active';
                        } else {
                            echo '';
                        } ?>">
                            <span class="las la-user-shield"></span>
                            <small>Administrateur</small>
                        </a>
                    </li>
                    <li>
                        <a href="users.admin" class="<?php if ($page == 3) {
                            echo 'active';
                        } else {
                            echo '';
                        } ?>">
                            <span class="las la-user-tie"></span>
                            <small>Utilisateurs</small>
                        </a>
                    </li>
                    <li>
                        <a href="invest.admin" class="<?php if (
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
                        <a href="project.admin" class="<?php if (
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
                        <a href="blogs.admin" class="<?php if ($page == 6) {
                            echo 'active';
                        } else {
                            echo '';
                        } ?>">
                            <span class="lab la-blogger-b"></span>
                            <small>Blogs</small>
                        </a>
                    </li>
                    <li>
                        <a href="forum.admin" class="<?php if ($page == 7) {
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
                        <a href="profile.admin">
                            <div class="bg-img" style="background-image: url(../uploads/<?php echo $_SESSION[
                                'userImg'
                            ]; ?>)"></div><a href="profile.admin">

                                
                                <span><a href="../../Backend/logout.admin.back.php"
                                        class="nav-item nav-link text-white logBtn"><span class="las la-power-off" style="font-size: 20px;"></span>Déconnexion</a></span>
                    </div>
                </div>
            </div>
        </header>