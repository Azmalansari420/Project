<?php include('header.php'); ?>

        <!--Start Banner One-->
        <section class="ban5ner-one">
             <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
              <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="" aria-current="true" aria-label="Slide 1"></button>
                          </div>
              <div class="carousel-inner">
                            <div class="carousel-item active">
                  <img src="https://catalog.wlimg.com/1/8571437/other-images/393719.jpg" class="d-block w-100" alt="...">
                </div>
                            <div class="carousel-item ">
                  <img src="https://catalog.wlimg.com/1/8571437/other-images/393720.jpg" class="d-block w-100" alt="...">
                </div>
                            <div class="carousel-item ">
                  <img src="https://catalog.wlimg.com/1/8571437/other-images/393721.jpg" class="d-block w-100" alt="...">
                </div>
                          </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>  
        </section>
        <!--End Banner One-->

<style type="text/css">
.team-one__single-img {
    position: relative;
    overflow: hidden;
}

.overlay-box {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(255, 255, 255, 0.95);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    opacity: 0;
    transition: opacity 0.3s ease;
    padding: 15px;
    text-align: center;
}

.team-one__single-img:hover .overlay-box {
    opacity: 1;
}

.overlay-box p {
    margin: 10px 0;
    font-weight: bold;
}

.social-links {
    list-style: none;
    display: flex;
    gap: 10px;
    padding: 0;
    margin: 0;
}

.social-links li a {
    font-size: 20px;
    color: #333;
}

.team-one__single {
    position: relative;
    display: block;
    border: 1px solid #e90000;
    overflow: hidden;
    margin-bottom: 30px;
    padding: 10px;
    text-align: center;
}
.small {
    font-size: 0.9em;
}
b, strong {
    font-weight: bold !important;
}
.mt10px, a.mt10px {
    margin-top: 3px !important;
}
.overlay-box p {
    margin: 4px 0;
    font-weight: bold;
}

.btn-class {
    padding: 5px 14px;
    background-color: #eb0017;    
    color: white;
}
.team-one__single-img {
    position: relative;
    overflow: hidden;
    height: 280px; /* ✅ Set fixed height */
    border-radius: 10px;
}

.team-one__single-img img {
    width: 100%;
    height: 100%; /* ✅ Fill the div */
    object-fit: cover; /* ✅ Crop extra image and maintain aspect ratio */
    display: block;
    border-radius: 10px;
}


@media (max-width: 768px) {
    .team-one__single-img {
        height: 200px;
    }
}

.team-one__single-content {
    position: relative;
    display: block;
    padding: 21px 25px 10px;
}

