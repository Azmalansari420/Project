<?php $this->load->view('header');
 $this->db->order_by('id desc');
$wishlist = $this->crud->selectDataByMultipleWhere('add_to_wishlist',array('temp_user_id'=>temp_session_id()));
?>
    <!-- Banner Area -->
    <section id="common_banner_one">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_banner_text">
                        <h2>Wishlist</h2>
                        <ul>
                            <li><a href="<?=base_url() ?>">Home</a></li>
                            <li><i class="fas fa-slash"></i></li>
                            <li class="active">Wishlist</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Checkout-Area -->
    <section id="Wishlist_area" class="ptb-100">
        <div class="container">
            <div class="row">
<?php
        if(!empty($wishlist))
        {
        ?>
                <div class="col-12">
                    <div class="table_desc">
                        <div class="table_page table-responsive">
                            <table>
                                <!-- Start Wishlist Table Head -->
                                <thead>
                                    <tr>
                                        <th class="product_remove">Remove</th>
                                        <th class="product_thumb">Image</th>
                                        <th class="product_name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product_stock">Stock Status</th>
                                        <th class="product_addcart">Add To Cart</th>
                                    </tr>
                                </thead> <!-- End Cart Table Head -->
                                <tbody>
                                    <?php
                                    
                                    foreach($wishlist as $data)
                                        {
                                        
                                        $product = $this->crud->selectDataByMultipleWhere('product',array('id'=>$data->p_id,));

                                        
                                        $price = 0;
                                        $this->db->group_by('price');
                                        $this->db->limit(1);
                                        $this->db->select("price");
                                        $color = $this->db->get_where('all_images',array('p_id'=>$data->p_id,))->result_object();
                                        if(!empty($color))
                                        {
                                            foreach ($color as $key => $value) 
                                            { 
                                                $price = $value->price;
                                                break;
                                            } 
                                        }


                                        $size_id = $this->crud->selectDataByMultipleWhere('size',array('id'=>$data->size_id));
                                        $color_id = $this->crud->selectDataByMultipleWhere('color',array('id'=>$data->color_id));

                                                                              
                                         ?>
                                    <tr>
                                        <td class="product_remove"><a class="delete-wishlist-btn" data-id="<?=$data->id ?>"><i class="far fa-trash-alt"></i></a></td>
                                        <td class="product_thumb">
                                            <a href="<?php echo base_url('product-details/'.$product[0]->slug); ?>">
                                                <img src="<?php echo base_url(); ?>media/uploads/product/<?php echo $product[0]->thumb_img; ?>" alt="img">
                                            </a>
                                        </td>
                                        <td class="product_name">
                                            <a href="<?php echo base_url('product-details/'.$product[0]->slug); ?>">
                                                <?=$product[0]->name ?><br>
                                                Size = <?php if(!empty($size_id)) echo $size_id[0]->name; ?>
                                                <br>
                                                Color:- <?php if(!empty($color_id)) echo $color_id[0]->name; ?>
                                            </a>
                                        </td>
                                        <td class="product-price">₹ <?=number_format($price,2) ?></td>
                                        <td class="product_stock">
                                            <h6>In Stock</h6>
                                        </td>
                                        <td class="product_addcart">
                                            <a style="cursor:pointer;" class="theme-btn-one btn-black-overlay btn_sm add-to-cart-from-wishlist-btn" data-id="<?=$data->id ?>">Add To
                                                Cart</a>
                                        </td>
                                    </tr>

                                    <?php } ?>
                                 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
<?php } else { ?>
            <div class="col-12 text-center">
                <img src="https://i.pinimg.com/originals/f6/e4/64/f6e464230662e7fa4c6a4afb92631aed.png" class="img-fluid">
            </div>
        <?php }  ?>
            </div>
        </div>
    </section>


<?php include('footer.php'); ?>

<script>
  id = 0;
  $(document).on("click", ".add-to-cart-from-wishlist-btn",(function(e) {
    id = $(this).data("id");
    add_cart_from_wishlist();
  }));


    function add_cart_from_wishlist()
    {
        var form = new FormData();
        form.append("id", id);

        var settings = {
          "url": "<?=base_url() ?>Wishlist/add_to_cart_from_wishlist",
          "method": "POST",
          "dataType": "json",
          "timeout": 0,
          "processData": false,
          "mimeType": "multipart/form-data",
          "contentType": false,
          "data": form
        };

        $.ajax(settings).done(function (response) {
          // console.log(response);
          if(response.status==200)
          {
            setTimeout(function() {
            $(".toastBox").removeClass("toaster-active");
                toast_print(response.message)
                location.reload();
            }, 2000); 
          }
          $(".toastBox").removeClass("toaster-active");
          toast_print(response.message)
        });
    }

     $(document).on("click", ".add-to-cart-from-wishlist-btn, .delete-wishlist-btn",(function(e) {
        $(this).parent().parent().remove();
    }));

    /*---------remove wishlist-------*/

     $(document).on("click", ".delete-wishlist-btn",(function(e) {
        id = $(this).data("id");
        remove_wishlist();
      }));

     function remove_wishlist()
     {
        var form = new FormData();
        form.append("id", id);

        var settings = {
          "url": "<?=base_url() ?>Wishlist/delete_wishlist",
          "method": "POST",
          "dataType": "json",
          "timeout": 0,
          "processData": false,
          "mimeType": "multipart/form-data",
          "contentType": false,
          "data": form
        };

        $.ajax(settings).done(function (response) {
          // console.log(response);
          if(response.status==200)
          {
            setTimeout(function() {
            $(".toastBox").removeClass("toaster-active");
                toast_print(response.message)
                location.reload();
            }, 2000); 
          }
          $(".toastBox").removeClass("toaster-active");
          toast_print(response.message)
        });
     }
</script>
