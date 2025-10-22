$(function(){

	"use strict";

	var switcher = {

		init: function(){

			this.container = $('.switcher_inner_wrap');
			this.btn = $('#open_switcher');
			this.menuSelect = $('#menu_type_change');
			this.body = $('body');
			this.keyColorList = $('.key_colors_list');

			this.showHide();
			this.menuTypeChange();
			this.keyColor();
			this.reset();

		},

		showHide: function(){

			var self = this;

			self.btn.on('click', function(){

				if(!self.container.hasClass('roll_in')){
					self.container.removeClass('roll_out').addClass('roll_in');	
				}else{
					self.container.removeClass('roll_in').addClass('roll_out');
				}

			});

			$(document).on('click.switcherFocusOut', function(e){

				if(!$(e.target).closest($('#styleswitcher')).length && self.container.hasClass('roll_in')){
					self.container.removeClass('roll_in').addClass('roll_out');
				}

			});

		},

		menuTypeChange: function(){

			var self = this;

			self.menuSelect.on('click', '.options_list li', function(){

				var t = $(this).text();

				if(t == "Horizontal menu"){
					self.body.addClass('horizontal_menu_type');
					window.mainNavigation.destroyVerticalMenu();
					window.mainNavigation.initHorizontalMenu();
				}
				else{
					self.body.removeClass('horizontal_menu_type');	
					window.mainNavigation.destroyHorizontalMenu();
					window.mainNavigation.initVerticalMenu();
				}

				

			});


		},

		keyColor: function(){

			var self = this;
			
			self.keyColorList.on('click', 'li', function(){

				var $this = $(this);

				$this.addClass('active').siblings().removeClass('active');

				self.body.removeClass('kc_green kc_pink kc_orange kc_yellow kc_blue');

				self.body.addClass($this.data('color'));

			});

		},

		reset: function(){

			var self = this;

			$('#sw_reset').on('click', function(){

				self.body.removeClass('kc_green kc_pink kc_orange kc_yellow kc_blue');
				self.keyColorList.children().removeClass('active').first().addClass('active');


				if($('.hm_wrap').hasClass('opened')) $('#toggle_menu').trigger('click.hideMenu');
				self.body.removeClass('horizontal_menu_type');	
				window.mainNavigation.destroyHorizontalMenu();
				window.mainNavigation.initVerticalMenu();

			});

		}

	}

	switcher.init();


}(jQuery));