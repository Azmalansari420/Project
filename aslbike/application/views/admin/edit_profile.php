<!doctype html>
<html lang="en">

	<title>Login</title>
	<?php $this->load->view('admin/include/css');?>
</head>

<body class="bg-theme bg-theme2">
	<!--wrapper-->
	<div class="wrapper">
		
		
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Admin</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
							</ol>
						</nav>
					</div>

					
				</div>
				<!--end breadcrumb-->
				<div class="container">
					<div class="main-body">
						<form method="post" enctype="multipart/form-data" class="row">

							<div class="col-lg-4">
								<div class="card">
									<div class="card-body">
										<div class="d-flex flex-column align-items-center text-center">
										<label class="form-label"style="width: 100%;text-align: center; position: relative;border: 1px solid aliceblue;">
														Upload image
											<img id="blah" src="<?php echo base_url(); ?>media/uploads/<?php echo $EDITDATA[0]->image; ?>" class="sd" style="width: 100%; height: 100%; position: relative; top: -22px;">
											<input  type="hidden" class="form-control" name="oldimage" value="<?php echo $EDITDATA[0]->image; ?>">
											<input style="display: none;" type="file" class="form-control" name="image"  id="imgInp">
										</label>

											<div class="mt-3">
												<h4><?php echo $EDITDATA[0]->username; ?></h4>
											</div>
										</div>
										<hr class="my-4" />
										
									</div>
								</div>
							</div>
							<div class="col-lg-8">
								<div class="card">
									<div class="card-body">
										<form method="post" class="row" enctype="multipart/form-data">

										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Username</h6>
											</div>
											<div class="col-sm-9">
												<input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $EDITDATA[0]->username; ?>" />
											</div>
										</div>

										
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Password</h6>
											</div>
											<div class="col-sm-9">
												<input type="text" name="password" class="form-control"  value="<?php echo $EDITDATA[0]->password; ?>" />
											</div>
										</div>

										<div class="row">
											<div class="col-sm-3"></div>
											<div class="col-sm-9">
												<input type="submit" name="submit"  class="btn btn-light px-4" />
											</div>
										</div>
									</form>
									
									</div>
								</div>

							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
	
	</div>
	<!--end wrapper-->

	<!-- Bootstrap JS -->

	<!--plugins-->

<?php $this->load->view('admin/include/footer');?>




</body>
</html>