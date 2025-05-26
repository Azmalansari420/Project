<?php include('header.php'); ?>
        <main>
           <!-- slider-area -->
            <section id="home" class="slider-area slider-four fix p-relative">
               <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                  <div class="carousel-indicators">
                    <?php
                    $this->db->order_by('id desc');
                    $slider = $this->crud->selectDataByMultipleWhere('slider',array('status'=>1,));
                    foreach ($slider as $key => $data) { ?>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?=$key ?>" class="<?php if($key==0) echo 'active'; ?>" aria-current="true" aria-label="Slide 1"></button>
                    <?php } ?>
                  </div>
                  <div class="carousel-inner">
                    <?php
                    $this->db->order_by('id desc');
                    $slider = $this->crud->selectDataByMultipleWhere('slider',array('status'=>1,));
                    foreach ($slider as $key => $data) { ?>
                    <div class="carousel-item <?php if($key==0) echo 'active'; ?>">
                      <img src="<?=base_url() ?>media/uploads/slider/<?=$data->image ?>" class="d-block w-100" alt="...">
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
            <!-- slider-area-end -->
             <!-- about-area -->
            <section class="about-area about-p pt-55 pb-5 p-relative fix">
                <div class="animations-03"><img src="<?=base_url() ?>img/bg/an-img-03.png" alt="an-img-01"></div>
                <div class="animations-05"><img src="<?=base_url() ?>img/bg/an-img-05.png" alt="contact-bg-an-01"></div>
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                         <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="s-about-img p-relative  wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s" style="text-align:center;">
                                <img src="<?=base_url() ?>img/about.jpg" alt="img" class="img-fluid about-img" >   
                                <!-- <div class="about-text second-about">
                                    <img src="<?=base_url() ?>img/features/logo-icon.png" alt="img"> 
                                </div> -->
                            </div>
                          
                        </div>
                        
					<div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="about-content s-about-content  wow fadeInRight  animated" data-animation="fadeInRight" data-delay=".4s">
                                <div class="about-title second-title pb-25">  
                                    <h2>OUR FOUNDER</h2>                                   
                                </div>
                                   <p class="founder-para">Monika, the founder of HOPE HEALTH AND WELLNESS SERVICES, is passionate about empowering individuals to lead healthy, fulfilling lives. Through her work, she strives to inspire people to prioritize their well-being and embrace a holistic approach to health. Monika's mission is to revolutionize the healthcare sector by spreading awareness about the transformative power of proactive self-care. With her motivational speeches and dedication, she aims to create a world where people prioritize prevention and find true fulfillment through a balanced lifestyle.</p>
                                  <p class="founder-para">Through HOPE HEALTH AND WELLNESS SERVICES, Monika offers insights, guidance, and support to individuals seeking to improve their physical, mental, and emotional well-being. Her ultimate goal is to enable people to live vibrant lives by emphasizing the importance of self-care, mindfulness, and overall wellness. Monika's passion and commitment make her a true inspiration in the field of health and wellness.</p>
                                 <!-- <div class="row align-items-center mt-30">
                                    <div class="col-md-9"><h3>Click On This Video To Check How Work With Our Clients</h3></div>
                                </div> -->
                            </div>
                        </div>
                     
                    </div>
                </div>
            </section>
            <!-- about-area-end -->


           
         
             <!-- video-area -->
            <section id="video" class="video-area p-relative" style="background-image:url(img/bg/video-img.png); background-size: cover;">
                <div class="container">
                     <div class="row">
                        <div class="col-12">
                            <div class="s-video-wrap" >
                                <div class="s-video-content">
                                    <h2>Take A Look</h2>
                                   <h6><a href="https://www.youtube.com/watch?v=7e90gBu4pas" class="popup-video mb-50"><img src="<?=base_url() ?>img/bg/play-button.png" alt="circle_right"></a></h6> 
                                   
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </section>

            <section class="feature-area pt-5 pb-5 mt-0">
                <div class="animations-01"><img src="<?=base_url() ?>img/bg/an-img-08.png" alt="an-img-01"></div>
                <div class="animations-02"><img src="<?=base_url() ?>img/bg/an-img-09.png" alt="contact-bg-an-01"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-center mb-50 wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                                <h2>What We Do</h2>
                            </div>                           
                        </div>
                        <div class="col-lg-3 col-md-6 mb-30">
                            <div class="s-single-services wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                <div class="services-icon">
                                   <img src="<?=base_url() ?>img/icon/cn-iocn03.png" alt="icon"/>
                                </div>
                                <div class="second-services-content">
                                    <h5> Healthy Lifestyle</h5>
                                    <p> We understand that making positive lifestyle modifications is crucial for long-term health. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-30">
                            <div class="s-single-services active wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                 <div class="services-icon">
                                   <img src="<?=base_url() ?>img/icon/f-icon2.png" alt="icon"/>
                                </div>
                                <div class="second-services-content">
                                    <h5>Strong Body Life</h5>
                                     <p>At HOPE, we offer a range of services designed to support your health and well-being. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-30">
                            <div class="s-single-services wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                <div class="services-icon">
                                 <img src="<?=base_url() ?>img/icon/f-icon3.png" alt="icon"/>
                                </div>
                                <div class="second-services-content">
                                    <h5>Ayurvedic Treatments </h5>
                                     <p>Our Ayurvedic treatments are tailored to your specific condition, aiming to address the root cause and provide natural and nurturing interventions. </p>
                                </div>
                            </div>
                        </div>
                       <div class="col-lg-3 col-md-6 mb-30">
                            <div class="s-single-services wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                <div class="services-icon">
                                 <img src="<?=base_url() ?>img/icon/f-icon4.png" alt="icon"/>
                                </div>
                                <div class="second-services-content">
                                    <h5>Fitness Yoga</h5>
                                     <p>Integer venenatis tellu nullam vehicula magna id tellus accumsan blandit. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
            </section>
       
             <!-- testimonial-area -->
            <section class="testimonial-area pb-50 pt-5 mt-0 p-relative fix" style="background-color: #f6f8fc;">
                <div class="animations-01"><img src="<?=base_url() ?>img/bg/an-img-08.png" alt="an-img-01"></div>
                <div class="animations-02"><img src="<?=base_url() ?>img/bg/an-img-09.png" alt="contact-bg-an-01"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-center mb-50 wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                                <h2>What Our Clients Says</h2>
                            </div>                           
                        </div>
                        
                        <div class="col-lg-12">
                            <div class="testimonial-active">
                                <?php 
                                $this->db->order_by('id desc');
                                $testimonial = $this->crud->selectDataByMultipleWhere('testimonials',array('status'=>1,));
                                foreach($testimonial as $data)
                                    { ?>
                                <div class="single-testimonial">
                                     <div class="testi-author">
                                        <img src="<?=base_url() ?>media/uploads/testimonials/<?php echo $data->image ?>" alt="img" style="    width: 55px;">
                                        <div class="ta-info">
                                            <h6><?=$data->name ?></h6>
                                            <span><?php echo $data->position ?></span>
                                        </div>
                                    </div>
                                    <p>“<?=$data->content ?>”</p>
                                    <div class="qt-img">
                                    <img src="<?=base_url() ?>img/testimonial/qt-icon.png" alt="img">
                                    </div>
                                </div>
                       
                          
                                <?php  } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->
         
              <!-- blog-area -->
            <section id="blog" class="blog-area p-relative fix pt-5 pb-55">
                <div class="animations-01"><img src="<?=base_url() ?>img/bg/an-img-06.png" alt="an-img-01"></div>
                <div class="animations-02"><img src="<?=base_url() ?>img/bg/an-img-07.png" alt="contact-bg-an-01"></div>
                <div class="container">
                    <div class="row align-items-center"> 
                        <div class="col-lg-12">
                            <div class="section-title center-align mb-50 text-center wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                                <h2>
                                 Latest Blog & News
                                </h2>
                               
                            </div>
                           
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        $this->db->order_by('id desc');
                        $this->db->limit(3);
                        $blof = $this->crud->selectDataByMultipleWhere('blog',array('status'=>1,));
                        foreach($blof as $data)
                            { ?>
                       <div class="col-lg-4 col-md-6">
                            <div class="single-post2 hover-zoomin mb-30 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                                <div class="blog-thumb2">
                                    <a href="<?=base_url('blog-details/'.$data->slug) ?>"><img src="<?=base_url() ?>media/uploads/blog/<?=$data->image ?>" alt="img"></a>
                                </div>                    
                                <div class="blog-content2">    
                                    <div class="date-home">
                                        <i class="fal fa-calendar-alt"></i> <?=date('d M, Y',strtotime($data->addeddate)) ?>
                                    </div>
                                    
                                    <h4><a href="<?=base_url('blog-details/'.$data->slug) ?>"><?=$data->name ?></a></h4> 
                                    <p><?=substr($data->content,0,100); ?></p>
                                    <div class="blog-btn"><a href="<?=base_url('blog-details/'.$data->slug) ?>">Read More</a></div>
                                     
                                </div>
                            </div>
                        </div>
                         <?php } ?>
                
                        
                    </div>
                </div>
            </section>
            <!-- blog-area-end -->
         
        </main>

<?php include('footer.php'); ?>