<?php include 'header.php';?>

        <main class="main">
            <section class="section d-block">
                <div class="box-swiper">
                    <div class="swiper-container swiper-group-1 swiper-banner-1">
                        <div class="swiper-wrapper">

                            <?php
                            $this->db->order_by('id desc');
                            $slider = $this->crud->selectDataByMultipleWhere('slider',array('status'=>1,));
                            foreach($slider as $data)
                                { ?>
                            <div class="swiper-slide">
                                <div class="banner-1" style="background-image: url(<?=base_url() ?>media/uploads/slider/<?=$data->image ?>);">
                                    <div class="container">
                                        <div class="row align-items-center">
                                            <div class="col-lg-12">
                                                <!--<p class="font-md color-white mb-15 wow animate__animated animate__fadeIn" data-wow-delay=".0s">Cargo Management Group</p>-->
                                                <h1 class="color-white mb-25 wow animate__animated animate__fadeInUp" data-wow-delay=".0s" style="color: #e67817!important;">
                                                    <?=$data->title ?>
                                                </h1>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <p class="font-md color-white mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".0s" style="color: #e67817!important;">
                                                            <?=$data->content ?>
                                                        </p>
                                                    </div>
                                                </div>                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          <?php } ?>
                        </div>
                        <div class="swiper-pagination swiper-pagination-banner"></div>
                    </div>
                </div>
            </section>

            <section class="section mt-85">
                <div class="container">
                    <div class="text-center">
                        <img class="mb-15" src="<?=base_url() ?>assets/imgs/template/icons/favicon.svg" alt="transp" />
                        <h2 class="color-brand-2 mb-65 mt-15 wow animate__animated animate__fadeIn">
                            About CMG Group
                        </h2>
                    </div>
                    <div class="row mt-50 align-items-center">
                        <div class="col-xl-6 col-lg-6 mb-30">
                            <div class="box-images-pround">
                                <div class="box-images wow animate__animated animate__fadeIn">
                                    <img class="img-main" src="<?=base_url() ?>assets/about.webp" alt="transp" />
                                    <div class="image-2 shape-3"><img src="<?=base_url() ?>assets/imgs/page/homepage1/icon1.png" alt="transp" /></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 mb-30">
                            <div class="box-info-pround">
                                <p class="font-md color-grey-500 wow animate__animated animate__fadeIn text-justify">
                                    CMG WORLDWIDE offers Freight forwarding & Custom Clearance services. The company was founded by our Chairman Mr. K. L. Bhatia who brings along experience of more than 5 decades. Under his good guidance & supervision we have been able to offer 360 Degrees of Logistic Services.<br>

We are a team of experts with the professional experience and combined expertise in the freight forwarding sector.The organization is a recognized IATA CARGO AGENT, a current member of the AIR CARGO AGENTS ASSOCIATION OF INDIA (ACAAI), THE INTERNATIONAL FEDERATION OF FREIGHT FORWARDERS ASSOCIATION (FIATA), and has a representative on the board of the National Association of Foreign Trade and Export Promotion.<br>

The business uses a variety of time management strategies to satisfy the demands of each level of customer. The staff members have received thorough training in all facets of international air and sea travel and are aware of the significance of time value of money.
At CMG, we are committed to achieving not just the greatest, but legendary levels of customer satisfaction.
                                </p>
                              <!--   <p class="font-md color-grey-500 wow animate__animated animate__fadeIn text-justify">
                                    The business uses a variety of time management strategies to satisfy the demands of each level of customer. The staff members have received thorough training in all facets of international air and sea
                                    travel and are aware of the significance of time value of money.<br />
                                    At CMG, we are committed to achieving not just the greatest, but legendary levels of customer satisfaction.
                                </p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section mt-100 mb-50">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 mb-30">
              <h2 class="color-brand-2 mb-25 wow animate__animated animate__fadeIn">Founder Message</h2>
              <p class="font-md color-grey-900 mb-20 wow animate__animated animate__fadeIn">Logistics companies are essential to the smooth functioning of global supply chains. They offer a range of services such as transportation, warehousing, inventory management, and distribution to businesses across different industries. The role of logistics companies has become increasingly important in recent years due to the growth of e-commerce and global trade.</p>
              <div class="box-button mt-40"><a class="btn btn-brand-1-big hover-up mr-40 wow animate__animated animate__fadeIn" href="#">Read  More</a></div>
            </div>
            <div class="col-lg-6 position-relative mb-30">
              <div class="row align-items-end">
                <div class="col-lg-5 col-md-5 col-sm-5"><img class="mb-20 wow animate__animated animate__fadeIn" src="assets/imgs/page/about/img-about-1-1.png" alt="transp"><img class="wow animate__animated animate__fadeIn" src="assets/imgs/page/about/img-about-1-2.png" alt="transp"></div>
                <div class="col-lg-7 col-md-7 col-sm-7"><img class="wow animate__animated animate__fadeIn" src="assets/imgs/page/about/img-about-1-3.png" alt="transp"></div>
              </div>
              <div class="quote-center shape-2"></div>
            </div>
          </div>
        </div>
      </section>

    <div class="section bg-2 pt-65 pb-35">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 mb-30 text-center text-lg-start wow animate__animated animate__fadeIn">
                    <p class="font-2xl-bold color-brand-2">Affiliations</p>
                </div>
                <div class="col-lg-9 mb-30">
                    <div class="box-swiper">
                        <div class="affiliations swiper-container swiper-group-6 pb-0">
                            <div class="swiper-wrapper wow animate__animated animate__fadeIn">
                                <?php
                                $affi =  $this->crud->selectDataByMultipleWhere('affiliations',array('status'=>1,));
                                foreach($affi as $data)
                                    { ?>
                                <div class="swiper-slide"><img src="<?=base_url() ?>media/uploads/affiliations/<?=$data->image ?>" alt="transp" /></div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--     <section class="section mt-50">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-8 col-md-8">
              <h2 class="title-favicon color-brand-2 mb-20 title-padding-left wow animate__animated animate__fadeIn">Testimonials</h2>
            </div>
            <div class="col-lg-4 col-md-4 text-end">
              <div class="box-button-sliders">
                <div class="swiper-button-prev swiper-button-prev-style-1 swiper-button-prev-customers wow animate__animated animate__fadeIn">
                  <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"></path>
                  </svg>
                </div>
                <div class="swiper-button-next swiper-button-next-style-1 swiper-button-next-customers wow animate__animated animate__fadeIn">
                  <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path>
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="box-slide-customers overflow-hidden mt-50">
          <div class="box-slide-customers-2">
            <div class="box-swiper">
              <div class="swiper-container swiper-group-4-customers pb-50">
                <div class="swiper-wrapper">
                    <?php
                    $this->db->order_by('id desc');
                    $testi = $this->crud->selectDataByMultipleWhere('testimonials',array('status'=>1,));
                    foreach($testi as $data)
                        { ?>
                  <div class="swiper-slide wow animate__animated animate__fadeIn">
                    <div class="card-testimonial-grid">
                      <div class="box-author mb-25"><a href="#"><img src="<?=base_url() ?>media/uploads/testimonials/<?=$data->image ?>" alt="transp"></a>
                        <div class="author-info"><a href="#"><span class="font-xl-bold color-brand-2 author-name"><?=$data->name ?></span></a><span class="font-sm color-grey-500 department"><?=$data->position ?></span></div>
                      </div>
                      <p class="font-md color-grey-700"><?=$data->content ?></p>
                    </div>
                  </div>
                 <?php } ?>
              
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->
     
        
        </main>

<?php include 'footer.php';?>       