</style>

        <section class="team-one team-one--team">
            <div class="container">
                <div class="row">
                     <div class="col-xl-12 col-lg-12 mb-5 text-center">
                        <h2>Featured Products</h2>
                    </div>
                    <!--Start Team One Single-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="team-one__single">
                            <div class="team-one__single-img">
                                <img src="assets/11.jpg" alt="#">
                                <!-- Overlay box -->
                                <div class="overlay-box">
                                    <p>JAGGERY PRIMIUM QUALITY</p>
                                    <p class="mt10px"><b class="small">Brand Name</b>: BRAZIL ORIGIN</p>
                                    <p class="mt10px"><b class="small">Material</b>: Sugar</p>
                                    <p class="mt10px"><b class="small">Cultivation Type</b>: Common</p>
                                    <p class="mt10px"><b class="small">Color</b>: White</p>
                                    <p class="mt10px"><b class="small">Application</b>: Drinks, Ice Cream, Sweets, Tea</p>

                                    <div class="mt10px ac"> 
                                       <a href="" class="btn-class" >Enquiry Now</a>
                                       <a href="" class="btn-class" style="background-color: #00561f;">View More</a>
                                   </div>
                                </div>
                            </div>
                            <div class="team-one__single-content">
                                <h2><a href="product-details.php">JAGGERY PRIMIUM QUALITY</a></h2>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="team-one__single">
                            <div class="team-one__single-img">
                                <img src="assets/22.jpg" alt="#">
                                <!-- Overlay box -->
                                <div class="overlay-box">
                                    <p>CHICKPEAS WHITE 10MM</p>
                                    <p class="mt10px"><b class="small">Brand Name</b>: BRAZIL ORIGIN</p>
                                    <p class="mt10px"><b class="small">Material</b>: Sugar</p>
                                    <p class="mt10px"><b class="small">Cultivation Type</b>: Common</p>
                                    <p class="mt10px"><b class="small">Color</b>: White</p>
                                    <p class="mt10px"><b class="small">Application</b>: Drinks, Ice Cream, Sweets, Tea</p>

                                    <div class="mt10px ac"> 
                                       <a href="" class="btn-class" >Enquiry Now</a>
                                       <a href="" class="btn-class" style="background-color: #00561f;">View More</a>
                                   </div>
                                </div>
                            </div>
                            <div class="team-one__single-content">
                                <h2><a href="product-details.php">CHICKPEAS WHITE 10MM</a></h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="team-one__single">
                            <div class="team-one__single-img">
                                <img src="assets/33.jpg" alt="#">
                                <!-- Overlay box -->
                                <div class="overlay-box">
                                    <p>KISMIS</p>
                                    <p class="mt10px"><b class="small">Brand Name</b>: BRAZIL ORIGIN</p>
                                    <p class="mt10px"><b class="small">Material</b>: Sugar</p>
                                    <p class="mt10px"><b class="small">Cultivation Type</b>: Common</p>
                                    <p class="mt10px"><b class="small">Color</b>: White</p>
                                    <p class="mt10px"><b class="small">Application</b>: Drinks, Ice Cream, Sweets, Tea</p>

                                    <div class="mt10px ac"> 
                                       <a href="" class="btn-class" >Enquiry Now</a>
                                       <a href="" class="btn-class" style="background-color: #00561f;">View More</a>
                                   </div>
                                </div>
                            </div>
                            <div class="team-one__single-content">
                                <h2><a href="product-details.php">KISMIS</a></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="team-one__single">
                            <div class="team-one__single-img">
                                <img src="assets/44.jpg" alt="#">
                                <!-- Overlay box -->
                                <div class="overlay-box">
                                    <p>RED CHILLY</p>
                                    <p class="mt10px"><b class="small">Brand Name</b>: BRAZIL ORIGIN</p>
                                    <p class="mt10px"><b class="small">Material</b>: Sugar</p>
                                    <p class="mt10px"><b class="small">Cultivation Type</b>: Common</p>
                                    <p class="mt10px"><b class="small">Color</b>: White</p>
                                    <p class="mt10px"><b class="small">Application</b>: Drinks, Ice Cream, Sweets, Tea</p>

                                    <div class="mt10px ac"> 
                                       <a href="" class="btn-class" >Enquiry Now</a>
                                       <a href="" class="btn-class" style="background-color: #00561f;">View More</a>
                                   </div>
                                </div>
                            </div>
                            <div class="team-one__single-content">
                                <h2><a href="product-details.php">RED CHILLY</a></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="team-one__single">
                            <div class="team-one__single-img">
                                <img src="assets/55.jpg" alt="#">
                                <!-- Overlay box -->
                                <div class="overlay-box">
                                    <p>RED KIDNEY ( RAJMA )</p>
                                    <p class="mt10px"><b class="small">Brand Name</b>: BRAZIL ORIGIN</p>
                                    <p class="mt10px"><b class="small">Material</b>: Sugar</p>
                                    <p class="mt10px"><b class="small">Cultivation Type</b>: Common</p>
                                    <p class="mt10px"><b class="small">Color</b>: White</p>
                                    <p class="mt10px"><b class="small">Application</b>: Drinks, Ice Cream, Sweets, Tea</p>

                                    <div class="mt10px ac"> 
                                       <a href="" class="btn-class" >Enquiry Now</a>
                                       <a href="" class="btn-class" style="background-color: #00561f;">View More</a>
                                   </div>
                                </div>
                            </div>
                            <div class="team-one__single-content">
                                <h2><a href="product-details.php">RED KIDNEY ( RAJMA )</a></h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="team-one__single">
                            <div class="team-one__single-img">
                                <img src="assets/66.jpg" alt="#">
                                <!-- Overlay box -->
                                <div class="overlay-box">
                                    <p>ALFALFA CAMEL FOOD</p>
                                    <p class="mt10px"><b class="small">Brand Name</b>: BRAZIL ORIGIN</p>
                                    <p class="mt10px"><b class="small">Material</b>: Sugar</p>
                                    <p class="mt10px"><b class="small">Cultivation Type</b>: Common</p>
                                    <p class="mt10px"><b class="small">Color</b>: White</p>
                                    <p class="mt10px"><b class="small">Application</b>: Drinks, Ice Cream, Sweets, Tea</p>

                                    <div class="mt10px ac"> 
                                       <a href="" class="btn-class" >Enquiry Now</a>
                                       <a href="" class="btn-class" style="background-color: #00561f;">View More</a>
                                   </div>
                                </div>
                            </div>
                            <div class="team-one__single-content">
                                <h2><a href="product-details.php">ALFALFA CAMEL FOOD</a></h2>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </section>




         <section class="team-one team-one--team pt-0">
            <div class="container">
                <div class="row">
                     <div class="col-xl-12 col-lg-12 mb-5 text-center">
                        <h2>Hot Products</h2>
                    </div>


                    <div class="col-xl-3 col-lg-3 wow fadeInUp" data-wow-delay="100ms">
                        <div class="team-one__single">
                            <div class="team-one__single-img">
                                <img src="https://2.wlimg.com/product_images/bc-small/2022/5/8571437/masoor-gota-1652942890-6346449.jpeg" alt="#">
                            </div>
                            <div class="team-one__single-content">
                                <h2><a href="product-details.php">Masoor Gota</a></h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 wow fadeInUp" data-wow-delay="100ms">
                        <div class="team-one__single">
                            <div class="team-one__single-img">
                                <img src="https://2.wlimg.com/product_images/bc-small/2022/5/8571437/wheat-semolina-1652942652-6346432.jpeg" alt="#">
                            </div>
                            <div class="team-one__single-content">
                                <h2><a href="product-details.php">Wheat Semolina</a></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 wow fadeInUp" data-wow-delay="100ms">
                        <div class="team-one__single">
                            <div class="team-one__single-img">
                                <img src="https://2.wlimg.com/product_images/bc-small/2022/5/8571437/wheat-flour-1652942746-6346439.jpeg" alt="#">
                            </div>
                            <div class="team-one__single-content">
                                <h2><a href="product-details.php">Wheat Flour</a></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 wow fadeInUp" data-wow-delay="100ms">
                        <div class="team-one__single">
                            <div class="team-one__single-img">
                                <img src="https://2.wlimg.com/product_images/bc-small/2022/5/8571437/brown-chana-1652942932-6346450.jpeg" alt="#">
                            </div>
                            <div class="team-one__single-content">
                                <h2><a href="product-details.php">Brown Chana</a></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 wow fadeInUp" data-wow-delay="100ms">
                        <div class="team-one__single">
                            <div class="team-one__single-img">
                                <img src="https://2.wlimg.com/product_images/bc-small/2022/5/8571437/besan-flour-1652942966-6346454.jpeg" alt="#">
                            </div>
                            <div class="team-one__single-content">
                                <h2><a href="product-details.php">Besan Flour</a></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 wow fadeInUp" data-wow-delay="100ms">
                        <div class="team-one__single">
                            <div class="team-one__single-img">
                                <img src="https://2.wlimg.com/product_images/bc-small/2021/4/8571437/white-chickpeas-1617965678-5784849.jpeg" alt="#">
                            </div>
                            <div class="team-one__single-content">
                                <h2><a href="product-details.php">White Chickpeas</a></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 wow fadeInUp" data-wow-delay="100ms">
                        <div class="team-one__single">
                            <div class="team-one__single-img">
                                <img src="https://2.wlimg.com/product_images/bc-small/2022/5/8571437/wheat-maida-1652942702-6346435.jpeg" alt="#">
                            </div>
                            <div class="team-one__single-content">
                                <h2><a href="product-details.php">Wheat Maida</a></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 wow fadeInUp" data-wow-delay="100ms">
                        <div class="team-one__single">
                            <div class="team-one__single-img">
                                <img src="https://2.wlimg.com/product_images/bc-small/2021/4/8571437/whole-green-moong-1617965838-5784860.jpeg" alt="#">
                            </div>
                            <div class="team-one__single-content">
                                <h2><a href="product-details.php">Whole Green Moong</a></h2>
                            </div>
                        </div>
                    </div>





                </div>
            </div>
        </section>
        


























        
        <!--Start About Two-->
        <section class="about-two">
            <div class="container">
                <div class="row">
                  

                    <!--Start About Two Content-->
                    <div class="col-xl-12 wow fadeInLeft text-center" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="about-two__content">
                            <div class="section-title sec-title-animation animation-style2">
                                <div class="section-title__tagline title-animation">
                                    <h4>// About Us //</h4>
                                </div>
                                <h2 class="section-title__title title-animation">Welcome to our Website</h2>
                            </div>

                            <div class="about-two__content-text">
                                <p>Established in the year 2021, we at Dishaa Import Export are specialized Indian pulses and species. Based in Mumbai, Maharashtra (India), we have expertise over exporting and importing Red Chilli Powder, Coriander Powder, Turmeric Powder, Green Cardamom, Black Cardamom, Clove Pods, Cinnamon Stick, Coriander Seeds, Turmeric Finger, Dry Red Chilli, Black Pepper Seeds, Cumin Seeds, Star Anise, Fennel Seeds, Asafoetida Powder, Black Cumin Seeds, Cumin Powder, Fenugreek Seeds, and Kidney Beans among others.   To make sure that our products answer the quality standards as set by our management those are severe and follow up the quality acceptable world over as secure for human usage. We assure to work on the ethical principles that give a healthy growth setting for our farmers, emp Read more...</p>
                            </div>

                            <div class="why-choose-one__content-bottom">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-3">
                                        <div class="why-choose-one__content-single">
                                            <div class="icon-box">
                                                <span class="icon-workers"></span>
                                            </div>
                                            <div class="title-box">
                                                <h3>Experienced Worker</h3>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-lg-3 col-md-3">
                                        <div class="why-choose-one__content-single">
                                            <div class="icon-box">
                                                <span class="icon-customer-service"></span>
                                            </div>
                                            <div class="title-box">
                                                <h3>24/7 Our Support</h3>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-lg-3 col-md-3">
                                        <div class="why-choose-one__content-single">
                                            <div class="icon-box">
                                                <span class="icon-roof-1"></span>
                                            </div>
                                            <div class="title-box">
                                                <h3>Modern Renovate</h3>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-lg-3 col-md-3">
                                        <div class="why-choose-one__content-single">
                                            <div class="icon-box">
                                                <span class="icon-satisfaction"></span>
                                            </div>
                                            <div class="title-box">
                                                <h3>Certified Company</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                           
                        </div>
                    </div>
                    <!--End About Two Content-->
                </div>
            </div>
        </section>
        <!--Start About Two-->

      

<?php include('footer.php'); ?>