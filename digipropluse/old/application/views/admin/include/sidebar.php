<?php
$currentURL = current_url();
$sitesetting = $this->crud->fetchdatabyid('1','site_setting');
?>
<sidebar id="sidebar" class="app-sidebar">
   <div data-scrollbar="true" data-height="100%">
      <ul class="nav">
         <li class="nav-profile">
            <div class="profile-img11">
               <img src="<?php echo base_url(); ?>media/uploads/site_setting/<?php echo $sitesetting[0]->logo; ?>" alt="<?=website_name ?>" style="width: 100%;">
            </div>
           
         </li>
         
         
         <li class="nav-divider"></li>
         <li class="nav-header">Admin Panel</li>

         <li class="<?php if($currentURL==base_url('admin/dashboard')) echo 'active'; ?>">
            <a href="<?php echo base_url('admin/dashboard'); ?>">
            <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
            <span class="nav-text">Dashboard</span>
            </a>
         </li>

         <li class="<?php if($currentURL==base_url('admin_con/site_setting/edit/1')) echo 'active'; ?>">
            <a href="<?php echo base_url('admin_con/site_setting/edit/1'); ?>">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">Site Setting</span>
            </a>
         </li>

         <li class="<?php if($currentURL==base_url('admin_con/vendor/listing')) echo 'active'; ?>">
            <a href="<?php echo base_url('admin_con/vendor/listing');?>">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">Vendors</span>
            </a>
         </li>
         <li class="<?php if($currentURL==base_url('admin_con/dealer/listing')) echo 'active'; ?>">
            <a href="<?php echo base_url('admin_con/dealer/listing');?>">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">Dealers</span>
            </a>
         </li>
         <li class="<?php if($currentURL==base_url('admin_con/users/listing')) echo 'active'; ?>">
            <a href="<?php echo base_url('admin_con/users/listing');?>">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">Users</span>
            </a>
         </li>

         <li class="nav-divider"></li>
         <li class="nav-header">Sub Admin</li>

         <li class="<?php if($currentURL==base_url('admin_con/role/listing')) echo 'active'; ?>">
            <a href="<?php echo base_url('admin_con/role/listing');?>">
               <span class="nav-icon"><i class="fa fa-wrench bg-black text-white"></i></span>
               <span class="nav-text">Create Role</span>
            </a>
         </li>

         <li class="<?php if($currentURL==base_url('admin_con/tbl_admin/listing')) echo 'active'; ?>">
            <a href="<?php echo base_url('admin_con/tbl_admin/listing');?>">
               <span class="nav-icon"><i class="fa fa-user-astronaut bg-black text-white"></i></span>
               <span class="nav-text">Assign Role</span>
            </a>
         </li>

         <li class="nav-divider"></li>

         <li class="<?php if($currentURL==base_url('admin_con/plan_purchase/listing')) echo 'active'; ?>">
            <a href="<?php echo base_url('admin_con/plan_purchase/listing');?>">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">Plan Purchase</span>
            </a>
         </li>

         <li class="<?php if($currentURL==base_url('admin_con/withdraw_request/listing')) echo 'active'; ?>">
            <a href="<?php echo base_url('admin_con/withdraw_request/listing');?>">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">Witfdraw Request</span>
            </a>
         </li>
         <li class="<?php if($currentURL==base_url('admin_con/user_history/listing')) echo 'active'; ?>">
            <a href="<?php echo base_url('admin_con/user_history/listing');?>">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">All History</span>
            </a>
         </li>

         <li class="<?php if($currentURL==base_url('admin_con/slider/listing')) echo 'active'; ?>">
            <a href="<?php echo base_url('admin_con/slider/listing');?>">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">Slider</span>
            </a>
         </li>

         <li class="<?php if($currentURL==base_url('admin_con/partner/listing')) echo 'active'; ?>">
            <a href="<?php echo base_url('admin_con/partner/listing');?>">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">Partner</span>
            </a>
         </li>

         <li class="<?php if($currentURL==base_url('admin_con/blog/listing')) echo 'active'; ?>">
            <a href="<?php echo base_url('admin_con/blog/listing');?>">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">Blog</span>
            </a>
         </li>

         <li class="<?php if($currentURL==base_url('admin_con/device/listing')) echo 'active'; ?>">
            <a href="<?php echo base_url('admin_con/device/listing');?>">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">Device</span>
            </a>
         </li>
         
         <li class="<?php if($currentURL==base_url('admin_con/plans/listing')) echo 'active'; ?>">
            <a href="<?php echo base_url('admin_con/plans/listing');?>">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">Plans</span>
            </a>
         </li>
         
         <!-- <li class="<?php if($currentURL==base_url('admin_con/pricerange/listing')) echo 'active'; ?>">
            <a href="<?php echo base_url('admin_con/pricerange/listing');?>">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">Price Range</span>
            </a>
         </li> -->
         <li class="<?php if($currentURL==base_url('admin_con/product/listing')) echo 'active'; ?>">
            <a href="<?php echo base_url('admin_con/product/listing');?>">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">Product</span>
            </a>
         </li>
         
         <li class="<?php if($currentURL==base_url('admin_con/contact/listing')) echo 'active'; ?>">
            <a href="<?php echo base_url('admin_con/contact/listing');?>">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">Contact Enquiry</span>
            </a>
         </li>

         

         <!-- <li class="has-sub">
            <a href="#">
            <span class="nav-icon"><i class="fa fa-cog bg-gradient-orange text-white"></i></span>
            <span class="nav-text">Forms</span>
            <span class="nav-caret"><b class="caret"></b></span>
            </a>
            <ul class="nav-submenu">
               <li class="active"><a href="add.php"><span class="nav-text">Add</span></a></li>
               <li><a href="list.php"><span class="nav-text">Table</span></a></li>
            </ul>
         </li> -->

         
       
         <li class="nav-divider"></li>
         <li class="">
            <a href="<?php echo base_url('admin/logout');?>">
               <span class="nav-icon"><i class="fa fa-cog bg-gradient-purple text-white"></i></span>
               <span class="nav-text">Logout </span>
            </a>
         </li>
         <li class="nav-copyright">&copy; <?=date('Y'); ?> <?=website_name ?>.<br> All Right Reserved</li>
      </ul>
   </div>
</sidebar>