<?php

$uri = service('uri');

$currentpage=$uri->getSegment(1);

?>

<?php
if(isset($_POST['sub123'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['number'];
    $reason1=$_POST['reason'];
    $message1=$_POST['message'];
    
    
require_once("PHPMailer/class.phpmailer.php");
$mail = new PHPMailer();
        $mail->IsSMTP(); // we are going to use SMTP
        $mail->SMTPAuth   = true; // enabled SMTP authentication
        $mail->SMTPSecure = "ssl";  // prefix for secure protocol to connect to the server
        $mail->Host       = "smtp.gmail.com";      // setting GMail as our SMTP server
        $mail->Port       = 465;                   // SMTP port to connect to GMail
        $mail->Username   = "amrendrakumar5533@gmail.com";  // user email address
        $mail->Password   = "ymirhvpfqyzrlwem";            // password in GMail
        $mail->SetFrom('amrendrakumar5533@gmail.com','Enquiry For multispecialitydentalcare');  //Who is sending the email
        $mail->AddReplyTo($email,"Enquiry For multispecialitydentalcare");  //email address that receives the response
        $mail->Subject    = "Enquiry For multispecialitydentalcare";
       
        $html = '<p> Name is :'.$name.' </p>';
        $html .= '<p> Email is :'.$email.' </p>';
        $html .= '<p> Mobile is :'.$mobile.' </p>';
        $html .= '<p> Subject is :'.$reason1.' </p>';
        $html .= '<p> Message is :'.$message1.' </p>';
        $mail->Body      = $html;

        $mail->AltBody    = "User Enquiry";
       
         $from = $site_email;
         $url=base_url('thankyou');
        $mail->AddAddress($from, "User Enquiry");
        //$mail->AddCC("amrendrakumar5533@gmail.com");
        if(!$mail->Send()) {
             $success = "Error: " . $mail->ErrorInfo;
        } else {
            $success='<p style="color:green">Your enquiry has been submitted successfully. Our team will get back to you shortly.</p>';
            
        }
    
}

?>

    <form enctype="multipart/form-data" id="contact_form" name="contact_form" method="post" action="<?=base_url($currentpage);?>">

        <?php if(isset($success)){ echo $success; }?>

        <div class="row">

            <input type="hidden" name="send_email" value="<?=$site_email;?>">

            <div class="my-form col-md-6 col-xs-6 has-success"><label>Full Name*</label> <input class="form-control" type="text" name="name" placeholder="Enter Full Name *" maxlength="50" required="" /></div>

            <div class="my-form col-md-6 col-xs-6 has-success"><label>Email Address</label> <input class="form-control" type="email" name="email" placeholder="Email Address " maxlength="80"  /></div>

            <div class="my-form col-md-6 col-xs-6 has-success"><label>Contact Number*</label> <input class="form-control" type="text" name="number" pattern="[0-9]{10}" placeholder="Contact Number *" title="10 Digits Number Only" required="" /></div>

            <div class="my-form col-md-6 col-xs-6 has-success"><label>Resume*</label> <input class="form-control" type="file" name="reason" placeholder="Query " maxlength="50"  /></div>

            <div class="my-form col-md-12  col-xs-12 has-success"><label>Message</label> <textarea class="form-control" name="message" placeholder="Enter Message" maxlength="1000" ></textarea></div>

            <div class="my-form col-md-12 has-success"><input type="checkbox" name="accept" title="Accept Terms and Conditions" value="1" required="" /> I accept <a href="<?=base_url('privacy-policy');?>" target="_blank">Privacy Policy</a>.</div>

            <div class="my-form col-md-4"><input class="form-control btn btn-primary" type="submit" name="sub123" value="Submit" /></div>

        </div>

    </form>

    <style>

        .my-form {

            margin: 5px 0px;

        }

        #contact_form {

            margin: 10px 0px;

        }

        .form_message {

            padding-top: 100px;

        }

    </style>

</div>

