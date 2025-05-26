<!DOCTYPE html>
<?php include('common_data.php');?>
<html>
<head><!-- Head Begins -->
<head lang="en">  <!-- Head Section Begins -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=4.0, minimum-scale=1.0, user-scalable=yes">
<meta name="language" content="english" />
<meta name="robots" content="all,index,follow" />
<meta name="distribution" content="global" />
<meta name="instagrambot" content="all" />
<meta name='copyright' content='<?php echo $site_name; ?>' />
<meta name='publisher' content='<?php echo $site_name; ?>' />
<meta http-equiv='Content-Type' content='<?php echo $meta_description; ?>' />
<link rel='profile' href='http://gmpg.org/xfn/11' />
<link rel='canonical' href='<?php echo current_url(true); ?>' />
<?php if($favicon != null){echo "<link rel='shortcut icon' href='$favicon' type='image/x-icon'/>";} ?>
<title><?php echo $page_name; ?></title>
<meta name="title" content="<?php echo $page_name; ?>" />
<meta name="keywords" content="<?php echo $meta_keywords; ?>" />
<meta name="description" content="<?php echo $meta_description; ?>" />
<!--  Theme Styling Sheets -->
<style><?=$setting4->setting9;?></style>

     <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="<?=base_url();?>/public/assets/css/bootstrap.min.css">
      <!-- Fontawesome -->
      <link rel="stylesheet" href="<?=base_url();?>/public/assets/css/fontawesome.css">
      <!-- Flaticon -->
      <link rel="stylesheet" href="<?=base_url();?>/public/assets/css/flaticon.css">
      <!-- optico Icons -->
      <link rel="stylesheet" href="<?=base_url();?>/public/assets/css/pbminfotech-base-icons.css">
      <!-- Themify Icons -->
      <link rel="stylesheet" href="<?=base_url();?>/public/assets/css/themify-icons.css">
      <!-- Slick -->
      <link rel="stylesheet" href="<?=base_url();?>/public/assets/css/swiper.min.css">
      <!-- Magnific -->
      <link rel="stylesheet" href="<?=base_url();?>/public/assets/css/magnific-popup.css">
      <!-- AOS -->
      <link rel="stylesheet" href="<?=base_url();?>/public/assets/css/aos.css">
      <!-- Shortcode CSS -->
      <link rel="stylesheet" href="<?=base_url();?>/public/assets/css/shortcode.css">
      <!-- Base CSS -->
      <link rel="stylesheet" href="<?=base_url();?>/public/assets/css/base.css">
      <!-- root CSS -->
      <link rel="stylesheet" href="<?=base_url();?>/public/assets/css/demo-1.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="<?=base_url();?>/public/assets/css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="<?=base_url();?>/public/assets/css/responsive.css">
      <!-- REVOLUTION STYLE SHEETS -->
      <link rel="stylesheet" type="text/css" href="<?=base_url();?>/public/assets/revolution/rs6.css">

   </head>
   <body>
      <!-- page wrapper -->
      <div class="page-wrapper">
         <!-- Header Main Area -->
         <header class="site-header header-style-1">
            <div class="header-wrapper">
               <div class="pre-header">
                  <div class="container-fluid">
                     <div class="d-md-flex justify-content-between align-items-center">
                        <div class="pbmit-pre-header-left">
                           <!--<ul class="pbmit-contact-info">-->
                           <!--   <li>-->
                           <!--      <i class="pbmit-base-icon-letter"></i>-->
                           <!--      <a href="#">mehtaashish745@gmail.com</span></a> -->
                           <!--   </li>-->
                           <!--   <li>-->
                           <!--      <i class=" pbmit-base-icon-placeholder-1"></i>-->
                           <!--      <a href="#">+91-7906042214</span></a>-->
                           <!--   </li>-->
                           <!--</ul>-->
                        </div>
                        <div class="pbmit-pre-header-right d-flex">
                           <ul class="pbmit-social-links">
                              <li class="pbmit-social-li pbmit-social-facebook ">
                                 <a href=<?=$facebook_url;?>#" target="_blank"><span>
                                    <i class="pbmit-base-icon-facebook-squared"></i></span>
                                 </a>
                              </li>
                              <li class="pbmit-social-li pbmit-social-twitter ">
                                 <a href="<?=$twitter_url;?>" target="_blank"><span>
                                    <i class="pbmit-base-icon-twitter"></i></span>
                                 </a>
                              </li>
                              <li class="pbmit-social-li pbmit-social-instagram ">
                                 <a href="<?=$instagram_url;?>" target="_blank"><span>
                                    <i class="pbmit-base-icon-instagram"></i></span>
                                 </a>
                              </li>
                              <li class="pbmit-social-li pbmit-social-youtube ">
                                 <a href="<?=$youtube_url;?>" target="_blank"><span>
                                    <i class="pbmit-base-icon-youtube-play"></i></span>
                                 </a>
                              </li>
                           </ul>	
                           <!-- <div class="pbmit-header-search-btn">
                              <a href="#"><i class="pbmit-base-icon-search"></i></a>
                           </div>					 -->
                        </div>
                     </div>
                  </div>
               </div>
               <div class="site-header-menu">
                  <div class="container-fluid">
                     <div class="row g-0">
                        <div class="col-md-12">
                           <div class="d-flex align-items-center">
                              <div class="site-branding">
                                 <a href="<?=base_url();?>">
                                    <img class="logo-img" alt="" src="<?=$site_logo;?>">
                                    <img class="sticky-logo" alt="" src="<?=$site_logo;?>">
                                 </a>
                              </div>
                              <div class="site-navigation">
                                 <nav class="main-menu navbar-expand-xl navbar-light">
                                    <div class="navbar-header">
                                       <!-- Toggle Button --> 
                                       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                          <i class="pbmit-base-icon-menu-1"></i>
                                       </button>
                                    </div>
                                    <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                       <ul class="navigation clearfix">
                                          <li class="active"><a href="<?=base_url();?>">Home</a></li>
                                        
                                          
