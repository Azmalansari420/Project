<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Update <?php echo $page_title; ?></title>
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
            <div class="d-flex align-items-center justify-content-between mb-3">
               <div>
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>">Home</a></li>
                     <li class="breadcrumb-item active"><i class="fa fa-arrow-back"></i> Update <?php echo $page_title; ?></li>
                  </ol>
                  <h1 class="page-header mb-0">Update <?php echo $page_title; ?></h1>
               </div>
               <div>
                  <button onclick="history.back();" class="btn btn-primary">Back</button>
               </div>
            </div>


           
               <form  class="row" method="post" enctype="multipart/form-data" action="#">
                  <div class="col-lg-8">
                     <div class="card border-0 mb-4">
                        <div class="card-header h6 mb-0 bg-none p-3">
                           <i class="fa fa-fa fa-lg fa-fw text-dark text-opacity-50 me-1"></i> Content
                        </div>
                        <div class="card-body">
                           <div class="row">
                              <div class="col-lg-6 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" name="first_name"  value="<?php echo $EDITDATA[0]->first_name; ?>">
                                 </div>
                              </div>
                              <div class="col-lg-6 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Mobile Number</label>
                                    <input type="text" class="form-control" name="mobile" value="<?php echo $EDITDATA[0]->mobile; ?>">
                                 </div>
                              </div>
                              
                              <div class="col-lg-6 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Username</label>
                                    <input type="text" class="form-control" name="username"  value="<?php echo $EDITDATA[0]->username; ?>">
                                 </div>
                              </div>

                              <div class="col-lg-6 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="text" class="form-control" name="password" value="<?php echo $EDITDATA[0]->password; ?>">
                                 </div>
                              </div>
                              
                              <div class="col-lg-12 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control" name="email" value="<?php echo $EDITDATA[0]->email; ?>">
                                 </div>
                              </div>
                              


                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="col-lg-4">
                      <div class="card border-0 mb-4">
                        <div class="card-body">
                           <div class="row">

                              <div class="col-lg-12 mb-4">
                                 <div class="mb-lg-0 mb-3 bg-light">
                                    <label class="form-label"style="width: 100%;text-align: center; position: relative;border: 1px solid aliceblue;">Upload image
                                        <img id="blah" src="<?php echo base_url($upload_path); ?><?php echo $EDITDATA[0]->image; ?>" class="sd" style="width: 100%; height: 100%; position: relative; top: -22px;">
                                        <input  type="hidden" class="form-control" name="oldimage" value="<?php echo $EDITDATA[0]->image; ?>">
                                        <input style="display: none;" type="file" class="form-control" name="image"  id="imgInp">
                                    </label>
                                 </div>
                              </div>
                              

                              <div class="col-lg-12 mb-4 text-center">
                                 <div class="mb-lg-0 mb-3">
                                    <button class="btn btn-primary d-block" type="submit" name="submit">
                                       Update <?php echo $page_title; ?>
                                   </button>
                                 </div>
                              </div>

                              
                             
                           </div>
                        </div>
                     </div>                  
                  </div>
               </form>
           
         </div>
       
      </div>



   <?php $this->load->view('admin/include/footer') ?>

   </body>
</html>