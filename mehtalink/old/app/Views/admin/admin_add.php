<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
	<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Admin Add</h1>
            <hr />
            <div class="row">
				<div class="col-md-3"><a class="form-control btn btn-primary" href="<?=base_url('cpdadmin/admin_list');?>">List All</a></div>
				<div class="col-md-3"><a class="form-control btn btn-success" href="<?=base_url('cpdadmin/admin_add');?>">Add New</a></div>
            </div>
          </div>
		 
        </div>
      </div><!-- /.container-fluid -->
	   <?php if(isset($success)){ echo $success; } ?>
    </section>
	

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       <form action="<?=base_url('cpdadmin/admin_add');?>" method="post" enctype = "multipart/form-data">
	   <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Admin Add</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
                <div class="card-body">
                <div class="row">
				  <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Name</label>
                     <input type="text" required class="form-control" name="name" value="" placeholder="Name">
                  </div>
				  </div>
				  <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                   <input type="email" required class="form-control" name="email" value="" placeholder="Email">
                  </div>
				  </div>
				  </div>
				  
				  
				  <div class="row">
				  <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Phone</label>
                     <input type="number" required class="form-control" name="phone" value="" placeholder="Phone">
                  </div>
				  </div>
				  <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                   <input type="password" required class="form-control" name="password" value="" placeholder="New Password">
                  </div>
				  </div>
				  <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Status</label>
                     <select required class="form-control" name="status">
					  <option value="0">Select Any</option>
					 <option value="1">Show</option>
					 <option value="0">Hide</option>
					 </select>
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