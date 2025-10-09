<?php
///////======  WEB-ADMIN AJAX TO PHP FILE =========////////

	session_start();
    $session_admin  =  @$_SESSION['session_admin'];
	include_once("../../lib/all_files.php");
	

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

	

//Approved Vendor by admin side
if(isset($app_vendor_id,$vendor_action)){
	//col and val 
	 $col_vals = array('payment_status'=>$vendor_action);	
 
	 //where check condition 
	 $w_os = array('id'=>$app_vendor_id);
	 
	 $row = $con->update('user_register',$col_vals,$w_os);

	 
	 echo $row;
}

	
//=========\\ Delete Post //=========\\
$delete_post = @$_GET['delete_post'];
if(isset($delete_post)){
	$del_img = @$_GET['del_old_img'];
	$check   = array('id'=>$delete_post);
	$run     = $con->all_delete("post",$check);
	if($run==true){
		@unlink('../../upload/'.$del_img);	
	   echo $run;
	}
}
 
 //========\\ Delete Products Pic ///=========\\
$edit_del_product_pic = @$_GET['edit_del_product_pic'];
if(isset($edit_del_product_pic)){
	$del_img = @$_GET['del_old_img'];
	$check   = array('id'=>$edit_del_product_pic);
	$run    = $con->all_delete("all_media",$check);

	if($run==true){
		@unlink('../../upload/'.$del_img);	
	   echo $run;
    }
	
}
 
//======================\\ DELETE State //======================\\
$delete_cat_list = @$_GET['delete_cat_list'];
if(isset($delete_cat_list)){
	$check   = array('id'=>$delete_cat_list);
	$run     = $con->all_delete("state",$check);
	if($run==true){
	   echo $run;
	}
	
} 

//===  Delete Sub District ====//
$delete_sub_cat_id  = @$_GET['delete_sub_cat'];
if(isset($delete_sub_cat_id  )){
	$check   = array('id'=>$delete_sub_cat_id  );
	$run     = $con->all_delete("district",$check);
	if($run==true){
	   echo $run;
	}
	
} 


