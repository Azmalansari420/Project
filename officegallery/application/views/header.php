
<!doctype html>
<html lang="en">
	
	<head>

		<title><?=website_name ?></title>
		<meta charset="utf-8">
		<meta name="author" content="<?=website_name ?>">
		<meta name="description" content="<?=website_name ?>">
		<meta name="keywords" content="<?=website_name ?>">

		<!-- Mobile specific metas
		============================================ -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Favicon
		============================================ -->
		<link rel="shortcut icon" type="image/x-icon" href="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>">

		<!-- Google web fonts
		============================================ -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>

		<!-- Libs CSS
		============================================ -->
		<link rel="stylesheet" href="<?=base_url() ?>assets/css/animate.css">
		<link rel="stylesheet" href="<?=base_url() ?>assets/plugins/fancybox/jquery.fancybox.css">
		<link rel="stylesheet" href="<?=base_url() ?>assets/plugins/fancybox/helpers/jquery.fancybox-thumbs.css">
		<link rel="stylesheet" href="<?=base_url() ?>assets/plugins/fancybox/helpers/jquery.fancybox-buttons.css">
		<link rel="stylesheet" href="<?=base_url() ?>assets/css/bootstrap.min.css">

		<link rel="stylesheet" href="<?=base_url() ?>assets/css/style.css">
		
		<script src="<?=base_url() ?>assets/plugins/modernizr.js"></script>

		<style>
			#page_wrap {
				    padding-bottom: 50px !important;
		    overflow: scroll !important;
		}
		</style>
	
	</head>

	<body>

	<!-- 	<div id="page_loader" class="page_loader">
			<div id="loader"></div>
		</div>
 -->

	

		<div id="document_wrap">


			<header role="banner" id="header" class="vm">

				<!-- - - - - - - - - - - - - - Logo - - - - - - - - - - - - - - - - -->

				<a href="<?=base_url() ?>" class="logo">
					
					<img src="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" alt="">

				</a>

				

				<div id="horizontal_menu_wrap" class="hm_wrap">

					<nav>

						<ul class="navigation">

							<li class="has_submenu current">
								<a href="<?=base_url() ?>">Home</a>
								<ul class="submenu">
									<li><a href="<?=base_url() ?>">Fullscreen slider</a></li>
								</ul>
							</li>

							<li class="has_submenu current">
								<a href="<?=base_url() ?>">Category</a>
								<ul class="submenu">
									<?php
									$category = $this->db->get_where('categories',array('status'=>1))->result_object();
									foreach($category as $data)
										{ ?>
									<li><a href="<?=base_url($data->slug) ?>"><?=$data->name ?></a></li>
								<?php } ?>
								</ul>
							</li>


							

						</ul>

					</nav>

				</div>


				<div id="vertical_menu_wrap" class="vm_wrap">
					<nav>

						<ul class="navigation">

						


							<li class="has_submenu">
								<a href="<?=base_url() ?>">Home</a>
							</li>
						

							<li class="has_submenu">
								<a href="">Category</a>
								<ul class="submenu">
									<?php
									$category = $this->db->get_where('categories',array('status'=>1))->result_object();
									foreach($category as $data)
										{ ?>
									<li><a href="<?=base_url($data->slug) ?>"><?=$data->name ?></a></li>
								<?php } ?>
								</ul>
							</li>

						</ul>

					</nav>

				</div>

				<div id="top_actions_wrap">

					<form role="search" class="nav_searchform">

						<input type="search" placeholder="Search..." name="">

						<button><span class="si-icon" data-width="24" data-height="24" data-event="mouseover" data-icon-name="search"></span></button>

					</form>

					<span id="toggle_menu" class="si-icon" data-width="36" data-height="36" data-event="click" data-icon-name="hamburgerCross">
					</span>

				</div>

			</header>
