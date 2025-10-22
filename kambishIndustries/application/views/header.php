<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Kambish Industries">
	<meta name="keywords" content="Kambish Industries">
	<meta name="author" content="Kambish Industries">
	<!-- Page Title -->
	<title>Kambish Industries</title>
	<!-- logo Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>">
	<!-- Google Fonts Css-->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&amp;display=swap" rel="stylesheet">
	<!-- Bootstrap Css -->
	<link href="<?=base_url() ?>css/bootstrap.min.css" rel="stylesheet" media="screen">
	<!-- SlickNav Css -->
	<link href="<?=base_url() ?>css/slicknav.min.css" rel="stylesheet">
	<!-- Swiper Css -->
	<link rel="stylesheet" href="<?=base_url() ?>css/swiper-bundle.min.css">
	<!-- Font Awesome Icon Css-->
	<link href="<?=base_url() ?>css/all.css" rel="stylesheet" media="screen">
	<!-- Animated Css -->
	<link href="<?=base_url() ?>css/animate.css" rel="stylesheet">
	<!-- Magnific Popup Core Css File -->
	<link rel="stylesheet" href="<?=base_url() ?>css/magnific-popup.css">
	<!-- Mouse Cursor Css File -->
	<link rel="stylesheet" href="<?=base_url() ?>css/mousecursor.css">
	<!-- Main Custom Css -->
	<link href="<?=base_url() ?>css/custom.css" rel="stylesheet" media="screen">
</head>
<body>

    <!-- Preloader Start -->
	<!-- <div class="preloader">
		<div class="loading-container">
			<div class="loading"></div>
			<div id="loading-icon"><img src="images/loader.svg" alt=""></div>
		</div>
	</div> -->
	<!-- Preloader End -->

    <!-- Topbar Section Start -->
    <div class="topbar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9 col-md-8">
                    <!-- Topbar Contact Information Start -->
                    <div class="topbar-contact-info">
                        <ul>
                            <li><a href="tel:<?=$sitesetting[0]->mobile ?>"><i class="fa-solid fa-phone"></i> <?=$sitesetting[0]->mobile ?></a></li>
                            <li><a href="mailto:<?=$sitesetting[0]->email ?>"><i class="fa-regular fa-envelope"></i> <?=$sitesetting[0]->email ?></a></li>
                        </ul>
                    </div>
                    <!-- Topbar Contact Information End -->
                </div>

                <div class="col-lg-3 col-md-4">
                    <!-- Topbar Social Links Start -->
                    <div class="topbar-social-links">
                        <ul>
                            <li><a href="<?=$sitesetting[0]->facebook ?>"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="<?=$sitesetting[0]->twitter ?>"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="<?=$sitesetting[0]->youtube ?>"><i class="fa-brands fa-youtube"></i></a></li>
                            <li><a href="<?=$sitesetting[0]->instagram ?>"><i class="fa-brands fa-instagram"></i></a></li>  
                        </ul>
                    </div>
                    <!-- Topbar Social Links End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar Section End -->

    <!-- Header Start -->
	<header class="main-header">
		<div class="header-sticky">
			<nav class="navbar navbar-expand-lg">
				<div class="container">
					<!-- Logo Start -->
					<a class="navbar-brand" href="<?=base_url() ?>">
						<img src="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" alt="Logo" class="logo-image">
					</a>
					<!-- Logo End -->

					<!-- Main Menu Start -->
					<div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">

                                <!-- <li class="nav-item submenu"><a class="nav-link" href="<?=base_url() ?>">Home</a>
                                    <ul class="sub-menu">
                                        <li class="nav-item"><a class="nav-link" href="index-2.html">Home - Image</a></li>
                                        <li class="nav-item"><a class="nav-link" href="index-3.html">Home - Slider</a></li>
                                        <li class="nav-item"><a class="nav-link" href="index-4.html">Home - Video</a></li>
                                    </ul>
                                </li>  -->                               
                                <li class="nav-item"><a class="nav-link" href="<?=base_url() ?>">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?=base_url() ?>about">About us</a></li>

                                <li class="nav-item"><a class="nav-link" href="<?=base_url() ?>product">Products</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?=base_url() ?>team">Our Team</a></li>
                               
                                <li class="nav-item"><a class="nav-link" href="<?=base_url() ?>contact">Contact Us</a></li>
                                <li class="nav-item highlighted-menu"><a class="nav-link get-quote" >Get a Quote</a></li>                               
                            </ul>
                        </div>
                        <!-- Let’s Start Button Start -->
                        <div class="header-btn d-inline-flex">
                            <a  class="btn-default get-quote">Get a Quote</a>
                        </div>
                        <!-- Let’s Start Button End -->
					</div>
					<!-- Main Menu End -->
					<div class="navbar-toggle"></div>
				</div>
			</nav>
			<div class="responsive-menu"></div>
		</div>
	</header>
	<!-- Header End -->