<?php 

function run_sms_api($a,$b){
	$ch = curl_init();
	$mobileNumber = $a;
	$message      = urlencode($b);
	 
    $url = "https://www.getwaysms.com/vendorsms/pushsms.aspx?user=eduind&password=sharma&msisdn=$mobileNumber&sid=EDUIND&msg=$message&fl=0&gwid=2";
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$result       = curl_exec($ch);
	if (curl_errno($ch)) {
		echo 'Error:' . curl_error($ch);
	}
	curl_close ($ch);
	
	//return $result;
	
	$check_errors = explode("-",$result);
	if($check_errors[0]=="SUCCESS"){
	   return 1;	
	}else{
		return  0;
	}
}


 
?>