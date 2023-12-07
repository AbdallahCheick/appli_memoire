<?php include 'navbar.php'; ?>
<?php
define('TITLE', 'Forum');
if (!isset($_SESSION['userId'])) {
    header('Location: login.php');
    exit();
}
if (isset($_GET['topic'])) {
    $topic = $_GET['topic'];
} else {
    header('Location: index.php');
    exit();
}
?>

<?php
if (isset($_POST['submit_reply'])) {
    $content = $_POST['reply_content'];
    if (!empty($content)) {
        $sql =
            'insert into posts(post_content, post_date, post_topic, post_by) ' .
            'values (?,now(),?,?)';
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            die('sql error1');
        } else {
            mysqli_stmt_bind_param(
                $stmt,
                'sss',
                $content,
                $topic,
                $_SESSION['userId']
            );
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
        }
    }
}
$sql =
    'select * from topics, categories where topic_id=? ' .
    'and topic_cat = cat_id';
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    die('sql error3');
} else {
    mysqli_stmt_bind_param($stmt, 's', $topic);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if (!($forum = mysqli_fetch_assoc($result))) {
        die('sql error4');
    }
}
?>

<h1><?php echo ucwords($forum['topic_subject']); ?></h1>

<?php
$sql =
    'select * from posts p, users u ' .
    'where p.post_topic=? ' .
    'and p.post_by=u.idUsers ' .
    'order by p.post_id;';
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    die('sql error2');
} else {
    mysqli_stmt_bind_param($stmt, 's', $topic);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $i = 1;
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="card post">  
                            <span class="date">' .
            date('j F Y', strtotime($row['post_date'])) .
            '<span class="span-post-no">#' .
            $i .
            '</span> </span>
            <img src="uploads/' .
            $row['userImg'] .
            '" width="100px" height="100px">
            
            <h3>' .
            $row['uidUsers'] .
            '</h3>
            
            <small class="text-muted">' .
            $row['headline'] .
            '</small><br><br>
            
            <a href="profile.php?id=' .
            $row['idUsers'] .
            '"> Profil</a> </div>
                                </div>

                                <div class="col-sm-9 post-content">
                                    <p>' .
            $row['post_content'] .
            '</p>
                                        <div class="vote text-center">';
        if (
            $row['post_by'] == $_SESSION['userId'] ||
            $_SESSION['userLevel'] == 1
        ) {
            echo '<a href="../Backend/delete.post.back.php?topic=' .
                $topic .
                '&post=' .
                $row['post_id'] .
                '&by=' .
                $row['post_by'] .
                '" >' .
                'Supprimer</a><br>';
        }
        $i++;
    }
}
?>

<form method="post">
    <textarea name="reply_content" id="content" cols="30" rows="10"></textarea>
    <input type="submit" value="Repondre" name="submit_reply">
</form>



<?php include 'footer.php'; ?>
