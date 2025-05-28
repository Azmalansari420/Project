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
use App\Models\Setting;
use App\Models\CourseBanner;
use App\Models\AllCourseBanner;
 
class SettingController extends Controller
{
     protected $arr_values = array(
        'routename'=>'setting.', 
        'title'=>'Setting Main', 
        'table_name'=>'setting',
        'page_title'=>'Setting Main',
        "folder_name"=>'/setting',
        "upload_path"=>'upload/',
        "keys"=>'id,name',
       );  

      public function __construct()
      {
         $this->arr_values['folder_name'] = env("admin_view_folder") . $this->arr_values['folder_name'];
        Helpers::create_importent_columns($this->arr_values['table_name']);
      }

   
  
    public function main($id='')
    {   
        $data['title'] = "Setting Main";
        $data['page_title'] = "Setting Main";
        $data['table_name'] = $this->arr_values['table_name'];
        $data['upload_path'] = $this->arr_values['upload_path'];
        $data['submit_url'] = route($this->arr_values['routename'].'main-update');
        $data['keys'] = $this->arr_values['keys'];          
        $data['pagenation'] = array($this->arr_values['title']);
        $data['trash'] = '';
        $row = Setting::where(["name"=>'main',])->first();
        if(!empty($row))
        {
            $form_data = json_decode($row->data);
            return view($this->arr_values['folder_name'].'/main-form',compact('data','row','form_data'));
        }
        else
        {
            return view('/404',compact('data'));            
        }
    }
    public function main_update(Request $request)
    {
        $id = Crypt::decryptString($request->id);
        if(empty($id)) $data = new Setting;
        else $data = Setting::find($id);
        $session = Session::get('admin');
        $add_by = $session['id'];        
        
        $email = $request->email;
        $mobile = $request->mobile;
        $facebook = $request->facebook;
        $twitter = $request->twitter;
        $whatsapp = $request->whatsapp;
        $youtube = $request->youtube;
        $address = $request->address;
        $instagram = $request->instagram;
        $telegram = $request->telegram;
        $linkedin = $request->linkedin;
        $top_bar_hide_show = $request->top_bar_hide_show;
        $instructor_form_link = $request->instructor_form_link;
        $min_deposit = $request->min_deposit;
        $withdrawal_amount = $request->withdrawal_amount;
        $upi = $request->upi;

        $data->data = json_encode([
            "email"=>$email,
            "mobile"=>$mobile,
            "facebook"=>$facebook,
            "twitter"=>$twitter,
            "whatsapp"=>$whatsapp,
            "youtube"=>$youtube,
            "address"=>$address,
            "instagram"=>$instagram,
            "telegram"=>$telegram,
            "linkedin"=>$linkedin,
            "top_bar_hide_show"=>$top_bar_hide_show,
            "instructor_form_link"=>$instructor_form_link,
            "min_deposit"=>$min_deposit,
            "withdrawal_amount"=>$withdrawal_amount,
            "upi"=>$upi,
        ]);

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

    public function gst($id='')
    {   
        $data['title'] = "Setting GST";
        $data['page_title'] = "Setting GST";
        $data['table_name'] = $this->arr_values['table_name'];
        $data['upload_path'] = $this->arr_values['upload_path'];
        $data['submit_url'] = route($this->arr_values['routename'].'gst-update');
        $data['keys'] = $this->arr_values['keys'];          
        $data['pagenation'] = array($this->arr_values['title']);
        $data['trash'] = '';
        $row = Setting::where(["name"=>'gst',])->first();
        if(!empty($row))
        {
            $form_data = json_decode($row->data);
            return view($this->arr_values['folder_name'].'/gst-form',compact('data','row','form_data'));
        }
        else
        {
            return view('/404',compact('data'));            
        }
    }
    public function gst_update(Request $request)
    {
        $id = Crypt::decryptString($request->id);
        if(empty($id)) $data = new Setting;
        else $data = Setting::find($id);
        $session = Session::get('admin');
        $add_by = $session['id'];        
        
        $gst = $request->gst;
        $tds = $request->tds;

        $data->data = json_encode([
            "gst"=>$gst,
            "tds"=>$tds,
        ]);

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

    public function payoutpin($id='')
    {   
        $data['title'] = "Setting Payout PIN";
        $data['page_title'] = "Setting Payout PIN";
        $data['table_name'] = $this->arr_values['table_name'];
        $data['upload_path'] = $this->arr_values['upload_path'];
        $data['submit_url'] = route($this->arr_values['routename'].'payoutpin-update');
        $data['keys'] = $this->arr_values['keys'];          
        $data['pagenation'] = array($this->arr_values['title']);
        $data['trash'] = '';
        $row = Setting::where(["name"=>'payoutpin',])->first();
        if(!empty($row))
        {
            $form_data = json_decode($row->data);
            return view($this->arr_values['folder_name'].'/payoutpin-form',compact('data','row','form_data'));
        }
        else
        {
            return view('/404',compact('data'));            
        }
    }
    public function payoutpin_update(Request $request)
    {
        $id = Crypt::decryptString($request->id);
        if(empty($id)) $data = new Setting;
        else $data = Setting::find($id);
        $session = Session::get('admin');
        $add_by = $session['id'];        
        
        $pin = $request->payoutpin;

        $data->data = json_encode([
            "pin"=>$pin,
        ]);

        $data->add_by = $add_by;
        $data->is_delete = 0;
        if($data->save())
        {
            $responseCode = 200;
            $result['status'] = $responseCode;
            $result['message'] = 'Success';
            $result['action'] = 'edit';
            $result['data'] = [];
            return response()->json($result, $responseCode);
        }
    }

    public function emails($id='')
    {   
        $data['title'] = "Setting Emails";
        $data['page_title'] = "Setting Emails";
        $data['table_name'] = $this->arr_values['table_name'];
        $data['upload_path'] = $this->arr_values['upload_path'];
        $data['submit_url'] = route($this->arr_values['routename'].'emails-update');
        $data['keys'] = $this->arr_values['keys'];          
        $data['pagenation'] = array($this->arr_values['title']);
        $data['trash'] = '';
        $row = Setting::where(["name"=>'emails',])->first();
        if(!empty($row))
        {
            $form_data = json_decode($row->data);
            return view($this->arr_values['folder_name'].'/emails-form',compact('data','row','form_data'));
        }
        else
        {
            return view('/404',compact('data'));            
        }
    }
    public function emails_update(Request $request)
    {
        $id = Crypt::decryptString($request->id);
        if(empty($id)) $data = new Setting;
        else $data = Setting::find($id);
        $session = Session::get('admin');
        $add_by = $session['id'];        
        
        $registration_email = $request->registration_email;

        $data->data = json_encode([
            "registration_email"=>$registration_email,
        ]);

        $data->add_by = $add_by;
        $data->is_delete = 0;
        if($data->save())
        {
            $responseCode = 200;
            $result['status'] = $responseCode;
            $result['message'] = 'Success';
            $result['action'] = 'edit';
            $result['data'] = [];
            return response()->json($result, $responseCode);
        }
    }


}