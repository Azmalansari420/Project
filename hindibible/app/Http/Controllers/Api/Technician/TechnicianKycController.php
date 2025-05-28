<?php
namespace App\Http\Controllers\APi\Technician;


use App\Helper\Helpers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use App\Helper\ImageManager;
use App\Models\Kyc;
use App\Models\User;
use App\Models\MailModel;
 
class TechnicianKycController extends Controller
{
     protected $arr_values = array(
        'table_name'=>'kyc',
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

    public function kycDetail(Request $request)
    {
        $user_id = $this->user_id;

        $kyc = DB::table("kyc")->where(["user_id"=>$user_id,])->orderBy('id','desc')->first();
        $user = DB::table("users")->where(["id"=>$user_id,])->orderBy('id','desc')->first();
        if(!empty($kyc))
        {
            
            $kyc->aadharfront = [["uri"=>url('storage/app/public/upload/'.$kyc->aadharfront),]];
            $kyc->aadharback = [["uri"=>url('storage/app/public/upload/'.$kyc->aadharback),]];
            $kyc->pancrad = [["uri"=>url('storage/app/public/upload/'.$kyc->pancrad),]];
            $kyc->bankpassbook = [["uri"=>url('storage/app/public/upload/'.$kyc->bankpassbook),]];

            $responseCode = 200;
            $result['status'] = $responseCode;
            $result['message'] = 'Success';
            $result['action'] = 'return';
            $result['action'] = 'return';
            $result['kycStatus'] = $user->kyc_step;
            $result['data'] = $kyc;
            return response()->json($result, $responseCode);
        }
        else
        {
            $responseCode = 200;
            $result['status'] = $responseCode;
            $result['message'] = 'Not Found';
            $result['action'] = 'return';
            $result['action'] = 'return';
            $result['data'] = [];
            return response()->json($result, $responseCode);
        }
    }
  
  

    public function kycAdd(Request $request)
    {
        $user_id = $this->user_id;        
        $data = new Kyc;
        $add_by = $user_id;        


        $lastKyc = DB::table('kyc')->where(["user_id"=>$user_id,])->orderBy('id','desc')->first();
        $user = DB::table('users')->where(["id"=>$user_id,])->orderBy('id','desc')->first();


        $aadharfront = $request->aadharfront;
        $aadharback = $request->aadharback;
        $pancrad = $request->pancrad;
        $bankpassbook = $request->bankpassbook;
        
        $data->user_id = $user_id;
        $data->bank_holder_name = $request->bank_holder_name;
        $data->bank_name = $request->bank_name;
        $data->account_number = $request->account_number;
        $data->account_type = $request->account_type;
        $data->ifsc = $request->ifsc;
        $data->pan = $request->pan;
        $data->rg_mobile = $request->rg_mobile;
        $data->rg_email = $request->rg_email;
        $data->address = $request->address;
        $data->status = 0;            
        


        // if($user->name!=$request->bank_holder_name)
        // {
        //     $responseCode = 400;
        //     $result['status'] = $responseCode;
        //     $result['message'] = 'Your Kyc Name and Profile Name Not Match!';
        //     $result['action'] = 'reload';
        //     $result['data'] = [];
        //     return response()->json($result, $responseCode);
        // }
        

        if($user->kyc_step==2)
        {
            $responseCode = 400;
            $result['status'] = $responseCode;
            $result['message'] = 'Your Kyc Is Under Review';
            $result['action'] = 'reload';
            $result['data'] = [];
            return response()->json($result, $responseCode);
        }


        if(!empty($aadharfront))
        {
            foreach ($aadharfront as $key => $value)
            {
                $data->aadharfront = ImageManager::uploadAPiImage('upload','jpg',$value['string']);
            }            
        }
        else
        {
            if(!empty($lastKyc))
            {
                $data->aadharfront = $lastKyc->aadharfront;
            }
        }


        if(!empty($aadharback))
        {
            foreach ($aadharback as $key => $value)
            {
                $data->aadharback = ImageManager::uploadAPiImage('upload','jpg',$value['string']);
            }            
        }
        else
        {
            if(!empty($lastKyc))
            {
                $data->aadharback = $lastKyc->aadharback;
            }
        }


        if(!empty($pancrad))
        {
            foreach ($pancrad as $key => $value)
            {
                $data->pancrad = ImageManager::uploadAPiImage('upload','jpg',$value['string']);
            }            
        }
        else
        {
            if(!empty($lastKyc))
            {
                $data->pancrad = $lastKyc->pancrad;
            }
        }


        if(!empty($bankpassbook))
        {
            foreach ($bankpassbook as $key => $value)
            {
                $data->bankpassbook = ImageManager::uploadAPiImage('upload','jpg',$value['string']);
            }            
        }
        else
        {
            if(!empty($lastKyc))
            {
                $data->bankpassbook = $lastKyc->bankpassbook;
            }
        }
        

       
        
      
        
        

        
        if($data->save())
        {
            DB::table('users')->where('id',$user_id)->update(["kyc_step"=>2,]);

            $responseCode = 200;
            $result['status'] = $responseCode;
            $result['message'] = 'Success';
            $result['action'] = 'reload';
            $result['action'] = 'edit';
            $result['data'] = [];
            return response()->json($result, $responseCode);
        }

    }

   







 

}