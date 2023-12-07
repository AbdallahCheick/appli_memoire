<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php

    session_start();
    
    define('TITLE',"Creation de categorie");
    
    if(!isset($_SESSION['userId']))
    {
        header("Location: login.php");
        exit();
    }
    
?>  
<body>
                                            <span class="text-center">
                                        <?php
                                            if(isset($_GET['error']))
                                            {
                                                if($_GET['error'] == 'emptyfields')
                                                {
                                                    echo '<h5 class="text-danger">*Fill In All The Fields</h5>';
                                                }
                                                else if ($_GET['error'] == 'catnametaken')
                                                {
                                                    echo '<h5 class="text-danger">*A category with the given name already exists</h5>';
                                                }
                                                else if ($_GET['error'] == 'sqlerror')
                                                {
                                                    echo '<h5 class="text-danger">*Website Error: Contact admin to have the issue fixed</h5>';
                                                }
                                            }
                                            else if (isset($_GET['catcreation']) == 'success')
                                            {
                                                echo '<h5 class="text-success">*Category successfully created</h5>';
                                            }
                                        ?>
                                        </span>
    <form method="post" action="../Backend/create.category.back.php">
        <input type="text" name="cat_name" placeholder="Nom de la categorie" >
        <textarea name="cat_desc" id="cat_desc" placeholder="Description de la categorie" cols="30" rows="10"></textarea>
        <input type="submit" value="Creer categorie" name="create_cat"><br>
        <a href="category.php">Liste des categories</a>
    </form>
</body>
</html>