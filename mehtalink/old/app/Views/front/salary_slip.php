<?php include("include/common_data.php");
$setting3=getdatasingle('tbl_settings',array('id'=>'3'));
$user=getdatasingle('tbl_student',array('status'=>'1','emp_code'=>$_GET['emp'],'title'=>$_GET['m']));
$new_description= str_replace(array_in(),array_out(),$user->description); 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Salary Slip</title>
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
             .salary-slip{
                padding: 50px 0;
             }
             .salary-slip .container {
                 max-width: 900px;
             }
             .salary-slip .container .myborder{
                 border: 1px solid #000;
                 padding: 10px;
             }
             .salary-slip .header .header-hd{
                 text-align: center;
             }
             .salary-slip .header .header-hd h4{
                font-size: 16px;
                margin-bottom: 7px;
                font-weight: 600;
                letter-spacing: 0.2px;
                text-transform: uppercase;
             }
             
             .salary-slip .header .header-hd h5, .salary-slip .header .header-hd p{
                font-size: 14px;
                margin-bottom: 12px;
             }
             .salary-slip .header .header-hd h5{
                font-size: 14px;
                font-weight: 600;
                margin-bottom: 2px;
                
             }
             .salary-slip .header img {
                 width: 110px;
             }
             
             .details .row, .earnings .row, .deductions .row {
                 border-bottom: 1px dashed #000;
                 padding-top: 3px;
             }
             .details .row p, .earnings .row p, .deductions .row p{
                font-size: 11px;
                margin-bottom: 3px;
                font-weight: 600;
             }
             /* .earnings .row:last-child, .deductions .row:last-child {
                 border-bottom: none;
             } */
             .total, .net-pay {
                 font-weight: bold;
             }
             
             .earnings ul{
                padding: 0;
                list-style-type: none;
                list-style: none;
                margin-bottom: 0;
                padding-top: 15px;
             }
             .earnings ul li{
                display: flex;
                justify-content: space-between;
                font-size: 11px;
                margin-bottom: 5px;
                font-weight: 500;
                padding-left: 5px;
                padding-right: 5px;
             }
             .earnings ul .hdisff{
                font-size: 13px;
                border-bottom: 1px dashed #000;
                padding-bottom: 4px;
                margin-bottom: 4px;
             }
             .earnings ul .hdisffend{
                font-size: 13px;
                border-top: 1px solid #000;
                border-bottom: 1px dashed #000;
                padding-top: 4px;
                margin-top: 4px;
                padding-bottom: 4px;
                margin-bottom: 4px;
             }
             .earnings .col-6{
                padding-left: 0;
                padding-right: 0;
             }
             .earnings .row{
                padding-left: 10px;
                padding-right: 10px;
             }
             .salary-slip .footer {
                 margin-top: 4px;
             }
             .salary-slip .footer .jfhis{
                padding-top: 30px;
             }
             .salary-slip .footer p {
                font-size: 11px;
                margin: 0;
             }
             .cpn-name{
                font-size: 12px;
                font-weight: 600;
                text-transform: uppercase;
             }
             .cpn-name span{
                text-transform: uppercase;
             }
             .stamp{
                text-align: end;
             }
             .stamp img {
                 height: 85px;
             }
             .stamp p {
                font-weight: 600;
                margin-top: 7px !important;
             }
       </style>
</head>
<body>
    <section class="salary-slip">
        <div class="container">
            <div class="myborder">
                <div class="header">
                    <div class="row">
                        <div class="col-2">
                            <img alt="logo" src="<?=base_url();?>/public/assets/img/slip-logo.png"/>
                        </div>
                        <div class="col-10">
                            <div class="header-hd">
                                <h4>
                                    Oystershell Life Sciences PRIVATE LIMITED
                                </h4>
                                <p><?=$user->address;?></p>
                                <h5>
                                    Payslip for the month of <?=$user->title;?>
                                </h5>
                            </div>
                        </div>
                    </div>
                    
                </div>
               
               <?=$new_description;?>
                
                <div class="footer">
                    <div class="row">
                        <div class="col-6">
                            <p>
                                RUPEES : <?=$user->salary_word;?>
                            </p>
                        </div>
                        <div class="col-2">

                        </div>
                        <div class="col-4">
                            <p class="cpn-name">
                                For <span>Oystershell Life Sciences <br>PRIVATE LIMITED</span>
                            </p>
                        </div>
                    </div>
                    <div class="row jfhis">
                        <div class="col-6">
                            <p>
                                Bank Details : <?=$user->bank;?>
                            </p>
                        </div>
                        
                        <div class="col-6">
                            <div class="stamp">
                                <img alt="" src="<?=base_url();?>/public/assets/img/dfg.png"/>
                                <p>
                                    Authorised Signatory
                                </p>
                            </div>
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