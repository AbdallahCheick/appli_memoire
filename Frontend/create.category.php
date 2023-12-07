<?php

include('navbar.php');
    
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
                                                echo '<h5 class="text-success">Cartegorie crée avec success</h5>';
                                            }
                                        ?>
                                        </span>
    <br><br>
<form method="post" action="../Backend/create.category.back.php">
    <div class="col-lg-6  fadeIn" style="margin-left: 25%;">
        <h1 style="margin-left: 30%;">Création de Categories</h1>
        <div class="p-5 rounded contact-form">
            <div class="mb-4">
                <input type="text" name="cat_name" placeholder="Nom de la categorie" class="form-control border-0 py-3">
            </div>
            <div class="mb-4">
                <textarea class="w-100 form-control border-0 py-3" name="cat_desc" id="cat_desc" placeholder="Description de la categorie" cols="30" rows="10"></textarea>
            </div>
            <div class="text-start">
                <input class="btn bg-primary text-white py-3 px-5" type="submit" value="Creer categorie" name="create_cat">
            </div>
        </div>
    </div>
</form><br><br>

    
<?php include('footer.php');?>