

<?php $this->load->view('admin/header');?>
  

<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
              <h4 class="page-title">All Staff List</h4>
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">All Staff List</li>
               </ol>
           </div>
    
     </div>
 


      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <div class="row">
                 <div class="col-lg-4">
                      <a href="<?php echo base_url('staff/add_new/') ;  ?>"> 
                     <button type="submit" class="btn btn-primary" name="submitform">Add New Staff</button>
                    </a></div>
                   <div class="col-lg-6">
                    <?=$this->session->flashdata('msg')?>
                  </div>

              </div>
                  
            </div>

                 
            <div class="card-body">

              <div class="table-responsive">
                 <?php echo $this->session->flashdata('msg'); ?>
                        <table id="example" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>SNo.</th>
                                    <th data-orderable="false" > Name</th>
                                    <th data-orderable="false" > Email</th>
                                    <th data-orderable="false" > Phone Number</th>
                                    <th data-orderable="false" > Designation</th>
                                    <th data-orderable="false" > Status</th>
                                    <th data-orderable="false" >Action</th>
                                </tr>
                            </thead>
                            <?php if(count($result)>0){ ?>
                            <tbody>
                                <?php $no=0; foreach($result as $record){ ?>
                                <?php if($record->role == '2'){ $no++;  ?>
                                <tr>
                                    <td width="7%">
                                        <?php echo $no; ?>
                                    </td>
                                    <td><?php echo $record->name; ?></td>
                                    <td><?php echo $record->email; ?></td>
                                    <td><?php echo $record->contact_no; ?></td>
                                    <td><?php echo $record->designation; ?></td>
                                    	<td width="15%">
										<?php if($record->status==1){ ?>
										<span class="label label-success">Active</span>
										<?php }else{ ?>
										<span class="label label-danger">Inactive</span>
										<?php }?>	
									</td>
								
                                    <td width="15%"> <a href="<?php echo base_url('Staff/edit/'.$record->id); ?>" class="btn  btn-success btn-xs"><i class="fa fa-fw fa-edit"></i>Edit </a>	<a href="<?php echo base_url('Staff/delete_staff/'.$record->id); ?>" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger btn-xs">
										<i class="fa fa-fw fa-trash"></i>Delete
										</a> 
                                    <a href="<?php echo base_url('Staff/password/'.$record->id); ?>" class="btn  btn-success btn-xs"><i class="fa fa-fw fa-edit"></i>Change Password</a>
                                    	
                                    </td>
                                </tr>
                                <?php } ?> 
                                <?php } ?> 
                                </tbody>
                            <?php } ?> </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->

    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
    <!--End Back To Top Button-->
  
  
<?php $this->load->view('admin/footer');?>
