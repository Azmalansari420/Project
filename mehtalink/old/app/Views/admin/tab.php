<?php if(!isset($page_type)){$page_type=0;}
$uri = service('uri');
 $currentpage=$uri->getSegment(3);
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1><?=$title;?></h1>
            <hr />
            <div class="row">
				<div class="col-md-3"><a class="form-control btn btn-primary" href="<?=base_url('cpdadmin/tab/'.$currentpage.'');?>">List All</a></div>
				
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<section class="content">
      <div class="container-fluid">
       <form action="<?=base_url("cpdadmin/tab/$currentpage");?>" method="post" enctype = "multipart/form-data">
       <input type="hidden" name="udf1">
	   <input type="hidden" name="udf2">
	   <input type="hidden" name="custom_data">
		
		
	   <div class="row">
          <!-- left column -->
		  
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
              
              <!-- /.card-header -->
              <!-- form start -->
              
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" required class="form-control" name="title" id="exampleInputEmail1" placeholder="Enter Title">
                  </div>
				  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
					<textarea class="ckeditor" id="" name="description" cols="35" rows="20">
					<?=$new_description;?>
					</textarea>
					
                  </div>
				  
				 
              
                </div>
                <!-- /.card-body -->

             
            </div>
            <!-- /.card -->

            
          </div>
		  
		  
		  <div class="col-md-4">
            <!-- general form elements -->
            <div class="card card-primary">
             
              <!-- /.card-header -->
              <!-- form start -->
              
                <div class="card-body">
                  
				   <!--<div class="form-group">
                    <div class="input-group">
                      
                        <input type="file" <?php if($mdtp!='3' and $mdtp!='6') { echo "required";}?> name="file" class="form-control <?php if($page_type==5) { echo "doc_file"; } else { echo "image_file"; } ?>" id="exampleInputFile">
                       
                    </div>
                  </div>-->
				 
				
				
				<input type="hidden" name="page_type" value="<?php echo $page_type; ?>">
				<div class="form-group">
                  <label>Status</label>
                  <select class="form-control" name="page_display">
                    <option value="1">Show</option>
                    <option value="0">Hide</option>
                    
                  </select>
                </div>
				
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
             
            </div>
            <!-- /.card -->

            
          </div>
		   
          <!--/.col (left) -->
          <!-- right column -->
          
          <!--/.col (right) -->
        </div>
		</form>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <!-- /.card -->

            <div class="card">
             <?php
		      $pgtp=$uri->getSegment(4);
			  ?>
              <!-- /.card-header -->
			  <form action="<?php echo base_url('cpdadmin/multicheck');?>" method="post">
				
				
              <div class="card-body">
			  <input type="checkbox" id="check_all"/> &nbsp;Check All
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
				  
                   <th>#ID</th>
                    <th>Title</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $i=1; if($user) { foreach($user as $values) { 
				  $parentpage=getdatasingle('tbl_pages',array('id'=>$values->parent_page));
				  ?>
				  <tr>
				  <td><input type="checkbox" name="check[]" class="check" value="<?php echo $values->id;?>"/> <?=$values->id;?></td>
				   
                    <td><?=$values->title;?></td>
					
                   <td>

					<a href="<?=base_url('cpdadmin/tab_edit/'.$values->id);?>/<?=$currentpage;?>" title="Edit" class="btn btn-primary btn-xs">Edit</a>

					
                    
					<a class="btn btn-danger btn-xs" href="<?=base_url('cpdadmin/deletewidthfile/'.$values->id);?>/tbl_media/multigallery1/<?=$currentpage;?>" onclick="return confirm('Are you sure to delete this records')"  title="Delete">Delete</a>
					
                   
				</td>
                 
                  </tr>
                  <?php $i++; } } ?>
                 
                  </tbody>
                  
                </table>
				
				
			
            <input type="hidden" name="table" value="tbl_media">

			<input type="hidden" name="url" value="multigallery1/<?=$currentpage;?>">

			<button type="submit" name="active" class="btn btn-success btn-xs">Active</button>

			<button type="submit" name="deactive" class="btn btn-danger btn-xs">Deactive</button>
            <?php if($page_type!=0) { ?>
			<button type="submit" name="delete" class="btn btn-danger btn-xs">Delete</button>
			<?php } ?>
              </div>
			  
			  

			</form>				
			  
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  