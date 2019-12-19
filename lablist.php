<?php
session_start();
if(!isset($_SESSION['user']))
{
    header("Location: index.php");
}



?>


<?php

include"includes/db.php";

?>




<!DOCTYPE html>
<html lang="en">

<?php
    include "includes/header.php";
    
    
    ?>

<body style="background-color: white">

    <div id="wrapper">

        <?php
        include"includes/nav.php";
        
        ?>
    
    
    <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                       
                       
                       
                       
                       
                       
                       
                       
                       
                       
                       
                       
                        <h2 class="page-header">
                           Lab List
                        </h2>
                       <!-- <div class="well">
                   
                   <form action="search.php" method="post">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input name="search" type="text" class="form-control">
                        <span class="input-group-btn">
                            <button name="submit" class="btn btn-default" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    /.input-group 
                </div> -->
                
                        <?php
                        include"includes/lablist.php";
                        
                        ?>
                    </div>
                    
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        

    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>

</body>

</html>
