
<?php
$array=combine_array();
$category=getdataorderby('tbl_pages','title','asc');
$uri=current_url(true);
$uri = service('uri');
$currentpage1=$uri->getSegment(4);
$new_description= str_replace(array_in(),array_out(),$user->description); 
$new_attachment_link= str_replace('#base_url#',base_url(),$user->attachment_link);
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
				<div class="col-md-3"><a class="form-control btn btn-primary" href="<?=base_url('cpdadmin/media_list/'.$currentpage1.'');?>">List All</a></div>
				<div class="col-md-3"><a class="form-control btn btn-success" href="<?=base_url('cpdadmin/media_add/'.$currentpage1.'');?>">Add New</a></div>
				
				
            </div>
          </div>
		  
		  
        </div>
		<?php if(isset($success)){ echo $success; } ?>
      </div><!-- /.container-fluid -->
	  
    </section>
	<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       <form action="<?=base_url("cpdadmin/media_edit/$user->id");?>/<?=$currentpage1;?>" method="post" enctype = "multipart/form-data">
	   	   
	   <div class="row">
          <!-- left column -->
		  
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update <?php echo $currentpage1; ?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
                <div class="card-body">
                  
				   <?php if($page_type==6) { ?>
				   
				   <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" required class="form-control" name="title" value="<?=$user->title;?>" placeholder="Enter Name">
                  </div>
				  
				  
				   <div class="form-group">
                    <label for="exampleInputEmail1">Degination</label>
                    <input type="text" required class="form-control" value="<?=$user->degination;?>" name="degination" id="exampleInputEmail1" placeholder="Enter Degination">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Employee Code</label>
                    <input type="text" value="<?=$user->emp_code;?>" required class="form-control" name="emp_code" id="exampleInputEmail1" placeholder="Enter Employee Code">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Blood Group</label>
                    <input type="text" value="<?=$user->blood_group;?>" required class="form-control" name="blood_group" id="exampleInputEmail1" placeholder="Enter Blood Group">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Emergency No</label>
                    <input type="text" value="<?=$user->emg_no;?>" required class="form-control" name="emg_no" id="exampleInputEmail1" placeholder="Enter Emergency No">
                  </div>
				  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
					<textarea class="ckeditor" id="myEditor" name="description" cols="35" rows="20">
					<?=$new_description;?>
					</textarea>
					
                  </div>
				   <?php } else { ?>
				   <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" required class="form-control" name="title" value="<?=$user->title;?>" placeholder="Enter Title">
                  </div> 
				 <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
					<textarea class="ckeditor" id="myEditor" name="description" cols="35" rows="20">
					<?=$new_description;?>
					</textarea>
					
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
                  <?php if($user->file!='' and $page_type!=5) { ?>
				  <img src="<?=base_url('public/uploads/'.$user->file.'');?>" style="max-width:100%;height: 150px;">
				  <?php } ?>
				   <div class="form-group">
                    <div class="input-group">
                      <?php if($page_type==5) { ?>
					  
					  <input type="URL" class="form-control" value="<?=base_url('public/uploads/'.$user->file.'');?>">
                      <?php } else { ?>					  
					  <input type="file" name="file" class="form-control <?php if($page_type==5) { echo "doc_file"; } else { echo "image_file"; } ?>" id="exampleInputFile">
					  <?php } ?>
                      </div>
                  </div>
				  <?php if($user->file !="" && $page_type!=5){ ?>
					<input type="checkbox" name="remove_img" value="1"> Remove Image
                  <?php } ?>
				   <?php if($page_type!='3' and $page_type!=5 and $page_type!=6) { ?>
				  <div class="form-group">
                  <label>Options</label>
                  <select class="form-control" name="parent_page">
                    <option value="0" <?php if($user->parent_page=='0'){ echo "selected";}?>>None</option>
					<?php if($mdtp=='0') { ?>
					<option value="1" <?php if($user->parent_page=='1'){ echo "selected";}?>>Slider Banner</option>
					<option value="2" <?php if($user->parent_page=='2'){ echo "selected";}?>>Home Gallery</option>
					<option value="3" <?php if($user->parent_page=='3'){ echo "selected";}?>>Clients List</option>
					<?php } else if($mdtp=='2') { ?>
					<option value="1" <?php if($user->parent_page=='1'){ echo "selected";}?>>Sidebar Ads</option>
					<option value="2" <?php if($user->parent_page=='2'){ echo "selected";}?>>Homepage Ads Top Banner</option>
					<option value="3" <?php if($user->parent_page=='3'){ echo "selected";}?>>Homepage Mid Banner</option>
					<?php } ?>
                  </select>
                </div>
				<?php } ?>
				<input type="hidden" name="page_type" value="<?php echo $page_type; ?>">
				<div class="form-group">
                  <label>Status</label>
                  <select class="form-control" name="page_display">
                    <option value="1" <?php if($user->status=='1'){ echo "selected";}?>>Show</option>
                    <option value="0" <?php if($user->status=='0'){ echo "selected";}?>>Hide</option>
                    
                  </select>
                </div>
				<?php if($page_type=='3' and $page_type!=5) { ?>
				<div class="form-group">
                    <label for="exampleInputFile">Designation</label>
                    <div class="input-group" >
                      
                        <input type="text" value="<?=$user->custom_data;?>" name="custom_data" class="form-control" id="exampleInputFile" placeholder="Designation">
                       
                    </div>
                  </div>
				<?php } ?>
				
				<div class="form-group">
                    <label for="exampleInputEmail1">Sort Order</label>
                    <input type="number" min="0" name="sort_order" class="form-control" value="<?php echo $user->sort_order;?>" id="exampleInputEmail1" placeholder="Sort Order">
                 </div>
				<?php if($page_type!='3' and $page_type!=5 and $page_type!=6) { ?>
				<div class="form-group">
                    <label for="exampleInputEmail1">Attachment Link</label>
                    <input type="URL" name="attachment_link" class="form-control" value="<?=$new_attachment_link;?>" id="exampleInputEmail1" placeholder="Attachment Link">
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
  