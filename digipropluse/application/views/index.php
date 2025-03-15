<?php include('header.php'); ?>

    <main>
        <!-- Banner area start here -->
        <section class="banner-area">
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
        <!-- Banner area end here -->

        

        <!-- About area start here -->
        <section id="about-section" class="about-area sub-bg pt-120">
            <div class="about__shape wow slideInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
                <img src="<?=base_url() ?>assets/images/shape/about-line.png" alt="shape">
            </div>
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="about__left-item">
                            <div class="image big-image">
                                <img src="<?=base_url() ?>assets/images/about/about-image1.jpg" alt="image">
                            </div>
                            <div class="image sm-image">
                                <div class="video__btn-wrp">
                                    <div class="video-btn video-pulse">
                                        <a class="video-popup" href="https://www.youtube.com/watch?v=iVqz_4M5mA0"><i
                                                class="fa-solid fa-play"></i></a>
                                    </div>
                                </div>
                                <img src="<?=base_url() ?>assets/images/about/about-image2.png" alt="image">
                            </div>
                            <div class="circle-shape">
                                <img src="<?=base_url() ?>assets/images/shape/about-circle.png" alt="shape">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="section-header mb-40">
                            <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <img class="me-1" src="<?=base_url() ?>assets/images/icon/section-title.png" alt="icon">
                                ABOUT DIGII PRO PLUSE
                            </h5>
                            <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">DIGII PRO PLUSE truly cares for you</h2>
                            <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">We provide Assistance and Protection for the things you are most dependent on, in your everyday lives. Anytime. Anywhere.</p>
                        </div>
                        <div class="row g-4 wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="col-md-6">
                                <div class="about__right-item">
                                    <div class="icon">
                                        <img src="<?=base_url() ?>assets/images/icon/about-icon1.png" alt="icon">
                                    </div>
                                    <div class="content">
                                        <h4 class="mb-1">Best Services</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about__right-item">
                                    <div class="icon">
                                        <img src="<?=base_url() ?>assets/images/icon/about-icon2.png" alt="icon">
                                    </div>
                                    <div class="content">
                                        <h4 class="mb-1">24/7 Call Support</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="about__info mt-50 wow fadeInDown" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <a href="about.php" class="btn-one">Explore More <i
                                    class="fa-regular fa-arrow-right-long"></i></a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About area end here -->

        <!-- Counter area start here -->
        <section class="counter-area">
            <div class="container">
                <div class="counter__wrp gradient-bg">
                    <div class="counter__shape wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <img src="<?=base_url() ?>assets/images/shape/counnter-bg-shape.png" alt="shape">
                    </div>
                    <div class="counter__item wow bounceInUp" data-wow-delay="00ms" data-wow-duration="1000ms">
                        <img src="<?=base_url() ?>assets/images/icon/counter-icon1.png" alt="icon">
                        <div class="content">
                            <h3><span class="count">6,561</span>+</h3>
                            <p class="text-white">Satisfied Clients</p>
                        </div>
                    </div>
                    <div class="counter__item wow bounceInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                        <img src="<?=base_url() ?>assets/images/icon/counter-icon2.png" alt="icon">
                        <div class="content">
                            <h3><span class="count">600</span>+</h3>
                            <p class="text-white">Finished Projects</p>
                        </div>
                    </div>
                    <div class="counter__item wow bounceInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
                        <img src="<?=base_url() ?>assets/images/icon/counter-icon3.png" alt="icon">
                        <div class="content">
                            <h3><span class="count">250</span>+</h3>
                            <p class="text-white">Skilled Experts</p>
                        </div>
                    </div>
                    <div class="counter__item wow bounceInUp" data-wow-delay="800ms" data-wow-duration="1000ms">
                        <img src="<?=base_url() ?>assets/images/icon/counter-icon4.png" alt="icon">
                        <div class="content">
                            <h3><span class="count">590</span>+</h3>
                            <p class="text-white">Media Posts</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Counter area end here -->


        <section class="faq-area sub-bg pt-120 pb-120">
            <div class="faq__shape">
                <img class="sway__animationX" src="<?=base_url() ?>assets/images/shape/faq-shape.png" alt="shape">
            </div>
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-5 pe-2 pe-lg-5">
                        <div class="faq__image image wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="faq__line sway__animation">
                                <img src="<?=base_url() ?>assets/images/shape/faq-line.png" alt="image">
                            </div>
                            <img src="<?=base_url() ?>assets/images/faq/faq-image.png" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-7 mt-60">
                        <div class="section-header mb-40">
                            <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <svg class="me-1" width="20" height="12" viewBox="0 0 20 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.75" y="0.747803" width="18.5" height="10.5" rx="5.25" stroke="#3C72FC"
                                        stroke-width="1.5" />
                                    <mask id="path-2-inside-1_1120_294" fill="white">
                                        <path
                                            d="M3 5.9978C3 3.78866 4.79086 1.9978 7 1.9978H13C15.2091 1.9978 17 3.78866 17 5.9978C17 8.20694 15.2091 9.9978 13 9.9978H7C4.79086 9.9978 3 8.20694 3 5.9978Z" />
                                    </mask>
                                    <path
                                        d="M3 5.9978C3 2.96024 5.46243 0.497803 8.5 0.497803H11.5C14.5376 0.497803 17 2.96024 17 5.9978C17 4.61709 15.2091 3.4978 13 3.4978H7C4.79086 3.4978 3 4.61709 3 5.9978ZM17 5.9978C17 9.03537 14.5376 11.4978 11.5 11.4978H8.5C5.46243 11.4978 3 9.03537 3 5.9978C3 7.37851 4.79086 8.4978 7 8.4978H13C15.2091 8.4978 17 7.37851 17 5.9978ZM3 9.9978V1.9978V9.9978ZM17 1.9978V9.9978V1.9978Z"
                                        fill="#3C72FC" mask="url(#path-2-inside-1_1120_294)" />
                                </svg>
                                FAQ
                            </h5>
                            <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Most Common
                                Question?</h2>
                        </div>
                        <div class="faq__item">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item wow fadeInDown shadow border-none dark-mode"
                                    data-wow-delay="00ms" data-wow-duration="1500ms">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Where should I incorporate my business?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>It is a long established fact that a reader be distracted by
                                                the readable content of a page when looking a its layout.
                                                Many desktop publishing packages and web page editors now use Lorem
                                                Ipsum
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item wow fadeInDown shadow border-none dark-mode"
                                    data-wow-delay="200ms" data-wow-duration="1500ms">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            What happens my free trial?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>It is a long established fact that a reader be distracted by
                                                the readable content of a page when looking a its layout.
                                                Many desktop publishing packages and web page editors now use Lorem
                                                Ipsum
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item wow fadeInDown shadow border-none dark-mode"
                                    data-wow-delay="400ms" data-wow-duration="1500ms">
                                    <h2 class="accordion-header" id="headingthree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapsethree"
                                            aria-expanded="false" aria-controls="collapsethree">
                                            What is included in your services?
                                        </button>
                                    </h2>
                                    <div id="collapsethree" class="accordion-collapse collapse"
                                        aria-labelledby="headingthree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>It is a long established fact that a reader be distracted by
                                                the readable content of a page when looking a its layout.
                                                Many desktop publishing packages and web page editors now use Lorem
                                                Ipsum
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item wow fadeInDown shadow border-none dark-mode"
                                    data-wow-delay="600ms" data-wow-duration="1500ms">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            What type of company is measured?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>It is a long established fact that a reader be distracted by
                                                the readable content of a page when looking a its layout.
                                                Many desktop publishing packages and web page editors now use Lorem
                                                Ipsum
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Blog area start here -->
        <section id="blog-section" class="blog-area pt-120 pb-120">
            <div class="container">
                <div class="section-header text-center mb-60">
                    <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <img class="me-1" src="<?=base_url() ?>assets/images/icon/section-title.png" alt="icon">
                        Blog & news
                    </h5>
                    <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Explore Blogs and News
                    </h2>
                </div>
                <div class="row g-4">
                    <?php
                    $this->db->limit('3');
                    $this->db->order_by('id desc');
                    $partner = $this->db->get_where('blog',array('status'=>1))->result_object();
                    foreach($partner as $data)
                        { ?>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="00ms"
                        data-wow-duration="1500ms">
                        <div class="blog__item">
                            <a href="<?=base_url($data->slug) ?>" class="blog__image d-block image">
                                <img src="<?=base_url() ?>media/uploads/blog/<?=$data->image ?>" alt="image">
                                <div class="blog-tag">
                                    <h3 class="text-white"><?=date('d',strtotime($data->addeddate)) ?></h3>
                                    <span class="text-white"><?=date('M',strtotime($data->addeddate)) ?></span>
                                </div>
                            </a>
                            <div class="blog__content">
                                <h3><a href="<?=base_url($data->slug) ?>" class="primary-hover"><?=$data->name ?></a></h3>
                                <a class="mt-25 read-more-btn" href="<?=base_url($data->slug) ?>">Read More <i class="fa-regular fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    
                <?php } ?>

                </div>
            </div>
        </section>
        <!-- Blog area end here -->

        <!-- Brand area start here -->
        <div class="brand-area">
            <div class="container">
                <div class="brand__wrp">
                    <div class="brand__shape">
                        <img src="<?=base_url() ?>assets/images/shape/brand-shape.png" alt="">
                    </div>
                    <div class="swiper brand__slider">
                        <div class="swiper-wrapper">

                            <?php
                            $partner = $this->db->get_where('partner',array('status'=>1))->result_object();
                            foreach($partner as $data)
                                { ?>
                            <div class="swiper-slide">
                                <div class="brand__image image">
                                    <img src="<?=base_url() ?>media/uploads/partner/<?=$data->image ?>" alt="image">
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand area end here -->
    </main>

    <?php include('footer.php'); ?>