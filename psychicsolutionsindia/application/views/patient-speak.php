<?php include('header.php'); ?>
<div class="page-content">
	<!--section-->
	<div class="section mt-0">
		<div class="breadcrumbs-wrap">
			<div class="container">
				<div class="breadcrumbs">
					<a href="">Home</a>
					<!-- <a href="our-specialist.php">Our Specialists</a> -->
					<span>Patient Speak</span>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->


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
									<p class="review-text"><?=$data->content ?> </p>
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
	

	<?php include('footer.php'); ?>