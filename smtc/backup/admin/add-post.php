<?php 
    include_once('include/topmenu.php'); 
	$update_id  = @$_GET['id'];
	$talbe_name = "post";
	$back_links = "all-post.php";
	$page_name  = "add-post.php";
	
	if(isset($update_id) and !empty($update_id)){
		$fetch_sub_cat_list  = $con->all_fetch($talbe_name,array('id'=>$update_id));
		if(is_array($fetch_sub_cat_list) || is_object($fetch_sub_cat_list)){
			foreach($fetch_sub_cat_list as $fscl){
			 
				        
				        $u_sub_id	            = $fscl->id;   
						$u_cat_name             = $fscl->name; 
						$u_sub_description      = $fscl->description;
					 
						
						$u_serv_img  	        = $fscl->img;
						$u_status  	            = $fscl->status; 
						$u_p_type 	            = $fscl->type; 
						$u_sort_order           = $fscl->sort_order; 
				
			}
			
		}else{
			$con->gotohome($back_links);
		}
	   	$text = "Update";
	}else{
		$text = "Add";
	}
	
//Add Car
if(isset($add_sub_cat_btn)){
	$col_val = array(  
	   'name'=>$sub_cat_name,  
	   'type'=>$post_type,
	   'status'=>$status, 
	   'description'=>$sub_description,
	   'sort_order'=>$sort_order
	  );
	  $f_name = $_FILES['services_pic']['name'];
	  $f_t_name = $_FILES['services_pic']['tmp_name'];
	  if(!empty($f_name)){
		  $f_new_img = time().$f_name;
		  $file_Path    = AUP.$f_new_img; 
		  $col_val['img'] = $f_new_img; 
		  move_uploaded_file($f_t_name,$file_Path);
	  } 
		 $row = $con->insert($talbe_name,$col_val);
		
	 
	  
	  if($row==true){
		  alert('successful Add',$page_name);
		}  
	   
	  
}	

//Update Subcategory
if(isset($update_sub_cat_btn)){
	 $where = array('id'=>$u_serv_id);
	 $col_val = array(  
	   'name'=>$sub_cat_name, 
	   'type'=>$post_type, 
	   'status'=>$status, 
	   'description'=>$sub_description,
	   'sort_order'=>$sort_order
	  );
	  $f_name = $_FILES['services_pic']['name'];
	  $f_t_name = $_FILES['services_pic']['tmp_name'];
	  if(!empty($f_name)){
		  $f_new_img = time().$f_name;
		  $file_Path    = AUP.$f_new_img; 
		  $col_val['img'] = $f_new_img;
		  
		  move_uploaded_file($f_t_name,$file_Path);
	  }else{
		  $col_val['img'] = $serv_old_pic;
		  
		
	  }
	  
	  $row = $con->update($talbe_name,$col_val,$where);
	  if($row==true){
		  alert('successful Update',$back_links);
		}  
}
	
	
?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page rheader) -->
    <section class="content-header">
      <h1><?=$text;?> Courses Offered</h1>
      
    </section>

	<section class="content" id="ppg">
	 <!-- Default box -->
      <div class="box box-info">
	 
	  
	  <form class="form-horizontal" enctype="multipart/form-data" action="" method="POST">
        <div class="box-header">
          <span class="box-title"><i class="fa fa-shopping-cart"></i> Add Courses Offered :
		    
		  </span>
			<div class="box-tools pull-right">
             
			 <?php if(isset($update_id)){?>
			 <button type="submit" name="update_sub_cat_btn" class="btn btn-info btn-sm">
              <i class="fa fa-save"></i> Update</button>
			  
			 <?php }else{ ?>
			  <button type="submit" name="add_sub_cat_btn" class="btn btn-info btn-sm">
              <i class="fa fa-save"></i> Add</button>
			 
			 <?php } ?>
			  <a href="<?php e($back_links); ?>" title="Cancel" class="btn btn-info btn-sm" >
                 <i class="fa fa-reply"></i> Back 
			  </a>
                
          </div>
        </div>
        <div class="box-body">
		
			<ul class="nav nav-tabs">
			   <li class="active"><a data-toggle="tab" href="#General">General</a></li>
			</ul>
       
		<div class="tab-content">
			 <div id="General" class="tab-pane fade in active">
			  	  
			    <div class="form-group">
					<label class="control-label col-sm-2" for="post_type">Post Type </label> 
					<div class="col-sm-10">
					  <select class="form-control"  required name="post_type">
					  <option value="">Select Post Type</option>
					       <?php 
					    
						foreach($p_arrs as $k=>$v){ 
						if($k==$u_p_type){?>
						     <option value="<?=$k;?>" selected><?=$v;?></option>
						<?php }else{?>
						     <option value="<?=$k;?>"><?=$v;?></option>
						<?php } } ?>
					  </select>
					  
					</div>
				  </div>
			 
			   
			   
				<div class="form-group">
					<label class="control-label col-sm-2" for="sub_cat_name">Name <?=$req;?></label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" required value="<?=@$u_cat_name;?>" name="sub_cat_name" placeholder="Name">
					</div>
				  </div>
				   
				  
				   
				<div class="form-group">
					<label class="control-label col-sm-2" for="sub_description">Description </label>
					<div class="col-sm-10">
					  <textarea type="text" id="page_content" class="form-control"   name="sub_description" placeholder="Description"><?PHP e(@$u_sub_description);?></textarea>
					</div>
				  </div>
				  
				   
				   
				   <div class="form-group">
					<label class="control-label col-sm-2" for="sort_order">Images</label>
					<div class="col-sm-10">
					  
					  <?php
					  if(isset($u_sub_id)){?>
					  <input type="file"   accept="image/*" class="services_pic"   name="services_pic"/>
						  <input type="hidden" name="serv_old_pic" value="<?php e($u_serv_img);?>" />
						  <input type="hidden"  name="u_serv_id"  value="<?=$u_sub_id;?>"/>
						  <img src="../upload/<?php e($u_serv_img);?>" style="width:200px;height:200px;" alt="" />
					  <?php }else{?>
					  <input type="file" accept="image/*" class="services_pic"   name="services_pic"/>
					  <?php } ?>
				  </div>
				  </div>
				  
				   
				  <div class="form-group">
					<label class="control-label col-sm-2" for="sort_order">Sort Order</label>
					<div class="col-sm-10">
					  <input type="number" min="1" class="form-control"  value="<?=@$u_sort_order;?>" name="sort_order" autocomplete="off" placeholder="Sort Order">
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
 
  