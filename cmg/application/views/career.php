<?php
$sitesetting = $this->crud->fetchdatabyid('1','site_setting');
 include('header.php'); ?>

    <main class="main">
      <section class="section">
        <div class="container">
          <div class="box-pageheader-1 text-center" style="background: url(https://47billion.com/wp-content/uploads/2020/12/Logistic-banner.png) no-repeat top center;padding: 179px 0px;"><span class="btn btn-tag wow animate__animated animate__fadeIn" style="background: #fec20100;"><!-- Who We Are --></span>
            <h2 class="color-brand-1 mt-15 mb-10 wow animate__animated animate__fadeIn"><!-- About Us --></h2>
          </div>
        </div>
      </section>
      <!-- <section class="section">
        <div class="container">
          <div class="box-pageheader-1 text-center"><span class="btn btn-tag wow animate__animated animate__fadeIn"></span>
            <h2 class="color-brand-1 mt-15 mb-10 wow animate__animated animate__fadeIn">Contact Us</h2>
          </div>
        </div>
      </section> -->

      <div class="mt-20"></div>
      
      <section class="section">
        <div class="container position-relative">
          <div class="box-cover-contactform">
            <div class="row align-items-center">
              <div class="col-xl-12 col-lg-12">
                <div class="box-contactform-left">
                  <h3 class="color-brand-2 mb-15 wow animate__animated animate__fadeIn">if you want to apply for a job send us your detail on our mail?</h3>
                  <!-- <p class="font-md color-grey-900 mb-50 wow animate__animated animate__fadeIn">Can’t find the answer you are looking for? Please chat to our friendly team.</p> -->

                  <form method="post" action="<?=base_url('welcome/career_form') ?>">
                    <div class="row wow animate__animated animate__fadeIn">
                      <div class="col-md-6">
                        <div class="form-group">
                          <input class="form-control" type="text" placeholder="Your name *" name="name">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input class="form-control" type="text" placeholder="Your email *" name="email">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input class="form-control" type="text" placeholder="Your phone number" name="mobile">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input class="form-control" type="text" placeholder="Address" name="address">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <textarea class="form-control" name="message" placeholder="Message / Note" rows="8"></textarea>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <input class="btn btn-brand-1-big" type="submit" name="submit" value="Submit Now">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
             
            </div>
          </div>
        </div>
      </section>
      
      <div class="mt-20"></div>
      
    </main>
   <?php include('footer.php'); ?>
