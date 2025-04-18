<?php 
$hospital = dealer_data();
$user_id = $hospital->id;
$update_wallet_amount = $this->crud->wallet($user_id);
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

                                    <div class="text-center">
                                       <h2>Wallet:- <?=$update_wallet_amount ?></h2>
                                    </div>

                                    <div class="col-lg-12">
                                       <div class="mb-3">
                                          <label class="mb-2">Enter Amount<span class="text-danger">*</span></label>
                                          <input class="form-control w-amount" type="number" name="username" id="name" required="" placeholder="Enter Amount">
                                       </div>
                                    </div>
                                       
                                                                        
                                 </div>
                              </div>
                              
                              
                              <div class="submit-section">
                                 <button class="btn btn-primary submit-btn withdraw-submit-btn" type="button" name="submit" value="submit">Submit</button>
                              </div>

                        </div>

                     </div>
                  </div>
               </div>


            </form>


         </div>
<?php	$this->load->view('dealer/include/footer');  ?>

<script>
    $(document).on("click", ".withdraw-submit-btn",(function(e) {
      withdraw_request();
    }));

    function withdraw_request()
    {
        var amount = $(".w-amount").val();
        
        if(amount=='')
        {
            alert("Enter Amount");
            return false;
        }
        // if(amount<=100)
        // {
        //     toaster("Minimum Amount 100.", 'error');
        //     return false;
        // }
    
        
        var form = new FormData();
        form.append("amount", amount);

        var settings = {
          "url": "<?=base_url() ?>dealer/withdraw/withdraw_request",
          "method": "POST",
          "dataType": "json",
          "timeout": 0,
          "processData": false,
          "mimeType": "multipart/form-data",
          "contentType": false,
          "data": form
        };

        $.ajax(settings).done(function (response) {
          console.log(response);
          alert(response.message);
          if(response.status==200)
          {
            window.location.href= response.url;
          }
        });
    }

</script>

