<?php 
    include_once('include/topmenu.php'); 
	$update_id = @$_GET['id'];
	
	$back_page_name = "all-products.php";
	$page_name      = "add-product.php";
	$talbe_name     = "product";
	
	if(isset($update_id) and !empty($update_id)){
		$fetch_sub_cat_list  = $con->all_fetch($talbe_name,array('id'=>$update_id));
		if(is_array($fetch_sub_cat_list) || is_object($fetch_sub_cat_list)){
			foreach($fetch_sub_cat_list as $fscl){
			     
				        $u_sub_id	            = $fscl->id;   
						$u_cat_name             = $fscl->name;
						$u_serv_img  	        = $fscl->imagePath;
						$u_price  	            = $fscl->price;
						$u_p_code  	            = $fscl->code;
						$u_status  	            = $fscl->status;
						$u_special_product	    = $fscl->special_product;
						$u_sort_order           = $fscl->sort_order; 
						
						//categroy and sub category
						$u_category      = $fscl->category; 
						$u_sub_category  = $fscl->sub_category; 
						
						 
				
			}
			
		}else{
			$con->gotohome($back_page_name);
		}
	   	$text = "Update";
	}else{
		$text = "Add";
	}
	
//Add Car
if(isset($add_sub_cat_btn)){
	$col_val = array(  
	   'name'=>$sub_cat_name,
	   'category'=>$cat_id,
	   'sub_category'=>$sub_cat_id,
	   'code'=>$p_code, 
	   'status'=>$status,
	   'special_product'=>$special_product,	   
	   'price'=>$price,	   
	   'sort_order'=>$sort_order
	  );
	  $f_name = $_FILES['services_pic']['name'];
	  $f_t_name = $_FILES['services_pic']['tmp_name'];
	  
	  if(!empty($f_name)){
		  $f_new_img = time().$f_name;
		  $file_Path    = AUP.$f_new_img; 
		  $col_val['imagePath'] = BASE_URL.HP.$f_new_img; 
		  move_uploaded_file($f_t_name,$file_Path);
	  } 
	  
	  $row = $con->insert($talbe_name,$col_val);
		
	   
	  
	  if($row==true){
		  alert('Successful Add Product',$page_name);
		}  
	   
	  
}	

