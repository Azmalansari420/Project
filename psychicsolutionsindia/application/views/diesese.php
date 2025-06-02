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
					<a href="">SPECIALIZE TREATMENT</a>
				</div>
			</div>
		</div>
	</div>


	<div class="section page-content-first mb-5">
			<div class="container">
				<div class="text-center mb-2  mb-md-3 mb-lg-4">
					<!-- <div class="h-sub theme-color">Mental Health </div> -->
					<h1>SPECIALIZE TREATMENT</h1>
					<div class="h-decor"></div>
					<!-- <div class="text-center mt-4">
						<p>With years of experience and backed by state-of-the-art technology,<br>MedSlim is dedicated to helping you be your best self</p>
					</div> -->
				</div>
			</div>
			<div class="container">
				<div class="row col-equalH">
					<?php
					$diesese = $this->crud->selectDataByMultipleWhere('diesese',array('status'=>1,));
					foreach($diesese as $data)
						{ ?>
					<div class="col-md-6 col-lg-4">
						<div class="service-card" style="    padding: 0 30px 20px;">
							<div class="service-card-photo">
								<a href="<?=base_url('diesese-details/'.$data->slug) ?>"><img src="<?=base_url() ?>media/uploads/diesese/<?=$data->image ?>" class="img-fluid" alt="" style="height: 100%;"></a>
							</div>
							<h5 class="service-card-name"><a href="<?=base_url('diesese-details/'.$data->slug) ?>"><?=$data->name ?></a></h5>
							<div class="h-decor"></div>
							<p><?=$data->small_info ?></p>
						</div>
					</div>
					<?php } ?>
					
					
				</div>
			</div>
		</div>

		<?php include('footer.php'); ?>