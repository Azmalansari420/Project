<?php  
	include_once("../lib/all_files.php");
$columnHeader = '';  
$columnHeader =  "Student Registration ID" . "\t" . "Student Name" . "\t" . "Course Name" . "\t". "Course Code" . "\t" ;  
$setData = '';  
$fetch_user_details = $con->all_fetch("user_register");
if(is_array($fetch_user_details) || is_object($fetch_user_details) && !empty($fetch_user_details)){
	 $rowData = ''; 
	foreach ($fetch_user_details as $value) {
	    $a = fs('course',array("id" =>$value->course_id));
		$value = '"' . $value->reg_id . '"' . "\t".'"' . $value->first_name . '"' . "\t".'"' . $a->name . '"' . "\t".'"'. $a->c_code . '"' . "\n";  
		
        $rowData .= $value; 
	}
	$setData .= trim($rowData) . "\n";
}
  
  
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=User_Detail.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  

  echo ucwords($columnHeader) . "\n" . $setData . "\n";  
 ?> 
 