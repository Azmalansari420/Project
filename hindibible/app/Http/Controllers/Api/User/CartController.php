<?php
namespace App\Http\Controllers\APi\User;


use App\Helper\Helpers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Crypt;
use App\Models\Cart;
use App\Models\MemberModel;

class CartController extends Controller
{
     protected $arr_values = array(
        'table_name'=>'cart',
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

   
    public function list(Request $request)
    {
        $limit = 10;
        $status = 1;
        $page = $request->page? $request->page : 0;
        $offset = 0;
        $search = '';      
        $order_by = "desc";
        $user_id = $this->user_id;

        $offset = $page * $limit;

        if(!empty($request->search)) $search = $request->search;
        

        


        $cartDetail = MemberModel::cartDetail($user_id);

        $responseCode = 200;
        $result['status'] = $responseCode;
        $result['message'] = 'Success';
        $result['action'] = 'list';
        $result['data'] = ["cartDetail"=>$cartDetail,];
        return response()->json($result, $responseCode);
    }
   
   
    public function add(Request $request)
    {   
        $id = $request->id;
        $qty = $request->qty;
        $user_id = $this->user_id;

        $product = DB::table("product")->where(["status"=>1,"id"=>$id,])->first();
        if(empty($product))
        {
            $action = 'add';
            $responseCode = 400;
            $result['status'] = $responseCode;
            $result['message'] = 'Wrong product!';
            $result['action'] = $action;
            $result['data'] = [];
            return response()->json($result, $responseCode);
        }
        $data['product_id'] = $product->id;
        $data['user_id'] = $user_id;
        $data['product_name'] = $product->name;
        $data['price'] = $product->sale_price;
        $data['qty'] = $qty;
        $data['add_by'] = $user_id;
        $data['status'] = 1;
        $data['add_date_time'] = date("Y-m-d H:i:s");
        $data['update_date_time'] = date("Y-m-d H:i:s");

        DB::table("cart")->where(["product_id"=>$id,"user_id"=>$user_id,])->delete();
        if($qty>0)
        {
            DB::table("cart")->insert($data);
            $action = 'add';
            $responseCode = 200;
            $result['status'] = $responseCode;
            $result['message'] = 'Add Cart Success';
            $result['action'] = $action;
        }
        else
        {
            $action = 'add';
            $responseCode = 200;
            $result['status'] = $responseCode;
            $result['message'] = 'Remove Cart Success';
            $result['action'] = $action;
        }

        $cartDetail = MemberModel::cartDetail($user_id);            
        $result['data'] = ["cartDetail"=>$cartDetail,];
        return response()->json($result, $responseCode);
    }


   

   
    


}