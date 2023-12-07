<?php

if (isset($_POST['create_blog'])) {
    include 'connexion.php';
    session_start();

    $title = $_POST['btitle'];
    $content = $_POST['bcontent'];

    if (empty($title) || empty($content)) {
        header('Location: ../Frontend/create.blog.php?error=emptyfields');
        exit();
    } else {
        // checking if a user already exists with the given username
        $sql = 'select blog_title from blogs where blog_title=?';
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header('Location: ../Frontend/create.blog.php?error=sqlerror');
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, 's', $title);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);

            $resultCheck = mysqli_stmt_num_rows($stmt);

            if ($resultCheck > 0) {
                header(
                    'Location: ../Frontend/create.blog.php?error=titletaken'
                );
                exit();
            } else {
                $id = $_SESSION['blog_id'];

                $FileNameNew = 'blog-cover.png';

                include 'upload.back.php';

                $sql =
                    'insert into blogs(blog_title, blog_by, blog_date, blog_content, blog_img) ' .
                    'values (?,?,now(),?,?)';
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header(
                        'Location: ../Frontend/create.blog.php?error=sqlerror'
                    );
                    exit();
                } else {
                    mysqli_stmt_bind_param(
                        $stmt,
                        'ssss',
                        $title,
                        $_SESSION['userId'],
                        $content,
                        $FileNameNew
                    );
                    //echo $title . ' ' . $_SESSION['userId'] . ' ' . $content;
                    //exit();
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);

                    header(
                        'Location: ../Frontend/create.blog.php?catcreation=success'
                    );
                }
            }
        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    header('Location: ../Frontend/create.blog.php');
    exit();
}
