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
              <div class="col-xl-8 col-lg-7">
                <div class="box-contactform-left">
                  <h3 class="color-brand-2 mb-15 wow animate__animated animate__fadeIn">Please Share Your Query With Us?</h3>
                  <!-- <p class="font-md color-grey-900 mb-50 wow animate__animated animate__fadeIn">Can’t find the answer you are looking for? Please chat to our friendly team.</p> -->

                  <form method="post" action="<?=base_url('welcome/enquiry_form') ?>">
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
                          <input class="form-control" type="text" placeholder="Subject" name="subject">
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
              <div class="col-xl-4 col-lg-5 position-relative">
                <div class="box-contactform-right">
                  <h5 class="color-brand-2 mb-35 wow animate__animated animate__fadeIn">Headquarters</h5>
                  <div class="map-info"><img class="mb-25 wow animate__animated animate__fadeIn" src="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" alt="transp">
                    <p class="color-grey-700 mb-25 wow animate__animated animate__fadeIn"><?=$sitesetting[0]->address ?></p>
                    <p class="color-grey-700 mb-10 wow animate__animated animate__fadeIn">
                      <svg class="icon-16 mr-10 color-brand-1" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"></path>
                      </svg>Phone: <?=$sitesetting[0]->mobile ?>, <?=$sitesetting[0]->alt_mobile ?>
                    </p>
                    <p class="color-grey-700 mb-30 wow animate__animated animate__fadeIn">
                      <svg class="icon-16 mr-10 color-brand-1" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"></path>
                      </svg>Email: <?=$sitesetting[0]->email ?>
                    </p>
                    <!-- <div class="line-border mb-25"></div>
                    <p class="color-grey-700 font-md-bold wow animate__animated animate__fadeIn">Hours: 8:00 - 17:00, Mon - Sat</p> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="section d-block">
        <div class="box-map-contact wow animate__animated animate__fadeIn">
          <?=$sitesetting[0]->map ?>
        </div>
      </div>
     
      <div class="mt-20"></div>
      
    </main>
   <?php include('footer.php'); ?>
