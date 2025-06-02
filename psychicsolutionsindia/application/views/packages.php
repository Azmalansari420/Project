<?php include('header.php'); ?>
	<div class="page-content">
		<!--section-->
		<div class="section mt-0">
			<div class="breadcrumbs-wrap">
				<div class="container">
					<div class="breadcrumbs">
						<a href="index.html">Home</a>
						<span>Services</span>
					</div>
				</div>
			</div>
		</div>
<style>
	.amount {
	    font-size: 36px;
	    font-weight: 600;
	    color: #009999;
	}
	.title {
	    font-size: 21px;
	    color: #2c2d3f;
	    margin-top: 30px;
	    margin-bottom: 15px;
	}
	ul.circle-list li:before {
	    content: '';
	    font-size: 16px;
	    position: absolute;
	    left: 0;
	    top: -1px;
	    color: #006a66;
	}
	.icon-medical-kit{
		font-size: 65px;
		color: #009999;
	}
	ul.circle-list>li {
    font-weight: 600;
    color: black;
	}
	.service-card > *:not(:first-child) {
	    margin-top: 22px;
	}
	a.title {
    font-size: 20px;
}
</style>
		<div class="section page-content-first">
			<div class="container">
				<div class="text-center mb-2  mb-md-3 mb-lg-4">
					<h1>India</h1>
					<div class="h-decor"></div>
				</div>
			</div>
			<div class="container">
				<div class="row col-equalH mt">
					<div class="col-md-6 col-lg-4 mb-3">
						<div class="service-card">
							<h5 class="service-card-name mt-3 text-center ">
								<img src="<?=base_url() ?>icons/package.svg" style="width: 62px;"><br>
								<a class="title">Consultation</a>
							</h5>
							<div class="price text-center">
			                     <p class="amount"> 30 Min / 1 Hour</p>
			                  </div>
							<ul class="circle-list">
								<li><i class="icon-tick"></i> &nbsp; ₹1000 / 30 Min (India)</li>
								<li><i class="icon-tick"></i> &nbsp; ₹2000 / 1 Hour (India)</li>
								<li><i class="icon-tick"></i> &nbsp; ₹500 Subsequent Consultation (India)</li>
							</ul>
							<div class="text-center">
								<a href="<?=base_url() ?>qrcode" class="btn btn-primary">Book Now</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 mb-3">
						<div class="service-card">
							<h5 class="service-card-name mt-3 text-center ">
								<img src="<?=base_url() ?>icons/package.svg" style="width: 62px;"><br>
								<a class="title">Monthly Medicine Charges</a>
							</h5>
							<div class="price text-center">
			                     <p class="amount"> Month</p>
			                  </div>
							<ul class="circle-list">
								<li><i class="icon-tick"></i> &nbsp; ₹500 / Per Month (India)</li>
							</ul>
							<div class="text-center">
								<a href="<?=base_url() ?>qrcode" class="btn btn-primary">Book Now</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 mb-3">
						<div class="service-card">
							<h5 class="service-card-name mt-3 text-center ">
								<img src="<?=base_url() ?>icons/package.svg" style="width: 62px;"><br>
								<a class="title">Session Charges</a>
							</h5>
							<div class="price text-center">
			                     <p class="amount"> 30 Min / 1 Hour</p>
			                  </div>
							<ul class="circle-list">
								<li><i class="icon-tick"></i> &nbsp; ₹1500 / 30 Min (India)</li>
								<li><i class="icon-tick"></i> &nbsp; ₹3000 / 1 Hour (India)</li>
							</ul>
							<div class="text-center">
								<a href="<?=base_url() ?>qrcode" class="btn btn-primary">Book Now</a>
							</div>
						</div>
					</div>
					
					
				</div>
			</div>
			
			<div class="container">
				<div class="text-center mb-2  mb-md-3 mb-lg-4">
					<h1>Overseas</h1>
					<div class="h-decor"></div>
				</div>
			</div>
			<div class="container">
				<div class="row col-equalH mt">
					<div class="col-md-6 col-lg-4 mb-3">
						<div class="service-card">
							<h5 class="service-card-name mt-3 text-center ">
								<img src="<?=base_url() ?>icons/package.svg" style="width: 62px;"><br>
								<a class="title">Consultation</a>
							</h5>
							<div class="price text-center">
			                     <p class="amount"> 30 Min / 1 Hour</p>
			                  </div>
							<ul class="circle-list">
								<li><i class="icon-tick"></i> &nbsp; 25 USD / 30 Min (Overseas)</li>
								<li><i class="icon-tick"></i> &nbsp; 50 USD / 1 Hour (Overseas)</li>
							</ul>
							<div class="text-center">
								<a href="<?=base_url() ?>qrcode" class="btn btn-primary">Book Now</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 mb-3">
						<div class="service-card">
							<h5 class="service-card-name mt-3 text-center ">
								<img src="<?=base_url() ?>icons/package.svg" style="width: 62px;"><br>
								<a class="title">Monthly Medicine Charges</a>
							</h5>
							<div class="price text-center">
			                     <p class="amount"> Month</p>
			                  </div>
							<ul class="circle-list">
								<li><i class="icon-tick"></i> &nbsp; 25 USD / Per Month (Overseas)</li>
							</ul>
							<div class="text-center">
								<a href="<?=base_url() ?>qrcode" class="btn btn-primary">Book Now</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 mb-3">
						<div class="service-card">
							<h5 class="service-card-name mt-3 text-center ">
								<img src="<?=base_url() ?>icons/package.svg" style="width: 62px;"><br>
								<a class="title">Session Charges</a>
							</h5>
							<div class="price text-center">
			                     <p class="amount"> 30 Min / 1 Hour</p>
			                  </div>
							<ul class="circle-list">
								<li><i class="icon-tick"></i> &nbsp; 25 USD / 30 Minutes (Overseas)</li>
								<li><i class="icon-tick"></i> &nbsp; 50 USD / 1 Hour (Overseas)</li>
							</ul>
							<div class="text-center">
								<a href="<?=base_url() ?>qrcode" class="btn btn-primary">Book Now</a>
							</div>
						</div>
					</div>
					
					
				</div>
			</div>


			
		</div>
		<!--//section-->
	</div>

<?php include('footer.php'); ?>