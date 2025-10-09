<!DOCTYPE html>
<?php $link = $this->setting_model->get_all_setting();?>
<html lang="en">
<head>
  <title><?php echo $exam[0]->title ?> </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/front/css/exam.css') ?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


<div class="tophead">
  <div class="container">
  <div class="row">
    <div class="col-sm-3 col-xs-5" >
      <center>
        <a  href="<?php echo base_url('') ?>">   <img src="<?php echo $this->config->item('site_url').'/admin_panel/uploads/logo/'.$link[0]->logo ?>" style="width:100px"></a>
      </center>
    </div>
    <div class="col-sm-5 col-xs-7 text-center" style="padding: 20px"><?php echo $exam[0]->title ?></div>
   
   
    <div class="col-sm-4 col-xs-12">  
      <div style="padding: 20px;text-align: right;font-size: 12px;"><span class="glyphicon  glyphicon-time "></span> Total Time - <?php
                                $time=$exam[0]->time;
                                $timesplit=explode(':',$time);
                                $min=($timesplit[0]*60)+($timesplit[1])+($timesplit[2]>30?1:0);
                                echo $min.' Min'  // 62 Min
                                ?> </div></div>
  </div>
</div>
</div>



  
<div class="container-fluid ">    
  <form action="<?php echo base_url('exam-submit/'); ?>" id="form" name="examSubmit" method="post" >
      <div class="row content">
        <div class="col-md-8 "> 
            <div class="panel panel-primary">
              
                <?php 
                $i = 1 ; 
                foreach ($question as $key => $value) { ?>

                <div id="questiondiv<?php echo $i ?>" class="<?php  if($i == 1){echo "active";}else{ echo "hide";} ?>" data-id="questiondiv<?php echo $i ?>">
                  <div class="panel-heading" >
                    <div class="row">
                      <div class="col-xs-8"> Question  <b><?php echo $i ?></b> </div>
                      <div class="col-xs-4 text-right"> Marks : <b> <?php echo $value->marks ?> </b></div>
                    </div>
                  </div>
                  <div class="panel-body">
                      <input type="hidden" id="question_id<?php echo $i ?>" name="question_id<?php echo $i ?>" value="<?php echo $value->id ?>">
                      <input type="hidden" name="question<?php echo $i ?>" value="<?php echo $value->question; ?>">
                      <h4> <?php echo $value->question ?> </h4> 
                      <div><strong>Options : </strong></div>
                      <br>
                      <div>
                    
                    
                        <table>
                          <tr>
                            <td width="30"><p>1. </p></td>
                            <td width="50"><p><input type="radio" <?php echo @$answersave['question'][$i]['answer'] == 'A' ?"checked" :"" ;  ?> class="answerCheck<?php echo $i ?>" name="answer<?php echo $i ?>" value="A" onchange="saveButtonFunction(<?php echo $i ?>)"></p></td>
                            <td style="padding-top: 10px"><?php echo trim($value->optionA) ?></td>
                          </tr>
                          <tr>
                            <td><p>2. </p></td>
                            <td><p><input type="radio" <?php echo @$answersave['question'][$i]['answer'] == 'B' ?"checked" :"" ;  ?>  class="answerCheck<?php echo $i ?>" name="answer<?php echo $i ?>" value="B" onchange="saveButtonFunction(<?php echo $i ?>)"></p>
                            </td><td style="padding-top: 10px"><?php echo trim($value->optionB) ?></td>
                          </tr>
                          <tr>
                            <td><p>3. </p></td>
                            <td><p><input type="radio" <?php echo @$answersave['question'][$i]['answer'] == 'C' ?"checked" :"" ;  ?>  class="answerCheck<?php echo $i ?>" name="answer<?php echo $i ?>" value="C" onchange="saveButtonFunction(<?php echo $i ?>)"></p>
                            </td><td style="padding-top: 10px"><?php echo trim($value->optionC) ?></td>
                          </tr>
                          <tr>
                            <td><p>4. </p></td>
                            <td><p><input type="radio"  <?php echo @$answersave['question'][$i]['answer'] == 'D' ?"checked" :"" ;  ?> class="answerCheck<?php echo $i ?>" name="answer<?php echo $i ?>" value="D" onchange="saveButtonFunction(<?php echo $i ?>)"></p>
                            </td><td style="padding-top: 10px"><?php echo trim($value->optionD) ?></td>
                          </tr>
                        </table>
                        <input type="hidden" id="answersave<?php echo $i ?>" name="answersave<?php echo $i ?>" value="<?php echo @$answersave['question'][$i]['answer']; ?>">
                   
                   
                      </div>
                  </div>
                  <div class="panel-heading ">
                    <div class="row">
                      <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6  pull-left">
                           <?php if($i  > 1 ) { ?>   
                           <button type="button" class="buttonClass" onclick="BackQuestionFunction(<?php echo $i-1 ?>,<?php echo $i ?>)"> Previous</button> 
                           <?php } ?>
                      </div>
                      <div class="col-lg-2 col-md-3  col-sm-3 col-xs-6 text-right"> 
                        <button type="button" class="buttonClass" onclick="clearQuestionFunction(<?php echo $i ?>)">Clear </button> 
                     </div>
                      <div class="col-lg-2  col-md-3  col-sm-3 col-xs-6 text-right"> 
                        <button type="button"  disabled class="buttonClass saveQuestionAnswer<?php echo $i ?>" onclick="SaveQuestionFunction(<?php echo $i ?>,<?php echo $i+1 ?>)">Save & Next </button>  </div>
                      <div class="col-lg-2  col-md-3 col-sm-3 col-xs-6 text-right">

                       <?php if($i < $this->exam_model->countQuestionByExamId($exam[0]->id) ) { ?> 
                        <button type="button" class="buttonClass" onclick="NextQuestionFunction(<?php echo $i ?>,<?php echo $i+1 ?>)">Next </button> 

                       <?php } ?>
                         </div>


                    </div>
                  </div>
                </div>
               <?php $i++ ;  } ?>
            </div>
        </div>
        <div class="col-md-4  ">
          <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-xs-6">
                     <div class="text-left"> Total Question : <b><?php echo $this->exam_model->countQuestionByExamId($exam[0]->id) ?></b></div>
                </div>
                <div class="col-xs-6 ">
                    <div class="text-right"> <span class="glyphicon glyphicon-time"></span> Time Left <span>   <span class="countdown"></span> </span></div>
                </div>
            </div>
            <div class="panel-body"> 

              <div class="questionpallete">

              <?php 
              $i = 1 ; 
              foreach ($question as $key => $value) { ?>

              <?php if($answersave){ ?>

                 <label class="btn  btn-lg <?php echo (in_array($i, $saveQuestionNo)?"btn-success": "btn-info" ) ?>"     id="labelbtn<?php echo $i ?>"  onclick="showQuestion(<?php echo $i ?>)"><?php echo $i ?></label>

              <?php  }else{ ?>
               
                      <label class="btn  btn-lg <?php  if($i == 1){echo " btn-info" ; }else{ echo "btn-default" ;} ?>"     id="labelbtn<?php echo $i ?>"  onclick="showQuestion(<?php echo $i ?>)"><?php echo $i ?></label>
              <?php } ?>
              <?php  $i++; } ?>
              </div>

              <hr>
              <div>
                Note :  &nbsp;&nbsp;&nbsp;<label class="btn  btn-lg btn-info"></label>&nbsp;&nbsp;Visited
                        &nbsp;&nbsp;&nbsp;<label class="btn  btn-lg btn-success"></label>&nbsp;&nbsp;Answerd
                        &nbsp;&nbsp;&nbsp;<label class="btn  btn-lg btn-default"></label>&nbsp;&nbsp;Not Visited
              </div>
            </div>
            <div class="panel-heading ">
              <div class="row">
                <center>
                   <button type="submit" class="buttonClass" onclick="return confirm('Are you confirm to submit exam ?')" > Submit Exam </button> 
                </center>
                
              </div>
            </div>
          </div>
        </div>
    </div>
  </form>
