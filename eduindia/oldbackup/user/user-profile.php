<?php 
   include_once('include/topmenu.php'); 
   $url_id        = @$_GET['id'];
   $table_name= "user_register";
   //FETCH
if(isset($url_id) and is_numeric($url_id) and !empty($url_id)){
	    $fs = fs($table_name,array('id'=>$url_id));   
		if(is_array($fs) || is_object($fs)){
			
		}else{
			goto_c_url('all-student.php');
		}
}

?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header"> 
      <h1>Students Details <small><b> View</b></small>
      </h1>
     
    </section>
<section class="content" id="ppg">
      <div class="row">
        <div class="col-xs-12">

          <div class="box box-info">
            <div class="box-header">
          <h3 class="box-title"><i class="fa fa-shopping-cart"></i> Student Registration Id :- (<?php e($fs->reg_id);?>)</h3>
			<div class="box-tools pull-right">
              <a href="add-student.php" class="btn btn-info btn-sm">
              <i class="fa fa-save"></i> Add New</a>
			 
			<a href="all-student.php" data-toggle="tooltip" title="Cancel" class="btn btn-info btn-sm" >
              <i class="fa fa-reply"></i> Back </a>
            
          </div>
        </div>
            <!-- /.box-header -->
            <div class="box-body">
			<div class="row">
			    <div class="col-sm-6">
			        <table class="table table-bordered">
			          <tr><th>Student Name</th><td><?php e($fs->first_name);?></td></tr>
			          <tr><th>Student Father Name *</th><td><?php e($fs->father_name);?></td></tr>
			          <tr><th>Student Mother Name *</th><td><?php e($fs->mother_name);?></td></tr>
			          <tr><th>Email*</th><td><?php e($fs->email);?></td></tr>
			          <tr><th>Mobile Number *</th><td><?php e($fs->mobile);?></td></tr>
			          <tr><th>Select Gender</th><td><?php e(c_g($fs->gender));?></td></tr>
			          <tr><th>DOB </th><td><?php e($fs->dob);?></td></tr>
			          <tr><th>Select State *</th><td><?php echo id_to_name('state',$fs->state);?></td></tr>
			          <tr><th>Select District *</th>
					  <td><?php echo id_to_name('district',$fs->district);?></td></tr>
			          <tr><th>Select City *</th>
					  
					  <td>
					  <?php echo id_to_name('city',$fs->city);?>
					  </td>
					  </tr>
			          <tr><th>Full Address *</th><td><?php e($fs->address);?></td></tr>
					  <tr>
							<th>Student Image</th>
							<td><img src="../upload/<?php e(@$fs->picture); ?>" alt="" style="width:100px;height:100px;" /></td>
					  </tr>
					  <tr>
							<th>Minimum Qualification 10th or 12th</th>
							<td><img src="../upload/<?php e(@$fs->cover); ?>" alt="" style="width:100px;height:100px;" /></td>
					  </tr>
			   </table>
				</div>
				<div class="col-sm-6">
			         <table class="table table-bordered">
			          <tr>
						<th>Institute name *</th>
						<td>
						<?php 
						   echo id_to_name('institutes',$fs->institute_id);
						?>
						</td>
					  </tr>
					  <tr><th>Institutes Course Category</th>
					  <td><?php 
					  echo id_to_name('institutes_courses',$fs->institute_course_id);
					  ?>
					  </td>
					  </tr>
					  <tr><th>Course *</th><td><?php 
					  echo id_to_name('course',$fs->course_id);
					  ?></td></tr>
					  <?php
					   $main_fs = fs('course',array('id'=>$fs->course_id));
					   $pass = "WHERE id IN ($main_fs->subject)";
					   $fetch_all_subjcet = $con->get('subject',$pass);
					   if(is_array($fetch_all_subjcet) || is_object($fetch_all_subjcet)){
						   echo "<tr style='background-color:#f00;text-align:center;'><td colspan='2'><b>Subject list</b></td></tr>";
						   $iss=1;
						   foreach($fetch_all_subjcet as $fas){?>
							   <tr>
								<td><?php e($iss++); ?></td>
								<td><?php echo $fas->name;?> | <?php echo $fas->code;?></td>
							   </tr>
						   <?php }
					   }
	                      				  
					  ?>
					  
					  <tr><th>Admission Date</th><td><?php e($fs->join_date);?></td></tr>
					  <tr><th>Branch Name</th>
					  <td>
					  <?php 
					  
					  $b_fs = fs("branch",array('id'=>$fs->user_add_by_id)); 
					  echo $b_fs->b_name;
					  ?>
					  </td></tr>
					  <!-- <tr><th>Branch Code</th><td><?php e($b_fs->b_code);?></td></tr> -->
			   </table>
				</div>
			</div>
               
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   <?php include_once('include/footer.php');?>

  
