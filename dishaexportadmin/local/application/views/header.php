<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> <?=website_name ?> </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" />
    <link rel="manifest" href="<?=base_url() ?>assets/images/favicons/site.webmanifest" />
    <meta name="description" content="<?=website_name ?> " />


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&amp;family=Rubik:ital,wght@0,300..900;1,300..900&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="<?=base_url() ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/animate.min.css" />
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/custom-animate.css" />
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/swiper.min.css" />
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/font-awesome-all.css" />
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/jarallax.css" />
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/flaticon.css">
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/nice-select.css" />
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/jquery-ui.css" />
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/aos.css" />


    <link rel="stylesheet" href="<?=base_url() ?>assets/css/module-css/slider.css" />
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/module-css/banner.css" />
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/module-css/footer.css" />
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/module-css/brand.css" />
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/module-css/services.css" />
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/module-css/about.css" />
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/module-css/why-choose.css" />
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/module-css/process.html" />
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/module-css/portfolio.css" />
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/module-css/testimonial.css" />
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/module-css/pricing.html" />
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/module-css/blog.css" />
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/module-css/newsletter.css" />
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/module-css/features.css" />
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/module-css/working-process.css" />
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/module-css/team.css" />
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/module-css/faq.css" />
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/module-css/counter.css" />
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/module-css/page-header.css" />
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/module-css/shop.css" />


    <!-- template styles -->
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/style.css" />
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/responsive.css" />
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/custom.css" />
</head>

<style>
    @media (max-width: 767px) {
        .main-header {
            padding: 0 0px 0;
        }
        .main-menu__logo a img {
                width: 92px;
                height: 91px;
            }
    }
    .main-menu__logo a img {
    width: 118px;
}
.page-header {
    position: relative;
    display: block;
    padding: 30px 0px 30px;
    overflow: hidden;
    z-index: 1;
}

</style>

<body class="custom-cursor">


    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <!--Start Preloader-->
   <!--  <div class="loader js-preloader">
        <div></div>
        <div></div>
        <div></div>
    </div> -->
    <!--End Preloader-->

    <div class="page-wrapper">
        <header class="main-header main-header-two">
            <nav class="main-menu">
                <div class="main-menu__wrapper">
                    <div class="container">
                        <div class="main-menu__wrapper-inner">
                            <div class="main-menu__left">
                                <div class="main-menu__logo">
                                    <a href="<?=base_url() ?>"><img src="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" alt=""></a>
                                </div>
                            </div>

                            <div class="main-menu__main-menu-box">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list">
                                    
                                    <li><a href="<?=base_url() ?>">Home</a></li>
                                    <li><a href="<?=base_url() ?>about">About Us</a></li>

                                    <li class="dropdown">
                                        <a href="">Product </a>
                                        <ul>
                                            <?php
                                            $category = $this->db->get_where('categories',array('status'=>1))->result_object();
                                            foreach($category as $data)
                                                {
                                                    $subcat = $this->db->get_where('sub_categories',array('status'=>1,'cat_id'=>$data->id))->result_object();

                                                 ?>
                                            <li class="dropdown">
                                                <a href="<?=base_url($data->slug) ?>"><?=$data->name ?></a>
                                                <?php
                                                if(!empty($subcat))
                                                    {

                                                    ?>
                                                <ul>
                                                    <?php
                                                    foreach($subcat as $value)
                                                        { ?>
                                                    <li><a href="<?=base_url($value->slug) ?>"><?=$value->name ?>r</a></li>
                                                <?php } ?>
                                                </ul>
                                            <?php } ?>
                                            </li>
                                            
                                            <?php } ?>
                                        </ul>
                                    </li>
                                    
                                    <li><a href="<?=base_url() ?>contact">Contact</a></li>
                                </ul>
                            </div>

                            <div class="main-menu__right">
                                <div class="main-menu__search">
                                    <a href="#">
                                        <span class="searcher-toggler-box icon-search-interface-symbol"></span>
                                    </a>
                                </div>

                                <div class="main-menu__btn">
                                    <a href="<?=base_url() ?>contact" class="thm-btn">Get a quote 
                                        <span class="icon-next1"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricky-header-two stricked-menu main-menu">
            <div class="sticky-header__content"></div>
        </div>