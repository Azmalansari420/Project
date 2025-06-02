<?php 
$user = $this->crud->selectDataByMultipleWhere('tbl_admin',array('id'=>$this->session->userdata("id"),));
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Dashboard</title>
      <?php $this->load->view('admin/include/allcss') ?>
   </head>
   <body>
      <div id="snackbar"><?php echo $this->session->flashdata('message'); ?></div>
     <?php if($this->session->flashdata('message')){ ?>
       <script>
         function myFunction() {
           var x = document.getElementById("snackbar");
           x.className = "show";
           setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
         }
         myFunction();
         </script>
  
   <?php } ?>
      <?php echo loder; ?>
      
      <div id="app" class="app app-header-fixed app-sidebar-fixed ">

         <?php $this->load->view('admin/include/header') ?>
         <?php $this->load->view('admin/include/sidebar') ?>
         


         
         <div id="content" class="app-content">
            <ol class="breadcrumb float-xl-end">
               <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
               <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <h1 class="page-header">Dashboard</h1>
<?php
if($this->session->userdata('role')==1)
   { ?>
            <div class="row">
               <div class="col-xl-3 col-md-6">
                  <div class="widget widget-stats bg-blue">
                     <div class="stats-icon"><i class="fa fa-desktop"></i></div>
                     <div class="stats-info">
                        <h4>Products</h4>
                        <p><?php echo $this->db->count_all('product'); ?></p>
                     </div>
                     <div class="stats-link">
                        <a href="<?php echo base_url('admin_con/product/listing');?>">View Detail <i class="fa fa-arrow-circle-right"></i></a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-md-6">
                  <div class="widget widget-stats bg-info">
                     <div class="stats-icon"><i class="fa fa-link"></i></div>
                     <div class="stats-info">
                        <h4>Categories</h4>
                        <p><?php echo $this->db->count_all('categories'); ?></p>
                     </div>
                     <div class="stats-link">
                        <a href="<?php echo base_url('admin_con/categories/listing');?>">View Detail <i class="fa fa-arrow-circle-right"></i></a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-md-6">
                  <div class="widget widget-stats bg-orange">
                     <div class="stats-icon"><i class="fa fa-users"></i></div>
                     <div class="stats-info">
                        <h4>All Vendors</h4>
                        <p><?php 
                        $this->db->where('role',2);
                          $query = $this->db->get('tbl_admin');
                          echo $query->num_rows(); ?></p>
                     </div>
                     <div class="stats-link">
                        <a href="<?php echo base_url('admin_con/vendor_list/listing');?>">View Detail <i class="fa fa-arrow-circle-right"></i></a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-md-6">
                  <div class="widget widget-stats bg-red">
                     <div class="stats-icon"><i class="fa fa-clock"></i></div>
                     <div class="stats-info">
                        <h4>Vendor Ticket</h4>
                        <p><?php echo $this->db->count_all('vendor_ticket'); ?></p>
                     </div>
                     <div class="stats-link">
                        <a href="<?php echo base_url('admin_con/admin_vendor_ticket/listing');?>">View Detail <i class="fa fa-arrow-circle-right"></i></a>
                     </div>
                  </div>
               </div>
               
            </div>
<?php } ?>
            

         </div>
       
      </div>


         <?php $this->load->view('admin/include/footer') ?>


   </body>
</html>