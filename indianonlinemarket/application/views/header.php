<?php
$sitesetting = $this->crud->fetchdatabyid('1','site_setting');
$userdata = $this->crud->selectDataByMultipleWhere('tbl_admin',array('id'=>temp_session_id(),));
if(!empty($userdata))
    $userdata = $userdata[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Title -->
    <title><?=website_name ?></title>
    <meta name="author" content="<?=website_name ?>">
    <meta name="keywords" content="wide range of unique products, different market spaces of India, comfort of your home, local in the world of brands, Local Brand Clothes, Summer , Winder Jacket, Skirts & Trousers, Post Winter, Dress, Vest">
    <meta name="language" content="english">
    <meta name="description" content="Want to shop local but got no time for that, don’t worry we’ve got you covered We as Indian market provide wide range of unique products from different market spaces of India and provide you the same at the comfort of your home.">

    <meta property="og:site_name" content="<?=website_name ?> "/> <!-- website name -->
   <meta property="og:site" content="<?=base_url() ?>"/> <!-- website link -->
   <meta property="og:title" content="<?=website_name ?>"/> <!-- title shown in the actual shared post -->
   <meta property="og:description" content="<?=website_name ?>"/> <!-- description shown in the actual shared post -->
   <meta property="og:image" content="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>"/> <!-- image link, make sure it's jpg -->
   <meta property="og:url" content="<?=base_url() ?>"/> <!-- where do you want your post to link to -->
   <meta property="og:type" content="<?=website_name ?> "/>

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/bootstrap.min.css" />
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/fontawesome.all.min.css" />
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/owl.carousel.min.css" />
    <!-- owl.theme.default css -->
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/owl.theme.default.min.css" />
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="<?=base_url() ?>assets/css/slick.css" />
    <!--slick-theme.css-->
    <link rel="stylesheet" type="text/css" href="<?=base_url() ?>assets/css/slick-theme.css" />

    <link rel="stylesheet" href="<?=base_url() ?>assets/css/animate.min.css" />
    <!-- meanmenu css -->
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/meanmenu.min.css" />
    <!-- Style css -->
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/style.css" />
    <!-- color css -->
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/color.css" />
    <!-- Responsive css -->
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/responsive.css" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" />
    <link rel="apple-touch-icon" sizes="60x60" href="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" />
    <link rel="apple-touch-icon" sizes="120x120" href="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" />
    <link rel="apple-touch-icon" sizes="152x152" href="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" />
    <link rel="icon" type="image/png" sizes="192x192" href="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" />
    <link rel="icon" type="image/png" sizes="96x96" href="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" />
    <link rel="manifest" href="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" />
    <meta name="theme-color" content="#ffffff" />


    <script src="<?=base_url() ?>assets/js/jquery-3.6.0.min.js"></script>
    <script src="<?=base_url() ?>assets/js/slick.min.js" id="tt1"></script>
    <script src="<?=base_url() ?>assets/js/slick-slider.js" id="tt2"></script>
</head>

<style>
    .drodo-nav .navbar .navbar-nav .nav-item.megamenu .dropdown-menu {
    width: 39%;
    margin-top: 8px;
    position: absolute;
    top: auto;
    left: 21%;
}
.drodo-nav .navbar .navbar-nav .nav-item a {
    margin-left: 0!important;
}
/*.thumb {
    height: 500px;
}
.thumb>a>img {
    height: fit-content;
}*/
.blink_me {
  animation: blinker 1s linear infinite;
}

@keyframes blinker {
  50% {
    opacity: 0;
  }
}


.marqueetop{
    padding-top: 8px;
    padding-bottom: 8px;
    background: linear-gradient(180deg, rgba(206, 32, 79, 0.67) 61.583%, rgba(254, 91, 124, 1) 92%);
}
marquee.marqueetop>p {
    display: contents;
}
</style>

<body>
    <!-- Preloader Area -->
    <!-- <div id="preloader">
        <div id="status">
            <img src="<?=base_url() ?>assets/img/loader.gif" alt="img" />
        </div>
    </div> -->
<?php
$topmar = $this->crud->selectDataByMultipleWhere('marquee',array('status'=>1,'type'=>1));
if(!empty($topmar))
{
?>
    <!-- Top Header Area -->
    <marquee class="marqueetop">
        <?php
        foreach($topmar as $data)
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

    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-7">
                    <ul class="top-header-contact-info">
                        <li><i class="fas fa-phone-volume"></i> <a href="tel:<?=$sitesetting[0]->mobile ?>"><?=$sitesetting[0]->mobile ?></a></li>
                        <?php 
                            if(!empty($sitesetting[0]->address))
                                { ?>
                        <li><i class="fas fa-street-view"></i> <a href="#!" ><?=$sitesetting[0]->address ?></a>
                        </li>
                    <?php } ?>
                        <!-- <li class="blink_me"><i class="fas fa-street-view "></i> <a href="#!" >Free Delivery</a>
                        </li> -->
                    </ul>
                </div>
                <div class="col-lg-6 col-md-5">
                    <ul class="top-header-menu">
                        <li>
                            <div class="dropdown language-switcher d-inline-block">
                                <div id="google_translate_element"></div>
                            </div>
                        </li>

                        <?php
                        if(!empty($this->session->userdata('userdashboard')))
                            { ?>
                        <li><a href="<?=base_url() ?>my-account"><?=$userdata->username ?></a></li>
                        <?php } else { ?>
                        <li><a href="<?=base_url() ?>login">My Account</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Navebar Area -->
    <div class="navbar-area">
        <div class="drodo-responsive-nav">
            <div class="container">
                <div class="drodo-responsive-menu">
                    <div class="logo">
                        <a href="<?=base_url() ?>">
                            <img src="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" alt="logo" style="height: 75px;">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="drodo-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="<?=base_url() ?>">
                        <img src="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" alt="logo" style="height: 75px;">
                    </a>
                    <div class="collapse navbar-collapse mean-menu">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="<?=base_url() ?>" class="nav-link active">Home </a>
                            </li>
                            <li class="nav-item"><a href="<?=base_url() ?>about" class="nav-link">About Us</a></li>
                            <?php
                            $categories = $this->crud->selectDataByMultipleWhere('categories',array('status'=>1,'show_menu'=>1));
                            foreach($categories as $data)
                                { ?>
                            <li class="nav-item">
                                <a href="<?=base_url('shop/'.$data->slug) ?>" class="nav-link active"><?=$data->name ?> </a>
                            </li>
                        <?php } ?>
                           
                            <li class="nav-item"><a href="<?=base_url() ?>categories" class="nav-link">Category</a></li>
                            <li class="nav-item"><a href="<?=base_url() ?>contact" class="nav-link">Contact</a></li>

                        </ul>
                        <div class="others-option">
                            <div class="option-item">
                                <div class="wishlist-btn">
                                    <a href="<?=base_url() ?>wishlist"><i class='far fa-heart'></i></a>
                                </div>
                            </div>
                            <div class="option-item">
                                <div class="cart-btn">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingCartModal"><i class='fas fa-shopping-bag'></i><span>
                                    <?php 
                                        $this->db->where('temp_user_id',temp_session_id());
                                        $query = $this->db->get('add_to_temp_cart');
                                        echo $query->num_rows(); ?></span></a>
                                </div>
                            </div>
                            <div class="option-item">
                                <div class="search-btn-box">
                                    <i class="fas fa-search search-btn"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <!-- Search Area -->
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
                    <form action="<?=base_url('welcome/serch') ?>" method="get">
                        <input type="text" class="input-search" placeholder="Search here..." name="search">
                        <button type="submit" name="submit"><i class="fas fa-search search-btn"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>