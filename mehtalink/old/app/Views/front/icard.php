<?php include("include/common_data.php");
$setting3=getdatasingle('tbl_settings',array('id'=>'3'));
$codedes=getdatasingle('tbl_media',array('status'=>'1','emp_code'=>$_GET['emp']));
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iCard</title>
    <link href="<?=base_url();?>/public/assets/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Russo+One&display=swap" rel="stylesheet">

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="<?=base_url();?>/public/assets/css/font-awesome/all.min.css">
    <link rel="stylesheet" href="<?=base_url();?>/public/assets/css/bootstrap/bootstrap.min.css">
    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel="stylesheet" href="<?=base_url();?>/public/assets/css/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url();?>/public/assets/css/swiper/swiper.min.css">
    <link rel="stylesheet" href="<?=base_url();?>/public/assets/css/magnific-popup/magnific-popup.css">
    <!-- Template Style -->
    <link rel="stylesheet" href="<?=base_url();?>/public/assets/css/style.css">
    <style>
            body {
                 background-color: #fff;
                 color: #000;
                 font-family: "Open Sans", sans-serif;
             }
             h1, h2, h3, h4, h5, h6, p, span, a{
                color: #000;
                font-family: "Open Sans", sans-serif;
             }
             .icard{
                padding: 50px 0;
             }
             .icard .card{
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 20px;
             }
             .icard .logo{
                width: 100px;
                margin: auto;
                margin-bottom: 15px;
             }
             .icard .pc-pic{
                text-align: center;
             }
             .icard .pc-pic img{
                width: 100px;
                margin-bottom: 15px;
                height: 124px;
                object-fit: cover;
                border: 1px solid #111;
             }
             .icard .name{
                font-size: 20px;
                font-weight: 600;
                text-align: center;
                line-height: 25px;
                margin-bottom: 3px;
             }
             .icard .designation{
                font-size: 18px;
                font-weight: 500;
                text-align: center;
                line-height: 24px;
             }
             .icard .detail ul{
                list-style: none;
                padding-left: 60px;
                padding-right: 0px;
             }
             .icard .detail ul li{
                font-size: 15px;
             }
             .icard .detail ul li span{
                font-weight: 600;
                width: 130px;
                display: inline-block;
             }
             .icard .issuing img{
                width: 133px;
                padding-right: 23px;
             }
             .icard .issuing p{
                font-size: 15px;
                font-weight: 600;
                color: #222;
             }
             .icard .address{
                background-color: #ccc;
                text-align: center;
                font-size: 15px;
                margin-bottom: -7px;
                margin-left: -10px;
                margin-right: -10px;
                padding: 10px;
                border-radius: 0 0 20px 20px;
                line-height: 23px;
                font-weight: 600;
             }

       </style>
</head>
<body>
    <section class="icard">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="card">
                        <img class="logo" alt="logo" src="<?=base_url();?>/public/assets/img/icard-logo.png"/>
                        <div class="detail">
                            <div class="pc-pic">
                                <img src="<?=base_url('public/uploads/'.$codedes->file.'');?>" alt="">
                            </div>
                            <h2 class="name">
                                <?=$codedes->title;?>
                            </h2>
                            <h2 class="designation">
                                <?=$codedes->degination;?>
                            </h2>
                            <ul>
                                <li><span>Employee Code :</span> <?=$codedes->emp_code;?></li>
                                <li><span>Blood Group :</span> <?=$codedes->blood_group;?></li>
                                <li><span>Emergency No. :</span> <?=$codedes->emg_no;?></li>
                            </ul>
                            <div class="issuing text-end">
                                <img src="img/signatur.jpg" alt="">
                                <p>Issuing Authority</p>
                            </div>
                            <h5 class="address">
                                B-1, Yadav Park, Main Rohtak Road, Nangloi, Delhi-110041
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="<?=base_url();?>/public/assets/js/jquery-3.7.1.min.js"></script>
    <script src="<?=base_url();?>/public/assets/js/jquery.appear.js"></script>
    <script src="<?=base_url();?>/public/assets/js/popper/popper.min.js"></script>
    <script src="<?=base_url();?>/public/assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
    <script src="<?=base_url();?>/public/assets/js/owl-carousel/owl.carousel.min.js"></script>
    <script src="<?=base_url();?>/public/assets/js/swiper/swiper.min.js"></script>
    <script src="<?=base_url();?>/public/assets/js/swiperanimation/SwiperAnimation.min.js"></script>
    <script src="<?=base_url();?>/public/assets/js/shuffle/shuffle.min.js"></script>
    <script src="<?=base_url();?>/public/assets/js/magnific-popup/jquery.magnific-popup.js"></script>
    <script src="<?=base_url();?>/public/assets/js/counter/jquery.countTo.js"></script>
    <script src="<?=base_url();?>/public/assets/js/gsap.min.js"></script>
    <script src="<?=base_url();?>/public/assets/js/attractHover.js"></script>
    <script src="<?=base_url();?>/public/assets/js/custom.js"></script>
</body>
</html>