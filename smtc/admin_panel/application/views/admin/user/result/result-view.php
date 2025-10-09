
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<div style="width:778px; margin:auto;">

    <div  id="dvContainer"  class="html-content"  >
        <div style="height:1100px; width:778px;  background-color: #ffff;background-image: url(<?php echo base_url('uploads/marksheet.jpg') ?>);background-repeat: no-repeat;background-size: cover;">
       
                <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
                <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Niconne&display=swap" rel="stylesheet">
                <style>
                  table {
                    border-collapse: collapse;
                }                                  
                th, td,table{
                        border: none; 
                }
                th, td{
                           padding: 5px!important;
                         font-size: 12px;
                       
                }
                .img{
                             width:100px;height:120px;
                }
                h2{
                    font-size: 20px;
                    line-height: 20px;
                }
                .h3, h3 {
                    font-size: 20px;
                    line-height: 34px;
                }
                h3 small{
                    font-size: 12px;
                    line-height: 10px;
                    color: red;
                }
                h5, h5 {
                    font-size: 14px;
                    line-height: 22px;
                }
                .heading{
                    font-size: 30px;
                }
                
                @media only screen and (max-width: 600px) {
                       th, td{
                         padding:2px!important;;
                            font-size: 8px;

                       
                         }
                         
                         h2{
                                font-size: 12px;
                                line-height: 12px;
                            }
                            .h3, h3 {
                                font-size: 12px;
                                line-height: 12px;
                            }
                            h3 small{
                               font-size: 8px;
                                line-height: 8px;
                                color: red;
                            }
                            h5, h5 {
                                   font-size: 10px;
                                  line-height: 15px;

                            }
                         .contact-page .sec-title h2 {
                            font-family: 'Poppins';
                            font-weight: 600;
                            color: #242424;
                            font-size: 12px;
                            line-height: 1em;
                            letter-spacing: 0;
                            margin: 0;
                            margin-bottom: 0px;
                        }
                       
                        .img{
                             width:50px;height:60px;
                         }
                        .heading{
                            font-size: 14px;
                        }
                    }
                </style>
           
                     <br>    </br>
                      <br>    </br>
                      <br>    </br>
                      <br>    </br>
                      <br>    </br>
                    <table style="width:95%;margin: auto;font-size:12px">
                        <tbody>
                             <tr>
                                 <td style="width:75%;">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th style="text-align: left; width:20%; left;padding:3px 0px">Course </th>
                                                <td>:</td>
                                                <th style="text-align: left;padding:3px 0px"><b> <?php echo$RESULT[0]->course ?> </b></th>
                                            </tr>
                                            <tr>
                                                <th style="width:20%; text-align: left;;padding:3px 0px">Enrollment No</th>
                                                <td>:</td>
                                                <th style="text-align: left;padding:3px 0px"><b> <?php echo $RESULT[0]->reg_id; ?> </b></th>
                                            </tr>
                                           
                                           
                                             <tr>
                                                <td style="text-align: left;padding:3px 0px"><b> Student Name</b> </td>
                                                <td>:</td>
                                                <td style="text-align: left;padding:3px 0px"><b> <?php echo ucwords($RESULT[0]->name); ?> </b></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;padding:3px 0px"><b>Father's Name</b></td>
                                                <td>:</td>
                                                <td style="text-align: left;padding:3px 0px"><b> <?php echo ucwords($RESULT[0]->father_name); ?> </b></td>
                                            </tr>
                                             <tr>
                                                <td style="text-align: left;padding:3px 0px"><b>Mother's Name</b></td>
                                                <td>:</td>
                                                <td style="text-align: left;padding:3px 0px"><b> <?php echo ucwords($RESULT[0]->mother_name); ?> </b></td>
                                            </tr> 
                                            <?php if($Last_Result) { ?>
                                         
                                            <tr>
                                                <td style="text-align: left;padding:3px 0px"><b>Passing Session</b></td>
                                                <td>:</td>
                                                <td style="text-align: left;padding:3px 0px"><b> <?php echo ucwords($Last_Result[0]->year); ?> </b></td>
                                            </tr> 
                                            <tr>
                                                <td style="text-align: left;padding:3px 0px"><b>Exam Center</b></td>
                                                <td>:</td>
                                                <td style="text-align: left;padding:3px 0px"><b> <?php echo ucwords($Last_Result[0]->exam_center_code); ?> <?php if($Last_Result[0]->exam_center_code){ echo "/" ;} ?> <?php echo ucwords($Last_Result[0]->exam_center); ?> </b></td>
                                            </tr>
                                            <?php } ?>
                                        </thead>
                                       
                                    </table>
                                </td>
                                <td style="text-align: right;">
                                     <center>
                                         <div class="img">
                                              <?php if($RESULT[0]->photo){ ?>
                                                   <img src="<?php echo base_url('uploads/user/').$RESULT[0]->photo ?>"  style="height:130px">
                                            <?php } ?>
                                         </div>
                                         <bR>
                                        <p><b>DOB: <?php echo $RESULT[0]->dob; ?></b></p>
                                       
                                        <p><b>Student Id :  <?php echo $RESULT[0]->student_id_number; ?></b></p>
                                    </center>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <?php if( $Last_Result) { ?>
                        <table  style="width:95%;margin: auto;font-size:12px">
                                <tr>
                                    <td style="text-transform: capitalize;">
                                        <center>
                                          <h3 class="heading" style="color:red;font-family: 'Niconne', cursive;font-weight: 400;"><i>Results Cum Detailed Marks Card</i></h3>
                                        
                                            <h5 style="font-size:20px;font-weight:600px">Semester <?php echo @$Last_Result[0]->semester ?></h5>
                                        </center>
                                    </td>
                                </tr>
                            </table>
                            <?php  $marksheet =  $this->result_model->getMarksheetOFResult($Last_Result[0]->id);  ?>
                            <?php if($marksheet) { ?>
                                <table style="width: 95%;border: 2px solid #3e3c3c;margin: auto;font-size:10px">
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
                                         foreach ($marksheet as $key => $row2) {?>
                                             <tr>
                                                <td style="border: 1px solid #3e3c3c;text-align: center;font-weight: 600;"> <?php echo $i++ ?> </td>
                                                <td style="border: 1px solid #3e3c3c;text-align: center;font-weight: 600;"> <?php echo $row2['subject'] ?> 	  </td>
                                                <td style="border: 1px solid #3e3c3c;text-align: center;font-weight: 600;"> <?php echo $row2['max_marks'] ?> </td>
                                                <td style="border: 1px solid #3e3c3c;text-align: center;font-weight: 600;"> <?php echo $row2['total_marks'] ?> </td>
                                                <td style="border: 1px solid #3e3c3c;text-align: center; font-weight: 600;"> <?php echo $row2['total_marks'] ?>/<?php echo $row2['max_marks'] ?> </td>
                                            </tr>
                                        <?php  $totalmarks  = $totalmarks + $row2['max_marks'];   ?>
                                        <?php  $total_obtained_marks  = $total_obtained_marks + $row2['total_marks'];   ?>
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
                            <?php } ?>
                            </br>
                           
                            <br>    </br>
                            <h3 style="padding-left:50px">
                                Result : <?php echo $Last_Result[0]->result ?>            
                            </h3> 
                            <br>    </br> <br>
                           
                          
                     <?php } ?>
               
        </div>
    </div>
    <br>
    <br>

    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8"> 
        
              <center>  &nbsp; &nbsp; &nbsp; 
              <a href="javascript:void(0)" id="btnPrint" class="print-link avoid-this btn btn-primary ">Print</a> &nbsp; &nbsp; &nbsp;  
              <a  href="javascript:void(0)" onclick=" CreatePDFfromHTML() " class="btn btn-primary ">Dowload PDF</a>
            
              </center>
                
         
        </div>
        <div class="col-sm-2"></div>
    </div>
    </div>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
<script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
<script>
    //Create PDf from HTML...
function CreatePDFfromHTML() {
    var HTML_Width = 300;  
    var HTML_Height = 460; 
    var top_left_margin = 5;
    var PDF_Width = HTML_Width + (top_left_margin * 2);
    var PDF_Height = (PDF_Width * 1.5) + (top_left_margin * 2);
    var canvas_image_width = HTML_Width;
    var canvas_image_height = HTML_Height;

    var totalPDFPages = Math.ceil(HTML_Height / PDF_Height) - 1;

    html2canvas($("#dvContainer")[0]).then(function (canvas) {
        var imgData = canvas.toDataURL("image/jpeg", 1.0);
        var pdf = new jsPDF('p', 'pt', [PDF_Width, PDF_Height]);
        pdf.addImage(imgData, 'JPG', top_left_margin, top_left_margin, canvas_image_width, canvas_image_height);
        for (var i = 1; i <= totalPDFPages; i++) { 
            pdf.addPage(PDF_Width, PDF_Height);
            pdf.addImage(imgData, 'JPG', top_left_margin, -(PDF_Height*i)+(top_left_margin*4),canvas_image_width,canvas_image_height);
        }
        pdf.save("<?php echo $RESULT[0]->reg_id; ?>.pdf");

    });
}

</script>
<script src="https://sgmtc.co.in/admin/assets/print/dist/jQuery.print.min.js"></script>
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