<?php 
$getcontent = $this->db->get_where('content',array('id'=>1))->result_object();
$this->load->view('include/header.php'); ?>


<!-- Slick SLIDER  AREA -->
<div class="witr_slick_slider_area">
	<div class="main-slider-wrapper gray-300">
         <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
   		  <div class="carousel-indicators">
             <?php
            $this->db->order_by('id desc');
            $slider = $this->crud->selectDataByMultipleWhere('slider',array('status'=>1,));
            foreach ($slider as $key => $value) 
            { ?>
   		    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $key; ?>" class="<?php if($key==0)echo 'active'; ?>" aria-current="true" aria-label="Slide 1"></button>
   		    <?php } ?>
   		  </div>
   		  <div class="carousel-inner">
            <?php
            $this->db->order_by('id desc');
            $slider = $this->crud->selectDataByMultipleWhere('slider',array('status'=>1,));
            foreach ($slider as $key => $value) 
            { ?>
   		    <div class="carousel-item <?php if($key==0)echo 'active'; ?>">
   		      <img src="<?php echo base_url(); ?>media/uploads/slider/<?php echo $value->image; ?>" class="d-block w-100" alt="...">
   		    </div>
   		    <?php } ?>
   		  </div>
   		  
   		</div>     
      </div>
</div>
		




<style type="text/css">
	.hackery_service2_area {
	    padding: 50px 0px 40px;
	    background: #F9F9F9;
	}
</style>


<?php
$ceteogy = $this->db->get_where('categories',array('status'=>1,'show_home'=>1))->result_object();
foreach($ceteogy as $data)
	{ ?>
<div class="hackery_service2_area">
	<div class="container">	
		<div class="row">
			<div class="col-lg-12">
				<div class="witr_section_title">
					<div class="witr_section_title_inner text-center">
						<h3><?=$data->name ?></h3>		
					</div>
				</div>					
			</div>					
		</div>
		<div class="row service_top justify-content-center">
			<?php
			$getimg = json_decode($data->multiple_image_json);
			if(!empty($getimg))
			{
				foreach($getimg as $value)
					{ ?>
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="witr_service2 all_service2_color">
					<div class="witr_front_content">
						<div class="witr_service2_image">
							<img src="<?php echo base_url(); ?>media/uploads/categories/<?=$value ?>" alt="">
						</div>	
						
					</div>
				</div>
			</div>
		<?php } } ?>
			
		</div>
	</div>
</div>

<?php } ?>







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
										<?=$getcontent[0]->content ?>	
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
