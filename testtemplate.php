<?php
session_start();
if(!isset($_SESSION['user']))
{
   
    header("Location: index.php");
     
         
}



?>
<?php
if(isset($_POST['addtest']))
{
    $testname =$_POST['testname'];
    $text = $_POST['editor'];
    echo $text;
    
    
    
    
}

?>



<?php

include"includes/db.php";

?>
<?php
ob_start();

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
                            Add Test Template
                        </h2>
                        
                        
                        
                        
                        
                        
                        
                                        <div class="panel panel-default">
            <div class="panel-heading">
                Enter Test Detail
            </div>
            <div class="panel-body">
                <div class="row">
                		
                    <div class="col-lg-12">
<form action="" method="post" >                     
                           
                              
                           <div class="form-group">
                            <label>Test Name</label>
                            <input class="form-control" name="testname" id="testname" type="text" autocomplete="off" >
                        </div> 
                        <div class="col-lg-">
                    <div class="form-group" id="variables" style="display:none">
                            <label>Variables<br /></label>  
                            patient Name : {name}<br /> Lab Name : {labName}<br /> reference Number : {referenceNum}<br /> Sample received Date : {sample_received}<br />
                            Reported Date : {reportDate}<br /> Test Name : {testName}<br /> Docter Name : {doctor}<br /> Age : {age}<br /> Gender : {gender}<br /> Test Result : {testResult}
                                                        
                        </div>
                    </div>                       
                        <div class="form-group" id="text_field">
                          <?php 
                            if(isset($_POST['check']))
                            {
                                echo" <h1>hello</h1>";
                            }
                          ?>
                            <label>Text Editor</label><br />
                            <label>Show Variables</label>
                            <input type="checkbox" name="check" id="show_variable" value="ab" onclick="showvar()" />

                           
                        
                        <script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>
                        
                        
                        
                        
                        
                        
                        
                        <?php
                       
                            if(isset($_POST['cancel']))
                            {
                                header("Location: testlist.php");
                            }
                        
                        ?>
                        <textarea class="ckeditor" name="editor" >Enter Test Details</textarea>

                       </div>

                        <div class="form-group">                            
                            <input type="submit"  class="btn btn-primary" value="Add" name="addtest"> 
                            <input  class="btn btn-primary" type="submit" name="cancel" value="Cancel"> 
                        </div>    
    </form>                   
                    </div>
                </div>
                                            </div>
                        </div>
                    </div>
                
                    
                        
                        
                        </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        

                    
    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>

</body>

</html>
