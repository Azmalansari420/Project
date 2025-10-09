<!doctype html>
<?php $link = $this->setting_model->get_all_setting();?>
<html lang="en">

<head>
    <title> Student Exam Login </title>

    <meta name="description" content="">
    <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?php echo base_url('assets/front/') ?>fonts/icomoon/style.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/front/') ?>css/bootstrap/bootstrap.css">
   
  
    <link rel="stylesheet" href="<?php echo base_url('assets/front/') ?>fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/front/') ?>css/aos.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/front/') ?>css/style.css">
  
  <style>
      .form-control{
          
          font-size:15px;
          padding-left:20px;
}


  </style>

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


<section class="site-section" style="margin-top:5%">
      <div class="container">
        <div class="row">
            <div class="col-md-3  "></div>
            <div class="col-md-6  ">

                <div class="comment-form-wrap ">
           
                  
                <div class="theme-card bg-light p-5">
                        
                  <center>
                    <a  href="<?php echo base_url('') ?>">   <img src="<?php echo $this->config->item('site_url').'/admin_panel/uploads/logo/'.$link[0]->logo ?>" style="width:100px"></a>
                  </center>
                  <br>
                     <h3 class="mb-5 text-center">Exam Login</h3>

                    <?php echo $this->session->flashdata('msg'); ?>
       
                 
                    <form class="theme-form form-signin" action="<?php echo base_url('user/login'); ?>" id="login-form" method="post">
                        <div class="form-group">
                            <label for="reg_id" style="font-size:16px">Enrollment Number*</label>
                            <input type="text" class="form-control" minlength = "10" maxlength="20" id="reg_id" name="reg_id" placeholder="SMTC/XXX-YYYYY" required="" value="<?php echo set_value('reg_id'); ?>">
                              <?php echo form_error('reg_id'); ?>
                        </div>
                        <div class="form-group">
                            <label for="review" style="font-size:16px">Date Of Birth</label>
                            <input type="date" name="dob" class="form-control"  placeholder="Enter your dob" required="" value="<?php echo set_value('dob'); ?>">
                                    <?php echo form_error('dob'); ?> 
                        </div>

                        <center><?php echo $this->session->flashdata('verification'); ?></center>

                    </br>
                  
                        <center>
                              <button type="submit"class="btn btn-primary btn-block" name="login" >Login</button>
                        </center>
                    
                         </br> 
                        
                        
                </form>

                <hr>
                

                
                 
                </div>
            </div>
            </div>
           
        </div>
    </div>
</section>
<!--- End Header -->


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="<?php echo base_url('assets/parsley/parsley.js'); ?>"></script>
<script class="example">
$(document).ready(function(){
	$('.form-signin').parsley();
});
</script>
</body>
</html>