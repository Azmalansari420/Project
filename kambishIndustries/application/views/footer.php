   <!-- Footer Start -->
	<footer class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <!-- About Footer Start -->
                    <div class="about-footer">
                        <!-- Footer Logo Start -->
                        <div class="footer-logo text-center">
                            <figure>
                                <img src="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" alt="" style="    width: 119px;">
                            </figure>
                            <span style="font-size: 9px;" class="text-white">AN IATF 16949:2016 CERTIFICATE COMPANY</span>
                        </div>
                        <!-- Footer Logo End -->

                        <!-- Footer Content Start -->
                        <div class="footer-content">
                            <p>Harness the power of the sun with our state-of-the-art solar panel solutions. we are committed to providing cost-effective solar energy systems for your home or business.</p>
                        </div>
                        <!-- Footer Content End -->

                        <!-- Footer Social Links Start -->
                        <div class="footer-social-links">
                            <ul>
                                <li><a href="<?=$sitesetting[0]->facebook ?>"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="<?=$sitesetting[0]->twitter ?>"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="<?=$sitesetting[0]->youtube ?>"><i class="fa-brands fa-youtube"></i></a></li>
                                <li><a href="<?=$sitesetting[0]->instagram ?>"><i class="fa-brands fa-instagram"></i></a></li>                                                                
                            </ul>
                        </div>
                        <!-- Footer Social Links End -->
                    </div>
                    <!-- About Footer End -->
                </div>

                <div class="col-lg-3 col-md-3">
                    <div class="footer-quick-links">
                        <h2>useful links</h2>
                        <ul>                            
                            <li><a href="<?=base_url() ?>">Home</a></li>
                            <li><a href="<?=base_url() ?>about">About us</a></li>
                            <li><a href="<?=base_url() ?>product">Products</a></li>
                            <li><a href="<?=base_url() ?>team">meet the team</a></li>
                            <li><a href="<?=base_url() ?>contact">contact us</a></li>
                        </ul>
                    </div>
                    <!-- Footer Quick Links End -->
                </div>


                <div class="col-lg-3 col-md-3">
                    <div class="footer-quick-links">
                        <h2>Our Products</h2>
                        <ul>           
                        <?php
                        $this->db->order_by('orderline asc');
                        $product = $this->db->get_where('product',array('status'=>1))->result_object();
                        foreach($product as $data)
                            { ?>                 
                            <li><a href="<?=base_url($data->slug) ?>"><?=$data->name ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <!-- Footer Quick Links End -->
                </div>

                <div class="col-lg-3 col-md-4">
                    <!-- Footer Contact Details Start -->
                    <div class="footer-contact-details">
                        <h2>contact</h2>
                        <!-- Footer Contact Info Box Start -->
                        <div class="footer-contact-box">
                            <!-- Info Box Start -->
                            <div class="footer-info-box">
                                <div class="icon-box">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <p><?=$sitesetting[0]->mobile ?>, <?=$sitesetting[0]->alt_mobile ?></p>
                            </div>
                            
                            <div class="footer-info-box">
                                <div class="icon-box">
                                    <i class="fa-solid fa-envelope-open-text"></i>
                                </div>
                                <p><?=$sitesetting[0]->email ?> , <?=$sitesetting[0]->alt_email ?></p>
                            </div>
                            
                            <div class="footer-info-box">
                                <div class="icon-box">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <p><?=$sitesetting[0]->address ?></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="footer-copyright">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Footer Copyright Start -->
                        <div class="footer-copyright-text">
                            <p>Copyright © <?=date('Y'); ?> Kambish Industries. All Rights Reserved.</p>
                        </div>
                        <!-- Footer Copyright End -->
                    </div>
                </div>
            </div>
            <!-- Footer Copyright Section End -->
        </div>
	</footer>
	<!-- Footer End -->

    <!-- Jquery Library File -->
    <script src="<?=base_url() ?>js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap js file -->
    <script src="<?=base_url() ?>js/bootstrap.min.js"></script>
    <!-- Validator js file -->
    <script src="<?=base_url() ?>js/validator.min.js"></script>
    <!-- SlickNav js file -->
    <script src="<?=base_url() ?>js/jquery.slicknav.js"></script>
    <!-- Swiper js file -->
    <script src="<?=base_url() ?>js/swiper-bundle.min.js"></script>
    <!-- Counter js file -->
    <script src="<?=base_url() ?>js/jquery.waypoints.min.js"></script>
    <script src="<?=base_url() ?>js/jquery.counterup.min.js"></script>
    <!-- Isotop js file -->
	<script src="<?=base_url() ?>js/isotope.min.js"></script>
    <!-- Magnific js file -->
    <script src="<?=base_url() ?>js/jquery.magnific-popup.min.js"></script>
    <!-- SmoothScroll -->
    <script src="<?=base_url() ?>js/SmoothScroll.js"></script>
    <!-- Parallax js -->
    <script src="<?=base_url() ?>js/parallaxie.js"></script>
    <!-- MagicCursor js file -->
    <script src="<?=base_url() ?>js/gsap.min.js"></script>
    <script src="<?=base_url() ?>js/magiccursor.js"></script>
    <!-- Text Effect js file -->
    <script src="<?=base_url() ?>js/SplitText.js"></script>
    <script src="<?=base_url() ?>js/ScrollTrigger.min.js"></script>
    <!-- Wow js file -->
    <script src="<?=base_url() ?>js/wow.js"></script>
    <!-- Main Custom js file -->
    <script src="<?=base_url() ?>js/function.js"></script>


<div id="myqote" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Enquiry Now</h4>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('welcome/enquiry_form') ?>" method="POST" >
            <div class="row contact-us-form">
                <div class="form-group col-md-6 mb-4">
                    <label>Your Name</label>
                    <input type="text" name="name" class="form-control" id="fullname" placeholder="Enter Full Name" required>
                </div>

                <div class="form-group col-md-6 mb-4">
                    <label>Your Email</label>
                    <input type="email" name ="email" class="form-control" id="email" placeholder="Enter Email" required>
                </div>

                <div class="form-group col-md-12 mb-4">
                    <label>Mobile</label>
                    <input type="text" name="mobile" class="form-control" id="phone" placeholder="Enter Phone Number" required>
                </div>

                <div class="form-group col-md-12 mb-4">
                    <label>Subject</label>
                    <input type="text" name="subject" class="form-control" id="phone" placeholder="Enter Phone Number" required value="250 Ton machine">
                </div>

                <div class="form-group col-md-12 mb-4">
                    <label>Message</label>
                    <textarea name="message" class="form-control" id="msg" rows="4" placeholder="Type Message" ></textarea>
                </div>

                <div class="col-lg-12">
                    <div class="contact-form-btn">
                        <button type="submit" name="submit" class="btn-default">send message</button>
                    </div>
                </div>
            </div>
        </form>
      </div>
     
    </div>

  </div>
</div>


<script>
$(document).ready(function(){
  $(".get-quote").on("click", function(){
    $("#myqote").modal("show");
  });
});
</script>



</body>
</html>