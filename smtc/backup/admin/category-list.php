<?php 
   include_once('include/topmenu.php');

?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header"> 
      <h1>All State <small><b> Manage View</b></small>
      </h1>
     
    </section>
<section class="content" id="ppg">
      <div class="row">
        <div class="col-xs-12">

          <div class="box box-info">
            <div class="box-header">
          <h3 class="box-title"><i class="fa fa-shopping-cart"></i> All State  List</h3>
			<div class="box-tools pull-right">
              <a href="add-category.php" class="btn btn-info btn-sm">
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
			   <th>Name</th>    
			   <th>Code</th>    
			   <th>Edit</th> 
			   <th>Delete</th> 
			   </tr>
                </thead>
                <tbody>
				<?php
					$i=1;
					$gst_list = $con->get("state","order by id desc");
					if (is_array($gst_list) || is_object($gst_list)){
					foreach($gst_list as $g){
						$q_id	     = $g->id;  
						    
						
                    
						 
					
				?>
                <tr class="delete_cat<?=$q_id;?>">
                  <td><?=$i++;?></td> 
				  <td><?=$g->name;?></td> 
				  <td><?=$g->code;?></td> 
				   
				  <td>
				  <a href="add-category.php?id=<?=$q_id ;?>"><i class="fa fa-pencil-square-o"></i> Edit
				  </td>
				  <td><a href="javascript:;" onclick="all_delete(<?=$q_id;?>,'.delete_cat','delete_cat_list','ajax_to_php/admin_file','');"><i class="fa fa-trash-o"></i> Delete</td> 
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

  
