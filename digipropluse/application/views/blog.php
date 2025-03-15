<?php include('header.php'); ?>

    <main>
        <!-- Page banner area start here -->
        <section class="banner__inner-page bg-image pt-50 pb-50 bg-image"
            data-background="assets/images/banner/banner-inner-page.jpg">
            <div class="shape2 wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                <img src="assets/images/banner/inner-banner-shape2.png" alt="shape">
            </div>
            <div class="shape1 wow slideInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                <img src="assets/images/banner/inner-banner-shape1.png" alt="shape">
            </div>
            <div class="shape3 wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                <img class="sway__animationX" src="assets/images/banner/inner-banner-shape3.png" alt="shape">
            </div>
            <div class="container">
                <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Blog</h2>
                <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <a href="index.html">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>Blog</span>
                </div>
            </div>
        </section>
        <!-- Page banner area end here -->

        <!-- Blog area start here -->
        <section class="blog-area pt-120 pb-120">
            <div class="container">
                <div class="row g-4">
                    <?php
                    $this->db->order_by('id desc');
                    $partner = $this->db->get_where('blog',array('status'=>1))->result_object();
                    foreach($partner as $data)
                        { ?>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="00ms"
                        data-wow-duration="1500ms">
                        <div class="blog__item">
                            <a href="<?=base_url($data->slug) ?>" class="blog__image d-block image">
                                <img src="<?=base_url() ?>media/uploads/blog/<?=$data->image ?>" alt="image">
                                <div class="blog-tag">
                                    <h3 class="text-white"><?=date('d',strtotime($data->addeddate)) ?></h3>
                                    <span class="text-white"><?=date('M',strtotime($data->addeddate)) ?></span>
                                </div>
                            </a>
                            <div class="blog__content">
                                
                                 <h3><a href="<?=base_url($data->slug) ?>" class="primary-hover"><?=$data->name ?></a></h3>
                                <a class="mt-25 read-more-btn" href="<?=base_url($data->slug) ?>">Read More <i
                                        class="fa-regular fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                   
                </div>
               
            </div>
        </section>
        <!-- Blog area end here -->
    </main>

    <?php include('footer.php'); ?>