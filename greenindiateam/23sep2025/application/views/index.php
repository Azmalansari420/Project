<?php include('header.php'); ?>
<style>
/* Position the overlay form */
.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    pointer-events: none;
}

.hero-overlay .hero-style1 {
    pointer-events: auto; 
    /*background: rgba(0, 0, 0, 0.4); */
    padding: 20px;
    border-radius: 10px;
}

.input-size {
    width: 250px;
    margin-bottom: 10px;
}

.th-btn.star-btn {
    width: 100%;
}
button.accordion-button.collapsed {
    padding: 5px 45px 5px 30px !important;
    min-height: 38px !important;
}
.accordion-card:not(:last-child) {
    margin-bottom: 10px!important;
}
.accordion-card .accordion-body {
    padding: 11px 30px 18px 30px !important;
}
.checklist li>i {
    font-size: 8px !important;
}

button.accordion-button {
    font-weight: 400 !important;
}
.sub-title::after {
    content: '';
    height: 2px;
    width: 60px;
    background: transparent;
    display: inline-block;
}
</style>

      <div class="th-hero-wrapper hero-1" id="hero">
          <div id="heroCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
              <div class="carousel-inner">
                  <div class="carousel-item active">
                      <img src="<?=base_url()?>assets/1.jpg" class="d-block w-100" alt="Slide 1">
                  </div>
                  <div class="carousel-item">
                      <img src="<?=base_url()?>assets/2.jpg" class="d-block w-100" alt="Slide 2">
                  </div>
                  <div class="carousel-item">
                      <img src="<?=base_url()?>assets/3.jpg" class="d-block w-100" alt="Slide 3">
                  </div>
                  <div class="carousel-item">
                      <img src="<?=base_url()?>assets/4.jpg" class="d-block w-100" alt="Slide 4">
                  </div>
				   <div class="carousel-item">
                      <img src="<?=base_url()?>assets/5.jpg" class="d-block w-100" alt="Slide 5">
                  </div>
              </div>

              <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
              </a>
          </div>

          <div class="hero-overlay">
              <div class="container">
                  <div class="hero-style1 text-center">
                      <span class="sub-title" style="color: transparent;"> 4</span>
                      <h1 class="hero-title">
                          <span class="title1" style="color: transparent;"> 4</span>
                          <span class="title2" style="color: transparent;">  4</span>
                          <span class="title2" style="color: transparent;"> 1</span>
                      </h1>

                      <div class="header-form">
                          <form action="<?=base_url('welcome/enquiry_form')?>" method="post">
                              <input type="text" name="name" placeholder="Name" class="input-size"><br>
                              <input type="text" name="mobile" placeholder="Mobile No." class="input-size"><br>
                              <select name="service" class="input-size">
                                  <option value="" disabled selected hidden>Select Service</option>
                                  <option value="Electrician">Electrician</option>
                                  <option value="TV Repair & Installation">TV Repair & Installation</option>
                                  <option value="AC Repair & Services">AC Repair & Services</option>
                                  <option value="Full Room Service">Full Room Service</option>
                              </select>
                              <input type="text" name="location" placeholder="Location/Pincode" class="input-size"><br>
                              <button type="submit" name="submit" class="th-btn star-btn">Submit Message</button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>




      




      <section class="th-service-1 overflow-hidden space pt-5 pb-2" id="service-sec" data-bg-src="<?=base_url() ?>assets/img/bg/service-bg-1-1.png">
         <!-- <div class="shape-mockup moving th-service-1__shape-1"><img src="<?=base_url() ?>assets/img/shape/services-shape-1-1.svg" alt="shape"></div>
         <div class="shape-mockup jump th-service-1__shape-2"><img src="<?=base_url() ?>assets/img/shape/services-shape-1-2.svg" alt="shape"></div>
         <div class="shape-mockup jump-reverse th-service-1__shape-3"><img src="<?=base_url() ?>assets/img/shape/services-shape-1-3.svg" alt="shape"></div>
         <div class="shape-mockup jump th-service-1__shape-4"><img src="<?=base_url() ?>assets/img/shape/services-shape-1-4.svg" alt="shape"></div> -->
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-xxl-6 col-xl-7 col-lg-7 col-md-8">
                  <div class="title-area text-center">
                     <!-- <span class="sub-title justify-content-center">Our Services</span> -->
                     <h2 class="sec-title">Our Services</h2>
                     <!-- <h2 class="sec-title">The Services We Provide For <span class="text-theme">Our Customer</span></h2> -->
                  </div>
               </div>
            </div>
            <!-- 11 -->


            <div class="row gy-30 justify-content-center mt-4" id="TV-Repair">               
               <div class="col-xl-6">
                  <div class="why-2-right">
                     <div class="title-area">
                        <h2 class="sec-title">1. TV Repair & Installation</h2>
                        <p class="sec-text">TV Installation & Repair Services in Delhi NCR <br>Wall mounting, setup & repair of LED/LCD/Smart TVs. Same-day installation with professional technicians.</p>
                     </div>

                     <h5>Why Choose Us</h5>
                     <div class="checklist style2 mb-35">
                        <ul>
                           <li><i class="fa-solid fa-circle"></i>  Certified & Skilled Technicians</li>
                           <li><i class="fa-solid fa-circle"></i>  Same-Day Installation & Repair</li>
                           <li><i class="fa-solid fa-circle"></i>  Affordable, Transparent Pricing</li>
                           <li><i class="fa-solid fa-circle"></i>  Warranty on Installation & Repairs</li>
                           <li><i class="fa-solid fa-circle"></i>   Support for All Brands & Models</li>
                        </ul>
                     </div>
                     <div class="d-flex justify-content-center" style="gap: 20px;">
                        <button   class="th-btn star-btn" onclick="openModal()" style="width: 50%;">Book Now</button >
                        <a   class="th-btn star-btn" href="tel:8090400401" style="width: 50%;">Call Now</a >
                     </div>
                  </div>
               </div>
               <style>
                 

                   .img2 img {
                       width: 100%;
                       transition: transform 0.5s ease;
                   }

                   .img2:hover img {
                       transform: scale(1.2);
                   }
               </style>

               <div class="col-xl-6">
                  <div class="why-2-left">
                     <div class="img2"><a href="https://wa.me/918090400401"><img src="<?=base_url() ?>assets/tv.jpeg" alt="Image" style="border-radius: 10px;"></a></div>
                  </div>
               </div>

               <div class="col-xl-4"> 
                  <h5>Our Services</h5>
                  <div class="checklist style2 mb-35">
                     <ul>
                        <li><i class="fa-solid fa-circle"></i>   TV Wall Mounting (Fixed / Swivel Brackets)</li>
                        <li><i class="fa-solid fa-circle"></i>     LED/LCD/Smart TV Installation</li>
                        <li><i class="fa-solid fa-circle"></i>   Smart TV Setup & Configuration (Wi-Fi, Apps, OTT)</li>
                        <li><i class="fa-solid fa-circle"></i>   TV Repair & Troubleshooting</li>
                        <li><i class="fa-solid fa-circle"></i>     Sound System & Home Theatre Setup</li>
                     </ul>
                  </div>
               </div>

               <div class="col-xl-4"> 
                  <h5>How It Works</h5>
                  <div class="checklist style2 mb-35">
                     <ul>
                        <li><i class="fa-solid fa-circle"></i>Book a technician online or via call</li>
                        <li><i class="fa-solid fa-circle"></i>  Technician arrives as scheduled</li>
                        <li><i class="fa-solid fa-circle"></i> Installation / repair done professionally</li>
                        <li><i class="fa-solid fa-circle"></i>Final inspection + warranty provided</li>
                     </ul>
                  </div>
               </div>
               <div class="col-xl-4"> 
                  <h5>Sample Pricing</h5>
                  <div class="checklist style2 mb-35">
                     <ul>
                        <li><i class="fa-solid fa-circle"></i>   inspection charge 299 25% off</li>
                     </ul>
                  </div>
               </div>

               <div class="col-xl-12">
                  <div class="row gx-60 justify-content-center">
                     <div class="col-lg-12">
                        <div class="accordion" id="faqAccordion">
                           <div class="accordion-card">
                              <div class="accordion-header" id="collapse-item-1"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">What types of TVs do you repair and install?</button></div>
                              <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                 <div class="accordion-body">
                                    <p class="faq-text">We repair and install LED, LCD, Plasma, and Smart TVs of all leading brands. From small-size TVs to large screens, our team can handle them all.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-card">
                              <div class="accordion-header" id="collapse-item-2"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">Do you provide wall-mounting services?</button></div>
                              <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                 <div class="accordion-body">
                                    <p class="faq-text">Yes, we offer secure and professional wall-mounting for all TV sizes. Our technicians ensure safe installation at the right viewing angle.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-card">
                              <div class="accordion-header" id="collapse-item-3"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">Can you fix screen or sound issues?</button></div>
                              <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                 <div class="accordion-body">
                                    <p class="faq-text">Yes, we repair display problems, sound disturbances, remote-control issues, and connectivity errors. Our team is equipped to identify and fix both minor and major faults</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-card">
                              <div class="accordion-header" id="collapse-item-4"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">Do you offer doorstep repair service?</button></div>
                              <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion">
                                 <div class="accordion-body">
                                    <p class="faq-text"> Yes, most TV issues can be diagnosed and repaired at your home. Only in rare cases, if major parts replacement is required, the unit may be taken to our service center</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-card">
                              <div class="accordion-header" id="collapse-item-5"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">How do you ensure safety during work?</button></div>
                              <div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="collapse-item-5" data-bs-parent="#faqAccordion">
                                 <div class="accordion-body">
                                    <p class="faq-text">We strictly follow safety protocols, use high-quality equipment, and ensure that every task is completed with proper grounding, insulation, and secure installation</p>
                                 </div>
                              </div>
                           </div>
                           
                        </div>
                     </div>
                  </div>
               </div>

            </div>




            <div class="row gy-30 justify-content-center mt-5" id="Electrician-Services">
               <div class="col-xl-6">
                  <div class="why-2-left">
                     <div class="img2"><a href="https://wa.me/918090400401"><img src="<?=base_url() ?>assets/elec.jpeg" alt="Image" style="border-radius: 10px;"></a></div>
                  </div>
               </div>
               <div class="col-xl-6">
                  <div class="why-2-right">
                     <div class="title-area">
                        <h2 class="sec-title">2. Electrician Services</h2>
                        <p class="sec-text">Trusted Electrician Services in Delhi NCR<br>Certified professionals for installation, repair, and wiring. Quick response & transparent pricing.</p>
                     </div>

                     <h5>Why Choose Us</h5>
                     <div class="checklist style2 mb-35">
	                     <ul>
	                        <li><i class="fa-solid fa-circle"></i> 24/7 Emergency Service Available</li>
	                        <li><i class="fa-solid fa-circle"></i> Certified & Background Verified Electricians</li>
	                        <li><i class="fa-solid fa-circle"></i> On-Time Arrival & Same-Day Service.</li>
	                        <li><i class="fa-solid fa-circle"></i> Transparent Pricing – No Hidden Charges</li>
                           <li><i class="fa-solid fa-circle"></i> Warranty on Workmanship</li>
	                     </ul>
	                  </div>
                  	<div class="d-flex justify-content-center" style="gap: 20px;">
                        <button   class="th-btn star-btn" onclick="openModal()" style="width: 50%;">Book Now</button >
                        <a   class="th-btn star-btn" href="tel:8090400401" style="width: 50%;">Call Now</a >
                     </div>
                  </div>
               </div>

               <div class="col-xl-4"> 
                  <h5>Our Services</h5>
                     <div class="checklist style2 mb-35">
                        <ul>
                           <li><i class="fa-solid fa-circle"></i> Fan, Light, Switch & MCB Installation</li>
                           <li><i class="fa-solid fa-circle"></i> Complete Home & Office Wiring / Rewiring</li>
                           <li><i class="fa-solid fa-circle"></i> Inverter, UPS & Generator Installation</li>
                           <li><i class="fa-solid fa-circle"></i> Appliance Installation (AC, Geyser, Microwave, etc.)</li>
                           <li><i class="fa-solid fa-circle"></i> Fault Detection & Electrical Troubleshooting</li>
                           <li><i class="fa-solid fa-circle"></i> Commercial & Industrial Electrical Solutions</li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-xl-4"> 
                     <h5>How It Works</h5>
                     <div class="checklist style2 mb-35">
                        <ul>
                           <li><i class="fa-solid fa-circle"></i> Book a service via call or online form</li>
                           <li><i class="fa-solid fa-circle"></i> Technician reaches your location within 60 minutes</li>
                           <li><i class="fa-solid fa-circle"></i> Inspection & cost estimate provided</li>
                           <li><i class="fa-solid fa-circle"></i> Work carried out with quality & safety assurance</li>
                           <li><i class="fa-solid fa-circle"></i> Warranty and after-service support included</li>
                        </ul>
                     </div>
               </div>

                  <div class="col-xl-4"> 
                     <h5>Sample Pricing</h5>
                     <div class="checklist style2 mb-35">
                        <ul>
                           <li><i class="fa-solid fa-circle"></i>   inspection & visit charge  ₹ 49</li>
                        </ul>
                     </div>
               </div>

               <div class="col-xl-12">
                  <div class="row gx-60 justify-content-center">
                     <div class="col-lg-12">
                        <div class="accordion" id="faqAccordionelect">
                           <div class="accordion-card">
                              <div class="accordion-header" id="collapse-item-1elect"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1elect" aria-expanded="true" aria-controls="collapse-1elect">What electrical services do you offer?</button></div>
                              <div id="collapse-1elect" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1elect" data-bs-parent="#faqAccordionelect">
                                 <div class="accordion-body">
                                    <p class="faq-text">Our services cover wiring, rewiring, switchboard installation and repair, lighting and fan installation, inverter and MCB setup, and complete electrical maintenance.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-card">
                              <div class="accordion-header" id="collapse-item-2elect"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2elect" aria-expanded="false" aria-controls="collapse-2elect">Are your electricians trained and certified?</button></div>
                              <div id="collapse-2elect" class="accordion-collapse collapse" aria-labelledby="collapse-item-2elect" data-bs-parent="#faqAccordionelect">
                                 <div class="accordion-body">
                                    <p class="faq-text">Yes, all our electricians are fully certified, experienced, and trained to follow safety standards, ensuring reliable and professional service.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-card">
                              <div class="accordion-header" id="collapse-item-3elect"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3elect" aria-expanded="false" aria-controls="collapse-3elect">Do you provide emergency electrical services?</button></div>
                              <div id="collapse-3elect" class="accordion-collapse collapse" aria-labelledby="collapse-item-3elect" data-bs-parent="#faqAccordionelect">
                                 <div class="accordion-body">
                                    <p class="faq-text">Yes, we offer urgent support for emergencies like power outages, sparks, and short circuits. Our team responds quickly to minimize risks and restore safety.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-card">
                              <div class="accordion-header" id="collapse-item-4elect"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4elect" aria-expanded="false" aria-controls="collapse-4elect">Do you handle both residential and commercial projects?</button></div>
                              <div id="collapse-4elect" class="accordion-collapse collapse" aria-labelledby="collapse-item-4elect" data-bs-parent="#faqAccordionelect">
                                 <div class="accordion-body">
                                    <p class="faq-text"> Yes, we provide services for homes, offices, and commercial spaces. From small household repairs to large-scale wiring, we cover it all.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-card">
                              <div class="accordion-header" id="collapse-item-5elect"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5elect" aria-expanded="false" aria-controls="collapse-5elect">How do you ensure safety during work?</button></div>
                              <div id="collapse-5elect" class="accordion-collapse collapse" aria-labelledby="collapse-item-5elect" data-bs-parent="#faqAccordionelect">
                                 <div class="accordion-body">
                                    <p class="faq-text">We strictly follow safety protocols, use high-quality equipment, and ensure that every task is completed with proper grounding, insulation, and secure installation</p>
                                 </div>
                              </div>
                           </div>
                           
                        </div>
                     </div>
                  </div>
               </div>

            </div>

            <!-- 22 -->


            <div class="row gy-30 justify-content-center mt-4" id="room-cleaning">               
               <div class="col-xl-6">
                  <div class="why-2-right">
                     <div class="title-area">
                        <h2 class="sec-title">3. Full Home Cleaning</h2>
                        <p class="sec-text">Professional Full Home Cleaning in Delhi NCR <br>Deep cleaning for your home, kitchen, and bathroom by trained experts. Affordable packages & eco-friendly products. </p>
                     </div>

                     <h5>Why Choose Us</h5>
                     <div class="checklist style2 mb-35">
                        <ul>
                           <li><i class="fa-solid fa-circle"></i>   Trained & Background Verified Cleaning Staff </li>
                           <li><i class="fa-solid fa-circle"></i>   Eco-Friendly & Safe Cleaning Products </li>
                           <li><i class="fa-solid fa-circle"></i>   Advanced Equipment for Deep Cleaning </li>
                           <li><i class="fa-solid fa-circle"></i>   Same-Day Service Available </li>
                           <li><i class="fa-solid fa-circle"></i>   100% Satisfaction Guarantee </li>                           
                        </ul>
                     </div>

                     <div class="d-flex justify-content-center" style="gap: 20px;">
                        <button   class="th-btn star-btn" onclick="openModal()" style="width: 50%;">Book Now</button >
                        <a   class="th-btn star-btn" href="tel:8090400401" style="width: 50%;">Call Now</a >
                     </div>
                  </div>
               </div>

               <div class="col-xl-6">
                  <div class="why-2-left">
                     <div class="img2"><a href="https://wa.me/918090400401"><img src="<?=base_url() ?>assets/home-cl.jpeg" alt="Image" style="border-radius: 10px;"></a></div>
                  </div>
               </div>

               <div class="col-xl-4"> 
                  <h5>Our Services</h5>
                     <div class="checklist style2 mb-35">
                        <ul>
                           <li><i class="fa-solid fa-circle"></i>   Complete Home Deep Cleaning (1BHK / 2BHK / 3BHK / Villas)</li>
                           <li><i class="fa-solid fa-circle"></i>   Kitchen Deep Cleaning (Cabinets, Chimney, Tiles, Sink)</li>
                           <li><i class="fa-solid fa-circle"></i>   Bathroom Deep Cleaning & Sanitization</li>
                           <li><i class="fa-solid fa-circle"></i>   Sofa, Carpet & Mattress Shampooing</li>
                           <li><i class="fa-solid fa-circle"></i>   Balcony & Window Cleaning</li>
                           <li><i class="fa-solid fa-circle"></i> Commercial & Industrial Electrical Solutions</li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-xl-4"> 
                     <h5>How It Works</h5>
                     <div class="checklist style2 mb-35">
                        <ul>
                           <li><i class="fa-solid fa-circle"></i>Choose your cleaning package</li>
                           <li><i class="fa-solid fa-circle"></i> 2. Our team arrives with equipment & supplies</li>
                           <li><i class="fa-solid fa-circle"></i> 3. Deep cleaning process (2–6 hours depending on size)</li>
                           <li><i class="fa-solid fa-circle"></i> 4. Final quality check before leaving</li>
                        </ul>
                     </div>
               </div>

               <div class="col-xl-4"> 
                     <h5>Sample Pricing</h5>
                     <div class="checklist style2 mb-35">
                        <ul>
                           <li><i class="fa-solid fa-circle"></i>   2 BHK Full Cleaning – ₹899 25% off</li>
                           <li><i class="fa-solid fa-circle"></i> 2 BHK (2 Bedrooms, 1 Hall, 1 Kitchen, 2 Bathrooms) – Furniture not included</li>
                        </ul>
                     </div>
               </div>

               <div class="col-xl-12">
                  <div class="row gx-60 justify-content-center">
                     <div class="col-lg-12">
                        <div class="accordion" id="faqAccordionfull">
                           <div class="accordion-card">
                              <div class="accordion-header" id="collapse-item-1home"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1home" aria-expanded="true" aria-controls="collapse-1home">What does your full home cleaning package include?</button></div>
                              <div id="collapse-1home" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1home" data-bs-parent="#faqAccordionfull">
                                 <div class="accordion-body">
                                    <p class="faq-text">Our package covers deep cleaning of the entire house, including bedrooms, kitchens, bathrooms, sofas, carpets, windows, and sanitization. It ensures every corner of your home is spotless.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-card">
                              <div class="accordion-header" id="collapse-item-2home"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2home" aria-expanded="false" aria-controls="collapse-2home">Are your cleaning products safe for children and pets?</button></div>
                              <div id="collapse-2home" class="accordion-collapse collapse" aria-labelledby="collapse-item-2home" data-bs-parent="#faqAccordionfull">
                                 <div class="accordion-body">
                                    <p class="faq-text">Yes, we use eco-friendly and non-toxic cleaning products that are safe for both children and pets, while still being tough on dirt and germs.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-card">
                              <div class="accordion-header" id="collapse-item-3home"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3home" aria-expanded="false" aria-controls="collapse-3home">How long does a home deep cleaning usually take?</button></div>
                              <div id="collapse-3home" class="accordion-collapse collapse" aria-labelledby="collapse-item-3home" data-bs-parent="#faqAccordionfull">
                                 <div class="accordion-body">
                                    <p class="faq-text">The duration depends on the size and condition of the house. On average, it takes between 4 to 8 hours for a full cleaning session.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-card">
                              <div class="accordion-header" id="collapse-item-4home"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4home" aria-expanded="false" aria-controls="collapse-4home">Do you provide specialized sofa and carpet cleaning?</button></div>
                              <div id="collapse-4home" class="accordion-collapse collapse" aria-labelledby="collapse-item-4home" data-bs-parent="#faqAccordionfull">
                                 <div class="accordion-body">
                                    <p class="faq-text"> Yes, we offer professional sofa and carpet shampooing as part of our services. This helps remove stains, dust, and allergens, making your furniture fresh and hygienic.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-card">
                              <div class="accordion-header" id="collapse-item-5home"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5home" aria-expanded="false" aria-controls="collapse-5home">How frequently should I get deep cleaning done?</button></div>
                              <div id="collapse-5home" class="accordion-collapse collapse" aria-labelledby="collapse-item-5home" data-bs-parent="#faqAccordionfull">
                                 <div class="accordion-body">
                                    <p class="faq-text"> For best results, we recommend deep cleaning every 3 to 6 months. Regular cleaning not only keeps your home looking fresh but also maintains a healthy living environment.</p>
                                 </div>
                              </div>
                           </div>
                           
                        </div>
                     </div>
                  </div>
               </div>

            </div>
            

            <!-- 33 -->
            <div class="row gy-30 justify-content-center mt-4" id="AC-Repair">
               <div class="col-xl-6">
                  <div class="why-2-left">
                     <div class="img2"><a href="https://wa.me/918090400401"><img src="<?=base_url() ?>assets/acpi.jpeg" alt="Image" style="border-radius: 10px;"></a></div>
                  </div>
               </div>
               <div class="col-xl-6">
                  <div class="why-2-right">
                     <div class="title-area">
                        <h2 class="sec-title">4. AC Repair & Services</h2>
                        <p class="sec-text">House cleaning services are professional services designed to clean and maintain residential spaces. They provide convenience and ensure a hygienic living environment for homeowners, often offering various packages tailored to different needs and preferences.</p>
                     </div>

                     <div class="checklist style2 mb-35">
	                     <ul>
	                        <li><i class="fa-solid fa-circle"></i>Highlights energy efficiency and modern solutions.</li>
	                        <li><i class="fa-solid fa-circle"></i>Indicates safety inspections and troubleshooting.</li>
	                        <li><i class="fa-solid fa-circle"></i> Shows experience handling large projects.</li>
	                        <li><i class="fa-solid fa-circle"></i> Builds trust for residential customers.</li>
	                     </ul>
	                  </div>
                  	<div class="d-flex justify-content-center" style="gap: 20px;">
                        <button   class="th-btn star-btn" onclick="openModal()" style="width: 50%;">Book Now</button >
                        <a   class="th-btn star-btn" href="tel:8090400401" style="width: 50%;">Call Now</a >
                     </div>
                  </div>
               </div>

                <div class="col-xl-12">
                  <div class="row gx-60 justify-content-center">
                     <div class="col-lg-12">
                        <div class="accordion" id="faqAccordionfulldd">
                           <div class="accordion-card">
                              <div class="accordion-header" id="collapse-item-1home"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1home" aria-expanded="true" aria-controls="collapse-1home">What types of air conditioners do you service?</button></div>
                              <div id="collapse-1home" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1home" data-bs-parent="#faqAccordionfulldd">
                                 <div class="accordion-body">
                                    <p class="faq-text">Our technicians are trained to handle all major types of air conditioners, including split, window, and inverter units. We also service different brands, ensuring each model receives the right care.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-card">
                              <div class="accordion-header" id="collapse-item-2home"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2home" aria-expanded="false" aria-controls="collapse-2home">How often should I get my AC serviced?</button></div>
                              <div id="collapse-2home" class="accordion-collapse collapse" aria-labelledby="collapse-item-2home" data-bs-parent="#faqAccordionfulldd">
                                 <div class="accordion-body">
                                    <p class="faq-text">For best performance, it is recommended to service your AC at least once every 6 months. Regular servicing improves cooling, prevents breakdowns, saves electricity, and increases the lifespan of the unit.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-card">
                              <div class="accordion-header" id="collapse-item-3home"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3home" aria-expanded="false" aria-controls="collapse-3home">Do you provide AC gas refilling?</button></div>
                              <div id="collapse-3home" class="accordion-collapse collapse" aria-labelledby="collapse-item-3home" data-bs-parent="#faqAccordionfulldd">
                                 <div class="accordion-body">
                                    <p class="faq-text">Yes, we offer AC gas refilling using high-quality refrigerants. Proper gas levels ensure effective cooling and help your AC run efficiently without consuming extra power.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-card">
                              <div class="accordion-header" id="collapse-item-4home"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4home" aria-expanded="false" aria-controls="collapse-4home">Can you fix common AC issues like water leakage or low cooling?</button></div>
                              <div id="collapse-4home" class="accordion-collapse collapse" aria-labelledby="collapse-item-4home" data-bs-parent="#faqAccordionfulldd">
                                 <div class="accordion-body">
                                    <p class="faq-text">Absolutely. Our experts can resolve problems such as water leakage, unusual noise, low cooling, foul odor, and even compressor or PCB-related issues.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-card">
                              <div class="accordion-header" id="collapse-item-5home"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5home" aria-expanded="false" aria-controls="collapse-5home">Is doorstep AC service available?</button></div>
                              <div id="collapse-5home" class="accordion-collapse collapse" aria-labelledby="collapse-item-5home" data-bs-parent="#faqAccordionfulldd">
                                 <div class="accordion-body">
                                    <p class="faq-text">  Yes, we provide complete doorstep AC servicing and repair. Our goal is to offer you fast, convenient, and professional solutions without any hassle.</p>
                                 </div>
                              </div>
                           </div>
                           
                        </div>
                     </div>
                  </div>
               </div>


            </div>
            <!-- 4 -->
            


         </div>
      </section>

