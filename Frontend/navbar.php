<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include '../Backend/connexion.php';
?>

<head>
    <meta charset="utf-8">
    <title>Accueil</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.blog.page.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel='stylesheet' href='//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css'>
    <link rel="stylesheet" href="th/style.css">
    <link rel="stylesheet" href="css/style.forum.detail.css">
    <link rel="stylesheet" href="profil/style.css">


    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-dark py-2 d-none d-md-flex">
        <div class="container">
            <div class="d-flex justify-content-between topbar">
                <div class="top-info">
                    <small class="me-3 text-white-50"><a href="#"><i
                                class="fas fa-map-marker-alt me-2 text-secondary"></i></a>Cocody centre INPHB</small>
                    <small class="me-3 text-white-50"><a href="#"><i
                                class="fas fa-envelope me-2 text-secondary"></i></a>contact@labtic.net</small>
                </div>
                <div id="note" class="text-secondary d-none d-xl-flex"><small>Note : Nous sommes là pour vous
                        accompagner</small></div>
                <div class="top-link">
                    <a href="https://web.facebook.com/labticci/about"
                        class="bg-light nav-fill btn btn-sm-square rounded-circle"><i
                            class="fab fa-facebook-f text-primary"></i></a>
                    <a href="" class="bg-light nav-fill btn btn-sm-square rounded-circle"><i
                            class="fab fa-twitter text-primary"></i></a>
                    <a href="" class="bg-light nav-fill btn btn-sm-square rounded-circle"><i
                            class="fab fa-instagram text-primary"></i></a>
                    <a href="" class="bg-light nav-fill btn btn-sm-square rounded-circle me-0"><i
                            class="fab fa-linkedin-in text-primary"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->




    <!-- Navbar Start -->
    <div class="container-fluid bg-primary">
        <div class="container">
            <nav class="navbar navbar-dark navbar-expand-lg py-0">
                <a href="index.php" class="navbar-brand">
                    <h1 class="text-white fw-bold d-block">Ent<span class="text-secondary">Finc</span> </h1>
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                    <div class="navbar-nav ms-auto mx-xl-auto p-0">
                        <a href="index.php" class="nav-item nav-link ">Accueil</a>
                        <!--<a href="service.php" class="nav-item nav-link">Services</a>-->

                        <?php if (isset($_SESSION['userId'])) {
                            echo '                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Blogs</a>
                            <div class="dropdown-menu rounded">
                                <a href="blog.php" class="dropdown-item">Liste des blogs</a>
                                <a href="create.blog.php" class="dropdown-item">Creer un blog</a>
                            </div>
                        </div>';
                        } else {
                            echo '<a href="blog.php" class="nav-item nav-link">Blogs</a>';
                        } ?>


                        <?php if (isset($_SESSION['userId'])) {
                            echo '                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Forums</a>
                            <div class="dropdown-menu rounded">
                                <a href="forum.php" class="dropdown-item">Liste des forums</a>
                                <a href="create.forum.php" class="dropdown-item">Creer un forum</a>
                            </div>
                        </div>';
                        } else {
                            echo '<a href="forum.php" class="nav-item nav-link">Forums</a>';
                        } ?>
                        <?php if (isset($_SESSION['userId'])) {
                            echo '                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Projet</a>
                            <div class="dropdown-menu rounded">
                                <a href="project.php" class="dropdown-item">Liste des projets</a>
                                <a href="create.project.php" class="dropdown-item">Soummettre un projet</a>
                            </div>
                        </div>';
                        } else {
                            echo '';
                        } ?>

                        <!--<div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu rounded">
                                <a href="blog.php" class="dropdown-item">Our Blog</a>
                                <a href="team.php" class="dropdown-item">Our Team</a>
                                <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                                <a href="404.php" class="dropdown-item">404 Page</a>
                            </div>
                        </div>-->
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-center ms-4 ">
                    <?php if (isset($_SESSION['userId'])) {
                        echo '                                <a href="profile.php" class="position-relative ">
                        <i class="bi bi-person-fill bi-2x text-white" style="height: 200px; width:200px"></i>
                        <span class="text-white">' .
                            $_SESSION['userUid'] .
                            '</span>
                        <div class="position-absolute" style="top: -7px; left: 20px;">
                        </div>
                    </a><a href="../Backend/logout.back.php" class="nav-item nav-link text-white"><i class="bi bi-box-arrow-right"></i></a>';
                    } else {
                        echo ' <div class="d-none d-xl-flex flex-shirink-0">
                            <div id="phone-tada" class="d-flex align-items-center justify-content-center me-4">
                                <a href="login.php" class="position-relative animated tada infinite">
                                    <i class="bi bi-person-fill bi-2x text-white" style="height: 200px; width:200px"></i>
                                    <span class="text-white">S\'inscrire / Se connecter</span>
                                    <div class="position-absolute" style="top: -7px; left: 20px;">
                                    </div>
                                </a>
        
        
                            </div>';
                    } ?>
                </div>
        </div>
        </nav>
    </div>
    </div>
    <!-- Navbar End -->