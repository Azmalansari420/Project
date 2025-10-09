<?php 
    include_once('include/topmenu.php'); 
 
//Add Coupon category
if(isset($add_c_btn)){ 
  $check_password =  $con->check('top_admin',array('id'=>$admin_id,'admin_password'=>$c_password,'admin_confirm_password'=>$c_password));
  if($check_password==1){
  	if($new_password==$con_password){
  		$run = $con->update('top_admin',array('admin_password'=>$new_password,'admin_confirm_password'=>$new_password),array('id'=>$admin_id));
  		if($run==1){
  			alert('Password Change Successfully');
  			unset($_SESSION['session_admin']);
        	header('Location: index.php');
        	echo "<script>location.href='index.php';</script>";
  		}
  	}else{
  		alert('Password and confirm password does not match');
  	}
  }else{
  	alert('Invalid Current Password');
  }

   
}	
 

	
?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
     

	<section class="content" id="ppg">
	 <!-- Default box -->
      <div class="box box-info">
	 
	  
	  
        <div class="box-header">
          <span class="box-title"><i class="fa fa-picture-o"></i> Generate Barcode :
		    
		  </span>
		 
        </div>
        <div class="box-body">
		 
		<div class="tab-content">
			 <div id="General" class="tab-pane fade in active">
			  	<form class="form-horizontal" action="student-barcode.php" method="GET" enctype="multipart/form-data">   
			   
			   
				<div class="form-group">
					<label class="control-label col-sm-2" for="sub_cat_name">Select Student  <?=$req;?></label>
					<div class="col-sm-10">
					  <select class="form-control select2" required name="reg_id">
					      <option value="">Select Student</option>
					      <?php 
					      $fetch_all_students = $con->get('user_register',"order by first_name asc");
					      if(is_array($fetch_all_students) || is_object($fetch_all_students)){
					          foreach($fetch_all_students as $fas){?>
					              <option value="<?php echo $fas->reg_id; ?>"><?php echo $fas->first_name; ?> | <?php echo $fas->mobile; ?></option>
					          <?php }
					      }
					      ?>
					      
					  </select><br/><br/>
					  <input type="submit" name="form_submit" class="btn btn-success" value="Generate Barcode">
					</div>
				  </div>
				  
				  </form>	

 
				  
				  
				  
				  
				  
				
				   
			</div>
			  
		</div>
	 
	 
        </div>
        <!-- /.box-body -->
        
      </div>
      <!-- /.box -->
    </section>
	
 
  </div>
  <!-- /.content-wrapper -->
   <?php include_once('include/footer.php');?>
 
  
  