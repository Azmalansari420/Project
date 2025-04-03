<?php
    require 'php_mail/class.phpmailer.php';
    $mail = new PHPMailer; 
	$message ='
<div style="font-family: Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;">
    <table style="width: 100%;">
      <tr>
        <td></td> 
        <td bgcolor="#FFFFFF ">
          <div style="padding: 15px; max-width: 600px;margin: 0 auto;display: block; border-radius: 0px;padding: 0px; border: 1px solid #3e4095;">
            <table style="width: 100%;background: #3e4095 ;">
              <tr>
                <td></td> 
                <td>
                  <div>
                    <table width="100%">
                      <tr>
                        <td rowspan="2" style="text-align:center;padding:10px;">
              <img style="float:left; " width="200"  src="'.BASE_URL.'img/final-logo.png" /> 
              
              <span style="color:white;float:right;font-size: 13px;font-style: italic;margin-top: 20px; padding:10px; font-size: 14px; font-weight:normal;">
              <span></span></span></td>
                      </tr>
                    </table>
                  </div>
                </td>
                <td></td>
              </tr>
            </table>
            <table style="padding: 10px;font-size:14px; width:100%;">
            <tr>
      <p>Dear '.@$user_name.',</p>
      <h4>WELCOME TO <a href="https://www.groupinkart.com/" target="_blank"> GROUPINKART.COM</a></h4>
      <p>Your Password :- '.$for_passwords.'</p>
      <p>If you wish to change Your Password <a href="'.BASE_URL.'user-password.php">Click this link</></p>
     </tr>

        <tr> 
        <td>
         <div align="center" style="font-size:12px; margin-top:20px; padding:5px; width:100%; background:#3e4095;color:#ffffff;">
                    © 2018-'.date("Y").' <a href="http://groupinkart.com/" target="_blank" style="color:#fff; text-decoration: none;">groupinkart.com</a>
                  </div>
                </td>
        </tr>
              
            </table>
          </div>


';
	
    $mail->IsSMTP();								//Sets Mailer to send message using SMTP
	$mail->Host = MAIL_HOST;		//Sets the SMTP hosts of your Email hosting, this for Godaddy
	//$mail->Port = '80';								//Sets the default SMTP server port
	$mail->SMTPAuth = true;							//Sets SMTP authentication. Utilizes the Username and Password variables
	$mail->Username = MAIL_USER;					//Sets SMTP username
	$mail->Password = MAIL_PASS;					//Sets SMTP password
	$mail->SMTPSecure = '';							//Sets connection prefix. Options are "", "ssl" or "tls"
	$mail->From = MAIL_USER;					//Sets the From email address for the message
	$mail->FromName = MAIL_NAME;			//Sets the From name of the message
	$mail->AddAddress($forgot_email);		//Adds a "To" address
	//$mail->AddBCC('ayansh@twintifashion.in');
	//$mail->AddBCC('Jivanraksha5@gmail.com');
	$mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
	$mail->IsHTML(true);							//Sets message type to HTML
	//$mail->AddAttachment($path);					//Adds an attachment from a path on the filesystem
	$mail->Subject = 'Groupinkart New Password';				//Sets the Subject of the message
	$mail->Body = $message;							//An HTML or plain text message body
	if($mail->Send())								//Send an Email. Return true on success or false on error
	{
		//success full send mail and insert data in database
		 echo 1;
	}
	else
	{ 
		//mail error
    echo 2;
    
	}


?>