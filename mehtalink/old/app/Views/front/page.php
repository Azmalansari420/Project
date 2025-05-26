<?php include("include/common_data.php");
$setting3=getdatasingle('tbl_settings',array('id'=>'3'));
 ?>
 <style>
 .page_content {
    text-align: center;
    padding: 14px 0px 0px 0px;
}
.col-lg-12.col-md-12.col-sm-12.col-xs-12 div, p {
    color: black;
}
.section-padding {
    padding: 0px !important;
}
 </style>
 
 
 <?php if($user->page_banner!='') { ?>
  <div class="pbmit-title-bar-wrapper" style="background-image: url(<?=base_url('public/uploads/'.$user->page_banner.'');?>);">
         <div class="container">
            <div class="pbmit-title-bar-content">
               <div class="pbmit-title-bar-content-inner">
                  <div class="pbmit-tbar">
                     <div class="pbmit-tbar-inner">
                        <h1 class="pbmit-tbar-title"><?=$user->title;?></h1>
                     </div>
                  </div>
                  <div class="pbmit-breadcrumb">
                     <div class="pbmit-breadcrumb-inner">
                        <span><a title="" href="<?=base_url();?>" class="home"><span>Home</span></a></span>
                        <span class="sep">-</span>
                        <span><span class="post-root post post-post current-item"><?=$user->title;?></span></span>
                     </div>
                  </div>
               </div>
            </div> 
         </div> 
      </div>
  
 <?php } else if($setting3->setting4!='') {  ?>  
   <div class="pbmit-title-bar-wrapper" style="background-image: url(<?=$bannerimg;?>);">
         <div class="container">
            <div class="pbmit-title-bar-content">
               <div class="pbmit-title-bar-content-inner">
                  <div class="pbmit-tbar">
                     <div class="pbmit-tbar-inner">
                        <h1 class="pbmit-tbar-title"><?=$user->title;?></h1>
                     </div>
                  </div>
                  <div class="pbmit-breadcrumb">
                     <div class="pbmit-breadcrumb-inner">
                        <span><a title="" href="<?=base_url();?>" class="home"><span>Home</span></a></span>
                        <span class="sep">-</span>
                        <span><span class="post-root post post-post current-item"><?=$user->title;?></span></span>
                     </div>
                  </div>
               </div>
            </div> 
         </div> 
      </div>
   
    
   
<?php } ?>

<style>
.col-lg-12.col-md-12.col-sm-12.col-xs-12 div, p {
    color: #e6dada;
}
</style>





<?php



$page_id=$user->id;
$page_type=1;
//$page_title=$user->title;
$redirect_url=$user->redirect_url; if($redirect_url!=null){if($current_url!=$redirect_url){header("location:$redirect_url"); DIE();} }//redirect URL
if($user->file==null){$page_file="";} else {$page_file=base_link().'/public/uploads/'.$user->file;}
$page_description=str_replace(array_in(),array_out(),$user->description);
$page_description2=str_replace(array_in(),array_out(),$user->description2);
$page_status=$user->status;
$meta_tags=$user->meta_tags;
$meta_description=$user->meta_description;
$parent_page=$user->parent_page;
$page_slug=$user->slug;
$custom_data=$user->custom_data;
$updated_info=$user->updated_info;
$attachment_link=$user->attachment_link;
$updated_date=$user->updated_date;
$created_date=$user->created_date;
//$admin_id=$user->admin_id;
$last_viewed=$user->last_viewed;
$page_filter=explode(",",$user->page_filter);
$summary=0; if(in_array(14,$page_filter)){$summary=10;} else if(in_array(15,$page_filter)){$summary=20;} else if(in_array(16,$page_filter)){$summary=32;} else if(in_array(17,$page_filter)){$summary=50;} else {$summary=0;}
$page_type=$user->page_type;
$target_link=$user->target_link;
$page_banner=base_link().'/public/uploads/'.$user->page_banner;
//$embed_code=$user->embed_code; //ask for function from me
$menu_name=$user->menu_name;
$sort_order=$user->sort_order;
$unique_code=$user->unique_code;
$hits=$user->hits;
$udf1=$user->udf1;
$udf2=$user->udf2;
$udf3=$user->udf3;
$udf4=$user->udf4;
$page_gallery=1;
$hits_count=$hits+1; updatequery('tbl_pages',array('id'=>$page_id),array('hits'=>$hits_count));
$sub_products=getdataorder('tbl_pages',array('parent_page'=>$page_id),'sort_order','asc'); //call contact form number value or 0

