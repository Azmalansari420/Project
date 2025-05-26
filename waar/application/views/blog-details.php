<?php include('header.php'); ?>

    <div class="inner-page-wrapper float-left">
        <div class="inner-head">
            <h1><?=$EDITDATA[0]->name ?></h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="<?=base_url() ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?=$EDITDATA[0]->name ?></li>
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
                    <div class="blog-detail-section">
                        <div class="detail-img">
                            <img src="<?=base_url() ?>media/uploads/blog/<?=$EDITDATA[0]->image ?>" alt="img">
                        </div>
                        <div class="detail-content">
                            <span><?=date('d M, Y',strtotime($EDITDATA[0]->addeddate)) ?></span>
                            <h4><?=$EDITDATA[0]->name ?></h4>
                            <div class="detail-pera">
                                <?=$EDITDATA[0]->content ?>
                            </div>
                     
                           
                        </div>
                      
                    </div>
                  
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="bb-sidebar-wrapper">
                        <!-- <div class="sidebar-head">
                            <h6>Search Keywords</h6>
                        </div>
                        <div class="sidebar-body">
                            <div class="search-blog">
                                <input type="search" placeholder="Search">
                                <a href="javascript:;"><i class="fas fa-search"></i></a>
                            </div>
                        </div>
                        <div class="blog-category">
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
                            <div class="sidebar-head">
                                <h6>Recent Posts</h6>
                            </div>
                            <div class="sidebar-body">
                                <?php
                                        $this->db->order_by('id desc');
                                        $this->db->limit(10);
                                        $blof = $this->crud->selectDataByMultipleWhere('blog',array('status'=>1,));
                                        foreach($blof as $data)
                                            { ?>
                                <div class="recent-wrapper">
                                    <div class="recent-img">
                                        <img src="<?=base_url() ?>media/uploads/blog/<?=$data->image ?>" alt="img" style="width: ;">
                                    </div>
                                    <div class="recent-content">
                                        <h6>
                                            <a href="<?=base_url('blog-details/'.$data->slug) ?>"><?=$data->name ?></a>
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
 <style>
   .whats-app-number {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 30px #0000001a;
    -webkit-backdrop-filter: blur(5.9px);
    backdrop-filter: blur(5.9px);
    background: rgba(0,0,0,1);
    position: fixed;
    top: 86%;
    right: 5%;
    z-index: 11;
}
</style>
<a href="https://wa.me/917259346805" target="_blank" class="whats-app-number">
         <svg xmlns="http://www.w3.org/2000/svg" width="21.614" height="21.614" viewBox="0 0 21.614 21.614">
            <path id="Icon_awesome-whatsapp" data-name="Icon awesome-whatsapp" d="M18.377,5.391A10.714,10.714,0,0,0,1.52,18.316L0,23.864l5.679-1.491a10.678,10.678,0,0,0,5.119,1.3h0A10.814,10.814,0,0,0,21.614,12.965a10.753,10.753,0,0,0-3.237-7.575ZM10.8,21.871a8.886,8.886,0,0,1-4.535-1.24l-.323-.193-3.368.883.9-3.286L3.261,17.7A8.919,8.919,0,1,1,19.8,12.965a9,9,0,0,1-9,8.906ZM15.685,15.2c-.265-.135-1.582-.782-1.829-.868s-.425-.135-.6.135-.69.868-.849,1.052-.314.2-.579.068a7.285,7.285,0,0,1-3.643-3.184c-.275-.473.275-.439.786-1.462a.5.5,0,0,0-.024-.468c-.068-.135-.6-1.452-.825-1.988s-.439-.449-.6-.458-.333-.01-.511-.01a.991.991,0,0,0-.714.333,3.007,3.007,0,0,0-.936,2.234,5.243,5.243,0,0,0,1.09,2.769A11.959,11.959,0,0,0,11.019,17.4a5.237,5.237,0,0,0,3.213.671,2.741,2.741,0,0,0,1.8-1.274,2.238,2.238,0,0,0,.154-1.274C16.128,15.4,15.95,15.334,15.685,15.2Z" transform="translate(0 -2.25)" fill="#fff"></path>
         </svg>
      </a>