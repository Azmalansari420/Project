<?php 


//Reset user number
$del_se_id        = @$_GET['del_se_id'];
if(isset($del_se_id) and is_numeric($del_se_id) and !empty($del_se_id) and $del_se_id==1){
	$re_set_url = "set_user_number.php?id=".$url_id;
	$con->all_delete('user_course_subject_2',array('user_id'=>$url_id));	
	$con->update('user_register',array('p_s_s'=>''),array('id'=>$url_id));
	goto_c_url($re_set_url);
}

if(isset($set_second_btn_submit)){
	$count_all = $_POST['sub_name'];
	//update pass status
	$con->update('user_register',array('p_s_s'=>'Passed'),array('id'=>$url_id));
	$ch_set_numbers = $con->check('user_course_subject_2',array('user_id'=>$url_id));
	if($ch_set_numbers==1){
	     $con->all_delete('user_course_subject_2',array('user_id'=>$url_id));	
	}
	
	$is=0;
	foreach($count_all as $k=>$v){
		$iso        = $is++;
		$s_n        =  $_POST['sub_name'][$is-1];
		$s_min_mark =  $_POST['min_mark'][$is-1];
		$s_max_mark =  $_POST['max_mark'][$is-1];
		$s_pre_num  =  $_POST['per_num'][$is-1];
		$s_ther_num =  $_POST['ther_num'][$is-1];
		$s_sort_order =  $_POST['sort_order'][$is-1];
		$col_val = array(
			'user_id'=>$url_id,
			'subject_id'=>$s_n,
			'max_number'=>$s_max_mark,
			'min_number'=>$s_min_mark,
			'practical_number'=>$s_pre_num,
			'theory_number'=>$s_ther_num,
			'sort_order'=>$s_sort_order
			);
			$row = $con->insert('user_course_subject_2',$col_val);
			if($row==1){
				$s_u = "set_user_number.php?id=".$url_id;
				alert('Successful Set Numbers',$s_u); 
			}
		
	}
	 
}


?>