<?php 
 
include_once("include/topmenu.php");

 //include bar code library
include_once("../barcode/tcpdf_barcodes_2d.php");
//set the barcode content and type
$content = BASE_URL."student-verification.php?reg_id=".$fs->reg_id;
$barcodeobj = new TCPDF2DBarcode($content, 'QRCODE,H');
$barcode = $barcodeobj->getBarcodeHTML(3,3, 'black');
?>
<style type="text/css">
	.sp{
		margin-bottom: 10px !important; 
	}
  .sp div{
  margin-bottom: 05px !important; 
  }
  
</style>
  <!-- Content Wrapper. Contains page Content -->
  <div class="content-wrapper">
   

     <section class="content" id="ppg">
      <div class="row">
        <div class="col-xs-12">

          <div class="box box-info">
            <div class="box-header">
          <h3 class="box-title">Student Certificate</h3>
   
    
        </div>
        <div class="box-body">
             <?php 
                if(($fs->certificate_status==1)&& ($fs->certificate)) {?>
                <iframe src="../admin_panel/uploads/user/<?php e(@$fs->certificate); ?>" alt="" style="width:100%;height:700px;" /></iframe>
                <?php } ?>
                
                 <?php if(($fs->certificate_status==1)&& (empty($fs->certificate))) {?>
                <?php
                    $course = fs("tbl_course",array('id' =>$fs->course_id));
                    $result = $con->get('tbl_result'," where user_refid = '". $fs->id."' order by semester asc");
                    
                        $resultlatest = $con->get('tbl_result', " where user_refid = '". $fs->id."' order by semester desc limit 1  ");
                        $marksheet = $con->get('tbl_result_marksheet',"where result_id = '". $resultlatest[0]->id."' order by id asc");  
                        ?>
                        <div id="dvContainer" class="html-content" >
                                  
                                <style>
                                    
                                    .certificate {
                                          width:750px;height: 1080px;
                                            font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif !important;
                                          background: url(../admin_panel/uploads/certificate.jpg);background-repeat: no-repeat;background-size: cover;margin:auto;
                                    }
                                    
                                    .height{
                                        height :180px ;
                                    }
                                    
                                    table {
                                        border-collapse: collapse;
                                         border: none; 
                                          padding: 15px!important;
                                    } 
                  
                                    th, td{
                                        border: none; 
                                        padding: 10px!important;
                                        vertical-align: text-top;
                                    }
                                  
                                  
                                    h2{
                                        font-size:26px;letter-spacing: 3px;
                                        margin-top: 5px; margin-bottom: 5px;
                                    }
                                    h3  {
                                        font-size:22px; letter-spacing: 1px; margin-top: 5px; margin-bottom: 5px;
                                    }
                                    h4{
                                       font-size: 16px;letter-spacing: 1px;    text-transform: capitalize;    line-height: 1.8; margin-top: 5px; margin-bottom: 5px;
                                    }
                                    h5{
                                        font-size:18px;letter-spacing: 2px;font-weight: 600;line-height: 1.5; margin-top: 5px; margin-bottom: 5px;
                                    }
                                     p{
                                                  
                                            font-size: 20px;
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
                                                        line-height: 1.6;
                                                       
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
                                                    
                                                    <td ><p> <small><b>ENROLLMENT NO. - <?php e($fs->reg_id);?> </b></small></p>
                                                        
                                                        <p><small><b>STUDENT ID NO. - <?php e($fs->student_id_number);?> </b></small> </p>
                                                    </td>
                                              
                                                    <td style="width:30%"> 
                                                        <center>
                                                             <img src="<?php echo '../admin_panel/uploads/user/'.$fs->photo ?>" style="">
                                                           
                                                             <p> <small style="text-align:center" ><b>SR NO.- <?php e($fs->oauth_uid);?> </b></small> </p>
                                                        </center>
                                                       
                                                    </td>
                                                </tr>
                                    </table>
                                    <table  style="width:85%;margin: auto;f"> 
                                        <tr>
                                            <td colspan="2" style="text-align:center">
                                            
                                                    <h2>This is to certify that</h2>
                                                    <h3> <i><?php echo ($fs->gender == 'Male')?"Mr.":"Ms."; ?></i><b>  <?php echo ucwords($fs->name); ?></b>  </h3>
                                                    
                                                    <h3> <i><?php echo ($fs->gender == 'Male')?"S/o.":"D/o"; ?></i><b> <?php e(ucwords($fs->father_name));?></b> </h3>
                                                    
                                                    <p>
                                                        having completed the <b><?php echo $course->year; ?> </b> years course of studies prescribed by
                                                        this institution he passed the requisite examination is therefore
                                                        awarded the certificate of excellence in
                                                    </p>
                                                        <h3>
                                                           <b>"<?php echo $course->title; ?> (<?php echo $course->code; ?>)"</b>
                                                        </h3>
                                                        <p> </p>
                                                        <h4>
                                                            
                                                                <?php 
                                                                
                                                                if($fs->specialization){ ?>
                                                                Specialization in <br> <b>
                                                                <?php 
                                                                  $string_to_array = explode('#',$fs->specialization);
                                                                 if(is_array($string_to_array) || is_object($string_to_array)){
                                                                     $user_specialization = "";
                                                                     foreach($string_to_array as $sta){
                                                                         echo $user_specialization = id_to_name('specialization',$sta).", ";
                                                                     }
                                                                     
                                                                 }
                                                                }
                                                                				  ?>
                                                                
                                                            </b>
                                                        </h4>
                                                      
                                                    <h5>
                                                         Placed in Grade ‘<b><?php echo @$resultlatest[0]->grade ?></b>’ that held in <b><?php echo @$resultlatest[0]->year ?></b>
                                                    </h5>  
                                                  
                                                    
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <tD style="margin-left:20px" class="barcode">
                                                 <?php echo $barcode; ?>
                                            </tD>
                                        </tr>
                                                
                                               
                                    </table>
                                     
                                 </div>
                               
                             
                        </div>
                                
                         <bR>
                         <bR>
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8"> 
                        
                              <center>  &nbsp; &nbsp; &nbsp; 
                              <a href="javascript:void(0)" id="btnPrint" class="print-link avoid-this btn btn-primary ">Print And Save</a> &nbsp; &nbsp; &nbsp;  
                            
                              </center>
                                
                         
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
               
                    <hr>     
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
  <script type="text/javascript">
 //Print Invoice
  
function printDiv(divName) {
  var printContents    = document.getElementById(divName).innerHTML; 
  document.body.innerHTML = printContents;
  window.print();
}

   </script>

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
