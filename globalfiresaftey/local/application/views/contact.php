<?php
	$EDITDATA = $this->crud->fetchdatabyid('1','site_setting');
?>

<?php $this->load->view('include/header.php'); ?>


<!-- breadcumb-area -->
<div class="breadcumb-area">
	<div class="container">				
		<div class="row">
			<div class="col-md-12 txtc  text-center ccase">
				<div class="brpt">
					<h2>Contact</h2>
				</div>
				<div class="breadcumb-inner">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><i class="fas fa-angle-right"></i></li>
						<li>Contact </li>
					</ul>					
				</div>
			</div>
		</div>
	</div>
</div>


<!-- hackery_contact2_area -->
<div class="hackery_contact_area contact2 contact_page">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="apartment_area">
					<div class="apartment_text">		
						<h1>// Contact us</h1>
						<p>ENQUIRY FORM </p>	
						<?php echo $this->session->flashdata('message'); ?>	
					</div>
					<div class="witr_apartment_form">
						<form method="post" action="<?php echo base_url('welcome/enquiry_form'); ?>">
							<div class="form-row">
								<div class="form-group col-md-6">
									<span><input type="text" name="name" placeholder="Your name*"></span>
								</div>
								<div class="form-group col-md-6">
									<div class="witr_form_field2">
										<span><input type="email" name="email" placeholder="Your email*"></span>
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<div class="witr_form_field2">
										<span><input type="text" name="mobile" placeholder="Your Mobile*"></span>
									</div>
								</div>

								<div class="form-group col-md-6">
									<div class="witr_form_field2">
										<span><input type="text" name="subject" placeholder="Your subject*"></span>
									</div>
								</div>
								
							</div>
							
							<div class="form-group">
								<span><textarea name="message" placeholder="Your Comment..."></textarea></span>
							</div>
							<p><button type="submit" name="submit" class="w_btn2">Send Request</button></p>
							
						</form>
					</div>					
				</div>									
			</div>
		</div>			
	</div>			
</div>		
	


<div class="hackery_address_area"> 
	<div class="container">
		<div class="row">
			<!-- <div class="col-lg-4 col-md-6 col-sm-12">
				<div class="em-service2 sleft all_color_service">
					<div class="em_service_content ">
						<div class="em_single_service_text">
							<div class="service_top_image"></div>
							<div class="text_box">
								<div class="service_top_text all_icon_color">
									<div class="em-service-icon">
										<i class="icofont-map-pins"></i>
									</div>			
								</div>
								<div class="em-service-inner">
									<div class="em-service-title">
										<h3>ADDRESS: </h3>		
									</div>						
									<div class="em-service-desc">
										<p><?php echo $EDITDATA[0]->address; ?></p>		
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div> -->
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="em-service2 sleft all_color_service">
					<div class="em_service_content ">
						<div class="em_single_service_text">
							<div class="service_top_image"></div>
							<div class="text_box">
								<div class="service_top_text all_icon_color">
									<div class="em-service-icon">
										<i class="icofont-live-support"></i>
									</div>			
								</div>
								<div class="em-service-inner">
									<div class="em-service-title">
										<h3>PHONES: </h3>		
									</div>						
									<div class="em-service-desc">
										<p><?php echo $EDITDATA[0]->mobile; ?> </p>
										<p><?php echo $EDITDATA[0]->alt_mobile; ?> </p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="em-service2 sleft all_color_service">
					<div class="em_service_content ">
						<div class="em_single_service_text">
							<div class="service_top_image"></div>
							<div class="text_box">
								<div class="service_top_text all_icon_color">
									<div class="em-service-icon">
										<i class="icofont-wall-clock"></i>
									</div>			
								</div>
								<div class="em-service-inner">
									<div class="em-service-title">
										<h3>Email:</h3>		
									</div>						
									<div class="em-service-desc">
										<p><?=$sitesetting[0]->email ?></p>	
										<p><?=$sitesetting[0]->alt_email ?></p>	
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


<!-- hackery_map_area -->
<div class="hackery_map_area"> 
	<div class="containers">
		<div class="row">
			<div class="col-lg-12">
				<div class="map_area">
					<?=$sitesetting[0]->map ?>
				</div>	
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('include/footer.php'); ?>

