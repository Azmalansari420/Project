<?php ($get_user_user = Helpers::get_user()); ?>

   <header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box horizontal-logo">
                    <a href="<?php echo e(url('/')); ?>" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="<?php echo e(url('public')); ?>/assetsadmin/images/logo.png" alt="" >
                        </span>
                        <span class="logo-lg">
                            <img src="<?php echo e(url('public')); ?>/assetsadmin/images/logo.png" alt="" >
                        </span>
                    </a>
                    <a href="<?php echo e(url('/')); ?>" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="<?php echo e(url('public')); ?>/assetsadmin/images/logo.png" alt="">
                        </span>
                        <span class="logo-lg">
                            <img src="<?php echo e(url('public')); ?>/assetsadmin/images/logo.png" alt="" >
                        </span>
                    </a>
                </div>
                <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger material-shadow-none" id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>
            </div>
            <div class="d-flex align-items-center">
                <div class="dropdown d-md-none topbar-head-dropdown header-item">
                    <button type="button" class="btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-search fs-22"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">
                        <form class="p-3">
                            <div class="form-group m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button" class="btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle" data-toggle="fullscreen">
                        <i class='bx bx-fullscreen fs-22'></i>
                    </button>
                </div>
                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button" class="btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle light-dark-mode">
                        <i class='bx bx-moon fs-22'></i>
                    </button>
                </div>
                <div class="dropdown ms-sm-3 header-item topbar-user">
                    <button type="button" class="btn material-shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <img class="rounded-circle header-profile-user" src="<?php echo e(Helpers::image_check($get_user_user->image,'user.png')); ?>" alt="Header Avatar">
                            <span class="text-start ms-xl-2">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text"><?php echo e(Helpers::get_user()->name); ?></span>
                                <span class="d-none d-xl-block ms-1 fs-12 user-name-sub-text">
                                    <?php if(Helpers::get_user()->role==1): ?>
                                    Founder
                                    <?php endif; ?>
                                    <?php if(Helpers::get_user()->role==3): ?>
                                    Sub Admin
                                    <?php endif; ?>
                                </span>
                            </span>
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <h6 class="dropdown-header">Welcome <?php echo e(Helpers::get_user()->name); ?>!</h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo e(route('admin-change-password.index')); ?>"><i class="mdi mdi-eye text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Change Password </span></a>
                        <a class="dropdown-item logout" ><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- removeNotificationModal -->
<div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
            </div>
            <div class="modal-body">
                <div class="mt-2 text-center">
                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        <h4>Are you sure ?</h4>
                        <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="<?php echo e(url('/')); ?>" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="<?php echo e(url('public')); ?>/assetsadmin/images/favicon.png" alt="" >
                    </span>
                    <span class="logo-lg">
                        <img src="<?php echo e(url('public')); ?>/assetsadmin/images/logo.png" alt="" >
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="<?php echo e(url('/')); ?>" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="<?php echo e(url('public')); ?>/assetsadmin/images/favicon.png" alt="" >
                    </span>
                    <span class="logo-lg">
                        <img src="<?php echo e(url('public')); ?>/assetsadmin/images/logo.png" alt="">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>
            <div class="dropdown sidebar-user m-1 rounded">
                <button type="button" class="btn material-shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="d-flex align-items-center gap-2">
                        <img class="rounded header-profile-user" src="<?php echo e(url('public')); ?>/assetsadmin/images/users/avatar-1.jpg" alt="Header Avatar">
                        <span class="text-start">
                            <span class="d-block fw-medium sidebar-user-name-text">Anna Adame</span>
                            <span class="d-block fs-14 sidebar-user-name-sub-text"><i class="ri ri-circle-fill fs-10 text-success align-baseline"></i> <span class="align-middle">Online</span></span>
                        </span>
                    </span>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <h6 class="dropdown-header">Welcome Anna!</h6>
                    <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
                    <a class="dropdown-item" href="apps-chat.html"><i class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Messages</span></a>
                    <a class="dropdown-item" href="apps-tasks-kanban.html"><i class="mdi mdi-calendar-check-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Taskboard</span></a>
                    <a class="dropdown-item" href="pages-faqs.html"><i class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Help</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-wallet text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Balance : <b>$5971.67</b></span></a>
                    <a class="dropdown-item" href="pages-profile-settings.html"><span class="badge bg-success-subtle text-success mt-1 float-end">New</span><i class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Settings</span></a>
                    <a class="dropdown-item" href="auth-lockscreen-basic.html"><i class="mdi mdi-lock text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Lock screen</span></a>
                    <a class="dropdown-item" href="auth-logout-basic.html"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
                </div>
            </div>
            <div id="scrollbar">
                <div class="container-fluid">
                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="<?php echo e(route('dashboard')); ?>">
                                <i class="ri-dashboard-line"></i> <span data-key="t-dashboards">Dashboard</span>
                            </a>
                        </li>

                       

                        <!-- <li class="nav-item">
                            <a class="nav-link menu-link" href="<?php echo e(route('product.list')); ?>">
                                <i class="ri-product-hunt-line"></i> <span data-key="t-dashboards">Products</span>
                            </a>
                        </li> -->

                        <!-- <li class="nav-item">
                            <a class="nav-link menu-link" href="<?php echo e(route('order.list')); ?>">
                                <i class="ri-shopping-basket-2-line"></i> <span data-key="t-dashboards">Orders</span>
                            </a>
                        </li> -->

