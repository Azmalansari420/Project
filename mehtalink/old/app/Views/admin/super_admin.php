<?php
$websetting=websitesetting();
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
         
          
		  <div class="col-sm-12">
            <h1>Website Setting</h1> 
            <hr />
            
          </div>
		  
		  
        </div>
		<?php if(isset($success)){ echo $success; } ?>
      </div><!-- /.container-fluid -->
	  
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       <form action="<?=base_url('cpdadmin/super_admin');?>" method="post" enctype = "multipart/form-data">
	   	 <div class="row">
          <!-- left column -->
		  
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Website Setting</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
                <div class="card-body">
                  <div class="form-group">
                        <?php
                        $arr=explode(',',$user->setting_end);
						foreach($websetting['checkbox'] as $values) { ?>
						<div class="form-check">
                          <input name="check[]" value="<?=$values['id'];?>" <?php if(in_array($values['id'],$arr)){ echo "checked";}?> class="form-check-input" type="checkbox">
                          <label class="form-check-label"><?=$values['name'];?></label>
                        </div>
						<?php } ?>
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
                <h3 class="card-title">Featured</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
                <div class="card-body">
				
				 <div class="form-group">
                  <label>Website Counts</label>
                  <input type="number" class="form-control" name="setting_count" value="<?=$user->setting_count;?>" placeholder="Website Counts">
                  </div>
				  
				  <div class="form-group">
                  <label>Website Status</label>
                  <select class="form-control" name="setting_end">
                    <option value="">None</option>
					<?php foreach($websetting['select'] as $values) { ?>
					<option value="<?=$values['id'];?>" <?php if(in_array($values['id'],$arr)){ echo "selected";}?>><?=$values['name'];?></option>
                    <?php } ?>
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
  