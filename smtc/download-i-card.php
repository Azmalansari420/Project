<?php include ('header.php');?>
<link rel="stylesheet" type="text/css" href="css/datepicker.css">
<div class="container"style="margin-top:20px;margin-bottom:20px;">
  
<?php
if(isset($_POST['submit'])){
   $enroll = $_POST['enroll'];
   $check = $con->check("tbl_user",array('reg_id'=>$enroll));

  if($check>=1){
  $fs      = fs("tbl_user",array('reg_id'=>$enroll));
  $course = fs("course",array('id' =>$fs->course_id));
  
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
include_once("barcode/tcpdf_barcodes_2d.php");

//set the barcode content and type
$content = BASE_URL."student-verification.php?reg_id=".$fs->reg_id;
$barcodeobj = new TCPDF2DBarcode($content, 'QRCODE,H');
$barcode = $barcodeobj->getBarcodeHTML(1.2,1.2, 'black'); 
?>
<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        
        <style type="text/css">

      
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
            <div style="width:550px !important;background:#f6ddbe!important; border:1px solid #ededed !important;important;margin:0 auto;position: relative;">
    
                <div class="bgimg">
                <img class="img-responsive" src="user/images/edu.png" style="width: 100%;">
                </div>
                       
                <div style="    margin-top: -340px;padding: 10px; overflow: hidden;margin-left: 8px;">
                
                    <table>
                        <thead>
                        <tr>
                        <td style="width:70%;"></td>
                        <td style="width:30%;"><img src="/admin_panel/uploads/user/<?php e(@$fs->photo); ?>" style="    margin-left:85px;;
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
                            <td style="width:30%;"></td>
                            <td style="width:70%;"><span style="color:#000; display:block; font-size:10px;font-weight:500;"><?php e($fs->reg_id);?></span></td>
                        </tr>
                        <tr>
                        <td style="width:30%;"></td>
                        <td style="width:70%;"><span style="color:#000; display:block; font-size:10px;font-weight:500;"><?php e(ucwords($fs->name));?> </span></td>
                        </tr>
                        <tr>
                        <td style="width:30%;"></td>
                        <td style="width:70%;"><span style="color:#000; display:block; font-size:10px;font-weight:500;"><?php e(ucwords($fs->father_name));?></span></td>
                        </tr>
                        <tr>
                        <td style="width:30%;"></td>
                        <td style="width:70%;"><span style="color:#000; display:block; font-size:10px;font-weight:500;"><?php echo date_format(date_create($fs->dob),"d-M-Y");?></span></td>
                        </tr>
                        <tr>
                        <td style="width:30%;"></td>
                        <td style="width:70%;"><span style="color:#000; display:block; font-size:10px;font-weight:500;"><?php  $course = fs("tbl_course",array('id' =>$fs->course_id)); ?><?php echo $course->title; ?></span></td>
                        </tr>
                         <tr>
                        <td style="width:30%;"></td>
                        <td style="width:70%;"><span style="color:#000; display:block; font-size:10px;font-weight:500;"><?php echo $user_specialization; ?></span></td>
                        </tr>
                        <tr>
                        <td style="width:30%;"></td>
                        <td style="width:70%;"><span style="color:#000; display:block; font-size:10px;font-weight:500;"><?php e($fs->address);?></span></td>
                        </tr>
                        <tr>
                        <td style="width:30%;"></td>
                        <td style="width:70%;"><span style="color:#000; display:block; font-size:10px;font-weight:500;"><?php e($fs->mobile);?></span></td>
                        </tr>
                        <tr>
                        <td style="width:30%;"></td>
                        <td style="width:70%;"><span style="color:#000; display:block; font-size:10px;font-weight:500;"><?php e($fs->exam_session);?></span></td>
                        </tr>
                        <tr>
                        <td style="width:30%;"></td>
                        <td style="width:70%;"><?php echo $barcode; ?></td>
                        </tr>
                        </tbody>
                    </table>
                        
                </div>
            </div>
        </section> 
    </br>
    </br>
    </br>
     <h2 style="text-align:center;margin-top:100px;">
             <a href="javascript:;" onclick="printDiv('print_box')" class="btn-success"> Print Id Card</a>
             <a href="view-card.php" class="btn-danger"> Back</a>
            </h2>
              
       
     
    </div>
</div>
  
<?php }else{

  echo "<script>alert('Kindly Check Enrolment Number/Date of Birth Or You Are Not Active');window.location.href='result.php';</script>";
} }else{?>
  
<div class="row">
    <div class="col-md-6">
         <!--<img class="img-responsive"src="imge/result2.jpg">-->
    </div>
    <div class="col-md-6">
      <div class="contact-page-form">
      <form action="" method="post">
          <h3> Download ID - Card</h3>
        <div class="form-group">
          <label for="Enrolment No"  style="color: #fff;">Please Enter Your Registration  Or Enrollment Number :</label>
          <input type="text" class="form-control" id="Enrolment No" placeholder="Enrolment No" name="enroll" required="">
        </div>
    
        <button type="submit" name="submit" class="btn btn-default">Get  Id Card</button>
      </form>
    </div>
    </div>
</div>
<?php } ?>
</div>


<?php include ('footer.php');?>
 <script type="text/javascript">
             //Print Invoice
              
            function printDiv(divName) {
              var printContents    = document.getElementById(divName).innerHTML; 
              document.body.innerHTML = printContents;
              window.print();
            }

   </script>
