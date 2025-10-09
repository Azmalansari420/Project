(function ($) {
 "use strict";
	
/*--------------------------
preloader
---------------------------- */	
    var pre_load = $(window);
    pre_load.on("load",function() {
        var pre_loader = $('#preloader')
        pre_loader.fadeOut('slow',function(){$(this).remove();});
    });	
	
/*---------------------
 TOP Menu Stick
--------------------- */
	var s = $("#sticker");
	var pos = s.position();					   
	$(window).on('scroll', function() {
		var windowpos = $(window).scrollTop();
		if (windowpos > pos.top) {
		s.addClass("stick");
		} else {
			s.removeClass("stick");	
		}
	});
    /*----------------------------
 Navbar nav
------------------------------ */

    var menu_btn = $('.menu-btn');
    menu_btn.on("click", function () {
        $(this).toggleClass("active");
        $(".icon-header").toggleClass("active");
        $(".default-header").toggleClass("active");
    });
	

/*----------------------------
 Scrollspy js
------------------------------ */
	var Body = $('body');
	Body.scrollspy({
		target: '.navbar-collapse',
		offset: 80
	});
    
/*----------------------------
Page Scroll
------------------------------ */
    var page_scroll = $('a.page-scroll');
	page_scroll.on('click', function(event) {
		var $anchor = $(this);
		  $('html, body').stop().animate({
			  scrollTop: $($anchor.attr('href')).offset().top - 55
			}, 1000, 'easeInOutExpo');
		event.preventDefault();
	}); 
/*----------------------------
 Counter js active
------------------------------ */
    var count = $('.counter');
    count.counterUp({
		delay: 40,
		time: 3000
	});
/*--------------------------
 collapse
---------------------------- */
    var panel_test = $('.panel-heading a');
    panel_test.on('click', function(){
        panel_test.removeClass('active');
        $(this).addClass('active');
    });

/*--------------------------
 scrollUp
---------------------------- */
	$.scrollUp({
		scrollText: '<i class="fa fa-angle-up"></i>',
		easingType: 'linear',
		scrollSpeed: 900,
		animation: 'fade'
	});
    
/*----------------------------
 Parallax
------------------------------ */
  var well_lax = $('.core-feature-area');
     well_lax.parallax("50%", 0.4);
  var well_text = $('.feature-bg');
     well_text.parallax("50%", 0.6);
	
/*---------------------
 Main Slider carousel
---------------------*/
    var main_slide = $('.main-slider');
    main_slide.owlCarousel({
        loop:true,
        nav:true,
        dots:false,   
        autoplay:false,
        navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
        responsive:{
            0:{
                items:1,
            },
            768:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
/*------------------------------------------
 Product Showcase two carousel
------------------------------------------*/
	var pro_carousel = $('.product-item');
	pro_carousel.owlCarousel({
		loop:true,
		nav:false,
		dots:true,
		autoplay:false,
		responsive:{
			0:{
				items:1
			},
			768:{
				items:2
			},
			992:{
				items:3
			}
		}
	});
	
/*------------------------------------------
 Product Showcase three carousel
------------------------------------------*/
	var best_carousel = $('.best-product');
	best_carousel.owlCarousel({
		loop:true,
		nav:false,
		dots:true,
		autoplay:true,
		responsive:{
			0:{
				items:1
			},
			768:{
				items:1
			},
			1000:{
				items:2
			}
		}
	});
	
/*---------------------
 Testimonial carousel
---------------------*/
	var test_carousel = $('.testimonial-carousel');
	test_carousel.owlCarousel({
		loop:true,
		nav:false,
		dots:true,
		autoplay:false,
		responsive:{
			0:{
				items:1
			},
			768:{
				items:1
			},
			1000:{
				items:1
			}
		}
	});
/*---------------------
 Testimonial carousel
---------------------*/
	var test_carousel = $('.testimonial-carousel-4');
	test_carousel.owlCarousel({
		loop:true,
		nav:false,
		dots:true,
        margin:30,
		autoplay:false,
		responsive:{
			0:{
				items:1
			},
			768:{
				items:3
			},
			1000:{
				items:3
			}
		}
	});
/*---------------------
 Gallery carousel
---------------------*/
	var gallery = $('.gallery-carousel');
	    gallery.owlCarousel({
		loop:true,
		nav:true,
		dots:false,
		autoplay:false,
		navText:["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
		responsive:{
			0:{
				items:1
			},
			768:{
				items:1
			},
			1000:{
				items:1
			}
		}
	});
/*--------------------------
 Parallax
---------------------------- */	
    var parallaxeffect = $(window);
    parallaxeffect.stellar({
        responsive: true,
        positionProperty: 'position',
        horizontalScrolling: false
    });
/*--------------------------
 MagnificPopup
---------------------------- */	
    $('.video-play').magnificPopup({
        type: 'iframe'
    });

})(jQuery); 