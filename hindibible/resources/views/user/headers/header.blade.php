@php($user = Helpers::get_user_user())
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>{{env('APP_NAME')}}</title>
<meta name="_token" content="{{csrf_token()}}">
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />

<!-- v4.0.0-alpha.6 -->
<link rel="stylesheet" href="{{url('public/user/')}}/dist/bootstrap/css/bootstrap.min.css">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- Theme style -->
<link rel="stylesheet" href="{{url('public/user/')}}/dist/css/style.css">
<link rel="stylesheet" href="{{url('public/user/')}}/dist/css/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="{{url('public/user/')}}/dist/css/et-line-font/et-line-font.css">
<link rel="stylesheet" href="{{url('public/user/')}}/dist/css/themify-icons/themify-icons.css">

<!-- Chartist CSS -->
<!-- <link rel="stylesheet" href="{{url('public/user/')}}/dist/plugins/chartist-js/chartist.min.css"> -->
<!-- <link rel="stylesheet" href="{{url('public/user/')}}/dist/plugins/chartist-js/chartist-plugin-tooltip.css"> -->




<link rel="stylesheet" href="{{url('public')}}/toast/saber-toast.css">
<link rel="stylesheet" href="{{url('public')}}/toast/style.css">
<link rel="stylesheet" href="{{url('public')}}/front_css.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<!-- jQuery 3 --> 
<!-- <script src="{{url('public/user/')}}/dist/js/jquery.min.js"></script>  -->


<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="{{url('public')}}/front_script.js"></script>
<link rel="stylesheet" href="{{url('public')}}/upload-multiple/style.css">
<script src="{{url('public')}}/upload-multiple/script.js"></script>
<link rel="stylesheet" href="{{url('public/')}}/assetsadmin/select2/css/select2.min.css">




<script src="https://cdn.ckeditor.com/4.18.0/full/ckeditor.js"></script>




<style>
  .pagination svg {
    width: 10px;
}
.pagination .flex.justify-between.flex-1.sm\:hidden {
    display: none;
}
.pagination .hidden.sm\:flex-1.sm\:flex.sm\:items-center.sm\:justify-between > div {
    width: auto;
    display: inline-block;
}
.pagination .hidden.sm\:flex-1.sm\:flex.sm\:items-center.sm\:justify-between {
    display: flex;
    justify-content: space-between;
}
span.relative.z-0.inline-flex.shadow-sm.rounded-md > span > span, span.relative.z-0.inline-flex.shadow-sm.rounded-md > a {
    padding: 3px 10px !important;
    display: inline-block;
}
.pagination {
    padding: 10px 12px !important;
    padding-bottom: 0 !important;
}
.select2-container--default .select2-selection--multiple .select2-selection__choice {
  background-color: #71519d;
  border: 1px solid #71519d;
}
.select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
  color: white;
}
.select2-container .select2-selection--single
{
  height: calc(2.25rem + 2px);
}
.select2-container--default .select2-selection--single {
    padding: 5px 5px;
    padding-top: 6px;
}
.select2-container--default .select2-selection--single .select2-selection__arrow b {
  top: 70%;
}
.select2-container--default .select2-selection--single {
  border: 1px solid #d2d6de;
  border-top-left-radius: 0 !important;
  border-bottom-left-radius: 0 !important;
}
span.select2.select2-container.select2-container--default {
    width: 100% !important;
}

#data-list {
    position: relative;
    min-height: 250px;
}
.my-loader2 {
    position: absolute;
}
.hide
{
    display: none;
}
.detail-popup {
    position: absolute;
    z-index: 999;
    width: 200px;
    background: white;
    padding: 5px 5px;
    top: 50%;
    left: 99%;
    border-radius: 5px;
     display: none; 
}
.person:hover .detail-popup {
    display: block;
}
.detail-popup p {
    font-size: 12px;
    margin: 0;
    color: #3BAA9D !important;
}
.person {
    position: relative;
}


.products-image img {
    width: 100%;
}
.products-list-detail {
    padding: 0px 10px 15px 15px;
}
.products-list-detail h1 {
    font-size: 15px;
    font-weight: 800;
    text-align: center;
    margin: 10px 0;
}
.products-button a {
    display: block;
}


.add-cart-btn-group button {
    width: 20%;
    display: block;
}
.add-cart-btn-group input {
    width: 80%;
    display: block;
}
.plus-btn, .devide-btn, .add-cart-btn-group input {
    border: 0;
    text-align: center;
    align-items: center;
}
.add-cart-btn-group {
    display: flex;
    width: 100%;
    border: 1px solid;
    border-radius: 3px;
    color: green;
}

