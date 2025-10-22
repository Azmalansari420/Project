 <?php include('header.php'); ?>

    <!-- Page Header Start -->
	<div class="page-header parallaxie">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-3" data-cursor="-opaque">Contact Us</h1>
						<nav class="wow fadeInUp">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index">home</a></li>
								<li class="breadcrumb-item active" aria-current="page">contact us</li>
							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->
    
    <!-- Page Contact Us Start -->
    <div class="page-contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Contact Side Bar Start -->
                    <div class="contact-sidebar">
                        <!-- Contact Info Start -->
                        <div class="contact-info wow fadeInUp" data-wow-delay="0.25s">
                            <div class="contact-info-title">
                                <h3>Contact Us</h3>
                                <p>Our presence in this iconic city reflects our dedication to being innovation.</p>
                            </div>

                             <!-- Contact Info Box Start -->
                            <div class="contact-info-box">
                                <!-- Contact Info Item Start -->
                                <div class="contact-info-item">
                                    <!-- Icon Box Start -->
                                    <div class="icon-box">
                                        <i class="fa-solid fa-envelope"></i>
                                    </div>
                                    <!-- Icon Box End -->
                                    <p><?=$sitesetting[0]->email ?> , <?=$sitesetting[0]->alt_email ?></p>
                                </div>
                                <!-- Contact Info Item End -->
                                <!-- Contact Info Item Start -->
                                <div class="contact-info-item">
                                    <!-- Icon Box Start -->
                                    <div class="icon-box">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                    <!-- Icon Box End -->
                                    <p><?=$sitesetting[0]->mobile ?>, <?=$sitesetting[0]->alt_mobile ?></p>
                                </div>

                                <!-- Contact Info Item Start -->
                                <div class="contact-info-item">
                                    <!-- Icon Box Start -->
                                    <div class="icon-box">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
                                    <!-- Icon Box End -->
                                    <p><?=$sitesetting[0]->address ?></p>
                                </div>
                                <!-- Contact Info Item End -->
                    
                                
                                <!-- Contact Info Item End -->
                            </div>
                             <!-- Contact Info Box End -->
                        </div>
                        <!-- Contact Info End -->

                    
                    </div>
                    <!-- Contact Side Bar End -->
                </div>
                
                <div class="col-lg-8">
                    <!-- Contact Form start -->
                    <div class="contact-us-form">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">contact us</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">How can we help you today?</h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Content Form Content Start -->
                        <div class="contact-form-content wow fadeInUp" data-wow-delay="0.25s">
                            <p>Let us know who you are and what you're looking for below.</p>
                        </div>
                        <!-- Content Form Content End -->

                        <form  action="<?=base_url('welcome/enquiry_form') ?>" method="POST" data-toggle="validator" class="wow fadeInUp" data-wow-delay="0.5s">
                            <div class="row">
                                <div class="form-group col-md-6 mb-4">
                                    <label>your name</label>
                                    <input type="text" name="name" class="form-control" id="fullname" placeholder="Enter Full Name" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <label>your email</label>
                                    <input type="email" name ="email" class="form-control" id="email" placeholder="Enter Email" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <label>phone</label>
                                    <input type="text" name="mobile" class="form-control" id="phone" placeholder="Enter Phone Number" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group col-md-6 mb-4">
                                    <label>Subject</label>
                                    <input type="text" name="subject" class="form-control" id="Subject" placeholder="Enter Subject" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-12 mb-4">
                                    <label>message</label>
                                    <textarea name="message" class="form-control" id="msg" rows="4" placeholder="Type Message" required></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="contact-form-btn">
                                        <button type="submit" name="submit" class="btn-default">send message</button>
                                        <div id="msgSubmit" class="h3 hidden"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Contact Form end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Contact Us End -->

    <!-- Google Map starts -->
    <div class="google-map pt-0">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-12">
                    <?=$sitesetting[0]->map ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Google Map Ends -->

  <?php include('footer.php'); ?>