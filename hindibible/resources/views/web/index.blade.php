<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <title> Shivveda &ndash; Shivveda Private Limited</title>
    <meta name="description" content="Shivveda. This Ayurvedic powerhouse has been on a mission to bring age-old remedies to the forefront of holistic well-being. Two of their exceptional products, Kaya Trim and Madhu Ras, have garnered widespread acclaim for their effectiveness in promoting weight loss and managing sugar levels.">
    <meta property="og:site_name" content="Shivveda Private Limited">
    <meta property="og:url" content="https://www.shivveda.com/">
    <meta property="og:title" content="Shivveda">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Shivveda. This Ayurvedic powerhouse has been on a mission to bring age-old remedies to the forefront of holistic well-being. Two of their exceptional products, Kaya Trim and Madhu Ras, have garnered widespread acclaim for their effectiveness in promoting weight loss and managing sugar levels."><meta property="og:image" content="http://www.shivveda.com/cdn/shop/files/Slide_Kaya_Trim_Final_001_06ec23c2-b9d5-4350-8d49-d86f4edca9c8.jpg?v=1720183897">
      <meta property="og:image:secure_url" content="https://www.shivveda.com/cdn/shop/files/Slide_Kaya_Trim_Final_001_06ec23c2-b9d5-4350-8d49-d86f4edca9c8.jpg?v=1720183897">
      <meta property="og:image:width" content="1903">
      <meta property="og:image:height" content="1080"><meta name="twitter:site" content="@#"><meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Shivveda">
    <meta name="twitter:description" content="Shivveda. This Ayurvedic powerhouse has been on a mission to bring age-old remedies to the forefront of holistic well-being. Two of their exceptional products, Kaya Trim and Madhu Ras, have garnered widespread acclaim for their effectiveness in promoting weight loss and managing sugar levels.">
    @include('web.inc.maincss')
</head>




