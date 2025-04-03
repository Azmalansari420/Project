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
	 
	 
	
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?=TITLE;?>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php e($a_f_n);?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php e($a_f_n);?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php e($a_f_n);?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php e($a_f_n);?>dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php e($a_f_n);?>dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php e($a_f_n);?>bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php e($a_f_n);?>bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php e($a_f_n);?>bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php e($a_f_n);?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php e($a_f_n);?>bower_components/bootstrap-daterangepicker/daterangepicker.css">
  
    <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php e($a_f_n);?>plugins/timepicker/bootstrap-timepicker.css">
  
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php e($a_f_n);?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php e($a_f_n);?>bower_components/select2/dist/css/select2.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php e($a_f_n);?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
 
<div class="conformpopup" id="conformpopup">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4 innerconfrompopup"> 
                    <div class="innerconfromopopupbody">
                        <h3>Are You Sure Want To Remove This ?</h3>
                        <a href="javascript:;" class="closeconformpopup" onclick="hideall('.conformpopup')"><i class="fa fa-close"></i></a>
                        <div class="innerconfromopupfooter">
                            <div class="row">
                                 <div class="col-sm-6 col-sm-offset-6">
                                    <span id="yesdelete">Yes</span>
                                    <span id="nodelete" onclick="hideall('.conformpopup')">No</span>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

<div class="notification" id="notification">
	<span class="inner_notification"></span>
</div>

<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="welcome.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>E</b>I</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b style="font-size:12px;"><?=$admin_name;?></b> </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
	
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
		<ul class="nav navbar-nav nav-left">
		   <li><a href="javascript:;"> <?=$admin_name;?></a></li>
		</ul>
      <div class="navbar-custom-menu">
	 
       
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
		    
			<li>
            <a href="../index.php" target="_blank">
				<i class="fa fa-globe"></i> 
				<span class="label label-success">Go to Website</span> 
			</a>
          </li>
		 
		    
          
          
		  <li class="notifications-menu">
            <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
             
          </li> 
        
        </ul>
      </div>
    </nav>
  </header>
<?php include_once('include/sidemenu.php');?>

 