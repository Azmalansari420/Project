<?php include('header.php'); ?>

    <!-- Page Header Start -->
	<div class="page-header parallaxie">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-3" data-cursor="-opaque">Our Product</h1>
						<nav class="wow fadeInUp">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Our Product</li>
							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->
    
    <div class="our-project">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">our Products</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Explore our latest Products</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row project-item-boxes">

                
                <?php
                $this->db->order_by('orderline asc');
                $product = $this->db->get_where('product',array('status'=>1))->result_object();
                foreach($product as $data)
                    { ?>
                <div class="col-lg-3 col-md-6 project-item-box solar power">
                    <div class="project-item">
                        <div class="project-image" data-cursor-text="View">
                            <a href="<?=base_url($data->slug) ?>">
                                <figure>
                                    <img src="<?=base_url('media/uploads/product/'.$data->image) ?>" alt="">
                                </figure>
                            </a>
                        </div>
                        <div class="project-content">
                            <h3><?=@$data->name ?></h3>
                            <div class="project-readmore-btn">
                                <a href="<?=base_url($data->slug) ?>" class="btn-default btn-highlighted">read more</a>
                            </div>
                        </div>
                    </div>
                </div>

               <?php } ?>



            </div>
        </div>

    </div>

    
  <?php include('footer.php'); ?>