<?php
$website=websitesetting();
$userweb=getdatasingle('tbl_settings',array('id'=>'3'));
$arrw=explode(",",$userweb->setting_end);
?>
<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a target="_blank" href="<?=base_url();?>" class="brand-link">
      <span class="brand-text font-weight-light"> <i class="fas fa-eye"></i> See Live</span>
    </a>
   
   
   
    <!-- Sidebar -->
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         
 <li class="nav-item">
            <a href="<?=base_url('dashboard');?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
        
		    <!--<li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Enquiry
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
			 
			  
			  <li class="nav-item">
                <a href="<?=base_url('cpdadmin/registration_list');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registration List</p>
                </a>
              </li>
			  
			  
             
            </ul>
          </li>-->

         <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Pages
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
			  <li class="nav-item">
                <a href="<?=base_url('cpdadmin/page_add/page');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Page Add</p>
                </a>
              </li>
			  
			  <li class="nav-item">
                <a href="<?=base_url('cpdadmin/page_list/page');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Page List</p>
                </a>
              </li>
             
            </ul>
          </li>
         <?php if(in_array(4,$arrw)) { ?>
         <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Categories
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
			  <li class="nav-item">
                <a href="<?=base_url('cpdadmin/page_add/category');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category Add</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="<?=base_url('cpdadmin/page_list/category');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category List</p>
                </a>
              </li>
            </ul>
          </li>
		 <?php } ?>
		 <?php if(in_array(5,$arrw)) { ?>
		  <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Product
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
			  <li class="nav-item">
                <a href="<?=base_url('cpdadmin/page_add/product');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product Add</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="<?=base_url('cpdadmin/page_list/product');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product List</p>
                </a>
              </li>
             
            </ul>
          </li>
          <?php } ?>
		  <?php if(in_array(6,$arrw)) { ?>
		  <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Blogs
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('cpdadmin/page_add/blog');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blog Add</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="<?=base_url('cpdadmin/page_list/blog');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blogs List</p>
                </a>
              </li>
             
            </ul>
          </li>
		  <?php } ?>
		  
		  
		  <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Media
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('cpdadmin/media_add/media');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Media Add</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="<?=base_url('cpdadmin/media_list/media');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Media List</p>
                </a>
              </li>
            </ul>
          </li>
		   <?php if(in_array(9,$arrw)) { ?>
		  <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Widgets
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
			 <li class="nav-item">
                <a href="<?=base_url('cpdadmin/media_add/widget');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Widget Add</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="<?=base_url('cpdadmin/media_list/widget');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Widget List</p>
                </a>
              </li>
            </ul>
          </li>
		  <?php } ?>
		   <?php if(in_array(7,$arrw)) { ?>
		  <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Testimonials
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('cpdadmin/media_add/testimonial');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Testimonial Add</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="<?=base_url('cpdadmin/media_list/testimonial');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Testimonial List</p>
                </a>
              </li>
            </ul>
          </li>
		  <?php } ?>
		  
		  
		  
		  <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage File
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('cpdadmin/media_add/file');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>File Add</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="<?=base_url('cpdadmin/media_list/file');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>File List</p>
                </a>
              </li>
            </ul>
          </li>
         
         
          <li class="nav-header">Manage Settings</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Settings
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('cpdadmin/manage_site/3');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Settings Site</p>
                </a>
              </li>
			  
			   <li class="nav-item">
                <a href="<?=base_url('cpdadmin/manage_site/2');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Social Links</p>
                </a>
              </li>
			  
			  <li class="nav-item">
                <a href="<?=base_url('cpdadmin/manage_site/4');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin Options</p>
                </a>
              </li>
             
            </ul>
          </li>
		  
		   <?php 
		  $session=session();
		  if($session->get('role')==6 or $session->get('role')==7){ ?>
		  <li class="nav-header">Super Admin</li>
		  <li class="nav-item">
			<a href="<?=base_url('cpdadmin/super_admin');?>" class="nav-link">
			  <i class="far fa-circle nav-icon"></i>
			  <p>Super Admin</p>
			</a>
		  </li>
          <?php } ?>
           <?php if($session->get('role')==6 or $session->get('role')==7){ ?>
		  <li class="nav-header">Manage Admin</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Admin Manage
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('cpdadmin/admin_list');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin List</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="<?=base_url('cpdadmin/admin_add');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin Add</p>
                </a>
              </li>
             
            </ul>
          </li>
           <?php } ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>