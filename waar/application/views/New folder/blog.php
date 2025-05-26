<?php include('header.php'); ?>
        <main>
            
            <!-- breadcrumb-area -->
            <section class="breadcrumb-area d-flex align-items-center" style="background-image:url(<?=base_url() ?>img/bg/bdrc-bg.png)">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-lg-12">
                            <div class="breadcrumb-wrap text-left">
                                <div class="breadcrumb-title">
                                    <h2>Our Blogs</h2>    
                                    <div class="breadcrumb-wrap">
                              
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?=base_url() ?>">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Our Blogs </li>
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
                 <!-- Classes-area -->
            <section class="class-area fix p-relative pt-110 pb-90" style="background: #f6f8fc;">   
                <div class="animations-01"><img src="<?=base_url() ?>img/bg/an-img-01.png" alt="an-img-01"></div>
                <div class="animations-02"><img src="<?=base_url() ?>img/bg/an-img-02.png" alt="contact-bg-an-01"></div>
                <div class="container">  
                   <div class="row"> 
                    <?php
                        $this->db->order_by('id desc');
                        $blof = $this->crud->selectDataByMultipleWhere('blog',array('status'=>1,));
                        foreach($blof as $data)
                            { ?>                  
                       <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="class-item mb-30">
                                <div class="class-img hover-zoomin">
                                    <div class="class-img-outer">
                                        <img src="<?=base_url() ?>media/uploads/blog/<?=$data->image ?>" alt="class image">
                                    </div>                                    
                                </div>
                                <div class="class-content">
                                    <h4 class="title"><a href="<?php echo base_url('blog-details/'.$data->slug) ?>"><?=$data->name ?></a></h4>
                                    <p><?=substr($data->content,0,100) ?></p>
                                </div>
                               
                            </div>
                        </div>
                        <?php } ?>
                        
                    </div>
                </div>
            </section>
           
         
        </main>

<?php include('footer.php'); ?>
