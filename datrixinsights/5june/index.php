<?php include 'header.php';?>

  <!-- ======= Hero Section ======= -->
  
  <main id="main">

  	<section id="hero">
    	<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
  		  <div class="carousel-indicators">
    		   <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
  		    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="" aria-current="true" aria-label="Slide 1"></button>
  		  </div>
  		  <div class="carousel-inner">
   		    <div class="carousel-item active">
  		      <img src="img/slider11.jpg" class="d-block w-100" alt="...">
  		    </div>
          <div class="carousel-item ">
            <img src="img/slider12.jpg" class="d-block w-100" alt="...">
          </div>
  		  </div>
  		</div>

    <!-- <div class="hero-container"> -->
      <!-- <h1>Welcome to datrixinsights</h1>
      <h2>A pioneer in the field of Market Research and Analytics</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div> -->
  </section><!-- #hero -->

<style>
  .sectionClass {
  padding: 20px 0px 0px 0px;
  position: relative;
  display: block;
}

.fullWidth {
  width: 100% !important;
  display: table;
  float: none;
  padding: 0;
  min-height: 1px;
  height: 100%;
  position: relative;
}


.sectiontitle {
  background-position: center;
  margin: 30px 0 0px;
  text-align: center;
  min-height: 20px;
}

.sectiontitle h2 {
  font-size: 30px;
  color: #222;
  margin-bottom: 0px;
  padding-right: 10px;
  padding-left: 10px;
}


.headerLine {
  width: 160px;
  height: 2px;
  display: inline-block;
  background: #101F2E;
}


.projectFactsWrap{
    display: flex;
/*  margin-top: 30px;*/
  flex-direction: row;
  flex-wrap: wrap;
}


#projectFacts .fullWidth{
  padding: 0;
}

.projectFactsWrap .item{
  width: 25%;
  height: 100%;
  padding: 50px 0px;
  text-align: center;
}

.projectFactsWrap .item:nth-child(1){
  background: rgb(16, 31, 46);
}

.projectFactsWrap .item:nth-child(2){
  background: rgb(18, 34, 51);
}

.projectFactsWrap .item:nth-child(3){
  background: rgb(21, 38, 56);
}

.projectFactsWrap .item:nth-child(4){
  background: rgb(23, 44, 66);
}

.projectFactsWrap .item p.number{
  font-size: 40px;
  padding: 0;
  font-weight: bold;
}

.projectFactsWrap .item p{
  color: rgba(255, 255, 255, 0.8);
  font-size: 18px;
  margin: 0;
  padding: 10px;
  font-family: 'Open Sans';
}


.projectFactsWrap .item span{
  width: 60px;
  background: rgba(255, 255, 255, 0.8);
  height: 2px;
  display: block;
  margin: 0 auto;
}


.projectFactsWrap .item i{
  vertical-align: middle;
  font-size: 50px;
  color: rgba(255, 255, 255, 0.8);
}


.projectFactsWrap .item:hover i, .projectFactsWrap .item:hover p{
  color: white;
}

.projectFactsWrap .item:hover span{
  background: white;
}

