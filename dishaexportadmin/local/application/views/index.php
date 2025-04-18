<?php include('header.php'); ?>

        <!--Start Banner One-->
        <section class="ban5ner-one">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
              <div class="carousel-indicators">
                 <?php
                $this->db->order_by('id desc');
                $slider = $this->crud->selectDataByMultipleWhere('slider',array('status'=>1,));
                foreach ($slider as $key => $value) 
                { ?>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $key; ?>" class="<?php if($key==0)echo 'active'; ?>" aria-current="true" aria-label="Slide 1"></button>
                <?php } ?>
              </div>
              <div class="carousel-inner">
                <?php
                $this->db->order_by('id desc');
                $slider = $this->crud->selectDataByMultipleWhere('slider',array('status'=>1,));
                foreach ($slider as $key => $value) 
                { ?>
                <div class="carousel-item <?php if($key==0)echo 'active'; ?>">
                  <img src="<?php echo base_url(); ?>media/uploads/slider/<?php echo $value->image; ?>" class="d-block w-100" alt="...">
                </div>
                <?php } ?>
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
                    <?php
                    $this->db->order_by('id desc');
                    $this->db->limit(12);
                    $product = $this->db->get_where('product',array('status'=>1,'featured_pro'=>1))->result_object();
                    foreach($product as $data)
                        { ?>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="team-one__single">
                            <div class="team-one__single-img">
                                <img src="<?=base_url() ?>media/uploads/product/<?=$data->image ?>" alt="#">
                                <!-- Overlay box -->
                                <div class="overlay-box">
                                    <p><?=$data->name ?></p>
                                    <?php
                                    if(!empty($data->brand_name))
                                        { ?>
                                    <p class="mt10px"><b class="small">Brand Name</b>: <?=$data->brand_name ?></p>
                                <?php } if(!empty($data->material)){ ?>
                                    <p class="mt10px"><b class="small">Material</b>: <?=$data->material ?></p>
                                    <?php } if(!empty($data->cultivation_type)){ ?>
                                    <p class="mt10px"><b class="small">Cultivation Type</b>: <?=$data->cultivation_type ?></p>
                                    <?php } if(!empty($data->color)){ ?>
                                    <p class="mt10px"><b class="small">Color</b>: <?=$data->color ?></p>
                                    <?php } if(!empty($data->application)){ ?>
                                    <p class="mt10px"><b class="small">Application</b>: <?=$data->application ?></p>
                                <?php } ?>

                                    <div class="mt10px ac"> 
                                       <a href="" class="btn-class" >Enquiry Now</a>
                                       <a href="" class="btn-class" style="background-color: #00561f;">View More</a>
                                   </div>
                                </div>
                            </div>
                            <div class="team-one__single-content">
                                <h2><a href="<?=base_url($data->slug) ?>"><?=$data->name ?></a></h2>
                            </div>
                        </div>
                    </div>


                    <?php } ?>



                </div>
            </div>
        </section>




         <section class="team-one team-one--team pt-0">
            <div class="container">
                <div class="row">
                     <div class="col-xl-12 col-lg-12 mb-5 text-center">
                        <h2>Hot Products</h2>
                    </div>

                      <?php
                    $this->db->order_by('id desc');
                    $this->db->limit(12);
                    $product = $this->db->get_where('product',array('status'=>1,'hot_pro'=>1))->result_object();
                    foreach($product as $data)
                        { ?>
                    <div class="col-xl-3 col-lg-3 wow fadeInUp" data-wow-delay="100ms">
                        <div class="team-one__single">
                            <div class="team-one__single-img">
                                <img src="<?=base_url() ?>media/uploads/product/<?=$data->image ?>" alt="#">
                            </div>
                            <div class="team-one__single-content">
                                <h2><a href="<?=base_url($data->slug) ?>" style="font-size: 17px;"><?=$data->name ?></a></h2>
                            </div>
                        </div>
                    </div>

                    <?php } ?>





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