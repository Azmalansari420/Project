<?php
$sitesetting = $this->crud->fetchdatabyid('1','site_setting');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="" />
	<meta property="og:title" content="YogaZone - Yoga and Meditation Template"/>
	<meta property="og:description" content="" />
	<meta property="og:image" content="https://yogazone.dexignlab.com/xhtml/social-image.png" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON -->
	<link rel="icon" href="<?php echo base_url(); ?>media/uploads/site_setting/<?php echo $sitesetting[0]->logo; ?>" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>media/uploads/site_setting/<?php echo $sitesetting[0]->logo; ?>" />
	<!-- <script src="https://kit.fontawesome.com/yourcode.js"></script> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
	<!-- PAGE TITLE HERE -->
	<title><?php echo website_name; ?></title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/plugins.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
	<!-- <link class="skin" rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/skin/skin-1.css"> -->
	<link class="skin" rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/skin/skin-3.css">
	<!-- <link class="skin" rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/skin/skin-2.css"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/templete.css">
	<!-- REVOLUTION SLIDER CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>plugins/revolution/css/settings.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>plugins/revolution/css/navigation.css">
	<!-- Google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Poppins:100,200,300,400,500,600,700,800,900|Roboto:100,300,400,500,700,900" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i|Playball|Playfair+Display:400,400i,700,700i,900,900i|Prata&display=swap" rel="stylesheet"> 
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-PN32GWM5');</script>
	<!-- End Google Tag Manager -->
	<!-- Meta Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window, document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '897576964019741');
	fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	src="https://www.facebook.com/tr?id=897576964019741&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Meta Pixel Code -->

	<!-- Hotjar Tracking Code for yogavoga.in -->
		<script>
		    (function(h,o,t,j,a,r){
		        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
		        h._hjSettings={hjid:3702940,hjsv:6};
		        a=o.getElementsByTagName('head')[0];
		        r=o.createElement('script');r.async=1;
		        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
		        a.appendChild(r);
		    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
		</script>

	<style>
		div#dzSwitcher {
    display: none;
}
a.DZ-bt-support-now.DZ-theme-btn {
    display: none;
}
a.DZ-bt-buy-now.DZ-theme-btn {
    display: none;
}
div#at-expanding-share-button {
    display: none;
}
.dez-thum-bx.dez-img-overlay1.dez-img-effect.zoom>img {
    height: 219px;
    width: 219px;
}

.dez-post-media.dez-img-effect.zoom-slow.nooo>a>img{
	height: 200px;
    width: 100%;
}
/*div#navbarNavDropdown {
    top: 25px;
    position: relative;
}*/
/*button.navbar-toggler.collapsed.navicon.justify-content-end {
    top: 25px;
    right: 15px;
}*/
.call-buton .cc-calto-action-ripple {
	z-index: 99999;
	position: fixed;
	right: 20px;
	bottom: 8rem;
	background: #ec8b00;
	width: 45px;
	height: 45px;
	padding: 1rem;
	border-radius: 100%;
	-webkit-box-sizing: border-box;
	box-sizing: border-box;
	color: #ffffff;
	-webkit-animation: cc-calto-action-ripple 0.6s linear infinite;
	animation: cc-calto-action-ripple 0.6s linear infinite;
	display: -webkit-box;
	display: -webkit-flex;
	display: -ms-flexbox;
	display: flex;
	justify-items: center;
	-webkit-box-align: center;
	-webkit-align-items: center;
	-ms-flex-align: center;
	align-items: center;
	text-decoration: none; }
	.call-buton .cc-calto-action-ripple i {
	  -webkit-transition: 0.3s ease;
	  transition: 0.3s ease;
	  font-size: 21px;
	  right: 4px;
    	position: relative; }
	.call-buton .cc-calto-action-ripple:hover i {
	  -webkit-transform: rotate(135deg);
	  transform: rotate(135deg); }
	  @-webkit-keyframes cc-calto-action-ripple {
	0% {
	  -webkit-box-shadow: 0 4px 10px rgba(236, 139, 0, 0.2), 0 0 0 0 rgba(236, 139, 0, 0.2), 0 0 0 5px rgba(236, 139, 0, 0.2), 0 0 0 10px rgba(236, 139, 0, 0.2);
	  box-shadow: 0 4px 10px rgba(236, 139, 0, 0.2), 0 0 0 0 rgba(236, 139, 0, 0.2), 0 0 0 5px rgba(236, 139, 0, 0.2), 0 0 0 10px rgba(236, 139, 0, 0.2); }
	100% {
	  -webkit-box-shadow: 0 4px 10px rgba(236, 139, 0, 0.2), 0 0 0 5px rgba(236, 139, 0, 0.2), 0 0 0 10px rgba(236, 139, 0, 0.2), 0 0 0 20px rgba(236, 139, 0, 0);
	  box-shadow: 0 4px 10px rgba(236, 139, 0, 0.2), 0 0 0 5px rgba(236, 139, 0, 0.2), 0 0 0 10px rgba(236, 139, 0, 0.2), 0 0 0 20px rgba(236, 139, 0, 0); } }
  
  @keyframes cc-calto-action-ripple {
	0% {
	  -webkit-box-shadow: 0 4px 10px rgba(236, 139, 0, 0.2), 0 0 0 0 rgba(236, 139, 0, 0.2), 0 0 0 5px rgba(236, 139, 0, 0.2), 0 0 0 10px rgba(236, 139, 0, 0.2);
	  box-shadow: 0 4px 10px rgba(236, 139, 0, 0.2), 0 0 0 0 rgba(236, 139, 0, 0.2), 0 0 0 5px rgba(236, 139, 0, 0.2), 0 0 0 10px rgba(236, 139, 0, 0.2); }
	100% {
	  -webkit-box-shadow: 0 4px 10px rgba(236, 139, 0, 0.2), 0 0 0 5px rgba(236, 139, 0, 0.2), 0 0 0 10px rgba(236, 139, 0, 0.2), 0 0 0 20px rgba(236, 139, 0, 0);
	  box-shadow: 0 4px 10px rgba(236, 139, 0, 0.2), 0 0 0 5px rgba(236, 139, 0, 0.2), 0 0 0 10px rgba(236, 139, 0, 0.2), 0 0 0 20px rgba(236, 139, 0, 0); } }


	  /* fixed social*/
