<?php
include_once("include/config.php");
 
if(isset($_GET['projectid']) and isset($_GET['memberid'])){
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
      'status' => "Complete"
    );
    $insert = $con->insert("user",$value);
}
 ?>
 <html>
     <head>
         <title>Complete</title>
         <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
     <script type="text/javascript">
window.onbeforeunload = function(e) {
  return "Do you want to exit this page?";
};
window.onbeforeunload = function(event) {
    event.returnValue = "Write something clever here..";
};

$(window).on('beforeunload', function() {
  return 'Your own message goes here...';
});
window.addEventListener('beforeunload', (event) => {
  console.log("BEFORE")
  navigator.sendBeacon("http://www.google.it");
  // Cancel the event as stated by the standard.
  event.preventDefault();
  // Chrome requires returnValue to be set.
  event.returnValue = '';
  
});
/*window.onbeforeunload = function(e) {
        e.returnValue = 'onbeforeunload';
        func();
        return onbeforeunload;
    };

    function func() 
    {
        var request = new XMLHttpRequest();
        request.open("POST", "exit.php", true); 
        request.onreadystatechange = stateChanged;
        request.send(null);
    }
    function stateChanged()
    {
        if (request.readyState == 4 || request.readyState == "complete")
            alert("Succes!");
    }*/

</script>

     </head>
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
        <p class="text-center"><img src="img/comp.png"></p>
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

