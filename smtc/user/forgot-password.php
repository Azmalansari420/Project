 <?php 
 $a_f_n = "../admin/";
 $title = "EDU INDIA";
 include_once('../lib/all_files.php');  
 if(isset($forgot_btn)){
    $fud = fs('tbl_user',array('reg_id'=>$stu_email));
    if(is_array($fud) || is_object($fud)){

    
 	$message = '
	    <h1>Dear '.$fud->name.'</h1>
	    <p>Thank you for Forgot Password </p> 
		<table border="1" width="100%" cellpadding="5" cellspacing="5">
		    
			<tr>
				<td width="30%">Password</td>
				<td width="70%">'.$fud->password.'</td>
			</tr>
			 
		  
		</table>
	';

	require '../php_mail/class.phpmailer.php';
	$mail = new PHPMailer;
	$mail->IsSMTP();								//Sets Mailer to send message using SMTP
	$mail->Host = 'eduindiafoundation.org';		//Sets the SMTP hosts of your Email hosting, this for Godaddy
	//$mail->Port = '80';								//Sets the default SMTP server port
	$mail->SMTPAuth = true;							//Sets SMTP authentication. Utilizes the Username and Password variables
	$mail->Username = 'no-reply@eduindiafoundation.org';					//Sets SMTP username
	$mail->Password = 'Eduindia@123';					//Sets SMTP password
	$mail->SMTPSecure = '';							//Sets connection prefix. Options are "", "ssl" or "tls"
	$mail->From = 'no-reply@eduindiafoundation.org';					//Sets the From email address for the message
	$mail->FromName = 'Eduindiafoundation';				//Sets the From name of the message
	$mail->AddAddress($fud->email);		//Adds a "To" address
    //$mail->AddBCC('joginderkumar.sharma83@gmail.com');
	$mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
	$mail->IsHTML(true);							//Sets message type to HTML
	//$mail->AddAttachment($path);					//Adds an attachment from a path on the filesystem
	$mail->Subject = 'Forgot Password';				//Sets the Subject of the message
	$mail->Body = $message;							//An HTML or plain text message body
    	if($mail->Send())								//Send an Email. Return true on success or false on error
    	{
    		 alert('successfully password forgot check you mail inbox or spam','forgot-password.php');
    	}
    	else
    	{
    	alert('mail smtp error','forgot-password.php');	 
    	}
    	
    	echo "jjii" ; 
}else{
	alert('Registration id not found our database','forgot-password.php');	 
}
 }
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title; ?></title> 
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo $a_f_n;?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="<?php echo $a_f_n ;?>dist/css/login_bg.css">
  
  <!-- Ionicons -->            
         
  <link rel="stylesheet" href="<?php echo $a_f_n;?>dist/css/AdminLTE.css">
  
</head>

<body>

<body> 
	<div class="container">
		<div class="row">
		<h2 class="user_title">Student Forgot Password</h2>
			<div class="col-sm-4 col-sm-offset-4 login_bg">
			<form action="" method="POST">
				 
				<div class="form-group">
					<input type="text" required placeholder="Student Registration Id" name="stu_email"  class="form-control">
					
				</div>  
				<div class="form-group">
				   <input type="submit" name="forgot_btn"  class="btn btn-block login_btn" value="Submit"/>
				   <p style="text-align: center;margin-top: 10px;"><a style="color:#fff;" href="index.php">Student Login</a></p>
				   <p style="text-align: center;margin-top: 10px;color:#fff">Don't have an account ? <a style="color:#f00;" href="../user-register.php">Create Account</a></p>
				</div> 
				</form> 
			</div>
		</div>
	</div>
 
 
 

<!-- jQuery 3 -->
<script src="<?php echo $a_f_n;?>dist/js/jquery.js"></script>
<script src="<?php echo $a_f_n;?>dist/js/bootstrap.js"></script>


</body>
</html>
