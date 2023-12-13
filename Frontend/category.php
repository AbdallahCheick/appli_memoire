<?php
include('navbar.php');

if (!isset($_SESSION['userId'])) {
    header('Location: login.php');
    exit();
}
?>
<link rel="stylesheet" href="css/style.forum.css">
<!-- Page Header Start -->
<div class="container-fluid page-header py-5">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Les Categories</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
                <li class="breadcrumb-item" aria-current="page">Categories</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->
<br><br>
<div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".1s" style="max-width: 600px;">
    <h5 class="text-primary">Les categories</h5>
    <h1>Les dernières catégories crées </h1>
</div>
<?php
$sql = "select cat_id, cat_name, cat_description, (
            select count(*) from topics
            where topics.topic_cat = cat_id
            ) as forums
        from categories
        order by cat_id asc";

$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    die('SQL error');
} else {
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);


    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="wrap">
        <div class="post">
            <div class="feat-img"><img src="img/cover_category.jpg" />
            </div>
            <article>
                <header>
                    <ul class="cat">
                        <li><a href="#" class="text-primary">' .
                        $row['cat_description'] .
                        '</a></li>
                    </ul>
                    <h2><a href="forum.php?cat=' .
                    encoder($row['cat_id']) .
                    '">
                          <strong>' .
                    ucwords($row['cat_name']) .
                    '</strong></a></h2>
                    <p class="author-cred "><span class="text-warning"><i class="fa fa-book" aria-hidden="true"></i> ' .
    ucwords($row['forums']) .
    ' Forums crée dans cette catégorie</span> </p>
                </header>
                <footer>';
                if ($_SESSION['userLevel'] == 3){
                echo'
                <a href="../Backend/delete.category.back.php?id=' .
                $row['cat_id'] .
                '&page=category" class="more-link"> <i class="bi bi-trash3-fill" aria-hidden="true" >Suprimer la catégorie</i></a>
                    ';
                }else{
                    echo'<span></span>';
                }
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

<a href="create.category.php">Creer une nouvelle categorie</a>
<?php include('footer.php'); ?>