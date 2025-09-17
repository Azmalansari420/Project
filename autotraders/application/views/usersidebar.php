<?php
$sitesetting = $this->crud->fetchdatabyid('1','site_setting');
?>

      <nav class="sidebar">
         <div class="logo d-flex justify-content-between">
            <a href="<?php echo base_url('welcome/useraccount'); ?>"><img src="<?php echo base_url(); ?>media/uploads/site_setting/<?php echo $sitesetting[0]->logo; ?>" alt=""></a>
            <div class="sidebar_close_icon d-lg-none">
               <i class="ti-close"></i>
            </div>
         </div>
         <ul id="sidebar_menu">
            <!-- <li class="mm-active">
               <a  href="<?php echo base_url('useraccount'); ?>" >
               <img src="<?php echo base_url(); ?>user/img/menu-icon/1.svg" alt="">
               <span>Dashboard</span>
               </a>
            </li> -->

            <li class="">
               <a  href="<?php echo base_url('welcome/userassets/'.$this->session->userdata("id")); ?>">
               <img src="<?php echo base_url(); ?>user/img/menu-icon/3.svg" alt="">
               <span>My Assets</span>
               </a>
            </li>

            <li class="">
               <a  href="<?php echo base_url('welcome/userincome/'.$this->session->userdata("id")); ?>">
               <img src="<?php echo base_url(); ?>user/img/menu-icon/3.svg" alt="">
               <span>My Income</span>
               </a>
            </li>

            <li class="">
               <a  href="<?php echo base_url('welcome/addfund'); ?>">
               <img src="<?php echo base_url(); ?>user/img/menu-icon/3.svg" alt="">
               <span>Add Funds</span>
               </a>
            </li>

            <li class="">
               <a  href="<?php echo base_url('welcome/userkyc'); ?>">
               <img src="<?php echo base_url(); ?>user/img/menu-icon/3.svg" alt="">
               <span>KYC </span>
               </a>
            </li>

            <li class="">
               <a  href="<?php echo base_url('welcome/userhelp'); ?>">
               <img src="<?php echo base_url(); ?>user/img/menu-icon/3.svg" alt="">
               <span>Help </span>
               </a>
            </li>

            <li class="">
               <a  href="<?php echo base_url('user/userlogout'); ?>">
               <i class="ti-shift-left"></i>
               <span>Logout</span>
               </a>
            </li>


         </ul>
      </nav>