<?php
namespace App\Helper;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

Class Helpers
{
    
    
  public static function encode_token($data)
  {
    $data = json_encode($data);
    return base64_encode(base64_encode(base64_encode($data)));
  }
  public static function decode_token($data)
  {
    if(empty($data)) return false;
    $data = explode('Bearer ', $data);
    if(!isset($data[1])) return false;

    $data = $data[1];
    $data = base64_decode(base64_decode(base64_decode($data)));
    $data = json_decode($data);

    if(empty($data->user_id)) return false;

    $tokenRow = DB::table("login_history")->where(["user_id"=>$data->user_id,"device_id"=>$data->device_id,"status"=>1])->first();
    if(empty($tokenRow)) return false;

    return $data;
  }
  
  
  public static function user_panel_pages()
  {
    return ['dashboard','profile','change-password','course','certificate','upgrade-plan','kyc','profile-image'];
  }
  public static function slug($text)
  {
    $divider = '-';
    $text = preg_replace('~[^\pL\d]+~u', $divider, $text);
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    $text = trim($text, $divider);
    $text = strtolower($text);
    if (empty($text)) {
      return 'n-a';
    }
    return $text;
  }
  public static function slug2($text)
  {
    $divider = '_';
    $text = preg_replace('~[^\pL\d]+~u', $divider, $text);
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    $text = trim($text, $divider);
    $text = strtolower($text);
    if (empty($text)) {
      return 'n-a';
    }
    return $text;
  }
  public static function insert_slug($slug,$p_id,$table_name,$page_name='')
  {
      $data = array(
        "slug"=>$slug,
        "table_name"=>$table_name,
        "p_id"=>$p_id,
        "page_name"=>$page_name,
      );
      DB::table("slugs")->where(["table_name"=>$table_name,"p_id"=>$p_id,])->delete();
      if(empty(DB::table("slugs")->where('slug',$slug)->first()))
      {
          DB::table("slugs")->insert($data);
      }
      else
      { 
          $i=1;
          while ($i <= 10)
          {
            $slug2 = $slug.'-'.$i;
            $get_data = DB::table("slugs")->where(["slug"=>$slug2,])->first();
            if(empty($get_data))
            {
              $data['slug'] = $slug2;
              $slug = $slug2;
              DB::table("slugs")->insert($data);
              break;
            }
            $i++;
          } 
      }
      DB::table($table_name)->where(["id"=>$p_id,])->update(array("slug"=>$slug,));
      return $slug;
  }




  public static function pagination_custom($count,$limit,$page,$extra_data)
  {
    $url = '#!';
    $active_page = $page_active = $page;
    if(!empty($where))
      $where = " where ".$where;
    if ($page==1|| $page==0)
    {
      $offset = 0;
    }
    else
    {
      $offset = $limit * $page;
    }
    $page11=$page;
    $number_of_result = $count;
    $number_of_page = ceil ($number_of_result / $limit); 
    $page_prev = $page;
    $page_next = $page;
    ++$page_next;
    if($page>1)
      --$page_prev;
    $page1 = 1;
    $j=1;
    if($page==1 || $page==0)
    {
      $from_start = 1;
      $to_end = $limit;
    }
    else
    {
      $from_start = $offset-$limit;
      $to_end = $offset;
    }

    if($number_of_result<$limit)
    {
      $to_end = $number_of_result;
    }

    $page_list = array();
    $previous_list[] = array("url"=>'',"page"=>'',);
    $next_list[] = array("url"=>'',"page"=>'',"table_id"=>$extra_data['table_id'],);
    while( $page1<= $number_of_page)
    {
      if($page1==1)
      {
        $previous_list = array();
        $previous_list[] = array("url"=>$url,"page"=>$page_prev,"table_id"=>$extra_data['table_id'],);
      }
      if($page_active==$page1) $active = "active";else $active = "";
      if( $page1>=$page11&&$j<=5&&$page1!=$number_of_page )
      {
        $page_list[] = array("url"=>$url,"page"=>$page1,"table_id"=>$extra_data['table_id'],);
        $j++;
      }
      if($j==5)
      {
        $page_list[] = array("url"=>"","page"=>"...","table_id"=>$extra_data['table_id'],);
      }
      if($page1==$number_of_page)
      {
        $page_list[] = array("url"=>$url,"page"=>$page1,"table_id"=>$extra_data['table_id'],);
      }
      if($page1==$number_of_page && $page_next <= $number_of_page)
      { 
        $next_list = array();
        $next_list[] = array("url"=>$url,"page"=>$page_next,"table_id"=>$extra_data['table_id'],);
      }
      $page1++;
    }
    $result_data = array("previous_list"=>$previous_list,"next_list"=>$next_list,"page_list"=>$page_list,"total_count"=>$number_of_result,"from"=>$from_start,"to"=>$to_end,"active_page"=>$active_page,"total_page"=>$number_of_page,);
    return $result_data;
  }






  public static function status_get($value,$type)
  {

    $class = 'badge bg-success';
    $status = 'Active';
    if(empty($type))
    {
      if($value==1)
      {
        $status = 'Active';
        $class = 'badge bg-success';
      }
      else if($value==0)
      {
        $status = 'Inactive';
        $class = 'badge bg-danger';
      }
    }
    else if($type=='invoice')
    {
      if($value==1)
      {
        $status = 'PAID';
        $class = 'badge bg-success';
      }
      else if($value==0)
      {
        $status = 'UNPAID';
        $class = 'badge bg-danger';
      }
    }



    $html = '<div class="d-flex fs-6"><div class="badge '.$class.'" style="margin: 0 auto;">'.$status.'</div></div>';
    return $html;
  }



  public static function is_logged_in()
  {
      $ci =& get_instance();
      $role = $ci->session->userdata("role");
      $id = $ci->session->userdata("id");
      if(empty($id))
        redirect(base_url());
  }

  public static function setting()
  {
      $ci =& get_instance();
      $setting = $ci->db->get_where("setting",array("id"=>1,))->result_object();
      if(!empty($setting))
        $setting = $setting[0];
      return $setting;
  }

  public static function is_admin_logged_in()
  {
    $ci =& get_instance();
      $role = $ci->session->userdata("role");
      $id = $ci->session->userdata("id");
      if(empty($id))
        redirect(base_url('admin'));
      else if($role!=1)
        redirect(base_url('vendor/dashboard'));
  }

  public static function file_size_convert($value)
  {
    return $value;
  }


  public static function get_user()
  {    
    $session = Session::get('admin');
    if(!empty($session))
    {
        $user_id = $session['id'];
        return DB::table("users")->where("id",$user_id)->first();
    }
    else
    {
        return null;
    }
  }
  public static function get_user_user()
  {    
    $session = Session::get('user');
    if(!empty($session))
    {
        $user_id = $session['id'];
        return DB::table("users")->where("id",$user_id)->first();
    }
    else
    {
        return null;
    }
  }

 

  public static function create_importent_columns($table_name)
  {
      if (!Schema::hasColumn($table_name, 'add_by'))
      {
        Schema::table($table_name, function (Blueprint $table) {$table->integer('add_by')->length(1)->nullable();});
      }
      if (!Schema::hasColumn($table_name, 'add_date_time'))
      {
        Schema::table($table_name, function (Blueprint $table) {$table->datetime('add_date_time')->nullable();});
      }
      if (!Schema::hasColumn($table_name, 'update_date_time'))
      {
        Schema::table($table_name, function (Blueprint $table) {$table->datetime('update_date_time')->nullable();});
      }
      if (!Schema::hasColumn($table_name, 'update_history'))
      {
        Schema::table($table_name, function (Blueprint $table) {$table->text('update_history')->nullable();});
      }
      if (!Schema::hasColumn($table_name, 'slug'))
      {
        Schema::table($table_name, function (Blueprint $table) {$table->text('slug')->nullable();});
      }
      if (!Schema::hasColumn($table_name, 'is_delete'))
      {
        Schema::table($table_name, function (Blueprint $table) {$table->integer('is_delete')->autoIncrement(false)->length(1);});
      }
      if (!Schema::hasColumn($table_name, 'status'))
      {
        Schema::table($table_name, function (Blueprint $table) {$table->integer('status')->autoIncrement(false)->length(1);});
      }          
  }



  public static function check_column_and_ceate($columnName,$tableName)
  {
    // Shorten column name if necessary
    $shortColumnName = substr($columnName, 0, 64);

    if (!Schema::hasColumn($tableName, $shortColumnName)) {
        DB::statement("ALTER TABLE $tableName ADD COLUMN `$shortColumnName` TEXT DEFAULT NULL");
    }
    return $shortColumnName;
  }



  public static function randID() { 
    $length = 10;
      $vowels = 'AEUY'; 
      $consonants = '0123456789BCDFddadADDASAFS786GHJKLMNPQRSTVWXZ'; 
      $idnumber = ''; 
      $alt = time() % 2; 
      for ($i = 0;$i < $length;$i++) { 
          if ($alt == 1) { 
              $idnumber.= $consonants[(rand() % strlen($consonants)) ]; 
              $alt = 0; 
          } else { 
              $idnumber.= $vowels[(rand() % strlen($vowels)) ]; 
              $alt = 1; 
          } 
      }     
      return $idnumber; 
  } 

  public static function currency_simble()
  {
    return '₹';
  }

  public static function price_formate($price)
  {
    return '₹ '.number_format($price,2);
  }
  public static function rating_amount($rating)
  { 
    return $rating;
  }
  public static function rating_amount_total($rating)
  { 
    return $rating;
  }
  public static function rating_count($user_id)
  { 
    return 5;
  }


  public static function rating_html($rating)
  {
    return '<i class="fa fa-star"></i>';
  }

  public static function yes_no($check_value,$type='')
  {
    $html = '';
    $arr = array("2"=>"No","1"=>"Yes",);
    if(empty($type))
    {
      foreach ($arr as $key => $value) {
        $selected = ''; 
        if($check_value==$key) $selected = 'selected';
        $html .= '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
      }
    }
    else
    {
      if(!empty($arr[$check_value]))
      {
        if($check_value==2)
          $html = '<span class="btn btn-danger">'.$arr[$check_value].'</span>';
        if($check_value==1)
          $html = '<span class="btn btn-success">'.$arr[$check_value].'</span>';
      }
      else
      {
        $html = 'Not Selected';
      }
    }
    return $html;
  }


  public static function years($value='')
  {
      $arr = array('2023','2024');
      return $arr;
  }

  public static function months($value='')
  {
      $arr = array(
        "01"=>'January',
        "02"=>'February',
        "03"=>'March',
        "04"=>'April',
        "05"=>'May',
        "06"=>'June',
        "07"=>'July',
        "08"=>'August',
        "09"=>'September',
        "10"=>'October',
        "11"=>'November',
        "12"=>'December',
      );
      if(empty($arr))
        return $arr;
      return $arr[$value];
  }





  public static function list_image($json_image)
  {
    $html = '';
    $display_image = 'default.jpg';
    if(!empty($json_image))
      if(json_decode($json_image))
         if(file_exists(FCPATH.'upload/'.json_decode($json_image)[0]->image_path))
            $display_image = json_decode($json_image)[0]->image_path;
    return  $html = '
            <img src="'.base_url('upload/'.$display_image).'" class="img-thumbnail" style="width: 100px;height: 100px;">
      ';
  }

  public static function contact_details()
  {
      $ci =& get_instance();
      $result_data = array();
      $data = $ci->db->select("header_emails,header_mobiles,header_address,footer_emails,footer_mobiles,footer_address,contact_emails,contact_mobiles,contact_address")->get_where("setting")->result_object();
      if(!empty($data))
      {
        $data = $data[0];
        $header_emails_data = [];
        $header_emails_array = [];
        $header_emails = [];
        if(!empty($data->header_emails))
        {
          $header_emails = json_decode($data->header_emails);
          if(empty($header_emails->header_emails_value[0]))
             $header_emails = [];
          else
           $header_emails_array = $header_emails->header_emails_title;
        }
        foreach ($header_emails_array as $key => $value)
        {
          $header_emails_data[] = array("title"=>$header_emails->header_emails_title[$key],"value"=>$header_emails->header_emails_value[$key]);
        }
        $header_mobiles_data = [];
        $header_mobiles_array = [];
        $header_mobiles = [];
        if(!empty($data->header_mobiles))
        {
          $header_mobiles = json_decode($data->header_mobiles);
          if(empty($header_mobiles->header_mobiles_value[0]))
             $header_mobiles = [];
          else
           $header_mobiles_array = $header_mobiles->header_mobiles_title;
        }
        foreach ($header_mobiles_array as $key => $value)
        {
          $header_mobiles_data[] = array("title"=>$header_mobiles->header_mobiles_title[$key],"value"=>$header_mobiles->header_mobiles_value[$key]);
        }
        $header_address_data = [];
        $header_address_array = [];
        $header_address = [];
        if(!empty($data->header_address))
        {
          $header_address = json_decode($data->header_address);
          if(empty($header_address->header_address_value[0]))
             $header_address = [];
          else
           $header_address_array = $header_address->header_address_title;
        }
        foreach ($header_address_array as $key => $value)
        {
          $header_address_data[] = array("title"=>$header_address->header_address_title[$key],"value"=>$header_address->header_address_value[$key]);
        }
        $footer_emails_data = [];
        $footer_emails_array = [];
        $footer_emails = [];
        if(!empty($data->footer_emails))
        {
          $footer_emails = json_decode($data->footer_emails);
          if(empty($footer_emails->footer_emails_value[0]))
             $footer_emails = [];
          else
           $footer_emails_array = $footer_emails->footer_emails_title;
        }
        foreach ($footer_emails_array as $key => $value)
        {
          $footer_emails_data[] = array("title"=>$footer_emails->footer_emails_title[$key],"value"=>$footer_emails->footer_emails_value[$key]);
        }
        $footer_mobiles_data = [];
        $footer_mobiles_array = [];
        $footer_mobiles = [];
        if(!empty($data->footer_mobiles))
        {
          $footer_mobiles = json_decode($data->footer_mobiles);
          if(empty($footer_mobiles->footer_mobiles_value[0]))
             $footer_mobiles = [];
          else
           $footer_mobiles_array = $footer_mobiles->footer_mobiles_title;
        }
        foreach ($footer_mobiles_array as $key => $value)
        {
          $footer_mobiles_data[] = array("title"=>$footer_mobiles->footer_mobiles_title[$key],"value"=>$footer_mobiles->footer_mobiles_value[$key]);
        }
        $footer_address_data = [];
        $footer_address_array = [];
        $footer_address = [];
        if(!empty($data->footer_address))
        {
          $footer_address = json_decode($data->footer_address);
          if(empty($footer_address->footer_address_value[0]))
             $footer_address = [];
          else
           $footer_address_array = $footer_address->footer_address_title;
        }
        foreach ($footer_address_array as $key => $value)
        {
          $footer_address_data[] = array("title"=>$footer_address->footer_address_title[$key],"value"=>$footer_address->footer_address_value[$key]);
        }
        $contact_emails_data = [];
        $contact_emails_array = [];
        $contact_emails = [];
        if(!empty($data->contact_emails))
        {
          $contact_emails = json_decode($data->contact_emails);
          if(empty($contact_emails->contact_emails_value[0]))
             $contact_emails = [];
          else
           $contact_emails_array = $contact_emails->contact_emails_title;
        }
        foreach ($contact_emails_array as $key => $value)
        {
          $contact_emails_data[] = array("title"=>$contact_emails->contact_emails_title[$key],"value"=>$contact_emails->contact_emails_value[$key]);
        }
        $contact_mobiles_data = [];
        $contact_mobiles_array = [];
        $contact_mobiles = [];
        if(!empty($data->contact_mobiles))
        {
          $contact_mobiles = json_decode($data->contact_mobiles);
          if(empty($contact_mobiles->contact_mobiles_value[0]))
             $contact_mobiles = [];
          else
           $contact_mobiles_array = $contact_mobiles->contact_mobiles_title;
        }
        foreach ($contact_mobiles_array as $key => $value)
        {
          $contact_mobiles_data[] = array("title"=>$contact_mobiles->contact_mobiles_title[$key],"value"=>$contact_mobiles->contact_mobiles_value[$key]);
        }
        $contact_address_data = [];
        $contact_address_array = [];
        $contact_address = [];
        if(!empty($data->contact_address))
        {
          $contact_address = json_decode($data->contact_address);
          if(empty($contact_address->contact_address_value[0]))
             $contact_address = [];
          else
           $contact_address_array = $contact_address->contact_address_title;
        }
        foreach ($contact_address_array as $key => $value)
        {
          $contact_address_data[] = array("title"=>$contact_address->contact_address_title[$key],"value"=>$contact_address->contact_address_value[$key]);
        }
        $result_data = array(
          "header_data"=>array(
                              "emails"=>$header_emails_data,
                              "mobiles"=>$header_mobiles_data,
                              "address"=>$header_address_data,
                            ),
          "footer_data"=>array(
                              "emails"=>$footer_emails_data,
                              "mobiles"=>$footer_mobiles_data,
                              "address"=>$footer_address_data,
                            ),
          "contact_data"=>array(
                              "emails"=>$contact_emails_data,
                              "mobiles"=>$contact_mobiles_data,
                              "address"=>$contact_address_data,
                            ),
        );
      }
      return $result_data;
  }


  public static function active_inactive($value)
  {
    $class = 'badge bg-success';
    $status = 'Active';
    
    if($value==1)
    {
      $status = 'Active';
      $class = 'badge bg-success';
    }
    else if($value==0)
    {
      $status = 'Inactive';
      $class = 'badge bg-danger';
    }
    
    $html = '<span class="badge '.$class.'" style="margin: 0 auto;">'.$status.'</span>';
    
    return $html;
}
public static function a_to_z()
{
  return array(
    "A",
    "B",
    "C",
    "D",
    "E",
    "F",
    "G",
    "H",
    "I",
    "J",
    "K",
    "L",
    "M",
    "N",
    "O",
    "P",
    "Q",
    "R",
    "S",
    "T",
    "U",
    "V",
    "W",
    "X",
    "Y",
    "Z",
  );
}


public static function randomPassword($length,$count, $characters)
{
    $symbols = array();
    $passwords = array();
    $used_symbols = '';
    $pass = '';
 

    $symbols["lower_case"] = 'abcdefghijklmnopqrstuvwxyz';
    $symbols["upper_case"] = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $symbols["numbers"] = '1234567890';
    $symbols["special_symbols"] = '!?~@#-_+<>[]{}';
 
    $characters = explode(",",$characters); // get characters types to be used for the passsword
    foreach ($characters as $key=>$value) {
        $used_symbols .= $symbols[$value]; // build a string with all characters
    }
    $symbols_length = strlen($used_symbols) - 1; //strlen starts from 0 so to get number of characters deduct 1
     
    for ($p = 0; $p < $count; $p++) {
        $pass = '';
        for ($i = 0; $i < $length; $i++) {
            $n = rand(0, $symbols_length); // get a random character from the string with all characters
            $pass .= $used_symbols[$n]; // add the character to the password string
        }
        $passwords[] = $pass;
    }
     
    return $passwords; // return the generated password
}


public static function profile_percent($user_id)
{
     $user = DB::table('users')->where('id',$user_id)->first();
     $percent = 30;
     if($user->kyc_step==1) $percent += 40;
     if($user->image!='user.png' && $user->image!='default.jpg' && !empty($user->image) ) $percent += 30;
     return $percent;
}


public static function image_check($path,$default='')
{
    $image = asset('storage/app/public/upload/default.jpg');
    if(!empty($default)) $image = asset('storage/app/public/upload/'.$default);
    $filePath = storage_path().'/app/public/upload/'.$path;      
    if (file_exists($filePath) && !empty($path))
    {
      $image = asset('storage/app/public/upload/'.$path);
    }
    return $image;
}


public static function wallet_credir_debit($data)
{
  $amount = $data['amount'];
  $message = $data['message'];
  $user_id = $data['user_id'];
  $type = $data['type'];
  $wallet_type = $data['wallet_type'];
  $balance = 0;

  $wallet = DB::table('wallet')->where('user_id',$user_id)->first();
  $walletamt = $wallet->wallet;
  $deposit = $wallet->deposit;
  $commision_wallet = $wallet->commision_wallet;
  $balance = $walletamt;

  if($wallet_type==1)
  {
    if($type==1) $deposit += $amount;
    else $deposit -= $amount;
  }
  else if($wallet_type==2)
  {
    if($type==1) $commision_wallet += $amount;
    else $commision_wallet -= $amount;
  }
  else if($wallet_type==3)
  {
    if($deposit>=$amount)
    {
      $deposit -= $amount;
      $message .= " Deduct From Deposit ".$amount;
    }
    else if($commision_wallet>=$amount)
    {
      $commision_wallet -= $amount;
      $message .= " Deduct From Commision Wallet ".$amount;
    }
    else
    {
      $deduct_deposit_wallet = $amount-($amount-$deposit);
      $deduct_commision_wallet = $amount-$deduct_deposit_wallet;

      $commision_wallet -= $deduct_commision_wallet;
      $deposit -= $deduct_deposit_wallet;

      $message .= " <br>Deduct From Deposit ".$deduct_deposit_wallet;
      $message .= " <br>Deduct From Commision Wallet ".$deduct_commision_wallet;

    }
  }

  if($type==1) $walletamt += $amount;
  else $walletamt -= $amount;


  DB::table('wallet')->where('user_id',$user_id)->update(["wallet"=>$walletamt,"deposit"=>$deposit,"commision_wallet"=>$commision_wallet,]);

  DB::table('wallet_history')->insert([
    "user_id"=>$user_id,
    "amount"=>$amount,
    "message"=>$message,
    "balance"=>$walletamt,
    "type"=>$type,
    "status"=>1,
    "add_date_time"=>date("Y-m-d H:i:s"),
  ]);

}





}


