


	<?php 
$getcontent = $this->db->get_where('content',array('id'=>5))->result_object();
?>
<!-- witrfm_footer_area -->
<div class="witrfm_area">
	<div class="footer-middle">  
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-6  col-lg-3 ">
					<div class="widget widget_hackery_description_widget">			
						<div class="hackery-description-area">
							<h2 class="widget-title">About Us</h2>
							<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>media/uploads/site_setting/<?php echo $sitesetting[0]->logo; ?>" alt="Footer logo" style="width: 100px;"></a>
							 <?=$getcontent[0]->content ?>	
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="widget widget_nav_menu">
						<h2 class="widget-title">Quick Links</h2>
						<div class="menu-help-link-container">
							<ul  class="menu">
								<li><a href="<?php echo base_url(''); ?>">Home</a></li>
								<li><a href="<?php echo base_url('about'); ?>">About Us</a></li>
								<li><a href="<?php echo base_url('product'); ?>">Our Product</a></li>
								<li><a href="<?php echo base_url('contact'); ?>">Contact Us</a></li>
								<li><a href="<?php echo base_url('privecy-policie'); ?>">Privacy Policy</a></li>

								<li><a href="<?php echo base_url('term-condition'); ?>">Terms & Conditions</a></li>
							</ul>
						</div>
					</div>	
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="widget widget_nav_menu">
						<h2 class="widget-title">Our Service</h2>
						<div class="menu-help-link-container">
							<ul  class="menu">
								<?php
								$category = $this->db->get_where('categories',array('status'=>1))->result_object();
								foreach($category as $data)
									{ ?>
								<li><a href="<?php echo base_url($data->slug); ?>"><?=$data->name ?></a></li>
								<?php } ?>
							</ul>
						</div>
					</div>	
				</div>


				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="widget widget_nav_menu">
						<h2 class="widget-title">Head Office</h2>
						<div class="menu-help-link-container">
							<ul  class="menu">
								<!-- <li><a href="#"><i class="icofont-home"></i> <?php echo $sitesetting[0]->address; ?></a></li> -->
								<li><a href="tel:<?php echo $sitesetting[0]->mobile; ?>"><i class="icofont-phone"></i> <?php echo $sitesetting[0]->mobile; ?></a></li>
								<!--<li><a href="#"><i class="icofont-mobile-phone"></i> 91xxxxxxx</a></li>-->
								<li><a href="mailto:<?php echo $sitesetting[0]->email; ?>"><i class="icofont-email"></i> <?php echo $sitesetting[0]->email; ?></a></li>
							</ul>

						</div>
						<div class="hackery-description-area">
							  <div class="social-icons">
								<a href="<?php echo $sitesetting[0]->facebook; ?>"><i class="fab fa-facebook-f"></i></a>
								<a href="<?php echo $sitesetting[0]->twitter; ?>"><i class="fab fa-twitter"></i></a>
								<a href="<?php echo $sitesetting[0]->instagram; ?>"><i class="fab fa-instagram"></i></a>
								<a href="<?php echo $sitesetting[0]->youtube; ?>"><i class="fab fa-youtube"></i></a>
							</div>							
						</div>
					</div>	
				</div>


				
			</div>
		</div>	
	</div>		
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12  col-sm-12 text-center">
					<div class="copy-right-text">
						<p>Copyright &copy; <?=website_name ?> all rights reserved.</p>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>

        <!-- Include All JS -->
        <script src="<?php echo base_url(); ?>assets/js/vendor/jquery-3.5.1.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/isotope.pkgd.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.nivo.slider.pack.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/slick.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="venobox/venobox.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.appear.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.knob.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/BeerSlider.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/theme-pluginjs.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.meanmenu.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/ajax-mail.js"></script>		
        <script src="<?php echo base_url(); ?>assets/js/theme.js"></script>



	<script>
    var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?66516';
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url;
    var options = {
  "enabled":true,
  "chatButtonSetting":{
      "backgroundColor":"#4dc247",
      "ctaText":"Message us",
      "borderRadius":"25",
      "marginLeft":"0",
      "marginBottom":"50",
      "marginRight":"50",
      "position":"right"
  },
  "brandSetting":{
      "brandName":"<?=website_name ?>",
      "brandSubTitle":"Typically replies within a day",
      "brandImg":"<?php echo base_url(); ?>media/uploads/site_setting/<?php echo $sitesetting[0]->logo; ?>",
      "welcomeText":"Hi there!\nHow can I help you?",
      "messageText":"Hello, I have a question about {{page_link}}",
      "backgroundColor":"#0a5f54",
      "ctaText":"Start Chat",
      "borderRadius":"25",
      "autoShow":false,
      "phoneNumber":"917678348620"
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