//===  Delete Sub city ====//
$delete_city  = @$_GET['delete_city'];
if(isset($delete_city)){
	$check   = array('id'=>$delete_city);
	$run     = $con->all_delete("city",$check);
	if($run==true){
	   echo $run;
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


//Get Selected course subject join with second Year 
if(isset($ss_course_id) and !empty($ss_course_id)){
	$where = array('id'=>$ss_course_id);
	$fetch_details = $con->all_fetch('course',$where);
	
	if(is_array($fetch_details) || is_object($fetch_details)){
		
		$sub_cat_list = "";
		foreach($fetch_details as $fd){
			$temp_sub_list = $fd->second_year_subject;
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




//===  Delete  franchisee_enquiry ====//
$delete_enqu  = @$_GET['delete_enqu'];
if(isset($delete_enqu)){
	$check   = array('id'=>$delete_enqu);
	$run     = $con->all_delete("franchisee_enquiry",$check);
	if($run==true){
	   echo $run;
	}
	
} 
  
  
  //===  Delete  Institutes  ====//
$institutes_id  = @$_GET['institutes_id'];
if(isset($institutes_id)){
	$check   = array('id'=>$institutes_id);
	$run     = $con->all_delete("institutes",$check);
	if($run==true){
	   echo $run;
	}
	
}
 //===  Delete  Institutes  ====//
$add_download  = @$_GET['add_download'];
if(isset($add_download)){
	$check   = array('id'=>$add_download);
	$run     = $con->all_delete("download",$check);
	if($run==true){
	   echo $run;
	}
	
} 
 //===  Delete  Institutes  ====//
$add_notice  = @$_GET['add_notice'];
if(isset($add_notice)){
	$check   = array('id'=>$add_notice);
	$run     = $con->all_delete("notice_board",$check);
	if($run==true){
	   echo $run;
	}
	
} 
  
//===  Delete  Institutes Category ====//
$institutes_cour_id  = @$_GET['institutes_cour_id'];
if(isset($institutes_cour_id)){
	$check   = array('id'=>$institutes_cour_id);
	$run     = $con->all_delete("institutes_courses",$check);
	if($run==true){
	   echo $run;
	}
	
}
  
    //===  Delete  Course ====//
$delete_course  = @$_GET['delete_course'];
if(isset($delete_course)){
	$check   = array('id'=>$delete_course);
	$run     = $con->all_delete("course",$check);
	if($run==true){
	   echo $run;
	}
	
}

    //===  Delete  Subject ====//
$delete_subject  = @$_GET['delete_subject'];
if(isset($delete_subject)){
	$check   = array('id'=>$delete_subject);
	$run     = $con->all_delete("subject",$check);
	if($run==true){
	   echo $run;
	}
	
}

//==== DELETE Branch ====//
$delete_branch  = @$_GET['delete_branch'];
if(isset($delete_branch)){
	$check   = array('id'=>$delete_branch);
	$run     = $con->all_delete("branch",$check);
	if($run==true){
	   echo $run;
	}
	
}


//==== DELETE User ====//
$delete_user_list  = @$_GET['delete_user_list'];
if(isset($delete_user_list)){
	$check   = array('id'=>$delete_user_list);
	$check1   = array('user_id'=>$delete_user_list);
	$run     = $con->all_delete("user_register",$check);
	$run2     = $con->all_delete("user_course_subject",$check1);
	if($run==true){
	   echo $run;
	}
	
}


//==================\\ ADD Slider CODE //================\\
if(isset($slider_status)){
    
    $cms_pic_temp = $_FILES['banner_pic']['tmp_name'];
    $cms_pic_size = $_FILES['banner_pic']['size'];
    $cms_pic      = uniqid().$_FILES['banner_pic']['name'];
    $file_Path    = "../../upload/".$cms_pic;
    if($cms_pic_size <= 2048000){
        $col_val = array('add_date'=>$add_date,'banner_title'=>$banner_title,'banner_img'=>$cms_pic,'banner_link'=>$banner_link,'sort_order'=>$sort_order,'status'=>$slider_status);
        $run     = $con->insert('home_slider',$col_val);
        move_uploaded_file($cms_pic_temp,$file_Path);
        echo $run;
        
        
    }else{
        echo 2;
    } 
     
}

//==================\\ EDIT Slider CODE //================\\
if(isset($edit_slider_status,$banner_update_id)){
    $edit_cms_pic_temp = $_FILES['edit_cms_pic']['tmp_name'];
    $edit_cms_pic_size = $_FILES['edit_cms_pic']['size'];
    $edit_cms_pics      = uniqid().$_FILES['edit_cms_pic']['name'];
    $file_Path    = "../../upload/".$edit_cms_pics; 
    
    $where   = array('id'=>$banner_update_id);
    $col_val = array('banner_link'=>$edit_banner_link,'banner_title'=>$edit_banner_title,'sort_order'=>$sort_order,'status'=>$edit_slider_status);
    
    if($_FILES['edit_cms_pic']['name'] !==""){
        
        if($edit_cms_pic_size <= 2048000){
            
            $col_val['banner_img'] = $edit_cms_pics;
            $run     = $con->update("home_slider",$col_val,$where);
            
            if($run==1){
               move_uploaded_file($edit_cms_pic_temp,$file_Path);
               @unlink('../../upload/'.$cms_old_pic);
                echo $run;    
            }
        }else{
            echo 2;
        }
        
    }else{
        $col_val['banner_img'] = $banner_old_pic;
        $run     = $con->update("home_slider",$col_val,$where);
        echo $run;
    }
    
}




//======================\\ DELETE Slider CODE //======================\\
$delete_slider_list = @$_GET['delete_slider_list'];
if(isset($delete_slider_list)){
    $del_img = @$_GET['del_old_img'];
	$check   = array('id'=>$delete_slider_list);
	$run     = $con->all_delete("home_slider",$check);
	if($run==true){
	   @unlink('../../upload/'.$del_img);	
	   echo $run;
	}
	
}


//======================\\ DELETE service CODE //======================\\
$delete_services_list = @$_GET['delete_services_list'];
if(isset($delete_services_list)){
    $del_img = @$_GET['del_old_img'];
	$check   = array('id'=>$delete_services_list);
	$run     = $con->all_delete("services",$check);
	if($run==true){
	   @unlink('../../upload/'.$del_img);	
	   echo $run;
	}
	
}


//======================\\ DELETE service CODE //======================\\
$delete_services_item_list = @$_GET['delete_services_item_list'];
if(isset($delete_services_item_list)){
    $del_img = @$_GET['del_old_img'];
	$check   = array('id'=>$delete_services_item_list);
	$run     = $con->all_delete("item_services",$check);
	if($run==true){
	   @unlink('../../upload/'.$del_img);	
	   echo $run;
	}
	
}



//======================\\ DELETE service CODE //======================\\
$delete_study_item_list = @$_GET['delete_study_item_list'];
if(isset($delete_study_item_list)){
    $del_img = @$_GET['del_old_img'];
	$check   = array('id'=>$delete_study_item_list);
	$run     = $con->all_delete("study_material",$check);
	if($run==true){
	   @unlink('../../upload/'.$del_img);	
	   echo $run;
	}
	
}


//======================\\ DELETE service CODE //======================\\
$delete_product = @$_GET['delete_product'];
if(isset($delete_product)){
    $del_img = @$_GET['del_old_img'];
	$check   = array('id'=>$delete_product);
	$run     = $con->all_delete("product",$check);
	if($run==true){
	   @unlink('../../upload/'.$del_img);	
	   echo $run;
	}
	
}



//Get fetch course by course cat id
if(isset($ins_cat_id) and !empty($ins_cat_id)){
	$where = array('ins_cat_id'=>$ins_cat_id);
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