<?php 
   include_once('include/topmenu.php');
   $page_name = "add-subject.php";
   $url_id  = @$_GET['id'];
   $table_name  = "subject";
   
//fetch
   if(isset($url_id) and is_numeric($url_id) and !empty($url_id)){
	    $fs = fs($table_name,array('id'=>$url_id));   
		if(is_array($fs) || is_object($fs)){
			
		}else{
			goto_c_url($page_name);
		}
   }
   
 
   
//Add     
if(isset($add_course_btn)){
	    
		$where = array('id'=>$s_course);
	    $ss =  @$_POST['subject_series'];
	 
		if(count($ss) >=1 ){
			$subjects = "";
			foreach($ss as $v){
			   $subjects .= $v.",";	
			}
		    $sub_list = rtrim($subjects,",");
			$col_val   = array('second_year_subject'=>$sub_list);
			$row = $con->update('course',$col_val,$where);
			if($row==1){
				alert('Successful Join Subject with Course','join_second_year_subject.php');   
			}
			
		}
		 
		
		
		
}
 
?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header"> 
      <h1>Assign Second Year Subject To Course<small><b> Manage View </b></small>
      </h1>
     
    </section>
	
	
<section class="content" id="ppg">
      <div class="row">
	  <form action="" method="post">
        <div class="col-xs-12">

          <div class="box box-info">
            <div class="box-header">
          <h3 class="box-title"><i class="fa fa-shopping-cart"></i> Assign Second Year  Subject To Course	</h3>
		  <span class="pull-right">
			<?php if(isset($url_id)){ ?>
						<input type="submit" name="update_course_btn" value="Update Subject" class="btn btn-info" />
						<input type="hidden" name="update_id" value="<?php e($url_id);?>" />
					<?php }else{ ?>
						<input type="submit" name="add_course_btn" value="Add Subject" class="btn btn-info" />
					<?php } ?> 
					</span>
        </div>
            <!-- /.box-header -->
            <div class="box-body">
                 
					   <div class="row">
						 <div class="col-sm-3">
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
						<div class="col-sm-3">
					<div class="form-group">
					<label for="">Select Institute *</label>
					   <select required name="ins_id" class="form-control select2" id="ins_id"> 
						  <option value="">Select Institute</option>
						<?php
						  $all_fetch_institue  = $con->get('institutes');
						  if(is_array($all_fetch_institue) || is_object($all_fetch_institue)){
							  foreach($all_fetch_institue as $afi){
							if(@$fs->institute_id==$afi->id){ ?>
							<option selected value="<?php e($afi->id);?>"><?php e($afi->name);?></option>
						<?php }else{ ?>
							<option value="<?php e($afi->id);?>"><?php e($afi->name);?></option>
						  <?php  } } } ?>
					   </select>
					</div>
					</div>
					
					 <div class="col-sm-3">
					<div class="form-group">
					<label for="">Institutes Course Category</label>
					  <select required name="ins_cat_id" class="form-control select2" id="ins_cat_id"> 
						  <option value="">Select Course Category</option>
						<?php
						  $all_fetch_institue  = $con->get('institutes_courses',array('status'=>'Yes','ins_id'=>@$fs->institute_id));
						  if(is_array($all_fetch_institue) || is_object($all_fetch_institue)){
							  foreach($all_fetch_institue as $afi){
							if(@$fs->institute_course_id==$afi->id){ ?>
							<option selected value="<?php e($afi->id);?>"><?php e($afi->name);?></option>
						<?php }else{ ?>
							<option value="<?php e($afi->id);?>"><?php e($afi->name);?></option>
						  <?php  } } } ?>
					   </select>
					</div>
					</div>
					
					<div class="col-sm-3">
					<div class="form-group">
					<label for="">Select Course</label>
					  <select required name="s_course" class="form-control select2" id="s_course"> 
						  <option value="">Select Course</option>
						<?php
						  $all_fetch_institue  = $con->get('course',array('status'=>'Yes','ins_cat_id'=>@$fs->institute_course_id));
						  if(is_array($all_fetch_institue) || is_object($all_fetch_institue)){
							  foreach($all_fetch_institue as $afi){
							if(@$fs->course_id==$afi->id){ ?>
							<option selected value="<?php e($afi->id);?>"><?php e($afi->name);?></option>
						<?php }else{ ?>
							<option value="<?php e($afi->id);?>"><?php e($afi->name);?></option>
						  <?php  } } } ?>
					   </select>
					   <input type="hidden" class="check_second" value="2">
					</div>
					</div>
					 
					
					
					</div>
					
						  
					  <div class="s_selected_all_subject" style="display:none;">
					  
					  <div class="row">
					  <h3 style="padding-left:20px;">Selected Course Subject</h3>
					  </div>
					     <div  class="row" id="s_selected_all_subject">
						 
						 </div>
								
                      </div>
								    
					
					<div class="row" id="s_show_outer_select" style="display:none;">
					<hr>
						  <h3 style="padding-left:20px;">Select Subject</h3>
						  <div class="s_show_all_subject" id="s_show_all_subject">
								
						  </div>
					</div>
				
            
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
		
		  </form>
		
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   <?php include_once('include/footer.php');?>

  
