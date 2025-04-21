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
						<li class="breadcrumb-item active" aria-current="page">Slider</li>
					  </ol>
					</div>
				  <div class="ms-auto">
				  	<a href="<?php echo base_url('admin_con/slider/add');?>" class="btn btn-light radius-30 mt-2 mt-lg-0">
				  		<i class="bx bxs-plus-square"></i>Add New Slider
				  	</a>
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

										<th>Image</th>
										<th>Title</th>
										<th>Content</th>
										<th>URL</th>
			                            <th>Status</th>

										<!-- <th>View</th> -->
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

										<td>
											<img src="<?php echo base_url(); ?>media/uploads/slider/<?php echo $data->image; ?>" style="width:150px;">
										</td>
										<td><?php echo $data->title; ?></td>
										<td><?php echo $data->content; ?></td>
										<td><?php echo $data->url; ?></td>
										
			                            <td><?php echo status($data->status); ?></td>

			                            <!-- -------view---- -->
									<!-- 	<td>
											<div class="d-flex order-actions">
											  <a href="<?php echo base_url('admin_con/slider/view/'.$data->id); ?>" class="">
													<i class="bx bx-show"></i>
											  </a>
											</div>
										</td> -->
										<!-- -----------edit-------- -->
										<td>
											<div class="d-flex order-actions">
												<a href="<?php echo base_url('admin_con/slider/edit/'.$data->id); ?>" class=""><i class="bx bxs-edit"></i></a>

												<a href="<?php echo base_url('admin_con/slider/delete/'.$data->id); ?>" onclick="return confirm('are you sure do you want to delete this record')" class="ms-3"><i class="bx bxs-trash"></i></a>
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

