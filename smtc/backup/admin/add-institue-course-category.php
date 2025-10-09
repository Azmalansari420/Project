<?php 
   include_once('include/topmenu.php');
   $page_name = "add-institue-course-category.php";
   $url_id  = @$_GET['id'];
   $table_name  = "institutes_courses";
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
	   $col_val = array(
			'ins_id'=>$ins_id,'name'=>$name,'description'=>$page_content,'status'=>$status
	      );
	   $row     = $con->insert($table_name,$col_val);
	   if($row==1){
		   alert('Successful Add Institutes Course',$page_name);   
	   }
   }
//update 
   if(isset($update_course_btn)){
	   $where   = array('id'=>$update_id);
	   $col_val = array(
	       'ins_id'=>$ins_id,'name'=>$name,'description'=>$page_content,'status'=>$status
	   );
	   $row     = $con->update($table_name,$col_val,$where);
	   if($row==1){
		   alert('Successful Update Institutes Course',$page_name);   
	   }
	   
   }
?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header"> 
      <h1>All Course Sub Category<small><b> Manage View </b> <a href="<?php e($page_name); ?>" class="btn btn-xs btn-primary">Add New</a></small>
      </h1>
     
    </section>
	
	
<section class="content" id="ppg">
      <div class="row">
        <div class="col-xs-5">

          <div class="box box-info">
            <div class="box-header">
          <h3 class="box-title"><i class="fa fa-shopping-cart"></i> Add Course Sub Category</h3>
			 
        </div>
            <!-- /.box-header -->
            <div class="box-body">
                 <form action="" method="post">
					 
					<div class="form-group">
					<label for="">Select Institute *</label>
					   <select required name="ins_id" class="form-control Select2" id="ins_id"> 
						  <option value="">Select Institute</option>
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
					 
					<div class="form-group">
					<label for="">Institutes Course Name</label>
					   <input type="text" required name="name" value="<?php e(@$fs->name); ?>"  class="form-control" placeholder="Type Institutes Course Name *" />
					</div>
					
					
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
					
					<div class="form-group">
					   <textarea class="form-control" name="page_content" id="page_content" cols="30" rows="10"><?php e(@$fs->description); ?></textarea>
					</div>
					
					
					
					
					<?php if(isset($url_id)){ ?>
						<input type="submit" name="update_course_btn" value="Update Course Type" class="btn btn-info" />
						<input type="hidden" name="update_id" value="<?php e($url_id);?>" />
					<?php }else{ ?>
						<input type="submit" name="add_course_btn" value="Add Course Type" class="btn btn-info" />
					<?php } ?>
					
				 </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
		
		
		
		<div class="col-xs-7">

          <div class="box box-info">
            <div class="box-header">
          <h3 class="box-title"><i class="fa fa-shopping-cart"></i> All Course Sub Category List</h3>
			 
        </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-hover table-bordered table-striped">
                <thead>
               <tr>
			   <th>Sr.No.</th>      
			   <th>Institute Name</th>     
			   <th>Course Name</th>     
			   <th>Edit</th> 
			   <th>Delete</th> 
			   </tr>
                </thead>
                <tbody>
				<?php
					$i=1;
					$gst_list = $con->get($table_name,"order by id desc");
					if (is_array($gst_list) || is_object($gst_list)){
					foreach($gst_list as $g){
						$q_id	     = $g->id;
						
						$fsi =fs('institutes',array('id'=>$g->ins_id));
						if(is_array($fsi) || is_object($fsi)){
							$institute_name = $fsi->name;
						}else{
							$institute_name = NULL;
						}
						    
						
                    
						 
					
				?>
                <tr class="delete_cat<?=$q_id;?>">
                  <td><?=$i++;?></td> 
				  <td><?=$institute_name;?></td>  
				  <td><?=$g->name;?></td>  
				   
				  <td>
				  <a href="<?php e($page_name); ?>?id=<?=$q_id ;?>"><i class="fa fa-pencil-square-o"></i> Edit
				  </td>
				  <td><a href="javascript:;" onclick="all_delete(<?=$q_id;?>,'.delete_cat','institutes_cour_id','ajax_to_php/admin_file','');"><i class="fa fa-trash-o"></i> Delete</td> 
                </tr>
					<?php } }?>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
		
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   <?php include_once('include/footer.php');?>

  
