<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
//DAte 
date_default_timezone_set("ASIA/KOLKATA");
$date 		= date("Y-m-d"); 
$add_date   = date('Y-m-d H:i:m');
$time       = date("H:i:m");
$add_time   = date("H:i:m");


//define table name
$u_r_table  = "user_register";


$mail_top_content = "<p>Dear Customer,</p><p>Greetings of the day….</p><p>Thank you for contacting us, Our team will contact you shortly with your concern.</p>";

$mail_body_content = "<p>Thanks & Regards,</p>";
$mail_body_content .= "<p>Traveller'schoice -Blue Planet Trips</p>";
$mail_body_content .= "<p>9315741007 | 9354088387 | 9318439774 </p>";
$mail_body_content .= "<p><img src='http://localhost/tour/image/logo.png'></p>";
$mail_body_content .= "<p>Mail id : info@blueplanettrips.com</p>";
$mail_body_content .= "<a href='https://www.blueplanettrips.com' target='_blank'>www.blueplanettrips.com</a><br/>";
$mail_body_content .= "<a href='Https://www.travellerschoice.online' target='_blank'>www.travellerschoice.online</a><br/>";
					


//define smtp details
define('SMTP_HOST','eduindiafoundation.org',TRUE);
define('SMTP_USER','no-reply@eduindiafoundation.org',TRUE);
define('SMTP_PASSWORD','Eduindia@123',TRUE);
define('SENDER_NAME','Eduindiafoundation',TRUE);
define('MAIL_FROM','no-reply@eduindiafoundation.org',TRUE);
define('SEND_C_EMAIL','info@eduindiafoundation.org',TRUE);
define('MAIL_TOP_CONTENT',$mail_top_content,TRUE);
define('MAIL_BOTTOM_CONTENT',$mail_body_content,TRUE);
 
$gen_id = rand();

//Define paths
define('HP','upload/',TRUE);
define('PSP','upload',TRUE);
define('AUP','../upload/',TRUE);
define('UUP','upload',TRUE);
define('BASE_URL','https://eduindiafoundation.org/',TRUE);
define('TITLE','<title>EDU INDIA FOUNDATION</title>',TRUE);
define('LOGIN_TITLE','EDU INDIA FOUNDATION',TRUE);
 
//extract post $_POST 
@extract($_POST);


//payumoney details 
$MERCHANT_KEY  = "FOGt2RGI";
$SALT          = "nRdqB2FEyg";
$PAYU_BASE_URL = "https://sandboxsecure.payu.in";
define('PAYU_BASE_URL','https://sandboxsecure.payu.in',TRUE);
$req  			= '<span class="text-danger">*</span>';

$all_transtion_id =  substr(hash('sha256', mt_rand() . microtime()), 0, 20);
$all_order_id 	  =  "EDU".substr(rand(1,10).mt_rand().time(). microtime(), 0, 10);

?>