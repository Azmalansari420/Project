 <?php 
   include_once('include/topmenu.php');
   $page_name = "add-branch.php"; 
   $table_name  = "branch";
?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header"> 
      <h1>All Branches List <small><b> Manage View</b></small>
      </h1>
     
    </section>
<section class="content" id="ppg">
      <div class="row">
        <div class="col-xs-12">

          <div class="box box-info">
            <div class="box-header">
          <h3 class="box-title"><i class="fa fa-shopping-cart"></i> All Branches</h3>
			<div class="box-tools pull-right">
				 <a href="branch_export.php" class="btn btn-info btn-sm">
              <i class="fa fa-save"></i> Export To Excel</a>
              <a href="add-branch.php" class="btn btn-info btn-sm">
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
			   <th>Join Date</th>      
			   <th>Branch Name</th>    
			   <th>Branch Code</th>    
			   <th>Name</th>    
			   <th>Address</th>    
			   <th>Mobile</th>    
			   <th>Password</th>      
			   <th>Status</th>  
			   <th>Action</th> 
			   </tr>
                </thead>
                <tbody>
				<?php
					$i=1;
					$gst_list = $con->get($table_name,'order by id desc');
					if (is_array($gst_list) || is_object($gst_list)){
					foreach($gst_list as $g){
						$slider_id	 = $g->id;  
						$add_d_t	 = $g->add_date_time;   
						$b_password  = $g->b_password;
						$b_password  = $g->b_password; 
						$status  	 = $g->status; 
						
                    
						 
					
				?>
                <tr class="delete_slider<?=$slider_id;?>">
                  <td><?=$i++;?></td> 
				  <td><?=$add_d_t;?></td> 
				  <td><?=$g->b_name;?></td>
				  <td><?=$g->b_code;?></td>
				  <td><?=$g->p_name;?></td>
				  <td><?=$g->address;?></td>
				  <td><?=$g->mobile;?></td>
				  <td><?=$b_password;?></td>
				   
				   <td>
				       <?php if($status=="Yes"){  ?>
				   <span style="padding: 5px 18px;background-color: #31c531;border-radius: 9px;color: #fff;font-size: 12px;">Enable</span>
				   <?php }else{ ?>
					   <span style="padding: 5px 18px;background-color: #c56131;border-radius: 9px;color: #fff;font-size: 12px;">Disable</span>
				  <?php  } ?>
				  
				  <?php if($g->letter_status==1){  ?>
				   <p style="margin-top:10px;color: #00bb0e;text-align: center;">Authorization Enable</p>
				   <?php }else{ ?>
					   <p style="margin-top:10px;color: #ff0000;text-align: center;">Authorization Disable</p>
				  <?php  } ?>
				   </td>
				    
				  <td>
				  <a href="<?php e($page_name); ?>?id=<?=$slider_id ;?>" class="btn btn-success btn-xs"><i class="fa fa-pencil-square-o"></i> Edit</a>
				  <br>
				  <br>
				  <a href="branch-auth-letter.php?id=<?=$slider_id ;?>" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Authorization Letter</a><br>
				  <br>
				   <a href="javascript:;" onclick="all_delete(<?=$slider_id;?>,'.delete_slider','delete_branch','ajax_to_php/admin_file');"  class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete</td> 
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

  
