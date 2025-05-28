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


<style>
        .otp-container {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .otp-input {
            width: 40px;
            height: 40px;
            font-size: 20px;
            text-align: center;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .otp-input:focus {
            border-color: #4f90c4;
            outline: none;
        }
    </style>


</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-box-body">
    
    

    <form class="account__form form_data" action="{{$submit_url}}" method="post" enctype="multipart/form-data" id="form_data_submit" novalidate>
    @csrf

      <input type="hidden" name="action" value="{{Crypt::encryptString($actionString)}}">

      <div class="auth-login">
        <img src="{{url('public/user/')}}/dist/img/logo.png" alt="">
      </div>

      <h3 class="login-box-msg mb-2">OTP</h3>
      <div class="form-group has-feedback">
        <div class="otp-container">
        <input type="text" maxlength="1" class="otp-input" id="otp-1" oninput="moveFocus(event, 1)" onkeydown="moveFocusOnBackspace(event, 1)" name="otp1">
        <input type="text" maxlength="1" class="otp-input" id="otp-2" oninput="moveFocus(event, 2)" onkeydown="moveFocusOnBackspace(event, 2)" name="otp2">
        <input type="text" maxlength="1" class="otp-input" id="otp-3" oninput="moveFocus(event, 3)" onkeydown="moveFocusOnBackspace(event, 3)" name="otp3">
        <input type="text" maxlength="1" class="otp-input" id="otp-4" oninput="moveFocus(event, 4)" onkeydown="moveFocusOnBackspace(event, 4)" name="otp4">
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

  

  <script>
        function moveFocus(event, currentIndex) {
            // Check if the current input field is filled
            if (event.target.value.length === 1) {
                // Move focus to the next field
                const nextInput = document.getElementById(`otp-${currentIndex + 1}`);
                if (nextInput) nextInput.focus();
            }
        }

        function moveFocusOnBackspace(event, currentIndex) {
            if (event.key === "Backspace" && event.target.value === "") {
                // Move focus to the previous field on Backspace
                const prevInput = document.getElementById(`otp-${currentIndex - 1}`);
                if (prevInput) prevInput.focus();
            }
        }
    </script>


</body>
</html>