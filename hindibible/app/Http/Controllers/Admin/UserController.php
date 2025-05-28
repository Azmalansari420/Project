<?php
namespace App\Http\Controllers\Admin;


use App\Helper\Helpers;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Custom;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Crypt;
use App\Helper\ImageManager;
use App\Models\User;
use App\Models\MemberModel;
use Illuminate\Support\Str;
use App\Models\MailModel;
use App\Models\Package;
use App\Models\Setting;
use App\Models\IncomeHistory;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
 
class UserController extends Controller
{
     protected $arr_values = array(
        'routename'=>'user.', 
        'title'=>'User', 
        'table_name'=>'users',
        'page_title'=>'User',
        "folder_name"=>'/user',
        "upload_path"=>'upload/',
        "page_name"=>'cource-detail.php',
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
        $data['excel_export'] = route($this->arr_values['routename'].'excel_export');
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
      // $status = 1;
      $table_id = 1;
      $listcheckbox = [];
      $filter_search_value = '';
      $keys = '';
      $where_query = "";
      $order_by = "id desc";
      $is_delete = 0;
      $kyc = '';
      $search_type = '';
      $gender = 0;
      

      if(!empty($request->gender)) $gender = $request->gender;
      if(!empty($request->search_type)) $search_type = $request->search_type;
      if(!empty($request->limit)) $limit = $request->limit;
      $status = $request->status;
      if($request->kyc!='') $kyc = $request->kyc;
      if(!empty($request->order_by)) $order_by = $request->order_by;
      if(!empty($request->filter_search_value)) $filter_search_value = $request->filter_search_value;



        $data['table_name'] = $this->arr_values['table_name'];
        $data['upload_path'] = $this->arr_values['upload_path'];
        $data['back_btn'] = route($this->arr_values['routename'].'list');
        $data['add_btn_url'] = route($this->arr_values['routename'].'add');
        $data['edit_btn_url'] = route($this->arr_values['routename'].'edit');
        $data['delete_btn_url'] = route($this->arr_values['routename'].'delete');

        
        if($status==1) $is_paid = 1;
        else if($status==2) $is_paid = 0;
        else $is_paid = 0;

            

        if($status==0)
        {
            $data_list = User::whereIn('is_paid',[0,1,null]);
        } 
        else
        {
            $data_list = User::where(['is_paid' => $is_paid]);
        }
      if($kyc!='') $data_list = $data_list->where(['kyc_step'=>$kyc,]);
      if(!empty($gender)) $data_list = $data_list->where(['gender'=>$gender,]);
      if(!empty($request->from_date) && !empty($request->to_date))
        {
            $from_date = $request->from_date." 00:00:00";
            $to_date = $request->to_date." 23:59:00";
            $data_list->whereBetween('add_date_time', [$from_date, $to_date]);
        }
      
      if(!empty($filter_search_value))
      {
        // $filter_search_value = explode(" ", $filter_search_value);
        // foreach ($filter_search_value as $key => $value)
        // {
            // $data_list = $data_list->where('name','LIKE',"{$filter_search_value}%");            
            // $data_list = $data_list->orWhere('email','LIKE',"{$filter_search_value}%");            
            // $data_list = $data_list->orWhere('affiliate_id','LIKE',"{$filter_search_value}%");            
            // $data_list = $data_list->orWhere('phone','LIKE',"{$filter_search_value}%");            
        // }

        if(!empty($search_type))
        {
            if($search_type==1) $data_list = $data_list->where('affiliate_id',$filter_search_value);
            if($search_type==2) $data_list = $data_list = $data_list->whereRaw('LOWER(CAST(name AS CHAR)) LIKE ?', ["%{$filter_search_value}%"]);
            if($search_type==3) $data_list = $data_list->where('email','LIKE',"%{$filter_search_value}%");
            if($search_type==4) $data_list = $data_list->where('phone','LIKE',"%{$filter_search_value}%");
        }

      }


      if(!empty($request->daywise))
      {
        $daywise = $request->daywise;

        $date = date("Y-m-d");
        $year = date("Y",strtotime($date));
        $month = date("m",strtotime($date));
        $day = date("d",strtotime($date));

        if($month[0]==0)$month = $month[1];
        if($day[0]==0)$day = $day[1];
        $date = $year.'-'.$month.'-'.$day;


        if($daywise==1)
        {
            $current_date = date("Y-m-d");
            $last_monday = date("Y-m-d", strtotime("last monday", strtotime($current_date)));
            $next_sunday = date("Y-m-d", strtotime("next sunday", strtotime($current_date)));
            $data_list = $data_list->whereBetween('add_date_time', [$last_monday, $next_sunday]);
        }
        else if($daywise==2)
        {
            $data_list = $data_list->whereRaw("CONCAT(YEAR(add_date_time), '-', MONTH(add_date_time)) = ?", [$month]);
        }
        else if($daywise==3)
        {
            $data_list = $data_list->whereRaw("CONCAT(YEAR(add_date_time)) = ?", [$year]);
        }
      }
        // $data_list = $data_list->where('email','LIKE',"k@gmail.com");            




      $data_list = $data_list->latest()->paginate($limit);
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
        $data['page_title'] = "Add ".$this->arr_values['page_title'];
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
        $package = DB::table("package")->where(["status"=>1,])->get();
        return view($this->arr_values['folder_name'].'/form',compact('data','row','package'));
    }
    public function edit($id='')
    {   
        $id = Crypt::decryptString($id);
        $data['title'] = "".$this->arr_values['title'];
        $data['page_title'] = "Edit ".$this->arr_values['page_title'];
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

        $row = User::where(["id"=>$id,])->first();
        if(!empty($row))
        {
            $package = DB::table("package")->where(["status"=>1,])->get();
            return view($this->arr_values['folder_name'].'/form',compact('data','row','package'));
        }
        else
        {
            return view('/404',compact('data'));            
        }
    }
    
