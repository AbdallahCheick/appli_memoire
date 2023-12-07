<?php
session_start();
if (isset($_POST['create_forum'])) {
    include 'connexion.php';

    $topicSubject = $_POST['sujet_forum'];
    $topicCategory = $_POST['cat_forum'];
    $postContent = $_POST['post_content'];

    if (empty($topicSubject) || empty($postContent)) {
        header('Location: ../Frontend/create.forum.php?error=emptyfields');
        exit();
    } else {
        $sql =
            'insert into topics(topic_subject, topic_date, topic_cat, topic_by) ' .
            'values (?,now(),?,?)';
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header('Location: ../Frontend/create.forum.php?error=sqlerror');
            exit();
        } else {
            mysqli_stmt_bind_param(
                $stmt,
                'sss',
                $topicSubject,
                $topicCategory,
                $_SESSION['userId']
            );
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);

            $topicid = mysqli_insert_id($conn);

            $sql =
                'insert into posts(post_content, post_date, post_topic, post_by) ' .
                'values (?,now(),?,?)';
            $stmt = mysqli_stmt_init($conn);

            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header('Location: ../Frontend/create.forum.php?error=sqlerror');
                exit();
            } else {
                mysqli_stmt_bind_param(
                    $stmt,
                    'sss',
                    $postContent,
                    $topicid,
                    $_SESSION['userId']
                );
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);

                header(
                    'Location: ../Frontend/create.forum.php?operation=success'
                );
            }
        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    header('Location: ../Frontend/index.php');
    exit();
}
