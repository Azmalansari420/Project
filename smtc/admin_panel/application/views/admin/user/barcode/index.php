<?php


 
// include 2D barcode class (search for installation path)

		require_once('tcpdf_barcodes_2d.php');

// set the barcode content and type
$barcodeobj = new TCPDF2DBarcode('https://www.codediffusion.in?id=1', 'QRCODE,H');

// output the barcode as HTML object
echo $barcodeobj->getBarcodeHTML(4, 4, 'black');

//============================================================+
// END OF FILE
//============================================================+
