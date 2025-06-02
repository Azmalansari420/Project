<?php include('header.php'); ?>


    <!-- Banner Area -->
    <section id="common_banner_one">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_banner_text">
                        <h2>Register</h2>
                        <ul>
                            <li><a href="<?=base_url() ?>">Home</a></li>
                            <li><i class="fas fa-slash"></i></li>
                            <li class="active">Register</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Register-Area -->
    <section id="login_area" class="ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="account_form">
                        <h3>Register</h3>
                        <form action="#">
                            <div class="default-form-box">
                                <label>Username <span>*</span></label>
                                <input type="text" class="form-control" name="username" id="username">
                            </div>
                            <div class="default-form-box">
                                <label>Mobile <span>*</span></label>
                                <input type="text" class="form-control" name="mobile" id="mobile">
                            </div>
                            <div class="default-form-box">
                                <label>Email <span>*</span></label>
                                <input type="text" class="form-control" name="email" id="email">
                            </div>
                            <div class="default-form-box">
                                <label>Passwords <span>*</span></label>
                                <input type="password" class="form-control" name="password" id="password">
                            </div>
                            <div class="login_submit mb-2">
                                <button class="theme-btn-one btn-black-overlay btn_md registration-btn" type="button" >Register</button>
                            </div>
                            <a class="mt-2" href="<?=base_url() ?>login">Already Have Account? Log In</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include('footer.php'); ?>


<script>
    $(document).on('click', '.registration-btn', function() {
        user_register();
    });

    function user_register()
    {
        var username = $("#username").val();
        var mobile = $("#mobile").val();
        var email = $("#email").val();
        var password = $("#password").val();

        if(username=='')
        {
            toast_print("Please Enter Your Username...");
            return false;
        }
        if(mobile=='')
        {
            toast_print("Please Enter Your Mobile...");
            return false;
        }
        if(email=='')
        {
            toast_print("Please Enter Your Email...");
            return false;
        }
        if(password=='')
        {
            toast_print("Please Enter Your Password...");
            return false;
        }

        var form = new FormData();
        form.append("username", username);
        form.append("mobile", mobile);
        form.append("email", email);
        form.append("password", password);

        var settings = {
          "url": "<?=base_url() ?>User/user_registration",
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
            window.location.href = "<?=base_url('login') ?>"; 
          }
          $(".toastBox").removeClass("toaster-active");
          toast_print(response.message)
        });
    }
</script>