
<!doctype html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
	<title>Razor Pay Integration in CodeIgniter</title>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
			<div class="card card-signin my-5">
				<div class="card-body">
					<center>
						<img src="<?php echo base_url();?>images/logo.png">
						<h5 class="card-title text-center">Payment successful !</h5>
						<p>Your order ID : <?php echo $_SESSION['razorpay_order_id'];?></p>
						<a href="<?php echo base_url('vendor');?>" class="btn btn-primary">Go Back To Profile</a>
					</center>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>