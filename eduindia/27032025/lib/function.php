<?php

 //fetch_state_name
function state_name_id($sid){
	global $con;
	$fetch_state_name =  $con->all_fetch('states',array('id'=>$sid));
	if(is_array($fetch_state_name) || is_object($fetch_state_name)){
		foreach($fetch_state_name as $fsn){
			return $fsn->name;
		}
	}
}

//fetch_city_name
function city_name_id($cid){
	global $con;
	$fetch_city_name =  $con->all_fetch('cities',array('id'=>$cid));
	if(is_array($fetch_city_name) || is_object($fetch_city_name)){
		foreach($fetch_city_name as $fcn){
			return $fcn->name;
		}
	}	
}




function e($e){
	echo $e;
}

function goto_home(){
	 echo "<script>window.location.href='index.php'</script>";	
}

function goto_c_url($path){
	 echo "<script>window.location.href='$path'</script>";	
}


function url($path){
	 echo "<script>window.location.href='$path'</script>";	
}

 
 
 




function alert($message,$url=null){
   
   if($url==null){
	  echo "<script>alert('$message');</script>";   
   }else{
	   echo "<script>alert('$message');window.location.href='$url';</script>";   
   }
}

function sfu($a){
    
    $a = trim($a);
    
    $a = html_entity_decode($a);
     
    $a = strip_tags($a);
    
    $a = strtolower($a);
    
    $a = preg_replace('~[^ a-z0-9_.]~', ' ', $a);
    
    $a = preg_replace('~ ~', '-', $a);
     
    $a = preg_replace('~-+~', '-', $a);
        
    return $a;
}

//fetch single subsctipiton array
function fs($table,$where){
	GLOBAL $con;
	$row = $con->all_fetch($table,$where);
	return $row[0];
	  
}

$arr_d_t =  array("1"=>"Day","2"=>"Months","3"=>"Year"); 
$s_g = array('1'=>'Male','2'=>'Female','3'=>'Others');

function c_g($id){
	GLOBAL  $s_g;
	foreach($s_g as $k=>$v){
		if($k==$id){
			return $v;
		}
	}
	
}


function id_to_name($table,$wh,$o=null){
	GLOBAL $con;
	$row = $con->all_fetch($table,array('id'=>$wh));
	$fs = $row[0];
	 if($o==""){
		return $fs->name;	 
	 }else{
		 return $fs->$o;	
	 }
		
	 
	
}


function dmy($id){
	GLOBAL  $arr_d_t;
	foreach($arr_d_t as $k=>$v){
		if($k==$id){
			return $v;
		}
	}
	
}



//Organisation Name
$org_array = array('1'=>'Edu India Foundation');

//Post Type Dynamic
$p_arrs = array(
'1'=>'Brand Logo',
'2'=>'Gallery',
'3'=>'Latest News',
'4'=>'About Page',
'5'=>'Home Slider',
'6'=>'Notification',
'7'=>'News Slider'

);

function p_t_s($a){
   GLOBAL $p_arrs;
   foreach($p_arrs as $k=>$v){
	   if($k==$a){
		   echo $v;
	   }
	   
   }   
}

//API Call for eduindiafoundation.in
function curl_get_contents($col_val)
{	$update_value = NULL;
	foreach($col_val as $k => $v){
			$update_value .=  $k . "=" . urlencode($v) . "&";
		}
	$update_value = rtrim($update_value,"&");
   
	$ch = curl_init();

	$url ="https://eduindiafoundation.in/service.svc/instudentforedu?$update_value";
	$url ="https://soft.eduindiafoundation.in/service.svc/instudentforedu?$update_value";
	//print_r($url);
	 
	curl_setopt($ch, CURLOPT_URL,$url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));       
	curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
	$result       = curl_exec($ch);
	if (curl_errno($ch)) {
	echo 'Error:' . curl_error($ch);
	}
	curl_close ($ch);
	print_r($result);
	return $result;
}




function pagination_custom($count,$limit,$page,$extra_data)
{
  $urln = $extra_data['url'];
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
    $from_start = $offset-$limit+1;
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
      $url = $urln.'?page='.$page1;
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






?>