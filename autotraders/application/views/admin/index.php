

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Admin Panel</title>
      <?php $this->load->view('admin/include/css'); ?>  

     </head>
  <body class=" ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->
    
      <div class="wrapper">
        <section class="login-content">
             <div class="container h-100">
                <div class="row align-items-center justify-content-center h-100">
                   <div class="col-md-5">
                      <div class="card p-3">
                         <div class="card-body">
                            <div class="auth-logo">
                               <img src="<?php echo base_url(); ?>media/admin/images/logo.png" class="img-fluid  rounded-normal  darkmode-logo" alt="logo">

                               <?php 
                               $site = $this->crud->fetchdatabyid('1','site_setting');
                               ?>
                               <img src="<?php echo base_url(); ?>media/uploads/site_setting/<?php echo $site[0]->logo; ?>" class="img-fluid rounded-normal light-logo" alt="logo">
                            </div>
                            <h3 class="mb-3 font-weight-bold text-center">Sign In</h3>
                            <p class="text-center text-secondary mb-4">Log in to your account to continue</p>
                          
                            <form method="post" action="#">
                               <div class="row">
                                  <div class="col-lg-12">
                                     <div class="form-group">
                                        <label class="text-secondary">Username</label>
                                        <input class="form-control" name="username" type="text" placeholder="Enter Username">
                                     </div>
                                  </div>
                                  <div class="col-lg-12 mt-2">
                                     <div class="form-group">
                                         <div class="d-flex justify-content-between align-items-center">
                                             <label class="text-secondary">Password</label>
                                         </div>
                                        <input class="form-control" type="password" placeholder="Enter Password" name="password">
                                     </div>
                                  </div>
                               </div>
                               <button type="submit" name="submit" class="btn btn-primary btn-block mt-2">Log In</button>
                              
                            </form>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
        </section>
      </div>
    
  <?php $this->load->view('admin/include/footer'); ?>

  </body>
</html>