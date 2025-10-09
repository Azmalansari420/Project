 <?php include ('header.php');?>
 <meta name="url" content="https://smtc.org.in/contact.php">
 <title>SMTC Contact Us-SAUNIT MANAGEMENT AND TECHNICAL COUNCIL</title>
<meta name="keywords" content="SMTC Contact Us">
      <meta name="description" content="SAUNIT MANAGEMENT AND TECHNICAL COUNCI or >SMTC Contact Us admire you to allow to contact at SMTC in which you enquiry the courses">
 <meta property="og:type" content="article"/>
    <meta property="og:title" content="SMTC Contact Us-SAUNIT MANAGEMENT AND TECHNICAL COUNCIL"/>
    <meta name="og:image" content="https://smtc.org.in/banner/BN11.jpg"/>
    <meta property="og:description" content="SAUNIT MANAGEMENT AND TECHNICAL COUNCI or >SMTC Contact Us admire you to allow to contact at SMTC in which you enquiry the courses"/>
<meta property="og:url" content="https://smtc.org.in/contact.php"/>
<meta property="og:site_name" content="SMTC Contact Us-SAUNIT MANAGEMENT AND TECHNICAL COUNCIL"/>
<link href="https://smtc.org.in/" rel="canonical">
	<!-- Page Heading Section Start -->	
	<div class="pagehding-sec">
		<div class="images-overlay"></div>		
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="page-heading">
						<h1>contact us</h1>
					</div>
					<div class="breadcrumb-list">
						<ul>
							<li><a href="index.php">Home</a></li>
						
							<li><a href="#">contact us</a></li>
						</ul>
					</div>					
				</div>				
			</div>
		</div>
	</div>
	<!-- Page Heading Section End -->	
	
	<!-- Contact Page Section Start -->
	<div class="contact-page-sec pt-100 pb-100">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<div class="contact-page-form">
						<h2>
							<?php
							if(isset($_GET['a']) && !empty($_GET['a'])){
								echo $subject = "Enquiry For ".$_GET['a'];

							}else{
								echo $subject = "Send your message";
							}
							?>
						</h2>	
                        
                <?php


$message = '';

function clean_text($string)
{
	$string = trim($string);
	$string = stripslashes($string);
	$string = htmlspecialchars($string);
	return $string;
}

if(isset($_POST["submit"]))
{
	
	$message = '
		<h3 align="center"> Candidate Details</h3>
		<table border="1" width="100%" cellpadding="5" cellspacing="5">
			<tr>
				<td width="30%"> Candidate Name</td>
				<td width="70%">'.$_POST["name"].'</td>
			</tr>
			<tr>
				<td width="30%">Candidate Last Name</td>
				<td width="70%">'.$_POST["lastname"].'</td>
			</tr>
		<tr>
				<td width="30%">Candidate number</td>
				<td width="70%">'.$_POST["number"].'</td>
			</tr>
                    <tr>
				<td width="30%">Candidate email</td>
				<td width="70%">'.$_POST["email"].'</td>
			</tr>
			<tr>
				<td width="30%">Candidate message</td>
				<td width="70%">'.$_POST["msg"].'</td>
			</tr>
		</table>
	';
	
	require 'class/class.phpmailer.php';
	$mail = new PHPMailer;
	$mail->IsSMTP();								//Sets Mailer to send message using SMTP
	$mail->Host = 'smtc.org.in';		//Sets the SMTP hosts of your Email hosting, this for Godaddy
	$mail->Port = '25';								//Sets the default SMTP server port
	$mail->SMTPAuth = true;							//Sets SMTP authentication. Utilizes the Username and Password variables
	$mail->Username = 'no-reply@smtc.org.in';					//Sets SMTP username
	$mail->Password = 'tkV*2s*SB';					//Sets SMTP password
	$mail->SMTPSecure = '';							//Sets connection prefix. Options are "", "ssl" or "tls"
	$mail->From = 'no-reply@smtc.org.in';					//Sets the From email address for the message
	$mail->FromName = 'smtc.org.in';				//Sets the From name of the message
	$mail->AddAddress($_POST["info@smtc.org.in"]);	//Adds a "To" address
	$mail->AddBCC('info@smtc.org.in');
	$mail->AddBCC('smtcinstitute.dwarka@gmail.com');
	$mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
	$mail->IsHTML(true);							//Sets message type to HTML
					                                //Adds an attachment from a path on the filesystem
	$mail->Subject = $subject;				//Sets the Subject of the message
	$mail->Body = $message;							//An HTML or plain text message body
	if($mail->Send())								//Send an Email. Return true on success or false on error
	{
		$message = '<div class=" alert-success">Thank You ..!!</div>';
		//unlink($path);
	}
	else
	{
		$message = '<div class="alert alert-danger">There is an Error</div>';
	}
}

