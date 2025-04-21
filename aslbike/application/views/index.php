
<?php $this->load->view('include/header.php'); ?>


<!-- Slick SLIDER  AREA -->
<div class="witr_slick_slider_area">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 padding_lr0">
				<div class="witr_ds_content_area witr_dsider_js_active simages_id5">
					<?php 
					$this->db->order_by('id desc');
					$slider = $this->crud->selectDataByMultipleWhere('slider',array('status'=>1,));
					foreach($slider as $data)
						{ ?>
					<div class="witr_ds_slider_content witr_slick_content">
						<div class=" witr_ds_content witr_slick_height text-left" style="background-image:url(<?php echo base_url(); ?>media/uploads/slider/<?php echo $data->image; ?>);">
							<div class="witr_ds_content_inner witr_containers">
								<h2><?php echo $data->title; ?> </h2>
								<p><?php echo $data->content; ?></p>
								<div class="slider_btn">
									<div class="witr_btn_style">
										<div class="witr_btn_sinner">
											<a class="witr_btn" href="<?php echo $data->url; ?>">More Info +</a>
										</div>
									</div>
								</div>							
							</div>
						</div>						
					</div>
				<?php } ?>

				
				</div>
			</div>
		</div>
	</div>
</div>
		



<!-- hackery_features_area -->
<div class="hackery_features_area">
	<div class="container">	
		<div class="row">
			<!-- hackery_features_01 -->
			<div class="col-lg-4 col-md-6 col-sm-12">	
				<div class="witr_service2_style4_s">
					<div class=" all_service2_color witr_service2_style4">
						<div class="witr_custom_icons">
							<i class="icofont-motor-bike"></i>
						</div>	
						<h3>Bike servicing at Home </h3>
						<p>Routine servicing, Performance evaluation, Parts checkup and Vehicle health monitoring.</p>		
						<div class=" witr_button_s2">
							<div class="witr_sn_button witr_btn_all_color">
								<a href="<?php echo base_url('contact'); ?>">Contact Us</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- hackery_features_02 -->
			<div class="col-lg-4 col-md-6 col-sm-12 all_color_bg">	
				<div class="witr_service2_style4_s">
					<div class=" all_service2_color witr_service2_style4">
						<div class="witr_custom_icons">
							<i class="icofont-repair"></i>
						</div>	
						<h3>Major Repair at Doorstep</h3>
						<p>Engine work, Parts replacement, wiring fault, Lock/unlock and type and wheel problems. </p>		
						<div class=" witr_button_s2">
							<div class="witr_sn_button witr_btn_all_color">
								<a href="<?php echo base_url('contact'); ?>">Contact Us</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- hackery_features_03 -->
			<div class="col-lg-4 col-md-6 col-sm-12">	
				<div class="witr_service2_style4_s">
					<div class=" all_service2_color witr_service2_style4">
						<div class="witr_custom_icons">
							<i class="icofont-breakdown"></i>
						</div>	
						<h3>BreakDown Support</h3>
						<p>Puncture Repair, Battery Jumpstart, Minor Repairs, Key Unlock Assistance and bike start problems. </p>		
						<div class=" witr_button_s2">
							<div class="witr_sn_button witr_btn_all_color">
								<a href="<?php echo base_url('contact'); ?>">Contact Us</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- hackery_serivce_bg_area -->
