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
$columnHeader =  "Name" . "\t" . "Email" . "\t". "Mobile" . "\t". "Branch Name" . "\t". "State" . "\t". "District" . "\t". "City" . "\t". "Address" . "\t"	 ;  
$setData = '';  
$fetch_user_details = $con->all_fetch("franchisee_enquiry");
if(is_array($fetch_user_details) || is_object($fetch_user_details) && !empty($fetch_user_details)){
	 $rowData = ''; 
	foreach ($fetch_user_details as $value) {
		
	 
		$value = '"' . @$value->name . '"' . "\t".'"' . @$value->email . '"' . "\t".'"' . @$value->mobile . '"' . "\t".'"' . @$value->branch_name . '"' . "\t".'"' . @$value->state . '"' . "\t".'"' . @$value->dis . '"' . "\t".'"' . @$value->city . '"' . "\t".'"' . @$value->address . '"' . "\n";  
		
        $rowData .= $value; 
	}
	$setData .= trim($rowData) . "\n";
}
  
  
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=branch_enquiry_details.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  

  echo ucwords($columnHeader) . "\n" . $setData . "\n";  
 ?> 
 