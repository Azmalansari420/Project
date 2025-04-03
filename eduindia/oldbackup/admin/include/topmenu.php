<?php 
    session_start();
    $session_admin  =  @$_SESSION['session_admin'];
	include_once("../lib/all_files.php");
	$con->check_session($session_admin,"index.php");
	
	
	
	$admin_info = $con->all_fetch("top_admin",array('admin_email'=>$session_admin));
	foreach($admin_info as $admin){
		$admin_id              = $admin->id;
		$admin_uniqid_id       = $admin->admin_uniqid_id;
		$admin_name            = $admin->admin_name;
    $online_payment_amount = $admin->online_payment_amount;
    $online_branch_id      = $admin->online_branch_id;
    $reg_instruction       = $admin->reg_instruction;
    $user_type       = $admin->type;
	}  
	 
	 
	
?>

<?php
$menu_bar_list = array(
				'1'=>array(
						'menu_name'=>'Location Detail',
						'menu_link'=>'#',
						'menu_type'=>1, // 0 Mean single menu and 1 Mean Drop Down Menu
						'menu_icon'=>'fa fa-tag',
						'menu_list'=>array(
											'1'=>'Add State | category-list.php',
											'2'=>'Add District | sub-category-list.php',
											'3'=>'Add City | sub_sub-category-list.php'
										  )
					),
				'3'=>array(
						'menu_name'=>'Course Detail',
						'menu_link'=>'#',
						'menu_type'=>1, // 1 Mean single menu and 2 Mean Drop Down Menu
						'menu_icon'=>'fa fa-tag',
						'menu_list'=>array(
											'1'=>'Add Institute | add-instiute.php',
											'2'=>'Add Institute Course Category | add-institue-course-category.php',
											'3'=>'Add Course  | add-course.php',
											'4'=>'Add Subject | add-subject.php',
											'5'=>'Join Subjects With course | join_subject.php',
											'6'=>'Join Second Year Subjects With course | join_second_year_subject.php'
										  )
					),
				'4'=>array(
						'menu_name'=>'Branches & Students',
						'menu_link'=>'#',
						'menu_type'=>1, // 1 Mean single menu and 2 Mean Drop Down Menu
						'menu_icon'=>'fa fa-shopping-basket',
						'menu_list'=>array(
								'1'=>'Add Branch | add-branch.php',
								'2'=>'Add Students | add-student.php',
						)
					),
				'5'=>array(
						'menu_name'=>'PDF LIST',
						'menu_link'=>'#',
						'menu_type'=>1, // 1 Mean single menu and 2 Mean Drop Down Menu
						'menu_icon'=>'fa fa-tag',
						'menu_list'=>array(
								'1'=>'Add PDF | add-pdf.php',
								'2'=>'All PDF | all-pdf.php'
						)
					),
				'7'=>array(
						'menu_name'=>'Set Marks & Prints',
						'menu_link'=>'#',
						'menu_type'=>1, // 1 Mean single menu and 2 Mean Drop Down Menu
						'menu_icon'=>'fa fa-tag',
						'menu_list'=>array(
											'1'=>'Add Set Marks | set-marks.php',
											'2'=>'Prints | print_mark.php'
										  )
					),

				'8'=>array(
						'menu_name'=>'Website Changes',
						'menu_link'=>'#',
						'menu_type'=>1, // 1 Mean single menu and 2 Mean Drop Down Menu
						'menu_icon'=>'fa fa-tag',
						'menu_list'=>array(
											'1'=>'Add Course Offers | all-offer-course.php',
											'2'=>'Add Logo & Gallery | all-post.php',
											'3'=>'Franchisee Enquiry | all-enquiry.php',
											'4'=>'Add Download | add_download.php',
											'5'=>'Add Notice Board | add_notice.php'
										  )
					),
				'9'=>array(
						'menu_name'=>'Register Payment Settings',
						'menu_link'=>'setting.php',
						'menu_type'=>0, // 1 Mean single menu and 2 Mean Drop Down Menu
						'menu_icon'=>'fa fa-money',
						'menu_list'=>array()
					),



				'10'=>array(
						'menu_name'=>'Admit Card',
						'menu_link'=>'admit-setting.php',
						'menu_type'=>0, // 1 Mean single menu and 2 Mean Drop Down Menu
						'menu_icon'=>'fa fa-image',
						'menu_list'=>array()
					),
				'11'=>array(
						'menu_name'=>'Website Popup',
						'menu_link'=>'pop-setting.php',
						'menu_type'=>0, // 1 Mean single menu and 2 Mean Drop Down Menu
						'menu_icon'=>'fa fa-globe',
						'menu_list'=>array()
					),
				'12'=>array(
						'menu_name'=>'Change Password',
						'menu_link'=>'password-change.php',
						'menu_type'=>0, // 1 Mean single menu and 2 Mean Drop Down Menu
						'menu_icon'=>'fa fa-key',
						'menu_list'=>array()
					),
				'13'=>array(
						'menu_name'=>'Add User',
						'menu_link'=>'add-admin-role.php',
						'menu_type'=>0, // 1 Mean single menu and 2 Mean Drop Down Menu
						'menu_icon'=>'fa fa-tachometer',
						'menu_list'=>array()
				),
				
			);

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
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  
    <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.css">
  
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="bower_components/select2/dist/css/select2.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
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
      <span class="logo-mini"><b>M</b>G</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b style="font-size:12px;">EDU INDIA FOUNDATION</b> </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

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

 