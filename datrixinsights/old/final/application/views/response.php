
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Redirect Status</title>
	<!--favicon-->
	<link rel="icon" href="<?php echo base_url();?>assets/images/favicon-32x32.png" type="image/png" />
	<!-- loader-->
	<link href="<?php echo base_url();?>assets/css/pace.min.css" rel="stylesheet" />
	<script src="<?php echo base_url();?>assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
	<!-- Icons CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/icons.css" />
	<!-- App CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/app.css" />
	<style>
	    
	    .bg-coming-soon {
    background-image: url(<?php echo base_url();?>assets/img/bg.jpg) !important;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
}
.table td, .table th {
    vertical-align: middle;
    color: #b46d00 !important;
}

	</style>
</head>

<body class="bg-coming-soon">
	<!-- wrapper -->
	<div class="wrapper">
		
		<div class="error-404 d-flex align-items-center justify-content-center">
			<div class="card shadow-none bg-transparent">
				<div class="card-body text-center">
				
					<h1 class="display-4 mt-5"><!--<img src="<?php echo base_url();?>assets/images/logo-icon.png" width="80" alt=""> Panel-->
					<br /><?php echo $page;?></h1>
					<p><?php echo $msg;?></p>
					<table class="table">
					   <tr>
					       <th>PID</th>
					       <th>UID</th>
					       <th>Date Time</th>
					       <th>Status</th>
					       <th>IP Address</th>
					   </tr>
					  <tr>
					      <td><?php echo $total['pid'];?></td>
					      <td><?php echo $total['uid'];?></td>
					      <td><?php echo $total['datetime'];?></td>
					      <td><?php echo $total['status'];?></td>
					      <td><?php echo $total['ip'];?></td>
					  </tr>
					</table>
					
				</div>
			</div>
		</div>
		
	</div>
	<!-- end wrapper -->
	<!-- JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</body>

</html>