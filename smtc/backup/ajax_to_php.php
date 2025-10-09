<?php 
  include_once('lib/all_files.php');


 //======\\ check email id //=======\\
	if(isset($temp_check_email_id) and !empty($temp_check_email_id)){
		$row = $con->check('user_register',array('email'=>$temp_check_email_id));
		if($row <= 0){
			echo 0; //frech email
		}else{
			echo 1;//already used
		}
	}

//======\\ check Mobile  //=======\\	
	if(isset($temp_check_mobile_id) and !empty($temp_check_mobile_id)){
		$row = $con->check('user_register',array('mobile'=>$temp_check_mobile_id));
		if($row==0){
			echo 0; //frech mobile
		}else{
			echo 1;//already used
		}
	}



//Get Selected course subject
if(isset($s_course_id) and !empty($s_course_id)){
	$where = array('id'=>$s_course_id);
	$fetch_details = $con->all_fetch('course',$where);
	
	if(is_array($fetch_details) || is_object($fetch_details)){
		
		$sub_cat_list = "";
		foreach($fetch_details as $fd){
			$temp_sub_list = $fd->subject;
			if(!empty($temp_sub_list)){
				$s_c_s = "";
				$arsd = explode(',',$temp_sub_list);
				foreach($arsd as $a){
					
					$s_w = array('id'=>$a);
					$s_n = fs('subject',$s_w);
					$s_c_s .= "<p class='col-sm-4'>".$s_n->name." [ $s_n->id ]"."</p>";
				}
				echo $s_c_s;
			}else{
		      echo 0;		
			}
			
		}
		
	}else{
		echo 0;
	}
}



//Get fetch course by course cat id
if(isset($ins_cat_id) and !empty($ins_cat_id)){
	$where = array('ins_cat_id'=>$ins_cat_id,'fstatus'=>'Yes','status'=>'Yes');
	$fetch_details = $con->all_fetch('course',$where);
	if(is_array($fetch_details) || is_object($fetch_details)){
		$sub_cat_list = "<option value=''>Select Course</option>";
		foreach($fetch_details as $fd){
			$sub_cat_list .= "<option value='$fd->id'>$fd->name</option>";			
		}
		echo $sub_cat_list;
	}else{
		echo 0;
	}
}


 

//Get District
if(isset($get_state_id) and !empty($get_state_id)){
	$where = array('s_id'=>$get_state_id);
	$fetch_details = $con->all_fetch('district',$where);
	if(is_array($fetch_details) || is_object($fetch_details)){
		$sub_cat_list = "<option value=''>Select District</option>";
		foreach($fetch_details as $fd){
			$sub_cat_list .= "<option value='$fd->id'>$fd->name</option>";			
		}
		echo $sub_cat_list;
	}else{
		echo 0;
	}
}

//Get City
if(isset($get_dis_id) and !empty($get_dis_id)){
	$where = array('d_id'=>$get_dis_id);
	$fetch_details = $con->all_fetch('city',$where);
	if(is_array($fetch_details) || is_object($fetch_details)){
		$sub_cat_list = "<option value=''>Select City</option>";
		foreach($fetch_details as $fd){
			$sub_cat_list .= "<option value='$fd->id'>$fd->name</option>";			
		}
		echo $sub_cat_list;
	}else{
		echo 0;
	}
}

  
  
//Institutes Course Category   
if(isset($ins_id) and !empty($ins_id)){
	$where = array('ins_id'=>$ins_id);
	$fetch_details = $con->all_fetch('institutes_courses',$where);
	if(is_array($fetch_details) || is_object($fetch_details)){
		$sub_cat_list = "<option value=''>Institutes Course Category</option>";
		foreach($fetch_details as $fd){
			$sub_cat_list .= "<option value='$fd->id'>$fd->name</option>";			
		}
		echo $sub_cat_list;
	}else{
		echo 0;
	}
}
?>

  
