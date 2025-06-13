    <script type="speculationrules">
         {"prefetch":[{"source":"document","where":{"and":[{"href_matches":"\/*"},{"not":{"href_matches":["\/wp-*.php","\/wp-admin\/*","\/wp-content\/uploads\/*","\/wp-content\/*","\/wp-content\/plugins\/*","\/wp-content\/themes\/hello-elementor\/*","\/*\\?(.+)"]}},{"not":{"selector_matches":"a[rel~=\"nofollow\"]"}},{"not":{"selector_matches":".no-prefetch, .no-prefetch a"}}]},"eagerness":"conservative"}]}
      </script>
      <script>
         const lazyloadRunObserver = () => {
         	const lazyloadBackgrounds = document.querySelectorAll( `.e-con.e-parent:not(.e-lazyloaded)` );
         	const lazyloadBackgroundObserver = new IntersectionObserver( ( entries ) => {
         		entries.forEach( ( entry ) => {
         			if ( entry.isIntersecting ) {
         				let lazyloadBackground = entry.target;
         				if( lazyloadBackground ) {
         					lazyloadBackground.classList.add( 'e-lazyloaded' );
         				}
         				lazyloadBackgroundObserver.unobserve( entry.target );
         			}
         		});
         	}, { rootMargin: '200px 0px 200px 0px' } );
         	lazyloadBackgrounds.forEach( ( lazyloadBackground ) => {
         		lazyloadBackgroundObserver.observe( lazyloadBackground );
         	} );
         };
         const events = [
         	'DOMContentLoaded',
         	'elementor/lazyload/observe',
         ];
         events.forEach( ( event ) => {
         	document.addEventListener( event, lazyloadRunObserver );
         } );
      </script>
      <link rel='stylesheet' id='font-awesome-5-all-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min89ce.css?ver=3.28.4' media='all' />
      <link rel='stylesheet' id='font-awesome-4-shim-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min89ce.css?ver=3.28.4' media='all' />
      <link rel='stylesheet' id='elementor-post-42-css' href='wp-content/uploads/elementor/css/post-42ab75.css?ver=1745856237' media='all' />
      <script src="wp-content/plugins/metform/public/assets/lib/cute-alert/cute-alertb526.js?ver=3.9.8" id="cute-alert-js"></script>
      <script src="wp-content/themes/hello-elementor/assets/js/hello-frontend.min9b70.js?ver=3.3.0" id="hello-theme-frontend-js"></script>
      <script src="wp-content/plugins/elementor/assets/lib/swiper/v8/swiper.min94a4.js?ver=8.4.5" id="swiper-js"></script>
      <script src="wp-content/plugins/metform/public/assets/js/htmb526.js?ver=3.9.8" id="htm-js"></script>
      <script src="wp-includes/js/dist/vendor/react.mine1ab.js?ver=18.3.1.1" id="react-js"></script>
      <script src="wp-includes/js/dist/vendor/react-dom.mine1ab.js?ver=18.3.1.1" id="react-dom-js"></script>
      <script src="wp-includes/js/dist/escape-html.min3a9d.js?ver=6561a406d2d232a6fbd2" id="wp-escape-html-js"></script>
      <script src="wp-includes/js/dist/element.minfa0f.js?ver=a4eeeadd23c0d7ab1d2d" id="wp-element-js"></script>
      <script id="metform-app-js-extra">
         var mf = {"postType":"page","restURI":"https:\/\/datrixinsights.com\/wp-json\/metform\/v1\/forms\/views\/","minMsg1":"Minimum length should be ","Msg2":" character long.","maxMsg1":"Maximum length should be ","maxNum":"Maximum number should be ","minNum":"Minimum number should be "};
      </script>
      <script src="wp-content/plugins/metform/public/assets/js/appb526.js?ver=3.9.8" id="metform-app-js"></script>
      <script src="wp-content/plugins/elementskit-lite/libs/framework/assets/js/frontend-script08cb.js?ver=3.4.9" id="elementskit-framework-js-frontend-js"></script>
      <script id="elementskit-framework-js-frontend-js-after">
         var elementskit = {
         	resturl: 'https://datrixinsights.com/wp-json/elementskit/v1/',
         }
         
         
      </script>
      <script src="wp-content/plugins/elementskit-lite/widgets/init/assets/js/widget-scripts08cb.js?ver=3.4.9" id="ekit-widget-scripts-js"></script>
      <script src="wp-content/plugins/elementskit-lite/widgets/init/assets/js/odometer.min08cb.js?ver=3.4.9" id="odometer-js"></script>
      <script src="wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min89ce.js?ver=3.28.4" id="font-awesome-4-shim-js"></script>
      <script src="wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min87cc.js?ver=3.28.3" id="elementor-pro-webpack-runtime-js"></script>
      <script src="wp-content/plugins/elementor/assets/js/webpack.runtime.min89ce.js?ver=3.28.4" id="elementor-webpack-runtime-js"></script>
      <script src="wp-content/plugins/elementor/assets/js/frontend-modules.min89ce.js?ver=3.28.4" id="elementor-frontend-modules-js"></script>
      <script src="wp-includes/js/dist/hooks.min4fdd.js?ver=4d63a3d491d11ffd8ac6" id="wp-hooks-js"></script>
      <script src="wp-includes/js/dist/i18n.minc33c.js?ver=5e580eb46a90c2b997e6" id="wp-i18n-js"></script>
      <script id="wp-i18n-js-after">
         wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
      </script>
      <script id="elementor-pro-frontend-js-before">
         var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/datrixinsights.com\/wp-admin\/admin-ajax.php","nonce":"ebfb99671e","urls":{"assets":"https:\/\/datrixinsights.com\/wp-content\/plugins\/elementor-pro\/assets\/","rest":"https:\/\/datrixinsights.com\/wp-json\/"},"settings":{"lazy_load_background_images":true},"popup":{"hasPopUps":false},"shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"mix":{"title":"Mix"},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"},"x-twitter":{"title":"X"},"threads":{"title":"Threads"}},"facebook_sdk":{"lang":"en_US","app_id":""},"lottie":{"defaultAnimationUrl":"https:\/\/datrixinsights.com\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"}};
      </script>
      <script src="wp-content/plugins/elementor-pro/assets/js/frontend.min87cc.js?ver=3.28.3" id="elementor-pro-frontend-js"></script>
      <script src="wp-includes/js/jquery/ui/core.minb37e.js?ver=1.13.3" id="jquery-ui-core-js"></script>
      <script id="elementor-frontend-js-before">
         var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close","a11yCarouselPrevSlideMessage":"Previous slide","a11yCarouselNextSlideMessage":"Next slide","a11yCarouselFirstSlideMessage":"This is the first slide","a11yCarouselLastSlideMessage":"This is the last slide","a11yCarouselPaginationBulletMessage":"Go to slide"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}},"hasCustomBreakpoints":false},"version":"3.28.4","is_static":false,"experimentalFeatures":{"e_font_icon_svg":true,"additional_custom_breakpoints":true,"container":true,"e_local_google_fonts":true,"theme_builder_v2":true,"hello-theme-header-footer":true,"nested-elements":true,"editor_v2":true,"e_element_cache":true,"home_screen":true,"launchpad-checklist":true},"urls":{"assets":"https:\/\/datrixinsights.com\/wp-content\/plugins\/elementor\/assets\/","ajaxurl":"https:\/\/datrixinsights.com\/wp-admin\/admin-ajax.php","uploadUrl":"https:\/\/datrixinsights.com\/wp-content\/uploads"},"nonces":{"floatingButtonsClickTracking":"9c3a89c99c"},"swiperClass":"swiper","settings":{"page":[],"editorPreferences":[]},"kit":{"body_background_background":"classic","active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description","hello_header_logo_type":"title","hello_header_menu_layout":"horizontal","hello_footer_logo_type":"logo"},"post":{"id":17,"title":"Datrix%20Insights","excerpt":"","featuredImage":false}};
      </script>
      <script src="wp-content/plugins/elementor/assets/js/frontend.min89ce.js?ver=3.28.4" id="elementor-frontend-js"></script>
      <script src="wp-content/plugins/elementor-pro/assets/js/elements-handlers.min87cc.js?ver=3.28.3" id="pro-elements-handlers-js"></script>
      <script src="wp-content/plugins/elementskit-lite/widgets/init/assets/js/animate-circle.min08cb.js?ver=3.4.9" id="animate-circle-js"></script>
      <script id="elementskit-elementor-js-extra">
         var ekit_config = {"ajaxurl":"https:\/\/datrixinsights.com\/wp-admin\/admin-ajax.php","nonce":"a69ad8f8d5"};
      </script>
      <script src="wp-content/plugins/elementskit-lite/widgets/init/assets/js/elementor08cb.js?ver=3.4.9" id="elementskit-elementor-js"></script>
   </body>
</html>