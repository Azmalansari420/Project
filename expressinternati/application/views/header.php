<?php
$sitesetting = $this->crud->fetchdatabyid('1','site_setting');
?>

<!DOCTYPE php>
<php lang="zxx">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="<?=base_url() ?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?=base_url() ?>assets/css/boxicons.min.css">
		<link rel="stylesheet" href="<?=base_url() ?>assets/css/meanmenu.min.css">
		<link rel="stylesheet" href="<?=base_url() ?>assets/css/magnific-popup.php">
		<link rel="stylesheet" href="<?=base_url() ?>assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="<?=base_url() ?>assets/css/owl.theme.default.min.css">
		<link rel="stylesheet" href="<?=base_url() ?>assets/css/odometer.css">
		<link rel="stylesheet" href="<?=base_url() ?>assets/css/animate.min.css">
		<link rel="stylesheet" href="<?=base_url() ?>assets/css/style.css">
		<link rel="stylesheet" href="<?=base_url() ?>assets/css/dark.css">
		<link rel="stylesheet" href="<?=base_url() ?>assets/css/responsive.css">
		<link rel="apple-touch-icon" sizes="180x180" href="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>">
		<link rel="icon" type="image/png" sizes="32x32" href="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>">
		<link rel="icon" type="image/png" sizes="16x16" href="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>">
		<link rel="icon"  href="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>">
		<title>Express International Courier</title>
	</head>
	<body>

		<style>
			.ferry-nav .navbar .navbar-nav .nav-item {
			    position: relative;
			    margin-left: 5px;
			    margin-right: 5px;
			}
			.footer-area .footer-widget .footer-text li a {
			    color: #000000;
			    font-weight: 600;
			}
			.footer-area .footer-widget .info-list li a {
			    color: #000000;
			}
			.footer-area .footer-widget p {
			    color: #000000;
			}
			ul.info-list>li {
			    color: black;
			}
			@media only screen and (min-width: 1200px) {
			    .container-foooter {
			        max-width: 1425px;
			    }
			}
		</style>
		<!-- <div class="preloader">
			<div class="d-table">
				<div class="d-table-cell">
					<div class="lds-ring"><div></div><div></div><div></div><div></div></div>
				</div>
			</div>
		</div> -->
		<header class="header-area">
			<div class="top-header">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 col-sm-6">
							<ul class="left-info">
								<li>
									<a href="mailto:<?=$sitesetting[0]->email ?>">
										<i class="bx bxs-envelope"></i><?=$sitesetting[0]->email ?>
									</a>
								</li>
								<li>
									<a href="tel:<?=$sitesetting[0]->mobile ?>">
										<i class="bx bxs-phone-call"></i>
										<?=$sitesetting[0]->mobile ?>
									</a>
								</li>
							</ul>
						</div>
						<div class="col-lg-6 col-sm-6">
							<ul class="right-info">
								<li>
									<a href="<?=$sitesetting[0]->facebook ?>" target="_blank">
										<i class="bx bxl-facebook"></i>
									</a>
								</li>
								<li>
									<a href="<?=$sitesetting[0]->twitter ?>" target="_blank">
										<i class="bx bxl-twitter"></i>
									</a>
								</li>
								<li>
									<a href="<?=$sitesetting[0]->youtube ?>" target="_blank">
										<i class="bx bxl-youtube"></i>
									</a>
								</li>
								<li>
									<a href="<?=$sitesetting[0]->instagram ?>" target="_blank">
										<i class="bx bxl-instagram"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="navbar-area">
				<div class="ferry-responsive-nav">
					<div class="container">
						<div class="ferry-responsive-menu">
							<div class="logo">
								<a href="<?=base_url() ?>">
									<img src="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" class="main-logo" alt="logo">
									<!-- <img src="<?=base_url() ?>assets/img/logo-2.png" class="white-logo" alt="logo"> -->
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="ferry-nav">
					<div class="container">
						<nav class="navbar navbar-expand-md navbar-light">
							<a class="navbar-brand" href="<?=base_url() ?>">
								<img src="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" class="main-logo" alt="logo">
								<!-- <img src="<?=base_url() ?>assets/img/logo-2.png" class="white-logo" alt="logo"> -->
							</a>
							<div class="collapse navbar-collapse mean-menu">
								<ul class="navbar-nav ms-auto">
									<li class="nav-item">
										<a href="<?=base_url() ?>" class="nav-link active">Home</a>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link">
											Track Courier <i class="bx bx-chevron-down"></i>
										</a>
										<ul class="dropdown-menu">
											<?php
											$track = $this->crud->selectDataByMultipleWhere('track_courier',array('status'=>1,));
											foreach($track as $data)
												{ ?>
											<li class="nav-item">
												<a href="<?=$data->link ?>" target="_blank" class="nav-link"><?=$data->name ?></a>
											</li>
											<?php } ?>
										</ul>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link">
											Our Services <i class="bx bx-chevron-down"></i>
										</a>
										<ul class="dropdown-menu">
											<?php
											$track = $this->crud->selectDataByMultipleWhere('services',array('status'=>1,));
											foreach($track as $data)
												{ ?>
											<li class="nav-item">
												<a href="<?=base_url('service-details/'.$data->slug) ?>" class="nav-link"><?=$data->name ?></a>
											</li>
										<?php } ?>
										</ul>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link">
											Top Countries <i class="bx bx-chevron-down"></i>
										</a>
										<ul class="dropdown-menu">
											<?php
											$country = $this->crud->selectDataByMultipleWhere('country',array('status'=>1,'type'=>1));
											foreach($country as $data)
												{ ?>
											<li class="nav-item">
												<a href="<?=base_url('country-details/'.$data->slug) ?>" class="nav-link"><?=$data->name ?></a>
											</li>
											<?php } ?>
										</ul>
									</li>

									<!-- <li class="nav-item">
										<a href="#" class="nav-link">
											Other Countries <i class="bx bx-chevron-down"></i>
										</a>
										<ul class="dropdown-menu">
											<?php
											$country = $this->crud->selectDataByMultipleWhere('country',array('status'=>1,'type'=>2));
											foreach($country as $data)
												{ ?>
											<li class="nav-item">
												<a href="<?=base_url('country-details/'.$data->slug) ?>" class="nav-link"><?=$data->name ?></a>
											</li>
											<?php } ?>
										</ul>
									</li> -->
									<li class="nav-item">
										<a href="<?=base_url() ?>other-country" class="nav-link">Other Country</a>
									</li>

									<li class="nav-item">
										<a href="<?=base_url() ?>faq" class="nav-link">FAQ's</a>
									</li>
									
									<li class="nav-item">
										<a href="<?=base_url() ?>contact" class="nav-link">Contact</a>
									</li>
									<!-- <li class="nav-item">
										<a href="javascript:void(0)" class="nav-link search-box">
											<i class="bx bx-search"></i>
										</a>
									</li> -->
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>