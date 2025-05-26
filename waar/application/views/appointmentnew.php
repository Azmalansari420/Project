<?php include('header.php'); ?>

    <div class="inner-page-wrapper float-left">
        <div class="inner-head">
            <h1>Appointment</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Appointment</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- banner-section-end -->

    <!-- blog-start -->
<style>
    
    .step-container {
      position: relative;
      text-align: center;
      transform: translateY(-43%);
    }

    .step-circle {
      width: 30px;
      height: 30px;
      border-radius: 50%;
      background-color: #fff;
      border: 2px solid #007bff;
      line-height: 30px;
      font-weight: bold;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 10px;
      cursor: pointer; /* Added cursor pointer */
    }

    .step-line {
      position: absolute;
      top: 16px;
      left: 50px;
      width: calc(100% - 100px);
      height: 2px;
      background-color: #007bff;
      z-index: -1;
    }
    
    #multi-step-form{
        overflow-x: hidden;
    }
</style>


    <div class="contact-form appointment-wrap">
        <div class="container" class="container mt-5">
          <div class="progress px-1" style="height: 3px;">
            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <div class="step-container d-flex justify-content-between">
            <div class="step-circle" onclick="displayStep(1)">1</div>
            <div class="step-circle" onclick="displayStep(2)">2</div>
            <div class="step-circle" onclick="displayStep(3)">3</div>
          </div>

          <form id="multi-step-form" action="" method="post">

            <div class="row step step-1 justify-content-center">
              <!-- Step 1 form fields here -->
              <div class="col-lg-12 mb-3">
                  <h3>Your Details</h3>
              </div>

              <div class="col-lg-6 col-md-12">
                <div class="contact-input">
                    <input type="text" class="form-control" placeholder="Name" required="">
                    <i class="fas fa-user"></i>
                </div>
              </div>
              <div class="col-lg-6 col-md-12">
                <div class="contact-input">
                    <input type="email" class="form-control" id="contactemail" placeholder="Email"
                        required="">
                    <i class="fas fa-envelope"></i>
                </div>
              </div>
              <div class="col-lg-6 col-md-12">
                <div class="contact-input">
                    <input type="text" class="form-control" placeholder="Mobile" required="">
                    <i class="fas fa-phone"></i>
                </div>
              </div>

            
              <div class="col-lg-3">
                  <button type="button" class="btn btn-primary next-step">Next</button>
              </div>
            </div>

            <div class="step step-2">
              <!-- Step 2 form fields here -->
              <h3>Select Service</h3>
              <div class="mb-3">
                <label for="field2" class="form-label">Field 2:</label>
                <input type="text" class="form-control" id="field2" name="field2" >
              </div>
              <button type="button" class="btn btn-primary prev-step">Previous</button>
              <button type="button" class="btn btn-primary next-step">Next</button>
            </div>

            <div class="step step-3">
              <!-- Step 3 form fields here -->
              <h3>Pick A Date/Time Slot</h3>
              <div class="mb-3">
                <label for="field3" class="form-label">Field 3:</label>
                <input type="text" class="form-control" id="field3" name="field3" required>
              </div>
              <button type="button" class="btn btn-primary prev-step">Previous</button>
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </form>
        </div>
    </div>

    <!-- blog-end -->

  
<?php include('footer.php'); ?>
<script>
    var currentStep = 1;
var updateProgressBar;

  function displayStep(stepNumber) {
    if (stepNumber >= 1 && stepNumber <= 3) {
      $(".step-" + currentStep).hide();
      $(".step-" + stepNumber).show();
      currentStep = stepNumber;
      updateProgressBar();
    }
  }

  $(document).ready(function() {
    $('#multi-step-form').find('.step').slice(1).hide();
  
    $(".next-step").click(function() {
      if (currentStep < 3) {
        $(".step-" + currentStep).addClass("animate__animated animate__fadeOutLeft");
        currentStep_old = currentStep;
        currentStep++;


        console.log($(".step-"+currentStep_old+" :input"));
        console.log(currentStep_old);


        setTimeout(function() {
          $(".step").removeClass("animate__animated animate__fadeOutLeft").hide();
          $(".step-" + currentStep).show().addClass("animate__animated animate__fadeInRight");
          updateProgressBar();
        }, 500);



      }
    });

    $(".prev-step").click(function() {
      if (currentStep > 1) {
        $(".step-" + currentStep).addClass("animate__animated animate__fadeOutRight");
        currentStep--;
        setTimeout(function() {
          $(".step").removeClass("animate__animated animate__fadeOutRight").hide();
          $(".step-" + currentStep).show().addClass("animate__animated animate__fadeInLeft");
          updateProgressBar();
        }, 500);
      }
    });

    updateProgressBar = function() {
      var progressPercentage = ((currentStep - 1) / 2) * 100;
      $(".progress-bar").css("width", progressPercentage + "%");
    }
  });
</script>

<!--  <script>
     formWizard.validate({
        rules: {
            first_name: "required",
            last_name: "required",
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 5
            },
            confirm_password: {
                required: true,
                minlength: 5,
                equalTo: "#password"
            },
            address: "required",
            city: "required",
            zipcode: "required",
            country: "required",
            agree: "required"
        },
        messages: {
            first_name: "Please enter your first name",
            last_name: "Please enter your last name",
            email: "Please enter a valid email address",
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            confirm_password: {
                required: "Please confirm password",
                minlength: "Your password must be at least 5 characters long",
                equalTo: "Please enter the same password as above"
            },
            address: "Please enter your address",
            city: "Please enter your city",
            zipcode: "Please enter your zipcode",
            country: "Please select your country",
            agree: "Please accept our policy"
        }
    });

    // $("input").prop('required',true);
  </script> -->