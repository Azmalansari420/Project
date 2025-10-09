<?php 

include_once("include/topmenu.php");


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
    $barcode = $barcodeobj->getBarcodeHTML(1,1, 'black');

?>

<style type="text/css">

.barcode{
           position: absolute;
       bottom: -5px;
    right: 90px;
}
</style>

  <!-- Content Wrapper. Contains page Content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <!--
        <li class="active"><a href="javascript:;" onclick="printDiv('print_box')" class="btn btn-info btn-sm">
              <i class="fa fa-save"></i> Print</a></li> -->
       
       <li class="active"><a href="print-icard.php" target="_blank" class="btn btn-info btn-sm">
              <i class="fa fa-save"></i> Print</a></li>
              
      </ol>
    </section>

    <!-- Main content -->
    <section class="content"  id="print_box">
 <!-- Small boxes (Stat box) -->
<div style="width:400px !important;background:#fff !important; border:1px solid #ededed !important; height:248px!important;margin:0 auto;position: relative;">
    <div class="barcode"><?php echo $barcode; ?></div>
<div class="bgimg">
<img class="img-responsive" src="images/edu.png"style="">
</div>
       
<div style="margin-top:-256px;padding:10px;overflow:hidden;">

<table>
<thead>
<tr>
<td style="width:60%;"></td>
<td style="width:40%;;"><img src="../admin_panel/uploads/user/<?php e(@$fs->photo); ?>" style="    margin-left: 91px;
    position: relative;
    top: 75px;
    width: 60px;
    height: 68px;"></td>
</tr>
</thead>
</table>
<table style="margin-top:10px;">
<tbody>
<tr>
<td style="width:40%;;"><strong><strong></td>
<td style="width:60%;"><span style="color:#000; display:block; font-size:11px;font-weight:600;"><?php e($fs->reg_id);?></span></td>
</tr>
<tr>
<td style="width:40%;;"><strong><strong></td>
<td style="width:60%;"><span style="color:#000; display:block; font-size:11px;font-weight:600;"><?php e(ucwords($fs->name));?> </span></td>
</tr>
<tr>
<td style="width:40%;;"><strong><strong></td>
<td style="width:60%;"><span style="color:#000; display:block; font-size:11px;font-weight:600;"><?php e(ucwords($fs->father_name));?></span></td>
</tr>
<tr>
<td style="width:40%;;"><strong><strong></td>
<td style="width:60%;"><span style="color:#000; display:block; font-size:11px;font-weight:600;"><?php echo date_format(date_create("$fs->dob"),"d-m-Y");?></span></td>
</tr>
<tr>
<td style="width:40%;;"><strong><strong></td>
<td style="width:60%;"><span style="color:#000; display:block; font-size:10px;font-weight:600;"><?php  $course = fs("tbl_course",array('id' =>$fs->course_id)); ?><?php echo $course->title; ?></span></td>
</tr>
 <tr>
<td style="width:40%;;"><strong><strong></td>
<td style="width:60%;"><span style="color:#000; display:block; font-size:11px;font-weight:600;"><?php echo $user_specialization; ?></span></td>
</tr>
<tr>
<td style="width:40%;;"><strong><strong></td>
<td style="width:60%;"><span style="color:#000; display:block; font-size:11px;font-weight:600;"><?php e($fs->address);?></span></td>
</tr>
<tr>
<td style="width:40%;;"><strong><strong></td>
<td style="width:60%;"><span style="color:#000; display:block; font-size:11px;font-weight:600;"><?php e($fs->mobile);?></span></td>
</tr>
<tr>
<td style="width:40%;;"><strong><strong></td>
<td style="width:60%;"><span style="color:#000; display:block; font-size:11px;font-weight:600;"></span><?php e($fs->exam_session);?><span><div style="float:right; margin-top:-39px;">
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
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
<?php include_once('include/footer.php');?>

   <script type="text/javascript">
 //Print Invoice
  
function printDiv(divName) {
  var printContents    = document.getElementById(divName).innerHTML; 
  document.body.innerHTML = printContents;
  window.print();
}

   </script>
