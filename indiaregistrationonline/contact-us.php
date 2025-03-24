<?php include('header.php'); ?> 

 <section class="first-section section contact-us">
    <div class="container">
        <div class="row">
            <div class="consumer-complaint-head">
                <h2>Contact Us/Grievance cell</h2>
                <p>For Other queries like bidding assistance, Portfolio management and etc Please contact us first so we can understand your requirement and help you to Hire best available experts</p>
                <p>To Join as a Expert Please connect us on below no or mail us at info@india.registrationportalindia.org</p> 
            </div>
        </div>
        <div class="row">
            <div class="contact-us-div">
                <div class="information">
                    <div class="inner-info">
                        <h4><i class="fa fa-phone" aria-hidden="true"></i> Call us</h4>
                        <p>+91-8595323374</p>
                    </div>
                    <div class="inner-info">
                        <h4><i class="fa fa-map-marker-alt" aria-hidden="true"></i> Location</h4>
                        <p>Plot No 24 Second Floor , Sewak Park Near Metro pillar - 771 New Delhi - 110059</p>
                    </div>
                    <div class="inner-info">
                        <h4><i class="fa fa-envelope" aria-hidden="true"></i> E-mail address</h4>
                        <p>care@gemregistration.co.in</p>
                    </div>
                </div>
                <div class="form-div">
                    <div class="form-title"> 
                    <form id="regForm" action="#" method="post">
                      <h3>Need Help with legal Complaint?</h3> 
                      <div class="tab"> 
                        <div class="form-inner">
                            <lebal>Name</lebal>
                            <input placeholder="Enter your name..." oninput="this.className = ''" name="name">
                        </div>
                        <div class="form-inner">
                            <lebal>Email</lebal>
                            <input placeholder="Your Email Address" oninput="this.className = ''" name="email">
                        </div>
                        <div class="form-inner">
                            <lebal>Mobile</lebal>
                            <input placeholder="Your Phone Number (Without 0 or +91)" oninput="this.className = ''" name="contact" maxlength="10">
                        </div>  
                        <div class="form-inner">
                            <lebal>Message</lebal>
                            <textarea placeholder="You can write the full complaint or just write the topic. We will call you for the details..." name="message" required=""></textarea>
                        </div> 
                      </div>  
                      <div style="overflow:auto;">
                        <div style="float:right;">
                          <button type="button" id="prevBtn" onclick="nextPrev(-1)" class="probtn">Previous</button>
                          <button type="button" id="nextBtn" onclick="nextPrev(1)" class="probtn">Next</button>
                        </div>
                      </div>
                      <!-- Circles which indicates the steps of the form: -->
                      <div style="display: none;">
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section> 
<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3501.9928568898154!2d77.07818107517933!3d28.629976184197464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s407-408%2F4%2C%20Vishwa%20Deep%20Distt%20Centre%20Janakpuri%20Delhi%20West!5e0!3m2!1sen!2sin!4v1722166132854!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

<?php include('footer.php'); ?> 