<?php 
$currentURL = current_url();
include('header.php'); ?>


    <!-- Banner Area -->
    <section id="common_banner_one">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_banner_text">
                        <h2><?=$EDITDATA[0]->name ?></h2>
                        <ul>
                            <li><a href="<?=base_url() ?>">Home</a></li>
                            <li><i class="fas fa-slash"></i></li>
                            <li class="active"><?=$EDITDATA[0]->name ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
<style>
    .hurry-up {
  animation: blinker 1s linear infinite;
  color: red;
    font-weight: 700;
}

@keyframes blinker {
  50% {
    opacity: 0;
  }
}
</style>
    <!-- Product Single Area -->
    <section id="product_single_three" class="ptb-100">
        <div class="container">
            <div class="row area_boxed">
                <div class="col-lg-4" id="card-image">
                    
                </div>
                <div class="col-lg-8">
                    <div class="product_details_right_one">
                        <div class="modal_product_content_one">
                            <span class="hurry-up">Hurry Up! only <b class="p-stock"></b> Left</span>
                            <h3><?=$EDITDATA[0]->name ?></h3>
                            <div class="reviews_rating">
                                 <?php
                                $i=1;
                                while($i<=5)
                                {
                                    if($i<=$EDITDATA[0]->rating)
                                        {  ?>
                                <i class="fas fa-star"></i>
                                <?php } else { ?>
                                <?php } $i++; } ?>
                            </div>
                            <h4>₹ <span id="price"></span> <del>₹ <span id="cut_price"></span></del> </h4>

                            <?=$EDITDATA[0]->small_info ?>
                            
                            <form action="#!" id="product_count_form_two">
                                <div class="product_count_one">
                                    <div class="plus-minus-input">
                                        <div class="input-group-button">
                                            <button type="button" class="button" data-quantity="minus"
                                                data-field="quantity">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <input class="form-control" type="number" name="quantity" value="1" id="quantity_product">
                                        <div class="input-group-button">
                                            <button type="button" class="button" data-quantity="plus"
                                                data-field="quantity">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <div class="shop_sidebar_boxed pt-0">
                                <h4>Size</h4>
                                <form id="sizes_input">
                                    <?php
                                    $this->db->order_by('id desc');                                    
                                    $this->db->group_by('size_id');
                                    $size = $this->crud->selectDataByMultipleWhere('all_images',array('p_id'=>$EDITDATA[0]->id,));
                                    if(!empty($size))
                                    {
                                        foreach ($size as $key => $value) 
                                        {
                                        $size_name = $this->crud->selectDataByMultipleWhere('size',array('id'=>$value->size_id));
                                        ?>
                                    <label class="custom_boxed "><?=$size_name[0]->name ?>
                                        <input type="radio" <?php if($key==0) echo 'checked="checked"'; ?>  name="size_radio" class="get-size-value sizeradioBtnClass" value="<?php if(!empty($size_name)) echo $size_name[0]->id; ?>">
                                        <span class="checkmark"></span>
                                    </label>
                                    <?php } } ?>
                                </form>
                            </div>

                            <div class="variable-single-item">
                                <div class="product-variable-color">
                                    <span class="align_text_color">Color:</span>
                                    <?php
                                    $this->db->order_by('id desc');
                                    $this->db->group_by('color_id');
                                    $color = $this->db->get_where('all_images',array('p_id'=>$EDITDATA[0]->id,))->result_object();

                                    if(!empty($color))
                                    {
                                        foreach ($color as $key => $value) 
                                            { 
                                    $color_name = $this->db->get_where('color',array('id'=>$value->color_id))->result_object();
                                    ?>
                                    <label for="modal-product-color-red<?=$key ?>" class="">
                                        <?php
                                        if(!empty($color_name))
                                            { ?>
                                        <input name="modal_product_color" id="modal-product-color-red<?=$key ?>" class="color-select get-color-value colorradioBtnClass" type="radio" <?php if($key==0) echo 'checked="checked"'; ?> value="<?php if(!empty($color_name)) echo $color_name[0]->id; ?>">
                                        <span class="product-color-red" style="background: <?=$color_name[0]->color_code ?>;"></span>
                                    </label>
                                     <?php } } } ?>
                                </div>
                            </div>
                           <!--  <div class="product_details_cat">
                                <ul>
                                    <li>Category:</li>
                                    <li><a href="#!">Home,</a></li>
                                    <li><a href="#!">Bed,</a></li>
                                    <li><a href="#!">Sofa</a></li>
                                </ul>
                            </div>
                            <div class="product_details_cat product_details_bor">
                                <ul>
                                    <li>Tags:</li>
                                    <li><a href="#!">Home,</a></li>
                                    <li><a href="#!">Furniture,</a></li>
                                    <li><a href="#!">Sofa</a></li>
                                </ul>
                            </div> -->
                            <div class="links_Product_areas area_custom_details">
                                <ul>
                                    <li >
                                        <a style="cursor:pointer;" class="action wishlist add-to-wishlist-product-details-btn" title="Wishlist" data-p_id="<?=$EDITDATA[0]->id ?>">
                                            <i class="far fa-heart"></i>Add To Wishlist</a>
                                    </li>
                                    <!-- <li>
                                        <a href="compare.php" class="action compare" title="Compare"><i
                                                class="fas fa-exchange-alt"></i>Add To Compare</a>
                                    </li> -->
                                    <li class="add-to-cart-btn-show" style="display:none;">
                                        <a style="cursor:pointer;" class="theme-btn-one btn-black-overlay btn_sm add-to-cart-single">Add To Cart</a>
                                    </li>
                                    <li class="out-of-stock-btn-show" style="display:none;">
                                        <a class="theme-btn-one btn-black-overlay btn_sm">Out Of Stock</a>
                                    </li>
                                </ul>

                            </div>
                            <div class="product_detail_socials d-flex align-items-center">
                                <h6>Share:</h6>
                                <ul class="d-flex align-items-center">
                                    <li><a href="http://www.facebook.com/share.php?u=<?=$currentURL ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="http://www.linkedin.com/shareArticle?mini=true&url=<?=$currentURL ?>" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="https://www.instagram.com/?url=<?=$currentURL ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="https://twitter.com/intent/tweet?url=<?=$currentURL ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="product_details_tabs">
                        <ul class="nav nav-tabs" style="justify-content: center;">
                            <li><a data-bs-toggle="tab" data-bs-target="#description" href="#!"
                                    class="active">Description</a></li>
                            <li><a data-bs-toggle="tab" data-bs-target="#additional" href="#!">Additional
                                    Information</a></li>
                            <li><a data-bs-toggle="tab" data-bs-target="#review" href="#!">Review</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="description" class="tab-pane fade in show active">
                                <div class="product_description">
                                    <?=$EDITDATA[0]->description ?>
                                </div>
                            </div>
                            <div id="additional" class="tab-pane fade">
                                <div class="product_additional">
                                    <?=$EDITDATA[0]->additional_info ?>
                                </div>
                            </div>
                            <div id="review" class="tab-pane fade">
                                <div class="contact_form_one mt-3">
                                    <h3>Write A Review</h3>
                                    <form action="<?=base_url('welcome/product_review') ?>" method="post">
                                        <input type="hidden" name="product_name" value="<?=$EDITDATA[0]->name ?>">
                                        <input type="hidden" name="product_id" value="<?=$EDITDATA[0]->id ?>">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Name*" name="name">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Mobile*" name="mobile">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <select class="form-control" name="rating">
                                                        <option value="" selected>Select Rating</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <textarea rows="7" class="form-control" placeholder="Message*" name="message"></textarea>
                                                </div>
                                                <div class="submit_bitton_contact_one">
                                                    <button class="theme-btn-one btn-black-overlay btn_md" type="submit" name="submit">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <?php
                                $this->db->order_by('id desc');
                                $review = $this->crud->selectDataByMultipleWhere('product_review',array('status'=>1,'product_id'=>$EDITDATA[0]->id));
                                if(!empty($review))
                                    { ?>

                                <div class="product_reviews">
                                    <ul>


                                        <?php
                                        foreach($review as $data)
                                            { ?>
                                        <li class="media d-flex">
                                            <div class="media-img flex-shrink-0">
                                                <img src="<?=base_url() ?>media/1.jpg" alt="img">
                                            </div>
                                            <div class="media-body flex-grow-1 ms-3">
                                                <div class="media-header">
                                                    <div class="media-name">
                                                        <h4><?=$data->name ?></h4>
                                                        <p><?=date('d/M/Y',strtotime($data->addeddate)) ?></p>
                                                    </div>
                                                </div>
                                                <div class="media-pragraph">
                                                    <div class="product_review_strat">
                                                        <?php
                                                        $i=1;
                                                        while($i<=5)
                                                        {
                                                            if($i<=$data->rating)
                                                                { ?>

                                                        <span><a href="#!"><i class="fas fa-star"></i></a></span>
                                                        <?php }else{ ?> 
                                                             <?php }  $i++; } ?>
                                                    </div>
                                                    <p><?=$data->message ?></p>
                                                </div>
                                            </div>
                                        </li>
                                    <?php } ?>
                                        
                                       
                                    </ul>
                                </div>

                            <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
     @media only screen and (min-width: 1025px) {
        .desktop-none {
            display:none !important;
        }
        .thumb {
            height: 442px;
        }
    } 
    @media only screen and (max-width: 1026px) {
        .mobile-none {
            display:none !important;
        }
    } 
</style>


   <section id="to_days_area" class="ptb-100 slider_arrows_one" style="padding-top:0;padding-bottom: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center_heading">
                        <h2>Related Products</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="todays_slider owl-carousel owl-them">
                        <?php
                        $this->db->order_by('id desc');
                        $new_arrival = $this->crud->selectDataByMultipleWhere('product',array('status'=>1,'cat_id'=>$EDITDATA[0]->cat_id,));
                        foreach($new_arrival as $data)
                            { ?>
                            <?php $this->load->view('product-card',array('data'=>$data)); ?>

                    <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    
   <?php include('footer.php'); ?>

<script>
    var size_value = 0;
    var color_value = 0;

    $(document).on("click", ".get-size-value, .get-color-value",(function(e) {
      color_size_wise();
    }));

 
    function color_size_wise()
    {
        size_value = $(".sizeradioBtnClass:checked").val(); 
        color_value = $(".colorradioBtnClass:checked").val(); 



        var form = new FormData();
        form.append("p_id", <?=$EDITDATA[0]->id ?>);
        form.append("size_id", size_value);
        form.append("color_id", color_value);

        var settings = {
          "url": "<?=base_url() ?>Size_color_image/image_by_colorsize",
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
          $('#image1').html(response.data1);
          $('#image2').html(response.data2);
          $('#price').html(response.html.price);
          $('#cut_price').html(response.html.cut_price);
          $('#card-image').html(response.card);
          $('.p-stock').html(response.stock);


            

          if(response.status==200)
          {
            $(".toastBox").removeClass("toaster-active");
            toast_print(response.message); 
          }
          $(".toastBox").removeClass("toaster-active");
          toast_print(response.message);
          if(response.stock>0)
          {
            $(".add-to-cart-btn-show").css("display", "contents");
            $(".out-of-stock-btn-show").css("display", "none");
          }
          else
          {
            $(".add-to-cart-btn-show").css("display", "none");
            $(".out-of-stock-btn-show").css("display", "contents");
          }
        });
    }

    color_size_wise();



/*==========single add to cart-------*/

      $(document).on("click", ".add-to-cart-single",(function(e) {
        add_to_cart_single();
      }));

      function add_to_cart_single()
      {
        var quantity = $("#quantity_product").val();

        if(color_value=='' || color_value==0 || color_value==undefined)
        {
            toast_print('Select Color.'); 
            return false;
        }

        var form = new FormData();
        form.append("p_id", <?=$EDITDATA[0]->id ?>);
        form.append("quantity", quantity);
        form.append("color_val", color_value);
        form.append("size_val", size_value);

        var settings = {
          "url": "<?=base_url() ?>cart/product_details_cart",
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
          toast_print(response.message);
        });
      }


/*=======addd to wishkis from prodyct detaisl------*/

      $(document).on('click', '.add-to-wishlist-product-details-btn', function() {
            p_id = $(this).data("p_id");
            add_to_wishlist();
        });

        function add_to_wishlist()
        {
            var form = new FormData();
            form.append("p_id", p_id);
            form.append("color_val", color_value);
            form.append("size_val", size_value);

            var settings = {
              "url": "<?=base_url() ?>Wishlist/product_details_wishlist",
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

</script>