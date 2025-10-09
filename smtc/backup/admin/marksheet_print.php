<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
    <link href="style.css" rel="stylesheet">
     <style type="text/css">
        .max {
    padding: 0px 0px 0px 73px;
   
}
.report_table {
    padding: 60px 0 0 0px;
   word-break: keep-all;
}
    </style>
</head>
<body>

<section class="certificate">
	
    <div class="top_sr_reg">
    <div class="sr_no"><?php e($fs->oauth_uid);?></div>
    <div class="reg_no"><?php e($fs->reg_id);?></div>
    
    <div class="student_img">
    	<div class="visibliti_hidden">visibliti_hidden</div>
        <div class="img"><img src="../upload/<?php e(@$fs->picture); ?>" width="128" height="160"></
    </div>
    
    
    <div class="st_name"><span><?php e($fs->first_name);?></span></div>
    
    <div class="parent_details">
        <div class="st_father_name"><span><?php e($fs->father_name);?></span></div>
        <div class="st_mother_name"><span><?php e($fs->mother_name);?></span></div>
    </div>
    
    <div class="Training_center_name"><span><?php echo id_to_name('branch',$fs->user_add_by_id,'b_name'); ?></span></div>
	<div class="registration_no"><span><?php e($fs->reg_id);?></span></div>
    <div class="admision_date"><span><?php e($fs->join_date);?></span></div>
    <div class="duration"><span><?php echo id_to_name('course',$fs->course_id,"c_time"); ?> <?php echo dmy(id_to_name('course',$fs->course_id,"c_time_type")); ?></span></div>
    <div class="dob"><span><?php e($fs->dob);?></span></div>
    
    
    
    <div class="course_name"><span><?php echo id_to_name('course',$fs->course_id); ?></span></div>
    <div class="course_code"><span><?php echo id_to_name('course',$fs->course_id,"c_code"); ?></span></div>
    
    
    <div class="report_table">
    
    	  <?php
				  
				  //check allready data
				  $ch_set_numbers = $con->check('user_course_subject',array('user_id'=>$url_id));
				   if($ch_set_numbers==1){
					   $fetch_all_subjcet = $con->all_fetch('user_course_subject',array('user_id'=>$url_id),"order by sort_order asc");
					  if(is_array($fetch_all_subjcet) || is_object($fetch_all_subjcet)){
						   $iss=1;
						   $ts = 0;
						   $min_c = 0;
						   $max_c = 0;
						     foreach($fetch_all_subjcet as $fas){
								$ts = $ts+$fas->practical_number+$fas->theory_number;
								$max_c = $max_c+$fas->max_number;;
								$min_c = $min_c+$fas->min_number;
							 ?>
							 
							    
        	<div class="subject"><span><?php echo $fas->subject_id;?></span></div>
            <div class="max"><span><?php echo $fas->max_number;?></span></div>
            <div class="min"><span><?php echo $fas->min_number;?></span></div>
            <div class="marks"><span><?php e($fas->practical_number+$fas->theory_number) ;?></span></div>
        
					<?php 		}
					  }
				  }else{
				    
	                  echo "<tr><td colspan='6'>Not Set Number</td></tr>";    		
				  }								
					  ?>
        
       
       
      
     
    </div>
    
 
       <!--================================total count of report=========================================-->  
       <div class="total_marks">
           <div class="total"><span>total marks</span></div>
           <div class="hi_marks"><span><?php e($max_c);?></span></div>
           <div class="low_marks"><span><?php e($min_c);?></span></div>
           <div class="all_marks"><span><?php e($ts);?></span></div>
       </div>
     <!--================================total count of report end=========================================-->  
    
    
    <!--==========================================date of issue result division start=====================-->
    <div class="date_of_issue">
    	<div class="doi"><span><?php e($issue_date); ?></span></div>
        <div class="result"><span>Passed</span></div>
        <div class="division"><span>First</span></div>
    </div>
    <!--==========================================date of issue result division start=====================-->
    
    
    
    
</section>
	
</body>
</html>