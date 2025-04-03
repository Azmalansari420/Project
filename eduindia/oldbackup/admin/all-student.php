<?php 
   include_once('include/topmenu.php');
   $page_name= "add-student.php";
   $view_page_name= "full-student.php";
   
  

?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header"> 
      <h1>All Students List <small><b> Manage View</b></small>
      </h1>
     
    </section>
<section class="content" id="ppg">
      <div class="row">
        <div class="col-xs-12">

          <div class="box box-info">
            <div class="box-header">
          <h3 class="box-title"><i class="fa fa-shopping-cart"></i> All Students</h3>
			<div class="box-tools pull-right">
				  <a href="student_export_to_excel.php" class="btn btn-info btn-sm">
              <i class="fa fa-save"></i>Export To Excel</a>
              <a href="add-student.php" class="btn btn-info btn-sm">
              <i class="fa fa-save"></i> Add New</a>
			 
			  <a href="welcome.php" data-toggle="tooltip" title="Cancel" class="btn btn-info btn-sm" >
              <i class="fa fa-reply"></i> Cancel </a>
            
          </div>
        </div>
            <!-- /.box-header -->
            <div class="box-body">
			<div class="table-responsive">
              <table id="example1" class="table table-hover table-bordered table-striped">
                <thead>
               <tr>
			   <th>Sr.No.</th>      
			   <th>Admission Date</th>  
			   <th>Registration Id</th>    
			   <th>Branch Name</th> 
			   <th>Course Name</th>    
			   <th>Student Details</th>   
			   <th>Course Duration</th>    
			   <th>Image</th>    
			   <th>Action</th>  
			   <th>Delete</th> 
			   </tr>
                </thead>
               
				<?php
					$i=1;
					 if(isset($_GET['p_s']) && !empty($_GET['p_s'])){
              $gst_list = $con->all_fetch("user_register",array('p_s'=>$_GET['p_s'] ),"order by id desc");
          }else{
					$gst_list = $con->get("user_register","order by id desc");
				}
					if (is_array($gst_list) || is_object($gst_list)){
					foreach($gst_list as $g){
						$slider_id	   = $g->id;  
						$services_img  = $g->picture;
						$status  	   = $g->status; 
						
						
                    
						 
					
				?>
                <tr class="delete_slider<?=$slider_id;?>">
                  <td><?=$i++;?></td> 
				  <td><?=$g->join_date;?></td>
				  
				  <td><?=$g->reg_id;?></td>
				  <td><?php echo id_to_name('branch',$g->user_add_by_id,'b_name');; ?></td>
				
				  <td><?php echo id_to_name('course',$g->course_id); ?></td> 
				    <td>
				    	<b>Name :</b> <?=$g->first_name;?><br/>
			            <b>Father Name :</b> <?=$g->father_name;?><br/>
			            <b>Mobile :</b> <?=$g->mobile;?><br/>
			            <b>Email :</b> <?=$g->email;?><br/>
			            <b>Password :</b> <?=$g->password;?>
			       </td> 
				   <td><?php 
					  echo id_to_name('institutes_courses',$g->institute_course_id);
					  ?>
					  </td>
				  <td><img src="../upload/<?=$services_img;?>" style="width:50px;height:50px"></td>
				   
				    
				  <td>
				  <a href="<?php e($page_name);?>?id=<?=$slider_id ;?>" class="btn btn-xs btn-success">Edit</a>
				  <a href="<?php e($view_page_name);?>?id=<?=$slider_id ;?>" class="btn btn-xs btn-info">View</a><br/>
				  <a href="admit-setting.php?id=<?=$slider_id ;?>" class="btn btn-xs btn-success">Upload Admit Card</a>
				  <a href="set_user_number.php?id=<?=$slider_id ;?>" class="btn btn-xs btn-danger">Set Number</a>
				  </td>
				  
				  <td><a href="javascript:;" onclick="all_delete(<?=$slider_id;?>,'.delete_slider','delete_user_list','ajax_to_php/admin_file','<?=$services_img;?>');"><i class="fa fa-trash-o"></i> Delete</a></td> 
                </tr>
					<?php  } 
					
				// 
					
					}?>
                
              </table>
            </div>
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

  
