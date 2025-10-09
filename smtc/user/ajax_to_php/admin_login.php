<?php

    ///////======  WEB-ADMIN AJAX TO PHP Admin lgoin and singup FILE =========////////
     session_start();
    $session_admin  =  @$_SESSION['session_user'];
	include_once("../../lib/all_files.php");
    

	//Check Admin Login user Name Password
    if(isset($lun,$lup) and !empty($lun) and !empty($lup)){
        
        $where = array('reg_id'=>$lun);
        
        //check user register id
        $check_reg_id = $con->check('tbl_user',$where);
		if($check_reg_id >= 1){ 
		    
		    //check user register password
            $where['password'] = $lup;
            $run_check_password = $con->check('tbl_user',$where);
            
            if($run_check_password>=1){
                
                $where['payment_status'] = 1;
                $run_check_payment_status = $con->check('tbl_user',$where);
                
                if($run_check_payment_status>=1){
                    
                    $fsd = fs('tbl_user',$where);
        			$_SESSION['session_user'] = $fsd->id;
        			echo 1;    
        			
                }else{
                    echo 2; // payment is pending
                }
                
                
            }else{
                echo 3; //passwod is wrong
            }
            
            
		}else{
			echo 4; //register id is wrong
		}
	}
	
	if(isset($logout) and !empty($logout)){
		unset($_SESSION['session_branch']);
		echo 1;
		
	}


?>