?>
<?php print_r($message); ?>
 <form  method="POST" action="" >
     	                <div class="col-md-6 col-sm-6 col-xs-12">
							<div class="single-input-field">
								<input type="text" name="name" placeholder="First Name"/>
							</div>
						</div>							
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="single-input-field">
								<input type="text" name="lastname" placeholder="Last Name"/>
							</div>
						</div>								
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="single-input-field">
								<input type="text" name="number"placeholder="Phone Number"/>
							</div>
						</div>							
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="single-input-field">
								<input type="email" name="email"placeholder="E-mail"/>
							</div>
						</div>									
						<div class="col-md-12 message-input">
							<div class="single-input-field">
								<textarea  name="msg"placeholder="Write Your Message"></textarea>
							</div>
						</div>																								
						<div class="single-input-fieldsbtn">
                        <button name="submit" type="submit" value="Submit" class="site-button" style="background: #f1c40f; padding: 10px 26px; color:#fff;"> <span>Submit</span> </button>
						</div>
						</form>
					</div>	
					</div>
				<div class="col-md-5 ctn-section">				
					<div class="contact-info">
						<div class="contact-info-item">
							<div class="contact-info-icon">
								<i class="fa fa-map-marker"></i>
							</div>
							<div class="contact-info-text">
							    <h1>Contact Us</h1>
								<h2>Corporate office  </h2>
								<span>130B, 4th Floor, Sewak Park, Pillar No -783, Dwarka Mor, New Delhi-110059 India</span> 
                               
							
							</div>
						</div>						
					</div>
                    <div class="contact-info">
						<div class="contact-info-item">
							<div class="contact-info-icon">
								<i class="fa fa-phone"></i>
							</div>
							<div class="contact-info-text">
									<h2>Contact Number </h2>
								<span>+91-8851481640</span> 
                               
							</div>
						</div>						
					</div>					
					<div class="contact-info">
						<div class="contact-info-item">
							<div class="contact-info-icon">
								<i class="fa fa-envelope"></i>
							</div>
							<div class="contact-info-text">
								<h2>E-mail Address</h2>
								<span>info@smtc.org.in </span> 
								
							</div>
						</div>						
					</div>								
					<div class="contact-info">
						<div class="contact-info-item">
							<div class="contact-info-icon">
								<i class="fa fa-clock-o"></i>
							</div>
							<div class="contact-info-text">
								<h2>office time</h2>
								<span>Mon - sat  10:00 am - 7.00 pm</span>
								
								 
							</div>
						</div>						
					</div>					
				</div>				
				<div class="col-md-12">					
									
				</div>			


			</div>
            </div>
            </div>
            <div class="container-fluid">
           <div class="row">
               <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d7004.897121784873!2d77.02983412260677!3d28.616315429696535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s130%20B%2C%204th%20Floor%2C%20Sewak%20Park%2C%20Pillar%20No%20-783%2C%20Dwarka%20Mor%2C%20New%20Delhi-110059%20India!5e0!3m2!1sen!2sin!4v1604743679387!5m2!1sen!2sin" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>          </div>
		</div>
	
	<!-- Contact Page Section End -->	
	 <?php include ('footer.php');?>
