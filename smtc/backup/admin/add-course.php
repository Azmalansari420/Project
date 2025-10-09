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
	   
	   
	   $col_val = array(
			'ins_id'=>$ins_id,
			'c_code'=>$c_code,
			'ins_cat_id'=>$ins_cat_id,
			'name'=>$c_name, 
			'status'=>$status,
			'amount'=>$amount,
			'c_time'=>$c_dur,
			'c_time_type'=>$c_dur_type,
			'description'=>$page_content
			
	      );
	  
	   
	   
	  
	  
	      if(isset($url_id) and is_numeric($url_id) and !empty($url_id)){
	          $row     = $con->update($table_name,$col_val,array('id'=>$url_id));
	          $mess = 'Successful Update Course';
	          $urls = $page_name."?id=".$url_id;
	          $listing_last_id = $url_id;
	      }else{
	          $row     = $con->insert($table_name,$col_val);
	          $listing_last_id = $con->last_id($con->con);
	          $mess = 'Successful Add Course';
	          $urls = $page_name;
	      }
	      
	      
	      
	      
	      
	      //Result UPload
	   $count_result = @$_FILES['result']['name'];
	   if(count($count_result) >= 1){
		   for($im=1;$im <= count($count_result);$im++){
				$mul_img       =  $im-1;
				$img_name      =  $_FILES['result']['name'][$mul_img];
				$file_t_name   =  $_FILES['result']['tmp_name'][$mul_img];
				$file_new_name =  time().$img_name;
			   if($img_name !==""){
					$path = "../upload/".$file_new_name;
					$media_c_v = array(
						 'type'=>'R',
						 'in_used_media_id'=>$listing_last_id,
						 'media_name'=>$file_new_name
						 );
					$con->insert('all_media',$media_c_v);
					move_uploaded_file($file_t_name,$path);
			   }
		   }
	   } 
	   
	   //marksheet
	    $count_marksheet = @$_FILES['marksheet']['name'];
	   if(count($count_marksheet) >= 1){
		   for($im=1;$im <= count($count_marksheet);$im++){
				$mul_img       =  $im-1;
				$img_name      =  $_FILES['marksheet']['name'][$mul_img];
				$file_t_name   =  $_FILES['marksheet']['tmp_name'][$mul_img];
				$file_new_name =  time().$img_name;
			   if($img_name !==""){
					$path = "../upload/".$file_new_name;
					$media_c_v = array(
						 'type'=>'M',
						 'in_used_media_id'=>$listing_last_id,
						 'media_name'=>$file_new_name
						 );
					$con->insert('all_media',$media_c_v);
					move_uploaded_file($file_t_name,$path);
			   }
		   }
	   }
	      
	      
          alert($mess,$urls);   
          
	      
	      
   }
 
?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header"> 
      <h1>Add Course Sub Sub Category<small>
	  <a href="<?php e($show_all_list ); ?>" class="btn btn-primary">All Course List </a>
	  
	  </small>
      </h1>
     
    </section>
	
	
<section class="content" id="ppg">
      <div class="row">
        <div class="col-xs-12">

          <div class="box box-info">
            <div class="box-header">
          <h3 class="box-title"><i class="fa fa-shopping-cart"></i> Add Course Sub Sub Category</h3>
			 
        </div>
            <!-- /.box-header -->
            <div class="box-body">
                 <form action="" method="post" enctype="multipart/form-data">
				<div class="row">
				 
				<div class="col-sm-6">
					<div class="form-group">
					<label for="">Select Course Category *</label>
					   <select required name="ins_id" class="form-control select2" id="ins_id"> 
						  <option value="">Select Course Category</option>
						<?php
						  $all_fetch_institue  = $con->get('institutes');
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
					
					 <div class="col-sm-6">
					<div class="form-group">
					<label for="">Select Course Sub Category</label>
					  <select required name="ins_cat_id" class="form-control select2" id="ins_cat_id"> 
						  <option value="">Select Course Sub Category</option>
						<?php
						  $all_fetch_institue  = $con->get('institutes_courses',array('status'=>'Yes','ins_id'=>@$fs->ins_id));
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
						
						<div class="col-sm-2">
						    
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
								      if($k==$fs->c_time_type){
								          $ss_e = "selected";
								      }else{
								          $ss_e = "";
								      }
							   ?>
							   <option <?php echo $ss_e; ?> value="<?php e($k); ?>"><?php e($v); ?></option>
							   <?php 
							   }
							   ?>
								</select>
							</div>
						</div>
						
					

						<div class="col-sm-3">
						   <div class="form-group">
								<label for="amount">Course Amount *</label>
							   <input type="number" placeholder="Course Amount" name="amount" value="<?php e($fs->amount); ?>" min="0" id="amount" class="form-control" />
							</div>
						</div>
						
						<div class="col-sm-3">
						   <div class="form-group">
								<label for="amount">Course Short Name *</label>
							   <input type="text" placeholder="Course Short Name" name="c_code" value="<?php e($fs->c_code); ?>" class="form-control" />
							</div>
						</div>
						 
							

					</div>
					
					
					<div class="row">
					    <div class="col-sm-3">
							<div class="form-group">
								<label for="">Question Paper</label>
								<input type="file"  name="result[]" multiple class="form-control"/> 
							    
							</div>
							</div>
					</div>
					<div class="row" style="margin-bottom:15px;">
					    <?php 
  $show_multipal_img = $con->all_fetch('all_media',array('in_used_media_id'=>$url_id,'type'=>'R'));
								if(is_array($show_multipal_img) || is_object($show_multipal_img)){
                                   foreach($show_multipal_img as $smi){
								?>
								<div class="col-sm-3 appic delet_edit_pro_pic<?=$smi->id;?>">
								<iframe src="../upload/<?php e(@$smi->media_name); ?>" style="width:100%;height:100px;" /></iframe>
								<a href="javascript:;" class="btn btn-xs btn-block btn-danger" onclick="all_delete('<?=$smi->id;?>','.delet_edit_pro_pic','edit_del_product_pic','ajax_to_php/admin_file','<?=$smi->media_name;?>','Successful Remove');">Remove Pic</a>
								</div>
								<?php }  }	?>
					</div>		
					<div class="row">		
							<div class="col-sm-3">
								<div class="form-group">
								<label for="">E-Book</label>
								<input type="file"    name="marksheet[]" multiple class="form-control"/> 
							   
								</div>
							</div>
					</div>
						<div class="row" style="margin-bottom:15px;">
					    <?php 
                            $show_multipal_img = $con->all_fetch('all_media',array('in_used_media_id'=>$url_id,'type'=>'M'));
								if(is_array($show_multipal_img) || is_object($show_multipal_img)){
                                   foreach($show_multipal_img as $smi){
								?>
								<div class="col-sm-3 appic delet_edit_pro_pic<?=$smi->id;?>">
								<iframe src="../upload/<?php e(@$smi->media_name); ?>" style="width:100%;height:100px;" /></iframe>
								<a href="javascript:;" class="btn btn-xs btn-block btn-danger" onclick="all_delete('<?=$smi->id;?>','.delet_edit_pro_pic','edit_del_product_pic','ajax_to_php/admin_file','<?=$smi->media_name;?>','Successful Remove');">Remove Pic</a>
								</div>
								<?php }  }	?>
					</div>
					
					<div class="form-group">
					   <textarea class="form-control" name="page_content" id="page_content" cols="30" rows="10"><?php e(@$fs->description); ?></textarea>
					</div>
					
					
					
					
				 
						<input type="submit" name="add_course_btn" value="Add Course" class="btn btn-info" />
					 
					
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

  
