<style>
   .footer-wrapper.footer-default {
    padding-top: 80px;
    background-color: #00522c;
}

.footer-logo-wrap {
    background: white;
}

</style>

<footer class="footer-wrapper footer-default" data-bg-src="<?=base_url() ?>assets/dimg/bg/footer_bg_1.jpg">
         <div class="shape-mockup footer-shape-1 jump-reverse d-none d-xxl-block"><img src="<?=base_url() ?>assets/img/icon/footer-shape-1.png" alt="shape"></div>
         <div class="shape-mockup footer-shape-2 jump-reverse"><img src="<?=base_url() ?>assets/img/icon/footer-shape-2.png" alt="shape"></div>
         <div class="footer-bottom-shape" data-mask-src="<?=base_url() ?>assets/img/bg/footer-shape-bottom.png"></div>
         <div class="footer-top">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="footer-logo-wrap">
                        <div class="footer-logo"><a href="<?=base_url() ?>"><img src="<?=base_url() ?>assets/logo.png" alt="Green India Team" style="width:150px"></a></div>
                        <div class="footer-top-social">
                           <div class="th-social d-flex gap-1 flex-wrap"><a href="https://facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a> <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a> <a href="https://linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a> <a href="https://instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="widget-area">
            <div class="container">
               <div class="row justify-content-between">
                  
                  <div class="col-md-6 col-xl-auto">
                     <div class="widget newsletter-widget footer-widget">
                        <p class="footer-text">Compomney details</p>
                        
                     </div>
                  </div>



                  <div class="col-md-6 col-xl-auto">
                     <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">Quick Links</h3>
                        <div class="menu-all-pages-container">
                           <ul class="menu">
                              <li><a href="<?=base_url() ?>">Home</a></li>
                              <li><a href="<?=base_url() ?>#about-sec">About Us</a></li>
                              <li><a href="<?=base_url() ?>#service-sec">Service</a></li>
                              <li><a href="<?=base_url() ?>#testi-sec">Review</a></li>
                              <li><a href="<?=base_url() ?>#contact-sec">Contact Us</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-xl-auto">
                     <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">Our Services</h3>
                        <div class="menu-all-pages-container">
                           <ul class="menu">
                              <li><a href="<?=base_url() ?>#Electrician-Services">Electrician Services</a></li>
                              <li><a href="<?=base_url() ?>#TV-Repair">TV Repair & Installation</a></li>
                              <li><a href="<?=base_url() ?>#AC-Repair">AC Repair & Services</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  
                  <div class="col-md-6 col-xl-auto">
                     <div class="widget footer-widget">
                        <h3 class="widget_title">Contact Us</h3>
                        <div class="th-widget-contact">
                           <div class="info-box">
                              <div class="info-box_icon"><i class="fas fa-location-dot"></i></div>
                              <div class="info-contnt">
                                 <h4 class="footer-info-title">Address</h4>
                                 <p class="info-box_text">First floor, Lotus building, kh.no.365, Sultanpur, New Delhi, Delhi 110030</p>
                              </div>
                           </div>
                           <div class="info-box">
                              <div class="info-box_icon"><i class="fas fa-phone"></i></div>
                              <div class="info-contnt">
                                 <h4 class="footer-info-title">Call Us</h4>
                                 <p class="info-box_text"><a href="tel:+918090400401" class="info-box_link">+918090400401</a></p>
                              </div>
                           </div>
                           <div class="info-box">
                              <div class="info-box_icon"><i class="fas fa-envelope"></i></div>
                              <div class="info-contnt">
                                 <h4 class="footer-info-title">Email Us</h4>
                                 <p class="info-box_text"><a href="mailto:greenindiateam2022@gmail.com" class="info-box_link">greenindiateam2022@gmail.com</a></p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

               </div>
            </div>
         </div>
         <div class="copyright-wrap">
            <div class="container">
               <div class="row gy-2 align-items-center">
                  <div class="col-md-12">
                     <p class="copyright-text text-center">Copyright <i class="fal fa-copyright"></i> 2025 <a href="<?=base_url() ?>">Green India Team</a>. All Rights Reserved.</p>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <div class="scroll-top">
         <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
         </svg>
      </div>






<style>
   /* Modal overlay */
.modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.5);
    justify-content: center;
    align-items: center;
    z-index: 1000;
}

/* Modal content */
.modal-content {
    background: #fff;
    border-radius: 15px;
    max-width: 400px;
    width: 90%;
    padding: 30px 20px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.2);
    position: relative;
}

/* Close button */
.close-btn {
    position: absolute;
    top: 15px;
    right: 20px;
    font-size: 22px;
    background: none;
    border: none;
    cursor: pointer;
}

