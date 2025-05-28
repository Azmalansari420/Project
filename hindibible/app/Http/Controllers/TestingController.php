<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use App\Models\MemberModel;
use App\Models\MailModel;
use App\Models\Package;
use App\Models\Payumoney;



// use Illuminate\Http\Request;
// use Brevo\Client\Api\TransactionalEmailsApi;
// use Brevo\Client\Model\SendSmtpEmail;


use FFMpeg\FFMpeg;
use FFMpeg\Format\Video\X264;
use FFMpeg\Format\Video\WebM;



class TestingController extends Controller
{
    
   

    public function test_package(Request $request)
    {


        $tree_view = MemberModel::tree_view(66825);
        print_r(json_encode($tree_view));
        

        die;


        // $email = "sharukhkhanektamek1998@gmail.com";
        // $admin_registration_email = "sharukhkhanektamek1998@gmail.com";
        // $password = '123456';
        // $name = 'Shahrukh';

        // $user_id = 6;
        // $transaction = DB::table("transaction")->where(["user_id"=>$user_id,"status"=>1,])->orderBy('id','desc')->first();
        // $user = DB::table("users")->where(["id"=>$user_id,])->first();

        
        // $details = [
        //     'to'=>$email,
        //     'cc'=>$admin_registration_email,
        //     'view'=>'mailtemplate.invoice',
        //     'subject'=>'Welcome to Knowledge Wave India!',
        //     'body' => ["detail"=>json_decode($transaction->detail),"user"=>$user,"transaction"=>$transaction,],
        // ];
        // MailModel::testing($details);



        $users = DB::table('users')->where("is_paid",0)->limit(5000)->get();
        $package = DB::table('package')->where('id',193132)->first();
        foreach ($users as $key => $value)
        {
            DB::table('users')->where('id',$value->id)->update(["package"=>$package->id,"package_name"=>$package->name,]);
            $detail = [];
            $detail[] = ["name"=>$package->name,"qty"=>1,"amount"=>$package->sale_price,];
            $transactionData = [
                "user_id"=>$value->id,
                "amount"=>$package->sale_price,
                "type"=>1,
                "detail"=>$detail,
            ];
            MemberModel::createTransaction($transactionData);
            MemberModel::activeId($value->id);
        }


        // $now_pairs = 0;
        // $pairs = 51;
        // $pending_pairs = 1;
        // $pairs = $pairs+$pending_pairs;

        // // echo $pairs;
        // if($pairs>50)
        // {
        //     $pending_pairs = $pairs-50;
        //     $now_pairs = $pairs-$pending_pairs;
        // }
        // else
        // {
        //     $pending_pairs = 0;
        //     $now_pairs = $pairs;
        // }

        

        // echo $now_pairs;


        die;

        // $users = DB::table('users')->limit(5000)->get();
        // foreach ($users as $key => $value)
        // {
        //     $package = DB::table('package')->where('id',$value->package)->first();
        //     $detail = [];
        //     $detail[] = ["name"=>$package->name,"qty"=>1,"amount"=>$package->sale_price,];
        //     $transactionData = [
        //         "user_id"=>$value->id,
        //         "amount"=>$package->sale_price,
        //         "type"=>1,
        //         "detail"=>$detail,
        //     ];
        //     MemberModel::createTransaction($transactionData);
        // }


        // MemberModel::get_rank_data(6);
        // MemberModel::calculatePairsForSponsor(6);
        // MemberModel::set_pairs_data(6);
        // MemberModel::generate_incomes();
        // MemberModel::direct_income(6);
        // MemberModel::pair_income(6);
        // MemberModel::downline_income(6,'',2000);
        // MemberModel::upline_income(6,'',400);

        // $getParentIdForHybridPlanAll = MemberModel::getAllChildIds(6);
        // print_r($getParentIdForHybridPlanAll);
        // $calculatePairsForSponsor = MemberModel::calculatePairsForSponsor(6);
        // print_r($calculatePairsForSponsor);

        die;
        $user = DB::table('users')
        // ->limit(10)
        ->where('activate_date_time',NULL)
        ->where('is_paid',1)->get();


        // print_r($user);
        die;
        foreach ($user as $key => $value)
        {
            $order = DB::table('orders')
            ->where('user_id',$value->id)
            ->where('order_type',1)
            ->where('status',1)
            ->first();

            if(!empty($order))
            {
                DB::table('users')->where('id',$order->user_id)->update(['activate_date_time'=>$order->payment_date_time,]);
                // print_r($order->payment_date_time);
            }

        }


        // print_r($user);
        die;



        // $course_category = DB::table("course_category")->get();
        // foreach ($course_category as $key2 => $value2)
        // {
        //     
        // }




        // $folder = storage_path("app/public/upload"); // Path to your videos folder
        // $movepath = storage_path("app/public/upload/"); // Path to your videos folder
        // // $files = glob("$folder/*.{jpg,jpeg,png,gif}", GLOB_BRACE);
        // $files = glob("$folder/"."2024-07-13-669191f62aa35.png", GLOB_BRACE);
        // print_r($files);
        // // die;
        // foreach ($files as $key => $value)
        // {
        //         $name = explode("/",$source)[10];
        //         $name_ep = explode(".",$name);
        //         $db_name = $name_ep[0].'.webp';
        //         // copy($source, $movepath.$name);
        //         $source = $value;
        //         $info = getimagesize($source);
        //         if(!empty($info[2]))
        //         {
        //             $imageType = $info[2];
        //             if ($imageType == IMAGETYPE_JPEG) {
        //                 $pngimg = imagecreatefromjpeg($source);
        //             } elseif ($imageType == IMAGETYPE_PNG) {
        //                 $pngimg = imagecreatefrompng($source);
        //             } 
        //         }                    
        //         if(!empty($pngimg))
        //         {
        //             $file = $source;
        //             $w = imagesx($pngimg);
        //             $h = imagesy($pngimg);;
        //             $im = imagecreatetruecolor ($w, $h);
        //             imageAlphaBlending($im, false);
        //             imageSaveAlpha($im, true);
        //             $trans = imagecolorallocatealpha($im, 0, 0, 0, 127);
        //             imagefilledrectangle($im, 0, 0, $w - 1, $h - 1, $trans);
        //             imagecopy($im, $pngimg, 0, 0, 0, 0, $w, $h);
        //             imagewebp($im, str_replace('png', 'webp', $file));
        //             imagedestroy($im); 
        //             // print_r($value2);
        //             // DB::table("course_category")->where('id',$value2->id)->update(["image"=>$db_name,]);
        //             // unlink($source);
        //         }
        // }






        // die;
        // foreach ($files as $file) {
        //     $outputPath = str_replace('.mov', '_compressed.mp4', $file);

        //     $inputPath = $file;
        //     $outputPath = base_path('video1/output.mp4');
        //     // $outputPath = base_path('video1');
        //     $ffmpeg = FFMpeg::create([
        //         'ffmpeg.binaries'  => '/home/your_username/bin/ffmpeg',  // Adjust the path to your ffmpeg binary
        //         'ffprobe.binaries' => '/home/your_username/bin/ffprobe', // Adjust the path to your ffprobe binary
        //         'timeout'          => 3600, // The timeout for the underlying process
        //         'ffmpeg.threads'   => 12,   // The number of threads that FFMpeg should use
        //     ]);

        //     $video = $ffmpeg->open($inputPath);
        //     $video->filters()->resize(new \FFMpeg\Coordinate\Dimension(640, 480))->synchronize();
        //     $video->save(new \FFMpeg\Format\Video\X264('aac', 'libx264'), $outputPath);

        //     return $outputPath;
        // }




        // $insert_id = 39625;


        // $user = DB::table('report')->where('type',1)->where("add_date_time",">=","2024-07-22 00:00:00")->get();
        // foreach ($user as $key => $value)
        // {
        //     MemberModel::check_double_income($value->user_id);
        // }



        // $insert_id = 39600;
        // MemberModel::direct_income($insert_id);
        // MemberModel::team_income($insert_id);


        // $affiliate_id = 6;
        // $amount = 50;
        // $user = DB::table('users')->where('affiliate_id',$affiliate_id)->first();
        // $user_id= $user->id;

        // print_r($user->all_time_earning);

        // DB::table("users")->where('affiliate_id',$affiliate_id)->update(["all_time_earning"=>$user->all_time_earning-$amount,]);


        // $day_wise_income = DB::table("day_wise_income")->where(["user_id"=>$user_id,"date"=>"2024-07-22",])->first();
        // DB::table("day_wise_income")->where('user_id',$user_id)->update(["income"=>$day_wise_income->income-$amount,]);




        // $orders = DB::table("orders")
        // ->select('user_id')
        // ->where("status",1)
        // ->where("payment_date_time",'>=',"2024-07-21 00:00:00")
        // ->get();

        // print_r($orders);

        // foreach ($orders as $key => $value)
        // {
        //     $report = DB::table("report")
        //     ->where("user_id",$value->user_id)
        //     ->get();
        //     print_r($report);   
        // }





        // $insert_id = 39572;
        // MemberModel::direct_income($insert_id);
        // MemberModel::team_income($insert_id);
        // $insert_id = 24463;
        // $sponser_id = 24455;
        // MemberModel::direct_income($insert_id);
        // MemberModel::team_income($insert_id);
        // Package::package_upgrade_count(193128);
    }
    public function welcome_mail()
    {





        // $curl = curl_init();

        // curl_setopt_array($curl, array(
        // CURLOPT_URL => 'https://api.brevo.com/v3//smtp/email',
        // CURLOPT_RETURNTRANSFER => true,
        // CURLOPT_ENCODING => '',
        // CURLOPT_MAXREDIRS => 10,
        // CURLOPT_TIMEOUT => 0,
        // CURLOPT_FOLLOWLOCATION => true,
        // CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        // CURLOPT_CUSTOMREQUEST => 'POST',
        // CURLOPT_POSTFIELDS =>'{
        //     "sender": {
        //         "name": "Mary from MyShop",
        //         "email": "vikalharsh86@gmail.com"
        //     },
        //     "to": [
        //         {
        //             "email": "sharukhkhanektamek1998@gmail.com",
        //             "name": "Jimmy"
        //         }
        //     ],
        //     "bcc": [
        //         {
        //             "email": "shahrukh.codediffusion@gmail.com",
        //             "name": "Helen"
        //         }
        //     ],
        //     "cc": [
        //         {
        //             "email": "shahrukh.codediffusion@gmail.com",
        //             "name": "Ann"
        //         }
        //     ],
        //     "htmlContent": "<!DOCTYPE html> <html> <body> <h1>This is sample HTML</h1> </html>",
        //     "subject": "Login Email confirmation sdsd",
        //     "replyTo": {
        //         "email": "shahrukh.codediffusion@gmail.com",
        //         "name": "Ann"
        //     },
        //     "tags": [
        //         "tag1",
        //         "tag2"
        //     ]
        // }',
        //   CURLOPT_HTTPHEADER => array(
        //     'Content-Type: application/json',
        //     'Accept: application/json',
        //     'API-key: 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'
        //   ),
        // ));

        // $response = curl_exec($curl);

        // curl_close($curl);
        // echo $response;









        

        // $email = new SendSmtpEmail([
        //     'to' => [
        //         ['email' => 'sharukhkhanektamek1998@gmail.com', 'name' => 'Recipient Name']
        //     ],
        //     'sender' => ['email' => 'knowledgewaveindia@gmail.com', 'name' => 'Sender Name'],
        //     'subject' => 'Test Email from Brevo',
        //     'htmlContent' => '<h1>This is a test email</h1><p>Sent using Brevo.</p>'
        // ]);

        // try {
        //     $result = $this->brevo->sendTransacEmail($email);
        //     return response()->json(['message' => 'Email sent successfully', 'result' => $result], 200);
        // } catch (\Exception $e) {
        //     return response()->json(['message' => 'Failed to send email', 'error' => $e->getMessage()], 500);
        // }





        $details = [
                // 'to'=>'knowledgewaveindia@gmail.com',
                'to'=>'sharukhkhanektamek1998@gmail.com',
                // 'bcc'=>'sharukhkhanektamek1998@gmail.com',
                // 'cc'=>'sharukhkhanektamek1998@gmail.com',
                // 'view'=>'mailtemplate.income',
                // 'view'=>'mailtemplate.welcome-test',
                // 'view'=>'mailtemplate.income',
                'view'=>'mailtemplate.welcome-purchase',
                // 'view'=>'mailtemplate.income-seven-day',
                // 'view'=>'mailtemplate.invoice',
                'subject'=>'Welcome Testing!',
                'body' => ["email"=>"test@gmail.com","password"=>"2asfsafs","name"=>"Shahrukh","amount"=>00,
                            "sponser_id"=>"fasfasfsa",
                            "sponser_name"=>"sfaasfsa",
                            "customer_name"=>"fasfsa",
                          ],
            ];
            // MailModel::testing($details);
            // MailModel::welcome_purchase($details);
            // MailModel::registration($details);
            // MailModel::income($details);
            // MailModel::seven_day_mails($details);
    }
    public function income_mail()
    {
        $details = [
                'to'=>'sharukhkhanektamek1998@gmail.com',
                // 'cc'=>'sharukhkhanektamek1998@gmail.com',
                // 'view'=>'mailtemplate.income',
                'view'=>'mailtemplate.income-seven-day',
                'subject'=>'Congrats on Your Earnings!',
                'body' => ["email"=>"test@gmail.com","password"=>"2asfsafs","name"=>"Shahrukh","amount"=>00,
                            "sponser_id"=>"fasfasfsa",
                            "sponser_name"=>"sfaasfsa",
                            "customer_name"=>"fasfsa",
                          ],
            ];
            // MailModel::registration($details);
            // MailModel::income($details);
            MailModel::seven_day_mails($details);
    }
    public function send_income_mails()
    {
        $user_id = 24482;
        MemberModel::income_mails($user_id);
    }
    public function test_team_ids()
    {
        // $ids = MemberModel::get_child_ids(6);
        $get_parent_ids = MemberModel::get_parent_ids(38776);
        print_r($get_parent_ids);
    }
    public static function encription_test()
    {
        $sponser_id = (string) 'KWi4499';
        $sponser_id = explode(sort_name,strtoupper($sponser_id));
        if(!empty($sponser_id[1])) $sponser_id = $sponser_id[1];
        else $sponser_id = 0;

        $sponser_id = (int) $sponser_id;

        echo $sponser_id;
    }

}















