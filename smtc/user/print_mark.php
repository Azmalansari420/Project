<?php 
    include_once('include/topmenu.php'); 
	$update_id = @$_GET['id'];
	$talbe_name = "faculty";
	 
	if(isset($stu_regi_btn)){
		    $reg_id = $stu_regi;
			$table_name = 'tbl_user';
			$regis  = $con->check($table_name,array('reg_id'=>$reg_id));
			
			if($regis >=1){
				$fs = fs($table_name,array('reg_id'=>$reg_id)); 
				$paths = "print.php?id=".$fs->id."&type=".$print_type;
				goto_c_url($paths);
			}else{
				alert('Wrong User Registration id','print_mark.php');
			}
	}
	
?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   

	<section class="content">
	    <div class="row">
			<div class="col-sm-4 col-sm-offset-4">
				<div class="panel panel-primary">
					<div class="panel-heading">Print Student Diploma & marksheet:</div>
					<div class="panel-body">
					<form action="" method="post">
						<div class="form-group">
							<label for="">Student Registration No</label>
							<input type="text" required autocomplete="off" name="stu_regi" class="form-control" placeholder="Student Registration No"/>
						</div>
						<div class="form-group">
							<label for="">Select Print Type</label>
							<select name="print_type" required class="form-control">
								<option value="">Select Print Type</option>
							
								<option value="Id Card">Id Card</option>
							</select>
						</div>
					<input type="submit" value="Submit" name="stu_regi_btn" class="btn btn-primary btn-block" />
					</form>
					</div>
				</div>
			
			</div>
		</div>
		
     
    </section>
	
 
  </div>
  <!-- /.content-wrapper -->
   <?php include_once('include/footer.php');?>
 
  