<?php include('header.php'); ?> 

<style>
   .abtcontent {
   max-width: 800px;
   margin: auto;
   text-align: center;
   font-size: 16px;
   }
   .about_video_text {
   position: absolute;
   top: 0;
   margin: auto;
   background: rgba(255,255,255,.5);
   left: 0;
   right: 0;
   bottom: 0;
   display: flex;
   align-items: center;
   }
</style>
<div class="img-div">
   <video muted loop autoplay playsinline class="baner-video" id="vid" style="">
      <source src="img/register%20(2).mp4" type="video/mp4">
      <source src="525153088.html" type="video/ogg">
      Your browser does not support the video tag.
   </video>
   <script>
      document.addEventListener("DOMContentLoaded", function () {
        const video = document.getElementById("vid");
        if (video) {
          video.play().catch((error) => {
            console.error("Autoplay failed:", error);
          });
        }
      });
   </script>
   <div class="about_video_text" >
      <div class="abtcontent">
         <h3>WE PRACTICE ONLINE, FAST &amp; COST EFFECTIVE</h3>
         <p>Perfection Consulting India is a team of highly professional CA, CS, Lawyers who driving towards integration of technology with traditional practices to cater the need of MSMEs in the fast moving and cost effective world. We render range of online services for businesses running in India like Company Incorporation, GST Registration, ISO certification, Import Export Code, MSME Registration, Trademark, Copyright, Patent, Tax Return filing, do accounting, legal and financial compliance(s).</p>
      </div>
   </div>
</div>

<section class="section counts">
   <div class="container">
      <div class="row">
         <div class="cont-box">
            <div class="count-card">
               <div class="icon"><img src="img/count/experience.png" alt=""></div>
               <p id='0101' class="count-no">0+</p>
               <p class="count-text">Years of Experience</p>
            </div>
            <div class="count-card">
               <div class="icon"><img src="img/count/Team%20Strength.png" alt=""></div>
               <p id='0103' class="count-no">0+</p>
               <p class="count-text">Team Strength</p>
            </div>
            <div class="count-card">
               <div class="icon"><img src="img/count/Associates%20Tie-ups.png" alt=""></div>
               <p id='0102' class="count-no">0+</p>
               <p class="count-text">Associates Tie-ups</p>
            </div>
            <div class="count-card">
               <div class="icon"><img src="img/count/Startups%20Build.png" alt=""></div>
               <p id='0104' class="count-no">0+</p>
               <p class="count-text">Startups Build</p>
            </div>
            <div class="count-card">
               <div class="icon"><img src="img/count/Satisfied%20Clients.png" alt=""></div>
               <p id='0105' class="count-no">0+</p>
               <p class="count-text">Satisfied Clients</p>
            </div>
            <div class="count-card">
               <div class="icon"><img src="img/count/Assignments.jpg" alt=""></div>
               <p id='0106' class="count-no">0+</p>
               <p class="count-text">Assignments</p>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="section consumer-complaint ">
   <div class="container">
      <div class="row">
         <div class="consumer-complaint-head">
            <h2>About Experience</h2>
            <p>With 10+ years in the industry, we offer extensive experience and expertise. Our commitment to excellence has evolved alongside client needs and economic shifts, ensuring tailored solutions and trusted guidance for your success.</p>
         </div>
      </div>
      <div class="row">
         <div class="about-exp">
            <div class="part">
               <h3>01</h3>
               <h4>Professional Team</h4>
               <p>Our team includes industry experts: CA, CS, CMA and Advocates.</p>
            </div>
            <div class="part">
               <h3>02</h3>
               <h4>Quick Service</h4>
               <p>We deliver timely and top-quality services to our clients.</p>
            </div>
            <div class="part">
               <h3>03</h3>
               <h4>Affordable Pricing</h4>
               <p>We offer a wide range of services at affordable prices.</p>
            </div>
            <div class="part">
               <h3>04</h3>
               <h4>Trusted Services</h4>
               <p>We have served over 10,000 clients in the past 10 years.</p>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="section about-us" style="background: #eff0f469;">
   <div class="container">
      <div class="row">
         <div class="consumer-complaint-head">
            <h2>About US</h2>
         </div>
      </div>
      <div class="row">
         <div class="about-us-div">
            <div class="img-box">
               <img src="img/about-01.jpg" alt="">
            </div>
            <div class="content">
               <span>Welcome to</span>
               <h3>Perfection Consulting India</h3>
               <p>Perfection Consulting India is a premier legal services platform dedicated to empowering consumers and businesses across India. We emphasize integrity, transparency, and expertise, ensuring fair treatment and robust legal protection for all. Our extensive range of services includes consumer complaints, company registrations, trademark protection, tax compliance, and comprehensive legal advice.</p>
               <p>Our unwavering commitment to excellence ensures we maintain the highest standards in every aspect of our work. With a customer-centric approach, we strive to be the preferred destination for individuals and organizations seeking reliable and effective legal solutions tailored to their specific needs.</p>
               <ul>
                  <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Trusted Legal Partner</li>
                  <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Integrity and Transparency</li>
                  <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Expertise and Excellence</li>
                  <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Customer-Centric Approach</li>
               </ul>
               <div class="our-story-div"><a href="about-us.html" class="out-story">Our Story</a></div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="services">
   <div class="services-text">
      <h2>How Perfection Consulting  India can help your Business?</h2>
      <p>From A to Z, we handle everything your business needs to thrive, so you can focus on what you do best.</p>
   </div>
   <div class="services-content">
      <div class="services-container">
         <div class="service-box">
            <img src="img/Documents/Company_formation.png" alt="Company Formation">
            <h3>Company Formation</h3>
            <p>We offer a one-stop shop for business incorporation. Whether you choose a private limited company, OPC, LLP, partnership, or another structure, we'll take care of the paperwork.</p>
         </div>
         <div class="service-box">
            <img src="img/Documents/registration.png" alt="Business Registration & Licensing">
            <h3>Business Registration & Licensing</h3>
            <p>From basic licenses to complex permits, we secure all the legalities for your business.</p>
         </div>
         <div class="service-box">
            <img src="img/Documents/accounting.png" alt="Accounting & Tax Compliances">
            <h3>Accounting & Tax Compliances</h3>
            <p>Make smarter business decisions with our Virtual CFO services. We provide clear financial insights through accurate bookkeeping, insightful reports, and timely filings. </p>
         </div>
         <div class="service-box">
            <img src="img/Documents/branding.png" alt="Branding & Marketing">
            <h3>Branding & Marketing</h3>
            <p>Stand out online with a powerful brand identity and a strategic marketing plan. We provide logo design, trademark services, website development, and digital marketing expertise. </p>
         </div>
      </div>
      <div class="services-image">
         <img src="img/Documents/service-help.webp" alt="">
      </div>
   </div>
</section>
<section class="section testimonial-section">
   <div class="container">
      <div class="row">
         <div class="testimonial-div">
            <h3>Best Services</h3>
            <p>DO YOU HAVE ANY QUESTIONS? <br>FEEL FREE TO CONTACT US</p>
            <a href="contact-us.html">Contact With Us</a>
         </div>
      </div>
   </div>
</section>

<?php include('footer.php'); ?>