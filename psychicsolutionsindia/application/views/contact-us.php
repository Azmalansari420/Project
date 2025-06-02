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
					<span>Contact Us</span>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->
	<!--section-->
	<div class="section mt-0 bg-grey">
		<div class="container">
			<div class="row">
				<div class="col-md">
					<div class="title-wrap">
						<h5>Clinic Location</h5>
						<div class="h-decor"></div>
					</div>
					<ul class="icn-list-lg">
						<li><i class="icon-placeholder2"></i> <?=$sitesetting[0]->address ?>
						</li>
					</ul>
				</div>
				<div class="col-md mt-3 mt-md-0">
					<div class="title-wrap">
						<h5>Contact Info</h5>
						<div class="h-decor"></div>
					</div>
					<ul class="icn-list-lg">
						<li><i class="icon-telephone"></i>Phone: <span class="theme-color"><span class="text-nowrap"><?=$sitesetting[0]->mobile ?>,</span> <span class="text-nowrap"></span>
					</span>
					<br> Alt Mobile: <span class="theme-color"><span class="text-nowrap"><?=$sitesetting[0]->alt_mobile ?></span>
				</span>
			</li>
			<li><i class="icon-black-envelope"></i><a href="mailto:<?=$sitesetting[0]->email ?>"><?=$sitesetting[0]->email ?></a></li>
		</ul>
	</div>
	<div class="col-md mt-3 mt-md-0">
		<div class="title-wrap">
			<h5>Working Time</h5>
			<div class="h-decor"></div>
		</div>
		<ul class="icn-list-lg">
			<li><i class="icon-clock"></i>
				<div>
					<div class="d-flex"><span>All Day</span><span class="theme-color">10:00 - 07:30</span></div>
					<div class="d-flex"><span>Tuesday</span><span class="theme-color">Closed</span></div>
					<!-- <div class="d-flex"><span>Saturday</span><span class="theme-color">08:00 - 18:00</span></div> -->
				</div>
			</li>
		</ul>
	</div>
</div>
</div>
</div>
<!--//section-->
<!--section-->
<div class="section mb-4">
<div class="container">
<div class="row">
	<div class="col-md col-lg-5">
		<img src="<?=base_url() ?>images/dr.kumar.png" alt="" class="img-about">
	</div>
	<div class="col-md col-lg-6 mt-4 mt-md-0">
		<form class="contact-form" id="contactForm1" method="post" novalidate="novalidate" action="<?=base_url() ?>welcome/enquiry_form">
			<div class="successform">
				<p>Your message was sent successfully!</p>
			</div>
			<div class="errorform">
				<p>Something went wrong, try refreshing and submitting the form again.</p>
			</div>
			<div>
				<input type="text" class="form-control" name="name" placeholder="Your name*" required>
			</div>
			<div class="mt-15">
				<input type="text" class="form-control" name="email" placeholder="Email*" required>
			</div>
			<div class="mt-15">
				<input type="text" class="form-control" name="mobile" placeholder="Your Phone" required>
			</div>
			<div class="mt-15">
				<input type="text" class="form-control" name="subject" placeholder="Your Subject">
			</div>
			<div class="mt-15">
				<textarea class="form-control" name="message" placeholder="Message"></textarea>
			</div>
			<div class="mt-3">
				<button type="submit" name="submit" class="btn btn-hover-fill"><i class="icon-right-arrow"></i><span>Send message</span><i class="icon-right-arrow"></i></button>
			</div>
		</form>
	</div>
</div>
</div>
</div>
<!--//section-->
</div>
<?php include('footer.php'); ?>