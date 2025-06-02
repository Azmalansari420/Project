<?php 
$sitesetting = $this->crud->fetchdatabyid('1','site_setting');
include('header.php'); ?>
<div class="page-content">
	<!--section-->
	<div class="section mt-0">
		<div class="breadcrumbs-wrap">
			<div class="container">
				<div class="breadcrumbs">
					<a href="index">Home</a>
					<a href=""><?=$EDITDATA[0]->name ?></a>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->
	<!--section-->
	<div class="section page-content-first">
		<div class="container mt-6">
			<div class="row">
				
				<div class="col-lg-12 mt-4 text-center">
					<div class="doctor-info1 mb-3 mb-lg-4">
						<div class="doctor-page-photo1 text-center">
							<img src="<?=base_url() ?>media/uploads/blog/<?=$EDITDATA[0]->image ?>" class="img-about" alt="">
							<br>
							<br>
							<?=$EDITDATA[0]->content ?>
						</div>
						<!-- <div class="doctor-info-name"> -->
							<!-- <h3><?=$EDITDATA[0]->name ?></h3> -->
							<!-- <h6>Associate Dentist</h6> -->
						<!-- </div> -->
						
					
					</div>
			</div>
		</div>
	</div>
</div>

</div>
<?php include('footer.php'); ?>