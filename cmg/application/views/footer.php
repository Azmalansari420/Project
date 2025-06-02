<?php
$sitesetting = $this->crud->fetchdatabyid('1','site_setting');
?>
 <footer class="footer">
            <div class="footer-1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 mb-30">
                            <div class="mb-20"><img src="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" alt="transp" /></div>
                            <p class="font-xs mb-20 color-white">
                                CMG WORLDWIDE was FOUNDED IN 1993, by a group of professionals having more than three decades of experience in the freight forwarding industry. The company today comprises of a small group of companies
                                involved in various aspects of international & domestic transportation.
                            </p>
                            <div class="mt-15">
                                <a class="icon-socials icon-facebook" href="<?=$sitesetting[0]->facebook ?>"></a><a class="icon-socials icon-instagram" href="<?=$sitesetting[0]->instagram ?>"></a><a class="icon-socials icon-twitter" href="<?=$sitesetting[0]->twitter ?>"></a><a class="icon-socials icon-youtube" href="<?=$sitesetting[0]->youtube ?>"></a>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-30">
                            <h5 class="mb-10 color-brand-1">Services</h5>
                            <ul class="menu-footer customul">
                                <?php
                                $service = $this->crud->selectDataByMultipleWhere('services',array('status'=>1,));
                                foreach($service as $data)
                                    { ?>
                                <li>
                                    <a href="<?=base_url('service-details/'.$data->slug) ?>"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <?=$data->name ?></a>
                                </li>
                            <?php } ?>
                                
                            </ul>
                        </div>
                        <div class="col-lg-4 mb-30">
                            <h5 class="mb-10 color-brand-1">Contact Us</h5>
                            <div class="galleries-footer">
                                <ul class="menu-footer">
                                    <li>
                                        <a href="#!"><i class="fa fa-map" aria-hidden="true"></i> Address : <?=$sitesetting[0]->address ?></a>
                                    </li>
                                    <li>
                                        <a href="tel:<?=$sitesetting[0]->mobile ?>"><i class="fa fa-phone" aria-hidden="true"></i> Phone Number : <?=$sitesetting[0]->mobile ?>, <?=$sitesetting[0]->alt_mobile ?></a>
                                    </li>
                                    <li>
                                        <a href="mailto:<?=$sitesetting[0]->email ?>"><i class="fa fa-envelope-o" aria-hidden="true"></i> Email : <?=$sitesetting[0]->email ?></a>
                                        <a href="mailto:<?=$sitesetting[0]->alt_email ?>"><i class="fa fa-envelope-o" aria-hidden="true"></i> Alt Email : <?=$sitesetting[0]->alt_email ?></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-2">
                <div class="container">
                    <div class="footer-bottom">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-12 text-center text-lg-start"><span class="color-grey-300 font-md">© 2023 <a href="index.php" style="color: #16BA8F;">CMG WORLDWIDE</a>. All right reversed.</span></div>
                            <!-- <div class="col-lg-6 col-md-12 text-center text-lg-end">
                                <ul class="menu-bottom">
                                    <li><a class="font-sm color-grey-300" href="<?=base_url() ?>privacy-policy">Privacy policy</a></li>
                                    <li><a class="font-sm color-grey-300" href="<?=base_url() ?>term-conditions">Terms of service</a></li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="<?=base_url() ?>assets/js/vendors/modernizr-3.6.0.min.js"></script>
        <script src="<?=base_url() ?>assets/js/vendors/jquery-3.6.0.min.js"></script>
        <script src="<?=base_url() ?>assets/js/vendors/jquery-migrate-3.3.0.min.js"></script>
        <script src="<?=base_url() ?>assets/js/vendors/bootstrap.bundle.min.js"></script>
        <script src="<?=base_url() ?>assets/js/vendors/waypoints.js"></script>
        <script src="<?=base_url() ?>assets/js/vendors/wow.js"></script>
        <script src="<?=base_url() ?>assets/js/vendors/magnific-popup.js"></script>
        <script src="<?=base_url() ?>assets/js/vendors/perfect-scrollbar.min.js"></script>
        <script src="<?=base_url() ?>assets/js/vendors/select2.min.js"></script>
        <script src="<?=base_url() ?>assets/js/vendors/isotope.js"></script>
        <script src="<?=base_url() ?>assets/js/vendors/scrollup.js"></script>
        <script src="<?=base_url() ?>assets/js/vendors/swiper-bundle.min.js"></script>
        <script src="<?=base_url() ?>assets/js/vendors/noUISlider.js"></script>
        <script src="<?=base_url() ?>assets/js/vendors/slider.js"></script>
        <!-- Count down-->
        <script src="<?=base_url() ?>assets/js/vendors/counterup.js"></script>
        <script src="<?=base_url() ?>assets/js/vendors/jquery.countdown.min.js"></script>
        <!-- Count down-->
        <script src="<?=base_url() ?>assets/js/vendors/jquery.elevatezoom.js"></script>
        <script src="<?=base_url() ?>assets/js/vendors/slick.js"></script>
        <script src="<?=base_url() ?>assets/js/main28b5.js?v=2.0.0"></script>
    </body>
</html>
