<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Helper\Helpers;
use Custom_model;

 
class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $from_date = $request->from_date;
        $to_date = $request->to_date;
        if(empty($from_date) && empty($to_date))
        {
            $from_date = date("Y-m-d")." 00:00:00";
            $to_date = date("Y-m-d")." 23:59:00";            
        }
        else
        {
            $from_date .= " 00:00:00";
            $to_date .= " 23:59:00";
        }
        $all_time_income = 0;
        $all_time_data = DB::table("transaction")
        ->select(DB::raw('SUM(final_amount) as final_amount'))
        ->whereBetween('payment_date_time', [$from_date, $to_date])
        ->where(["status"=>1,])->first();
        if(!empty($all_time_data->final_amount)) $all_time_income = $all_time_data->final_amount;
        else $all_time_income = 0;


        $all_time_gst = 0;
        $all_time_gst_data = DB::table("transaction")
        ->select(DB::raw('SUM(gst) as gst'))
        ->whereBetween('payment_date_time', [$from_date, $to_date])
        ->where(["status"=>1,])->first();
        if(!empty($all_time_gst_data->gst)) $all_time_gst = $all_time_gst_data->gst;
        else $all_time_gst = 0;        
        $all_time_gst = (int) $all_time_gst;



        $total_paybele_amount = 0;


        $total_paid_amount = 0;


        $profit_loss = 0;



        
        return view('admin.dashboard.index',compact('all_time_income','all_time_gst','profit_loss','total_paid_amount','total_paybele_amount','from_date','to_date'));
    }
    public function admin_earning_calendar(Request $request)
    {   
        $start = $request->start;
        $end = $request->end;
        $start_date = $start;
        $end_date = $end;
        $data = DB::table('transaction')
        ->select(
            DB::raw('CONCAT(YEAR(payment_date_time), "-", MONTH(payment_date_time), "-", DAY(payment_date_time)) as date'),
            DB::raw('SUM(final_amount) as total_amount')
        )
        ->whereBetween('transaction.payment_date_time', [$start_date, $end_date])
        ->where('status',1)
        ->groupBy('date')
        ->get();
        $events = [];
        foreach ($data as $key => $value) {
            $events[] = ["title"=>Helpers::price_formate($value->total_amount),"start"=>date("Y-m-d",strtotime($value->date)),];
        }        
        return response()->json(["events"=>$events], 200);
    }
}