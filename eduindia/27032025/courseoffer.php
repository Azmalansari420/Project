<?php include("header.php");?>
<title>Edu India: Courses Offered | 08950071777</title>		
<meta name="keywords" content="Edu India, Computer Centre Franchise, NTT Course Franchise, Yoga Course Franchise
"/>
<meta name="description" content="We Provide Franchise for Computer Centre Franchise, NTT Course Franchise, Yoga Course Franchise and Many More.
" />


<img src="edu_img/courses offerd.jpg" width="100%" alt="NTT course franchise" />

<section class="our-services style-2">
    <div class="container"> 
        <div class="row">
            <div class="col-sm-2">
                </div>
                <div class="col-sm-10">
                    <div class="row">
		<?php
		   $all_fetch_offer_course = $con->all_fetch('faculty',array('status'=>'Yes'));
		 if(is_array($all_fetch_offer_course) || is_object($all_fetch_offer_course)){
					foreach($all_fetch_offer_course as $aff){
						 
		?>
            <div class="col-md-4 col-sm-6">
                <div class="single-our-service">
                    <figure class="img-box">
                        <a href="javascript:;">
						<img src="<?php echo BASE_URL.HP.$aff->img;?>" style="height:200px;width:100%;"></a>
                    </figure>
                    <div class="text-box"  style="min-height:250px">
                        <a  href="about-course.php?id=<?php e($aff->id);?>"><h4 style="font-size:15px;"><?php e($aff->name); ?></h4></a>
                        <p><?php e(substr($aff->description,0,100)); ?></p>
                       
                    </div>
                        
                </div>
            </div>
				<?php }
				}?>
             
        </div>
        </div>
        </div>
    </div>
</section>








<?php include("footer.php");?>