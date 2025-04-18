<?php
$sitesetting = $this->crud->fetchdatabyid('1','site_setting');
?>
 <!-- Footer -->
    <footer class="site-footer text-center footer-yoga">
        <div class="footer-top">
			<div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
						<div class="widget">
							<ul class="list-inline">
								<li><a href="<?php echo base_url(); ?>">Home </a></li>
								<li><a href="<?php echo base_url('about'); ?>">About Us</a></li>
								<li><a href="<?php echo base_url('yoga-home'); ?>">Yoga At Home</a></li>
								<!-- <li><a href="<?php echo base_url('heal-body'); ?>">Heal Your Body</a></li> -->
								<!-- <li><a href="<?php echo base_url('yoga-type'); ?>">Yoga Types </a></li> -->
								<li><a href="<?php echo base_url('courses'); ?>">Courses</a></li>
                                <!-- <li><a href="<?php echo base_url('product'); ?>">Product</a></li> -->
								<li><a href="<?php echo base_url('blog'); ?>">Blog</a></li>
								<li><a href="<?php echo base_url('contact'); ?>">Book Demo</a></li>
								
							</ul>
						</div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="widget">
							<ul class="dez-social-icon">
								<li><a href="<?php echo $sitesetting[0]->facebook; ?>"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="<?php echo $sitesetting[0]->twitter; ?>"><i class="fab fa-twitter"></i></a></li>
								<li><a href="<?php echo $sitesetting[0]->instagram; ?>"><i class="fab fa-instagram"></i></a></li>
								<li><a href="<?php echo $sitesetting[0]->youtube; ?>"><i class="fab fa-youtube"></i></a></li>
							</ul>
						</div>
                    </div>
					<div class="col-md-12 col-sm-12">
						<p>Copyright © 2022 YOGA FETTLE JOURNEY. All Rights Reserved. </p>
					</div>
                </div>
            </div>
        </div>
    </footer>




    <!-- -----------------model form------------- -->

    <div class="modal fade" id="myModalform" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel">YOGA FETTLE JOURNEY</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
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
                                <input name="subject" type="text" class="form-control" required id="subject" placeholder="Your Subject" >
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <div class="input-group">
                                <textarea name="message" rows="4" class="form-control" required placeholder="Your Message..."></textarea>
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

    <!-- ---------popup msg--------- -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><?php echo website_name; ?></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <h2>Book your free Demo </h2>
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
                                                <textarea name="message" rows="4" class="form-control" required placeholder="Your Message..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="g-recaptcha" data-sitekey="6LefsVUUAAAAADBPsLZzsNnETChealv6PYGzv3ZN" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                                                <input class="form-control d-none" style="display:none;" data-recaptcha="true" required data-error="Please complete the Captcha">
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="col-lg-12">
                                        <button name="submit" type="submit" value="Submit" class="site-button "> <span>Submit</span> </button>
                                    </div>
                                </div>
                            </form>
                </div>
            </div>
        </div>
    </div>









    <button class="scroltop icon-up style3"><i class="fas fa-arrow-up"></i></button>

    <a href="https://wa.me/919818813448" target="_blank" class="float-wa">
        <img src="<?php echo base_url(); ?>images/wa.png" class="my-float">
    </a>
</div>


<!-- ----mobile icon----- -->
<section class="call-buton"><a class="cc-calto-action-ripple" href="tel:+919818813448"><i class="fa fa-phone"></i></a></section>

<!-- ------social icon -->
<div id="fixed-social">
  <div>
    <a href="<?php echo $sitesetting[0]->facebook; ?>" class="fixed-facebook" target="_blank"><i class="fab fa-facebook-f"></i> <span>Facebook</span></a>
  </div>
  <div>
    <a href="<?php echo $sitesetting[0]->twitter; ?>" class="fixed-twitter" target="_blank"><i class="fab fa-twitter"></i><span>Twitter</span></a>
  </div>
  <div>
    <a href="<?php echo $sitesetting[0]->instagram; ?>" class="fixed-gplus" target="_blank"><i class="fab fa-instagram"></i> <span>Instagram+</span></a>
  </div>
  <div>
    <a href="<?php echo $sitesetting[0]->youtube; ?>" class="fixed-linkedin" target="_blank"><i class="fab fa-youtube"></i> <span>Youtube</span></a>
  </div> 
</div>



