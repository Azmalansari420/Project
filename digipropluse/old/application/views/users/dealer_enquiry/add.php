<?php 
	$this->load->view('dealer/include/header');
	$this->load->view('dealer/include/sidebar');
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
                  <div class="col-sm-12">
                     <div class="card">
                        <div class="card-body custom-edit-service">
                           <div class="service-fields mb-3">
                              <div class="row">

                                 <div class="col-lg-12">
                                    <div class="mb-3">
                                       <label class="mb-2">Subject<span class="text-danger">*</span></label>
                                       <input class="form-control" type="text" name="subject" id="name" required="">
                                    </div>
                                 </div>
                                 
                                 <div class="col-lg-12">
                                    <div class="mb-3">
                                       <label class="mb-2">Message <span class="text-danger">*</span></label>
                                       <textarea class="form-control service-desc" name="message"></textarea>
                                    </div>
                                 </div>


                                
                                 <div class="submit-section">
                                    <button class="btn btn-primary submit-btn" type="submit" name="submit" value="submit">Submit</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                
               </div>


            </form>


         </div>
<?php	$this->load->view('dealer/include/footer');  ?>

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

