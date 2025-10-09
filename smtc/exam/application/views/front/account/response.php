<!DOCTYPE html>
<html lang="en">
<head>
  <title>Exam</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/front/css/exam.css') ?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;

}
</style>
</head>
<body>
<div class="tophead">
  <div class="container">
  <div class="row">
    <div class="col-sm-3 col-xs-5" style="background: #ffff;height: 80px">
      <center>
        <a  href="<?php echo base_url('') ?>"> <img src="https://sgmtc.co.in/wp-content/uploads/2021/03/logo4-300x109.png"  style="height:80px"></a>
      </center>
    </div>
   
   
    <div class="col-sm-9 col-xs-7"> 
      <div class="pull-right">
         <a href="<?php echo base_url('user/logout'); ?>"  style="color: #ffff" > Logout</a>
      </div>
     </div>
  </div>
</div>
</div>


<section class="site-section">
     <div class="container">
        <div class="row">
           
            <div class="col-lg-12 comment-form-wrap ">
                <div class="dashboard-right for-borderbottom">
                  <div class="dashboard">
                    <div class="page-title">
                      <!-- <h2>Edit Account Information</h2> -->
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                          <div class="welcome-msg dashboard">                       
                              <div class="rs-latest-part part8 mb-70 md-mb-30">
                                <div class="rs-latest-part part8 mb-70 md-mb-30">
                                  <div class="item">
                                      <div class="blog-item">
                                          <div class="blog-full">
                                              <div class="blog-slider-meta">
                                                <div class="row content-justify-center">
                                                  <div class="col-sm-3"></div>
                                                  <div class="col-sm-6">
                                                      <center>
                                                       
                                                        <br>
                                                        <br>
                                                        <?php echo @$_SESSION['responce']; ?> 
                                                          
                                                      </center>
                                                  </div>
                                                </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
  </section>
  
<footer class="container-fluid text-center footer">
 
</footer>

</body>
</html>