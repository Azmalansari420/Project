<?php
namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Helper\Helpers;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{


    public function all(Request $request, $page = null)
    {
        return false;
        if(empty($page)) $page = 'index.blade.php';
        $data = array();
        $table_name = '';
        $p_id = '';
        $base = url('/');
        $slug = $url = explode('.',$request->segment(1))[0];
        $stateCity = '';
        
        // if (!empty($url)) {
        //     $checkStateCity = explode('-in-', $url);
        //     if (count($checkStateCity) > 1) {
        //         $stateCity = $this->decodeSlug($checkStateCity[1]);
        //         $emptyCheck1 = DB::table('state')->where("name", $stateCity)->first();
        //         $emptyCheck2 = DB::table('city')->where("name", $stateCity)->first();
        //         if (!empty($emptyCheck1) || !empty($emptyCheck2)) {
        //             $url = $checkStateCity[0];
        //         }
        //     }
        // }


       

        $slug_data = DB::table('slugs')->where(["slug"=>$url])->first();
        if(!empty($slug_data))
        {
            $page = $slug_data->page_name;
            $table_name = $slug_data->table_name;
            $p_id = $slug_data->p_id;

            $count = explode(".", $page);
            if(count($count)==1)
            {
                $page_check = $count[0].'.blade.php';
                $page = $count[0];
            }
            else
            {
                $page_check = $count[0].'.blade.'.end($count);
                $page = $count[0];
            }

        }
        else
        {
            $count = explode(".", $page);
            if(count($count)==1)
            {
                $page_check = $count[0].'.blade.php';
                $page = $count[0];
            }
            else
            {
                $page_check = $count[0].'.blade.'.end($count);
                $page = $count[0];
            }
        }
        $check_page = resource_path().'/views/web/'.$page_check;
        
        $row_data = [];
        $slug = $url;

        // $meta_data = DB::table("meta_tags")
        //     ->select("page_name", "meta_title", "meta_keywords", "meta_description", "meta_author","image")
        //     ->where("slug", $url)
        //     ->first();

        // if (empty($meta_data)) {
        //     $meta_data = DB::table("meta_tags")
        //         ->select("page_name", "meta_title", "meta_keywords", "meta_description", "meta_author","image")
        //         ->where(["slug" => 'home', "is_delete" => 0, "status" => 1])
        //         ->first();
        // }


        
        // $data['meta_data'] = $meta_data;
        $data['contact_detail'] = json_decode(DB::table('setting')->where("name", 'main')->value('data'));
        $data['logo'] = json_decode(DB::table('setting')->where("name", 'logo')->value('data'));
        $data['slug'] = $slug;
        $data['id'] = 0;
        $data['stateCity'] = $stateCity ? ' In ' . $stateCity : $stateCity;
        // $data['script'] = DB::table('script')->first();


        $captchanumber1 = rand(1, 10);
        $captchanumber2 = rand(1, 10);
        $captcha_result = $captchanumber1 + $captchanumber2;
        Session::put('captchanumber1', $captchanumber1);
        Session::put('captchanumber2', $captchanumber2);
        Session::put('captcha_result', $captcha_result);
        $data['captcha_num1'] = $captchanumber1;
        $data['captcha_num2'] = $captchanumber2;





        if(file_exists($check_page))
        {
            if (!empty($table_name)) {
                $data['row_data'] = DB::table($table_name)->where("id", $p_id)->first();
                if (!empty($data['row_data'])) {
                    $data['id'] = $data['row_data']->id;
                }
                $data['row'] = $data['row_data'];
            }
            return view('web.' . str_replace('.php', '', $page), $data);
        }
        else
        {
            return view('web/404', $data);
        }
    }


    public function allold(Request $request, $page='')
    {
        if(empty($page))
        {
            $page_check = 'index.balde.php';
            $page = 'index';
        }
        $count = explode(".", $page);
        if(count($count)==1)
        {
            $page_check = $count[0].'.blade.php';
            $page = $count[0];
        }
        else
        {
            $page_check = $count[0].'.blade.'.$count[1];
            $page = $count[0];
        }        
        $data = [];
        $setting = \App\Models\Setting::get();
        $main_setting = $setting['main'];
        $data['setting'] = $setting;
        $data['main_setting'] = $main_setting;
        if(file_exists(resource_path().'/views/web/'.$page_check))
        {
            return view('web/'.$page,compact('setting','main_setting'));
            // $this->template->load('template2', 'web/'.$page,$data);
        }
        else
        {
            return view('web/404',compact('setting','main_setting'));
        }
    }
    
}