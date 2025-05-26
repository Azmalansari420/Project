<?php include('header.php'); ?>
<style>
    @media only screen and (min-width: 1025px) {
        .header-class {
            color: #000!important;
        }
        .breadcrumb-item>a
        {
            color: black!important;
        }
        .breadcrumb-item
        {
            color: black!important;
        }
    } 
    @media only screen and (max-width: 1026px) {
        .header-class {
           color: #000!important;
            position: relative!important;
            top: 0 !important;
            font-size: 13px !important;
/*            left: 84px;*/
margin-left: 145px;
        }
        ol.breadcrumb.justify-content-center {
        display: none;
}
    } 
</style>
    <div class="inner-page-wrapper float-left" style="background-image: url(<?=base_url() ?>media/contact.jpeg);">
        <div class="inner-head  animated wow fade-up">
            <h1 class="header-class">EMERGENCY APPOINTMENT</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="<?=base_url() ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">EMERGENCY APPOINTMENT</li>
                </ol>
            </nav>
        </div>
    </div>
<style>
    .contact-form {
    padding: 60px 0;
    float: left;
    width: 100%;
}
.contact-form form .contact-input textarea {
    border: 1px solid;
}
</style>
   

   

    <div class="contact-form">
        <div class="container">
            <div class="row" style="justify-content: center;">
                <div class="col-lg-6 sidebar-head" >
                    <h6>EMERGENCY APPOINTMENT</h6>
                </div>
                <div class="sidebar-body form-head">
                    <form class="row" action="<?=base_url('welcome/enquiry_form') ?>" method="post">
                        <div class="col-lg-6 col-md-12">
                            <div class="contact-input">
                                <input type="text" class="form-control" placeholder="Name" required="" name="name" >
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="contact-input">
                                <input type="email" class="form-control" id="contactemail" placeholder="Email(Optional)" name="email">
                                <i class="fas fa-envelope"></i>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="contact-input">
                                <input type="text" class="form-control" placeholder="Mobile" required="" name="mobile">
                                <i class="fas fa-phone"></i>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="contact-input">
                                <input type="text" class="form-control" placeholder="Subject" name="subject">
                                <i class="fas fa-question"></i>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="contact-input">
                                <textarea placeholder="Your Text" required="" name="message"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="contact-check">
                                <input type="checkbox" class="form-check-input" id="check" required="">
                                <label class="form-check-label" for="check" required="">I agree that my submitted data
                                    is being collected and stored.</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="tb_es_btn_div">
                                <div class="response center"></div>
                                <input type="hidden" name="form_type" value="contact" />
                                <div class="tb_es_btn_wrapper os_contact_input">
                                    <div class="contact-btn">
                                        <button type="submit" name="submit" class="submitForm main-btn-red">
                                            <em><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></em><span>Send
                                                Message
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- 
     <div class="contact-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3673.644307465103!2d76.04800561444114!3d22.963323124303425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3963179aa37da85d%3A0x9ad74f985a500d01!2sWebstrot%20Technology!5e0!3m2!1sen!2sin!4v1637652142209!5m2!1sen!2sin"
            allowfullscreen="" loading="lazy"></iframe>
    </div> -->
    <!-- contact-section-end -->
<?php include('footer.php'); ?>

 <style>
   .whats-app-number {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 30px #0000001a;
    -webkit-backdrop-filter: blur(5.9px);
    backdrop-filter: blur(5.9px);
    background: rgba(0,0,0,1);
    position: fixed;
    top: 86%;
    right: 5%;
    z-index: 11;
}
</style>
<a href="https://wa.me/917259346805" target="_blank" class="whats-app-number">
         <svg xmlns="http://www.w3.org/2000/svg" width="21.614" height="21.614" viewBox="0 0 21.614 21.614">
            <path id="Icon_awesome-whatsapp" data-name="Icon awesome-whatsapp" d="M18.377,5.391A10.714,10.714,0,0,0,1.52,18.316L0,23.864l5.679-1.491a10.678,10.678,0,0,0,5.119,1.3h0A10.814,10.814,0,0,0,21.614,12.965a10.753,10.753,0,0,0-3.237-7.575ZM10.8,21.871a8.886,8.886,0,0,1-4.535-1.24l-.323-.193-3.368.883.9-3.286L3.261,17.7A8.919,8.919,0,1,1,19.8,12.965a9,9,0,0,1-9,8.906ZM15.685,15.2c-.265-.135-1.582-.782-1.829-.868s-.425-.135-.6.135-.69.868-.849,1.052-.314.2-.579.068a7.285,7.285,0,0,1-3.643-3.184c-.275-.473.275-.439.786-1.462a.5.5,0,0,0-.024-.468c-.068-.135-.6-1.452-.825-1.988s-.439-.449-.6-.458-.333-.01-.511-.01a.991.991,0,0,0-.714.333,3.007,3.007,0,0,0-.936,2.234,5.243,5.243,0,0,0,1.09,2.769A11.959,11.959,0,0,0,11.019,17.4a5.237,5.237,0,0,0,3.213.671,2.741,2.741,0,0,0,1.8-1.274,2.238,2.238,0,0,0,.154-1.274C16.128,15.4,15.95,15.334,15.685,15.2Z" transform="translate(0 -2.25)" fill="#fff"></path>
         </svg>
      </a>