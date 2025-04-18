<?php include('header.php'); ?>
<link rel="stylesheet" href="assets/css/module-css/contact.css" />

        <!--Start Page Header-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="page-header__pattern"
                style="background-image: url(assets/images/pattern/page-header-pattern.png);"></div>
            <div class="container">
                <div class="page-header__inner">
                    <h2 class="wow fadeInDown" data-wow-duration="1500ms">Contact</h2>
                    <ul class="thm-breadcrumb wow fadeInUp" data-wow-duration="1500ms">
                        <li><a href="index.html">Home</a></li>
                        <li><span class="icon-right-chevron1"></span></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Header-->

        <!-- Start Contact Page -->
        <section class="contact-page">
            <div class="container">
                <div class="row">
                    <!--Start Contact Page Contact Info-->
                    <div class="col-xl-6">
                        <div class="contact-page__contact-info">
                            <div class="title-box">
                                <h2>Contact Information</h2>
                            </div>

                            <div class="contact-page__contact-info-box">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="contact-page__contact-info-single">
                                            <div class="icon-box">
                                                <span class="icon-phone"></span>
                                            </div>

                                            <div class="content-box">
                                                <h3>Phone Number :</h3>
                                                <p><a href="tel:<?=$sitesetting[0]->mobile ?>"><?=$sitesetting[0]->mobile ?></a></p>
                                                <p><a href="tel:<?=$sitesetting[0]->alt_mobile ?>"><?=$sitesetting[0]->alt_mobile ?></a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="contact-page__contact-info-single">
                                            <div class="icon-box">
                                                <span class="icon-email"></span>
                                            </div>

                                            <div class="content-box">
                                                <h3>Email Address</h3>
                                                <p><a href="mailto:<?=$sitesetting[0]->email ?>"><?=$sitesetting[0]->email ?></a></p>
                                                <p><a href="mailto:<?=$sitesetting[0]->alt_email ?>"><?=$sitesetting[0]->alt_email ?></a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="contact-page__contact-info-single">
                                            <div class="icon-box">
                                                <span class="icon-gps"></span>
                                            </div>

                                            <div class="content-box">
                                                <h3>Our Address</h3>
                                                <p><?=$sitesetting[0]->address ?></p>
                                            </div>
                                        </div>
                                    </div>

                                   
                                </div>
                            </div>

                            <div class="contact-page__contact-info-bottom">
                                <div class="text-box">
                                    <h2>Follow The Social Media:</h2>
                                    <p>It is a long established fact that a reader will be distracted readable.
                                    </p>
                                </div>

                                <div class="social-links">
                                    <ul>
                                        <li><a href="<?=$sitesetting[0]->facebook ?>"><span class="icon-facebook-app-symbol"></span></a></li>
                                        <li><a href="<?=$sitesetting[0]->twitter ?>"><span class="icon-twitter-1"></span></a></li>
                                        <li><a href="<?=$sitesetting[0]->instagram ?>"><span class="icon-instagram"></span></a></li>
                                        <li><a href="<?=$sitesetting[0]->youtube ?>"><span class="icon-play-button-arrowhead"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Contact Page Contact Info-->

                    <!--Start Contact Page Form-->
                    <div class="col-xl-6">
                        <div class="contact-page__form">
                            <div class="title-box">
                                <h2>Get In Touch</h2>
                            </div>
                            <form class="contact-form-valida6ted contact-page__form-box"
                                action="<?=base_url() ?>welcome/enquiry_form" method="post" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="input-box">
                                            <input type="text" name="name" placeholder="Name" required="">
                                            <div class="icon"><span class="fa fa-user"></span></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="input-box">
                                            <input type="email" name="email" placeholder="Email" required="">
                                            <div class="icon"><span class="icon-email"></span></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="input-box">
                                            <input type="text" name="mobile" placeholder="Phone" required="">
                                            <div class="icon"><span class="icon-phone"></span></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="input-box">
                                            <input type="text" name="subject" placeholder="Subject" required="">
                                            <div class="icon"><span class="icon-play"></span></div>
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="input-box">
                                            <textarea name="message" placeholder="Message"></textarea>
                                            <div class="icon style2"><span class="fa fa-pencil"></span></div>
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="contact-page__form-btn">
                                            <button type="submit" name="submit" class="thm-btn">
                                                Submit Now <span class="icon-next1"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                    <!--End Contact Page Form-->
                </div>
            </div>
        </section>
        <!-- End Contact Page -->

        <!--Start Google Map One-->
        <section class="google-map-one">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6209.242755903148!2d-77.04363602434464!3d38.90977276948481!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1394992895496"
                class="google-map-one__map">
            </iframe>
        </section>
        <!--End Google Map One-->

<?php include('footer.php'); ?>