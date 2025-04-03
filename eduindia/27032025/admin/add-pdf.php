<?php 
    include_once('include/topmenu.php'); 
	$update_id = @$_GET['id'];
	$talbe_name = "pdf_list";
	
	if(isset($update_id) and !empty($update_id)){
		$fetch_sub_cat_list  = $con->all_fetch($talbe_name,array('id'=>$update_id));
		if(is_array($fetch_sub_cat_list) || is_object($fetch_sub_cat_list)){
			foreach($fetch_sub_cat_list as $fscl){
			 
				        
				        $u_sub_id	            = $fscl->id;   
						$u_cat_name             = $fscl->name;  
					 
						
						$u_serv_img  	        = $fscl->img;
						$u_status  	            = $fscl->status;  
				
			}
			
		}else{
			url('add-pdf.php');
		}
	   	$text = "Update";
	}else{
		$text = "Add";
	}
	
//Add Car
if(isset($add_sub_cat_btn)){
	$col_val = array(  
	   'name'=>$sub_cat_name,  
	   'status'=>$status, 
	    
	  );
	  $f_name = $_FILES['services_pic']['name'];
	  $f_t_name = $_FILES['services_pic']['tmp_name'];
	  if(!empty($f_name)){
		  $f_new_img = time().$f_name;
		  $file_Path    = AUP.$f_new_img; 
		  $col_val['img'] = $f_new_img; 
		  move_uploaded_file($f_t_name,$file_Path);
	  } 
		 
		
		if(isset($update_id) and !empty($update_id)){
			$row = $con->update($talbe_name,$col_val,array('id'=>$update_id));
		   if($row==true){
			  alert('successful update PDf','add-pdf.php?id='.$update_id);
			}
		}else{
			$row = $con->insert($talbe_name,$col_val);
			if($row==true){
			  alert('successful Add PDF','add-pdf.php');
			}	
		}
	 
	  
	    
	   
	  
}	
 
	
?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    

	<section class="content" id="ppg">
	 <!-- Default box -->
      <div class="box box-info">
	 
	  
	  <form class="form-horizontal" enctype="multipart/form-data" action="" method="POST">
        <div class="box-header">
          <span class="box-title"><i class="fa fa-shopping-cart"></i> <?php echo $text; ?> Pdf :
		    
		  </span>
			<div class="box-tools pull-right">
             
			 
			  <a href="all-pdf.php" title="Cancel" class="btn btn-info btn-sm" >
                 <i class="fa fa-reply"></i> Pdf List
			  </a>
                
          </div>
        </div>
        <div class="box-body">
		
			 
		<div class="tab-content">
			 <div id="General" class="tab-pane fade in active">
			  	  
			      
				   

				<div class="form-group">
					<label class="control-label col-sm-2" for="sub_cat_name">Title <?=$req;?></label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" required value="<?=@$u_cat_name;?>" name="sub_cat_name" placeholder="Name">
					</div>
				  </div>
				   
				   
				  
				   
				   
				   <div class="form-group">
					<label class="control-label col-sm-2" for="sort_order">Upload PDF</label>
					<div class="col-sm-10">
					  
					  <?php
					  if(isset($u_sub_id)){?>
					  <input type="file"   accept="image/*" class="services_pic"   name="services_pic"/>
						  
						  <iframe src="../upload/<?php e($u_serv_img);?>" style="width:100%;height:200px;" alt=""></iframe>
					  <?php }else{?>
					  <input type="file" required accept="image/*" class="services_pic"   name="services_pic"/>
					  <?php } ?>
				  </div>
				  </div>
				  
				  
				  
				   
				
				 
				  <div class="form-group">
					<label class="control-label col-sm-2" for="status">Status </label>
					<div class="col-sm-10">
					  <select class="form-control"   name="status">
					       <?php 
					    $arrs = array('Yes'=>'Show','No'=>'Hide');
						foreach($arrs as $k=>$v){ 
						if($k==$u_status){?>
						     <option value="<?=$k;?>" selected><?=$v;?></option>
						<?php }else{?>
						     <option value="<?=$k;?>"><?=$v;?></option>
						<?php } } ?>
					  </select>
					  
					</div>
				  </div>
<div class="form-group">
					<label class="control-label col-sm-2" for="status"></label>
					<div class="col-sm-10">
				  <?php if(isset($update_id)){?>
			 <button type="submit" name="add_sub_cat_btn" class="btn btn-info btn-sm">
              <i class="fa fa-save"></i> Update</button>
			  
			 <?php }else{ ?>
			  <button type="submit" name="add_sub_cat_btn" class="btn btn-info btn-sm">
              <i class="fa fa-save"></i> Submit</button>
			 
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
 
  