@media (max-width: 786px){
  .projectFactsWrap .item {
     flex: 0 0 50%;
  }
}
</style>

    <section id="" class="services section-bg pb-0">
        <div id="projectFacts" class="sectionClass">
          <div class="fullWidth eight columns">
              <div class="projectFactsWrap ">
                  <div class="item wow fadeInUpBig animated animated" data-number="100000" style="visibility: visible;">
                      <i class="fa fa-briefcase"></i>
                      <p id="number1" class="number">100000 +</p>
                      <span></span>
                      <p>Complete</p>
                  </div>                
                  <div class="item wow fadeInUpBig animated animated" data-number="359" style="visibility: visible;">
                      <i class="fa fa-coffee"></i>
                      <p id="number3" class="number">2</p>
                      <span></span>
                      <p>Years Of Experience</p>
                  </div>
                  <div class="item wow fadeInUpBig animated animated" data-number="20" style="visibility: visible;">
                      <i class="fa fa-smile-o"></i>
                      <p id="number2" class="number">20</p>
                      <span></span>
                      <p>Clients</p>
                  </div>
                  <div class="item wow fadeInUpBig animated animated" data-number="246" style="visibility: visible;">
                      <i class="fa fa-camera"></i>
                      <p id="number4" class="number">300000 +</p>
                      <span></span>
                      <p>Participants</p>
                  </div>
              </div>
          </div>
      </div>
    </section>

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about" >
      <div class="container">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row">
          <div class="col-lg-4 order-1 order-lg-2">
            <img src="assets/img/about-img1.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 order-2 order-lg-1">
           <p style="text-align:justify">datrixinsights focused on providing SaaS-based solutions (software as a service) for buyers and sellers of online sample in the market research industry.</p>
					<p  style="text-align:justify">datrixinsights offer services which help the client to make path breaking business and marketing strategies and streamline to position the product, brand and create relevant platforms to explore and businesses.</p>
					<p  style="text-align:justify">datrixinsights is committed to safeguarding your privacy. We are committed to maintaining the privacy of online respondents and panel members. Please read the following privacy policy to understand how your personal information will be treated.</p>
          </div>
        </div>
       <div class="row">
          <p  style="text-align:justify">Our high quality standards in recruitment of participants and our qualified team's continuous and meticulous maintenance of our panels can be seen in our exceptionally high response rates and the close affinity we enjoy with our participants. This results in responses that meet the highest standards of quality to provide our customers with a solid basis for successful research projects.</p>
					<p  style="text-align:justify">If the client reports cheaters in a survey, our project managers remove these from the survey through management tool and alert the panel operations department. This ensures a panelist cannot be invited to a study beyond the frequency level set forth in the agreement between Research and the panel owner.</p>
       </div>
      </div>
    </section>

    <section class="services section-bg pb-0">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-7">

             <div class="row">
               <div class="col-lg-2 mb-2">
                 <div class="icon"><i class="bi bi-clipboard-data"></i></div>
               </div>
               <div class="col-lg-10 mb-2">
                 <h3>Research Support Services</h3>
                 <p>Do you seek support with a research project? datrixinsights offers a number of support services to research professionals in need.</p>
               </div>

               <div class="col-lg-2 mb-2">
                 <div class="icon"><i class="bi bi-clipboard-data"></i></div>
               </div>
               <div class="col-lg-10 mb-2">
                 <h3>Survey Progamming</h3>
                 <p>datrixinsights offers round-the-clock project monitoring and the structured survey collects the data needed from the specific respondents during the course. The response might be collected in a matrix or on a rating scales of points, or by suitable text boxes, text, or audio-video methods, or through several menu options or individual select responses.</p>
               </div>
               <div class="col-lg-2 mb-2">
                 <div class="icon"><i class="bi bi-clipboard-data"></i></div>
               </div>
               <div class="col-lg-10 mb-2">
                 <h3>Data Analysis</h3>
                 <p>Data analysis uses predictive strategies to find patterns in data. These patterns are useful in decision making because they reveal areas for process improvement. Corporations may use data analysis to optimize the profitability of their customer relations, identify fraud, and mitigate risk.</p>
               </div>
             </div>

          </div>

           <div class="col-lg-5 col-md-5 icon-box mt-3">
            <img src="img/img2.jpeg" class="img-fluid">
          </div>
        </div> 
      </div>
    </section>

    <style>
       .global-cle
        {
          padding: 1em 1em 1em 2em;
          border-style: solid;
          border-width: 0px 0px 0px 3px;
          border-color: #1F74D3;
          background-color: #EEEEEE;
          border-radius: 10px;
        }
    </style>

    <section class="services section-bg pb-0">
      <div class="container">
        <div class="section-title">
          <h2>Global Coverage</h2>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 mb-3">
            <div class="global-cle">
              <h2>AGRICULTURE</h2>
              <p>Agriculture is Science's oldest industry, having fed the world for ages. It is presently undergoing dramatic evolution as a series of revolutions redefine its processes, techniques, and value chain. datrixinsights combines directly with some of the corporation's leading brands to produce insights by rapidly and seamlessly engaging 'hard to reach' respondents from both rural and urban regions. datrixinsights leverages its in-house capabilities and broad reach to analytics is the branch that support customers to make sound critical decisions.</p>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 mb-3">
            <div class="global-cle" style="background:#1F74D3;color: white;border-color: #000;">
              <h2>MEDIA</h2>
              <p>Media is much more than simply giant enterprises sending stuff into our homes. Today, media is about the average client, who can directly submit content as well as thoughts and ideas via multiple means, seriously affecting both sales and outcomes. datrixinsights applies its broad reach, distinct skills, and specific knowledge to assist customers in identifying their "strongest connect" with relevant respondent categories. Clients leverage the information gained from working with datrixinsights to develop customized information and favourable stimuli, enhancing viewership and market share.</p>
            </div>  
          </div>
          <div class="col-lg-6 col-md-6 mb-3">
            <div class="global-cle" style="background:#1F74D3;color: white;border-color: #000;">
              <h2>HEALTHCARE</h2>
              <p>The global workforce is declining. As healthcare systems and players face growing demands, only those that can blend patients' expectations and demands with the tough demands of cost versus value will have a future. We have been serving significant customers in the global healthcare market by combining good knowledge, substantial reach, and analytics. The answers datrixinsights assists in obtaining have a direct and quantifiable bearing on critical aspects such as patient satisfaction and service optimization.</p>
            </div>  
          </div>

          <div class="col-lg-6 col-md-6 mb-3">
            <div class="global-cle" >
              <h2>RETAIL</h2>
              <p>Retail is one of today's most dynamic businesses, with the capacity to absorb a high pace of growth at multiple fronts, including consumers, channels, and providers. As shoppers grow more connected to Retail, it is vital (and hard) to engage them in meaningful dialogues. Everyone is eager to "connect with the consumer," but only a few will succeed. datrixinsights has used its Market Research expertise to link customers with fast-moving, high-value respondents; insights offered by datrixinsights have assisted clients in building, keeping, and growing their leadership across crucial major retailers.</p>
            </div>  
          </div>


        </div> 
      </div>
    </section>

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">
        <div class="section-title">
          <h2>Services</h2>
          <p style="text-align:center">We provide customized solutions to B2B, B2C, marketers and advertising agencies. Our sophisticated technology and experienced professionals, increase our capability to offer pro-active Market Research fieldwork services.</p>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 icon-box" >
            <div class="icon"><i class="bi bi-clipboard-data"></i></div>
            <h4 class="title"><a>Qualitative Research</a></h4>
            <p class="description">
							<i class="bi bi-check2-circle"></i> Telephonic Surveys<BR>
							<i class="bi bi-check2-circle"></i> Computer Assisted Web Interviewing (CAWI)<br>
							<i class="bi bi-check2-circle"></i> Central Location Testing<br>
							<i class="bi bi-check2-circle"></i> Paper & Pen Interviews(PAPI)<br></p>
          </div>

          <div class="col-lg-3 col-md-6 icon-box" style="background: #94c5e5;">
            <div class="icon"><i class="bi bi-globe"></i></div>
            <h4 class="title"><a>Online Research</a></h4>
            <p>
            	<i class="bi bi-check2-circle"></i> Audience Research<br>
            	<i class="bi bi-check2-circle"></i> Product  Research<br>
            	<i class="bi bi-check2-circle"></i> Brand Analysis<br>
            	<i class="bi bi-check2-circle"></i> Psychological Profiling<br>
            	<i class="bi bi-check2-circle"></i> Database  Research<br>
            	<i class="bi bi-check2-circle"></i> Post-sale or Consumer<br>
            	<i class="bi bi-check2-circle"></i> Satisfaction Research<br>
            </p>
          </div>
		  
          <div class="col-lg-3 col-md-6 icon-box" >
            <div class="icon"><i class="bi bi-sliders"></i></div>
            <h4 class="title"><a>Quantitative Research</a></h4>
            <p>
							<i class="bi bi-check2-circle"></i> Depth Interviews<br>
							<i class="bi bi-check2-circle"></i> Mini-Groups,Triads,Dyads<br>
							<i class="bi bi-check2-circle"></i> Ethnography Approaches<br>
							<i class="bi bi-check2-circle"></i> Online In-Depth interviews<br>
							<i class="bi bi-check2-circle"></i> Online Focus Group Discussions
						</p>
          </div>
		  
          <div class="col-lg-3 col-md-6 icon-box" style="background: #94c5e5;">
            <div class="icon"><i class="bi bi-heart"></i></div>
            <h4 class="title"><a>HEALTHCARE  Research</a></h4>
            <p>
							<i class="bi bi-check2-circle"></i> Cardiologist<br>
							<i class="bi bi-check2-circle"></i> Dentist<br>
							<i class="bi bi-check2-circle"></i> Dermatologist<br>
							<i class="bi bi-check2-circle"></i> General Surgery<br>
							<i class="bi bi-check2-circle"></i> Gynaecologist<br>
							<i class="bi bi-check2-circle"></i> Haematologist<br>
							<i class="bi bi-check2-circle"></i> Oncologist<br>
							<i class="bi bi-check2-circle"></i> Ophthalmologist<br>
							<i class="bi bi-check2-circle"></i> Nephrologists
						</p>
          </div>
			 </div>         
      </div>
    </section>

    <!-- ======= Call To Action Section ======= -->
    <section class="call-to-action">
      <div class="container">
        <div class="text-center">
            <h3>Why Choose Us?</h3>
            <p> datrixinsights has been constantly perfecting in qualitative and quantitative data collection we've optimized our platform to provide solutions for the unique solutions for the unique challenges of your industry and your profession.<BR>
            datrixinsights has provided superior quality sample and customer service to hundreds of online researchers and is continuing to push for stronger measures for quality sample in the industry.</p>
  				  <a class="cta-btn" href="assets/CQ ESOMAR 28.pdf" target="_blank">ESOMAR 28</a>
    		</div>
      </div>
    </section>
    
    <section id="faq" class="faq section-bg" style="padding-bottom:30px">
      <div class="container">
			<div class="section-title">
        <h2>We Are Global</h2>
      </div>	
			<style>
        @keyframes scroll {
          0% {
            transform: translateX(0);
          }
          100% {
            transform: translateX(calc(-250px * 7));
          }
        }
        .slider {
          height: 100%;
          margin: auto;
          overflow: hidden;
          position: relative;
          width: auto;
        }
        .slider .slide-track {
          animation: scroll 40s linear infinite;
          display: flex;
          width: calc(250px * 14);
        }
        .slider .slide {
          height: 100%;
          width: 250px;
          margin-right: 10px;
        }
        </style>
      <div class="slider mb-4 ">
  			<div class="slide-track">
  				<div class="slide">
  					<img src="https://touranresearch.com/wp-content/uploads/2022/08/Flag-Philippines.jpg" height="" width="250" alt="" />
  				</div>
  				<div class="slide">
  					<img src="https://touranresearch.com/wp-content/uploads/2022/08/ugandaflag.jpg" height="" width="250" alt="" />
  				</div>
  				<div class="slide">
  					<img src="https://touranresearch.com/wp-content/uploads/2022/08/Flag-Philippines.jpg" height="" width="250" alt="" />
  				</div>
  				<div class="slide">
  					<img src="https://touranresearch.com/wp-content/uploads/2022/08/640px-Flag_of_Ghana.svg.png" height="" width="250" alt="" />
  				</div>
  				<div class="slide">
  					<img src="https://touranresearch.com/wp-content/uploads/2022/08/istockphoto-1270270387-612x612-1.jpg" height="" width="250" alt="" />
  				</div>
  				<div class="slide">
  					<img src="https://touranresearch.com/wp-content/uploads/2022/08/2560px-Flag_of_Poland_bordered.svg.png" height="" width="250" alt="" />
  				</div>
  				<div class="slide">
  					<img src="https://touranresearch.com/wp-content/uploads/2022/08/Flag_of_Turkey.svg.png" height="" width="250" alt="" />
  				</div>
  				<div class="slide">
  					<img src="https://touranresearch.com/wp-content/uploads/2022/08/Usa.png" height="" width="250" alt="" />
  				</div>
  				<div class="slide">
  					<img src="https://touranresearch.com/wp-content/uploads/2022/08/Ireland_Flag_Colours-scaled-1.jpg" height="" width="250" alt="" />
  				</div>
  				<div class="slide">
  					<img src="https://touranresearch.com/wp-content/uploads/2022/08/ca-flag.jpg" height="" width="250" alt="" />
  				</div>
  				<div class="slide">
  					<img src="https://touranresearch.com/wp-content/uploads/2022/08/images.jpg" height="" width="250" alt="" />
  				</div>
  				<div class="slide">
  					<img src="https://touranresearch.com/wp-content/uploads/2022/08/Bandera_Australia_Viajar.jpg" height="" width="250" alt="" />
  				</div>
  				<div class="slide">
  					<img src="https://touranresearch.com/wp-content/uploads/2022/08/640px-Flag_of_Brazil.svg.png" height="" width="250" alt="" />
  				</div>
  			</div>
  		</div>					  
			</div>
    </section>

    <section id="join-panel" class="services section-bg">
      <div class="container">
        <div class="section-title">
          <h2>Join Our Panel</h2>
        </div>
        <div class="row">
          <div class="col-lg-5 col-md-5 icon-box">
            <img src="img/img.jpeg" class="img-fluid">
          </div>
          <div class="col-lg-7 col-md-7 icon-box">
             <form  method="POST" action="join-panel.php" class="row">
              <div class="form-group col-md-6">
                <input type="text" name="fname" class="form-control" id="fname" placeholder="Your First Name" required>
              </div>
              <div class="form-group col-md-6">
                <input type="text" name="lname" class="form-control" id="lname" placeholder="Your Last Name" required>
              </div>
              <div class="form-group mt-3 col-md-12">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
              <div class="form-group mt-3 col-md-12">
                <input type="text" class="form-control" name="p_language" id="p_language" placeholder="Your Primary Language?" required>
              </div>
              <div class="form-group mt-3 col-md-12">
                <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Your Phone Number?" required>
              </div>
              <div class="form-group mt-3 col-md-12">
                <input type="text" class="form-control" name="country" id="country" placeholder="Your Country" required>
              </div>
              <div class="form-group mt-3 col-md-12">
                <input type="text" class="form-control" name="city" id="city" placeholder="Your City" required>
              </div>
              <div class="form-group mt-3 col-md-12">
                <input type="text" class="form-control" name="state" id="state" placeholder="Your State" required>
              </div>
              <div class="form-group mt-3 col-md-12">
                <input type="text" class="form-control" name="street_add" id="state" placeholder="Your Street Address" required>
              </div>
              <div class="form-group mt-3 col-md-12">
                <input type="text" class="form-control" name="zipcode" id="state" placeholder="Your Zip Code" required>
              </div>
              <div class="form-group mt-3 col-md-12">
                <input type="text" class="form-control" name="age" id="state" placeholder="Your Age" required>
              </div>
              <div class="form-group mt-3 col-md-12">
                <input type="text" class="form-control" name="occupation" id="state" placeholder="Your Occupation" required>
              </div>
           <br>
              <div class="text-center mt-3"><button name="submit" type="submit" value="Submit Form" class="btn btn-primary">Send Message</button></div>
            </form>
          </div>
			  </div> 
      </div>
    </section>
