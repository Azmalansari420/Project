<?php
include_once '../lib/all_files.php';

$fetch_brach_details = $con->all_fetch("user_register",NULL,"order by id DESC");

if(is_array($fetch_brach_details) || is_object($fetch_brach_details)){
	foreach ($fetch_brach_details as  $f_b_d) {
	    //	print_r($fetch_brach_details);
		if($f_b_d->gender == 1){
			$a = "S/O";
			$ba ="Male";
		}else{
			$a = "D/O";
			$ba ="Female";
		}
		$city     = fs("city",array('id' => $f_b_d->city));
		$district = fs("district",array('id' => $f_b_d->district));
		$state    = fs("state",array('id' => $f_b_d->state));
		$b        = fs("branch",array('id' => $f_b_d->user_add_by_id));
		$c_name   = fs("course",array("id" =>$f_b_d->course_id));
					$col_val  = array(	
		                    'studentName'=>$f_b_d->first_name,
							'studentRelation'=>$a,
							'studentFatherName'=>$f_b_d->father_name,
							'studentSex'=>$ba,
							'studentMobileNo'=>$f_b_d->mobile,
							'smCoursename'=>$c_name->name,
							'userName'=>$f_b_d->reg_id,
							'password'=>$f_b_d->password,
							'studentDOB'=>$f_b_d->dob,
							'studentAddress'=>$f_b_d->address,
							'studentCity'=>$city->name,
							'studentDistrict'=>$district->name,
							'studentState'=>$state->name,
							'studentPinCode'=>$f_b_d->postcode,
							'Admissiondate'=>$f_b_d->join_date,
							'photo'=>"https://eduindiafoundation.org/upload/".$f_b_d->picture,
							'branchname'=>$b->b_name,
							'branchaddresse'=>$b->address,
							'branchmobile'=>$b->mobile,
							'coursecode' =>$c_name->c_code
							);
		
		
    	curl_get_contents($col_val);
	
     
	
	}
//	print_r($result);

}
	

?>
