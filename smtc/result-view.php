<?php session_start(); ?>
<?php include_once 'lib/all_files.php';  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Result</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="../registration/printThis.js"></script>
</head>
<body>
        <div  class="container">
            <div class="row">
                <div class="col-sm-2"></div>   
                <div class="col-sm-8">
                    <?php 
                    if(isset($_POST['submit'])){
                        $dob    = $_POST['dob'];
                        $reg_id = $_POST['reg_id'];
                        $check = $con->check("tbl_user",array('dob'=>$dob,'reg_id'=>$reg_id));
                        
                        if($check>=1){
                            $fs      = fs("tbl_user",array('dob' =>$dob ,'reg_id'=>$reg_id));
                            $course = fs("tbl_course",array('id' =>$fs->course_id)); ?>
                            <?php if($fs->result_status==1){?>
                            <?php 
                            $result = $con->get('tbl_result'," where user_refid = '". $fs->id."' order by semester asc");
                            $resultlatest = $con->get('tbl_result', " where user_refid = '". $fs->id."' order by semester desc limit 1  ");
                            $marksheet = $con->get('tbl_result_marksheet',"where result_id = '". $resultlatest[0]->id."' order by id asc");  
                              
                                ?>
                                    <div  id="dvContainer" class="html-content"    class="html-content" style="background-repeat: no-repeat;background-size: cover;padding: 10px;border: 1px solid;background: #fbf8f3;" >
                                        <style>
                                         table {
                                            border-collapse: collapse;
                                        }  
                                            th, td,table{
                                                   
                                                    border: none; 
                                                    }
                                                   
                                            th, td{
                                                     padding: 5px;
                                                     font-size: 12px;  
                                                   
                                            }
                                            @media only screen and (max-width: 600px) {
                                                   th, td{
                                                     padding:3px 5px;
                                                     font-size: 10px;  
                                                   
                                                     }
                                                    
                                                    h3 {
                                                        font-size: 10px;
                                                        margin-top: 0px;
                                                    }
                                                   
                                                }
             
                                        </style>
                                        <table class="table " style="width:95%;margin: auto;">
                                        <tbody>
                                          <tr>
                                                <td style="width:10%">  <img src="imge/logo.png"  alt="User Image"> </td>
                                                <td style="text-align:center">
                                                      <h1>SAUNIT MANAGEMENT<br>
                                                     AND TECHNICAL COUNCIL</h1>
                                                     <p>REG. UNDER MINISTRY OF CORPORATE AFFAIRS GOVT. OF INDIA.
                                                       </br> ESTABLISHMENT RECOGNIZED BY : LABOUR MINISTRY, GOVT . OF INDIA </br>
                                                        (AN ISO 9001:2015 CERTIFIED ORGANIZATION)
                                                        </p>
                                                </td>
                                            </tr>
                                           
                                            
                                        </tbody>
                                    </table>
                                        <table style="width:95%;margin: auto;font-size:12px">
                                              <tbody>
                                            <tr>
                                                <td style="width:75%;">
                                                    <table>
                                                      
                                                        <tbody>
                                                              <tr>
                                                                <td style="text-align: left;padding:3px 0px"><b> Course Name:</b> </td>
                                                                <td style="text-align: left;padding:3px 0px"><b><strong><?php echo $course->title; ?></strong></b></td>
                                                            </tr>
                                                             <tr>
                                                                <th style="text-align:left;padding:3px 0px; width:40%">Enrollment No </th>
                                                                <th style="text-align: left;padding:3px 0px"><b><?php e($fs->reg_id);?></b></th>
                                                            </tr>    
                                                         
                                                            <tr>
                                                                <td style="text-align: left;padding:3px 0px"><b> Name</b> </td>
                                                                <td style="text-align: left;padding:3px 0px"><b><strong><?php e(ucwords($fs->name));?></strong></b></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: left;padding:3px 0px"><b>Father's Name </b></td>
                                                                <td style="text-align: left;padding:3px 0px"><b><?php e(ucwords($fs->father_name));?></b></td>
                                                            </tr>
                                                             <tr>
                                                                <td style="text-align: left;padding:3px 0px"><b>Mother's Name </b></td>
                                                                <td style="text-align: left;padding:3px 0px"><b><?php e(ucwords($fs->mother_name));?></b></td>
                                                            </tr>
                                                             <tr>
                                                                <td style="text-align: left;padding:3px 0px"><b> Passing Session </b></td>
                                                                <td style="text-align: left;padding:3px 0px"><b><?php 
                                                                if($resultlatest > 0 ){
                                                                    echo $resultlatest[0]->year;
                                                                }else{
                                                                    echo $fs->year_of_passing ;
                                                                } ?></b></td>
                                                            </tr> 
                                                            <?php if($resultlatest[0]->exam_center){  ?>
                                                            <tr>
                                                                <td style="text-align: left;padding:3px 0px"><b> Exam Center </b></td>
                                                                <td style="text-align: left;padding:3px 0px"><b><?php echo $resultlatest[0]->exam_center_code ?><?php if($resultlatest[0]->exam_center_code){ echo "/" ;} ?> <?php echo $resultlatest[0]->exam_center ?></b></td>
                                                            </tr>
                                                            <?php }else{ ?>
                                                             <tr>
                                                                <td style="text-align: left;padding:3px 0px"><b> Grade </b></td>
                                                                <td style="text-align: left;padding:3px 0px"><b><?php echo $fs->grade  ?><?php echo $resultlatest[0]->exam_center ?></b></td>
                                                            </tr>
                                                            
                                                            <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </td>
                                                <td style="text-align: right;">
                                                     <center >
                                                         <div class="img">
                                                              <?php if($fs->photo){ ?>
                                                                <img src="admin_panel/uploads/user/<?php e($fs->photo);?>"  style="height:130px">
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
                                        
                                        
                                        <?php if($resultlatest > 0 ){ ?>
                                        <table  style="width:95%;margin: auto;font-size:12px">
                                            <tr>
                                                <td style="text-transform: capitalize;">
                                                    <center>
                                           
                                                        <h3>Semester <?php echo $resultlatest[0]->semester ?></h3>
                                                    </center>
                                                </td>
                                            </tr>
                                        </table>
                                        
                                        <div style="width: 95%;margin: auto;">
                                            
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
                                      
                                        </div> 
                                      
                                        <h3 style="padding-left:50px">
                                            Result : <?php echo $resultlatest[0]->result ?>            
                                        </h3> 
                                        <?php } ?>
                                         </br>
                                   
                                     
                               
                                    </div>
                                <br>
                              <div class="row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-8"> 
                                    
                                          <center>  &nbsp; &nbsp; &nbsp; 
                                          <a href="javascript:void(0)" id="btnPrint" class="print-link avoid-this btn btn-primary ">Print And Save</a> &nbsp; &nbsp; &nbsp;  
                                       
                                          </center>
                                            
                                     
                                    </div>
                                    <div class="col-sm-2"></div>
                                </div>
               
                                     <?php }else {
                                echo '<script>alert("Result not generated, Please contact to admin.");</script>';
                               echo "<script>window.location.href='result.php'; </script>";
                            }  ?>
                 
                        <?php }else {
                            echo '<script>alert("Record not found please enter correct Enrollment no");</script>';
                           echo "<script>window.location.href='result.php'; </script>";
                        }  
                        
                    }else{
                             echo "<script>window.location.href='result.php'; </script>";
                    } ?> 
                    
                    </hr>
                    </br>
                    </br>
                
                    <center>
                        <a class="btn btn-primary" href="result.php"> Back To Page</a>
                    </center>
                    
                    
                     </br>
                    </br>
                
                 
                </div>
            </div>
           
        </div>

</body>
</html>
<script src="print.min.js"></script>
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
