<?php
namespace App\Http\Controllers\APi\User;


use App\Helper\Helpers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use App\Helper\ImageManager;
use App\Models\User;
use App\Models\Product;
use App\Models\MemberModel;
 
class ProductController extends Controller
{
    protected $arr_values = array(
        'table_name'=>'product',
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
        

        $data_list = DB::table($this->arr_values['table_name'])
            ->leftJoin('cart', 'cart.product_id', '=', $this->arr_values['table_name'].'.id') // Adjust column names as needed
            ->whereIn($this->arr_values['table_name'].'.status', [0, 1, 2, 3, 4])
            ->offset($offset)
            ->limit($limit)
            ->orderBy($this->arr_values['table_name'].'.id', $order_by)
            ->select($this->arr_values['table_name'].'.*', 'cart.qty', 'cart.user_id') // Select required columns
            ->get();



        $data_list->transform(function ($item) {
            $item->image = url('storage/app/public/upload/'.$item->display_image);
            $item->real_price = Helpers::price_formate($item->real_price);
            $item->sale_price = Helpers::price_formate($item->sale_price);
            $item->add_date_time = date("d M, Y h: A", strtotime($item->add_date_time));
            $item->qty = $item->qty?$item->qty:0;

            return $item;
        });

        $cartDetail = MemberModel::cartDetail($user_id);

        $responseCode = 200;
        $result['status'] = $responseCode;
        $result['message'] = 'Success';
        $result['action'] = 'list';
        $result['data'] = ["list"=>$data_list,"cartDetail"=>$cartDetail,];
        return response()->json($result, $responseCode);
    }
   

   
    


}