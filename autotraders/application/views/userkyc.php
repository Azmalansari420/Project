<?php
$sitesetting = $this->crud->fetchdatabyid('1','site_setting');
$user = $this->crud->selectDataByMultipleWhere('registration',array('id'=>$this->session->userdata("id"),));
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
         }
      </style>
   </head>
   <body class="crm_body_bg">

      <?php $this->load->view('usersidebar'); ?>
<?php
$sitesetting = $this->crud->fetchdatabyid('1','site_setting');
$user = $this->crud->selectDataByMultipleWhere('registration',array('id'=>$this->session->userdata("id"),));
?>
      <section class="main_content dashboard_part">
        

         <div class="main_content_iner ">
            <div class="container-fluid plr_30 body_white_bg pt_30">
               <div class="row justify-content-center">
                  <div class="col-lg-12">
                     <div class="white_box mb_30">
                        <div class="box_header ">
                           <div class="main-title">
                              <h3 class="mb-0">KYC</h3>

                           </div>
                           <a onclick="history.back()" class="btn btn-dark">Back</a>
                        </div>


                        <form method="post" enctype="multipart/form-data" action="<?php echo base_url('user/userkyc'); ?>">
                           
                           <input type="hidden" class="form-control" name="username" value="<?php echo $user[0]->username; ?>">
                           
                           <div class="mb-3">
                              <label class="form-label">Pancard</label>
                              <input type="file" class="form-control" name="pancard" >
                           </div>

                           <div class="mb-3">
                              <label class="form-label">Aadhar Card</label>
                              <input type="file" class="form-control" name="adharcard">
                           </div>

                           <div class="mb-3">
                              <label class="form-label">Bank Statement</label>
                              <input type="file" class="form-control" name="bankstatement">
                           </div>

                           <div class="mb-3">
                              <label class="form-label">Update Profile Image</label>
                              <input type="file" class="form-control" name="profilepic">
                           </div>

                           <div class="mb-3">
                              <input type="submit" class="form-control btn btn-primary" name="submit" value="Submit">
                           </div>

                        </form>

                     </div>
                  </div>

               </div>
            </div>
      



         <?php $this->load->view('userfooter'); ?>