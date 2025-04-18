<?php 
$requestid = $this->input->get('requestid');

$purchase_detail = $this->db->get_where('plan_purchase',array('requestid'=>$requestid))->result_object();

// print_r($purchase_detail);
// die;

include('header.php'); 

?>

<style>
        section {
   margin: 51px 0;
}
.thankyou .box {
    max-width: 100%;
    margin: 0 auto;
    text-align: center;
    box-shadow: 0px 0px 10px 0px #ccc;
    padding: 50px 30px;
    border-radius: 25px;
}
.thankyou .box span.fa-check {
    height: 80px;
    width: 80px;
    background: #229d1c;
    color: #fff;
    font-size: 41px;
    border-radius: 100px;
    line-height: 80px;
    margin-bottom: 20px;
}

.thankyou .box h4 {
    font-weight: 800;
    font-size: 40px;
}
.thankyou .box h5 {
    display: inline-block;
    padding: 10px 35px;
    background: #e3e9ff;
    border-radius: 35px;
    margin: 10px 0 15px 0;
    font-weight: 600;
}
.thankyou .des {
    font-size: 18px;
    text-align: center;
    line-height: 30px;
    margin-bottom: 0;
}

.contact__form form input, .contact__form form textarea {
    color: white;
}

@media (min-width: 1200px)

{
    .h4, h4 {
    font-size: 1.5rem;
}
}
     </style>
       
      <section class="contact-area pt-30 pb-120">
            <div class="container">
                <div class="row g-4">
                   <?php
                   if(!empty($requestid))
                    { ?>
                    <div class="col-lg-12">
                        <div class="contact__right-item">
                            <div class="section-header mb-20">
                                <h5 class="wow fadeInUp pb-2" data-wow-delay="00ms" data-wow-duration="1500ms">
                                    <img class="me-1" src="<?=base_url() ?>assets/images/icon/section-title.png" alt="icon">
                                    Complete KYC Details
                                </h5>
                                <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Fill Details To Get Invoice</h2>
                                
                            </div>
                            <div class="contact__form">
                                <form action="<?=base_url('welcome/kyc_details') ?>" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="requestid" value="<?=$requestid ?>">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="name">Your Name*</label>
                                            <input id="name" class="bg-transparent bor" type="text" placeholder="Your Name" name="username" value="<?=$purchase_detail[0]->username ?>">
                                        </div>
                                        <div class="col-4">
                                            <label for="email">Your Mobile*</label>
                                            <input class="bg-transparent bor" id="Mobile" type="number" placeholder="Your Mobile" name="mobile" value="<?=$purchase_detail[0]->mobile ?>">
                                        </div>
                                        <div class="col-4">
                                            <label for="email">Your Email*</label>
                                            <input class="bg-transparent bor" id="email" type="email" placeholder="Your Email" name="email" value="<?=$purchase_detail[0]->email ?>">
                                        </div>

                                        <div class="col-3">
                                            <label for="email">Your DOB*</label>
                                            <input class="bg-transparent bor" id="Subject" type="date"  name="userdob">
                                        </div>
                                        <div class="col-9">
                                            <label for="email">Your Address*</label>
                                            <input class="bg-transparent bor" id="Subject" type="text"  name="address">
                                        </div>

                                        <div class="col-4">
                                            <label for="email">Your Aadhar Card (Front)*</label>
                                            <input class="bg-transparent bor" id="Subject" type="file"  name="adharcard_front">
                                        </div>
                                        <div class="col-4">
                                            <label for="email">Your Aadhar Card (Back)*</label>
                                            <input class="bg-transparent bor" id="Subject" type="file"  name="adharcard_back">
                                        </div>
                                        <div class="col-4">
                                            <label for="email">Your PAN Card </label>
                                            <input class="bg-transparent bor" id="Subject" type="file"  name="pancard">
                                        </div>
                                        <div class="col-4">
                                            <label for="email">S/No. </label>
                                            <input class="bg-transparent bor" id="Subject" type="text"  name="mobile_sno">
                                        </div>
                                        <div class="col-4">
                                            <label for="email">IMEI Number </label>
                                            <input class="bg-transparent bor" id="Subject" type="text"  name="imei_no">
                                        </div>
                                        <div class="col-4">
                                            <label for="email">Device Info ScreenShot [ *#06# ] </label>
                                            <input class="bg-transparent bor" id="Subject" type="file"  name="device_info">
                                        </div>

                                        <div class="col-4">
                                            <label for="email">Product Name </label>
                                            <input class="bg-transparent bor" id="Subject" type="text"  name="product_name">
                                        </div>

                                        <div class="col-4">
                                            <label for="email">Product Model </label>
                                            <input class="bg-transparent bor" id="Subject" type="text"  name="product_model">
                                        </div>



                                    </div>
                                    
                                    <div class="btn-two">
                                        <span class="btn-circle">
                                        </span>
                                        <button type="submit" name="submit" class="btn-one">Submit <i
                                                class="fa-regular fa-arrow-right-long"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php } else{?>
                    <div class="col-lg-12 text-center">
                        <h3>Oops Somthing Wrong!</h3>
                    </div>
                <?php } ?>
                </div>
            </div>
        </section>

<?php include('footer.php'); ?>

