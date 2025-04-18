<?php
$currentURL = current_url();
$ambulance = dealer_data();

?>
<div class="sidebar" id="sidebar">
   <div class="sidebar-inner slimscroll">
      <div id="sidebar-menu" class="sidebar-menu">
         <ul>
            <li class="menu-title">
               <span>Main</span>
            </li>
            <li class="<?php if($currentURL==base_url('dealer/dashboard')) echo 'active'; ?>">
               <a href="<?=base_url('dealer/dashboard') ?>"><i class="fe fe-home"></i> <span>Dashboard</span></a>
            </li>                     

            <li class="<?php if($currentURL==base_url('dealer/users/add')) echo 'active'; ?>">
               <a href="<?=base_url('dealer/users/add') ?>"><i class="fe fe-layout"></i> <span>Add Users <List></List></span></a>
            </li>                  

            <li class="<?php if($currentURL==base_url('dealer/users/listing')) echo 'active'; ?>">
               <a href="<?=base_url('dealer/users/listing') ?>"><i class="fe fe-layout"></i> <span>Users List<List></List></span></a>
            </li>                

            <!-- <li class="<?php if($currentURL==base_url('dealer/purchase_list/add')) echo 'active'; ?>">
               <a href="<?=base_url('dealer/purchase_list/add') ?>"><i class="fe fe-layout"></i> <span>New Purchase <List></List></span></a>
            </li>   -->

            <li class="<?php if($currentURL==base_url('dealer/purchase_list/listing')) echo 'active'; ?>">
               <a href="<?=base_url('dealer/purchase_list/listing') ?>"><i class="fe fe-layout"></i> <span>Purchase List<List></List></span></a>
            </li>                

                             

            <li class="<?php if($currentURL==base_url('dealer/dealer_enquiry/listing')) echo 'active'; ?>">
               <a href="<?=base_url('dealer/dealer_enquiry/listing') ?>"><i class="fe fe-layout"></i> <span>Enquiry List<List></List></span></a>
            </li>

            <li class="<?php if($currentURL==base_url('dealer/withdraw/listing')) echo 'active'; ?>">
               <a href="<?=base_url('dealer/withdraw/listing') ?>"><i class="fe fe-layout"></i> <span>Withdraw<List></List></span></a>
            </li>


             <li class="<?php if($currentURL==base_url('dealer/history/listing')) echo 'active'; ?>">
               <a href="<?=base_url('dealer/history/listing') ?>"><i class="fe fe-layout"></i> <span>History<List></List></span></a>
            </li>

    
            <li>
               <a href="<?=base_url('auth/logout/'.$ambulance->role) ?>"><i class="fe fe-logout"></i> <span>Logout</span></a>
            </li>
         </ul>
      </div>
   </div>
</div>