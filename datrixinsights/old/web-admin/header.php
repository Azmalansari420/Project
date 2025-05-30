<?php
include_once("../include/config.php");
include_once("include/session.php");

?>

<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>datrixinsights</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="../img/logo.png">
    <link rel="shortcut icon" href="../img/logo.png">

    <!-- core dependcies css -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/PACE/themes/blue/pace-theme-minimal.css" />
    <link rel="stylesheet" href="assets/vendor/perfect-scrollbar/css/perfect-scrollbar.min.css" />
    
    <!-- <link href="https://redacademy.in/assets/vendor/excel/jquery.dataTables.min.css" rel="stylesheet">-->
    <!--<link href="https://redacademy.in/assets/vendor/excel/buttons.dataTables.min.css" rel="stylesheet">-->

    <!-- page css -->
<!--My Css and JS for animation an alert -->
<script src="sweetalert2/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2/dist/sweetalert2.min.css">
<link href="select2/select2.min.css" rel="stylesheet" />
<script src="select2/select2.full.min.js"></script>
<link rel="stylesheet" href="dist/css/my-slider.css"/>
<script src="dist/js/ism-2.2.min.js"></script>
    <!-- core css -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <link href="assets/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="assets/css/animate.min.css" rel="stylesheet">
    <link href="assets/css/app.css" rel="stylesheet">
    
    <!--<link href="https://redacademy.in/assets/vendor/excel/jquery.dataTables.min.css" rel="stylesheet">-->
    <!--<link href="https://redacademy.in/assets/vendor/excel/buttons.dataTables.min.css" rel="stylesheet">-->
    
    <style type="text/css">
  #innermultiimg{
padding: 0px;
   margin: 0px;
   margin-bottom: 15px;
}

.add_more_product_images{
   width: 100px;
   height: 50px;
   background: #1dd045;
   padding: 5px 15px;
   color: #fff;cursor:pointer;
   border-radius: 5px;
}

.remove_more_product_images{
width: 100px;
   height: 50px;
   background: #f73b3b;
   padding: 5px 15px;
   color: #fff;cursor:pointer;
   border-radius: 5px;
}
#show_img__error{color:#f00;}
.logo{
    color: #fff;
    text-decoration: none;
    font-weight:600;
    text-shadow: 1px 2px 3px black;
}
@media only screen and (max-width: 600px) {
 .header .header-container .nav-right {
    float: left;
    margin-top: 55px!important;
    margin-left: 40px;
}

.logo {
    color: #fff;
    text-decoration: none;
    font-weight: 600;
    text-shadow: 1px 2px 3px black;
    padding-left: 130px;
}
.main-content{
    margin-top:40px;
}
}
.header .header-container .nav-right {
    float: left;
    margin-top: 11px;
}
.side-nav {
    width: 200px;
}
@media (min-width: 1200px)
{
.container {
    max-width: 88%;
    margin-left: 185px !important;
}
}

@media (min-width: 1200px)
{
.container {
    width: 100%;
}
}




/* Header adjustments */
.header-container {
    background-color: #3b0a57; /* Deep purple */
    padding: 10px 20px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
}
.logo {
    color: #e0b3ff; /* Light violet accent */
}

.nav-logo h1 .logo {
    font-size: 26px;
    font-weight: bold;
    color: #ffffff;
    text-shadow: 1px 2px 3px rgba(0,0,0,0.5);
}

/* Optional nav-right (if enabled again) */
.nav-right li a {
    color: #fff !important;
    padding: 10px 15px;
    font-weight: 500;
}
.nav-right li a:hover {
    background: #1a2f46;
    border-radius: 6px;
}

/* Side navigation */

.side-nav {
    background-color: #00050a!important;
    color: #ffffff;
    box-shadow: 2px 0 8px rgba(0, 0, 0, 0.1);
}

.side-nav a {
    color: #fff;
    font-weight: 500;
}
.side-nav a:hover {
    background-color: #2e4a6f;
    text-decoration: none;
    border-radius: 4px;
}

/* Main content padding */
.main-content {
    padding: 25px;
    background: #f4f6fa;
    min-height: calc(100vh - 70px); /* Adjust depending on header height */
}

/* Responsive fixes */
@media (max-width: 768px) {
    .nav-logo h1 .logo {
        font-size: 20px;
        padding-left: 0;
    }
    .nav-right {
        margin-left: 0 !important;
        float: none !important;
        text-align: center;
        margin-top: 20px !important;
    }
    .side-nav {
        width: 100%;
        padding: 10px;
    }
    .main-content {
        margin-top: 70px;
    }
}

/* Sweetalert button styles */
.swal2-confirm {
    background-color: #007bff !important;
    border-radius: 6px !important;
    font-weight: bold;
    padding: 10px 20px;
}
.swal2-cancel {
    background-color: #6c757d !important;
    border-radius: 6px !important;
    padding: 10px 20px;
}

/* Select2 dropdown tweaks */
.select2-container--default .select2-selection--single {
    border: 1px solid #ced4da;
    border-radius: 6px;
    padding: 6px 10px;
    height: 38px;
}

/* Buttons */
.btn-info {
    background-color: #007bff;
    border: none;
    font-weight: 600;
    border-radius: 6px;
}
.btn-info:hover {
    background-color: #0056b3;
}

/* Form and cards */
.card {
    background: #fff;
    border-radius: 12px;
    padding: 20px;
    box-shadow: 0 6px 12px rgba(0,0,0,0.08);
    margin-bottom: 30px;
}

</style>
</head>

<body>
    <div class="app header-default side-nav-dark">
        <div class="layout">
            <div class="header navbar">
                <div class="header-container" style="background-color4: #2d496b;">
                    <div class="nav-logo">
                        <a target="_blank" href="../index.php">
                             <h1><a class="logo" href="index.php">datrixinsights</a></h1>
                        </a>
                    </div>
                   
                  <!--   <ul class="nav-right">
                        
                         <li class="">

                                    <a href="dashboard.php" style="color:white;">
                                      
                                        <span>Dashboard</span>
                                    </a>
                                </li>
								  <li class="">

                                    <a href="all-admin.php" style="color:white;">
                                       
                                        <span>Admin</span>
                                    </a>
                                </li>
                         <li class="">

                                    <a href="all-user.php?project_id=" style="color:white;">
                                      
                                        <span>All User</span>
                                    </a>
                                </li>
								 

                                <li>
                                    <a href="logout.php" style="color:white;">
                                        <i class="ti-power-off p-r-10"></i>
                                        <span>Logout</span>
                                    </a>
                                </li>
                         
                       
                    </ul> -->
                </div>
            </div>
            <!-- Header END -->
            
          
            
                 <?php include"side_nav.php";?>