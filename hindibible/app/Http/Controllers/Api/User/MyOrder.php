<?php
namespace App\Http\Controllers\APi\User;


use App\Helper\Helpers;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Crypt;
use App\Models\Orders;
 
class UserMyOrder extends Controller
{
     protected $arr_values = array(
        'routename'=>'user.my-order.', 
        'title'=>'My Orders', 
        'table_name'=>'deposit_request',
        'page_title'=>'My Orders',
        "folder_name"=>user_view_folder.'/my-order',
        "upload_path"=>'upload/',
        "keys"=>'id,name',
       );  

      public function __construct()
      {
        Helpers::create_importent_columns($this->arr_values['table_name']);
      }

    public function index(Request $request)
    {
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
        return view($this->arr_values['folder_name'].'/index',compact('data','row'));
    }
    public function view(Request $request, $id)
    {
        $data['title'] = "".$this->arr_values['title'];
        $data['page_title'] = $this->arr_values['page_title'];
        $data['upload_path'] = $this->arr_values['upload_path'];
        $data['back_btn'] = route($this->arr_values['routename'].'list');
        $data['keys'] = $this->arr_values['keys'];          
        $data['pagenation'] = array($this->arr_values['title']);
        $data['trash'] = '';
        $this->arr_values['folder_name'];
        $row = Helpers::get_user_user();
        
        $order = DB::table("orders")->where(["order_id"=>$id,"user_id"=>$row->id,])->first();
        return view($this->arr_values['folder_name'].'/view',compact('data','row','order'));
    }
    public function load_data(Request $request)
    {
      $limit = 12;
      $page = 1;
      $page1 = 1;
      $offset = 0;
      $status = 1;
      
      $order_by = "id desc";
      $is_delete = 0;
      
      $session = Session::get('user');
      $user_id = $session['id'];        
      
      $status = $request->type;

      if($status=='') $statusArr = [0,1,2,3,4,5,6,7,8];
      else if($status==0) $statusArr = [0];
      else if($status==1) $statusArr = [1];
      else if($status==2) $statusArr = [2];
      else if($status==3) $statusArr = [3];
      else if($status==4) $statusArr = [4];

      $data_list = Orders::whereIn('status',$statusArr)->orderBy("id","desc");     

      $data_list = $data_list->latest()->paginate($limit);
      $view = View::make($this->arr_values['folder_name'].'/table',compact('data_list'))->render();
        $responseCode = 200;
        $result['status'] = $responseCode;
        $result['message'] = 'Success';
        $result['action'] = 'view';
        $result['data'] = ["list"=>$view,];
        return response()->json($result, $responseCode);
    }
   
    


}