<!-- --------------mobile menu------------ -->

    <div class="onMobile" k-partial="">
        <div class="nav-menu-bottom">
            <a class="nav-links-tab tabhome" href="<?php echo base_url('yoga-home'); ?>">
                <div class="tab hometab">
                    <div class="tab-icon">
                      <i class="fa fa-home"></i>
                  </div>
                  <div class="tab-label">
                    <span style="color:Black">Yoga at home </span>
                  </div>
              </div>
            </a>

            <a class="nav-links-tab tabhome" href="<?php echo base_url('blog'); ?>">
                <div class="tab hometab">
                    <div class="tab-icon">
                      <i class="fa fa-blog"></i>
                  </div>
                  <div class="tab-label">
                    <span style="color:Black">Blog</span>
                  </div>
              </div>
            </a>

            <a class="nav-links-tab tabhome" href="<?php echo base_url('yoga-type'); ?>">
                <div class="tab hometab">
                    <div class="tab-icon">
                      <i class="fa fa-home-user"></i>
                  </div>
                  <div class="tab-label">
                    <span style="color:Black">Online Yoga</span>
                  </div>
              </div>
            </a> 

        </div>
    </div>

            

<!-- -----review form------ -->

<div id="reviewmodel" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Write Your feedback </h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form method="post" enctype="multipart/form-data" class="" action="<?php echo base_url('welcome/reviewform'); ?>">
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
                                        <input name="email" type="text" class="form-control" required  placeholder="Your Email" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="input-group"> 
                                        <textarea name="message" placeholder="Your Review" class="form-control" required rows="3"></textarea>
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











<!-- JavaScript  files ========================================= -->
<script src="<?php echo base_url(); ?>js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
<script src="<?php echo base_url(); ?>plugins/bootstrap/js/popper.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="<?php echo base_url(); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="<?php echo base_url(); ?>plugins/bootstrap-select/bootstrap-select.min.js"></script><!-- FORM JS -->
<script src="<?php echo base_url(); ?>plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->
<script src="<?php echo base_url(); ?>plugins/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
<script src="<?php echo base_url(); ?>plugins/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="<?php echo base_url(); ?>plugins/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="<?php echo base_url(); ?>plugins/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
<script src="<?php echo base_url(); ?>plugins/masonry/masonry-3.1.4.js"></script><!-- MASONRY -->
<script src="<?php echo base_url(); ?>plugins/masonry/masonry.filter.js"></script><!-- MASONRY -->
<script src="<?php echo base_url(); ?>plugins/owl-carousel/owl.carousel.js"></script><!-- OWL SLIDER -->
<script src="<?php echo base_url(); ?>js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script src="<?php echo base_url(); ?>js/dz.carousel.js"></script><!-- SORTCODE FUCTIONS  -->
<script src="<?php echo base_url(); ?>plugins/switcher/js/switcher.js"></script><!-- SORTCODE FUCTIONS  -->
<script src="<?php echo base_url(); ?>js/dz.ajax.js"></script><!-- CONTACT JS  -->


<script src="<?php echo base_url(); ?>plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo base_url(); ?>plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>

<script src="<?php echo base_url(); ?>plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="<?php echo base_url(); ?>plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>

<script src="<?php echo base_url(); ?>plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>

<script src="<?php echo base_url(); ?>plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>

<script src="<?php echo base_url(); ?>plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>

<script src="<?php echo base_url(); ?>plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>

<script src="<?php echo base_url(); ?>plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="<?php echo base_url(); ?>plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="<?php echo base_url(); ?>js/rev.slider.js"></script>


<script type="text/javascript">
jQuery(document).ready(function() {
	'use strict';
	dz_rev_slider_2();
});	/*ready*/
</script>
<script type="text/javascript">
jQuery(document).ready(function() {
	'use strict';
	dz_rev_slider_5();
});	/*ready*/
</script>

<script>
    function showModal(text='') {

      $('#myModalform').modal('show');
      $("#subject").val(text);
    }

    $(".close").click(function(){
            $("#myModalform").modal('hide');
        });
</script>

<script>
    $(document).ready(function(){
        if (window.location.href === "<?php echo base_url(); ?>") {
            setTimeout(function () {
        $("#myModal").modal('show');
  }, 5000);
    }
    });

    $(".close").click(function(){
            $("#myModal").modal('hide');
        });
</script>

<script>
    $(document).ready(function(){
        $(".review").click(function(){
            $("#reviewmodel").modal('show');
        });
        $(".close").click(function(){
            $("#reviewmodel").modal('hide');
        });
    });
</script>
</body>
</html>