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
use App\Models\User;
 
class ChangePasswordController extends Controller
{
     protected $arr_values = array(
        'routename'=>'admin-change-password.', 
        'title'=>'Change Password', 
        'table_name'=>'users',
        'page_title'=>'Change Password',
        "folder_name"=>'/change-password',
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
        $data['edit_btn_url'] = route($this->arr_values['routename'].'edit');
        $data['keys'] = $this->arr_values['keys'];          
        $data['pagenation'] = array($this->arr_values['title']);
        $data['trash'] = '';
        return view($this->arr_values['folder_name'].'/index',compact('data'));
    }
   
   

    public function update(Request $request)
    {
        $session = Session::get('admin');
        $id = $add_by = $session['id'];

        if(empty($id)) $data = new User;
        else $data = User::find($id);

        
        if($request->npassword!=$request->cpassword)
        {
            $responseCode = 400;
            $result['status'] = $responseCode;
            $result['message'] = 'Confirm Password Not Match!';
            $result['data'] = [];
            return response()->json($result, $responseCode);
        }        
        if($data->password!=md5($request->opassword))
        {
            $responseCode = 400;
            $result['status'] = $responseCode;
            $result['message'] = 'Old Password Not Match!';
            $result['data'] = [];
            return response()->json($result, $responseCode);
        }  
        $data->password = md5($request->cpassword);

    

        $data->add_by = $add_by;
        $data->is_delete = 0;
        if($data->save())
        {
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
   

}