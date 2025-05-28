<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use App\Models\MemberModel;
use App\Models\MailModel;
use App\Models\Package;
use App\Helper\Helpers;


class WebController extends Controller
{
   
   
    
    public function category(Request $request)
    {
        $search = $request->search;
        $list = DB::table("category")->select('name','id')->limit(50);
        if(!empty($search))
        {
            $search = explode(" ", $search);
            foreach ($search as $key => $value)
            {
                $list = $list->where('name','LIKE',"%{$value}%");
            }
        }
        $list = $list->get();
        $return_data = [];
        foreach ($list as $key => $value) {
            $return_data[] = array("id"=>$value->id,"text"=>$value->name,);
        }
        $data['results'] = $return_data;
        return response()->json($data, 200);
    }
    public function sub_category(Request $request)
    {
        $search = $request->search;
        $id = $request->id;
        $list = DB::table("sub_category")->select('name','id')->limit(50);
        if(!empty($id)) $list = $list->where('category_id', $id);
        if(!empty($search))
        {
            $search = explode(" ", $search);
            foreach ($search as $key => $value)
            {
                $list = $list->where('name','LIKE',"%{$value}%");
            }
        }
        $list = $list->get();
        $return_data = [];
        foreach ($list as $key => $value) {
            $return_data[] = array("id"=>$value->id,"text"=>$value->name,);
        }
        $data['results'] = $return_data;
        return response()->json($data, 200);
    }
    public function sub_sub_category(Request $request)
    {
        $search = $request->search;
        $id = $request->id;
        $list = DB::table("sub_sub_category")->select('name','id')->limit(50);
        if(!empty($id)) $list = $list->where('sub_category_id', $id);
        if(!empty($search))
        {
            $search = explode(" ", $search);
            foreach ($search as $key => $value)
            {
                $list = $list->where('name','LIKE',"%{$value}%");
            }
        }
        $list = $list->get();
        $return_data = [];
        foreach ($list as $key => $value) {
            $return_data[] = array("id"=>$value->id,"text"=>$value->name,);
        }
        $data['results'] = $return_data;
        return response()->json($data, 200);
    }
    public function sub_sub_sub_category(Request $request)
    {
        $search = $request->search;
        $id = $request->id;
        $list = DB::table("sub_sub_sub_category")->select('name','id')->limit(50);
        if(!empty($id)) $list = $list->where('sub_sub_category_id', $id);
        if(!empty($search))
        {
            $search = explode(" ", $search);
            foreach ($search as $key => $value)
            {
                $list = $list->where('name','LIKE',"%{$value}%");
            }
        }
        $list = $list->get();
        $return_data = [];
        foreach ($list as $key => $value) {
            $return_data[] = array("id"=>$value->id,"text"=>$value->name,);
        }
        $data['results'] = $return_data;
        return response()->json($data, 200);
    }
    public function search_package(Request $request)
    {
        $search = $request->search;
        $list = DB::table("package")->select('name','id')->limit(50);
        if(!empty($search))
        {
            $search = explode(" ", $search);
            foreach ($search as $key => $value)
            {
                $list = $list->where('name','LIKE',"%{$value}%");
            }
        }
        $list = $list->get();
        $return_data = [];
        foreach ($list as $key => $value) {
            $return_data[] = array("id"=>$value->id,"text"=>$value->name,);
        }
        $data['results'] = $return_data;
        return response()->json($data, 200);
    }
    
   
   
  
   
    
   
   
    
}