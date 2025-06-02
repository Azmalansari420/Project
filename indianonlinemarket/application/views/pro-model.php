<?php
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
$color = $this->db->get_where('all_images',array('p_id'=>$data->id,))->result_object();
if(!empty($color))
{
    foreach ($color as $key => $value) 
    { 
        $price = $value->price;
        break;
    } 
}



?>

        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="product_one_modal_top modal-content">
                <button type="button" class="close close_modal_icon" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                </button>
                <div class="modal-body" id="product_slider_one">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-sm-12 col-12">
                            <div class="products_modal_sliders owl-carousel owl-theme">
                                <img src="<?=base_url() ?>media/uploads/product/<?=$data->thumb_img ?>" alt="img" />
                                <img src="<?=base_url() ?>media/uploads/product/<?=$data->thumb_img2 ?>" alt="img" />
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6 col-sm-12 col-12">
                            <div class="modal_product_content_one">
                                <h3><?=$data->name ?></h3>
                                <div class="reviews_rating">
                                    <?php
                                    $i=1;
                                    while($i<=5)
                                    {
                                        if($i<=$data->rating)
                                            {  ?>
                                    <i class="fas fa-star"></i>
                                    <?php } else { ?>
                                    <?php } $i++; } ?>
                                </div>
                                <h4>₹ <?=number_format($price,2) ?></h4>
                                <?=$data->small_info ?>
                                <div class="variable-single-item">
                                    <span>Avaliable Color</span>
                                    <div class="product-variable-color">
                                        <?php
                                        $this->db->order_by('id desc');
                                        $this->db->group_by('color_id');
                                        $color = $this->db->get_where('all_images',array('p_id'=>$data->id,))->result_object();

                                        if(!empty($color))
                                        {
                                            foreach ($color as $key => $value) 
                                                { 
                                        $color_name = $this->db->get_where('color',array('id'=>$value->color_id))->result_object();
                                        ?>
                                        <label for="modal-product-color-red1">
                                            <input name="modal-product-color" id="modal-product-color-red1" class="color-select" >
                                            <span class="product-color-red" style="background: <?=$color_name[0]->color_code ?>;"></span>
                                        </label>
                                        <?php } } ?>
                                    </div>
                                </div>
                                <form action="#!" id="product_count_form_one">
                                    <div class="product_count_one">
                                        <a href="<?=base_url('product-details/'.$data->slug) ?>" class="theme-btn-one btn-black-overlay btn_sm">Click to View</a>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>