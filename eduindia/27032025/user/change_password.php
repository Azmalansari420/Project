<?php 
   include_once('include/topmenu.php');
   $page_name     = "change_password.php";
   //$show_all_list = "all-student.php";
   $table_name    = "user_register";
   $url_id        = @$_GET['id'];
   
   
//FETCH
if(isset($url_id) and is_numeric($url_id) and !empty($url_id)){
	    $fs = fs($table_name,array('id'=>$url_id));   
		if(is_array($fs) || is_object($fs)){
			
		}else{
			goto_c_url($page_name);
		}
}

//ADD     
if(isset($add_course_btn)){
	 $col_val = array(
	        'password'=>$new_password,			
			);
			

if($admin->password == $old_password){
	if($new_password == $con_password){
	$row   = $con->update($table_name,$col_val,array('id' => $admin_id ));
	   if($row==1){
		   alert("Password Changed Successfully",$page_name);   
	   }
	}else{
		echo "<script>alert('New & Confirm Password is Not Matched');</script>";
	}
	}else{
		echo "<script>alert('Old Password is Not Matched');</script>";
	}
}



//Update Student
include_once('update_students.php');
 
?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
 
	
	
<section class="content" id="ppg">
      <div class="row">
        <div class="col-xs-12">

          <div class="box box-info">
            <div class="box-header">
          <h3 class="box-title"><i class="fa fa-shopping-cart"></i> Change 	Password</h3>
			 
        </div>
            <!-- /.box-header -->
            <div class="box-body">
                 <form action="" enctype="multipart/form-data" method="post">
				 
					<div class="row">
						
						  <div class="col-sm-4">
							<div class="form-group">
								<label for="">Old Password</label>
							   <input type="text" required  name="old_password" class="form-control" />
							</div>
						 </div>
						 <div class="col-sm-4">
							<div class="form-group">
									<label for="">New Password</label>
							   <input type="password" required  name="new_password" class="form-control" />
							</div>
						 </div>		
					<div class="col-sm-4">
							<div class="form-group">
									<label for="">Confirm Password</label>
							   <input type="password" required  name="con_password" class="form-control" />
							</div>
						 </div>		
					</div>
					 
					 
					 
						 
						
					
					
				
						<input type="submit" name="add_course_btn" value="Add Student" class="btn btn-info" />
					
				 
					
				 </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
		 
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   <?php include_once('include/footer.php');?>

  
