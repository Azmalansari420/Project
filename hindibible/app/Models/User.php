<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\Setting;
use App\Models\MemberModel;
use App\Models\Package;
use App\Models\Payumoney;
use App\Models\Phonepe;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    const CREATED_AT = 'add_date_time';
    const UPDATED_AT = 'update_date_time';
    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public function mlmTree()
    {
        return $this->hasOne(MLMTree::class);
    }

    public function parent()
    {
        return $this->mlmTree->belongsTo(MLMTree::class, 'parent_id');
    }

    public function children()
    {
        return $this->mlmTree->hasMany(MLMTree::class, 'parent_id');
    }





    public static function all_packages($user_id)
    {
        return DB::table("user_package")->orderBy("id","desc")->where(["user_id"=>$user_id,])->get();
    }
    
    public static function day_wise_income($user_id,$dates)
    {
        return DB::table("user_package")->limit(1)->orderBy("id","desc")->where(["user_id"=>$user_id,])->first();
    }

    public static function today_earning($user_id)
    {
        $today = date("Y-m-d");
        $today_earning_data = DB::table("day_wise_income")->where(["user_id"=>$user_id,"date"=>$today,])->first();
        if(!empty($today_earning_data->income)) $amount = $today_earning_data->income;
        else $amount = 0;
        return $amount;
    }
    public static function day_7_earning($user_id)
    {
        $today = date("Y-m-d");
        $date_7 = date('Y-m-d', strtotime($today ." -7 day"));
        $day_7_earning_data = DB::table("day_wise_income")
        ->select(DB::raw('SUM(income) as income'))
        ->whereBetween('date', [$date_7, $today])
        ->where(["user_id"=>$user_id,])
        ->first();
        if(!empty($day_7_earning_data->income)) $amount = $day_7_earning_data->income;
        else $amount = 0;
        return $amount;
    }
    public static function day_30_earning($user_id)
    {
        $today = date("Y-m-d");
        $date_30 = date('Y-m-d', strtotime($today ." -30 day"));
        $day_30_earning_data = DB::table("day_wise_income")
        ->select(DB::raw('SUM(income) as income'))
        ->whereBetween('date', [$date_30, $today])
        ->where(["user_id"=>$user_id,])
        ->first();
        if(!empty($day_30_earning_data->income)) $amount = $day_30_earning_data->income;
        else $amount = 0;
        return $amount;
    }
    public static function all_time_earning($user_id)
    {


        $today = date("Y-m-d");
        $date_30 = date('Y-m-d', strtotime($today ." -30 day"));
        $day_30_earning_data = DB::table("year_wise_income")
        ->select(DB::raw('SUM(income) as income'))
        // ->whereBetween('date', [$date_30, $today])
        ->where(["user_id"=>$user_id,])
        ->first();
        if(!empty($day_30_earning_data->income)) $amount = $day_30_earning_data->income;
        else $amount = 0;
        return $amount;

        // $all_time_earning_data = DB::table("users")->select("all_time_earning")->where(["id"=>$user_id,])->first();
        // if(!empty($all_time_earning_data->all_time_earning)) $amount = $all_time_earning_data->all_time_earning;
        // else $amount = 0;
        // return $amount;        
    }

    

    public static function check_pending_payments($user_id)
    {
        $insert_id = $user_id;
        $user = DB::table('users')->where('id',$insert_id)->first();
        if($user->is_paid==0)
        {
            $orders = DB::table('orders')->where('user_id',$user_id)
            ->where('status',0)
            ->get();
            foreach ($orders as $key => $value)
            {
                if($value->payment_by=='phonepe')
                {
                    $payment_status = Phonepe::payment_status($value->transaction_id);
                    if(!empty($payment_status->success))
                    {
                        if($payment_status->success)
                        {
                            if($payment_status->code=='PAYMENT_SUCCESS')
                            {
                                MemberModel::update_order($value->user_id,1);
                                Package::package_sale_count($value->product_id);
                                MemberModel::direct_income($insert_id,'');
                                MemberModel::team_income($insert_id,'');
                                MemberModel::update_affiliate_id($value->user_id);
                                MemberModel::check_double_income($insert_id);
                                MemberModel::income_mails($insert_id);                                
                            }
                        }
                    }
                }
                else if($value->payment_by=='payumoney')
                {
                    $transaction_id = $value->transaction_id;
                    $payment_status = Payumoney::payment_status($value->transaction_id);
                    if(!empty($payment_status->status) && !empty($payment_status->transaction_details->$transaction_id))
                    {
                        if(!empty($payment_status->transaction_details) && $payment_status->transaction_details->$transaction_id->status=='success')
                        {
                            MemberModel::update_order($value->user_id,1);
                            Package::package_sale_count($value->product_id);
                            MemberModel::direct_income($insert_id,'');
                            MemberModel::team_income($insert_id,'');
                            MemberModel::update_affiliate_id($value->user_id);
                            MemberModel::check_double_income($insert_id);
                            MemberModel::income_mails($insert_id);
                        }
                    }
                }
            }
        }
    }

    public static function get_user_course($user_id='')
    {
        $session = Session::get('user');
        $id = $session['id'];
        $active_package = User::active_package($id);
        $package_id = $active_package->package_id;
        $package_category = DB::table('package_category')->where('package_id',$package_id)->get();
        $category_ids = [];
        foreach ($package_category as $key => $value)
        {
            $category_ids[] = $value->category_id;
        }
        return $category = DB::table('course_category')->whereIn('id',$category_ids)->get();
    }
    public static function create_certificate($user_id,$certificate_id)
    {
        $user = DB::table('users')->select('name')->where(['id'=>$user_id,])->first();
        $certificate = DB::table('certificate')->where(['user_id'=>$user_id,'id'=>$certificate_id,])->first();
        $category = DB::table('course_category')->where(['id'=>$certificate->category_id,])->first();

        $return_name = str_replace(" ","-" ,$user->name).'-'.str_replace(' ','-',$category->name).'.jpg';
        $outputPath = base_path('/certificate/').$return_name;

        $imgPath = base_path('/certificate/').'certificate.jpg';
        $fontRelativePath = base_path('/certificate/fonts/').'Arial_Bold.ttf';
        $fontSize = 40;
        $angle = 0;
        $image = imagecreatefromjpeg($imgPath);
        $textColor = imagecolorallocate($image, 255, 255, 255);
        $image = imagecreatefromjpeg($imgPath);
        if (!$image) {
            die('Failed to load image.');
        }        
        $fontPath = realpath($fontRelativePath);
        if (!$fontPath) {
            die('Invalid font path: ' . $fontRelativePath);
        }        
        if (!file_exists($fontPath)) {
            die('Font file does not exist: ' . $fontPath);
        }       

        $text = strtoupper($user->name);

        
        $imageWidth = imagesx($image);
        $imageHeight = imagesy($image);

        
        $textBox = imagettfbbox($fontSize, $angle, $fontPath, $text);
        $textWidth = abs($textBox[4] - $textBox[0]);
        $textHeight = abs($textBox[5] - $textBox[1]);
        $x = ($imageWidth - $textWidth) / 2;
        $y = 730;
        imagettftext($image, $fontSize, $angle, $x, $y, $textColor, $fontPath, $text);



        $text = strtoupper($category->name);

        $textBox = imagettfbbox($fontSize, $angle, $fontPath, $text);
        $textWidth = abs($textBox[4] - $textBox[0]);
        $textHeight = abs($textBox[5] - $textBox[1]);
        $x = ($imageWidth - $textWidth) / 2;
        $y = 990;
        imagettftext($image, $fontSize, $angle, $x, $y, $textColor, $fontPath, $text);



        imagejpeg($image, $outputPath);
        imagedestroy($image);
        return $return_name;        
    }
    
    

}
