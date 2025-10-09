<?php $link=$this->setting_model->get_all_setting();?>
<?php  $role = $this->session->userdata('role'); ;?>
<?php  $permission = $this->session->userdata('permission'); ;?>
<?php $permission = explode('@' , $permission) ; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>
    <?php echo $link[0]->title ?> || Admin Panel</title>
  <!--favicon-->
  <link rel="icon" href="<?=base_url();?>assets/panel_assets/images/favicon_.ico" type="image/x-icon" />
  <!-- Vector CSS -->
  <link href="<?=base_url();?>assets/panel_assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
  <link href="<?=base_url();?>assets/panel_assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
  <!--inputtags-->
  <link href="<?=base_url();?>assets/panel_assets/plugins/inputtags/css/bootstrap-tagsinput.css" rel="stylesheet" />
  <!--multi select-->
  <link href="<?=base_url();?>assets/panel_assets/plugins/jquery-multi-select/multi-select.css" rel="stylesheet" type="text/css">
  <!--Bootstrap Datepicker-->
  <link href="<?=base_url();?>assets/panel_assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css">
  <!--Touchspin-->
  <link href="<?=base_url();?>assets/panel_assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="<?=base_url();?>assets/panel_assets/plugins/summernote/dist/summernote-bs4.css" />
  <!-- simplebar CSS-->
  <link href="<?=base_url();?>assets/panel_assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <!-- Bootstrap core CSS-->
  <link href="<?=base_url();?>assets/panel_assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?=base_url();?>assets/panel_assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
  <link href="<?=base_url();?>assets/panel_assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
  <!-- animate CSS-->
  <link href="<?=base_url();?>assets/panel_assets/css/animate.css" rel="stylesheet" type="text/css" />
  <!-- Icons CSS-->
  <link href="<?=base_url();?>assets/panel_assets/css/icons.css" rel="stylesheet" type="text/css" />
  <!-- Sidebar CSS-->
  <link href="<?=base_url();?>assets/panel_assets/css/sidebar-menu.css" rel="stylesheet" />
  <!-- Custom Style-->
  <link href="<?=base_url();?>assets/panel_assets/css/app-style.css" rel="stylesheet" />
  <!-- <link href="<?=base_url();?>assets/panel_assets/ckeditor/ckeditor.js" rel="stylesheet"/> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <style type="text/css">
  th,
  td {
    padding: 5px!important;
    font-size: 12px;
    color: black;
  }
  .alert {
    text-align: center!important;
    padding: 5px!important;
  }
  .mark {
    font-size: 12px;
    font-weight: 500;
    color: red;
  }
  input[type=checkbox],
  input[type=radio] {
    box-sizing: border-box;
    padding: 0;
    margin-left: 20px;
    margin-right: 27px;
  }
  .label-success {
    color: #fff;
    background-color: #02ba5a;
    border-color: #02ba5a;
    padding: 5px 10px;
  }
  .label-danger {
    color: #fff;
    background-color: #da2a4d;
    border-color: #da2a4d;
    padding: 5px 10px;
  }
input[type=checkbox], input[type=radio] {
    box-sizing: border-box;
    padding: 0;
    margin-left: 20px;
    margin-right: 27px;
    width: 50px;
    height: 50px;
}
  </style>
</head>