<!-- 
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="<?php echo e(route('package.list')); ?>">
                                <i class="ri-star-s-line"></i> <span data-key="t-dashboards">Package</span>
                            </a>
                        </li> -->

                        <!-- <li class="nav-item">
                            <a class="nav-link menu-link" href="<?php echo e(route('deposit.list')); ?>">
                                <i class="ri-star-s-line"></i> <span data-key="t-dashboards">Deposit Request</span>
                            </a>
                        </li> -->

                        <!-- <li class="nav-item">
                            <a class="nav-link menu-link" href="<?php echo e(route('withdrawal.list')); ?>">
                                <i class="ri-star-s-line"></i> <span data-key="t-dashboards">Withdrawal Request</span>
                            </a>
                        </li> -->

                        <!-- <li class="nav-item">
                            <a class="nav-link menu-link" href="<?php echo e(route('support.list')); ?>">
                                <i class="ri-headphone-line"></i> <span data-key="t-dashboards">Support</span>
                            </a>
                        </li>                   
                         -->
                        
                        <li class="nav-item hide">
                            <a class="nav-link menu-link" href="<?php echo e(route('user.list')); ?>">
                                <i class="ri-file-user-line"></i> <span data-key="t-dashboards">All Users</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="<?php echo e(route('technician.list')); ?>">
                                <i class="ri-file-user-line"></i> <span data-key="t-dashboards">All Technician</span>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link menu-link" href="<?php echo e(route('kyc.list')); ?>">
                                <i class="ri-picture-in-picture-line"></i> <span data-key="t-dashboards">KYC</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="<?php echo e(route('kyc-option.list')); ?>">
                                <i class="ri-picture-in-picture-line"></i> <span data-key="t-dashboards">KYC Options</span>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link menu-link" href="<?php echo e(route('payout-history.list')); ?>">
                                <i class=" ri-truck-line"></i> <span data-key="t-dashboards">Payout List</span>
                            </a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="<?php echo e(route('invoice.list')); ?>">
                                <i class="ri-pages-line"></i> <span data-key="t-dashboards">Invoice</span>
                            </a>
                        </li>  -->
                        
                        
                        
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="<?php echo e(route('bank.list')); ?>">
                                <i class="ri-bank-line"></i> <span data-key="t-dashboards">User Bank Details</span>
                            </a>
                        </li> 
                        <!-- <li class="nav-item">
                            <a class="nav-link menu-link" href="<?php echo e(route('income-history.list')); ?>">
                                <i class=" ri-git-repository-line"></i> <span data-key="t-dashboards">Income Report</span>
                            </a>
                        </li>  -->
                        


                        <li class="nav-item hide">
                            <a href="#sidebarWebsite" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarWebsite" data-key="t-projects">
                                <i class="ri-question-line"></i>Website
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarWebsite">
                                <ul class="nav nav-sm flex-column">
                                    
                                    <li class="nav-item">
                                        <a class="nav-link menu-link" href="<?php echo e(route('blog.list')); ?>">
                                            <i class=" ri-file-copy-line"></i> <span data-key="t-dashboards">Blog</span>
                                        </a>
                                    </li> 
                                    
                                    

                                    <li class="nav-item">
                                        <a href="#sidebarHomePage" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarHomePage" data-key="t-projects">
                                            <i class="ri-home-line"></i>Home Page
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarHomePage">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link menu-link" href="<?php echo e(route('home-banner.list')); ?>">
                                                        <i class="ri-picture-in-picture-line"></i> <span data-key="t-dashboards">Banner</span>
                                                    </a>
                                                </li>                                                
                                                
                                            </ul>
                                        </div>
                                    </li>


                                    <li class="nav-item">
                                        <a class="nav-link menu-link" href="<?php echo e(route('privacy-policy.index')); ?>">
                                            <i class=" ri-file-copy-line"></i> <span data-key="t-dashboards">Privacy Policy</span>
                                        </a>
                                    </li> 
                                    <li class="nav-item">
                                        <a class="nav-link menu-link" href="<?php echo e(route('term-condition.index')); ?>">
                                            <i class=" ri-file-copy-line"></i> <span data-key="t-dashboards">Terms & Condition</span>
                                        </a>
                                    </li> 
                                    <li class="nav-item">
                                        <a class="nav-link menu-link" href="<?php echo e(route('refund-policy.index')); ?>">
                                            <i class="ri-refund-line"></i> <span data-key="t-dashboards">Refund Policy</span>
                                        </a>
                                    </li> 
                                    <li class="nav-item">
                                        <a class="nav-link menu-link" href="<?php echo e(route('pricing-policy.index')); ?>">
                                            <i class=" ri-money-cny-box-line"></i> <span data-key="t-dashboards">Pricing Policy</span>
                                        </a>
                                    </li> 


                                </ul>
                            </div>
                        </li>


                        

                        
                        <li class="nav-item">
                            <a href="#sidebarSetting" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSetting" data-key="t-projects">
                                <i class=" ri-settings-2-line"></i>Setting
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarSetting">
                                <ul class="nav nav-sm flex-column">

                                    <li class="nav-item">
                                        <a class="nav-link menu-link" href="<?php echo e(route('setting.main')); ?>">
                                            <i class=" ri-file-copy-line"></i> <span data-key="t-dashboards">Main</span>
                                        </a>
                                    </li> 
                                    
                                    <!-- <li class="nav-item">
                                        <a class="nav-link menu-link" href="<?php echo e(route('payment-setting.list')); ?>">
                                            <i class=" ri-file-copy-line"></i> <span data-key="t-dashboards">Payment</span>
                                        </a>
                                    </li> -->

                                    <li class="nav-item">
                                        <a class="nav-link menu-link" href="<?php echo e(route('setting.emails')); ?>">
                                            <i class=" ri-file-copy-line"></i> <span data-key="t-dashboards">Emails</span>
                                        </a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a class="nav-link menu-link" href="<?php echo e(route('setting.payoutpin')); ?>">
                                            <i class=" ri-file-copy-line"></i> <span data-key="t-dashboards">Payout Pin</span>
                                        </a>
                                    </li>
                                    
                                    <!-- <li class="nav-item">
                                        <a class="nav-link menu-link" href="<?php echo e(route('setting.gst')); ?>">
                                            <i class=" ri-file-copy-line"></i> <span data-key="t-dashboards">GST</span>
                                        </a>
                                    </li> -->
                                    
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End --><?php /**PATH D:\xamp\htdocs\projects\tanjeem\jinnuncle\resources\views/admin/headers/header.blade.php ENDPATH**/ ?>