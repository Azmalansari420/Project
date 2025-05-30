
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Admin Login Page</title>
	<!--favicon-->
	<link rel="icon" href="<?php echo base_url();?><?php echo base_url();?>assets/images/favicon-32x32.png" type="image/png" />
	<!-- loader-->
	<link href="<?php echo base_url();?>assets/css/pace.min.css" rel="stylesheet" />
	<script src="<?php echo base_url();?>assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
	<!-- Icons CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/icons.css" />
	<!-- App CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/app.css" />
</head>

<body class="bg-login">
	<!-- wrapper -->
	<div class="wrapper">
		<div class="section-authentication-login d-flex align-items-center justify-content-center">
			<div class="row" style="width:100%;">
				<div class="col-12 col-lg-10 mx-auto">
					<div class="card radius-15">
						<div class="row no-gutters">
							<div class="col-lg-6">
								<div class="card-body p-md-5">
									<div class="text-center">
										<img src="<?php echo base_url();?>assets/images/logo-icon.png" width="80" alt="">
										<h3 class="mt-4 font-weight-bold">Welcome Back</h3>
									</div>
									
									                                  <?php echo form_open(base_url( 'admin/login' ), array( 'id' => 'login', 'class' => 'login', 'method' => 'post', 'autocomplete'=>'off'));?>

									<div class="form-group mt-4">
										<label>Email Address</label>
										<input type="text" class="form-control" placeholder="Enter your email address/ Mobile" name="email" />
									</div>
									<div class="form-group">
										<label>Password</label>
										<input type="password" class="form-control" placeholder="Enter your password" name="password" />
									</div>
									
									<div class="btn-group mt-3 w-100">
										<button type="submit" class="btn btn-primary btn-block">Log In</button>
										<button type="submit" class="btn btn-primary"><i class="lni lni-arrow-right"></i>
										</button>
									</div>
								</form>
									<hr>
									
								</div>
							</div>
							<div class="col-lg-6">
								<img src="<?php echo base_url();?>assets/images/login-images/login-frent-img.jpg" class="card-img login-img h-100" alt="...">
							</div>
						</div>
						<!--end row-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->
	<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<?php $this->load->view('extra'); ?>
</body>

</html>
