 
<footer class="main-footer">
    
    <!--Widgets Section-->
    <div class="widgets-section">
        <div class="container">
            <div class="row">
                <!--Big Column-->
                <div class="big-column col-md-6 col-sm-12 col-xs-12">
                    <div class="row clearfix">
                        
                        <!--Footer Column-->
                        <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-widget about-widget">
                                <figure class="footer-logo"><a href="index.html"><img src="images/logo/logo.png" alt=""></a></figure>
                                
                                <div class="widget-content">
                                    <div class="text"><p>EDUINDIA Foundation is a Non-Government Organization registered under Ministry of Corporate Affairs, Govt.</p> </div>
                                    <div class="link">
                                        <a href="about.php" class="default_link">More About us <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Footer Column-->
                        <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-widget links-widget">
                                <div class="section-title">
                                    <h3>Quick Links</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="list">
                                        <li><a href="about.php">About Us</a></li>
                                        <li><a href="Our-Institutes.php">Our Institutes</a></li>
                                        <li><a href="gallery.php">Gallery</a></li>
                                        <li><a href="courseoffer.php">Courses Offered</a></li>
                                        <li><a href="Franchise-Registration.php">Franchisse</a></li>
                                        <li><a href="contact.php">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Big Column-->
                <div class="big-column col-md-6 col-sm-12 col-xs-12">
                    <div class="row clearfix">
                        
                        <!--Footer Column-->
                        <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-widget posts-widget">
                                <div class="section-title">
                                    <h3>latest news</h3>
                                </div>
                                <div class="widget-content">
						<marquee onMouseOver="this.stop();" onMouseOut="this.start();" direction="up"style="height:200px;">
								 <?php 
		 $all_gallery_pic = $con->all_fetch('post',array('status'=>'Yes','type'=>3),"order by id desc");
		    if(is_array($all_gallery_pic) || is_object($all_gallery_pic)){
			 foreach($all_gallery_pic as $agp){
			 ?>
                                    <!--Post-->
                                    <div class="post">
                                        <div class="content">
                                            <h4>
											<a href="javascript:;"><?php e($agp->name); ?></a>
											<p >
											<?php 
											  e(substr($agp->description,0,100)); 
											?></p>
											</h4>
                                        </div>
                                         
                                    </div>
                                  
			<?php } } ?>
			</marquee>
                                </div>
                                
                            </div>
                        </div>
                        
                        <!--Footer Column-->
                        <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-widget contact-widget">
                                <div class="section-title">
                                    <h3>contact us</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="contact-info">
                                       <li><span class="icon fa fa-map-marker"></span>Regional Office:- Amar Tyre Street, Near Chawla, Surkhab Chowk,
SIRSA (Haryana)-125055</li>
                                        <li><span class="icon fa fa-map-marker"></span>Corporate Office:- G-16/19, 2nd Floor, Rohini, Sector 15 Delhi – 110089</li>
                                        <li><span class="icon fa fa-phone"></span> Phone: +91-89-500-71777 /
+1800 891 4011</li>
                                        <li><span class="icon fa fa-paper-plane"></span>info@eduindiafoundation.org</li>
                                    </ul>
                                </div>
                                <ul class="social">
                                    <li><a href="https://www.facebook.com/JKCSEduIndiaFoundation/"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/JKCSEduIndia"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.instagram.com/jkcseduindia/"><i class="fa fab fa-instagram"></i></a></li>
                                    <li><a href="https://www.linkedin.com/company/edu-india-foundation/"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="https://www.pinterest.com/eduindiafoundation/"><i class="fa fab fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
                
             </div>
			<div class="row">
				        <p style="font-size:16px;">Designed and Promoted By Code Diffusion -  <a href="http://codediffusion.in/" target="_blank"style="font-size:16px;">Website Designing Company in Delhi</a></p>

			</div>
         </div>
		
     </div>
     
     <!--Footer Bottom-->
     <section class="footer-bottom">
        <div class="container">
            <div class="pull-left copy-text">
               
                
            </div><!-- /.pull-right -->
           
        </div><!-- /.container -->
    </section>
     
</footer>

<!-- Scroll Top Button -->
	<button class="scroll-top tran3s color2_bg">
		<span class="fa fa-angle-up"></span>
	</button>
	<!-- pre loader  -->
	<div class="preloader"></div>
	<!-- jQuery js -->
	<script src="js/jquery.js"></script>
	<!-- bootstrap js -->
	<script src="js/bootstrap.min.js"></script>
	<!-- jQuery ui js -->
	<script src="js/jquery-ui.js"></script>
	<!-- owl carousel js -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- jQuery validation -->
	<script src="js/jquery.validate.min.js"></script>
	<!-- google map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRvBPo3-t31YFk588DpMYS6EqKf-oGBSI"></script> 
	<script src="js/gmap.js"></script>
	<!-- mixit up -->
	<script src="js/wow.js"></script>
	<script src="js/jquery.mixitup.min.js"></script>
	<script src="js/jquery.fitvids.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
	<!-- selectmenu -->

	<!-- revolution slider js -->
	<script src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
	<script src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
	<script src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
	<script src="assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
	<script src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
	<script src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	<script src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
	<script src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
	<!-- fancy box -->
	<script src="js/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.polyglot.language.switcher.js"></script>
	<script src="js/nouislider.js"></script>
	<script src="js/jquery.bootstrap-touchspin.js"></script>
	<script src="js/SmoothScroll.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/jquery.countTo.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/imagezoom.js"></script>	
	<script id="map-script" src="js/default-map.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/isotope.js"></script>	
	<script src="js/jquery.magnific-popup.min.js"></script> 
</div>
	
</body>


</html>