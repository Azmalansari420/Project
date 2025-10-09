<?php include("header.php");?>
 <link rel="stylesheet" type="text/css" href="css/verification.css">



<section class="our-services style-2">
    <div class="container"> 
        <div class="row">
		<?php 
		
		if(isset($show_result) || isset($_GET['reg_id'])){
		    
		    if(isset($_GET['reg_id'])){
		        $reg_id = $_GET['reg_id']; 
		    }else{
    			$reg_id = $stu_reg_number;
    			$dob = $dob;
		    }
		    
		    $table_name = "user_register"; 
		    
			$regis  = $con->check($table_name,array('payment_status'=>1,'reg_id'=>$reg_id,'dob'=>$dob));
			
			$fs = fs($table_name,array('reg_id'=>$reg_id)); 
			
			$string_to_array = explode('#',$fs->specialization);
 if(is_array($string_to_array) || is_object($string_to_array)){
     $user_specialization = "";
     foreach($string_to_array as $sta){
         $user_specialization .= id_to_name('specialization',$sta)." ";
     }
     
 }
			if($regis >=1){ 
			
			if($fs->mc_status==1){
			?>
			
			
			 <section class="bg_image">
		
		<div class="opacity">
		<div class="container">
			<div class="row">
				<div class="col-sm-2">
					<img src="img/verify/logo.png" class="img img-responsive">
				</div>
				<div class="col-sm-10">
					<h1 style="font-size: 40px;font-weight: bold;">SAUNIT MANAGEMENT AND TECHNICAL COUNCIL</h1>
					<h4 style="font-weight: bold;text-align:center;">Reg. Under Ministry Of Corporate Affairs Govt. of India ISO 9001:2015 Certified Institute</h4>
				</div>
			</div>
		</div>
		<h4 class="text-center" style="font-weight: bold; padding-top: 40px; padding-bottom: 20px;border-top: 3px solid #000;">Sub: Student Related Verification Information</h4>
	 
			 
				<p><b>SMTC</b> is to Verify that <b><?php if($fs->gender==1){echo "Mr."; }else{echo "Ms.";}?> <?php echo $fs->first_name; ?></b> has Completed his Course<b> <?php 
            echo id_to_name('course',$fs->course_id);
            ?></b> from 
				SAUNIT MANAGEMENT AND TECHNICAL COUNCIL</p>
 
			<h4 class="text-center" style="font-weight: bold;">Additional Details Regarding the above Mentioned Program </h4>
		 
		<div class="container" style="padding-bottom: 30px;">
			<div class="row">
				<table class="table">
    <tbody>
      <tr class="weight">
        <td>Enrollment Number </td>
        <td>:   <?php echo $fs->reg_id; ?></td>
      </tr>
      <tr class="weight">
        <td>Name of the Student</td>
        <td>:  <?php echo $fs->first_name; ?></td>
      </tr>
      <tr class="weight">
        <td>Father's Name</td>
        <td>:  <?php echo $fs->father_name; ?></td>
      </tr>
      <tr class="weight">
        <td>Mother Name</td>
        <td>:  <?php echo $fs->mother_name; ?></td>
      </tr>
      <tr class="weight">
        <td>Name Of the Program</td>
        <td>:  <?php 
            echo id_to_name('course',$fs->course_id);
            ?></td>
      </tr>
      <tr class="weight">
        <td>Specialization </td>
        <td>:  <?php echo $user_specialization; ?> </td>
      </tr>
    </tbody>
  </table>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<p>Please feel free to get back to us in the eventuality of any queuies on the given address or  phone number:</p>
			</div>
		</div>

		<div class="container" style="padding-top: 50px;">
			<div class="row">
				<div class="col-sm-3">
					<img src="img/verify/1.png" style="height: 130px;" class="img-responsive">
				</div>
				<div class="col-sm-6">
					
				</div>
				<div class="col-sm-3">
					<img src="img/verify/2.png" style="height: 165px;" class="img-responsive">
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<h3 style="font-weight: bold;">Admin Head</h3>
				<h3 >SAUNIT MANAGEMENT AND TECHNICAL COUNCIL</h3>
				<p>Email:info@smtc.org.in</p>
				<p>Website:www.smtc.org.in</p>

			</div>
		</div>


		<div class="container">
			<div class="row">
				<h4 style="font-weight: bold;border-top: 3px solid #000;    width: 97%;
    padding-top: 13px;" class="text-center">130B, 4th Floor, Sewak Park, Pillar No -783,  Dwarka Mor, New Delhi-110059 India </h4>
				<h4 style="font-weight: bold;" class="text-center">Website:www.smtc.org.in PH.8851481640</h4>
				<h4 style="font-weight: bold;" class="text-center">Email.smtcinstitute.dwarka@gmail.com, info@smtc.org.in</h4>
			</div>
		</div>
	</div>
	</section>
	<?php } }else{?>
		  <div class="col-sm-4 col-sm-offset-4">
			<div class="alert alert-danger">
				<strong>Wrong : </strong> Student Registration id is Wrong
			</div>
			<p class="text-center">
			    <a href="" class="btn btn-primary">Try Agian</a>
			</p>
		  </div>
		<?php } 
		    
		}else{
		?>
		     <div class="col-sm-4 col-sm-offset-4">
				   <div class="panel panel-primary" style="margin-top:55px;">
						<div class="panel-heading">
						   Get Result 
						</div>
						<div class="panel-body">
						<form action="" method="post">
						   <div class="form-group">
						   <label for="stu_reg_number">Student Registration Number</label>
								<input type="text" required autocomplete="off" name="stu_reg_number" class="form-control" id="stu_reg_number" />
						   </div>
						   
						   <div class="form-group">
						   <label for="dob">Date of birth</label>
								<input type="date" required autocomplete="off" name="dob" class="form-control" id="dob" />
						   </div>
						   
						   <input type="submit" name="show_result" value="Submit" class="btn btn-primary btn-block"/>
						   </form>
						</div>
				   </div>
			 </div>
		<?php } ?>
        </div>
    </div>
</section>








<?php include("footer.php");?>