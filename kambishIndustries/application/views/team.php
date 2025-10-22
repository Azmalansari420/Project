
 <?php include('header.php'); ?>
    <!-- Page Header Start -->
	<div class="page-header parallaxie">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-3" data-cursor="-opaque">Our Team</h1>
						<nav class="wow fadeInUp">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">home</a></li>
								<li class="breadcrumb-item active" aria-current="page">our team</li>
							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->
    
    <!-- Page Team Start -->
    <div class="page-team">
        <!-- Hr Department Team Start -->
        <div class="hr-department-team">
            <div class="container">

                <!-- <div class="row section-row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h3 class="wow fadeInUp"> hr and support</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Our hr department team</h2>
                        </div>
                    </div>
                </div> -->
                <style>
                    .team-member-item .team-image img {
                        border-radius: 10px;
                    }
                </style>
    
                <div class="row">


                    <?php
                        $this->db->order_by('orderline asc');
                        $product = $this->db->get_where('team',array('status'=>1))->result_object();
                        foreach($product as $data)
                            { ?>             
                    <div class="col-lg-3 col-md-6">
                        <div class="team-member-item wow fadeInUp">
                            <div class="team-image">
                                <figure>
                                    <img src="<?=base_url('media/uploads/team/'.$data->image) ?>" alt="">
                                </figure>
                            </div>
                            <div class="team-body">
                                <div class="team-content">
                                    <h3><?=$data->name ?></h3>
                                    <p><?=$data->position ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
    
                    
                </div>
            </div>
        </div>
    

    </div>
    <!-- Page Team End -->

 <?php include('footer.php'); ?>