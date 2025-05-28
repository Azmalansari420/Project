<?php
namespace App\Http\Controllers\APi\User;


use App\Helper\Helpers;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use App\Models\MemberModel;
 
class TeamController extends Controller
{
     protected $arr_values = array(
        'table_name'=>'users',
       );  

        protected $user_id = null;
        public function __construct()
        {
            $authToken = request()->header('Authorization');
            $user = Helpers::decode_token($authToken);
            if ($user) {
                $this->user_id = $user->user_id;
            }
        }

    public function tree(Request $request,$id='')
    {
        $user_id = $this->user_id;
        $id = $user_id;
        $member_id = $request->member_id;

        $responseCode = 200;
        $result['status'] = $responseCode;
        $result['message'] = 'Success';
        $result['action'] = 'return';
        $result['data'] = ["url"=>"",];
        return response()->json($result, $responseCode);
    }

    public function direct(Request $request)
    {
        $member_id = $request->member_id;

        $limit = 12;
        $status = 1;
        $page = $request->page? $request->page : 0;
        $offset = 0;
        $search = '';      
        $order_by = "desc";
        $user_id = $this->user_id;

        $offset = $page * $limit;

        if(!empty($request->search)) $search = $request->search;
        

        if(!empty($member_id))
            $allIds = MemberModel::allDirectIds($member_id);
        else $allIds = [];

        $data_list = DB::table($this->arr_values['table_name'])
        ->whereIn('id',$allIds)
        ->offset($offset)
        ->limit($limit)
        ->orderBy($this->arr_values['table_name'].'.id', $order_by);

        $data_list = $data_list->get();
        $data_list->transform(function ($item) {
            $item->image = Helpers::image_check($item->image,'user.png');
            $item->add_date_time = date("d M, Y", strtotime($item->add_date_time));
            return $item;
        });


        $responseCode = 200;
        $result['status'] = $responseCode;
        $result['message'] = 'Success';
        $result['action'] = 'return';
        $result['data'] = $data_list;
        return response()->json($result, $responseCode);
    }

    public function leftMember(Request $request)
    {
        $member_id = $request->member_id;

        $limit = 12;
        $status = 1;
        $page = $request->page? $request->page : 0;
        $offset = 0;
        $search = '';      
        $order_by = "desc";
        $user_id = $this->user_id;

        $offset = $page * $limit;

        if(!empty($request->search)) $search = $request->search;
        


        $checkId = 0;
        $checkUser = DB::table('users')->where(['parent_id'=>$member_id,"position"=>1])->first();
        if(!empty($checkUser)) $checkId = $checkUser->id;
        $allIds[] = $checkId;
        $getAllChildIds = MemberModel::getAllChildIds($checkId);
        if(!empty($getAllChildIds)) $allIds = $getAllChildIds;


        $data_list = DB::table($this->arr_values['table_name'])
        ->whereIn('id',$allIds)
        ->offset($offset)
        ->limit($limit)
        ->orderBy($this->arr_values['table_name'].'.id', $order_by);

        $data_list = $data_list->get();
        $data_list->transform(function ($item) {
            $item->image = Helpers::image_check($item->image,'user.png');
            return $item;
        });


        $responseCode = 200;
        $result['status'] = $responseCode;
        $result['message'] = 'Success';
        $result['action'] = 'return';
        $result['data'] = $data_list;
        return response()->json($result, $responseCode);
    }
    public function rightMember(Request $request)
    {
        $member_id = $request->member_id;

        $limit = 12;
        $status = 1;
        $page = $request->page? $request->page : 0;
        $offset = 0;
        $search = '';      
        $order_by = "desc";
        $user_id = $this->user_id;

        $offset = $page * $limit;

        if(!empty($request->search)) $search = $request->search;
        


        $checkId = 0;
        $checkUser = DB::table('users')->where(['parent_id'=>$member_id,"position"=>2])->first();
        if(!empty($checkUser)) $checkId = $checkUser->id;
        $allIds[] = $checkId;
        $getAllChildIds = MemberModel::getAllChildIds($checkId);
        if(!empty($getAllChildIds)) $allIds = $getAllChildIds;


        $data_list = DB::table($this->arr_values['table_name'])
        ->whereIn('id',$allIds)
        ->offset($offset)
        ->limit($limit)
        ->orderBy($this->arr_values['table_name'].'.id', $order_by);

        $data_list = $data_list->get();
        $data_list->transform(function ($item) {
            $item->image = Helpers::image_check($item->image,'user.png');
            return $item;
        });


        $responseCode = 200;
        $result['status'] = $responseCode;
        $result['message'] = 'Success';
        $result['action'] = 'return';
        $result['data'] = $data_list;
        return response()->json($result, $responseCode);
    }

}