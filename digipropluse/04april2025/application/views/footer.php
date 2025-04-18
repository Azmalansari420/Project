<!-- Footer area start here -->
    <footer class="footer-area secondary-bg">
        <div class="footer__shape-regular-left wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
            <img src="<?=base_url() ?>assets/images/shape/footer-regular-left.png" alt="shape">
        </div>
        <div class="footer__shape-solid-left wow slideInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
            <img class="sway_Y__animation" src="<?=base_url() ?>assets/images/shape/footer-solid-left.png" alt="shape">
        </div>
        <div class="footer__shape-solid-right wow slideInRight" data-wow-delay="00ms" data-wow-duration="1500ms">
            <img class="sway_Y__animation" src="<?=base_url() ?>assets/images/shape/footer-regular-right.png" alt="shape">
        </div>
        <div class="footer__shape-regular-right wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
            <img src="<?=base_url() ?>assets/images/shape/footer-solid-right.png" alt="shape">
        </div>
        <div class="footer__shadow-shape">
            <img src="<?=base_url() ?>assets/images/shape/footer-shadow-shape.png" alt="shodow">
        </div>
        <div class="container">
            <div class="footer__wrp pt-100 pb-100">
                <div class="footer__item item-big wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <a href="index.php" class="logo mb-30">
                        <img src="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" alt="image">
                    </a>
                    <p>For the things you rely on the most in your daily lives, we offer protection and assistance. Anytime. Anywhere.</p>
                    <div class="social-icon">
                        <a href="<?=$sitesetting[0]->facebook ?>"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="<?=$sitesetting[0]->twitter ?>"><i class="fa-brands fa-twitter"></i></a>
                        <a href="<?=$sitesetting[0]->instagram ?>"><i class="fa-brands fa-instagram"></i></a>
                        <a href="<?=$sitesetting[0]->youtube ?>"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
                <div class="footer__item item-sm wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <h3 class="footer-title">Quick Link</h3>
                    <ul>
                        <li><a href="index.php"><i class="fa-regular fa-angles-right me-1"></i> Home</a></li>
                        <li><a href="about.php"><i class="fa-regular fa-angles-right me-1"></i> About</a></li>
                        <!-- <li><a href=""><i class="fa-regular fa-angles-right me-1"></i> Our Products</a> -->
                        <li><a href="blog.php"><i class="fa-regular fa-angles-right me-1"></i> Our Blog</a>
                        <li><a href="contact.php"><i class="fa-regular fa-angles-right me-1"></i> Contact Us</a>
                        <li><a href="login.php"><i class="fa-regular fa-angles-right me-1"></i> Login</a>
                        </li>
                        <!-- <li><a href="login.php"><i class="fa-regular fa-angles-right me-1"></i> Login</a> -->
                        <!-- </li> -->
                        
                    </ul>
                </div>

                <div class="footer__item item-sm wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <h3 class="footer-title">Our Product</h3>
                    <ul>
                        <?php
                        $product = $this->db->get_where('product',array('status'=>1,))->result_object();
                        foreach($product as $data)
                            { ?>
                        <li><a href="<?=base_url($data->slug) ?>"><i class="fa-regular fa-angles-right me-1"></i> <?=$data->name ?></a></li>
                        <?php } ?>

                    </ul>
                </div>
                
                <div class="footer__item item-big wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <h3 class="footer-title">Contact Us</h3>
                    
                    <ul class="footer-contact">
                        <li>
                            <i class="fa-duotone fa-phone"></i>
                            <div class="info">
                                <h5>
                                    Phone Call:
                                </h5>
                                <p><?=$sitesetting[0]->mobile ?> <?=$sitesetting[0]->alt_mobile ?></p>
                            </div>
                        </li>
                        <li>
                            <i class="fa-regular fa-envelope"></i>
                            <div class="info">
                                <h5>
                                    Email:
                                </h5>
                                <p><?=$sitesetting[0]->email ?> <?=$sitesetting[0]->alt_email ?></p>
                            </div>
                        </li>
                        
                    </ul>
                    <p class="mt-20"><?=$sitesetting[0]->address ?></p>
                </div>
            </div>
        </div>
        <div class="footer__copyright">
            <div class="container">
                <div
                    class="d-flex gap-1 flex-wrap align-items-center justify-content-md-between justify-content-center">
                    <p class="wow fadeInDown" data-wow-delay="00ms" data-wow-duration="1500ms">&copy; All Copyright 2025
                        by <a href="#0">DIGII PRO PLUSE</a></p>
                    <ul class="d-flex align-items-center gap-4 wow fadeInDown" data-wow-delay="200ms"
                        data-wow-duration="1500ms">
                        <li><a href="<?=base_url() ?>term-and-condition">Terms & Condition</a></li>
                        <!-- <li><a href="#0">Privacy Policy</a></li> -->
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer area end here -->

    <!-- Back to top area start here -->
    <div class="scroll-up">
        <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Back to top area end here -->

    <!-- Jquery 3.7.0 Min Js -->
    <script src="<?=base_url() ?>assets/js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap min Js -->
    <script src="<?=base_url() ?>assets/js/bootstrap.min.js"></script>
    <!-- Mean menu Js -->
    <script src="<?=base_url() ?>assets/js/meanmenu.js"></script>
    <!-- Swiper bundle min Js -->
    <script src="<?=base_url() ?>assets/js/swiper-bundle.min.js"></script>
    <!-- Counterup min Js -->
    <script src="<?=base_url() ?>assets/js/jquery.counterup.min.js"></script>
    <!-- Wow min Js -->
    <script src="<?=base_url() ?>assets/js/wow.min.js"></script>
    <!-- Pace min Js -->
    <script src="<?=base_url() ?>assets/js/pace.min.js"></script>
    <!-- Magnific popup min Js -->
    <script src="<?=base_url() ?>assets/js/magnific-popup.min.js"></script>
    <!-- Nice select min Js -->
    <script src="<?=base_url() ?>assets/js/nice-select.min.js"></script>
    <!-- Isotope pkgd min Js -->
    <script src="<?=base_url() ?>assets/js/isotope.pkgd.min.js"></script>
    <!-- Waypoints Js -->
    <script src="<?=base_url() ?>assets/js/jquery.waypoints.js"></script>
    <!-- Script Js -->
    <script src="<?=base_url() ?>assets/js/script.js"></script>



 <!--  <script>
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
      "brandName":"<?=website_name ?>",
      "brandSubTitle":"Typically replies within a day",
      "brandImg":"<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>",
      "welcomeText":"Hi there!\nHow can I help you?",
      "messageText":"Hello, I have a question about {{page_link}}",
      "backgroundColor":"#0a5f54",
      "ctaText":"Start Chat",
      "borderRadius":"25",
      "autoShow":false,
      "phoneNumber":"+919996563866"
  }
};
    s.onload = function() {
        CreateWhatsappChatWidget(options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
</script> -->

<style>
    /* Base styling for toaster */
.toaster {
    padding: 10px 5px;
    border-radius: 5px;
    position: fixed;
    bottom: 10%;
    left: 50%;
    transform: translateX(-50%);
    font-family: Arial, sans-serif;
    z-index: 9999;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    font-size: 14px;
    display: flex;
    align-items: center;
    width: max-content;
    display: none;
}

/* Success toaster styling */
.toaster.success {
    background-color: #28a745; /* A more vibrant green */
    color: #fff;
    border-left: 5px solid #155724; /* Darker green left border */
    animation: slideIn 0.5s ease-out;
}

/* Error toaster styling */
.toaster.error {
    background-color: #dc3545; /* A more vibrant red */
    color: #fff;
    border-left: 5px solid #721c24; /* Darker red left border */
    animation: slideIn 0.5s ease-out;
}

/* Animation for sliding in */
@keyframes slideIn {
    0% {
        transform: translateX(-50%) translateY(50px);
        opacity: 0;
    }
    100% {
        transform: translateX(-50%) translateY(0);
        opacity: 1;
    }
}

/* Optional icon for success/error toasters */
.toaster.success::before {
    content: '✔'; /* Success icon */
    margin-right: 10px;
    font-weight: bold;
}

.toaster.error::before {
    content: '✖'; /* Error icon */
    margin-right: 10px;
    font-weight: bold;
}

</style>


<div class="toaster"></div>

<script>
    function toaster(message, type) 
       {
         var toaster = $('.toaster');
         toaster.removeClass('success error'); 
         toaster.html(message);
         toaster.addClass(type);
         toaster.fadeIn(500);
         setTimeout(function() {
           toaster.fadeOut(500);
         }, 3000);
       }
</script>





</body>


</html>