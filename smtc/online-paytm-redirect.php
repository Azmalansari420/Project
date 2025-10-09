<?php

header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
	
include_once('lib/all_files.php');  

// following files need to be included
include_once("lib/paytm-kit/config_paytm.php");
include_once("lib/paytm-kit/encdec_paytm.php");

// insert 
$col_val  = array(
                'add_date'=>$add_date,
                'full_name'=>$_POST["full_name"],
                'email'=>$_POST["EMAIL"],
                'mobile'=>$_POST["MSISDN"],
                'amount'=>$_POST["TXN_AMOUNT"],
                'order_id'=>$all_order_id
            );
$con->insert('online_payment_user',$col_val);
$last_payment_id = $con->last_id($con->con);

$checkSum = "";
$paramList = array();

$ORDER_ID         = $all_order_id;
$CUST_ID          = $last_payment_id;
$INDUSTRY_TYPE_ID = "Retail";
$CHANNEL_ID       = "WEB";
$TXN_AMOUNT       = $_POST["TXN_AMOUNT"];
$MSISDN           = $_POST["MSISDN"];
$EMAIL            = $_POST["EMAIL"];
// Create an array having all required parameters for creating checksum.
$paramList["MID"]              = PAYTM_MERCHANT_MID;
$paramList["ORDER_ID"]         = $ORDER_ID;
$paramList["CUST_ID"]          = $CUST_ID;
$paramList["INDUSTRY_TYPE_ID"] = $INDUSTRY_TYPE_ID;
$paramList["CHANNEL_ID"]       = $CHANNEL_ID;
$paramList["TXN_AMOUNT"]       = $TXN_AMOUNT;
$paramList["WEBSITE"]          = PAYTM_MERCHANT_WEBSITE;


$paramList["CALLBACK_URL"]     = BASE_URL."online-paytm-responce.php";
$paramList["MSISDN"]           = $MSISDN; //Mobile number of customer
$paramList["EMAIL"]            = $EMAIL; //Email ID of customer
$paramList["VERIFIED_BY"]      = "EMAIL"; //
$paramList["IS_USER_VERIFIED"] = "YES"; //



//Here checksum string will return by getChecksumFromArray() function.
$checkSum = getChecksumFromArray($paramList,PAYTM_MERCHANT_KEY);

?>
<html>
<head>
<title>Merchant Check Out Page</title>
</head>
<body>
	<center><h1>Please do not refresh this page...</h1></center>
		<form method="post" action="<?php echo PAYTM_TXN_URL ?>" name="f1">
		<table border="1">
			<tbody>
			<?php
			foreach($paramList as $name => $value) {
				echo '<input type="hidden" name="' . $name .'" value="' . $value . '">';
			}
			?>
			<input type="hidden" name="CHECKSUMHASH" value="<?php echo $checkSum ?>">
			</tbody>
		</table>

		<script type="text/javascript">
			document.f1.submit();
		</script>
	</form>
</body>
</html>