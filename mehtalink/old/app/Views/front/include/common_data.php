<?php 
$setting2=getdatasingle('tbl_settings',array('id'=>'2'));
$setting3=getdatasingle('tbl_settings',array('id'=>'3'));
$setting4=getdatasingle('tbl_settings',array('id'=>'4'));
$site_name=$setting3->setting1;
$count=$setting3->setting_count;
$page_name=$page_title;
if($page_name==null){$page_name=$setting3->setting1;}
if($setting3->setting6==null){$favicon="";} else {$favicon=base_link().'/uploads/'.$setting3->setting6;}
if($meta_tags==''){ $meta_keywords=$setting3->setting2;} else {$meta_keywords=$meta_tags;}
if($meta_tags==''){ $meta_description=$setting3->setting3;} else {$meta_description=$meta_content;}
$site_logo=base_link().'/uploads/'.$setting3->setting5;
$site_address=$setting3->setting7;
$site_email=$setting3->setting8;
$site_email2=$setting3->setting9;
$site_phone=$setting3->setting10;
$site_phone2=$setting3->setting11;
$site_whatsapp=$setting3->setting12;
$bannerimg=base_url('uploads/'.$setting3->setting4.'');
//$bannerimg=base_url('uploads/'.$setting3->setting4.'');
$whatsapp=$setting3->setting12;
$whatsapp_link="https://wa.me/".str_replace("+","",str_replace("-","",str_replace(" ","",$site_whatsapp)));
$facebook_url=$setting2->setting1;
$twitter_url=$setting2->setting2;
$linkedIn_url=$setting2->setting3;
$youtube_url=$setting2->setting4;
$instagram_url=$setting2->setting5;
$whatsapp_url=$setting2->setting6;
$telegram_url=$setting2->setting7;
$google_url=$setting2->setting8;
$android_url=$setting2->setting9;
$ios_url=$setting2->setting10;
$home_about=str_replace(array_in(),array_out(),$setting4->setting1);
$about_img=base_link().'/uploads/'.$setting4->setting2;
$map=$setting4->setting3;
$html1=$setting4->setting4;
$html2=$setting4->setting5;
$html3=$setting4->setting6;
$cat=getdataorder('tbl_pages',array('status'=>'1'),'sort_order','asc');
$current_url=current_url(true);

//$pagetagsopen='<section class="about-faq sec-padd"><div class="container"><div class="row1">';
$pagetagsopen='<section class="about section-padding"><div class="container"><div class="row1">';


$pagetagsclose='</div></div></section>';
$pagesectionopen='<div class="col-lg-8 col-md-9 col-sm-9 col-xs-12">';
$pagesectionclose='</div>';
$pagesidebaropen='<div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">';
$pagesidebarclose='</div>';
$pagefullwidthopen='<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">';
$pagefullwidthclose='</div>';
$page_heading_open='<div class="page_title"><h2>';
$page_heading_close='</h2></div>';
$default_file=base_url('public/no-image.jpg');
?>