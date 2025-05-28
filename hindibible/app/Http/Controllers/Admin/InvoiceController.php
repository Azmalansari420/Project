<?php
namespace App\Http\Controllers\Admin;


use App\Helper\Helpers;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Custom;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Crypt;
use App\Helper\ImageManager;
use App\Models\Transaction;
 
class InvoiceController extends Controller
{
     protected $arr_values = array(
        'routename'=>'invoice.', 
        'title'=>'Invoice', 
        'table_name'=>'transaction',
        'page_title'=>'Invoice',
        "folder_name"=>'/invoice',
        "upload_path"=>'upload/',
        "keys"=>'id,name',
       );  

      public function __construct()
      {
         $this->arr_values['folder_name'] = env("admin_view_folder") . $this->arr_values['folder_name'];
        Helpers::create_importent_columns($this->arr_values['table_name']);
      }

    public function index(Request $request)
    {
        $data['title'] = "".$this->arr_values['title'];
        $data['page_title'] = "All ".$this->arr_values['page_title'];
        $data['upload_path'] = $this->arr_values['upload_path'];
        $data['submit_url'] = route($this->arr_values['routename'].'update');
        $data['back_btn'] = route($this->arr_values['routename'].'list');
        $data['add_btn_url'] = route($this->arr_values['routename'].'add');
        $data['edit_btn_url'] = route($this->arr_values['routename'].'edit');
        $data['delete_btn_url'] = route($this->arr_values['routename'].'delete');
        $data['keys'] = $this->arr_values['keys'];          
        $data['pagenation'] = array($this->arr_values['title']);
        $data['trash'] = '';
        return view($this->arr_values['folder_name'].'/index',compact('data'));
    }
    public function load_data(Request $request)
    {
      $limit = 12;
      $page = 1;
      $page1 = 1;
      $offset = 0;
      $status = 1;
      $table_id = 1;
      $listcheckbox = [];
      $filter_search_value = '';
      $keys = '';
      $where_query = "";
      $order_by = "desc";
      $is_delete = 0;
      $order_type = 0;
      $searchtype = 0;
      

      $status = $request->status;

      if(!empty($request->searchtype)) $searchtype = $request->searchtype;
      if(!empty($request->order_type)) $order_type = $request->order_type;
      if(!empty($request->limit)) $limit = $request->limit;
      if(!empty($request->order_by)) $order_by = $request->order_by;
      if(!empty($request->filter_search_value)) $filter_search_value = $request->filter_search_value;



        $data['table_name'] = $this->arr_values['table_name'];
        $data['upload_path'] = $this->arr_values['upload_path'];
        $data['back_btn'] = route($this->arr_values['routename'].'list');
        $data['add_btn_url'] = route($this->arr_values['routename'].'add');
        $data['view_btn_url'] = route($this->arr_values['routename'].'edit');
        $data['delete_btn_url'] = route($this->arr_values['routename'].'delete');

        

        $data_list = Transaction::where([$this->arr_values['table_name'].'.status' => $status])
        ->leftJoin("users","users.id","=",$this->arr_values['table_name'].".user_id")


        ->select($this->arr_values['table_name'].".*","users.name as user_name","users.phone as user_phone","users.email as user_email","users.is_paid as is_paid","users.user_id as affiliate_id")

        ->orderBy($this->arr_values['table_name'].'.id',$order_by);

        if(!empty($order_type))
            $data_list->where($this->arr_values['table_name'].'.order_type',$order_type);

          if(!empty($filter_search_value))
          {
            // $data_list = $data_list->whereOr('users.name','LIKE',"{$filter_search_value}%");
            // $data_list = $data_list->whereOr('users.email','LIKE',"{$filter_search_value}%");
            if($searchtype==1) $data_list = $data_list->where('users.name','LIKE',"{$filter_search_value}%");
            if($searchtype==2) $data_list = $data_list->where('users.email','LIKE',"{$filter_search_value}%");
            if($searchtype==3) $data_list = $data_list->where('users.phone','LIKE',"{$filter_search_value}%");
            if($searchtype==4) $data_list = $data_list->where('users.user_id','LIKE',"{$filter_search_value}%");
            if($searchtype==5) $data_list = $data_list->where($this->arr_values['table_name'].'.transaction_id','LIKE',"{$filter_search_value}%");
          }
          $data_list = $data_list->paginate($limit);


        $view = View::make($this->arr_values['folder_name'].'/table',compact('data_list','data'))->render();
        $responseCode = 200;
        $result['status'] = $responseCode;
        $result['message'] = 'Success';
        $result['action'] = 'view';
        $result['data'] = ["list"=>$view,];
        return response()->json($result, $responseCode);
    }
    public function add()
    {
        $data['title'] = "".$this->arr_values['title'];
        $data['page_title'] = "All ".$this->arr_values['page_title'];
        $data['table_name'] = $this->arr_values['table_name'];
        $data['upload_path'] = $this->arr_values['upload_path'];
        $data['submit_url'] = route($this->arr_values['routename'].'update');
        $data['back_btn'] = route($this->arr_values['routename'].'list');
        $data['add_btn_url'] = route($this->arr_values['routename'].'add');
        $data['edit_btn_url'] = route($this->arr_values['routename'].'edit');
        $data['delete_btn_url'] = route($this->arr_values['routename'].'delete');
        $data['keys'] = $this->arr_values['keys'];          
        $data['pagenation'] = array($this->arr_values['title']);
        $data['trash'] = '';
        $row = [];
        return view($this->arr_values['folder_name'].'/form',compact('data','row'));
    }
    public function edit($id='')
    {   
        $id = Crypt::decryptString($id);
        $data['title'] = "".$this->arr_values['title'];
        $data['page_title'] = "All ".$this->arr_values['page_title'];
        $data['table_name'] = $this->arr_values['table_name'];
        $data['upload_path'] = $this->arr_values['upload_path'];
        $data['submit_url'] = route($this->arr_values['routename'].'update');
        $data['back_btn'] = route($this->arr_values['routename'].'list');
        $data['add_btn_url'] = route($this->arr_values['routename'].'add');
        $data['edit_btn_url'] = route($this->arr_values['routename'].'edit');
        $data['delete_btn_url'] = route($this->arr_values['routename'].'delete');
        $data['keys'] = $this->arr_values['keys'];          
        $data['pagenation'] = array($this->arr_values['title']);
        $data['trash'] = '';

        $row = Transaction::where(["id"=>$id,])->first();
        if(!empty($row))
        {
            return view($this->arr_values['folder_name'].'/view',compact('data','row'));
        }
        else
        {
            return view('/404',compact('data'));            
        }
    }

