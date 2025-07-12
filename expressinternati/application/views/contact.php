<?php 
$sitesetting = $this->crud->fetchdatabyid('1','site_setting');

include("header.php"); ?>


<style>
   .contact-form form .form-group .form-control {
    border: 1px solid!important;
}
</style>
<div class="search-overlay">
   <div class="d-table">
      <div class="d-table-cell">
         <div class="search-overlay-layer"></div>
         <div class="search-overlay-layer"></div>
         <div class="search-overlay-layer"></div>
         <div class="search-overlay-close">
            <span class="search-overlay-close-line"></span>
            <span class="search-overlay-close-line"></span>
         </div>
         <div class="search-overlay-form">
            <form>
               <input type="text" class="input-search" placeholder="Search here...">
               <button type="submit"><i class="bx bx-search"></i></button>
            </form>
         </div>
      </div>
   </div>
</div>
<div class="page-banner bg-1">
   <div class="d-table">
      <div class="d-table-cell">
         <div class="container">
            <div class="page-content">
               <h2>Contact With Us</h2>
               <ul>
                  <li><a href="">Home</a></li>
                  <li>Contact</li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="pt-100 pb-70">
   <div class="container">
      <div class="row">
         <div class="col-lg-4 col-md-6">
            <div class="contact-info">
               <i class="bx bxs-phone"></i>
               <h4>Contact Number</h4>
               <p> <a href="tel:<?=$sitesetting[0]->mobile ?>"><?=$sitesetting[0]->mobile ?></a></p>
               <p><a href="tel:<?=$sitesetting[0]->alt_mobile ?>"><?=$sitesetting[0]->alt_mobile ?></a></p>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="contact-info">
               <i class="bx bxs-location-plus"></i>
               <h4>Our Location</h4>
               <p><?=$sitesetting[0]->address ?></p>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
            <div class="contact-info">
               <i class="bx bxs-envelope"></i>
               <h4>Email</h4>
               <p><a href="mailto:<?=$sitesetting[0]->email ?>"><?=$sitesetting[0]->email ?></a></p>
               <p><a href="mailto:<?=$sitesetting[0]->alt_email ?>"><?=$sitesetting[0]->alt_email ?></a></p>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="contact-form-area pb-100">
   <div class="container">
      <div class="section-title">
         <span>Contact Us</span>
         <h2>Get in Touch</h2>
      </div>
      <div class="contact-form">
         <form id="contactForm1" action="<?=base_url('welcome/enquiry_form') ?>" method="post">
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     <input type="text" name="name" class="form-control" id="name" required data-error="Please enter your name" placeholder="Your name">
                     <div class="help-block with-errors"></div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <input type="email" name="email" class="form-control" id="email" required data-error="Please enter your email" placeholder="Your email address">
                     <div class="help-block with-errors"></div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <input type="text" name="subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Your Subject">
                     <div class="help-block with-errors"></div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <input type="text" name="mobile" class="form-control" id="phone_number" required data-error="Please enter your phone number" placeholder="Your phone number">
                     <div class="help-block with-errors"></div>
                  </div>
               </div>
               <div class="col-lg-12 col-md-12">
                  <div class="form-group">
                     <textarea name="message" id="message" class="form-control" cols="30" rows="6" required data-error="Please enter your message" placeholder="Write your message..."></textarea>
                     <div class="help-block with-errors"></div>
                  </div>
               </div>
               <div class="col-lg-12 col-md-12 text-center">
                  <button type="submit" name="submit" class="default-btn-one">Send Message</button>
                  <div id="msgSubmit" class="h3 text-center hidden"></div>
                  <div class="clearfix"></div>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>
<div class="map">
   <?=$sitesetting[0]->map ?>
</div>
<?php include("footer.php"); ?>