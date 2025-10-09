<?php include ('header.php');?>
<link rel="stylesheet" type="text/css" href="css/datepicker.css">
		<!-- Page Heading Section Start -->	
	<div class="pagehding-sec">
		<div class="images-overlay"></div>		
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="page-heading">
						<h1 >Result</h1>
					</div>
					<div class="breadcrumb-list">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="#">Result</a></li>
						</ul>
					</div>					
				</div>				
			</div>
		</div>
	</div>
	<!-- Page Heading Section End -->	
<div class="container"style="margin-top:20px;margin-bottom:20px;">
  
<?php
if(isset($_POST['submit'])){
   $dob    = $_POST['dob'];
   $enroll = $_POST['enroll'];
   $check = $con->check("user_register",array('dob'=>$dob,'reg_id'=>$enroll));

  if($check>=1){
  $f      = fs("user_register",array('dob' =>$dob ,'reg_id'=>$enroll,'result_status'=>1));
  $course = fs("course",array('id' =>$f->course_id));
  if($f->result_status==1){
      
  
?>
<div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8 bg_col">
             <div class="col-md-2 col-sm-6 col-xs-12">
						<div class="logo_img">
							<a href="index.php"><img src="imge/logo.png" style="max-height: 100px;" alt=""></a>
						</div>
					</div>
					<div class="col-md-10 col-sm-6 col-xs-12">
					    <h1 class="text_fix text-center top-head-h1">SAUNIT MANAGEMENT AND TECHNICALCOUNCIL </h1>
                       <p class="para_fix">Reg. Under Ministry Of Corporate Affairs Govt. of India 
                       <br>AN ISO 9001:2015 Certified Institute</p>
					</div>
				<div class="col-sm-12 " style="padding: 4px;">
					<table class="table" style="border: none;">
                    <thead>
                      <tr class="bg_color">
                        <th>ENROLLMENT NUMBER</th>
                        <th><?php echo $f->reg_id; ?></th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      <tr>
                        <td>NAME</td>
                        <td><?php echo $f->first_name; ?></td>
                      </tr>
                      <tr>
                        <td>FATHER NAME</td>
                        <td><?php echo $f->father_name; ?></td>
                      </tr>
                      <tr>
                        <td>MOTHER NAME</td>
                        <td><?php echo $f->mother_name; ?></td>
                      </tr>
                      <tr>
                        <td>COURSE </td>
                        <td><?php echo $course->name; ?></td>
                      </tr>
                      <tr>
                        <td>SPECIALIZATION</td>
                        <td>
                            <?php 
				   $string_to_array = explode('#',$f->specialization);
 if(is_array($string_to_array) || is_object($string_to_array)){
     $user_specialization = "";
     foreach($string_to_array as $sta){
         echo $user_specialization = id_to_name('specialization',$sta)." <br/>";
     }
     
 }
				  ?>
                        </td>
                      </tr>
                      <tr>
                        <td>GRADE</td>
                        <td><?php echo $f->grade; ?></td>
                      </tr>
                      <tr>
                        <td>YEAR OF PASSING</td>
                        <td><?php echo $f->year_of_passing; ?></td>
                      </tr>
                      <tr class="bg_color">
                        <th>REMARK </th>
                        <th>PASS</th>
                      </tr>
                    </tbody>
                  </table>
                  </div>
        </div>
        <div class="col-sm-2"></div>
        
                   
    </div>
  
<?php }else{
    echo "<script>alert('Result is not Set');window.location.href='result.php';</script>";
} }else{

  echo "<script>alert('Kindly Check Enrolment Number/Date of Birth Or You Are Not Active');window.location.href='result.php';</script>";
} }else{?>
  
<div class="row">
    <div class="col-md-6">
         <img class="img-responsive"src="imge/result2.jpg">
    </div>
    <div class="col-md-6">
      <div class="contact-page-form">
      <form action="" method="post">
        <div class="form-group">
          <label for="Enrolment No"  style="color: #fff;">Please Enter Your Registration  Or Enrollment Number :</label>
          <input type="text" class="form-control" id="Enrolment No" placeholder="Enrolment No" name="enroll" required="">
        </div>
        <div class="form-group">
          <label for="pwd" style="color: #fff;">Date of Birth:</label>
          <input type="date" class="form-control" placeholder="Date Of Birth" name="dob" required="">
        </div>
        <button type="submit" name="submit" class="btn btn-default">Get  Result</button>
      </form>
    </div>
    </div>
</div>
<?php } ?>
</div>


<?php include ('footer.php');?>

<script type="text/javascript">
 $( function() {
    $( "#datepicker" ).datepicker({
        dateFormat: "dd-mm-yy"
        ,   duration: "fast"
    });
} );
</script>
<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>