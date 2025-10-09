<?php 
    include_once("../lib/all_files.php");
	
	$reg_id = $_GET['reg_id'];
	if(isset($reg_id) and !empty($reg_id)){
	    
	}else{
	    url('all-student.php');
	}
	
	//include bar code library
    include_once("../barcode/tcpdf_barcodes_2d.php");
  
    //set the barcode content and type
    $content = BASE_URL."student-verification.php?reg_id=".$reg_id;
    $barcodeobj = new TCPDF2DBarcode($content, 'QRCODE,H');
    $barcode = $barcodeobj->getBarcodeHTML(5,5, 'black');
  
  
?>
<html>
  <head>
      <title>SMTC</title>
      <style>
          .btn-success{
    background: #3c9b00;
    padding: 10px;
    color: #fff;
    border-radius: 10px;
    text-decoration: none;
}
.btn-danger{
    background: #c40505;
    padding: 10px;
    color: #fff;
    border-radius: 10px;
    text-decoration: none;
}
      </style>
  </head>    
  <body>
      
      
      <section id="print_box" style="margin-bottom: 50px;">
      <?php echo $barcode; ?>
      </section>
      
      <a href="javascript:;" class="btn-success" onclick="printDiv('print_box')">Print Barcode</a>
      <a href="all-student.php" class="btn-danger">Back</a>
      
  </body>
     <script type="text/javascript">
 //Print Invoice
  
function printDiv(divName) {
  var printContents    = document.getElementById(divName).innerHTML; 
  document.body.innerHTML = printContents;
  window.print();
}

   </script>
</html>   

		 
     
  