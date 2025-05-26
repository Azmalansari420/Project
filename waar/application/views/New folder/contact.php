<?php 
$sitesetting = $this->crud->fetchdatabyid('1','site_setting');

include('header.php'); ?>


        <main>
            
            <!-- breadcrumb-area -->
            <section class="breadcrumb-area d-flex align-items-center" style="background-image:url(<?=base_url() ?>img/bg/bdrc-bg.png)">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-lg-12">
                            <div class="breadcrumb-wrap text-left">
                                <div class="breadcrumb-title">
                                    <h2>Contact Us</h2>    
                                    <div class="breadcrumb-wrap">
                              
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?=base_url() ?>">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                    </ol>
                                </nav>
                            </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->
             
            
            
            <!-- contact-area -->
            <section id="contact" class="contact-area after-none contact-bg pt-120 pb-120 p-relative fix"  style="background: #f8f9fe;">
                <div class="container">
             
					<div class="row">
						
                         <div class="col-lg-4 order-1">
                            <div class="per-info">
                                 <h4>Personal Info</h4> 
                                    <ul class="team-area-content">
                                        <li>
                                            <div class="icon"><i class="fal fa-envelope"></i> <strong>Email</strong></div>
                                            <div class="text"><?=$sitesetting[0]->email ?>, <?=$sitesetting[0]->alt_email ?></div>
                                        </li>    
                                        <li>
                                            <div class="icon"><i class="fal fa-phone"></i> <strong>Phone</strong></div>
                                            <div class="text"><?=$sitesetting[0]->mobile ?>,<br> <?=$sitesetting[0]->mobile ?></div>
                                        </li>    
                                        <li>
                                            <div class="icon"><i class="fal fa-map-marker-alt"></i><strong>Address</strong></div>
                                            <div class="text"><?=$sitesetting[0]->address ?></div>
                                        </li>    
                                       <!--  <li>
                                            <div class="icon"><i class="fal fa-globe"></i><strong>Website</strong></div>
                                            <div class="text">www.webexample.com</div>
                                        </li>  -->   
                                    </ul>     
                            </div>							
                        </div>
                        <div class="col-lg-8 order-2">
                            <div class="contact-bg02 pl-60 wow fadeInLeft  animated">
                            <div class="section-title center-align">
                                <h2>Contact Us</h2>
                               
                            </div>
                             
						<form action="<?=base_url('welcome/enquiry_form') ?>" method="post" class="contact-form mt-35">
							<div class="row">
                            <div class="col-lg-6">
                                <div class="contact-field p-relative c-name mb-30">                                    
                                    <input type="text" id="firstn" name="name" placeholder="Full Name" required>
                                </div>                               
                            </div>
							<div class="col-lg-6">                               
                                <div class="contact-field p-relative c-subject mb-30">                                   
                                    <input type="text" id="email" name="email" placeholder="Eamil Address" required>
                                </div>
                            </div>		
                            <div class="col-lg-6">                               
                                <div class="contact-field p-relative c-subject mb-30">                                   
                                    <input type="text" id="phone" name="mobile" placeholder="Phone No." required>
                                </div>
                            </div>	 
                            <div class="col-lg-6">                               
                                <div class="contact-field p-relative c-subject mb-30">                                   
                                    <input type="text" id="subject" name="subject" placeholder="Subject" required>
                                </div>
                            </div>  
                            <div class="col-lg-12">
                                <div class="contact-field p-relative c-message mb-30">
                                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Write comments"></textarea>
                                </div>
                                <div class="slider-btn">                                          
                                    <button name="submit" type="submit" class="btn ss-btn active" data-animation="fadeInRight" data-delay=".8s">Submint Now</button>				
                                </div>                             
                            </div>
                            </div>
                        
                    </form>
                            
                            </div>
                        
						</div>
					</div>
                    
                </div>
               
            </section>
            <!-- contact-area-end -->
            <!-- map-area-end -->
            <div class="map fix" style="background: #f5f5f5;">
                <div class="container-flud">
                    
                    <div class="row">
                        <div class="col-lg-12">
                       <?=$sitesetting[0]->map ?>
                        </div>
                    </div>
                </div>
            </div>
		     <!-- map-area-end -->
             
        </main>
      <?php include('footer.php'); ?>
