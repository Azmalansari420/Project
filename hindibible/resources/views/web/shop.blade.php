<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <title> Shop &ndash; Shivveda Private Limited</title>
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
                            <h1>Shop</h1>
                            <ul>
                                <li><a href="#"><i class="fal fa-home-lg"></i> Home</a></li>
                                <li><a href="#">Shop</a></li>
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
        SHOP PAGE START
    ==========================-->
    <section class="shop_page">
        <div class="container">
          <!--   <div class="shop_page_header_area">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 wow fadeInUp">
                        <div class="shop_header_search">
                            <form>
                                <input type="text" placeholder="Search...">
                                <button><i class="far fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 wow fadeInUp">
                        <div class="shop_page_header">
                            <p>Showing 1–6 of 10 results</p>
                            <div class="filter">
                                <p>Sort by:</p>
                                <select class="select_js">
                                    <option value=""> Default Sorting</option>
                                    <option value="">low to high</option>
                                    <option value="">high to low</option>
                                    <option value="">Best rating</option>
                                    <option value="">best sell</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="row">
               <!--  <div class="col-xl-3 col-lg-4 col-sm-8 col-md-6 order-2 wow fadeInLeft">
                    <div id="sticky_sidebar" class="shop_sidebar">
                        <div class="shop_sidebar_filter shop_sidebar_item">
                            <h3>Filter by price</h3>
                            <div class="price_ranger">
                                <input type="hidden" id="slider_range" class="flat-slider" />
                            </div>
                        </div>
                        <div class="shop_sidebar_category shop_sidebar_item">
                            <h3>Categories</h3>
                            <ul>
                                <li><a href="shop.html">Vegetable <span>(08)</span></a></li>
                                <li><a href="shop.html">Nuts & Dried Foods <span>(05)</span></a></li>
                                <li><a href="shop.html">Milk & Dairy <span>(02)</span></a></li>
                                <li><a href="shop.html">Halal Lamb & Goat <span>(19)</span></a></li>
                                <li><a href="shop.html">Halal Deli <span>(25)</span></a></li>
                                <li><a href="shop.html">Goat meat <span>(32)</span></a></li>
                                <li><a href="shop.html">Fresh Halal Beef <span>(44)</span></a></li>
                                <li><a href="shop.html">Fresh & Fruits <span>(16)</span></a></li>
                            </ul>
                        </div>
                        <div class="shop_sidebar_product">
                            <h3>Featured Products</h3>
                            <ul>
                                <li>
                                    <div class="img">
                                        <img src="images/sidebar_product_1.jpg" alt="product" class="img-fluid w-100">
                                    </div>
                                    <div class="text">
                                        <a href="product-detail.php">Porcelain Garlic</a>
                                        <p>$15.00</p>
                                        <span>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <div class="img">
                                        <img src="images/sidebar_product_2.jpg" alt="product" class="img-fluid w-100">
                                    </div>
                                    <div class="text">
                                        <a href="product-detail.php">Vegetables Meat</a>
                                        <p>$20.00</p>
                                        <span>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <div class="img">
                                        <img src="images/sidebar_product_3.jpg" alt="product" class="img-fluid w-100">
                                    </div>
                                    <div class="text">
                                        <a href="product-detail.php">Orange Slice Mix</a>
                                        <p>$32.00</p>
                                        <span>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> -->
                <div class="col-xl-12 order-lg-12 col-lg-12 xs_mb_50 shop_mb_margin">
                    <div class="row">
                        

                        @php($table_name = 'product')
                        @php($limit = 12)
                        @php($list = DB::table($table_name)                    
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
                    <div class="row">
                        <div class="pagination page_navigation">
                          {{$list->links()}}                  
                        </div>
                    </div>
                </div>
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
                                        <a class="love" href="#"><i class="far fa-heart"></i></a>
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
        SHOP PAGE END
    ==========================-->


    <!-- Start Include Footer -->
    @include('web.inc.footer')
    <!-- Enc Include Footer -->
    <!-- Start Include Footer -->
    @include('web.inc.mainjs')
    <!-- Enc Include Footer -->
</body>
</html>