<?php

    ///////======  WEB-ADMIN AJAX TO PHP Admin lgoin and singup FILE =========////////
     session_start();
    $session_admin  =  @$_SESSION['session_branch'];
	include_once("../../lib/all_files.php");
    
	//Check Admin Login User Name 
	if(isset($flun) and !empty($flun)){
		$run = $con->check('branch',array('b_u_name'=>$flun));
		echo $run;
	}
	
	//Check Admin Login user Name Password
	if(isset($lun,$lup) and !empty($lun) and !empty($lup)){
		$run = $con->check('branch',array('b_u_name'=>$lun,'b_password'=>$lup,'status'=>"Yes"));
		if($run==1){ 
			$_SESSION['session_branch'] = $lun;
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