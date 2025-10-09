<?php 

//include bar code library
include_once("barcode/tcpdf_barcodes_2d.php");

$content = WEB_URL."student-verification.php?reg_id=".$reg_id;
$barcodeobj = new TCPDF2DBarcode($content, 'QRCODE,H');
$barcode = $barcodeobj->getBarcodeHTML(5,5, 'black');
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 </br> </br> </br> </br> </br> </br>
    <div id="dvContainer" class="html-content"  >
        <center>
            <?php echo $barcode; ?>
        </center>
        
    </div>
    </br> </br>
   <center>  &nbsp; &nbsp; &nbsp; 
  <a href="javascript:void(0)" id="btnPrint" class="print-link avoid-this btn btn-primary ">Print</a> &nbsp; &nbsp; &nbsp;  
  </center>

<script src="<?php echo base_url() ; ?>assets/print/dist/jQuery.print.min.js"></script>
<script type='text/javascript'>

        jQuery(function($) { 'use strict';
         
     
            $('#btnPrint').on('click', function() {
                //Print ele4 with custom options
                $("#dvContainer").print({
                    //Use Global styles
                    globalStyles : false,
                    //Add link with attrbute media=print
                    mediaPrint : false,
                    //Custom stylesheet
                    //Print in a hidden iframe
                    iframe : false,
                    //Don't print this
                    noPrintSelector : ".avoid-this",
                    //Log to console when printing is done via a deffered callback
                    deferred: $.Deferred().done(function() { console.log('Printing done', arguments); })
                });
            });
        });
        //]]>
        </script>