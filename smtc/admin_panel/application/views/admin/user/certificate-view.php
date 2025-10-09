<?php
include_once("barcode/tcpdf_barcodes_2d.php");
//set the barcode content and type

$content = WEB_URL."student-verification.php?reg_id=".$user[0]->reg_id;
$barcodeobj = new TCPDF2DBarcode($content, 'QRCODE,H');
$barcode = $barcodeobj->getBarcodeHTML(3,3, 'black');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<div style="width:800px;; margin:auto">
 
    <div  id="dvContainer"  class="html-content"  >
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <style>
                                    
            .certificate {
                  width:750px;height: 1080px;
                    font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif!important;
                        font-weight: 400;
                  background: url(<?php echo base_url('uploads/certificate.jpg') ?>);background-repeat: no-repeat;background-size: cover;margin:auto;
            }
            
            .height{
                height :200px ;
            }
            
            table {
                border-collapse: collapse;
                 border: none; 
                  padding: 15px!important;
            } 

            th, td{
                border: none; 
                padding: 2px!important;
                vertical-align: text-top;
                font-size: 14px;
            }
          
          
            h2{
                font-size:26px;letter-spacing: 3px;    margin-top: 5px; margin-bottom: 5px;
            }
            h3  {
                font-size:22px; letter-spacing: 1px;    margin-top: 5px; margin-bottom: 5px;
            }
            h4{
                font-size:20px; letter-spacing: 1px;    text-transform: capitalize;    line-height: 1.8;    margin-top: 5px; margin-bottom: 5px;
            }
            h5{
                font-size:18px;letter-spacing: 2px;font-weight: 600;line-height: 1.5;    margin-top: 5px; margin-bottom: 5px;
            }
             p{
                          
                    font-size: 20px;
                    letter-spacing: 1px;
                   margin: 0 0 0px;
                        line-height: 1.6;
                       
             }
            img{
                 height:80px;
             }
            small{
                font-size: 12px;
                    letter-spacing: 1px;
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
                        padding: 5px!important;
                        vertical-align: text-top;
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
                        font-size:10px;letter-spacing: 1px;font-weight: 600;line-height: 1.5; margin-top: 5px; margin-bottom: 5px;
                    }
                     p{
                                  
                            font-size: 8px;
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
             <table  style="width:85%;margin: auto;"> 
                        <tr >
                            
                            <td ><p> <small><b>ENROLLMENT NO. - <?php echo $user[0]->reg_id;?> </b></small></p>
                                
                                <p><small><b>STUDENT ID NO. - <?php echo $user[0]->student_id_number ;?> </b></small> </p>
                            </td>
                      
                            <td style="width:30%"> 
                                <center>
                                     <img src="<?php echo base_url('uploads/user/').$user[0]->photo ?>" style="">
                                   
                                     <p> <small style="text-align:center" ><b>SR NO.-<?php echo $user[0]->oauth_uid;?></b></small> </p>
                                </center>
                               
                            </td>
                        </tr>
            </table>
             <table  style="width:85%;margin: auto;f"> 
                <tr>
                    <td colspan="2" style="text-align:center">
                    
                            <h2>This is to certify that</h2>
                            <h3> <i><?php echo ($user[0]->gender == 'Male')?"Mr.":"Ms."; ?></i><b>  <?php echo ucwords($user[0]->name); ?></b>  </h3>
                            
                            <h3> <i><?php echo ($user[0]->gender == 'Male')?"S/o.":"D/o"; ?></i><b> <?php echo ucwords($user[0]->father_name);?></b> </h3>
                            
                            <p>
                                having completed the <b><?php echo $user[0]->course_year; ?> </b> years course of studies prescribed by
                                this institution he passed the requisite examination is therefore
                                awarded the certificate of excellence in
                            </p>
                                <h3>
                                   <b>"<?php echo $user[0]->course; ?> (<?php echo $user[0]->course_code  ; ?>)"</b>
                                </h3>
                                <p> </p>
                                <h4>
                                    
                                       <?php 
                                       if($user[0]->specialization){  ?>
                                       
                                         Specialization in</br>  <b>
                                                <?php 
                                            	$string_to_array = explode('#',$user[0]->specialization);
                                            	foreach($string_to_array as $key=>$row_id){
                                            	    if($row_id){
                                            	         $specialization = $this->specialization_model->get_specialization_by_id($row_id) ; 
                                            	    echo $specialization[0]->name.','; 
                                            	    }
                                            	   
                                            	} ?>
                                            	
                                            	</b>
                                            	<?php } ?>
                             
                                    
                                </h4>
                              
                            <h5>
                                 Placed in Grade ‘<b><?php echo @$Last_Result[0]->grade ?></b>’ that held in <b><?php echo @$Last_Result[0]->year ?></b>
                            </h5>  
                          
                            
                    </td>
                    
                </tr>
            </table>
            </br>
            </br>
             <table  style="width:85%;margin: auto;f"> 
                <tr>
                    <td></td>
                    <tD style="margin-left:20px;width:30%" class="barcode">
                         <?php echo $barcode; ?>
                    </tD>
                </tr>
                        
                       
            </table>
           
            
           
        </div>
    </div>
    </br> </br>
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4"> 
   
             <center>  &nbsp; &nbsp; &nbsp; 
                  <a href="javascript:void(0)" id="btnPrint" class="print-link avoid-this btn btn-primary ">Print And Save</a> &nbsp; &nbsp; &nbsp;  
             
                  </center>
        </div>
      
        <div class="col-sm-4"></div>
    </div> 
   
</div>

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