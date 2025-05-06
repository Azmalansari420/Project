<?php $this->load->view('include/header.php'); ?>

<style type="text/css">
	a.ddddd {
    margin-left: 0;
}
.witr_service2 {
    overflow: hidden;
    margin-bottom: 30px;
    border: 1px solid;
}
</style>

<!-- breadcumb-area -->
<div class="breadcumb-area">
	<div class="container">				
		<div class="row">
			<div class="col-md-12 txtc  text-center ccase">
				<div class="brpt">
					<h2>Product</h2>
				</div>
				<div class="breadcumb-inner">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><i class="fas fa-angle-right"></i></li>
						<li>Product</li>
					</ul>						
				</div>
			</div>
		</div>
	</div>
</div>



<!-- hackery_service_area -->
<div class="hackery_service2_area">
	<div class="container">	
		<div class="row">
			<div class="col-lg-12">
				<div class="witr_section_title">
					<div class="witr_section_title_inner text-center">
						<h3>Our Product</h3>		
						<!-- <h3>Our Provided Service</h3>		 -->
					</div>
				</div>					
			</div>					
		</div>
		<div class="row service_top">


			<?php
			$this->db->order_by('id desc');
			$product = $this->db->get_where('product',array('status'=>1))->result_object();
			foreach($product as $data)
				{ ?>
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="witr_service2 all_service2_color">
					<div class="witr_front_content">
						<div class="witr_service2_image">
							<img src="<?php echo base_url(); ?>media/uploads/product/<?=$data->image ?>" alt="">
												
						</div>	
						<div class="witr_service2_box">
							<div class="witr_titles" style="text-align:center;">
								<h3><?=$data->name ?> </h3>		
							</div>
							<div class="donate-btn-header" style="text-align:center;width: 100%;">
								<a class="dtbtn ddddd" href="<?php echo base_url('contact'); ?>">Enquiry Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
			
		
			
		</div>
	</div>
</div>







<?php $this->load->view('include/footer.php'); ?>

