<?php include("header.php");

$homecontent = $this->crud->fetchdatabyid('2','site_setting');
?>

<style>
  @media only screen and (max-width: 767px) {
    .hero-slider-two .hero-slider-two-item {
        height: 1325px!important;
    }
}
</style>


<div class="search-overlay">
  <div class="d-table">
    <div class="d-table-cell">
      <div class="search-overlay-layer"></div>
      <div class="search-overlay-layer"></div>
      <div class="search-overlay-layer"></div>
      <div class="search-overlay-close">
        <span class="search-overlay-close-line"></span>
        <span class="search-overlay-close-line"></span>
      </div>
      <div class="search-overlay-form">
        <form>
          <input type="text" class="input-search" placeholder="Search here...">
          <button type="submit"><i class="bx bx-search"></i></button>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="hero-slider-two owl-carousel owl-theme">

  <div class="hero-slider-two-item item-bg1" style="background-image: url(<?=base_url() ?>media/uploads/site_setting/<?=$homecontent[0]->logo ?>);">
    <div class="d-table">
      <div class="d-table-cell">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7">
              <div class="banner-content">
                <!-- <span>Since 1992</span> -->
                <h1><?=$homecontent[0]->title ?></h1>
                <?=$homecontent[0]->content ?>
                <a href="<?=$homecontent[0]->url ?>" class="default-btn-one me-3">Contact Us</a>
                <!-- <a href="#" class="default-btn-two">Get A Quote</a> -->
              </div>
            </div>
            <div class="col-lg-5">
              <div class="order-form">
                <h2>International</h2>
                <hr>
                <p><span>Send Courier from India to Worldwide</span><br>
              Select Country and Weight from the below list to compare charges.</p><br>
              <?php include('courier-form.php'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="about-area-two pt-100">
<div class="container">
  <div class="row align-items-center">
    <div class="col-md-12">
      <div class="about-two-text">
        <p><strong>Welcome to Express International Courier</strong>, your trusted partner for seamless international logistics solutions. With over 7 years of extensive experience in the industry, including a background in DHL, we pride ourselves on delivering safe, secure, and fast shipping services worldwide.</p>
        <p>At <strong>Express International Courier</strong>, we understand the importance of timely and reliable delivery. Our commitment to excellence ensures that your parcels reach their destinations efficiently and with utmost care. Whether you're shipping documents, packages, or freight, we offer a comprehensive range of worldwide services tailored to meet your specific needs.</p>
        <p>One of our key strengths lies in our ability to provide the most competitive pricing in the Tri-City area, covering Chandigarh, Panchkula, and Mohali. We believe in offering value without compromising on quality, ensuring that you receive the best shipping solutions at the most affordable rates.</p>
      </div>
    </div>
    <div class="col-md-6">
      <img src="<?=base_url() ?>assets/img/express-img/boxload.png">
    </div>
    <div class="col-md-6">
      <br>
      <h1>WHO WE ARE</h1>
      <p><strong>Express International Courier</strong> is your premier choice for international logistics solutions. With over 7 years of dedicated experience, including expertise gained from working with DHL, we have established ourselves as a reliable and efficient partner in the industry.</p>
      <p>Our mission is simple: to provide safe, secure, and fast shipping services worldwide. We take pride in offering the most competitive pricing in the Tri-City area of Chandigarh, Panchkula, and Mohali, without compromising on quality.</p>
    </div>
    <div class="col-md-12">
      <div class="about-two-text">
        <p>At <strong>Express International Courier</strong>, we prioritize customer satisfaction above all else. Our commitment to excellence is reflected in our real-time tracking alerts, ensuring that you are always informed about the status of your shipments. Additionally, our complimentary pickup and packaging services make shipping hassle-free for our valued clients.</p>
        <p>Experience the difference of working with a logistics partner that values reliability, efficiency, and customer-centricity. Choose Express International Courier for all your international shipping needs and enjoy unparalleled service excellence.</p>
      </div>
    </div>
  </div>
</div>
</div>
<div class="about-area-two pt-100">
<div class="container">
  <div class="row align-items-center">
    <div class="col-md-12">
      <div class="section-title fx">
        <h2>Our Courier Partners</h2>
      </div>
      <div class="services-slider owl-carousel owl-theme">
        <?php
        $partner = $this->crud->selectDataByMultipleWhere('partner',array('status'=>1,));
        foreach($partner as $data)
          { ?>
        <div class="service-card">
          <img src="<?=base_url() ?>media/uploads/partner/<?=$data->image ?>">
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
</div>
<div class="about-area-two pt-100 pb-100">
<div class="container">
  <div class="row align-items-center">
    <div class="col-md-12">
      <div class="section-title fx">
        <h2>Get Best Deals on International Shipping</h2>
      </div>
    </div>
  </div>
  <br>


  <style>
    h5.card-title {
   
       border-bottom: none; 
  }
  </style>

  <div class="row align-items-center">

    <?php
    $country = $this->crud->selectDataByMultipleWhere('country',array('status'=>1,'type'=>1));
    foreach($country as $data)
      { ?>

    <div class="col-md-4">
      <a href="<?=base_url('country-details/'.$data->slug) ?>">
        <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-3 countries-flag">
            <img src="<?=base_url() ?>media/uploads/country/<?=$data->image ?>" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-9">
            <div class="card-body">
              <h5 class="card-title">
              <p><?=$data->name ?></p>              
            </div>
          </div>
        </div>
      </div>
      </a>
    </div>
  <?php } ?>

  </div>


</div>
</div>
<div class="about-area-two pt-100 pb-100">
<div class="container">
  <div class="row align-items-center">
    <div class="col-md-12">
      <div class="section-title fx">
        <h2>Our Services</h2>
      </div>
    </div>
  </div>
  <br>
  <div class="row align-items-center">

    <?php
      $track = $this->crud->selectDataByMultipleWhere('services',array('status'=>1,));
      foreach($track as $data)
        { ?>
    <div class="col-md-4">
      <a href="<?=base_url('service-details/'.$data->slug) ?>">
        <div class="card services">
          <div class="card-body text-center">
            <img src="<?=base_url() ?>media/uploads/services/<?=$data->image ?>">
            <h5 class="card-title hf" style="justify-content: center;"><?=$data->name ?></h5>
          </div>
        </div>
      </a>
    </div>

   <?php } ?>
    
  </div>
</div>
</div>

  <div class="choose-us-two">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="choose-content">
            <div class="choose-us-text">
              <div class="section-title">
                <!-- <span>Why Choose Us</span> -->
                <h2>Our Services</h2>
              </div>
            </div>
            <p>Apart from International Courier Services if you are looking for other services and also interested to know about our more services let's have look at them. We would love to assist you.</p>
            <ul>
              <li>
                <i class="bx bx-check"></i>
                Packers & Movers Services (Domestic & International).
              </li>
              <li>
                <i class="bx bx-check"></i>
                Domestic Courier Services.
              </li>
              <li>
                <i class="bx bx-check"></i>
                International Courier Services.
              </li>
              <li>
                <i class="bx bx-check"></i>
                Parcel Services & Medicine Delivery.
              </li>
              <li>
                <i class="bx bx-check"></i>
                Full Truck Load Services (FTL).
              </li>
              <li>
                <i class="bx bx-check"></i>
                Half Truck Load Services (HTL).
              </li>
              <li>
                <i class="bx bx-check"></i>
                Warehousing & Distribution Services.
              </li>
              <li>
                <i class="bx bx-check"></i>
                Cargo Services (Air, Rail & Road).
              </li>
              <li>
                <i class="bx bx-check"></i>
                E-Commerce Services B2B & B2C.
              </li>
              <li>
                <i class="bx bx-check"></i>
                Reverse Pickup Logistics.
              </li>
            </ul>
            <a href="<?=base_url() ?>contact" class="default-btn-one">Contact Us</a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="choose-us-image">
            <img src="<?=base_url() ?>assets/img/choose/choose1.jpg" alt="image">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="feedback-area ptb-100">
    <div class="container">
      <div class="shape-four">
        <img src="<?=base_url() ?>assets/img/shape/shape3.png" alt="Image">
      </div>
      <div class="section-title">
        <span>Clients Review</span>
        <h2>Our Clients Around The World Makes Us Special</h2>
      </div>
      <div class="feedback-slider owl-carousel owl-theme">
        <?php
        $this->db->order_by('id desc');
        $testimonials = $this->crud->selectDataByMultipleWhere('testimonials',array('status'=>1,));
        foreach($testimonials as $data)
          { ?>
        <div class="feedback-slider-item">
          <div class="feedback-icon-one">
            <i class="bx bxs-quote-left"></i>
          </div>
          <div class="feedback-img">
            <img src="<?=base_url() ?>media/uploads/testimonials/<?=$data->image ?>" alt="image">
            <h3><?=$data->name ?></h3>
            <span><?=$data->position ?></span>
          </div>
          <div class="rating">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
          </div>
          <div class="feedback-text">
            <p><?=$data->content ?></p>
          </div>
          <div class="feedback-icon-two">
            <i class="bx bxs-quote-right"></i>
          </div>
        </div>
<?php } ?>
      </div>
    </div>
  </div>

  <!-- <div class="blog-area pt-100 pb-70">
    <div class="container">
      <div class="section-title ">
        <span>Our Blog</span>
        <h2>Read Our Latest News and Blogs on Courier</h2>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="blog-card">
            <a class="blog-image" href="#">
              <img src="<?=base_url() ?>assets/img/blog/blog1.jpg" alt="image">
            </a>
            <div class="blog-text">
              <span class="meta-tag">Delivery</span>
              <div class="date">22 August 2021</div>
              <h3>
              <a href="#">
                We ensure you best the quality services
              </a>
              </h3>
              <p class="mb-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do tempor</p>
              <a href="#" class="default-btn-two">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="blog-card">
            <a class="blog-image" href="#">
              <img src="<?=base_url() ?>assets/img/blog/blog2.jpg" alt="image">
            </a>
            <div class="blog-text">
              <span class="meta-tag">Transport</span>
              <div class="date">23 August, 2021</div>
              <h3>
              <a href="#">
                Air cargo may become short-term solution
              </a>
              </h3>
              <p class="mb-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do tempor</p>
              <a href="#" class="default-btn-two">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
          <div class="blog-card">
            <a class="blog-image" href="#">
              <img src="<?=base_url() ?>assets/img/blog/blog3.jpg" alt="image">
            </a>
            <div class="blog-text">
              <span class="meta-tag">Delivery</span>
              <div class="date">24 August, 2021</div>
              <h3>
              <a href="#">
                We introduce new boat and flight service
              </a>
              </h3>
              <p class="mb-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do tempor</p>
              <a href="#" class="default-btn-two">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->

<?php include("footer.php"); ?>