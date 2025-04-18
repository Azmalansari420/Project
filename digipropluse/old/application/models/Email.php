<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require APPPATH.'libraries/phpmailer/Exception.php';
require APPPATH.'libraries/phpmailer/PHPMailer.php';
require APPPATH.'libraries/phpmailer/SMTP.php';

class Email extends CI_Model
{


  /*gmail se*/

  public function sendmail_bygmail($email,$subject,$message,$pdf_filename)
  {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = mailhost;
    $mail->SMTPAuth = true;
    $mail->Username = mailusername; // Your gmail
    $mail->Password = mailpassword; // Your gmail app password
     $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    //$mail->SMTPDebug = 1;
    $mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    ));

    $mail->setFrom(mailsetfrom); // Your gmail jha se jani he
    $mail->addCC(mailaddCC);
    $mail->addBCC(mailaddBCC);
    $mail->addAddress($email); // jha jani he

    $mail->isHTML(true);

    $mail->Subject = $subject;
    $mail->Body = $message;
    // ✅ Use addAttachment() instead of attach()
    if (file_exists($pdf_filename)) {
        $mail->addAttachment($pdf_filename);
    } else {
        return "Error: PDF file not found!";
    }

    if($mail->send())
      return 1;
    else
      return 0;    
  }




/*webmail se*/

public function sendmail_webmail($email,$subject,$message)
  {
    // die;
    // echo 'gdgd';
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = mailhost;
    $mail->SMTPAuth = true;
    $mail->Username = mailusername; // Your gmail
    $mail->Password = mailpassword; // Your gmail app password
     $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    //$mail->SMTPDebug = 1;
    $mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

    $mail->setFrom(mailsetfrom); // Your gmail jha se jani he

    $mail->addAddress($email); // jha jani he
    $mail->addCC(mailaddCC);
    $mail->addBCC(mailaddBCC);
    $mail->isHTML(true);

    $mail->Subject = $subject;
    $mail->Body = $body;

    $mail->send();

    echo
    "
    <script>alert('Sent Successfully');</script>
    ";
  }


/*hostinger se*/

public function sendmail_hostinger($body)
  {
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = mailhost;
    $mail->SMTPAuth = true;
    $mail->Username = mailusername; // Your gmail
    $mail->Password = mailpassword; // Your gmail app password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom(mailsetfrom); // Your gmail

    $mail->addAddress(mailaddaddress);
    $mail->addCC(mailaddCC);
    $mail->addBCC(mailaddBCC);
    $mail->isHTML(true);

    $mail->Subject = "Enquiry";
    $mail->Body = $body;

    $mail->send();
  }



/*admin forget password*/

  public function sendmail_forget_pawd($username,$subject,$message)
  {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = mailhost;
    $mail->SMTPAuth = true;
    $mail->Username = mailusername; // Your gmail
    $mail->Password = mailpassword; // Your gmail app password
     $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    //$mail->SMTPDebug = 1;
    $mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    ));

    $mail->setFrom(mailsetfrom); // Your gmail jha se jani he
    $mail->addAddress($username); // jha jani he
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $message;

    if($mail->send())
      return 1;
    else
      return 0;    
  }




















}