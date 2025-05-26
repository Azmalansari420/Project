// Template Name: Pulchritude Nail art salon and booking HTML Template
// Copyright: © 2023-24
// Author : Webstrot
(function ($) {
    "use strict";

    var revapi24;
    var tpj = jQuery;

    // Preloader 
    jQuery(window).on('load', function () {
        jQuery("#status").delay(5000).fadeOut();
        jQuery("#preloader").delay(5000).fadeOut("slow");
    });
    // return top 
    $(window).scroll(function () {
        if ($(this).scrollTop() >= 100) {
            $('#return-to-top').fadeIn(200);
        } else {
            $('#return-to-top').fadeOut(200);
        }
    });
    $('#return-to-top').on('click', function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
    });


    //search js
    $(".search-btn").on('click', function (t) {
        $(".search-input").toggleClass("main");
        t.stopPropagation()
    });
    $(document).on("click", function (t) {
        if ($(t.target).is(".search-input") === false) {
            $(".search-input").removeClass("main");
        }
    });

    /*--- Responsive Menu Start ----*/
    $(".nav-toggle").on("click", function () {
        $(this).toggleClass("on");
        var w = $('#sidebar').width();
        var pos = $('#sidebar').offset().left;

        if (pos === 0) {
            $("#sidebar").animate({ "left": -w }, "slow");
        }
        else {
            $("#sidebar").animate({ "left": "0" }, "slow");
        }
    });


    /*--- Toggle Sub menu ----*/
    $('#cssmenu li.active').addClass('open').children('ul').show();
    $('#cssmenu li.has-sub>a').on('click', function () {
        $(this).removeAttr('href');
        var element = $(this).parent('li');
        if (element.hasClass('open')) {
            element.removeClass('open');
            element.find('li').removeClass('open');
            element.find('ul').slideUp(200);
        }
        else {
            element.addClass('open');
            element.children('ul').slideDown(200);
            element.siblings('li').children('ul').slideUp(200);
            element.siblings('li').removeClass('open');
            element.siblings('li').find('li').removeClass('open');
            element.siblings('li').find('ul').slideUp(200);
        }
    });




    //------------toggle-close

    $("#toggle-close").on("click", function () {
        var w = $('#sidebar').width();
        var pos = $('#sidebar').offset().left;
        if (pos === 0) {
            $("#sidebar").animate({
                "left": -w
            }, "slow");
        } else {
            $("#sidebar").animate({
                "left": "0"
            }, "slow");
        }
    });

    /*------ menu-fixed ------*/
    // Menu js for Position fixed
    $(window).scroll(function () {
        var window_top = $(window).scrollTop() + 1;
        if (window_top > 600) {
            $('.main-header-wrapper').addClass('menu-fixed animated fadeInDown');
        } else {
            $('.main-header-wrapper').removeClass('menu-fixed animated fadeInDown');
        }
    });

    // Menu js for Position fixed
    $(window).scroll(function () {
        var window_top = $(window).scrollTop() + 1;
        if (window_top > 600) {
            $('.menu-header-three').addClass('menu-fixed-three animated fadeInDown');
        } else {
            $('.menu-header-three').removeClass('menu-fixed-three animated fadeInDown');
        }
    });

    //--------- select-js ---------//

    $(".selectBox").on("click", function (e) {
        $(this).toggleClass("show");
        var dropdownItem = e.target;
        var container = $(this).find(".selectBox__value");
        container.text(dropdownItem.text);
        $(dropdownItem)
            .addClass("active")
            .siblings()
            .removeClass("active");
    });

    // product Gallery and Zoom

    //------------   index page js start  ----------//

    //  banner-three-slider  //
    $('.banner-three-slider .owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })

    // experience-slider //
    $('.experience-slider .owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })

    //  offer-slider  // 

    $('.offer-slider .owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            991: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    })


    // test-slider-wrapper-three  //


    $('.test-slider-wrapper-three .owl-carousel').owlCarousel({
        loop: true,
        margin: 80,
        nav: true,
        navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            767: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    })

    // professional-slider

    $('.professional-slider .owl-carousel').owlCarousel({
        center: true,
        loop: true,
        // margin: 10,
        nav: true,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })

    // test-slider-two
    $('.test-slider-two .owl-carousel').owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    })
    //--------- gellary ----------//

    $('.column').magnificPopup({
        delegate: '.img-link',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1]
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            titleSrc: function (item) {
                return item.el.attr('title') + '<small></small>';
            }
        }
    });

    // ---- section4_portfolio_slider ----/
    $('.section4_portfolio_slider .owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: false,
        responsiveClass: true,
        navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
        responsive: {
            0: {
                items: 2,
                nav: true
            },
            600: {
                items: 2,
                nav: true
            },
            1000: {
                items: 5,
                nav: true,
                loop: true,
                margin: 20
            }
        }
    })
    //   --------   team slider start  --------  //
    // .team-slider-wrapper  //
    $('.team-slider-wrapper .owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: true,
        items: 3,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 3
            }
        }
    })
    // .slider-two-wrapper  //
    $('.slider-two-wrapper .owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    })
    // team-four-wrapper  //
    $('.team-four-wrapper .owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    })
    // -----------  service page js start  ------------//
    // service-slider
    $('.service-slider .owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
    //  date picker

    var date_input = $('input[name="date"]'); //our date input has the name "date"
    var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
    date_input.datepicker({
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
    })

    // -----  portfolio_img_text  ----- //
    $('.portfolio_img_text').magnificPopup({
        delegate: '.img-link',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1]
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            titleSrc: function (item) {
                return item.el.attr('title') + '<small></small>';
            }
        }
    });
    //----------- index-two ----------//

    $('.banner-slider .owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })


    //------------- testimonial-one ---------//

    $('.test-slider-wrapper .owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: false,
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
    //  ---- testimonial page slider ---- //
    //  testimonial-five  // 
    $('.testimonial-five .owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        dots: false,
        responsiveClass: true,
        navText: ['<i class="fas fa-long-arrow-left" aria-hidden="true"></i>', '<i class="fas fa-long-arrow-right" aria-hidden="true"></i>'],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
    //     forth-slider    //
    $('.forth-slider .owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
    // slider-test
    $('.slider-test .owl-carousel').owlCarousel({
        loop: true,
        margin: 15,
        autoplay: true,
        autoplayTimeout: 3000,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 3
            }
        }
    });

    // ------   short code pages js start   -------// 

    //   gallery short page js one
    $('.portfolio_img_text').magnificPopup({
        delegate: '.img-link',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1]
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            titleSrc: function (item) {
                return item.el.attr('title') + '<small></small>';
            }
        }
    });
    $('.portfolio_img_icon').magnificPopup({
        delegate: '.img-link',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1]
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            titleSrc: function (item) {
                return item.el.attr('title') + '<small></small>';
            }
        }
    });

    //   gallery short page js two

    $('.section4_portfolio_slider .owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: false,
        responsiveClass: true,
        navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
        responsive: {
            0: {
                items: 2,
                nav: true
            },
            600: {
                items: 2,
                nav: true
            },
            1000: {
                items: 5,
                nav: true,
                loop: true,
                margin: 20
            }
        }
    })

    // ------ shortcode iconpage js start  -------  //

    $('#search_button').on("click", function (e) {
        $('#search_open').slideToggle();
        e.stopPropagation();
    });

    $(document).on("click", function (e) {
        if (!(e.target.closest('#search_open1'))) {
            $("#search_open1").slideUp();
        }
    });


    $('#search_button1').on("click", function (e) {
        $('#search_open1').slideToggle();
        e.stopPropagation();
    });

    $(document).on("click", function (e) {
        if (!(e.target.closest('#search_open1'))) {
            $("#search_open1").slideUp();
        }
    });

    // progress bar js start  //
    //------ progress bar js -----//
    var wind = $(window);
    $(".loading").fadeOut(500);
    wind.on('scroll', function () {
        $(" .skills-progress span").each(function () {
            var bottom_of_object =
                $(this).offset().top + $(this).outerHeight();
            var bottom_of_window =
                $(window).scrollTop() + $(window).height();
            var myVal = $(this).attr('data-value');
            if (bottom_of_window > bottom_of_object) {
                $(this).css({
                    width: myVal
                });
            }
        });
    });
    //------ progress bar js -----//
    $(".ps-section-1 .skills-progress span").each(function () {
        var bottom_of_object =
            $(this).offset().top + $(this).outerHeight();
        var bottom_of_window =
            $(window).scrollTop() + $(window).height();
        var myVal = $(this).attr('data-value');
        if (bottom_of_window > bottom_of_object) {
            $(this).css({
                width: myVal
            });
        }
    });
})(jQuery);
// animation
wow = new WOW(
    {
        animateClass: 'animated',
        offset: 100,
        callback: function (box) {
            console.log("WOW: animating <" + box.tagName.toLowerCase() + ">");
        }
    }
);
wow.init();



