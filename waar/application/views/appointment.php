<?php

include('header.php'); ?>

    <div class="inner-page-wrapper float-left">
        <div class="inner-head">
            <h1>Appointment</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="<?=base_url() ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Appointment</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- banner-section-end -->

    <!-- blog-start -->

<style>
    #regForm {
  background-color: #ffffff;
  margin: 0 auto;
  font-family: Raleway;
  padding: 40px;
  width: 100%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
/*  background-color: #04AA6D;*/
  background-color: #911439;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #04AA6D;
}
.contact-form .form-head {
    padding: 20px 0;
}
.contact-form form label {
    color: black;
}


 .date-div{
    padding: 10px;
    background: red;
    max-width: 54px;
    text-align: center;
    line-height: 1;
    border-radius: 11px;
}
</style>



    <div class="contact-form appointment-wrap">
        <div class="container">
            <div class="row" style="justify-content:center;">
                <div class="col-lg-6 sidebar-head">
                    <h6>Book An Appointment</h6>
                </div>
                <div class="sidebar-body form-head">

                    <form action="<?=base_url('welcome/appointment') ?>" class="row" method="post" id="regForm">

                      <div class="tab row">
                        <div class="col-lg-6 col-md-12">
                            <div class="contact-input">
                                <label class="form-label fw-bold">First Name</label>
                                <input type="text" class="form-control" placeholder="First Name" required name="first_name">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="contact-input">
                                <label class="form-label fw-bold">Last Name</label>
                                <input type="text" class="form-control" placeholder="Last Name" required name="last_name">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="contact-input">
                                <label class="form-label fw-bold">Mobile No</label>
                                <input type="tel" class="form-control" placeholder="Phone" required name="mobile">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="contact-input">
                                <label class="form-label fw-bold">Email Address</label>
                                <input type="email" class="form-control" id="contactemail" placeholder="Email" required name="email">
                            </div>
                        </div>                        
                      </div>
                      
                      <div class="tab row">
                        <div class="col-lg-4 col-md-4">
                            <div class="contact-input">
                                <label class="form-label fw-bold">Select Timezone</label>
                                <select  class="form-control" name="timezone" required>
                                    <?php
                                    $country = $this->db->get_where('timezone')->result_object();
                                    foreach($country as $data)
                                        { ?>
                                    <option value="<?=$data->name ?>"><?=$data->name ?></option>
                                   <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="contact-input">
                                <label class="form-label fw-bold">Date</label>
                                <input type="date" class="form-control" name="select_date" required>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="contact-input">
                                <label class="form-label fw-bold">Time</label>
                                <input type="time" class="form-control" name="select_time" required>
                            </div>
                        </div>
                      </div>

                      <div class="tab row">
                        <div class="col-lg-12">
                            <label class="form-label fw-bold">Message</label>
                            <textarea class="form-control" rows="6" placeholder="Enter Some Text..." name="message"></textarea>
                        </div>
                      </div>

                      <div style="overflow:auto;">
                        <div style="float:right;">
                          <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                          <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                        </div>
                      </div>

                      <div style="text-align:center;margin-top:40px;">
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                      </div>
                    </form>
                  
                </div>
            </div>
        </div>
    </div>

    <!-- blog-end -->

  
<?php include('footer.php'); ?>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "inherit";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>


 <style>
   .whats-app-number {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 30px #0000001a;
    -webkit-backdrop-filter: blur(5.9px);
    backdrop-filter: blur(5.9px);
    background: rgba(0,0,0,1);
    position: fixed;
    top: 86%;
    right: 5%;
    z-index: 11;
}
</style>
<a href="https://wa.me/917259346805" target="_blank" class="whats-app-number">
         <svg xmlns="http://www.w3.org/2000/svg" width="21.614" height="21.614" viewBox="0 0 21.614 21.614">
            <path id="Icon_awesome-whatsapp" data-name="Icon awesome-whatsapp" d="M18.377,5.391A10.714,10.714,0,0,0,1.52,18.316L0,23.864l5.679-1.491a10.678,10.678,0,0,0,5.119,1.3h0A10.814,10.814,0,0,0,21.614,12.965a10.753,10.753,0,0,0-3.237-7.575ZM10.8,21.871a8.886,8.886,0,0,1-4.535-1.24l-.323-.193-3.368.883.9-3.286L3.261,17.7A8.919,8.919,0,1,1,19.8,12.965a9,9,0,0,1-9,8.906ZM15.685,15.2c-.265-.135-1.582-.782-1.829-.868s-.425-.135-.6.135-.69.868-.849,1.052-.314.2-.579.068a7.285,7.285,0,0,1-3.643-3.184c-.275-.473.275-.439.786-1.462a.5.5,0,0,0-.024-.468c-.068-.135-.6-1.452-.825-1.988s-.439-.449-.6-.458-.333-.01-.511-.01a.991.991,0,0,0-.714.333,3.007,3.007,0,0,0-.936,2.234,5.243,5.243,0,0,0,1.09,2.769A11.959,11.959,0,0,0,11.019,17.4a5.237,5.237,0,0,0,3.213.671,2.741,2.741,0,0,0,1.8-1.274,2.238,2.238,0,0,0,.154-1.274C16.128,15.4,15.95,15.334,15.685,15.2Z" transform="translate(0 -2.25)" fill="#fff"></path>
         </svg>
      </a>