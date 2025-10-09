<?php
//DAte 
date_default_timezone_set("ASIA/KOLKATA");
$date 		= date("Y-m-d"); 
$add_date   = date('Y-m-d H:i:m');
$add_date_time   = date('Y-m-d H:i:m');
$time       = date("H:i:m");
$add_time   = date("H:i:m");


//define table name
$u_r_table  = "tbl_user";

//smtp mail server details
define('MAIL_HOST','onlineneetprep.com');
define('MAIL_USER','no-reply@onlineneetprep.com');
define('MAIL_PASS','eklavya@123');
define('MAIL_SUBJECT','SMTC');
define('MAIL_NAME','SMTC');

//Define paths
define('BASE_URL','http://smtc.org.in');
define('HP','upload/');
define('PSP','upload');
define('AUP','../upload/');
define('UUP','upload');
define('AIP','web-admin/upload/');
define('TITLE','<title>SMTC</title>');
define('LOGIN_TITLE','SMTC');
 
//extract post $_POST 
@extract($_POST);


//payumoney details 
$MERCHANT_KEY  = "nJUAs0M1";
$SALT          = "nEgShJq4v5";
//$PAYU_BASE_URL = "https://sandboxsecure.payu.in";
$PAYU_BASE_URL = "https://secure.payu.in";

define('PAYU_BASE_URL','https://secure.payu.in',TRUE);
$req  			= '<span class="text-danger">*</span>';
$all_transtion_id =  substr(hash('sha256', mt_rand() . microtime()), 0, 20);
$all_order_id 	  =  substr(rand(1,10).mt_rand().time(). microtime(), 0, 10);

$gallery = array('Client' =>"Client" ,'Gallery' =>"Gallery" );

$base_url = 'http://smtc.org.in' ; 
?>