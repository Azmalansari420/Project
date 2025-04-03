<?php 
   include_once('include/topmenu.php');
   $table_name    = "branch";
    $url_id        = @$_GET['id'];
//FETCH
   if(isset($url_id) and is_numeric($url_id) and !empty($url_id)){
      $fsbd = fs($table_name,array('id'=>$url_id));   
    if(is_array($fsbd) || is_object($fsbd)){
       $from_date      = $add_date; 
    $to_date = date ("Y", strtotime('-1 Year', strtotime($add_date)));
      
    }else{
      url('all-branch.php');
    }
   }
    //include bar code library
  include_once("barcode/tcpdf_barcodes_2d.php");
  
  // set the barcode content and type
    $content = BASE_URL."show_branch.php?branc_id=".$fsbd->id;
  $barcodeobj = new TCPDF2DBarcode($content, 'QRCODE,H');
  $barcode = $barcodeobj->getBarcodeHTML(2,2, 'black');
 
?>
  <link href="authorization.css" type="text/css" rel="stylesheet">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
 
	
	
<section class="content">
      <div class="row">
        <div class="col-xs-12">
 
              <div id="print_box"> 
                <img class="bg_img" src="../edu_img/authorization-bg.jpg">
                <div class="aut_bg">  
                      <div class="img_barcode">
                      <div class="row">
                        
                      <div class="col-sm-1 col-xs-1"></div>
                      <div class="col-sm-2 col-xs-2">
                        <div class="d_css">
                         <img src="../upload/<?php echo $fsbd->picture; ?>" style="width: 100%;height:129px;">
                       </div>
                        </div>
                       <div class="col-sm-6 col-xs-5"></div>
                        <div class="col-sm-2 col-xs-2" style="margin-top: 15px;">
                          <div class="barcode_set">
                          <?php echo $barcode; ?>
                           </div> 
                          </div> 
                      </div>
                      </div>

                      <div class="about_branch">
                         <div class="row"> 
                          <div class="col-sm-12 col-xs-12">
                            <h3><?php echo $fsbd->p_name; ?></h3>
                            <h1><?php echo $fsbd->b_name; ?></h1>
                            <h4 style="margin-top: 18px;"><?php echo $fsbd->address; ?></h4>

                            <h4>Email Id : <?php echo $fsbd->email; ?> <span>Contact : <?php echo $fsbd->mobile; ?><span></h4>
                              <h4>is our authorize study and training centre.</h4>
                              <h4><strong>For the Session <?php echo $to_date; ?> - <?php echo date_format(date_create("$from_date"),"y");?> </strong></h4>
                              <h4 class="b_code"><strong>Center Code : </strong> <?php echo $fsbd->b_code; ?></h4>
                          </div>
                         </div>
                      </div>
             
             
              </div>
          <!-- /.box -->
        </div>
		 
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   <?php include_once('include/footer.php');?>
  
  
