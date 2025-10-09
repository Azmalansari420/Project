<?php  
	  $a_f_n = "../admin/";
     session_start();
    $session_admin  =  @$_SESSION['session_admin'];
	include_once("../lib/all_files.php");
	$con->check_session($session_admin,"index.php");
	
	
	
	$admin_info = $con->all_fetch("top_admin",array('admin_email'=>$session_admin));
	foreach($admin_info as $admin){
		$admin_id        = $admin->id;
		$admin_uniqid_id = $admin->admin_uniqid_id;
		$admin_name      = $admin->admin_name;
	}  
	 
$columnHeader = '';  
$columnHeader =  "Student Registration ID" . "\t" . "Student Name" . "\t" . "Course Name" . "\t". "Course Code" . "\t". "Student Father Name" . "\t". "Student Mother Name" . "\t". "Email" . "\t". "Number" . "\t". "Gender" . "\t". "DOB" . "\t". "State" . "\t". "District" . "\t". "City" . "\t". "Address" . "\t". "Institute name" . "\t". "Duration" . "\t". "Admission Date" . "\t"	 ;  
$setData = '';  
$fetch_user_details = $con->all_fetch("user_register");
if(is_array($fetch_user_details) || is_object($fetch_user_details) && !empty($fetch_user_details)){
	 $rowData = ''; 
	foreach ($fetch_user_details as $value) {
		if($value->gender == 1){
			$ba ="Male";
		}else{
			$a = "D/O";
			
		}
	    $a        = fs('course',array("id" =>$value->course_id));
	    $city     = id_to_name('city',$value->city);
		$district = id_to_name('district',$value->district);
		$duration = id_to_name('institutes_courses',$value->institute_course_id);
		$state    = id_to_name('state',$value->state);
		$Institute   = id_to_name('institutes',$value->institute_id);
		$value = '"' . @$value->reg_id . '"' . "\t".'"' . @$value->first_name . '"' . "\t".'"' . @$a->name . '"' . "\t".'"' . @$a->c_code . '"' . "\t".'"' . @$value->father_name . '"' . "\t".'"' . @$value->mother_name . '"' . "\t".'"' . @$value->email . '"' . "\t".'"' . @$value->mobile . '"' . "\t".'"' . @$ba . '"' . "\t".'"' . @$value->dob . '"' . "\t".'"' . @$state . '"' . "\t".'"' . @$district . '"' . "\t".'"' . @$city . '"' . "\t".'"' . @$value->address . '"' . "\t".'"' . @$Institute . '"' . "\t".'"' . @$duration . '"' . "\t".'"' . @$value->join_date . '"' . "\n";  
		
        $rowData .= $value; 
	}
	$setData .= trim($rowData) . "\n";
}
  
  
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=student_details.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  

  echo ucwords($columnHeader) . "\n" . $setData . "\n";  
 ?> 
 