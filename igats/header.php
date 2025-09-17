<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>igats</title>
    <meta name="description" content="igats">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="assets/logo.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/et-line.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>

<!-- Main Wrapper Start -->
<div class="main-wrapper">

    <!-- Header Section Start -->
    <div class="ht-header-section section">
       
        <!-- Header Top Start -->
        <div class="ht-header-top">
           <!--  <div class="container">
                <div class="ht-header-top-wrap row">
                    <div class="ht-header-top-left col-md-6 col-12">
                        <div class="ht-header-top-left-links">
                            <a href="#"><i class="fa fa-phone"></i> +98 558 547 589</a>
                            <a href="#"><i class="fa fa-envelope"></i> demo@example.com</a>
                        </div>
                    </div>
                    <div class="ht-header-top-right col-md-6 col-12">
                        <div class="ht-header-top-right-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
       
        <!-- Header Bottom One Start -->
        <div class="ht-header-bottom">
            <div class="">
                <div class="row">
                    <div class="col-12">
                        
                        <!-- Header Bottom One Wrap Start -->
                        <div class="ht-header-bottom-wrap">
                            
                            <a href="index.php" class="ht-logo float-start"><img src="assets/logo.png" alt="Logo" style="height:80px;"></a>
                            
                            <!-- Main Menu One Start -->
                            <div class="ht-main-menu float-end">
                                <nav>
                                    <ul>
                                        <li class="<?php echo ($current_page == 'index.php') ? 'active' : ''; ?>"><a href="index.php">home</a></li>
                                        <li class="<?php echo ($current_page == 'about.php') ? 'active' : ''; ?>"><a href="about.php">about</a></li>
                                         <li><a href="#!">service</a>
                                            <ul class="ht-sub-menu dropdown-list">
                                                <li><a href="desktop-service.php">Desktop as a Service</a></li>
                                                <li><a href="accounting-enterprise-hosting.php">Accounting Enterprise Hosting</a></li>

                                                <li><a href="managed-it.php">Managed IT</a></li>
                                                
                                            </ul>
                                        </li>

                                        <li class="<?php echo ($current_page == 'staffing-service.php') ? 'active' : ''; ?>"><a href="staffing-service.php">Staffing Service</a></li>
                                        <li class="<?php echo ($current_page == 'e-account-service.php') ? 'active' : ''; ?>"><a href="e-account-service.php">E Accounting Services</a></li>
                                        
                                        <li class="<?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>"><a href="contact.php">contact Us</a></li>
                                    </ul>
                                </nav>
                            </div><!-- Main Menu One End -->
                            
                            <div class="ht-mobile-menu"></div>
                            
                        </div><!-- Header Bottom One Wrap End -->
                        
                    </div>
                </div>
            </div>
        </div><!-- Header Bottom One End -->
        
    </div><!-- Header Section End -->