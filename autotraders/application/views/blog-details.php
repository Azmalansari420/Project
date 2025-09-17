<?php $this->load->view('header'); ?>
<style>
    .blog-thumb>a>img {
    height: 378px;
}
</style>
    <!-- end of header area -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2><?php echo $EDITDATA[0]->title; ?></h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Blog Details</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo $EDITDATA[0]->title; ?></li>
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
                    <div class="single-blog single-page">
                        <div class="blog-thumb">
                            <a href="#!"><img src="<?php echo base_url(); ?>media/uploads/blog/<?php echo $EDITDATA[0]->image; ?>" alt=""></a>
                            <div class="date"><?php echo $EDITDATA[0]->addeddate; ?></div>
                        </div>
                        <a href="#!" class="blog-title"><?php echo $EDITDATA[0]->title; ?></a>
                        <p><?php echo $EDITDATA[0]->content; ?></p>
                        
                    </div>
                 
                   
                   
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
                                            <div class="date">
                                                <?php echo $data->addeddate; ?>
                                            </div>
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

