
<!doctype html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Admin Dashboard</title>
      
      <?php $this->load->view('admin/include/css'); ?>  

    </head>
  <body class="  ">
  
    <div class="wrapper">
       <?php $this->load->view('admin/include/sidebar'); ?>

       <?php $this->load->view('admin/include/topbar'); ?>

      <div class="content-page">
        <div class="container-fluid">
         <div class="row">

            <div class="col-md-12 mb-4 mt-1">
               <div class="d-flex flex-wrap justify-content-between align-items-center">
                  <?php 
                   $user = $this->crud->selectDataByMultipleWhere('tbl_admin',array('id'=>$this->session->userdata('id')));
                   foreach($user as $data)
                   { 
                  ?>
                   <h4 class="font-weight-bold">Welcome To <?php echo $data->first_name; ?></h4>
                <?php } ?>
               </div>
            </div>


            <div class="col-lg-12 col-md-12">
            <?php echo $this->session->flashdata('message'); ?>
               <div class="row">
                  <div class="col-md-12 text-center">
                     <a href="">
                        <div class="card">
                           <div class="card-body">
                              <div class="d-flex align-items-center justify-content-center">
                                 <div class="">
                                     <div class="d-flex flex-wrap justify-content-start align-items-center">
                                        <h5 class="mb-0 font-weight-bold">Welcome To Dashboard</h5>
                                     </div>                            
                                 </div>
                              </div>
                           </div>
                        </div>
                     </a>   
                  </div>

                <!--   <div class="col-md-4">
                     <a href="<?php echo base_url('admin_con/slider/listing');?>">
                        <div class="card">
                           <div class="card-body">
                              <div class="d-flex align-items-center">
                                 <div class="">
                                     <div class="d-flex flex-wrap justify-content-start align-items-center">
                                        <h5 class="mb-0 font-weight-bold">Slider</h5>
                                     </div>                            
                                 </div>
                              </div>
                           </div>
                        </div>
                     </a>   
                  </div> -->

               

                 
               </div>
            </div>
         </div>
          <!-- Page end  -->
        </div>
      </div>
    </div>
    <!-- Wrapper End-->
   <?php $this->load->view('admin/include/footer'); ?>

   </body>
</html>