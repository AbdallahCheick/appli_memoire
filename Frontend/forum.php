<?php include 'navbar.php';

include 'navbar_body.php'; ?>
<link rel="stylesheet" href="css/style.forum.css">


<!-- Page Header Start -->
<div class="container-fluid page-header py-5">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Les Forums</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index">Accueil</a></li>
                <li class="breadcrumb-item"><a href="#">Forums</a></li>
                <li class="breadcrumb-item" aria-current="page">Liste des forums</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<?php if (isset($_GET['cat'])) {
    $sql = 'select * from categories ' . 'where cat_id = ?';
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        die('SQL error');
    } else {
        $cat = decoder($_GET['cat']);
        mysqli_stmt_bind_param($stmt, 's', $cat);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $category = mysqli_fetch_assoc($result);
    }
} ?>
<br><br><br>
<h5 class="border-bottom border-gray pb-2 mb-0">
    <?php if (isset($_GET['cat'])) {
        echo '<a href="forum">Forums</a>
                        / <a href="category">Categorie<a> / <span style="color: #709fea ">' .
            ucwords($category['cat_name']) .
            '</span>';
    } else {
        echo '        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".1s" style="max-width: 600px;">
        <h5 class="text-primary">Les Forums</h5>
        <h1>Les derniers Forum crées </h1>
    </div>';
    } ?>
</h5>

<?php
setlocale(LC_TIME, 'fr_FR');
$sql = "select topic_id, topic_subject, topic_date, topic_cat, topic_by, userImg, idUsers, uidUsers, cat_name, (
                select sum(post_votes)
            from posts
            where post_topic = topic_id
            ) as upvotes
        from topics, users, categories 
        where ";
if (isset($_GET['cat'])) {
    $sql .= 'topic_cat = ' . $cat . ' and ';
}
$sql .= "topics.topic_by = users.idUsers
        and topics.topic_cat = categories.cat_id
        order by topic_date desc  ";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    die('SQL error');
} else {
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="wrap">
                <div class="post">
                    <div class="feat-img"><img src="img/cover_forum.png" />
                    </div>
                    <article>
                        <header>
                            <ul class="cat">
                                <li><a href="#" class="text-primary">' .
            $row['cat_name'] .
            '</a></li>
                            </ul>
                            <h2><a href="posts?topic=' .
            encoder($row['topic_id']) .
            '"><strong>' .
            ucwords($row['topic_subject']) .
            '</strong></a></h2>
                            <p class="author-cred ">Creé par :                    <span class="text-warning">' .
            ucwords($row['uidUsers']) .
            '</span> le                   ' .
            date('j F Y', strtotime($row['topic_date'])) .
            ' </p>
                        </header>
                        <footer>
                            <a href="posts?topic=' .
            encoder($row['topic_id']) .
            '" class="more-link">Lire plus</a>
                            ';
        echo '</span>';
        echo '</span>
                                    </div>';
        echo '</footer>
                    </article>
                </div>
            </div>';
    }
}
?>
<?php include 'footer.php'; ?>