<body class="home_2">

    <!-- Start Include Header -->
    @include('web.inc.header')
    <!-- End Include Header -->

      <section class="banners">
         <div class="container-fluid">
            <div class="banner_content">
                <div class="row banner_slider">
                    @php($table_name = 'home_banner')
                    @php($limit = 10)
                    @php($list = DB::table($table_name)->inRandomOrder()
                    ->where($table_name.'.status',1)->orderBy($table_name.'.id','desc'))
                    @php($list = $list->get())
                    @foreach($list as $key=>$value)
                            <div class="col-xl-12">
                                <div class="single_slider">
                                   <img src="{{Helpers::image_check(@$value->image)}}">
                                </div>
                            </div>
                    @endforeach                           
                </div>
            </div>


            <div class="col-lg-12">
                <div class="banners owl-carousel owl-theme">
                    @php($table_name = 'home_banner')
                    @php($limit = 10)
                    @php($list = DB::table($table_name)->inRandomOrder()
                    ->where($table_name.'.status',1)->orderBy($table_name.'.id','desc'))
                    @php($list = $list->get())
                    @foreach($list as $key=>$value)
                        <div class="item"><img src="{{Helpers::image_check(@$value->image)}}"></div>
                    @endforeach 
               </div>
            </div>
         </div>
      </section>
       <section class="brand_2 marq">
            <div class="container-fluid">
                <div class="brand_item_area wow fadeInUp">
                    <div class="row">
                        <div class="col-12">
                            <div class="marquee_animi">
                                <ul>
                                    <li><h2>Welcome To Shivveda</h2></li>
                                    <li><h2>Welcome To Shivveda</h2></li>
                                    <li><h2>Welcome To Shivveda</h2></li>
                                    <li><h2>Welcome To Shivveda</h2></li>
                                    <li><h2>Welcome To Shivveda</h2></li>
                                    <li><h2>Welcome To Shivveda</h2></li>
                                    <li><h2>Welcome To Shivveda</h2></li>
                                    <li><h2>Welcome To Shivveda</h2></li>
                                    <li><h2>Welcome To Shivveda</h2></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="clean support">
            <div class="container">
                <div class="row justify-content-center">
                 <div class="col-xl-12 m-auto wow fadeInUp">
                    <div class="section_heading mb_20">
                        <h2>India's Leading Clean, Natural Ayurvedic Wellness Solution for Women</h2>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="innercontent">
                        <div class="imgbx">
                            <img src="images/graphics/Leading_1_1.webp">
                        </div>
                        <div class="bxcontent">
                            <p>100% Natural & Ayurvedic</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="innercontent">
                        <div class="imgbx">
                            <img src="images/graphics/Leading_2_1.webp">
                        </div>
                        <div class="bxcontent">
                            <p>Weight Management</p>
                        </div>
                    </div>
                </div>







                </div>
            </div>
        </section>
        <section class="middlebanner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="middlebanner">
                            <img src="images/graphics/middle.webp">
                        </div>
                    </div>
                </div>
            </div>
        </section>



    <!--=========================
        ADD BANNER 2 START
    ==========================-->
    <section class="add_banner_2">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 wow fadeInLeft">
                    <div class="special_product_banner">
                        <img src="images/special_pro_banner_img_2.jpg" alt="special product" class="img-fluid w-100">
                        <div class="text">
                            <h5>Up to 20% all Products</h5>
                            <h3>Everyday Fresh & Clean With Our Products</h3>
                            <p>Don’t miss avail the saving opportunity.</p>
                            <a class="common_btn" href="shop_details.html">shop now <i
                                    class="fas fa-long-arrow-right"></i>
                                <span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-xl-12 wow fadeInUp">
                            <div class="add_banner_item" style="background: url(images/banner_bg_5.jpg);">
                                <div class="add_banner_item_text">
                                    <h4>Up To 50% Off</h4>
                                    <h2>Organic Food Collection</h2>
                                    <p>Don’t miss avail the saving opportunity</p>
                                    <a class="common_btn" href="shop_details.html">shop now <i
                                            class="fas fa-long-arrow-right"></i>
                                        <span></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 wow fadeInUp">
                            <div class="add_banner_item" style="background: url(images/banner_bg_6.jpg);">
                                <div class="add_banner_item_text">
                                    <h4>Organic Food</h4>
                                    <h2>Best For Your Family</h2>
                                    <p>Limited Time Offer</p>
                                    <a class="common_btn" href="shop_details.html">shop now <i
                                            class="fas fa-long-arrow-right"></i>
                                        <span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        ADD BANNER 2 END
    ==========================-->

  
    <div class="cart_popup_modal">
        <div class="modal fade" id="cart_popup_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-md-6">
                                <div class="cart_popup_modal_img">
                                    <img src="images/home2_product_img_4.jpg" alt="Product img-fluid w-100">
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="product_det_text">
                                    <h2 class="details_title">Nestle Nescafe Classic Instant</h2>
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                        <span>Review (20)</span>
                                    </p>
                                    <p class="price">$10.50 <del>$12.00</del></p>
                                    <div class="details_quentity_area">
                                        <p><span>Qti Weight</span> (in kg) :</p>
                                        <div class="button_area">
                                            <button>-</button>
                                            <input type="text" placeholder="01">
                                            <button>+</button>
                                        </div>
                                        <h3>= $10.50</h3>
                                    </div>
                                    <div class="details_cart_btn">
                                        <a class="common_btn" href="#"><i class="far fa-shopping-basket"></i>
                                            Add To
                                            Cart
                                            <span></span></a>
                                        <a class="love" href="#"><i class="far fa-heart"></i></a>
                                    </div>
                                    <p class="category"><span>Category:</span>Coffee</p>
                                    <ul class="tags">
                                        <li>Tags:</li>
                                        <li><a href="#">Black Coffee, </a></li>
                                        <li><a href="#">Popular,</a></li>
                                        <li><a href="#">Top Sell</a></li>
                                    </ul>
                                    <ul class="share">
                                        <li>Share with friends:</li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=========================
        NEW PRODUCTS END
    ==========================-->


    <!--=========================
        COUNTDOWN 2 START
    ==========================-->
    <section class="countdown_2">
        <div class="container">
            <div class="countdown_2_area">
                <div class="row justify-content-between">
                    <div class="col-xl-5 col-lg-6 wow fadeInLeft">
                        <div class="countdown_text">
                            <div class="section_heading heading_left">
                                <h4>Monthly Offers</h4>
                                <h2>Our Specials Products deal of the day</h2>
                            </div>
                            <p>There are many variations of passages of Lorem Ipsum
                                butmajority have suffered.</p>
                            <div class="simply-countdown simply-countdown-one"></div>
                            <a class="common_btn" href="shop.php">shop now <i
                                    class="fas fa-long-arrow-right"></i>
                                <span></span></a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 wow fadeInRight">
                        <div class="countdown_img">
                            <img src="images/countdown_2_img.jpg" alt="coint" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        COUNTDOWN 2 END
    ==========================-->




  <!--=========================
        NEW PRODUCTS START
    ==========================-->
    <section class="new_products ">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 m-auto wow fadeInUp">
                    <div class="section_heading mb_20">
                        <h4>Checkout New Products</h4>
                        <h2>Today’s new hotest products available now</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                 <div class="col-xl-12 order-lg-12 col-lg-12 xs_mb_50 shop_mb_margin">
                    <div class="row">
                        <div class="col-xl-3 col-sm-6 wow fadeInUp">
                            <div class="single_product">
                                <div class="single_product_img">
                                    <img src="images/graphics/product1.webp" alt="Product">
                                  <!--   <ul>
                                        <li><a href="#"><i class="far fa-eye"></i></a></li>
                                        <li><a href="#"><i class="far fa-heart"></i></a></li>
                                    </ul> -->
                                </div>
                                <div class="single_product_text">
                                    <a class="title" href="product-detail.php">Lemon Meat Bone</a>
                                    <p>Rs.20.00 <del>Rs25.00</del> </p>
                                    <a class="cart_btn" href="product-detail.php"><i class="far fa-shopping-basket"></i> Enquiry Now
                                        <span></span></a>
                                </div>
                            </div>

                        </div>
                          <div class="col-xl-3 col-sm-6 wow fadeInUp">
                            <div class="single_product">
                                <div class="single_product_img">
                                    <img src="images/graphics/product1.webp" alt="Product">
                                  <!--   <ul>
                                        <li><a href="#"><i class="far fa-eye"></i></a></li>
                                        <li><a href="#"><i class="far fa-heart"></i></a></li>
                                    </ul> -->
                                </div>
                                <div class="single_product_text">
                                    <a class="title" href="product-detail.php">Lemon Meat Bone</a>
                                    <p>Rs.20.00 <del>Rs25.00</del> </p>
                                    <a class="cart_btn" href="product-detail.php"><i class="far fa-shopping-basket"></i> Enquiry Now
                                        <span></span></a>
                                </div>
                            </div>
                            
                        </div>
                          <div class="col-xl-3 col-sm-6 wow fadeInUp">
                            <div class="single_product">
                                <div class="single_product_img">
                                    <img src="images/graphics/product1.webp" alt="Product">
                                  <!--   <ul>
                                        <li><a href="#"><i class="far fa-eye"></i></a></li>
                                        <li><a href="#"><i class="far fa-heart"></i></a></li>
                                    </ul> -->
                                </div>
                                <div class="single_product_text">
                                    <a class="title" href="product-detail.php">Lemon Meat Bone</a>
                                    <p>Rs.20.00 <del>Rs25.00</del> </p>
                                    <a class="cart_btn" href="product-detail.php"><i class="far fa-shopping-basket"></i> Enquiry Now
                                        <span></span></a>
                                </div>
                            </div>
                            
                        </div>
                          <div class="col-xl-3 col-sm-6 wow fadeInUp">
                            <div class="single_product">
                                <div class="single_product_img">
                                    <img src="images/graphics/product1.webp" alt="Product">
                                  <!--   <ul>
                                        <li><a href="#"><i class="far fa-eye"></i></a></li>
                                        <li><a href="#"><i class="far fa-heart"></i></a></li>
                                    </ul> -->
                                </div>
                                <div class="single_product_text">
                                    <a class="title" href="product-detail.php">Lemon Meat Bone</a>
                                    <p>Rs.20.00 <del>Rs25.00</del> </p>
                                    <a class="cart_btn" href="product-detail.php"><i class="far fa-shopping-basket"></i> Enquiry Now
                                        <span></span></a>
                                </div>
                            </div>
                            
                        </div>
                          <div class="col-xl-3 col-sm-6 wow fadeInUp">
                            <div class="single_product">
                                <div class="single_product_img">
                                    <img src="images/graphics/product1.webp" alt="Product">
                                  <!--   <ul>
                                        <li><a href="#"><i class="far fa-eye"></i></a></li>
                                        <li><a href="#"><i class="far fa-heart"></i></a></li>
                                    </ul> -->
                                </div>
                                <div class="single_product_text">
                                    <a class="title" href="product-detail.php">Lemon Meat Bone</a>
                                    <p>Rs.20.00 <del>Rs25.00</del> </p>
                                    <a class="cart_btn" href="product-detail.php"><i class="far fa-shopping-basket"></i> Enquiry Now
                                        <span></span></a>
                                </div>
                            </div>
                            
                        </div>
                          <div class="col-xl-3 col-sm-6 wow fadeInUp">
                            <div class="single_product">
                                <div class="single_product_img">
                                    <img src="images/graphics/product1.webp" alt="Product">
                                  <!--   <ul>
                                        <li><a href="#"><i class="far fa-eye"></i></a></li>
                                        <li><a href="#"><i class="far fa-heart"></i></a></li>
                                    </ul> -->
                                </div>
                                <div class="single_product_text">
                                    <a class="title" href="product-detail.php">Lemon Meat Bone</a>
                                    <p>Rs.20.00 <del>Rs25.00</del> </p>
                                    <a class="cart_btn" href="product-detail.php"><i class="far fa-shopping-basket"></i> Enquiry Now
                                        <span></span></a>
                                </div>
                            </div>
                            
                        </div>
                          <div class="col-xl-3 col-sm-6 wow fadeInUp">
                            <div class="single_product">
                                <div class="single_product_img">
                                    <img src="images/graphics/product1.webp" alt="Product">
                                  <!--   <ul>
                                        <li><a href="#"><i class="far fa-eye"></i></a></li>
                                        <li><a href="#"><i class="far fa-heart"></i></a></li>
                                    </ul> -->
                                </div>
                                <div class="single_product_text">
                                    <a class="title" href="product-detail.php">Lemon Meat Bone</a>
                                    <p>Rs.20.00 <del>Rs25.00</del> </p>
                                    <a class="cart_btn" href="product-detail.php"><i class="far fa-shopping-basket"></i> Enquiry Now
                                        <span></span></a>
                                </div>
                            </div>
                            
                        </div>
                          <div class="col-xl-3 col-sm-6 wow fadeInUp">
                            <div class="single_product">
                                <div class="single_product_img">
                                    <img src="images/graphics/product1.webp" alt="Product">
                                  <!--   <ul>
                                        <li><a href="#"><i class="far fa-eye"></i></a></li>
                                        <li><a href="#"><i class="far fa-heart"></i></a></li>
                                    </ul> -->
                                </div>
                                <div class="single_product_text">
                                    <a class="title" href="product-detail.php">Lemon Meat Bone</a>
                                    <p>Rs.20.00 <del>Rs25.00</del> </p>
                                    <a class="cart_btn" href="product-detail.php"><i class="far fa-shopping-basket"></i> Enquiry Now
                                        <span></span></a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   




    <!--=============================
        TESTIMONIAL 2 START
    ==============================-->
    <section class="testimonial_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 wow fadeInLeft">
                    <div class="testimonial_2_text">
                        <div class="section_heading heading_left mb_25">
                            <h4>Our Testimonials</h4>
                            <h2>What Our Customer Talking About Us</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet, elit sed, ading do
                            eiusmod tempor incididunt labore et dolore elit,
                            sed do eiusmod.</p>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7 wow fadeInUp">
                    <div class="row testi_slider_2">
                        <div class="col-xl-6">
                            <div class="testimonial_item_2">
                                <div class="img">
                                    <img src="images/testimonial_img_1.jpg" alt="testimonial" class="img-fluid w-100">
                                </div>
                                <p class="review_text">Contrary to popular belief, Lorem Ipsum is not
                                    random text. It has roots in a piece of classic
                                    literature from 45 BC, making</p>
                                <div class="text">
                                    <h3>Bartholomew</h3>
                                    <p>Customer</p>
                                </div>
                                <p class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="testimonial_item_2">
                                <div class="img">
                                    <img src="images/testimonial_img_2.jpg" alt="testimonial" class="img-fluid w-100">
                                </div>
                                <p class="review_text">Contrary to popular belief, Lorem Ipsum is not
                                    random text. It has roots in a piece of classic
                                    literature from 45 BC, making</p>
                                <div class="text">
                                    <h3>Sophie Dennison</h3>
                                    <p>Graphic Designer</p>
                                </div>
                                <p class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="testimonial_item_2">
                                <div class="img">
                                    <img src="images/testimonial_img_3.jpg" alt="testimonial" class="img-fluid w-100">
                                </div>
                                <p class="review_text">Contrary to popular belief, Lorem Ipsum is not
                                    random text. It has roots in a piece of classic
                                    literature from 45 BC, making</p>
                                <div class="text">
                                    <h3>Israt Jahan</h3>
                                    <p>Developer</p>
                                </div>
                                <p class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        TESTIMONIAL 2 END
    ==============================-->


