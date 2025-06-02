<?php include('header.php'); ?>
	<!--//header-->
	<div class="page-content">
		

	<!--section slider-->
		<div class="section mt-0">
			<div id="mainSliderWrapper">
				<div class="loading-content">
					<div class="inner-circles-loader"></div>
				</div>
				<div class="main-slider mb-0 arrows-white" id="mainSlider" data-slick='{"arrows": true, "responsive":[{"breakpoint": ,"settings":{"arrows": false, "dots": true }}]}'>
					<?php
					$this->db->order_by('id desc');
					$slider = $this->crud->selectDataByMultipleWhere('slider',array('status'=>1,));
					foreach($slider as $data)
						{ ?>
					<div class="slide">
						<div class="img--holder" data-animation="kenburns" data-bg="<?=base_url() ?>media/uploads/slider/<?=$data->image ?>"></div>
						
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<!--//section slider-->






		<!--section welcome-->
		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 d-none d-lg-block text-center">
						<img src="<?=base_url() ?>images/about-img.jpg" alt="" class="img-about mb-3">
						<a class="button-2 mobile-none" href="<?=base_url() ?>qrcode">Book Appointment</a>
					</div>
					<div class="col-lg-8">
						<div class="title-wrap text-center text-lg-left mt-15 d-none d-md-block">
							<div class="h-sub" style="font-size: 36px!important;">Dr.Kumar's Homoeopathy & Mental Health Clinic</div>
							<h2 class="h1" style="font-size: 23px;"> <span class="theme-color">Dr.Ram Kumar</span></h2>
						</div>
						<div class="row">
							<div class="d-lg-none col-8 col-sm-6 col-lg-5 mx-auto">
								<img src="<?=base_url() ?>images/about-img.jpg" alt="" class="img-fluid" style="height: 230px;">

							</div>
							<div class="col-sm">
								<div class="title-wrap text-center text-lg-left mt-3 mt-sm-0 d-md-none">
									<div class="h-sub" style="font-size: 36px!important;">Dr.Kumar's Homoeopathy & Mental Health Clinic</div>
									<h2 class="h1" style="font-size: 23px;"><span class="theme-color">Dr.Ram Kumar</span></h2>
								</div>
								<div class="text-left mt-3 mt-sm-0">
									<p class="p-lg">B.H.M.S., M.D. (Hom) Psychiatry Homoeopathic Physician, Psychiatrist & Clinical Hypnotherapist.He is one of the first Psychiatrists from the Homeopathic system of medicine in India. His metaphysical approach to life is very real and hence his way of treating a sick person is painless, natural, and holistic.</p>
									<p>He treats his patients by helping to develop their insight into life, health, and sickness. He merely prescribes medicine for altered health and encourages his patients to go for self-recovery by strengthening their willpower. He uses different psychological techniques like Counseling, Psychotherapy, Hypnotherapy, Metaphysical Therapy, and Bach Flower Therapy along with homeopathic treatment to help patients complete recovery, not only from sickness to health but also the comprehensive meaning of health e.g. physical, mental, social, and spiritual health.</p>
									<a href="#" class="btn-link" data-toggle="modal" data-target="#modalBookingForm">Booking a Visit<i class="icon-right-arrow"></i></a><br>
									<a class="button-2 mt-2 desktop-none" href="<?=base_url() ?>qrcode">Book Appointment</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="section" style="margin-top: 75px;">
			<div class="container">
				<div class="title-wrap text-center">
					<div class="h-sub theme-color">See the difference</div>
					<h2 class="h1">Why Choose Us?</h2>
					<div class="h-decor"></div>
				</div>
				<div class="row js-icn-carousel icn-carousel flex-column flex-sm-row text-center text-sm-left" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}]}'>
					<div class="col-md">
						<div class="icn-text">
							<div class="icn-text-circle icn-text-circle--sm"><i class="icon-medicine"></i></div>
							<div>
								<h5 class="icn-text-title">Empathetic Hearing</h5>
								<p>"Enriched Pharmacy is a healthcare facility that specializes in compounding and dispensing medications, offering personalized, patient-specific solutions to meet unique health needs."</p>
							</div>
						</div>
					</div>
					<div class="col-md">
						<div class="icn-text">
							<div class="icn-text-circle icn-text-circle--sm"><i class="icon-principles"></i></div>
							<div>
								<h5 class="icn-text-title">Affordable Psychological Sessions</h5>
								<p>"Empathetic hearing, affordable psychological sessions, medical treatment, enriched pharmacy,gradual withdrawal plan from allopathic medicines."</p>
							</div>
						</div>
					</div>
					<div class="col-md">
						<div class="icn-text">
							<div class="icn-text-circle"><i class="icon-team"></i></div>
							<div>
								<h5 class="icn-text-title">Medical Treatment</h5>
								<p>Medical treatment involves diagnosing, preventing, and alleviating health conditions using procedures, therapies. It aims to restore or improve a patient's physical and mental well-being.</p>
							</div>
						</div>
					</div>
					<div class="col-md">
						<div class="icn-text">
							<div class="icn-text-circle"><i class="icon-team"></i></div>
							<div>
								<h5 class="icn-text-title">Enriched Pharmacy</h5>
								<p>Medical treatment involves diagnosing, preventing, and alleviating health conditions using procedures, therapies. It aims to restore or improve a patient's physical and mental well-being.</p>
							</div>
						</div>
					</div>
					
					<div class="col-md">
						<div class="icn-text">
							<div class="icn-text-circle"><i class="icon-team"></i></div>
							<div>
								<h5 class="icn-text-title">Gradual withdrawal plan from allopathic medicines</h5>
								<p>Medical treatment involves diagnosing, preventing, and alleviating health conditions using procedures, therapies. It aims to restore or improve a patient's physical and mental well-being.</p>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<!--//section-->
	
		<div class="section">
			<div class="container">
				<div class="title-wrap text-center">
					<div class="h-sub theme-color">Clinic figures</div>
					<h2 class="h1">What Have We Achieved</h2>
					<div class="h-decor"></div>
				</div>
				<div class="row d-block js-counter-carousel">
					<div class="col-4">
						<div class="counter-box">
							<div class="counter-box-icon"><i class="icon-hand"></i></div>
							<div class="counter-box-number"><span class="count" data-to="18" data-speed="1500">0</span>+</div>
							<div class="decor"></div>
							<div class="counter-box-text">Years of experience</div>
						</div>
					</div>
					<div class="col">
						<div class="counter-box">
							<div class="counter-box-icon"><i class="icon-compassion"></i></div>
							<div class="counter-box-number"><span class="count" data-to="10" data-speed="1500">0</span>K</div>
							<div class="decor"></div>
							<div class="counter-box-text">Comprehensive Care</div>
						</div>
					</div>
					<div class="col">
						<div class="counter-box">
							<div class="counter-box-icon"><i class="icon-team"></i></div>
							<div class="counter-box-number"><span class="count" data-to="50" data-speed="1500">0</span></div>
							<div class="decor"></div>
							<div class="counter-box-text">Reduced Stigma</div>
						</div>
					</div>
					<div class="col">
						<div class="counter-box">
							<div class="counter-box-icon"><i class="icon-innovation"></i></div>
							<div class="counter-box-number"><span class="count" data-to="4" data-speed="1500">0</span></div>
							<div class="decor"></div>
							<div class="counter-box-text">Increased Accessibility</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section achieved-->
		<!--section faq-->
		
		
		
		

		<div class="section page-content-first">
			<div class="container">
				<div class="text-center mb-2  mb-md-3 mb-lg-4">
					<!-- <div class="h-sub theme-color">Mental Health </div> -->
					<h1>SPECIALIZE TREATMENT</h1>
					<div class="h-decor"></div>
					<!-- <div class="text-center mt-4">
						<p>With years of experience and backed by state-of-the-art technology,<br>MedSlim is dedicated to helping you be your best self</p>
					</div> -->
				</div>
			</div>
			<div class="container">
				<div class="row col-equalH">
					<?php
					$diesese = $this->crud->selectDataByMultipleWhere('diesese',array('status'=>1,));
					foreach($diesese as $data)
						{ ?>
					<div class="col-md-6 col-lg-4">
						<div class="service-card" style="    padding: 0 30px 20px;">
							<div class="service-card-photo">
								<a href="<?=base_url('diesese-details/'.$data->slug) ?>"><img src="<?=base_url() ?>media/uploads/diesese/<?=$data->image ?>" class="img-fluid" alt="" style="height: 225px;"></a>
							</div>
							<h5 class="service-card-name"><a href="<?=base_url('diesese-details/'.$data->slug) ?>"><?=$data->name ?></a></h5>
							<div class="h-decor"></div>
							<p><?=$data->small_info ?></p>
						</div>
					</div>
					<?php } ?>
					
					
				</div>
			</div>
		</div>


		<div class="section mt-5 mb-5">
			<div class="container">
				<div class="title-wrap text-center">
					<h2 class="h1">From the Blog</h2>
					<div class="h-decor"></div>
				</div>
				<div class="blog-grid-full blog-grid-carousel-full js-blog-grid-carousel-full mt-3 mb-0 row">
					<?php
					$this->db->order_by('id desc');
					$blog = $this->crud->selectDataByMultipleWhere('blog',array('status'=>1,));
					foreach($blog as $data)
						{ ?>
					<div class="col-md-6 col-lg-4">
						<div class="blog-post">
							<div class="post-image">
								<a href="<?=base_url('blog-details/'.$data->slug) ?>"><img src="<?=base_url() ?>media/uploads/blog/<?=$data->image ?>" alt=""></a>
							</div>
							<div class="blog-post-info">
								<div class="post-date"><?=date('d',strtotime($data->addeddate)) ?><span><?=date('M',strtotime($data->addeddate)) ?></span></div>
								<div>
									<h2 class="post-title"><a href="<?=base_url('blog-details/'.$data->slug) ?>"><?=$data->name ?></a></h2>
								</div>
							</div>
							<div class="mt-2"><a href="<?=base_url('blog-details/'.$data->slug) ?>" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read more</span><i class="icon-right-arrow"></i></a></div>
						</div>
					</div>
					
					<?php } ?>
				</div>
			</div>
		</div>
		

		<div class="section bg-grey-dark py-0" style="margin-top: 60px;">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-12 col-lg-12 mt-2 mt-lg-0 text-center">
						<div class="reviews-wrap-alt ml-auto d-flex flex-column justify-content-center">
							<div class="title-wrap text-center text-md-center">
								<div class="h-sub">What People Says</div>
								<h2 class="h1">Patient <span class="theme-color">Testimonials</span></h2>
							</div>
							<div class="js-reviews-carousel reviews-carousel text-center text-md-center">
								<?php
								$this->db->order_by('id desc');
								$testimonials = $this->crud->selectDataByMultipleWhere('testimonials',array('status'=>1,));
								foreach($testimonials as $data)
									{ ?>
								<div class="review">

									<div class="star-rating"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></div>
									<p class="review-text"><?=$data->content ?></p>
									<p><span class="review-author"><?=$data->name ?></span> <span class="review-author-position"><?=$data->position ?></span></p>
								</div>

								<?php } ?>
							</div>
						</div>
					</div>
					<!-- <div class="col-md-5 col-lg-6">
						<div class="reviews-author-carousel">
							<div>
								<div class="img-after"><img src="<?=base_url() ?>images/content/about-01.jpg" alt=""></div>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</div>

		<div class="section bg-grey py-0 mt-0">
			<div class="container-fluid px-0">
				<div class="row no-gutters">
					<div class="col-xl-3 banner-left bg-cover align-items-end" style="background-image: url(<?=base_url() ?>images/faq.jpeg)"></div>
					<div class="col-xl-9">
						<div class="faq-wrap">
							<div class="text-center text-md-left">
								<div class="title-wrap">
									<h2 class="h1"><span class="theme-color">FAQ's</span></h2>
								</div>
							</div>
							<div id="faqAccordion1" class="faq-accordion mt-2 mt-lg-3" data-children=".faq-item">

								<?php
								$i=0;
								$faq = $this->crud->selectDataByMultipleWhere('faq',array('status'=>1,));
								foreach($faq as $key => $data)
									{ $i++; ?>

								<div class="faq-item">
									<a data-toggle="collapse" data-parent="#faqAccordion<?=$key ?>" href="#faqItem<?=$key ?>" aria-expanded="true"><span><?=$i ?>.</span><span><?=$data->question ?></span></a>
									<div id="faqItem<?=$key ?>" class="collapse <?php if($key==0) echo 'show'; ?> faq-item-content" role="tabpanel">
										<div>
											<p><?=$data->answere ?></p>
										</div>
									</div>
								</div>


							<?php } ?>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
<?php include('footer.php'); ?>
