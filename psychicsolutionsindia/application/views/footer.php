<?php
$sitesetting = $this->crud->fetchdatabyid('1','site_setting');
?>
<!--footer-->
	<div class="footer mt-0">
		<div class="container">
			<div class="row py-1 py-md-2 px-lg-0">

				<div class="col-lg-3 footer-col1">
					<div class="row flex-column flex-md-row flex-lg-column">
						<div class="col-md col-lg-auto">
							<div class="footer-logo">
								<img src="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" alt="" class="img-fluid" style="height:100px;">
							</div>
							<div class="mt-2 mt-lg-0"></div>
							<div class="footer-social d-lg-none">
								<a href="<?=$sitesetting[0]->facebook ?>" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
								<a href="<?=$sitesetting[0]->twitter ?>" target="blank" class="hovicon"><i class="icon-twitter-logo"></i></a>
								<a href="<?=$sitesetting[0]->youtube ?>" target="blank" class="hovicon"><i class="icon-play"></i></a>
								<a href="<?=$sitesetting[0]->instagram ?>" target="blank" class="hovicon"><i class="icon-instagram"></i></a>
							</div>
						</div>
						<div class="col-md">
							<div class="footer-text mt-1 mt-lg-2">
								<p>Dr. Ram Kumar, Psychiatrist, Psychiatrist in Delhi, Best psychiatrist in Delhi, psychotherapist in Delhi, Hypnotherapist in Delhi, Past life therapist in Delhi.</p>
								<!-- <form action="#" class="footer-subscribe">
									<div class="input-group">
										<input name="subscribe_mail" type="text" class="form-control" placeholder="Your Email" />
										<span><i class="icon-black-envelope"></i></span>
									</div>
								</form> -->
							</div>
							<div class="footer-social d-none d-lg-block">
								<a href="<?=$sitesetting[0]->facebook ?>" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
								<a href="<?=$sitesetting[0]->twitter ?>" target="blank" class="hovicon"><i class="icon-twitter-logo"></i></a>
								<a href="<?=$sitesetting[0]->youtube ?>" target="blank" class="hovicon"><i class="icon-play"></i></a>
								<a href="<?=$sitesetting[0]->instagram ?>" target="blank" class="hovicon"><i class="icon-instagram"></i></a>
								<a href="https://api.whatsapp.com/send?phone=919999675791" target="blank" class="hovicon"><img src="<?=base_url() ?>images/whatsapp.svg" style="height: 30px;"></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3">
					<h3>Quick Links</h3>
					<div class="h-decor"></div>
					<ul class="icn-list">
						<li><a href="<?=base_url() ?>">Home</a></li>
						<li><a href="<?=base_url() ?>">About US</a></li>
							<li><a href="<?=base_url() ?>">Services</a></li>
						<li><a href="<?=base_url() ?>">Specialize Treatment</a></li>
						<li><a href="<?=base_url() ?>">Facilities Available</a></li>
						<li><a href="<?=base_url() ?>diesese">Disease</a></li>
						<!-- <li><a href="">Articles</a></li> -->
						<li><a href="<?=base_url() ?>">FAQ's</a></li>
						<li><a href="<?=base_url() ?>">Patient Speak</a></li>
						<li><a href="<?=base_url() ?>">Contacts</a></li>
					</ul>
					
				</div>

				<div class="col-sm-6 col-lg-3">
					<h3>Our Contacts</h3>
					<div class="h-decor"></div>
					<ul class="icn-list">
						
						<li><i class="icon-telephone"></i><b><span class="phone"><span class="text-nowrap"><a href=""><?=$sitesetting[0]->mobile ?></a></span>, <span class="text-nowrap"><a href=""><?=$sitesetting[0]->alt_mobile ?></a></span></span></b>
							<br>(24/7 General inquiry)</li>
						<li><i class="icon-black-envelope"></i><a href="mailto:<?=$sitesetting[0]->email ?>"><?=$sitesetting[0]->email ?></a></li>
						<li><i class="icon-black-envelope"></i><a href="mailto:<?=$sitesetting[0]->alt_email ?>"><?=$sitesetting[0]->alt_email ?></a></li>
						<li><i class="icon-placeholder2"></i><?=$sitesetting[0]->address ?>
						</li>
					</ul>
					<br>
					<ul class="icn-list-lg">
						<li><i class="icon-clock"></i>
							<div>
								<div class="d-flex"><span style="min-width: 70%;">Wednesday - Monday</span><span class="theme-color">10:00 - 07:30</span></div>
								<div class="d-flex"><span>Tuesday</span><span class="theme-color">Closed</span></div>
								<!-- <div class="d-flex"><span>Saturday</span><span class="theme-color">08:00 - 18:00</span></div> -->
							</div>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3">
					<h3>Direction</h3>
					<div class="h-decor"></div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14017.816503551037!2d77.175019!3d28.556123!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1da500000091%3A0xefeec2e32ae66c7d!2sDr.%20Kumar&#39;s%20Homeopathy%20%26%20Mental%20Health%20Clinic%20Stress%20Depression%20treatment%20best%20Doctor%20in%20Delhi!5e0!3m2!1sen!2sin!4v1711709289492!5m2!1sen!2sin" width="100%" height="300px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>


			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="row text-center text-md-left">
					<div class="col-sm">Copyright © 2024 <a href="#">Psychic Solutions India</a><span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span>
						<a href="#">Privacy Policy</a></div>
					<div class="col-sm-auto ml-auto"><span class="d-none d-sm-inline">For emergency cases&nbsp;&nbsp;&nbsp;</span><i class="icon-telephone"></i>&nbsp;&nbsp;<b><?=$sitesetting[0]->mobile ?></b></div>
				</div>
			</div>
		</div>
	</div>
	<!--//footer-->
	<div class="backToTop js-backToTop">
		<i class="icon icon-up-arrow"></i>
	</div>
	<div class="modal modal-form modal-form-sm fade" id="modalQuestionForm">
		<div class="modal-dialog">
			<div class="modal-content">
				<button aria-label='Close' class='close' data-dismiss='modal'>
					<i class="icon-error"></i>
				</button>
				<div class="modal-body">
					<div class="modal-form">
						<h3>Ask a Question</h3>
						<form class="mt-15" id="questionForm" method="post" novalidate>
							<div class="successform">
								<p>Your message was sent successfully!</p>
							</div>
							<div class="errorform">
								<p>Something went wrong, try refreshing and submitting the form again.</p>
							</div>
							<div class="input-group">
								<span>
								<i class="icon-user"></i>
							</span>
								<input type="text" name="name" class="form-control" autocomplete="off" placeholder="Your Name*" />
							</div>
							<div class="input-group">
								<span>
									<i class="icon-email2"></i>
								</span>
								<input type="text" name="email" class="form-control" autocomplete="off" placeholder="Your Email*" />
							</div>
							<div class="input-group">
								<span>
									<i class="icon-smartphone"></i>
								</span>
								<input type="text" name="phone" class="form-control" autocomplete="off" placeholder="Your Phone" />
							</div>
							<textarea name="message" class="form-control" placeholder="Your comment*"></textarea>
							<div class="text-right mt-2">
								<button type="submit" class="btn btn-sm btn-hover-fill">Ask Now</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="modal modal-form fade" id="modalBookingForm">
		<div class="modal-dialog">
			<div class="modal-content">
				<button aria-label='Close' class='close' data-dismiss='modal'>
					<i class="icon-error"></i>
				</button>
				<div class="modal-body">
					<div class="modal-form">
						<h3>Book an Appointment</h3>
						<form class="mt-15" id="bookingForm1" method="post" novalidate action="<?=base_url() ?>welcome/bboking">
							
							<div class="input-group">
								<span>
								<i class="icon-user"></i>
							</span>
								<input type="text" name="name" class="form-control"  autocomplete="off" placeholder="Your Name*" />
							</div>
							<div class="row row-xs-space mt-1">
								<div class="col-sm-6">
									<div class="input-group">
										<span>
											<i class="icon-email2"></i>
										</span>
										<input type="text" name="email" class="form-control" autocomplete="off" placeholder="Your Email*" />
									</div>
								</div>
								<div class="col-sm-6 mt-1 mt-sm-0">
									<div class="input-group">
										<span>
											<i class="icon-smartphone"></i>
										</span>
										<input type="text" name="mobile" class="form-control" autocomplete="off" placeholder="Your Phone" />
									</div>
								</div>
							</div>
							<div class="row row-xs-space mt-1">
								<div class="col-sm-6">
									<div class="input-group">
										<span>
											<i class="icon-birthday"></i>
										</span>
										<input type="text" name="age" class="form-control" autocomplete="off" placeholder="Your age" />
									</div>
								</div>
							</div>
							<div class="selectWrapper input-group mt-1">
								<span>
									<i class="icon-star"></i>
								</span>
								<select name="bookingservice" class="form-control">
									<?php
									$ser = $this->crud->selectDataByMultipleWhere('services',array('status'=>1,));
									foreach($ser as $data)
										{ ?>
									<option value="<?=$data->name ?>"><?=$data->name ?></option>
									<?php } ?>
								</select>
							</div>
							<div class="input-group flex-nowrap mt-1">
								<span>
									<i class="icon-calendar2"></i>
								</span>
								<div class="datepicker-wrap">
									<input name="dates" type="text" class="form-control datetimepicker" placeholder="Date" >
								</div>
							</div>
							<div class="input-group flex-nowrap mt-1">
								<span>
									<i class="icon-clock"></i>
								</span>
								<div class="datepicker-wrap">
									<input name="times" type="text" class="form-control timepicker" placeholder="Time">
								</div>
							</div>
							<textarea name="message" class="form-control" placeholder="Your comment"></textarea>
							<div class="text-right mt-2">
								<button type="submit" name="submit" class="btn btn-sm btn-hover-fill">Book now</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Vendors -->


	<!-- direction -->

	<style>
		.direction-btn {
		    position: fixed;
		    z-index: 999999;
		    right: 0px;
		    bottom: 200px;
		        padding: 5px 6px;
/*		    bottom: -25px;*/
		    opacity: 1;
		   /* width: 63px;
		    height: 63px;*/
		    border-radius: 5px;
		    background: #6bb652;
		    font-size: 18px;
		    line-height: 1;
		    color: #fff;
		    text-decoration: none;
		    text-align: center;
		    cursor: pointer;
		    box-shadow: 0 3px 3px rgba(0, 0, 0, 0.1);
		    transition: all 0.25s, bottom 0.75s ease-in-out;
		}
	</style>

	<!-- <a href="https://maps.app.goo.gl/bJXbtSrMCaPTAipq8" target="_blank" class="direction-btn">Direction</a> -->


	<script src="<?=base_url() ?>vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?=base_url() ?>vendor/jquery-migrate/jquery-migrate-3.0.1.min.js"></script>
	<script src="<?=base_url() ?>vendor/cookie/jquery.cookie.js"></script>
	<script src="<?=base_url() ?>vendor/bootstrap-datetimepicker/moment.js"></script>
	<script src="<?=base_url() ?>vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>
	<script src="<?=base_url() ?>vendor/popper/popper.min.js"></script>
	<script src="<?=base_url() ?>vendor/bootstrap/bootstrap.min.js"></script>
	<script src="<?=base_url() ?>vendor/waypoints/jquery.waypoints.min.js"></script>
	<script src="<?=base_url() ?>vendor/waypoints/sticky.min.js"></script>
	<script src="<?=base_url() ?>vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
	<script src="<?=base_url() ?>vendor/slick/slick.min.js"></script>
	<script src="<?=base_url() ?>vendor/scroll-with-ease/jquery.scroll-with-ease.min.js"></script>
	<script src="<?=base_url() ?>vendor/countTo/jquery.countTo.js"></script>
	<script src="<?=base_url() ?>vendor/form-validation/jquery.form.js"></script>
	<script src="<?=base_url() ?>vendor/form-validation/jquery.validate.min.js"></script>
	<!-- Custom Scripts -->
	<script src="<?=base_url() ?>js/app.js"></script>
    <script src="<?=base_url() ?>color/color.js"></script>

	<script src="<?=base_url() ?>js/app-shop.js"></script>
	<script src="<?=base_url() ?>form/forms.js"></script>


	<script>
    var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?94954';
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url;
    var options = {
  "enabled":true,
  "chatButtonSetting":{
      "backgroundColor":"#4dc247",
      "ctaText":"",
      "borderRadius":"25",
      "marginLeft":"10",
      "marginBottom":"50",
      "marginRight":"50",
      "position":"left"
  },
  "brandSetting":{
      "brandName":"Psychic Solutions India",
      "brandSubTitle":"Typically replies within a day",
      "brandImg":"<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>",
      "welcomeText":"Hi there!\nHow can I help you?",
      "messageText":"Hello, I have a question about {{page_link}}",
      "backgroundColor":"#0a5f54",
      "ctaText":"Start Chat",
      "borderRadius":"25",
      "autoShow":false,
      "phoneNumber":"+916296993007"
  }
};
    s.onload = function() {
        CreateWhatsappChatWidget(options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
</script>

</body>

</html>