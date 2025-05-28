<?php
namespace App\Http\Controllers\APi\User;
use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

use App\Helper\Helpers;
use App\Models\MemberModel;

class HomeController extends Controller
{
    protected $user_id = null;
    public function __construct()
    {
        $authToken = request()->header('Authorization');
        $user = Helpers::decode_token($authToken);
        if ($user) {
            $this->user_id = $user->user_id;
        }
    }

    
    public function detail(Request $request)
    {
        $user_id = $this->user_id;
        

        $user = DB::table("users")->where(["id"=>$user_id,])->first();
        $wallet = DB::table("wallet")->where(["user_id"=>$user_id,])->first();
        
        $incomes = [
            "all_time_income"=>Helpers::price_formate(MemberModel::all_time_income($user->id)),
            "today_income"=>Helpers::price_formate(MemberModel::today_income($user->id)),
            "income1"=>Helpers::price_formate($wallet->income1),
            "income2"=>Helpers::price_formate($wallet->income2),
            "income3"=>Helpers::price_formate($wallet->income3),
            "income4"=>Helpers::price_formate($wallet->income4),
            "income5"=>Helpers::price_formate($wallet->income5),
        ];



        $rankList[] = ["id"=>1,"title"=>"Sr. Executive","target"=>"2 ID : 1 ID","price"=>'500',"status"=>$user->rank>=1 ? 1:0,];
        $rankList[] = ["id"=>2,"title"=>"Star Executive","target"=>"2 Sr. Ex. : 1 Sr. Ex.","price"=>'1500',"status"=>$user->rank>=2 ? 1:0,];
        $rankList[] = ["id"=>3,"title"=>"Super Star Executive","target"=>"2 Star Ex. : 1 Star Ex.","price"=>'2500',"status"=>$user->rank>=3 ? 1:0,];
        $rankList[] = ["id"=>4,"title"=>"Silver Executive","target"=>"2 Super Satr Ex. : 1 Super Satr Ex.","price"=>'10,000',"status"=>$user->rank>=4 ? 1:0,];
        $rankList[] = ["id"=>5,"title"=>"Gold Executive","target"=>"3 Silver Ex. : 2 Silver Ex.","price"=>'50,000',"status"=>$user->rank>=5 ? 1:0,];
        $rankList[] = ["id"=>6,"title"=>"Super Gold Executive","target"=>"3 Gold Ex. : 2 Gold Ex.","price"=>'2,50,000',"status"=>$user->rank>=6 ? 1:0,];
        $rankList[] = ["id"=>7,"title"=>"Daimond Executive","target"=>"3 Super Gold Ex. : 2 Super Gold Ex.","price"=>'10,00,000,00',"status"=>$user->rank>=7 ? 1:0,];
        $rankList[] = ["id"=>8,"title"=>"Super Daimond Executive","target"=>"3 Daimond Ex. : 2 Daimond Ex.","price"=>'50,00,000',"status"=>$user->rank>=8 ? 1:0,];
        $rankList[] = ["id"=>9,"title"=>"Saphire Daimond Executive","target"=>"1 Super Daimond Ex. : 1 Super Daimond","price"=>'1,00,000,00',"status"=>$user->rank>=9 ? 1:0,];
        $rankList[] = ["id"=>10,"title"=>"Crown Daimond Executive","target"=>"1 Saphire Daimond Ex. : 1 Saphire Daimond Ex.","price"=>'2,50,000,00',"status"=>$user->rank>=10 ? 1:0,];



        $user->direct_paid = MemberModel::totalDirect($user->id,1);
        $user->direct_unpaid = MemberModel::totalDirect($user->id,2);

        if($user->is_paid==1) $user->activate_date_time = date("d M, Y");
        else $user->activate_date_time = 'Not Active';

        $data['user'] = $user;
        $data['incomes'] = $incomes;
        $data['rankList'] = $rankList;
        $data['leftJoinLink'] = url('/registration?sponser_id='.$user->user_id.'&side=left');
        $data['rightJoinLink'] = url('/registration?sponser_id='.$user->user_id.'&side=right');

        $rankString = '';
        if($user->rank<1) $rankString = 'Not upgrade';
        else $rankString = MemberModel::rank($user->rank);
        $data['activeRank'] = $rankString;
        $data['activePackage'] = @MemberModel::active_package($user->id)->package_name;
        

        
        $responseCode = 200;
        $result['status'] = $responseCode;
        $result['message'] = 'Success';
        $result['action'] = 'return';
        $result['data'] = $data;

        return response()->json($result, $responseCode);
    }
    
}