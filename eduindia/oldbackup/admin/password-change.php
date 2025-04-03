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
	 
	  
	  <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
        <div class="box-header">
          <span class="box-title"><i class="fa fa-key"></i> Change Password :
		    
		  </span>
			<div class="box-tools pull-right">
             
			 
			  <button type="submit" name="add_c_btn" class="btn btn-info btn-sm">
              <i class="fa fa-save"></i> Update assword</button>
			 
                
          </div>
        </div>
        <div class="box-body">
		 
		<div class="tab-content">
			 <div id="General" class="tab-pane fade in active">
			  	   
			   
			   
				<div class="form-group">
					<label class="control-label col-sm-2" for="sub_cat_name">Current Password <?=$req;?></label>
					<div class="col-sm-10">
					  <input type="text" required name="c_password"   class="form-control"  placeholder="Current Password">
					</div>
				  </div>
				  
				   
				  <div class="form-group">
					<label class="control-label col-sm-2" for="sort_order">New Password <?=$req;?></label>
					<div class="col-sm-10">
					  <input type="text" required name="new_password"  class="form-control"   placeholder="New Password ">
					</div>
				  </div>
				  
				   <div class="form-group">
					<label class="control-label col-sm-2" for="sort_order">Confirm Password <?=$req;?></label>
					<div class="col-sm-10">
					  <input type="text" required name="con_password"   class="form-control"   placeholder="Confirm Password ">
					</div>
				  </div>

 
				  
				  
				  
				  
				  
				
				   
			</div>
			  
		</div>
	 </form>	
	 
        </div>
        <!-- /.box-body -->
        
      </div>
      <!-- /.box -->
    </section>
	
 
  </div>
  <!-- /.content-wrapper -->
   <?php include_once('include/footer.php');?>
 
  
  