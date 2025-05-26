<?php
$sitesetting = $this->crud->fetchdatabyid('1','site_setting');
?>

<!doctype html>
<html class="no-js" lang="zxx">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>HOPE HEALTH</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="<?=base_url() ?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=base_url() ?>css/animate.min.css">
        <link rel="stylesheet" href="<?=base_url() ?>css/magnific-popup.css">
        <link rel="stylesheet" href="<?=base_url() ?>fontawesome/css/all.min.css">
        
        <link rel="stylesheet" href="<?=base_url() ?>css/dripicons.css">
        <link rel="stylesheet" href="<?=base_url() ?>css/slick.css">
        <link rel="stylesheet" href="<?=base_url() ?>css/meanmenu.css">
        <link rel="stylesheet" href="<?=base_url() ?>css/default.css">
        <link rel="stylesheet" href="<?=base_url() ?>css/style.css">
        <link rel="stylesheet" href="<?=base_url() ?>css/responsive.css">
    </head>
    <body>
<style>
    @media only screen and (min-width: 1025px) {
        .about-img{
            height: 571px;
        }
    } 
    @media only screen and (max-width: 1026px) {
        .about-img{
            height: 100%;
        }
        .s-about-img img {
            width: 60%;
        }
    } 

    
    .founder-para{
        font-size: 17px;
    font-weight: 500;
    }

/*----------*/
header.header-area.header-two{
    background: black;
}
.header-two .main-menu ul li a {
    color: white;
}
.header-two .top-callus {
    background: white;
    }
    i.fal.fa-bars
    {
        color: white;
    }
    .menu-search a 
    {
        background: none;
    }
    .right-menu .text strong {
    color: white;
    font-size: 20px;
}
.right-menu .text span {
    display: block;
    color: white;
}
</style>

        <!-- header -->
        <header class="header-area header-two">			
            <div  class="menu-area">
                <div class="container">
                    <div class="second-menu">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-3">
                                <div class="logo">
                                    <a href="<?=base_url() ?>"><img src="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" alt="logo"></a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                              
                                <div class="main-menu text-center text-xl-center  d-none d-lg-block">
                                    <div class="top-callus">
                                        <a href="mailto:<?=$sitesetting[0]->email ?>" style="color: black;font-size: 23px;font-weight: 600;"><?=$sitesetting[0]->email ?></a>
                                    </div>
                                    <nav id="mobile-menu">
                                      <ul>
                                            
                                            <li><a href="<?=base_url() ?>">Home</a></li>        
                                            
                                             <li class="has-sub">
                                                 <a href="<?=base_url() ?>about">About Us</a>
                                                 <ul>
                                                    <li><a  style="color: black;" href="<?=base_url() ?>about">About Us</a></li>
                                                    <li><a style="color: black;"  href="<?=base_url() ?>founder-msg">Founder Message</a></li>
                                                    <li><a style="color: black;"  href="<?=base_url() ?>what-we-do">What We Do</a></li>
                                                 </ul>
                                             </li>

                                              <li class="has-sub"><a href="#">Services & Treatments </a>
												<ul>
                                                    <?php
                                                    $cate = $this->crud->selectDataByMultipleWhere('categories',array('status'=>1,));
                                                    foreach($cate as $data)
                                                        { ?>
                                                    <li><a style="color: black;" href="<?=base_url('service-details/'.$data->slug) ?>"><?=$data->name ?></a></li>
                                                <?php } ?>
                                                  </ul>
											</li>

                                            <!-- <li><a href="book-appointment">Book Appointment</a></li>                                                -->
                                            <li><a href="<?=base_url() ?>gallery">Gallery</a></li>                                               
                                            <li><a href="<?=base_url() ?>blog">Blog</a></li>                                               
                                            <li><a href="<?=base_url() ?>contact">Contact</a></li>                                               
                                        </ul>
                                    </nav>
                                     <div class="menu-search text-right">
                                        <a href="#" class="menu-tigger"><i class="fal fa-bars"></i></a>
                                     </div>
                                </div>
                            </div>   
                             <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                 <div class="right-menu">
                                    <ul>
                                       
                                        <li>
                                            <div class="icon"><img src="<?=base_url() ?>img/icon/clock-icon.png" alt="top-m-icon.png"></div>
                                            <div class="text">
                                                <span>Get Support</span>
                                                <strong><?=$sitesetting[0]->mobile ?></strong>
                                            </div>
                                        </li>
                                    </ul>
                                 </div>                               
                                 
                            </div>
                                <div class="col-12">
                                    <div class="mobile-menu"></div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-end -->
        <!-- offcanvas-area -->
        <div class="offcanvas-menu">
            <span class="menu-close"><i class="fas fa-times"></i></span>
           <!--  <form role="search" method="get" id="searchform"   class="searchform" action="">
                <input type="text" name="s" id="search" value="" placeholder="Search"  />
                <button><i class="fa fa-search"></i></button>
            </form> -->

            <div id="cssmenu3" class="menu-one-page-menu-container">
                <ul id="menu-one-page-menu-2" class="menu">
                    <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="<?=base_url() ?>">Home</a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="about">About Us</a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="<?=base_url() ?>founder-msg">Founder Message</a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="<?=base_url() ?>what-we-do">What We Do</a></li>
                    <?php
                    $cate = $this->crud->selectDataByMultipleWhere('categories',array('status'=>1,));
                    foreach($cate as $data)
                        { ?>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="<?=base_url('service-details/'.$data->slug) ?>"><?=$data->name ?></a></li>
                <?php } ?>
                    <!-- <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="book-appointment">Book Appointment </a></li> -->
                    <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="<?=base_url() ?>gallery">Gallery</a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="<?=base_url() ?>blog">Blog</a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="<?=base_url() ?>contact">Contact</a></li>
                </ul>
            </div>  
            
            <div id="cssmenu2" class="menu-one-page-menu-container">
                <ul id="menu-one-page-menu-1" class="menu">
                    <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="tel:<?=$sitesetting[0]->mobile ?>"><span><?=$sitesetting[0]->mobile ?></span></a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="mailto:<?=$sitesetting[0]->email ?>"><span><?=$sitesetting[0]->email ?></span></a></li>
                </ul>
            </div>                
        </div>
        <div class="offcanvas-overly"></div>
                 <!-- offcanvas-end -->
        <!-- main-area -->