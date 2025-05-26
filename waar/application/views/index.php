<?php include('header.php'); ?>
    

    <!-- <div class="videowrapper">
        <iframe>
            <video autoplay muted>
                <source src="logo/vid2.mp4" type="video/mp4">
            </video>
        </iframe>
    </div> -->
<style>
    @media only screen and (min-width: 1025px) {
        .desktop-none {
            display:none !important;
        }
    } 
    @media only screen and (max-width: 1026px) {
        .mobile-none {
            display:none !important;
        }
    } 
    .video-img
    {
            width: inherit;
    }
    video.background
    {
            width: inherit;
    }
</style>
   
    <section class="mobile-none">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="video-img">
                <video autoplay muted loop class="background">
                    <source src="<?=base_url() ?>logo/whatsapp.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </section>

    <section class="desktop-none">
        <div class="col-lg-12">
            <video autoplay muted loop class="background">
                <source src="<?=base_url() ?>logo/mobile.mp4" type="video/mp4">
            </video>
        </div>
    </section>

   

    <!-- footer-section-start -->
    <div class="login-wrapper">
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="btn-close login-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                    <div class="modal-header">
                        <h3 class="modal-title" id="staticBackdropLabel1"><span>Login</span></h3>
                    </div>
                    <div class="modal-body">
                        <div class="register-body">
                            <form>
                                <div>
                                    <input type="text" placeholder="User Name*">
                                </div>
                                <div>
                                    <input type="password" placeholder="Password*">
                                </div>
                                <div>
                                    <ul>
                                        <li>
                                            <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                            <label class="form-check-label" for="exampleCheck2">Remember Me</label>
                                        </li>
                                        <li>
                                            <a href="javascript:;">Forgot Password?</a>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="sign-btn">
                            <a href="javascript:;" class="main-btn-red">
                                <em><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></em><span>Log In
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="login-wrapper">
        <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="btn-close login-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                    <div class="modal-header">
                        <h3 class="modal-title" id="staticBackdropLabel"><span>Register</span></h3>
                    </div>
                    <div class="modal-body">
                        <div class="register-body">
                            <form>
                                <div>
                                    <input type="text" placeholder="User Name*">
                                </div>
                                <div>
                                    <input type="email" placeholder="Email*">
                                </div>
                                <div>
                                    <input type="password" placeholder="Password*">
                                </div>
                                <div>
                                    <input type="password" placeholder="Confirm Password*">
                                </div>
                                <div>
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Yes, I understand and agree
                                        <a href="javascript:;">Terms & Conditions.</a> </label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="sign-btn">
                            <a href="javascript:;" class="main-btn-red">
                                <em><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></em><span>Sign Up
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- javascript -->
    <script src="<?=base_url() ?>js/jquery-3.6.4.min.js"></script>
    <script src="<?=base_url() ?>js/jquery.magnific-popup.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?=base_url() ?>js/bootstrap.min.js"></script>
    <script src="<?=base_url() ?>js/swiper.min.js"></script>
    <script src="<?=base_url() ?>js/bootstrap-datepicker.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="<?=base_url() ?>js/owl.carousel.js"></script>
    <script src="<?=base_url() ?>js/owl.carousel.min.js"></script>
    <!-- Animation Js -->
    <script src="<?=base_url() ?>js/wow.js"></script>
    <!-- Custom Js -->
    <script src="<?=base_url() ?>js/custom.js"></script>
    <!-- contact form js start -->
    <script src="<?=base_url() ?>js/contact_form.js"></script>



    <script>
    const swiftUpElements = document.querySelectorAll(".swift-up-text");

        swiftUpElements.forEach(elem => {
          const words = elem.textContent.split(" ");
          elem.innerHTML = "";

          words.forEach((el, index) => {
    
            words[index] = `<span><i>${words[index]}</i></span>`;
          });

          elem.innerHTML = words.join(" ");

          const children = document.querySelectorAll("span > i");
          children.forEach((node, index) => {
            node.style.animationDelay = `${index * 0.2}s`;
          });
        });
</script>
    
</body>

</html>