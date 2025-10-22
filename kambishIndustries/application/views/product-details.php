
 <?php include('header.php'); ?>
    <!-- Page Header Start -->
	<div class="page-header parallaxie" style="background-image: linear-gradient(rgba(0, 0, 0, 0) 0%, rgba(14, 13, 27, 0.55) 40.5%), url();">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-3 text-dark" data-cursor="-opaque"><?=@$EDITDATA[0]->name ?></h1>
						<nav class="wow fadeInUp">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="">home</a></li>
								<li class="breadcrumb-item"><a href="">Product</a></li>
								<li class="breadcrumb-item active" aria-current="page"><?=@$EDITDATA[0]->name ?></li>
							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->

<?php
$getimage = json_decode($EDITDATA[0]->multiple_image_json);

?>

<style>
.slide-image {
    width: 100%;
    height: 60vh; /* screen ki height ka 60% */
    max-height: 600px; /* optional: bade screens par limit */
    overflow: hidden;
}

.slide-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}



</style>
    
    <!-- Page Project Single Start -->
    <div class="page-project-single" >
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5">
                    <?php
                    if(!empty($getimage))
                    { ?>
                    <div class="project-single-slider">
                        <div class="swiper project-slider">
                            <div class="swiper-wrapper" data-cursor-text="Drag">
                                <?php
                                foreach($getimage as $value)
                                        { ?>

                                <div class="swiper-slide">
                                    <div class="slide-image">
                                        <img src="<?=base_url("media/uploads/product/".$value) ?>" alt="">
                                    </div>
                                </div>
                                <?php }  ?>
                            </div>
                        </div>   
                        
                        <div class="swiper project-slider-item">
                            <div class="swiper-wrapper">
                                <?php
                                foreach($getimage as $value)
                                        { ?>
                                <div class="swiper-slide" data-cursor-text="Click">
                                    <img src="<?=base_url("media/uploads/product/".$value) ?>" alt="">
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                    <div class="contact-form-btn text-center">
                        <button type="button" id="openEnquiry" class="btn btn-default">Enquiry Now</button>
                    </div>

                        
                </div>

                <div class="col-lg-8">
                    <div class="project-single-content">
                        <div class="project-meta">
                            <h3 class="text-anime-style-3"><?=@$EDITDATA[0]->name ?></h3>
                            <?=@$EDITDATA[0]->content ?>
                        </div>
                    </div>
                </div>

                

            </div>
        </div>
    </div>
    <!-- Page Project Single End -->


<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Enquiry Now</h4>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('welcome/enquiry_form') ?>" method="POST" >
            <div class="row contact-us-form">
                <div class="form-group col-md-6 mb-4">
                    <label>Your Name</label>
                    <input type="text" name="name" class="form-control" id="fullname" placeholder="Enter Full Name" required>
                </div>

                <div class="form-group col-md-6 mb-4">
                    <label>Your Email</label>
                    <input type="email" name ="email" class="form-control" id="email" placeholder="Enter Email" required>
                </div>

                <div class="form-group col-md-12 mb-4">
                    <label>Mobile</label>
                    <input type="text" name="mobile" class="form-control" id="phone" placeholder="Enter Phone Number" required>
                </div>

                <div class="form-group col-md-12 mb-4">
                    <label>Subject</label>
                    <input type="text" name="subject" class="form-control" id="subject" placeholder="Enter Phone Number" required value="250 Ton machine">
                </div>

                <div class="form-group col-md-12 mb-4">
                    <label>Message</label>
                    <textarea name="message" class="form-control" id="msg" rows="4" placeholder="Type Message" ></textarea>
                </div>

                <div class="col-lg-12">
                    <div class="contact-form-btn">
                        <button type="submit" name="submit" class="btn-default">send message</button>
                    </div>
                </div>
            </div>
        </form>
      </div>
     
    </div>

  </div>
</div>

  

 <?php include('footer.php'); ?>


<script>
$(document).ready(function(){
  $("#openEnquiry").on("click", function(){
    $("#myModal").modal("show");
  });
});
</script>
