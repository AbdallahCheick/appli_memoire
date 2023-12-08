    <!-- header start-->
    <?php
    include 'navbar.php';
    if (isset($_GET['id'])) {
        $userid = $_GET['id'];
    } else {
        $userid = $_SESSION['userId'];
    }
    ?>
    <!-- header end-->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Projects</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item" aria-current="page">Projects</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->



    <?php
    $sql = 'select * from projet ' . 'where projet_ass = ?';
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        die('SQL error');
    } else {
        mysqli_stmt_bind_param($stmt, 's', $userid);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($result);
    }
    ?>


    <!-- Project Start -->
    <div class="container-fluid project py-5 my-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">Les projets</h5>
                <h1>Les projets assigné</h1>
            </div>
            <div class="row g-5">


                <?php if (empty($row)) {
                    echo '<div class="col-sm-4" style="padding-bottom: 30px;"></div>
                                            <div class="col-sm-4">
                                                <img  src="img/empty_projet.png" width="300px" height="220px">
                                              </div>
                                              <div class="col-sm-4" style="padding-bottom: 30px;"></div>
                                                </div>
                                              </div>';
                } else {
                    do {
                        echo '
                            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                            <div class="project-item">
                                <div class="project-img">
                                    <img src="img/project-5.jpg" class="img-fluid w-100 rounded" alt="">
                                    <div class="project-content">
                                        <a href="project.page.php?id=' .
                            $row['projet_id'] .
                            '" class="text-center">
                                            <h4 class="text-secondary"> ' .
                            ucwords($row['projet_theme']) .
                            ' </h4>
                                            <p class="m-0 text-white">' .
                            date('j F Y', strtotime($row['projet_date'])) .
                            '</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>';
                    } while ($row = mysqli_fetch_assoc($result));
                } ?>




            </div>
        </div>
    </div>
    <!-- Project End -->



    <!-- header start-->
    <?php include 'footer.php'; ?>
    <!-- header end-->