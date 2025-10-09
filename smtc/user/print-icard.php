<?php 
session_start();
    $session_admin  =  @$_SESSION['session_user'];
include_once("../lib/all_files.php");
$con->check_session($session_admin,"index.php");
$fs = fs('tbl_user',array('id'=>$session_admin)); 

 
 

	$dd_y = "+6 Month";
	
	
 $re_issue_date = date ("Y-m-d", strtotime($dd_y, strtotime($fs->join_date)));
 $issue_date = date ("Y-m-d", strtotime('+ 35 day', strtotime($re_issue_date)));
 
 
 $string_to_array = explode('#',$fs->specialization);
 if(is_array($string_to_array) || is_object($string_to_array)){
     $user_specialization = "";
     foreach($string_to_array as $sta){
         $user_specialization .= id_to_name('specialization',$sta)." /";
         
     }
     $user_specialization = rtrim($user_specialization,"/");
 }else{
     $user_specialization = "";
 }
 
 
 //include bar code library
    include_once("../barcode/tcpdf_barcodes_2d.php");
  
    //set the barcode content and type
    $content = BASE_URL."student-verification.php?reg_id=".$fs->reg_id;
    $barcodeobj = new TCPDF2DBarcode($content, 'QRCODE,H');
    $barcode = $barcodeobj->getBarcodeHTML(1.2,1.2, 'black');

?>

<style type="text/css">

.barcode{
  position: absolute;
    bottom: -68px;
    right: 100px;
}
.btn-success{
    background: #3f9b06;
    padding: 5px 24px;
    border-radius: 10px;
    text-decoration: none;
    color: #fff;}
.btn-danger{
    background: #f00;
    padding: 5px 24px;
    border-radius: 10px;
    text-decoration: none;
    color: #fff;
}
</style>
 
    <section class="content"  id="print_box">
 <!-- Small boxes (Stat box) -->
<div style="width:500px !important;background:#fff !important; border:1px solid #ededed !important; height:248px!important;margin:0 auto;position: relative;">
    <div class="barcode"><?php echo $barcode; ?></div>
<div class="bgimg">
<img class="img-responsive" src="images/edu.png" style="width: 100%;">
</div>
       
<div style="    margin-top: -318px;
    padding: 10px;
    overflow: hidden;
    margin-left: 29px;">

<table>
<thead>
<tr>
<td style="width:60%;"></td>
<td style="width:40%;"><img src="../admin_panel/uploads/user/<?php e(@$fs->photo); ?>" style="    margin-left:137px;;
    position: relative;
    top: 90px;
    width: 66px;
    height: 83px;"></td>
</tr>
</thead>
</table>
<table style="margin-top:10px;">
<tbody>
<tr>
<td style="width:40%;"><strong><strong></td>
<td style="width:60%;"><span style="color:#000; display:block; font-size:14px;font-weight:600;"><?php e($fs->reg_id);?></span></td>
</tr>
<tr>
<td style="width:40%;"><strong><strong></td>
<td style="width:60%;"><span style="color:#000; display:block; font-size:14px;font-weight:600;"><?php e(ucwords($fs->name));?> </span></td>
</tr>
<tr>
<td style="width:40%;"><strong><strong></td>
<td style="width:60%;"><span style="color:#000; display:block; font-size:14px;font-weight:600;"><?php e(ucwords($fs->father_name));?></span></td>
</tr>
<tr>
<td style="width:40%;"><strong><strong></td>
<td style="width:60%;"><span style="color:#000; display:block; font-size:14px;font-weight:600;"><?php echo date_format(date_create("$fs->dob"),"d-M-Y");?></span></td>
</tr>
<tr>
<td style="width:40%;"><strong><strong></td>
<td style="width:60%;"><span style="color:#000; display:block; font-size:11px;font-weight:600;"><?php  $course = fs("tbl_course",array('id' =>$fs->course_id)); ?><?php echo $course->title; ?></span></td>
</tr>
 <tr>
<td style="width:40%;"><strong><strong></td>
<td style="width:60%;"><span style="color:#000; display:block; font-size:14px;font-weight:600;"><?php echo $user_specialization; ?></span></td>
</tr>
<tr>
<td style="width:40%;"><strong><strong></td>
<td style="width:60%;"><span style="color:#000; display:block; font-size:14px;font-weight:600;"><?php e($fs->address);?></span></td>
</tr>
<tr>
<td style="width:40%;"><strong><strong></td>
<td style="width:60%;"><span style="color:#000; display:block; font-size:14px;font-weight:600;"><?php e($fs->mobile);?></span></td>
</tr>
<tr>
<td style="width:40%;"><strong><strong></td>
<td style="width:60%;"><span style="color:#000; display:block; font-size:14px;font-weight:600;"><?php e($fs->exam_session);?></span><span><div style="float:right; margin-top:-39px;">
<span>Seal & Sign.</span>
<br />

<span>Authority</span>

</div></span></td>
</tr>
</tbody>
</table>

</div>
</div>



</div>


</div>
</div>
    </section> 
 <h2 style="text-align:center;margin-top:100px;">
 <a href="javascript:;" onclick="printDiv('print_box')" class="btn-success"> Print Id Card</a>
 <a href="view-card.php" class="btn-danger"> Back</a>
</h2>
   <script type="text/javascript">
 //Print Invoice
  
function printDiv(divName) {
  var printContents    = document.getElementById(divName).innerHTML; 
  document.body.innerHTML = printContents;
  window.print();
}

   </script>
