<?php 
$search = $this->input->get('search');
include('header.php'); ?>
    <!-- Banner Area -->
    <section id="common_banner_one">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_banner_text">
                        <h2>Shop</h2>
                        <ul>
                            <li><a href="<?=base_url() ?>">Home</a></li>
                            <li><i class="fas fa-slash"></i></li>
                            <li class="active">Shop</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
<style>
     @media only screen and (min-width: 1025px) {
        .desktop-none {
            display:none !important;
        }
        .thumb {
            height: 330px;
        }
    } 
    @media only screen and (max-width: 1026px) {
        .mobile-none {
            display:none !important;
        }
        .col-lg-3.col-md-4.col-sm-6.col-12 {
            width: 50%;
        }
    } 

</style>

    <!-- Shop Main Area -->
    <section id="shop_main_area" class="ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="shop_sidebar_wrapper">
                        <div class="shop_Search">
                            <form action="<?=base_url('welcome/serch') ?>" method="get">
                                <input type="text" class="form-control" placeholder="Search..." name="search" value="<?php if(!empty($search)) echo $search; ?>">
                                <button type="submit" name="submit"><img src="<?=base_url() ?>assets/img/svg/search.svg" alt="img"></button>
                            </form>
                        </div>
                        <div class="shop_sidebar_boxed mobile-none">
                            <h4>Product Categories</h4>
                            <div class="footer-info-inner">
                                <ul>
                                     <?php
                                    $categories = $this->crud->selectDataByMultipleWhere('categories',array('status'=>1,));
                                    foreach($categories as $data)
                                        { ?>
                                    <li class="mb-2"><a href="<?=base_url('shop/'.$data->slug) ?>"><?=$data->name ?> </a></li>
                                <?php } ?>                                
                                </ul>
                            </div>                            
                        </div>
                       
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">

<?php
if(!empty($productlist))
{ ?>
                    <?php
                    foreach ($productlist as $key => $data) 
                        { 
                            $cate = $this->crud->selectDataByMultipleWhere('categories',array('id'=>$data->cat_id,));
                            

                            $color_id = 0;
                            $this->db->group_by('color_id');
                            $this->db->limit(1);
                            $this->db->select("color_id");
                            $color = $this->db->get_where('all_images',array('p_id'=>$data->id,))->result_object();
                            if(!empty($color))
                            {
                                foreach ($color as $key => $value) 
                                { 
                                    $color_id = $value->color_id;
                                    break;
                                } 
                            }
                            $size_id = 0;
                            $this->db->group_by('size_id');
                            $this->db->limit(1);
                            $this->db->select("size_id");
                            $color = $this->db->get_where('all_images',array('p_id'=>$data->id,))->result_object();
                            if(!empty($color))
                            {
                                foreach ($color as $key => $value) 
                                { 
                                    $size_id = $value->size_id;
                                    break;
                                } 
                            }
                            $price = 0;
                            $this->db->group_by('price');
                            $this->db->limit(1);
                            $this->db->select("price");
                            $price_arr = $this->db->get_where('all_images',array('p_id'=>$data->id,))->result_object();
                            if(!empty($price_arr))
                            {
                                foreach ($price_arr as $key => $value) 
                                { 
                                    $price = $value->price;
                                    break;
                                } 
                            }

                            $cut_price = 0;
                            $this->db->group_by('cut_price');
                            $this->db->limit(1);
                            $this->db->select("cut_price");
                            $cut_price = $this->db->get_where('all_images',array('p_id'=>$data->id,))->result_object();
                            if(!empty($cut_price))
                            {
                                foreach ($cut_price as $key => $value) 
                                { 
                                    $cut_price = $value->cut_price;
                                    break;
                                } 
                            }

                            // $allstock = $this->crud->selectDataByMultipleWhere('all_images',array(''))
                        ?>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product_wrappers_one">
                                <div class="thumb">
                                    <a href="<?=base_url('product-details/'.$data->slug) ?>" class="image">
                                        <img src="<?=base_url() ?>media/uploads/product/<?=$data->thumb_img ?>" alt="Product" />
                                        <img class="hover-image" src="<?=base_url() ?>media/uploads/product/<?=$data->thumb_img2 ?>"
                                            alt="Product" />
                                    </a>
                                    <span class="badges">
                                        <span class="hot">-<?php echo discount($cut_price,$price); ?>% off</span>
                                    </span>
                                    <div class="actions">
                                        <a style="cursor:pointer;" class="action wishlist add-to-wishlist-btn" data-p_id="<?=$data->id ?>" data-color_val="<?=$color_id ?>" data-size_val="<?=$size_id ?>" title="Wishlist">
                                            <i class="far fa-heart"></i>
                                        </a>

                                        <!-- <a href="#" class="action quickview" data-link-action="quickview"
                                            title="Quick view" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalCenter">
                                            <i class="fas fa-expand"></i>
                                        </a> -->

                                    </div>
                                    <button data-p_id="<?=$data->id ?>" data-color_val="<?=$color_id ?>" data-size_val="<?=$size_id ?>" class="add-to-cart offcanvas-toggle">
                                        Add To Cart
                                    </button>
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="<?=base_url('product-details/'.$data->slug) ?>"><?=$data->name ?></a></h5>
                                    <span class="price">
                                        <span class="new">₹ <?=number_format($price,2) ?></span>
                                        <span class="old">₹ <?=number_format($cut_price,2) ?></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

<?php } else { ?>
    <div class="col-lg-12">
        <img src="https://atplonline.in/public/image/no-product-found.png" class="img-fluid">
    </div>

<?php } ?>
                    </div>
                </div>
                
            </div>

        </div>
    </section>

  
<?php include('footer.php'); ?>