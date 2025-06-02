<?php include('header.php'); ?>

    <!-- Banner Area -->
    <section >
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
            <div class="carousel-indicators">
                <?php
                $this->db->order_by('id desc');
                $slider = $this->crud->selectDataByMultipleWhere('slider',array('status'=>1,));
                foreach($slider as $key => $data)
                    { ?>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?=$key ?>" class="<?php if($key==0) echo 'active'; ?>" aria-current="true" aria-label="Slide <?=$key ?>"></button>
            <?php } ?>
            </div>
            <div class="carousel-inner">
                <?php
                $this->db->order_by('id desc');
                $slider = $this->crud->selectDataByMultipleWhere('slider',array('status'=>1,));
                foreach($slider as $key => $data)
                    { ?>
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

<style>
    .product_var_one_text a, .product_var_one_text_center a {
        margin-top: 455px;
        margin-left: -60px;
    }


    @media only screen and (min-width: 1025px) {
        .desktop-none {
            display:none !important;
        }
    } 
    @media only screen and (max-width: 1026px) {
        .width-50 {
            width: 50%;
        }
        .product_var_one_text {
            width: 100%;
            } 
        .product_var_one_text a, .product_var_one_text_center a {
            margin-top: 178px;
            margin-left: -33px;
        }

    
</style>

    <!-- Product variation -->
    <section id="product_variation_one" class="pt-100" style="padding-bottom: 30px;padding-top: 50px;">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        <?php
                        $this->db->order_by('id desc');
                        $offer_banner = $this->crud->selectDataByMultipleWhere('offer_banners',array('status'=>1,));
                        foreach($offer_banner as $data)
                            { ?>
                        <div class="col-lg-4 col-md-4 width-50">
                            <div class="product_variation_one_boxed mb-3 img-zoom-hover">
                                <img src="<?=base_url() ?>media/uploads/offer_banners/<?=$data->image ?>" alt="img" />
                                <div class="product_var_one_text">
                                    <a href="<?=$data->link ?>" class="theme-btn-one bg-black btn_sm"><?=$data->title ?></a>
                                </div>
                            </div>
                        </div>

                       <?php } ?>

                    </div>                    
                </div>

               
               
            </div>
        </div>
    </section>

    <!-- Hot Product Area -->
 

    <!-- Offer Time Area -->
    

    <!-- To Days Area -->
    <section id="to_days_area" class="ptb-100 slider_arrows_one" style="padding-top:0;padding-bottom: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center_heading">
                        <h2>NEW ARRIVALS</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="todays_slider owl-carousel owl-them">
                        <?php
                        $this->db->order_by('id desc');
                        $new_arrival = $this->crud->selectDataByMultipleWhere('product',array('status'=>1,'new_arrival'=>1,));
                        foreach($new_arrival as $data)
                            { ?>
                            <?php $this->load->view('product-card',array('data'=>$data)); ?>

                    <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </section>


  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.17/dist/css/splide.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.min.css'>
<style>

.codepen-info {
  max-width: 0px;
  margin: 0 auto;
  background: #f4f4f4;
  padding: 20px 30px;
  margin-top: 40px;
}
.codepen-info h1 {
  font-weight: 500;
  text-align: center;
  color: black;
  margin-top: 0;
}
.codepen-info p {
  color: #777;
}
.codepen-info .src {
  padding: 15px;
  background: white;
  border-radius: 5px;
  margin-bottom: 15px;
}
.codepen-info .src p.coded {
  background: #f1f1f1;
  color: black;
}
.page-width {
  max-width: 900px;
  margin: 0 auto;
}
.page-width h2 {
  text-align: center;
}
.splide {
  max-width: 1000px;
  margin: 0 auto;
}
.splide__slide img {
  max-width: 100%;
}
.splide__arrow--prev {
  margin-left: -50px;
}
.splide__arrow--next {
  margin-right: -50px;
}
.splide__pagination {
  margin-bottom: -35px;
}
.splide__pagination__page.is-active {
  background: green;
}

.splide__slide video {
  width: 100%;
  height: auto; /* Ensures video retains aspect ratio */
}

.splide__list {
  display: flex;
  justify-content: space-between;
}

@media (max-width: 768px) {
  .splide__slide {
    margin: 0 0.5rem;
  }
}

</style>
<?php
$this->db->order_by('id desc');
$videos = $this->crud->selectDataByMultipleWhere('videos',array('status'=>1,));
if(!empty($videos))
    { ?>
<section class="splide" aria-labelledby="carousel-heading">
    <h2 id="carousel-heading" class="mt-3 mb-3 text-center">Shop the Look</h2>

    <div class="splide__track mt-4 mb-5">
        <ul class="splide__list">
             <?php foreach($videos as $data) { ?>
                <li class="splide__slide">
                    <video src="<?=base_url() ?>media/uploads/videos/<?=$data->image ?>" controls width="100%"></video>
                </li>
             <?php } ?>
        </ul>
    </div>
</section>

<?php } ?>












<style>
    .marwuee-bottom{
        padding-top: 12px;
        padding-bottom: 12px; 
        padding-top-tablet: 9px;
        padding-bottom-tablet: 9px;
        padding-top-mobile: 6px;
        padding-bottom-mobile: 6px;
        minus-spacing-top: 0px;
        background: linear-gradient(180deg, rgba(206, 32, 79, 0.67) 61.583%, rgba(254, 91, 124, 1) 92%);
        text-size: 30px; 
        text-size-mb: 20px;
        gap-blocks: 10.0px; 
        border-color: #232323; 
        border-color-mb: #232323; 
        icon-color: #232323; 
        icon-color-mb: #232323; 
        time-scroll: 15s; 
        font-weight: 400; 
}
marquee.marwuee-bottom>p {
    display: contents;
}
</style>
<?php
$bottmar = $this->crud->selectDataByMultipleWhere('marquee',array('status'=>1,'type'=>2));
if(!empty($bottmar))
{
?>
<marquee class="marwuee-bottom">
    <?php
        foreach($bottmar as $data)
        { ?>
    <p style="line-height: 1">
            <svg style="fill: #ffdb26; width: 18px; height: 18px; margin: 0 15px 0 95px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 506.53 510.69"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M500.7,27.62q-36.6,35-73.12,70.12-51.12,49.06-102.29,98.1a55.94,55.94,0,0,1-5.33,4c3.14,2.3,5.08,3.77,7.06,5.18,29.3,21,58.69,42,87.82,63.22a21,21,0,0,1,7.21,10.15c2.13,7-1.16,12.82-8.35,16.79Q383.18,312,352.54,328.66L59.88,488.36a297,297,0,0,1-35,20A23.59,23.59,0,0,1,20,510.11h0a19.7,19.7,0,0,1-4.67.58,15.23,15.23,0,0,1-9.59-3.19c-.18-.13-.34-.28-.51-.43a1.49,1.49,0,0,1-.14-.12l-.58-.55L4.19,506a16.25,16.25,0,0,1-4.08-9.31,16.08,16.08,0,0,1-.11-1.8A13.51,13.51,0,0,1,.57,491a18.36,18.36,0,0,1,5.26-7.94q33.48-32,66.89-64.15,67.46-65.28,135-130.49a49.09,49.09,0,0,1,5.42-3.89c-8.41-6.07-15.5-11.2-22.62-16.3l-79.41-57c-12.42-8.92-11.34-21.75,2.4-28.48L481.61,2.37C493.53-3.47,505,1.88,506.42,14,507.08,19.56,504.66,23.84,500.7,27.62Z"></path></g></g></svg>
            <a href="#!">
                <span class="text-white"><?=$data->title ?></span>
            </a>
        </p>
        <?php } ?>
</marquee>
<?php } ?>










<?php
$this->db->order_by('id desc');
$this->db->limit(1);
$single = $this->crud->selectDataByMultipleWhere('offer_single_banner',array('status'=>1,));
if(!empty($single))
{
    foreach($single as $data)
        { ?>
    <section>
        <div class="row" style="--bs-gutter-x: 0;">
            <div class="col-lg-12 col-12 text-center">
              <a href="<?=$data->link ?>">
                  <img src="<?=base_url() ?>media/uploads/offer_single_banner/<?=$data->image ?>" class="img-fluid">
              </a>  
            </div>
        </div>
    </section>
<?php } } ?>    

























<style>


.slick-wrapper {
  width: 100%;
/*  background-color: aqua;*/
}

.slide-item {
/*  background-color: rebeccapurple;*/
  color: aqua;
  display: flex !important;
  justify-content: center;
  align-items: center;
  text-align: center;
  height: 100%;
  border: 1px solid white;
}

</style>




    <section id="tranding" class="ptb-100 slider_arrows_one" style="padding-top: 50px;padding-bottom: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center_heading">
                        <h2>TRENDING NOW</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="slick-wrapper">
                          <div id="slick1">
                            <?php
                            $this->db->order_by('id desc');
                            $trending = $this->crud->selectDataByMultipleWhere('product',array('status'=>1,'tranding_product'=>1));
                            foreach($trending as $data)
                                { ?>
                            <div class="slide-item">
                                <?php $this->load->view('product-card',array('data'=>$data)); ?>
                            </div>
                        <?php } ?>

                            
                          </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
<!-- 
     <section id="CO-ORD-SETS" class="slider_arrows_one" style="padding: 30px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center_heading">
                        <h2>CO ORD SETS</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="todays_slider owl-carousel owl-them">
                        product card load
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Instagram Arae -->
<?php
$this->db->order_by('id desc');
$instagram = $this->crud->selectDataByMultipleWhere('instagram',array('status'=>1,));
if(!empty($instagram))
    { ?>
    <section id="instagram_area_one">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center_heading">
                        <h2>Follow Us Instagram</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="instagram_post_slider owl-carousel owl-theme">
                        <?php
                        foreach($instagram as $data)
                            { ?>
                        <div class="instgram_post">
                            <a href="<?=$sitesetting[0]->instagram ?>" target="_blank">
                                <i class="fab fa-instagram"></i>
                                <img src="<?=base_url() ?>media/uploads/instagram/<?=$data->image ?>" alt="img" />
                            </a>
                        </div>
                       
                      <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>






<!--   <section id="tranding" class="ptb-100 slider_arrows_one" style="padding-top: 50px;padding-bottom: 50px;">
    <div class="container">
        
    </div>
        
  </section> -->




<?php include('footer.php'); ?>
<script src='https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.17/dist/js/splide.min.js'></script>
     <script id="rendered-js" >
var splide = new Splide(".splide", {
  perPage: 3,
  gap: "2rem",
  autoplay: true,
  breakpoints: {
    1024: {
      perPage: 4,
      gap: "1rem"
    },
    768: {
      perPage: 2,
      gap: "1rem"
    },
    480: {
      perPage: 1,
      gap: "0.5rem"
    }
  }
});

splide.mount();
//# sourceURL=pen.js

    </script>



<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js'></script>
      <script id="rendered-js" >
$('#slick1').slick({
  rows: 2,
  dots: false,
  arrows: true,
  infinite: true,
  speed: 300,
  slidesToShow: 6,
  slidesToScroll: 6,
  responsive: [
    {
      breakpoint: 1024, // Tablet and below
      settings: {
        slidesToShow: 4,
        slidesToScroll: 4
      }
    },
    {
      breakpoint: 768, // Mobile landscape
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480, // Mobile portrait
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    }
  ]
});
//# sourceURL=pen.js

    </script>

<style>
    @media (max-width: 768px) {
  .slick-wrapper {
    padding: 10px;
  }
  .slide-item {
    width: 100%; /* Ensure full width for each slide on smaller screens */
  }
}
</style>