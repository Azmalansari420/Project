<?php 
   include_once('include/topmenu.php');
   $page_name = "add-course.php";
   $url_id  = @$_GET['id'];
   $table_name  = "course";
 
?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header"> 
      <h1>All Course<small>
	  <a href="<?php e($page_name); ?>" class="btn btn-primary">Add New Course</a>
	  
	  
	  </small>
      </h1>
     
    </section>
	
	
<section class="content" id="ppg">
      <div class="row">
         
		
		
		
		<div class="col-xs-12">

          <div class="box box-info">
            <div class="box-header">
          <h3 class="box-title"><i class="fa fa-shopping-cart"></i> All Course Details</h3>
			 
        </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-hover table-bordered table-striped">
                <thead>
               <tr>
			   <th>Sr.No.</th>      
			   <th>Institute Name</th>     
			   <th>Institute Course Category</th>     
			   <th>Course Name</th>     
			   <th>Code</th>     
			   <th>Status</th>     
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
						
						//instute name
						$fsi =fs('institutes',array('id'=>$g->ins_id));
						if(is_array($fsi) || is_object($fsi)){
							$institute_name = $fsi->name;
						}else{
							$institute_name = NULL;
						}
						    
							
							//Instute Name
						$fssi = fs('institutes_courses',array('id'=>$g->ins_cat_id));
						if(is_array($fssi) || is_object($fssi)){
							$institute_c_name = $fssi->name;
						}else{
							$institute_c_name = NULL;
						}
						
                    
						 
					
				?>
                <tr class="delete_cat<?=$q_id;?>">
                  <td><?=$i++;?></td> 
				  <td><?=$institute_name;?></td>  
				  <td><?=$institute_c_name;?></td>  
				  <td><?=$g->name;?></td>  
				  <td><?=$g->c_code;?></td>  
				  
				  <td><?php if($g->status=="Yes"){  ?>
				   <span style="padding: 5px 18px;background-color: #31c531;border-radius: 9px;color: #fff;font-size: 12px;">Enable</span>
				   <?php }else{ ?>
					   <span style="padding: 5px 18px;background-color: #c56131;border-radius: 9px;color: #fff;font-size: 12px;">Disable</span>
				  <?php  }
				   ?></td> 
				   
				  <td>
				  <a href="<?php e($page_name); ?>?id=<?=$q_id ;?>"><i class="fa fa-pencil-square-o"></i> Edit
				  </td>
				  <td><a href="javascript:;" onclick="all_delete(<?=$q_id;?>,'.delete_cat','delete_course','ajax_to_php/admin_file','');"><i class="fa fa-trash-o"></i> Delete</td> 
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

  