/* Heading */
.modal-content h2 {
    font-size: 28px;
    margin-bottom: 25px;
    font-weight: bold;
    color: #222;
}

/* Form fields */
/*.input-size {
    width: 100% !important;
    padding: 14px 20px;
    border: 1px solid #ddd;
    border-radius: 50px;
    margin-bottom: 20px;
    font-size: 16px;
    outline: none;
    transition: border-color 0.3s ease;
}*/

.input-size:focus {
    border-color: #28a745;
}

/* Submit button */
/*.th-btn.star-btn {
    width: 100%;
    padding: 15px 20px;
    background-color: #28a745;
    border: none;
    border-radius: 50px;
    font-size: 16px;
    font-weight: bold;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s ease;
}*/

.th-btn.star-btn:hover {
    background-color: #218838;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .modal-content {
        padding: 20px 15px;
    }
    .modal-content h2 {
        font-size: 24px;
    }
}

</style>







<!-- Service Booking Modal -->
<div class="modal" id="serviceModal" style="display: none; align-items: center; justify-content: center;">
    <div class="modal-content" style="padding: 20px; max-width: 400px; background: #fff; border-radius: 8px; position: relative;">
        <button class="close-btn" onclick="closeModal()" style="position: absolute; top: 10px; right: 10px; font-size: 20px; background: none; border: none; cursor: pointer;">&times;</button>
        <h2 style="margin-bottom: 20px;">Book Your Service</h2>
        <form action="<?=base_url('welcome/enquiry_form') ?>" method="post">
            <input type="text" name="name" placeholder="Name" class="input-size" required style="width:100%!important;"><br>
            <input type="text" name="mobile" placeholder="Mobile No." class="input-size" required style="width:100%!important;"><br>
            <select name="service" class="input-size" required style="width:100%!important;">
                <option value="" disabled="disabled" selected="selected" hidden>Select Serivce</option>
                <option value="Electrician">Electrician</option>
                <option value="TV Repair & Installation">TV Repair & Installation</option>
                <option value="AC Repair & Services">AC Repair & Services</option>
            </select>
            <input style="width:100%!important;" type="text" name="location" placeholder="Location/Pincode" class="input-size" required><br>
            <button type="submit" name="submit" class="th-btn star-btn">Submit Message</button>
        </form>
    </div>
</div>




      <script src="<?=base_url() ?>assets/js/vendor/jquery-3.7.1.min.js"></script>
      <script src="<?=base_url() ?>assets/js/swiper-bundle.min.js"></script>
      <script src="<?=base_url() ?>assets/js/bootstrap.min.js"></script>
      <script src="<?=base_url() ?>assets/js/jquery.magnific-popup.min.js"></script>
      <script src="<?=base_url() ?>assets/js/jquery.counterup.min.js"></script>
      <script src="<?=base_url() ?>assets/js/circle-progress.js"></script>
      <script src="<?=base_url() ?>assets/js/jquery.datetimepicker.min.js"></script>
      <script src="<?=base_url() ?>assets/js/jquery-ui.min.js"></script>
      <script src="<?=base_url() ?>assets/js/tilt.jquery.min.js"></script>
      <script src="<?=base_url() ?>assets/js/imagesloaded.pkgd.min.js"></script>
      <script src="<?=base_url() ?>assets/js/isotope.pkgd.min.js"></script>
      <script src="<?=base_url() ?>assets/js/main.js"></script>




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
      "ctaText":"",
      "borderRadius":"25",
      "marginLeft":"50",
      "marginBottom":"50",
      "marginRight":"50",
      "position":"left"
  },
  "brandSetting":{
      "brandName":"Green India Team",
      "brandSubTitle":"Typically replies within a day",
      "brandImg":"<?=base_url() ?>assets/logo.png",
      "welcomeText":"Hi there!\nHow can I help you?",
      "messageText":"Hello, I have a question about {{page_link}}",
      "backgroundColor":"#0a5f54",
      "ctaText":"Start Chat",
      "borderRadius":"25",
      "autoShow":false,
      "phoneNumber":"+918090400401"
  }
};
    s.onload = function() {
        CreateWhatsappChatWidget(options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
</script>














<script>


  












    function openModal() {
        document.getElementById('serviceModal').style.display = 'flex';
    }
    function closeModal() {
        document.getElementById('serviceModal').style.display = 'none';
    }
    window.onclick = function(event) {
        const modal = document.getElementById('serviceModal');
        if (event.target == modal) {
            closeModal();
        }
    }
</script>


   </body>
</html>