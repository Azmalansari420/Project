<?php 
    include_once('include/topmenu.php'); 
 

//Edit category
if(isset($update_c_btn)){

	$where   = array('id'=>$admin_id);  
	
	$col_val = array(
		'p_status'=>$p_status,
		'p_title'=>$p_title,
		'p_link'=>$p_link		 
	); 

	$f_name = $_FILES['services_pic']['name'];
	$f_t_name = $_FILES['services_pic']['tmp_name'];

	if(!empty($f_name)){
		  $f_new_img = time().$f_name;
		  $file_Path    = AUP.$f_new_img; 
		  $col_val['p_image'] = $f_new_img;
		  
		  move_uploaded_file($f_t_name,$file_Path);
	} 

	$row     = $con->update('top_admin',$col_val,$where);
	if($row==true){
	   alert('Successful Update Setting','pop-setting.php'); 
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
          <span class="box-title"><i class="fa fa-shopping-cart"></i> Dynamic Popup Setting :
		    
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
					<label class="control-label col-sm-3" for="p_status">POP UP Status  </label>
					<div class="col-sm-9">
					  <select class="form-control" required  name="p_status">
					  	<option value="">Select POP UP Status</option>
					       <?php 
					    $arrs = array('Yes'=>'Show','No'=>'Hide');
						foreach($arrs as $k=>$v){ 
						if($k==$admin->p_status){?>
						     <option value="<?=$k;?>" selected><?=$v;?></option>
						<?php }else{?>
						     <option value="<?=$k;?>"><?=$v;?></option>
						<?php } } ?>
					  </select>
					  
					</div>
				  </div>
			   
				<div class="form-group">
					<label class="control-label col-sm-3" for="sub_cat_name">Title </label>
					<div class="col-sm-9">
					  <input type="text" required name="p_title" value="<?php e(@$admin->p_title);?>" class="form-control"  placeholder="Title">
					</div>
				  </div>


				  <div class="form-group">
					<label class="control-label col-sm-3" for="sub_cat_name">Link </label>
					<div class="col-sm-9">
					  <input type="link" required name="p_link" value="<?php e(@$admin->p_link);?>" class="form-control"  placeholder="Link">
					</div>
				  </div>


				  <div class="form-group">
					<label class="control-label col-sm-3" for="sub_cat_name">Image</label>

					<div class="col-sm-9">
					    
					     
					    <?php
					  if(!empty($admin->p_image)){?>
					  <input type="file" name="services_pic"  class="form-control">
						  <img src="../upload/<?php e($admin->p_image);?>" style="width:100px;height:100px;" alt="" />
					  <?php }else{?>
					  <input type="file" required name="services_pic"  class="form-control">
					  <?php } ?>
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
 
  
  