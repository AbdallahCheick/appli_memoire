<!-- header start-->
<?php include 'navbar.php'; ?>
<!-- header end-->


<!-- Page Header Start -->
<div class="container-fluid page-header py-5">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Blogs</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item" aria-current="page">Blog</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->





<!-- Blog Start -->
<div class="container-fluid blog py-5 my-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h5 class="text-primary">Les blogs</h5>
            <h1>Les derniers blogs ajoutes</h1>
        </div>
        <div class="row g-5 justify-content-center">
            <?php
            $sql = "select * from blogs, users 
                            where blogs.blog_by = users.idUsers";
            $stmt = mysqli_stmt_init($conn);

            if (!mysqli_stmt_prepare($stmt, $sql)) {
                die('SQL error');
            } else {
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);

                while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="col-lg-6 col-xl-4 wow fadeIn">
                <div class="blog-item position-relative bg-light rounded">
                    <img <?php echo 'src="uploads/' .
                        $row['blog_img'] .
                        '"'; ?> class="img-fluid w-100 rounded-top" alt="">
                    <span class="position-absolute px-4 py-3 bg-primary text-white rounded"
                        style="top: -28px; right: 20px;"><?php echo '<a class="text-white" href="blog.page.php?id=' .
                            $row['blog_id'] .
                            '">' .
                            substr($row['blog_title'], 0, 100) .
                            '...</a>'; ?></span>
                    <div class="blog-btn d-flex justify-content-between position-relative px-3"
                        style="margin-top: -75px;">
                        <div class="blog-icon btn btn-secondary px-3 rounded-pill my-auto">
                            <?php echo '                                        <a href="blog.page.php?id=' .
                                $row['blog_id'] .
                                '" class="btn text-white">Lire plus</a>'; ?>
                        </div>
                        <div class="blog-btn-icon btn btn-secondary px-4 py-3 rounded-pill ">
                            <div class="blog-icon-1">
                                <p class="text-white px-2">Partager<i class="fa fa-arrow-right ms-3"></i></p>
                            </div>
                            <div class="blog-icon-2">
                                <a href="" class="btn me-1"><i class="fab fa-facebook-f text-white"></i></a>
                                <a href="" class="btn me-1"><i class="fab fa-twitter text-white"></i></a>
                                <a href="" class="btn me-1"><i class="fab fa-instagram text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-content text-center position-relative px-3" style="margin-top: -25px;">
                        <img <?php echo 'src="uploads/' .
                            $row['userImg'] .
                            '"'; ?> class="img-fluid rounded-circle border border-4 border-white mb-3"
                            style="width:135px;height:135px;margin-top:-15%;margin-left:10%" alt="">
                        <h5 class="">Par <?php echo $row['uidUsers']; ?></h5>
                        <span class="text-secondary"><?php echo date(
                            'F jS, Y',
                            strtotime($row['blog_date'])
                        ); ?></span>
                        <p class="py-2"> <?php echo substr(
                            $row['blog_content'],
                            0,
                            20
                        ) . '...'; ?></p>
                    </div>
                    <div class="blog-coment d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom">
                        <a href="" class="text-white"></a>
                        <a href="" class="text-white"><small> →</small></a>
                    </div>
                </div>
            </div>
            <?php }
            }
            ?>


        </div>
    </div>
</div>
<!-- Blog End -->


<!-- header start-->
<?php include 'footer.php'; ?>
<!-- header end-->