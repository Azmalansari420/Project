<?php include('header.php'); ?>
        <main>
            
         <!-- breadcrumb-area -->
            <section class="breadcrumb-area d-flex align-items-center" style="background-image:url(<?=base_url() ?>img/bg/bdrc-bg.png)">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-lg-12">
                            <div class="breadcrumb-wrap text-left">
                                <div class="breadcrumb-title">
                                    <h2>Gallery</h2>    
                                    <div class="breadcrumb-wrap">
                              
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?=base_url() ?>">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Gallery </li>
                                    </ol>
                                </nav>
                            </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->
			 <!-- gallery-area -->
             <style>
                .gallery-image::before {
    content: "";
    font-family: "dripicons-v2" !important;
    position: absolute;
    background: transparent;
}
                 @media (min-width: 1500px) and (max-width: 1850px)
                {
                    .grid-item {
                        width: 30.5%;
                    }
                }
             </style>
            <section id="work" class="pt-120 pb-105">
             
                <div class="container-fluid"> 
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="masonry-gallery-huge">
                                <div class="grid row">
                                    <?php
                                    $this->db->order_by('id desc');
                                    $gallery = $this->crud->selectDataByMultipleWhere('gallery',array('status'=>1,));
                                    foreach($gallery as $data)
                                        { ?>
                                    <div class="col-lg-4 grid-item hover-zoomin financial">   
                                        <a href="<?=base_url() ?>media/uploads/gallery/<?=$data->image ?>" target="_blank">
                                            <figure class="gallery-image">
                                              <img src="<?=base_url() ?>media/uploads/gallery/<?=$data->image ?>" alt="img" class="img">      
                                                <!-- <figcaption>
                                                   <h4>Relax Yoga</h4>
                                                </figcaption> -->
                                            </figure>
                                        </a>
                                    </div>
                                  <?php } ?>
                                </div>
                            </div>
                        
                        </div>
                    
                    </div>
					
                </div>
            </section>
             <!-- gallery-area-end -->
         
        </main>
   <?php include('footer.php'); ?>
