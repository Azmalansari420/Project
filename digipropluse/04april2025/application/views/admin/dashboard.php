<!DOCTYPE html>
<html lang="en">
<title><?=website_name ?></title>
   <?php $this->load->view('admin/include/allcss') ?>
   <body>
      <div id="app" class="app app-header-fixed app-sidebar-fixed">
      <?php $this->load->view('admin/include/topbar') ?>
      <?php $this->load->view('admin/include/sidebar') ?>
         

         


         <div id="content" class="app-content">
            <h1 class="page-header">
               Dashboard 
            </h1>
            <div class="row">

               <div class="col-xl-3 col-sm-6">
                  <a href="<?=base_url('admin_con/vendor/listing') ?>" class="widget-stats bg-gradient-blue text-white m-b-15">
                     <div class="widget-stats-info">
                        <div class="widget-stats-title">Total Vendor</div>
                        <div class="widget-stats-value">
                           <?php
                           $this->db->where('role', 1);
                           $vendor =  $this->db->count_all_results('registration');
                           ?>
                           <?=$vendor ?>
                        </div>
                     </div>
                  </a>
               </div>

               <div class="col-xl-3 col-sm-6">
                  <a href="<?=base_url('admin_con/dealer/listing') ?>" class="widget-stats widget-stats-inverse bg-gradient-purple m-b-15">
                     <div class="widget-stats-info">
                        <div class="widget-stats-title">TOTAL Dealer</div>
                        <div class="widget-stats-value">
                           <?php
                           $this->db->where('role', 2);
                           $dealewr =  $this->db->count_all_results('registration');
                           ?>
                           <?=$dealewr ?>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="col-xl-3 col-sm-6">
                  <a href="<?=base_url('admin_con/users/listing') ?>" class="widget-stats widget-stats-inverse bg-gradient-pink m-b-15">
                     <div class="widget-stats-info">
                        <div class="widget-stats-title">Total USER</div>
                        <div class="widget-stats-value">
                           <?php
                           $this->db->where('role', 3);
                           $user =  $this->db->count_all_results('registration');
                           ?>
                           <?=$user ?>
                        </div>
                     </div>
                  </a>
               </div>

               <div class="col-xl-3 col-sm-6">
                  <a href="<?=base_url('admin_con/plan_purchase/listing') ?>" class="widget-stats widget-stats-inverse bg-gradient-orange m-b-15">
                     <div class="widget-stats-info">
                        <div class="widget-stats-title">Total Plan Purchase</div>
                        <div class="widget-stats-value">
                           <?php
                           $plan =  $this->db->count_all_results('plan_purchase');
                           ?>
                           <?=$plan ?>
                        </div>
                        
                     </div>
                     
                  </a>
               </div>
               



               <div class="col-xl-12 col-sm-12">
                  <div class="widget-card widget-card-inverse">

                     <div class="widget-card-col col-12 col-lg-12" style="height: 100px;">
                        <div class="widget-card-cover" style="background-image: url(<?=base_url() ?>media/admin/img/dashboard-cover.jpg);">
                           <div class="cover-bg"></div>
                        </div>
                        <div class="widget-card-content widget-hero bottom">
                           <h1>Welcome back, Admin!</h1>
                           <p class="m-b-0">I am glad to see you back online. Today is a great day!</p>
                        </div>
                     </div>
                  </div>
               </div>

            </div>
         </div>
         <a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
      </div>

       <?php $this->load->view('admin/include/theams') ?>
       <?php $this->load->view('admin/include/allscript') ?>

      
   </body>
</html>