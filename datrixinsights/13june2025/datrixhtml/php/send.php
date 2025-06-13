<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

if(isset($_POST["submit"])){

 $message = '
        <h3 align="center"> Form Details</h3>
        <table border="1" width="100%" cellpadding="5" cellspacing="5">
          <tr>
            <td width="30%"> Name</td>
            <td width="70%">'.$_POST["name"].'</td>
          </tr>
          <tr>
            <td width="30%">Email</td>
            <td width="70%">'.$_POST["email"].'</td>
          </tr>
          <tr>
            <td width="30%">Subject</td>
            <td width="70%">'.$_POST["subject"].'</td>
          </tr>
          <tr>
            <td width="30%">message</td>
            <td width="70%">'.$_POST["message"].'</td>
          </tr>
          
        </table>
      ';
  

  $mail = new PHPMailer(true);

  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'noreplymailconfig@gmail.com'; // Your gmail
  $mail->Password = 'mnfkxrtwltxukxyk'; // Your gmail app password
  $mail->SMTPSecure = 'ssl';
  $mail->Port = 465;

  $mail->setFrom('sales@datrixinsights.com'); // Your gmail where send mail

  $mail->addAddress("sales@datrixinsights.com"); // Your gmail where send mail
  $mail->addCC("Partners@datrixinsights.com");

  $mail->isHTML(true);

  $mail->Subject = 'Contact Form';
  $mail->Body = $message;

  $mail->send();

  echo
  "
  <script>
  alert('Sent Successfully');
  document.location.href = 'index.php';
  </script>
  ";
}
?>

