<?php 
$sitesetting = $this->db->get_where('site_setting',array('id'=>1,))->result_object();
$ambulance = vendor_data();
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="<?=website_name ?>">
      <meta name="keywords" content="<?=website_name ?>">
      <meta name="author" content="<?=website_name ?>">
      <meta property="og:url" content="<?=website_name ?>">
      <meta property="og:type" content="<?=website_name ?>">
      <meta property="og:title" content="<?=website_name ?>">
      <meta property="og:description" content="<?=website_name ?>">
      <meta property="og:image" content="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>">
      <meta name="twitter:card" content="summary_large_image">
      <meta property="twitter:domain" content="<?=base_url() ?>">
      <meta property="twitter:url" content="<?=base_url() ?>">
      <meta name="twitter:title" content="<?=website_name ?>">
      <meta name="twitter:description" content="<?=website_name ?>">
      <meta name="twitter:image" content="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>">
      <title>Welcome <?=$ambulance->username ?>!</title>
      <link rel="shortcut icon" type="image/x-icon" href="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>">
      <link rel="stylesheet" href="<?=base_url() ?>panelassets/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?=base_url() ?>panelassets/plugins/fontawesome/css/fontawesome.min.css">
      <link rel="stylesheet" href="<?=base_url() ?>panelassets/plugins/fontawesome/css/all.min.css">
      <link rel="stylesheet" href="<?=base_url() ?>panelassets/css/feathericon.min.css">
      <link rel="stylesheet" href="<?=base_url() ?>panelassets/plugins/morris/morris.css">
      <link rel="stylesheet" href="<?=base_url() ?>panelassets/css/custom.css">
   </head>
   <body>
      <div class="main-wrapper">
         <div class="header">
            <div class="header-left">
               <a href="<?=base_url() ?>" class="logo">
                  <?=website_name ?>
               </a>
               <a href="<?=base_url() ?>" class="logo logo-small">
                  <?=website_name ?>
               </a>
            </div>
            <a href="javascript:void(0);" id="toggle_btn">
            <i class="fe fe-text-align-left"></i>
            </a>
            
            <a class="mobile_btn" id="mobile_btn">
            <i class="fa fa-bars"></i>
            </a>
            <ul class="nav user-menu">
               <!-- <li class="nav-item dropdown noti-dropdown">
                  <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                  <i class="fe fe-bell"></i> <span class="badge rounded-pill">3</span>
                  </a>
                  <div class="dropdown-menu notifications">
                     <div class="topnav-dropdown-header">
                        <span class="notification-title">Notifications</span>
                        <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                     </div>
                     <div class="noti-content">
                        <ul class="notification-list">
                           <li class="notification-message">
                              <a href="#">
                                 <div class="notify-block d-flex">
                                    <span class="avatar avatar-sm flex-shrink-0">
                                    <img class="avatar-img rounded-circle" alt="User Image" src="<?=base_url() ?>panelassets/img/doctors/doctor-thumb-01.jpg">
                                    </span>
                                    <div class="media-body flex-grow-1">
                                       <p class="noti-details"><span class="noti-title">Dr. Ruby Perrin</span> Schedule <span class="noti-title">her appointment</span></p>
                                       <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                    </div>
                                 </div>
                              </a>
                           </li>
                           <li class="notification-message">
                              <a href="#">
                                 <div class="notify-block d-flex">
                                    <span class="avatar avatar-sm flex-shrink-0">
                                    <img class="avatar-img rounded-circle" alt="User Image" src="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>">
                                    </span>
                                    <div class="media-body flex-grow-1">
                                       <p class="noti-details"><span class="noti-title">Charlene Reed</span> has booked her appointment to <span class="noti-title">Dr. Ruby Perrin</span></p>
                                       <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                    </div>
                                 </div>
                              </a>
                           </li>
                           <li class="notification-message">
                              <a href="#">
                                 <div class="notify-block d-flex">
                                    <span class="avatar avatar-sm flex-shrink-0">
                                    <img class="avatar-img rounded-circle" alt="User Image" src="<?=base_url() ?>panelassets/img/profiles/avatar-02.jpg">
                                    </span>
                                    <div class="media-body flex-grow-1">
                                       <p class="noti-details"><span class="noti-title">Travis Trimble</span> sent a amount of $210 for his <span class="noti-title">appointment</span></p>
                                       <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                    </div>
                                 </div>
                              </a>
                           </li>
                           <li class="notification-message">
                              <a href="#">
                                 <div class="notify-block d-flex">
                                    <span class="avatar avatar-sm flex-shrink-0">
                                    <img class="avatar-img rounded-circle" alt="User Image" src="<?=base_url() ?>panelassets/img/profiles/avatar-03.jpg">
                                    </span>
                                    <div class="media-body flex-grow-1">
                                       <p class="noti-details"><span class="noti-title">Carl Kelly</span> send a message <span class="noti-title"> to his doctor</span></p>
                                       <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                    </div>
                                 </div>
                              </a>
                           </li>
                        </ul>
                     </div>
                     <div class="topnav-dropdown-footer">
                        <a href="#">View all Notifications</a>
                     </div>
                  </div>
               </li> -->
               <li class="nav-item dropdown has-arrow">
                  <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                  <span class="user-img"><img class="rounded-circle" src="<?=base_url() ?>media/uploads/<?=$ambulance->image ?>" width="31" alt="<?=$ambulance->username ?>"></span>
                  </a>
                  <div class="dropdown-menu">
                     <div class="user-header">
                        <div class="avatar avatar-sm">
                           <img src="<?=base_url() ?>media/uploads/<?=$ambulance->image ?>" alt="User Image" class="avatar-img rounded-circle">
                        </div>
                        <div class="user-text">
                           <h6><?=$ambulance->username ?></h6>
                           <!-- <p class="text-muted mb-0">Administrator</p> -->
                        </div>
                     </div>
                     <a class="dropdown-item" href="<?=base_url('vendor/about/edit/'.$ambulance->id) ?>">Settings</a>
                     <a class="dropdown-item" href='<?=base_url('auth/logout/'.$ambulance->role) ?>' >Logout</a>
                  </div>
               </li>
            </ul>
         </div>