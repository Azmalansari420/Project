<?php 
   include_once('include/topmenu.php');
   $page_name= "add-student.php";
   $view_page_name= "full-student.php";
if(isset($_GET['id']) && !empty($_GET['id'])){
  $id = $_GET['id'];
}
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
        
			 
			  <a href="welcome.php" data-toggle="tooltip" title="Cancel" class="btn btn-info btn-sm" >
              <i class="fa fa-reply"></i> Cancel </a>
            
          </div>
        </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-hover table-bordered table-striped">
                <thead>
               <tr>
			   <th>Sr.No.</th>      
			   <th>Admission Date</th>    
			   <th>Registration Id</th>    
			   <th>Name</th>    
			   <th>Course Name </th>  
         <th>Duration</th>  
			   <th>Mobile</th>    
			   <th>Image</th>    
			   <th>Action</th> 
			   <th>Delete</th> 
			   </tr>
                </thead>
                <tbody>
				<?php
					$i=1;
					$gst_list = $con->all_fetch("user_register",array('user_add_by_id'=>$id ),"order by id desc");
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
				  <td><?=$g->first_name;?></td>
				  <td><?=id_to_name('course',$g->course_id);?></td>
           <td><?= id_to_name('institutes_courses',$g->institute_course_id);?></td>
				  <td><?=$g->mobile;?></td>  
				  <td><img src="../upload/<?=$services_img;?>" style="width:50px;height:50px"></td>
				   
				    
				  <td>
				  <a href="<?php e($page_name);?>?id=<?=$slider_id ;?>"><i class="fa fa-pencil-square-o"></i> Edit</a><br/>
				  <a href="<?php e($view_page_name);?>?id=<?=$slider_id ;?>"><i class="fa fa-eye"></i> View</a>
				  </td>
				  <td><a href="javascript:;" onclick="all_delete(<?=$slider_id;?>,'.delete_slider','delete_services_item_list','ajax_to_php/admin_file','<?=$services_img;?>');"><i class="fa fa-trash-o"></i> Delete</td> 
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

  
