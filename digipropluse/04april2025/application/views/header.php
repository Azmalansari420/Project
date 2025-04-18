<!DOCTYPE html>
<html lang="en"  data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=website_name ?></title>
    <!-- Favicon img -->
    <link rel="shortcut icon" href="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>">
    <!-- Bootstarp min css -->
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/bootstrap.min.css">
    <!-- Mean menu css -->
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/meanmenu.css">
    <!-- All min css -->
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/all.min.css">
    <!-- Swiper bundle min css -->
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/swiper-bundle.min.css">
    <!-- Magnigic popup css -->
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/magnific-popup.css">
    <!-- Animate css -->
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/animate.css">
    <!-- Nice select css -->
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/nice-select.css">
    <!-- Style css -->
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/style.css">
</head>

<style>
    .header-area.menu-fixed {
        background-color: #000000;
    }
    .header__main .main-menu ul li .sub-menu li a {
        color: #000000 !important;
    }
    .header__main .main-menu ul li a {
        font-weight: 600;
        padding: 25px 0;
    }
    .header__main .main-menu ul li .sub-menu {
        top: 78px;
    }
    .header__container {
        max-width: 1350px;
        padding: 0 15px;
        background: black;
    }
    .logo {
        display: block;
        width: 196px;
        padding: 8px;
    }
    header.header-area.animated {
        background: black !important;
    }

    @media (max-width: 575px) 
    {
        .sidebar-area {
            width: 350px;
            background: black;
        }
    }
    .header-area::after {
        background: linear-gradient(270deg, #000000 6.32%, #00060c 216.42%);
    }
</style>

<body>

    <!-- Preloader area start -->
    <!-- <div class="loading">
        <span class="text-capitalize">D</span>
        <span>I</span>
        <span>G</span>
        <span>II</span>
        <span>P</span>
        <span>R</span>
        <span>O</span>
    </div>
    <div id="preloader">
    </div> -->
    <!-- Preloader area end -->

    <!-- Mouse cursor area start here -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <!-- Mouse cursor area end here -->

    <!-- Top header area start here -->
    <div class="header-top d-none d-lg-block" style="    background-color: black;">
        <div class="container header__container">
            <div class="header-top-wrp">
                <ul class="info">
                    <li><svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13.8748 8.50453C13.8748 9.85566 12.7757 10.953 11.4263 10.953H3.39325C2.04384 10.953 0.94475 9.85563 0.94475 8.50453V3.39322C0.944449 2.95776 1.06111 2.53021 1.28253 2.15525L5.20216 6.07488C5.78856 6.663 6.57384 6.98706 7.41059 6.98706C8.24563 6.98706 9.03091 6.663 9.61731 6.07488L13.5369 2.15525C13.7584 2.5302 13.875 2.95776 13.8747 3.39322V8.50453H13.8748ZM11.4263 0.94475H3.39325C2.836 0.94475 2.32159 1.13334 1.91009 1.44712L5.86916 5.40791C6.27897 5.81597 6.82591 6.04231 7.41059 6.04231C7.99356 6.04231 8.54053 5.81597 8.95031 5.40791L12.9094 1.44712C12.4979 1.13334 11.9835 0.94475 11.4263 0.94475ZM11.4263 0H3.39325C1.52259 0 0 1.52259 0 3.39325V8.50456C0 10.3769 1.52259 11.8978 3.39325 11.8978H11.4263C13.2969 11.8978 14.8195 10.3769 14.8195 8.50456V3.39322C14.8195 1.52256 13.2969 0 11.4263 0Z"
                                fill="white" />
                        </svg>

                        <a href="mailto:<?=$sitesetting[0]->email ?>" class="ms-1"><?=$sitesetting[0]->email ?></a>
                    </li>
                    <li class="ms-4"><svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_529_224)">
                                <path
                                    d="M14.8984 10.5909C14.8735 10.5703 12.0629 8.57063 11.304 8.69297C10.9379 8.75766 10.7288 9.0075 10.3093 9.50719C10.1933 9.6463 10.0747 9.7832 9.95352 9.91781C9.68836 9.83143 9.42973 9.72616 9.17961 9.60281C7.88845 8.97422 6.84524 7.93101 6.21665 6.63984C6.0933 6.38973 5.98803 6.1311 5.90165 5.86594C6.03946 5.73984 6.23258 5.57719 6.31508 5.50781C6.81243 5.09062 7.0618 4.88109 7.12649 4.51453C7.25915 3.75562 5.24915 0.945937 5.22852 0.920625C5.13698 0.790808 5.01777 0.682933 4.87948 0.604789C4.74118 0.526645 4.58726 0.480181 4.42883 0.46875C3.61415 0.46875 1.28821 3.48563 1.28821 3.99422C1.28821 4.02375 1.33086 7.02562 5.03258 10.7911C8.79383 14.4886 11.7957 14.5312 11.8252 14.5312C12.3334 14.5312 15.3507 12.2053 15.3507 11.3906C15.3392 11.2322 15.2926 11.0783 15.2144 10.94C15.1362 10.8017 15.0282 10.6825 14.8984 10.5909ZM11.7732 13.5909C11.3663 13.5562 8.84446 13.2239 5.69446 10.1297C2.58524 6.96422 2.26133 4.43813 2.22899 4.04672C2.84342 3.08233 3.58545 2.20548 4.43493 1.44C4.45368 1.45875 4.47852 1.48688 4.5104 1.52344C5.16188 2.41276 5.72309 3.36481 6.18571 4.36547C6.03527 4.51682 5.87626 4.65939 5.70946 4.7925C5.4508 4.98959 5.21328 5.21297 5.00071 5.45906C4.96474 5.50953 4.93914 5.56663 4.92538 5.62705C4.91162 5.68748 4.90998 5.75003 4.92055 5.81109C5.01975 6.24081 5.17169 6.65662 5.3729 7.04906C6.09378 8.52939 7.28997 9.72541 8.7704 10.4461C9.16276 10.6476 9.57859 10.7997 10.0084 10.8989C10.0694 10.9097 10.132 10.9082 10.1925 10.8944C10.2529 10.8807 10.31 10.8549 10.3604 10.8188C10.6074 10.6053 10.8315 10.3669 11.0293 10.1072C11.1765 9.93188 11.3729 9.69797 11.4474 9.63188C12.4506 10.094 13.4048 10.6559 14.2956 11.3091C14.3345 11.3419 14.3621 11.3672 14.3804 11.3836C13.6149 12.2333 12.7379 12.9755 11.7732 13.59V13.5909ZM11.6007 7.03125H12.5382C12.5371 6.03703 12.1416 5.08385 11.4386 4.38083C10.7356 3.67781 9.78243 3.28237 8.78821 3.28125V4.21875C9.5339 4.21949 10.2488 4.51605 10.7761 5.04333C11.3034 5.57062 11.6 6.28556 11.6007 7.03125Z"
                                    fill="white" />
                                <path
                                    d="M13.9445 7.03125H14.882C14.8801 5.41566 14.2375 3.86677 13.0951 2.72437C11.9527 1.58198 10.4038 0.939361 8.78821 0.9375V1.875C10.1552 1.87661 11.4658 2.42038 12.4324 3.38701C13.3991 4.35365 13.9428 5.66422 13.9445 7.03125Z"
                                    fill="white" />
                            </g>
                            <defs>
                                <clipPath>
                                    <rect width="15" height="15" fill="white" transform="translate(0.819458)" />
                                </clipPath>
                            </defs>
                        </svg>

                        <a href="tel:<?=$sitesetting[0]->mobile ?>" class="ms-1"><?=$sitesetting[0]->mobile ?></a>
                    </li>
                </ul>
                <ul class="link-info">
                    <li><a href="<?=$sitesetting[0]->facebook ?>"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="<?=$sitesetting[0]->twitter ?>"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="<?=$sitesetting[0]->instagram ?>"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="<?=$sitesetting[0]->youtube ?>"><i class="fa-brands fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Top header area end here -->

    <!-- Header area start here -->
    <header class="header-area " style="    background: black;">
        <div class="container header__container" >
            <div class="header__main">
                <a href="<?=base_url() ?>" class="logo">
                    <img src="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" alt="logo">
                </a>
                <div class="main-menu">
                    <nav>
                        <ul>
                            <li><a href="<?=base_url() ?>">Home</a></li>
                            <li>
                                <a href="#!">About</a>
                                <ul class="sub-menu">
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="">PPT Download</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#0">Our Product</a>
                                <ul class="sub-menu">
                                    <?php
                                    $product = $this->db->get_where('product',array('status'=>1,))->result_object();
                                    foreach($product as $data)
                                        { ?>
                                    <li><a href="<?=base_url($data->slug) ?>"><?=$data->name ?></a></li>
                                <?php } ?>
                                </ul>
                            </li>
                           
