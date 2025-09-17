<?php

$sitesetting = $this->crud->fetchdatabyid('1','site_setting');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="AutoTrader">
    <meta name="keywords" content="AutoTrader">
    <link rel="icon" href="<?php echo base_url(); ?>media/uploads/site_setting/<?php echo $sitesetting[0]->logo; ?>" type="image/gif">
    <title>AutoTrader</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/responsive.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="js">
    <div id="preloader"></div>

      
    <!-- start header area -->
    <header class="header-area">
        <!-- <div class="topbar-area">
            <div class="container">
                <div class="row">

                    <div class="col-md-6 text-left">
                        <div class="left-info">
                            <p><span class="fa fa-clock"></span>Opening Hours : Mon - Sat : 8.30 to 16.00</p>
                        </div>
                    </div>

                    <div class="col-md-6 text-right">
                        <div class="right-info">
                            <p>
                                <a href="#"><span>
                                    <i class="fa fa-mobile"></i><?php echo $sitesetting[0]->mobile; ?></span>
                                </a>
                                <a href="<?php echo base_url('contact'); ?>">
                                    <span><i class="fa fa-futbol-o"></i>Enquiry Now</span> 
                                </a>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div> -->
        <div class="logo-right-address">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="sitelogo">
                            <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>media/uploads/site_setting/<?php echo $sitesetting[0]->logo; ?>" alt="" style="height: 88px;"></a>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="right-address" style="text-align: end;">
                            <div class="single-address" style="width: 100%;">
                                <?php if(empty($this->session->userdata("USERID"))){ ?>
                                <a href="<?php echo base_url('login'); ?>" class="button btn btn-default btn-sm">
                                   Login / Sign Up
                                </a>
                                <?php }else{ ?>
                                <a href="<?php echo base_url('useraccount'); ?>" class="button btn btn-default btn-sm">
                                   My Account
                                </a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div id="cssmenu">
                            <ul>
                                <li><a href="<?php echo base_url(); ?>">Home</a></li>

                                <li><a href="<?php echo base_url('about'); ?>">About Us</a></li>

                                <li><a href="<?php echo base_url('blog'); ?>">Blog</a></li>
                                <li><a href="<?php echo base_url('annauncment'); ?>">ANNOUNCEMENT</a></li>
                                
                                <li><a href="<?php echo base_url('contact'); ?>">Contact us</a></li>


                                <!-- <li><a href="<?php echo base_url(); ?>">Home</a>
                                    <ul>
                                        <li> <a href="<?php echo base_url(); ?>">Home 1</a></li>
                                        <li> <a href="index-2.php">Home 2</a></li>
                                        <li> <a href="index-3.php">Home 3</a></li>
                                    </ul>
                                </li> -->
                                
                                
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="col-md-1 text-right">
                        <div class="searchbtn">
                            <a href="#" class="fa fa-search"></a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="searchform">
            <input type="text" name="s" placeholder="Search Here">
            <button><i class="fa fa-times"></i></button>
        </div>
    </header>
    <!-- end of header area -->
