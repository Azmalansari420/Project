<?php include_once 'lib/all_files.php'; $fs=fs( 'tbl_setting',array( 'id'=>1)); ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <!-- Meta Tags -->
    <meta name="google-site-verification" content="9pw1x8GmZTThCUIz3vra8uSTC6UfWKdiGvQW-WVlg5A" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="img/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <!--<meta http-equiv="refresh" content="120" />-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="author" content="Pawan, info@smtc.org.in">
    <meta http-equiv="Cache-control" content="public">
    <meta name="Geography" content="Delhi(India)">
    <meta name="language" content="en" />
    <meta name="state" content="Delhi" />
    <meta name="document-type" content="public">
    <meta name="geo.region" content="IN-DL" />
    <meta name="geo.placename" content="Delhi" />
    <meta name="geo.position" content="28.6163154,77.0298341" />
    <meta name="googlebot" content="index, follow" />
    <meta name="og:email" content="info@smtc.org.in" />
    <meta name="og:phone_number" content="+918851481640" />
    <meta property="article:publisher" content="https://twitter.com/" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon-180x180.png" />
    <meta name="robots" content="index,follow">
    <meta name="robots" content="ALL" />
    <!-- Stylesheets Start -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <style type="text/css">
        .top-head-h1 {
            margin: 0;
            vertical-align: middle;
            padding-top: 20px;
        }
        .main-menu ul li:hover ul {
            visibility: visible;
            transition: all 0.4s ease 0s;
            opacity: 1;
            top: 37px!important;
        }

    </style>
    <meta name="url" content="https://www.smtc.org.in/">
    <title>SMTC Institute- Saunit mananagement & technical mgt</title>
    <meta name="keywords" content="SMTC Institute, smtc">
    <meta name="description" content="SMTC, is one of Institute in India takes pride for creating an atmosphere wherein both students and faculty can pursue boundless knowledge, a single roof where theory and practice goes hand in hand to present better understanding about oneself and world around him.">
    <meta property="og:type" content="article" />
    <meta property="og:title" content="SMTC Institute- Saunit mananagement & technical mgt" />
    <meta name="og:image" content="https://smtc.org.in/banner/BN11.jpg" />
    <meta property="og:description" content="SMTC, is one of Institute in India takes pride for creating an atmosphere wherein both students and faculty can pursue boundless knowledge, a single roof where theory and practice goes hand in hand to present better understanding about oneself and world around him." />
    <meta property="og:url" content="https://www.smtc.org.in/" />
    <meta property="og:site_name" content="SMTC Institute- Saunit mananagement & technical mgt" />
    <link href="https://www.smtc.org.in/" rel="canonical">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HLYMZ7BJ5N"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-HLYMZ7BJ5N');

    </script>
    <style>
        .flash-button {
            background: #222960;
            padding: 5px 10px;
            color: #fff;
            border: none;
            border-radius: 5px;
            animation-name: flash;
            animation-duration: 1s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
            //Firefox 1+
            -webkit-animation-name: flash;
            -webkit-animation-duration: 1s;
            -webkit-animation-timing-function: linear;
            -webkit-animation-iteration-count: infinite;
            //Safari 3-4
            -moz-animation-name: flash;
            -moz-animation-duration: 1s;
            -moz-animation-timing-function: linear;
            -moz-animation-iteration-count: infinite;
        }
        @keyframes flash {
            0% {
                opacity: 1.0;
            }
            50% {
                opacity: 0.5;
            }
            100% {
                opacity: 1.0;
            }
        }
        //Firefox 1+
        @-webkit-keyframes flash {
            0% {
                opacity: 1.0;
            }
            50% {
                opacity: 0.5;
            }
            100% {
                opacity: 1.0;
            }
        }
        //Safari 3-4
        @-moz-keyframes flash {
            0% {
                opacity: 1.0;
            }
            50% {
                opacity: 0.5;
            }
            100% {
                opacity: 1.0;
            }
        }
        .sub_text {
            font-size: 15px;
            text-transform: uppercase;
            font-weight: bold;
            line-height: 16px;
        }
        .menu-center {
            text-align: center!important;
        }
        .main-menu ul li a {
            display: block;
            font-size: 18px;
            padding: 10px 15px;
            text-decoration: none;
            text-transform: capitalize;
            transition: all 0.4s ease 0s;
            position: relative;
            font-weight: 500;
        }
        .contact-page-form {
            background: #ffffff;
        }

    </style>
</head>

