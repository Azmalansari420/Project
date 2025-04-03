  <?php include('header.php'); ?>





  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact mb-5">
    <div class="container">

      <div class="section-title1">
        <h1 class="section-title">APPLY FOR GEM CANCELLATION

        </h1>

      </div>

      <div class="row">



        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <form  method="post" role="form" class="php-email-form" id="main-form">
            <h4 class="fw-semibold">APPLICATION FORM FOR GEM CANCELLATION
            </h4>
            <div class="row">
              <div class="form-group col-md-12">
                <label for="name">NAME OF AUTHORIZED PERSON</label>
                <input type="text" name="name" class="form-control" id="name" required>
              </div>
              <div class="form-group col-md-12 mt-3 mt-md-0">
                <label for="name">E-MAIL ID</label>
                <input type="email" class="form-control" name="email" id="email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <label for="name">MOBILE NUMBER</label>
              <input type="number" class="form-control" name="mobile" id="subject" required>
            </div>
            <div class="form-group mt-3">
              <label for="name">GEM SELLER ID </label>
              <input type="text" class="form-control" name="seller_id" id="subject" required>
            </div>

            <div class="form-group mt-3">
              <label for="name">GEM LOGIN ID
              </label>
              <input type="text" class="form-control" name="grm_login" id="subject" required>
            </div>
            <div class="form-group mt-3">
              <label for="name">GEM PASSWORD </label>
              <input type="password" class="form-control" name="pasword" id="subject" required>
            </div>

            <div class="form-group mt-3 d-flex align-items-center">
              <input type="checkbox" id="vehicle1" name="checkbox" value="Bike">
              <label for="checkbox" class="form-check-label mx-2">I AGREE TO THE <a href="Terms-&-Conditions.php">TERMS OF SERVICE</a>
              </label>
            </div>


            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-start"><button type="button" id="submit-btn">Submit Application</button></div>
          </form>
        </div>

        <div class="col-lg-5 d-flex align-items-stretch">
          <div class="info">
            <div class="content-box p-2">

              <h4 class="fw-semibold">GUIDELINES TO FILL GEM CANCELLATION FORM
              </h4>

              <p class="text-uppercase sub-pera pb-3"><strong>NAME OF AUTHORIZED PERSON :</strong>ENTER THE NAME OF
                OWNER/ DIRECTOR/ AUTHORIZED PERSON, STRICTLY AS PER AADHAAR CARD OR PAN CARD / आधार कार्ड या पैन कार्ड
                के अनुसार, स्वामी/निदेशक/अधिकृत व्यक्ति का नाम दर्ज करें</p>
              <p class="text-uppercase sub-pera pb-3"><strong>Email ID :</strong> ENTER A VALID EMAIL ADDRESS OF
                AUTHORIZED PERSON, OUR EXECUTIVE WILL CALL TO VERIFY EMAIL OTP</p>
              <p class="text-uppercase sub-pera pb-3"><strong>Mobile Number :</strong>ENTER VALID 10 DIGIT MOBILE NUMBER
                OF AUTHORIZED PERSON, OUR EXECUTIVE WILL CALL TO VERIFY MOBILE OTP.</p>
              <p class="text-uppercase sub-pera pb-3"><strong>GEM SELLER ID :</strong>ENTER GEM SELLER ID. </p>
              <p class="text-uppercase sub-pera pb-3"><strong>GEM LOGIN ID :</strong>ENTER GEM LOGIN ID. </p>
              <p class="text-uppercase sub-pera pb-4"><strong>GEM PASSWORD :</strong>ENTER GEM PASSWORD.</p>



            </div>


          </div>

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
  $base = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]" . str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);
  ?>

    var api_url = '<?= $api_url ?>';
    var base_url = '<?= $base ?>';

    // console.log(payable_price);

    $(document).on("click", "#submit-btn",(function(e) {      
      event.preventDefault();
      var data = [];
      var files_name_array = [];
    const final_amount = 3500;

      var form_id = "main-form";


      var form_ok = check_required_fields(form_id);
      if(form_ok!=1) return false;

      loader("show");

      var current_url =  window.location.href;
      var form_name = 'APPLICATION FORM FOR GEM CANCELLATION';
      var name = $('input[name="name"]').val();
      var email = $('input[name="email"]').val();
      var mobile = $('input[name="mobile"]').val();


      data.push({"name":"GEM SELLER ID","value":$('input[name="seller_id"]').val()});
      data.push({"name":"GEM LOGIN ID","value":$('input[name="grm_login"]').val()});
      data.push({"name":"GEM PASSWORD","value":$('input[name="pasword"]').val()});



      

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
