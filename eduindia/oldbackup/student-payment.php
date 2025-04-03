<?php
	$user_id          = @$_GET['id']; 
   include_once('lib/all_files.php'); 

      //check user login or no login
	  if(isset($user_id) and !empty($user_id)){
		  $u_f   = fs("user_register",array('id'=>$user_id,'payment_status'=>2));
		  //get admin panel details
          $g_admin = fs('top_admin',array('type'=>'A'));
		  
	  }else{
	  	url('user-register.php');
	  }
  

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Paytm Payment</title>
<meta name="GENERATOR" content="Evrsoft First Page">
   
<!-- Optional theme -->
<link rel="stylesheet" href="assets/css/vendor.css"   crossorigin="anonymous">
</head>
<!-- <body onload="document.getElementById('payment-form').submit();"> -->
	<body>
	<div class="container">
	<div class="row">
		 
		<div class="col-sm-4"> 
		</div>
		<div class="col-sm-4" style="border: 1px solid #ccc;padding:15px;margin-top:15%;"> 
		<div class="design_patter"> 
						<img src="../assets/img/logo/logo.png" class="center-block" alt="" />
				   <h2 class="text-center">Rs. <?php echo $g_admin->online_payment_amount; ?></h2>
					<p class="text-center"><b>Order Confirm Pay</b></p> 
	
		
			<center>
		
	<form method="post" id="payment-form" action="payment-redirect.php">
		
<input type="hidden" id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off" value="<?php echo @$u_f->order_id; ?>">
<input type="hidden" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php echo @$user_id; ?>">
<input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
<input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12"size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
<input type="hidden"  name="EMAIL" value="<?php echo @$u_f->email; ?>">
<input type="hidden"  name="MSISDN" value="<?php echo @$u_f->mobile; ?>">
<input type="hidden" title="TXN_AMOUNT" tabindex="10" type="text" name="TXN_AMOUNT" value="<?php echo $g_admin->online_payment_amount; ?>">
<input value="Confirm Payment" type="submit"  class="btn btn-success">
<a href="user-register.php" class="btn btn-danger">Cancel Payment
</a>				</center>		
		</div>
		
	</form>
	</div>
</div>
</div>
</body>
 
</html>