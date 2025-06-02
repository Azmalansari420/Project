<?php include('header.php'); ?>
    <!-- Banner Area -->
    <section id="common_banner_one">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_banner_text">
                        <h2>Category</h2>
                        <ul>
                            <li><a href="<?=base_url() ?>">Home</a></li>
                            <li><i class="fas fa-slash"></i></li>
                            <li class="active">Category</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Compare-Area -->
<style>
    .jewellary_product_img {
        position: relative;
        background: #eeeeee;
        padding: 8px 10px;
    }

    @media only screen and (min-width: 1025px) {
        .jewellary_product_img {
            height: 295px;
        }
        .jewellary_product_img a img {
            width: 100%;
            height: -webkit-fill-available;
        }
    } 
    @media only screen and (max-width: 1026px) {
        .mobile-none {
            display:none !important;
        }
    } 
</style>
    <section id="compare_area" class="ptb-100">
        <div class="container">
            
            <div class="row">
                <?php
                $categories = $this->crud->selectDataByMultipleWhere('categories',array('status'=>1,));
                foreach($categories as $data)
                    { ?>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="jewellary_product_card">
                        <div class="jewellary_product_img">
                            <a href="<?=base_url('shop/'.$data->slug) ?>">
                                <?php
                                if(!empty($data->image))
                                    { ?>
                                <img src="<?=base_url() ?>media/uploads/categories/<?=$data->image ?>" alt="img">
                            <?php }else{ ?>
                                <img src="<?=base_url() ?>media/uploads/categories/1701155804.jpg" alt="img">
                            <?php } ?>
                            </a>
                        </div>
                        <div class="jewellary_product_text">
                            <h3><a href="<?=base_url('shop/'.$data->slug) ?>"><?=$data->name ?></a></h3>
                        </div>
                    </div>
                </div>
            <?php } ?>
                                   
            </div>

        </div>
    </section>

   <?php include('footer.php'); ?>
