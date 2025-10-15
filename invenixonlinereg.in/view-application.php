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
                        <h2 class="page-title">G.E.M Account Registration- Seller/Buyer Account</h2>
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
               <input type="hidden" name="dob" value="<?php echo htmlspecialchars($form_data['dob']); ?>">
               <input type="hidden" name="bussiness_name" value="<?php echo htmlspecialchars($form_data['bussiness_name']); ?>">
               <input type="hidden" name="type_of_organisation" value="<?php echo htmlspecialchars($form_data['type_of_organisation']); ?>">
               <input type="hidden" name="business_start_date" value="<?php echo htmlspecialchars($form_data['business_start_date']); ?>">
               <input type="hidden" name="business_deals_in_ps" value="<?php echo htmlspecialchars($form_data['business_deals_in_ps']); ?>">
               <input type="hidden" name="busine_offadd" value="<?php echo htmlspecialchars($form_data['busine_offadd']); ?>">
               <input type="hidden" name="pincode" value="<?php echo htmlspecialchars($form_data['pincode']); ?>">
               <input type="hidden" name="state" value="<?php echo htmlspecialchars($form_data['state']); ?>">
               <input type="hidden" name="distric" value="<?php echo htmlspecialchars($form_data['distric']); ?>">


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
                              <td>Date of Birth</td>
                              <td><?php echo htmlspecialchars($form_data['dob']); ?></td>
                           </tr>
                           <tr>
                              <td>Business Name</td>
                              <td><?php echo htmlspecialchars($form_data['bussiness_name']); ?></td>
                           </tr>
                           <tr>
                              <td>Type of Organisation</td>
                              <td><?php echo htmlspecialchars($form_data['type_of_organisation']); ?></td>
                           </tr>
                           <tr>
                              <td>Business Start Date</td>
                              <td><?php echo htmlspecialchars($form_data['business_start_date']); ?></td>
                           </tr>
                           <tr>
                              <td>Business Deals In</td>
                              <td><?php echo htmlspecialchars($form_data['business_deals_in_ps']); ?></td>
                           </tr>
                           <tr>
                              <td>Business Office Address</td>
                              <td><?php echo htmlspecialchars($form_data['busine_offadd']); ?></td>
                           </tr>
                           <tr>
                              <td>Pincode</td>
                              <td><?php echo htmlspecialchars($form_data['pincode']); ?></td>
                           </tr>
                           <tr>
                              <td>State</td>
                              <td><?php echo htmlspecialchars($form_data['state']); ?></td>
                           </tr>
                           <tr>
                              <td>District</td>
                              <td><?php echo htmlspecialchars($form_data['distric']); ?></td>
                           </tr>
                           <tr>
                              <td>Amount</td>
                              <td>2999/-</td>
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
    const final_amount = 2999;

      var form_id = "main-form";


      var form_ok = check_required_fields(form_id);
      if(form_ok!=1) return false;

      loader("show");

      var current_url =  window.location.href;
      var form_name = 'G.E.M Registration Information Form';
      var name = $('input[name="name"]').val();
      var email = $('input[name="email"]').val();
      var mobile = $('input[name="mobile"]').val();


      data.push({"name":"DATE OF BIRTH","value":$('input[name="dob"]').val()});

      data.push({"name":"BUSINESS / ORGANIZATION NAME","value":$('input[name="bussiness_name"]').val()});

      data.push({"name":"TYPE OF ORGANISATION)","value":$('input[name="type_of_organisation"]').val()});
      data.push({"name":"BUSINESS START DATE","value":$('input[name="business_start_date"]').val()});
      data.push({"name":"Business Deals in Product/Services)","value":$('input[name="business_deals_in_ps"]').val()});
      data.push({"name":"BUSINESS OFFICE ADDRESS","value":$('input[name="busine_offadd"]').val()});
      data.push({"name":"State)","value":$('input[name="state"]').val()});
      data.push({"name":"City)","value":$('input[name="distric"]').val()});
      data.push({"name":"PIN CODE)","value":$('input[name="pincode"]').val()});


      

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