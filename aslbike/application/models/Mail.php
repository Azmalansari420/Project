<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require APPPATH.'libraries/phpmailer/Exception.php';
require APPPATH.'libraries/phpmailer/PHPMailer.php';
require APPPATH.'libraries/phpmailer/SMTP.php';

class Mail extends CI_Model
{

  public function sendmail($body)
  {
    // die;
    // echo 'gdgd';
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    // $mail->Host = 'liftyfylogistics.com';
    $mail->Host = 'smtp.gmail.com';
     // $mail->Host = 'mail.asrbikemechanicathome.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'Javedali1500ja@gmail.com'; // Your gmail
    $mail->Password = 'wnkbdaamzciwdwie'; // Your gmail app password
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

    $mail->setFrom('Javedali1500ja@gmail.com'); // Your gmail jha se jani he

    $mail->addAddress("Javedali1500ja@gmail.com"); // jha jani he

    $mail->isHTML(true);

    $mail->Subject = $_POST["subject"];
    $mail->Body = $body;

    $mail->send();

    echo
    "
    <script>
    alert('Sent Successfully');
    document.location.href = 'contact';
    </script>
    ";
  }
}
?>


