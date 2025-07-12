<?php include("header.php"); ?>
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
<div class="page-banner bg-2">
   <div class="d-table">
      <div class="d-table-cell">
         <div class="container">
            <div class="page-content">
               <h2>FAQ</h2>
               <ul>
                  <li><a href="index.php">Home</a></li>
                  <li>FAQ</li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="faq-area ptb-100">
   <div class="container">
      <div class="section-title">
         <span>FAQ</span>
         <h2>Frequently Asked Questions</h2>
      </div>
      <div class="faq-contant">
         <div class="row align-items-center">
            <div class="col-lg-6">
               <ul class="accordion">
               	<?php
               	$faq = $this->crud->selectDataByMultipleWhere('faqs',array('status'=>1,));
               	foreach($faq as $data)
               		{ ?>
                  <li>
                     <h3 class="title"><?=$data->question ?></h3>
                     <div class="accordion-content">
                        <p><?=$data->answere ?></p>
                     </div>
                  </li>
                  <?php } ?>
                  
               </ul>
            </div>
            <div class="col-lg-6">
               <div class="faq-image">
                  <img src="<?=base_url() ?>assets/img/about/about1.jpg" alt="image">
               </div>
            </div>
         </div>
      </div>
      <div class="faq-form">
         <form method="post" action="<?=base_url('welcome/enquiry_form') ?>">
            <div class="section-title">
               <span>FAQ,s</span>
               <h2>Frequently Asked Questions</h2>
            </div>
            <div class="row">
               <div class="col-lg-6">
                  <div class="form-group">
                     <label>Name</label>
                     <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="form-group">
                     <label>Email address</label>
                     <input type="email" class="form-control" name="email" placeholder="Your Email">
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="form-group">
                     <label>Phone</label>
                     <input type="text" class="form-control" name="mobile" placeholder="Your Phone">
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="form-group">
                     <label>Subject</label>
                     <input type="text" class="form-control" name="subject" placeholder="Your Subject">
                  </div>
               </div>
            </div>
            <div class="form-group">
               <label>Message</label>
               <textarea class="form-control" name="message" rows="3" placeholder="Message"></textarea>
            </div>
            <div class="text-center">
               <button type="submit" name="submit" class="faq-form-btn">Send Message</button>
            </div>
         </form>
      </div>
   </div>
</div>
<?php include("footer.php"); ?>