$template=0; if(in_array(18,$page_filter)){$template=1;} if(in_array(20,$page_filter)){$template=2;}//Page Template

$contact_form=0; if(in_array(25,$page_filter)){$contact_form=1;} else if(in_array(27,$page_filter)){$contact_form=2;} else if(in_array(321,$page_filter)){$contact_form=3;} else if(in_array(31,$page_filter)){$contact_form=4;} 
else if(in_array(540,$page_filter)){$contact_form=540;}
else if(in_array(5401,$page_filter)){$contact_form=5401;}
else if(in_array(5402,$page_filter)){$contact_form=5402;}
 else {$contact_form=0;}


if($template==0){$page_section_open=$pagefullwidthopen; $page_section_close=$pagefullwidthclose;} else {$page_section_open=$pagesectionopen; $page_section_close=$pagesectionclose;}
// featured_img
$featured_img=0; if(in_array(28,$page_filter)){$featured_img=1;} else {$featured_img=0;}
if($page_file==null){$featured_img=0;}

$grid_type=0; if(in_array(1,$page_filter)){$grid_type=1;} else if(in_array(2,$page_filter)){$grid_type=2;} else if(in_array(3,$page_filter)){$grid_type=3;} else if(in_array(33,$page_filter)){$grid_type=4;} else if(in_array(30,$page_filter)){$grid_type=5;} else if(in_array(34,$page_filter)){$grid_type=6;} else if(in_array(222,$page_filter)){$grid_type=222;} 
else if(in_array(211,$page_filter)){$grid_type=211;}
else if(in_array(2221,$page_filter)){$grid_type=2221;}
else if(in_array(2216,$page_filter)){$grid_type=2216;}
else if(in_array(1115,$page_filter)){$grid_type=1115;}
else if(in_array(11156,$page_filter)){$grid_type=11156;}
 else {$grid_type=0;}// 1 row, 2 grids, 3 table

if(in_array(4,$page_filter)){
$order_type='ORDER BY id DESC';
} else if(in_array(5,$page_filter)){
$order_type='ORDER BY id ASC';
} else if(in_array(6,$page_filter)){
$order_type='ORDER BY sort_order ASC';
} else if(in_array(7,$page_filter)){
$order_type='ORDER BY sort_order DESC';
} else if(in_array(8,$page_filter)){
$order_type='id Asc';
} else if(in_array(9,$page_filter)){
$order_type='Price Asc';
} else if(in_array(10,$page_filter)){
$order_type='Price Desc';
} else if(in_array(11,$page_filter)){
$order_type='Most Viewed';
} else if(in_array(12,$page_filter)){
$order_type='title asc';
} else if(in_array(13,$page_filter)){
$order_type='title desc';
} else {
$order_type='0';
}

