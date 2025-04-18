<?php 
$hospital = dealer_data();



// print_r($hospital);
// die;
include('include/header.php'); ?>

         <?php include('include/sidebar.php'); ?>
<style>
   .dash-count {
       font-size: 18px;
       margin-left: 0;
   }
   .dash-widget-header {
       align-items: center;
       display: flex;
       margin-bottom: 0;
       justify-content: center;
   }
   .sdsdds {
    padding: 1.5rem;
    border: 3px solid black;
}
</style>

         <div class="page-wrapper">
            <div class="content container-fluid">
               <div class="page-header">
                  <div class="row">
                     <div class="col-sm-12">
                        <h3 class="page-title">Welcome <?=$ambulance->username ?>!</h3>
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                     </div>
                  </div>
               </div>

               <div class="row">

                  <a href="<?=base_url('dealer/users/listing') ?>" class="col-xl-3 col-sm-6 col-12">
                     <div class="card">
                        <div class="card-body sdsdds">
                           <div class="dash-widget-header">
                              <div class="dash-count">
                                 <h3>Total Users</h3>
                                 <h5 style="text-align: center;">
                                    <?php
                                    $this->db->where('dealer_id',$hospital->id);
                                    $vendor =  $this->db->count_all_results('registration');
                                    
                                    ?>
                                 <?=$vendor ?></h5>
                              </div>
                           </div>
                          
                        </div>
                     </div>
                  </a>

                  <a href="<?=base_url('dealer/users/listing') ?>" class="col-xl-3 col-sm-6 col-12">
                     <div class="card">
                        <div class="card-body sdsdds">
                           <div class="dash-widget-header">
                              <div class="dash-count">
                                 <h3>Purchase List</h3>
                                 <h5 style="text-align: center;">
                                    <?php
                                    $this->db->where('dealer_id',$hospital->id);
                                    $vendor =  $this->db->count_all_results('plan_purchase');
                                    
                                    ?>
                                 <?=$vendor ?></h5>
                              </div>
                           </div>
                          
                        </div>
                     </div>
                  </a>
                  
                  <a href="<?=base_url('dealer/dealer_enquiry/listing') ?>" class="col-xl-3 col-sm-6 col-12">
                     <div class="card">
                        <div class="card-body sdsdds">
                           <div class="dash-widget-header">
                              <div class="dash-count">
                                 <h3>Enquiry List</h3>
                                 <h5 style="text-align: center;">
                                    <?php
                                    $this->db->where('dealer_id',$hospital->id);
                                    $vendor =  $this->db->count_all_results('dealer_enquiry');
                                    
                                    ?>
                                 <?=$vendor ?></h5>
                              </div>
                           </div>
                          
                        </div>
                     </div>
                  </a>

                  <a href="<?=base_url('dealer/dealer_enquiry/listing') ?>" class="col-xl-3 col-sm-6 col-12">
                     <div class="card">
                        <div class="card-body sdsdds">
                           <div class="dash-widget-header">
                              <div class="dash-count">
                                 <h3>My History</h3>
                                 <h5 style="text-align: center;">
                                    <?php
                                    $this->db->where('user_id',$hospital->id);
                                    $vendor =  $this->db->count_all_results('user_history');
                                    ?>
                                 <?=$vendor ?></h5>
                              </div>
                           </div>
                          
                        </div>
                     </div>
                  </a>

                  <a href="<?=base_url('dealer/purchase_list/add') ?>" class="col-xl-3 col-sm-6 col-12">
                     <div class="card">
                        <div class="card-body sdsdds">
                           <div class="dash-widget-header">
                              <div class="dash-count">
                                 <h3>New Purchase</h3>
                                 
                              </div>
                           </div>
                          
                        </div>
                     </div>
                  </a>

                  
                  
               </div>


               
               <div class="row">
                  <div class="col-md-12">
                     <div class="card card-table">
                        <div class="card-header">
                           <h4 class="card-title">Latest Purchase List</h4>
                        </div>
                        <div class="card-body">
                           <div class="table-responsive">
                              <table class="table table-hover table-center mb-0">
                                 <thead>
                                    <tr>
                                       <th>#</th>
                                       <th>Request ID</th>
                                       <th>User</th>
                                       <th>Bill Info</th>
                                       <th>Plan Name</th>
                                       <th>Payable Amount</th>
                                       <th>Status</th>
                                       <!-- <th>Action</th> -->
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                    $i=0;
                                    $this->db->order_by("id desc");
                                    $ALLDATA = $this->crud->selectDataByMultipleWhere('plan_purchase',array('dealer_id'=>$hospital->id));
                                    foreach ($ALLDATA as $key => $data) 
                                       {  $i++;   ?>

                                    <tr>
                                       <td><?=$i ?></td>
                                       <td><?=$data->requestid ?></td>
                                       
                                       <td><?=getname($data->user_id) ?></td>
                                       <td>
                                          Name:- <?=$data->username ?><br>
                                            Mobile:- <?=$data->mobile ?><br>
                                            Email:- <?=$data->email ?><br>
                                            Pincode:- <?=$data->pincode ?>
                                       </td>
                                       <td><?=planname($data->plan_id) ?></td>
                                       <td><?=$data->final_amt ?></td>

                                       <td><?=planstatus($data->status) ?></td>
                                       
                                       
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

<?php include('include/footer.php'); ?> 