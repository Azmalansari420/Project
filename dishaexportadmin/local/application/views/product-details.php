<?php include('header.php'); ?>

       
<style type="text/css">
    .single-product-style1__img img {
    width: 100%;
    height: 250px; /* Aap isse change kar sakte ho apne design ke hisab se */
    object-fit: cover;
    display: block;
}


.single-product-style1__content {
    justify-content: center;
}

    .form-label {
    margin-bottom: .5rem;
    color: black;
    font-weight: 600;
}

    .product-details__reveiw {
        display: flex;
        align-items: center;
        margin-top: 5px;
        padding-bottom: 16px;
        margin-bottom: 15px;
    }

    .product-details__title span {
        margin-left: 0;
    }
    .product-details__reveiw span {
        margin-left: 0;
    }

    .tablestyle
    {
        border: 1px solid rgba(0, 0, 0, 0.13); border-spacing: 0px; margin: 0px 0px 10px; padding: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; font-size: 15.4px; line-height: inherit; font-family: &quot;Noto Sans&quot;, sans-serif; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; width: 683px; color: rgb(51, 51, 51); background-color: rgb(252, 252, 252);
    }

    .tbodyclas{
        border: 0px; margin: 0px; padding: 0px; font: inherit;"><tr style="border-width: 0px; border-top-style: solid; border-right-style: initial; border-bottom-style: initial; border-left-style: initial; border-color: initial; border-image: initial; margin: 0px; padding: 0px; font: inherit;
    }
    .alpha75{
        border: 1px solid rgba(0, 0, 0, 0.15); margin: 0px; padding: 12px 10px 12px 0px; font: inherit; opacity: 0.75; min-width: 100px; max-width: 200px; width: 375px;
border: 1px solid rgba(0, 0, 0, 0.15); margin: 0px; padding: 12px 10px 12px 0px; font: inherit; opacity: 0.75; min-width: 100px; max-width: 200px; width: 375px;
border: 1px solid rgba(0, 0, 0, 0.15); margin: 0px; padding: 12px 10px 12px 0px; font: inherit; opacity: 0.75; min-width: 100px; max-width: 200px; width: 375px;
border: 1px solid rgba(0, 0, 0, 0.15); margin: 0px; padding: 12px 10px 12px 0px; font: inherit; opacity: 0.75; min-width: 100px; max-width: 200px; width: 375px;
    }
    .p5px{
        border: 1px solid rgba(0, 0, 0, 0.15); margin: 0px; padding: 12px 10px 12px 15px; font-style: inherit; font-variant: inherit; font-weight: 600; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; min-width: 270px; max-width: 310px;
border: 1px solid rgba(0, 0, 0, 0.15); margin: 0px; padding: 12px 10px 12px 15px; font-style: inherit; font-variant: inherit; font-weight: 600; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; min-width: 270px; max-width: 310px;
border: 1px solid rgba(0, 0, 0, 0.15); margin: 0px; padding: 12px 10px 12px 15px; font-style: inherit; font-variant: inherit; font-weight: 600; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; min-width: 270px; max-width: 310px;
border: 1px solid rgba(0, 0, 0, 0.15); margin: 0px; padding: 12px 10px 12px 15px; font-style: inherit; font-variant: inherit; font-weight: 600; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; min-width: 270px; max-width: 310px;
    }
    .dddd{
        border-width: 1px 0px 0px; border-top-style: solid; border-right-style: initial; border-bottom-style: initial; border-left-style: initial; border-top-color: rgba(0, 0, 0, 0.1); border-right-color: initial; border-bottom-color: initial; border-left-color: initial; border-image: initial; margin: 0px; padding: 0px; font: inherit;
border-width: 1px 0px 0px; border-top-style: solid; border-right-style: initial; border-bottom-style: initial; border-left-style: initial; border-top-color: rgba(0, 0, 0, 0.1); border-right-color: initial; border-bottom-color: initial; border-left-color: initial; border-image: initial; margin: 0px; padding: 0px; font: inherit;
border-width: 1px 0px 0px; border-top-style: solid; border-right-style: initial; border-bottom-style: initial; border-left-style: initial; border-top-color: rgba(0, 0, 0, 0.1); border-right-color: initial; border-bottom-color: initial; border-left-color: initial; border-image: initial; margin: 0px; padding: 0px; font: inherit;
    }
    
