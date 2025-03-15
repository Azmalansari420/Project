<?php
$currentURL = current_url();
$ambulance = vendor_data();
?>
<div class="sidebar" id="sidebar">
   <div class="sidebar-inner slimscroll">
      <div id="sidebar-menu" class="sidebar-menu">
         <ul>
            <li class="menu-title">
               <span>Main</span>
            </li>
            <li class="<?php if($currentURL==base_url('vendor/dashboard')) echo 'active'; ?>">
               <a href="<?=base_url('vendor/dashboard') ?>"><i class="fe fe-home"></i> <span>Dashboard</span></a>
            </li>                     

            <li class="<?php if($currentURL==base_url('vendor/employees/listing')) echo 'active'; ?>">
               <a href="<?=base_url('vendor/employees/listing') ?>"><i class="fe fe-layout"></i> <span>Employees List <List></List></span></a>
            </li> 

            <li class="<?php if($currentURL==base_url('vendor/dealers/add')) echo 'active'; ?>">
               <a href="<?=base_url('vendor/dealers/add') ?>"><i class="fe fe-layout"></i> <span>Add Dealers <List></List></span></a>
            </li>                  

            <li class="<?php if($currentURL==base_url('vendor/dealers/listing')) echo 'active'; ?>">
               <a href="<?=base_url('vendor/dealers/listing') ?>"><i class="fe fe-layout"></i> <span>Dealers List<List></List></span></a>
            </li>                

            <li class="<?php if($currentURL==base_url('vendor/purchase_list/listing')) echo 'active'; ?>">
               <a href="<?=base_url('vendor/purchase_list/listing') ?>"><i class="fe fe-layout"></i> <span>Purchase List<List></List></span></a>
            </li>                

                             

            <li class="<?php if($currentURL==base_url('vendor/dealer_enquiry/listing')) echo 'active'; ?>">
               <a href="<?=base_url('vendor/dealer_enquiry/listing') ?>"><i class="fe fe-layout"></i> <span>Enquiry List<List></List></span></a>
            </li>

            <li class="<?php if($currentURL==base_url('vendor/withdraw/listing')) echo 'active'; ?>">
               <a href="<?=base_url('vendor/withdraw/listing') ?>"><i class="fe fe-layout"></i> <span>Withdraw<List></List></span></a>
            </li>


             <li class="<?php if($currentURL==base_url('vendor/history/listing')) echo 'active'; ?>">
               <a href="<?=base_url('vendor/history/listing') ?>"><i class="fe fe-layout"></i> <span>History<List></List></span></a>
            </li>

    
            <li>
               <a href="<?=base_url('auth/logout/'.$ambulance->role) ?>"><i class="fe fe-logout"></i> <span>Logout</span></a>
            </li>
         </ul>
      </div>
   </div>
</div>