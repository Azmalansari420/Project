<?php include("header.php");?>
<title>JKCS Edu India Foundation: Non-Governmental Organisation in Delhi</title>		
<meta name="keywords" content=" Edu India, Edu India Foundation, JKCS Edu India Foundation"/>
<meta name="description" content="JKCS Edu India Foundation is a Non-Governmental Organisation in Rohini, Delhi. Our NGO is registered under Government of India." />

<img src="edu_img/about.jpg" width="100%" />

 
<div class="container">
	<div class="row">
		
	</div>
</div>

    
<section class="about-faq sec-padd">
    <div class="container">
        <div class="section-title center">
            <h1>JKCS Edu India Foundation</h1>
        </div>
        <div class="row">
            <div class="col-sm-2">
            </div>
            <div class="col-md-5 col-sm-12 col-xs-12">
                <div class="about-info">
                    <h2>About Edu India</h2>
                    <br>
                    <div class="text">
                        <p>Edu India Foundation is a Non-Government Organization registered under Ministry of Corporate Affairs, Govt. of India. We have group of autonomous institutes, working in skill development and entrepreneurship under the roof of Edu India. Our institutes providing lots of job oriented courses which help the students to build their career. We provide franchise for various courses, a few are mentioned below:</p><br>
					<h3>1. Computer Centre Franchise</h3><br>	
					<h3>2. NTT Course Franchise</h3><br>	
					<h3>3. Yoga Course Franchise</h3><br>	
                    </div>

                    
                </div>
            </div>
			


            <div class="col-md-5 col-sm-12 col-xs-12">
                <div class="accordion-box">
                    
					 <?php 
		 $all_about_list = $con->all_fetch('post',array('status'=>'Yes','type'=>4),"order by sort_order desc");
		    if(is_array($all_about_list) || is_object($all_about_list)){
			 foreach($all_about_list as $aal){
			 ?>
					
                    <div class="accordion animated out text-justify" data-delay="0" data-animation="fadeInUp">
                        <div class="acc-btn">
                            <p class="title"><?php e($aal->name); ?></p>
                            <div class="toggle-icon">
                                <span class="plus fa fa-angle-right"></span><span class="minus fa fa-angle-down"></span>
                            </div>
                        </div>
                        <div class="acc-content">
                            <div class="text">
                                <?php e(html_entity_decode($aal->description)); ?>
                            </div>
                        </div>
                    </div>
                    
			<?php } } ?>
                    
                    


                </div>
            </div>
            
        </div>
    </div>
</section>




<?php include("footer.php");?>