<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['form_data'] = $_POST;
    header("Location: view-registration.php"); // Redirect to display page
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
</style>

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact mb-5">
    <div class="container">

      <div class="section-title1">
        <h1 class="section-title">G.E.M Registration Information Form / G.E.M रजिस्ट्रेशन जानकारी फॉर्म
        </h1>

      </div>

      <div class="row">



        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <form id="main-form" method="post" role="form" class="php-email-form">
              <!-- <h4 class="fw-semibold">
              </h4> -->
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">NAME OF THE APPLICANT / आवेदक का नाम *</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="name">MOBILE No. OF APPLICANT / आवेदक का मोबाइल नं. *</label>
                  <input type="mobile" class="form-control" name="mobile" id="email" required>
                </div>

                <div class="form-group mt-3 col-md-6 mt-3 ">
                  <label for="name">EMAIL ID OF APPLICANT / आवेदक की ईमेल आईडी *</label>
                  <input type="email" class="form-control" name="email" id="subject" required>
                </div>

                <div class="form-group mt-3 col-md-6 mt-3 ">
                  <label for="name">DATE OF BIRTH / जन्म की तारीख</label>
                  <input type="date" class="form-control" name="dob" id="subject" required>
                </div>

                

                <div class="form-group mt-3 col-md-6 mt-3 ">
                  <label for="name">BUSINESS NAME / व्यवसाय नाम</label>
                  <input type="text" class="form-control" name="bussiness_name" id="subject" required>
                </div>

                <div class="form-group col-md-6 mt-3">
                  <label for="name">TYPE OF ORGANISATION / संगठन का प्रकार *</label>
                  <select class="form-control" name="type_of_organisation" required="">
                      <option value="" disabled="" selected="">-- Select Type of Organisation --</option>
                      <option value="Sole Proprietor">Sole Proprietor</option>
                      <option value="Partnership Firm">Partnership Firm</option>
                      <option value="Private Limited Company">Pvt Ltd Company</option>
                      <option value="Public Limited Company">Public Ltd Company</option>
                      <option value="One Person Company">One Person Company</option>
                      <option value="Limited Liability Partnership">Limited Liability Partnership</option>
                      <option value="Others">Others</option>
                  </select>
                </div>
                <div class="form-group mt-3 col-md-6 mt-3 ">
                  <label for="name">BUSINESS START DATE / निगमन की तारीख</label>
                  <input type="date" class="form-control" name="business_start_date" id="business_start_date" required>
                </div>
                

                <div class="form-group col-md-6 mt-3">
                  <label for="name">Business Deals in Product/Services / आप की कंपनी प्रोडक्ट में डील करती है या सर्विसेज में *</label>
                  <select class="form-control" name="business_deals_in_ps" required="">
                      <option value="" disabled="" selected="">-- Select Product/Services --</option>
                      <option value="product">Product</option>
                      <option value="services">Services</option>
                      <option value="Both">Both</option>
                  </select>
                </div>

                <div class="form-group mt-3 col-md-12 mt-3 ">
                  <label for="name">BUSINESS OFFICE ADDRESS / व्यापार कार्यालय का पता *</label>
                  <input type="text" class="form-control" name="busine_offadd" id="subject" required>
                </div>

                <div class="form-group mt-3 col-md-4 mt-3 ">
                  <label for="name">PINCODE / पिन कोड *</label>
                  <input type="text" class="form-control" name="pincode" id="subject" required>
                </div>
                <div class="form-group mt-3 col-md-4 mt-3 ">
                  <label for="name">State / राज्य *</label>
                  <input type="text" class="form-control" name="state" id="subject" required>
                </div>
                <div class="form-group mt-3 col-md-4 mt-3 ">
                  <label for="name">DISTRICT / जिला *</label>
                  <input type="text" class="form-control" name="distric" id="subject" required>
                </div>                


              </div>
       
              <div class="form-group mt-3 d-flex align-items-center">
                <input type="checkbox" id="vehicle1" name="checkbox" value="Bike" required="">
                <label for="checkbox" class="form-check-label mx-2">I AGREE TO THE <a href="">dispute policy. </a>
                </label>
              </div>
       
              <div class="form-group mt-3 d-flex align-items-center">
                <input type="checkbox" id="vehicle1" name="checkbox" value="Bike" required="">
                <label for="checkbox" class="form-check-label mx-2">I affirm my agreement to the Terms of Service by clicking the 'Submit Application' button. It is crucial to emphasize that the primary purpose of this form is to intricately detail my requisition to this private firm for the acquisition of a specialist for a G.E.M Registration and this portal maintains a dedicated position as a private entity, separate from any government official or department. </a>
                </label>
              </div>
              <div class="text-start"><button type="submit" id="submit-btn">Submit Application</button></div>
          </form>
        </div>

        <div class="col-lg-5 d-flex align-items-stretch">
          <div class="info">
            <div class="content-box p-2">

              <h4 class="fw-semibold">INSTRUCTIONS TO FILL / फॉर्म भरने के निर्देशें
              </h4>

              <p class="text-uppercase sub-pera pb-3"><strong>Name Of The Applicant:</strong>Applicants have to provide their name and in the case of the company or partnership firm, you may have to enter anyone's authorized partner’s details.</p>
              <p class="text-uppercase sub-pera pb-3"><strong>Mobile number: </strong> The authorized partner or applicant has to enter the mobile number.</p>
              <p class="text-uppercase sub-pera pb-3"><strong>Email Id Of Applicant: </strong>The applicant or authorized partner has to enter their email id.</p>
              <p class="text-uppercase sub-pera pb-3"><strong>Business Name: </strong>The applicant has to provide the details of the business firm which shall be used to sell products and services on the G.E.M portal. You should also carry the registration proof in the name of the business firm.</p>
              <p class="text-uppercase sub-pera pb-3"><strong>Type of Organization : </strong>Select anyone’s nature of business category or type of the organization.</p>
              <p class="text-uppercase sub-pera pb-4"><strong>Date of Incorporation/Commencement of Business present in the Certificate: </strong>Applicants have to provide the date of the company/firm which will be available in the partnership deed or certificate of other business registration.</p>


              <p class="text-uppercase sub-pera pb-4"><strong>Select your Industryu: </strong>Select in which category your industry is.</p>
              <p class="text-uppercase sub-pera pb-4"><strong>Office Address: </strong>Applicants must have to provide valid details according to their registration proof provided in the address of the business firm.</p>
              
            </div>


          </div>

        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

    <section id="faq" class="team section-bg mt-5">
      <div class="container">
        <div class="section-title">
          <h2>FREQUENTLY ASKED QUESTIONS
          </h2>
        </div>

        

        <div class="row">

          <div class="col-lg-6 col-md-6 d-flex align-items-s5tretch">
            <div class="wrapper">
              <div class="container-1">
                <div class="question">Access to a Vast Market</div>
                <div class="answercont">
                  <div class="answer">G.E.M Registration provides sellers with direct access to various departments and public sector organizations.</div>
                </div>
              </div>

              <div class="container-1">
                <div class="question">Huge Market Potential</div>
                <div class="answercont">
                  <div class="answer">G.E.M Registration offers a vast market with a large number of potential buyers from different Department entities.</div>
                </div>
              </div>
              <div class="container-1">
                <div class="question">Transparency</div>
                <div class="answercont">
                  <div class="answer">Sellers can save on marketing expenses as G.E.M Registration acts as a one-stop platform to showcase their products and services.</div>
                </div>
              </div>

              <div class="container-1">
                <div class="question">Easy Registration Process</div>
                <div class="answercont">
                  <div class="answer">The registration process is straightforward, making it easy for sellers to onboard the platform.</div>
                </div>
              </div>
              <div class="container-1">
                <div class="question">Timely Payments</div>
                <div class="answercont">
                  <div class="answer">G.E.M Registration ensures timely payments to sellers, reducing financial strain and promoting healthy business practices.</div>
                </div>
              </div>

              <div class="container-1">
                <div class="question">Online Cataloging</div>
                <div class="answercont">
                  <div class="answer">Sellers can create and manage their online catalogs, making it convenient for buyers to browse and select products.</div>
                </div>
              </div>
              
              <div class="container-1">
                <div class="question">Online Order Management</div>
                <div class="answercont">
                  <div class="answer">Sellers can efficiently manage and track orders, streamlining the fulfillment process.</div>
                </div>
              </div>
              
              <div class="container-1">
                <div class="question">Customer Reviews and Ratings</div>
                <div class="answercont">
                  <div class="answer">G.E.M Registration allows buyers to leave reviews and ratings, which can enhance the seller's reputation.</div>
                </div>
              </div>
              
              <div class="container-1">
                <div class="question">Paperless Documentation</div>
                <div class="answercont">
                  <div class="answer">G.E.M Registration promotes paperless transactions, reducing paperwork and administrative burdens.</div>
                </div>
              </div>
            
            </div>
          </div>

          <div class="col-lg-6 col-md-6 d-flex align-items-s5tretch">
            <div class="wrapper">
              
              <div class="container-1">
                <div class="question">What is G.E.M Registration ?</div>
                <div class="answercont">
                  <div class="answer">G.E.M Registration refers to the process of signing up and creating an account on the Government Marketplace platform. G.E.M is an online marketplace established by the Indian government to facilitate procurement of goods and services by various government departments and organizations.</div>
                </div>
              </div>  
              <div class="container-1">
                <div class="question">Who can do G.E.M Registration</div>
                <div class="answercont">
                  <div class="answer">G.E.M registration is open to various entities, including sellers, service providers, and government buyers. This includes businesses, manufacturers, traders, and service providers.</div>
                </div>
              </div>  
              <div class="container-1">
                <div class="question">Is there any registration fee for G.E.M Registration</div>
                <div class="answercont">
                  <div class="answer">No, there is no registration fee for sellers or buyers for G.E.M Registration. The registration process is free of charge.</div>
                </div>
              </div>  
              <div class="container-1">
                <div class="question">How long does the G.E.M Registration process take?<</div>
                <div class="answercont">
                  <div class="answer">The G.E.M registration process usually takes a few days to complete. The exact time may vary depending on the accuracy of the information provided and the verification process.</div>
                </div>
              </div>  
              <div class="container-1">
                <div class="question">What type of products can be sold After G.E.M Registration?</div>
                <div class="answercont">
                  <div class="answer">After G.E.M Registration Users allows the sale of a wide range of products, including goods, services, and works. Sellers can offer products from various categories, including electronics, furniture, stationery, office supplies, and more.</div>
                </div>
              </div>            

            </div>
          </div>

        </div>

      </div>
    </section>



    <?php include('footer.php'); ?>

