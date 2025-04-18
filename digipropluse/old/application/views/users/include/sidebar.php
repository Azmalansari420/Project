<?php
$currentURL = current_url();
$ambulance = users_data();

?>
<div class="sidebar" id="sidebar">
   <div class="sidebar-inner slimscroll">
      <div id="sidebar-menu" class="sidebar-menu">
         <ul>
            <li class="menu-title">
               <span>Main</span>
            </li>
            <li class="<?php if($currentURL==base_url('users/dashboard')) echo 'active'; ?>">
               <a href="<?=base_url('users/dashboard') ?>"><i class="fe fe-home"></i> <span>Dashboard</span></a>
            </li>                     
         

            <li class="<?php if($currentURL==base_url('users/purchase_list/listing')) echo 'active'; ?>">
               <a href="<?=base_url('users/purchase_list/listing') ?>"><i class="fe fe-layout"></i> <span>Purchase List<List></List></span></a>
            </li>                

                             

           

    
            <li>
               <a href="<?=base_url('auth/logout/'.$ambulance->role) ?>"><i class="fe fe-logout"></i> <span>Logout</span></a>
            </li>
         </ul>
      </div>
   </div>
</div>