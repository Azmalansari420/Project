<?php include('header.php'); ?>
    <!-- Banner Area -->
    <section id="common_banner_one">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_banner_text">
                        <h2>Cart</h2>
                        <ul>
                            <li><a href="<?=base_url() ?>">Home</a></li>
                            <li><i class="fas fa-slash"></i></li>
                            <li class="active">Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cart-Area -->
    <section id="cart_area_two" class="ptb-100">
        <div class="container">
            <div class="row">
<?php
$sub_total = 0; 
$shipping_charge = shippingcharge;
$this->db->order_by('id desc');
$cartpro = $this->crud->selectDataByMultipleWhere('add_to_temp_cart',array('temp_user_id'=>temp_session_id()));
if(!empty($cartpro)) 
{
?>
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="table_desc">
                        <div class="table_page table-responsive">
                            <table>
                                <!-- Start Cart Table Head -->
                                <thead>
                                    <tr>
                                        <th class="product_thumb">Image</th>
                                        <th class="product_name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product_quantity">Quantity</th>
                                        <th class="product_total">Total</th>
                                        <th class="product_remove">Remove</th>
                                    </tr>
                                </thead> <!-- End Cart Table Head -->
                                <tbody>
                                    <?php
                                    foreach ($cartpro as $key => $value)
                                        {

                                            $product = $this->crud->selectDataByMultipleWhere('product',array('id'=>$value->p_id,));
                                            $price = 0;
                                            $this->db->group_by('price');
                                            $this->db->limit(1);
                                            $this->db->select("price");
                                            $price_array = $this->db->get_where('all_images',array('p_id'=>$value->p_id,'color_id'=>$value->color_id,'size_id'=>$value->size_id,))->result_object();
                                            if(!empty($price_array))
                                            {
                                                foreach ($price_array as $key => $value2) 
                                                { 
                                                    $price = $value2->price;
                                                    break;
                                                } 
                                            }
                                            
                                           $size_id = $this->crud->selectDataByMultipleWhere('size',array('id'=>$value->size_id));
                                           $color_id = $this->crud->selectDataByMultipleWhere('color',array('id'=>$value->color_id));

                                            $product_total = 0;
                                            $product_total = $price*$value->quantity;
                                            $sub_total += $product_total;
                                            $finalprice = $sub_total+$shipping_charge;
                                        ?>
                                    <div>
                                        <tr>
                                            <td class="product_thumb">
                                                <a href="<?=base_url('product-details/'.$product[0]->slug) ?>">
                                                    <img src="<?php echo base_url(); ?>media/uploads/product/<?php echo $product[0]->thumb_img; ?>" alt="img"></a>
                                            </td>
                                            <td class="product_name">
                                                <a href="<?=base_url('product-details/'.$product[0]->slug) ?>"><?=$product[0]->name ?></a>
                                                <p>Size:- <?php if(!empty($size_id)) echo $size_id[0]->name; ?><br>
                                                    Color:- <?php if(!empty($color_id)) echo $color_id[0]->name; ?>
                                                </p>
                                            </td>
                                            <td class="product-price">₹ <?=number_format($price,2) ?></td>
                                            <td class="product_quantity">
                                                <div class="plus-minus-input">
                                                    <div class="input-group-button">
                                                        <button type="button" class="button quantity-update" data-id="<?php echo $value->id; ?>" data-quantity="minus"
                                                            data-field="quantity<?=$value->id ?>">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                    <input class="form-control" type="number" name="quantity<?=$value->id ?>" value="<?=$value->quantity ?>"  id="cart-quantity<?=$value->id ?>" min="1">

                                                    <div class="input-group-button " >
                                                        <button type="button" class="button quantity-update" data-quantity="plus" data-id="<?php echo $value->id; ?>"
                                                            data-field="quantity<?=$value->id ?>">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="product_total">₹ <?=number_format($product_total,2) ?></td>
                                            <td class="product_remove"><a data-id="<?=$value->id ?>" style="cursor: pointer;" class="delete-cart cart-page-btn"><i class="far fa-trash-alt"></i></a></td>
                                        </tr>
                                    </div> 
                                <?php } ?>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- <div class="coupon_inner_two">
                        <input class="mb-2" placeholder="Coupon code" type="text">
                        <button type="submit" class="theme-btn-one btn-black-overlay btn_sm">Apply coupon</button>
                    </div> -->
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="coupon_code right" data-aos="fade-up" data-aos-delay="400">
                        <h3>Cart Total</h3>
                        <div class="coupon_inner">
                            <div class="cart_subtotal">
                                <p>Subtotal</p>
                                <p class="cart_amount">₹ <?=number_format($sub_total,2) ?></p>
                            </div>
                            <div class="cart_subtotal ">
                                <p>Shipping</p>
                                <p class="cart_amount">₹+<?=number_format($shipping_charge,2) ?></p>
                            </div>

                            <div class="cart_subtotal">
                                <p>Total</p>
                                <p class="cart_amount">₹ <?=number_format($finalprice,2) ?></p>
                            </div>
                            <div class="checkout_btn">
                                <a href="<?=base_url() ?>checkout" class="theme-btn-one btn-black-overlay btn_sm">Proceed to
                                    Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
<?php } else { ?>
                <div class="col-lg-12 col-md-12 text-center">
                    <img src="https://i.pinimg.com/736x/2e/ac/fa/2eacfa305d7715bdcd86bb4956209038--android.jpg" class="img-fluid">
                </div>
<?php } ?>
            </div>
        </div>
    </section>

<?php include('footer.php'); ?>