<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Globle Building Products">

  <title>Globle Building Products</title>

  <!-- Fav Icon -->
  <link rel="icon" type="image/x-icon" href="{{url('')}}/assets/imgs/logo/favicon.png">
  <!-- Dependencies CSS Files -->
  <link rel="stylesheet" href="{{url('')}}/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{url('')}}/assets/css/fontawesome-pro.css">
  <link rel="stylesheet" href="{{url('')}}/assets/css/swiper-bundle.min.css">
  <link rel="stylesheet" href="{{url('')}}/assets/css/progressbar.css">
  <link rel="stylesheet" href="{{url('')}}/assets/css/meanmenu.min.css">
  <link rel="stylesheet" href="{{url('')}}/assets/css/magnific-popup.css">
  <link rel="stylesheet" href="{{url('')}}/assets/css/animate.min.css">
  <link rel="stylesheet" href="{{url('')}}/assets/css/odometer-theme-default.css">
  <link rel="stylesheet" href="{{url('')}}/assets/css/nice-select.css">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="{{url('')}}/assets/css/style.css">
  <link rel="stylesheet" href="{{url('')}}/assets/css/custom.css">


</head>


<body class="body-wrapper">

  <!-- <div class="loader-wrap">
    <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
      <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
    </svg>

    <div class="loader-wrap-heading">
      <div class="load-text">
        <span>U</span>
        <span>N</span>
        <span>I</span>
        <span>V</span>
        <span>E</span>
        <span>R</span>
        <span>S</span>
        <span>A</span>
        <span>L</span>
      </div>
    </div>
  </div> -->


  <!-- Sroll to top -->
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
    </svg>
  </div>


  <!-- side toggle start -->
  <aside class="fix">
    <div class="side-info">
      <div class="side-info-content">
        <div class="offset-widget offset-header">
          <div class="offset-logo">
            <a href="{{url('')}}">
              <img src="{{url('public/media/uploads/site_setting/'.$sitesetting->logo)}}" alt="site logo">
            </a>
          </div>
          <button id="side-info-close" class="side-info-close">
            <i class="fas fa-times"></i>
          </button>
        </div>
        <div class="mobile-menu fix"></div>
        <div class="offset-button">
          <a href="{{url('contact')}}" class="rr-btn">
            <span class="btn-wrap">
              <span class="text-one">Let's Talk</span>
              <span class="text-two">Let's Talk</span>
            </span>
          </a>
        </div>
        <div class="offset-widget-box">
          <h2 class="title">Contact US</h2>
          <div class="contact-meta">
            <div class="contact-item">
              <span class="icon"><i class="fa-solid fa-location-dot"></i></span>
              <span class="text">{{$sitesetting->address}}</span>
            </div>
            <div class="contact-item">
              <span class="icon"><i class="fa-solid fa-envelope"></i></span>
              <span class="text"><a href="mailto:{{$sitesetting->email}}">{{$sitesetting->email}}</a></span>
            </div>
            <div class="contact-item">
              <span class="icon"><i class="fa-solid fa-phone"></i></span>
              <span class="text"><a href="tel:{{$sitesetting->mobile}}">{{$sitesetting->mobile}}</a></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </aside>
  <div class="offcanvas-overlay"></div>
  <!-- side toggle end -->




  <div class="has-smooth" id="has_smooth"></div>
  <div id="smooth-wrapper">
    <div id="smooth-content">

      <!-- Header-2 area start -->
      <header class="header-2-area">
        <div class="header-2-top">
          <div class="container rr-container-1410">
            <div class="header-2-top-inner">
              <div class="header-2-contact-meta">
                <div class="header-2-contact-item">
                  <span class="icon"><i class="fa-solid fa-phone"></i></span>
                  <span class="text"><a href="tel:{{$sitesetting->mobile}}">{{$sitesetting->mobile}}</a></span>
                </div>
                <div class="header-2-contact-item">
                  <span class="icon"><i class="fa-solid fa-location-dot"></i></span>
                  <span class="text">{{$sitesetting->address}}</span>
                </div>
                <div class="header-2-contact-item">
                  <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                  <span class="text"><a href="mailto:{{$sitesetting->email}}">{{$sitesetting->email}}</a></span>
                </div>
              </div>
              <div class="header-2-social">
                <span class="text">Follow Us On:</span>
                <a href="{{$sitesetting->facebook}}"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="{{$sitesetting->twitter}}"><i class="fa-brands fa-twitter"></i></a>
                <a href="{{$sitesetting->instagram}}"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://api.whatsapp.com/send?phone={{$sitesetting->mobile}}"><i class="fa-brands fa-whatsapp"></i></a>
                <a href="{{$sitesetting->youtube}}"><i class="fa-brands fa-youtube"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="header-2-main">
          <div class="container rr-container-1410">
            <div class="header-2-main-inner">
              <div class="header-2-logo">
                <a href="{{url('')}}">
                  <img src="{{url('public/media/uploads/site_setting/'.$sitesetting->logo)}}" class="normal-logo" alt="Site Logo">
                </a>
              </div>
              <div class="header-2-nav">
                <nav class="main-menu">
                  <ul>
                    <li><a href="{{url('')}}">Home</a></li>
                    <li><a href="{{url('about')}}">About Us</a></li>
                    <li class="menu-item-has-children">
                      <a href="#">Products</a>
                      <ul class="dp-menu">
                        @php
                        $cate = DB::table('categories')->where('status',1)->get();
                        @endphp
                        @foreach($cate as $data)
                        <li><a href="{{@$data->slug}}">{{@$data->name}}</a></li>
                        @endforeach
                      </ul>
                    </li>

                    <li><a href="{{url('project')}}">Project </a></li>
                    <li><a href="{{url('contact')}}">Contact</a></li>                    
                   
                  </ul>
                </nav>
              </div>
              <div class="header-2-cta">
                <span class="call-box">Call us: <a href="tel:{{$sitesetting->mobile}}">{{$sitesetting->mobile}}</a> </span>
              </div>
              <div class="header-2-offfcanvas">
                <button class="side-toggle">
                  <i class="fa-solid fa-bars"></i></button>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- Header-2 area end -->