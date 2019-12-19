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

        <!-- Navigation -->
       <?php
        include"includes/nav.php";
        
        
        
        ?>
        <div id="page-wrapper">

            <div class="container-fluid">
               
               
               
               <div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Dashboard</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-users fa-4x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">
                           <?php 
                            $countquery = "select count(umobileno) from user";
                            $resultcount = mysqli_query($conn,$countquery);
                            while($row = mysqli_fetch_assoc($resultcount))
                            {
                                $ans = $row['count(umobileno)'];
                                echo "{$ans}";
                            }
                            ?>
                            
                            </div>
                        <div>Patients</div>
                    </div>
                </div>
            </div>
            <a href=patientlist.php>
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-hospital-o fa-4x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                       
                        <div class="huge">
                            
                            <?php
                        $query = "select count(patientmobile) from testpatient ";
                        $result = mysqli_query($conn,$query);
                        while($row = mysqli_fetch_assoc($result))
                        {
                            $count = $row['count(patientmobile)'];
                            echo "{$count}";
                        }
                        
                        
                        ?>
                            
                            
                            
                        </div>
                        <div>Reports</div>
                    </div>
                </div>
            </div>
            <a href="reports.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

                
                
                <!--<div >
                   <label>Search :</label> <div><i class="icon-search fa fa-search"></i> <input   type="search" placeholder="search box" name="search" class="icon-search fa fa-search">
                   </div>
                </div>
                 --> 
                   
                <!-- Page Heading -->
              <!--  <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Blank Page
                            <small>Subheading</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                    </div>
                </div>
                -->
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
