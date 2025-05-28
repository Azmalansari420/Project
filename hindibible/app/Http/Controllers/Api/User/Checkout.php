<?php
namespace App\Http\Controllers\APi\User;


use App\Helper\Helpers;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Crypt;
use App\Models\Cart;
use App\Models\MemberModel;
 
class UserCheckout extends Controller
{
     protected $arr_values = array(
        'routename'=>'user.checkout.', 
        'title'=>'Checkout', 
        'table_name'=>'deposit_request',
        'page_title'=>'Checkout',
        "folder_name"=>user_view_folder.'/checkout',
        "upload_path"=>'upload/',
        "keys"=>'id,name',
       );  

      public function __construct()
      {
        Helpers::create_importent_columns($this->arr_values['table_name']);
      }

    public function index(Request $request)
    {
        $session = Session::get('user');
        $user_id = $session['id'];
        $data['title'] = "".$this->arr_values['title'];
        $data['page_title'] = $this->arr_values['page_title'];
        $data['upload_path'] = $this->arr_values['upload_path'];
        $data['back_btn'] = route($this->arr_values['routename'].'list');
        $data['keys'] = $this->arr_values['keys'];          
        $data['pagenation'] = array($this->arr_values['title']);
        $data['trash'] = '';
        $this->arr_values['folder_name'];
        $row = Helpers::get_user_user();
        $id = $row->id;

        $orders = DB::table("orders")->where("user_id",$user_id)->first();

        return view($this->arr_values['folder_name'].'/index',compact('data','row','orders'));
    }
    public function success(Request $request)
    {
        $session = Session::get('user');
        $user_id = $session['id'];
        $data['title'] = "".$this->arr_values['title'];
        $data['page_title'] = $this->arr_values['page_title'];
        $data['upload_path'] = $this->arr_values['upload_path'];
        $data['back_btn'] = route($this->arr_values['routename'].'list');
        $data['keys'] = $this->arr_values['keys'];          
        $data['pagenation'] = array($this->arr_values['title']);
        $data['trash'] = '';
        $this->arr_values['folder_name'];
        $row = Helpers::get_user_user();
        $id = $row->id;

        $orders = DB::table("orders")->where("user_id",$user_id)->first();

        return view($this->arr_values['folder_name'].'/success',compact('data','row','orders'));
    }
   
    public function place_order(Request $request)
    {   
        $id = $request->id;
        $session = Session::get('user');
        $user_id = $session['id'];

        $cartDetail = MemberModel::cartDetail($user_id);
        $count = count($cartDetail['cartProducts']);
        if($count<1)
        {
            $action = 'redirect';
            $responseCode = 200;
            $result['status'] = $responseCode;
            $result['message'] = 'Your cart is empty!';
            $result['action'] = $action;
            $result['url'] = route('user.product.list');
            $result['data'] = [];
            return response()->json($result, $responseCode);

        }
        
        $order_id = time().$user_id;
        foreach ($cartDetail['cartProducts'] as $key => $value)
        {            
            $order_product['order_id'] = $order_id;
            $order_product['product_id'] = $value->id;
            $order_product['name'] = $value->name;
            $order_product['price'] = $value->sale_price*$value->qty;
            $order_product['qty'] = $value->qty;
            $order_product['user_id'] = $user_id;
            $order_product['add_by'] = $user_id;
            $order_product['status'] = 1;
            $order_product['add_date_time'] = date("Y-m-d H:i:s");
            $order_product['update_date_time'] = date("Y-m-d H:i:s");
            DB::table("order_products")->insert($order_product);
        }


        $cartTotal = $cartDetail['cartTotal'];
        $gst = $cartDetail['gst'];
        $cartFinalAmount = $cartDetail['cartFinalAmount'];


        $data['order_id'] = $order_id;
        $data['user_id'] = $user_id;
        $data['amount'] = $cartTotal;
        $data['gst'] = $gst;
        $data['final_amount'] = $cartFinalAmount;

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['state'] = $request->state;
        $data['city'] = $request->city;
        $data['address'] = $request->address;

        $data['add_by'] = $user_id;
        $data['status'] = 0;
        $data['payment_by'] = 'COD';
        $data['payment_date_time'] = date("Y-m-d H:i:s");
        $data['add_date_time'] = date("Y-m-d H:i:s");
        $data['update_date_time'] = date("Y-m-d H:i:s");


        DB::table("orders")->insert($data);

        DB::table('cart')->where("user_id",$user_id)->delete();


        $action = 'redirect';
        $responseCode = 200;
        $result['status'] = $responseCode;
        $result['message'] = 'Order Place Successfully';
        $result['url'] = route('user.checkout.success');
        $result['action'] = $action;
        $result['data'] = [];
        return response()->json($result, $responseCode);
    }


   

   
    


}