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
        <h1 class="section-title">Catalogue service
        </h1>

      </div>

      <div class="row justify-content-center">

        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">


            



          <form id="main-form" method="post" role="form" class="php-email-form">

            <input type="hidden" name="name" value="<?php echo htmlspecialchars($form_data['name']); ?>">
            <input type="hidden" name="mobile" value="<?php echo htmlspecialchars($form_data['mobile']); ?>">
            <input type="hidden" name="email" value="<?php echo htmlspecialchars($form_data['email']); ?>">
            <input type="hidden" name="business_name" value="<?php echo htmlspecialchars($form_data['business_name']); ?>">
            <input type="hidden" name="business_nature" value="<?php echo htmlspecialchars($form_data['business_nature']); ?>">
            <input type="hidden" name="number_of_pro" value="<?php echo htmlspecialchars($form_data['number_of_pro']); ?>">
            <input type="hidden" name="pay_amount" class="pay_amount" value="<?php echo htmlspecialchars($form_data['pay_amount']); ?>">


            <table class="table borderless-table">                
                <tbody>
            
                    <tr><td>Name</td><td>:</td><td><?php echo htmlspecialchars($form_data['name']); ?></td></tr>
                    <tr><td>Contact</td><td>:</td><td><?php echo htmlspecialchars($form_data['mobile']); ?></td></tr>
                    <tr><td>Email</td><td>:</td><td><?php echo htmlspecialchars($form_data['email']); ?></td></tr>

                    <tr><td>Business Name</td><td>:</td><td><?php echo htmlspecialchars($form_data['business_name']); ?></td></tr>

                    <tr><td>Nature Of Business</td><td>:</td><td><?php echo htmlspecialchars($form_data['business_nature']); ?></td></tr>

                    <tr><td>Number Of Products</td><td>:</td><td><?php echo htmlspecialchars($form_data['number_of_pro']); ?></td></tr>
                   
                    <tr><td>Amount</td><td>:</td><td><?php echo htmlspecialchars($form_data['pay_amount']); ?>/-</td></tr>
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