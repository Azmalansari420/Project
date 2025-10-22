<?php include('header.php'); 
$about = $this->db->get_where('content',array('id'=>1))->result_object();
?>

    <!-- Page Header Start -->
	<div class="page-header parallaxie">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-3" data-cursor="-opaque">About Us</h1>
						<nav class="wow fadeInUp">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">home</a></li>
								<li class="breadcrumb-item active" aria-current="page">about us</li>
							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->
    
    <!-- Page About Us Start -->
    <div class="page-about-us">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-3">
                    <div>
                        <img src="<?=base_url() ?>media/uploads/content/<?=$about[0]->image ?>">
                    </div>
                </div>
                
                <div class="col-lg-9">
                    <!-- About Story Content Start -->
                    <div class="about-story-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Kambish Industries — <strong>Quality Without Compromise.</strong></h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Our Story Body Start -->
                        <div class="about-story-body wow fadeInUp" data-wow-delay="0.25s">
                            <?=@$about[0]->content ?>
                        </div>
                        

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page About Us End -->

    

    
  <?php include('footer.php'); ?>