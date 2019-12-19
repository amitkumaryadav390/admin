

   <?php
       
       
       include"includes/db.php";

    ?>  
                           <?php                  
                            
                            if(isset($_POST['login']))
                            {
                                $username = $_POST['username'];
                                $password = $_POST['password'];
                               // $username = mysqli_real_escape_string($conn,$username);
                              //  $password = mysqli_real_escape_string($conn,$password);
                                
                                
                                
                         
                                $logquery ="select * from admin where username = '{$username}' and password ='{$password}' ";
                                $result = mysqli_query($conn,$logquery);
                                while($row= mysqli_fetch_assoc($result))
                                {
                                    $dbuser = $row['username'];
                                    $dbpass = $row['password'];
                                    if($username === $dbuser && $password === $dbpass)
                                    {
                                      //  header("Location : localhost/bracketproject/amarpath/admin/index.php");
                                       // echo"correctt";
                                        session_start();
                                        $_SESSION['user']= $username;
                                        $_SESSION['password']= $dbpass;
                                        header("Location:adminpage.php");
                                        break;
                                    }
                                    else
                                    {
                                        echo "<h2 style='color:red'>Wrong Login Credentials</h3>";
                                    }
                                }
                                
                            }
else
{
    session_start();
    session_destroy();
}




                                    ?>
                             



<?php

//include"includes/db.php";

?>



<!DOCTYPE html>
<html lang="en">

<?php
    include "includes/header.php";
    
    
    ?>
<body  style="background-color : #cc6600 " >
   
   
    
    
    <nav  class="navbar  navbar-fixed-top" role="navigation"   style="background-color :  #ffffcc;height : 100px">
            <div class="navbar-header">
             
                <a class="navbar-brand" href="index.php"><img src="includes/img/ruban-web-logo-red.png" ></a>
            </div>
           <center>
           <div>
            <ul class="nav navbar-right" style="padding : 15px 415px 10px 10px">
               
                <li title="link " >
                    <a   href="index.php"  ><span style="color : black"><h3>PATHOLOGY LAB REPORTING SYSTEM</h3> </span></a>
                    
                </li>
            </ul>
            </div>
            </center>
            
    </nav>

    
    
    
    
    
    <div id="login">
    
    
    <div class="container" >
           
           <center>
            <div class="row">
            
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default" style="position : relative ; top: 150px; left: 150 px;width : 400px ">
                        <div class="panel-heading">
                            <h3 style="color:red">  Admin Login</h3>
                        </div>
                        
                        
                        
                        
                        
                                           
                                
                                          
                                          
                                          
                                           
                                           
                                           

                            <form role="form" id="login" action="" method="post">
                                <fieldset>
                                   
                                   
                                
                                   
                                   <br>
                                   
                                    <div class="form-group">
                                      <div style="text-align: left">
                                       <Label for="username" > Username</Label>
                                       </div>
                                        <input class="form-control" autofocus autocomplete="off" placeholder="Enter correct Username" name="username" type="text"  value="">
                                    </div>
                                    <div class="form-group">
                                      <div style="text-align : left">

                                       <Label for="password"> Password</Label>
                                    </div>
                                        <input class="form-control" placeholder="Enter correct Password" name="password" type="password" value="">
                                    </div>
                                    <br>
                                  <div><input type="submit" class="btn btn-lg btn-primary btn-block" name="login" value="Log In">
                                  </div>
                                                                </div>
                                    <br>
                                  <div><input type="submit" class="btn btn-primary" name="forgot" value="Forgot Password">
                                  </div>
                                                                
                                </fieldset>
                            </form>

                        <!--</div>-->
                    </div>
                </div>
                
            </div>
            </center>
        </div>
   

    
    
    
    
    
    
    
    
    
    
    
    
</body>