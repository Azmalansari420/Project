<!DOCTYPE html>
<html lang="en">
   <title>View <?=$page_title ?></title>
   <?php $this->load->view('admin/include/allcss') ?>
   <body>
      <div id="app" class="app app-header-fixed app-sidebar-fixed">
         <?php $this->load->view('admin/include/topbar') ?>
         <?php $this->load->view('admin/include/sidebar') ?>
         <div id="content" class="app-content">
            <h1 class="page-header add-header">View <?=$page_title ?> </h1>
            <form class="row" method="post" enctype="multipart/form-data" action="#">
               <div class="col-lg-8">
                  <div class="card m-b-15">
                     <div class="row card-body">
                        <div class="col-3 form-group">
                           <label>Request ID </label>
                           <input type="text" class="form-control" name="title" value="<?=$EDITDATA[0]->requestid ?>" disabled>
                        </div>

                        <div class="col-3 form-group">
                           <label>Vendor Name </label>
                           <input type="text" class="form-control" name="sub_title" value="<?=getname($EDITDATA[0]->vendor_id) ?>" disabled>
                        </div>
                        <div class="col-3 form-group">
                           <label>Dealer Name </label>
                           <input type="text" class="form-control" name="sub_title" value="<?=getname($EDITDATA[0]->dealer_id) ?>" disabled>
                        </div>

                        <div class="col-3 form-group">
                           <label>User </label>
                           <input type="text" class="form-control" name="sub_title" value="<?=getname($EDITDATA[0]->user_id) ?>" disabled>
                        </div>

                        <div class="col-3 form-group">
                           <label>Name </label>
                           <input type="text" class="form-control" name="sub_title" value="<?=($EDITDATA[0]->username) ?>" disabled>
                        </div>
                        
                        <div class="col-3 form-group">
                           <label>Email </label>
                           <input type="text" class="form-control" name="sub_title" value="<?=($EDITDATA[0]->email) ?>" disabled>
                        </div>
                        
                        <div class="col-3 form-group">
                           <label>Mobile </label>
                           <input type="text" class="form-control" name="sub_title" value="<?=($EDITDATA[0]->mobile) ?>" disabled>
                        </div>
                        
                        <div class="col-3 form-group">
                           <label>Pincode </label>
                           <input type="text" class="form-control" name="sub_title" value="<?=($EDITDATA[0]->pincode) ?>" disabled>
                        </div>
                        
                        <div class="col-12 form-group">
                           <label>Plan Name </label>
                           <input type="text" class="form-control" name="sub_title" value="<?=($EDITDATA[0]->plan_name) ?>" disabled>
                        </div>
                        <div class="col-4 form-group">
                           <label>Plan Price </label>
                           <input type="text" class="form-control" name="sub_title" value="<?=($EDITDATA[0]->plan_price) ?>" disabled>
                        </div>
                        <div class="col-4 form-group">
                           <label>GST </label>
                           <input type="text" class="form-control" name="sub_title" value="<?=($EDITDATA[0]->gst) ?>" disabled>
                        </div>
                        <div class="col-4 form-group">
                           <label>Payable Amount </label>
                           <input type="text" class="form-control" name="sub_title" value="<?=($EDITDATA[0]->final_amt) ?>" disabled>
                        </div>

                        
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="card m-b-15">
                     <div class="row card-body">

                        <div class="col-12 form-group">
                           <label>Purchase Date </label>
                           <input type="text" class="form-control" name="sub_title" value="<?=($EDITDATA[0]->purchase_date) ?>" disabled>
                        </div>

                        <div class="col-12 form-group">
                           <label>Expirey  Date </label>
                           <input type="text" class="form-control" name="sub_title" value="<?=($EDITDATA[0]->expirey_date) ?>" disabled>
                        </div>
                        

                       <!--  <div class="col-12 form-group m-b-0">
                           <label>Select Status</label>
                           <select class=" form-control" required name="status" disabled>
                              <option value="1"  <?php if($EDITDATA[0]->status==1)echo 'selected'; ?>>Show</option>
                              <option value="0" <?php if($EDITDATA[0]->status==0)echo 'selected'; ?>>Hide</option>
                           </select>
                        </div> -->
                       
                     </div>
                  </div>
               </div>
            </form>
         </div>
         <a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
      </div>
      <?php $this->load->view('admin/include/theams') ?>
      <?php $this->load->view('admin/include/allscript') ?>
   </body>
</html>