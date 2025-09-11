(function ($) {
    "use strict";

/*--
    Menu Sticky
-----------------------------------*/
var $windows = $(window);
var sticky = $('.header-sticky');

$windows.on('scroll', function() {
    var scroll = $windows.scrollTop();
    if (scroll < 300) {
        sticky.removeClass('stick');
    }else{
        sticky.addClass('stick');
    }
});

/*--
    Mobile Menu
------------------------*/
var mainMenu = $('.ht-main-menu nav');
mainMenu.meanmenu({
    meanScreenWidth: '991',
    meanMenuContainer: '.ht-mobile-menu',
    meanMenuClose: '<span class="menu-close"></span>',
    meanMenuOpen: '<span class="menu-bar"></span>',
    meanRevealPosition: 'right',
    meanMenuCloseSize: '0',
});

/*-- DeopDown Menu --*/
var dropDownList = $('.dropdown-list');
dropDownList.hide();
$('li').hover(
  function() {
    if( $(this).children('ul').size() > 0 && $(this).children().hasClass('dropdown-list') ) {
        $(this).children().stop().slideDown(400);
    }
  }, function() {
    $(this).children('.dropdown-list').stop().slideUp(300);
  }
);
if( $windows.width() < 767 ) {
    dropDownList.removeClass('dropdown-list');
}

/*-- 
    Header Search
--------------------------------------------*/
var searchToggle = $('.search-toggle');
var searchClose = $('.search-close');
var searchSection = $('#search-section');

searchSection.hide();
/*-- Search Open --*/
searchToggle.on('click', function(){
    if( searchToggle.hasClass('open') ) {
        searchSection.slideUp();
        $(this).removeClass('open');
    }else{
        searchSection.slideDown();
        $(this).addClass('open');
    }
    return false;
});
/*-- Search Close --*/
searchClose.on('click', function(){
    searchSection.slideUp();
    searchToggle.removeClass('open');
    return false;
});

/*--
    Hero Slider
--------------------------------------------*/
var heroSlider = $('.ht-hero-slider');
heroSlider.slick({
    arrows: false,
    autoplay: true,
    autoplaySpeed: 5000,
    dots: true,
    pauseOnFocus: false,
    pauseOnHover: false,
    fade: true,
    infinite: true,
    slidesToShow: 1,
    responsive: [
        {
          breakpoint: 767,
          settings: {
            dots: false,
          }
        }
    ]
});
    
heroSlider.on('beforeChange', function(event, slick, currentSlide, nextSlide){
    var sliderTitle = $('.ht-hero-slider h1');
    var currentTitle = $('.slick-current h1');
    sliderTitle.removeClass('cssanimation leDoorCloseLeft sequence');
    currentTitle.addClass('cssanimation leDoorCloseLeft sequence');
});
heroSlider.on('afterChange', function(event, slick, currentSlide, nextSlide){
    var sliderTitle = $('.ht-hero-slider h1');
    var currentTitle = $('.slick-current h1');
    sliderTitle.removeClass('cssanimation leDoorCloseLeft sequence');
    currentTitle.addClass('cssanimation leDoorCloseLeft sequence');
});


/*--
    Testimonial Slider
--------------------------------------------*/
var testimonialSlider = $('.ht-testimonial-slider-one'); 
testimonialSlider.slick({
    arrows: false,
    autoplay: true,
    autoplaySpeed: 5000,
    dots: false,
    pauseOnFocus: false,
    pauseOnHover: false,
    infinite: true,
    slidesToShow: 3,
    slidesToScoll: 1,
    centerMode: true,
    centerPadding: '0px',
    prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left"></i></button>',
    nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>',
    responsive: [
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 2,
            centerMode: false,
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 1,
          }
        },
        {
          breakpoint: 479,
          settings: {
            slidesToShow: 1,
            arrows: false,
            dots: false,
          }
        }
    ]
});
   

/*--
    Video Popup
--------------------------------------------*/
var videoPopup = $('.video-popup');
videoPopup.magnificPopup({
    disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,

    fixedContentPos: false
});


/*--
    Scroll Up
--------------------------------------------*/
$.scrollUp({
    scrollText: '<i class="fa fa-angle-up"></i>',
    easingType: 'linear',
    scrollSpeed: 900,
    animation: 'fade'
}); 


})(jQuery);	