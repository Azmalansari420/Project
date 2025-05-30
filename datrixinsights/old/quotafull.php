<?php
include_once("include/config.php");
 
if(isset($_GET['projectid']) && isset($_GET['memberid'])){
if(strpos($_GET['memberid'],'-GGL') !== False){
    $ids = explode("-",$_GET['memberid']);
    $memberid = $ids[0];
    $resp_id = $ids[1]; 
}
else{
    $memberid = $_GET['memberid'];
    $resp_id = '';
}

$value = array(
  'project_id' => $_GET['projectid'], 
  'member_id' => $memberid,
  'resp_id' => $resp_id,
  'ip_address' => $_SERVER['REMOTE_ADDR'],
  'register_date' => $date_time,
   'end_time' => $date_time,
  'status' => "Quotafull"
);
$insert = $con->insert("user",$value);
}
 ?>
  
 <html>
     <style>
         .inner-section {
  background-image: url("img/bg.jpg"); /* The image used */
  background-color: #cccccc; /* Used if the image is unavailable */
  height: 658px; /* You must set a specified height */
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: 100% 100%; /* Resize the background image to cover the entire container */
}
.logo{
    color: #fff;
    text-decoration: none;
    font-weight:600;
    text-shadow: 1px 2px 3px black;
}
     </style>
     <head>
         <title>Quotafull</title>
         <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     </head>
     <body>
         
  <section class="inner-section">
      <div class="container">
           <div class="text-left">
               <h1><a class="logo" href="index.php">datrixinsights</a></h1>
               </div>
      </div>
  <div class="container">
    <div class="row">
        <div class="col-md-4"></div>
      <div class="col-md-4">
        <p class="text-center"><img src="img/q1.png"></p>
        <p class="text-center" style="font-size:18px;font-weight:500;"><b>Project Id : <?php echo @$_GET['projectid']; ?></b></p>
        <p class="text-center" style="font-size:18px;font-weight:500;"><b>Member Id : <?php echo @$_GET['memberid']; ?></b></p>
        <p class="text-center" style="font-size:18px;font-weight:500;"><b>Ip Address : <?php echo @$_SERVER['REMOTE_ADDR']; ?></b></p>
        
        </div>
        </div>
	 
  </div>
  <!-- end row -->
  </div>
</section> 
     </body>


</html>



