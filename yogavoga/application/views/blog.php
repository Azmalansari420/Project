
<?php $this->load->view('header'); ?>
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dez-bnr-inr" style="background-image:url(<?php echo base_url(); ?>images/background/bg9.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1>Blogs</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    <li>Blogs</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <div class="content-area">
            <div class="container">
                <div class="">
                    <!-- blog grid -->
                    <div id="masonry" class="row dez-blog-grid-2">
                        <?php
                        $this->db->order_by('id desc');
                        $bkidjkh = $this->crud->selectDataByMultipleWhere('blog',array('status'=>1,));
                        foreach($bkidjkh as $data)
                            { ?>

                        <div class="post card-container col-lg-6 col-sm-6 col-md-6 col-12">
                            <div class="blog-post blog-grid date-style-2">
                                <div class="dez-post-media dez-img-effect zoom-slow"> 
                                    <a href="<?php echo base_url('blog-details/'.$data->slug); ?>">
                                        <img src="<?php echo base_url(); ?>media/uploads/blog/<?php echo $data->image; ?>" alt="">
                                    </a> 
                                </div>
                                <div class="dez-post-info">
                                    <div class="dez-post-title ">
                                        <h3 class="post-title"><a href="<?php echo base_url('blog-details/'.$data->slug); ?>"><?php echo $data->name; ?></a></h3>
                                    </div>
                                    
                                    <div class="dez-post-text">
                                        <p><?php echo substr($data->content,0,100); ?></p>
                                    </div>
                                    <div class="dez-post-readmore"> 
                                        <a href="<?php echo base_url('blog-details/'.$data->slug); ?>" title="READ MORE" rel="bookmark" class="site-button-link">READ MORE<i class="fas fa-angle-double-right"></i></a> 
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                    </div>
                    <!-- blog grid END -->
                    <!-- Pagination start -->
                    <!-- <div class="pagination-bx ">
                        <ul class="pagination">
                            <li class="previous"><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li class="next"><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                        </ul>
                    </div> -->
                    <!-- Pagination END -->
                </div>
            </div>
        </div>
    </div>
    <!-- Content END-->
  <?php $this->load->view('footer'); ?>