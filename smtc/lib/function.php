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

function con_id($table,$sid){
	global $con;
	$fetch_state_name =  $con->all_fetch($table,array('id'=>$sid));
	if(is_array($fetch_state_name) || is_object($fetch_state_name)){
		foreach($fetch_state_name as $fsn){
			return $fsn->name;
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
 
 
 
$payment_mode_list = array('1'=>'Cash','2'=>'Credit Card','3'=>'Online Payment','4'=>'Cheque Card');




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



 

$arr_d_t =  array("1"=>"Day","2"=>"Months","3"=>"Year"); 
$s_g = array('1'=>'Male','2'=>'Female','3'=>'Others');

  

function dmy($id){
	GLOBAL  $arr_d_t;
	foreach($arr_d_t as $k=>$v){
		if($k==$id){
			return $v;
		}
	}
	
}


//fetch single subsctipiton array
function fs($table,$where){
	GLOBAL $con;
	$row = $con->all_fetch($table,$where);
	return $row[0];
	  
}

$s_g = array('1'=>'Male','2'=>'Female','3'=>'Others');


function c_g($id){
	GLOBAL  $s_g;
	foreach($s_g as $k=>$v){
		if($k==$id){
			return $v;
		}
	}
	
}


$s_m_s = array('1'=>'Single','2'=>'Married');


function s_m_s($id){
	GLOBAL  $s_m_s;
	foreach($s_m_s as $k=>$v){
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
function gender($input_name,$i=null){
	?>
	<label>Select Gender</label>
	<select name="<?php echo $input_name; ?>" class="form-control">
	<option value="">Select Gender</option>
	<?php 
	$g_arr = array('1'=>'Male','2'=>'Female','3'=>'Other');
	foreach($g_arr as $k=>$v){
		if(@$i==$k){	?>
	    <option selected value="<?php echo $k; ?>"><?php echo $v; ?></option>
	<?php }else{ ?>
		<option value="<?php echo $k; ?>"><?php echo $v; ?></option>
	<?php }   } ?>
	</select>
<?php 
  
   
  }

function status($input_name,$i=null){
	?>
	<label>Select Status</label>
	<select name="<?php echo $input_name; ?>" class="form-control">
	<option value="">Select Status</option>
	<?php 
	$g_arr = array('Yes'=>'Show','No'=>'Hide');
	foreach($g_arr as $k=>$v){
		if(@$i==$k){	?>
	    <option selected value="<?php echo $k; ?>"><?php echo $v; ?></option>
	<?php }else{ ?>
		<option value="<?php echo $k; ?>"><?php echo $v; ?></option>
	<?php }   } ?>
	</select>
<?php 
  
  }
  ?>
  