<section class="leanprot">
    <div class="container-fluid">
        <div class="row justify-content-center">
         <div class="col-xl-12 m-auto wow fadeInUp">
                    <div class="section_heading mb_45">
                               <h2> Clean Protein, for everyone</h2>
                               <p>Live #HarTarahSeBetter with clean protein for all your needs! Manage weight, tone up, build lean muscle & improve stamina.</p>
                    </div>


            </div>

            <div class="col-lg-12">
                <div class="innerclear">
                    <ul>
                        <li><img src="images/graphics/clean1.webp"></li>
                        <li><img src="images/graphics/clean2.webp"></li>
                        <li><img src="images/graphics/clean3.webp"></li>
                        <li><img src="images/graphics/clean4.webp"></li>
                        <li><img src="images/graphics/clean5.webp"></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="leanprot">
    <div class="container-fluid">
        <div class="row justify-content-center">
         <div class="col-xl-12 m-auto wow fadeInUp">
                    <div class="section_heading mb_45">
                               <h2> #HarTarahSeBetter</h2>
                               <p>India's #1 Clean, Plant-Based Nutrition brand with Scientifically & Clinically-backed health solutions. Certified Clean & Vegan.</p>
                    </div>


            </div>

                <div class="col-lg-2">
                    <div class="hartarah">
                        <div class="har">
                            <img src="images/graphics/icon1.png">
                        </div>
                        <div class="harcontent">
                            <p>Clean, Plant-Based</p>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-2 mrgin">
                    <div class="hartarah">
                        <div class="har">
                            <img src="images/graphics/icon2.png">
                        </div>
                        <div class="harcontent">
                            <p>Vegan Certificate</p>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-2">
                    <div class="hartarah">
                        <div class="har">
                            <img src="images/graphics/icon3.png">
                        </div>
                        <div class="harcontent">
                            <p>Pesticide Free</p>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
