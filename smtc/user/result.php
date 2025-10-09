<?php 
 
include_once("include/topmenu.php");
 //include bar code library
include_once("../barcode/tcpdf_barcodes_2d.php");
//set the barcode content and type
$content = BASE_URL."student-verification.php?reg_id=".$fs->reg_id;
$barcodeobj = new TCPDF2DBarcode($content, 'QRCODE,H');
$barcode = $barcodeobj->getBarcodeHTML(3,3, 'black');
 
?>

  <!-- Content Wrapper. Contains page Content -->
  <div class="content-wrapper">
   

     <section class="content" id="ppg">
      <div class="row">
        <div class="col-xs-12">

          <div class="box box-info">
            <div class="box-header">
          <h3 class="box-title">Student Result</h3>
   
    
        </div>
       <div class="box-body">
                <?php 
                 if(($fs->marksheet_status==1)&& ($fs->marksheet)) {?>
                <iframe src="../admin_panel/uploads/user/<?php e(@$fs->marksheet); ?>" alt="" style="width:100%;height:700px;" /></iframe>
                <?php } ?>
                
                <?php if(($fs->marksheet_status==1)&& (empty($fs->marksheet))) {?>
                <?php
                    $course = fs("tbl_course",array('id' =>$fs->course_id));

                    $result = $con->get('tbl_result'," where user_refid = '". $fs->id."' order by semester asc");
                    $resultlatest = $con->get('tbl_result', " where user_refid = '". $fs->id."' order by semester desc limit 1  ");
                    $marksheet = $con->get('tbl_result_marksheet',"where result_id = '". $resultlatest[0]->id."' order by id asc");  
                    ?>
                     <div id="dvContainer" class="html-content">
                            <link rel="preconnect" href="https://fonts.googleapis.com">
                            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                            <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
                            <link rel="preconnect" href="https://fonts.googleapis.com">
                            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                            <link href="https://fonts.googleapis.com/css2?family=Niconne&display=swap" rel="stylesheet">
                             <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
                            <style>
                              .certificate {
                                          width:766px;height: 1080px;
                                        font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif!important;
                                        font-weight: 400;
                                          background: url(../admin_panel/uploads/marksheet.jpg);background-repeat: no-repeat;background-size: cover;margin:auto;
                                    }
                                    
                                    .height{
                                        height :180px ;
                                    }
                                    
                                    table {
                                        border-collapse: collapse;
                                         border: none; 
                                          padding: 15px!important;
                                        text-align: left;
                                    } 
                        
                                    th, td{
                                        border: none; 
                                        padding: 2px!important;
                                      
                                          font-size: 14px;
                                    }
                                  
                                  
                                    h2{
                                        font-size:26px;letter-spacing: 3px;
                                    }
                                    h3  {
                                        font-size:22px; letter-spacing: 1px;
                                    }
                                    h4{
                                        font-size:20px; letter-spacing: 1px;    text-transform: capitalize;
                                    }
                                    h5{
                                         font-size:20px;font-weight:600px;letter-spacing: 1px;line-height: 1.5; margin-top: 5px; margin-bottom: 5px;
                                    }
                                     p{
                                                  
                                                font-size: 12px;
                                                letter-spacing: 1px;
                                                margin: 0 0 0px;
                                                line-height: 1.8;
                                               
                                     }
                                    img{
                                         height:80px;
                                     }
                                    small{
                                        font-size: 12px;
                                            letter-spacing: 1px;
                                    }
                                    .heading{
                                        color:red;font-family: 'Niconne', cursive;font-weight: 400;letter-spacing: 3px;
                                    }
                                
                                @media only screen and (max-width: 600px) {
                                  .certificate {
                                          width:300px;height: 432px;
                                    }
                            
                            
                                   .height{
                                        height :74px ;
                                    }
                                    
                                    table {
                                        border-collapse: collapse;
                                         border: none; 
                                          padding: 5px!important;
                                    } 
                  
                                    th, td{
                                          border: none;
                                            padding: 1px!important;
                                            vertical-align: text-top;
                                            font-size: 8px;
                                    }
                                  
                                  
                                    h2{
                                        font-size:16px;letter-spacing: 1px;    margin-top: 5px; margin-bottom: 5px;
                                    }
                                    h3  {
                                        font-size:14px; letter-spacing: 1px; margin-top: 5px; margin-bottom: 5px;
                                    }
                                    h4{
                                        font-size:12px; letter-spacing: 1px; margin-top: 5px; margin-bottom: 5px;
                                    }
                                    h5{
                                       
                                        font-size:10px;font-weight:600px;letter-spacing: 1px;line-height: 1.5; margin-top: 5px; margin-bottom: 5px;
                                    }
                                     p{
                                                  
                                            font-size: 6px;
                                            letter-spacing: 1px;
                                               
                                     }
                                    small{
                                        font-size: 6px;
                                           
                                    }
                                   img{
                                         height:30px;
                                     }
                                     .barcode{
                                         display:none;
                                     }
                                      .heading{
                                       letter-spacing: 1px;
                                    }
                                }
                            </style>
                            <div class="certificate">
                                    <table  style="width:85%;margin: auto;" class="height">
                                        <tr>
                                            <td> </td>
                                            <td>
                                               
                                            </td>
                                        </tr>
                                    </table>
                                    <table style="width:95%;margin: auto;">
                                        <tbody>
                                            <tr>
                                                <td style="width:75%;">
                                                    <table style="width:100%;margin: auto;">
                                                      
                                                        <tbody>
                                                              <tr>
                                                                <td style="width:25%;"><b> Course Name</b> </td>
                                                                <td style="text-align:center;width:5%;">:</td>
                                                                <td style=" "><b><strong><?php echo $course->title; ?></strong></b></td>
                                                            </tr>
                                                             <tr>
                                                                <th style="text-align:left;">Enrollment No </th>
                                                                 <td style="text-align:center">:</td>
                                                                <th style=""><b><?php e($fs->reg_id);?></b></th>
                                                            </tr>    
                                                         
                                                            <tr>
                                                                <td style=""><b> Student Name</b> </td>
                                                                  <td style="text-align:center">:</td>
                                                                <td style=""><b><strong><?php e(ucwords($fs->name));?></strong></b></td>
                                                            </tr>
                                                            <tr>
                                                                <td style=""><b>Father's Name </b></td>
                                                                 <td style="text-align:center">:</td>
                                                                <td style=""><b><?php e(ucwords($fs->father_name));?></b></td>
                                                            </tr>
                                                             <tr>
                                                                <td style=""><b>Mother's Name </b></td>
                                                                 <td style="text-align:center">:</td>
                                                                <td style=""><b><?php e(ucwords($fs->mother_name));?></b></td>
                                                            </tr>
                                                             <tr>
                                                                <td style=""><b> Passing Session </b></td>
                                                                  <td style="text-align:center">:</td>
                                                                <td style=""><b><?php echo $resultlatest[0]->year ?></b></td>
                                                            </tr> 
                                                            <tr>
                                                                <td style=""><b> Exam Center </b></td>
                                                                 <td style="text-align:center">:</td>
                                                                <td style=""><b><?php echo $resultlatest[0]->exam_center_code ?><?php if($resultlatest[0]->exam_center_code){ echo "/" ;} ?> <?php echo $resultlatest[0]->exam_center ?></b></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                                <td style="text-align: right;">
                                                     <center >
                                                         <div class="img">
                                                              <?php if($fs->photo){ ?>
                                                                <img src="../admin_panel/uploads/user/<?php e($fs->photo);?>" >
                                                            <?php } ?>
                                                         </div>
                                                         <br>
                                                           
                                                        <p><b>DOB: <?php e(date('d-M-Y' ,strtotime($fs->dob)));?></b></p>
                                                        <p><b>Student Id: <?php e($fs->student_id_number);?></b></p>
                                                    </center>
                                                    
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table  style="width:95%;margin: auto;">
                                        <tr>
                                            <td style="text-transform: capitalize;">
                                                <center>
                                                    <h2 class="heading" style=""><i>Results Cum Detailed Marks Card</i></h2>
                                              
                                                    <h5 >Semester <?php echo @$resultlatest[0]->semester ?></h5>
                                                </center>
                                            </td>
                                        </tr>
                                     </table>
                                    <table  style="width:95%;margin: auto;font-size:12px">
                                <tr>
                                    <td style="text-transform: capitalize;">
                                       
                                       <table style="border: 2px solid #3e3c3c;margin: auto;font-size:10px;width:100%">
                                            <thead>
                                                <tr>
                                                    <th style="border: 1px solid #3e3c3c;text-align: center;">S.No.</th>
                                                    <th style="border: 1px solid #3e3c3c;text-align: center;">Subject</th>
                                                    <th style="border: 1px solid #3e3c3c;text-align: center;">Max Marks</th>
                                                    <th style="border: 1px solid #3e3c3c;text-align: center;">Obtained Marks</th>
                                                    <th style="border: 1px solid #3e3c3c;text-align: center;">Full Marks</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>         
                                                 <?php  
                                                 $i = 1; $totalmarks = 0 ; $total_obtained_marks = 0 ; 
                                                
                                					foreach($marksheet as $g){ ?> 
                                             
                                                     <tr>
                                                        <td style="border: 1px solid #3e3c3c;text-align: center;font-weight: 600;"> <?php echo $i++ ?> </td>
                                                        <td style="border: 1px solid #3e3c3c;text-align: center;font-weight: 600;"><?php e(@$g->subject); ?></td>
                                                        <td style="border: 1px solid #3e3c3c;text-align: center;font-weight: 600;"><?php e(@$g->max_marks); ?> </td>
                                                        <td style="border: 1px solid #3e3c3c;text-align: center;font-weight: 600;"><?php e(@$g->total_marks); ?> </td>
                                                        <td style="border: 1px solid #3e3c3c;text-align: center; font-weight: 600;"><?php e(@$g->total_marks); ?>/<?php e(@$g->max_marks); ?>  </td>
                                                    </tr>
                                                    <?php  $totalmarks  = $totalmarks + $g->max_marks;   ?>
                                                    <?php  $total_obtained_marks  = $total_obtained_marks + $g->total_marks;   ?>
                                                    <?php } ?>
                                                     <tr>
                                                        <td></td>
                                                        <td style="border: 1px solid #3e3c3c;text-align: center;   font-weight: 600;">
                                                            Total 
                                                        </td>
                                                        <td style="border: 1px solid #3e3c3c;text-align: center;   font-weight: 600;">
                                                            <?php echo $totalmarks ;  ?>
                                                        </td>
                                                        <td style="border: 1px solid #3e3c3c;text-align: center;   font-weight: 600;">
                                                               <?php echo $total_obtained_marks ;  ?>
                                                        </td>
                                                        <td style="border: 1px solid #3e3c3c;text-align: center;   font-weight: 600;">
                                                               <?php echo $total_obtained_marks ;  ?> /<?php echo $totalmarks ;  ?>
                                                        </td>
                                                    </tr>
                                            </tbody>
                                        </table>
                                       
                                        </br>
                                        <table style="border: 2px solid #3e3c3c;text-align: left;padding: 8px;font-size:10px; color:black;width: 100%">
                                            <thead>
                                                <tr>
                                                <?php 
        								        $i=1;
        								        foreach ($result as $key => $value) { ?>
        								            <?php if($value->semester <= $resultlatest[0]->semester ) {  ?>
                                                    <th style="border: 1px solid #3e3c3c;text-align: center;padding:5px" ><strong> Sem-<?php echo $value->semester ?></strong></th>
                                                    <?php } ?>
                                                <?php } ?>
                                                </tr>
                                                <tr>
                                                <?php 
        								        $i=1;
        								        foreach ($result as $key => $value) { ?>
        								             <?php if($value->semester <= $resultlatest[0]->semester ) {  ?>
                                                        <td  style="border: 1px solid #3e3c3c;text-align: center;   font-weight: 600;" ><strong><?php echo $value->grade ?></strong>
                                                      <?php } ?>
                                                </td>
                                                <?php } ?>
                                                </tr>
                                            </thead>
                                        </table>
                                         </br>
                                        <table  style="width:100%;margin: auto;">
                                            <tr>
                                                <td >
                                                  
                                                        <h3 style="padding-left:50px">
                                                                Result : <?php echo $resultlatest[0]->result ?>            
                                                        </h3> 
                                                   
                                                </td>
                                                <td class="barcode">
                                                
                                                                                                            <?php echo $barcode; ?>
                                            
                                                </td>
                                                
                                            </tr>
                                           
                                         </table>
                                    </td>
                                </tr>
                             </table>
                            </div>
                    </div>
                    <hr>   
                    
                    
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8"> 
                        
                              <center>  &nbsp; &nbsp; &nbsp; 
                              <a href="javascript:void(0)" id="btnPrint" class="print-link avoid-this btn btn-primary ">Print And Save</a> &nbsp; &nbsp; &nbsp;  
                              <!--<a  href="javascript:void(0)" onclick=" CreatePDFfromHTML() " class="btn btn-primary ">Dowload PDF</a>-->
                            
                              </center>
                                
                         
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
               
              
               <?php } ?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
  </div>
  <!-- /.content-wrapper -->
  
<?php include_once('include/footer.php');?>

<script src="../print.min.js"></script>
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
