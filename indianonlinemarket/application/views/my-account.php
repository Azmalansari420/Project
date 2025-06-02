<?php 
chech_user_login();
$user = temp_session_id();
$user_data = $this->crud->selectDataByMultipleWhere('tbl_admin',array('id'=>$user));
if(!empty($user_data))
    $user_data = $user_data[0];
// print_r($user_data);


include('header.php'); ?>

    <!-- Banner Area -->
    <section id="common_banner_one">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_banner_text">
                        <h2>My Account</h2>
                        <ul>
                            <li><a href="<?=base_url() ?>">Home</a></li>
                            <li><i class="fas fa-slash"></i></li>
                            <li class="active">My Account</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- My-account-area-Area -->
    <section id="my-account_area" class="ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-3">
                    <!-- Nav tabs -->
                    <div class="dashboard_tab_button">
                        <ul role="tablist" class="nav flex-column dashboard-list">
                            <li><a href="#!" data-bs-toggle="tab" data-bs-target="#dashboard" class=" active"><i
                                        class="fas fa-tachometer-alt"></i>Dashboard</a></li>
                            <li> <a href="#!" data-bs-toggle="tab" data-bs-target="#orders"><i
                                        class="fas fa-cart-arrow-down"></i>Orders</a></li>
                            <li>
                                <a href="<?=base_url() ?>cart">
                                    <i class='fas fa-shopping-bag'></i>Cart
                                </a>
                            </li>

                            <li>
                                <a href="<?=base_url() ?>wishlist">
                                    <i class='far fa-heart'></i>Wishlist
                                </a>
                            </li>

                            <li><a href="#!" data-bs-toggle="tab" data-bs-target="#account-details"><i
                                        class="fas fa-user"></i>Account
                                    details</a>
                            </li>
                            <li><a href="<?=base_url() ?>user/userlogout" class=""><i class="fas fa-sign-out-alt"></i>logout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-9">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard_content">
                        <div class="tab-pane fade show active" id="dashboard">
                            <div class="myaccount-content">
                                <h4 class="title">Dashboard </h4>
                                <p>From your account dashboard. you can easily check &amp; view your recent orders and Edit your password and account details.</p>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="orders">
                            <div class="myaccount-content">
                                <h4 class="title">Orders </h4>
                                <div class="table_page table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Order ID</th>
                                                <th>Date</th>
                                                <th>Total Price</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $i=0;
                                            $this->db->order_by('id desc');
                                            $temp = $this->crud->selectDataByMultipleWhere('finalorder',array('user_id'=>temp_session_id(),));
                                            foreach($temp as $data)
                                                { $i++;
                                                $orders = $this->crud->selectDataByMultipleWhere('orders',array('order_id'=>$data->order_id,));   
                                                $product = $this->crud->selectDataByMultipleWhere('product',array('id'=>$orders[0]->p_id,)); 
                                            ?>
                                            <tr>
                                                <td><?=$i ?></td>
                                                <td><?php echo $data->order_id; ?></td>
                                                <td><?php echo date('M d, Y',strtotime($data->addeddate)); ?></td>
                                                <td>₹ <?php echo number_format($data->after_discount_final_price,2); ?> for <?php 
                                                    $this->db->where('order_id',$data->order_id);
                                                    $query = $this->db->get('orders');
                                                    echo $query->num_rows(); ?> item </td>
                                                <td><?=order_status($data->status) ?></td>
                                                <td>
                                                    <a class="btn btn-sm btn-primary" target="_blank" href="<?php echo base_url('userinvoice/'.$data->id); ?>">view</a>
                                                    <br>
                                                    <?php
                                                    $addedDate = new DateTime($data->addeddate);
                                                    $currentDate = new DateTime(); // Current date
                                                    $interval = $addedDate->diff($currentDate); // Get the difference between dates
                                                    if($interval->days < 1) {
                                                    if($data->status!=6 && $data->status!=7 && $data->status!=8)
                                                        { ?>
                                                    
                                                    <a class="mt-2 btn btn-sm btn-danger cancel-order-btn" data-order_id="<?=$data->order_id ?>">Exchange  Order</a>
                                                <?php } } ?>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>

                      
                        <div class="tab-pane fade" id="account-details">
                            <div class="myaccount-content">
                                <h4 class="title">Account details</h4>
                                <div class="login_form_container">
                                    <div class="account_details_form">
                                        <form action="#" enctype="multipart/form-data" method="post">
                                            <div class="img_profiles">
                                                <img src="<?=base_url() ?>media/uploads/<?=$user_data->image ?>" alt="img">
                                            </div>

                                            <div class="default-form-box mb-20">
                                                <label>Username</label>
                                                <input type="text" class="form-control" value="<?=$user_data->username ?>" id="pro_username">
                                            </div>
                                            
                                            <div class="default-form-box mb-20">
                                                <label>First Name</label>
                                                <input type="text" name="first-name" class="form-control" value="<?=$user_data->first_name ?>"
                                                    id="pro_first_name">
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Last Name</label>
                                                <input type="text" name="last-name" class="form-control" value="<?=$user_data->last_name ?>"
                                                    id="pro_last_name">
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Email</label>
                                                <input type="text" name="email-name" value="<?=$user_data->email ?>"
                                                    class="form-control" readonly id="pro_email">
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Mobile</label>
                                                <input type="number" name="email-name" value="<?=$user_data->mobile ?>"
                                                    class="form-control" id="pro_mobile">
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Password</label>
                                                <input type="password" name="user-password" value="<?=$user_data->password ?>"
                                                    class="form-control" id="pro_password">
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Image</label>
                                                <input type="file" class="form-control" id="pro_image" value="<?=$user_data->image ?>">
                                            </div>
                                            
                                            <div class="save_button mt-3">
                                                <a style="cursor:pointer;" class="theme-btn-one bg-black btn_sm update-profile-btn">Update</a>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include('footer.php'); ?>


<script>
      $(document).on('click', '.update-profile-btn', function() {
            update_profile();
        });

    function update_profile()
    {
        var username = $("#pro_username").val();
        var mobile = $("#pro_mobile").val();
        var email = $("#pro_email").val();
        var password = $("#pro_password").val();
        var first_name = $("#pro_first_name").val();
        var last_name = $("#pro_last_name").val();
        var image = $('#pro_image').prop('files')[0];

        var form = new FormData();

        form.append("username", username);
        form.append("mobile", mobile);
        form.append("email", email);
        form.append("password", password);
        form.append("first_name", first_name);
        form.append("last_name", last_name);
        form.append("image", image);

        var settings = {
          "url": "<?=base_url() ?>User/user_update_profile",
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
            $(".toastBox").removeClass("toaster-active");
            toast_print(response.message)
          }
          $(".toastBox").removeClass("toaster-active");
          toast_print(response.message)
        });
    }


/*---order ID----*/

    var order_id = 0;
    $(document).on("click", ".cancel-order-btn",(function(e) {
        order_id = $(this).data("order_id");
        order_cancel();
      }));


    function order_cancel()
    {
        var form = new FormData();
        form.append("order_id", order_id);

        var settings = {
          "url": "<?=base_url() ?>user/order_cancel",
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