<?php
$user = temp_session_id();
// print_r($user);
 include('header.php'); ?>


    <!-- Banner Area -->
    <section id="common_banner_one">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_banner_text">
                        <h2>Login</h2>
                        <ul>
                            <li><a href="<?=base_url() ?>">Home</a></li>
                            <li><i class="fas fa-slash"></i></li>
                            <li class="active">Login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Checkout-Area -->
    <section id="login_area" class="ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="account_form">
                        <h3>Login</h3>
                        <?php echo $this->session->flashdata('message'); ?>
                        <form action="#">
                            <div class="default-form-box">
                                <label>Register Email <span>*</span></label>
                                <input type="text" class="form-control" id="login_email">
                            </div>
                            <div class="default-form-box">
                                <label>Passwords <span>*</span></label>
                                <input type="password" class="form-control" id="login_password">
                            </div>
                            <div class="login_submit">
                                <button class="theme-btn-one btn-black-overlay btn_md login-check-btn" type="button">login</button>
                            </div>

                            <a href="<?=base_url() ?>register">Create Your Account?</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include('footer.php'); ?>

<script>
    $(document).on('click', '.login-check-btn', function() {
        login_check();
    });



    function login_check() 
    {
        var email = $("#login_email").val();
        var password = $("#login_password").val();

        var form = new FormData();
        form.append("email", email);
        form.append("password", password);

        var settings = {
          "url": "<?=base_url() ?>User/user_login",
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
            window.location.href = "<?=base_url('my-account') ?>"; 
          }
          $(".toastBox").removeClass("toaster-active");
          toast_print(response.message)
        });
    }
</script>