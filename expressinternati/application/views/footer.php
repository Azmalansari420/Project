<?php
$sitesetting = $this->crud->fetchdatabyid('1','site_setting');
?>
<footer class="footer-area pt-100 pb-70">
   <div class="container container-foooter">
      <div class="row">
         <div class="col-lg-3 col-sm-6">
            <div class="footer-widget">
               <div class="logo">
                  <img src="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" class="main-logo" alt="logo">
                  <!-- <img src="<?=base_url() ?>assets/img/logo-2.png" class="white-logo" alt="logo"> -->
               </div>
               <p><strong>Welcome to Express International Courier</strong>, your trusted partner for seamless international logistics solutions. With over 7 years of extensive experience in the industry, including a background in DHL, we pride ourselves on delivering safe, secure, and fast shipping services worldwide.</p>
               <ul class="footer-socials">
                  	<li>
						<a href="<?=$sitesetting[0]->facebook ?>" target="_blank">
							<i class="bx bxl-facebook"></i>
						</a>
					</li>
					<li>
						<a href="<?=$sitesetting[0]->twitter ?>" target="_blank">
							<i class="bx bxl-twitter"></i>
						</a>
					</li>
					<li>
						<a href="<?=$sitesetting[0]->youtube ?>" target="_blank">
							<i class="bx bxl-youtube"></i>
						</a>
					</li>
					<li>
						<a href="<?=$sitesetting[0]->instagram ?>" target="_blank">
							<i class="bx bxl-instagram"></i>
						</a>
					</li>
               </ul>
            </div>
         </div>
         <div class="col-lg-2 col-sm-6">
            <div class="footer-widget pl-80">
               <h3>Quick Links</h3>
               <ul class="footer-text">
                  <li>
                     <a href="<?=base_url() ?>">Home</a>
                  </li>
                  <li>
                     <a href="courier-services.php">Our Services</a>
                  </li>
                  <li>
                     <a href="<?=base_url() ?>faq">FAQ's</a>
                  </li>
                  <li>
                     <a href="<?=base_url() ?>other-country">Other Country</a>
                  </li>
                  <li>
                     <a href="<?=base_url() ?>contact">Contact</a>
                  </li>
               </ul>
            </div>
         </div>


         <div class="col-lg-3 col-sm-6">
            <div class="footer-widget pl-50">
               <h3>Top Countries</h3>
               <ul class="footer-text">
                  <?php
                     $country = $this->crud->selectDataByMultipleWhere('country',array('status'=>1,'type'=>1));
                     foreach($country as $data)
                        { ?>
                  <li>
                     <a href="<?=base_url('country-details/'.$data->slug) ?>"><?=$data->name ?></a>
                  </li>
               <?php } ?>
               </ul>
            </div>
         </div>
         
         <!-- <div class="col-lg-2 col-sm-6">
            <div class="footer-widget pl-50">
               <h3>Other Countries</h3>
               <ul class="footer-text">
                  <?php
                     $country = $this->crud->selectDataByMultipleWhere('country',array('status'=>1,'type'=>2));
                     foreach($country as $data)
                        { ?>
                  <li>
                     <a href="<?=base_url('country-details/'.$data->slug) ?>"><?=$data->name ?></a>
                  </li>
               <?php } ?>
               </ul>
            </div>
         </div>
 -->

         <div class="col-lg-4 col-sm-6">
            <div class="footer-widget">
               <h3>Contact Info</h3>
               <ul class="info-list">
                  
                  <li>
                     <i class="bx bxs-envelope"></i>
                     <a href="mailto:<?=$sitesetting[0]->email ?>"><?=$sitesetting[0]->email ?></a>
                  </li>
                  <li>
                     <i class="bx bxs-envelope"></i>
                     <a href="mailto:<?=$sitesetting[0]->alt_email ?>"><?=$sitesetting[0]->alt_email ?></a>
                  </li>
                  <li>
                     <i class="bx bxs-phone"></i>
                     <a href="tel:<?=$sitesetting[0]->mobile ?>"><?=$sitesetting[0]->mobile ?></a>
                  </li>
                  <li>
                     <i class="bx bxs-phone"></i>
                     <a href="tel:<?=$sitesetting[0]->alt_mobile ?>"><?=$sitesetting[0]->alt_mobile ?></a>
                  </li>
                  <li>
                     <i class="bx bxs-location-plus"></i>
                     <?=$sitesetting[0]->address ?>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</footer>
<div class="footer-bottom">
   <div class="container">
      <p>Copyright @2024 Express International Courier. All Rights Reserved <a href="#" target="_blank">Code Diffusion Tecnologies</a></p>
   </div>
</div>
<div class="go-top">
   <i class="bx bx-chevrons-up"></i>
</div>
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="<?=base_url() ?>assets/js/jquery.min.js"></script>
<script src="<?=base_url() ?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url() ?>assets/js/meanmenu.min.js"></script>
<script src="<?=base_url() ?>assets/js/owl.carousel.min.js"></script>
<script src="<?=base_url() ?>assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?=base_url() ?>assets/js/odometer.min.js"></script>
<script src="<?=base_url() ?>assets/js/jquery.appear.js"></script>
<script src="<?=base_url() ?>assets/js/form-validator.min.js"></script>
<script src="<?=base_url() ?>assets/js/contact-form-script.js"></script>
<script src="<?=base_url() ?>assets/js/jquery.ajaxchimp.min.js"></script>
<script src="<?=base_url() ?>assets/js/wow.min.js"></script>
<script src="<?=base_url() ?>assets/js/custom.js"></script>

     <script>
    var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?94954';
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url;
    var options = {
  "enabled":true,
  "chatButtonSetting":{
      "backgroundColor":"#4dc247",
      "ctaText":"Message Us",
      "borderRadius":"25",
      "marginLeft":"50",
      "marginBottom":"50",
      "marginRight":"50",
      "position":"left"
  },
  "brandSetting":{
      "brandName":"Express International Courier",
      "brandSubTitle":"Typically replies within a day",
      "brandImg":"<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>",
      "welcomeText":"Hi there!\nHow can I help you?",
      "messageText":"Hello, I have a question about {{page_link}}",
      "backgroundColor":"#0a5f54",
      "ctaText":"Start Chat",
      "borderRadius":"25",
      "autoShow":false,
      "phoneNumber":"+918010000838"
  }
};
    s.onload = function() {
        CreateWhatsappChatWidget(options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
</script>

</body>
</html>