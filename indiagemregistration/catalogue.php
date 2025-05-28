<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['form_data'] = $_POST;
    header("Location: view-catalogue.php"); // Redirect to display page
    exit();
}

 include('header.php'); ?>

<style type="text/css">
  .contact .php-email-form {
    width: 100%;
    border-top: 3px solid #0576af;
    border-bottom: 3px solid #023047;
    padding: 30px;
    background: #50d1fb5e;
    box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12);
    border-radius: 30px;
}
#customers {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
table, th, td {
    font-size: 14px;
    border: 1px solid black;
    padding: 5px;
}
#customers th {
    padding: 10px;
    text-align: left;
    background-color: #023047;
    color: #fff;
    font-size: 13px;
}

#customers tr:nth-child(even) {
    background-color: #f98b5624;
}
#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}
.table-p {
    border: 1px solid #ddd;
    padding: 10px;
    font-size: 14px;
}
</style>

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact mb-5 mt-5">
    <div class="container">

      
      <div class="row">



        <div class="col-lg-6 mt-5 mt-lg-0 d-flex align-items-stretch">
          <form id="main-form" method="post" role="form" class="php-email-form">
              <h4 class="fw-semibold">Fil Up The Contact Form
              </h4>
              <div class="row">
                <div class="form-group col-md-12">
                  <label for="name">NAME *</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-12 mt-3 mt-md-0">
                  <label for="name">MOBILE No.</label>
                  <input type="mobile" class="form-control" name="mobile" id="email" required>
                </div>

                <div class="form-group mt-3 col-md-12 mt-3 ">
                  <label for="name">EMAIL ID </label>
                  <input type="email" class="form-control" name="email" id="subject" required>
                </div>
                

                <div class="form-group mt-3 col-md-12 mt-3 ">
                  <label for="name">BUSINESS NAME / व्यवसाय नाम</label>
                  <input type="text" class="form-control" name="business_name" id="subject" required>
                </div>

                <div class="form-group col-md-12 mt-3">
                  <label for="name">Nature Of Business</label>
                  <select class="form-control" name="business_nature" required="">
                    <option value="" disabled="" selected="">-- Select Nature Of Business --</option>
                    <option value="Services Provider">Services provider</option>
                    <option value="Manufacturer">Manufacturer</option>
                    <option value="Trader">Trader</option>
                  </select>
                </div>

                <div class="form-group mt-3 col-md-12 mt-3 ">
                  <label for="name">Number Of Products</label>
                  <input type="number" class="form-control" name="number_of_pro" id="number" required>
                </div>  

                <div class="form-group mt-3 col-md-12 mt-3 ">
                  <label for="name">Amount</label>
                  <input type="text" style="margin:5px 0;" class="form-control pay_amount" name="pay_amount" readonly placeholder="Amount">  
                </div>       

                      

              </div>
             
              <div class="text-start"><button type="submit" id="submit-btn">Submit Application</button></div>
          </form>
        </div>

        <div class="col-lg-6 d-flex align-items-stretch">
          <div class="info">
            <div class="content-box p-2">

              <h4 class="fw-semibold">Popular Product Categories On G.E.M
              </h4>

              <div class="form-content">
                  <h5>Name Of The Applicant:</h5>
                  <table id="customers">
                    <tbody><tr>
                      <th>PACKAGE</th>
                      <th>NO. OF LISTING (Product / Service )</th>
                      <th>FEE PER LISTING (₹)</th>
                      <th>GROSS TOTAL (₹)</th>
                      <th>GST @ 18% (₹)</th>
                      <th>TOTAL (₹)</th>
                    </tr>
                    <tr>
                      <td>A</td>
                      <td>First 3</td>
                      <td>₹ 847</td>
                      <td>₹ 2,542</td>
                      <td>₹ 457</td>
                      <td>₹ 2,999</td>
                    </tr>
                    <tr>
                      <td>B</td>
                      <td>4</td>
                      <td>₹ 760</td>
                      <td>₹ 3,042</td>
                      <td>₹ 547</td>
                      <td>₹ 3,589</td>
                    </tr>
                    <tr>
                      <td>C</td>
                      <td>5</td>
                      <td>₹ 708</td>
                      <td>₹ 3,542 </td>
                      <td>₹ 637</td>
                      <td>₹ 4,179</td>
                    </tr>
                    <tr>
                      <td>D</td>
                      <td>6</td>
                      <td>₹ 674</td>
                      <td>₹ 4,042</td>
                      <td>₹ 727</td>
                      <td>₹ 4,769</td>
                    </tr> 
                  </tbody></table>
                  <p class="table-p">For Every Additional Product Rs. 500 + 18% Gst = 590/- will be charged over and above 3 products. <br>For Ex: For 50 Products Rs. 26042 + 18% GST = 30729/- will be charged.</p>
              </div>
              
            </div>


          </div>

        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

    <?php include('footer.php'); ?>


<script>



$(document).ready(function() {
  $('#number').on('input', function() {
    var number = parseInt($(this).val()) || 0; // Ensure it's a number
    var baseAmount = 2999; // Fixed price for the first 3 products
    var extraChargePerProduct = 590; // ₹500 + 18% GST for additional products
    var totalAmount;

    if (number <= 3) {
      totalAmount = baseAmount;
    } else {
      totalAmount = baseAmount + (number - 3) * extraChargePerProduct;
    }

    $('.pay_amount').val(totalAmount);
  });
});













      

</script>