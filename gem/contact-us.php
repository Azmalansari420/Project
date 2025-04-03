  <?php include('header.php'); ?>





  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact mb-5">
    <div class="container">

      <div class="section-title1">
        <h1 class="section-title">Contact Us


        </h1>
        <p>For general inquiries and information about Government e-Marketplace (GEM), please contact us through the
          following
          channels:</p>
      </div>

      <div class="row">



        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <form id='main-form1' class="php-email-form" method="post" enctype="multipart/form-data">
            <h4 class="fw-semibold text-uppercase">Contact Us
            </h4>
            <div class="row">
              <div class="form-group col-md-12">
                <label for="name">FULL NAME </label>
                <input type="text" name="name" class="form-control" id="name" required>
              </div>
            </div>
                
            <div class="form-group col-md-12 mt-3 mt-md-0">
              <label for="name">E-MAIL ID</label>
              <input type="email" class="form-control" name="email" id="email" required>
            </div>
            
            <div class="form-group mt-3">
              <label for="name">SUBJECT</label>
              <input type="text" class="form-control" name="subject" id="subject" required>
            </div>
            
            <div class="form-group mt-3">
              <label for="name">Message</label>
              <textarea class="form-control" name="message" id="message" ></textarea>
            </div>
            

            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-start"><button type="button" id="submit-btn">Submit</button></div>
          </form>
        </div>

        <div class="col-lg-5 d-flex align-items-stretch">
          <div class="info">
            <div class="content-box p-2">

              <h4 class="fw-semibold text-uppercase">General Inquiries
              </h4>

              <p class="py-2"><strong>Email:</strong> <a href="mailto:care@gemregistration.co.in">care@gemregistration.co.in</a></p>

              <p class="py-2"><strong>Phone:</strong> <a href="tel:8595323374">+91-8595323374 (General Enquiries)</a></p>
              <p class="py-2"><strong>Address:</strong> <a href="#!">Plot No 24 
              Second Floor , Sewak Park Near Metro pillar - 771
              New Delhi - 110059</a></p>
              
              

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
    $base  = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]".str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
  ?>

    var api_url = '<?=$api_url ?>';
    var base_url = '<?=$base ?>';
    const final_amount = 1;

    $(document).on("click", "#submit-btn",(function(e) {      
      event.preventDefault();
      var files_name_array = [];

      var form_id = "main-form1";


      var form_ok = check_required_fields(form_id);
      if(form_ok!=1) return false;

      loader("show");

      var current_url =  window.location.href;
      var website_id = 1;
      var form_name = 'APPLY FOR tatkal FSSAI REGISTRATION | FSSAI FOOD LICENSE';
      var name = $('input[name="name"]').val();
      var email = $('input[name="email"]').val();
      var subject = $('input[name="subject"]').val();
      var message = $('textarea[name="message"]').val();


      
      var form = new FormData();




      form.append('website_id', website_id); // do not change Mandatory
      form.append('name', name); // do not change Mandatory
      form.append('email', email); // do not change Mandatory
      form.append('subject', subject); // do not change Mandatory
      form.append('message', message); // do not change Mandatory
      form.append('current_url', current_url); // do not change Mandatory
      form.append('base_url', base_url); // do not change Mandatory
      form.append('hostname', location.hostname); // do not change Mandatory

   


      var settings = {
        "url": api_url+"contact/create",
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
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
