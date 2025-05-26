
  <div class="content-wrapper">
   <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Admin List</h1>
            <hr />
            <div class="row">
				<div class="col-md-3"><a class="form-control btn btn-primary" href="<?=base_url('cpdadmin/admin_list');?>">List All</a></div>
				<div class="col-md-3"><a class="form-control btn btn-success" href="<?=base_url('cpdadmin/admin_add');?>">Add New</a></div>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
	

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <!-- /.card -->

            <div class="card">
              
              <!-- /.card-header -->
			  <form action="<?php echo base_url('cpdadmin/multicheck');?>" method="post">
				
				
              <div class="card-body">
			  <input type="checkbox" id="check_all"/> &nbsp;Check All
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
				  
                    <th>#ID</th>
                    <th>Name</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $i=1; if($user) { foreach($user as $values) {
				  ?>
				  <tr>
				  <td><input type="checkbox" name="check[]" class="check" value="<?php echo $values->id;?>"/> <?=$values->id;?> </td>
                    <td><?=$values->name;?></td>
					<td><?=$values->email;?></td>
					<td><?=$values->phone;?></td>
					
					
                    
					<td>
					<?php if($values->status=='1'){ echo "Active";} else if($values->status=='0'){ echo "hidden";}?>
					</td>
                   <td>

					<a href="<?=base_url('cpdadmin/admin_edit/'.$values->id);?>" title="Edit" class="btn btn-primary btn-xs">Edit</a>
                    
					
					<a class="btn btn-danger btn-xs" href="<?=base_url('cpdadmin/deletewidthfile/'.$values->id);?>/tbl_admin/admin_list" onclick="return confirm('Are you sure to delete this records')"  title="Delete">Delete</a>
                  
				</td>
                 
                  </tr>
                  <?php $i++; } } ?>
                 
                  </tbody>
                  
                </table>
				
				
			
            <input type="hidden" name="table" value="tbl_admin">

			<input type="hidden" name="url" value="admin_list">

			<button type="submit" name="active" class="btn btn-success btn-xs">Active</button>

			<button type="submit" name="deactive" class="btn btn-danger btn-xs">Deactive</button>
			<button type="submit" name="delete" class="btn btn-danger btn-xs">Delete</button>
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
  