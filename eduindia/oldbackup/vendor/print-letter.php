<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="UTF-8">
	<title>Document</title> 
  <link rel="stylesheet" href="<?php e($a_f_n);?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link href="authorization.css" type="text/css" rel="stylesheet">
  <style>
      .barcode_set{    
        margin-top: 15px;
    }
  </style>
</head>
<body>  
   <?php if($admin->letter_status == 0){ ?>
    <h3 class="waring_message_text">Dear Training Centre, Please pay your renewal fee or contact to Admin</h3>               
        <?php    }else{ ?>
        
 
              <div id="print_box"> 
                <img class="bg_img" src="../edu_img/authorization-bg.jpg">
                <div class="aut_bg">  
                      <div class="img_barcode">
                      <div class="row">
                        
                      <div class="col-sm-1 col-xs-1"></div>
                      <div class="col-sm-2 col-xs-2">
                        <div class="d_css">
                         <img src="../upload/<?php echo $admin_pic; ?>" style="width: 100%;height:129px;">
                       </div>
                        </div>
                       <div class="col-sm-6 col-xs-5"></div>
                        <div class="col-sm-2 col-xs-2">
                            <div class="barcode_set">
                            <?php echo $barcode; ?>
                            </div>
                            </div> 
                      </div>
                      </div>

                      <div class="about_branch">
                         <div class="row">
                          
                          <div class="col-sm-12 col-xs-12">
                            <h3>Mr. <?php echo $p_name; ?></h3>
                            <h1><?php echo $admin_name; ?></h1>
                            <h4 style="margin-top: 18px;"><?php echo $b_full_address; ?></h4>

                            <h4>Email Id : <?php echo $b_email; ?> <span>Contact : <?php echo $b_mobile; ?><span></h4>
                              <h4>is authorize to conduct training on behalf of Foundation.</h4>
                              <h4><strong>For the Session <?php echo $to_date; ?> - <?php echo date_format(date_create("$from_date"),"y");?> </strong></h4>
                              <h4 class="b_code"><strong>Center Code : </strong> <?php echo $admin_uniqid_id; ?></h4>
                          </div>
                         </div>
                      </div>
             
             
              </div>
          <!-- /.box -->
        </div>
		 <?php } ?>
    
  	
</body>
</html>