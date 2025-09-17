<?php
$user_id = $this->session->userdata('id');

$sitesetting = $this->crud->fetchdatabyid('1','site_setting');
$user = $this->crud->selectDataByMultipleWhere('registration',array('id'=>$this->session->userdata("id"),));
$wallet = $this->crud->selectDataByMultipleWhere('wallet',array('user_id'=>$this->session->userdata("id"),));

$today_income = 0;
$sevenday_income = 0;
$month_income = 0;


$today_date = date("Y-m-d 00:00:00", strtotime('+1 days'));
$befor_seven_day_date = date('Y-m-d 00:00:00', strtotime('-7 days'));


$first_day_this_month = date('Y-m-01 00:00:00');
$last_day_this_month  = date('Y-m-t 23:59:00');

$today = date("Y-m-d");
$today_income_data = $this->crud->selectDataByMultipleWhere('income',array('date'=>$today,"user_id"=>$this->session->userdata('id'),));
if(!empty($today_income_data))
   $today_income = $today_income_data[0]->amount;






$sql = " and date_time >='$befor_seven_day_date' and date_time<='$today_date' ";
$this->db->group_by("user_id");
$this->db->select("(SELECT SUM(income.amount) FROM income WHERE user_id='$user_id' $sql ) AS amount_paid", FALSE);
$sevenday_income = $this->db->get('income')->result_object();
if(!empty($sevenday_income))
   $sevenday_income = $sevenday_income[0]->amount_paid;
else
   $sevenday_income = 0;



$sql = " and date_time >='$first_day_this_month' and date_time<='$last_day_this_month' ";
$this->db->group_by("user_id");
$this->db->select("(SELECT SUM(income.amount) FROM income WHERE user_id='$user_id' $sql ) AS amount_paid", FALSE);
$month_income = $this->db->get('income')->result_object();
if(!empty($month_income))
   $month_income = $month_income[0]->amount_paid;
else
   $month_income = 0;


?>

