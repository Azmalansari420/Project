<?php 
	$this->load->view('users/include/header');
	$this->load->view('users/include/sidebar');
?>

         <div class="page-wrapper">

            <form class="content container-fluid" method="post" action="" enctype="multipart/form-data">
               <div class="page-header">
                  <div class="row">
                     <div class="col-sm-12">
                        <h3 class="page-title">View <?php echo $page_title; ?></h3>
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                           <li class="breadcrumb-item active">View <?php echo $page_title; ?></li>
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
                                       <label class="mb-2">Request ID<span class="text-danger">*</span></label>
                                       <input class="form-control" type="text" name="username" id="name" required="" value="<?php echo $EDITDATA[0]->requestid; ?>">
                                    </div>
                                 </div>

                        
                                 <div class="col-lg-6">
                                    <div class="mb-3">
                                       <label class="mb-2">User</label>
                                       <input class="form-control" type="text" name="mobile" id="mobile" required value="<?=getname($EDITDATA[0]->user_id) ?>">
                                    </div>
                                 </div>

                                 <div class="col-lg-6">
                                    <div class="mb-3">
                                       <label class="mb-2">Name</label>
                                       <input class="form-control" type="text" name="email" id="email" required value="<?php echo $EDITDATA[0]->username; ?>">
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
                                       <label class="mb-2">Mobile</label>
                                       <input class="form-control" type="text" name="password" id="email" required value="<?php echo $EDITDATA[0]->mobile; ?>">
                                    </div>
                                 </div>                               

                                 <div class="col-lg-6">
                                    <div class="mb-3">
                                       <label class="mb-2">Pincode</label>
                                       <input class="form-control" type="text" name="pincode" id="pincode" required value="<?php echo $EDITDATA[0]->pincode; ?>">
                                    </div>
                                 </div>

                                 <div class="col-lg-6">
                                    <div class="mb-3">
                                       <label class="mb-2">Plan Name</label>
                                       <input class="form-control" type="text" name="state_id" id="state" readonly value="<?php echo $EDITDATA[0]->plan_name; ?>">
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="mb-3">
                                       <label class="mb-2">Plan Price </label>
                                       <input class="form-control" type="text" name="city_id" id="city" readonly value="<?php echo $EDITDATA[0]->plan_price; ?>">
                                    </div>
                                 </div> 
                                 <div class="col-lg-6">
                                    <div class="mb-3">
                                       <label class="mb-2">GST </label>
                                       <input class="form-control" type="text" name="city_id" id="city" readonly value="<?php echo $EDITDATA[0]->gst; ?>">
                                    </div>
                                 </div>     
                                 <div class="col-lg-6">
                                    <div class="mb-3">
                                       <label class="mb-2">Payable Amount </label>
                                       <input class="form-control" type="text" name="city_id" id="city" readonly value="<?php echo $EDITDATA[0]->final_amt; ?>">
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
                                       <div class="mb-3">
                                          <label class="mb-2">Purchase Date </label>
                                          <input class="form-control" type="text" name="city_id" id="city" readonly value="<?php echo $EDITDATA[0]->purchase_date; ?>">
                                       </div>
                                    </div>     
                                    <div class="col-lg-12">
                                       <div class="mb-3">
                                          <label class="mb-2">Expirey  Date </label>
                                          <input class="form-control" type="text" name="city_id" id="city" readonly value="<?php echo $EDITDATA[0]->expirey_date; ?>">
                                       </div>
                                    </div>                           
                                    

                                     <div class="col-lg-12">
                                       <div class="mb-3">
                                          <label class="mb-2">Status </label>
                                          <input class="form-control" type="text" name="city_id" id="city" readonly value="<?php echo planstatus($EDITDATA[0]->status); ?>">
                                       </div>
                                    </div>     
                                   

                               
                                    <!-- <div class="col-lg-12">
                                       <div class="mb-3">
                                          <label class="mb-2">Select Status <span class="text-danger">*</span></label>
                                          <select class="form-select form-control" name="status" required="">
                                             <option value="1" <?php if($EDITDATA[0]->status==1)echo 'selected'; ?>>Show</option>
                                             <option value="0" <?php if($EDITDATA[0]->status==0)echo 'selected'; ?>>Hide</option>
                                          </select>
                                       </div>
                                    </div> -->

                                    
                                 </div>
                              </div>
                              
                              <!-- 
                              <div class="submit-section">
                                 <button class="btn btn-primary submit-btn" type="submit" name="submit" value="submit">Submit</button>
                              </div> -->

                        </div>

                     </div>
                  </div>
               </div>


            </form>


         </div>
<?php	$this->load->view('users/include/footer');  ?>
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

