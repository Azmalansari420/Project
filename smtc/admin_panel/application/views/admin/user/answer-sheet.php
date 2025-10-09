<?php $link=$this->setting_model->get_all_setting();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Exam</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://sgmtc.co.in/exam/assets/front/css/exam.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

 <style type="text/css">
   .questionBox{
        border: 1px solid #efefefbd;
    margin-bottom: 20px;
   
   }
   .panel-heading{
    padding: 15px;
    border-bottom: 1px solid #efefefbd;
   }
   .panel-content{
    padding: 15px;
   }
   .panel-footer{
      padding: 15px;
    border-top: 1px solid #efefefbd;
   }
   .panel-footer-content{
    border-left: 1px solid black;
   }

 
   
 </style>
 <script type="text/javascript">
   function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
 </script>
</head>
<body id="printableArea">


<div class="tophead" style="background-color: #1c335f; color: white; padding: 5px; min-height: 75px; color: 20px; font-size: 20px; line-height: 2.0}">
  <div class="container">
  <div class="row text-center">
    <div class="col-sm-3 col-xs-12" style="background: #ffff;">
       <?php if(!empty($link[0]->logo)){ ?>
          <center> <img src="<?php echo base_url('uploads/logo/').$link[0]->logo ?>" style="width:100px"> </center>
          <?php } ?>
    </div>

   
   <div class="col-sm-5 col-xs-6">  

        
          <h6> Enrollment Number :  <b><?php echo $user[0]->reg_id ?></b></h6>
          <h6> Student Name:  <b><?php echo $user[0]->name ?></b></h6>


     
    </div>
    <div class="col-sm-3 col-xs-6">  

          <center>
              
              <img src="<?php echo base_url('uploads/user/').$user[0]->photo ?>" style="width:80px;height:80px">
               
          </center>
         
     
    </div>

    <div class="col-sm-1 col-xs-6">  

       
          <input type="button" class="btn btn-default" onclick="printDiv('printableArea')" value="Print" />

     
    </div>
  </div>
</div>
</div>

  
<div class="container">    
  <div class="row  text-center">
   

    <div class="col-sm-12 text-center"> 

      <table class="table  text-center" style="margin: auto;">
        <tr>

          <td style="padding-top: 25px;">Exam Date & Time<br> <b> <?php echo date( 'd-M-Y' , strtotime($exam['date']))  ?> <br> <?php echo date('h:i A', strtotime($exam['startTime'])); ?>-<?php echo date('h:i A', strtotime($exam['endTime'])); ?> </b></td>
          <td><h3><?php echo $exam['title']  ?> </h3><h4>  <?php echo $exam['semester']  ?></h4><h6> <?php echo $exam['category']  ?></h6></td>
          <td style="padding-top: 25px;">Total Time <br> <b><?php echo date('H : i' ,strtotime($exam['totalTime']))  ?></b></td>
          
        </tr>
      </table>
         
            <br>
            <hr>
            <br>
    
          <table  class="table table-bordered text-center" style="margin: auto;">
            <thead>
              <tr>

              
                <th class="text-center">Total Question</th>
                <th class="text-center">Attempt Question</th>
                <th class="text-center">Correct Answer</th>
                <th class="text-center">Total Marks</th>
                <th class="text-center">Obtained Marks</th>
                <th class="text-center">Obtained Marks % </th>
                
              </tr>
            </thead>
            <tbody>
              <tr>
           
                <td><?php echo $exam['totalQues'] ;  ?></td>
                <td><?php echo $exam['totalAttemptQue'] ;  ?></td>
                <td><?php echo $exam['totalCorrectAns'] ;  ?></td>
                <td><?php echo $exam['totalMarks'] ;  ?></td>
                <td><?php echo $marks =  $this->exam_model->countExamObatainedMarksByExamId($exam['id']) ;  ?></td>
                <td><?php echo   $marks/$exam['totalMarks']*100 ;  ?></td>
                
              </tr>
            </tbody>

          </table>  
    </div>


  </div>
  <hr>
  <div class="row">

      <?php 
                $i = 1 ; 
                foreach ($question as $key => $value) { ?>

                   <?php 
                    $questionId =$value->id ;
                     $userExamId = $exam['id'] ;
                     $answer = $this->exam_model->getAnswerOfQuestion($questionId , $userExamId) ; 
                     ?>

                <div id="questiondiv<?php echo $i ?>" class="questionBox" data-id="questiondiv<?php echo $i ?>">
                  <div class="panel-footer" >
                    <div class="row">
                      <div class="col-sm-8"> Question  <b><?php echo $i ?></b> </div>
                      <div class="col-sm-4 text-right"> Marks : <b> <?php echo $value->marks ?> </b></div>
                    </div>
                  </div>
                  <div class="panel-content">
            
                         <h4> 
                              <table>
                                 <tr>
                                    <th width="100"><p>Question: </p></th>
                                    <th><b> <?php echo $value->question ?> </b> </th>
                                  </tr>
                              </table> 
                           </h4> 
                       
                        <table>
                          <tr>
                            <td width="30"><p>1. </p></td>
                            <td width="50"><p><input type="radio"  <?php echo ($answer['markAnswer'] == 'A' ) ? "checked": ""  ?> class="answerCheck<?php echo $i ?>" name="answer<?php echo $i ?>" value="A"></p></td>
                            <td><?php echo $value->optionA ?></td>
                          </tr>
                          <tr>
                            <td><p>2. </p></td>
                            <td><p><input type="radio"  <?php echo ($answer['markAnswer'] == 'B' ) ? "checked": ""  ?> class="answerCheck<?php echo $i ?>" name="answer<?php echo $i ?>" value="B"></p>
                            </td><td><?php echo $value->optionB ?></td>
                          </tr>
                          <tr>
                            <td><p>3. </p></td>
                            <td><p><input type="radio"  <?php echo ($answer['markAnswer'] == 'C' ) ? "checked": ""  ?> class="answerCheck<?php echo $i ?>" name="answer<?php echo $i ?>" value="C"></p>
                            </td><td><?php echo $value->optionC ?></td>
                          </tr>
                          <tr>
                            <td><p>4. </p></td>
                            <td><p><input type="radio"  <?php echo ($answer['markAnswer'] == 'D' ) ? "checked": ""  ?> class="answerCheck<?php echo $i ?>" name="answer<?php echo $i ?>" value="D"></p>
                            </td><td><?php echo $value->optionD ?></td>
                          </tr>
                        </table>

                  </div>
                  <div class="panel-footer">

                   
                    <div class="row text-center">
                       <div class="col-sm-3 col-xs-6 " >Correct Option : <b><?php echo $answer['correctAnswer'] ?></b></div>
                        <div class="col-sm-3 col-xs-6 panel-footer-content" >Your Choosed Option : <b><?php echo $answer['markAnswer'] ?></b></div>
                        <div class="col-sm-3 col-xs-6 panel-footer-content" >Obtained Marks : <b><?php echo $answer['marks'] ?></b></div>
                        <div class="col-sm-3 col-xs-6 panel-footer-content" >Status :  
                          <?php if($answer['status'] == 'Wrong'){  ?> 
                            <b style="color:red "> <i class="fa fa-times "> </i> <?php echo $answer['status'] ?></b>
                            <?php }else{  ?>
                               <b style="color: green"> <i class="fa  fa-check "></i> <?php echo $answer['status'] ?></b>
                             <?php } ?> 
                            </div>
                    </div>
         
                  </div>
                
               
                  </div>
              
               <?php $i++ ;  } ?>
    
  </div>
</div>



</body>
</html>
