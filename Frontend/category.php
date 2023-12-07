<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
session_start();
include '../Backend/connexion.php';

define('TITLE', 'Liste des categories');

if (!isset($_SESSION['userId'])) {
    header('Location: login.php');
    exit();
}
?>  
<body>
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
        echo '<a href="forum.php?cat=' .
            $row['cat_id'] .
            '">
                  <strong>' .
            ucwords($row['cat_name']) .
            '</strong></a>
                      <br>' .
            $row['cat_description'] .
            '
                </p>
                <span class="text-right text-primary"> 
                    Forums: ' .
            $row['forums'] .
            ' <i class="fa fa-book" aria-hidden="true"></i><br>';

        if ($_SESSION['userLevel'] == 1) {
            echo '<a href="../Backend/delete.category.back.php?id=' .
                $row['cat_id'] .
                '&page=category" >
                    Suprimer Categorie
                  </a><br><br>
                </span>';
        } else {
            echo '</span>';
        }

        echo '</div>';
    }
}
?>

<a href="create.category.php">Creer une nouvelle categorie</a>
</body>
</html>