</section>






  <!--=========================
        BRAND 2 START
    ==========================-->
    <section class="brand_2 brands">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 m-auto wow fadeInUp">
                    <div class="section_heading mb_45">
                        <h2>In the News</h2>
                    </div>
                </div>
            </div>
            <div class="brand_item_area wow fadeInUp">
                <div class="row">
                    <div class="col-12">
                        <div class="marquee_animi">
                            <ul>
                                <li><img src="images/graphics/news1.png" alt="brand" class="img-fluid w-100"></li>
                                 <li><img src="images/graphics/news2.png" alt="brand" class="img-fluid w-100"></li>
                                  <li><img src="images/graphics/news3.png" alt="brand" class="img-fluid w-100"></li>
                                   <li><img src="images/graphics/news4.png" alt="brand" class="img-fluid w-100"></li>
                                    <li><img src="images/graphics/news5.png" alt="brand" class="img-fluid w-100"></li>
                                     <li><img src="images/graphics/news1.png" alt="brand" class="img-fluid w-100"></li>
                                 <li><img src="images/graphics/news2.png" alt="brand" class="img-fluid w-100"></li>
                                  <li><img src="images/graphics/news3.png" alt="brand" class="img-fluid w-100"></li>
                                   <li><img src="images/graphics/news4.png" alt="brand" class="img-fluid w-100"></li>
                                    <li><img src="images/graphics/news5.png" alt="brand" class="img-fluid w-100"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        BRAND 2 END
    ==========================-->




    <!--=========================
        BLOG 2 START
    ==========================-->
    <section class="blog_2 ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 m-auto">
                    <div class="section_heading mb_15 wow fadeInUp">
                        <h4>Our Blog Post</h4>
                        <h2>Latest News & Articles</h2>
                    </div>
                </div>
            </div>
            <div class="row">


                @php($table_name = 'blog')
                @php($limit = 3)
                @php($list = DB::table('blog')                    
                ->where($table_name.'.status',1)->orderBy($table_name.'.id','desc'))
                @php($list = $list->paginate($limit))
                @foreach($list as $key=>$value)
                    


                    <div class="col-lg-4 col-md-6 wow fadeInUp">
                        <div class="blog_item">
                            <div class="blog_img">
                                <img src="{{Helpers::image_check(@$value->image)}}" alt="blog" class="img-fluid w-100">
                            </div>
                            <div class="blog_text">
                                <ul class="top">
                                    <li><i class="far fa-calendar-day"></i> {{date("d M, Y", strtotime($value->add_date_time))}}</li>
                                    <li><i class="far fa-user-circle"></i> Admin</li>
                                </ul>
                                <a class="title" href="{{$value->slug}}">{{$value->name}}</a>
                                <ul class="bottom">
                                    <li><a href="{{$value->slug}}">read more <i class="fas fa-long-arrow-right"></i></a>

                                </ul>
                            </div>
                        </div>
                    </div>


                @endforeach


            </div>
        </div>
    </section>
    <!--=========================
        BLOG 2 END
    ==========================-->


  

    <section class="amazon">
        <div class="container">
            <div class="row justify-content-center">
                 <div class="col-xl-12 m-auto wow fadeInUp">
                    <div class="section_heading mb_20">
                        <h2>We Are Also Availabel On</h2>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="amazonlist">
                        <a href="https://www.amazon.in/stores/page/587D3977-79F9-4ABE-97A7-46405249FD65?ref_=cm_sw_r_ud_ast_store_3QTMZQKGRA62ETXDWFAK">
                            <img src="images/graphics/amazon.png">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="amazonlist">
                        <a href="#">
                            <img src="images/graphics/flipkart.jpg">
                        </a>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- Start Include Footer -->
    @include('web.inc.footer')
    <!-- Enc Include Footer -->
    
    <!-- Start Include Footer -->
    @include('web.inc.mainjs')
    <!-- Enc Include Footer -->
  
</body>
</html>