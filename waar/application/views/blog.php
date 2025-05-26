<?php include('header.php'); ?>

    <div class="inner-page-wrapper float-left" style="background-image: url(<?=base_url() ?>media/blog.jpeg);">
        <div class="inner-head">
            <h1 style="color: black;">Blog</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="<?=base_url() ?>" style="color: black;">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page" style="color: black;">Blog</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- banner-section-end -->

    <!-- blog-start -->

    <div class="blog-wrapper-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="blog-section">

                         <?php
                        $this->db->order_by('id desc');
                        $blof = $this->crud->selectDataByMultipleWhere('blog',array('status'=>1,));
                        foreach($blof as $data)
                            { ?> 
                        <div class="blog-img-section">
                            <div class="blog-img">
                                <img src="<?=base_url() ?>media/uploads/blog/<?=$data->image ?>" alt="image">
                            </div>
                            <div class="blog-img-content">
                                <div class="blog-read">
                                    <span><?=date('d M, Y',strtotime($data->addeddate)) ?></span>
                                    <h4><a href="<?php echo base_url('blog-details/'.$data->slug) ?>"><?=$data->name ?></a>
                                    </h4>
                                    <a href="<?php echo base_url('blog-details/'.$data->slug) ?>" class="rm-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                     
                      
                    </div>
                   
                </div>


                <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="bb-sidebar-wrapper">
                      <!--   <div class="sidebar-head">
                            <h6>Search Keywords</h6>
                        </div> -->
                        <!-- <div class="sidebar-body">
                            <div class="search-blog">
                                <input type="search" placeholder="Search">
                                <a href="javascript:;"><i class="fas fa-search"></i></a>
                            </div>
                        </div> -->
                       <!--  <div class="blog-category">
                            <div class="sidebar-head">
                                <h6>Categories</h6>
                            </div>
                            <div class="sidebar-body">
                                <div class="category-menu">
                                    <ul>
                                        <li><a href="blog.php"><i class="fas fa-long-arrow-alt-right"></i>
                                                Care Essentials</a>
                                        </li>
                                        <li>
                                            <a href="blog.php"><i class="fas fa-long-arrow-alt-right"></i>
                                                Interesting to know</a>
                                        </li>
                                        <li>
                                            <a href="blog.php"><i class="fas fa-long-arrow-alt-right"></i>
                                                Manicure</a>
                                        </li>
                                        <li>
                                            <a href="blog.php"><i class="fas fa-long-arrow-alt-right"></i>
                                                Media</a>
                                        </li>
                                        <li>
                                            <a href="blog.php"><i class="fas fa-long-arrow-alt-right"></i>
                                                Nail Repair</a>
                                        </li>
                                        <li>
                                            <a href="blog.php"><i class="fas fa-long-arrow-alt-right"></i>
                                                Predicure</a>
                                        </li>
                                        <li>
                                            <a href="blog.php"><i class="fas fa-long-arrow-alt-right"></i>
                                                Style</a>
                                        </li>
                                        <li>
                                            <a href="blog.php"><i class="fas fa-long-arrow-alt-right"></i>
                                                Trends</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> -->
                       
                     
                     
                        <div class="recent-blog">
                            <div class="sidebar-head" style="background-color: #911439;
    padding: 10px 10px;
    text-align: left;
    width: 152px;">
                                <h6>Recent Posts</h6>
                            </div>
                            <div class="sidebar-body">
                                <?php
                                $this->db->limit('10');
                        $this->db->order_by('id desc');
                        $blof = $this->crud->selectDataByMultipleWhere('blog',array('status'=>1,));
                        foreach($blof as $data)
                            { ?>
                                <div class="recent-wrapper">
                                    <div class="recent-img">
                                        <img src="<?=base_url() ?>media/uploads/blog/<?=$data->image ?>" alt="img">
                                    </div>
                                    <div class="recent-content">
                                        <h6>
                                            <a href="<?php echo base_url('blog-details/'.$data->slug) ?>"><?=$data->name ?></a>
                                        </h6>
                                        <span><?=date('d M, Y',strtotime($data->addeddate)) ?></span>
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



   <?php include('footer.php'); ?>
