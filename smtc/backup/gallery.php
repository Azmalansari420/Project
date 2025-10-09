<?php include ('header.php');?>
<style>
    .gallery{
        height:250px;
    }
</style>
<div class="pagehding-sec">
		<div class="images-overlay"></div>		
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="page-heading">
						<h1>Gallery</h1>
					</div>
					<div class="breadcrumb-list">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="#">Gallery</a></li>
						</ul>
					</div>					
				</div>				
			</div>
		</div>
	</div>
	<section style="margin-top:30px;">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-4">
	                <img class="img-responsive img-thumbnail gallery" src="img/img1.jpg">
	            </div>
	            <div class="col-md-4">
	                <img class="img-responsive img-thumbnail gallery" src="img/img2.jpg">
	            </div>
	            <div class="col-md-4">
	                <img class="img-responsive img-thumbnail gallery" src="img/img3.jpg">
	            </div>
	        </div>
	          <div class="row"style="margin-top:20px;">
	            <div class="col-md-4">
	                <img class="img-responsive img-thumbnail gallery" src="img/img4.jpg">
	            </div>
	            <div class="col-md-4">
	                <img class="img-responsive img-thumbnail gallery" src="img/img5.jpg">
	            </div>
	            <div class="col-md-4">
	                <img class="img-responsive img-thumbnail gallery" src="img/img6.jpg">
	            </div>
	        </div>
	    </div>
	</section>
<!--<div class="gallery-sec pt-100 pb-100">	
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="sec-title">
						<h1>Our Student Gallery</h1>
						<p></p>
					</div>
				</div>
			</div>		
			<div class="row">		
				<div class="gallery-area">	
					<!-- Gallery Filter Start --
					<div class="navbarsort">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarfiltr" aria-expanded="false">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>							
						</button>
						<div class="shorttitle">
							<h2>Sort Gallery</h2>
						</div>
					</div>	
					<!-- <div class="collapse navbar-collapse latest--project" id="navbarfiltr">
						<ul class="simplefilter">
							<li class="active" data-filter="*">All</li>
							<li data-filter=".institute">institute</li>						
							<li data-filter=".library">library</li>
							<li data-filter=".etertainment">etertainment</li>							
							<li data-filter=".classroom">classroom</li>						
						</ul>
					</div> -->
					<!-- Gallery Filter End -->
					<!-- Gallery container Start --
					<div class="gallery-container">			
						<!-- Gallery Item Block Start --
						<?php
						$fetch_gallery = $con->all_fetch("gallery", array('status' =>"Yes" ,'type'=>"Gallery" ));
						if(is_array($fetch_gallery) || is_object($fetch_gallery) && !empty($fetch_gallery)){
							foreach ($fetch_gallery as $f_g) {
							
						?>
						<div class="col-xs-6 col-sm-4 col-md-3 filtr-item etertainment">
							<div class="gallery-item">
								<img src="<?php echo AIP.$f_g->img; ?>" alt="" />
								<div class="gallery-overlay">
									<div class="gallery-overlay-text">
										<span class="gallery-button">
											<a href="web-admin/upload/<?php echo $f_g->img; ?>" class="gallery-photo"><i class="fa fa-file-image-o"></i></a>
										</span>
									</div>
								</div>
							</div>								
						</div>
						<?php

							}
						}

						?>								
						<!-- Gallery Item Block End --							
						<!-- Gallery Item Block Start --
																														
					</div>	
					<!-- Gallery container End -->
					<!-- Gallery Load More Button Start--
					
					<!-- Gallery Load More Button Start--
				</div>				
			</div>
		</div>
	</div>-->
     <?php include ('footer.php');?>
