<?php
include 'navbar.php';

if (isset($_GET['id'])) {
    $blogId = $_GET['id'];
} else {
    header('Location: index.php');
    exit();
}
?>

<body>

    <?php
    $sql = "select * from blogs, users 
        where blog_id = ? 
        and blogs.blog_by = users.idUsers";

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        die('SQL error');
    } else {
        mysqli_stmt_bind_param($stmt, 's', $blogId);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        $row = mysqli_fetch_assoc($result);
    }
    ?>
    <div class="blog-hero" style="background-image: url(uploads/<?php echo $row[
        'blog_img'
    ]; ?>)">
    </div>

    <div class="container">
        <div class="row">

            <div class="col-md-8">
                <summary>
                    <h3><?php echo ucwords($row['blog_title']); ?></h3>
                    <div class="blog-date"><?php echo $row[
                        'blog_date'
                    ]; ?></div>
                </summary>
                <p><?php echo $row['blog_content']; ?></p>
            </div>
            <div class="col-md-4">
                <div class="sidebar-box">
                    <img style="width: 15%; height: 15%;" src="uploads/<?php echo $row[
                        'userImg'
                    ]; ?>" alt="Image placeholder" class="img-fluid mb-4 w-50 rounded-circle">
                    <h3 class="text-black">Auteur: <?php echo ucwords(
                        $row['uidUsers']
                    ); ?></h3>
                    <p><?php echo ucwords($row['bio']); ?></p>
                    <!--<p><a href="profile.php" class="btn btn-primary btn-md">Visiter le profil</a></p>-->
                </div>
            </div>
        </div>

    </div>
    <?php include 'footer.php';
?>
