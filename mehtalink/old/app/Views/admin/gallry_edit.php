

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
				<div class="col-md-3"><a class="form-control btn btn-primary" href="<?=base_url('cpdadmin/multigallery1/'.$currentpage1.'');?>">List All</a></div>
				<div class="col-md-3"><a class="form-control btn btn-success" href="<?=base_url('cpdadmin/multigallery1/'.$currentpage1.'');?>">Add New</a></div>
				
				
            </div>
          </div>
		  
		  
        </div>
		<?php if(isset($success)){ echo $success; } ?>
      </div><!-- /.container-fluid -->
	  
    </section>
	<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       <form action="<?=base_url("cpdadmin/gallry_edit/$user->id");?>/<?=$currentpage1;?>" method="post" enctype = "multipart/form-data">
	   	   
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
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" required class="form-control" name="title" value="<?=$user->title;?>" placeholder="Enter Title">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Unique Code</label>
                    <input type="text" value="<?=$user->udf1;?>"  class="form-control" name="udf1" id="exampleInputEmail1" placeholder="Enter Unique Code">
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
                  <?php if($user->file!='' and $page_type!=5) { ?>
				  <img src="<?=base_url('uploads/'.$user->file.'');?>" style="max-width:100%;height: 150px;">
				  <?php } ?>
				   <div class="form-group">
                    <div class="input-group">
                      <?php if($page_type==5) { ?>
					  
					  <input type="URL" class="form-control" value="<?=base_url('uploads/'.$user->file.'');?>">
                      <?php } else { ?>					  
					  <input type="file" name="file" class="form-control <?php if($page_type==5) { echo "doc_file"; } else { echo "image_file"; } ?>" id="exampleInputFile">
					  <?php } ?>
                      </div>
                  </div>
				  <?php if($user->file !="" && $page_type!=5){ ?>
					<input type="checkbox" name="remove_img" value="1"> Remove Image
                  <?php } ?>
				   
				
				<div class="form-group">
                  <label>Status</label>
                  <select class="form-control" name="page_display">
                    <option value="1" <?php if($user->status=='1'){ echo "selected";}?>>Show</option>
                    <option value="0" <?php if($user->status=='0'){ echo "selected";}?>>Hide</option>
                    
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
    <!-- /.content -->
  </div>
  