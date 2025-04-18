<?php 
	$this->load->view('vendor/include/header');
	$this->load->view('vendor/include/sidebar');
?>

         <div class="page-wrapper">

            <form class="content container-fluid" method="post" action="" enctype="multipart/form-data">
               <div class="page-header">
                  <div class="row">
                     <div class="col-sm-12">
                        <h3 class="page-title">Update <?php echo $page_title; ?></h3>
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                           <li class="breadcrumb-item active">Update <?php echo $page_title; ?></li>
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
                                       <input class="form-control" type="text" name="username" id="name" required="" value="<?php echo $EDITDATA[0]->username; ?>">
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="mb-3">
                                       <label class="mb-2">Mobile</label>
                                       <input class="form-control" type="text" name="mobile" id="mobile" required value="<?php echo $EDITDATA[0]->mobile; ?>">
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="mb-3">
                                       <label class="mb-2">Email</label>
                                       <input class="form-control" type="text" name="email" id="email" required value="<?php echo $EDITDATA[0]->email; ?>">
                                    </div>
                                 </div>

                                 <div class="col-lg-6">
                                    <div class="mb-3">
                                       <label class="mb-2">Password</label>
                                       <input class="form-control" type="text" name="password" id="email" required value="<?php echo $EDITDATA[0]->password; ?>">
                                    </div>
                                 </div>

                               

                                 <div class="col-lg-4">
                                    <div class="mb-3">
                                       <label class="mb-2">Pincode</label>
                                       <input class="form-control" type="text" name="pincode" id="pincode" required value="<?php echo $EDITDATA[0]->pincode; ?>">
                                    </div>
                                 </div>
                                 <div class="col-lg-4">
                                    <div class="mb-3">
                                       <label class="mb-2">State</label>
                                       <input class="form-control" type="text" name="state_id" id="state" readonly value="<?php echo $EDITDATA[0]->state_id; ?>">
                                    </div>
                                 </div>
                                 <div class="col-lg-4">
                                    <div class="mb-3">
                                       <label class="mb-2">City</label>
                                       <input class="form-control" type="text" name="city_id" id="city" readonly value="<?php echo $EDITDATA[0]->city_id; ?>">
                                    </div>
                                 </div>                           
                                 
                                 
                                 <div class="col-lg-12">
                                    <div class="mb-3">
                                       <label class="mb-2">Address <span class="text-danger">*</span></label>
                                       <textarea class="form-control service-desc" name="address"><?php echo $EDITDATA[0]->address; ?></textarea>
                                    </div>
                                 </div>


                                 <div class="col-lg-4">
                                    <div class="mb-3">
                                       <label class="mb-2">Bank Name<span class="text-danger">*</span></label>
                                       <input class="form-control" type="text" name="bankname" required="" value="<?php echo $EDITDATA[0]->bankname; ?>">
                                    </div>
                                 </div>
                                 <div class="col-lg-4">
                                    <div class="mb-3">
                                       <label class="mb-2">Bank IFSC<span class="text-danger">*</span></label>
                                       <input class="form-control" type="text" name="bankifcs" required="" value="<?php echo $EDITDATA[0]->bankifcs; ?>">
                                    </div>
                                 </div>
                                 <div class="col-lg-4">
                                    <div class="mb-3">
                                       <label class="mb-2">Bank A/C<span class="text-danger">*</span></label>
                                       <input class="form-control" type="text" name="bankac" required="" value="<?php echo $EDITDATA[0]->bankac; ?>">
                                    </div>
                                 </div>

                                 <div class="col-lg-4">
                                    <div class="mb-3">
                                       <label class="mb-2">Firm Name<span class="text-danger">*</span></label>
                                       <input class="form-control" type="text" name="firmname" required="" value="<?php echo $EDITDATA[0]->firmname; ?>">
                                    </div>
                                 </div>
                                 <div class="col-lg-4">
                                    <div class="mb-3">
                                       <label class="mb-2">Lat<span class="text-danger">*</span></label>
                                       <input class="form-control" type="text" name="lat_no" required="" value="<?php echo $EDITDATA[0]->lat_no; ?>">
                                    </div>
                                 </div>
                                 <div class="col-lg-4">
                                    <div class="mb-3">
                                       <label class="mb-2">Long<span class="text-danger">*</span></label>
                                       <input class="form-control" type="text" name="long_no" required="" value="<?php echo $EDITDATA[0]->long_no; ?>">
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
                                          <img id="blah" src="<?php echo base_url($upload_path); ?><?php echo $EDITDATA[0]->image; ?>" class="img-fluid">

                                          <input  type="hidden" class="form-control" name="oldimage" value="<?php echo $EDITDATA[0]->image; ?>">
                                          <input type="file" name="image" accept="image/jpeg, image/png, image/gif">
                                       </div>
                                    </div>

                               
                                    <div class="col-lg-12">
                                       <div class="mb-3">
                                          <label class="mb-2">Select Status <span class="text-danger">*</span></label>
                                          <select class="form-select form-control" name="status" required="">
                                             <option value="1" <?php if($EDITDATA[0]->status==1)echo 'selected'; ?>>Show</option>
                                             <option value="0" <?php if($EDITDATA[0]->status==0)echo 'selected'; ?>>Hide</option>
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

