<?php 
    include_once('include/topmenu.php'); 
	$update_id = @$_GET['id'];
	$back_page_name = "sub_sub-category-list.php";
	$page_name      = "add-city.php";
	$talbe_name     = "city";
	
	
	if(isset($update_id) and !empty($update_id)){
		$fetch_sub_cat_list  = $con->all_fetch($talbe_name,array('id'=>$update_id));
		if(is_array($fetch_sub_cat_list) || is_object($fetch_sub_cat_list)){
			foreach($fetch_sub_cat_list as $fscl){
			 
				        $u_sub_id	     = $fscl->id;     
				        $u_cat_id	     = $fscl->s_id;     
				        $u_dis_id	     = $fscl->d_id;     
						$u_cat_name      = $fscl->name; 
						$u_sort_order    = $fscl->code; 
				
			}
			
		}else{
			$con->gotohome($back_page_name);
		}
	   	$text = "Update";
	}else{
		$text = "Add";
	}
	
//Add Subcategory
if(isset($add_sub_cat_btn)){
	$col_val = array( 
	   's_id'=>$state_id,
	   'd_id'=>$district_id,
	   'name'=>$city_name, 
	   'code'=>$sort_order
	  );
	  
	  $row = $con->insert($talbe_name,$col_val);
	  if($row==true){
		  alert('Successful Add City ',$page_name);
	  }
}	

//Update Subcategory
if(isset($update_sub_cat_btn)){
	$col_val = array( 
	   's_id'=>$state_id,
	   'd_id'=>$district_id,
	   'name'=>$city_name, 
	   'code'=>$sort_order
	  );
	  $where = array('id'=>$u_sub_id);
	  $row = $con->update($talbe_name,$col_val,$where);
	  if($row==true){
		  alert('Successful Update City ',$back_page_name);
	  }
}
	
	
?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page rheader) -->
    <section class="content-header">
      <h1><?=$text;?> City</h1>
      
    </section>

	<section class="content" id="ppg">
	 <!-- Default box -->
      <div class="box box-info">
	 
	  
	  <form class="form-horizontal" action="" method="POST">
        <div class="box-header">
          <span class="box-title"><i class="fa fa-shopping-cart"></i> City :
		    
		  </span>
			<div class="box-tools pull-right">
             
			 <?php if(isset($update_id)){?>
			 <button type="submit" name="update_sub_cat_btn" class="btn btn-info btn-sm">
              <i class="fa fa-save"></i> Update</button>
			  <input type="hidden" value="<?=$u_sub_id;?>" name="u_sub_id" />
			 <?php }else{ ?>
			  <button type="submit" name="add_sub_cat_btn" class="btn btn-info btn-sm">
              <i class="fa fa-save"></i> Add</button>
			 
			 <?php } ?>
			  <a href="<?php e($back_page_name);?>" title="Cancel" class="btn btn-info btn-sm" >
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
					<label class="control-label col-sm-2" for="state_id">Select State <?=$req;?></label>
					<div class="col-sm-10">
					   <select name="state_id" id="state_id" required class="form-control select2">
							<option value="">Select State</option>
							<?php
							    $all_fetch_category = $con->all_fetch('state');
								if(is_array($all_fetch_category) || is_object($all_fetch_category)){
								foreach($all_fetch_category as $afc){ 
								if($u_cat_id==$afc->id){?>
									<option selected value="<?php e($afc->id); ?>"><?php e($afc->name); ?></option>
								<?php }else{ ?>
									<option value="<?php e($afc->id); ?>"><?php e($afc->name); ?></option>
								<?php }?>
									
								<?php } }
							?>
					   </select>
					</div>
				  </div>
				  
				  <div class="form-group">
					<label class="control-label col-sm-2" for="district_id">Select District <?=$req;?></label>
					<div class="col-sm-10">
					   <select name="district_id" required class="form-control select2" id="district_id">
							<option value="">Select District</option>
							<?php
							    $all_fetch_category = $con->all_fetch('district',array('s_id'=>$u_cat_id));
								if(is_array($all_fetch_category) || is_object($all_fetch_category)){
								foreach($all_fetch_category as $afc){ 
								if($u_dis_id==$afc->id){?>
									<option selected value="<?php e($afc->id); ?>"><?php e($afc->name); ?></option>
								<?php }else{ ?>
									<option value="<?php e($afc->id); ?>"><?php e($afc->name); ?></option>
								<?php }?>
									
								<?php } }
							?>
					   </select>
					</div>
				  </div>
			   
				<div class="form-group">
					<label class="control-label col-sm-2" for="city_name">City Name <?=$req;?></label>
					<div class="col-sm-10">
					  <input type="text" required class="form-control" value="<?=@$u_cat_name;?>" name="city_name" placeholder="City Name">
					</div>
				  </div>
				  
				   
				  <div class="form-group">
					<label class="control-label col-sm-2" for="sort_order">City Code</label>
					<div class="col-sm-10">
					  <input type="text" min="1" class="form-control"  value="<?=@$u_sort_order;?>" name="sort_order" autocomplete="off" placeholder="City Code">
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
 
  