<?php $this->load->view('header'); ?>


    <!-- end of header area -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Blog</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- end of page header -->
    <section class="blog-page-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    <?php
                    $this->db->order_by('id desc');
                    $bkpoj = $this->crud->selectDataByMultipleWhere('blog',array('status'=>1,));
                    foreach($bkpoj as $data)
                        { ?>

                    <div class="single-blog">
                        <div class="blog-thumb">
                            <a href="<?php echo base_url('blog-details/'.$data->slug); ?>">
                                <img src="<?php echo base_url(); ?>media/uploads/blog/<?php echo $data->image; ?>" alt="">
                            </a>
                        </div>
                        <a href="<?php echo base_url('blog-details/'.$data->slug); ?>" class="blog-title"><?php echo $data->title; ?></a>
                                            
                        <p><?php echo substr($data->content,0,100); ?></p>
                        <a href="<?php echo base_url('blog-details/'.$data->slug); ?>" class="btn btn-primary btn-sm">Read More</a>
                    </div>

                <?php } ?>


                   
                  
                </div>
                <div class="col-md-4">
                    <div class="sidebar-area">
                        
                       
                        <div class="single-sidebar">
                            <h4 class="sidebar-title">Latest Post</h4>
                            <ul class="latest-post">
                                <?php
                    $this->db->order_by('id desc');
                    $bkpoj = $this->crud->selectDataByMultipleWhere('blog',array('status'=>1,));
                    foreach($bkpoj as $data)
                        { ?>
                                <li>
                                    <a href="<?php echo base_url('blog-details/'.$data->slug); ?>">
                                        <div class="post-img">
                                            <img src="<?php echo base_url(); ?>media/uploads/blog/<?php echo $data->image; ?>" alt="">
                                        </div>
                                        <div class="post-content">
                                            <h5><?php echo $data->title; ?></h5>
                                            <!-- <div class="date">
                                                January 18, 2018
                                            </div> -->
                                        </div>
                                    </a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
 

<?php $this->load->view('footer'); ?>
