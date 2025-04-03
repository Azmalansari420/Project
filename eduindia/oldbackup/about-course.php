<?php 
	include("header.php");
	$get_url    = @$_GET['id'];
	$table_name = "faculty";
	$c_page = "about-course.php";
	if(isset($get_url) and !empty($get_url) and is_numeric($get_url)==1){
		$fs = fs($table_name,array('id'=>$get_url));   
		if(is_array($fs) || is_object($fs)){
			
		}else{
			goto_c_url($page_name);
		}
	}else{
		goto_c_url('courseoffer.php');
	}
?>


<div class="inner-banner has-base-color-overlay text-center" style="background: url(<?php echo BASE_URL.HP.$fs->img;?>);">

    <div class="container">
        <div class="box">
            <h3><?php e($fs->name); ?></h3>
        </div><!-- /.box -->
    </div><!-- /.container -->
</div>





<section class="service-single sec-padd">
    <div class="container">
        <div class="row">     
            <div class="col-md-3">
            
                <div class="service-sidebar">
                    <ul class="service-catergory">
                        <li><a href="courseoffer.php">View All Services</a> <span class="view-all-icon fa fa-cog"></span></li>
						<?php
		   $all_fetch_offer_course = $con->all_fetch('faculty',array('status'=>'Yes'));
		 if(is_array($all_fetch_offer_course) || is_object($all_fetch_offer_course)){
					foreach($all_fetch_offer_course as $aff){
						if($aff->id==$get_url){?>
		<li class="active"><a href="<?php e($c_page); ?>?id=<?php e($aff->id); ?>"><?php e($aff->name); ?></a></li>
						<?php }else{?>
							<li><a href="<?php e($c_page); ?>?id=<?php e($aff->id); ?>"><?php e($aff->name); ?></a></li>
					<?php 	}
						 
		  } } ?>
                        
                   </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="outer-box">
                    <div class="row">
                    <div class="col-md-6"><div class="img-box"><img src="<?php echo BASE_URL.HP.$fs->img;?>" style="width:100%"></div></div>
                    <div class="col-md-6"><div class="img-box"><img src="<?php echo BASE_URL.HP.$fs->letter;?>" style="width:100%"></div></div>
                    </div>
                    
                    <br><br>
                    <div class="section-title">
                        <h2><?php e($fs->name); ?></h2>
                    </div>
                    <div class="text">
                     
					<?php e($fs->description); ?>
                    </div>
                 
                  
                    
                </div>
            </div>
        </div>
    </div>
</section>









<?php include("footer.php");?>