<?php 
	$this->load->view('vendor/include/header');
	$this->load->view('vendor/include/sidebar');
?>

         <div class="page-wrapper">

            <form class="content container-fluid" method="post" action="" enctype="multipart/form-data">
               <div class="page-header">
                  <div class="row">
                     <div class="col-sm-12">
                        <h3 class="page-title">Add <?php echo $page_title; ?></h3>
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                           <li class="breadcrumb-item active">Add <?php echo $page_title; ?></li>
                        </ul>
                     </div>
                  </div>
               </div>

               <div class="row">
                  <div class="col-sm-8">
                     <div class="card">
                        <div class="card-body custom-edit-service">
                           <div class="service-fields mb-3">
                              <div class="row">

                                 <div class="col-lg-6">
                                    <div class="mb-3">
                                       <label class="mb-2">Name<span class="text-danger">*</span></label>
                                       <input class="form-control" type="text" name="username" id="name" required="">
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="mb-3">
                                       <label class="mb-2">Mobile</label>
                                       <input class="form-control" type="text" name="mobile" id="mobile" required>
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="mb-3">
                                       <label class="mb-2">Email</label>
                                       <input class="form-control" type="text" name="email" id="email" required>
                                    </div>
                                 </div>

                                 <div class="col-lg-6">
                                    <div class="mb-3">
                                       <label class="mb-2">Password</label>
                                       <input class="form-control" type="text" name="password" id="email" required>
                                    </div>
                                 </div>

                                 <div class="col-lg-6">
                                    <div class="mb-3">
                                       <label class="mb-2">Aadhar No</label>
                                       <input class="form-control" type="text" name="aadharno" id="degree" >
                                    </div>
                                 </div>

                                 <div class="col-lg-6">
                                    <div class="mb-3">
                                       <label class="mb-2">Pan Card No</label>
                                       <input class="form-control" type="text" name="pancardno" id="address" >
                                    </div>
                                 </div>   


                                 <div class="col-lg-4">
                                    <div class="mb-3">
                                       <label class="mb-2">Pincode</label>
                                       <input class="form-control" type="text" name="pincode" id="pincode" required>
                                    </div>
                                 </div>
                                 <div class="col-lg-4">
                                    <div class="mb-3">
                                       <label class="mb-2">State</label>
                                       <input class="form-control" type="text" name="state_id" id="state" readonly>
                                    </div>
                                 </div>
                                 <div class="col-lg-4">
                                    <div class="mb-3">
                                       <label class="mb-2">City</label>
                                       <input class="form-control" type="text" name="city_id" id="city" readonly>
                                    </div>
                                 </div>                           
                                 
                                 
                                 <div class="col-lg-12">
                                    <div class="mb-3">
                                       <label class="mb-2">Address <span class="text-danger">*</span></label>
                                       <textarea class="form-control service-desc" name="address"></textarea>
                                    </div>
                                 </div>
                                 

                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="card">
                        <div class="card-body custom-edit-service">
                              <div class="service-fields mb-3">
                                 <div class="row">

                                    <div class="col-lg-12">
                                       <div class="service-upload">
                                          <i class="fas fa-cloud-upload-alt"></i>
                                          <span>Upload User Images *</span>
                                          <input type="file" name="image" accept="image/jpeg, image/png, image/gif" >
                                       </div>
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="service-upload">
                                          <i class="fas fa-cloud-upload-alt"></i>
                                          <span>Upload invoice Images *</span>
                                          <input type="file" name="invoice_image" accept="image/jpeg, image/png, image/gif">
                                       </div>
                                    </div>

                                    <div class="col-lg-12">
                                       <div class="service-upload">
                                          <i class="fas fa-cloud-upload-alt"></i>
                                          <span>Upload KYC Images *</span>
                                          <input type="file" name="kyc_image" accept="image/jpeg, image/png, image/gif">
                                       </div>
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="service-upload">
                                          <i class="fas fa-cloud-upload-alt"></i>
                                          <span>Upload Aadhar Images *</span>
                                          <input type="file" name="aadhar_image" accept="image/jpeg, image/png, image/gif">
                                       </div>
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="service-upload">
                                          <i class="fas fa-cloud-upload-alt"></i>
                                          <span>Upload PAN CARD Images *</span>
                                          <input type="file" name="upload_pancard" accept="image/jpeg, image/png, image/gif">
                                       </div>
                                    </div>

                                    <div class="col-lg-12">
                                       <div class="mb-3">
                                          <label class="mb-2">Select Status <span class="text-danger">*</span></label>
                                          <select class="form-select form-control" name="status" required="">
                                             <option value="1" selected>Show</option>
                                             <option value="0">Hide</option>
                                            
                                          </select>
                                       </div>
                                    </div>

                                    
                                 </div>
                              </div>
                              
                              
                              <div class="submit-section">
                                 <button class="btn btn-primary submit-btn" type="submit" name="submit" value="submit">Submit</button>
                              </div>

                        </div>

                     </div>
                  </div>
               </div>


            </form>


         </div>
<?php	$this->load->view('vendor/include/footer');  ?>

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

