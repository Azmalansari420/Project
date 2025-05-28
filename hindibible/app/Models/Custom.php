<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Helper\Helpers;
use Custom_model;

class Custom extends Model
{
    public static function sendEmail($data)
    {
        
        $setting = setting();
        $cc = array();
        $bcc = array();

        $to = explode(",", $data['to']);
        if(!empty($data['cc']))
          $cc = explode(",", $data['cc']);
        if(!empty($data['bcc']))
          $bcc = explode(",", $data['bcc']);


        $subject = $data['subject'];
        $body = $data['body'];
        $mailusername = $setting->mailusername;
        $mailpassword = $setting->mailpassword;
        $mailhost = $setting->mailhost;
        $mail_type = $setting->mail_type;
        if(!empty($data['files']))
          $files = $data['files'];
        else
          $files = array();


        if($mail_type==2)
        {

            /* G mail */
                
                $mail = new PHPMailer(true);
                $mail->isSMTP();
                $mail->Host = $mailhost;
                $mail->SMTPAuth = true;
                $mail->Username = $mailusername; // Your gmail
                $mail->Password = $mailpassword; // Your gmail app password
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
                $mail->setFrom($mailusername); // Your gmail jha se jani he
                foreach ($to as $key => $value) 
                $mail->addAddress($value); 
                foreach ($cc as $key => $value) 
                $mail->addCC($value); 
                foreach ($bcc as $key => $value) 
                $mail->addBCC($value);

                if(!empty($files))
                foreach ($files as $key => $value) 
                  $mail->addAttachment($value); 

                $mail->isHTML(true);
                $mail->Subject = $subject;
                $mail->Body = $body;

            /* G mail end */
        }
        else if($mail_type==3)
        {

            /* hostinger */

              $mail = new PHPMailer(true);
              $mail->isSMTP();
              $mail->Host = $mailhost;
              $mail->SMTPAuth = true;
              $mail->Username = $mailusername; // Your gmail
              $mail->Password = $mailpassword; // Your gmail app password
              $mail->SMTPSecure = 'tls';
              $mail->Port = 587;
              $mail->setFrom($mailusername); // Your gmail
              foreach ($to as $key => $value) 
              $mail->addAddress($value); 
              foreach ($cc as $key => $value) 
              $mail->addCC($value); 
              foreach ($bcc as $key => $value) 
              $mail->addBCC($value); 

              if(!empty($files))
                foreach ($files as $key => $value) 
                  $mail->addAttachment($value);

              $mail->isHTML(true);
              $mail->Subject = $subject;
              $mail->Body = $body;
              $mail->send();

            /* hostinger end */
        }
        else if($mail_type==1)
        {

            /* webmail */

              $mail = new PHPMailer(true);
              $mail->isSMTP();
              $mail->Host = $mailhost;
              $mail->SMTPAuth = true;
              $mail->Username = $mailusername; // Your gmail
              $mail->Password = $mailpassword; // Your gmail app password
               $mail->SMTPSecure = 'ssl';
              $mail->Port = 465;
              $mail->SMTPOptions = array(
                  'ssl' => array(
                      'verify_peer' => false,
                      'verify_peer_name' => false,
                      'allow_self_signed' => true
                  )
              );
              $mail->setFrom($mailusername); // Your gmail jha se jani he
              foreach ($to as $key => $value) 
              $mail->addAddress($value); 
              foreach ($cc as $key => $value) 
              $mail->addCC($value); 
              foreach ($bcc as $key => $value) 
              $mail->addBCC($value); 

              if(!empty($files))
                  foreach ($files as $key => $value) 
                    $mail->addAttachment($value);

              $mail->isHTML(true);
              $mail->Subject = $subject;
              $mail->Body = $body;

            /* webmail end */
          }





      if($mail->Send())
      {
          return 1;
      }
      else
      {
          return 0;
      }
    }

    public static function get_user()
    {
      $session = Session::get('admin');
      $user_id = $session['id'];
      return DB::table("users")->first();
    }


    public static function insert_user_package($user_id,$package_id,$type='')
    {
        $type2 = 0;
        $orders = DB::table('orders')->where("user_id",$user_id)
        ->orderBy('id','desc')
        ->first();
        $package = DB::table("package")->where("id",$package_id)->first();
        if(empty($type)) $type = 3;
        if($type==4) 
        {
          $type = 3;
          $type2 = 4;
        }

        DB::table("user_package")->insert([
          "user_id"=>$user_id,
          "transaction_id"=>$orders->transaction_id,
          "type"=>$type,
          "amount"=>$package->sale_price,
          "tds"=>0,
          "gst"=>0,
          "final_amount"=>$package->sale_price,
          "package_name"=>$package->name,
          "package_id"=>$package_id,
          "currency"=>'INR',
          "date_time"=>date("Y-m-d H:i:s"),
          "status"=>1,
        ]);
        DB::table("users")->where('id',$user_id)->update(["package"=>$package_id,"package_name"=>$package->name,]);

        $check_user_package = DB::table('user_package')->where("user_id",$user_id)->where("transaction_id",$orders->transaction_id)
        ->orderBy('id','desc')
        ->get();
        if($type2!=4)
        {
          if(count($check_user_package)>1)
          {
            $check_user_package = $check_user_package[0];
            DB::table('user_package')->where("id",$check_user_package->id)->delete();
          }
        }
    }

    
    

}

    

