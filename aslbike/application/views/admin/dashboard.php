<!doctype html>
<html lang="en">
<head>
	<title>Admin Dashboard</title>

	<?php $this->load->view('admin/include/css');?>

	
</head>

<body class="bg-theme bg-theme2">
	<!--wrapper-->
	<div class="wrapper">




	<?php $this->load->view('admin/include/left-sidebar');?>

	<?php $this->load->view('admin/include/header'); ?>


		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">


				   <div class="row row-cols-1 row-cols-lg-3">				 

						
						 <div class="col">
						 	<a href="<?php echo base_url('admin/dashboard');?>">
								<div class="card radius-10">
									<div class="card-body">
										<div class="text-center">
											<div class="widgets-icons rounded-circle mx-auto mb-3"><i class="bx bx-home-circle"></i>
											</div>
											<h4 class="my-1">Dashboard</h4>
										</div>
									</div>
								</div>
							</a>
						</div>

        <!-- <button onClick="window.location.reload();">Refresh Page</button> -->
						


						<div class="col">
						 	<a href="<?php echo base_url('admin_con/site_setting/edit/1');?>">
								<div class="card radius-10">
									<div class="card-body">
										<div class="text-center">
											<div class="widgets-icons rounded-circle mx-auto mb-3"><i class="bx fadeIn animated bx bx-cog"></i>
											</div>
											<h4 class="my-1">Site Setting</h4>
											
										</div>
									</div>
								</div>
							</a>
						</div>


						 <div class="col">
						 	<a href="<?php echo base_url('admin_con/slider/listing');?>">
								<div class="card radius-10">
									<div class="card-body">
										<div class="text-center">
											<div class="widgets-icons rounded-circle mx-auto mb-3">
												<i class="bx fadeIn animated bx bx-slider-alt"></i>
											</div>
											<h4 class="my-1">Slider</h4>
										</div>
									</div>
								</div>
							</a>
						</div>
						
						<div class="col">
						 	<a href="<?php echo base_url('admin_con/partner/listing');?>">
								<div class="card radius-10">
									<div class="card-body">
										<div class="text-center">
											<div class="widgets-icons rounded-circle mx-auto mb-3"><i class="bx fadeIn animated bx bx-video-recording"></i>
											</div>
											<h4 class="my-1">Partner</h4>
											
										</div>
									</div>
								</div>
							</a>
						</div>


						 <div class="col">
						 	<a href="<?php echo base_url('admin_con/testimonials/listing');?>">
								<div class="card radius-10">
									<div class="card-body">
										<div class="text-center">
											<div class="widgets-icons rounded-circle mx-auto mb-3"><i class="bx fadeIn animated bx bx-transfer-alt"></i>
											</div>
											<h4 class="my-1">Testimonials</h4>
											
										</div>
									</div>
								</div>
							</a>
						</div>


						<div class="col">
						 	<a href="<?php echo base_url('admin_con/blog/listing');?>">
								<div class="card radius-10">
									<div class="card-body">
										<div class="text-center">
											<div class="widgets-icons rounded-circle mx-auto mb-3"><i class="bx bx-video-recording"></i>
											</div>
											<h4 class="my-1">blog</h4>
											
										</div>
									</div>
								</div>
							</a>
						</div>


						<div class="col">
						 	<a href="<?php echo base_url('admin_con/engineer/listing');?>">
								<div class="card radius-10">
									<div class="card-body">
										<div class="text-center">
											<div class="widgets-icons rounded-circle mx-auto mb-3"><i class="bx bx-video-recording"></i>
											</div>
											<h4 class="my-1">Engineer</h4>
											
										</div>
									</div>
								</div>
							</a>
						</div>


						


						<div class="col">
						 	<a href="<?php echo base_url('admin_con/contact/listing');?>">
								<div class="card radius-10">
									<div class="card-body">
										<div class="text-center">
											<div class="widgets-icons rounded-circle mx-auto mb-3"><i class="bx fadeIn animated bx bx-notepad"></i>
											</div>
											<h4 class="my-1">Contact Us</h4>
											
										</div>
									</div>
								</div>
							</a>
						</div>


						

					</div>
					

					  

			</div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!-- Azmal Ansari -->
		<!--Start Back To Top Button--> 
		<a href="javaScript:;" class="back-to-top">
			<i class='bx bxs-up-arrow-alt'></i>
		</a>
		<!--End Back To Top Button-->
		
	</div>
	<!--end wrapper-->
	
	
	<?php $this->load->view('admin/include/footer');?>
</body>
</html>