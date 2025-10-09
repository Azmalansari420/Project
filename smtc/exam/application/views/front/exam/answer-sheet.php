
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mock Test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/front/css/exam.css') ?>">
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

 input[type="radio"] {
    display:none;
}
input[type="radio"] + label {
    color: #292321;
    font-family:Arial, sans-serif;
    font-size:14px;
}
input[type="radio"] + label span {
    display:inline-block;
    width:19px;
    height:19px;
    margin:-1px 4px 0 0;
    vertical-align:middle;
    cursor:pointer;
    -moz-border-radius:  50%;
    border-radius:  50%;
}

input[type="radio"] + label span {
     background-color:#dedddd;
}

input[type="radio"]:checked + label span{
     background-color:#8bc34a;
}


   
 </style>
</head>
<body>


<div class="tophead">
  <div class="container">
  <div class="row">
    <div class="col-sm-2 col-xs-5" style="background: #ffff;height: 60px">
      <center>
        <a  href="<?php echo base_url('') ?>"> <img src="<?php echo base_url('assets/front/') ?>images/logo.png"  style="height:50px"></a>
      </center>
    </div>
    <div class="col-sm-6 col-xs-7 text-center"><?php echo $exam['title'] ?></div>
   
   
    <div class="col-sm-4 col-xs-12"> </div>
  </div>
</div>
</div>

  
<div class="container">    
  <div class="row ">

    <div class="col-sm-8"> 

      <br>
      <br>
    
          <table  class="table table-bordered text-center" style="margin: auto;">
            <thead>
              <tr>
                <th class="text-center">Total Question</th>
                <th class="text-center">Attempt Question</th>
                <th class="text-center">Correct Answer</th>
                <th class="text-center">Total Marks</th>
                <th class="text-center">Obtained Marks</th>
                
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><?php echo $exam['totalQues'] ;  ?></td>
                <td><?php echo $exam['totalAttemptQue'] ;  ?></td>
                <td><?php echo $exam['totalCorrectAns'] ;  ?></td>
                <td><?php echo $exam['totalMarks'] ;  ?></td>
                <td><?php echo $marks =  $this->exam_model->countExamObatainedMarksByExamId($exam['id']) ;  ?></td>
                
              </tr>
            </tbody>

          </table>  
    </div>
    <?php 
        if( $marks != 0){
             $percentange  = $marks/$exam['totalMarks']*100 ; 
          }else{
             $percentange = 0 ; 
          } 
   ?>

    <div class="col-sm-4">
       <br>
      <br>

        <?php  $totalQues =  $exam['totalQues'] ;
               $totalAttemptQue  =  $exam['totalAttemptQue']  ; 


               $totalCorrectAnsPercent  =  $exam['totalCorrectAns']*100/$totalQues  ; 
               $wrongAnsPercnt  =  ($exam['totalAttemptQue']-$exam['totalCorrectAns'])*100/$totalQues ; 
               $unAttemptQuestion = $exam['totalQues']- $totalAttemptQue ; 
               $unAttemptQuestionperc = $unAttemptQuestion*100/$totalQues ; 
          ?>
  

       
      <script>
          window.onload = function() {

          var chart = new CanvasJS.Chart("chartContainer", {
            theme: "light2", // "light1", "light2", "dark1", "dark2"
            exportEnabled: true,
            animationEnabled: true,
            title: {
              text: "Result score"
            },
            data: [{
              type: "pie",
              startAngle: 25,
              toolTipContent: "<b>{label}</b>: {y}%",
              showInLegend: "true",
              legendText: "{label}",
              indexLabelFontSize: 16,
              indexLabel: "{label} - {y}%",
              dataPoints: [
                { y: <?php echo $totalCorrectAnsPercent ?>, label: "Correct" },
                { y: <?php echo $wrongAnsPercnt ?>, label: "Wrong" },
                { y: <?php echo $unAttemptQuestionperc ?>, label: "Unattempt" }
               
              ]
            }]
          });
          chart.render();

          }
          </script>



                <div id="chartContainer" style="height: 270px; width: 100%;"></div>
            <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

       

        
    </div>

  </div>
  <hr>
  <div class="row">

      <?php 
                $i = 1 ; 
                foreach ($question as $key => $value) { ?>


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
                                   
                                    <th><b> <?php echo $value->question ?> </b> </th>
                                  </tr>
                              </table> 
                           </h4> 
                       
                        <table>
                          <tr>
                            <td width="30"><p>1. </p></td>
                            <td width="50"><p>
                              <input type="radio" class="answerCheck<?php echo $i ?>" name="answer<?php echo $i ?>" value="A"  <?php echo ($value->correct == 'A' ) ? "checked" : ""  ?> >
                              <label for="radio01"><span></span></label></p></td>
                            <td><?php echo $value->optionA ?></td>
                          </tr>
                          <tr>
                            <td><p>2. </p></td>
                            <td><p><input type="radio" class="answerCheck<?php echo $i ?>" name="answer<?php echo $i ?>" value="B"  <?php echo ($value->correct == 'B' ) ? "checked" : ""  ?> ><label for="radio01"><span></span></label></p>
                            </td><td><?php echo $value->optionB ?></td>
                          </tr>
                          <tr>
                            <td><p>3. </p></td>
                            <td><p><input type="radio" class="answerCheck<?php echo $i ?>" name="answer<?php echo $i ?>" value="C"  <?php echo ($value->correct == 'C' ) ? "checked" : ""  ?> ><label for="radio01"><span></span></label></p>
                            </td><td><?php echo $value->optionC ?></td>
                          </tr>
                          <tr>
                            <td><p>4. </p></td>
                            <td><p><input type="radio" class="answerCheck<?php echo $i ?>" name="answer<?php echo $i ?>" value="D"  <?php echo ($value->correct == 'D' ) ? "checked" : ""  ?> ><label for="radio01"><span></span></label></p>
                            </td><td><?php echo $value->optionD ?></td>
                          </tr>

                    

                        </table>

                  </div>
                  <div class="panel-footer">

                    <?php 
                    $questionId =$value->id ;
                     $userExamId = $exam['id'] ;
                     $answer = $this->exam_model->getAnswerOfQuestion($questionId , $userExamId) ; 
                     ?>
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
