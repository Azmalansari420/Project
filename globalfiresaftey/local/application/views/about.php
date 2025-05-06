<?php 
$getcontent = $this->db->get_where('content',array('id'=>1))->result_object();
$this->load->view('include/header.php'); ?>


<!-- breadcumb-area -->
<div class="breadcumb-area">
	<div class="container">				
		<div class="row">
			<div class="col-md-12 txtc  text-center ccase">
				<div class="brpt">
					<h2>About</h2>
				</div>
				<div class="breadcumb-inner">
					<ul>
						<li><a href="<?php echo base_url(); ?>">Home</a></li>
						<li><i class="fas fa-angle-right"></i></li>
						<li>About</li>
					</ul>						
				</div>
			</div>
		</div>
	</div>
</div>


<!-- hackery_about_area -->
<div class="hackery_about_area home1">
	<div class="container">
		<div class="row about_area">
			
			<div class="col-lg-12 col-md-12 col-sm-12 about_service">
				<div class="witr_section_right">
					<div class="witr_section_title">
						<div class="witr_section_title_inner text-left">
							<h2>About Us</h2>

							<?=$getcontent[0]->content ?>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>

<!-- hackery_team_area -->
<div class="hackery_brand_area" style="padding: 81px 0 0;">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">	
				<div class="witr_section_title_inner text-center">
						<h3 style="margin-bottom: 60px;">OUR CLIENTS</h3>				
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
		








<?php $this->load->view('include/footer.php'); ?>
