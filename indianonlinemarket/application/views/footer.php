<?php
$sitesetting = $this->crud->fetchdatabyid('1','site_setting');

?>
 <!-- footer Area -->
    <footer id="footer_one">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="footer_left_side">
                        <a href="<?=base_url() ?>"><img src="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" alt="logo" style="width:250px;"></a>
                        <p>At Indian Market,we believe that looking fabulous shouldn’t come at a high price. That’s why we’re committed to sourcing stylish, high-quality pieces at prices you won’t believe. From cozy sweaters to statement dresses, every item in our collection is made with you in mind. </p>
                        <!-- <p>Want to shop local but got no time for that, don’t worry we’ve got you covered  We as Indian market provide wide range of unique products from different market spaces of India and provide you the same at the comfort of your home</p> -->
                        
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 col-12">
                    <div class="footer_one_widget">
                        <h3>SHOP BY</h3>
                        <ul>
                            <?php
                            $this->db->limit(9);
                            $categories = $this->crud->selectDataByMultipleWhere('categories',array('status'=>1,));
                            foreach($categories as $data)
                                { ?>
                            <li><a href="<?=base_url('shop/'.$data->slug) ?>"><?=$data->name ?></a></li>
                            <?php } ?>
                            <li><a href="<?=base_url('categories') ?>">View All Category</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 col-12">
                    <div class="footer_one_widget">
                        <h3>INFORMATION</h3>
                        <ul>
                            <li><a href="<?=base_url() ?>">Home</a></li>
                            <li><a href="<?=base_url() ?>about">About Us</a></li>
                            <li><a href="<?=base_url() ?>contact">Contact Us</a></li>
                            <li><a href="<?=base_url() ?>term-condition">Terms & Condition</a></li>
                            <li><a href="<?=base_url() ?>privacy-policy">Privacy Policy</a></li>
                            <li><a href="<?=base_url() ?>shipping-policy">Shipping Policy</a></li>
                            <li><a href="<?=base_url() ?>return-refund">Return & Refund</a></li>
                            <li><a href="<?=base_url() ?>exchange-policy">Exchange Policy</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-6 col-sm-12 col-12">
                    <div class="footer_one_widget">
                        <h3>Your Account</h3>
                        <ul>
                            <li><a href="<?=base_url() ?>cart">Cart</a></li>
                            <li><a href="<?=base_url() ?>checkout">Checkout </a></li>
                            <li><a href="<?=base_url() ?>wishlist">Wishlist</a></li>
                            <li><a href="<?=base_url() ?>my-account">My Account</a></li>
                            <li><a href="<?=base_url() ?>login">Login</a></li>
                            <li><a href="<?=base_url() ?>register">Register</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="footer_one_widget">
                        <h3>CONTACT US</h3>
                        <ul>
                            <li><a href="tel:<?=$sitesetting[0]->mobile ?>"> <i class="fas fa-phone-volume"></i> <?=$sitesetting[0]->mobile ?></a></li>
                            <li><a href="tel:<?=$sitesetting[0]->alt_mobile ?>"> <i class="fas fa-phone-volume"></i> <?=$sitesetting[0]->alt_mobile ?></a></li>
                            <li><a href="mailto:<?=$sitesetting[0]->email ?>"><i class="far fa-envelope"></i> <?=$sitesetting[0]->email ?></a></li>
                            <li><a href="mailto:<?=$sitesetting[0]->alt_email ?>"><i class="far fa-envelope"></i> <?=$sitesetting[0]->alt_email ?></a></li>
                            <?php 
                            if(!empty($sitesetting[0]->address))
                                { ?>
                            <li><a href="#!"> <i class="fas fa-street-view"></i>  <?=$sitesetting[0]->address ?></a></li>
                        <?php } ?>
                        </ul>
                    </div>
                    <div class="footer_left_side_icon">
                        <ul>
                            <li>
                                <a href="<?=$sitesetting[0]->facebook ?>"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="<?=$sitesetting[0]->twitter ?>"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="<?=$sitesetting[0]->instagram ?>"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="<?=$sitesetting[0]->youtube ?>"><i class="fab fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>                  
        </div>
    </footer>

    <!-- CopyRight Area -->
    <section id="copyright_one">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="copyright_left">
                        <h6>© CopyRight 2023
                            <span><?=website_name ?></span>
                        </h6>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="copyright_right">
                        <img src="<?=base_url() ?>assets/img/common/payment.png" alt="img" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- cookie bar start -->
    <!-- <div class="cookie-bar">
        <p>We use cookies to improve our site and your shopping experience. By continuing to browse our site you accept
            our cookie policy.</p>
        <a href="javascript:void(0)" class="btn theme-btn-one bg-black btn_sm">accept</a>
        <a href="javascript:void(0)" class="btn theme-btn-one bg-black btn_sm">decline</a>
    </div> -->
    <!-- cookie bar end -->

    <!-- Newsletter Modal Area Start-->
    <!-- <div class="modal fade bd-example-modal-lg theme-modal" id="exampleModal" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body modal1 modal-bg">
                    <div class="row">
                        <div class="col-12">
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>

                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <div class="offer_modal_left">
                                        <img src="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" alt="logo">
                                        <h3>SUBSCRIBE TO NEWSLETTER</h3>
                                        <p>Subscribe to the <?=website_name ?> mailing list to receive updates
                                            on new arrivals, special offers and our promotions.</p>
                                        <form action="#!">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control"
                                                    placeholder="Recipient's username">
                                                <div class="input-group-append">
                                                    <button
                                                        class="theme-btn-one btn-black-overlay btn_sm">Subscribe</button>
                                                </div>
                                            </div>
                                            <div class="check_boxed_modal">
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                                <label for="vehicle1">Don't show this popup again</label>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12">
                                    <div class="offer_modal_img d-none d-lg-block">
                                        <img src="<?=base_url() ?>assets/img/common/modal.png" alt="img">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Product Modal Area Start-->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <!-- <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="product_one_modal_top modal-content">
                <button type="button" class="close close_modal_icon" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                </button>
                <div class="modal-body" id="product_slider_one">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-sm-12 col-12">
                            <div class="products_modal_sliders owl-carousel owl-theme">
                                <img src="https://thesarojinibazaar.com/cdn/shop/files/10E21D42-A0E5-4BF6-BC99-5880507CAD7E_1170x.jpg?v=1703254226" alt="img" />
                                <img src="https://thesarojinibazaar.com/cdn/shop/files/36713DBE-C465-4D25-98E3-701A9BA38546_1170x.jpg?v=1703254227" alt="img" />
                                <img src="https://thesarojinibazaar.com/cdn/shop/files/E84E733B-033F-4F70-99BF-DC355338D636_1170x.jpg?v=1703254157" alt="img" />
                                <img src="https://thesarojinibazaar.com/cdn/shop/files/A95B0D28-E973-4984-9527-152B9DCF5E37_1170x.jpg?v=1703254158" alt="img" />
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6 col-sm-12 col-12">
                            <div class="modal_product_content_one">
                                <h3>Black fashion handbag JI9023</h3>
                                <div class="reviews_rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4>₹ 317.76</h4>
                                <p>
                                    Standard dummy text ever since the 1500s, when an unknown printer took a galley of
                                    type and scrambled it to make a type specimen.
                                </p>
                                <div class="variable-single-item">
                                    <span>Color</span>
                                    <div class="product-variable-color">
                                        <label for="modal-product-color-red1">
                                            <input name="modal-product-color" id="modal-product-color-red1"
                                                class="color-select" type="radio" checked="">
                                            <span class="product-color-red"></span>
                                        </label>
                                        <label for="modal-product-color-green3">
                                            <input name="modal-product-color" id="modal-product-color-green3"
                                                class="color-select" type="radio">
                                            <span class="product-color-green"></span>
                                        </label>

                                        <label for="modal-product-color-blue5">
                                            <input name="modal-product-color" id="modal-product-color-blue5"
                                                class="color-select" type="radio">
                                            <span class="product-color-blue"></span>
                                        </label>
                                    </div>
                                </div>
                                <form action="#!" id="product_count_form_one">
                                    <div class="product_count_one">
                                        <div class="plus-minus-input">
                                            <div class="input-group-button">
                                                <button type="button" class="button" data-quantity="minus"
                                                    data-field="quantity">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                            <input class="form-control" type="number" name="quantity" value="0" />
                                            <div class="input-group-button">
                                                <button type="button" class="button" data-quantity="plus"
                                                    data-field="quantity">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <a href="<?=base_url() ?>cart" class="theme-btn-one btn-black-overlay btn_sm">Add To
                                            Cart</a>
                                    </div>
                                </form>
                                <div class="modal_share_icons_one">
                                    <h4>SHARE THIS PRODUCT</h4>
                                    <div class="posted_icons_one">
                                        <a href="" target="blank"><i class="fab fa-facebook-f"></i></a>
                                        <a href="" target="blank"><i class="fab fa-instagram"></i></a>
                                        <a href="" target="blank"><i class="fab fa-twitter"></i></a>
                                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>

