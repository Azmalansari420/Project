<?php 
   include_once('include/topmenu.php');
   $page_name = "add-course.php";
   $show_all_list = "all-course.php";
   $url_id  = @$_GET['id'];
   $table_name  = "course";
   
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
	   
	   $c_code  = strtoupper(substr($c_name,0,2).rand());
	   $col_val = array(
			'o_id'=>$o_id,
			'ins_id'=>$ins_id,
			'ins_cat_id'=>$ins_cat_id,
			'name'=>$c_name,
			'c_code'=>$c_code,
			'status'=>$status,
			'fstatus'=>$fstatus,
			'c_time'=>$c_dur,
			'c_time_type'=>$c_dur_type,
			'description'=>$page_content
			
	      );
	   $row     = $con->insert($table_name,$col_val);
	   if($row==1){
		   alert('Successful Add Course',$page_name);   
	   }
   }
//UPDATE 
   if(isset($update_course_btn)){
	   $where   = array('id'=>$update_id);
	    $col_val = array(
			'o_id'=>$o_id,
			'ins_id'=>$ins_id,
			'ins_cat_id'=>$ins_cat_id,
			'name'=>$c_name, 
			'status'=>$status,
			'fstatus'=>$fstatus,
			'c_time'=>$c_dur,
			'c_time_type'=>$c_dur_type,
			'description'=>$page_content
			
	      );
	   $row     = $con->update($table_name,$col_val,$where);
	   if($row==1){
		   
		   alert('Successful Update Course',$page_name);   
	   }
	   
   }
?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header"> 
      <h1>All Course<small>
	  <a href="<?php e($show_all_list ); ?>" class="btn btn-primary">All Course List </a>
	  
	  </small>
      </h1>
     
    </section>
	
	
<section class="content" id="ppg">
      <div class="row">
        <div class="col-xs-12">

          <div class="box box-info">
            <div class="box-header">
          <h3 class="box-title"><i class="fa fa-shopping-cart"></i> Add Institutes Course Category</h3>
			 
        </div>
            <!-- /.box-header -->
            <div class="box-body">
                 <form action="" method="post">
				<div class="row">
				<div class="col-sm-4">
					<div class="form-group">
					<label for="">Organisation Name  *</label>
					   <select name="o_id" required class="form-control" id=""> 
						  
						  <?php
						     
							 if(is_array($org_array) || is_object($org_array)){
								 foreach($org_array as $k=>$v){ ?>
							       <option value="<?php e($k);?>"><?php e($v);?></option>		 
								 <?php }
							 }
						  ?>
					   </select>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
					<label for="">Select Institute *</label>
					   <select required name="ins_id" class="form-control select2" id="ins_id"> 
						  <option value="">Select Institute</option>
						<?php
						  $all_fetch_institue  = $con->all_fetch('institutes');
						  if(is_array($all_fetch_institue) || is_object($all_fetch_institue)){
							  foreach($all_fetch_institue as $afi){
							if(@$fs->ins_id==$afi->id){ ?>
							<option selected value="<?php e($afi->id);?>"><?php e($afi->name);?></option>
						<?php }else{ ?>
							<option value="<?php e($afi->id);?>"><?php e($afi->name);?></option>
						  <?php  } } } ?>
					   </select>
					</div>
					</div>
					
					 <div class="col-sm-4">
					<div class="form-group">
					<label for="">Institutes Course Category</label>
					  <select required name="ins_cat_id" class="form-control select2" id="ins_cat_id"> 
						  <option value="">Select Course Category</option>
						<?php
						  $all_fetch_institue  = $con->all_fetch('institutes_courses',array('status'=>'Yes','ins_id'=>@$fs->ins_id));
						  if(is_array($all_fetch_institue) || is_object($all_fetch_institue)){
							  foreach($all_fetch_institue as $afi){
							if(@$fs->ins_cat_id==$afi->id){ ?>
							<option selected value="<?php e($afi->id);?>"><?php e($afi->name);?></option>
						<?php }else{ ?>
							<option value="<?php e($afi->id);?>"><?php e($afi->name);?></option>
						  <?php  } } } ?>
					   </select>
					</div>
					</div>
					
					</div>
					
					
					<div class="row">
					
						<div class="col-sm-4">
							<div class="form-group">
								<label for="">Course Name</label>
							   <input type="text" name="c_name" value="<?php e(@$fs->name); ?>" placeholder="Course Name" class="form-control" />
							</div>
						</div>
						
						<div class="col-sm-4">
						    
					<div class="form-group">
						<label for="">Status</label>
					  <select class="form-control" name="status">
					     <?php 
						   $arrs = array('Enable'=>'Yes','Disable'=>'No');
						   foreach($arrs as $k=>$v){
							   
						    if(@$fs->status == $v){?>
						<option value="<?=$v;?>" selected="selected"><?=$k;?></option>
							<?php }else{?>
						<option value="<?=$v;?>"><?=$k;?></option>
							<?php } } ?>
					  </select>
					  
					 
				  </div>
						</div>
<div class="col-sm-4">
						<div class="form-group">
						<label for="">Course Show on Frontend website *</label>
					  <select class="form-control" required name="fstatus">
					  	<option value="">Select Option</option>
					     <?php 
						   $arrs = array('Enable'=>'Yes','Disable'=>'No');
						   foreach($arrs as $k=>$v){
							   
						    if(@$fs->fstatus == $v){?>
						<option value="<?=$v;?>" selected="selected"><?=$k;?></option>
							<?php }else{?>
						<option value="<?=$v;?>"><?=$k;?></option>
							<?php } } ?>
					  </select>
					  
					 
				  </div>
						</div>

						
						
						
						<div class="col-sm-3">
						   <div class="form-group">
								<label for="c_dur">Course Duration *</label>
							   <input type="number" placeholder="Course Duration" name="c_dur" value="<?php e($fs->c_time); ?>" min="0" id="c_dur" class="form-control" />
							</div>
						</div>
						
						<div class="col-sm-3">
						   <div class="form-group">
							<label for="c_dur_type">Course Duration Type</label>
							   <select name="c_dur_type"  class="form-control required">
							   <?php
							      
								  foreach($arr_d_t as $k=>$v){
							   ?>
							   <option value="<?php e($k); ?>"><?php e($v); ?></option>
							   <?php 
							   }
							   ?>
								</select>
							</div>
						</div>
						
					</div>
					
					
					<div class="form-group">
					   <textarea class="form-control" name="page_content" id="page_content" cols="30" rows="10"><?php e(@$fs->description); ?></textarea>
					</div>
					
					
					
					
					<?php if(isset($url_id)){ ?>
						<input type="submit" name="update_course_btn" value="Update Course" class="btn btn-info" />
						<input type="hidden" name="update_id" value="<?php e($url_id);?>" />
					<?php }else{ ?>
						<input type="submit" name="add_course_btn" value="Add Course" class="btn btn-info" />
					<?php } ?>
					
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

  