<div class="hackery_serivce_bg_area">
	<div class="container">	
		<div class="row">
			<div class="col-lg-12">
				<div class="witr_section_title white">
					<div class="witr_section_title_inner text-center">
						<h2 style="color:black;">OUR SUPPORT</h2>		
						<h3 style="color:black;">How ASR Bike Mechanic Work’s</h3>		
					</div>
				</div>				
			</div>					
		</div>
		<div class="row service_top service_style1">
			<!-- hackery_serivce_bg_01 -->
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="medi_singleService wirt_s2_s5 wirt_s2_s6 all_service2_color">
					<div class="witr_custom_icons">
						<i class="icofont-ui-contact-list"></i>
					</div>	
					<div class="wirt_s2_s5i">
						<h3><a href="#">Book Your Service on our Website</a></h3>
						<p>Fill your Bike detail and Pick a date and time slot with address for your Bike servicing and repairing at home. </p>		
					</div>
				</div>
			</div>
			<!-- hackery_serivce_bg_02 -->
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="medi_singleService wirt_s2_s5 wirt_s2_s6 all_service2_color">
					<div class="witr_custom_icons">
						<i class="icofont-engineer"></i>
					</div>	
					<div class="wirt_s2_s5i">
						<h3><a href="#">Our Engineer reach at your Doorstep</a></h3>
						<p>A trusted, skilled Bike engineer will take a confirmation with you and meet you at your doorstep / location. </p>		
					</div>
				</div>
			</div>
			<!-- hackery_serivce_bg_03 -->
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="medi_singleService wirt_s2_s5 wirt_s2_s6 all_service2_color">
					<div class="witr_custom_icons">
						<i class="icofont-users-alt-6"></i>
					</div>	
					<div class="wirt_s2_s5i">
						<h3><a href="#">Evaluation and <br>Price Estimate </a></h3>
						<p>Apart from routine service if there is any part damage or replacement our engineer give you a price estimate.</p>		
					</div>
				</div>
			</div>		
			<!-- hackery_serivce_bg_04 -->
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="medi_singleService wirt_s2_s5 wirt_s2_s6 all_service2_color">
					<div class="witr_custom_icons">
						<i class="icofont-man-in-glasses"></i>
					</div>	
					<div class="wirt_s2_s5i">
						<h3><a href="#">You can watch bike serviced live</a></h3>
						<p>We service your Bike at your location with live feed so that you can spend time on things you want at home or office. </p>		
					</div>
				</div>
			</div>	
			<!-- hackery_serivce_bg_05 -->
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="medi_singleService wirt_s2_s5 wirt_s2_s6 all_service2_color">
					<div class="witr_custom_icons">
						<i class="icofont-binary"></i>
					</div>	
					<div class="wirt_s2_s5i">
						<h3><a href="#">Invoicing and Payment (Google Pay/Paytm/Neft)</a></h3>
						<p>After service you will instantly get a invoice for your service and you can pay via safe mode as per Your convenient. </p>		
					</div>
				</div>
			</div>			<!-- hackery_serivce_bg_03 -->
			<!-- <div class="col-lg-4 col-md-6 col-sm-12">
				<div class="medi_singleService wirt_s2_s5 wirt_s2_s6 all_service2_color">
					<div class="witr_custom_icons">
						<i class="icofont-life-ring"></i>
					</div>	
					<div class="wirt_s2_s5i">
						<h3><a href="#">Lifetime Warranty</a></h3>
						<p>One-time purchase info the amount more ional endly doctors </p>		
					</div>
				</div>
			</div> -->
		</div>
	</div>
</div>


<!-- hackery_advantages_area -->
<div class="hackery_advantages_area">
	<div class="container">	
		<div class="row">
			<div class="col-lg-12">
				<div class="witr_section_title">
					<div class="witr_section_title_inner text-center">		
						<h3>Why Choose Us:</h3>		
					</div>
				</div>				
			</div>					
		</div>
		<div class="row advantages_top">

			<div class="col-lg-3 col-md-4 col-sm-12">
				<div class="service-item all_color_service text-center">
					<div class="service_top_image"></div>
					<div class="text_box all_icon_color">
						<i class="icofont-badge"></i>
						<h3> 8+ years of experience</h3>		
					</div>					
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-12">		
				<div class="service-item all_color_service text-center">
					<div class="service_top_image"></div>
					<div class="text_box all_icon_color">
						<i class="icofont-automation"></i>
						<h3> Doorstep service No queue</h3>	
					</div>					
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-12">
				<div class="service-item all_color_service text-center">
					<div class="service_top_image"></div>
					<div class="text_box all_icon_color">
						<i class="icofont-engineer"></i>
						<h3> Qualified and trusted Engineer</h3>		
					</div>					
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-12">		
				<div class="service-item all_color_service text-center">
					<div class="service_top_image"></div>
					<div class="text_box all_icon_color">
						<i class="icofont-video-alt"></i>
						<h3> Transparency Live Video Feed</h3>	
					</div>					
				</div>
			</div>

			<div class="col-lg-3 col-md-4 col-sm-12">
				<div class="service-item all_color_service text-center">
					<div class="service_top_image"></div>
					<div class="text_box all_icon_color">
						<i class="icofont-delivery-time"></i>
						<h3>  Timely service reminder</h3>		
					</div>					
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-12">		
				<div class="service-item all_color_service text-center">
					<div class="service_top_image"></div>
					<div class="text_box all_icon_color">
					<i class="icofont-gears"></i>
						<h3>  7 days Warranty on parts replaced</h3>	
					</div>					
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-12">
				<div class="service-item all_color_service text-center">
					<div class="service_top_image"></div>
					<div class="text_box all_icon_color">
						<i class="icofont-woman-in-glasses"></i>
						<h3> Priority to Girls and working womens</h3>		
					</div>					
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-12">		
				<div class="service-item all_color_service text-center">
					<div class="service_top_image"></div>
					<div class="text_box all_icon_color">
						<i class="icofont-settings-alt"></i>
						<h3> Genuine Parts and Lubricants</h3>	
					</div>					
				</div>
			</div>
			
		</div>
	</div>
