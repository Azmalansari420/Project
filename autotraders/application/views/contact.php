<?php

$sitesetting = $this->crud->fetchdatabyid('1','site_setting');

?>

<?php $this->load->view('header'); ?>
    <!-- end of header area -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Contact</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- end of page header -->

<section class="section-padding contact-us-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="get-in-touch">
                    <h2>Get in Touch</h2>
                    <p>The passages of Lorem Ipsum available but the majority have suffered alteration embarrased</p>
                </div>
                <form action="" method="POST">
                    <div class="row list-input">
                        <div class="col-md-6 mr0">
                            <div class="single-get-touch">
                                <input type="text" name="name" placeholder="Name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-get-touch">
                                <input type="text" name="mobile" placeholder="Mobile" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-get-touch">
                                <input type="email" name="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-get-touch">
                                <input type="text" name="subject" placeholder="Subject" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-get-touch">
                               <textarea name="message" placeholder="Message" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-get-touch">
                               <button type="submit" name="submit" class="btn btn-default btn-sm">SEND MESSAGE</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-5">
                <div class="choose-img">
                    <img src="<?php echo base_url(); ?>asset/img/ceo.png" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="single-contact-info">
                    <div class="icon">
                        <img src="<?php echo base_url(); ?>asset/img/map-pin-2.png" alt="">
                    </div>
                    <div class="content">
                        <p><?php echo $sitesetting[0]->address; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-contact-info">
                    <div class="icon">
                        <img src="<?php echo base_url(); ?>asset/img/envalope-3.png" alt="">
                    </div>
                    <div class="content">
                        <p><?php echo $sitesetting[0]->email; ?> <br><?php echo $sitesetting[0]->alt_email; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-contact-info">
                    <div class="icon">
                        <img src="<?php echo base_url(); ?>asset/img/call-2.png" alt="">
                    </div>
                    <div class="content">
                        <p><?php echo $sitesetting[0]->mobile; ?> <br><?php echo $sitesetting[0]->alt_mobile; ?> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- start google map area -->
    <div class="googlemap-area">
        <div class="gmap" id="gmap">
            <?php echo $sitesetting[0]->map; ?>
        </div>
    </div>
    <!-- end of google map area -->
    <!-- start footer area -->
 <?php $this->load->view('footer'); ?>
