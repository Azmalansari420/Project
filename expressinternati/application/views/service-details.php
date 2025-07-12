<?php include('header.php'); ?>
      <div class="search-overlay">
         <div class="d-table">
            <div class="d-table-cell">
               <div class="search-overlay-layer"></div>
               <div class="search-overlay-layer"></div>
               <div class="search-overlay-layer"></div>
               <div class="search-overlay-close">
                  <span class="search-overlay-close-line"></span>
                  <span class="search-overlay-close-line"></span>
               </div>
               <div class="search-overlay-form">
                  <form>
                     <input type="text" class="input-search" placeholder="Search here...">
                     <button type="submit"><i class="bx bx-search"></i></button>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <div class="page-banner bg-1">
         <div class="d-table">
            <div class="d-table-cell">
               <div class="container">
                  <div class="page-content">
                     <h2><?=$EDITDATA[0]->name ?></h2>
                     <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><?=$EDITDATA[0]->name ?></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="single-services-area ptb-100">
         <div class="container">
            <div class="row">
               <div class="col-lg-8">
                  <div class="service-details-text">
                     <div class="service-image">
                        <img src="<?=base_url() ?>media/uploads/services/<?=$EDITDATA[0]->image ?>" alt="image">
                     </div>
                     <?=$EDITDATA[0]->content ?>
                  </div>
               </div>

               <div class="col-lg-4">
                  <div class="contact-form" style="    padding: 10px;">
                     <form id="contactForm1" action="<?=base_url('welcome/enquiry_form') ?>" method="post">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group">
                                 <input type="text" name="name" class="form-control" id="name" required data-error="Please enter your name" placeholder="Your name">
                                 <div class="help-block with-errors"></div>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                 <input type="email" name="email" class="form-control" id="email" required data-error="Please enter your email" placeholder="Your email address">
                                 <div class="help-block with-errors"></div>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                 <input type="text" name="mobile" class="form-control" id="phone_number" required data-error="Please enter your phone number" placeholder="Your phone number">
                                 <div class="help-block with-errors"></div>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                 <input type="text" name="subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Your Subject" value="<?=$EDITDATA[0]->name ?>">
                                 <div class="help-block with-errors"></div>
                              </div>
                           </div>
                           
                           <div class="col-lg-12 col-md-12">
                              <div class="form-group">
                                 <textarea name="message" id="message" class="form-control" cols="30" rows="6" required data-error="Please enter your message" placeholder="Write your message..."></textarea>
                                 <div class="help-block with-errors"></div>
                              </div>
                           </div>
                           <div class="col-lg-12 col-md-12 text-center">
                              <button type="submit" name="submit" class="default-btn-one">Send Message</button>
                              <div id="msgSubmit" class="h3 text-center hidden"></div>
                              <div class="clearfix"></div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
     

<?php include('footer.php'); ?>
