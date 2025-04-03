 <?php
  
  session_start();
  include_once('lib/all_files.php');
  $temp_session_id 	 = session_id ();
  $check_sesion 	 = @$_SESSION['asa']['value']; 
  $check_sesion_time = @$_SESSION['asa']['ss_time'];
  $check_sesion_type = @$_SESSION['asa']['type'];
  
   
  
  //get user Details = when
  if(isset($check_sesion) and !empty($check_sesion)){
	  $u_f = fs($u_r_table,array('id'=>$check_sesion));
	  
  }
  
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	 
	<!-- mobile responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="apple-touch-icon" sizes="180x180" href="images/logo/logo.png">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FV4LXGFEW8"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-FV4LXGFEW8');
</script>
</head>
<body>

<div class="boxed_wrapper">
<?php include("sidenave.php");?>

<section class="theme_menu stricky">
    <div class="container">
        <div class="row" style="">
            <div class="col-md-3">
                <div class="main-logo">
                    <a href="http://eduindiafoundation.org"><img src="images/logo/logo.png" alt="Edu India"></a>
                </div>
            </div>
            <div class="col-md-9 menu-column">
                <p class="hidden-xs" style="font-weight: bold;float:right;">Toll Free Number <a href="tel:18008914011">18008914011</a></p>
                <!-- End of #main_menu -->
            </div>
            
        </div>
                

   </div> <!-- End of .conatiner -->
</section>