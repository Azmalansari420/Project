<?php include('header.php'); ?>
	<div class="page-content">



		<div class="section">
			<div class="container">
				<div class="row">			
					<div class="col-md col-lg-6 mt-4 mt-md-0">
						<form class="contact-form" id="contactForm1" method="post" novalidate="novalidate" action="<?=base_url() ?>welcome/enquiry_form">
							<div class="successform1 mb-2">
								<h4 class="mb-0">Book Your Appointment!</h4>
								<p>We Will Confirm Your Appointment within 2 hours.</p>
							</div>
							<div class="errorform1">
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
					<div class="col-md col-lg-5">
						<img src="<?=base_url() ?>images/dr.kumar.png" alt="" class="img-about">
					</div>
				</div>
			</div>
		</div>
					
		<!-- <div class="section mb-5">
			<div class="container">
				<div class="row">
					<div class="col-lg-12  text-center">
						
					</div>
				
				</div>
			</div>
		</div> -->
		
		
		
	</div>
<?php include('footer.php'); ?>