<?php
$requestid = $this->input->get('requestid');
$kycdata = $this->db->get_where('purchase_kyc_details',array('requestid'=>$requestid))->result_object();
?>

<!DOCTYPE html>
<html lang="en">
   <title>View KYC DATA</title>
   <?php $this->load->view('admin/include/allcss') ?>
   <body>
      <div id="app" class="app app-header-fixed app-sidebar-fixed">
         <?php $this->load->view('admin/include/topbar') ?>
         <?php $this->load->view('admin/include/sidebar') ?>
         <div id="content" class="app-content">
            <h1 class="page-header add-header">View KYC DATA </h1>
            <?php
               if(!empty($kycdata))
               { ?>
            <form class="row" method="post" enctype="multipart/form-data" action="#">
               <div class="col-lg-12">
                  <div class="card m-b-15">
                     <div class="row card-body">
                        <div class="col-3 form-group">
                           <label>Request ID </label>
                           <input type="text" class="form-control" name="title" value="<?=$kycdata[0]->requestid ?>" disabled>
                        </div>

                        <div class="col-3 form-group">
                           <label>Username </label>
                           <input type="text" class="form-control" name="sub_title" value="<?=($kycdata[0]->username) ?>" disabled>
                        </div>

                       
                        
                        <div class="col-3 form-group">
                           <label>Email </label>
                           <input type="text" class="form-control" name="sub_title" value="<?=($kycdata[0]->email) ?>" disabled>
                        </div>
                        
                        <div class="col-3 form-group">
                           <label>Mobile </label>
                           <input type="text" class="form-control" name="sub_title" value="<?=($kycdata[0]->mobile) ?>" disabled>
                        </div>
                        
                        <div class="col-3 form-group">
                           <label>DOB </label>
                           <input type="text" class="form-control" name="sub_title" value="<?=($kycdata[0]->userdob) ?>" disabled>
                        </div>
                        
                        <div class="col-12 form-group">
                           <label>Address </label>
                           <input type="text" class="form-control" name="sub_title" value="<?=($kycdata[0]->address) ?>" disabled>
                        </div>

                        <div class="col-4 form-group">
                           <label>Aadhar Front </label>
                           <br>
                           <a href="<?=base_url() ?>media/uploads/<?=$kycdata[0]->adharcard_front ?>">
                              <img src="<?=base_url() ?>media/uploads/<?=$kycdata[0]->adharcard_front ?>" style="width: 100%;">
                           </a>
                        </div>

                        <div class="col-4 form-group">
                           <label>Aadhar Back </label>
                           <br>
                           <a href="<?=base_url() ?>media/uploads/<?=$kycdata[0]->adharcard_back ?>">
                              <img src="<?=base_url() ?>media/uploads/<?=$kycdata[0]->adharcard_back ?>" style="width: 100%;">
                           </a>
                        </div>

                        <div class="col-4 form-group">
                           <label>Pan Card </label>
                           <br>
                           <a href="<?=base_url() ?>media/uploads/<?=$kycdata[0]->pancard ?>">
                              <img src="<?=base_url() ?>media/uploads/<?=$kycdata[0]->pancard ?>" style="width: 100%;">
                           </a>
                        </div>
                        
                        
                        <div class="col-4 form-group">
                           <label>Mobile S/No </label>
                           <input type="text" class="form-control" name="sub_title" value="<?=($kycdata[0]->mobile_sno) ?>" disabled>
                        </div>

                        <div class="col-4 form-group">
                           <label>IMEI No </label>
                           <input type="text" class="form-control" name="sub_title" value="<?=($kycdata[0]->imei_no) ?>" disabled>
                        </div>

                        <div class="col-4 form-group">
                           <label>Device Info </label>
                           <br>
                           <a href="<?=base_url() ?>media/uploads/<?=$kycdata[0]->device_info ?>">
                              <img src="<?=base_url() ?>media/uploads/<?=$kycdata[0]->device_info ?>" style="width: 100%;">
                           </a>
                        </div>

                        
                     </div>
                  </div>
               </div>

            </form>
            <?php } else {?>
            <h2>Not Found!</h2>
            <?php } ?>
         </div>
         <a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
      </div>
      <?php $this->load->view('admin/include/theams') ?>
      <?php $this->load->view('admin/include/allscript') ?>
   </body>
</html>