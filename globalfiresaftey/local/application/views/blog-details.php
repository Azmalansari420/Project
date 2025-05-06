<?php $this->load->view('include/header.php'); ?>



<!-- breadcumb-area -->
<div class="breadcumb-area">
	<div class="container">				
		<div class="row">
			<div class="col-md-12 txtc  text-center ccase">
				<div class="brpt">
					<h2><?php echo $EDITDATA[0]->title; ?></h2>
				</div>
				<div class="breadcumb-inner">
					<ul>
						<li><a href="<?php echo base_url(); ?>">Home</a></li>
						<li><i class="fas fa-angle-right"></i></li>
						<li>Blog details</li>
					</ul>						
				</div>
			</div>
		</div>
	</div>
</div>

	
<!-- BLOG AREA -->
<div class="witr-blog-side-area  blog_area single_blog ">
	<div class="container">		
		<div class="row">							
			<div class="col-lg-8 col-md-7 col-sm-12">
				<!-- SINGLE BLOG -->
				<div class="single_blog single_blog_grid singles">
					<div class="single_blog_thumb">
						<img src="<?php echo base_url(); ?>media/uploads/blog/<?php echo $EDITDATA[0]->image; ?>" alt=""> 
					</div>
					<!-- BLOG TITLE -->
					<div class="hackery-single-blog-details-inner">	
						<div class="hackery-single-blog-title">
							<h2><?php echo $EDITDATA[0]->title; ?></h2>	
						</div>
						
						<div class="hackery-single-blog-content">
							<div class="single-blog-content">
								<p> <?php echo $EDITDATA[0]->content; ?> </p>
							</div>
							
						</div>
						
					</div>
				</div>
				
			</div>
			<div class="col-lg-4 col-md-5  col-sm-12 col-xs-12 sidebar-right content-widget pdsl">
				<div class="blog-left-side widget">
					
					<div class="widget widget_recent_data">
						<div class="single-widget-item">
							<h2 class="widget-title">Recent Posts</h2>	
							<?php 
							$this->db->order_by('id desc');
							$blog = $this->crud->selectDataByMultipleWhere('blog',array('status'=>1,));
							foreach($blog as $data)
							{ ?>			
							<div class="recent-post-item">
								<div class="recent-post-image">
									<a href="<?php echo base_url('blog/'.$data->slug); ?>">
										<img src="<?php echo base_url(); ?>media/uploads/blog/<?php echo $data->image; ?>" alt="" style="height: 45px;"/>
									</a>
								</div>
								<div class="recent-post-text">
									<h4>
										<a href="<?php echo base_url('blog/'.$data->slug); ?>">
											<?php echo $data->title; ?>
										</a>
								    </h4>					
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

<?php $this->load->view('include/footer.php'); ?>