    public function update(Request $request)
    {
        $id = Crypt::decryptString($request->id);
        if(empty($id)) $data = new User;
        else $data = User::find($id);

        $session = Session::get('admin');
        $add_by = $session['id'];        

        $email = $request->email;
        $phone = $request->phone;
        $name = $request->name;

        $check_exist_email = DB::table('users')
        ->where('email',$email)
        ->whereNotIn('id', [$id])
        ->first();
        if(!empty($check_exist_email))
        {
            $responseCode = 400;
            $result['status'] = $responseCode;
            $result['message'] = 'Email already use!';
            $result['action'] = 'add';
            $result['data'] = [];
            return response()->json($result, $responseCode);
        }

        $check_exist_phone = DB::table('users')
        ->where('phone',$phone)
        ->whereNotIn('id', [$id])
        ->first();
        if(!empty($check_exist_phone))
        {
            $responseCode = 400;
            $result['status'] = $responseCode;
            $result['message'] = 'Phone already use!';
            $result['action'] = 'add';
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
        $data->status = $request->status;
        $data->is_paid = 0;




        if(empty($id))
        {
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
        }


        $data->add_by = $add_by;
        $data->is_delete = 0;
        $data->role = 2;
        if($data->save())
        {
            $insert_id = $data->id;
            if(empty($id))
            {
                $parent_id = MemberModel::getParentIdForHybridPlan($sponser_id, $request->placement);
                $data->parent_id = $parent_id;
                $data->sponser_id = $sponser_id;
                $data->position = $request->placement;

                $data->save();
                MemberModel::AddMemberLog(['id'=> $insert_id, 'user_id'=>$data->user_id, 'name' => $name, 'sponser_id' => $sponser_id, 'side' => $request->placement,"parent_id"=>$parent_id, ]);
                MemberModel::getTypeAllIncome($insert_id);
            }

        

            $action = 'add';
            if(!empty($id)) $action = 'edit';
            // $action = 'edit';
            $responseCode = 200;
            $result['status'] = $responseCode;
            $result['message'] = 'Success';
            $result['action'] = $action;
            $result['data'] = [];
            return response()->json($result, $responseCode);
        }
    }





    public function change_password($id='')
    {   
        $id = Crypt::decryptString($id);
        $data['title'] = "".$this->arr_values['title'];
        $data['page_title'] = "".$this->arr_values['page_title']." Change Password";
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

        $row = User::where(["id"=>$id,])->first();
        if(!empty($row))
        {
            $package = DB::table("package")->where(["status"=>1,])->get();
            return view($this->arr_values['folder_name'].'/change-password',compact('data','row','package'));
        }
        else
        {
            return view('/404',compact('data'));            
        }
    }
    public function change_password_action(Request $request)
    {
        $id = Crypt::decryptString($request->id);
        if(empty($id)) $data = new User;
        else $data = User::find($id);

        $session = Session::get('admin');
        $add_by = $session['id'];

        if($request->password!=$request->cpassword)
        {
            $responseCode = 400;
            $result['status'] = $responseCode;
            $result['message'] = 'Confirm Password Not Match!';
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
    
   
    
    public function change_sponser($id='')
    {   
        $id = Crypt::decryptString($id);
        $data['title'] = "".$this->arr_values['title'];
        $data['page_title'] = "".$this->arr_values['page_title']." Change sponser";
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

        $row = User::where(["id"=>$id,])->first();
        if(!empty($row))
        {
            $package = DB::table("package")->where(["status"=>1,])->get();
            return view($this->arr_values['folder_name'].'/change-sponser',compact('data','row','package'));
        }
        else
        {
            return view('/404',compact('data'));            
        }
    }
    public function change_sponser_action(Request $request)
    {
        $id = Crypt::decryptString($request->id);
        $sponser_id = $request->sponser_id;
        $placement = $request->placement;
        if(empty($id)) $data = new User;
        else $data = User::find($id);

        $session = Session::get('admin');
        $add_by = $session['id'];


        $active_sponser = MemberModel::get_sponser($id);
        $new_sponser = MemberModel::new_sponser($sponser_id);
        if(!empty($active_sponser) && !empty($new_sponser))
        {    
            MemberModel::change_sponser($id,$sponser_id,$placement);




            $responseCode = 200;
            $result['status'] = $responseCode;
            $result['message'] = 'Change Sponser Successfuly';
            $result['action'] = 'edit';
            $result['data'] = [];
            return response()->json($result, $responseCode);
        }
        else
        {
            $responseCode = 400;
            $result['status'] = $responseCode;
            $result['message'] = 'Wrong Sponser';
            $result['action'] = 'edit';
            $result['data'] = [];
            return response()->json($result, $responseCode);
        }
    }
    



    public function activate_with_income($id='')
    {   
        $id = Crypt::decryptString($id);
        $data['title'] = "".$this->arr_values['title'];
        $data['page_title'] = "".$this->arr_values['page_title']." Activate With Income";
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

        $row = User::where(["id"=>$id,])->first();
        if(!empty($row))
        {
            return view($this->arr_values['folder_name'].'/activate-with-income',compact('data','row'));
        }
        else
        {
            return view('/404',compact('data'));            
        }
    }
    public function activate_with_income_action(Request $request)
    {
        $id = Crypt::decryptString($request->id);
        if(empty($id)) $data = new User;
        else $data = User::find($id);

        $session = Session::get('admin');
        $add_by = $session['id'];

        if($data->is_paid==1)
        {
            $responseCode = 400;
            $result['status'] = $responseCode;
            $result['message'] = 'Allready Active This Id!';
            $result['data'] = [];
            return response()->json($result, $responseCode);
        }     
           
        $package = DB::table('package')->where('id',$request->package)->first();
        $data->package = $request->package;
        $data->package_name = $package->name;
        $data->is_paid = 1;
        $data->add_by = $add_by;
        $data->is_delete = 0;
        if($data->save())
        {

            $insert_id = $data->id;
            // Package::package_sale_count($data->package);
            // MemberModel::direct_income($insert_id);
            // MemberModel::team_income($insert_id);
            MemberModel::activeId($insert_id);
            // MemberModel::update_order($insert_id);
            // MemberModel::income_mails($insert_id);

            // $all = DB::table('users')->select('id')->get();
            // foreach ($all as $key => $value)
            // {
            //     MemberModel::pair_income($value->id);
            // }


            
            $detail = [];
            $detail[] = ["name"=>$package->name,"qty"=>1,"amount"=>$package->sale_price,];
            $transactionData = [
                "user_id"=>$data->id,
                "amount"=>$package->sale_price,
                "type"=>1,
                "detail"=>$detail,
            ];
            MemberModel::createTransaction($transactionData);


            $user_id = $data->id;
            $email = $data->email;
            $transaction = DB::table("transaction")->where(["user_id"=>$user_id,"status"=>1,])->orderBy('id','desc')->first();
            $user = DB::table("users")->where(["id"=>$user_id,])->first();
            $details = [
                'to'=>$email,
                'view'=>'mailtemplate.invoice',
                'subject'=>'Invoice '.env('APP_NAME').'!',
                'body' => ["detail"=>json_decode($transaction->detail),"user"=>$user,"transaction"=>$transaction,],
            ];
            MailModel::invoice($details);


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



  




    public function team($id='')
    {   
        $id = Crypt::decryptString($id);
        $data['title'] = "".$this->arr_values['title'];
        $data['page_title'] = "".$this->arr_values['page_title']." Team";
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

        $row = User::where(["id"=>$id,])->first();
        if(!empty($row))
        {
            $package = DB::table("package")->where(["status"=>1,])->get();
            $tree_view = MemberModel::tree_view($id);

            // print_r($tree_view);
            return view($this->arr_values['folder_name'].'/team',compact('data','row','package','id','tree_view'));
        }
        else
        {
            return view('/404',compact('data'));            
        }
    }
    public function dashboard($id='')
    {   
        $id = Crypt::decryptString($id);
        $data['title'] = "".$this->arr_values['title'];
        $data['page_title'] = "".$this->arr_values['page_title']." Dashboard";
        $data['table_name'] = $this->arr_values['table_name'];
        $data['upload_path'] = $this->arr_values['upload_path'];
        $data['submit_url'] = route($this->arr_values['routename'].'update');
        $data['back_btn'] = route($this->arr_values['routename'].'list');
        $data['add_btn_url'] = route($this->arr_values['routename'].'add');
        $data['edit_btn_url'] = route($this->arr_values['routename'].'edit');
        $data['delete_btn_url'] = route($this->arr_values['routename'].'delete');
        $data['earning_calendar'] = route($this->arr_values['routename'].'earning_calendar');
        $data['keys'] = $this->arr_values['keys'];          
        $data['pagenation'] = array($this->arr_values['title']);
        $data['trash'] = '';
        $data['user_id'] = Crypt::encryptString($id);


        $row = User::where(["id"=>$id,])->first();
        if(!empty($row))
        {
            
            $today_earning = User::today_earning($id);
            $day_7_earning = User::day_7_earning($id);
            $day_30_earning = User::day_30_earning($id);
            $all_time_earning = User::all_time_earning($id);

            return view($this->arr_values['folder_name'].'/dashboard',compact('data','row','today_earning','day_7_earning','day_30_earning','all_time_earning'));
        }
        else
        {
            return view('/404',compact('data'));            
        }
    }
    public function earning_calendar(Request $request)
    {   
        $id = Crypt::decryptString($request->id);
        $start = $request->start;
        $end = $request->end;
        $data = DB::table("day_wise_income")
        // ->select('income as title','date as start')
        ->whereBetween('day_wise_income.date', [$start, $end])
        ->where('day_wise_income.user_id',$id)
        ->get();
        $events = [];
        foreach ($data as $key => $value) {

            $totalAmount = $value->income1+$value->income2+$value->income3+$value->income4+$value->income5;
            $events[] = ["title"=>Helpers::price_formate($totalAmount),"start"=>$value->date,];
        }        
        return response()->json($events, 200);
    }




    public function reffral($id)
    {
        $id = Crypt::decryptString($id);
        $data['title'] = ""."Reffral";
        $data['page_title'] = "All Reffral";
        $data['upload_path'] = $this->arr_values['upload_path'];
        $data['submit_url'] = route($this->arr_values['routename'].'update');
        $data['back_btn'] = route($this->arr_values['routename'].'list');
        $data['add_btn_url'] = route($this->arr_values['routename'].'add');
        $data['edit_btn_url'] = route($this->arr_values['routename'].'edit');
        $data['delete_btn_url'] = route($this->arr_values['routename'].'delete');
        $data['keys'] = $this->arr_values['keys'];          
        $data['pagenation'] = array("Reffral");
        $data['trash'] = '';

        $row = User::where(["id"=>$id,])->first();
        if(!empty($row))
        {
            return view($this->arr_values['folder_name'].'/reffral',compact('data','row'));
        }
        else
        {
            return view('/404',compact('data'));
        }
    }
    public function load_reffral_data(Request $request)
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
      $order_by = "id desc";
      $is_delete = 0;
      $kyc = '';
      $state = '';
      $user_id = 0;
      $affiliate_id = 0;
      

      if(!empty($request->user_id)) $user_id = Crypt::decryptString($request->user_id);
      if(!empty($request->state)) $state = $request->state;
      if(!empty($request->limit)) $limit = $request->limit;
      if(!empty($request->status)) $status = $request->status;
      if(!empty($request->status)) $status = $request->status;
      if($request->kyc!='') $kyc = $request->kyc;
      if(!empty($request->order_by)) $order_by = $request->order_by;
      if(!empty($request->filter_search_value)) $filter_search_value = $request->filter_search_value;




        $data['table_name'] = $this->arr_values['table_name'];
        $data['upload_path'] = $this->arr_values['upload_path'];
        $data['back_btn'] = route($this->arr_values['routename'].'list');
        $data['add_btn_url'] = route($this->arr_values['routename'].'add');
        $data['edit_btn_url'] = route($this->arr_values['routename'].'edit');
        $data['delete_btn_url'] = route($this->arr_values['routename'].'delete');

        $is_paid = 1;
        if($status==1) $is_paid = 1;
        if($status==2) $is_paid = 0;

        $user = MemberModel::GetUserData($user_id);
        $affiliate_id = $user->user_id;


        $data_list = User::where(['is_paid' => $is_paid])
            ->where(['sponser_id'=>$affiliate_id,]);
        if(!empty($state))
            $data_list = $data_list->where(['state'=>$state,]);
      
      if(!empty($filter_search_value))
      {
        $filter_search_value = explode(" ", $filter_search_value);
        foreach ($filter_search_value as $key => $value)
        {
            $data_list = $data_list->where('name','LIKE',"%{$value}%");            
        }
      }




      $data_list = $data_list->latest()->paginate($limit);
      $view = View::make($this->arr_values['folder_name'].'/reffral-table',compact('data_list','data'))->render();
        $responseCode = 200;
        $result['status'] = $responseCode;
        $result['message'] = 'Success';
        $result['action'] = 'view';
        $result['data'] = ["list"=>$view,];
        return response()->json($result, $responseCode);
    }




    public function team_reffral($id)
    {
        $id = Crypt::decryptString($id);
        $data['title'] = ""."Team Referral";
        $data['page_title'] = "All "."Team Referral";
        $data['upload_path'] = $this->arr_values['upload_path'];
        $data['submit_url'] = route($this->arr_values['routename'].'update');
        $data['back_btn'] = route($this->arr_values['routename'].'list');
        $data['add_btn_url'] = route($this->arr_values['routename'].'add');
        $data['edit_btn_url'] = route($this->arr_values['routename'].'edit');
        $data['delete_btn_url'] = route($this->arr_values['routename'].'delete');
        $data['keys'] = $this->arr_values['keys'];          
        $data['pagenation'] = array("Team Referral");
        $data['trash'] = '';

        $row = User::where(["id"=>$id,])->first();
        if(!empty($row))
        {
            return view($this->arr_values['folder_name'].'/team-reffral',compact('data','row'));
        }
        else
        {
            return view('/404',compact('data'));
        }

    }
    public function load_team_reffral_data(Request $request)
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
      $order_by = "id desc";
      $is_delete = 0;
      $kyc = '';
      $state = '';
      $user_id = 0;
      $affiliate_id = 0;
      

      if(!empty($request->user_id)) $user_id = Crypt::decryptString($request->user_id);
      if(!empty($request->state)) $state = $request->state;
      if(!empty($request->limit)) $limit = $request->limit;
      if(!empty($request->status)) $status = $request->status;
      if(!empty($request->status)) $status = $request->status;
      if($request->kyc!='') $kyc = $request->kyc;
      if(!empty($request->order_by)) $order_by = $request->order_by;
      if(!empty($request->filter_search_value)) $filter_search_value = $request->filter_search_value;




        $data['table_name'] = $this->arr_values['table_name'];
        $data['upload_path'] = $this->arr_values['upload_path'];
        $data['back_btn'] = route($this->arr_values['routename'].'list');
        $data['add_btn_url'] = route($this->arr_values['routename'].'add');
        $data['edit_btn_url'] = route($this->arr_values['routename'].'edit');
        $data['delete_btn_url'] = route($this->arr_values['routename'].'delete');

        $is_paid = 1;
        if($status==1) $is_paid = 1;
        if($status==2) $is_paid = 0;

        $user = MemberModel::GetUserData($user_id);
        $affiliate_id = $user->user_id;


        $all_child_ids_paid = MemberModel::getAllChildIds($user_id);


        $data_list = User::where(['is_paid' => $is_paid])
            ->whereIn('id',$all_child_ids_paid);
            // ->where(['sponser_id'=>$affiliate_id,]);
        if(!empty($state))
            $data_list = $data_list->where(['state'=>$state,]);
      
      if(!empty($filter_search_value))
      {
        $filter_search_value = explode(" ", $filter_search_value);
        foreach ($filter_search_value as $key => $value)
        {
            $data_list = $data_list->where('name','LIKE',"%{$value}%");            
        }
      }




      $data_list = $data_list->latest()->paginate($limit);
      $view = View::make($this->arr_values['folder_name'].'/team-reffral-table',compact('data_list','data'))->render();
        $responseCode = 200;
        $result['status'] = $responseCode;
        $result['message'] = 'Success';
        $result['action'] = 'view';
        $result['data'] = ["list"=>$view,];
        return response()->json($result, $responseCode);
    }








    public function account_action($id='')
    {   
        $id = Crypt::decryptString($id);
        $data['title'] = "".$this->arr_values['title'];
        $data['page_title'] = "".$this->arr_values['page_title']." Account Action";
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

        $row = User::where(["id"=>$id,])->first();
        if(!empty($row))
        {
            $package = DB::table("package")->where(["status"=>1,])->get();
            return view($this->arr_values['folder_name'].'/account-view',compact('data','row','package'));
        }
        else
        {
            return view('/404',compact('data'));            
        }
    }


   


    public function send_password(Request $request)
    {
        $id = Crypt::decryptString($request->user_id);
        if(empty($id)) $data = new User;
        else $data = User::find($id);

        $session = Session::get('admin');
        $add_by = $session['id'];
              
        $password =  @Helpers::randomPassword(10,1,"lower_case,upper_case,numbers,special_symbols")[0];

        $data->password = md5($password);
        $data->add_by = $add_by;
        $data->is_delete = 0;



        $details = [
            'to'=>$data->email,
            'view'=>'mailtemplate.login-detail',
            'subject'=>'Login Detail',
            'body' => ["email"=>$data->email,"password"=>$password,],
        ];
        MailModel::send_password($details);
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



    public function block_unblock(Request $request)
    {
        $id = Crypt::decryptString($request->user_id);
        if(empty($id)) $data = new User;
        else $data = User::find($id);

        $session = Session::get('admin');
        $add_by = $session['id'];
              
        $status = 1;
        if($data->status==1) $status = 0;
        else $status = 1;

        
        $data->status = $status;
        $data->add_by = $add_by;
        $data->is_delete = 0;

        if($data->save())
        {
            $responseCode = 200;
            $result['status'] = $responseCode;
            $result['message'] = 'Success';
            $result['action'] = 'view';
            $result['data'] = ["status"=>$status,];
            return response()->json($result, $responseCode);
        }
    }




    public function excel_export(Request $request)
    {
      $limit = 1200000;
      $page = 1;
      $page1 = 1;
      $offset = 0;
      $status = 1;
      $table_id = 1;
      $listcheckbox = [];
      $filter_search_value = '';
      $keys = '';
      $where_query = "";
      $order_by = "id desc";
      $is_delete = 0;
      $kyc = '';
      

      // if(!empty($request->limit)) $limit = $request->limit;
      $status = $request->status;
      if($request->kyc!='') $kyc = $request->kyc;
      if(!empty($request->order_by)) $order_by = $request->order_by;
      if(!empty($request->filter_search_value)) $filter_search_value = $request->filter_search_value;



        $data['table_name'] = $this->arr_values['table_name'];
        $data['upload_path'] = $this->arr_values['upload_path'];
        $data['back_btn'] = route($this->arr_values['routename'].'list');
        $data['add_btn_url'] = route($this->arr_values['routename'].'add');
        $data['edit_btn_url'] = route($this->arr_values['routename'].'edit');
        $data['delete_btn_url'] = route($this->arr_values['routename'].'delete');

        $is_paid = 1;
        if($status==1) $is_paid = 1;
        else if($status==2) $is_paid = 0;
        else $is_paid = 0;


        if($status==0)
        {
            $data_list = User::whereIn('is_paid',[0,1,null]);
        } 
        else
        {
            $data_list = User::where(['is_paid' => $is_paid]);
        }
        if($kyc!='') $data_list = $data_list->where(['kyc_step'=>$kyc,]);

        if(!empty($request->from_date) && !empty($request->to_date))
        {
            $from_date = $request->from_date." 00:00:00";
            $to_date = $request->to_date." 23:59:00";
            $data_list->whereBetween('add_date_time', [$from_date, $to_date]);
        }

      
      if(!empty($filter_search_value))
      {
        $filter_search_value = explode(" ", $filter_search_value);
        foreach ($filter_search_value as $key => $value)
        {
            $data_list = $data_list->where('name','LIKE',"%{$value}%");            
        }
      }
        $employeeData = $data_list->latest()->paginate($limit);





        $session = Session::get('admin');
        $Admin_id = $session['id'];
        $columns = "Name,Email,Mobile,Status";
        $fileName = "Users-Data-".date("Y-m-d H-i-s")."-".$Admin_id.".xlsx";
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $a_to_z = Helpers::a_to_z();
        
        $columns_array = explode(",", $columns);
        $i = 0;
        $j = 1;
        foreach ($columns_array as $key => $value)
        {
            $excel_field = $a_to_z[$i].$j;
            $col_name = ucfirst(str_replace("_", " ", $value));
            $sheet->setCellValue($excel_field, $col_name);
            $i++;
        }
        $rows = 2;
        foreach ($employeeData as $value)
        {

            $status = '';
            if($value->is_paid==1) $status = 'PAID';
            else $status = 'UNPAID';

            $sheet->setCellValue("A" . $rows, $value->name);
            $sheet->setCellValue("B" . $rows, $value->email);
            $sheet->setCellValue("C" . $rows, $value->phone);
            $sheet->setCellValue("D" . $rows, $status);
           
           $rows++;
        } 
        $writer = new Xlsx($spreadsheet);
        $writer->save(base_path('')."/excel/".$fileName);
        $responseCode = 200;
        $result['status'] = $responseCode;
        $result['message'] = 'Success';
        $result['action'] = 'exportdata';
        $result['url'] = url('')."/excel/".$fileName;
        $result['data'] = ["fileName"=>$fileName,];
        return response()->json($result, $responseCode);
    }








    public function delete(Request $request, $id)
    {
        $id = Crypt::decryptString($request->id);
        $data = User::find($id);
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