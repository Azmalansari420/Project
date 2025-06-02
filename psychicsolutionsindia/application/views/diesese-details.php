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
				<div class="col-md">
					<div class="doctor-page-photo text-center">
						<img src="<?=base_url() ?>media/uploads/diesese/<?=$EDITDATA[0]->image ?>" class="img-about" alt="">
					</div>
					<div class="mt-3 mt-md-5"></div>
					<div class="contact-us">
						<h3>Contact Us</h3>
					<h6>
						<ul class="service-page-2">
							<li><i class="icon-telephone"></i><a href="tel:<?=$sitesetting[0]->mobile ?>"><?=$sitesetting[0]->mobile ?></a></li>
							<li><i class="icon-telephone"></i><a href="tel:<?=$sitesetting[0]->alt_mobile ?>"><?=$sitesetting[0]->alt_mobile ?></a></li>
							<li><i class="icon-black-envelope"></i><a href="mailto:<?=$sitesetting[0]->email ?>"><?=$sitesetting[0]->email ?></a></li>
							
						</ul>
					</h6>
					<a href="<?=base_url() ?>contact" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Online Appointments</span><i class="icon-right-arrow"></i></a>
					<p>
						<ul class="service-page">
							<li><i class="icon-tick"></i>No exposure from potent chemicals.</li>
							<li><i class="icon-tick"></i>No withdrawal symptoms</li>
							<li><i class="icon-tick"></i>High efficacy rate</li>
							<li><i class="icon-tick"></i>Individualistic prescribing.</li>
							<li><i class="icon-tick"></i>Minimum dose.</li>
							<li><i class="icon-tick"></i>Rapid, gentle and permanent cure of disease.</li>
							<li><i class="icon-tick"></i>Holistic approach</li>
							<li><i class="icon-tick"></i>Painless process of treatment</li>
							<li><i class="icon-tick"></i>Availability of thousands of fully proved medicines on healthy human beings</li>
							<li><i class="icon-tick"></i>Economic medicines</li>
							
							
						</ul>
					</p>
					</div>
					
				</div>
				<div class="col-lg-8 mt-4 mt-lg-0">
					<div class="doctor-info mb-3 mb-lg-4">
						<div class="doctor-info-name">
							<h3><?=$EDITDATA[0]->name ?></h3>
							<!-- <h6>Associate Dentist</h6> -->
						</div>
						
					</div>
					<?=$EDITDATA[0]->content ?>
			</div>
		</div>
	</div>
</div>

</div>
<?php include('footer.php'); ?>