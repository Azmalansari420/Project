<?php
$category=getdataorderby('tbl_pages','title','asc');
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1><?=$title;?></h1>
          </div>
         
        </div>
		<?php if(isset($success)){ echo $success; } ?>
      </div><!-- /.container-fluid -->
	  
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       <form action="<?=base_url('cpdadmin/admin_profile');?>" method="post" enctype = "multipart/form-data">
	   <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Admin Profile</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
                <div class="card-body">
                <div class="row">
				  <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Name</label>
                     <input type="text" required class="form-control" name="name" value="<?=$user->name;?>" placeholder="Name">
                  </div>
				  </div>
				  <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Phone</label>
                   <input type="text" required class="form-control" name="phone" value="<?=$user->phone;?>" placeholder="phone">
                  </div>
				  </div>
				  </div>
				  
				   <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
		</form>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>