<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?=$title;?></title>

  <!-- Google Font: Source Sans Pro -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url('public/admin');?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?=base_url('public/admin');?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=base_url('public/admin');?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?=base_url('public/admin');?>/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url('public/admin');?>/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?=base_url('public/admin');?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?=base_url('public/admin');?>/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?=base_url('public/admin');?>/plugins/summernote/summernote-bs4.min.css">
  
    <link rel="stylesheet" href="<?=base_url('public/admin');?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=base_url('public/admin');?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=base_url('public/admin');?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
   <link rel="stylesheet" href="<?=base_url('public/admin');?>/plugins/summernote/summernote-bs4.min.css">
   
    <link rel="stylesheet" href="<?=base_url('public/admin');?>/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?=base_url('public/admin');?>/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <link rel="stylesheet" href="<?=base_url('public/admin');?>/dropzone.css">
  <script src="<?=base_url('public/admin');?>/dropzone.js"></script>
   <style>
   span.ak {
    color: red;
    font-style: italic;
}
.custom-control.custom-checkbox.subcat {
    display: block;
    margin: 16px 0px 0px 24px;
    border-bottom: 2px solid #f4f6f9;
}
.custom-control.custom-checkbox.cat {
    margin: 4px 0px 11px 0px;
    border-bottom: 2px solid #f4f6f9;
}
.custom-control.custom-checkbox.childcat {
    margin: 8px 3px 4px 47px;
    border-bottom: 2px solid #f4f6f9;
}

   </style>
   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?=base_url('dashboard');?>" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="javascript:;" class="nav-link"><?=$title;?></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      

      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>
          <!--<span class="badge badge-warning navbar-badge">15</span>-->
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        
          <div class="dropdown-divider"></div>
          <a href="<?=base_url('cpdadmin/admin_profile');?>" class="dropdown-item">
           <i class="fas fa-user"></i> Profile
           </a>
		   <a href="<?=base_url('cpdadmin/admin_reset_password');?>" class="dropdown-item">
           <i class="fas fa-key"></i> Change Password
           </a>
		   <a href="<?=base_url('adminlogout');?>" class="dropdown-item">
           <i class="fas fa-sign-out-alt"></i> LogOut
           </a>
          
        </div>
      </li>
     
      
    </ul>
  </nav>
  <!-- /.navbar -->