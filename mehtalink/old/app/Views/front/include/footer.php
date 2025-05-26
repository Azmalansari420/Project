<?php include('common_data.php');
helper('text');?>
<!-- Footer -->
         <footer class="footer site-footer pbmit-bg-color-light">
            <div class="pbmit-footer-widget-area-top pbmit-bg-color-global">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-md-12 col-lg-8">
                        <h3 class="pbmit-footer-big-title">Call adviser for HR outsourcing service business</h3>
                     </div>
                     <div class="col-md-12 col-lg-4">
                        <p class="footer-button text-end m-0">
                           <a href="#" class="pbmit-btn pbmit-btn-white-outline">BOOK A CONSALTANT</a>
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="pbmit-footer-widget-area">
               <div class="container">
                  <div class="row">
                     <div class="col-md-6 col-lg-4">
                        <div class="pbmit-first-widget pbmit-widget">
                           <p class="footer-logo">
                              <img src="<?=$site_logo;?>" class="img-fluid w-auto" alt=""></p>
                           <p class="text"><?=word_limiter(strip_tags($home_about),50);?></p>
                           <div class="footer-support">
                              <h5 class="footer-support-inner">
                                 <span>Talk To Our Support </span> <?=$site_phone;?>
                              </h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4 fgr">
                        <div class="pbmit-two-widget pbmit-widget">
                           <h2 class="widget-title">Quick Links</h2>
                           <div class="menu-services-menu-container"> 
                              <ul id="menu-services-menu" class="menu"> 
                                 <li id="menu-item-1" class="menu-item"> 
                                    <a href="<?=base_url();?>">Home</a> 
                                 </li>
                                 
								  <?php if($cat) { foreach($cat as $values) {
                  $arr=explode(",",$values->page_filter);
				  if(in_array(22,$arr)) { 
				  
				  $new_attachment_link= str_replace('#base_url#',base_url(),$values->attachment_link);
				  
				  if($values->udf1!=''){  $url=base_url($values->slug);} else if($new_attachment_link!=''){  $url=$new_attachment_link; } else if($values->page_type==0){  $url=base_link().'/page/'.$values->slug;}
				  ?>
        <li class="menu-item">
                                    <a href="<?=$url;?>"><?php if($values->menu_name=='') { echo $values->title; }
		  else { echo $values->menu_name; } ?></a>
                                </li>
		<?php } } } ?>
								 
								
                              </ul> 
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <div class="pbmit-four-widget pbmit-widget">
                           <h2 class="widget-title">NEWSLETTER</h2>
                           <p>Sign up today for hints, tips and the latest job news</p>
                           <div class="pbmit-footer-newslatter mb-2">
                              <input type="email" name="EMAIL" placeholder="Your email address" required="">	
                              <button type="submit" value="Sign up">
                                 <i class="pbmit-base-icon-paper-plane"></i>
                              </button> 
                           </div>
                           <!-- <h2 class="widget-title mt-4">FOLLOW US ON</h2> -->
                           <ul class="pbmit-social-links">
                              <li class="pbmit-social-li pbmit-social-facebook ">
                                 <a href="<?=$facebook_url;?>" target="_blank" rel="noopener">
                                    <span><i class="pbmit-base-icon-facebook-squared"></i></span>
                                 </a>
                              </li>
                              <li class="pbmit-social-li pbmit-social-twitter ">
                                 <a href="<?=$youtube_url;?>" target="_blank" rel="noopener">
                                    <span><i class="pbmit-base-icon-youtube-play"></i></span>
                                 </a>
                              </li>
                              <li class="pbmit-social-li pbmit-social-twitter ">
                                 <a href="<?=$twitter_url;?>" target="_blank" rel="noopener">
                                    <span><i class="pbmit-base-icon-twitter"></i></span>
                                 </a>
                              </li>
                              <li class="pbmit-social-li pbmit-social-linkedin ">
                                 <a href="<?=$linkedIn_url;?>" target="_blank" rel="noopener">
                                    <span><i class="pbmit-base-icon-linkedin-squared"></i></span>
                                 </a>
                              </li>
                              <li class="pbmit-social-li pbmit-social-instagram ">
                                 <a href="<?=$instagram_url;?>" target="_blank" rel="noopener">
                                    <span><i class="pbmit-base-icon-instagram"></i></span>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="pbmit-footer-widget-area-bottom">
               <div class="container">
                  <div class="pbmit-footer-widget-area-bottom-inner bg-white">
                     <div class="row">
                        <div class="col-md-6">
                           <p>Copyright © <?=date('Y');?> <span> Mehta Link</span>  All Rights Reserved.</p>
                        </div>
                        <div class="col-md-6">
                           <ul class="pbmit-footer-menu text-end"> 
                              <?php if($cat) { foreach($cat as $values) {
                  $arr=explode(",",$values->page_filter);
				  if(in_array(23,$arr)) { 
				  
				  $new_attachment_link= str_replace('#base_url#',base_url(),$values->attachment_link);
				  
				  if($values->udf1!=''){  $url=base_url($values->slug);} else if($new_attachment_link!=''){  $url=$new_attachment_link; } else if($values->page_type==0){  $url=base_link().'/page/'.$values->slug;}
				  ?>
        <li class="menu-item">
                                    <a href="<?=$url;?>"><?php if($values->menu_name=='') { echo $values->title; }
		  else { echo $values->menu_name; } ?></a>
                                </li>
		<?php } } } ?>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <a href="#" class="scroll-to-top show">
                     <i class="pbmit-base-icon-arrow-right"></i>
                  </a>
               </div>
            </div>
         </footer>
         <!-- Footer End -->
   
      </div>
      <!-- page wrapper End -->

      <!-- Search Box Start Here -->
      <div class="pbmit-search-overlay">
         <div class="pbmit-icon-close"></div>
         <div class="pbmit-search-outer"> 
            <form class="pbmit-site-searchform">
               <input type="search" class="form-control field searchform-s" name="s" placeholder="Type Word Then Press Enter">
               <button type="submit"><i class="pbmit-base-icon-search-1"></i></button>
            </form>
         </div>
      </div>
      <!-- Search Box End Here -->

      <!-- JS
         ============================================ -->
      <!-- jQuery JS -->
      <script src="<?=base_url();?>/public/assets/js/jquery.min.js"></script>
      <!-- Popper JS -->
      <script src="<?=base_url();?>/public/assets/js/popper.min.js"></script>
      <!-- Bootstrap JS -->
      <script src="<?=base_url();?>/public/assets/js/bootstrap.min.js"></script>
      <!-- jquery Waypoints JS -->
      <script src="<?=base_url();?>/public/assets/js/jquery.waypoints.min.js"></script>
      <!-- jquery Appear JS -->
      <script src="<?=base_url();?>/public/assets/js/jquery.appear.js"></script>
      <!-- Numinate JS -->
      <script src="<?=base_url();?>/public/assets/js/numinate.min.js"></script>
      <!-- Slick JS -->
      <script src="<?=base_url();?>/public/assets/js/swiper.min.js"></script>
      <!-- Magnific JS -->
      <script src="<?=base_url();?>/public/assets/js/jquery.magnific-popup.min.js"></script>
      <!-- Circle Progress JS -->
      <script src="<?=base_url();?>/public/assets/js/circle-progress.js"></script> 
      <!-- countdown JS -->
      <script src="<?=base_url();?>/public/assets/js/jquery.countdown.min.js"></script> 
      <!-- AOS -->
      <script src="<?=base_url();?>/public/assets/js/aos.js"></script>
      <!-- Scripts JS -->
      <script src="<?=base_url();?>/public/assets/js/scripts.js"></script>
      <!-- Revolution JS -->
      <script src="<?=base_url();?>/public/assets/revolution/rslider.js"></script>
      <script src="<?=base_url();?>/public/assets/revolution/rbtools.min.js"></script>
      <script src="<?=base_url();?>/public/assets/revolution/rs6.min.js"></script>

   <script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'917eca54088254e0',t:'MTc0MDU2MDkwNC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script>
   
    

<?php

 if($site_phone!=null){echo "<a href='tel:$site_phone' style='position:fixed;bottom:70px;left:10px;z-index:9999;'><img src='".base_link()."/public/call.gif' alt='call us' title='tap to call us' style='height:50px;width:50px;' /></a>";} ?>
<?php if($whatsapp!=null){echo "<a href='$whatsapp_link' style='position:fixed;bottom:10px;left:10px;z-index:9999;'><img src='".base_link()."/public/whatsapp.gif' alt='whastapp' title='tap to chat with us on whastapp' style='height:50px;width:50px;' /></a>";}
$setting_count=number_format($setting3->setting_count)+1;
 updatequery('tbl_settings',array('id'=>3),array('setting_count'=>$setting_count)); ?>
</body>
</html>