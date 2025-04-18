<style>
    .site-footer--two {
        position: relative;
        display: block;
        padding: 61px 0px 33px;
        z-index: 1;
    }
  .site-footer {
    position: relative;
    display: block;
    background-color: #015a2d;
}
</style>
        <footer class="site-footer site-footer--two">
            <div class="site-footer--two__pattern"
                style="background-image: url(<?=base_url() ?>assets/images/pattern/site-footer-v2-pattern.png);"></div>
            <div class="site-footer__top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0ms">
                            <div class="footer-widget__about">
                                <div class="footer-widget__about-logo">
                                    <a href="<?=base_url() ?>"><img src="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" alt="" height="100px" style="background: white;  border-radius: 10px;"></a>
                                </div>

                                <p class="footer-widget__about-text">We provide top-quality roofing's services tailored
                                    to meet in the unique needs of our client. </p>
                                <div class="footer-widget__contact-social-links">
                                    <a href="<?=$sitesetting[0]->instagram ?>"><span class="icon-instagram"></span></a>
                                    <a href="<?=$sitesetting[0]->youtube ?>"><span class="icon-play-button-arrowhead"></span></a>
                                    <a href="<?=$sitesetting[0]->twitter ?>"><span class="icon-twitter"></span></a>
                                    <a href="<?=$sitesetting[0]->facebook ?>"><span class="icon-facebook-app-symbol"></span></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__links">
                                <h4 class="footer-widget__title">About Company</h4>
                                <ul class="footer-widget__links-list">
                                    <li><a href="<?=base_url() ?>">Home</a></li>
                                    <li><a href="<?=base_url() ?>about">About Us</a></li>
                                    <li><a href="<?=base_url() ?>product">Products</a></li>
                                    <li><a href="<?=base_url() ?>contact">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__links footer-widget__services">
                                <h4 class="footer-widget__title">Product</h4>
                                <ul class="footer-widget__links-list">
                                    <li><a href="product-details.php">ICUMSA 45 Brazil Sugar</a></li>
                                    <li><a href="product-details.php">ICUMSA 45 Sugar</a></li>
                                    <li><a href="product-details.php">Refined White Sugar</a></li>
                                    <li><a href="">ICUMSA 45 Brazil Sugar</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__contact">
                                <h4 class="footer-widget__title">Contact Info</h4>

                                <ul class="footer-widget__contact-list">
                                    

                                    <li>
                                        <div class="text">
                                            <p><a href="tel:<?=$sitesetting[0]->mobile ?>"><?=$sitesetting[0]->mobile ?> <?=$sitesetting[0]->alt_mobile ?></a></p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="text">
                                            <p><a href="mailto:<?=$sitesetting[0]->email ?>"><?=$sitesetting[0]->email ?> <?=$sitesetting[0]->alt_email ?> </a></p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="text">
                                            <p><?=$sitesetting[0]->address ?></p>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="site-footer__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer__bottom-inner">
                                <div class="site-footer__copyright">
                                    <p class="site-footer__copyright-text">
                                        &copy; 2025 <?=website_name ?> By
                                        <a target="_blank"
                                            href="">Code Diffuision</a>.
                                        All Rights Reserved.
                                    </p>
                                </div>

                                <div class="site-footer__bottom-menu">
                                    <ul>
                                        <li>
                                            <p><a href="<?=base_url() ?>term-condition">Trams & Condition</a></p>
                                        </li>
                                        <li>
                                            <p><a href="<?=base_url() ?>privacy-policy">Privacy Policy</a></p>
                                        </li>
                                      
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer Two End-->

    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
            <div class="logo-box">
                <a href="<?=base_url() ?>" aria-label="logo image"><img src="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" width="140"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:<?=$sitesetting[0]->email ?>"><?=$sitesetting[0]->email ?></a>
                </li>
                <li>
                    <i class="fas fa-phone"></i>
                    <a href="tel:<?=$sitesetting[0]->mobile ?>"><?=$sitesetting[0]->mobile ?></a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="<?=$sitesetting[0]->twitter ?>" class="fab fa-twitter"></a>
                    <a href="<?=$sitesetting[0]->facebook ?>" class="fab fa-facebook-square"></a>
                    <a href="<?=$sitesetting[0]->youtube ?>" class="fab fa-youtube"></a>
                    <a href="<?=$sitesetting[0]->instagram ?>" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->

        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->


    <!-- Search Popup -->
    <div class="search-popup">
        <div class="color-layer"></div>
        <button class="close-search"><span class="far fa-times fa-fw"></span></button>
        <form method="post" action="">
            <div class="form-group">
                <input type="search" name="search-field" value="" placeholder="Search Here" required="">
                <button type="submit"><i class="fas fa-search"></i></button>
            </div>
        </form>
    </div>
    <!-- End Search Popup -->


    <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
        <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
        <span class="scroll-to-top__text"> Go Back Top</span>
    </a>


    <script src="<?=base_url() ?>assets/js/jquery-3.6.0.min.js"></script>
    <script src="<?=base_url() ?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url() ?>assets/js/jarallax.min.js"></script>
    <script src="<?=base_url() ?>assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?=base_url() ?>assets/js/jquery.appear.min.js"></script>
    <script src="<?=base_url() ?>assets/js/swiper.min.js"></script>
    <script src="<?=base_url() ?>assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?=base_url() ?>assets/js/jquery.validate.min.js"></script>
    <script src="<?=base_url() ?>assets/js/wNumb.min.js"></script>
    <script src="<?=base_url() ?>assets/js/wow.js"></script>
    <script src="<?=base_url() ?>assets/js/isotope.js"></script>
    <script src="<?=base_url() ?>assets/js/owl.carousel.min.js"></script>
    <script src="<?=base_url() ?>assets/js/jquery-ui.js"></script>
    <script src="<?=base_url() ?>assets/js/jquery.nice-select.min.js"></script>
    <script src="<?=base_url() ?>assets/js/marquee.min.js"></script>
    <script src="<?=base_url() ?>assets/js/countdown.min.js"></script>
    <script src="<?=base_url() ?>assets/js/jquery.circleType.js"></script>
    <script src="<?=base_url() ?>assets/js/jquery.fittext.js"></script>
    <script src="<?=base_url() ?>assets/js/jquery.lettering.min.js"></script>
    <script src="<?=base_url() ?>assets/js/jquery-sidebar-content.js"></script>
    <script src="<?=base_url() ?>assets/js/aos.js"></script>
    <script src="<?=base_url() ?>assets/js/typed-2.0.11.js"></script>


    <script src="<?=base_url() ?>assets/js/gsap/gsap.js"></script>
    <script src="<?=base_url() ?>assets/js/gsap/ScrollTrigger.js"></script>
    <script src="<?=base_url() ?>assets/js/gsap/SplitText.js"></script>




    <!-- template js -->
    <script src="<?=base_url() ?>assets/js/script.js"></script>
</body>

</html>