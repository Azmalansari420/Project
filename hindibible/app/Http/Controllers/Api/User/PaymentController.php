<?php
namespace App\Http\Controllers\APi\Sales;
use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

use App\Helper\Helpers;
use App\Helper\ImageManager;

class PaymentController extends Controller
{
    protected $arr_values = array(
        'table_name'=>'employee_payment',
    ); 

    protected $employee_id = null;

    public function __construct()
    {
        $authToken = request()->header('Authorization');
        $user = Helpers::decode_token($authToken);
        if ($user) {
            $this->employee_id = $user->user_id;
        }
    }

    public function load_data(Request $request)
    {
        $limit = 12;
        $status = 1;
        $search = '';      
        $order_by = "desc";
        $employee_id = $this->employee_id;

        if(!empty($request->search)) $search = $request->search;
        
        $data_list = DB::table($this->arr_values['table_name'])
        ->orderBy($this->arr_values['table_name'].'.id', $order_by)
        ->leftJoin("employee_more_payment as payments", "payments.employee_payment_id", "=", $this->arr_values['table_name'].".id")
        ->select(
            $this->arr_values['table_name'].".id",
            $this->arr_values['table_name'].".name",
            $this->arr_values['table_name'].".email",
            $this->arr_values['table_name'].".mobile",
            $this->arr_values['table_name'].".package_id",
            $this->arr_values['table_name'].".total_amount",
            $this->arr_values['table_name'].".add_date_time",
            $this->arr_values['table_name'].".status",
            \DB::raw("COALESCE(SUM(payments.amount), 0) as paid_amount"),
            \DB::raw($this->arr_values['table_name'].".total_amount - COALESCE(SUM(payments.amount), 0) as pending_amount")
        )
        ->groupBy(
            $this->arr_values['table_name'].".id",
            $this->arr_values['table_name'].".name",
            $this->arr_values['table_name'].".email",
            $this->arr_values['table_name'].".mobile",
            $this->arr_values['table_name'].".package_id",
            $this->arr_values['table_name'].".total_amount",
            $this->arr_values['table_name'].".add_date_time",
            $this->arr_values['table_name'].".status"
        );


        if(!empty($search))
        {
            $data_list = $data_list->where('name','LIKE',"%{$search}%");
            $data_list = $data_list->orWhere('email','LIKE',"%{$search}%");
            $data_list = $data_list->orWhere('mobile','LIKE',"%{$search}%");            
        }


        $data_list = $data_list->paginate($limit);
        $data_list->getCollection()->transform(function ($item) {
            $item->total_amount = Helpers::price_formate($item->total_amount);
            $item->paid_amount = Helpers::price_formate($item->paid_amount);
            $item->pending_amount = Helpers::price_formate($item->pending_amount);
            return $item;
        });




        
        $responseCode = 200;
        $result['status'] = $responseCode;
        $result['message'] = 'Success';
        $result['action'] = 'list';
        $result['data'] = $data_list;
        return response()->json($result, $responseCode);
    }
    public function payment_detail(Request $request)
    {
        $limit = 12000000;
        $status = 1;
        $order_by = "asc";
        $employee_id = $this->employee_id;
        $id = $request->id;

        $paymentData = DB::table($this->arr_values['table_name'])->where(["employee_id"=>$employee_id,"id"=>$id,])->first();
        if(empty($paymentData))
        {
            $responseCode = 400;
            $result['status'] = $responseCode;
            $result['message'] = 'Wrong Payment ID.!';
            $result['action'] = 'detail';
            $result['data'] = [];
            return response()->json($result, $responseCode);
        }



        
        $data_list = DB::table("employee_more_payment")->where(['status' => $status,"employee_id"=>$employee_id,"employee_payment_id"=>$id,])->orderBy('id',$order_by);        
        $data_list = $data_list->paginate($limit);


        $data_list->getCollection()->transform(function ($item) {
            $item->amount = Helpers::price_formate($item->amount);
            $item->date = date("d M, Y", strtotime($item->date));
            $item->image = url('storage/app/public/screenshot/'.$item->image);
            return $item;
        });

        
        $responseCode = 200;
        $result['status'] = $responseCode;
        $result['message'] = 'Success';
        $result['action'] = 'list';
        $result['detail'] = $paymentData;
        $result['data_list'] = $data_list;
        return response()->json($result, $responseCode);
    }
    public function update(Request $request)
    {
        $entryStatus = false;
        $id = $request->id;


        // DB::table("apitest")->insert(["name"=>'login',"text"=>($request->image)]);

        $employee_id = $this->employee_id;
        if(empty($id))
        {
            $package = DB::table("package")->where('id',$request->package_id)->first();
            if(empty($package))
            {
                $action = 'add';
                $responseCode = 400;
                $result['status'] = $responseCode;
                $result['message'] = 'Wrong Package ID!';
                $result['action'] = $action;
                $result['data'] = [];
                return response()->json($result, $responseCode);
            }
            $total_amount = $package->sale_price;
            $paid_amount = $request->amount;            

            $data['package_id'] = $request->package_id;
            $data['employee_id'] = $employee_id;
            $data['name'] = $request->name;
            $data['email'] = $request->email;
            $data['mobile'] = $request->mobile;

            $data['total_amount'] = $total_amount;
            
            $data['status'] = 1;
            $data['add_date_time'] = date("Y-m-d H:i:s");
            $data['update_date_time'] = date("Y-m-d H:i:s");

            $insertId = DB::table($this->arr_values['table_name'])->insertGetId($data);
            if($insertId)
            {
                $entryStatus = true;
            }

            if($entryStatus)
            {
                if(!empty($paid_amount))
                {

                    $image = ImageManager::uploadAPiImage('screenshot','jpg',$request->image);

                    $data2['employee_id'] = $employee_id;
                    $data2['employee_payment_id'] = $insertId;
                    $data2['date'] = $request->date;
                    $data2['amount'] = $request->amount;
                    $data2['image'] = $image;
                    $data2['message'] = $request->message;
                    $data2['status'] = 1;
                    $data2['add_date_time'] = date("Y-m-d H:i:s");
                    $data2['update_date_time'] = date("Y-m-d H:i:s");
                    DB::table("employee_more_payment")->insertGetId($data2);
                }

                $action = 'add';
                $responseCode = 200;
                $result['status'] = $responseCode;
                $result['message'] = 'Success';
                $result['action'] = $action;
                $result['data'] = [];
                return response()->json($result, $responseCode);
            }
            else
            {
                $action = 'add';
                $responseCode = 400;
                $result['status'] = $responseCode;
                $result['message'] = 'Error!';
                $result['action'] = $action;
                $result['data'] = [];
                return response()->json($result, $responseCode);
            }
        }
        else
        {
            $package = DB::table("package")->where('id',$request->package_id)->first();
            if(empty($package))
            {
                $action = 'add';
                $responseCode = 400;
                $result['status'] = $responseCode;
                $result['message'] = 'Wrong Package ID!';
                $result['action'] = $action;
                $result['data'] = [];
                return response()->json($result, $responseCode);
            }
            $total_amount = $package->sale_price;
            $data['name'] = $request->name;
            $data['email'] = $request->email;
            $data['mobile'] = $request->mobile;
            $data['package_id'] = $request->package_id;
            $data['total_amount'] = $total_amount;

            DB::table($this->arr_values['table_name'])->where(["id"=>$id,])->update($data);
            $entryStatus = true;           

            if($entryStatus)
            {
                $action = 'update';
                $responseCode = 200;
                $result['status'] = $responseCode;
                $result['message'] = 'Success';
                $result['action'] = $action;
                $result['data'] = [];
                return response()->json($result, $responseCode);
            }
            else
            {
                $action = 'update';
                $responseCode = 400;
                $result['status'] = $responseCode;
                $result['message'] = 'Error!';
                $result['action'] = $action;
                $result['data'] = [];
                return response()->json($result, $responseCode);
            }
        }
    }
    public function add_more_payment(Request $request)
    {
        $entryStatus = false;
        $id = $request->id;
        $employee_id = $this->employee_id;


        $image = ImageManager::uploadAPiImage('screenshot','jpg',$request->image);

        $data2['employee_id'] = $employee_id;
        $data2['employee_payment_id'] = $id;
        $data2['date'] = $request->date;
        $data2['amount'] = $request->amount;
        $data2['image'] = $image;
        $data2['message'] = $request->message;
        $data2['status'] = 1;
        $data2['add_date_time'] = date("Y-m-d H:i:s");
        $data2['update_date_time'] = date("Y-m-d H:i:s");

        $insertId = DB::table("employee_more_payment")->insertGetId($data2);
        if($insertId) $entryStatus = true;
        if($entryStatus)
        {
            $action = 'update';
            $responseCode = 200;
            $result['status'] = $responseCode;
            $result['message'] = 'Success';
            $result['action'] = $action;
            $result['data'] = [];
            return response()->json($result, $responseCode);
        }
        else
        {
            $action = 'update';
            $responseCode = 400;
            $result['status'] = $responseCode;
            $result['message'] = 'Error!';
            $result['action'] = $action;
            $result['data'] = [];
            return response()->json($result, $responseCode);
        }
    }
    public function delete(Request $request)
    {
        $id = $request->id;

        $data = DB::table($this->arr_values['table_name'])->where('employee_id',$this->employee_id)->where('id',$id)->first();
        if(!empty($data))
        {
            DB::table($this->arr_values['table_name'])->where('employee_id',$this->employee_id)->where('id',$id)->delete();
            DB::table("employee_more_payment")->where('employee_id',$this->employee_id)->where('employee_payment_id',$id)->delete();
            
            $responseCode = 200;
            $result['status'] = $responseCode;
            $result['message'] = 'Delete Successfuly';
            $result['action'] = 'delete';
            $result['data'] = [];
        }
        else
        {
            $responseCode = 400;
            $result['status'] = $responseCode;
            $result['message'] = 'Error!';
            $result['action'] = 'delete';
            $result['data'] = [];
        }        
        return response()->json($result, $responseCode);
    }
    public function delete_more(Request $request)
    {
        $id = $request->id;

        $data = DB::table("employee_more_payment")->where('employee_id',$this->employee_id)->where('id',$id)->first();
        if(!empty($data))
        {
            DB::table("employee_more_payment")->where('employee_id',$this->employee_id)->where('id',$id)->delete();            
            $responseCode = 200;
            $result['status'] = $responseCode;
            $result['message'] = 'Delete Successfuly';
            $result['action'] = 'delete';
            $result['data'] = [];
        }
        else
        {
            $responseCode = 400;
            $result['status'] = $responseCode;
            $result['message'] = 'Error!';
            $result['action'] = 'delete';
            $result['data'] = [];
        }        
        return response()->json($result, $responseCode);
    }
    
}