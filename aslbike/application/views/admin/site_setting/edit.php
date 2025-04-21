<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<title>Edit</title>

	<?php $this->load->view('admin/include/css');?>
	
</head>

<body class="bg-theme bg-theme2">
	<!--wrapper-->
	<div class="wrapper">

	<?php $this->load->view('admin/include/left-sidebar');?>



		<?php $this->load->view('admin/include/header'); ?>



		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="d-lg-flex align-items-center mb-4 gap-3">
					<div class="position-relative">
					  <ol class="breadcrumb mb-0 p-0">
						<li class="breadcrumb-item">
							<a href="#">Home / </a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">Site Setting</li>
					  </ol>
					</div>
				  
				</div>

							<?php echo $this->session->flashdata('message') ?>
				

					<div class="card">
						<div class="card-body">
							<form method="post" class="row g-3" enctype="multipart/form-data">

								<div class="container">
									<div class="main-body">
										<div class="row">
											<div class="col-lg-4">
												<div class="card">
													<div class="card-body" style="padding:0;">
															<label class="form-label"style="width: 100%;text-align: center; position: relative;border: 1px solid aliceblue;">
														Upload Logo
													<img id="blah" src="<?php echo base_url(); ?>media/uploads/site_setting/<?php echo $EDITDATA[0]->logo; ?>" class="sd" style="width: 100%; height: 100%; position: relative; top: -22px;">
													<input  type="hidden" class="form-control" name="oldimage" value="<?php echo $EDITDATA[0]->logo; ?>">
													<input style="display: none;" type="file" class="form-control" name="logo"  id="imgInp">
													</label>
														<hr class="my-4">
														
													</div>
												</div>
											</div>

											<div class="col-lg-8">
												<div class="card">
													<div class="card-body">

														<div class="row mb-3">
															<div class="col-sm-3">
																<h6 class="mb-0">Mobile</h6>
															</div>
															<div class="col-sm-9">
																<input type="text" class="form-control" name="mobile" value="<?php echo $EDITDATA[0]->mobile; ?>">
															</div>
														</div>



														<div class="row mb-3">
															<div class="col-sm-3">
																<h6 class="mb-0">Email</h6>
															</div>
															<div class="col-sm-9">
																<input type="text" class="form-control" name="email" value="<?php echo $EDITDATA[0]->email; ?>">
															</div>
														</div>





														<div class="row mb-3">
															<div class="col-sm-3">
																<h6 class="mb-0">Address</h6>
															</div>
															<div class="col-sm-9">
																<input type="text" class="form-control" name="address" value="<?php echo $EDITDATA[0]->address; ?>">
															</div>
														</div>


														
														



														<div class="row mb-3">
															<div class="col-sm-3">
																<h6 class="mb-0">Facebook</h6>
															</div>
															<div class="col-sm-9">
																<input type="text" class="form-control" name="facebook" value="<?php echo $EDITDATA[0]->facebook; ?>">
															</div>
														</div>

														<div class="row mb-3">
															<div class="col-sm-3">
																<h6 class="mb-0">Instragram</h6>
															</div>
															<div class="col-sm-9">
																<input type="text" class="form-control" name="instragram" value="<?php echo $EDITDATA[0]->instragram; ?>">
															</div>
														</div>


														<div class="row mb-3">
															<div class="col-sm-3">
																<h6 class="mb-0">Twitter</h6>
															</div>
															<div class="col-sm-9">
																<input type="text" class="form-control" name="twitter" value="<?php echo $EDITDATA[0]->twitter; ?>">
															</div>
														</div>


														

													</div>
												</div>
											
											</div>
										</div>
									</div>
								</div>


								<div class="col text-center">
									<button type="submit" name="submit" class="btn btn-dark px-5">Submit</button>
								</div>

							</form>


								

						</div>
					</div>
				



			</div>
		</div>
		<!--end page wrapper -->
		
	
	</div>
	<!--end wrapper-->

	<?php $this->load->view('admin/include/footer');?>


</body>
</html>