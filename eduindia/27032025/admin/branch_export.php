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
$columnHeader =  "Branch Code" . "\t" . "Branch Name" . "\t". "Email" . "\t". "Mobile" . "\t". "Contact Person" . "\t". "State" . "\t". "District" . "\t". "City" . "\t". "Address" . "\t". "Referal By" . "\t"	 ;  
$setData = '';  
$fetch_user_details = $con->all_fetch("branch");
if(is_array($fetch_user_details) || is_object($fetch_user_details) && !empty($fetch_user_details)){
	 $rowData = ''; 
	foreach ($fetch_user_details as $value) {
		$branch_name = fs("branch",array('id' => @$value->ref_branch_id  ));
		$s =fs("state",array('id' => @$value->sta_id  ));
		$d =fs("district",array('id' => @$value->dis_id  ));
		$c =fs("city",array('id' => @$value->city_id  ));
	 
		$value = '"' . @$value->b_code . '"' . "\t".'"' . @$value->b_name . '"' . "\t".'"' . @$value->email . '"' . "\t".'"' . @$value->mobile . '"' . "\t".'"' . @$value->p_name . '"' . "\t".'"' . @$s->name . '"' . "\t".'"' . @$d->name . '"' . "\t".'"' . @$c->name . '"' . "\t".'"' . @$value->address . '"' . "\t".'"' . @$branch_name->b_name . '"' . "\n";  
		
        $rowData .= $value; 
	}
	$setData .= trim($rowData) . "\n";
}
  
  
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=branch_details.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  

  echo ucwords($columnHeader) . "\n" . $setData . "\n";  
 ?> 
 