<style>
  
</style>
      <div class="overflow-hidden space-bottom space" id="about-sec">
         <div class="container">
            <div class="row gy-30 align-items-center">
               <div class="col-xl-7 mb-xl-0">
                  <div class="img-box1">
                     <div class="img1 jump-reverse"><img src="<?=base_url() ?>assets/tv-installation.jpg" alt="About" style="width: 200px;height: 152px;"></div>
                     <div class="shape1 jump"><img src="<?=base_url() ?>assets/200-amp-service-upgrades-edmonton-sq-jpg.webp" alt="Image" style="width: 200px;height: 152px;"></div>
                     <div class="img2">
                        <img class="tilt-active" src="<?=base_url() ?>assets/1737790757587.webp" alt="Image">
                        <div class="about-play-btn-wrap"><a href="https://www.youtube.com/watch?v=U-M1oep7kjI" class="play-btn style2 popup-video"><i class="fa-sharp fa-solid fa-play"></i></a></div>
                     </div>
                     <div class="year-counter">
                        <div class="rotate-text">
                           <h5 class="year-counter_text-small">Years Of</h5>
                           <h4 class="year-counter_text-big">Skill Experience</h4>
                        </div>
                        <div class="year-counter_number"><span class="counter-number">10</span></div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-5">
                  <div class="title-area">
                     <span class="sub-title before-none">About Us</span>
                     <h2 class="sec-title">Who We are.</h2>
                     <p class="sec-text">Green India Team is a fast-growing start-up
                        offering home appliance repair and services, full home cleaning services across India.<br>
                         We aim to build a large, trusted network of
                        professionals to deliver high-quality service at
                        customers' doorsteps.</p>
                  </div>
                  <div class="checklist style2 mb-35">
                     <ul>
                        <li><i class="fa-solid fa-circle"></i> One-off, weekly or fortnightly visits</li>
                        <li><i class="fa-solid fa-circle"></i> Vetted & background-checked cleaners</li>
                        <li><i class="fa-solid fa-circle"></i> Road Test Preparation with 98% success</li>
                        <li><i class="fa-solid fa-circle"></i> Book, manage & pay online</li>
                     </ul>
                  </div>
                  <!-- <div><a href="about.html" class="th-btn star-btn">Discover More</a></div> -->
               </div>
            </div>
         </div>
      </div>

      <div class="why-choose-area overflow-hidden space pb-0">
         <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
               <div class="col-xl-12 text-center text-xl-start">
                  <div class="title-area">
                     <!-- <span class="sub-title before-none lg-after-none justify-content-center justify-content-xl-start">Why choose us</span> -->
                     <h2 class="sec-title">Why choose Green India Team</h2>
                  </div>
               </div>
            </div>
            <div class="row gx-60 gy-40 align-items-center justify-content-center">
               <div class="col-xl-4 col-lg-8">
                  <div class="why-img-box1">
                     <div class="img1"><img src="<?=base_url() ?>assets/whowe.jpeg" alt="why-img"></div>
                  </div>
               </div>
               <div class="col-xl-8">
                  <div class="choose-feature-wrap">
                     <div class="choose-feature-wrap__box">
                        <div class="box-icon"><i class="fa-thin fa-users"></i></div>
                        <div class="choose-feature-wrap__content">
                           <h3 class="box-title">Reliable Cleaning Crew</h3>
                           <p class="box-text">Tailored cleaning services based on the specific needs and schedules.</p>
                        </div>
                     </div>
                     <div class="choose-feature-wrap__box">
                        <div class="box-icon"><i class="fa-light fa-clock-one-thirty"></i></div>
                        <div class="choose-feature-wrap__content">
                           <h3 class="box-title">On-Time Services</h3>
                           <p class="box-text">Clients can focus on their core activities or enjoy their free time without.</p>
                        </div>
                     </div>
                     <div class="choose-feature-wrap__box">
                        <div class="box-icon"><i class="fa-thin fa-box"></i></div>
                        <div class="choose-feature-wrap__content">
                           <h3 class="box-title">Flexible Package</h3>
                           <p class="box-text">Achieving a higher level of cleanliness and sanitation compared to regular.</p>
                        </div>
                     </div>
                     <div class="choose-feature-wrap__box">
                        <div class="box-icon"><i class="fa-thin fa-face-smile"></i></div>
                        <div class="choose-feature-wrap__content">
                           <h3 class="box-title">Transparent Pricing</h3>
                           <p class="box-text">Fixed price for specific types of cleaning services or packages.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>


      <section class="testi-card-area-2 overflow-hidden space pb-5" id="testi-sec">
         <div class="shape-mockup testimonials-bg-3" data-right="0"><img src="<?=base_url() ?>assets/img/shape/testimonials-bg-3.png" alt="Image"></div>
         <div class="container">
            <div class="row">
               <div class="col-xl-7 col-lg-12">
                  <div class="title-area">
                     <!-- <span class="sub-title style-3"><span class="left"></span> Testimonials</span> -->
                     <h2 class="sec-title">Our Customer Feedback</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xxl-12">
                  <div class="testi-card-slide">
                     <div class="swiper has-shadow th-slider" id="testiSlide1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                        <div class="swiper-wrapper">
                           <div class="swiper-slide">
                              <div class="testi-block style-3" dir="ltr">
                                 <div class="testi-block-top">
                                    <div class="box-img"><img src="<?=base_url() ?>assets/default_avatar.png" alt="Avater"></div>
                                    <div class="content">
                                       <h3 class="box-title">Soniya Bagdi</h3>
                                       <!-- <p class="box-desig">Homeowner</p> -->
                                    </div>
                                 </div>
                                 <div class="box-review"><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i></div>
                                 <!-- <h3 class="box-title">Homeowner</h3> -->
                                 <p class="box-text">The technician who fixed my washing machine was well-trained and explained everything. Good job by the team. Highly recommend for appliance services.</p>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="testi-block style-3" dir="ltr">
                                 <div class="testi-block-top">
                                    <div class="box-img"><img src="<?=base_url() ?>assets/default_avatar.png" alt="Avater"></div>
                                    <div class="content">
                                       <h3 class="box-title">nisha tatawat</h3>
                                       <!-- <p class="box-desig">Homeowner</p> -->
                                    </div>
                                 </div>
                                 <div class="box-review"><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i></div>
                                 <!-- <h3 class="box-title">Homeowner</h3> -->
                                 <p class="box-text">I got my washing machine repaired in Delhi. The booking process was smooth, the staff were polite, and the rates were affordable. Thank you, Green India Team.</p>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="testi-block style-3" dir="ltr">
                                 <div class="testi-block-top">
                                    <div class="box-img"><img src="<?=base_url() ?>assets/default_avatar.png" alt="Avater"></div>
                                    <div class="content">
                                       <h3 class="box-title">Kajal Singh</h3>
                                       <!-- <p class="box-desig">Homeowner</p> -->
                                    </div>
                                 </div>
                                 <div class="box-review"><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i></div>
                                 <!-- <h3 class="box-title">Homeowner</h3> -->
                                 <p class="box-text">Green India Team repaired my microwave within an hour. Very professional behaviour and reasonable pricing. Highly satisfied and will use them again, Delhi</p>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="testi-block style-3" dir="ltr">
                                 <div class="testi-block-top">
                                    <div class="box-img"><img src="<?=base_url() ?>assets/default_avatar.png" alt="Avater"></div>
                                    <div class="content">
                                       <h3 class="box-title">Shaista Parveen</h3>
                                       <!-- <p class="box-desig">Homeowner</p> -->
                                    </div>
                                 </div>
                                 <div class="box-review"><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i></div>
                                 <!-- <h3 class="box-title">Homeowner</h3> -->
                                 <p class="box-text">Amazing experience with Green India Team! They repaired my microwave and deep-cleaned the kitchen perfectly. Very friendly and efficient team. Worth every rupee. Great for home maintenance work.</p>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="testi-block style-3" dir="ltr">
                                 <div class="testi-block-top">
                                    <div class="box-img"><img src="<?=base_url() ?>assets/default_avatar.png" alt="Avater"></div>
                                    <div class="content">
                                       <h3 class="box-title">Arbaaz Hussain</h3>
                                       <!-- <p class="box-desig">Homeowner</p> -->
                                    </div>
                                 </div>
                                 <div class="box-review"><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i></div>
                                 <!-- <h3 class="box-title">Homeowner</h3> -->
                                 <p class="box-text">Tried the Green India Team for appliance repair and deep cleaning. Excellent service, punctual staff, and affordable rates. My kitchen looks brand new! Will surely use their service again. Highly recommended</p>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="testi-block style-3" dir="ltr">
                                 <div class="testi-block-top">
                                    <div class="box-img"><img src="<?=base_url() ?>assets/default_avatar.png" alt="Avater"></div>
                                    <div class="content">
                                       <h3 class="box-title">Solanki Mahesh</h3>
                                       <!-- <p class="box-desig">Homeowner</p> -->
                                    </div>
                                 </div>
                                 <div class="box-review"><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i></div>
                                 <!-- <h3 class="box-title">Homeowner</h3> -->
                                 <p class="box-text">They carry genuine parts and offer a warranty too. Trustworthy people. Got my water heater repaired within budget. Thank you, Green India Team!</p>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="testi-block style-3" dir="ltr">
                                 <div class="testi-block-top">
                                    <div class="box-img"><img src="<?=base_url() ?>assets/default_avatar.png" alt="Avater"></div>
                                    <div class="content">
                                       <h3 class="box-title">Gaurav Kumar</h3>
                                       <!-- <p class="box-desig">Homeowner</p> -->
                                    </div>
                                 </div>
                                 <div class="box-review"><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i></div>
                                 <!-- <h3 class="box-title">Homeowner</h3> -->
                                 <p class="box-text">My microwave stopped working andthe Green lndia Team fixed it the same day. Quick and reliable service in Delhi..</p>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="testi-block style-3" dir="ltr">
                                 <div class="testi-block-top">
                                    <div class="box-img"><img src="<?=base_url() ?>assets/default_avatar.png" alt="Avater"></div>
                                    <div class="content">
                                       <h3 class="box-title">Umar Akhtar</h3>
                                       <!-- <p class="box-desig">Homeowner</p> -->
                                    </div>
                                 </div>
                                 <div class="box-review"><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i></div>
                                 <!-- <h3 class="box-title">Homeowner</h3> -->
                                 <p class="box-text">First time using Green India Team. My fridge was fixed the same day, and the cleaning team did a superb job. Very satisfied with the service quality and customer handling.</p>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="testi-block style-3" dir="ltr">
                                 <div class="testi-block-top">
                                    <div class="box-img"><img src="<?=base_url() ?>assets/default_avatar.png" alt="Avater"></div>
                                    <div class="content">
                                       <h3 class="box-title">Ifra Hussain</h3>
                                       <!-- <p class="box-desig">Homeowner</p> -->
                                    </div>
                                 </div>
                                 <div class="box-review"><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i></div>
                                 <!-- <h3 class="box-title">Homeowner</h3> -->
                                 <p class="box-text">I called them for a geyser repair in Rohini. The technician found the problem quickly and fixed the thermostat. Friendly, knowledgeable, and fast service.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>


      <section id="contact-us">
         <div class="space-top pt-0 pb-4">
            <div class="container">
               <div class="bg-smoke rounded-20">
                  <div class="row gx-0">

                     <div class="col-xl-6">
                        <div class="quote-form-box style-2" >
                           <form action="<?=base_url('welcome/enquiry_form') ?>" method="POST" class="contact-form aj1ax-contact">
                              <h3 class="form-title text-start">Get In Touch</h3>
                              <div class="row">

                                 <div class="form-group col-md-6"><input type="text" name="name" placeholder="Name" class="input-size" required ></div>
                                 <div class="form-group col-md-6"><input type="text" name="mobile" placeholder="Mobile No." class="input-size" required ></div>
                                 
                                 <div class="form-group col-md-12">
                                    <select name="service" class="input-size" required style="width:100%!important;">
                                        <option value="" disabled="disabled" selected="selected" hidden>Select Serivce</option>
                                        <option value="Electrician">Electrician</option>
                                        <option value="TV Repair & Installation">TV Repair & Installation</option>
                                        <option value="AC Repair & Services">AC Repair & Services</option>
                                        <option value="Full Room Cleaning">Full Room Cleaning</option>
                                    </select>
                                 </div>
                                 <div class="form-group col-12"><input style="width:100%!important;" type="text" name="location" placeholder="Location/Pincode" class="input-size" required></div>
                                 <div class="form-btn col-12"><button type="submit" name="submit" class="th-btn star-btn">Submit Message</button></div>
                              </div>
                              
                           </form>
                        </div>
                     </div>

                     <div class="col-xl-6">
                        <img src="assets/contact.jpeg">
                     </div>



                  </div>
               </div>
            </div>
         </div>
      </section>


      
<?php include('footer.php'); ?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>