<!DOCTYPE html>
<html lang="zxx">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <title>User Dashboard</title>

      <link rel="icon" href="<?php echo base_url(); ?>user/img/logo.png" type="image/png">
      <link rel="stylesheet" href="<?php echo base_url(); ?>user/css/bootstrap1.min.css" />
      <link rel="stylesheet" href="<?php echo base_url(); ?>user/vendors/themefy_icon/themify-icons.css" />
      <link rel="stylesheet" href="<?php echo base_url(); ?>user/vendors/swiper_slider/css/swiper.min.css" />
      <link rel="stylesheet" href="<?php echo base_url(); ?>user/vendors/select2/css/select2.min.css" />
      <link rel="stylesheet" href="<?php echo base_url(); ?>user/vendors/niceselect/css/nice-select.css" />
      <link rel="stylesheet" href="<?php echo base_url(); ?>user/vendors/owl_carousel/css/owl.carousel.css" />
      <link rel="stylesheet" href="<?php echo base_url(); ?>user/vendors/gijgo/gijgo.min.css" />
      <link rel="stylesheet" href="<?php echo base_url(); ?>user/vendors/font_awesome/css/all.min.css" />
      <link rel="stylesheet" href="<?php echo base_url(); ?>user/vendors/tagsinput/tagsinput.css" />
      <link rel="stylesheet" href="<?php echo base_url(); ?>user/vendors/datatable/css/jquery.dataTables.min.css" />
      <link rel="stylesheet" href="<?php echo base_url(); ?>user/vendors/datatable/css/responsive.dataTables.min.css" />
      <link rel="stylesheet" href="<?php echo base_url(); ?>user/vendors/datatable/css/buttons.dataTables.min.css" />
      <link rel="stylesheet" href="<?php echo base_url(); ?>user/vendors/text_editor/summernote-bs4.css" />
      <link rel="stylesheet" href="<?php echo base_url(); ?>user/vendors/morris/morris.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>user/vendors/material_icon/material-icons.css" />
      <link rel="stylesheet" href="<?php echo base_url(); ?>user/css/metisMenu.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>user/css/style1.css" />
      <link rel="stylesheet" href="<?php echo base_url(); ?>user/css/colors/default.css" id="colorSkinCSS">


      <style>
         .position-red
         {
            background: red;
             position: relative;
             width: 120px;
             left: 46%;
            margin: 8px 0;
         }

         p.start-lear {
             background: darkred;
             margin: 11px 0;
             padding: 11px 0;
             width: 250px;
             border-radius: 33px;
             position: relative;
             left: 40%;
         }

         @media (max-width: 575.98px)
         {
            .position-red 
            {
               left: 35%;
            }
            p.start-lear {
               left: 17%;
            }
            .col-xs-6 {
                   width: 45%;
               }
            .tttt
               {
                  display: flex!important;
               }
         }
          .single_quick_activity {
    background-image: url(../img/diamond.png);
}
      </style>
   </head>
   <body class="crm_body_bg">


      <?php $this->load->view('usersidebar'); ?>



      <section class="main_content dashboard_part">

        <!-- ------------topbar------------ -->
         <?php $this->load->view('usertopbar'); ?>
         


         <!-- -------------dashboard----------- -->

         <div class="main_content_iner " style="    margin-top: 0;">
            <div class="container-fluid plr_30 body_white_bg pt_30">
               <div class="row justify-content-center">

                  <div class="col-lg-12">
                     <div class="single_element">
                        <div class="quick_activity">
                           <div class="row">
                              <div class="col-lg-12 text-center" style="margin-bottom: 26px;">
                                 <div class="single_quick_activity" style="background:white;    padding-top: 0;">
                                    <!-- <h4 style="color: black;"><?php echo $user[0]->user_id; ?></h4> -->
                                    <img src="<?php echo base_url(); ?>media/uploads/user/<?php echo $user[0]->image; ?>" style="border-radius: 50%;height: 300px;">
                                    <p style="color: black;font-weight: 800;font-size: 27px;margin: 10px 0;"><?php echo $user[0]->username; ?></p>

                                    <!-- <p class="position-red" style="background:#e9f5ff;color: #5394d2;font-weight: 700;">AFFLIATE 50K</p> -->

                                    <!-- <p class="position-red" style="background:#e6faef;color: #44cb84;font-weight: 700;">CHAMPION</p> -->
                                    <?php
                                    $kycf = $this->crud->selectDataByMultipleWhere('registration',array('id'=>$this->session->userdata('id')));
                                    if($kycf[0]->kyc_datails==1)
                                    {
                                       echo '<p class="position-red" style="background:#e6faef;color: #44cb84;font-weight: 700;">KYC VERIFIED</p>';
                                    }
                                    else
                                    {
                                       echo '<p class="position-red" style="background:#e6faef;color: red;font-weight: 700;">KYC PENDING</p>';
                                    } 
                                    ?>
                                    <!-- <p class="position-red" style="background:#e6faef;color: #44cb84;font-weight: 700;">KYC VERIFIED</p> -->

                                    <!-- <p class="start-lear" style="background:#13ce67;">START LEARNING</p> -->

                                    <p onclick="copyToClipboard('#p1')" class="start-lear"style="background:#ffb901;cursor: pointer;">COPY REFERRAL LINK
                                    </p>
                                       <span style="display:none;" id="p1" class="btn btn-danger"><?=base_url() ?>login?sponser_id=<?=$user[0]->user_id ?></span>

                                    <!-- <input type="text" id="reffer_link" value="<?=base_url() ?>login#mortgage?sponser_id=<?=$user[0]->user_id ?>"> -->
                                    <!-- <h3>$ <span class="counter">5,79,000</span> </h3> -->
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="col-lg-12">
                     <div class="single_element">
                        <div class="quick_activity">
                           <div class="row">
                              <div class="col-12">
                                 <div class="row tttt quick_activity_wrap">

                                    <div class="single_quick_activity" style="background:#c7f6d6;">
                                       <h4 style="color: darkgreen;">My Income</h4>
                                       <h3 style="color: black;">₹ <span class="counter"><?php echo $wallet[0]->total_amount; ?></span> </h3>
                                    </div>


                                    <!-- <div class="col-xs-6 single_quick_activity" style="background:white;">
                                       <h4 style="color: purple;">Today Earning</h4>
                                       <h3 style="color: black;">₹ <span class="counter"><?=number_format($today_income,2) ?></span> </h3>
                                    </div>

                                    <div class="col-xs-6 single_quick_activity" style="background:white;">
                                       <h4 style="color: red;">Last 7D Earning</h4>
                                       <h3 style="color: black;">₹ <span class="counter"><?=number_format($sevenday_income,2) ?></span> </h3>
                                    </div>

                                    <div class="col-xs-6 single_quick_activity" style="background:white;">
                                       <h4 style="color: orange;">Last 30D Earning</h4>
                                       <h3 style="color: black;">₹ <span class="counter"><?=number_format($month_income,2) ?></span> </h3>
                                    </div> -->

                                    <div class="col-xs-6 single_quick_activity" style="background:white;">
                                       <h4 style="color: blue;">INVESTED</h4>
                                       <h3 style="color: black;">₹ <span class="counter"><?php echo $wallet[0]->principal_amt; ?></span> </h3>
                                    </div>

                                    <div class="single_quick_activity" style="background:white;">
                                       <h4 style="color: darkcyan;">REFRRALS</h4>
                                       <h3 style="color: black;"> <span class="counter"><?php echo $wallet[0]->refferal_amt; ?></span> </h3>
                                    </div>

                                   
                                   
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

<!-- 
                  <div class="col-lg-12 col-xl-12">
                     <div class="white_box mb_30 min_430">
                        <div class="box_header  box_header_block ">
                           <div class="main-title">
                              <h3 class="mb-0">Your Income Chart</h3>
                              <img src="">
                           </div>
                        </div>
                        <div id="bar_active"></div>
                     </div>
                  </div>
 -->

                      

               </div>
            </div>
         </div>




         <?php $this->load->view('userfooter'); ?>

         