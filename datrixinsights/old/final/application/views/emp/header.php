<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Admin-<?php echo $page;?></title>
	<!--favicon-->
	<link rel="icon" href="<?php echo base_url();?>assets/images/favicon-32x32.png" type="image/png" />
	<!-- Vector CSS -->
	<link href="<?php echo base_url();?>assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
	<!--plugins-->
	<link href="<?php echo base_url();?>assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="<?php echo base_url();?>assets/css/pace.min.css" rel="stylesheet" />
	<script src="<?php echo base_url();?>assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
	<!-- Icons CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/icons.css" />
	<!-- App CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/app.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/dark-sidebar.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/dark-theme.css" />
	<link href="<?php echo base_url();?>assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>assets/plugins/select2/css/select2-bootstrap4.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>assets/plugins/datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/plugins/datatable/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">

<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</head>

<body>
	<!-- wrapper -->
	<div class="wrapper">
		<!--sidebar-wrapper-->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div class="">
					<img src="<?php echo base_url();?>assets/images/logo-icon.png" class="logo-icon-2" alt="" />
				</div>
				<div>
					<h4 class="logo-text">Panel</h4>
				</div>
				<a href="javascript:;" class="toggle-btn ml-auto"> <i class="bx bx-menu"></i>
				</a>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a href="<?php echo base_url();?>employee/dashboard">
						<div class="parent-icon icon-color-1"><i class="bx bx-home-alt"></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
					
				</li>
				
				
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon icon-color-12"> <i class="bx bx-donate-blood"></i>
						</div>
						<div class="menu-title">Project</div>
					</a>
					<ul>
					
						<li> <a href="<?php echo base_url();?>employee/all_project"><i class="bx bx-right-arrow-alt"></i>My Projects</a>
						</li>
						<li> <a href="<?php echo base_url();?>employee/active_project"><i class="bx bx-right-arrow-alt"></i>My Active Projects</a>
						</li>
	
					</ul>
				</li>
				<li class="menu-label">Reports & Management</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon icon-color-1"> <i class="bx bx-comment-edit"></i>
						</div>
						<div class="menu-title">Reports</div>
					</a>
					<ul>
						<!--<li> <a href="<?php echo base_url();?>employee/all_reports"><i class="bx bx-right-arrow-alt"></i>All Reports</a>
						</li>-->
						<li> <a href="<?php echo base_url();?>employee/summary_reports"><i class="bx bx-right-arrow-alt"></i>Summary Reports</a>
						</li>
						
						
					</ul>
				</li>
				
			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar-wrapper-->
		<!--header-->
		<header class="top-header">
			<nav class="navbar navbar-expand">
				<div class="left-topbar d-flex align-items-center">
					<a href="javascript:;" class="toggle-btn">	<i class="bx bx-menu"></i>
					</a>
				</div>
				
				<div class="right-topbar ml-auto">
					<ul class="navbar-nav">
					<!--	
						<li class="nav-item dropdown dropdown-lg">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="javascript:;" data-toggle="dropdown">	<i class="bx bx-bell vertical-align-middle"></i>
								<span class="msg-count">8</span>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a href="javascript:;">
									<div class="msg-header">
										<h6 class="msg-header-title">8 New</h6>
										<p class="msg-header-subtitle">Application Notifications</p>
									</div>
								</a>
								<div class="header-notifications-list">
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="notify bg-light-primary text-primary"><i class="bx bx-group"></i>
											</div>
											<div class="media-body">
												<h6 class="msg-name">New Customers<span class="msg-time float-right">14 Sec
													ago</span></h6>
												<p class="msg-info">5 new user registered</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="notify bg-light-danger text-danger"><i class="bx bx-cart-alt"></i>
											</div>
											<div class="media-body">
												<h6 class="msg-name">New Orders <span class="msg-time float-right">2 min
													ago</span></h6>
												<p class="msg-info">You have recived new orders</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="notify bg-light-shineblue text-shineblue"><i class="bx bx-file"></i>
											</div>
											<div class="media-body">
												<h6 class="msg-name">24 PDF File<span class="msg-time float-right">19 min
													ago</span></h6>
												<p class="msg-info">The pdf files generated</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="notify bg-light-cyne text-cyne"><i class="bx bx-send"></i>
											</div>
											<div class="media-body">
												<h6 class="msg-name">Time Response <span class="msg-time float-right">28 min
													ago</span></h6>
												<p class="msg-info">5.1 min avarage time response</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="notify bg-light-purple text-purple"><i class="bx bx-home-circle"></i>
											</div>
											<div class="media-body">
												<h6 class="msg-name">New Product Approved <span
													class="msg-time float-right">2 hrs ago</span></h6>
												<p class="msg-info">Your new product has approved</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="notify bg-light-warning text-warning"><i class="bx bx-message-detail"></i>
											</div>
											<div class="media-body">
												<h6 class="msg-name">New Comments <span class="msg-time float-right">4 hrs
													ago</span></h6>
												<p class="msg-info">New customer comments recived</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="notify bg-light-success text-success"><i class='bx bx-check-square'></i>
											</div>
											<div class="media-body">
												<h6 class="msg-name">Your item is shipped <span class="msg-time float-right">5 hrs
													ago</span></h6>
												<p class="msg-info">Successfully shipped your item</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="notify bg-light-sinata text-sinata"><i class='bx bx-user-pin'></i>
											</div>
											<div class="media-body">
												<h6 class="msg-name">New 24 authors<span class="msg-time float-right">1 day
													ago</span></h6>
												<p class="msg-info">24 new authors joined last week</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="notify bg-light-mehandi text-mehandi"><i class='bx bx-door-open'></i>
											</div>
											<div class="media-body">
												<h6 class="msg-name">Defense Alerts <span class="msg-time float-right">2 weeks
													ago</span></h6>
												<p class="msg-info">45% less alerts last 4 weeks</p>
											</div>
										</div>
									</a>
								</div>
								<a href="javascript:;">
									<div class="text-center msg-footer">View All Notifications</div>
								</a>
							</div>
						</li>
						-->
						<li class="nav-item dropdown dropdown-user-profile">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-toggle="dropdown">
								<div class="media user-box align-items-center">
									<div class="media-body user-info">
										<p class="user-name mb-0"><?php echo $this->session->userdata('name'); ?></p>
										<p class="designattion mb-0">Available</p>
									</div>
									<img src="https://via.placeholder.com/110x110" class="user-img" alt="user avatar">
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-right">	<a class="dropdown-item" href="<?php echo base_url();?>employee/profile"><i
										class="bx bx-user"></i><span>Profile</span></a>
								
								<div class="dropdown-divider mb-0"></div>	<a class="dropdown-item" href="<?php echo base_url();?>employee/logout"><i
										class="bx bx-power-off"></i><span>Logout</span></a>
							</div>
						</li>
						
					</ul>
				</div>
			</nav>
		</header>