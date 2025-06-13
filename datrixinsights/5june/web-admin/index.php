<?php
include_once("../include/config.php");
session_start();
if(isset($_SESSION["name"]) && !empty($_SESSION["name"])){
     echo"<script type='text/javascript'>document.location = 'dashboard.php'; </script>";
    }
    

?>
<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>datrixinsights</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="../images/logo.png">
    <link rel="shortcut icon" href="../images/logo.png">

    <!-- core dependcies css -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/vendor/PACE/themes/blue/pace-theme-minimal.css" />
    <link rel="stylesheet" href="assets/vendor/perfect-scrollbar/css/perfect-scrollbar.min.css" />

    <!-- page css -->

    <!-- core css -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <link href="assets/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="assets/css/animate.min.css" rel="stylesheet">
    <link href="assets/css/app.css" rel="stylesheet">
</head>
<style>
    .logo{
    color: #052a05;
    text-decoration: none;
    font-weight:600;
    text-align:center;
}
</style>
<body>
    <div class="app">
        <div class="layout bg-gradient-info">
            <div class="container">
                <div class="row full-height align-items-center">
                    <div class="col-md-5 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="p-15">
                                     <h1 class="text-center"><a class="logo" href="index.php">datrixinsights</a></h1>
                                    <!--<p class="text-center">
                                        <img class="img-responsive inline-block" style="width:200px;" src="logo.png" alt="">
                                       
                                    </p>-->
                                   <h4 class="text-center">Welcome To datrixinsights </h4>
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control" placeholder="User name">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control" placeholder="Password">
                                        </div>
                                    
                                        
                                        <div class="m-t-20 text-right">
                                            <button type="submit" name="submit" class="btn btn-gradient-success">Login</button>
                                        </div>
                                        <?php 
                                        
    if(isset($_POST['submit'])){
        
                                            $value = array(
                                            'username' =>$_POST['username'],
                                            'password' =>md5($_POST['password'])
                                             );
                                            
                                           $admin_login = $con->login("admin",$value);
                                    
                                        if($admin_login ==1){
                                            echo"<script type='text/javascript'>
                                            document.location = 'all-user.php'; 
                                            </script>";
                                             
                                            
                                        }else{
                                            echo'<div class="alert alert-danger alert-dismissible">
                                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                <strong>Warning!</strong> Username & Password Is Not Matched.
                                                            </div>';
                                         }   
                                      


                                        }?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/vendor.js"></script>

    <script src="assets/js/app.min.js"></script>

    <!-- page js -->
    
</body>



</html>