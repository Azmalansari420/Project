<?php include('header.php'); ?>
<style>
    .nice-select .option {
        color: black!important;

    }
    .contact__form form .nice-select {
        width: 100%;
    font-size: 16px;
    font-weight: 400;
    border: none;
    background-color: var(--sub-bg);
    margin-bottom: 20px;
    padding: 18px 20px;
    height: 57px;
    border-radius: 5px;
    border: 1px solid;
    }
    .contact__form form input, .contact__form form textarea {
        padding: 10px 20px;
            color: white;
    }
    .nice-select {
        line-height: inherit;
    }

    .item.sub-bg.mb-30{
        border: 1px solid white;
        border-radius: 10px;
    }
</style>

    <main>
        <!-- Page banner area start here -->
        <section class="banner__inner-page bg-image pt-50 pb-50 bg-image"
            data-background="assets/images/banner/banner-inner-page.jpg">
            <div class="shape2 wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                <img src="assets/images/banner/inner-banner-shape2.png" alt="shape">
            </div>
            <div class="shape1 wow slideInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                <img src="assets/images/banner/inner-banner-shape1.png" alt="shape">
            </div>
            <div class="shape3 wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                <img class="sway__animationX" src="assets/images/banner/inner-banner-shape3.png" alt="shape">
            </div>
            <div class="container">
                <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Sign Up</h2>
                <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <a href="index.html">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>Sign Up</span>
                </div>
            </div>
        </section>
        <!-- Page banner area end here -->

        <!-- Contact area start here -->
        <section class="contact-area pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-center g-4">
                   
                    <div class="col-lg-6">
                        <div class="contact__right-item">
                            <div class="section-header mb-20">
                                <h5 class="wow fadeInUp pb-2" data-wow-delay="00ms" data-wow-duration="1500ms">
                                    <img class="me-1" src="assets/images/icon/section-title.png" alt="icon">
                                    Sign up 
                                </h5>
                                <h2 class="wow fadeInUp mb-2" data-wow-delay="200ms" data-wow-duration="1500ms">Welcome Back</h2>
                                <?php echo $this->session->flashdata('login_msg') ?>
                            </div>
                            <div class="contact__form">
                                <form action="<?=base_url() ?>auth/login" method="post">
                                    <div class="row">

                                        <!-- <div class="col-12">
                                            <label for="name">Sign Up As*</label>
                                            <select class="bg-transparent bor">
                                                <option>User</option>
                                                <option>Vendor</option>
                                                <option>Dealer</option>
                                            </select>
                                        </div> -->
                                        
                                        <div class="col-12">
                                            <label for="email">Your Email/User Code*</label>
                                            <input class="bg-transparent bor" id="email" type="text" placeholder="Your Email" name="email">
                                        </div>
                                        <div class="col-12">
                                            <label for="email">Your Password*</label>
                                            <input class="bg-transparent bor" id="Password" type="text" placeholder="Your Password" name="password">
                                        </div>
                                    </div>

                                    
                                    <div class="btn-two">
                                        <span class="btn-circle">
                                        </span>
                                        <button type="submit" name="submit" class="btn-one">
                                            Submit <i class="fa-regular fa-arrow-right-long"></i>
                                        </button>
                                    </div>

                                    <div class="text-end">
                                        <a href="<?=base_url() ?>forgetpassword">Forget Password?</a>
                                    </div>


                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact area end here -->

        <!-- Contact map area start here -->
      
        <!-- Contact map area end here -->
    </main>

 <?php include('footer.php'); ?>