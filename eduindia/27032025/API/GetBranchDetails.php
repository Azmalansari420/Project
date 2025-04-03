<?php
include_once '../lib/all_files.php';
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

if($_SERVER['REQUEST_METHOD'] == "GET"){
$fetch_brach_details = $con->all_api("branch","order by b_name ASC");

if(is_array($fetch_brach_details) || is_object($fetch_brach_details)){
	$json = array();
	foreach ($fetch_brach_details as $f_b_d) {
		$json[] = $f_b_d;
	}
}
				http_response_code(200);
	    		echo json_encode(array("status" => "true","result" => $json));	
}else{
	http_response_code(400);
     echo json_encode(array("status" => "failed","result" => "Method Not Allowed!") );	
}

?>