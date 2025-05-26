<?php
$sitesetting = $this->crud->fetchdatabyid('1','site_setting');
?>
<!-- main-area-end -->
         <!-- footer -->
        <footer class="footer-bg footer-p">
            <div class="footer-top pt-120 pb-20 p-relative" style="background-image: url(<?=base_url() ?>img/bg/footer-bg.png); background-size: cover; background-repeat: no-repeat; background-color: #13212a;">
                <div class="container">
                    <div class="row justify-content-center">
                         <div class="col-xl-8 col-lg-8 col-sm-12">
                            <div class="newslater-area pb-120 text-center">
                                <div class="section-title mb-50">
                                     <h2>Subscribe To Our Newsletter</h2>
                                </div>                               
                                <form  id="contact-form4" action="<?=base_url('welcome/subscribe_form') ?>" method="post" class="contact-form newslater">
                                   <div class="form-group p-relative">
                                      <input class="form-control" id="email2" name="email" type="email" placeholder="Email Address..." required=""> 
                                      <button type="submit" name="submit">Subscribe Now</button>
                                   </div>
                                </form>
                             </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                          <div class="col-xl-2 col-lg-2 col-sm-6">
                            <div class="footer-widget">
                                <div class="f-widget-title">
                                   <img src="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" alt="img">
                                </div>                                    
                            </div>
                        </div>

						<div class="col-xl-10 col-lg-10 col-sm-6">
                            <div class="footer-widget">
                                <div class="footer-link">
                                    <ul>                                        
                                        <li><a href="<?=base_url() ?>">Home</a></li>
                                        <li><a href="<?=base_url() ?>about"> About Us</a></li>
                                        <li><a href="<?=base_url() ?>founder-msg">Founder Message</a></li>
                                        <li><a href="<?=base_url() ?>what-we-do">  What We Do</a></li>
                                        <?php
                                        $cate = $this->crud->selectDataByMultipleWhere('categories',array('status'=>1,));
                                        foreach($cate as $data)
                                            { ?>
                                        <li><a href="<?=base_url('service-details/'.$data->slug) ?>">  <?=$data->name ?></a></li>
                                    <?php } ?>
                                        <!-- <li><a href="<?=base_url() ?>book-appointment">  Book Appointment</a></li> -->
                                        <li><a href="<?=base_url() ?>gallery">  Gallery</a></li>
                                        <li><a href="<?=base_url() ?>blog">  Blog</a></li>
                                        <li><a href="<?=base_url() ?>contact"> Contact Us</a></li>                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
           <div class="copyright-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">                         
                              Copyright © 2023 HOPE HEALTH. All Rights Reserved.  
                        </div>
                        <div class="col-lg-6"> 
                            <div class="footer-social">                                    
                                    <a href="<?=$sitesetting[0]->facebook ?>"><i class="fab fa-facebook-f"></i></a>
                                    <a href="<?=$sitesetting[0]->instagram ?>"><i class="fab fa-instagram"></i></a>
                                    <a href="<?=$sitesetting[0]->twitter ?>"><i class="fab fa-twitter"></i></a>
                                    <a href="<?=$sitesetting[0]->youtube ?>"><i class="fab fa-youtube"></i></a>
                                </div>    
                        </div>
                        
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-end -->

		<!-- JS here -->
        <script src="<?=base_url() ?>js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="<?=base_url() ?>js/vendor/jquery-3.6.0.min.js"></script>
        <script src="<?=base_url() ?>js/popper.min.js"></script>
        <script src="<?=base_url() ?>js/bootstrap.min.js"></script>
        <script src="<?=base_url() ?>js/slick.min.js"></script>
        <script src="<?=base_url() ?>js/ajax-form.js"></script>
        <script src="<?=base_url() ?>js/paroller.js"></script>
        <script src="<?=base_url() ?>js/wow.min.js"></script>
        <script src="<?=base_url() ?>js/js_isotope.pkgd.min.js"></script>
        <script src="<?=base_url() ?>js/imagesloaded.min.js"></script>
        <script src="<?=base_url() ?>js/parallax.min.js"></script>
        <script src="<?=base_url() ?>js/jquery.waypoints.min.js"></script>
        <script src="<?=base_url() ?>js/jquery.counterup.min.php"></script>
        <script src="<?=base_url() ?>js/jquery.scrollUp.min.js"></script>
        <script src="<?=base_url() ?>js/jquery.meanmenu.min.js"></script>
        <script src="<?=base_url() ?>js/parallax-scroll.js"></script>
        <script src="<?=base_url() ?>js/jquery.magnific-popup.min.js"></script>
        <script src="<?=base_url() ?>js/element-in-view.js"></script>
        <script src="<?=base_url() ?>js/main.js"></script>
    </body>

</html>