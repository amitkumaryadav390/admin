<?php
session_start();
if(!isset($_SESSION['user']))
{
    header("Location: index.php");
}



?>




<?php
ob_start();
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
                            Enter Details
                        </h2>
                        <?php
                        include"includes/addpatient.php";
                        
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
