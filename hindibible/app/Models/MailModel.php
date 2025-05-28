<?php

namespace App\Models;

use App\CPU\Helpers;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

use App\Mail\MyMail;
use Mail;

class MailModel extends Model
{
    const CREATED_AT = 'add_date_time';
    const UPDATED_AT = 'update_date_time';
    protected $table = 'banner_logo';


    public static function testing($details)
    {
        echo $view = View::make($details['view'],compact('details'))->render();
        // MailModel::send_now($details);
        // die;
        $mail = Mail::to($details['to']);
        if(!empty($details['cc'])) $mail->cc([$details['cc']]);
        if(!empty($details['bcc'])) $mail->bcc([$details['bcc']]);
        // $mail->send(new MyMail($details));
    }
    public static function otp($details)
    {
        MailModel::send_now($details);
    }
    public static function login_detail($details)
    {
        MailModel::send_now($details);
    }
    public static function invoice($details)
    {
        // MailModel::send_now($details);
    }
    public static function send_now($details)
    {
        $mail = Mail::to($details['to']);
        if(!empty($details['cc'])) $mail->cc([$details['cc']]);
        if(!empty($details['bcc'])) $mail->bcc([$details['bcc']]);
        $mail->send(new MyMail($details));


        
    }


    
}
