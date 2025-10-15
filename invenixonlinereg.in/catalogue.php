<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['form_data'] = $_POST;
    header("Location: view-catalogue.php"); // Redirect to display page
    exit();
}
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
      <title>Gatway To Success | Customer Support Assistance</title>
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
                        <h2 class="page-title">Catalogue</h2>
                     </div>
                     <div class="breadcrumb-list">
                        <ul>
                           <li><a href="index.php">Home</a></li>
                           <li class="active"><a href="#">Catalogue
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Page Header End !-->
     
      <!-- Contact Form Section Start -->
      <div class="contact-form-area Catalogueform">
         <!-- Submit form Start -->
         <div class="container">
            <div class="row align-items-center">
            
               <div class="col-lg-6 position-relative">
                  <div class="comment-respond">
                     
                     <div class="visitheading">
                        <div class="visit">
                           <h2>Fil Up The Contact Form</h2>
                        </div>
                     </div>



                     <form id="main-form" method="post" class="comment-form">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="contacts-name">
                                 <label>Name</label>
                                 <input name="name" type="text" placeholder="Enter Your Name">
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="contacts-name">
                                 <label>Phone number</label>
                                 <input name="mobile" type="text" placeholder="Enter Your Number">
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="contacts-email">
                                 <label>Email</label>
                                 <input name="email" type="text" placeholder="Enter Your Email">
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="contacts-name">
                                 <label>Business Name</label>
                                 <input name="business_name" type="text" placeholder="Enter Business Name">
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="contacts-name">
                                 <label>Nature Of Business</label>
                                 <select class="form-control" name="business_nature" required="">
                                   <option value="">----Select-----</option>
                                   <option value="Services Provider">Services provider</option>
                                   <option value="Manufacturer">Manufacturer</option>
                                   <option value="Trader">Trader</option>
                                 </select>
                              </div>
                           </div>
                            <div class="col-md-12">
                              <div class="contacts-name">
                                 <label>Number Of Products</label>
                                 <input name="number_of_pro" type="text" placeholder="Enter Number Of Products" id="number">
                              </div>
                           </div>
                            <div class="col-md-12">
                              <div class="contacts-name">
                                 <label>Amount</label>
                                 <input name="pay_amount" type="text" placeholder="Amount" readonly class="pay_amount">
                              </div>
                           </div>

                           <div class="col-12">
                              <button type="submit" class="theme-btn" id="submit-btn">
                              Submit 
                              </button>
                           </div>
                        </div>
                     </form>
                  </div>
                  <!-- Comment Form End -->
               </div>


               <div class="col-lg-6">
                  <div class="popularcategory">
                     <div class="table-responsive">
                     <table class="table table-bordered">
                         <thead>
                            <tr>
                             <th>PACKAGE</th>
                             <th>NO. OF LISTING <br>(Product / Service )</th>
                             <th>FEE PER LISTING (₹)</th>
                             <th>GROSS TOTAL (₹)</th>
                             <th>GST @ 18% (₹)</th>
                             <th>TOTAL (₹)</th>
                            </tr> 
                         </thead>
                         <tbody>
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
                                 <td>₹ 3,542</td>
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
                                 
                                 
                         </tbody>
                     </table>
                  </div>

                     <div class="category">
                        <h2>Popular Product Categories On G.E.M</h2>
                        <div class="row">
                           <div class="col-lg-4">
                              <img src="images/graphics/catalogue.jpg">
                           </div>
                            <div class="col-lg-4">
                              <img src="images/graphics/catalogue.jpg">
                           </div>
                            <div class="col-lg-4">
                              <img src="images/graphics/catalogue.jpg">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>


            </div>
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