<?php 
   include_once('include/topmenu.php');
   $page_name = "add_notice.php";
   $table_name = "notice_board";
   $url_id  = @$_GET['id'];
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
	  
	   
	   $pic_name = $_FILES['ing_img']['name'];
	   $f_t_name = $_FILES['ing_img']['tmp_name'];
	   if(!empty($pic_name)){
		   $f_new_img = time().$pic_name;
		   $file_Path    = AUP.$f_new_img; 
		   $col_val['img'] = $f_new_img; 
		   move_uploaded_file($f_t_name,$file_Path);
		   
	   }
	   
	   $row     = $con->insert($table_name,$col_val);
	   if($row==1){
		   alert('Successful Added',$page_name);   
	   }
   }
//update 
   if(isset($update_course_btn)){
	   $where   = array('id'=>$update_id);
	   
	   
	   $pic_name = $_FILES['ing_img']['name'];
	   $f_t_name = $_FILES['ing_img']['tmp_name'];	
	   if(!empty($pic_name)){
		   $f_new_img = time().$pic_name;
		   $file_Path    = AUP.$f_new_img; 
		   $col_val['img'] = $f_new_img; 
		   move_uploaded_file($f_t_name,$file_Path);
		   
	   }else{
		   $col_val['img'] = $old_pic; 
	   }
	   
	   
	   $row     = $con->update($table_name,$col_val,$where);
	   if($row==1){
		   alert('Successful Updated',$page_name);   
	   }
	   
   }
?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header"> 
      <h1>All Notice Board <small><b> Manage View </b> <a href="<?php e($page_name); ?>" class="btn btn-xs btn-primary">Add New</a></small>
      </h1>
     
    </section>
	
	
<section class="content" id="ppg">
      <div class="row">
        <div class="col-xs-6">

          <div class="box box-info">
            <div class="box-header">
          <h3 class="box-title"><i class="fa fa-shopping-cart"></i> Add Notice Board</h3>
			 
        </div>
            <!-- /.box-header -->
            <div class="box-body">
                 <form action="" enctype="multipart/form-data" method="post">
					
					<div class="form-group">
					   <input type="file" name="ing_img"  class="form-control" />
					   <?php if(isset($url_id)){ ?>
					   <img style="width:100px;height:100px;" src="../upload/<?=@$fs->img;?>"/>
					   <?php } ?>
					</div>
						
					<?php if(isset($url_id)){ ?>
						<input type="submit" name="update_course_btn" value="Update" class="btn btn-info" />
						<input type="hidden" name="update_id" value="<?php e($url_id);?>" />
						<input type="hidden" name="old_pic" value="<?php e($fs->img);?>" />
					<?php }else{ ?>
						<input type="submit" name="add_course_btn" value="Add" class="btn btn-info" />
					<?php } ?>
					
				 </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
		
		
		
		<div class="col-xs-6">

          <div class="box box-info">
            <div class="box-header">
          <h3 class="box-title"><i class="fa fa-shopping-cart"></i> All Notice Board Details</h3>
			 
        </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-hover table-bordered table-striped">
                <thead>
               <tr>
			   <th>Sr.No.</th>      
			   <th>Image</th>     
			   <th>Edit</th> 
			   <th>Delete</th> 
			   </tr>
                </thead> 
				<?php
					$i=1;
					$gst_list = $con->get($table_name,"order by id desc");
					if (is_array($gst_list) || is_object($gst_list)){
					foreach($gst_list as $g){
						$q_id	     = $g->id;  
						    
				?>
                <tr class="delete_cat<?=$q_id;?>">
                  <td><?=$i++;?></td> 
				  <td><img src="../upload/<?=$g->img;?>" height="50" width="50"></td>  
				 
				   
				  <td>
				  <a href="<?php e($page_name); ?>?id=<?=$q_id ;?>"><i class="fa fa-pencil-square-o"></i> Edit</a>
				  </td>
				  <td><a href="javascript:;" onclick="all_delete(<?=$q_id;?>,'.delete_cat','add_notice','ajax_to_php/admin_file','');"><i class="fa fa-trash-o"></i> Delete</a></td> 
                </tr>
					<?php } }?>
            
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

  
