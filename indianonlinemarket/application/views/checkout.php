<?php 
$userdetails = $this->crud->selectDataByMultipleWhere('tbl_admin',array('id'=>temp_session_id()));

 $coponapply = $this->db->get_where('order_coupon',array('user_id'=>temp_session_id(),"status"=>0,))->result_object();
$coupon = 0;
if(!empty($coponapply[0]->coupon)) 
{
    $coupon = $coponapply[0]->coupon;
}
$applied_coupon = applied_coupon($coupon,'');

// print_r($applied_coupon);

include('header.php'); ?>

    <!-- Banner Area -->
    <section id="common_banner_one">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_banner_text">
                        <h2>Checkout</h2>
                        <ul>
                            <li><a href="<?=base_url() ?>">Home</a></li>
                            <li><i class="fas fa-slash"></i></li>
                            <li class="active">Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
$sub_total = 0; 
$shipping_charge = shippingcharge;
$this->db->order_by('id desc');
$cartpro = $this->crud->selectDataByMultipleWhere('add_to_temp_cart',array('temp_user_id'=>temp_session_id()));
if(!empty($cartpro)) 
{
?>
    <!-- Checkout-Area -->
    <section id="checkout_one" class="ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="checkout-area-bg bg-white">
                        <div class="check-heading">
                            <h3>Billings Information</h3>
                        </div>
                        <div class="check-out-form">
                            <div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="fname">First name</label>
                                            <input type="text" required="" class="form-control" id="firstname"
                                                placeholder="First name *">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="lname">Last name</label>
                                            <input type="text" required="" class="form-control" id="lastname"
                                                placeholder="Last name *">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="cname">Company Name</label>
                                            <input class="form-control" required="" type="text" id="companyname"
                                                placeholder="Company Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="email">Email Addresse</label>
                                            <input class="form-control" required="" type="text" id="email"
                                                placeholder="info@gmail.com">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="mobile">Mobile</label>
                                            <input class="form-control" required="" type="text" id="mobile"
                                                placeholder="91xxxxx">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="country">Country</label>
                                            <select class="form-control first_null" id="country">
                                                <option value="India">India</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="zip">State</label>
                                            <input type="text" class="form-control" id="state" required=""
                                                placeholder="Enter Your State">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="zip">City</label>
                                            <input type="text" class="form-control" id="town_city" required=""
                                                placeholder="Enter Your City">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="zip">Zipcode</label>
                                            <input type="text" class="form-control" id="zip" required=""
                                                placeholder="Enter Your zipcode">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="faddress">Full Address</label>
                                            <textarea rows="5" class="form-control" id="street_address" placeholder="Enter your address here.."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="messages">Additional Notes</label>
                                            <textarea rows="5" class="form-control" id="order_notes"
                                                placeholder="Order notes"></textarea>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="order_review  box-shadow bg-white">
                        <div class="check-heading">
                            <h3>Your Orders</h3>
                        </div>
                        <div class="table-responsive order_table">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($cartpro as $key => $value)
                                        {

                                            $product = $this->crud->selectDataByMultipleWhere('product',array('id'=>$value->p_id,));
                                            $price = 0;
                                            $this->db->group_by('price');
                                            $this->db->limit(1);
                                            $this->db->select("price");
                                            $price_arr = $this->db->get_where('all_images',array('p_id'=>$value->p_id,'color_id'=>$value->color_id,'size_id'=>$value->size_id,))->result_object();
                                            if(!empty($price_arr))
                                            {
                                                foreach ($price_arr as $key => $value2) 
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

                                    <tr>
                                        <td><?=$product[0]->name ?> <span class="product-qty">x <?=$value->quantity ?></span><br>
                                            Size:- <?php if(!empty($size_id)) echo $size_id[0]->name; ?><br>
                                            Color:- <?php if(!empty($color_id)) echo $color_id[0]->name; ?>
                                        </td>
                                        <td>₹ <?=number_format($product_total,2) ?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>SubTotal</th>
                                        <td class="product-subtotal">₹ <?php echo number_format($applied_coupon['sub_total'],2); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Shipping</th>
                                        <td>+₹ <?php echo number_format($applied_coupon['shipping_charge'],2); ?></td>
                                    </tr>
                                    <?php if($applied_coupon['discount_amount']>0){ ?>
                                    <tr>
                                        <th>Coupon Discount (<?php if($applied_coupon['type']==1)echo $applied_coupon['discount'].'%'; else echo 'Flat' ?>)</th>
                                        <td>-₹ <?php echo number_format($applied_coupon['discount_amount'],2); ?></td>
                                    </tr>
                                <?php } ?>
                                    <tr>
                                        <th>Total</th>
                                        <td class="product-subtotal">₹ <?php echo number_format($applied_coupon['after_discount_final_price'],2); ?></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="user-actions accordion">
                        <p><?php echo $this->session->flashdata('coupon_mesg'); ?></p>
                        <h3>
                            <i class="far fa-file"></i>
                            Have A Coupon?
                            <a class="Returning" href="#" data-bs-toggle="collapse" data-bs-target="#checkout_coupon" aria-expanded="true">Click here to enter your code</a>

                        </h3>
                        <div id="checkout_coupon" class="collapse checkout_coupon <?php if(!empty($coponapply[0]->coupon)) echo 'show';?>" data-parent="#checkout_coupon">
                            <div class="checkout_info">
                                <form action="<?php echo base_url('checkout/couponcode'); ?>" method="post">
                                    <input placeholder="Coupon code" type="text" name="coupon" value="<?php if(!empty($coponapply[0]->coupon)) echo $coponapply[0]->coupon; ?>">
                                    <button class="theme-btn-one btn btn-black-overlay btn-md" type="submit" name="submit">Apply coupon</button>
                                    <?php if(!empty($coponapply[0]->coupon))
                                        { ?>
                                            <a href="<?php echo base_url('checkout/delete_coupon'); ?>" class="btn btn-danger" name="submit" type="submit">Remove</a>
                                    <?php } ?>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="order_review bg-white" >
                        <!-- <div class="check-heading">
                            <h3>Payment</h3>
                        </div> -->
                        <div class="payment_method" >
                            <div class="payment_option">
                                <div class="custome-radio">
                                    <input class="form-check-input payment_method" required="" type="radio" name="payment_method"
                                        id="exampleRadios3" value="1" checked="">
                                    <label class="form-check-label" for="exampleRadios3">CASH ON DELIVARY</label>
                                    <p data-method="option3" class="payment-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                                </div>
                                <div class="custome-radio">
                                    <input class="form-check-input payment_method" type="radio" name="payment_method"
                                        id="exampleRadios5" value="2">
                                    <label class="form-check-label" for="exampleRadios5">PAY ONLINE</label>
                                    <p data-method="option5" class="payment-text">Pay via Online.</p>
                                </div>
                            </div>
                        </div> 
                        <a class="theme-btn-one btn-black-overlay btn_sm final-checkout" style="cursor: pointer;">Place Order</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } else { ?>
    <div class="col-lg-12 col-md-12 text-center">
        <img src="https://i.pinimg.com/736x/2e/ac/fa/2eacfa305d7715bdcd86bb4956209038--android.jpg" class="img-fluid">
    </div>
<?php } ?>

<?php include('footer.php'); ?>


<script>

  $(document).on("click", ".final-checkout",(function(e) {
    final_checkout();
  }));


    function final_checkout()
    {
        var firstname = $("#firstname").val();
        var lastname = $("#lastname").val();
        var companyname = $("#companyname").val();
        var email = $("#email").val();
        var mobile = $("#mobile").val();
        var country = $("#country").val();
        var state = $("#state").val();
        var town_city = $("#town_city").val();
        var zip = $("#zip").val();
        var street_address = $("#street_address").val();
        var order_notes = $("#order_notes").val();
        var payment_method = $('input[name="payment_method"]:checked').val();

        if(firstname=='')
        {
            toast_print("Enter Your First Name");
            return false;
        }
        if(lastname=='')
        {
            toast_print("Enter Your Last Name");
            return false;
        }
        if(mobile=='')
        {
            toast_print("Enter Your Mobile");
            return false;
        }
        if(street_address=='')
        {
            toast_print("Enter Your Address");
            return false;
        }


        var form = new FormData();
        form.append("firstname", firstname);
        form.append("lastname", lastname);
        form.append("companyname", companyname);
        form.append("email", email);
        form.append("mobile", mobile);
        form.append("country", country);
        form.append("state", state);
        form.append("town_city", town_city);
        form.append("zip", zip);
        form.append("street_address", street_address);
        form.append("order_notes", order_notes);
        form.append("payment_method", payment_method);

        var settings = {
          "url": "<?=base_url() ?>Checkout/final_cart",
          "method": "POST",
          "dataType": "json",
          "timeout": 0,
          "processData": false,
          "mimeType": "multipart/form-data",
          "contentType": false,
          "data": form
        };

        $.ajax(settings).done(function (response) {
          console.log(response);

          if(response.status==200)
          {
            window.location.href = response.url;
            // window.location.href = "<?=base_url() ?>Phonepay/pay?order_id="+response.data.order_id;
          }
        });
    }
</script>