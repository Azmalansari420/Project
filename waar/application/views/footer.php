<?php
$sitesetting = $this->crud->fetchdatabyid('1','site_setting');
?>
    <div class="footer-wrapper float-left">
        <div class="container">
            <div class="row footer-main  animated wow fade-up">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div>
                        <div class="footer-logo">
                            <img src="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" alt="img" style="width: 40%;">
                        </div>
                        <div class="footer-pera">
                            <p>Dedicated to transforming lives, we strive to provide unmatched care and support for your health and well-being. From virtual consultations and prescriptions for chronic diseases to Ayurvedic treatments, we offer a range of holistic solutions tailored to your needs.</p>
                        </div>
                        <div class="footer-icon">
                            <ul>
                                <li><a href="<?=$sitesetting[0]->facebook ?>">
                                        <i class="fab fa-facebook-f"></i>
                                    </a></li>
                                <li><a href="<?=$sitesetting[0]->twitter ?>">
                                        <i class="fab fa-twitter"></i>
                                    </a></li>
                                <li><a href="<?=$sitesetting[0]->instagram ?>">
                                        <i class="fab fa-instagram"></i>
                                    </a></li>
                                <li><a href="<?=$sitesetting[0]->youtube ?>">
                                        <i class="fab fa-youtube"></i>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-12">
                    <div class="footer-link-wrapper">
                        <h5>Useful links</h5>
                        <ul>
                            <li><a href="<?=base_url() ?>">
                                    <span><i class="fas fa-chevron-right"></i></span> Home
                                </a></li>
                            <li><a href="<?=base_url() ?>about">
                                    <span><i class="fas fa-chevron-right"></i></span> About Us
                                </a></li>
                            <li><a href="<?=base_url() ?>gallery">
                                    <span><i class="fas fa-chevron-right"></i></span> Gallery
                                </a></li>
                            <li><a href="<?=base_url() ?>addictions">
                                    <span><i class="fas fa-chevron-right"></i></span> Addictions
                                </a></li>
                            <li><a href="<?=base_url() ?>appointment">
                                    <span><i class="fas fa-chevron-right"></i></span> Booking Appointment
                                </a></li>
                            <li><a href="<?=base_url() ?>contact">
                                    <span><i class="fas fa-chevron-right"></i></span> Contact Us
                                </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12">
                    <div class="footer-link-wrapper">
                        <h5>Services</h5>
                        <ul>
                            <?php
                            $cate = $this->crud->selectDataByMultipleWhere('categories',array('status'=>1,));
                            foreach($cate as $data)
                                { ?>
                            <li><a href="<?=base_url('service-details/'.$data->slug) ?>">
                                    <span><i class="fas fa-chevron-right"></i></span> <?=$data->name ?>
                                </a></li>
                         <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-contact">
                        <h5>Contact Info</h5>
                        <ul>
                            <li>
                                <div class="address-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="address-content">
                                    <a href="javascript:;">
                                        <span>Address</span>
                                        <?=$sitesetting[0]->address ?>
                                    </a>
                                </div>
                            </li>
                            <?php
                            if(!empty($sitesetting[0]->mobile))
                                { ?>
                            <li>
                                <div class="address-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="address-content">
                                    <a href="tel:<?=$sitesetting[0]->mobile ?>">
                                        <span>PHONE</span>
                                        <?=$sitesetting[0]->mobile ?>, <?=$sitesetting[0]->alt_mobile ?>
                                    </a>
                                </div>
                            </li>
                        <?php } ?>
                            <li>
                                <div class="address-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="address-content">
                                    <a href="mailto:<?=$sitesetting[0]->email ?>">
                                        <span>EMAIL</span>
                                        <?=$sitesetting[0]->email ?>, <?=$sitesetting[0]->alt_email ?>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="bottom-footer">
                <p>Copyright © 2023 EMM GLOBAL HEALTH CARE Designed By <a href="https://www.codediffusion.in/">Code Diffusion.</a></p>
            </div>
        </div>
    </div>

    <!-- footer-section-end -->

    <!-- Login Modal -->
    <div class="login-wrapper">
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="btn-close login-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                    <div class="modal-header">
                        <h3 class="modal-title" id="staticBackdropLabel1"><span>Login</span></h3>
                    </div>
                    <div class="modal-body">
                        <div class="register-body">
                            <form>
                                <div>
                                    <input type="text" placeholder="User Name*">
                                </div>
                                <div>
                                    <input type="password" placeholder="Password*">
                                </div>
                                <div>
                                    <ul>
                                        <li>
                                            <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                            <label class="form-check-label" for="exampleCheck2">Remember Me</label>
                                        </li>
                                        <li>
                                            <a href="javascript:;">Forgot Password?</a>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="sign-btn">
                            <a href="javascript:;" class="main-btn-red">
                                <em><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></em><span>Log In
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Register Modal -->
    <div class="login-wrapper">
        <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="btn-close login-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                    <div class="modal-header">
                        <h3 class="modal-title" id="staticBackdropLabel"><span>Register</span></h3>
                    </div>
                    <div class="modal-body">
                        <div class="register-body">
                            <form>
                                <div>
                                    <input type="text" placeholder="User Name*">
                                </div>
                                <div>
                                    <input type="email" placeholder="Email*">
                                </div>
                                <div>
                                    <input type="password" placeholder="Password*">
                                </div>
                                <div>
                                    <input type="password" placeholder="Confirm Password*">
                                </div>
                                <div>
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Yes, I understand and agree
                                        <a href="javascript:;">Terms & Conditions.</a> </label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="sign-btn">
                            <a href="javascript:;" class="main-btn-red">
                                <em><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></em><span>Sign Up
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- javascript -->

    

    <script src="<?=base_url() ?>js/jquery-3.6.4.min.js"></script>
    <script src="<?=base_url() ?>js/jquery.magnific-popup.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?=base_url() ?>js/bootstrap.min.js"></script>
    <script src="<?=base_url() ?>js/swiper.min.js"></script>
    <script src="<?=base_url() ?>js/bootstrap-datepicker.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="<?=base_url() ?>js/owl.carousel.js"></script>
    <script src="<?=base_url() ?>js/owl.carousel.min.js"></script>
    <!-- Animation Js -->
    <script src="<?=base_url() ?>js/wow.js"></script>
    <!-- Custom Js -->
    <script src="<?=base_url() ?>js/custom.js"></script>
    <!-- contact form js start -->
    <script src="<?=base_url() ?>js/contact_form.js"></script>




    <script>
        jQuery(document).on('click', '.video-play-icon', function (e) {
            var video = jQuery(this).parents(".vdo-custom-play").find("video")[0];
            if (video.paused === false) {
                video.pause();
                jQuery(this).parents(".vdo-custom-play").removeClass("is-video-playing");
            } else {
                video.play();
                jQuery(this).parents(".vdo-custom-play").addClass("is-video-playing");
            }
            return false;
        });
    </script>



<script>
    $(document).ready(function(){
        if (window.location.href === "<?php echo base_url(); ?>") {
            setTimeout(function () 
            {
                $('.home-loader').css({"display":"block"});
              },);
                }
    });

    $('.home-loader').css({"display":"none"});

</script>


</body>

</html>