</style>



</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper boxed-wrapper">
  <header class="main-header"> 
    <!-- Logo --> 
    <a href="index.php" class="logo blue-bg"> 
    <!-- mini logo for sidebar mini 50x50 pixels --> 
    <span class="logo-mini"><img src="{{url('public/user/')}}/dist/img/favicon.png" alt=""></span> 
    <!-- logo for regular state and mobile devices --> 
    <span class="logo-lg"><img src="{{url('public/user/')}}/dist/img/logo.png" alt=""></span> </a> 
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar blue-bg navbar-static-top"> 
      <!-- Sidebar toggle button-->
      <ul class="nav navbar-nav pull-left">
        <li><a class="sidebar-toggle" data-toggle="push-menu" href="#"></a> </li>
      </ul>
      
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu p-ph-res"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="{{Helpers::image_check($user->image,'user.png')}}" class="user-image" alt="User Image"> <span class="hidden-xs">{{$user->name}}</span> </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <div class="pull-left user-img"><img src="{{Helpers::image_check($user->image,'user.png')}}" class="img-responsive" alt="User"></div>
                <p class="text-left">{{$user->name}} <small>{{$user->user_id}}</small> </p>
                <div class="view-link text-left"><a href="{{route('user.profile.index')}}">View Profile</a> </div>
              </li>
              <li><a href="{{route('user.change-password')}}"><i class="icon-profile-male"></i> Change Password</a></li>
              <li><a href="#" class="logout"><i class="fa fa-power-off"></i> Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar"> 
    <div class="sidebar"> 
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="image text-center"><img src="{{Helpers::image_check($user->image,'user.png')}}" class="img-circle" alt="User Image"> </div>
        <div class="info">
          <p>{{$user->name}}</p> 
          <p>ID:- {{$user->user_id}}</p> 
          <a href="#" class="logout" style="color: red;"><i class="fa fa-power-off"></i></a> 
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">PERSONAL</li>

        

        <li class=""><a href="{{url('user/dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class=""><a href="{{route('user.new-register.index')}}"><i class="fa fa-user-plus"></i> New Register</a></li>
        <li class=""><a href="{{route('user.activation.index')}}"><i class="fa fa-check-circle-o"></i> Account Activation</a></li>
        <li class=""><a href="{{route('user.deposit.index')}}"><i class="fa fa-money"></i> Deposit</a></li>

        <li class="treeview"> <a href="#"> <i class="fa fa-cart-arrow-down"></i> <span>Repurchase</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li class=""><a href="{{route('user.product.list')}}">Product</a></li>
            <li class=""><a href="{{route('user.my-order.list')}}">My Orders</a></li>
          </ul>
        </li>

        <li class="treeview"> <a href="#"> <i class="fa fa-users"></i> <span>Team</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li class=""><a href="{{route('user.team.index')}}">Tree</a></li>
            <li class=""><a href="{{route('user.direct-team.index')}}">Direct Refered</a></li>
            <li class=""><a href="{{route('user.left-team.index')}}">Left Team</a></li>
            <li class=""><a href="{{route('user.right-team.index')}}">Right Team</a></li>
          </ul>
        </li>


        <li class="treeview"> <a href="#"> <i class="fa fa-user"></i> <span>Profile</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li class=""><a href="{{route('user.profile.index')}}">My Profile</a></li>
            <li><a href="{{route('user.change-password.index')}}">Change Password</a></li>
            <!-- <li><a href="set-pin.php">Set PIN</a></li> -->
            <li><a href="{{route('user.kyc.index')}}">Kyc</a></li>
          </ul>
        </li>

        <li class=""><a href="{{route('user.wallet.list')}}"><i class="fa fa-inr"></i> Wallet</a></li>
        <li class=""><a href="{{route('user.withdrawal.list')}}"><i class="fa fa-usd"></i> Withdrawl</a></li>
        <li class=""><a href="{{route('user.earning.list')}}"><i class="fa fa-usd"></i> Earnings</a></li>
        <li class=""><a href="{{route('user.reward.list')}}"><i class="fa fa-gift"></i> Reward & Gift</a></li>
        <li class=""><a href="{{route('user.support.list')}}"><i class="fa fa-headphones"></i> Help & Support</a></li>
        <li class=""><a href="login.php" class="logout"><i class="fa fa-power-off"></i> Logout</a></li>



      </ul>
    </div>

  </aside>
  

