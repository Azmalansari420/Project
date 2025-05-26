

<?php
$array=combine_array();
$category=getdataorderby('tbl_pages','title','asc');
$uri = service('uri');
$currentpage=$uri->getSegment(3);
$last_id=getdatasingledesc('tbl_media');
$sort_order=(1+$last_id->id)*5;
$new_description= str_replace(array_in(),array_out(),$user->description); 
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
       <form action="" method="post" enctype = "multipart/form-data">
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
                 
				 
				   <div class="form-group">
                    <label for="exampleInputEmail1">Month Year</label>
                    <input type="text" required class="form-control" value="<?=$user->title;?>" name="title" id="exampleInputEmail1" placeholder="Enter Name">
                  </div>
				   <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" required class="form-control" value="<?=$user->address;?>" name="address" id="exampleInputEmail1" placeholder="Enter Address">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Employee Code</label>
                    <input type="text" required class="form-control" value="<?=$user->emp_code;?>" name="emp_code" id="exampleInputEmail1" placeholder="Enter Employee Code">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Salary In Word</label>
                    <input type="text" required class="form-control" value="<?=$user->salary_word;?>" name="salary_word" id="exampleInputEmail1" placeholder="Enter Salary In Word">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Bank Detail</label>
                    <input type="text" required class="form-control" value="<?=$user->bank;?>" name="bank" id="exampleInputEmail1" placeholder="Enter Bank Detail">
                  </div>
				  
				  
				  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
					<textarea class="ckeditor" id="myEditor" name="description" cols="35" rows="20"><?php echo $new_description;?></textarea>
					
                  </div>
				  
				 
              
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
                  
				  <?php if($page_type!='3' and $page_type!=5 and $page_type!=6) { ?>
				
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
  