<?php
$sub_total = 0; 
$shipping_charge = shippingcharge;
$this->db->order_by('id desc');
$cartpro = $this->crud->selectDataByMultipleWhere('add_to_temp_cart',array('temp_user_id'=>temp_session_id(),));
if(!empty($cartpro)) 
{
?>


    <!-- Shopingcart Modal Area Start-->
    <div class="modal right fade shoppingCartModal" id="shoppingCartModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body">
                    <h3>My Cart (<?php 
                        $this->db->where('temp_user_id',temp_session_id());
                        $query = $this->db->get('add_to_temp_cart');
                        echo $query->num_rows(); ?>)</h3>
                    <div class="products-cart-content">
                        <?php
                        foreach ($cartpro as $key => $value)
                            {

                                $product = $this->crud->selectDataByMultipleWhere('product',array('id'=>$value->p_id,));
                                $price = 0;
                                $this->db->group_by('price');
                                $this->db->limit(1);
                                $this->db->select("price");
                                $price_aray = $this->db->get_where('all_images',array('p_id'=>$value->p_id,'color_id'=>$value->color_id,'size_id'=>$value->size_id,))->result_object();
                                if(!empty($price_aray))
                                {
                                    foreach ($price_aray as $key => $value2) 
                                    { 
                                        $price = $value2->price;
                                        break;
                                    } 
                                }

                               $size_id = $this->crud->selectDataByMultipleWhere('size',array('id'=>$value->size_id));
                               $color_id = $this->crud->selectDataByMultipleWhere('color',array('id'=>$value->color_id));

                                $product_total = 0;
                                $product_total = $price*$value->quantity;
                                $sub_total += $product_total;
                                $finalprice = $sub_total+$shipping_charge;
                            ?>
                        <div class="products-cart d-flex align-items-center">
                            <div class="products-image">
                                <a href="<?=base_url('product-details/'.$product[0]->slug) ?>"><img src="<?php echo base_url(); ?>media/uploads/product/<?php echo $product[0]->thumb_img; ?>" alt="image"></a>
                            </div>
                            <div class="products-content">
                                <h3><a href="<?=base_url('product-details/'.$product[0]->slug) ?>"> <?=$product[0]->name ?> </a></h3>
                                <p>Size:- <?php if(!empty($size_id)) echo $size_id[0]->name; ?><br>
                                    Color:- <?php if(!empty($color_id)) echo $color_id[0]->name; ?>
                                </p>
                                <div class="products-price">
                                    <span><?=$value->quantity ?></span>
                                    <span>x</span>
                                    <span class="price">₹ <?=number_format($price,2) ?></span>
                                </div>
                            </div>
                            <a data-id="<?=$value->id ?>" style="cursor: pointer;" class="remove-btn delete-cart"><i class="fas fa-trash-alt"></i></a>
                        </div>
                        
                        <?php } ?>
                    </div>
                    <div class="products-cart-subtotal">
                        <span>Subtotal</span>
                        <span class="subtotal">₹ <?=number_format($sub_total,2) ?></span>
                    </div>
                    <div class="products-cart-btn">
                        <a href="<?=base_url() ?>cart" class="theme-btn-one btn-black-overlay btn_md">Cart</a>
                        <a href="<?=base_url() ?>checkout" class="theme-btn-one btn-black-overlay btn_md">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
   
   

<style>

    .toaster-active
    {
        position: fixed!important;
        bottom: 100px!important;
        opacity: 99999999999!important;
        margin: 0 auto!important;
        visibility: visible!important;
    /*    width: fit-content!important;*/
        transform: none!important;
        transition: all 0.5s;
        z-index: 9999999;
    }

    .toastBox{
         position: fixed;
        top: auto;
        bottom: 0;
        left: 0;
        width: 100%;
        max-width: 100%;
    }

    .halo-warning-popup  {
        padding: 10px 80px 10px 65px;
        min-height: 60px;
        transform: translateY(100%);
        z-index: 200;
        display: flex;
        align-items: center;
        gap: 25px;
        background-color: #1e7027;
        width: fit-content;
        margin: 0 auto;
    }

    .halo-warning-popup .halo-warning-content {
        color: white;
        font-size: calc(14px + 1px);
    }

    body.has-warning .halo-warning-popup {
        transform: translateY(0);
        pointer-events: all;
        opacity: 1;
        visibility: visible;
    }

    .halo-warning-popup .halo-warning-icon .icon {
        width: 25px;
        height: 25px;
        fill: #fff
    }

    .halo-warning-popup .halo-popup-close {
        top: 50%;
        right: 0;
    /*    transform: translateY(-50%);*/
        height: 100%;
        width: 60px;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: rgba(0,0,0,0.1);
    }

    .halo-warning-popup .halo-popup-close:hover {
        background-color: rgba(0,0,0,0.2);
    }

    .halo-warning-popup .halo-popup-close svg {
        width: 24px;
        height: 24px;
        stroke: transparent;
        fill: #fff
    }
    span.halo-warning-icon>i {
        color: white;
    }

    @media (max-width: 1024px) {
        .halo-warning-popup {
            min-height: 62px;
        }
    }

    @media (max-width: 768px) {
        .halo-warning-popup {
            padding: 10px 80px 10px 20px;
        }
    }
</style>

    <div class="toastBox ">        
        <div class="halo-popup halo-warning-popup bottom-up" data-warning-popup="" id="halo-warning-popup">
            <span class="halo-warning-icon"><i class="fas fa-check"></i></span>
            <div class="halo-popup-content custom-scrollbar halo-warning-content toaster-message" data-halo-warning-content="">You can only add 1 of this product to your cart</div>
        </div>
    </div>










    <!-- Jquery -->
    
    <!-- Bootstrap js -->
    <script src="<?=base_url() ?>assets/js/popper.min.js"></script>
    <script src="<?=base_url() ?>assets/js/bootstrap.min.js"></script>
    <!-- owl carousel js -->
    <script src="<?=base_url() ?>assets/js/owl.carousel.min.js"></script>
    <!-- Menu js -->
    <script src="<?=base_url() ?>assets/js/meanmenu.min.js"></script>
    <!-- Count js -->
    <script src="<?=base_url() ?>assets/js/count.js"></script>
    <!-- Timer js -->
    <script src="<?=base_url() ?>assets/js/timer.js"></script>
    <script src="<?=base_url() ?>assets/js/nice-select.min.js"></script>
    <!-- wow.js -->
    <!-- Slick js -->
    
    <script src="<?=base_url() ?>assets/js/wow.min.js"></script>
    <!-- Custom js -->
    <script src="<?=base_url() ?>assets/js/custom.js"></script>
    <script>
        new WOW().init();
    </script>


    <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<style>
    .skiptranslate.goog-te-gadget>span {
    display: none;
    }
    .goog-te-gadget .goog-te-combo {
        margin: 0 0!important;
    }

    select.goog-te-combo
    {
        background: transparent;!important;
        border: transparent!important;
        color: black!important;
        font-weight: 600!important;
        min-height: 20px!important;

    }
    select.goog-te-combo>option {
        background: white;
    }
    .goog-te-gadget {
    font-size: 0!important;
    }
</style>


<script>
    function toast_print(message)
      {
         $(".toaster-message").html(message);
         $(".toastBox").addClass("toaster-active");
          setTimeout(() => {
          $(".toastBox").removeClass("toaster-active");
        }, 3000);
      }

/*-------add to cart---*/

      p_id = 0;
      color_val = 0;
      size_val = 0;
      $(document).on("click", ".add-to-cart",(function(e) {
        p_id = $(this).data("p_id");
        color_val = $(this).data("color_val");
        size_val = $(this).data("size_val");
        add_to_cart();
      }));

      function add_to_cart()
      {
        var quantity = 1;
        var form = new FormData();
        form.append("p_id", p_id);
        form.append("quantity", quantity);
        form.append("color_val", color_val);
        form.append("size_val", size_val);

        var settings = {
          "url": "<?=base_url() ?>cart/add_to_cart",
          "method": "POST",
          "dataType": "json",
          "timeout": 0,
          "processData": false,
          "mimeType": "multipart/form-data",
          "contentType": false,
          "data": form
        };

        $.ajax(settings).done(function (response) {
          console.log(response);

          if(response.status==200)
          {
            setTimeout(function() {
                $(".toastBox").removeClass("toaster-active");
                toast_print(response.message)
                location.reload();
            }, 2000);
          }
          $(".toastBox").removeClass("toaster-active");
          toast_print(response.message)
        });
      }


/*item remove succ*/
      id = 0;
      $(document).on("click", ".delete-cart",(function(e) {
        id = $(this).data("id");
        delete_cart();
      }));

      function delete_cart()
      {
        var form = new FormData();
        form.append("id", id);

        var settings = {
          "url": "<?=base_url() ?>cart/remove_cart",
          "method": "POST",
          "dataType": "json",
          "timeout": 0,
          "processData": false,
          "mimeType": "multipart/form-data",
          "contentType": false,
          "data": form
        };

        $.ajax(settings).done(function (response) {
          console.log(response);
            if(response.status==200)
              {
                setTimeout(function() {
                $(".toastBox").removeClass("toaster-active");
                    toast_print(response.message)
                    location.reload();
                }, 2000);
              }
              $(".toastBox").removeClass("toaster-active");
              toast_print(response.message)
        });
      }

        $(document).on("click", ".delete-cart",(function(e) {
            $(this).parent().remove();
        }));

/*========update cart---------*/

        $(document).on('click', '.quantity-update', function() {
            id = $(this).data("id");
            update_cart();
        });

        $(document).on("click", ".cart-page-btn",(function(e) {
            $(this).parent().parent().remove();
        }));


        function update_cart()
        {
            var quantity = $("#cart-quantity"+id).val();

            var form = new FormData();
            form.append("id", id);
            form.append("quantity", quantity);

            var settings = {
              "url": "<?=base_url() ?>cart/update_cart",
              "method": "POST",
              "dataType": "json",
              "timeout": 0,
              "processData": false,
              "mimeType": "multipart/form-data",
              "contentType": false,
              "data": form
            };

            $.ajax(settings).done(function (response) {
              console.log(response);
              if(response.status==200)
              {
                setTimeout(function() {
                $(".toastBox").removeClass("toaster-active");
                    toast_print(response.message)
                    location.reload();
                }, 2000);
              }
              $(".toastBox").removeClass("toaster-active");
              toast_print(response.message)
            });
        }




    // addd to wishlist iteam
     $(document).on('click', '.add-to-wishlist-btn', function() {
            p_id = $(this).data("p_id");
            color_val = $(this).data("color_val");
            size_val = $(this).data("size_val");
            add_to_wishlist();
        });

        function add_to_wishlist()
        {
            var form = new FormData();
            form.append("p_id", p_id);
            form.append("color_val", color_val);
            form.append("size_val", size_val);

            var settings = {
              "url": "<?=base_url() ?>Wishlist/add_to_wishlist",
              "method": "POST",
              "dataType": "json",
              "timeout": 0,
              "processData": false,
              "mimeType": "multipart/form-data",
              "contentType": false,
              "data": form
            };

            $.ajax(settings).done(function (response) {
              console.log(response);
              if(response.status==200)
              {
                setTimeout(function() {
                $(".toastBox").removeClass("toaster-active");
                    toast_print(response.message)
                    location.reload();
                }, 2000);
              }
              $(".toastBox").removeClass("toaster-active");
              toast_print(response.message)
            });
        }


/*----------model view---------------*/

        $(document).on('click', '.click-to-model-btn', function() {
            id = $(this).data("id");
            model_view_btn();
        });

        function model_view_btn()
        {
            var form = new FormData();
            form.append("id", id);

            var settings = {
              "url": "<?=base_url() ?>model_view/click_model_view",
              "method": "POST",
              "dataType": "json",
              "timeout": 0,
              "processData": false,
              "mimeType": "multipart/form-data",
              "contentType": false,
              "data": form
            };

            $.ajax(settings).done(function (response) {
              console.log(response);
              $("#exampleModalCenter").html(response.data);
              $('#exampleModalCenter').modal('show'); 
            });
        }

</script>













    
</body>
</html>