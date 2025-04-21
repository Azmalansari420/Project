<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<title>Table</title>

	<?php $this->load->view('admin/include/css');?>
	
</head>

<body class="bg-theme bg-theme2">
	<!--wrapper-->
	<div class="wrapper">


		<?php $this->load->view('admin/include/left-sidebar');?>

		<?php $this->load->view('admin/include/header'); ?>


		<div class="page-wrapper">
			<div class="page-content">
				<div class="d-lg-flex align-items-center mb-4 gap-3">
					<div class="position-relative">
					  <ol class="breadcrumb mb-0 p-0">
						<li class="breadcrumb-item">
							<a href="#">Home / </a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">Contact</li>
					  </ol>
					</div>
				  
				</div>


				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<?php echo $this->session->flashdata('message') ?>
							
							<table id="example2" class="table table-striped table-bordered">

								<thead>
									<tr>
										<th>#</th>
			                            <th>Name</th>
			                            <th>Email</th>
			                            <th>Mobile</th>
			                            <th>Address</th>
			                            <th>Subject</th>
			                            <th>Message</th>
										<th>Action</th>
									</tr>
								</thead>

								<tbody>
							<?php $i=0;
	                        foreach($ALLDATA as $data)
	                         { $i++; 

	                         ?> 
									<tr>
										<td><?php echo $i; ?></td>
										<td><?php echo $data->name; ?></td>
										<td><?php echo $data->email; ?></td>
										<td><?php echo $data->mobile; ?></td>
										<td><?php echo $data->address; ?></td>
										<td><?php echo $data->subject; ?></td>
										<td><?php echo $data->message; ?></td>
										
										<!-- -----------edit-------- -->
										<td>
											<div class="d-flex order-actions">

												<a href="<?php echo base_url('admin_con/contact/delete/'.$data->id); ?>" onclick="return confirm('are you sure do you want to delete this record')" class="ms-3"><i class="bx bxs-trash"></i></a>
											</div>
										</td>
										
									</tr>
									
							<?php } ?>
								</tbody>
								
							</table>
						</div>
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