</div>

<footer class="container-fluid text-center">

</footer>

<script type="text/javascript">
  var timer2 = "<?php echo $exam_duration_mintues_seconds ?>";
  var interval = setInterval(function() {
  var timer = timer2.split(':');
  //by parsing integer, I avoid all extra string processing
  var minutes = parseInt(timer[0], 10);
  var seconds = parseInt(timer[1], 10);
  --seconds;
  minutes = (seconds < 0) ? --minutes : minutes;
  seconds = (seconds < 0) ? 59 : seconds;
  seconds = (seconds < 10) ? '0' + seconds : seconds;
  //minutes = (minutes < 10) ?  minutes : minutes;
  $('.countdown').html(minutes + ':' + seconds);
  if (minutes < 0) clearInterval(interval);
  //check if both minutes and seconds are 0
  if ((seconds <= 0) && (minutes <= 0)) clearInterval(interval);
  if ((seconds == 0) && (minutes == 0)){ alert( 'Exam Submit') ; redirect();  } ;
      timer2 = minutes + ':' + seconds;
    },
     1000);
</script>

<script type="text/javascript">
function redirect() {

    document.examSubmit.submit();
}
</script>
<script type="text/javascript">

function saveButtonFunction($radioid ){
    if ( $(".answerCheck"+$radioid+":checked").val()  ) {
  
      $('.saveQuestionAnswer'+$radioid).removeAttr("disabled");
    }
    else{
         $('.saveQuestionAnswer'+$radioid).attr('disabled', 'disabled');
    }
}

</script>

