<?php 
if(isset($update_course_btn)){
	


	
			   $where   = array('id'=>$update_id);
			    
			   //$reg_id  = "EI".rand();
			   $col_val = array(
					'join_date'=>$join_date,
					'state'=>$state_id,
					'district'=>$district_id,
					'city'=>$city_id,
					'address'=>$address,
					'first_name'=>$s_name,
					'father_name'=>$s_f_name,
					'mother_name'=>$s_m_name,  
					'email'=>$email,
					'mobile'=>$b_m_1,  
					'gender'=>$s_gender,  
					//'user_add_by_id'=>$admin_id,  
					'dob'=>$s_dob,
					//'reg_id'=>$reg_id,
					'institute_id'=>$ins_id,
					'institute_course_id'=>$ins_cat_id,
					'course_id'=>$s_course,
					//'add_by'=>'Branch',
					
					);
					
					//one pic
			  $f_name   = $_FILES['stu_img']['name'];
			  $f_t_name = $_FILES['stu_img']['tmp_name'];
			  
			  //two pic
			  $f_name_one   = $_FILES['stu_min_qual_img']['name'];
			  $f_t_name_one = $_FILES['stu_min_qual_img']['tmp_name'];
			  
			  
			  if(!empty($f_name)){
				  $f_new_img = time().$f_name;
				  $file_Path    = AUP.$f_new_img; 
				  $col_val['picture'] = $f_new_img; 
				  @file_put_contents($f_t_name,$file_Path);
			  }else{
				  $col_val['picture'] = $old_stu_img; 
			  }
			  
			   if(!empty($f_name_one)){
				  $f_new_img1 = time().$f_name_one;
				  $file_Paths    = AUP.$f_new_img1; 
				  $col_val['cover'] = $f_new_img1; 
				  @file_put_contents($f_t_name_one,$file_Paths);
			  }else{
				  $col_val['cover'] = $old_stu_min_qual_img; 
			  }
					 
			    $row     = $con->update($table_name,$col_val,$where);
			   if($row==1){
				   if(isset($_GET['id']))
				   	$page_name = "add-student.php?id=".$_GET['id'];
				   alert('Successful Update Student',$page_name);
			   }
}
?>