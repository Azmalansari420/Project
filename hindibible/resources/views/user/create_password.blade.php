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
    
    

    <form class="account__form form_data" action="{{route('user.user-create-password-submit')}}" method="post" enctype="multipart/form-data" id="form_data_submit" novalidate>
    @csrf

      <input type="hidden" name="action" value="{{Crypt::encryptString($actionString)}}">
      
      <div class="auth-login">
        <img src="{{url('public/user/')}}/dist/img/logo.png" alt="">
      </div>

    <h3 class="login-box-msg mb-2">Create Password</h3>

      <div class="form-group">
        <label>Password</label>
        <div class="input-group">
          <div class="input-group-addon"><i class="fa fa-lock"></i></div>
          <input class="form-control" placeholder="Password" type="password" name="npassword">
          <i class="fa fa-eye pwd-eye pwd-eye-open password_show_hide"></i>
          <i class="fa fa-eye-slash pwd-eye pwd-eye-close password_show_hide" style="display: none;"></i>
        </div>
      </div>
      
      <div class="form-group">
        <label>Confirm Password</label>
        <div class="input-group">
          <div class="input-group-addon"><i class="fa fa-lock"></i></div>
          <input class="form-control" placeholder="Confirm Password" type="password" name="cpassword">
          <i class="fa fa-eye pwd-eye pwd-eye-open password_show_hide"></i>
          <i class="fa fa-eye-slash pwd-eye pwd-eye-close password_show_hide" style="display: none;"></i>
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