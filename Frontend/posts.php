<?php include 'navbar.php';

include 'navbar_body.php'; ?>
<link rel="stylesheet" href="css/style.forum.detail.css">
<?php
define('TITLE', 'Forum');

if (isset($_GET['topic'])) {
    $topic = decoder($_GET['topic']);
} else {
    header('Location: index');
    exit();
}
?>


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
<div class="site-wrap" id="home-section">




    <section class="site-section">
        <div class="container">
            <div class="row">
                <h1 class="mb-4" data-aos="fade-up" data-aos-delay="100"><?php echo ucwords(
                    $forum['topic_subject']
                ); ?>
                </h1>
                <div class="col-md-8 blog-content ">

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
                            if ($i === 1) {
                                $lien = $row['userImg'];
                                $nom = $row['uidUsers'];
                                $bio = $row['bio'];
                            }
                            echo $i === 1
                                ? ' <div class="bg-light"><h3>' .
                                    $row['post_content'] .
                                    '
                            </h3></div>
                            <div class="pt-5">

                                <p>Categories: <a href="forum?cat=' .
                                    encoder($forum['cat_id']) .
                                    '">' .
                                    $forum['cat_name'] .
                                    '</a> Crée le  : <span class="date">' .
                                    date(
                                        'j F Y',
                                        strtotime($row['post_date'])
                                    ) .
                                    '</span></p>
                            </div><div class="pt-5">
                            <ul class="comment-list">'
                                : '';
                            echo '<li class="comment">
                <div class="vcard bio">
                    <img src="uploads/' .
                                $row['userImg'] .
                                '" >
                </div>
                <div class="comment-body">
                <h3> <a href="profile?id=' .
                                encoder($row['idUsers']) .
                                '">' .
                                $row['uidUsers'] .
                                '</a></h3>
                    <div class="meta"><span class="date">' .
                                date('j F Y', strtotime($row['post_date'])) .
                                '<span class="span-post-no">#' .
                                $i .
                                '</span> </span></div>
                    <p>' .
                                $row['post_content'] .
                                '</p>
                    
                </div>
            </li>';
                            echo '';
                            $i++;
                        }
                        echo '</div></ul>';
                    }
                    ?>



                    <div class="pt-5">
                        <ul class="comment-list">


                        </ul>
                        </ul>
                        <!-- END comment-list -->

                        <div class="comment-form-wrap pt-5">
                            <h3 class="mb-5 text-black">Laissz un commentaire</h3>
                            <form method="post" class="p-5 bg-light">
                                <div class="form-group">
                                    <label for="message">Commentaire</label>
                                    <textarea name="reply_content" id="message" cols="30" rows="10"
                                        class="form-control"></textarea>
                                </div><br>
                                <div class="form-group">
                                    <?php if (isset($_SESSION['userId'])) {
                                        echo '<input type="submit" value="Envoyer" name="submit_reply" class="btn btn-primary py-3 px-5">';
                                    } else {
                                        echo '<a href="login" class="btn btn-primary">Envoyer</a>';
                                    } ?>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 sidebar">
                    <div class="sidebar-box">
                        <img src="uploads/<?php echo $lien; ?>" alt="Image placeholder"
                            class="img-fluid mb-4 w-50 rounded-circle">
                        <h3 class="text-black"> <?php echo $nom; ?></h3>
                        <p><?php echo $bio; ?></p>
                        <!--<p><a href="profile" class="btn btn-primary btn-md">Visiter le profil</a></p>-->
                    </div>

                    <div class="sidebar-box">
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>



<?php include 'footer.php'; ?>
