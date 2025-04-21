<?php $this->load->view('include/header.php'); ?>



<!-- breadcumb-area -->
<div class="breadcumb-area">
	<div class="container">				
		<div class="row">
			<div class="col-md-12 txtc  text-center ccase">
				<div class="brpt">
					<h2>Blog</h2>
				</div>
				<div class="breadcumb-inner">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><i class="fas fa-angle-right"></i></li>
						<li>Blog</li>
					</ul>						
				</div>
			</div>
		</div>
	</div>
</div>


<!-- hackery_blog_area  -->
<div class="hackery_blog2_area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="witr_section_title">
					<div class="witr_section_title_inner text-center">
						<h2>OUR BLOG</h2>		
						<h3>Our Latest Update</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="row blog_top">
			<!-- hackery_blog_01  -->
			<?php 
			$this->db->order_by('id desc');
			$blog = $this->crud->selectDataByMultipleWhere('blog',array('status'=>1,));
			foreach($blog as $data)
				{ ?>
			<div class=" col-lg-4  col-md-6 col-sm-12 witr_all_mb_30">
				<div class="busi_singleBlog">
					<div class="witr_sb_thumb">
						<a href="<?php echo base_url('blog/'.$data->slug); ?>"> <img src="<?php echo base_url(); ?>media/uploads/blog/<?php echo $data->image; ?>" alt=""></a>
					</div>
					<div class="all_blog_color">	
						<div class="witr_blog_con bs5">
							<h2><a href="<?php echo base_url('blog/'.$data->slug); ?>"><?php echo $data->title; ?></a></h2>
						</div>
						<div class="em-blog-content-area_adn ">
							<div class="learn_more_adn">
								<a class="learn_btn adnbtn2" href="<?php echo base_url('blog/'.$data->slug); ?>">Read More <i class="fas fa-long-arrow-alt-right"></i>
								</a>
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

