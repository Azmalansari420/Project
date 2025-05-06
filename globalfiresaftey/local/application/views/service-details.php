<?php $this->load->view('include/header.php'); ?>



<!-- breadcumb-area -->
<div class="breadcumb-area">
	<div class="container">				
		<div class="row">
			<div class="col-md-12 txtc  text-center ccase">
				<div class="brpt">
					<h2><?php echo $EDITDATA[0]->name; ?></h2>
				</div>
			</div>
		</div>
	</div>
</div>

	
<!-- BLOG AREA -->
<div class="witr-blog-side-area  blog_area single_blog ">
	<div class="container">		
		<div class="row">							
			<div class="col-lg-12 col-md-12 col-sm-12">
				<!-- SINGLE BLOG -->
				<div class="single_blog single_blog_grid singles">
					<div class="single_blog_thumb">
						<img src="<?php echo base_url(); ?>media/uploads/categories/<?php echo $EDITDATA[0]->image; ?>" alt=""> 
					</div>
					<!-- BLOG TITLE -->
					<div class="hackery-single-blog-details-inner">	
						<div class="hackery-single-blog-title">
							<h2><?php echo $EDITDATA[0]->name; ?></h2>	
						</div>
						
						<div class="hackery-single-blog-content">
							<div class="single-blog-content">
								<p> <?php echo $EDITDATA[0]->content; ?> </p>
							</div>
							
						</div>
						
					</div>
				</div>
				
			</div>
			
		</div>
	</div>
</div>	

<?php $this->load->view('include/footer.php'); ?>

