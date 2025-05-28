<?php
namespace App\Http\Controllers\APi;
use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

use App\Helper\Helpers;

class CommonController extends Controller
{        
    public function country(Request $request)
    {
        $data = DB::table("countries")->get();
        
        $responseCode = 200;
        $result['status'] = $responseCode;
        $result['message'] = 'Success';
        $result['action'] = 'return';
        $result['data'] = $data;

        return response()->json($result, $responseCode);
    }

    public function package(Request $request)
    {
        $data = DB::table("package")->get();
        
        $responseCode = 200;
        $result['status'] = $responseCode;
        $result['message'] = 'Success';
        $result['action'] = 'return';
        $result['data'] = $data;

        return response()->json($result, $responseCode);
    }
    public function state(Request $request)
    {
        $data = DB::table("states")
        // ->limit(2)
        ->get();
        
        $responseCode = 200;
        $result['status'] = $responseCode;
        $result['message'] = 'Success';
        $result['action'] = 'return';
        $result['data'] = $data;

        return response()->json($result, $responseCode);
    }
    public function category(Request $request)
    {
        $data = DB::table("category")
        // ->limit(2)
        ->get();
        
        $responseCode = 200;
        $result['status'] = $responseCode;
        $result['message'] = 'Success';
        $result['action'] = 'return';
        $result['data'] = $data;

        return response()->json($result, $responseCode);
    }
    
    
    
}