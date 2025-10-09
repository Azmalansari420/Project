<?php 
   include_once('include/topmenu.php');

?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header"> 
      <h1>All Products <small><b> Manage View</b></small>
      </h1>
     
    </section>
<section class="content" id="ppg">
      <div class="row">
        <div class="col-xs-12">

          <div class="box box-info">
            <div class="box-header">
          <h3 class="box-title"><i class="fa fa-shopping-cart"></i> All Products</h3>
			<div class="box-tools pull-right">
              <a href="add-product.php" class="btn btn-info btn-sm">
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
			   <th>Category</th>    
			   <th>Sub Category</th>    
			   <th>Name</th>    
			   <th>Image</th>    
			   <th>Sort</th>    
			   <th>Show on Home Page</th> 
			   <th>Status</th> 
			   <th>Edit</th> 
			   <th>Delete</th> 
			   </tr>
                </thead>
                <tbody>
				<?php
					$i=1;
					$gst_list = $con->get("product","order by id desc");
					if (is_array($gst_list) || is_object($gst_list)){
					foreach($gst_list as $g){
						$p_id	          = $g->id;  
						$p_name           = $g->name; 
						$services_img     = $g->imagePath;
						$status  	      = $g->status;
						$sort_order       = $g->sort_order;   
						$special_product  = $g->special_product;   
						
						$c_n   = fs('category',array('id'=>$g->category)); 
						$s_c_n = fs('sub_category',array('id'=>$g->sub_category));
						
						
                    
						 
					
				?>
                <tr class="delete_slider<?=$p_id;?>">
                  <td><?=$i++;?></td> 
				  
				  <td><?=$c_n->name;?></td>
				  <td><?=$s_c_n->name;?></td>
				  <td><?=$p_name;?></td>
				  
				  <td><img src="<?=$services_img;?>" style="width:75px;height:75px"></td>
				  
				   <td><?=$sort_order;?></td>
				   <td><?php if($status==1){
					   echo '<span class="badge" style="background-color:#288428;">Show</span>';
				   }else{
					   echo '<span class="badge" style="background-color:#a90b0b;">Hide</span>';
				   };?></td>
				    
				  
				  <td><?php if($special_product==1){
					   echo '<span class="badge" style="background-color:#288428;">Show</span>';
				   }else{
					   echo '<span class="badge" style="background-color:#a90b0b;">Hide</span>';
				   };?></td>
				    
				  <td>
				  <a href="add-product.php?id=<?=$p_id ;?>"><i class="fa fa-pencil-square-o"></i> Edit</a>
				  </td>
				  <td><a href="javascript:;" onclick="all_delete(<?=$p_id;?>,'.delete_slider','delete_product','ajax_to_php/admin_file','<?=$services_img;?>');"><i class="fa fa-trash-o"></i> Delete</td> 
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

  
