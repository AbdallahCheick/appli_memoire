<?php
include 'navbar.php';
if (!isset($_SESSION['userId'])) {
   header('Location: login');
   exit();
}



include 'navbar_body.php';

if (isset($_GET['id'])) {
    $userid = decoder($_GET['id']);
} else {
    if($_SESSION['userId'] !== null) {
    $userid = $_SESSION['userId'];}
}

$sql = 'select * from users where idUsers = ' . $userid;
$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    die('SQL error');
} else {
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $user = mysqli_fetch_assoc($result);
}
include 'profil/index.php';
?>

<hr>
<h3>Blog crée</h3>
<br><br>

<?php
$sql = 'select * from blogs ' . 'where blog_by = ?';
$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    die('SQL error');
} else {
    mysqli_stmt_bind_param($stmt, 's', $userid);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    echo '<div class="container">' . '<div class="row">';

    $row = mysqli_fetch_assoc($result);
    if (empty($row)) {
        echo '<div class="col-sm-4" style="padding-bottom: 30px;"></div>
                                <div class="col-sm-4">
                                    <img  src="img/empty_blog.png" width="300px" height="220px">
                                  </div>
                                  <div class="col-sm-4" style="padding-bottom: 30px;"></div>
                                    </div>
                                  </div>';
    } else {
        do {
            echo '<div class="col-sm-4" style="padding-bottom: 30px;">
                                        <div class="card user-blogs">
                                            <a href="blog.page?id=' .
                encoder($row['blog_id']) .
                '">
                                            <img class="card-img-top" src="uploads/' .
                $row['blog_img'] .
                '" alt="Card image cap">
                                            <div class="card-block p-2">
                                              <p class="card-title">' .
                ucwords($row['blog_title']) .
                '</p></a>
                                             <p class="card-text"><small class="text-muted">' .
                date('j F Y', strtotime($row['blog_date'])) .
                '</small>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                <small class="text-muted">';?>
                    
                <?php
                    if($_SESSION['userId'] == $userid){ 
                    echo '<a href="../Backend/delete.blog.back.php?id='.encoder($row['blog_id']).'&page=profile" > <i class="fa fa-trash" aria-hidden="true"></i>Supprimer</a>';
                    }?>
                 
                
                <?php echo '</small></p>
                
                                            </div>
                                            
                                          </div>
                                          </div>';
        } while ($row = mysqli_fetch_assoc($result));
        echo '</div>' . '</div>';
    }
}
?>

<br><br>
<hr>
<h3>Forum crée</h3>
<br><br>

<?php
$sql = 'select * from topics where topic_by = ?';
$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    die('SQL error');
} else {
    mysqli_stmt_bind_param($stmt, 's', $userid);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    echo '<div class="container">' . '<div class="row">';

    $row = mysqli_fetch_assoc($result);
    if (empty($row)) {
        echo '<div class="col-sm-4" style="padding-bottom: 30px;"></div>
                                <div class="col-sm-4">
                                    <img class="profile-empty-img" src="img/empty_forum.png" width="300px" height="220px">
                                  </div>
                                  <div class="col-sm-4" style="padding-bottom: 30px;"></div>
                                    </div>
                                  </div> <br>';
    } else {
        do {
            echo '<div class="col-sm-4" style="padding-bottom: 30px;">
                                        <div class="card user-blogs">
                                            <a href="posts?topic=' .
                encoder($row['topic_id']) .
                '">
                                            <img class="card-img-top" src="img/cover_forum.png" alt="Card image cap" width="150px" height="150 ">
                                            <div class="card-block p-2">
                                              <p class="card-title">' .
                ucwords($row['topic_subject']) .
                '</p>
                                             <p class="card-text"><small class="text-muted">' .
                date('j F Y', strtotime($row['topic_date'])) .
                '</small></p>
                                            </div>
                                            </a>
                                          </div>
                                          </div>';
        } while ($row = mysqli_fetch_assoc($result));
        echo '</div>' . '</div>';
    }
}
?>
<?php
if ($userid == $_SESSION['userId']) { ?>
<hr>
<h3>Projet soumis</h3>
<br><br>

<?php
$sql = 'select * from projet ' . 'where projet_by = ?';
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    die('SQL error');
} else {
    mysqli_stmt_bind_param($stmt, 's', $userid);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    echo '<div class="container">' . '<div class="row">';
    $row = mysqli_fetch_assoc($result);
    if (empty($row)) {
        echo '<div class="col-sm-4" style="padding-bottom: 30px;"></div>
                                <div class="col-sm-4">
                                    <img  src="img/empty_projet.png" width="300px" height="220px">
                                  </div>
                                  <div class="col-sm-4" style="padding-bottom: 30px;"></div>
                                    </div>
                                  </div><br>';
    } else {
        do {
            echo '<div class="col-sm-4" style="padding-bottom: 30px;">
                                        <div class="card user-blogs">
                                            <a href="project.page?id=' .
                encoder($row['projet_id']) .
                '">
                                            <img class="card-img-top" src="img/project-5.jpg" alt="Card image cap">
                                            <div class="card-block p-2">
                                              <p class="card-title">' .
                ucwords($row['projet_theme']) .
                '</p>
                                             <p class="card-text"><small class="text-muted">' .
                date('j F Y', strtotime($row['projet_date'])) .
                '</small></p>
                                            </div>
                                            </a>
                                          </div>
                                          </div>';
        } while ($row = mysqli_fetch_assoc($result));
        echo '</div>' . '</div>';
    }
}
} else {echo '';}
include 'footer.php';
 ?>
