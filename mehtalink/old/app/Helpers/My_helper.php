<?php  //if(!defined('BASEPATH')) exit('No direct script access allowed');
   use Config\Database;

function protocol() {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
	return $protocol;
}

function base_link(){
	$domain=str_replace("www.","",$_SERVER['HTTP_HOST']);
	$www_domain="www.$domain";
	$base_link=str_replace($www_domain,"",base_url());
	$base_link=str_replace($domain,"",$base_link);
	$base_link=str_replace("http://","",$base_link);
	$base_link=str_replace("https://","",$base_link);
	return $base_link;
}
  function gettitleresult($table,$title,$file,$slug,$status,$description,$order){
	$db=Database::connect();
	$query=$db->table($table)->select($title,$file,$slug,$status,$slug,$description)->orderBy('sort_order',$order)->get();
	$data=$query->getResult();
    return $data;
  }
  function updatequery($table,$where,$array){
	$db=Database::connect();
	$query=$db->table($table)->update($array,$where);
	return $query;
  }
  function insertquery($table,$array){
	$db=Database::connect();
	$query=$db->table($table)->insert($array);
	return $query;
  }
  
  function deletequery($table,$where){
	$db=Database::connect();
	$query=$db->table($table)->where($where)->delete();
	return $query;
  }
  function mullty_delquery($table,$post_ids) {
	  $db=Database::connect();
		foreach($post_ids as $id) {
				$query=$db->table($table)->where('id',$id)
		             ->delete();
				}
		return $query;
	}
  
   function mullty_status($table,$post_ids,$array) {
		$db=Database::connect();
		foreach($post_ids as $id) {
			$where=array('id'=>$id);
			$query=$db->table($table)->update($array,$where);
				}
		return $query;
	}
	
  function getdatadesc($table){
	$db=Database::connect();
	$query=$db->table($table)->orderBy('id','desc')->get();
	$data=$query->getResult();
    return $data;
  }
  function getdatadesc1($table){
	$db=Database::connect();
	$query=$db->table($table)->orderBy('id','desc')->get();
	$data=$query->getrow();
    return $data;
  }
  function getdatadesclimit($table,$where,$start,$end){
	$db=Database::connect();
	$query=$db->table($table)->where($where)->orderBy('id','desc')->limit($start,$end)->get();
	$data=$query->getResult();
    return $data;
  }
   function getdatadescsingle($table){
	$db=Database::connect();
	$query=$db->table($table)->orderBy('id','desc')->get();
	$data=$query->getrow();
    return $data;
  }
  function select_grids($table,$where){
	$db=Database::connect();
	$query=$db->table($table)->where($where)->orderBy('id','desc')->get();
	$data=$query->getResult();
    return $data;
  }
  function getdataorder($table,$array,$name,$order){
	$db=Database::connect();
	$query=$db->table($table)->where($array)->orderBy($name,$order)->get();
	$data=$query->getResult();
    return $data;
  }
   function getdatadescwhere($table,$array){
	$db=Database::connect();
	$query=$db->table($table)->where($array)->orderBy('id','desc')->get();
	$data=$query->getResult();
    return $data;
  }
  function getdatalike_order($table,$array,$name,$order,$field,$id){
	  //echo $id;
	$db=Database::connect();
	$query=$db->table($table)->where($array)->orderBy($name,$order)->like('parent_page',$id)->get();
	$data=$query->getResult();
    return $data;
  }
  function getdatalike_order1($table,$array,$name,$order,$field,$id){
	  //echo $id;
	$db=Database::connect();
	$query=$db->table($table)->where($array)->orderBy($name,$order)->like($field,$id)->get();
	$data=$query->getResult();
    return $data;
  }
  
  function getdatalike_order165($table,$array,$name,$order,$field,$id,$start,$end){
	  //echo $id;
	$db=Database::connect();
	$query=$db->table($table)->where($array)->orderBy($name,$order)->like($field,$id)->limit($start,$end)->get();
	$data=$query->getResult();
    return $data;
  }
  
  function getdatalike_order221($table,$array,$name,$order){
	  //echo $id;
	$db=Database::connect();
	$query=$db->table($table)->where($array)->orderBy($name,$order)->get();
	$data=$query->getResult();
    return $data;
  }
  function getdatalike_order1456($table,$array,$name,$order){
	  //echo $id;
	$db=Database::connect();
	$query=$db->table($table)->where($array)->orderBy($name,$order)->get();
	$data=$query->getResult();
    return $data;
  }
  
  
  function getdatalike_ordersingle($table,$array,$name,$order,$field,$id){
	  //echo $id;
	$db=Database::connect();
	$query=$db->table($table)->where($array)->orderBy($name,$order)->like($field,$id)->get();
	$data=$query->getRow();
    return $data;
  }
  function getdatabyslug($table,$array){
	$db=Database::connect();
	$query=$db->table($table)->where($array)->get();
	$data=$query->getresult();
    return $data;
  }
  function getdata($table){
	$db=Database::connect();
	$query=$db->table($table)->get();
	$data=$query->getresult();
    return $data;
  }
   function getdataorderby($table,$name,$order){
	$db=Database::connect();
	$query=$db->table($table)->orderBy($name,$order)->get();
	$data=$query->getresult();
    return $data;
  }
  
  function getdataorderby1($table,$array,$name,$order){
	$db=Database::connect();
	$query=$db->table($table)->where($array)->orderBy($name,$order)->get();
	$data=$query->getresult();
    return $data;
  }
   function getcatlistmenu($table,$name,$order,$array){
	$db=Database::connect();
	if($array==null){$array=array('status'=>'1');}
	$query=$db->table($table)->where($array)->orderBy($name,$order)->get();
	$data=$query->getresult();
    return $data;
  }
  function getdatarow($table,$array){
	$db=Database::connect();
	$query=$db->table($table)->where($array)->get();
	$data=$query->getrow();
    return $data;
  }
  function getdatasingle($table,$array){
	$db=Database::connect();
	$query=$db->table($table)->where($array)->get();
	$data=$query->getrow();
    return $data;
  }
  function getdatasingledesc($table){
	   
    $db=Database::connect();
	$query=$db->table($table)->orderBy('id','desc')->get();
	$data=$query->getRow();
    return $data;
  }
  function product_option(){
	  
	  $array=array(
	               array('id'=>'5','name'=>'Best Seller'),
	               array('id'=>'6','name'=>'Featured'),
	               array('id'=>'7','name'=>'Latest / New Arrivals'),
	               array('id'=>'8','name'=>'Sale/New'),
				   );
	    return $array;
  }
 function combine_array(){
   $array = array(
     "CatalogStyle" => array(
        array('id'=>'1','name'=>'Row Listing'),
		array('id'=>'31','name'=>'Row Listing Without Image'),
        array('id'=>'2','name'=>'Grids'),
        array('id'=>'2216','name'=>'Product Page
		'),
		array('id'=>'30','name'=>'Grids Without Image'),
        array('id'=>'3','name'=>'Table Display'),
        array('id'=>'32','name'=>'Other'),
        array('id'=>'33','name'=>'2 Grids'),
		array('id'=>'34','name'=>'Video'),
		array('id'=>'1115','name'=>'Detail'),
		array('id'=>'11156','name'=>'About Us'),
        
    ),
    "catalog_sorting" => array(
        array('id'=>'4','name'=>'Latest First'),
        array('id'=>'5','name'=>'Oldest First'),
        array('id'=>'6','name'=>'Sort Ascending'),
        array('id'=>'7','name'=>'Sort Descending'),
        array('id'=>'8','name'=>'Random'),
        array('id'=>'9','name'=>'Price Ascending'),
        array('id'=>'10','name'=>'Price Descending'),
        array('id'=>'11','name'=>'Most Viewed'),
        array('id'=>'12','name'=>'Name Ascending'),
        array('id'=>'13','name'=>'Name Descending'),
    ),
    "catalog_excerpt" => array(
        array('id'=>'14','name'=>'10 Words'),
        array('id'=>'15','name'=>'20 Words'),
        array('id'=>'16','name'=>'32 Words'),
        array('id'=>'17','name'=>'50 Words'),
    ),
	"page_style" => array(
        array('id'=>'18','name'=>'Right Sidebar Page'),
        array('id'=>'','name'=>'No Sidebar Page'),
        array('id'=>'20','name'=>'Left Sidebar Page'),
    ),
	"top_menu" => array(
        array('id'=>'21','name'=>'Top Menu'),
        //array('id'=>'20','name'=>'Dropdown Menu'),
        //array('id'=>'21','name'=>'Mega Menu'),
    ),
	"footer_link" => array(
        array('id'=>'22','name'=>'Useful Links'),
        array('id'=>'23','name'=>'Quick Links'),
        array('id'=>'24','name'=>'Other Links'),
    ),
	"contact_form" => array(
        array('id'=>'25','name'=>'Contact Form'),
        array('id'=>'321','name'=>'Status Form'),
        array('id'=>'5401','name'=>'Career'),
        array('id'=>'5402','name'=>'Profile'),
        //array('id'=>'1001','name'=>'EMI Calculator'),
        /*array('id'=>'1002','name'=>'Student Verification'),
        array('id'=>'1003','name'=>'Download Admit Card'),
        array('id'=>'1004','name'=>'Certificate Verifications'),
        array('id'=>'1005','name'=>'Marksheet Verifications'),*/
        //array('id'=>'5403','name'=>'BMI Calculator'),
        //array('id'=>'5404','name'=>'Track Calories Burnt'),
    ),
	"featured_image" => array(
        array('id'=>'28','name'=>'Show'),
        array('id'=>'29','name'=>'Hide'),
    ),
	
   );
   return $array;
  }
  function array_in(){
	$array=array('#base_url#','#base_name#','#base_email#','#base_phone#');
    return $array;
  }
  function array_out(){
	$user=getdatasingle('tbl_settings',array('id'=>'3'));
	$array=array(base_url(),$user->setting1,$user->setting8,$user->setting10);
    return $array;
  }
  function array_front_in(){
	$array=array('#base_url#','#base_name#','#base_banner#','#base_logo#','#base_email#','#base_email_alt#','#base_phone#','#base_phone2#','#base_whatsapp#');
    return $array;
  }
  function array_front_out(){
	$user=getdatasingle('tbl_settings',array('id'=>'3'));
	$array=array(base_url(),$user->setting1,$user->setting4,$user->setting5,$user->setting8,$user->setting9,$user->setting10,$user->setting11,$user->setting12);
    return $array;
  }
  function websitesetting(){
   $array = array(
     "select" => array(
        array('id'=>'1','name'=>'Live'),
        array('id'=>'2','name'=>'Demo'),
        array('id'=>'3','name'=>'Suspend'),
        array('id'=>'12','name'=>'Bandwidth Exceeded'),
    ),
    "checkbox" => array(
        array('id'=>'4','name'=>'Category Pages'),
        array('id'=>'5','name'=>'Product Pages'),
        array('id'=>'6','name'=>'Blogs Pages'),
        array('id'=>'7','name'=>'Testimonials'),
        array('id'=>'8','name'=>'Tracking'),
        array('id'=>'9','name'=>'Widgets'),
        array('id'=>'10','name'=>'File'),
        array('id'=>'11','name'=>'Check Status'),
    ),
	 "order_status" => array(
        array('id'=>'0','name'=>'Pending'),
        array('id'=>'1','name'=>'User Cancel'),
        array('id'=>'2','name'=>'Merchant Cancel'),
        array('id'=>'3','name'=>'Process'),
        array('id'=>'4','name'=>'Shipping'),
        array('id'=>'5','name'=>'Return'),
    ),
	"user_status" => array(
        array('id'=>'1','name'=>'Show'),
	    array('id'=>'0','name'=>'hidden'),
        array('id'=>'2','name'=>'Suspended'),
    ),
	
   );
   return $array;
  }