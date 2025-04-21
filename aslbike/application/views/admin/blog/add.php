<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<title>Form</title>

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
						<li class="breadcrumb-item active" aria-current="page">Blog</li>
					  </ol>
					</div>
				  <div class="ms-auto">
				  	<a href="<?php echo base_url('admin_con/blog/listing');?>" class="btn btn-light radius-30 mt-2 mt-lg-0">
				  		<i class="bx bx-arrow-back"></i>Back
				  	</a>
				  </div>
				</div>



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
													Upload image
												<img id="blah" src="#" class="sd" style="display: none;width: 100%; height: 100%; position: relative; top: -22px;">
												<input style="display: none;" type="file" class="form-control" name="image"  id="imgInp">
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
														<h6 class="mb-0">Title</h6>
													</div>
													<div class="col-sm-9">
														<input type="text" class="form-select" name="title">
													</div>
												</div>

												<div class="row mb-3">
													<div class="col-sm-3">
														<h6 class="mb-0">Content</h6>
													</div>
													<div class="col-sm-9">
														<textarea name="content" class="form-control"></textarea>
													</div>
												</div>

												
												 <div class="row mb-3">
													<div class="col-sm-3">
														<h6 class="mb-0">Status</h6>
													</div>
													<div class="col-sm-9">
														<select class="form-select" name="status">
															<option value="1" selected="">Show</option>
															<option  value="0">Hide</option>
														</select>
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


<script>
  CKEDITOR.replace( 'content' );
</script>
</body>
</html>