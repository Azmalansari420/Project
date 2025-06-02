<?php
$sitesetting = $this->crud->fetchdatabyid('1','site_setting');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <meta name="msapplication-TileColor" content="#0E0E0E" />
        <meta name="template-color" content="#0E0E0E" />
        <meta name="description" content="<?=website_name ?>" />
        <meta name="keywords" content="<?=website_name ?>" />
        <meta name="author" content="<?=website_name ?>" />
        <link rel="shortcut icon" type="image/x-icon" href="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" />
        <link href="<?=base_url() ?>assets/css/style28b5.css?v=2.0.0" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <title>CMG WORLDWIDE</title>
        <style>
            .text-justify {
                text-align: justify;
            }
            .affiliations img {
                border: 1px solid #9d9c9c;
                padding: 5px;
                border-radius: 5px;
                height: 90px;
                width: auto;
            }
            .customul {
                -moz-column-count: 2;
                -moz-column-gap: 20px;
                -webkit-column-count: 2;
                -webkit-column-gap: 20px;
                column-count: 2;
                column-gap: 20px;
            }
        </style>
    </head>
    <body>
        <div class="box-bar bg-grey-900">
            <div class="container position-relative">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-8 col-sm-5 col-4">
                        <a class="phone-icon mr-45" href="tel:+91-11-45600700">
                            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"
                                ></path>
                            </svg>
                            Phone: <?=$sitesetting[0]->mobile ?> X <?=$sitesetting[0]->alt_mobile ?>
                        </a>
                        <a class="email-icon" href="mailto:<?=$sitesetting[0]->email ?>">
                            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"
                                ></path>
                            </svg>
                            <?=$sitesetting[0]->email ?>
                        </a>
                    </div>
                    <div class="col-lg-5 col-md-4 col-sm-7 col-8 text-end">
                        <a class="icon-socials icon-twitter2" href="<?=$sitesetting[0]->twitter ?>">
                            <svg class="bi bi-twitter" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="" viewbox="0 0 16 16">
                                <path
                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"
                                ></path>
                            </svg>
                        </a>
                        <a class="icon-socials icon-facebook2" href="<?=$sitesetting[0]->facebook ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 24 24">
                                <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path>
                            </svg>
                        </a>
                        <a class="icon-socials icon-instagram2" href="<?=$sitesetting[0]->instagram ?>">
                            <svg class="bi bi-instagram" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"
                                ></path>
                            </svg>
                        </a>
                        <a class="icon-socials icon-youtube2" href="<?=$sitesetting[0]->youtube ?>">
                            <svg class="bi bi-youtube" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 24 24">
                                <path
                                    d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"
                                ></path>
                            </svg>
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
        <header class="header sticky-bar">
            <div class="container-fluid">
                <div class="main-header">
                    <div class="header-left">
                        <div class="header-logo">
                            <a class="d-flex" href="<?=base_url() ?>"><img alt="Ecom" src="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" /></a>
                        </div>
                        <div class="header-nav">
                            <nav class="nav-main-menu d-none d-xl-block">
                                <ul class="main-menu">
                                    <li><a class="active" href="<?=base_url() ?>">Home</a></li>
                                    <li><a href="<?=base_url() ?>about">About Us</a></li>
                                    <li class="has-children">
                                        <a href="#">Services</a>
                                        <ul class="sub-menu">
                                            <?php
                                            $service = $this->crud->selectDataByMultipleWhere('services',array('status'=>1,));
                                            foreach($service as $data)
                                                { ?>
                                            <li><a href="<?=base_url('service-details/'.$data->slug) ?>"><?=$data->name ?></a></li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                   <li><a class="active" href="<?=base_url() ?>domestic-network">Domestic Network</a></li>
                                    <li><a href="<?=base_url() ?>international-network">International Network</a></li>
                                    <li><a class="active" href="<?=base_url() ?>affiliations">Affiliations</a></li>
                                    <li><a href="<?=base_url() ?>career">Career</a></li>
                                    <li><a href="<?=base_url() ?>blog">Blog</a></li>
                                    <li><a href="<?=base_url() ?>contact">Contact</a></li>
                                </ul>
                            </nav>
                            <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
            <div class="mobile-header-wrapper-inner">
                <div class="mobile-header-content-area">
                    <div class="mobile-logo">
                        <!-- <a class="btn btn-brand-1 hover-up" href="request-a-quote.html">
                            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z"
                                ></path>
                            </svg>
                            Get a quote
                        </a> -->
                    </div>
                    <div class="burger-icon"><span class="burger-icon-top"></span><span class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
                    <div class="perfect-scroll">
                        <div class="mobile-menu-wrap mobile-header-border">
                            <nav class="mt-15">
                                <ul class="mobile-menu font-heading">
                                    <li>
                                        <a class="active" href="<?=base_url() ?>">Home</a>                                        
                                    </li>
                                    <li><a href="<?=base_url() ?>about">About</a></li>                                   
                                    <li class="has-children">
                                        <a href="#">Services</a>
                                        <ul class="sub-menu">
                                            <?php
                                            $service = $this->crud->selectDataByMultipleWhere('services',array('status'=>1,));
                                            foreach($service as $data)
                                                { ?>
                                            <li><a href="<?=base_url('service-details/'.$data->slug) ?>"><?=$data->name ?></a></li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                    <li><a class="active" href="<?=base_url() ?>domestic-network">Domestic Network</a></li>
                                    <li><a href="<?=base_url() ?>international-network">International Network</a></li>
                                    <li><a class="active" href="<?=base_url() ?>affiliations">Affiliations</a></li>
                                    <li><a href="<?=base_url() ?>career">Career</a></li>
                                    <li><a href="<?=base_url() ?>blog">Blog</a></li>
                                    <li><a href="<?=base_url() ?>contact">Contact</a></li>
                                </ul>
                            </nav>
                        </div>                     
                    </div>
                </div>
            </div>
        </div>