<?php include('header.php'); ?>
<style>
    @media only screen and (min-width: 1025px) {
        .header-class {
            color: #000!important;
        }
    } 
    @media only screen and (max-width: 1026px) {
        .header-class {
           color: #000!important;
            position: relative!important;
            top: 0 !important;
            font-size: 23px !important;
/*            left: 84px;*/
margin-left: 145px;
        }
    } 
</style>
    <div class="inner-page-wrapper float-left" style="background-image: url(<?=base_url() ?>media/testimonial.jpeg);">
        <div class="inner-head animated wow fade-up">
            <h1 class="header-class">Testimonials</h1>
        </div>
    </div>
 <style>
        .testimonial-one-wrapper .testimonial-one .test-img img {
/*        width: 100%;*/
        height: 249px;
    }
    .testimonial-one-wrapper .testimonial-one .test-content {
    text-align: center;
    position: relative;
    padding: 20px 20px;
}
    </style>

    <!-- first testimonial start -->

     <div class="testimonial-three-wrapper padd-100 float-start w-100">
        <div class="container">
            <div class="row">
                <?php 
                $this->db->order_by('id desc');
                $testimonial = $this->crud->selectDataByMultipleWhere('testimonials',array('status'=>1,));
                foreach($testimonial as $data)
                    { ?>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="slider-two-wrapper animated wow fade-box">
                        <div class="slider-quote">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <div class="slider-two-content">
                            <p><?=$data->content ?></p>
                        </div>
                        <div class="slider-author">
                            <img src="<?=base_url() ?>media/uploads/testimonials/<?php echo $data->image ?>" alt="image">
                            <div class="author-name">
                                <h6><?=$data->name ?></h6>
                                <span><?php echo $data->position ?></span>
                            </div>
                        </div>
                    </div>
                </div>
               <?php } ?>
             
            </div>
        </div>
    </div>

     



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