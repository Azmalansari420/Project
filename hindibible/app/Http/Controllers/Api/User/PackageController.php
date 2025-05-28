<?php
namespace App\Http\Controllers\APi\Sales;
use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

use App\Helper\Helpers;

class PackageController extends Controller
{
    protected $arr_values = array(
        'table_name'=>'package',
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
        $limit = 120;
        $status = 1;
        $filter_search_value = '';      
        $order_by = "asc";
        $employee_id = $this->employee_id;


        
        $data_list = DB::table($this->arr_values['table_name'])
        ->select('id','offer_image','real_price','sale_price','name')
        ->where(['status' => $status,])->orderBy('name',$order_by);
        $data_list = $data_list->get();
        
        $responseCode = 200;
        $result['status'] = $responseCode;
        $result['message'] = 'Success';
        $result['action'] = 'list';
        $result['data'] = $data_list;
        return response()->json($result, $responseCode);
    }
    
    
}