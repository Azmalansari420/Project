<?php include("header.php");?>
<title>JKCS Edu India Foundation - Verification</title>		
<meta name="keywords" content="Edu India Foundation, JKCS Edu India Foundation"/>
<meta name="description" content="Edu India Foundation: Enter your registration number for verification." />



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
			$regis  = $con->check($table_name,array('reg_id'=>$reg_id));
			 $fs = fs($table_name,array('reg_id'=>$reg_id));   
			if($regis >=1){
			    
			    if($fs->detail_show==1)
			    {
			?>
				<div class="col-sm-8 col-sm-offset-2">
			<div class="panel panel-primary">
						<div class="panel-heading">
						   Get Result 
						</div>
						<div class="panel-body">
						 <table class="table table-bordered">
			          <tr><th>Registration Id</th><td><?php e($fs->reg_id);?></td></tr>
							 <tr><th>Student Name</th><td><?php e($fs->first_name);?></td></tr>
			          <tr><th>Student Father Name *</th><td><?php e($fs->father_name);?></td></tr>
			          <tr><th>Student Mother Name *</th><td><?php e($fs->mother_name);?></td></tr>
			          <tr><th>Select Gender</th><td><?php e(c_g($fs->gender));?></td></tr>
			          <tr><th>DOB (Y-M-D)</th><td><?php e($fs->dob);?></td></tr>
			          <tr><th>State *</th><td><?php echo id_to_name('state',$fs->state);?></td></tr>
			          <tr><th>District *</th>
					  <td><?php echo id_to_name('district',$fs->district);?></td></tr>
			          <tr><th>City *</th>					  
					  <td>
					  <?php echo id_to_name('city',$fs->city);?>
					  </td>
					  </tr>
			          <tr><th>Full Address *</th><td><?php e($fs->address);?></td></tr>
					  <tr>
							<th>Student Image</th>
							<td><img src="upload/<?php e(@$fs->picture); ?>" alt="" style="width:100px;height:100px;" /></td>
					  </tr>
					   
			    
			          <tr>
						<th>Branch Name</th>
						<td>
						<?php 
						   echo id_to_name('branch',$fs->user_add_by_id,'b_name');
						?>
						</td>
					  </tr>
					  <tr><th>Course name</th>
					  <td><?php 
					  echo id_to_name('course',$fs->course_id);
					  ?>
					  </td>
					  </tr>
					  <tr><th>Admission Date</th><td><?php e($fs->join_date);?></td></tr>
							 <tr><th>Status</th><td><?php e($fs->p_s);?></td></tr>
			   </table>
						</div>
						
				   </div>
			</div>
	<?php 
			    }
			    else
			    { ?>
			           <div class="col-sm-4 col-sm-offset-4">
                			<div class="alert alert-danger">
                				<strong>Wrong : </strong> Your are not authorised
                			</div>
                			
                		  </div>
			    <?php }
	
	
	}else{?>
		  <div class="col-sm-4 col-sm-offset-4">
			<div class="alert alert-danger">
				<strong>Wrong : </strong> Student Registration  id is Wrong
			</div>
			<p class="text-center">
			    <a href="" class="btn btn-primary">Try Agian</a>
			</p>
		  </div>
		<?php } 
		    
		}else{
		?>
		     <div class="col-sm-4 col-sm-offset-4">
				   <div class="panel panel-primary">
						<div class="panel-heading">
						   Get Result 
						</div>
						<div class="panel-body">
						<form action="" method="post">
						   <div class="form-group">
						   <label for="stu_reg_number">Student Registration Number</label>
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