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



    <div class="container-fluid bg-primary">
        <div class="container">
            <nav class="navbar navbar-dark navbar-expand-lg py-0">
                <a href="index" class="navbar-brand">
                    <h1 class="text-white fw-bold d-block">Ent<span class="text-secondary">Finc</span> </h1>
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                    <div class="navbar-nav ms-auto mx-xl-auto p-0">
                        <a href="index" class="nav-item nav-link ">Accueil</a>
                        <!--<a href="service" class="nav-item nav-link">Services</a>-->

                        <?php if (isset($_SESSION['userId'])) {
                            echo '                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Blogs</a>
                            <div class="dropdown-menu rounded">
                                <a href="blog" class="dropdown-item">Liste des blogs</a>
                                <a href="create.blog" class="dropdown-item">Creer un blog</a>
                            </div>
                        </div>';
                        } else {
                            echo '<a href="blog" class="nav-item nav-link">Blogs</a>';
                        } ?>


                        <?php if (isset($_SESSION['userId'])) {
                            echo '                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Forums</a>
                            <div class="dropdown-menu rounded">
                                <a href="forum" class="dropdown-item">Liste des forums</a>
                                <a href="create.forum" class="dropdown-item">Creer un forum</a>
                            </div>
                        </div>';
                        } else {
                            echo '<a href="forum" class="nav-item nav-link">Forums</a>';
                        } ?>
                        <?php if (isset($_SESSION['userId'])) {
                            if ($_SESSION['userLevel'] == 1) {
                                echo '                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Projet</a>
                            <div class="dropdown-menu rounded">
                                <a href="project" class="dropdown-item">Liste des projets</a>
                                <a href="create.project" class="dropdown-item">Soummettre un projet</a>
                            </div>
                        </div>
                        ';
                            } else {
                                echo '<a href="ass.project" class="nav-item nav-link">Projet Assigné</a>
                        ';
                            }
                        } else {
                            echo '';
                        } ?>

                        <!--<div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu rounded">
                                <a href="blog" class="dropdown-item">Our Blog</a>
                                <a href="team" class="dropdown-item">Our Team</a>
                                <a href="testimonial" class="dropdown-item">Testimonial</a>
                                <a href="404" class="dropdown-item">404 Page</a>
                            </div>
                        </div>-->
                        <a href="contact" class="nav-item nav-link">Contact</a>
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-center ms-4 ">
                    <?php if (isset($_SESSION['userId'])) {
                        echo '                                <a href="profile" class="position-relative ">
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
                                <a href="login" class="position-relative animated tada infinite">
                                    <i class="bi bi-person-fill bi-2x text-white" style="height: 200px; width:200px"></i>
                                    <span class="text-white">S\'inscrire / Se connecter</span>
                                    <div class="position-absolute" style="top: -7px; left: 20px;">
                                    </div>
                                </a>
        
        
                            </div>';
                    } ?>
                </div>
        
            </nav>
        </div>
    </div>