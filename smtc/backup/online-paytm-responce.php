<?php 
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

include_once('lib/all_files.php');  
//print_r($_POST);
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
 if($isValidChecksum == "TRUE" && $_POST["STATUS"] == "TXN_SUCCESS"){
    $order_id = $_POST['ORDERID'];
    $row = $con->update('online_payment_user',array('payment_status'=>1),array('order_id'=>$order_id));?>
    <html>
<head>
    
	<title>smtc Payment Successful</title>
	<!-- Latest compiled and minified CSS -->

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
	<h3>Your Payment Was Successful</h3>
	<p>Thank you for your payment. We Will be <br>In contact with more details shortly</p>
	<ul style="list-style-type: none;">
		<li><b>Order id : <?php echo $order_id; ?></b></li>
		<li><b>Paytm Transcation id : <?php echo $_POST["TXNID"]; ?></b></li>
		<li><b>Amount : <?php echo $_POST["TXNAMOUNT"]; ?></b></li>
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
    <?php 
}else{?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <img src="img/payment-faild.png" style="width:100%;height:300px;">
            <p class="text-center"><a href="index.php" class="btn btn-danger">Try Again Payment</a></p>
        </div>
    </div>
</div>
    
    
<?php }
?>