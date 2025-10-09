<?php
 
    $a_f_n = "../admin/";
    $title = "SMTC";
	session_start();
    $session_admin  =  @$_SESSION['session_user']; 
	if(isset($session_admin)){
		echo "<script>location.href='welcome.php';</script>";
	}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title; ?></title> 
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo $a_f_n;?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="<?php echo $a_f_n ;?>dist/css/login_bg.css">
  <link rel="icon" type="image/png" href="../img/favicon.ico">
  
  <!-- Ionicons -->            
         
  <link rel="stylesheet" href="<?php echo $a_f_n;?>dist/css/AdminLTE.css">
  
</head>

<body>

<body> 
	<div class="container">
		<div class="row">
		<h2 class="user_title">Student Login Panel</h2>
			<div class="col-sm-4 col-sm-offset-4 login_bg">
				

				<div class="form-group">
					<input type="text" required placeholder="Student Registration Id" name="login_user_name" id="login_user_name" class="form-control">
					<input type="hidden" value="" id="hidden_email"/>
				</div>
				<div class="form-group">
				    <input type="password" required placeholder="User Password" name="login_user_password" id="login_user_password" class="form-control">
				</div> 
				<div class="form-group">
				   <input type="submit" name="login_btn"  id="login_btn" class="btn btn-block login_btn" value="Submit"/>
				   <p style="text-align: center;margin-top: 10px;"><a style="color:#fff;" href="forgot-password.php">Forgot Password</a></p>
				   <p style="text-align: center;margin-top: 10px;color:#fff">Don't have an account ? <a style="color:#f00;" href="../user-register.php">Create Account</a></p>
				</div> 
				
			</div>
		</div>
	</div>
 
 
 

<!-- jQuery 3 -->
<script src="<?php echo $a_f_n;?>dist/js/jquery.js"></script>
<script src="<?php echo $a_f_n;?>dist/js/bootstrap.js"></script>
<script src="login_js.js" type="text/javascript"></script>

</body>
</html>