//Update Subcategory
if(isset($update_sub_cat_btn)){
	 $where = array('id'=>$u_serv_id);
	 $col_val = array(  
	   'name'=>$sub_cat_name, 
	   'status'=>$status,
	   'price'=>$price,  
	   'sort_order'=>$sort_order
	  );
	  $f_name = $_FILES['services_pic']['name'];
	  $f_t_name = $_FILES['services_pic']['tmp_name'];
	  
	  if(!empty($f_name)){
		  $f_new_img = time().$f_name;
		  $file_Path    = AUP.$f_new_img; 
		  $col_val['imagePath'] = BASE_URL.HP.$f_new_img; 
		  move_uploaded_file($f_t_name,$file_Path);
		  
		  //Delete old pic
		  unlink($serv_old_pic);
	  }else{
		  $col_val['imagePath'] = $serv_old_pic;
		 
	  }
	  
	  $row = $con->update($talbe_name,$col_val,$where);
	  
	  if($row==true){
		  alert('successful Update Product',$back_page_name);
		}  
}
	
	
?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page rheader) -->
    <section class="content-header">
      <h1><?=$text;?> Products</h1>
      
    </section>

	<section class="content" id="ppg">
	 <!-- Default box -->
      <div class="box box-info">
	 
	  
	  <form class="form-horizontal" enctype="multipart/form-data" action="" method="POST">
        <div class="box-header">
          <span class="box-title"><i class="fa fa-shopping-cart"></i> Add Products :
		    
		  </span>
			<div class="box-tools pull-right">
             
			 <?php if(isset($update_id)){?>
			 <button type="submit" name="update_sub_cat_btn" class="btn btn-info btn-sm">
              <i class="fa fa-save"></i> Update Product</button>
			  
			 <?php }else{ ?>
			  <button type="submit" name="add_sub_cat_btn" class="btn btn-info btn-sm">
              <i class="fa fa-save"></i> Add Product</button>
			 
			 <?php } ?>
			  <a href="<?php e($back_page_name); ?>" title="Cancel" class="btn btn-info btn-sm" >
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
					<label class="control-label col-sm-2" for="cat_id">Select Category <?=$req;?></label>
					<div class="col-sm-10">
					   <select name="cat_id"  required class="form-control select2" id="listing_category">
							<option value="">Select Category</option>
							<?php
							    $all_fetch_category = $con->all_fetch('category',array('status'=>'Yes'));
								if(is_array($all_fetch_category) || is_object($all_fetch_category)){
								foreach($all_fetch_category as $afc){ 
								if($u_category==$afc->id){?>
								<option selected value="<?php e($afc->id); ?>"><?php e($afc->name); ?></option>
								<?php }else{ ?>
									<option value="<?php e($afc->id); ?>"><?php e($afc->name); ?></option>
								<?php 
								} 
								}
								}
							?>
					   </select>
					</div>
				  </div>
				  
				  
				  <div class="form-group">
					<label class="control-label col-sm-2" for="cat_id">Select Sub Category <?=$req;?></label>
					<div class="col-sm-10">
					   <select name="sub_cat_id" required class="form-control select2" id="listing_sub_category">
							<option value="">Select Sub  Category</option>
 <?php
    $all_fetch_sub_category = $con->all_fetch('sub_category',array('status'=>'Yes','cat_id'=>@$u_category));
	if(is_array($all_fetch_sub_category) || is_object($all_fetch_sub_category)){
	   foreach($all_fetch_sub_category as $afsc){ 
		  if($u_sub_category==$afsc->id){?>
				<option selected value="<?php e($afsc->id); ?>"><?php e($afsc->name); ?></option>
			<?php }else{ ?>
				<option value="<?php e($afsc->id); ?>"><?php e($afsc->name); ?></option>
			<?php 
			  }
			   } 
			} 
			?>
					   </select>
					</div>
				  </div>
			   
			   
				<div class="form-group">
					<label class="control-label col-sm-2" for="sub_cat_name">Name <?=$req;?></label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" required value="<?=@$u_cat_name;?>" name="sub_cat_name" placeholder="Product Name">
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
						  <img src="<?php e($u_serv_img);?>" style="width:200px;height:200px;" alt="" />
					  <?php }else{?>
					  <input type="file" required accept="image/*" class="services_pic"   name="services_pic"/>
					  <?php } ?>
				  </div>
				  </div>
				  
				  
				  <!--<div class="form-group">
					<label class="control-label col-sm-2" for="sub_attribute"> Service features </label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" value="<?=@$u_sub_attribute;?>" name="sub_attribute" placeholder="Enter Details I.e ( a > b > c > d )">
					</div>
				  </div>
				  
				  <div class="form-group">
					<label class="control-label col-sm-2" for="sub_description">Description <?=$req;?></label>
					<div class="col-sm-10">
					  <textarea type="text" class="form-control" required   name="sub_description" placeholder="Descriiption"><?PHP e(@$u_sub_description);?></textarea>
					</div>
				  </div>
				  
				  <div class="form-group">
					<label class="control-label col-sm-2" for="sub_include_pack"> Included Service </label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" value="<?=@$u_sub_include_pack;?>" name="sub_include_pack" placeholder="Enter Details I.e ( a > b > c > d )">
					</div>
				  </div> -->
				  
				  
				   <div class="form-group">
					<label class="control-label col-sm-2" for="price">Product Code</label>
					<div class="col-sm-10">
					  <input type="text" min="1" class="form-control"  required value="<?=@$u_p_code;?>" name="p_code" autocomplete="off" placeholder="Product Code">
					</div>
				  </div>
				  
				  <div class="form-group">
					<label class="control-label col-sm-2" for="price">Price</label>
					<div class="col-sm-10">
					  <input type="number" min="1" class="form-control"  value="<?=@$u_price;?>" name="price" autocomplete="off" placeholder="Price">
					</div>
				  </div>
				  
				   
				  <div class="form-group">
					<label class="control-label col-sm-2" for="sort_order">Sort Order</label>
					<div class="col-sm-10">
					  <input type="number" min="1" class="form-control"  value="<?=@$u_sort_order;?>" name="sort_order" autocomplete="off" placeholder="Sort Order">
					</div>
				  </div>
				  
				   <div class="form-group">
					<label class="control-label col-sm-2" for="special_product">Select Show on Home Page </label>
					<div class="col-sm-10">
					  <select class="form-control"   name="special_product">
					  <option value="">Select Show on Home Page</option>
					       <?php 
					    $arrs = array('1'=>'Show','0'=>'No');
						foreach($arrs as $k=>$v){ 
						if($k==@$u_special_product){?>
						     <option value="<?=$k;?>" selected><?=$v;?></option>
						<?php }else{?>
						     <option value="<?=$k;?>"><?=$v;?></option>
						<?php } } ?>
					  </select>
					  
					</div>
				  </div>
				   
				
				 
				  <div class="form-group">
					<label class="control-label col-sm-2" for="status">Status </label>
					<div class="col-sm-10">
					  <select class="form-control" name="status">
					       <?php 
					    $arrs = array('1'=>'Show','0'=>'Hide');
						foreach($arrs as $k=>$v){ 
						if($k==@$u_status){?>
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
 
  