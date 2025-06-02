<?php
$sitesetting = $this->crud->fetchdatabyid('1','site_setting');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="description" content="Psychic Solutions India">
	<meta name="author" content="Psychic Solutions India">
	<meta name="format-detection" content="telephone=no">
	<title>Psychic Solutions India</title>
	<!-- Stylesheets -->
	<link href="<?=base_url() ?>vendor/slick/slick.css" rel="stylesheet">
	<link href="<?=base_url() ?>vendor/animate/animate.min.css" rel="stylesheet">
	<link href="<?=base_url() ?>icons/style.css" rel="stylesheet">
	<link href="<?=base_url() ?>vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.css" rel="stylesheet">
	<link href="<?=base_url() ?>css/style.css" rel="stylesheet">
    <link href="<?=base_url() ?>color/color.css" rel="stylesheet">
<!--Favicon-->
	<link rel="icon" href="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" type="image/x-icon">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
	<!-- Google map -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;signed_in=true&amp;libraries=places"></script>
</head>

<style>
	.header-nav .nav-item {
	    padding: 0 7px;
	}
	.img-class{
    max-width: 100%;
    height: 100px;
}
.header-phone a {
    color: #fff;
    font-size: 18px;
}
.header-info {
    font-size: 18px;
}

.button-2 {
  background-color: #004A7F;
  -webkit-border-radius: 10px;
  border-radius: 10px;
  border: none;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: Arial;
  font-size: 20px;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  -webkit-animation: glowing 1500ms infinite;
  -moz-animation: glowing 1500ms infinite;
  -o-animation: glowing 1500ms infinite;
  animation: glowing 1500ms infinite;
}
@-webkit-keyframes glowing {
  0% { background-color: #66b556; -webkit-box-shadow: 0 0 3px #66b556; }
  50% { background-color: #66b556; -webkit-box-shadow: 0 0 40px #66b556; }
  100% { background-color: #66b556; -webkit-box-shadow: 0 0 3px #66b556; }
}

@-moz-keyframes glowing {
  0% { background-color: #66b556; -moz-box-shadow: 0 0 3px #66b556; }
  50% { background-color: #66b556; -moz-box-shadow: 0 0 40px #66b556; }
  100% { background-color: #66b556; -moz-box-shadow: 0 0 3px #66b556; }
}

@-o-keyframes glowing {
  0% { background-color: #66b556; box-shadow: 0 0 3px #66b556; }
  50% { background-color: #66b556; box-shadow: 0 0 40px #66b556; }
  100% { background-color: #66b556; box-shadow: 0 0 3px #66b556; }
}

@keyframes glowing {
  0% { background-color: #66b556; box-shadow: 0 0 3px #66b556; }
  50% { background-color: #66b556; box-shadow: 0 0 40px #66b556; }
  100% { background-color: #66b556; box-shadow: 0 0 3px #66b556; }
}



 @media only screen and (min-width: 1025px) {
        .desktop-none {
            display:none !important;
        }
    } 
    @media only screen and (max-width: 1026px) {
        .mobile-none {
            display:none !important;
        }
    } 


</style>



<body class="shop-page">
	
	
<!--header-->
<header class="header">
		<div class="header-mobile-info">
			<div class="header-mobile-info-content js-info-content">
				<ul class="icn-list-sm">
					<li><i class="icon-placeholder2"></i><?=$sitesetting[0]->address ?>
					</li>
					<li><i class="icon-telephone"></i><span class="text-nowrap"><?=$sitesetting[0]->mobile ?></span>, <span class="text-nowrap"><?=$sitesetting[0]->mobile ?></span></li>
					<li><i class="icon-black-envelope"></i><a href="mailto:<?=$sitesetting[0]->email ?>"><?=$sitesetting[0]->email ?></a></li>
					<li><i class="icon-clock"></i>Mon-Fri: 08:00 - 20:00
						<br> Saturday: 08:00 - 18:00</li>
				</ul>
			</div>
		</div>
		<div class="header-mobile-top">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-3">
						<div class="header-mobile-info-toggle js-info-toggle"></div>
					</div>
					<div class="col-auto header-button-wrap ml-auto"><a href="#" class="btn" data-toggle="modal" data-target="#modalBookingForm"><i class="icon-right-arrow"></i>APPOINTMENT<i class="icon-right-arrow"></i></a></div>
				</div>
			</div>
		</div>
		<div class="header-topline d-none d-lg-flex">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-auto d-flex align-items-center">
						<div class="header-phone"><i class="icon-telephone"></i><a href="tel:1-847-555-5555"><?=$sitesetting[0]->mobile ?></a></div>
						<div class="header-info"><i class="icon-placeholder2"></i><?=substr($sitesetting[0]->address,0,80) ?></div>
						<div class="header-info"><i class="icon-black-envelope"></i><a href="mailto:<?=$sitesetting[0]->email ?>"><?=$sitesetting[0]->email ?></a></div>
					</div>
					<!-- <div class="col-12 ml-auto d-flex align-items-center justify-content-start">
						<span class="header-social">
							<a href="<?=$sitesetting[0]->facebook ?>" class="hovicon"><i class="icon-facebook-logo-circle"></i></a>
							<a href="<?=$sitesetting[0]->twitter ?>" class="hovicon"><i class="icon-twitter-logo-circle"></i></a>
							<a href="<?=$sitesetting[0]->instagram ?>" class="hovicon"><i class="icon-instagram-circle"></i></a>
							<a href="<?=$sitesetting[0]->youtube ?>" class="hovicon"><i class="icon-play"></i></a>
						</span>
					</div> -->
				</div>
			</div>
		</div>
		<div class="header-content">
			<div class="container">
				<div class="row align-items-lg-center">
					<button class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbarNavDropdown">
						<span class="icon-menu"></span>
					</button>

					<div class="col-lg-auto col-lg-1 d-flex align-items-lg-center">
						<a href="<?=base_url() ?>" class="header-logo">
							<img src="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" alt="" class="img-class">
						</a>
					</div>

					<div class="col-lg ml-auto header-nav-wrap">
						<div class="header-nav js-header-nav">
							<nav class="navbar navbar-expand-lg btco-hover-menu">
								<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
									<ul class="navbar-nav">
										<li class="nav-item">
											<a class="nav-link" href="<?=base_url() ?>">Home</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="<?=base_url() ?>about">About Us</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Services</a>
											<ul class="dropdown-menu">
												<?php
												$services = $this->crud->selectDataByMultipleWhere('services',array('status'=>1,));
												foreach($services as $data)
													{ ?>
												<li><a class="dropdown-item" href="<?=base_url('service-details/'.$data->slug) ?>"><?=$data->name ?></a></li>
												<?php } ?>
											</ul>
										</li>
										
										<li class="nav-item">
											<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Facilities Available</a>
											<ul class="dropdown-menu">
												<?php
												$facalty = $this->crud->selectDataByMultipleWhere('facalty',array('status'=>1,));
												foreach($facalty as $data)
													{ ?>
												<li><a class="dropdown-item" href="<?=base_url('facalty-details/'.$data->slug) ?>"><?=$data->name ?></a></li>
												<?php } ?>
											</ul>
										</li>
									<!-- 	<li class="nav-item">
											<a class="nav-link" href="">Feedback</a>
										</li> -->
										<!-- <li class="nav-item">
											<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Specialize Treatment </a>
											<ul class="dropdown-menu">
												<?php
												$special = $this->crud->selectDataByMultipleWhere('special',array('status'=>1,));
												foreach($special as $data)
													{ ?>
												<li><a class="dropdown-item" href="<?=base_url('special-details/'.$data->slug) ?>"><?=$data->name ?></a></li>
												<?php } ?>
											</ul>
										</li> -->
										<li class="nav-item">
											<a class="nav-link" href="<?=base_url() ?>diesese">SPECIALIZE TREATMENT</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="<?=base_url() ?>faq">FAQ's</a>
										</li>

										<li class="nav-item">
											<a class="nav-link" href="<?=base_url() ?>patient-speak">Patient Speak</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="<?=base_url() ?>packages">Packages</a>
										</li>
										<li class="nav-item" style="background: #006a66;
    padding: 4px;
    border-radius: 7px;
    color: white;">
											<a class="nav-link" style="color: white;" href="<?=base_url() ?>qrcode">Appointment</a>
										</li>
									</ul>
								</div>
							</nav>
						</div>
						<div class="header-search">
							<img src="<?=base_url() ?>images/symbol.png" class="img-class" style="height: 75px;">
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</header>