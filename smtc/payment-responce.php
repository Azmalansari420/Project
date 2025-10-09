<?php
//print_r($_POST);
//die();
include_once('lib/all_files.php');  
    
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// following files need to be included
require_once("lib/paytm-kit/config_paytm.php");
require_once("lib/paytm-kit/encdec_paytm.php");
 

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;

$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.
 

if($isValidChecksum == "TRUE" && $_POST["STATUS"] == "TXN_SUCCESS")
{
  
        
        
        
        $order_id = $_POST['ORDERID'];
        $fud = fs('tbl_user',array('order_id'=>$order_id));
        $g_admin = fs('top_admin',array('type'=>'A'));
        $row = $con->update('tbl_user',array('payment_status'=>1),array('order_id'=>$order_id));
        if($row==1){
            include('user-register-mail.php');

            //send sms
   //          $fs_b = fs('branch',array('id'=>$fs_b->user_add_by_id));
			// $Branch_name = $fs_b->b_name;
   //          $s_name = $fud->first_name;
   //          $reg_id = $fud->reg_id;
   //          $b_m_1  = $fud->mobile; 
            //$message = "Dear $s_name your registration done successfully at $Branch_name with $reg_id Verify your status @ www.eduindiafoundation.org/show_result.php";
	        //$sms_check = run_sms_api($b_m_1,$message);
        }
 
?>
<html>
<head>
	<title>GroupinKart Payment Successful</title>
	<style type="text/css">
	body{background-color: aliceblue;}
	.con_btn{
		background: #324e06;
	    padding: 8px;
	    color: #fff;
	    border-radius: 15px;
	    text-decoration: none;
	}
</style>
</head>
<body>
<center>
<div style="margin-top: 10%;">
	<img src="imge/logo.png">
	<h3>Payment Successful</h3>
	<ul style="list-style-type: none;">
		<li>Order id : <?php echo $order_id; ?></li>
		<li>Paytm Transcation id : <?php echo $_POST["TXNID"]; ?></li>
		<li>Amount : <?php echo $_POST["TXNAMOUNT"]; ?></li>
	</ul>
	<a href="index.php" class="con_btn">Go To Website</a>
</div>
</center>
</body>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>  
<script type="text/javascript">  
    $(function () {  
        $(document).keydown(function (e) {  
            return (e.which || e.keyCode) != 116;  
        });  
    });  
</script> 
</html>
<?php }else{
		url('../'); 
	} 
	?>
	 