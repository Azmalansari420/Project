<?php 
    include_once('include/topmenu.php');
    
    $fs = fs('marquee',array('id'=>1));
 
//Add Coupon category
if(isset($add_c_btn)){ 
  $check_password =  $con->check('marquee',array('id'=>1,));
  if($check_password==1){
  	
  	$run = $con->update('marquee',array('content'=>$content,),array('id'=>$admin_id));

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
          <span class="box-title"><i class="fa fa-key"></i> Update:
		    
		  </span>
			<div class="box-tools pull-right">
             
			 
			  <button type="submit" name="add_c_btn" class="btn btn-info btn-sm">
              <i class="fa fa-save"></i> Update</button>
			 
                
          </div>
        </div>
        <div class="box-body">
		 
		<div class="tab-content">
			 <div id="General" class="tab-pane fade in active">
			  	   
			   
			   
				<div class="form-group">
					<label class="control-label col-sm-2" for="sub_cat_name">Content <?=$req;?></label>
					<div class="col-sm-10">
					  <input type="text" value="<?php e(@$fs->content); ?>" name="content" id="content"  class="form-control"  placeholder="content">
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
 
  
  