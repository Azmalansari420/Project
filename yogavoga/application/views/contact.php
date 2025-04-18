<?php
$sitesetting = $this->crud->fetchdatabyid('1','site_setting');
?>
<?php $this->load->view('header'); ?>
    <!-- Content -->
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dez-bnr-inr" style="background-image:url(<?php echo base_url(); ?>images/background/bg9.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    <li>Contact us</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="section-full content-inner bg-white contact-style-1">
			<div class="container">
                <div class="row">
					<!-- right part start -->
                    <div class="col-lg-4 col-md-6 d-lg-flex d-md-flex">
                        <div class="p-a30 m-b30 border contact-area border-1">
							<h2 class="m-b10">Quick Contact</h2>
							<p>If you have any questions simply use the following contact details.</p>
                            <ul class="no-margin">
                                <li class="icon-bx-wraper left m-b30">
                                    <div class="icon-bx-xs border-1"> <a href="#" class="icon-cell"><i class="fas fa-map-marker-alt"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dez-tilte">Address:</h6>
                                        <p><?php echo $sitesetting[0]->address; ?></p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left  m-b30">
                                    <div class="icon-bx-xs border-1"> <a href="mailto:<?php echo $sitesetting[0]->email; ?>" class="icon-cell"><i class="fas fa-envelope"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dez-tilte">Email:</h6>
                                        <p><?php echo $sitesetting[0]->email; ?></p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left  m-b30">
                                    <div class="icon-bx-xs border-1"> 
                                        <a href="mailto:<?php echo $sitesetting[0]->alt_email; ?>" class="icon-cell"><i class="fas fa-envelope"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dez-tilte">Alt Email:</h6>
                                        <p><?php echo $sitesetting[0]->alt_email; ?></p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left m-b30">
                                    <div class="icon-bx-xs border-1"> 
                                        <a href="tel:<?php echo $sitesetting[0]->mobile; ?>" class="icon-cell"><i class="fas fa-phone-alt"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dez-tilte">PHONE</h6>
                                        <p><?php echo $sitesetting[0]->mobile; ?></p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left">
                                    <div class="icon-bx-xs border-1"> 
                                        <a href="tel:<?php echo $sitesetting[0]->alt_mobile; ?>" class="icon-cell"><i class="fas fa-phone-alt"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dez-tilte">Alt PHONE</h6>
                                        <p><?php echo $sitesetting[0]->alt_mobile; ?></p>
                                    </div>
                                </li>
                            </ul>
							<div class="m-t20">
								<ul class="dez-social-icon dez-social-icon-lg">
                                    <li><a href="<?php echo $sitesetting[0]->facebook; ?>" class="fab fa-facebook-f bg-primary"></a></li>
                                    <li><a href="<?php echo $sitesetting[0]->twitter; ?>" class="fab fa-twitter bg-primary"></a></li>
                                    <li><a href="<?php echo $sitesetting[0]->instagram; ?>" class="fab fa-instagram bg-primary"></a></li>
                                    <li><a href="<?php echo $sitesetting[0]->youtube; ?>" class="fab fa-youtube bg-primary"></a></li>
								</ul>
							</div>
                            <div class="m-t20">
                                <button type="button" class="review btn site-button ">Write Your feedback</button>
                            </div>
                        </div>
                    </div>
                    <!-- right part END -->
                    <!-- Left part start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="p-a30 bg-gray clearfix m-b30">
							<h2>Send Message Us</h2>
							<?php echo $this->session->flashdata('message'); ?>

							<form method="post" class="" action="<?php echo base_url('welcome/enquiry_form'); ?>">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="name" type="text" required class="form-control" placeholder="Your Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="input-group"> 
											    <input name="email" type="email" class="form-control" required  placeholder="Your Email Id" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="input-group"> 
                                                <input name="mobile" type="number" class="form-control" required  placeholder="Your Mobile" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="input-group"> 
                                                <input name="subject" type="text" class="form-control" required  placeholder="Your Subject" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <textarea name="message" rows="4" class="form-control" required placeholder="reason to start yoga / any special requirement."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button name="submit" type="submit" value="Submit" class="site-button "> <span>Submit</span> </button>
                                    </div>
                                </div>
                            </form>


                            <!-- ------------join as trainning--- -->
                            <hr>

                            <div class="row">
                                <div class="col-lg-12 col-md-12 m-b30">
                                    <div class="dez-accordion space" id="accordion1">
                                        <div class="panel">
                                            <div class="acod-head">
                                                <h6 class="acod-title"> 
                                                    <a data-bs-toggle="collapse" href="#collapseOne1" data-bs-parent="#accordion1">
                                                        <i class="fas fa-question-circle"></i> Joining for new Trainer 
                                                    </a> 
                                                </h6>
                                            </div>
                                            <div id="collapseOne1" class="acod-body collapse " data-bs-parent="#accordion1">
                                                <div class="acod-content">

                                                    <form method="post" enctype="multipart/form-data" class="" action="<?php echo base_url('welcome/joinastainning'); ?>">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <input name="name" type="text" required class="form-control" placeholder="Your Name">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <div class="input-group"> 
                                                                        <input name="mobile" type="number" class="form-control" required  placeholder="Your Mobile" >
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <div class="input-group"> 
                                                                        <input name="emergency_details" type="text" class="form-control" required  placeholder="Emergency contact details" >
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <div class="input-group"> 
                                                                        <label>Aadhar card
                                                                        <input name="aadhar_card" type="file" class="form-control" required  ></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="form-group" style="margin: 0;">
                                                                    <div class="input-group"> 
                                                                        <label>Yoga certificate
                                                                        <input name="yoga_certificate" type="file" class="form-control" required  ></label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12">
                                                                <div class="form-group" style="margin: 0;">
                                                                    <div class="input-group"> 
                                                                        <input id="checkbox" type="checkbox" required style="height:0px;">
                                                                        <label for="checkbox"> I agree to these <a href="#">Terms and Conditions</a>.</label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12">
                                                                <button name="submit" type="submit" value="Submit" class="site-button "> <span>Submit</span> </button>
                                                            </div>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                    <!-- Left part END -->
					<div class="col-lg-4 col-md-12 d-lg-flex m-b30">
						<?php echo $sitesetting[0]->map; ?>
					</div>
                    
                </div>
            </div>
        </div>
        <!-- contact area  END -->
    </div>
    <!-- Content END-->
  <?php $this->load->view('footer'); ?>