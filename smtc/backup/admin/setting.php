<?php 
    include_once('include/topmenu.php'); 
 

//Edit category
if(isset($update_c_btn)){
	$where   = array('id'=>$admin_id);  
	$col_val = array( 'online_payment_amount'=>$gcl,'online_branch_id'=>$t_online_branch_id,'reg_instruction'=>$t_reg_instruction); 
	$row     = $con->update('top_admin',$col_val,$where);
	if($row==true){
	   alert('Successful Update Payment Setting','setting.php'); 
	}
	
}	

	
?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page rheader) -->
    <section class="content-header">
      <h1>Online Register Payment Setting</h1>
      
    </section>

	<section class="content" id="ppg">
	 <!-- Default box -->
      <div class="box box-info">
	 
	  
	  <form class="form-horizontal" action="" method="POST">
        <div class="box-header">
          <span class="box-title"><i class="fa fa-shopping-cart"></i> Setting :
		    
		  </span>
			<div class="box-tools pull-right">
             
			 
			 <button type="submit" name="update_c_btn" class="btn btn-info btn-sm">
              <i class="fa fa-save"></i> Update Setting</button>
			 
                
          </div>
        </div>
        <div class="box-body">
		
			<ul class="nav nav-tabs">
			   <li class="active"><a data-toggle="tab" href="#General">General</a></li>
			</ul>
       
		<div class="tab-content">
			 <div id="General" class="tab-pane fade in active">
			  	  
			   
				<div class="form-group">
					<label class="control-label col-sm-3" for="sub_cat_name">Payment Amount </label>
					<div class="col-sm-9">
					  <input type="text" required name="gcl" value="<?php e(@$online_payment_amount);?>" class="form-control"  placeholder="Payment Amount">
					</div>
				  </div>


				  <div class="form-group">
					<label class="control-label col-sm-3" for="sub_cat_name">Online brance Id </label>
					<div class="col-sm-9">
					  <input type="text" required name="t_online_branch_id" value="<?php e(@$online_branch_id);?>" class="form-control"  placeholder="Online brance Id">
					</div>
				  </div>


				  <div class="form-group">
					<label class="control-label col-sm-3" for="sub_cat_name">Registration Instructions </label>
					<div class="col-sm-9">
					   <textarea class="form-control" id="page_content" placeholder="Registration Instructions" name="t_reg_instruction"><?php e(@$reg_instruction);?></textarea>
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
 
  
  