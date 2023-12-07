<?php
    if(isset($_POST['sub_inp']))
    {
        require("connexion.php");


        // Recuperation des variables
        $nom = $_POST['f_name'];
        $prenom = $_POST['l_name'];
        $user = $_POST['uid'];
        $email = $_POST['email'];
        $password = $_POST['pwd'];
        $passwordRepeat  = $_POST['pwd_re'];
        $genre = $_POST['genre'];
        $bio = $_POST['bio_user'];
        $level= 1 ; 

        // Verification des erreurs lors de la creation
        if (empty($user) || empty($email) || empty($password) || empty($passwordRepeat))
        {
            header("Location: ../Frontend/signup.php?error=emptyfields&uid=".$user."&mail=".$email);
            exit();
        }
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $user))
        {
            header("Location: ../Frontend/signup.php?error=invalidmailuid");
            exit();
        }
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            header("Location: ../Frontend/signup.php?error=invalidmail&uid=".$user);
            exit();
        }
        else if (!preg_match("/^[a-zA-Z0-9]*$/", $user))
        {
            header("Location: ../Frontend/signup.php?error=invaliduid&mail=".$email);
            exit();
        }
        else if ($password !== $passwordRepeat)
        {
            header("Location: ../Frontend/signup.php?error=passwordcheck&uid=".$user."&mail=".$email);
            exit();
        }
        else
        {
            // checking if a user already exists with the given user
            $sql = "select uidUsers from users where uidUsers=?;";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql))
            {
                header("Location: ../Frontend/signup.php?error=sqlerror");
                exit();
            }
            else
            {
                mysqli_stmt_bind_param($stmt, "s", $user);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                
                $resultCheck = mysqli_stmt_num_rows($stmt);
                
                if ($resultCheck > 0)
                {
                    header("Location: ../Frontend/signup.php?error=usertaken&mail=".$email);
                    exit();
                }
                else
                {
                    $FileNameNew = 'default.png';
                    include('upload.back.php');
                    
                    $sql = "insert into users(userLevel,f_name, l_name, uidUsers, emailUsers, pwdUsers, gender, "
                            . "bio, userImg) "
                            . "values (?,?,?,?,?,?,?,?,?)";
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $sql))
                    {
                        header("Location: ../Frontend/signup.php?error=sqlerror");
                        exit();
                    }
                    else
                    {
                        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                        
                        mysqli_stmt_bind_param($stmt, "issssssss", $level, $nom, $prenom, $user, $email,
                                $hashedPwd, $genre,
                                $bio, $FileNameNew);
                        mysqli_stmt_execute($stmt);
                        mysqli_stmt_store_result($stmt);
                        
                        header("Location: ../Frontend/signup.php?signup=success");
                        exit();
                    }
                }
            }
        }
        
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        
    }
    else
    {
        header("Location: ../Frontend/signup.php") ; 
        exit();
    }
?>