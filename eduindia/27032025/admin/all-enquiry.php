<?php 
   include_once('include/topmenu.php');
   $page_name  = "add-post.php"; 

?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header"> 
      <h1>All Franchisee Enquiry<small><b> Manage View</b></small>
      </h1>
     
    </section>
<section class="content" id="ppg">
      <div class="row">
        <div class="col-xs-12">

          <div class="box box-info">
            <div class="box-header">
          <h3 class="box-title"><i class="fa fa-shopping-cart"></i> All Franchisee Enquiry</h3>
			<div class="box-tools pull-right">
               <a href="enqury_export_to_excel.php" data-toggle="tooltip" title="Cancel" class="btn btn-info btn-sm" >
              <i class="fa fa-save"></i> Export To Excel </a>
			 
			  <a href="welcome.php" data-toggle="tooltip" title="Cancel" class="btn btn-info btn-sm" >
              <i class="fa fa-reply"></i> Cancel </a>
            
          </div>
        </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-hover table-bordered table-striped">
                <thead>
               <tr>
			   <th>Sr.No.</th>    
			   <th>Name</th> 
         <th>DOB</th>   
			   <th>Email</th>    
			   <th>Mobile</th>    
			 
			   <th>Branch Name</th> 
			   <th>Delete</th> 
			   </tr>
                </thead>
                <tbody>
				<?php
					$i=1;
					$gst_list = $con->get("franchisee_enquiry","order by id desc");
					if (is_array($gst_list) || is_object($gst_list)){
					foreach($gst_list as $g){
						$slider_id	   = $g->id;  
					 
						
                    
						 
					
				?>
                <tr class="delete_slider<?=$slider_id;?>">
                  <td><?=$i++;?></td> 
                  <td><?=$g->name;?></td> 
                   <td><?=$g->dob;?></td> 
                  <td><?=$g->email;?></td> 
                  <td><?=$g->mobile;?></td> 
                
                  <td><?=$g->branch_name;?></td> 
                  
				  
				  <td>
            <a href="view_enquiry.php?id=<?php echo $g->id; ?>" class="btn btn-info btn-xs"><i class="fa fa-eye"></i> View</a>
            <a href="javascript:;" class="btn btn-danger btn-xs" onclick="all_delete(<?=$slider_id;?>,'.delete_slider','delete_enqu','ajax_to_php/admin_file');"><i class="fa fa-trash-o"></i> Delete</td> 
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

  