    public function update(Request $request)
    {
        $id = Crypt::decryptString($request->id);
        if(empty($id)) $data = new Transaction;
        else $data = Transaction::find($id);

        $session = Session::get('admin');
        $add_by = $session['id'];
        
        
        
        $data->name = $request->name;
        $data->status = $request->status;

        if(empty($id))
        {
            $data->image = ImageManager::upload($this->arr_values['upload_path'], 'png', $request->file('image'));
        }
        else
        {
            if ($request->image)
                $data->image = ImageManager::update($this->arr_values['upload_path'], $data->image, 'png', $request->file('image'));
        }


        $data->add_by = $add_by;
        $data->is_delete = 0;
        if($data->save())
        {

            $name  = $data->name;
            $new_slug = Helpers::slug($name);
            $old_slug = $data->slug;
            $insert_id = $data->id;        
            $data->slug = Helpers::insert_slug($new_slug,$insert_id,"blog_category",$old_slug);

            
            $action = 'add';
            if(!empty($id)) $action = 'edit';
            $responseCode = 200;
            $result['status'] = $responseCode;
            $result['message'] = 'Success';
            $result['action'] = $action;
            $result['data'] = [];
            return response()->json($result, $responseCode);
        }

    }
    public function delete(Request $request, $id)
    {
        $id = Crypt::decryptString($request->id);
        $data = Transaction::find($id);
        if($data->delete())
        {
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
            $result['message'] = 'Delete Not Successfuly';
            $result['action'] = 'delete';
            $result['data'] = [];            
        }
        return response()->json($result, $responseCode);
    }

}