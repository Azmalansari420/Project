<?php
$sitesetting = $this->crud->fetchdatabyid('1','site_setting');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMM GLOBAL HEALTH CARE</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/bootstrap-datepicker3.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/bootstrap-iso.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/responsive.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/custum.css">
    <link rel="shortcut icon" type="image/png" href="<?=base_url() ?>logo/favicon.jpeg">
    <!-- <link  href="https://fonts.googleapis.com/css?family=Poppins%3A300%2C400%2C400italic%2C300italic%7CMaven+Pro%3A500%7CPoppins%3A700%7CPoppins%3A400%7CPoppins%3A700&#038;subset=latin%2Clatin-ext"> -->
</head>

<style>

.swift-up-text span i{
  font-style: normal;
  position: relative;
  top: var(--headingSize);
  animation: .5s swift-up ease-in-out forwards;
}
:root{
    --headingSize: 55px;
}

@keyframes swift-up {
    
  to {
    top: 0;
  }
}

.background1
{
    width: 100%;
}
img.image-loader
{
    position: relative;
    height: 100%;
    width: 100%;
/*    height: 1038px;*/
/*    top: -113px;*/
/*    left: -170px;*/
}
</style>

<body>
    <!-- <a href="javascript:;" id="return-to-top"> <i class="fas fa-angle-double-up"></i></a> -->
    
    <div id="preloader" class="home-loader">
            <img src="<?=base_url() ?>media/loader.gif" class="image-loader">
        <!-- <div id="status" style="transform: scale(1.5);position: unset;"> -->
            <!-- <img style="display: block;-webkit-user-select: none;margin: auto;cursor: zoom-out;background-color: hsl(0, 0%, 90%);" src="https://aduetechnologies.com/aa2023/november/emm/media/loader.gif" width="1584" height="1080"> -->

        <!-- </div> -->
    </div>
    
    <div class="top-header-wrapper float-left" style="display: none;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 text-center text-lg-left">
                    <div class="top-location float-left">
                        <ul class="d-flex justify-content-center justify-content-lg-start">
                            <?php
                                if(!empty($sitesetting[0]->email))
                                    { ?>
                            <li><a href="mailto:<?=$sitesetting[0]->email ?>">
                                    <i class="fas fa-envelope-open"></i>
                                   <?=$sitesetting[0]->email ?>
                                </a></li>
                            <?php } ?>
                                <?php
                                if(!empty($sitesetting[0]->mobile))
                                    { ?>
                            <li><a href="tel:<?=$sitesetting[0]->mobile ?>">
                                    <i class="fa fa-phone"></i>
                                    <?=$sitesetting[0]->mobile ?>
                                </a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="social-icon float-left">
                        <ul class="float-left">
                            <li><a href="<?=$sitesetting[0]->facebook ?>">
                                    <i class="fab fa-facebook-f"></i>
                                </a></li>
                            <li><a href="<?=$sitesetting[0]->twitter ?>">
                                    <i class="fab fa-twitter"></i>
                                </a></li>
                            <li><a href="<?=$sitesetting[0]->instagram ?>">
                                    <i class="fab fa-instagram"></i>
                                </a></li>
                            <li><a href="<?=$sitesetting[0]->youtube ?>">
                                    <i class="fab fa-youtube"></i>
                                </a></li>
                            <li><a href="javascript:;" >
                                    <span data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="color: white;">Login</span>
                                    /
                                    <span data-bs-toggle="modal" data-bs-target="#staticBackdrop1" style="color: white;">Register</span>
                                </a>
                            </li>
                            <li style="background:#911439;">
                                <a href="<?=base_url() ?>contact" style="font-weight: 600;font-size: 12px;">EMERGENCY APPOINTMENT</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-header-wrapper float-left">
        <div class="main-menu float-left">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                        <a class="navbar-brand" href="<?=base_url() ?>">
                            <img src="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" alt="logo" >
                        </a>
                    </div>
                    <div class="col-lg-10 col-md-6 d-xl-block d-lg-block d-md-none d-sm-none d-none">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mb-2 mb-lg-0">

                                    <li class="nav-item">
                                        <a class="nav-link" href="<?=base_url() ?>">Home
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="javascript:;">About Us
                                            <i class="fas fa-chevron-down"></i>
                                        </a>
                                        <ul class="sub-menu">
                                            <li><a href="<?=base_url() ?>about">About Us</a></li>
                                            <li><a href="<?=base_url() ?>founder-message">Founder Message</a></li>
                                            <li><a href="<?=base_url() ?>what-we-do">What We Do</a></li>
                                            <li><a href="<?=base_url() ?>testimonial">Testimonials</a></li>
                                            <li><a href="<?=base_url() ?>team">Our Team</a></li>
                                            <li><a href="<?=base_url() ?>our-project">Our Project</a></li>
                                            <li><a href="<?=base_url() ?>company-profile">Company Profile</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="javascript:;">Services
                                            <i class="fas fa-chevron-down"></i>
                                        </a>
                                        <ul class="sub-menu">
                                            <?php
                                            $cate = $this->crud->selectDataByMultipleWhere('categories',array('status'=>1,));
                                            foreach($cate as $data)
                                                { ?>
                                            <li><a href="<?=base_url('service-details/'.$data->slug) ?>"><?=$data->name ?></a></li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?=base_url() ?>gallery">Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?=base_url() ?>addictions">Addictions</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?=base_url() ?>blog">Blog
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?=base_url() ?>appointment">
                                            <div class="main-btn">
                                                <em><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></em><span style="font-size: 14px!important;">Book Appointment</span>
                                            </div>
                                        </a><!-- 
                                        <a class="nav-link" href="appointment">
                                            <div class="main-btn">
                                                <em><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></em><span>Book Appointment</span>
                                            </div>
                                        </a> -->
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?=base_url() ?>contact">
                                            <div class="main-btn" style="padding: 3px 10px;">
                                                <em><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></em><span style="font-size: 14px!important;">EMERGENCY APPOINTMENT</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-6 col-6 d-xl-none d-lg-none">
                        <button class="nav-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar"
                            aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="nav-toggle__text">Toggle Menu</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="mobile-menu-wrapper">
        <div id="sidebar">
            <div class="logo">
                <img src="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" alt="logo" style="width: 257px;">
            </div>
            <div id="toggle-close">&times;</div>
            <div id="cssmenu">
                <!-- <input type="search" placeholder="Search Here...."> -->
                <ul class="float-left">
                    <li>
                        <a href="<?=base_url() ?>">Home</a>
                    </li>
                    <li class="has-sub">
                        <a href="javascript:;">About Us</a>
                        <ul>
                            <li><a href="<?=base_url() ?>about">About Us</a></li>
                            <li><a href="<?=base_url() ?>founder-message">Founder Message</a></li>
                            <li><a href="<?=base_url() ?>what-we-do">What We Do</a></li>
                            <li><a href="<?=base_url() ?>testimonial">Testimonials</a></li>
                            <li><a href="<?=base_url() ?>team">Our Team</a></li>
                            <li><a href="<?=base_url() ?>our-project">Our Project</a></li>
                            <li><a href="<?=base_url() ?>company-profile">Company Profile</a></li>
                        </ul>
                    </li>
                    <!-- <li><a href="<?=base_url() ?>about">About Us</a></li> -->
                    
                    <li class="has-sub">
                        <a href="javascript:;">Services </a>
                        <ul>
                            <?php
                        $cate = $this->crud->selectDataByMultipleWhere('categories',array('status'=>1,));
                        foreach($cate as $data)
                            { ?>
                            <li><a href="<?=base_url('service-details/'.$data->slug) ?>"><?=$data->name ?></a></li>
                             <?php } ?>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="<?=base_url() ?>gallery">Gallery</a>
                    </li>
                    <li>
                        <a href="<?=base_url() ?>addictions">Addictions</a>
                    </li>
                 
                    <li>
                        <a href="<?=base_url() ?>blog">Blog</a>
                    </li>
                    <li>
                        <a href="<?=base_url() ?>contact">Contact Us</a>
                    </li>
                </ul>
                <div class="sidebar-social float-left">
                    <ul class="float-left">
                        <li><a href="<?=$sitesetting[0]->facebook ?>">
                                <i style="color: black!important;" class="fab fa-facebook-f"></i>
                            </a></li>
                        <li><a href="<?=$sitesetting[0]->twitter ?>">
                                <i style="color: black!important;" class="fab fa-twitter"></i>
                            </a></li>
                        <li><a href="<?=$sitesetting[0]->instagram ?>">
                                <i style="color: black!important;" class="fab fa-instagram"></i>
                            </a></li>
                        <li><a href="<?=$sitesetting[0]->youtube ?>">
                                <i style="color: black!important;" class="fab fa-youtube"></i>
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>