<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

if(isset($_POST["submit"])){

 $message = '
        <h3 align="center"> Join Panel</h3>
        <table border="1" width="100%" cellpadding="5" cellspacing="5">
          <tr>
            <td width="30%">First Name</td>
            <td width="70%">'.$_POST["fname"].'</td>
          </tr>
          <tr>
            <td width="30%">Last Name</td>
            <td width="70%">'.$_POST["lname"].'</td>
          </tr>
          <tr>
            <td width="30%">Email</td>
            <td width="70%">'.$_POST["email"].'</td>
          </tr>
          <tr>
            <td width="30%">Primary Language</td>
            <td width="70%">'.$_POST["p_language"].'</td>
          </tr>
          <tr>
            <td width="30%">Mobile</td>
            <td width="70%">'.$_POST["mobile"].'</td>
          </tr>
          <tr>
            <td width="30%">Country</td>
            <td width="70%">'.$_POST["country"].'</td>
          </tr>
          <tr>
            <td width="30%">City</td>
            <td width="70%">'.$_POST["city"].'</td>
          </tr>
          <tr>
            <td width="30%">State</td>
            <td width="70%">'.$_POST["state"].'</td>
          </tr>
          <tr>
            <td width="30%">Your Street Address</td>
            <td width="70%">'.$_POST["street_add"].'</td>
          </tr>
          <tr>
            <td width="30%">Zip Code</td>
            <td width="70%">'.$_POST["zipcode"].'</td>
          </tr>
          <tr>
            <td width="30%">Your Age</td>
            <td width="70%">'.$_POST["age"].'</td>
          </tr>
          <tr>
            <td width="30%">Occupation</td>
            <td width="70%">'.$_POST["occupation"].'</td>
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

