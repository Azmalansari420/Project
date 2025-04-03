<?php

    ///////======  WEB-ADMIN AJAX TO PHP Admin lgoin and singup FILE =========////////
     session_start();
    $session_admin  =  @$_SESSION['session_user'];
	include_once("../../lib/all_files.php");
    
	//Check Admin Login User Name 
	if(isset($flun) and !empty($flun)){
		$run = $con->check('branch',array('b_u_name'=>$flun));
		echo $run;
	}
	
	//Check Admin Login user Name Password
	if(isset($lun,$lup) and !empty($lun) and !empty($lup)){
//$run = $con->check('user_register',array('payment_status'=>1,'password'=>$lup),"and (email='$lun' or mobile='$lun')");
$run = $con->check('user_register',array('reg_id'=>$lun,'payment_status'=>1,'password'=>$lup));
		if($run==1){ 
			$fsd = fs('user_register',array('reg_id'=>$lun,'payment_status'=>1,'password'=>$lup));
			$_SESSION['session_user'] = $fsd->id;
			echo $run;
		}else{
			echo $run;
		}
	}
	
	if(isset($logout) and !empty($logout)){
		unset($_SESSION['session_branch']);
		echo 1;
		
	}


?>