//header call in page_section function
echo $pagetagsopen;
echo "$page_heading_open $page_heading_close";
if($template==2){include("include/sidebar.php");}//call sidebar
echo $page_section_open;
if($grid_type==222){ $html123=1; }
else if($grid_type==2221){ $html123=2; }
else if($grid_type==11156){ $html123=3; }
else if($grid_type==1115){ $html123=4; }
else if($grid_type==2216){ $html123=5; }
else {
if($featured_img==1){echo "<div class='row'><div class='featured_img col-md-6'><p><img src='$page_file' alt='$page_title' /></p></div>
<div class='page_content col-md-6'> $page_description </div>
</div>";} //Featured Image Conditional
if($featured_img==0 ) { 
echo "<div class='page_content'> $page_description </div>";//Page Content - Classes from header
}
} 
 if($contact_form==1){include("include/contact_form.php");}

if($contact_form==3){include("include/status_form.php");}
if($contact_form==5401){include("include/job_finder.php");}
if($contact_form==4){include("include/quote.php");}
if($contact_form==540){include('include/registration.php');}


echo $page_section_close;
if($template==1){include("include/sidebar.php");}//call sidebar

$sub_count=0; if($grid_type > 0){$tag_open=$tag_close=$cgc=""; $break_code='</div> <div class="row" style="margin:20px 0;">';
if($grid_type==1){$tag_open='<div class="catalog_row" style="clear:left;"> <hr />'; $tag_close='</div>';} //ROW
if($grid_type==2){$tag_open='<div class="catalog_grid" style="clear:left;"><div class="row" style="margin:20px 0;">'; $tag_close='</div></div>'; $cgc="col-md-4 col-sm-4 col-sx-4";$blc=$brk=4;}
if($grid_type==4){$tag_open='<div class="catalog_grid" style="clear:left;"><div class="row" style="margin:20px 0;">'; $tag_close='</div></div>'; $cgc="col-md-6 col-sm-6 col-sx-6";$blc=$brk=2;}

if($grid_type==5){$tag_open='<div class="catalog_grid" style="clear:left;"><div class="row" style="margin:20px 0;">'; $tag_close='</div></div>'; $cgc="col-md-4 col-sm-4 col-sx-4";$blc=$brk=4;}

 //GRID //use for number of grids in a row
if($grid_type==3){$tag_open='<div class="clearfix" style="clear:left"></div> <div class="panel panel-default"><div class="panel-heading">Listing Under '.$page_name.'</div><div class="panel-body"><div class="table-responsive"><table class="table table-striped table-hover"><thead><tr><th style="width:30px;">#</th><th>Details</th></tr></thead><tbody>'; $tag_close='</tbody></table></div></div></div>';} //TABLE
echo $tag_open;
foreach($sub_products as $values) {$s_no=$sub_count+1;
$sub_link=base_url('page/'.$values->slug.'');
$sub_name=$values->title;
$sub_blog=$values->page_type;
$blog_date=$values->updated_date;

$price="<span class='price-regular'>Rs ".$values->udf2."</span>
<span class='price-old'><del>Rs ".$values->udf1."</del></span>";

if($sub_blog==2){$blog_meta='<br /> <small><i class="fa fa-user"></i> Admin | <i class="fa fa-calendar-o"></i> '.$blog_date.'</small>';} else {$blog_meta="";}
$sub_id=$values->id;
$sub_excerpt=str_replace(array_in(),array_out(),$values->description); $sub_excerpt=strip_tags($sub_excerpt); if($summary > 0){$sub_excerpt=word_limiter($sub_excerpt,$summary);} else {$sub_excerpt="";}
$sub_file=base_link().'/public/uploads/'.$values->file; if($values->file==null){$sub_file=$default_file;}
if($grid_type==1){$html_data='<div class="row row_'.$sub_id.'"><div class="col-md-3 col-sm-4 col-xs-12"><a href="'.$sub_link.'"><div class="grid_box_150"><span class="vertical_center"></span><img src="'.$sub_file.'" alt="'.$sub_name.'" /></div></a></div> <div class="col-md-9 col-sm-8 col-xs-12"><p class="grid_heading"><strong>'.$sub_name.'</strong>'.$blog_meta.'</p><p>'.$sub_excerpt.'</p><p><a href="'.$sub_link.'" class="btn btn-primary">Read More</a></p></div></div> <hr />';}//ROW

if($grid_type==2){$html_data='<div class="'.$cgc.' grid_'.$sub_id.'"><div class="col_grid_custom"><div class="grid_box_250"><a href="'.$sub_link.'"><span class="vertical_center"></span><img src="'.$sub_file.'" alt="'.$sub_name.'" /></a></div><hr /><p class="grid_heading"><strong></strong>'.$blog_meta.'</p><p class="text-center">'.$sub_excerpt.'</p><p><a href="'.$sub_link.'" class="btn-primary form-control text-center">'.$sub_name.'</a></p></div></div>';}//GRID

if($grid_type==4){$html_data='<div class="'.$cgc.' grid_'.$sub_id.'"><div class="col_grid_custom"><div class="grid_box_250"><a href="'.$sub_link.'"><span class="vertical_center"></span><img src="'.$sub_file.'" alt="'.$sub_name.'" /></a></div><hr /><p class="grid_heading"><strong>'.$sub_name.'</strong>'.$blog_meta.'</p><p class="text-center">'.$sub_excerpt.'</p><p><a href="'.$sub_link.'" class="btn btn-primary form-control text-center">Read More</a></p></div></div>';}//GRID


if($grid_type==5){$html_data='<div class="'.$cgc.' grid_'.$sub_id.'"><div class="col_grid_custom"><p class="grid_heading"><strong>'.$sub_name.'</strong>'.$blog_meta.'</p><p class="text-center">'.$sub_excerpt.'</p><p><a href="'.$sub_link.'" class="btn btn-primary form-control text-center">Read More</a></p></div></div>';}//GRID
if($grid_type==6) { ?>
	<div class="col-md-4">
                            <iframe
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                                style="width: 100%; height: 250px;"
                                src="<?=$values->embed_code;?>"
                            ></iframe>
                        </div>
	
<?php }
if($grid_type==3){$html_data='<tr><td>'.$s_no.'</td><td><a href="'.$sub_link.'"><h4 class="grid_heading">'.$sub_name.'</h4></a><p>'.$sub_excerpt.'... <a href="'.$sub_link.'">read more...</a></p></td></tr>';}//TABLE
echo $html_data;
if($grid_type==2){$blc++; $grc=$blc%$brk; if($grc==0){echo $break_code;} }//ONLY FOR GRID
$sub_count++;}
echo $tag_close;}//End of Grid Results

if($page_type==0){$media_type=1;} else {$media_type=0;}
if($page_gallery==1){echo '';//remove jquery in case or error
$break_code='</div> <div class="row" style="margin:20px 0;">'; $blc=$brk=3;
$sub_gallery=getdataorder('tbl_media',array('parent_page'=>$page_id,'page_type'=>$media_type),'sort_order','asc');
if($sub_gallery) { 
echo '<div class="gallery-wrap"><div class="container"><div class="row">';
foreach($sub_gallery as $gallery_img) { 
$img_name=$gallery_img->title;
$img_file=base_link().'/uploads/'.$gallery_img->file; if($gallery_img->file==null){$sub_file=$default_file;}
?>


<?php  }//End Of Loop
echo '</div></div></div>';} } //End of Page Gallery

// make changes above this
echo $pagetagsclose; ?>
<?php if($html123==3) { ?>
<div class="rt-spacer-0 rt-spacer-lg-100 rt-spacer-md-20 rt-spacer-xs-0"></div><!-- /.rt-spacer-0 -->
    <section class="about-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <?=$page_description;?>
                </div>
                <!-- /.col-lg-7 -->
                <div class="col-xl-6 col-lg-6">
                    <img src="<?=$page_file;?>" alt="">
                </div><!-- /.col-lg-5 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- about area start -->
    <div class="rt-spacer-100 rt-spacer-lg-0"></div><!-- /.rt-spacer-100 -->
    <div class="rt-spacer-100 rt-spacer-lg-0"></div><!-- /.rt-spacer-100 -->
    <?php
	$other3998=getdatasingle('tbl_pages',array('status'=>'1','display'=>'1','id'=>'8'));
	   if($other3998) {
	   $new_description155= str_replace(array_in(),array_out(),$other3998->description); 
	   
	?>
	<section class="about-area3 position-parent">
        <div class="map-img"><img src="<?=base_url('public/uploads/'.$other3998->file.'');?>" alt="" draggable="false"></div><!-- /.bg-img -->
        <div class="container">
            <div class="row">
                <div class="col-xl-5 offset-xl-6 col-lg-8">
                    <?=$new_description155;?>

                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
        <div class="rt-spacer-100 rt-spacer-lg-0"></div><!-- /.rt-spacer-100 -->
        <div class="rt-spacer-90 rt-spacer-md-60"></div><!-- /.rt-spacer-100 -->
    </section>
	<?php } ?>

<?php } ?>
<?php if($html123==5) { include('include/product.php'); } ?>
<?php if($html123==4) { 

include('include/detail.php');
?>


<?php } ?>
<?php if($sub_gallery) { ?>
	<!-- gallery wrapper start-->
    <div class="gallery_wrapper portfolio_grid dm_cover">

        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                    <div class="dmx_heading_wraper">
                        <img src="<?=base_url();?>/public/assets/images/head4.png" alt="img">
                        <h2><?=$user->title;?></h2>
                        <div class="bars bars2">
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row portfoli_inner pi_3">
<?php if($sub_gallery) { foreach($sub_gallery as $values) { ?>
            <!-- Items -->
            <div class="p-0 portfolio_boxes_width">
                <div class="portfolio_item">
                    <img src="<?=base_url('uploads/'.$values->file.'');?>" class="gall_img" alt="">
                    <div class="portfolio_hover">

                        <div class="zoom_popup">
                            <a class="img-link" href="<?=base_url('uploads/'.$values->file.'');?>"> <i class="flaticon-add-button"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
	   <?php } } ?>

            
        </div>
    </div>
 <?php } 
 if($contact_form==5402){include('include/profile.php');}
 ?>
 