<?php
   $cat1=getdatalike_order1('tbl_pages',array('status'=>'1'),'sort_order','asc','page_filter','21');  
  if($cat1) { foreach($cat1 as $values) {
  $subsingle=getdatalike_ordersingle('tbl_pages',array('status'=>'1','parent_page'=>$values->id),'sort_order','asc','page_filter','21');
   $sub=getdatalike_order1('tbl_pages',array('status'=>'1','parent_page'=>$values->id),'sort_order','asc','page_filter','21');
   $new_description1= str_replace(array_in(),array_out(),$values->description); 
						$new_attachment_link= str_replace('#base_url#',base_url(),$values->attachment_link);
   if($new_attachment_link!=''){ $url= $new_attachment_link;} 
				  else if($values->udf1!='') { $url= base_url($values->slug); }
				  else if($values->page_type==0){ $url= base_link().'/page/'.$values->slug;}
   
  if($values->parent_page==0) {
  if($subsingle) { 
  ?>
										  <li class="dropdown">
                                             <a href="javascript::"><?php if($values->menu_name=='') { echo $values->title; }  else { echo $values->menu_name; } ?></a>
                                             <ul>
                                               <?php if($sub) { foreach($sub as $svalues) { 
													$new_attachment_link1= str_replace('#base_url#',base_url(),$svalues->attachment_link);
												 if($new_attachment_link1!=''){ $url1= $new_attachment_link1;} 
				  else if($svalues->udf1!='') { $url1= base_url($svalues->slug); }
				  else if($svalues->page_type==0){ $url1= base_link().'/page/'.$svalues->slug;}
												
													  ?>
											<li><a href="<?=$url1;?>"><?php if($svalues->menu_name=='') { echo $svalues->title; }  else { echo $svalues->menu_name; } ?></a></li>
                                            <?php } } ?>
                                             </ul>
                                          </li>
										  
										   <?php } else { ?>
 <li><a href='<?=$url;?>'> <?php if($values->menu_name=='') { echo $values->title; }  else { echo $values->menu_name; } ?></a></li>	
	<?php } ?>
  <?php } } } ?>  
										  
										  
                                         <?php
										 $session=session();if($session->get('uid')){
                                         $userdata=getdatasingle('tbl_user',array('id'=>$session->get('uid')));
										 ?>  
                                           <li class="fgrwe"><a href="<?=base_url('user-dashboard');?>">Hi <?=$userdata->name;?></a></li>
										   <?php } else { ?>
										   <li class="fgrwe"><a href="<?=base_url('login');?>">Login / Sign Up</a></li>
										   <?php } ?>
										   
										   
                                       </ul>
                                    </div>
                                 </nav>
                              </div>
                              <div class="pbmit-right-box ms-auto">
                                 <div class="pbmit-header-button">
                                    <a href="tel:<?=$site_phone;?>">
                                       <span class="pbmit-header-button-text-1">Have any Questions?</span>			
                                       <span class="pbmit-header-button-text-2"><?=$site_phone;?></span>		
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- START Slider Demo 1 REVOLUTION SLIDER 6.5.25 -->
            <p class="rs-p-wp-fix"></p>
            
            <!-- END REVOLUTION SLIDER -->
         </header>
         <!-- Header Main Area End Here -->