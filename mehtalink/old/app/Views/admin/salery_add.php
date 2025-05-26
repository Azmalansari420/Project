
<?php
$array=combine_array();
$category=getdataorderby('tbl_pages','title','asc');
$uri = service('uri');
$currentpage=$uri->getSegment(3);
$last_id=getdatasingledesc('tbl_media');
$sort_order=(1+$last_id->id)*5;
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
	<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          
          <div class="col-sm-12">
            <h1><?=$title;?></h1>
            <hr />
            <div class="row">
				<div class="col-md-3"><a class="form-control btn btn-primary" href="<?=base_url('cpdadmin/salary_list/'.$currentpage.'');?>">List All</a></div>
            </div>
          </div>
        </div>
		<?php if(isset($success)){ echo $success; } ?>
      </div><!-- /.container-fluid -->
	  
    </section>
	

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       <form action="<?=base_url("cpdadmin/salary_add/$currentpage");?>" method="post" enctype = "multipart/form-data">
       <input type="hidden" name="udf1">
	   <input type="hidden" name="udf2">
	   <input type="hidden" name="custom_data">
		
		
	   <div class="row">
          <!-- left column -->
		  
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create New <?php echo $currentpage; ?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
                <div class="card-body">
                 
				  <?php if($page_type==6) { ?>
				   <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" required class="form-control" name="title" id="exampleInputEmail1" placeholder="Enter Name">
                  </div>
				   <div class="form-group">
                    <label for="exampleInputEmail1">Degination</label>
                    <input type="text" required class="form-control" name="degination" id="exampleInputEmail1" placeholder="Enter Degination">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Employee Code</label>
                    <input type="text" required class="form-control" name="emp_code" id="exampleInputEmail1" placeholder="Enter Employee Code">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Blood Group</label>
                    <input type="text" required class="form-control" name="blood_group" id="exampleInputEmail1" placeholder="Enter Blood Group">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Emergency No</label>
                    <input type="text" required class="form-control" name="emg_no" id="exampleInputEmail1" placeholder="Enter Emergency No">
                  </div>
				  
				  
				  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
					<textarea class="ckeditor" id="myEditor" name="description" cols="35" rows="20"></textarea>
					
                  </div>
				  <?php } else { ?>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" required class="form-control" name="title" id="exampleInputEmail1" placeholder="Enter Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
					<textarea class="ckeditor" id="myEditor" name="description" cols="35" rows="20"></textarea>
					
                  </div>
				  <?php } ?>
				 
              
                </div>
                <!-- /.card-body -->

             
            </div>
            <!-- /.card -->

            
          </div>
		  
		  
		  <div class="col-md-4">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">More Options</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
                <div class="card-body">
                  
				   <div class="form-group">
                    <div class="input-group">
                      
                        <input type="file" <?php if($mdtp!='3' and $mdtp!='6') { echo "required";}?> name="file" class="form-control <?php if($page_type==5) { echo "doc_file"; } else { echo "image_file"; } ?>" id="exampleInputFile">
                       
                    </div>
                  </div>
				  <?php if($page_type!='3' and $page_type!=5 and $page_type!=6) { ?>
				  <div class="form-group">
                  <label>Options</label>
                  <select class="form-control" name="parent_page">
                    <option value="0">None</option>
					<?php if($mdtp=='0') { ?>
					<option value="1">Slider Banner</option>
					<option value="2">Home Gallery</option>
					<option value="3">Clients List</option>
					<?php } else if($mdtp=='2') { ?>
					<option value="1">Sidebar Ads</option>
					<option value="2">Homepage Ads Top Banner</option>
					<option value="3">Homepage Mid Banner</option>
					<?php } ?>
					
                  </select>
                </div>
				<?php } else { ?>
				
				<input type="hidden" name="parent_page" value="13">
				<?php } ?>
				<input type="hidden" name="page_type" value="<?php echo $page_type; ?>">
				<div class="form-group">
                  <label>Status</label>
                  <select class="form-control" name="page_display">
                    <option value="1">Show</option>
                    <option value="0">Hide</option>
                    
                  </select>
                </div>
				<?php if($page_type=='3' and $page_type!=5) { ?>
				<div class="form-group">
                    <label for="exampleInputFile">Designation</label>
                    <div class="input-group" >
                      
                        <input type="text" name="custom_data" class="form-control" id="exampleInputFile" placeholder="Designation">
                       
                    </div>
                  </div>
				<?php } ?>
				
				<div class="form-group">
                    <label for="exampleInputEmail1">Sort Order</label>
                    <input type="number" min="0" name="sort_order" class="form-control" value="<?php echo $sort_order;?>" id="exampleInputEmail1" placeholder="Sort Order">
                 </div>
				<?php if($page_type!='3' and $page_type!=5 and $page_type!=6) { ?>
				<div class="form-group">
                    <label for="exampleInputEmail1">Attachment Link</label>
                    <input type="URL" name="attachment_link" class="form-control" id="exampleInputEmail1" placeholder="Attachment Link">
                 </div> 
				
				<?php } ?>
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
    <!-- /.content -->
  </div>
  