<style type="text/css">
  a.term-class {
    background: #ff7a01;
    color: white;
    padding: 6px 5px;
    border-radius: 5px;
    position: relative;
    top: 3px;
    font-size: 10px;
}
</style>   
    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact section-bg"style="padding-bottom:0px;padding-top:50px;">
      <div class="container">
        <div class="section-title">
          <h2>Contact Us</h2>          
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="contact-about">
              <p>We have been a pioneer in the field of Market Research and Analytics since our inception. We have committed our selves to perfect the art of data sampling and analytics in order to achieve high quality and time bound output on every project.</p>
              <img class="img-responsive" src="img/office.gif"style="height:200px;width:auto;">
            </div>
          </div>
          <style>
            .contact .info i {
              font-size: 25px;
            }
          </style>
          <div class="col-lg-4 col-md-6">
            <div class="info">
              <div>
                <i class="bi bi-geo-alt"></i>
                <p>Delhi, New Delhi<br>India</p>
              </div>

              <div>
                <i class="bi bi-envelope"></i>
                

                <p><a href="mailto:Partners@datrixinsights.com">Partners@datrixinsights.com</a><br><a href="mailto:Sales@datrixinsights.com">Sales@datrixinsights.com</a></p>
                <!-- <p><a href="mailto:info@datrixinsights.com">info@datrixinsights.com</a><br><a href="mailto:Accounts@datrixinsights.com">Accounts@datrixinsights.com</a></p> -->
              </div>

              <div>
                <a  href="https://www.linkedin.com/company/datrixinsights/" target="_blank"><i style="padding-right: 5px;" class="bi bi-linkedin"></i></a>
              </div>

              <div>
                <a class="term-class" href="img/Terms-and-Conditions.docx" download="">Term & Condition</a>
                <a class="term-class" href="img/Privacy-Policy.docx" download="">Privacy Policy</a>
              </div>

            </div>
          </div>

          <div class="col-lg-5 col-md-12" style="margin-top: 10px;">
          
            
            <form id="" method="POST" action="send.php">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="form-group mt-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <br>
              <div class="text-center"><button name="submit" type="submit" value="Submit Form" class="btn btn-primary mb-4">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->


    <section class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224346.48130047307!2d77.06889678523045!3d28.52728034091601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x52c2b7494e204dce!2sNew%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1622549366227!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section><!-- End Map Section -->

  </main><!-- End #main -->

  <?php include 'footer.php';?>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
      <script id="rendered-js" >
$.fn.jQuerySimpleCounter = function (options) {
  var settings = $.extend({
    start: 0,
    end: 100,
    easing: 'swing',
    duration: 400,
    complete: '' },
  options);

  var thisElement = $(this);

  $({ count: settings.start }).animate({ count: settings.end }, {
    duration: settings.duration,
    easing: settings.easing,
    step: function () {
      var mathCount = Math.ceil(this.count);
      thisElement.text(mathCount);
    },
    complete: settings.complete });

};


// $('#number1').jQuerySimpleCounter({ end: 100000, duration: 3000 });
// $('#number2').jQuerySimpleCounter({ end: 2, duration: 3000 });
// $('#number3').jQuerySimpleCounter({ end: 359, duration: 2000 });
// $('#number4').jQuerySimpleCounter({ end: 246, duration: 2500 });



/* AUTHOR LINK */
$('.about-me-img').hover(function () {
  $('.authorWindowWrapper').stop().fadeIn('fast').find('p').addClass('trans');
}, function () {
  $('.authorWindowWrapper').stop().fadeOut('fast').find('p').removeClass('trans');
});
//# sourceURL=pen.js
    </script>

  