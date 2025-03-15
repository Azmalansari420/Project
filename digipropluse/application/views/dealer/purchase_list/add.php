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
                  <div class="col-sm-6">
                     <div class="card">
                        <div class="card-body custom-edit-service">
                           <div class="service-fields mb-3">
                              <div class="row">

                                 <div class="col-lg-6">
                                    <div class="mb-3">
                                       <label class="mb-2">Select User<span class="text-danger">*</span></label>
                                       <select class="form-select form-control" name="user_id" required="">
                                          <?php
                                          $hospital = dealer_data();
                                          $user = $this->db->get_where('registration',array('status'=>1,'role'=>3,'dealer_id'=>$hospital->id))->result_object();
                                          foreach ($user as $key => $value) 
                                             { ?>
                                             <option value="<?=$value->id ?>"><?=$value->username ?></option>
                                             <?php } ?>
                                       </select>
                                    </div>
                                 </div>

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

                                 <div class="col-lg-4">
                                    <div class="mb-3">
                                       <label class="mb-2">Pincode</label>
                                       <input class="form-control" type="text" name="pincode" id="pincode" required>
                                    </div>
                                 </div>                                
                                 

                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="card">
                        <div class="card-body custom-edit-service">
                              <div class="service-fields mb-3">
                                 <div class="row">

                                    <div class="col-lg-6">
                                       <div class="mb-3">
                                          <label class="mb-2">Select Product<span class="text-danger">*</span></label>
                                          <select class="form-select form-control" name="product_id" required="" id="product-list">
                                             <option selected>Select Product</option>
                                             <?php
                                             $user = $this->db->get_where('product',array('status'=>1,))->result_object();
                                             foreach ($user as $key => $value) 
                                                { ?>
                                                <option value="<?=$value->id ?>"><?=$value->name ?></option>
                                                <?php } ?>
                                          </select>
                                       </div>
                                    </div>



                                    <div class="col-lg-6">
                                       <div class="mb-3">
                                          <label class="mb-2">Device/Brand<span class="text-danger">*</span></label>
                                          <select class="form-select form-control" name="device_id" required="" id="device">
                                          </select>
                                       </div>
                                    </div>

                                    <div class="col-lg-6">
                                       <div class="mb-3">
                                          <label class="mb-2">Purchase date (DD/MM/YYYY)*</label>
                                          <input class="form-control" type="date" name="purchase_date"  required>
                                       </div>
                                    </div> 
                                    <div class="col-lg-6">
                                       <div class="mb-3">
                                          <label class="mb-2">How much did you purchase it for?*</label>
                                          <input class="form-control" type="text" name="price"  required>
                                       </div>
                                    </div>

                                    <div class="col-lg-6">
                                       <div class="mb-3">
                                          <label class="mb-2">Select Plans<span class="text-danger">*</span></label>
                                          <select class="form-select form-control" name="plan_id" required="" id="plan-list">
                                             
                                          </select>
                                       </div>
                                    </div> 

                                    <input type="hidden" name="hidden_plan_id" id="hidden_plan_id">


                                    <div class="col-lg-6">
                                       <div class="mb-3">
                                          <label class="mb-2">Total Amount</label>
                                          <input class="form-control" type="text" name="final_amt"  required>
                                       </div>
                                    </div>

                                    <div class="col-lg-6">
                                       <div class="mb-3">
                                          <label class="mb-2">GST</label>
                                          <input class="form-control" type="text" name="gst"  value="18" readonly>
                                       </div>
                                    </div>

                                    <div class="col-lg-6">
                                       <div class="mb-3">
                                          <label class="mb-2">Payable Amount</label>
                                          <input class="form-control" type="text" name="payable_amt"   readonly>
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



    $(document).ready(function () {
            $("#product-list").change(function () {
               var p_id = $(this).val();
               if (p_id) {
                  $.ajax({
                     url: "<?= base_url('dealer/purchase_list/get_device') ?>",
                     type: "POST",
                     data: { p_id: p_id },
                     dataType: "json",
                     success: function (data) {
                        $("#device").empty();
                        $("#device").append('<option selected>Select Device</option>');
                        $.each(data, function (key, value) {
                           $("#device").append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                     }
                  });
               } else {
                  $("#device").html('<option selected>Select Device</option>');
               }
            });
         });


    /*plan details*/
       $(document).ready(function () {
             // Product change event
             $("#product-list").change(function () {
                 var p_id = $(this).val();
                 if (p_id) {
                     $.ajax({
                         url: "<?= base_url('dealer/purchase_list/get_plansperce') ?>",
                         type: "POST",
                         data: { p_id: p_id },
                         dataType: "json",
                         success: function (response) {
                             if (response.status === "200") {
                                 $("#plan-list").html(response.data);
                             } else {
                                 $("#plan-list").html('<option disabled selected>No Plans Available</option>');
                             }
                         },
                         error: function () {
                             alert("Error fetching data. Please try again.");
                         }
                     });
                 } else {
                     $("#plan-list").html('<option disabled selected>Select Plans</option>');
                 }
             });

             // Plan selection event - Hidden input field me data-plan_id store karega
             $("#plan-list").change(function () {
                 var selectedOption = $(this).find(":selected"); // Get selected option
                 var planId = selectedOption.data("plan_id"); // Get data-plan_id value

                 // Hidden input field update kare
                 $("#hidden_plan_id").val(planId);
             });
         });






       $(document).ready(function () {
    // Jab price ya plan change ho to final amount aur payable amount calculate kare
    $("input[name='price'], #plan-list").on("input change", function () {
        var price = parseFloat($("input[name='price']").val()) || 0; // User ka entered price
        var planPercentage = parseFloat($("#plan-list").val()) || 0; // Selected plan percentage
        
        // Plan Percentage ka calculation
        var additionalAmount = (price * planPercentage) / 100;
        var finalAmount = additionalAmount; // Final amount with added percentage
        // var finalAmount = price + additionalAmount; // Final amount with added percentage

        // 18% GST ka calculation
        var gstAmount = (finalAmount * 18) / 100;
        var payableAmount = finalAmount + gstAmount; // Final amount including GST

        // Final Amount ko update kare
        $("input[name='final_amt']").val(finalAmount);

        // Payable Amount (including 18% GST) update kare
        $("input[name='payable_amt']").val(payableAmount);
    });
});




</script>

