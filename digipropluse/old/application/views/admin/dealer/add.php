<!DOCTYPE html>
<html lang="en">
<title>Add <?=$page_title ?></title>
   <?php $this->load->view('admin/include/allcss') ?>
   <body>
      <div id="app" class="app app-header-fixed app-sidebar-fixed">
         <?php $this->load->view('admin/include/topbar') ?>
         <?php $this->load->view('admin/include/sidebar') ?>
         <div id="content" class="app-content">
            <h1 class="page-header add-header">Add <?=$page_title ?> </h1>
            <form class="row" method="post" enctype="multipart/form-data" action="#">
               <div class="col-lg-8">
                  <div class="card m-b-15">
                     <div class="row card-body">
                        <div class="col-4 form-group">
                           <label>Username </label>
                           <input type="text" class="form-control" name="username" >
                        </div>

                        <div class="col-4 form-group">
                           <label>Mobile </label>
                           <input type="text" class="form-control" name="mobile">
                        </div>

                        <div class="col-4 form-group">
                           <label>Email </label>
                           <input type="text" class="form-control" name="email">
                        </div>

                        

                        <div class="col-4 form-group">
                           <label>Password </label>
                           <input type="text" class="form-control" name="password" >
                        </div>



                        <div class="col-8 form-group">
                           <label>Address </label>
                           <input type="text" class="form-control" name="address" >
                        </div>

                        <div class="col-4 form-group">
                           <label>Pincode </label>
                           <input type="text" class="form-control" name="pincode"  id="pincode" required>
                        </div>

                        <div class="col-4 form-group">
                           <label>State </label>
                           <input type="text" class="form-control" name="state_id"  id="state" required readonly>
                        </div>

                        <div class="col-4 form-group">
                           <label>City </label>
                           <input type="text" class="form-control" name="city_id" id="city" required readonly>
                        </div>
                        


                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="card m-b-15">
                     <div class="row card-body">

                        <div class="col-12 form-group">
                           <label>Wallet </label>
                           <input type="text" class="form-control" name="wallet" >
                        </div>

                        <div class="col-6 form-group">
                           <label>Click to Upload Image</label>
                           <input type="file" id="image-input" class="form-control" name="image">
                           <img id="image-preview" src="" alt="Image Preview" width="100px" style="display:none;">
                        </div>
                      
                        <div class="col-12 form-group m-b-0">
                           <label>Select Status</label>
                           <select class=" form-control" required name="status">
                              <option value="1" selected>Show</option>
                              <option value="0">Hide</option>
                           </select>
                        </div>

                        <div class="col-12 form-group mt-4">
                           <button type="submit" name="submit" class="btn btn-purple">Add <?=$page_title ?></button>
                        </div>
                     </div>
                  </div>
               </div>
            </form>
         </div>
         <a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
      </div>
      <?php $this->load->view('admin/include/theams') ?>
      <?php $this->load->view('admin/include/allscript') ?>


<script>
   $(document).ready(function() {
       $('#pincode').on('keyup', function() {
           var pincode = $(this).val();
           
           if (pincode.length === 6) { // Ensure pincode has 6 digits
               $.ajax({
                   url: "<?= base_url('PincodeController/get_location'); ?>", 
                   type: "POST",
                   data: { pincode: pincode },
                   dataType: "json",
                   success: function(response) {
                       if (response.success) {
                           $('#state').val(response.state);
                           $('#city').val(response.city);
                       } else {
                           $('#state').val('');
                           $('#city').val('');
                       }
                   }
               });
           } else {
               $('#state').val('');
               $('#city').val('');
           }
       });
   });
</script>







   </body>
</html>