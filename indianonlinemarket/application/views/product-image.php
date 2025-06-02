<?php
if(!empty($rowd))
{
    $image = json_decode($rowd[0]->image);
    // print_r($image);
?>

<div class="product_single_two_img slider-for" id="image111">
    <?php
        foreach($image as $key => $data)
            {
                // $image  = json_decode($data->image);

             ?>
                        <div class="product_img_two_slider">
                            <img src="<?=base_url() ?>media/uploads/product/<?=$data ?>" alt="img" />
                        </div>
                    <?php } ?>
                    </div>
                    <div class="slider-nav" id="image442">
                        <?php
        foreach($image as $key => $data)
            { ?>
                        <div class="nav_img">
                            <img src="<?=base_url() ?>media/uploads/product/<?=$data ?>" alt="img" />
                        </div>
                    <?php } ?>
                    </div>
<?php } ?>


<script>
    $('.slider-for').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                fade: true,
                asNavFor: '.slider-nav',
                arrows: false
              });
              $('.slider-nav').slick({
                slidesToShow: 3,
                slidesToScroll: 3,
                asNavFor: '.slider-for',
                dots: false,
                centerMode: true,
                focusOnSelect: true,
                infinite: true,
                arrows: false,
                responsive: [
                  {
                    breakpoint: 480,
                    settings: {
                      slidesToShow: 2,
                      slidesToScroll: 1
                    }
                  }
                ]
              });
</script>