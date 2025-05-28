<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>{{env('APP_NAME')}}</title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />

 <meta name="_token" content="{{csrf_token()}}">

<!-- v4.0.0-alpha.6 -->
<link rel="stylesheet" href="{{url('public/user/')}}/dist/bootstrap/css/bootstrap.min.css">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- Theme style -->
<link rel="stylesheet" href="{{url('public/user/')}}/dist/css/style.css">
<link rel="stylesheet" href="{{url('public/user/')}}/dist/css/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="{{url('public/user/')}}/dist/css/et-line-font/et-line-font.css">
<link rel="stylesheet" href="{{url('public/user/')}}/dist/css/themify-icons/themify-icons.css">





<link rel="stylesheet" href="{{url('public')}}/toast/saber-toast.css">
<link rel="stylesheet" href="{{url('public')}}/toast/style.css">
<link rel="stylesheet" href="{{url('public')}}/front_css.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="{{url('public')}}/front_script.js"></script>




</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-box-body">
    
    

    <form class="account__form form_data" action="{{route('user.user-forgot-password-otp')}}" method="post" enctype="multipart/form-data" id="form_data_submit" novalidate>
    @csrf

      <div class="auth-login">
        <img src="{{url('public/user/')}}/dist/img/logo.png" alt="">
      </div>

    <h3 class="login-box-msg mb-2">Forgot Password</h3>
    <p style="font-size: 12px;text-align: center;">Enter your Email and instructions will be sent to you!</p>


      <div class="form-group">
        <label>UserName</label>
        <div class="input-group">
          <div class="input-group-addon"><i class="fa fa-user"></i></div>
          <input class="form-control" placeholder="Username" type="text" name="username">
        </div>
      </div>

      
      <div>
       
        <!-- /.col -->
        <div class="col-xs-4 m-t-1">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
        </div>
        <!-- /.col --> 
      </div>
    </form>
    
    
    
  </div>
  <!-- /.login-box-body --> 
</div>
<!-- /.login-box --> 

<!-- jQuery 3 --> 


<!-- v4.0.0-alpha.6 --> 
<script src="{{url('public/user/')}}/dist/bootstrap/js/bootstrap.min.js"></script> 

<!-- template --> 
<script src="{{url('public/user/')}}/dist/js/niche.js"></script>


<script src="{{url('public/')}}/toast/saber-toast.js"></script>
<script src="{{url('public/')}}/toast/script.js"></script>


</body>
</html>