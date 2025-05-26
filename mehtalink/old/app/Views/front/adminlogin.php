 <?php
  include('include/common_data.php');?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>


.login-container {
  margin-top: 10%;
  //border: 1px solid #CCD1D1;
  border-radius: 5px;
  //box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  max-width: 50%;
}

.ads {
  background-color: #A569BD;
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
  color: #fff;
  padding: 15px;
  text-align: center;
}

.ads h1 {
  margin-top: 20%;
}

#fl {
  font-weight: 600;
}

#sl {
  font-weight: 100 !important;
}

.profile-img {
  text-align: center;
}

.profile-img img {
  border-radius: 50%;
  /* animation: mymove 2s infinite; */
}

@keyframes mymove {
  from {border: 1px solid #F2F3F4;}
  to {border: 8px solid #F2F3F4;}
}

.login-form {
  padding: 15px;
}

.login-form h3 {
  text-align: center;
  padding-top: 15px;
  padding-bottom: 15px;
}

.form-control {
  font-size: 14px;
}

.forget-password a {
  font-weight: 500;
  text-decoration: none;
  font-size: 14px;
}
.ak {
    color: red;
    font-style: italic;
}
</style>
<body style="background-image: url('<?=base_url('public');?>/images.jpg');background-repeat: no-repeat;background-size: 100%;">
    <div class="container">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 login-form">
		 <center><h1><span id="fl"><?=$site_name;?></h1></center>
          <div class="profile-img">
            <img src="<?=base_url('public');?>/am/admin.png" style="max-width: 100%;
    height: 150px;">
          </div>
          <h3>Admin Login</h3>
		  <center><?php 
		  //$session=session();
		  //echo $session->get('id');
		  if(isset($error)) { echo $error;}?></center>
          <form action="<?=base_url('c-panel');?>" method="post">
            <div class="form-group">
              <input type="text" class="form-control" name="email" placeholder="Username">
			  <span class="ak"><?php if(isset($validation)){ echo $validation->getError('email');}?></span>
			  
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="password" placeholder="Password">
			  <span class="ak"><?php if(isset($validation)){ echo $validation->getError('password');}?></span>
            </div>
            <div class="form-group">
              <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Sign In</button>
            </div>
            
          </form>
        </div>
		<div class="col-md-3"></div>
      </div>
    </div>
    </body>