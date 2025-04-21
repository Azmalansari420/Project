(function($) {
    'use strict';

    $('.hamburger').on('click', function() {
        $(this).toggleClass('is-active');
        $(this).next().toggleClass('nav-show')
    });	
	    /*--
    	Mobile Menu
    ------------------------*/
    $('.mobile-menu nav').meanmenu({
        meanScreenWidth: "990",
        meanMenuContainer: ".mobile-menu",
        onePage: true,
    });
    /*---------------------
    marquee active js 
    --------------------- */	
	$("marquee").hover(function(){
		this.stop();	
		},
		function(){
			this.start();
		}
	);	
	
	
	/*---------------------
	Nivo Slider active js 
	--------------------- */
		$('#nivo_Slider_active').nivoSlider({
			directionNav: true,
			animSpeed: 1500,
			slices: 20,
			pauseTime: 8000,
			pauseOnHover: false,
			controlNav: true,
			prevText: '<i class="fas fa-long-arrow-alt-left nivo-prev-icon"></i>',
			nextText: '<i class="fas fa-long-arrow-alt-right nivo-next-icon"></i>'					
		});


	
	// right sitebar quearys menu 
    var rightma = $(".right_sideber_menu i.openclass");
    var rightmi = $(".right_sideber_menu i.closeclass");
    var rightmir = $(".right_sideber_menu_inner");
    rightma.on('click', function() {
        rightmir.addClass('tx-s-open');
    });
    rightmi.on('click', function() {
        rightmir.removeClass('tx-s-open');

    });	
	
	
	
	// classic Button
	$(".btn_w").addClass('a_active');
	
    var emsmenu1 = $(".btn_c");
    var emscmenu2 = $(".tx_op");
    var emsinner2 = $(".tx_cl");
    emsmenu1.on('click', function() {
        emsinner2.addClass('btn_block');
        emscmenu2.addClass('btn_none');
        $(".btn_w").removeClass('a_active');		
        $(".btn_c").addClass('a_active');		
        $(this).addClass('a_active');		
    });
	
    var emsmenu1 = $(".btn_w");
    var emscmenu2 = $(".tx_op");
    var emsinner2 = $(".tx_cl");
    emsmenu1.on('click', function() {
		emscmenu2.removeClass('btn_none');
		emsinner2.removeClass('btn_block');
		$(".btn_c").removeClass('a_active');
		$(".btn_w").addClass('a_active');
		$(this).addClass('a_active');
    });	

	
	
	/*---------------------
	witr_slick_active js 
	--------------------- */
		$('.witr_slick_active').slick({
			infinite: true,
			autoplay: true,
			autoplaySpeed: 30000,
			speed: 700,					
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: true,
			dots: false,
			responsive: [
				{
					breakpoint: 1200,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
					}
			},
				{
					breakpoint: 992,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
					}
			},
				{
					breakpoint: 767,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
					}
			}
			// You can unslick at a given breakpoint now by adding:
			// settings: "unslick"
			// instead of a settings object
			]
		});


		/*---------------------
		 HOME-2countdown
		--------------------- */
		$('[data-countdown]').each(function() {
		  var $this = $(this), finalDate = $(this).data('countdown');
		  $this.countdown(finalDate, function(event) {
			$this.html(event.strftime('<span class="cdowns days"><span class="time-counts">%-D</span> <p>Days</p></span> <span class="cdowns hour"><span class="time-counts">%-H</span> <p>Hour</p></span> <span class="cdowns minutes"><span class="time-counts">%M</span> <p>Min</p></span> <span class="cdowns second"> <span><span class="time-counts">%S</span> <p>Sec</p></span>'));
		  });
		});				
				
		
		/*---------------------
		 Portfolio Isotope
		--------------------- */				

		$('.em_load').imagesLoaded(function() {

			if ($.fn.isotope) {

				var $portfolio = $('.em_load');

				$portfolio.isotope({

					itemSelector: '.grid-item',

					filter: '*',

					resizesContainer: true,

					layoutMode: 'masonry',

					transitionDuration: '0.8s'

				});


				$('.filter_menu li').on('click', function() {

					$('.filter_menu li').removeClass('current_menu_item');

					$(this).addClass('current_menu_item');

					var selector = $(this).attr('data-filter');

					$portfolio.isotope({

						filter: selector,

					});

				});

			};

		});

		/*--------------------------
			portfolio gallery post
		---------------------------- */
		$('.portfolio_gallery_post').owlCarousel({
			nav: true,
			dots: false,
			navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
			responsive: {
				0: {
					items: 1
				},
				768: {
					items: 1
				},
				992: {
					items: 1
				},
				1920: {
					items: 1
				}
			}
		})							

			/*====== Brand Slide Slick =======*/
			$('.brand_imagess_active').slick({	

				infinite: true,
				autoplay: true,
				autoplaySpeed: 2000,
				speed: 700,					
				slidesToShow:5,
				slidesToScroll: 1,
				centerMode: true,
				centerPadding: '',					
				arrows: true,
				dots: false,
				responsive: [
					{
						breakpoint: 1200,
						settings: {
							slidesToShow: 5,
							slidesToScroll: 1,
						}
				},
					{
						breakpoint: 992,
						settings: {
							slidesToShow: 3,
							slidesToScroll: 1,
						}
				},
					{
						breakpoint: 768,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 1,
						}
				}
				// You can unslick at a given breakpoint now by adding:
				// settings: "unslick"
				// instead of a settings object
				]
			});
			
			//====== Single portfolio Slide Slick
				$('.single_portfolio_previwe').slick({
					slidesToShow: 1,
					slidesToScroll: 1,
					arrows: true,
					dots: false,
					asNavFor: '.single_portfolio_text'
				});
				$('.single_portfolio_text').slick({
					slidesToShow: 1,
					slidesToScroll: 1,
					dots: false,
					arrows: true,
					asNavFor: '.single_portfolio_previwe',
					prevArrow: '<button type="button" class="slick-prev"> PREVIOUS PROJECT</button>',
					nextArrow: '<button type="button" class="slick-next">NEXT PROJECT</button>',

				});

		
	
	/*====== foter section =======*/
	
	
	window.mc4wp = window.mc4wp || {
		listeners: [],
		forms: {
			on: function(evt, cb) {
				window.mc4wp.listeners.push(
					{
						event   : evt,
						callback: cb
					}
				);
			}
		}
	}
	

    // top quearys menu 
    var emsmenu = $(".em-quearys-menu i.t-quearys");
    var emscmenu = $(".em-quearys-menu i.t-close");
    var emsinner = $(".em-quearys-inner");
    emsmenu.on('click', function() {
        emsinner.addClass('em-s-open');
        $(this).addClass('em-s-hiddens');
        emscmenu.removeClass('em-s-hidden');
    });
    emscmenu.on('click', function() {
        emsinner.removeClass('em-s-open');
        $(this).addClass('em-s-hidden');
        emsmenu.removeClass('em-s-hidden');
    });




	if ($('.headrooma').length != 0) {
        // grab an element
        var myElement = document.querySelector(".headrooma");
        // construct an instance of Headroom, passing the element
        var headroom = new Headroom(myElement);
        // initialise
        headroom.init();
    }
	
    /*---------------------
    WOW active js 
    --------------------- */
    new WOW().init();
	
    /*--------------------------
     scrollUp
    ---------------------------- */
    $.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });

    // Venubox

    $('.venobox').venobox({

        numeratio: true,

        infinigall: true

    });
		
	    /*--
    	One Page Nav
    ----------------------------------- */
     var top_offset = $('.one_page').height() +0;
    $('.one_page .hackery_menu .nav_scroll').onePageNav({
        currentClass: 'current',
        changeHash: false,
        scrollSpeed: 1000,
         scrollOffset: top_offset,
        scrollThreshold: 0.5,
        filter: '',
        easing: 'swing',
    });

    $(".nav_scroll > li:first-child").addClass("current");
    /* sticky nav 1 */
    $('.one_page').scrollToFixed({
        preFixed: function() {
            $(this).find('.scroll_fixed').addClass('prefix');
        },
        postFixed: function() {
            $(this).find('.scroll_fixed').addClass('postfix').removeClass('prefix');
        }
    });	
		
	/* sticky nav 2 */
    var headers1 = $('.trp_nav_area');
    $(window).on('scroll', function() {

        if ($(window).scrollTop() > 200) {
            headers1.addClass('hbg2');
        } else {
            headers1.removeClass('hbg2');
        }		

    });		
	
	$('.counter').counterUp({
		delay: 10,
		time: 1000
	});	

    /*--------------------------
    	blog messonary
    ---------------------------- */
    $('.bgimgload').imagesLoaded(function() {
        if ($.fn.isotope) {
            var $blogmassonary = $('.blog-messonary');
            $blogmassonary.isotope({
                itemSelector: '.grid-item',
                filter: '*',
                resizesContainer: true,
                layoutMode: 'masonry',
                transitionDuration: '0.8s'
            });

        };
    });

  
	
	// Mouse Direction Hover Iffect
	$('.single_protfolio').directionalHover();

	$('.single_protfolio').directionalHover({
		// CSS class for the overlay
		overlay: "em_port_content",
		// Linear or swing
		easing: "swing",
		speed: 50
	});	
		
	/* Bootstrap Accordion  */
	$('.faq-part .card').each(function () {
		var $this = $(this);
		$this.on('click', function (e) {
			var has = $this.hasClass('active');
			$('.faq-part .card').removeClass('active show');
			if (has) {
				$this.removeClass('active show');
			} else {
				$this.addClass('active show');
			}
		});
	});


		
  $.fn.BeerSlider = function ( options ) {
    options = options || {};
    return this.each(function() {
      new BeerSlider(this, options);
    });
  };
  $('.beer-slider').BeerSlider({start: 50});		


					//====== 1 mobile Slide Slick
					$('.witrslk_id1').slick({
						infinite: true,
						autoplay: true,
						autoplaySpeed: 3000,
						speed: 1000,					
						slidesToShow: 3,
						slidesToScroll: 1,
						centerMode: true,
						centerPadding: '0',					
						arrows: true,
						dots: false,
						responsive: [
							{
								breakpoint: 1200,
								settings: {
									slidesToShow: 2,
									slidesToScroll: 1,
								}
						},
							{
								breakpoint: 992,
								settings: {
									slidesToShow: 1,
									slidesToScroll: 1,
								}
						},
							{
								breakpoint: 768,
								settings: {
									slidesToShow: 1,
									slidesToScroll: 1,
								}
						}
						// You can unslick at a given breakpoint now by adding:
						// settings: "unslick"
						// instead of a settings object
						]
					});
			
				//====== dnSlide js
		$('.witr_load').imagesLoaded(function() {
				$(".dna_mainid4").dnSlide({
					infinite: true,
					autoPlay: true,
					height: 900,
					autoplaySpeed: 2000,
					speed: 500,
					precentWidth: "68%",
					scale: .8,
					
				});
			});
			
			
			  var witr_cp = $('.witr_circle_id1');

			  witr_cp.circleProgress({
				startAngle: -Math.PI / 4 * 3,
				value: 0.9,
				size: 120,
				lineCap: 'round',
				fill: {  gradient: ["#14B1BB", "#14B1BB"]}
			  });
			  
			  var witr_cp = $('.witr_circle_id12');

			  witr_cp.circleProgress({
				startAngle: -Math.PI / 4 * 3,
				value: 0.85,
				size: 120,
				lineCap: 'round',
				fill: {  gradient: ["#14B1BB", "#14B1BB"]}
			  }); 
			  var witr_cp = $('.witr_circle_id13');

			  witr_cp.circleProgress({
				startAngle: -Math.PI / 4 * 3,
				value: 0.8,
				size: 120,
				lineCap: 'round',
				fill: {  gradient: ["#14B1BB", "#14B1BB"]}
			  });
			  var witr_cp = $('.witr_circle_id14');

			  witr_cp.circleProgress({
				startAngle: -Math.PI / 4 * 3,
				value: 0.75,
				size: 120,
				lineCap: 'round',
				fill: {  gradient: ["#14B1BB", "#14B1BB"]}
			  });
			  
			  

			  $('.simages_id5').slick({	
				infinite: true,
				autoplay: true,
				autoplaySpeed: 4000,
				speed: 1000,					
				slidesToShow: 1,
				slidesToScroll: 1,
				centerMode: true,
				centerPadding: '0',					
				arrows: true,
				dots: false,
				responsive: [
					{
						breakpoint: 1200,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1,
						}
				},
					{
						breakpoint: 992,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1,
						}
				},
					{
						breakpoint: 768,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1,
						}
				}
				// You can unslick at a given breakpoint now by adding:
				// settings: "unslick"
				// instead of a settings object
				]
			});
			  
			$('.carso_idtesti2').slick({
				infinite: true,
				autoplay: true,
				autoplaySpeed: 3000,
				speed: 700,					
				slidesToShow: 2,
				slidesToScroll: 1,
				arrows: true,
				dots: false,
				responsive: [
					{
						breakpoint: 1200,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 1,
						}
				},
					{
						breakpoint: 992,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 1,
						}
				},
					{
						breakpoint: 767,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1,
						}
				}
				// You can unslick at a given breakpoint now by adding:
				// settings: "unslick"
				// instead of a settings object
				]
			});  
			  
			  
			$('.post_team_idteam').slick({
				infinite: true,
				autoplay: true,
				autoplaySpeed: 3000,
				speed: 1000,					
				slidesToShow: 4,
				slidesToScroll: 1,
				arrows: true,
				centerMode: false,
				centerPadding: '',
				dots: false,
				responsive: [
					{
						breakpoint: 1200,
						settings: {
							slidesToShow: 3,
							slidesToScroll: 1,
						}
				},
					{
						breakpoint: 992,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 1,
						}
				},
					{
						breakpoint: 767,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1,
						}
				}
				]
			});	  

		
		$('.witr_cslide_2').slick({
			infinite: true,
			autoplay: true,
			autoplaySpeed: 300000,
			speed: 1000,					
			slidesToShow: 2,
			slidesToScroll: 1,
			arrows: true,
			dots: false,
			responsive: [
				{
					breakpoint: 1200,
					settings: {
						slidesToShow:2,
						slidesToScroll: 1,
					}
			},
				{
					breakpoint: 992,
					settings: {
						slidesToShow:1,
						slidesToScroll: 2,
					}
			},
				{
					breakpoint: 767,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
					}
			}
			// You can unslick at a given breakpoint now by adding:
			// settings: "unslick"
			// instead of a settings object
			]
		});
		
		$('.carso_idtesti').slick({
		infinite: true,
		autoplay: true,
		autoplaySpeed: 3000,
		speed: 1000,					
		slidesToShow: 2,
		slidesToScroll: 1,
		arrows: false,
		dots: false,
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
				}
		},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
				}
		},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				}
		}
		// You can unslick at a given breakpoint now by adding:
		// settings: "unslick"
		// instead of a settings object
		]
	});
		
	$('.slider_active_top').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplaySpeed: 3000,
		speed: 1000,
		autoplay: false,
		arrows: false,
		fade: false,
		asNavFor: '.slider_active_bottom_id2'
	});
	$('.slider_active_bottom_id2').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplaySpeed: 3000,
		speed: 1000,
		autoplay: false,
		asNavFor: '.slider_active_top',
		dots: false,
		vertical: true,
		verticalSwiping: true,					  
		centerMode: false,
		focusOnSelect: true
	});
		
		
		$('.witr_cslide_3').slick({
			infinite: true,
			autoplay: true,
			autoplaySpeed: 300000,
			speed: 1000,					
			slidesToShow: 6,
			slidesToScroll: 1,
			arrows: true,
			dots: false,
			responsive: [
				{
					breakpoint: 1200,
					settings: {
						slidesToShow:2,
						slidesToScroll: 3,
					}
			},
				{
					breakpoint: 992,
					settings: {
						slidesToShow:2,
						slidesToScroll: 2,
					}
			},
				{
					breakpoint: 767,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
					}
			}
			// You can unslick at a given breakpoint now by adding:
			// settings: "unslick"
			// instead of a settings object
			]
		});

			/*====== Screenshots Slide Slick =======*/
			$('.imagess_id12').slick({	

				infinite: true,
				autoplay: true,
				autoplaySpeed: 3000,
				speed: 1000,					
				slidesToShow: 1,
				slidesToScroll: 1,
								centerMode: true,
				centerPadding: '',					
				arrows: true,
				dots: false,
				responsive: [
					{
						breakpoint: 1200,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1,
						}
				},
					{
						breakpoint: 992,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1,
						}
				},
					{
						breakpoint: 768,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1,
						}
				}
				// You can unslick at a given breakpoint now by adding:
				// settings: "unslick"
				// instead of a settings object
				]
			});
		
			var galleryThumbs = new Swiper('.gallery-thumbs', {
				slidesPerView: 3,
				spaceBetween: 10,
				 loop: false,
				  freeMode: false,
				  loopedSlides: 2, //looped slides should be the same
				  watchSlidesVisibility: true,
				  watchSlidesProgress: true,
					grabCursor: false,
					speed: 2000,
					direction: 'horizontal',
					mousewheel: false,
					keyboard: false,
					autoplay: {
						delay: 4000,								  
						disableOnInteraction: false,
					},						
				});
				var galleryTop = new Swiper('.gallery-top ', {
				  loopedSlides: 2, //looped slides should be the same
					grabCursor: false,
					speed: 2000,
					direction: 'horizontal',

					freeMode: false,
					mousewheel: false,
					keyboard: false,
					loop: true,
											autoplay: {
						delay: 4000,								  
						disableOnInteraction: false,
					},
					  pagination: {
						el: '.swiper-pagination',
						clickable: true,
						type: 'progressbar',
					  },
					  navigation: {
						nextEl: '.swiper-button-next',
						prevEl: '.swiper-button-prev',
					  },
					  scrollbar: {
						el: '.scrollbar_false',
						hide: true,
					  },
				  thumbs: {
					swiper: galleryThumbs,
				  },
				});				
			
			 new Swiper('.witr_active_id6', {
				effect: 'defult',
				grabCursor: false,
				speed: 2000,
				direction: 'horizontal',
				slidesPerView: 1,
				spaceBetween: 30,
				freeMode: false,
				mousewheel: false,
				keyboard: false,
				loop: false,
										autoplay: {
					delay: 4000,								  
					disableOnInteraction: false,
				},
				  pagination: {
					el: '.swiper-pagination',
					clickable: true,
					type: 'progressbar',
				  },
				  navigation: {
					nextEl: '.swiper-button-next',
					prevEl: '.swiper-button-prev',
				  },
				  scrollbar: {
					el: '.scrollbar_false',
					hide: true,
				  },					  
				  

				  
			});
		
		$('.witr_cslide_idps5').slick({
			infinite: true,
			autoplay: true,
			autoplaySpeed: 3000,
			speed: 1000,					
			slidesToShow: 4,
			slidesToScroll: 1,
			arrows: true,
			dots: false,
			responsive: [
				{
					breakpoint: 1200,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 3,
					}
			},
				{
					breakpoint: 992,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2,
					}
			},
				{
					breakpoint: 767,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
					}
			}
			// You can unslick at a given breakpoint now by adding:
			// settings: "unslick"
			// instead of a settings object
			]
		});
		
		
})(jQuery);




