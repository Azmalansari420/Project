<h3 style="text-align: center; font-size: 36px;">Feedback Form</h3>
	<?php
	if(isset($_POST['submit'])){
	    $name=$_POST['name'];
	    $phone=$_POST['phone'];
	    $message1=$_POST['message'];
	    
	    require_once("PHPMailer/class.phpmailer.php");
        $mail = new PHPMailer();
        $mail->IsSMTP(); // we are going to use SMTP
        $mail->SMTPAuth   = true; // enabled SMTP authentication
        $mail->SMTPSecure = "ssl";  // prefix for secure protocol to connect to the server
        $mail->Host       = "smtp.gmail.com";      // setting GMail as our SMTP server
        $mail->Port       = 465;                   // SMTP port to connect to GMail
        $mail->Username   = "webenquiry.biz@gmail.com";  // user email address
        $mail->Password   = "ymirhvpfqyzrlwem";            // password in GMail
        $mail->SetFrom('webenquiry.biz@gmail.com','Enquiry For Feedback prowesshub');  //Who is sending the email
        $mail->AddReplyTo('webenquiry.biz@gmail.com',"Enquiry For Feedback prowesshub");  //email address that receives the response
        $mail->Subject    = "Enquiry For Feedback prowesshub";
       
        $html = '<p> Name is :'.$name.' </p>';
        $html .= '<p> Phone is :'.$phone.' </p>';
        $html .= '<p> Message is :'.$message1.' </p>';
        $mail->Body      = $html;

        $mail->AltBody    = "User Enquiry";
       
         $from = 'prowesshub.d1@gmail.com';
        // $url=base_url('thankyou');
        $mail->AddAddress($from, "User Enquiry");
        //$mail->AddCC("amrendrakumar5533@gmail.com");
        if(!$mail->Send()) {
           echo  $msg = "Error: " . $mail->ErrorInfo;
        } else {
            $success='<p style="color:green">Your enquiry has been submitted successfully. Our team will get back to you shortly.</p>';
            
        }
	    
	    
	}
	?>
<div class="container">
    <?php if(isset($success)){ echo $success; }?>
  <form action="" method="POST">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Phone Number</label>
    <input type="text" id="lname" name="phone" placeholder="Your Phone Number..">


    <label for="subject">Message</label>
    <textarea id="subject" name="message" placeholder="Message.." style="height:200px"></textarea>

    <input type="submit" value="Submit" name="submit">
  </form>
</div>
<style>
    input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

</style>