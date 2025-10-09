<?php $link = $this->setting_model->get_all_setting();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title> <?php echo $link[0]->title ?> || Admin Login </title>
  <!--favicon-->
  <link rel="icon" href="<?=base_url();?>assets/panel_assets/images/favicon.png" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="<?=base_url();?>assets/panel_assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="<?=base_url();?>assets/panel_assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="<?=base_url();?>assets/panel_assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="<?=base_url();?>assets/panel_assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body>

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

     <div class="card-authentication2 mx-auto my-5">
      <div class="card-group">
       

        <div class="card mb-0 ">
          <div class="card-body" >
            <div class="card-content p-3">

        <center>   <img src="<?php echo base_url('uploads/logo/').$link[0]->logo ?>" style="width:100px"> </center>     
            
           <div class="card-title text-uppercase text-center py-3" >  <?php echo $link[0]->title ?> || Admin Login</div>
             <form id="login_validator" method="post" class=" login_validator">
              <div class="form-group">
               <div class="position-relative has-icon-left">
                 <label for="exampleInputUsername" class="sr-only" >Email</label>
                 <input type="text" id="exampleInputUsername" name="email"class="form-control" placeholder="Username">
                 <div class="form-control-position">
                  <i class="icon-user"></i>
                </div>
               </div>
              </div>
              <div class="form-group">
               <div class="position-relative has-icon-left">
                <label for="exampleInputPassword" class="sr-only" >Password</label>
                <input type="password" name="password" id="exampleInputPassword" class="form-control" placeholder="Password">
                <div class="form-control-position">
                  <i class="icon-lock"></i>
                </div>
               </div>
              </div>
            
            <input type="submit" value="Login" class="btn btn-primary btn-block waves-effect waves-light login_button">
         
             <div class="text-center pt-3">
           

               <?=$this->session->flashdata('MSG')?>
                           
            

            <hr>
            </div>
          </form>
         </div>
        </div>
        </div>
       </div>
      </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
  

  
  </div><!--wrapper-->
  
  <!-- Bootstrap core JavaScript-->
  <script src="<?=base_url();?>assets/panel_assets/js/jquery.min.js"></script>
  <script src="<?=base_url();?>assets/panel_assets/js/popper.min.js"></script>
  <script src="<?=base_url();?>assets/panel_assets/js/bootstrap.min.js"></script>
  
  <!-- sidebar-menu js -->
  <script src="<?=base_url();?>assets/panel_assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="<?=base_url();?>assets/panel_assets/js/app-script.js"></script>
  
</body>

</html>

