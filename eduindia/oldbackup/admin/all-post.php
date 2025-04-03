<?php 
   include_once('include/topmenu.php');
   $page_name  = "add-post.php"; 

?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header"> 
      <h1>All Logo and Gallery<small><b> Manage View</b></small>
      </h1>
     
    </section>
<section class="content" id="ppg">
      <div class="row">
        <div class="col-xs-12">

          <div class="box box-info">
            <div class="box-header">
          <h3 class="box-title"><i class="fa fa-shopping-cart"></i> All Logo and Gallery</h3>
			<div class="box-tools pull-right">
              <a href="<?php e($page_name); ?>" class="btn btn-info btn-sm">
              <i class="fa fa-save"></i> Add New</a>
			 
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
			   <th>Type</th>     
			   <th>Name</th>    
			   <th>Image</th>    
			   <th>Sort</th>    
			   <th>Status</th> 
			   <th>Edit</th> 
			   <th>Delete</th> 
			   </tr>
                </thead>
                <tbody>
				<?php
					$i=1;
					$gst_list = $con->get("post","order by id desc");
					if (is_array($gst_list) || is_object($gst_list)){
					foreach($gst_list as $g){
						$slider_id	   = $g->id;  
						$post_type     = $g->type; 
						$slider_name   = $g->name; 
						$services_des  = $g->description;
						$services_img  = $g->img;
						$status  	   = $g->status;
						$sort_order    = $g->sort_order;   
						
                    
						 
					
				?>
                <tr class="delete_slider<?=$slider_id;?>">
                  <td><?=$i++;?></td> 
				  <td><?php p_t_s($post_type); ?></td> 
				  <td><?=$slider_name;?></td>  
				  <td><img src="../upload/<?=$services_img;?>" style="width:75px;height:75px"></td>
				  
				   <td><?=$sort_order;?></td>
				   <td><?php if($status=="Yes"){
					   echo '<span class="badge" style="background-color:#288428;">Show</span>';
				   }else{
					   echo '<span class="badge" style="background-color:#a90b0b;">Hide</span>';
				   };?></td>
				    
				  <td>
				  <a href="<?php e($page_name); ?>?id=<?=$slider_id ;?>"><i class="fa fa-pencil-square-o"></i> Edit
				  </td>
				  <td><a href="javascript:;" onclick="all_delete(<?=$slider_id;?>,'.delete_slider','delete_post','ajax_to_php/admin_file','<?=$services_img;?>');"><i class="fa fa-trash-o"></i> Delete</td> 
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

  
