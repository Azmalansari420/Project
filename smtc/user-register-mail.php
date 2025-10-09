<?php 


	$message = '
	    <h1>Dear '.$fud->name.'</h1>
	    <h2>Thank you for Registration</h2>
		<h3> Student Login Details</h3>
		<table border="1" width="100%" cellpadding="5" cellspacing="5">
		    <tr>
				<td width="30%"> Registration Id </td>
				<td width="70%">'.$fud->reg_id.'</td>
			</tr>
			<tr>
				<td width="30%">Name</td>
				<td width="70%">'.$fud->name.'</td>
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
				<td width="30%">Student Login Url</td>
				<td width="70%"><a href="'.BASE_URL.'/user/index.php">Click here</a></td>
			</tr>
		  
		</table>
	';

	require 'lib/php-mailler/class.phpmailer.php';
	$mail = new PHPMailer;
	$mail->IsSMTP();								//Sets Mailer to send message using SMTP
	$mail->Host = 'smtp.gmail.com';		//Sets the SMTP hosts of your Email hosting, this for Godaddy
	$mail->Port = '587';								//Sets the default SMTP server port
	$mail->SMTPAuth = true;							//Sets SMTP authentication. Utilizes the Username and Password variables
	$mail->Username = 'institutesmtc@gmail.com';					//Sets SMTP username
	$mail->Password = 'msxdiikpwkzpclqr';					//Sets SMTP password
	$mail->SMTPSecure = 'tls';							//Sets connection prefix. Options are "", "ssl" or "tls"
	$mail->From = 'institutesmtc@gmail.com';					//Sets the From email address for the message
	$mail->FromName = 'smtcedu.in';				//Sets the From name of the message
	$mail->AddAddress($fud->email);		//Adds a "To" address
    $mail->AddBCC('smtcinstitute.dwarka@gmail.com');
	$mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
	$mail->IsHTML(true);							//Sets message type to HTML
	//$mail->AddAttachment($path);					//Adds an attachment from a path on the filesystem
	$mail->Subject = 'SAUNIT MANAGEMENT AND TECHNICAL COUNCIL :: Student Registration';				//Sets the Subject of the message
	$mail->Body = $message;							//An HTML or plain text message body
	if($mail->Send())								//Send an Email. Return true on success or false on error
	{
	   // die;
		 alert('Register Successfully please check your mail','user-register.php');
	}
	else
	{
	   // die;
		 alert('Register Successfully But Mail not send','user-register.php');
	}
?>