#fixed-social {
   position: fixed;
   top: 375px;
}

#fixed-social a {
   color: #fff;
   display: block;
   height: 40px;
   position: relative;
   text-align: center;
    line-height: 40px;
   width: 40px;
   margin-bottom: 1px;
   z-index: 2;
}
#fixed-social a:hover>span{
	visibility: visible;
  left: 41px;
  opacity: 1;
} 
#fixed-social a span {
	line-height: 40px;
    left: 60px;
    position: absolute;
    text-align: center;
    width: 120px;
    visibility: hidden;
    transition-duration: 0.5s;
    z-index: 1;
    opacity: 0;
}
 .fixed-facebook{
 	background-color: #00AAE5;
 }
 .fixed-facebook span{
	background-color: #00AAE5;
 }
 .fixed-twitter{
	background-color: #7D3895;

 }
 .fixed-twitter span{
 	background-color: #7D3895;
 }
 .fixed-gplus{
	background-color: #00AF54;

 }
 .fixed-gplus span{
 	background-color: #00AF54;
 }
 .fixed-linkedin{
	background-color: #FFC41E;

 }
 .fixed-linkedin span{
 	background-color: #FFC41E;
 }
 .fixed-instagrem{
	background-color: #ED2B29;

 }
 .fixed-instagrem span{
 	background-color: #ED2B29;
 }
 .fixed-tumblr{
	background-color: #EB1471;

 }
 .fixed-tumblr span{
 	background-color: #EB1471;
 }
 .modal .modal-body {
    padding: 15px;
}
.modal-header {
    background: #EFBB20;
    padding: 6px 20px;
}
/*end fixed social*/
	</style>

</head>
<body id="bg">

	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PN32GWM5"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="loading-area"></div>

<div class="page-wraper">
    <!-- header -->
	<header class="site-header header header-transparent navstyle1 mo-left">
		<!-- main header -->
		<div class="sticky-header  main-bar-wraper navbar-expand-lg" style="background: #ffffff73;">
			<div class="main-bar clearfix ">
				<div class="container clearfix">
				
					<!-- website logo -->
					<div class="logo-header mostion" style="padding: 7px 0;">
						<a href="<?php echo base_url(); ?>">
							<img src="<?php echo base_url(); ?>media/uploads/site_setting/<?php echo $sitesetting[0]->logo; ?>" alt="" style="height:55px;">
						</a>
					</div>
					
					<!-- nav toggle button -->
					<button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
					
					<!-- extra nav -->
					<!-- <div class="extra-nav">
						<div class="extra-cell">
							<button id="quik-search-btn" type="button" class="site-button-link"><i class="la la-search"></i></button>
						</div>
					</div> -->
					
					<!-- Quik search -->
					<!-- <div class="dez-quik-search">
						<form action="#">
							<input name="" value="" type="text" class="form-control" placeholder="Type to search">
							<span  id="quik-search-remove"><i class="fas fa-times"></i></span>
						</form>
					</div> -->
					
					<!-- main nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-end"  id="navbarNavDropdown">
                        <ul class=" nav navbar-nav">
							<li><a href="<?php echo base_url(); ?>">Home </a></li>
								<li><a href="<?php echo base_url('about'); ?>">About Us</a></li>
								<li><a href="<?php echo base_url('yoga-home'); ?>">Yoga At Home</a></li>
								<!-- <li><a href="<?php echo base_url('heal-body'); ?>">Heal Your Body</a></li> -->
								<!-- <li><a href="<?php echo base_url('yoga-type'); ?>">Yoga Types </a></li> -->
								<li><a href="<?php echo base_url('courses'); ?>">Courses</a></li>
								<!-- <li><a href="<?php echo base_url('product'); ?>">Product</a></li> -->
								<li><a href="<?php echo base_url('blog'); ?>">Blog</a></li>
								<li><a href="<?php echo base_url('contact'); ?>">Contact Us</a></li>

							
							
							<!-- <li> <a href="javascript:;">Shop<i class="fas fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="product.php">Product</a></li>
									<li><a href="product-details.php">Product details</a></li>
								</ul>
							</li> -->
							

						
						</ul>

                    </div>
	
				</div>
			</div>
		</div>
		<!-- main header END -->
	</header>
	<!-- header END -->