<?php
$cate = $this->crud->selectDataByMultipleWhere('categories',array('id'=>$data->cat_id,));

$color_id = 0;
$this->db->group_by('color_id');
$this->db->limit(1);
$this->db->select("color_id");
$color_ar = $this->db->get_where('all_images',array('p_id'=>$data->id,))->result_object();
if(!empty($color_ar))
{
    foreach ($color_ar as $key => $value) 
    { 
        $color_id = $value->color_id;
        break;
    } 
}

$size_id = 0;
$this->db->group_by('size_id');
$this->db->limit(1);
$this->db->select("size_id");
$size_arr = $this->db->get_where('all_images',array('p_id'=>$data->id,))->result_object();
if(!empty($size_arr))
{
    foreach ($size_arr as $key => $value) 
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
$cut_price_arr = $this->db->get_where('all_images',array('p_id'=>$data->id,))->result_object();
if(!empty($cut_price_arr))
{
    foreach ($cut_price_arr as $key => $value) 
    { 
        $cut_price = $value->cut_price;
        break;
    } 
}


$stock = 0;
// $this->db->group_by('cut_price');
// $this->db->limit(1);
// $this->db->select("p_id,size_id,color_id");
// $stockscal = $this->db->get_where('all_images',array('p_id'=>$data->id,'color_id'=>$color_id,'size_id'=>$size_id))->result_object();
// if(!empty($stockscal))
// {
//     foreach ($stockscal as $key => $value) 
//     { 
       
//         $stock = $stockscal[0]->stock;
//         break;
//     } 
// }

// print_r($stock);




$this->db->group_by('color_id');
$stockscal = $this->db->get_where('all_images',array('p_id'=>$data->id,'color_id'=>$color_id,'size_id'=>$size_id))->result_object();
// print_r($stockscal[0]->stock);
?>
<div class="product_wrappers_one">
                            <div class="thumb">
                                <a href="<?=base_url('product-details/'.$data->slug) ?>" class="image">
                                    <img src="<?=base_url() ?>media/uploads/product/<?=$data->thumb_img ?>" alt="Product" />
                                    <img class="hover-image" src="<?=base_url() ?>media/uploads/product/<?=$data->thumb_img2 ?>" alt="Product" />
                                </a>
                                <span class="badges">
                                    <span class="hot">-<?php echo discount($cut_price,$price); ?>% off</span>
                                </span>
                                <div class="actions">
                                    <a style="cursor:pointer;" class="action wishlist add-to-wishlist-btn" title="Wishlist" data-p_id="<?=$data->id ?>" data-color_val="<?=$color_id ?>" data-size_val="<?=$size_id ?>">
                                        <i class="far fa-heart"></i>
                                    </a>
                                </div>
                                <?php if ($stockscal[0]->stock >= 0) { ?>
                                <button style="cursor:pointer;" data-p_id="<?=$data->id ?>" data-color_val="<?=$color_id ?>" data-size_val="<?=$size_id ?>" class="add-to-cart offcanvas-toggle">
                                    Add To Cart
                                </button>
                            <?php } ?>
                            </div>
                            <div class="content">
                                <h5 class="title">
                                    <a href="<?=base_url('product-details/'.$data->slug) ?>"><?=$data->name ?></a>
                                    
                                  <?php if (!empty($stockscal) && $stockscal[0]->stock <= 0) { ?>

                                    <b style="color:red;">OUT OF STOCK</b>
                                <?php } ?>
                                </h5>
                                <span class="price">
                                    <span class="new">₹ <?=number_format($price,2) ?></span>
                                    <span class="old">₹ <?=number_format($cut_price,2) ?></span>
                                </span>
                            </div>
                        </div>