<?php 

 $message = '
	    <h1>Dear '.$fud->first_name.'</h1>
	    <p>Thank you for Registration </p>
		<h3> Student Login Details</h3>
		<table border="1" width="100%" cellpadding="5" cellspacing="5">
		    <tr>
				<td width="30%"> Registration Id </td>
				<td width="70%">'.$fud->reg_id.'</td>
			</tr>
			<tr>
				<td width="30%"> Email id </td>
				<td width="70%">'.$fud->email.'</td>
			</tr>
			<tr>
				<td width="30%">Mobile No.</td>
				<td width="70%">'.$fud->mobile.'</td>
			</tr>
			<tr>
				<td width="30%">Password</td>
				<td width="70%">'.$fud->password.'</td>
			</tr>
			<tr>
				<td width="30%">Student Login</td>
				<td width="70%"><a href="'.BASE_URL.'/user/index.php">Click here</a></td>
			</tr>
		  
		</table>
	';
 
	require 'php_mail/class.phpmailer.php';
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
	$mail->AddBCC('joginderkumar.sharma83@gmail.com');
	$mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
	$mail->IsHTML(true);							//Sets message type to HTML
	//$mail->AddAttachment($path);					//Adds an attachment from a path on the filesystem
	$mail->Subject = 'Online Registration';				//Sets the Subject of the message
	$mail->Body = $message;							//An HTML or plain text message body
	if($mail->Send())								//Send an Email. Return true on success or false on error
	{
	echo "mail send";	 
	}
	else
	{
		 
	}
?>