<script type="text/javascript">
   function BackQuestionFunction(a,b) {

      let backDivId = '#questiondiv'+a ;
     // let NextDivId =  '#questiondiv'+a-1 ;
      let PresentDivId =  '#questiondiv'+b ;
      $(PresentDivId).addClass('hide').removeClass('active');
      $(backDivId).removeClass('hide').addClass('active');
    
  }
  
    // Save Answer //

  function SaveQuestionFunction(b, c) {
    
      let NextDivId =  '#questiondiv'+c ;
      let PresentDivId =  '#questiondiv'+b ;
      let answerCheckId ='.answerCheck'+b ; 
      let questionId ='#question_id'+b ; 
      let answersaveId ='#answersave'+b ; 


      $('.saveQuestionAnswer'+b).attr('disabled', 'disabled');

     let question_id =   $(questionId).val()  ; 
     let answer =  $(answerCheckId+":checked").val() ;    // Set Answer of question  
     if(answer){
         $.ajax({
               type: "POST",
               url : '<?php echo base_url("Exam/saveQuestionAnswer") ;  ?>',
               data: {'question_no' : b ,'question_id':question_id,  'answer' :answer,'exam_refid' :'<?php echo $exam[0]->id ?>' },
               success:function(data){

                  if(c < <?php echo $this->exam_model->countQuestionByExamId($exam[0]->id)+1 ?>){
       
                     $(PresentDivId).addClass('hide').removeClass('active'); // Hide Present div
                     $(NextDivId).removeClass('hide').addClass('active');   // Show Next Div
                  }

                 $(answersaveId).val(answer);
                     let presentlabelbtn = '#labelbtn'+b ;
                     let nextlabelbtn = '#labelbtn'+c ;

                     $(presentlabelbtn).addClass('btn-success').removeClass('btn-default').removeClass('btn-info');  // Add Present label answered Status

                      var res = $(nextlabelbtn).hasClass('btn-success');
                      if(res == true){
                        $(nextlabelbtn).removeClass('btn-default').addClass('btn-success'); // Add Next label answered Status
                       }else{
                         $(nextlabelbtn).removeClass('btn-default').addClass('btn-info');  // Add Next label Hovered Status
                       }

               }
          }) ; 

     }else{
      alert('Select Answer') ; 
     }

  }

   /// ======= Next Question ========== //  

  function NextQuestionFunction(b, c) {
     
      let NextDivId =  '#questiondiv'+c ;
      let PresentDivId =  '#questiondiv'+b ;
      if(c < <?php echo $this->exam_model->countQuestionByExamId($exam[0]->id)+1 ?>){
          $(PresentDivId).addClass('hide').removeClass('active');
          $(NextDivId).removeClass('hide').addClass('active');

            let answersaveId ='#answersave'+b ; 
            let answer =  $(answersaveId).val();
            if(!answer){

               $(document).find('input:radio[name="answer'+b+'"]').attr("checked", false).removeAttr('checked').prop('checked', false);
            }
      }



     let presentlabelbtn = '#labelbtn'+b ;
     let nextlabelbtn = '#labelbtn'+c ;

     var res = $(presentlabelbtn).hasClass('btn-success');
      if(res == true){
        $(presentlabelbtn).removeClass('btn-default').addClass('btn-success'); // Add Present Label answered Status
       }else{
         $(presentlabelbtn).removeClass('btn-default').addClass('btn-info');// Add Present Label Vitisted  Status
       }
     
     var res = $(nextlabelbtn).hasClass('btn-success');
      if(res == true){
        $(nextlabelbtn).removeClass('btn-default').addClass('btn-success'); // Add Next Label answered Status
       }else{
         $(nextlabelbtn).removeClass('btn-default').addClass('btn-info');// Add Next Label Visited Status
       }
           
  }

  function showQuestion(a) {

    let showDivId =  '#questiondiv'+a ;

    var $currentQuestion =  $('.active').attr('data-id') ; 
    
      let presentlabelbtn = '#labelbtn'+a ;
      var res = $(presentlabelbtn).hasClass('btn-success');
      if(res == true){
        $(presentlabelbtn).addClass('btn-success'); // Add Present Label Answered Status
       }else{
         $(presentlabelbtn).addClass('btn-info');  //Add Present Label Vitisted  Status
       }

        $('.active').addClass('hide').removeClass('active'); 
       $(showDivId).removeClass('hide').addClass('active');
          
  }

  function clearQuestionFunction(a) {

     let answersaveId = '#answersave'+a ; 

     $(answersaveId).val(''); // Unset Answer of question  
     $(document).find('input:radio[name="answer'+a+'"]').attr("checked", false).removeAttr('checked').prop('checked', false);
  
    let presentlabelbtn = '#labelbtn'+a ;

   $.ajax({
         type: "POST",
         url : '<?php echo base_url("Exam/clearQuestionAnswer") ;  ?>',
         data: {'question_no' : a  },
         success:function(data){
            $(presentlabelbtn).removeClass('btn-success').addClass('btn-info'); // Unset status  of question Label 
         }
    }) ; 

   

  }
</script>
</body>
</html>
