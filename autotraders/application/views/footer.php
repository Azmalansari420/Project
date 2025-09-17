<?php

$sitesetting = $this->crud->fetchdatabyid('1','site_setting');

?>
   <!-- start footer area -->
    <section class="footer-area section-padding">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-lg-6">
                    <div class="footer-widget">
                        <div class="footer-title">
                            <img src="<?php echo base_url(); ?>media/uploads/site_setting/<?php echo $sitesetting[0]->logo; ?>" style="height: 90px;" alt="" />
                        </div>
                        <p>Over 24 years experience and knowledge  wе’rе hеrе to рrоvіdе уоu wіth fіnаnсіаl ѕоlutіоnѕ fоr аll уоur lеndіng needs. Whether you are lооkіng fоr any kind of loan, оur lending tеаm wіll explain lеndіng орtіоnѕ to уоu іn a ѕtrаіghtfоrwаrd mаnnеr.</p>
                        <div class="mail">
                            <span style="background: white;padding: 10px;border-radius: 11px;"><a style="color:black;" href="<?php echo base_url('about'); ?>">Read More</a></span>
                        </div>
                    </div>
                </div>

               
                <div class="col-md-6 col-lg-6 ">
                    <div class="footer-widget pages-widget">
                        <div class="footer-title">
                            <h4>Quick Links</h4>
                        </div>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>">Home</a></li>
                            <li><a href="<?php echo base_url('about'); ?>">About</a></li>
                            <li><a href="<?php echo base_url('blog'); ?>">Blog</a></li>
                            <li><a href="<?php echo base_url('annauncment'); ?>">Announcement</a></li>
                            <li><a href="<?php echo base_url('contact'); ?>">Contact Us</a></li>
                            <li><a href="<?php echo base_url('login'); ?>">Login</a></li>
                        </ul>
                    </div>
                </div>

                <!--  <div class="col-md-4 col-lg-4">
                    <div class="footer-widget pages-widget">
                        <div class="footer-title">
                            <h4>Contact Us</h4>
                        </div>
                        <ul>
                            <li><a href="#">Address:- <?php echo $sitesetting[0]->address; ?></a></li>
                            <li><a href="tel:<?php echo $sitesetting[0]->mobile; ?>">Call Us:- <?php echo $sitesetting[0]->mobile; ?></a></li>
                            <li><a href="tel:<?php echo $sitesetting[0]->alt_mobile; ?>">Call Us:- <?php echo $sitesetting[0]->alt_mobile; ?></a></li>
                            <li><a href="mailto:<?php echo $sitesetting[0]->email; ?>">Email:- <?php echo $sitesetting[0]->email; ?></a></li>
                        </ul>
                    </div>
                </div>
 -->

              
            </div>
        </div>
    </section>
    <div class="copy-right-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-left">
                    <div class="copyright-text">
                        <p><i class="fa fa-copyright"></i> 2022 AUTOTRADERS. All Rights Reserved</p>
                    </div>
                </div>
                <div class="col-md-6 text-right">
                    <div class="footer-nave">
                        <a href="<?php echo $sitesetting[0]->twitter; ?>" target="_blank"><i class="fa fa-twitter-square"></i></a>
                        <a href="<?php echo $sitesetting[0]->facebook; ?>" target="_blank"><i class="fa fa-facebook-square"></i></a>
                        <a href="<?php echo $sitesetting[0]->youtube; ?>" target="_blank"><i class="fa fa-youtube-square"></i></a>
                        <a href="<?php echo $sitesetting[0]->instagram; ?>" target="_blank"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of footer area -->
    <!-- Optional JavaScript -->
    <script src="<?php echo base_url(); ?>asset/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url(); ?>../../../../cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/jquery.nice-select.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/menumaker.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/calculator.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/slider.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/active.js"></script>

    <script>

    window.onload = function() {
        fb_share.href ='http://www.facebook.com/share.php?u=' + encodeURIComponent(location.href); 
    }  
    </script>

 <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>

  
      <script id="rendered-js" >
        const counters = document.querySelectorAll(".counter");

        counters.forEach(counter => {
          counter.innerText = "0";
          const updateCounter = () => {
            const target = +counter.getAttribute("data-target");
            const count = +counter.innerText;
            const increment = target / 200;
            if (count < target) {
              counter.innerText = `${Math.ceil(count + increment)}`;
              setTimeout(updateCounter, 1);
            } else counter.innerText = target;
          };
          updateCounter();
        });
        //# sourceURL=pen.js
    </script>


</body>
</html>