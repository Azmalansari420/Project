<?php
session_start();

if (!isset($_SESSION['form_data'])) {
    echo "No data found. Please fill out the form first.";
    exit();
}

$form_data = $_SESSION['form_data'];
?>
<!DOCTYPE html>
<html dir="ltr" lang="zxx">
   <head>
      <meta name="viewport" content="width=device-width,initial-scale=1.0" />
      <meta charset="utf-8" />
      <meta property="og:title" content="GeM Registration Services - India Registration Online">
      <meta property="og:description" content="Get your business registered on the Government e-Marketplace (GeM) portal with our expert services.">
      <meta property="og:image" content="https://indiaregistrationonline.org/img/logo/gem.png">
      <meta property="og:url" content="https://indiaregistrationonline.org/">
      <meta property="og:type" content="website">
      <meta name="twitter:card" content="summary_large_image">
      <meta name="twitter:title" content="GeM Registration Services - India Registration Online">
      <meta name="twitter:description" content="Get your business registered on the Government e-Marketplace (GeM) portal with our expert services.">
      <meta name="twitter:image" content="https://indiaregistrationonline.org/img/logo/gem.png">
      <meta name="twitter:url" content="https://indiaregistrationonline.org/">
       <title>Gatway To Success | View Application</title>
      <!-- Start Include Main Css -->
      <?php include"include/maincss.php";?>
      <!-- End Include Main Css -->
   </head>
   <body>
      <!-- Start Include Header -->
      <?php include"include/header.php";?>
      <!-- End Include Header -->
      <!-- Page Header Start !-->
      <div class="page-breadcrumb-area page-bg">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="breadcrumb-wrapper">
                     <div class="page-heading">
                        <h2 class="page-title">Catalogue service</h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Page Header End !-->
      <!-- Contact Form Section Start -->
      <div class="contact-form-area">
         <!-- Submit form Start -->
         <div class="container">
            <form id="main-form" method="post" role="form" >

              <input type="hidden" name="name" value="<?php echo htmlspecialchars($form_data['name']); ?>">
               <input type="hidden" name="mobile" value="<?php echo htmlspecialchars($form_data['mobile']); ?>">
               <input type="hidden" name="email" value="<?php echo htmlspecialchars($form_data['email']); ?>">
               <input type="hidden" name="business_name" value="<?php echo htmlspecialchars($form_data['business_name']); ?>">
               <input type="hidden" name="business_nature" value="<?php echo htmlspecialchars($form_data['business_nature']); ?>">
               <input type="hidden" name="number_of_pro" value="<?php echo htmlspecialchars($form_data['number_of_pro']); ?>">
               <input type="hidden" name="pay_amount" class="pay_amount" value="<?php echo htmlspecialchars($form_data['pay_amount']); ?>">


            <div class="row ">
               <div class="col-lg-12 position-relative">
                  <div class="comment-respond">
                     <div class="formheadings">
                        <h3>G.E.M Account Registration- Seller/Buyer Account
                        </h3>
                     </div>
                     <table class="table borderless-table">
                        <tbody>
                           <tr>
                              <td>Name</td>
                              <td><?php echo htmlspecialchars($form_data['name']); ?></td>
                           </tr>
                           <tr>
                              <td>Contact</td>
                              <td><?php echo htmlspecialchars($form_data['mobile']); ?></td>
                           </tr>
                           <tr>
                              <td>Email</td>
                              <td><?php echo htmlspecialchars($form_data['email']); ?></td>
                           </tr>
                           <tr>
                              <td>Business Name</td>
                              <td><?php echo htmlspecialchars($form_data['business_name']); ?></td>
                           </tr>

                           <tr>
                              <td>Nature Of Business</td>
                              <td><?php echo htmlspecialchars($form_data['business_nature']); ?></td>
                           </tr>
                           
                           <tr>
                              <td>Number Of Products</td>
                              <td><?php echo htmlspecialchars($form_data['number_of_pro']); ?></td>
                           </tr>
                           <tr>
                              <td>Amount</td>
                              <td><?php echo htmlspecialchars($form_data['pay_amount']); ?>/-</td>
                           </tr>
                           <tr>
                              <td colspan="3" style="text-align:center;">
                                 <button type="submit" id="submit-btn" class="theme-btn">
                                 Proceed To Pay 
                                 </button>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>

         </form>
         </div>
         <!-- Submit form End -->
      </div>
      <!-- Contact Form Section End -->
      <!-- Start Include Footer -->
      <?php  include"include/footer.php";?>
      <!-- End Include Footer -->
      <!-- Start Include Main Script -->
      <?php include"include/mainjs.php";?>
      <!-- End Include Main  Script -->
   </body>
</html>


<link href="apisetup/toast/saber-toast.css" rel="stylesheet">
<link href="apisetup/front_css.css" rel="stylesheet">
<script src="apisetup/toast/saber-toast.js"></script>
<script src="apisetup/front_script.js"></script>

<script>
  <?php  
    $base  = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]".str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
  ?>

    var api_url = '<?=$api_url ?>';
    var base_url = '<?=$base ?>';

    // console.log(payable_price);

    $(document).on("click", "#submit-btn",(function(e) {      
      event.preventDefault();
      var data = [];
      var files_name_array = [];
    const final_amount = $(".pay_amount").val();

    console.log(final_amount)


    // const final_amount = 1;

      var form_id = "main-form";


      var form_ok = check_required_fields(form_id);
      if(form_ok!=1) return false;

      loader("show");

      var current_url =  window.location.href;
      var form_name = 'Catelog Service';
      var name = $('input[name="name"]').val();
      var email = $('input[name="email"]').val();
      var mobile = $('input[name="mobile"]').val();


      data.push({"name":"BUSINESS NAME","value":$('input[name="business_name"]').val()});
      // data.push({"name":"STATE)","value":$('input[name="state"]').val()});
      data.push({"name":"NATURE OF BUSINESS)","value":$('input[name="business_nature"]').val()});
      data.push({"name":"NUMBER OF PRODUCTS","value":$('input[name="number_of_pro"]').val()});


    
      

      data = JSON.stringify(data);
      var form = new FormData();




      
      form.append('form_name', form_name); // do not change Mandatory
      form.append('name', name); // do not change Mandatory
      form.append('email', email); // do not change Mandatory
      form.append('mobile', mobile); // do not change Mandatory
      form.append('current_url', current_url); // do not change Mandatory
      form.append('base_url', base_url); // do not change Mandatory
      form.append('hostname', location.hostname); // do not change Mandatory
      form.append('files_name_array', JSON.stringify(files_name_array)); // do not change Mandatory
      form.append('final_amount', final_amount); // do not change Mandatory
      form.append('data', data); // do not change Mandatory

      $(files_name_array).each(function(index, item){
        form.append(item.key, $(`input[name="${item.key}"]`).prop('files')[0]);
      });


      var settings = {
        "url": api_url+"leads/create",
        "method": "POST",
        "timeout": 0,
        "processData": false,
        xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener('progress', function(evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = Math.round((evt.loaded / evt.total) * 100);
                        $('#progressBar').css('width', percentComplete + '%');
                        $('#progressText').text(percentComplete + '%');
                    }
                }, false);
                return xhr;
             },
        "mimeType": "multipart/form-data",
        "contentType": false,
        "dataType": "json",
        "data": form
      };
      $.ajax(settings).always(function (response) {
          loader("hide");
          response = admin_response_data_check(response);
      });
   }));
      


      

</script>