</div>


<!-- hackery_about2_area -->
<div class="hackery_about2_area" style="padding: 0;">
	<div class="container">	
		<div class="row">
			<div class="col-lg-12">
				<div class="witr_section_title">
					<div class="witr_section_title_inner text-center">
						<!-- <h2>// ABOUT</h2>		 -->
						<h3>ASR Bike Mechanic </h3>		
						<!-- <h1>Our First Priority</h1>		 -->
						<p>gives doorstep Bike overhauling and fixing administration in Noida, Gurgaon and Delhi-NCR we are situated in noida and guaranteeing an hour ensured administration in Noida and Gr. Noida after affirmation and in crisis or street associate we are consistently make an honest effort to give moment help and administration.</p>		
					</div>
				</div>
				<div class="witr_button_area text-center">
					<div class="witr_btn_style mr">
						<div class="witr_btn_sinner">	
							<a href="<?php echo base_url('contact'); ?>" class="witr_btn">
								Book an Appointment<i class="fas fa-arrow-circle-right"></i>
							</a>
						</div>						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- hackery_brand_area -->
<div class="hackery_brand_area" style="padding: 81px 0 0;">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">	
				<div class="witr_section_title_inner text-center">
						<h3 style="margin-bottom: 60px;">Brands We Service</h3>				
					</div>

				<div class="imagess_area wittr_car_top_left brand_bg">
					<div class="witr_car_overlay brand_imagess_active">
						<?php 
						$this->db->order_by('id desc');
						$Parts = $this->crud->selectDataByMultipleWhere('partner',array('status'=>1,));
						foreach($Parts as $data)
							{ ?>
						<div class="slide_items">
							<a href="#"><img src="<?php echo base_url(); ?>media/uploads/partner/<?php echo $data->image; ?>" alt=""/></a>
						</div>
					<?php } ?>
					
					</div>
				</div> 
			</div>
		</div>
	</div>
</div>


<!-- hackery_testimonial_area -->
<div class="hackery_testimonial_area">
	<div class="container">	
		<div class="row">
			<div class="col-lg-12">
				<div class="witr_section_title">
					<div class="witr_section_title_inner text-center">
						<h3>Our Testimonial</h3>
						<!-- <h3>OUR CLIENT SAY</h3> -->
					</div>
				</div>
			</div>
		</div>
		<div class="testomonial testomonial-2 all_color_testimonial testi_top">	
             <div class="row tshover testomonial-slide carso_idtesti2">
				<!-- hackery_testimonial_01 -->
				<?php 
				$this->db->order_by('id desc');
				$testi = $this->crud->selectDataByMultipleWhere('testimonials',array('status'=>1,));
				foreach($testi as $data)
					{ ?>
				<div class="witr_item_column guttergs">
					<div class="test-part mt-50 witr_testi_s_11">
						 <ul>
							<li><div class="em_crating"></div></li>
						</ul>
						<p><?php echo $data->comment; ?></p>
						<h6><?php echo $data->name; ?></h6>  									 
						<img src="<?php echo base_url(); ?>media/uploads/testimonials/<?php echo $data->image; ?>" alt=""> 								
					</div>	
				</div>	
			
				<?php } ?>			
			</div>
		</div>
	</div>
</div>



<!-- hackery_address_area -->
<div class="hackery_address_area"> 
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="em-service2 sleft all_color_service">
					<div class="em_service_content ">
						<div class="em_single_service_text">
							<div class="service_top_image"></div>
							<div class="text_box">								
								<div class="em-service-inner">
									<div class="em-service-desc">
										<p style="text-align: center;">ASR Bike Mechanic give experienced and guaranteed proficient technician to your doorstep at pocket amicable cost for any sort of bicycle administration at home. Remain at your home and get your bicycle adjusted in a single tick by proficient and experienced specialist in Delhi NCR Bike Servicing at Doorstep fabricate that sort of TRUST when clients see everything before his eyes. ASR Bike Mechanic show up with required instruments, Essential Parts and Engine Oil. Bicycle overhauling at home charge changes yet we in all actuality do finish adjusting and furthermore guarantee ensure on parts which we supplant..</p>		
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
			
		</div>
	</div>
</div>





<?php $this->load->view('include/footer.php'); ?>
