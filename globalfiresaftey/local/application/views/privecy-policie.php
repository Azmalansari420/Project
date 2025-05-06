<?php 
$getcontent = $this->db->get_where('content',array('id'=>2))->result_object();
$this->load->view('include/header.php'); ?>


<div class="breadcumb-area">
	<div class="container">				
		<div class="row">
			<div class="col-md-12 txtc  text-center ccase">
				<div class="brpt">
					<h2>Privacy Policy</h2>
				</div>
				<div class="breadcumb-inner">
					<ul>
						<li><a href="<?php echo base_url(); ?>">Home</a></li>
						<li><i class="fas fa-angle-right"></i></li>
						<li>Privacy Policy</li>
					</ul>						
				</div>
			</div>
		</div>
	</div>
</div>

<!-- hackery_vision_area -->
<div class="hackery_vision_area">
	<div class="container">				
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 ">
				<div class="witr_section_title">
					<div class="witr_section_title_inner text-left">
						<h3>Privacy Policy</h3>		
						
						<?=$getcontent[0]->content ?>
		            
            
					</div>
				</div>				
			</div>
			
		</div>
	</div>
</div>





<?php $this->load->view('include/footer.php'); ?>