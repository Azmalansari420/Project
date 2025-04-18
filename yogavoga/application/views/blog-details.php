<?php $this->load->view('header'); ?>
    <!-- Content -->
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dez-bnr-inr" style="background-image:url(<?php echo base_url(); ?>images/background/bg9.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1><?php echo $EDITDATA[0]->name; ?></h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    <li><?php echo $EDITDATA[0]->name; ?></li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <div class="content-area">
            <div class="container">
                <!-- blog start -->
                <div class="blog-post blog-single">
                    <div class="dez-post-title ">
                        <h3 class="post-title"><a href="#"><?php echo $EDITDATA[0]->name; ?></a></h3>
                    </div>
                    <div class="dez-post-meta m-b20">
                        <ul>
                            <li class="post-date"> <i class="far fa-calendar-alt"></i><strong><?php echo $EDITDATA[0]->addeddate; ?></strong></li>
                            
                        </ul>
                    </div>
                    <div class="dez-post-media dez-img-effect zoom-slow"> <a href="#"><img src="<?php echo base_url(); ?>media/uploads/blog/<?php echo $EDITDATA[0]->image; ?>" alt=""></a> </div>
                    <div class="dez-post-text">
                        <?php echo $EDITDATA[0]->content; ?>
                    </div>
                   
                </div>
              
                <!-- blog END -->
            </div>
        </div>
    </div>
    <!-- Content END-->
  <?php $this->load->view('footer'); ?>