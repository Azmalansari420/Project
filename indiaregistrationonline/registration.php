<?php include('header.php'); ?> 
<style>
   .consumer-complaint { 
   padding-top: 175px;
   }
   @media (max-width: 768px) {
   .consumer-complaint { 
   padding-top: 85px;
   }
   .consumer-complaint-div .form-notice-div { 
   margin: 15px 0px;
   }
   }
   /* Banner Styles */
   .banner {
   width: 100%;
   height: 400px; /* Height of the banner */
   background-image: url('img/gembanner.jpg'); /* Replace with your image URL */
   background-size: cover;
   background-position: center;
   display: flex;
   align-items: center;
   justify-content: center;
   color: white;
   text-align: center;
   position: relative;
   }
   .banner::after {
   content: "";
   position: absolute;
   top: 0;
   left: 0;
   width: 100%;
   height: 100%;
   background-color:rgb(0 0 0 / 0%); /* Dark overlay */
   }
   .banner-content {
   z-index: 1; /* Ensure content is above the overlay */
   max-width: 800px;
   }
   .banner h1 {
   font-size: 3em;
   margin-bottom: 10px;
   }
   .banner p {
   font-size: 1.5em;
   margin-bottom: 20px;
   }
   .banner-button {
   display: inline-block;
   padding: 15px 30px;
   font-size: 1em;
   color: white;
   background-color: #f98b56;
   border-radius: 5px;
   text-decoration: none;
   transition: background-color 0.3s;
   }
   .banner-button:hover {
   background-color: #e0784a;
   }