<body>
    <header>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-8 hidden-xs">
                        <div class="header-left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> info@smtc.org.in</li>
                                <li><i class="fa fa-phone"></i>01143142587</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="soical-profile"> <span class="social-title">Follow Us</span>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                                <li class="hidden-sm hidden-lg hidden-md">
                                    <a href="online-payment.php">
                                        <button type="button" class="flash-button" style="background: #63ab23;">PAY ONLINE</button>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Topbar End -->
        <!-- Main Bar Start -->
        <div class="hd-sec">
            <div class="container-fluid">
                <marquee style="background: #00355f;color: white;" attribute_name="attribute_value" ....more attributes>
                    <?php e(@$fs->marquee); ?> </marquee>
                <div class="row">
                    <!-- Logo Start -->
                    <div class="col-md-2 col-sm-6 col-xs-6">
                        <div class="logo">
                            <a href="index.php"><img src="imge/logo.png" style="max-height: 100px;" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="logo">
                            <h1 class="text-center top-head-h1">SAUNIT MANAGEMENT AND TECHNICAL COUNCIL</h1>
                            <p class="sub_text text-center" style="font-size: 13px;">REG. UNDER MINISTRY OF CORPORATE AFFAIRS GOVT. OF INDIA. Incorporated Establishment Recognized By:
                                <br> Labour Ministry, Govt. Of Delhi
                                <br/>(AN ISO 9001:2015 Certified Organization)</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-8 hidden-xs">
                        <div class="soical-profile" style="text-align: center; margin-top: 45px;">
                            <ul class="list-inline">
                                <li>
                                    <a href="online-payment.php">
                                        <button type="button" class="flash-button">PAY ONLINE</button>
                                    </a>
                                </li>
                                <li>
                                    <button type="button" class="flash-button" data-toggle="modal" data-target="#myModal">Enquiry Now</button>
                                </li>
                            </ul>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Enquiry Now</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="contact-page-form">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <form method="POST" action="">
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <div class="single-input-field">
                                                                <input type="text" name="name" placeholder="First Name" /> </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <div class="single-input-field">
                                                                <input type="text" name="lastname" placeholder="Last Name" /> </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <div class="single-input-field">
                                                                <input type="text" name="number" placeholder="Phone Number" /> </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <div class="single-input-field">
                                                                <input type="email" name="email" placeholder="E-mail" /> </div>
                                                        </div>
                                                        <div class="col-md-12 message-input">
                                                            <div class="single-input-field">
                                                                <textarea name="msg" placeholder="Write Your Message"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 message-input">
                                							<div class="g-recaptcha"
                                								data-sitekey="6Ld8ksUpAAAAALsZ15LLxTaHenmdQo9m0x0-5tCM">
                                							</div>
                                						</div>
                                						<br><br>
                                                        <div class="col-md-12 single-input-fieldsbtn">
                                                            <button name="submit" type="submit" value="Submit" class="site-button" style="background: #f1c40f; padding: 10px 26px; color:#fff;"> <span>Submit</span> </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="mobile-nav-menu"></div>
                    <div class="col-md-12 col-sm-12 menu-center navbar-top">
                        <div class="menu">
                            <nav id="main-menu" class="main-menu">
                                <ul>
                                    <li class="active"><a href="index.php"><i class="fa fa-home"></i></a>
                                    </li>
                                    <li><a href="#">About</a>
                                        <ul>
                                            <li><a href="about.php">About Us</a>
                                            </li>
                                            <!--<li><a href="director.php">Chairman's Desk</a></li>-->
                                            <li><a href="affiliation.php">Affiliation</a>
                                            </li>
                                            <li><a href="why-smtc.php">Why SMTC</a>
                                            </li>
                                            <li><a href="objective.php">Objective</a>
                                            </li>
                                            <!--<li><a href="admission-procedure.php">Admission Procedure</a></li> -->
                                            <li><a href="quality-policy.php">Quality Policy</a>
                                            </li>
                                            <li><a href="faq.php">FAQ's</a>
                                            </li>
                                            <li><a href="disclaimer.php">Disclaimer</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Courses</a>
                                        <ul>
                                             <?php
                                            $all_fetch_institue  = $con->all_fetch('course_new');
                                            foreach($all_fetch_institue as $afi){ ?>
                                            <li><a href="management?id=<?=e($afi->id) ?>"><?php e($afi->name);?></a></li>
                                        <?php } ?>

                                            <!-- <li><a href="management.php">Management Programmes</a>
                                            </li>
                                            <li><a href="computer.php">Computer Programmes</a>
                                            </li>
                                            <li><a href="computer-repair.php">Computer Hardware & Software Course</a>
                                            </li>
                                            <li><a href="laptop-repair.php">Laptop Repairing Course/a></li>
                                            <li><a href="mobile-repair.php">Mobile Repairing Course</a>
                                            </li>
                                            <li><a href="#">Advance Printer Repairing Course</a>
                                            </li> -->
                                        </ul>
                                    </li>
                                    <li><a href="exam/">Online Exam</a>
                                    </li>
                                    <li><a href="#">Exam</a>
                                        <ul>
                                            <li><a href="exam.php">Examination</a>
                                            </li>
                                            <li><a href="grading-system.php">Grading System</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Student Zone</a>
                                        <ul>
                                            <li><a href="user-register.php">Student Registration</a>
                                            </li>
                                            <li><a href="smtc.pdf" target="_blank">Download Form</a>
                                            </li>
                                            <li><a href="prospectus.pdf" target="_blank">Prospectus SMTC</a>
                                            </li>
                                            <li><a href="download-i-card.php">Download I Card</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="user/">Student Login</a>
                                    </li>
                                    <li><a href="#">Verification</a>
                                        <ul>
                                            <li><a href="student-verification.php">Student Verification</a>
                                            </li>
                                            <li><a href="marksheet-verification.php">Certificate Verification</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="result.php">Result</a>
                                    </li>
                                    <li><a href="gallery.php">Gallery</a>
                                    </li>
                                    <li><a href="career.php">Career</a>
                                    </li>
                                    <li><a href="contact.php">Contact Us</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Bar End -->
    </header>
    <!-- Header End -->
