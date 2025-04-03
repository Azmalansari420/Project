<?php include("header.php"); 
$table_name = "institutes";
?>
<title>NTT Course Franchise: Edu India | 08950071777</title>		
<meta name="keywords" content=" NTT Course Franchise, Edu India"/>
<meta name="description" content="Connect to Edu India Foundation to get Government Certified NTT Course Franchise. We offer Franchise for various courses. " />

<img src="edu_img/our_institutes.jpg" width="100%" alt="Edu India Foundation" />




<section class="our-services style-2">
    <div class="container"> 
        <div class="row">.
            <div class="col-sm-10 col-sm-offset-2">
                <div class="row">.
		<?php
		   $all_fetch_offer_course = $con->get($table_name,"order by id desc");
		 if(is_array($all_fetch_offer_course) || is_object($all_fetch_offer_course)){
					foreach($all_fetch_offer_course as $df){
						 
		?>
            <div class="col-sm-3 col-sm-6">
                <div class="single-our-service">
                    <figure class="img-box">
                        <a href="about-institute.php?id=<?php e($df->id); ?>" target="_blank">
						<h5 style="background: #1d3970;padding: 10px;border-radius: 10px;text-align: center;color: #fff;"><?php e($df->name);?></h5>
						</a>
                    </figure>
                  
                        
                </div>
            </div>
		 <?php } } ?>
             
        
    </div>
    </div>
</section>








<?php include("footer.php");?>