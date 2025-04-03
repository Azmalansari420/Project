<?php 
 
  $a_f_n = "../admin/";
    session_start();
    $session_admin  =  @$_SESSION['session_branch'];
	include_once("../lib/all_files.php");
	$con->check_session($session_admin,"index.php");
         	
	
	$admin_info = $con->all_fetch("branch",array('b_u_name'=>$session_admin));
	foreach($admin_info as $admin){
		$admin_id        = $admin->id;
		$admin_uniqid_id = $admin->b_code;
    $admin_name      = $admin->b_name; 

    $b_full_address      = $admin->address; 
     
    $p_name      = $admin->p_name; 
    $b_email      = $admin->email; 
    $b_mobile      = $admin->mobile; 

		$admin_pic      = $admin->picture;
	}    
         
    //include bar code library
  include_once("barcode/tcpdf_barcodes_2d.php");
  
    // set the barcode content and type
    $content = BASE_URL."show_branch.php?branc_id=".$admin_id;
    $barcodeobj = new TCPDF2DBarcode($content, 'QRCODE,H');
    $barcode = $barcodeobj->getBarcodeHTML(2,2, 'black');
    
    $from_date      = $add_date; 
    $to_date = date ("Y", strtotime('-1 Year', strtotime($add_date)));
    include_once('print-letter.php')
?>
  
