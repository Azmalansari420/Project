

<!DOCTYPE HTML>
<html lang="en-US">
 <head>
		<meta charset="UTF-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title><?=website_name ?></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Favicon Icon -->
        <link rel="icon"  type="image/png" href="<?php echo base_url(); ?>media/uploads/site_setting/<?php echo $sitesetting[0]->logo; ?>">		
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>venobox/venobox.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/plugin_theme_css.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/responsive.css"/>
		<!-- modernizr js -->	
        <script src="<?php echo base_url(); ?>assets/js/vendor/modernizr-2.8.3.min.js"></script>		
    </head>
<body>

<style>
	.breadcumb-area {
	    padding: 70px 0px;
	    background-image: url(<?=base_url() ?>assets/images/contact-bg.jpg);
	}
	.hackery_menu ul .sub-menu li {
	    position: relative;
	    border-bottom: 1px solid;
	    background: #364053;
	    color: white;
	}
	.hackery_menu ul .sub-menu {
	    padding: 0px 0;
	}

	.hackery_menu ul .sub-menu li a {
	    color: #ffffff;
	}
	.hackery_menu ul .sub-menu {
	    width: max-content;
	}
</style>
<div class="em40_header_area_main">
	<!-- HEADER TOP AREA -->
	<div class="hackery-header-top">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-lg-7 col-xl-9 col-md-9 col-sm-12">
					<div class="top-address">
						<p>	
							<a href="tel:<?php echo $sitesetting[0]->mobile; ?>"><i class="fas fa-phone-alt"></i><?php echo $sitesetting[0]->mobile; ?></a>
							<a href="mailto:<?php echo $sitesetting[0]->email; ?>"><i class="fas fa-envelope"></i><?php echo $sitesetting[0]->email; ?></a>
						</p>
					</div>
				</div>
				<div class="col-xs-12 col-lg-3 col-xl-3 col-md-3 col-sm-12 ">
					<div class="top-right-menu">
						<ul class="social-icons text-right text_m_center">
							<li><a href="<?php echo $sitesetting[0]->facebook; ?>" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
							<li><a href="<?php echo $sitesetting[0]->twitter; ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="<?php echo $sitesetting[0]->instagram; ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>							
							<li><a href="<?php echo $sitesetting[0]->youtube; ?>" target="_blank"><i class="fab fa-youtube"></i></a></li>							
						</ul>
					</div>
				</div>	
			</div>										
		</div>
	</div>
	<!-- END HEADER TOP AREA -->
 	<div class="hackery-main-menu one_page hidden-xs hidden-sm  witr_h_h10">
		<div class="hackery_nav_area scroll_fixed postfix">
			<div class="container">
				<div class="row logo-left">				
					<div class="col-md-3 col-sm-3 col-xs-4">
						<div class="logo" style="padding: 6px 0;">
							<a class="main_sticky_main_l" href="<?php echo base_url(''); ?>" title="<?=website_name ?>">
								<img src="<?php echo base_url(); ?>media/uploads/site_setting/<?php echo $sitesetting[0]->logo; ?>" alt="<?=website_name ?>" style="width: 100px;">
							</a>
							<a class="main_sticky_l" href="<?php echo base_url(''); ?>" title="<?=website_name ?>">
								<img src="<?php echo base_url(); ?>media/uploads/site_setting/<?php echo $sitesetting[0]->logo; ?>" alt="<?=website_name ?>" style="width: 100px;">
							</a>
						</div>	
					</div>
					<!-- MAIN MENU -->
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="hackery_menu main-search-menu">						
							<ul class="sub-menu">
								<li class="menu-item-has-children">
									<a href="<?php echo base_url(); ?>">Home</a>
								</li>
								<li class="menu-item-has-children">
									<a href="<?php echo base_url('about'); ?>">About</a>
								</li>
								<li class="menu-item-has-children">
									<a href="<?php echo base_url('product'); ?>">Our Product</a>
								</li>
								
								<li class="menu-item-has-children">
									<a href="<?php echo base_url('service'); ?>">Our Service</a>
									<ul class="sub-menu">
										<?php
										$category = $this->db->get_where('categories',array('status'=>1))->result_object();
										foreach($category as $data)
											{ ?>
										<li class="menu-item-has-children">
											<a href="<?php echo base_url($data->slug); ?>"><?=$data->name ?></a>
										</li>
									<?php } ?>
									</ul>
								</li>
								
								<li class="menu-item-has-children">
									<a href="<?php echo base_url('contact'); ?>">Contact</a>
								</li>
							</ul>
							<div class="donate-btn-header">
								<a class="dtbtn" href="<?php echo base_url('contact'); ?>">Book Now</a>	
							</div>	
						</nav>
					</div>	
				</div>
			</div>
		</div>
	</div>
</div>


<!-- MOBILE MENU Logo AREA -->
<div class="mobile_logo_area hidden-md hidden-lg">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="mobile_menu_logo text-center">
					<a href="<?php echo base_url(''); ?>" title="<?=website_name ?>">
						<img src="<?php echo base_url(); ?>media/uploads/site_setting/<?php echo $sitesetting[0]->logo; ?>" alt="<?=website_name ?>" style="width: 120px;">
					</a>		
				</div>
			</div>
		</div>
	</div>
</div>

<!-- MOBILE MENU AREA -->
<div class="home-2 mbm hidden-md hidden-lg  header_area main-menu-area">
	<div class="menu_area mobile-menu">
		<nav class="hackery_menu">						
			<ul class="sub-menu">
				<li class="menu-item-has-children">
					<a href="<?php echo base_url(''); ?>">Home</a>
				</li>
				<li class="menu-item-has-children">
					<a href="<?php echo base_url('about'); ?>">About</a>
				</li>
				<li class="menu-item-has-children">
					<a href="<?php echo base_url('product'); ?>">Our Product</a>
				</li>
				<li class="menu-item-has-children">
					<a href="<?php echo base_url('service'); ?>">Our Service</a>
					<ul class="sub-menu">
						<?php
							$category = $this->db->get_where('categories',array('status'=>1))->result_object();
							foreach($category as $data)
								{ ?>
						<li class="menu-item-has-children">
							<a href="<?php echo base_url($data->slug); ?>"><?=$data->name ?></a>
						</li>
					<?php } ?>
					</ul>
				</li>
				<li class="menu-item-has-children">
					<a href="<?php echo base_url('contact'); ?>">Contact</a>
					
				</li>
			</ul>
			
		</nav>	
	</div>					
</div>
<!-- END MOBILE MENU AREA  -->