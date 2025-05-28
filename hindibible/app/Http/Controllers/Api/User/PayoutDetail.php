<?php
namespace App\Http\Controllers\APi\User;


use App\Helper\Helpers;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Custom;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use App\Helper\ImageManager;
use App\Models\PayoutHistory;
use App\Models\MemberModel;
 
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class UserPayoutDetail extends Controller
{
     protected $arr_values = array(
        'routename'=>'user.payout-detail.', 
        'title'=>'Payout Detail', 
        'table_name'=>'report',
        'page_title'=>'Payout Detail',
        "folder_name"=>user_view_folder.'/payout-detail',
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
        $data['page_title'] = "All ".$this->arr_values['page_title'];
        $data['upload_path'] = $this->arr_values['upload_path'];
        $data['submit_url'] = route($this->arr_values['routename'].'update');
        $data['back_btn'] = route($this->arr_values['routename'].'list');
        $data['keys'] = $this->arr_values['keys'];          
        $data['pagenation'] = array($this->arr_values['title']);
        $data['trash'] = '';
        return view($this->arr_values['folder_name'].'/index',compact('data'));
    }
    public function load_data(Request $request)
    {

        $session = Session::get('user');
        $id = $session['id'];

        $user_data = MemberModel::GetUserData($id);
        $affiliate_id = $user_data->affiliate_id;

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
      

      $status = $request->status;
      
      
      if(!empty($request->limit)) $limit = $request->limit;
      if(!empty($request->filter_search_value)) $filter_search_value = $request->filter_search_value;


        $data['table_name'] = $this->arr_values['table_name'];
        $data['upload_path'] = $this->arr_values['upload_path'];
        $data['back_btn'] = route($this->arr_values['routename'].'list');        

        
        // $data_list = PayoutHistory::where(['report.status' => 1,'report.payment'=>$status,])
        // ->where('affiliate_id',$affiliate_id)
        // ->orderBy('report.id',$order_by);
        // $data_list = $data_list->latest()->paginate($limit);



        $data_list = PayoutHistory::where('affiliate_id',$affiliate_id)
        ->where(['report.status' => 1,'report.payment'=>$status,])
        ->select(
            DB::raw('WEEK(only_date, 1) as week_number'),
            DB::raw('YEAR(only_date) as year'),
            DB::raw('DATE_ADD(DATE(only_date), INTERVAL(2 - DAYOFWEEK(only_date)) DAY) as week_start'),
            DB::raw('DATE_ADD(DATE(only_date), INTERVAL(8 - DAYOFWEEK(only_date)) DAY) as week_end'),
            DB::raw('SUM(final_amount) as final_amount'),

            DB::raw('SUM(tds) as tds'),
            DB::raw('SUM(amount) as amount'),
            'payment'
        )
        ->whereBetween('only_date', [Carbon::now()->startOfYear(), Carbon::now()->endOfYear()])
        ->groupBy('year', 'week_number') // Group by week and year
        ->orderBy('year', 'desc')
        ->orderBy('week_number', 'desc')
        ->latest()->paginate($limit);

        // print_r($data_list);
        


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

        $row = PayoutHistory::where(["id"=>$id,])->first();
        if(!empty($row))
        {
            return view($this->arr_values['folder_name'].'/form',compact('data','row'));
        }
        else
        {
            return view(user_view_folder.'/404',compact('data'));            
        }
    }

    public function update(Request $request)
    {
        $id = Crypt::decryptString($request->id);
        if(empty($id)) $data = new PayoutHistory;
        else $data = PayoutHistory::find($id);

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


    public function excel_export(Request $request)
    {
       $limit = 12000000;
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
      
      $session = Session::get('user');
      $id = $session['id'];
      $user_data = MemberModel::GetUserData($id);
      $affiliate_id = $user_data->affiliate_id;



        $status = $request->status;
      
      
        
        $data_list = PayoutHistory::where(['report.status' => 1,'report.payment'=>$status,])
        ->where('affiliate_id',$affiliate_id)
        ->orderBy('report.id',$order_by);
        $employeeData = $data_list->latest()->paginate($limit);





        $session = Session::get('user');
        $Admin_id = $session['id'];
        $columns = "Amount,TDS,Final Amount,Status,Date";
        $fileName = "Payout-Detail-".date("Y-m-d H-i-s")."-".$Admin_id.".xlsx";
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
            $sponser = MemberModel::GetSponserData($value->sponser_id);

            $statusHtml = "";
            $sponser_detail = "";
            if($status==1) $statusHtml = 'Paid';
            else $statusHtml = 'Unpaid';

            $sponser_detail = sort_name.$value->sponser_id.', '.@$sponser->name;

            $sheet->setCellValue("A" . $rows, $value->amount);
            $sheet->setCellValue("B" . $rows, $value->tds);
            $sheet->setCellValue("C" . $rows, $value->final_amount);
            $sheet->setCellValue("D" . $rows, $statusHtml);
            $sheet->setCellValue("E" . $rows, $value->add_date_time);
           
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
        $data = PayoutHistory::find($id);
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