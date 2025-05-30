<?php 
	$this->load->view('vendor/include/header');
	$this->load->view('vendor/include/sidebar');
?>


         <div class="page-wrapper">
            <div class="content container-fluid">
               <div class="page-header">
                  <div class="row">
                     <div class="col-sm-7 col-auto">
                        <h3 class="page-title"><?php echo $page_title; ?></h3>
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="#!">Dashboard</a></li>
                           <li class="breadcrumb-item active"><?php echo $page_title; ?></li>
                        </ul>
                     </div>
                     <div class="col-sm-5 col">
                        <a href="<?=base_url('vendor/hospital_docters/add') ?>" class="btn btn-primary float-end mt-2">Add New</a>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="card">
                        <div class="card-body">
                           <div class="table-responsive">
                              <table class="datatable table table-hover table-center mb-0">
                                 <thead>
                                    <tr>
                                       <th>#</th>
                                       <th>Dealer Deails</th>
                                       <th>Mobile</th>
                                       <th>Email & Pass</th>
                                       <th>Pincode</th>
                                       <th>State</th>
                                       <th>City</th>
                                       <th>Status</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                    $i=0;
                                    foreach ($ALLDATA as $key => $data) 
                                       {  $i++;   ?>
                                    <tr>
                                       <td><?=$i ?></td>
                                       <td>
                                          <h2 class="table-avatar">
                                             <span class="avatar avatar-sm me-2"><img class="avatar-img" src="<?php echo base_url($upload_path); ?><?php echo $data->image; ?>" alt="product image" onerror="this.src='<?=base_url() ?>media/uploads/1724412456.png'"></span>
                                             <?=$data->username ?>
                                          </h2>
                                       </td>
                                       <td><?=$data->mobile ?></td>
                                       <td>
                                          Email:- <?=$data->email ?><br>
                                          Password:- <?=$data->password ?>
                                       </td>
                                       <td><?=$data->pincode ?></td>
                                       <td><?=$data->state_id ?></td>
                                       <td><?=$data->city_id ?></td>
                                       <td><?=status($data->status) ?></td>
                                       
                                       <td>
                                          <div class="actions">
                                             <a class="btn btn-sm bg-success-light" href="<?php echo $edit_url.$data->id; ?>">
                                             <i class="fe fe-pencil"></i> Edit
                                             </a>
                                             <a onclick="return confirm('are you sure do you want to delete this record')" href="<?php echo $delete_url.$data->id; ?>" class="btn btn-sm bg-danger-light">
                                             <i class="fe fe-trash"></i> Delete
                                             </a>
                                          </div>
                                       </td>
                                    </tr>
                                 <?php } ?>
                                    
                                   
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

<?php	$this->load->view('vendor/include/footer');  ?>

 <div class="modal fade" id="deleteConfirmModal" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="acc_title">Delete</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <p id="acc_msg">Are you sure you want to delete?</p>
               </div>
               <div class="modal-footer">
                  <a href="javascript:void(0)" class="btn btn-success si_accept_confirm">Yes</a>
                  <button type="button" class="btn btn-danger si_accept_cancel" data-bs-dismiss="modal">Cancel</button>
               </div>
            </div>
         </div>
      </div>