<?php
session_start();

if (!isset($_SESSION['form_data'])) {
    echo "No data found. Please fill out the form first.";
    exit();
}

$form_data = $_SESSION['form_data']; // Retrieve session data
 include('header.php'); ?>

<style >
  .contact .php-email-form {
    width: 100%;
    border-top: 3px solid #0576af;
    border-bottom: 3px solid #023047;
    padding: 30px;
    background: #50d1fb5e;
    box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12);
    border-radius: 30px;
}

        
                table {
            width: 70%;
            border-collapse: collapse;
        }

        /* Header styling */
        th {
            background-color: #f2f2f2;
            color: black;
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        /* Row styling */
        tr:nth-child(even) {
               background-color: #f98b5673;
    color: #260303;
        }

        tr:nth-child(odd) {
            background-color: #f9f9f9;
        }

        td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }

        /* Hover effect */
        tr:hover {
            background-color: #f1f1f1;
        }

        /* Remove border from the table */
        .borderless-table {
            border-collapse: collapse;
            border: none;
            margin:auto;
        }
        .borderless-table th,
        .borderless-table td {
            border: none;
            padding: 8px;
        }
</style>

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact mb-5">
    <div class="container">

      <div class="section-title1">
        <h1 class="section-title">G.E.M Account Registration- Seller/Buyer Account
        </h1>

      </div>

      <div class="row justify-content-center">

        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">


            



          <form id="main-form" method="post" role="form" class="php-email-form">

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


            <table class="table borderless-table">                
                <tbody>
            
                    <tr><td>Name</td><td>:</td><td><?php echo htmlspecialchars($form_data['name']); ?></td></tr>
                    <tr><td>Contact</td><td>:</td><td><?php echo htmlspecialchars($form_data['mobile']); ?></td></tr>
                    <tr><td>Email</td><td>:</td><td><?php echo htmlspecialchars($form_data['email']); ?></td></tr>
                    <tr><td>Date of Birth</td><td>:</td><td><?php echo htmlspecialchars($form_data['dob']); ?></td></tr>
                    <tr><td>Business Name</td><td>:</td><td><?php echo htmlspecialchars($form_data['bussiness_name']); ?></td></tr>
                    <tr><td>Type of Organisation</td><td>:</td><td><?php echo htmlspecialchars($form_data['type_of_organisation']); ?></td></tr>
                    <tr><td>Business Start Date</td><td>:</td><td><?php echo htmlspecialchars($form_data['business_start_date']); ?></td></tr>
                    <tr><td>Business Deals In</td><td>:</td><td><?php echo htmlspecialchars($form_data['business_deals_in_ps']); ?></td></tr>
                    <tr><td>Business Office Address</td><td>:</td><td><?php echo htmlspecialchars($form_data['busine_offadd']); ?></td></tr>
                    <tr><td>Pincode</td><td>:</td><td><?php echo htmlspecialchars($form_data['pincode']); ?></td></tr>
                    <tr><td>State</td><td>:</td><td><?php echo htmlspecialchars($form_data['state']); ?></td></tr>
                    <tr><td>District</td><td>:</td><td><?php echo htmlspecialchars($form_data['distric']); ?></td></tr>
                    <tr><td>Amount</td><td>:</td><td>2999/-</td></tr>
                    <tr>
                        <td colspan="3" style="text-align:center;">
                            <div class="text-center"><button type="submit" id="submit-btn">Submit Application</button></div>
                        </td>
                    </tr>
          
                </tbody>
                
            </table>

              
       
              
              
          </form>
        </div>

       

      </div>

    </div>
  </section><!-- End Contact Section -->




    <?php include('footer.php'); ?>


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