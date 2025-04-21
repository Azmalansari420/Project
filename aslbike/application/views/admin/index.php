<!doctype html>
<html lang="en">

	<title>Login</title>
	<?php $this->load->view('admin/include/css');?>
</head>

<body class="bg-theme bg-theme2">
	<!--wrapper-->
	<div class="wrapper">
		
		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-4">
			<div class="container-fluid">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col mx-auto">
						<div class="card mt-5 mt-lg-0">
							<div class="card-body">
								<div class="border p-4 rounded">
									
								    <?php echo $this->session->flashdata('message'); ?>

									<div class="form-body">
										<form class="row g-3" method="post" action="#">

											<div class="col-12">
												<label  class="form-label">Enter Username</label>
												<input type="text" class="form-control" name="username" placeholder="Username">
											</div>

											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Enter Password</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" class="form-control border-end-0" id="inputChoosePassword" name="password" placeholder="Password"> 
													<a href="javascript:;" class="input-group-text">
														<i class='bx bx-hide'></i>
													</a>
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
													<label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
												</div>
											</div>

											
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" name="submit" class="btn btn-light">
														<i class="bx bxs-lock-open"></i>Submit
													</button>
												</div>
											</div>
										</form>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
	
	</div>
	

<?php $this->load->view('admin/include/footer');?>




</body>
</html>