<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />

    <title>Product Details &ndash; Shivveda Private Limited</title>

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

<body>


    <!-- Start Include Header -->
    @include('web.inc.header')
    <!-- End Include Header -->

    <!--=========================
        BREADCRUMB START
    ==========================-->
    <section class="page_breadcrumb" style="background: url(images/breadcrumb_bg.jpg);">
        <div class="breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb_text wow fadeInUp">
                            <h1>{{$row->name}}</h1>
                            <ul>
                                <li><a href="#"><i class="fal fa-home-lg"></i> Home</a></li>
                                <li><a href="#">{{$row->name}}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        BREADCRUMB START
    ==========================-->


    <!--=========================
        SHOP DETAILS START
    ==========================-->
    <section class="shop_details pt_120 xs_pt_80">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-8 col-lg-6 wow fadeInLeft">
                    <div class="product_zoom">
                        <div class="exzoom hidden" id="exzoom">
                            <div class="exzoom_img_box">
                                <ul class='exzoom_img_ul'>
                                    <li><img class="zoom ing-fluid w-100" src="images/product_img_1.jpg" alt="product">
                                    </li>
                                    <li><img class="zoom ing-fluid w-100" src="images/product_img_2.jpg" alt="product">
                                    </li>
                                    <li><img class="zoom ing-fluid w-100" src="images/product_img_3.jpg" alt="product">
                                    </li>
                                    <li><img class="zoom ing-fluid w-100" src="images/product_img_4.jpg" alt="product">
                                    </li>
                                    <li><img class="zoom ing-fluid w-100" src="images/product_img_5.jpg" alt="product">
                                    </li>
                                    <li><img class="zoom ing-fluid w-100" src="images/product_img_6.jpg" alt="product">
                                    </li>
                                    <li><img class="zoom ing-fluid w-100" src="images/product_img_7.jpg" alt="product">
                                    </li>
                                </ul>
                            </div>
                            <div class="exzoom_nav"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-10 col-lg-6 wow fadeInUp">
                    <div class="product_det_text">
                        <h2 class="details_title">{{$row->name}}</h2>
                        <p class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                        </p>
                        <p class="price">{{Helpers::price_formate($row->sale_price)}} <del>{{Helpers::price_formate($row->real_price)}}</del></p>
                        <div class="details_short_description">
                            <h3>Description</h3>
                            <p>{{$row->sort_description}}</p>
                        </div>
                        
                        <div class="details_cart_btn">
                            <a class="common_btn" href="#"><i class="far fa-shopping-basket"></i>Buy Now
                                <span></span></a>
                           
                        </div>
                        
                        <ul class="share">
                            <li>Share with friends:</li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                        </ul>
                         <div class="fssai">
                                        <img src="images/fssai.webp">
                                    </div>
                    </div>
                </div>
               
            </div>
            <div class="row mt_120 xs_mt_80 wow fadeInUp">
                <div class="col-12">
                    <div class="shop_det_content_area">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                    aria-selected="true">Description</button>
                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                                    aria-selected="false"> Information</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                aria-labelledby="nav-home-tab" tabindex="0">
                                <div class="shop_det_description">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen
                                        book. It has survived not only five centuries, but also the leap into electronic
                                        typese
                                        tting, remaining essentially unchanged. It was popularised in the 1960s with the
                                        release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                        with
                                        desktop publishing software like Aldus PageMaker including versions of Lorem
                                        Ipsum.</p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type.</p>

                                    <ul>
                                        <li>One popular belief, Lorem Ipsum is not simply random.</li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                        <li>To popular belief, Lorem Ipsum is not simply random.</li>
                                        <li>Contrary to popular belief, Lorem Ipsum is not simply random.</li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    </ul>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen
                                        book. It has survived not only five centuries, but also the leap into electronic
                                        typese
                                        tting, remaining essentially unchanged. It was popularised in the 1960.</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                aria-labelledby="nav-profile-tab" tabindex="0">
                                <div class="shop_det_additional_info">
                                    <h3>Additional Information</h3>
                                    <div class="table-responsive">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>Weight</td>
                                                    <td>2 kg</td>
                                                </tr>
                                                <tr>
                                                    <td>Dimensions</td>
                                                    <td>10 × 6 × 3 cm</td>
                                                </tr>
                                                <tr>
                                                    <td>Width</td>
                                                    <td>7.5” - 8.75”</td>
                                                </tr>
                                                <tr>
                                                    <td>Hight</td>
                                                    <td>5.5” - 6.75”</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        SHOP DETAILS END
    ==========================-->


    <!--=========================
        RELATED PRODUCT START
    ==========================-->
    <section class="related_product">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 wow fadeInLeft">
                    <div class="section_heading heading_left mb_15">
                       
                        <!-- <h2>Recently View</h2> -->
                    </div>
                </div>
            </div>
            <div class="row related_slider">
                    

                    @php($table_name = 'product')
                        @php($limit = 10)
                        @php($list = DB::table($table_name)->inRandomOrder()                    
                        ->where($table_name.'.status',1)->orderBy($table_name.'.id','desc'))
                        @php($list = $list->paginate($limit))
                        @foreach($list as $key=>$value)
                            

                            <div class="col-xl-3 col-sm-6 wow fadeInUp">
                                <div class="single_product">
                                    <div class="single_product_img">
                                        <img src="{{Helpers::image_check(@$value->display_image)}}" alt="Product" class="img_fluid w-100">
                                      <!--   <ul>
                                            <li><a href="#"><i class="far fa-eye"></i></a></li>
                                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                                        </ul> -->
                                    </div>
                                    <div class="single_product_text">
                                        <a class="title" href="{{$value->slug}}">{{$value->name}}</a>
                                        <p>{{Helpers::price_formate($value->sale_price)}} <del>{{Helpers::price_formate($value->real_price)}}</del> </p>
                                        <a class="cart_btn" href="{{$value->slug}}"><i class="far fa-shopping-basket"></i> Enquiry Now
                                            <span></span></a>
                                    </div>
                                </div>

                            </div>
                        @endforeach
                             


            </div>
        </div>
    </section>

    <div class="cart_popup_modal">
        <div class="modal fade" id="cart_popup_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body">
                        <div class="row align-items-center">
                            <div class="col-xl-6">
                                <div class="cart_popup_modal_img">
                                    <img src="images/home2_product_img_4.jpg" alt="Product img-fluid w-100">
                                </div>
                            </div>
                            <div class="col-xl-6">
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
                                        <a class="common_btn" href="#"><i class="far fa-shopping-basket"></i> Add To
                                            Cart
                                            <span></span></a>
                                       
                                    </div>
                                    <p class="category"><span>Category:</span> Coffee</p>
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
        RELATED PRODUCT END
    ==========================-->

 <!-- Start Include Footer -->
    @include('web.inc.footer')
    <!-- Enc Include Footer -->
    <!-- Start Include Footer -->
    @include('web.inc.mainjs')
    <!-- Enc Include Footer -->
</body>
</html>