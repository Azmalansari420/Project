<?php 
   session_start();
    $session_admin  =  @$_SESSION['session_admin'];
	include_once("../lib/all_files.php");
	$con->check_session($session_admin,"index.php");
	
   $url_id     = @$_GET['id'];
   $table_name = "user_register";
   $p_type     = @$_GET['type'];
   
   //FETCH
if(isset($url_id) and is_numeric($url_id) and !empty($url_id)){
	    $fs = fs($table_name,array('id'=>$url_id));   
		if(is_array($fs) || is_object($fs)){
			
		}else{
			goto_c_url('all-student.php');
		}
}

    //include bar code library
	include_once("barcode/tcpdf_barcodes_2d.php");
	
	// set the barcode content and type
  	$content = BASE_URL."show_result.php?reg_id=".$fs->reg_id;
	$barcodeobj = new TCPDF2DBarcode($content, 'QRCODE,H');
	$barcode = $barcodeobj->getBarcodeHTML(2, 2, 'black');

//issue date
 
$c_day_type = id_to_name('course',$fs->course_id,"c_time_type");
$c_day      = id_to_name('course',$fs->course_id,"c_time");
if($c_day_type == 1){
    $dd_y = "+".$c_day." day";
}else if($c_day_type==2){
	$dd_y = "+".$c_day." Month";
}else if($c_day_type==3){
	$dd_y = "+".$c_day." Year";
}
	
	
 $re_issue_date = date ("Y-m-d", strtotime($dd_y, strtotime($fs->join_date)));


   if(isset($p_type) and $p_type=="Marksheet"){ 
        $issue_date = date ("Y-m-d", strtotime('+ 27 day', strtotime($re_issue_date)));
		   include('marksheet_print.php');
		   
    }else if(isset($p_type) and $p_type=="Diploma"){ 
         $issue_date = date ("Y-m-d", strtotime('+ 35 day', strtotime($re_issue_date)));
           include('diploma_print.php');
    }else{
         $issue_date = date ("Y-m-d", strtotime('+ 35 day', strtotime($re_issue_date)));
    	include_once 'student_id_card.php';
    }
?> 
            

   
