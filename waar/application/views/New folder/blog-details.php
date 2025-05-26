<?php include('header.php'); ?>
        <main>
            
            
            <!-- breadcrumb-area -->
          <section class="breadcrumb-area d-flex align-items-center" style="background-image:url(<?=base_url() ?>img/bg/bdrc-bg.png);">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-lg-12">
                            <div class="breadcrumb-wrap text-left">
                                <div class="breadcrumb-title">
                                    <h2><?=$EDITDATA[0]->name ?></h2>    
                                    <div class="breadcrumb-wrap">
                              
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?=base_url() ?>">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page"><?=$EDITDATA[0]->name ?></li>
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
            <!-- inner-blog -->
            <section class="inner-blog b-details-p pt-120 pb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="blog-details-wrap">
                                <div class="details__content pb-30">
                                    <h2><?=$EDITDATA[0]->name ?></h2>
                                    <div class="meta-info">
                                        <ul>
                                            <li><i class="fal fa-calendar-alt"></i> <?=date('d M, Y',strtotime($EDITDATA[0]->addeddate)) ?></li>
                                        </ul>
                                    </div>
                                    <div class="details__content-img">
                                        <img src="<?=base_url() ?>media/uploads/blog/<?=$EDITDATA[0]->image ?>" alt="">
                                    </div>
                                    <?=$EDITDATA[0]->content ?>
                                </div>

                            </div>
                        </div>
                         <!-- #right side -->
                        <div class="col-sm-12 col-md-12 col-lg-4">
                           <aside class="sidebar-widget">
                              
                              
                              <section id="recent-posts-4" class="widget widget_recent_entries">
                                 <h2 class="widget-title">Recent Posts</h2>
                                 <ul>
                                     <?php
                                        $this->db->order_by('id desc');
                                        $this->db->limit(10);
                                        $blof = $this->crud->selectDataByMultipleWhere('blog',array('status'=>1,));
                                        foreach($blof as $data)
                                            { ?>
                                    <li>
                                       <a href="<?=base_url('blog-details/'.$data->slug) ?>"><?=$data->name ?></a><br>
                                       <span class="post-date"><?=date('d M, Y',strtotime($data->addeddate)) ?></span>
                                    </li>
                                    <?php } ?>
                                 </ul>
                              </section>
                           </aside>
                        </div>
                        <!-- #right side end -->
                    </div>
                </div>
            </section>
            <!-- inner-blog-end -->
        
         
        </main>
<?php include('footer.php'); ?>