<body>
  <!-- Start wrapper-->
  <div id="wrapper">
    <!--Start sidebar-wrapper-->
    <div id="sidebar-wrapper" class="bg-theme bg-theme2" data-simplebar="" data-simplebar-auto-hide="true">
      <div class="brand-logo" style="">
        <a href="<?=base_url();?>dashboard">
          <?php if(!empty($record->logo)){ ?>
          <center> <img src="<?php echo base_url('uploads/logo/').$link[0]->logo ?>" style="width:100px"> </center>
          <?php } ?>
          <h5 class="logo-text"> <?php echo $link[0]->title ?></h5> </a>
      </div>
      <div class="user-details">
        <div class="media align-items-center  collapsed"> </div>
      </div>
      <ul class="sidebar-menu do-nicescrol">
        <li>
          <a href="<?php echo base_url() ?>dashboard" class="waves-effect"> <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span><i class="fa fa-angle-left pull-right"></i> </a>
        </li>
    
        <?php if(in_array('1',$permission)){ ?>
        <li class="">
          <a href="javaScript:void();" class="waves-effect"> <i class="fa fa-share"></i> <span> Student</span> <i class="fa fa-angle-left pull-right"></i> </a>
          <ul class="sidebar-submenu" style="display: none;">
            <li><a href="<?php echo base_url('user/all') ?>"><i class="zmdi zmdi-dot-circle-alt"></i>All Student </a></li>
            <li><a href="<?php echo base_url('user/add') ?>"><i class="zmdi zmdi-dot-circle-alt"></i>Add Student </a></li>
            <li><a href="<?php echo base_url('user/barcode') ?>"><i class="zmdi zmdi-dot-circle-alt"></i>Generate Barcode</a></li>
       
           
          </ul>
        </li>
        <?php } ?>
        <?php if(in_array('2',$permission)){ ?>
        <li class="">
          <a href="javaScript:void();" class="waves-effect"> <i class="fa fa-share"></i> <span>Payment </span> <i class="fa fa-angle-left pull-right"></i> </a>
          <ul class="sidebar-submenu" style="display: none;">
           
      
            <li><a href="<?php echo base_url('payment/add_new') ?>"><i class="zmdi zmdi-dot-circle-alt"></i> Add Payment</a>
            </li>
             <li><a href="<?php echo base_url('payment/listing') ?>"><i class="zmdi zmdi-dot-circle-alt"></i> Payment List </a>
             
            </li>
             <li><a href="<?php echo base_url('payment/online') ?>"><i class="zmdi zmdi-dot-circle-alt"></i>Online Payment  </a></li>
          </ul>
        </li> 
        <?php } ?>
        <?php if(in_array('3',$permission)){ ?>
        <li class="">
          <a href="javaScript:void();" class="waves-effect"> <i class="fa fa-share"></i> <span>State </span> <i class="fa fa-angle-left pull-right"></i> </a>
          <ul class="sidebar-submenu" style="display: none;">
           
      
            <li><a href="<?php echo base_url('state/add_new') ?>"><i class="zmdi zmdi-dot-circle-alt"></i> Add State</a>
            </li>
             <li><a href="<?php echo base_url('state/listing') ?>"><i class="zmdi zmdi-dot-circle-alt"></i> State List </a>
            </li>
          </ul>
        </li>


        <li class="">
          <a href="javaScript:void();" class="waves-effect"> <i class="fa fa-share"></i> <span>Course New </span> <i class="fa fa-angle-left pull-right"></i> </a>
          <ul class="sidebar-submenu" style="display: none;">
           
      
            <li><a href="<?php echo base_url('course_new/add_new') ?>"><i class="zmdi zmdi-dot-circle-alt"></i> Add Course New</a>
            </li>
             <li><a href="<?php echo base_url('course_new/listing') ?>"><i class="zmdi zmdi-dot-circle-alt"></i> Course New List </a>
            </li>
          </ul>
        </li>




        <li class="">
          <a href="javaScript:void();" class="waves-effect"> <i class="fa fa-share"></i> <span>Courses List </span> <i class="fa fa-angle-left pull-right"></i> </a>
          <ul class="sidebar-submenu" style="display: none;">
           
      
            <li><a href="<?php echo base_url('course_new/add_new') ?>"><i class="zmdi zmdi-dot-circle-alt"></i> Add Courses</a>
            </li>
             <li><a href="<?php echo base_url('course_new/listing') ?>"><i class="zmdi zmdi-dot-circle-alt"></i> Courses List </a>
            </li>
          </ul>
        </li>
        <?php } ?>
        <?php if(in_array('4',$permission)){ ?>
        <li class="">
          <a href="javaScript:void();" class="waves-effect"> <i class="fa fa-share"></i> <span>Course </span> <i class="fa fa-angle-left pull-right"></i> </a>
          <ul class="sidebar-submenu" style="display: none;">
           
      
            <li><a href="<?php echo base_url('course/add_new') ?>"><i class="zmdi zmdi-dot-circle-alt"></i> Add Course</a>
            </li>
             <li><a href="<?php echo base_url('course/listing') ?>"><i class="zmdi zmdi-dot-circle-alt"></i> Course List </a>
            </li>
          </ul>
        </li>
        <?php } ?>
        <?php if(in_array('5',$permission)){ ?>
        <li class="">
          <a href="javaScript:void();" class="waves-effect"> <i class="fa fa-share"></i> <span>Media </span> <i class="fa fa-angle-left pull-right"></i> </a>
          <ul class="sidebar-submenu" style="display: none;">
           
      
            <li><a href="<?php echo base_url('media/add_new') ?>"><i class="zmdi zmdi-dot-circle-alt"></i> Add Media</a>
            </li>
             <li><a href="<?php echo base_url('media/listing') ?>"><i class="zmdi zmdi-dot-circle-alt"></i> Media List </a>
            </li>
          </ul>
        </li>
        <?php } ?>
        <?php if(in_array('6',$permission)){ ?>
        <li class="">
          <a href="javaScript:void();" class="waves-effect"> <i class="fa fa-share"></i> <span>Specialization </span> <i class="fa fa-angle-left pull-right"></i> </a>
          <ul class="sidebar-submenu" style="display: none;">
           
      
            <li><a href="<?php echo base_url('specialization/add_new') ?>"><i class="zmdi zmdi-dot-circle-alt"></i> Add Specialization</a>
            </li>
             <li><a href="<?php echo base_url('specialization/listing') ?>"><i class="zmdi zmdi-dot-circle-alt"></i> Specialization List </a>
            </li>
          </ul>
        </li>
        <?php } ?>
        <?php if(in_array('7',$permission)){ ?>
        <li class="">
          <a href="javaScript:void();" class="waves-effect"> <i class="fa fa-share"></i> <span>Exam </span> <i class="fa fa-angle-left pull-right"></i> </a>
          <ul class="sidebar-submenu" style="display: none;">
         <li><a href="<?php echo base_url('exam/add_new') ?>"><i class="zmdi zmdi-dot-circle-alt"></i> Exam Add</a>
            </li>
            <li><a href="<?php echo base_url('exam/listing') ?>"><i class="zmdi zmdi-dot-circle-alt"></i> Exam Listing</a>
            </li>
         
          </ul>
        </li>
        <?php } ?>
        <?php if(in_array('8',$permission)){ ?>
        <li class="">
          <a href="<?php echo base_url('exam/allUserExamList') ?> " class="waves-effect"> <i class="fa fa-share"></i> <span> Held Exam List </span>  </a>
      
        </li>
        <?php } ?>
        <?php if($role == '1'){ ?>
        <li class="">
          <a href="javaScript:void();" class="waves-effect"> <i class="fa fa-share"></i> <span>Staff </span> <i class="fa fa-angle-left pull-right"></i> </a>
          <ul class="sidebar-submenu" style="display: none;">
         <li><a href="<?php echo base_url('staff/add_new') ?>"><i class="zmdi zmdi-dot-circle-alt"></i> Staff Add</a>
            </li>
            <li><a href="<?php echo base_url('staff/listing') ?>"><i class="zmdi zmdi-dot-circle-alt"></i> Staff Listing</a>
            </li>
         
          </ul>
        </li>
        
         <li class="">
          <a href="<?php echo base_url('setting/edit/1') ?>" > <i class="fa fa-share"></i> <span> Website Setting</span>  </a>
   
        </li> 
        <?php } ?>
       
        <li class="">
          <a href="<?php echo base_url('dashboard/profile') ?>" > <i class="fa fa-share"></i> <span> My Profile</span>  </a>
          
        </li>
      </ul>
    </div>
    <!--End sidebar-wrapper-->
    <!--Start topbar header-->
    <header class="topbar-nav">
      <nav class="navbar navbar-expand fixed-top">
        <ul class="navbar-nav mr-auto align-items-center">
          <li class="nav-item">
            <a class="nav-link toggle-menu" href="javascript:void();"> <i class="icon-menu menu-icon"></i> </a>
          </li>
        </ul>
        <ul class="navbar-nav align-items-center right-nav-link">
          <li class="nav-item"><a href="<?=base_url('logout')?>"><i class="icon-power mr-2"></i> Logout</a>
          </li>
        </ul>
      </nav>
    </header>
    <!--End topbar header-->