<style>
    /*desktop*/
    @media only screen and (min-width: 1025px) {
        .mobile-none {
            display:none !important;
        }
    } 
    
/*mobile*/
    /*@media only screen and (max-width: 1026px) {
        .mobile-none {
            display:none !important;
        }
    } */
</style>
                            <li><a href="<?=base_url() ?>blog">Blog</a></li>
                            <li><a href="<?=base_url() ?>contact">Contact Us</a></li>
                            <li class="mobile-none"><a href="<?=base_url() ?>login">Login</a></li>

                        </ul>
                    </nav>
                </div>
                <div class="d-none d-lg-inline-block">
                    <a href="<?=base_url() ?>login" class="btn-one">login <i class="fa-regular fa-arrow-right-long"></i></a>
                    <!-- <a href="login.php" class="btn-one">Get A Quote <i class="fa-regular fa-arrow-right-long"></i></a> -->
                </div>


                <div class="bars d-block d-lg-none">
                    <i id="openButton" class="fa-solid fa-bars"></i>
                </div>
            </div>
        </div>
    </header>
    <!-- Header area end here -->

    <!-- Sidebar area start here -->
    <div id="targetElement" class="sidebar-area sidebar__hide">
        <div class="sidebar__overlay"></div>
        <a href="<?=base_url() ?>" class="logo mb-40">
            <img src="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" alt="logo">
        </a>
        <!-- <div class="sidebar__search mb-30">
            <input type="text" placeholder="Search...">
            <i class="fa-regular fa-magnifying-glass"></i>
        </div> -->
        <div class="mobile-menu overflow-hidden"></div>
        <ul class="info pt-40">
            <li><i class="fa-solid primary-color fa-location-dot"></i> <a href="mailto:<?=$sitesetting[0]->alt_email ?>"><?=$sitesetting[0]->alt_email ?></a>
            </li>
            <li class="py-2"><i class="fa-solid primary-color fa-phone-volume"></i> <a
                    href="tel:<?=$sitesetting[0]->alt_mobile ?>"><?=$sitesetting[0]->alt_mobile ?></a>
            </li>
            <li><i class="fa-solid primary-color fa-paper-plane"></i> <a href="#0"><?=$sitesetting[0]->email ?></a></li>
        </ul>
        <div class="social-icon mt-20">
            <a href="<?=$sitesetting[0]->facebook ?>"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="<?=$sitesetting[0]->twitter ?>"><i class="fa-brands fa-twitter"></i></a>
            <a href="<?=$sitesetting[0]->instagram ?>"><i class="fa-brands fa-instagram"></i></a>
            <a href="<?=$sitesetting[0]->youtube ?>"><i class="fa-brands fa-youtube"></i></a>
        </div>
        <button id="closeButton" class="text-white"><i class="fa-solid fa-xmark"></i></button>
    </div>
    <!-- Sidebar area end here -->

    <!-- Fullscreen search area start here -->
    <!-- <div class="search-wrap">
        <div class="search-inner">
            <i class="fas fa-times search-close" id="search-close"></i>
            <div class="search-cell">
                <form method="get">
                    <div class="search-field-holder">
                        <input type="search" class="main-search-input" placeholder="Search...">
                    </div>
                </form>
            </div>
        </div>
    </div> -->
    <!-- Fullscreen search area end here -->