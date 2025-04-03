<?php include('header.php'); ?>

	<!-- BANNER -->
	<div class="section banner-page" data-background="images/cntct-us.jpg">
		<div class="content-wrap pos-relative">
			<div class="container">
				<div class="col-12 col-md-12">
					<div class="d-flex bd-highlight mb-2">
						<div class="title-page">Contact</div>
					</div>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb ">
							<li class="breadcrumb-item"><a href="index.php">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Contact</li>
						</ol>
					</nav>
				</div>
			</div>

		</div>
	</div>

	<!-- CONTENT -->
	<div id="contact" class="section">

		<div class="content-wrap">
			<div class="container">

				<div class="row">

					<div class="row mt-5">

						<div class="col-sm-12 col-md-12 col-lg-4">

							<h4 class="text-black mt-0">Contact Details</h4>


							<!-- Item 1 -->
							<div class="rs-icon-info-2">
								<div class="info-icon">
									<i class="fa fa-map-marker"></i>
								</div>
								<div class="body-text">
									<h5>Address</h5>
									<p>New Delhi </p>
								</div>
							</div>
							<!-- Item 2 -->
							<div class="rs-icon-info-2">
								<div class="info-icon">
									<i class="fa fa-phone"></i>
								</div>
								<div class="body-text">
									<h5>Phone</h5>
									<p><a href="tel:9582079762">+91 8081614909</a></p>
								</div>
							</div>
							<!-- Item 3 -->
							<div class="rs-icon-info-2">
								<div class="info-icon">
									<i class="fa fa-envelope"></i>
								</div>
								<div class="body-text">
									<h5>Email</h5>
									<p><a href="mailto:contact@globalfiresafety.com">Click Here To Email</a></p>
								</div>
							</div>


						</div>

						<div class="col-sm-12 col-md-12 col-lg-7 offset-lg-1">

							<h4 class="text-black mt-0">Send a Message here</h4>

							<form enctype="multipart/form-data" action="https:///thanks.php" id="contactForm" name="contactForm">
								<div class="row">
									<div class="col-sm-12 col-md-4">
										<div class="form-group">
											<input type="text" class="form-control" id="user_name" name="user_name" placeholder="Enter Name"
												required="">
										</div>
									</div>
									<div class="col-sm-12 col-md-4">
										<div class="form-group">
											<input type="email" class="form-control" id="user_email" name="user_email"
												placeholder="Email Address" required="">
										</div>
									</div>
									<div class="col-sm-12 col-md-4">
										<div class="form-group">
											<input type="number" id="user_contact" class="form-control" name="user_contact"
												placeholder="Phone Number" required="">
										</div>
									</div>
									<div class="col-sm-12 col-md-12">
										<div class="form-group">
											<textarea placeholder="Message" class="form-control" name="message" id="message"
												required=""></textarea>
										</div>
									</div>
									<div class="col-sm-12 col-md-12">
										<div class="form-group">
											<div class="g-recaptcha" data-sitekey="6LdJnugUAAAAAHgumfxyd7-Xk2qq7nstOaz6VOFR"></div>
											<input type="hidden" name="action" id="action" value="send-mail" />
										</div>
									</div>
								</div>

								<div class="form-group">
									<input type="submit" value="SEND MESSAGE" id="submit" class="send-message btn btn-primary">
									<div id="msg" style="color: red; font-size: 14px; padding: 10px 0;"></div>
								</div>
						</div>

						</form>

					</div>

					<div class="col-sm-12 col-md-12">
						<div class="mapouter">
							<div class="gmap_canvas maps">
								<iframe
									src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d354320.0603932688!2d77.0801664!3d28.6195712!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sin!4v1740479803912!5m2!1sen!2sin"
									width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
									tabindex="0"></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	</div>

	<!-- CTA -->
	<div class="section overlap-bottom pb-0">
		<div class="content-wrap py-5">
			<div class="container">

				<div class="row bg-secondary py-4 shadow-lg">
					<div class="col-sm-12 col-md-12 col-lg-4">
						<!-- BOX 1 -->
						<div class="rs-icon-info">
							<div class="info-icon">
								<i class="fa fa-map-o"></i>
							</div>
							<div class="info-text">
								<h4>Our Location</h4>
								New Delhi
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-4">
						<!-- BOX 2 -->
						<div class="rs-icon-info">
							<div class="info-icon">
								<i class="fa fa-phone"></i>
							</div>
							<div class="info-text">
								<h4>Call Us</h4>
								<a href="tel:+91 8081614909">+91 8081614909</a> <br>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-4">
						<!-- BOX 3 -->
						<div class="rs-icon-info">
							<div class="info-icon">
								<i class="fa fa-envelope-o"></i>
							</div>
							<div class="info-text">
								<h4>Contact Email</h4>
								<a href="mailto:info@globalfiresafety.com">Click Here To Email</a><br>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<?php include('footer.php'); ?>