</style>
<section class="section consumer-complaint">
   <div class="banner">
      <!--<div class="banner-content">-->
      <!--<h1>Welcome to Our Website</h1>-->
      <!--<p>Discover amazing content and services.</p>-->
      <!--<a href="#learn-more" class="banner-button">Learn More</a>-->
      <!--</div>-->
   </div>
   <div class="container">
      <div class="row">
         <div class="consumer-complaint-head">
            <h2>G.E.M Account Registration- Seller/Buyer Account</h2>
            <h4>Sell Your Product To Government Department</h4>
         </div>
      </div>
      <div class="row">
         <div class="consumer-complaint-div">
            <div class="form-div">
               <div class="form-title">
                  <h3>G.E.M Registration Information Form</h3>
                  <h3>G.E.M रजिस्ट्रेशन जानकारी फॉर्म</h3>
               </div>
               <form id="regForm" action="https://indiaregistrationonline.org/view-application.php?appid=f5a53a96" onSubmit="return phonenumber(document.payuForm.contact)" method="POST" name="payuForm">
                  <input type="hidden" name="txnid" value="f5a53a96" />
                  <div class="tab" style="display: block;">
                     <div class="row-flex">
                        <div class="form-inner form-50">
                           <label>NAME OF THE APPLICANT<br>आवेदक का नाम *</label>
                           <input type="text" placeholder="NAME OF THE APPLICANT..." name="name" required>
                        </div>
                        <div class="form-inner form-50">
                           <label>MOBILE NUMBER OF APPLICANT<br>आवेदक का मोबाइल नंबर *</label>
                           <input type="text" placeholder="MOBILE NUMBER OF APPLICANT" name="contact" onkeypress="return isNumber(event)" required>
                        </div>
                     </div>
                     <div class="row-flex">
                        <div class="form-inner form-50">
                           <label>EMAIL ID OF APPLICANT<br>आवेदक की ईमेल आईडी *</label>
                           <input type="email" placeholder="EMAIL ID OF APPLICANT" name="email" required>
                        </div>
                        <div class="form-inner form-50">
                           <label>DATE OF BIRTH<br>जन्म की तारीख</label>
                           <input type="date" name="dob" required>
                        </div>
                     </div>
                     <div class="row-flex">
                        <div class="form-inner form-50">
                           <label>BUSINESS NAME<br>व्यवसाय नाम</label>
                           <input type="text" placeholder="BUSINESS NAME" name="business_name" required>
                        </div>
                        <div class="form-inner form-50">
                           <label>TYPE OF ORGANISATION<br>संगठन का प्रकार *</label>
                           <select class="form-control" name="type_of_organisation" required>
                              <option value="" disabled selected>-- Select Type of Organisation --</option>
                              <option value="Sole Proprietor">Sole Proprietor</option>
                              <option value="Partnership Firm">Partnership Firm</option>
                              <option value="Private Limited Company">Pvt Ltd Company</option>
                              <option value="Public Limited Company">Public Ltd Company</option>
                              <option value="One Person Company">One Person Company</option>
                              <option value="Limited Liability Partnership">Limited Liability Partnership</option>
                              <option value="Others">Others</option>
                           </select>
                        </div>
                     </div>
                     <div class="row-flex">
                        <div class="form-inner form-50">
                           <label>BUSINESS START DATE<br>निगमन की तारीख</label>
                           <input type="date" name="business_start_date" required>
                        </div>
                        <div class="form-inner form-50">
                           <label>Business Deals in Product/Services<br>आप की कंपनी प्रोडक्ट में डील करती है या सर्विसेज में *</label>
                           <select class="form-control" name="business_deals_in_ps" required>
                              <option value="" disabled selected>-- Select Product/Services --</option>
                              <option value="product">Product</option>
                              <option value="services">Services</option>
                              <option value="Both">Both</option>
                           </select>
                        </div>
                     </div>
                     <div class="form-inner">
                        <label>BUSINESS OFFICE ADDRESS / व्यापार कार्यालय का पता *</label>
                        <input type="text" placeholder="BUSINESS OFFICE ADDRESS" name="business_office_address" required>
                     </div>
                     <div class="row-flex">
                        <div class="form-inner form-33">
                           <label>PINCODE / पिन कोड *</label>
                           <input type="text" placeholder="PINCODE" name="pincode" required>
                        </div>
                        <div class="form-inner form-33">
                           <label>State / राज्य *</label>
                           <input type="text" placeholder="Enter your state" name="state" required>
                        </div>
                        <div class="form-inner form-33">
                           <label>DISTRICT / जिला *</label>
                           <input type="text" placeholder="Enter your district" name="district" required>
                        </div>
                     </div>
                     <div class="form-inner"> 
                        <span><input type="checkbox" checked style="width: 13px;margin-top: 0px;"> I accept customer  <a href="customer-dispute-policy.html" style="margin-left: 5px;"> dispute policy</a>.</span>
                     </div>
                     <div class="form-inner"> 
                        <span><input type="checkbox" checked> I affirm my agreement to the Terms of Service by clicking the 'Submit Application' button. It is crucial to emphasize that the primary purpose of this form is to intricately detail my requisition to this private firm for the acquisition of a specialist for a G.E.M Registration and this portal maintains a dedicated position as a private entity, separate from any government official or department.</span>
                     </div>
                     <div style="overflow:auto;">
                        <div style="float:right;">
                           <button type="submit" class="probtn">Submit Application</button>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
            <div class="form-notice-div">
               <div class="form-title">
                  <h3>INSTRUCTIONS TO FILL</h3>
                  <h3>फॉर्म भरने के निर्देशें</h3>
               </div>
               <div class="form-content">
                  <h3>Name Of The Applicant:</h3>
                  <p>Applicants have to provide their name and in the case of the company or partnership firm, you may have to enter anyone's authorized partner’s details.</p>
                  <h3>Mobile number:</h3>
                  <p>The authorized partner or applicant has to enter the mobile number.</p>
                  <h3>Email Id Of Applicant:</h3>
                  <p>The applicant or authorized partner has to enter their email id.</p>
                  <h3>Business Name:</h3>
                  <p>The applicant has to provide the details of the business firm which shall be used to sell products and services on the G.E.M portal. You should also carry the registration proof in the name of the business firm.</p>
                  <h3>Type of Organization :</h3>
                  <p>Select anyone’s nature of business category or type of the organization.</p>
                  <h3>Date of Incorporation/Commencement of Business present in the Certificate:</h3>
                  <p>Applicants have to provide the date of the company/firm which will be available in the partnership deed or certificate of other business registration.</p>
                  <h3>Select your Industryu:</h3>
                  <p>Select in which category your industry is.</p>
                  <h3>Office Address:</h3>
                  <p>Applicants must have to provide valid details according to their registration proof provided in the address of the business firm.</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="section consumer-complaint">
   <div class="container">
      <div class="row">
         <div class="consumer-complaint-div">
            <div class="accordion-div">
               <div class="faq-title">Benefits Of <br>G.E.M Registration</div>
               <button class="accordion">Access to a Vast Market</button>
               <div class="panel">
                  <p>G.E.M Registration provides sellers with direct access to various departments and public sector organizations.</p>
               </div>
               <button class="accordion">Huge Market Potential</button>
               <div class="panel">
                  <p>G.E.M Registration offers a vast market with a large number of potential buyers from different Department entities. </p>
               </div>
               <button class="accordion">Transparency</button>
               <div class="panel">
                  <p>Sellers can save on marketing expenses as G.E.M Registration acts as a one-stop platform to showcase their products and services.</p>
               </div>
               <button class="accordion">Easy Registration Process</button>
               <div class="panel">
                  <p>The registration process is straightforward, making it easy for sellers to onboard the platform.</p>
               </div>
               <button class="accordion">Timely Payments</button>
               <div class="panel">
                  <p>G.E.M Registration ensures timely payments to sellers, reducing financial strain and promoting healthy business practices.</p>
               </div>
               <button class="accordion">Online Cataloging</button>
               <div class="panel">
                  <p>Sellers can create and manage their online catalogs, making it convenient for buyers to browse and select products.</p>
               </div>
               <button class="accordion">Online Order Management</button>
               <div class="panel">
                  <p>Sellers can efficiently manage and track orders, streamlining the fulfillment process.</p>
               </div>
               <button class="accordion">Customer Reviews and Ratings</button>
               <div class="panel">
                  <p>G.E.M Registration allows buyers to leave reviews and ratings, which can enhance the seller's reputation.</p>
               </div>
               <button class="accordion">Paperless Documentation</button>
               <div class="panel">
                  <p>G.E.M Registration promotes paperless transactions, reducing paperwork and administrative burdens.</p>
               </div>
            </div>
            <div class="accordion-div">
               <div class="faq-title">FAQ Of <br>G.E.M Registration</div>
               <button class="accordion">What is G.E.M Registration ?</button>
               <div class="panel">
                  <p>G.E.M Registration refers to the process of signing up and creating an account on the Government Marketplace platform. G.E.M is an online marketplace established by the Indian government to facilitate procurement of goods and services by various government departments and organizations.</p>
               </div>
               <button class="accordion">Who can do G.E.M Registration</button>
               <div class="panel">
                  <p>G.E.M registration is open to various entities, including sellers, service providers, and government buyers. This includes businesses, manufacturers, traders, and service providers.</p>
               </div>
               <button class="accordion">Is there any registration fee for G.E.M Registration</button>
               <div class="panel">
                  <p>No, there is no registration fee for sellers or buyers for G.E.M Registration. The registration process is free of charge.</p>
               </div>
               <button class="accordion">How long does the G.E.M Registration process take?</button>
               <div class="panel">
                  <p>The G.E.M registration process usually takes a few days to complete. The exact time may vary depending on the accuracy of the information provided and the verification process..</p>
               </div>
               <button class="accordion">What type of products can be sold After G.E.M Registration?</button>
               <div class="panel">
                  <p>After G.E.M Registration Users allows the sale of a wide range of products, including goods, services, and works. Sellers can offer products from various categories, including electronics, furniture, stationery, office supplies, and more.</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<?php include('footer.php'); ?>


<script>



    document.addEventListener("DOMContentLoaded", function () {
  var acc = document.querySelectorAll(".consumer-complaint-div .accordion");
  var panels = document.querySelectorAll(".consumer-complaint-div .panel");
  for (var i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
      this.classList.toggle("active");
      var panel = this.nextElementSibling;
      if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
      } else {
        // Close other panels
        for (var j = 0; j < panels.length; j++) {
          if (panels[j] !== panel) {
            panels[j].style.maxHeight = null;
            acc[j].classList.remove("active");
          }
        }
        panel.style.maxHeight = panel.scrollHeight + "px";
      }
    });
  }
  // Initially open the second tab
  acc[0].click();
});






   function isNumber(evt) {
   evt = (evt) ? evt : window.event;
   var charCode = (evt.which) ? evt.which : evt.keyCode;
   if (charCode > 31 && (charCode < 48 || charCode > 57)) {
    return false;
   }
   return true;
   }
   
   
   function phonenumber(inputtxt)
   {
   
   var phoneno = /^\d{10}$/;
   if(inputtxt.value.match(phoneno))
   {
   return true;
   }
   else
   {
   alert("Not a valid Phone Number");
   return false;
   }
   }
</script>

