<?php include("header.php");?>
<meta name="" content="https://smtc.org.in/student-verification.php">
 <title>SAUNIT MANAGEMENT AND TECHNICAL COUNCIL - Student Verification</title>
<meta name="keywords" content="SAUNIT MANAGEMENT AND TECHNICAL COUNCIL">
      <meta name="description" content="Student Verification page which allow you to access your page and you see your details">
 <meta property="og:type" content="article"/>
    <meta property="og:title" content="SAUNIT MANAGEMENT AND TECHNICAL COUNCIL - Student Verification"/>
    <meta name="og:image" content="https://smtc.org.in/banner/BN11.jpg"/>
    <meta property="og:description" content="SAUNIT MANAGEMENT AND TECHNICAL COUNCIL , Student Verification page which allow you to access your page and you see your details"/>
<meta property="og:url" content="https://smtc.org.in/student-verification.php"/>
<meta property="og:site_name" content="SAUNIT MANAGEMENT AND TECHNICAL COUNCIL - Student Verification"/>
<link href="https://smtc.org.in/" rel="canonical">
 



<section class="our-services style-2">
    <div class="container"> 
        <div class="row">
		<?php 
		
		if(isset($show_result) || isset($_GET['reg_id'])){
		    
		    if(isset($_GET['reg_id'])){
		        $reg_id = $_GET['reg_id']; 
		    }else{
    			$reg_id = $stu_reg_number;
		    }
		    
		    $table_name = "user_register"; 
		    
			$regis  = $con->check($table_name,array('payment_status'=>1,'reg_id'=>$reg_id));
			
			$fs = fs($table_name,array('reg_id'=>$reg_id));   
			
			if($regis >=1){ ?>
				<div class="col-sm-8 col-sm-offset-2">
			<div class="panel panel-primary" style="margin-top:50px;">
						<div class="panel-heading">
						   Student Verification
						</div>
						<div class="panel-body">
						 <table class="table table-bordered">
			          <tr><th>Registration Id</th><td><?php e($fs->reg_id);?></td></tr>
							 <tr><th>Student Verification Name</th><td><?php e($fs->first_name);?></td></tr>
			          <tr><th>Student Father Name *</th><td><?php e($fs->father_name);?></td></tr>
			          <tr><th>Student Mother Name *</th><td><?php e($fs->mother_name);?></td></tr>
			          <tr><th>DOB (D-M-Y)</th><td><?php echo date_format(date_create("$fs->dob"),"d-m-Y");?></td></tr>
			          <tr><th>State *</th><td><?php echo id_to_name('state',$fs->state);?></td></tr>
			           
					  </tr>
			          
					  <tr>
							<th>Student Image</th>
							<td>
							    <img src="upload/<?php e(@$fs->picture); ?>" alt="" style="width:100px;height:100px;" />
							    <img src="img/verified.png" alt="" style="float:right;width:100px;height:100px;" />
							    
							</td>
					  </tr>
					   
			    
			           
					  <tr><th>Course name</th>
					  <td><?php 
					  echo id_to_name('course',$fs->course_id);
					  ?>
					  </td>
					  </tr>
					  
					  <tr><th>Status</th><td><b>Verified By SMTC</b></td></tr>
			   </table>
						</div>
						
				   </div>
			</div>
	<?php }else{?>
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
						   <label for="stu_reg_number">Student Verification or Registration Number</label>
								<input type="text" required autocomplete="off" name="stu_reg_number" class="form-control" id="stu_reg_number" />
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