<?php
namespace App\Http\Controllers\APi\Sales;
use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

use App\Helper\Helpers;

class AttendanceController extends Controller
{
    protected $arr_values = array(
        'table_name'=>'attendance',
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
        $filter_search_value = '';      
        $order_by = "desc";
        $employee_id = $this->employee_id;

        if(!empty($request->filter_search_value)) $filter_search_value = $request->filter_search_value;
        
        $data_list = DB::table($this->arr_values['table_name'])->where(['status' => $status,"employee_id"=>$employee_id,])->orderBy('id',$order_by);
        if(!empty($filter_search_value))
        {
            $filter_search_value = explode(" ", $filter_search_value);
            foreach ($filter_search_value as $key => $value)
            {
                $data_list = $data_list->where('name','LIKE',"%{$value}%");            
            }
        }
        $data_list = $data_list->paginate($limit);
        
        $responseCode = 200;
        $result['status'] = $responseCode;
        $result['message'] = 'Success';
        $result['action'] = 'list';
        $result['data'] = $data_list;
        return response()->json($result, $responseCode);
    }
    public function punch_in(Request $request)
    {
        $entryStatus = false;

        $employee_id = $this->employee_id;

        $data['employee_id'] = $employee_id;
        $data['punch_in'] = date("H:i:s");
        $data['date'] = date("Y-m-d");
        
        $data['status'] = 1;

        $check = DB::table($this->arr_values['table_name'])->where(["employee_id"=>$employee_id,"date"=>date("Y-m-d"),])->first();
        if(!empty($check))
        {
            $action = 'add';
            $responseCode = 400;
            $result['status'] = $responseCode;
            $result['message'] = 'You Allready Punch!';
            $result['action'] = $action;
            $result['data'] = [];
            return response()->json($result, $responseCode);
        }


        $insertId = DB::table($this->arr_values['table_name'])->insertGetId($data);
        if($insertId)
        {
            $entryStatus = true;
        }

        if($entryStatus)
        {
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
    public function punch_out(Request $request)
    {
        $entryStatus = false;

        $employee_id = $this->employee_id;

        $data['punch_out'] = date("H:i:s");
        
        
        $data['status'] = 1;

        $check = DB::table($this->arr_values['table_name'])->where(["employee_id"=>$employee_id,"date"=>date("Y-m-d"),])->first();
        if(empty($check))
        {
            $action = 'add';
            $responseCode = 400;
            $result['status'] = $responseCode;
            $result['message'] = 'Please Punch In First!';
            $result['action'] = $action;
            $result['data'] = [];
            return response()->json($result, $responseCode);
        }


        DB::table($this->arr_values['table_name'])->where('id',$check->id)->update($data);
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
    public function attendance_calendar(Request $request)
    {
        $entryStatus = false;

        $employee_id = $this->employee_id;

        $year = $request->year;
        $month = $request->month;

        if(empty($month)) $month = date("m");
        if(empty($year)) $year = date("Y");

        $i = 1;


        $data = [];
        $totalDays = cal_days_in_month(CAL_GREGORIAN, $month, $year);
        while($i<=$totalDays)
        {
            $status = 'Absent';
            $date = date("Y-m-d", strtotime($year.'-'.$month.'-'.$i));
            $punch_in = '';
            $punch_out = '';
            $working_time = '';

            $attendanceData = DB::table($this->arr_values['table_name'])->where(["employee_id"=>$employee_id,"date"=>$date,])->first();
            if(!empty($attendanceData))
            {
                $punch_in = $attendanceData->punch_in;
                $punch_out = $attendanceData->punch_out;
                $status = 'Precent';
            }

            if(date("D", strtotime($date))=='Sun') $status = 'Holiday';


            $data[] =   [
                            "key"=>$i,
                            "date"=>$date,
                            "status"=>$status,
                            "punch_in"=>$punch_in,
                            "punch_out"=>$punch_out,
                            "working_time"=>$working_time,
                            "day"=>date("D", strtotime($date)),
                        ];
            $i++;
        }
            
        

        $action = 'detail';
        $responseCode = 200;
        $result['status'] = $responseCode;
        $result['message'] = 'Success';
        $result['action'] = $action;
        $result['data'] = $data;
        return response()->json($result, $responseCode);
        
        
    }
    
    
}