</style>




        <!--Start Product Details-->
        <section class="product-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-6">
                        <div class="product-details__left">
                            <div class="product-details__left-inner">
                                <div class="product-details__content-box">
                                    <div class="swiper-container" id="shop-details-one__carousel">
                                        <div class="swiper-wrapper">
                                            <?php
                                            $allimage = json_decode($EDITDATA[0]->multiple_image_json);
                                            // print_r($allimage);
                                            if(!empty($allimage))
                                            {
                                                foreach($allimage as $value)
                                                    { ?>
                                            <div class="swiper-slide">
                                                <div class="product-details__img">
                                                    <img src="<?=base_url() ?>media/uploads/product/<?=$value ?>" alt="">
                                                </div>
                                            </div>
                                        <?php } } ?>
                                                                                        
                                        </div>
                                    </div>
                                    <div class="product-details__nav">
                                        <div class="swiper-button-prev" id="product-details__swiper-button-next">
                                            <i class="icon-right-arrow-1"></i>
                                        </div>
                                        <div class="swiper-button-next" id="product-details__swiper-button-prev">
                                            <i class="icon-right-arrow-11"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details__thumb-box">
                                    <div class="swiper-container" id="shop-details-one__thumb">
                                        <div class="swiper-wrapper">
                                            <?php
                                            $allimage = json_decode($EDITDATA[0]->multiple_image_json);
                                            // print_r($allimage);
                                            if(!empty($allimage))
                                            {
                                                foreach($allimage as $value)
                                                    { ?>
                                            <div class="swiper-slide">
                                                <div class="product-details__thumb-img">
                                                    <img src="<?=base_url() ?>media/uploads/product/<?=$value ?>"
                                                        alt="">
                                                </div>
                                            </div><!-- /.swiper-slide -->
                                            <?php } } ?>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-xl-6">
                        <div class="product-details__right">
                            <div class="product-details__top">
                                <h3 class="product-details__title">
                                    <?=$EDITDATA[0]->name ?> <?php if(!empty($EDITDATA[0]->amount)) {?> <br><span> ₹ <?=$EDITDATA[0]->amount ?></span> <?php } ?>
                                </h3>
                            </div>
                            <?php if(!empty($EDITDATA[0]->moq)) {?>
                            <div class="product-details__reveiw">
                                <span><?=$EDITDATA[0]->moq ?></span>
                            </div>
                        <?php } ?>
                            <div class="product-details__content">
                                <table class="w100 mb10px formTable lcBdr0 tablestyle" >
                                    <tbody class="tbodyclas">
                                        <?php if(!empty($EDITDATA[0]->bussiness_type)) {?>
                                        <tr>
                                            <td class="p5px alpha75" style="">Business Type</td>
                                            <td class="p5px fw6" style=""><?=$EDITDATA[0]->bussiness_type ?></td>
                                        </tr>
                                        <?php } if(!empty($EDITDATA[0]->brand_name)){ ?>
                                        <tr class="dddd">
                                            <td class="p5px alpha75" style="">Brand Name</td>
                                            <td class="p5px fw6" style=""><?=$EDITDATA[0]->brand_name ?></td>
                                        </tr>
                                        <?php } if(!empty($EDITDATA[0]->material)){ ?>
                                        <tr class="dddd">
                                            <td class="p5px alpha75" style="">Material</td>
                                            <td class="p5px fw6" style=""><?=$EDITDATA[0]->material ?></td>
                                        </tr>
                                        <?php } if(!empty($EDITDATA[0]->cultivation_type)){ ?>
                                        <tr class="dddd">
                                            <td class="p5px alpha75" style="">Cultivation Type</td>
                                            <td class="p5px fw6" style=""><?=$EDITDATA[0]->cultivation_type ?></td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>

                            </div>

                            <div class="product-details__inner">
                                <div class="product-details__quantity">
                                    <h3 class="product-details__quantity-title">Kilogram</h3>
                                    <div class="quantity-box">
                                        <button type="button" class="sub"><i class="fa fa-minus"></i></button>
                                        <input type="number" id="1" value="1" />
                                        <button type="button" class="add"><i class="fa fa-plus"></i></button>
                                    </div>
                                </div>
                                <div class="product-details__buttons-boxes">
                                    <div class="product-details__buttons-2">
                                        <a href="javascript:void(0)" class="thm-btn" onclick="showModal('Stress Relief')">Get Best Price <span class="icon-next1"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <?php if(!empty($EDITDATA[0]->prefered_buyer)) {?>

                            <div class="mb-3 mt-3">
                                <h5 class="mb-2">Preferred Buyer From</h5>
                                <table class="w100 mb10px formTable lcBdr0 tablestyle" ><tbody class="tbodyclas"><td class="p5px alpha75" style="">Location</td><td class="p5px fw6" style=""><?=$EDITDATA[0]->prefered_buyer ?></td></tr></tbody></table>
                            </div>
                        <?php } ?>

                            

                            <div class="product-details__social">
                                <div class="product-details__buttons-boxes">
                                    <div class="product-details__buttons-1">
                                        <a href="javascript:void(0)" onclick="showModal('Stress Relief')" class="thm-btn"> Request to Call <span class="icon-next1"></span>
                                        </a>
                                    </div>
                                    <div class="product-details__buttons-2">
                                        <a href="javascript:void(0)" onclick="showModal('Stress Relief')" class="thm-btn">Send Enquiry <span class="icon-next1"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Product Details-->


        <!--Shop Details Start-->
        <section class="product-description">
            <div class="container">
                <div class="product-details__description">
                    <div class="product-details__main-tab-box tabs-box">
                        <ul class="tab-buttons clearfix list-unstyled">
                            <li data-tab="#description" class="tab-btn active-btn"><span>Product Details</span></li>
                            <li data-tab="#reviews" class="tab-btn"><span>Yes! I am interested</span></li>
                        </ul>
                        <div class="tabs-content">
                            <!--tab-->
                            <div class="tab active-tab" id="description">
                                <div class="product-details__tab-content-inner">
                                    <div class="product-details__description-content">
                                        <?=$EDITDATA[0]->product_details ?>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="tab " id="reviews">
                                <div class="product-details__tab-content-inner">
                                    
                                    <!--Start Review Form-->
                                    <div class="review-form-one">
                                        <div class="review-form-one__inner">
                                            <h3 class="review-form-one__title mb-3">Looking for "<?=$EDITDATA[0]->name ?>" ?</h3>
                                            
                                            <form action="<?=base_url('welcome/quick_form_bottom') ?>" method="post" class="review-form-one__form contact-form-validadted" >
                                                <input type="hidden" name="p_name" value="<?=$EDITDATA[0]->name ?>">
                                                <div class="row">
                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="review-form-one__input-box">
                                                            <label class="form-label">Your Name</label>
                                                            <input type="text" placeholder="Your name" name="name">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="review-form-one__input-box">
                                                            <label class="form-label">Email address</label>
                                                            <input type="email" placeholder="Email address" name="email">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="review-form-one__input-box">
                                                            <label class="form-label">Mobile</label>
                                                            <input type="text" placeholder="Mobile"
                                                                name="mobile">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-6">
                                                        <div class="review-form-one__input-box">
                                                            <label class="form-label">Quantity</label>
                                                            <input type="text" placeholder="Quantity"
                                                                name="quantity">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-6">
                                                        <div class="review-form-one__input-box">
                                                            <label class="form-label">Kilogram</label>
                                                            <input type="text" placeholder="Kilogram"
                                                                name="mesurmentunit">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-6 mb-3">
                                                        <div class="review-form-one__input-box" style="    margin-bottom: 0;">
                                                            <label class="form-label">Purpose of Requirement</label>
                                                        </div>
                                                        <div class="pt7px pb7px threeDiv" style="display: flex;">
                                                            <div style="margin-right: 14px;"><label class="control control--checkbox"  style="display: flex;">
                                                            <input type="radio" name="purpose" value="Reselling" style="margin-right: 7px;">
                                                            <div class="control__indicator" >Reselling</div>
                                                            </label></div>
                                                            <div style="margin-right: 14px;"><label class="control control--checkbox"  style="display: flex;">
                                                            <input type="radio" name="purpose" value="End Use" style="margin-right: 7px;">
                                                            <div class="control__indicator" >End Use</div>
                                                            </label></div>
                                                                    </div>
                                                    </div>
                                                </div>

                                                <div class="row" >
                                                    <div class="col-xl-12">
                                                        <div class="review-form-one__input-box text-message-box">
                                                            <label class="form-label">Requirement Details</label>
                                                            <textarea name="details"
                                                                placeholder="Requirement Details"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="row" style="margin-top: 30px;">
                                                    <div class="col-xl-12">
                                                        <button type="submit" name="submit" 
                                                            class="thm-btn review-form-one__btn">Send Enquiry <span class="icon-next1"></span></button>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                    <!--End Review Form-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Shop Details End-->

        <!-- Start Related Products -->
      <!--   <section class="related-products">
            <div class="container">
                <div class="related-products__title">
                    <h3>Explore More Products</h3>
                </div>
                <div class="row">
                    <div class="related-products__carousel owl-carousel owl-theme owl-dot-style1">


                        <div class="single-product-style1 instyle--2">
                            <div class="single-product-style1__img">
                                <img src="assets/11.jpg" alt="">
                                <img src="assets/11.jpg" alt="">
                            </div>
                            <div class="single-product-style1__content">
                                <div class="single-product-style1__content-left">
                                    <h4>
                                        <a href="#">
                                            JAGGERY PRIMIUM QUALITY
                                        </a>
                                    </h4>                                    
                                </div>                               
                            </div>
                        </div>
                        
                        <div class="single-product-style1 instyle--2">
                            <div class="single-product-style1__img">
                                <img src="assets/22.jpg" alt="">
                                <img src="assets/22.jpg" alt="">
                            </div>
                            <div class="single-product-style1__content">
                                <div class="single-product-style1__content-left">
                                    <h4>
                                        <a href="#">
                                            CHICKPEAS WHITE 10MM
                                        </a>
                                    </h4>                                    
                                </div>                               
                            </div>
                        </div>
                        <div class="single-product-style1 instyle--2">
                            <div class="single-product-style1__img">
                                <img src="assets/33.jpg" alt="">
                                <img src="assets/33.jpg" alt="">
                            </div>
                            <div class="single-product-style1__content">
                                <div class="single-product-style1__content-left">
                                    <h4>
                                        <a href="#">KISMIS</a>
                                    </h4>                                    
                                </div>                               
                            </div>
                        </div>
                        
                     
                    </div>
                </div>
            </div>
        </section> -->
        <!--End Related Products -->

<?php include('footer.php'); ?>




<div class="modal fade" id="myModalform" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Get a Quick Quote</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('welcome/quick_form') ?>" class="review-form-one__form contact-form-validated" novalidate="novalidate" method="post">
            
            <div class="row">   
                <div class="col-xl-12 col-lg-12">
                    <div class="review-form-one__input-box">
                        <label class="form-label">Product Name</label>
                        <input type="text" placeholder="Product Name" name="p_name" value="<?=$EDITDATA[0]->name ?>" readonly>
                    </div>
                </div>        

                <div class="col-xl-6 col-lg-6">
                    <div class="review-form-one__input-box">
                        <label class="form-label">Quantity</label>
                        <input type="text" placeholder="Quantity" name="quantity" required id="quantity">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="review-form-one__input-box">
                        <label class="form-label">Measurement Units</label>
                        <input type="text" placeholder="Kilogram" name="mesurmentunit" required>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="review-form-one__input-box">
                        <label class="form-label">Mobile</label>
                        <input type="text" placeholder="Mobile" name="mobile" required>
                    </div>
                </div>
            </div>
            
            <div class="row" style="margin-top: 30px;">
                <div class="col-xl-12">
                    <button type="submit" name="submit" class="thm-btn review-form-one__btn">
                        Send Enquiry <span class="icon-next1"></span>
                    </button>
                </div>
            </div>
        </form> 
      </div>         
    </div>
  </div>
</div>


<script>
    function showModal(text='') {

      $('#myModalform').modal('show');
      $("#subject").val(text);
    }

    $(".close").click(function(){
            $("#myModalform").modal('hide');
        });
</script>