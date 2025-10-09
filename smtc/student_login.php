<?php include ('header.php');?>
<link rel="stylesheet" type="text/css" href="http://printolab.com/demo/hiihs/assets/css/datepicker.css">
		<!-- Page Heading Section Start -->	
	<div class="pagehding-sec">
		<div class="images-overlay"></div>		
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="page-heading">
						<h1>Student Zone</h1>
					</div>
					<div class="breadcrumb-list">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="#">Student Zone</a></li>
						</ul>
					</div>					
				</div>				
			</div>
		</div>
	</div>
	<!-- Page Heading Section End -->	
<div class="container"style="margin-top:20px;margin-bottom:20px;">
<div class="row">
<div class="col-md-6">
<img class="img-responsive"src="imge/student-zone.jpg">
</div>
<div class="col-md-6">
  <div class="contact-page-form">
  <form action="" method="post">
    <div class="form-group">
      <label for="Enrolment No"  style="color: #fff;">Enrolment No:</label>
      <input type="text" class="form-control" id="Enrolment No" placeholder="Enrolment No" name="enroll" required="">
    </div>
    <div class="form-group">
      <label for="pwd" style="color: #fff;">DOB:</label>
      <input type="text" class="form-control" id="datepicker" placeholder="Date Of Birth" name="dob" required="">
    </div>
    <button type="submit" name="submit" class="btn btn-default">Submit</button>
  </form>
</div>
</div>
</div>
<?php
if(isset($_POST['submit'])){
  $dob = $_POST['dob'];
  $enroll = $_POST['enroll'];
   $check = $con->check("student_details",array('dob' =>$dob ,'enroll'=>$enroll,'status'=>"Yes"));

  if($check==1){
  $f = fs("student_details",array('dob' =>$dob ,'enroll'=>$enroll,'status'=>"Yes"));
  $course = fs("course",array('id' =>$f->course));
?>
<div class="row"style="margin-top:20px;">
<table  class="table table-bordered">
    <tbody>
      <tr>
        <td>Enrolment No:</td>
        <td><?php echo $f->enroll ?></td>
      </tr>
      <tr>
        <td>Student's Name :</td>
        <td><?php echo $f->name ?></td>
      </tr><tr>
        <td>Date of Birth : </td>
        <td><?php echo $f->dob ?></td>
      </tr>
	  <tr>
        <td>Father's Name :</td>
        <td><?php echo $f->f_name ?></td>
      </tr>
	  <tr>
        <td>Email Id:</td>
        <td><?php echo $f->email ?></td>
      </tr>
	  <tr>
        <td>Course Applied For :   </td>
        <td><?php echo $course->name; ?></td>
      </tr>
    </tbody>
  </table>
</div>
<div class="row">
<p></p>
<p>Note :- Institute does not own for the errors or Omissions, if any, in this statement</p>
</div>
<?php
$fetch_semster = $con->all_fetch("student_result",array('s_id' =>$f->id),"group by semester");
if(is_array($fetch_semster) || is_object($fetch_semster) && !empty($fetch_semster)){
  foreach ($fetch_semster as $f_s) {
   
?>
<div class="row">
<h4>Year / Semester - <?php echo $f_s->semester; ?></h4>
<table class="table table-bordered">
    <thead>
      <tr style="background: #ccc; color: #000;    text-align: center;
">
        <th>Subject Code</th>
        <th>Subject</th>
        <th>Marks Obtain</th>
		<th>Maximum Marks</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $fetch_student_result = $con->all_fetch("student_result",array('s_id' =>$f->id,'semester'=>$f_s->semester,'status'=>"Yes"),"order by id ASC");
      if(is_array($fetch_student_result) || is_object($fetch_student_result) && !empty($fetch_student_result)){
        $total_mark_obtain = NULL;
        $total_marks = NULL;
        foreach ($fetch_student_result as $f_s_r) {
        $total_mark_obtain += $f_s_r->mark_obtain;
         $total_marks += $f_s_r->maxi_mark;
      ?>
      <tr style="
    color: #000;
    text-align: center;
">
        <td><?php echo $f_s_r->sub_code; ?></td>
        <td><?php echo $f_s_r->subject; ?></td>
        <td><?php echo $f_s_r->mark_obtain; ?></td>
		<td><?php echo $f_s_r->maxi_mark; ?></td>
      </tr>
      
      <?php  
        }
      }
      ?>
      <tr style="
    color: #000;
    text-align: center;
">
          <td colspan="2" class="text-center">Total</td>
          <td><?php echo $total_mark_obtain; ?></td>
          <td><?php echo $total_marks; ?></td>
      </tr>
    </tbody>
  </table>
</div>
<?php  # code...
  }
}
?>
<?php }else{

  echo "<script>alert('Kindly Check Enrolment Number/Date of Birth Or You Are Not Active')</script>";
} } ?>
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
<script type="text/javascript" src="http://printolab.com/demo/hiihs/assets/js/bootstrap-datepicker.js"></script>