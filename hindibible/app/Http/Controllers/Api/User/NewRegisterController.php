<?php
namespace App\Http\Controllers\APi\User;


use App\Helper\Helpers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use App\Helper\ImageManager;
use App\Models\User;
use App\Models\MemberModel;
 
class NewRegisterController extends Controller
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


    

    public function add(Request $request)
    {
        $data = new User;        

        $user_id = $this->user_id;
        $add_by = $user_id;        

        $email = $request->email;
        $phone = $request->phone;
        $name = $request->name;


        if($request->password!=$request->confirm_password)
        {
            $responseCode = 400;
            $result['status'] = $responseCode;
            $result['message'] = 'Confirm Password Not Match!';
            $result['action'] = 'register';
            $result['data'] = [];
            return response()->json($result, $responseCode);
        }

        

        $data->email = $request->email;
        $data->name = $request->name;
        $data->address = $request->address;
        $data->city = $request->city;
        $data->state = $request->state;
        $data->phone = $request->phone;
        $data->country = $request->country;
        $data->status = 1;
        $data->is_paid = 0;
        $data->user_id = MemberModel::GetUserId()+1;


        $sponser_id = $request->sponser_id;
        $data->placement = $request->placement;
        $data->sponser_id = $sponser_id;
        $sponser = MemberModel::GetSponserData($sponser_id);
        if(empty($sponser))
        {
            $responseCode = 400;
            $result['status'] = $responseCode;
            $result['message'] = 'Wrong Sponser ID.';
            $result['action'] = 'register';
            $result['data'] = [];
            return response()->json($result, $responseCode);
        }
        $data->sponser_name = $sponser->name;
        $data->password = md5($request->password);

        $data->add_by = $add_by;
        $data->is_delete = 0;
        $data->role = 2;
        if($data->save())
        {
            $insert_id = $data->id;
        
            $parent_id = MemberModel::getParentIdForHybridPlan($sponser_id, $request->placement);
            $data->parent_id = $parent_id;
            $data->sponser_id = $sponser_id;
            $data->position = $request->placement;

            $data->save();
            MemberModel::AddMemberLog(['id'=> $insert_id, 'user_id'=>$data->user_id, 'name' => $name, 'sponser_id' => $sponser_id, 'side' => $request->placement,"parent_id"=>$parent_id, ]);
            MemberModel::getTypeAllIncome($insert_id);
            

            $result['modalData'][] = ["key"=>"createAccountName","value"=>$data->name,];
            $result['modalData'][] = ["key"=>"createAccountEmail","value"=>$data->email,];
            $result['modalData'][] = ["key"=>"createAccountPhone","value"=>$data->phone,];
            $result['modalData'][] = ["key"=>"createAccountIDNo","value"=>$data->user_id,];
            $result['modalData'][] = ["key"=>"createAccountPassword","value"=>$request->password,];



            $action = 'return';            
            $responseCode = 200;
            $result['status'] = $responseCode;
            $result['message'] = 'Success';
            $result['action'] = $action;
            $result['data'] = [];
            return response()->json($result, $responseCode);
        }
        else
        {
            $action = 'return';            
            $responseCode = 400;
            $result['status'] = $responseCode;
            $result['message'] = 'Error!';
            $result['action'] = $action;
            $result['data'] = [];
            return response()->json($result, $responseCode);
        }
        
        
    }
    
    


}