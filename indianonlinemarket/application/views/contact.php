<?php 
$sitesetting = $this->crud->fetchdatabyid('1','site_setting');

include('header.php'); ?>
    <!-- Banner Area -->
    <section id="common_banner_one">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_banner_text">
                        <h2>Contact</h2>
                        <ul>
                            <li><a href="<?=base_url() ?>">Home</a></li>
                            <li><i class="fas fa-slash"></i></li>
                            <li class="active">Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Checkout-Area -->
    <section id="contact_area" class="ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact_info">
                        <h3>Contact Information</h3>
                        <p>Feel Free To Contact Us</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="left_side_contact">
                        <ul>
                            <li class="address_location">
                                <i class="fas fa-map-marker-alt"></i>
                                <p><?=$sitesetting[0]->address ?></p>
                            </li>
                            <li class="address_location">
                                <i class="fas fa-phone-volume"></i>
                                <div class="contact_widget">
                                    <a href="tel:<?=$sitesetting[0]->mobile ?>"><?=$sitesetting[0]->mobile ?></a>
                                    <a href="<?=$sitesetting[0]->alt_mobile ?>"><?=$sitesetting[0]->alt_mobile ?></a>
                                </div>
                            </li>
                            <li class="address_location">
                                <i class="far fa-envelope"></i>
                                <div class="contact_widget">
                                    <a href="mailto:<?=$sitesetting[0]->email ?>"><?=$sitesetting[0]->email ?></a>
                                    <a href="mailto:<?=$sitesetting[0]->alt_email ?>"><?=$sitesetting[0]->alt_email ?></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="contact_form_one">
                        <h3>Get In Touch</h3>
                        <form action="<?=base_url('welcome/enquiry_form') ?>" method="post">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name*" name="name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Email*" name="email">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="number" class="form-control" placeholder="Phone*" name="mobile">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Subject*" name="subject">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <textarea rows="7" class="form-control" placeholder="Message*" name="message"></textarea>
                                    </div>
                                    <div class="submit_bitton_contact_one">
                                        <button class="theme-btn-one btn-black-overlay btn_md" type="submit" name="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="map_area">
                        <?=$sitesetting[0]->map ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include('footer.php'); ?>