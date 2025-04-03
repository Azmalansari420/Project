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
	   $col_val = array(
			'o_id'=>$o_id,
			'name'=>$name,
			'code'=>$code,
			'min_mark'=>$sub_min_mark,
			'max_mark'=>$sub_max_mark,
			'status'=>$status
	      );  
	   $row     = $con->insert($table_name,$col_val);
	   if($row==1){
		   alert('Successful Add Subject',$page_name);   
	   }
   }
//update 
   if(isset($update_course_btn)){
	   $where   = array('id'=>$update_id);
	   $col_val = array(
			'o_id'=>$o_id,
			'name'=>$name,
			'code'=>$code,
			'max_mark'=>$sub_max_mark,
			'min_mark'=>$sub_min_mark,
			'status'=>$status
	      );
	   $row     = $con->update($table_name,$col_val,$where);
	   if($row==1){
		   alert('Successful Update Subject',$page_name);   
	   }
	   
   }
?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header"> 
      <h1>All Subject<small><b> Manage View </b> <a href="<?php e($page_name); ?>" class="btn btn-xs btn-primary">Add New</a></small>
      </h1>
     
    </section>
	
	
<section class="content" id="ppg">
      <div class="row">
        <div class="col-xs-4">

          <div class="box box-info">
            <div class="box-header">
          <h3 class="box-title"><i class="fa fa-shopping-cart"></i> Add Subject	</h3>
			 
        </div>
            <!-- /.box-header -->
            <div class="box-body">
                 <form action="" method="post">
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
					
					<div class="form-group">
					<label for="">Subject Code</label>
					    <input type="text" required name="code" value="<?php e(@$fs->name); ?>"  class="form-control" placeholder="Subject Code" />
					</div>
					 
					<div class="form-group">
					<label for="">Subject Name</label>
					   <input type="text" required name="name" value="<?php e(@$fs->code); ?>"  class="form-control" placeholder="Subject Name" />
					</div>
					
					<div class="row">
						<div class="col-sm-6">
						<label for="">Minimum Marks</label>
					   <input type="number" required name="sub_min_mark" value="<?php e(@$fs->min_mark); ?>"  class="form-control" placeholder="Minimum Marks" />
						</div>
						
						<div class="col-sm-6">
						<label for="">Max Marks</label>
					   <input type="number" required name="sub_max_mark" value="<?php e(@$fs->max_mark); ?>"  class="form-control" placeholder="Max Marks" />
						</div>
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
					 
					
					
					
					
					<?php if(isset($url_id)){ ?>
						<input type="submit" name="update_course_btn" value="Update Subject" class="btn btn-info" />
						<input type="hidden" name="update_id" value="<?php e($url_id);?>" />
					<?php }else{ ?>
						<input type="submit" name="add_course_btn" value="Add Subject" class="btn btn-info" />
					<?php } ?>
					
				 </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
		
		
		
		<div class="col-xs-8">

          <div class="box box-info">
            <div class="box-header">
          <h3 class="box-title"><i class="fa fa-shopping-cart"></i> All Subject Details</h3>
			 
        </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-hover table-bordered table-striped">
                <thead>
               <tr>
			   <th>Sr.No.</th>        
			   <th>NAME</th>     
			   <th>CODE</th>     
			   <th>MIN MARKS</th>     
			   <th>MAX MARKS</th>     
			   <th>STATUS</th> 
			   <th>EDIT</th> 
			   <th>DELETE</th> 
			   </tr>
                </thead>
                <tbody>
				<?php
					$i=1;
					$gst_list = $con->get($table_name,"order by id desc");
					if (is_array($gst_list) || is_object($gst_list)){
					foreach($gst_list as $g){
						$q_id	     = $g->id;
					 
						
                    
						 
					
				?>
                <tr class="delete_cat<?=$q_id;?>">
                  <td><?=$i++;?></td>    
				  <td><?=$g->name;?></td>  
				  <td><?=$g->code;?></td>  
				  <td><?=$g->min_mark;?></td>  
				  <td><?=$g->max_mark;?></td>  
				  <td>
				  <?php if($g->status=="Yes"){  ?>
				   <span style="padding: 5px 18px;background-color: #31c531;border-radius: 9px;color: #fff;font-size: 12px;">Enable</span>
				   <?php }else{ ?>
					   <span style="padding: 5px 18px;background-color: #c56131;border-radius: 9px;color: #fff;font-size: 12px;">Disable</span>
				  <?php  }
				   ?>
				  </td>
				  <td>
				  <a href="<?php e($page_name); ?>?id=<?=$q_id ;?>"><i class="fa fa-pencil-square-o"></i> Edit
				  </td>
				  <td><a href="javascript:;" onclick="all_delete(<?=$q_id;?>,'.delete_cat','delete_subject','ajax_to_php/admin_file','');"><i class="fa fa-trash-o"></i> Delete</td> 
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

  
