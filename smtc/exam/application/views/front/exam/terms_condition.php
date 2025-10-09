<!DOCTYPE html>
<?php $link = $this->setting_model->get_all_setting();?>
<html lang="en">
<head>
  <title>Mock Test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/front/css/exam.css') ?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


  <script>

      function isChecked()
      {

      if (document.getElementById("exam_chkbox").checked == true) {

        
      window.location = "<?php echo base_url('main-paper') ; ?>";
     

      }else {

      alert("Please accept the terms & conditions.");
      return false; 
      }
    
    }
      </script> 
</head>
<body>
<div class="tophead">
  <div class="container">
  <div class="row">
    <div class="col-sm-2 col-xs-5" >
      <center>
        <a  href="<?php echo base_url('') ?>">   <img src="<?php echo $this->config->item('site_url').'/admin_panel/uploads/logo/'.$link[0]->logo ?>" style="width:100px"></a>
      </center>
    </div>
   
   
    <div class="col-sm-10 col-xs-7">  <div style="padding-left: 5px;text-align: right;font-size: 12px;line-height: 5;"><span class="glyphicon  glyphicon-time "></span> Total Time :<?php
                                $time=$exam[0]->time;
                                $timesplit=explode(':',$time);
                                $min=($timesplit[0]*60)+($timesplit[1])+($timesplit[2]>30?1:0);
                                echo $min.' Min'  // 62 Min
                                ?> </div></div>
  </div>
</div>
</div>

<div class="container text-center">    
  <div class="row content">

    <div class="col-sm-12"> 
      <div class="centerlized">
         <h1><?php echo $exam[0]->title ?>    </h1>
        <div>
          <table class="text-center" border="0" width="100%" style="line-height: 3">
          <tr>
          <td>Total Question <br> <b><?php echo $this->exam_model->countQuestionByExamId($exam[0]->id) ?></b></td>
          <td>Total Marks <br> <b><?php echo $this->exam_model->countQuestionMarksByExamId($exam[0]->id) ?></b></td>
          <td>Total Time <br> <b> <?php
                                $time=$exam[0]->time;
                                $timesplit=explode(':',$time);
                                $min=($timesplit[0]*60)+($timesplit[1])+($timesplit[2]>30?1:0);
                                echo $min.' Min'  // 62 Min
                                ?> </b></td>
          </tr> 
          </table>  
        </div>
       </div>
          <table  border="0" width="100%">
          <tr>
          <td><?php echo $exam[0]->short_description ?></td>
          </tr> 
           <tr>
          <td><?php echo $exam[0]->termsCondition ?></td>
          </tr>
          </table>  
          <div class="centerlized">
            <hr> 
             <table border="0" width="100%">
               <tr>
                  <td width="5%">
                     <form name="form1" method="post" action="">
                        <input type="checkbox" name="checkbox" id="exam_chkbox" >
                        <label for="checkbox"></label>
                     </form>
                  </td>
                  <td style="font-size: 
                  15px">  <p> &nbsp;&nbsp;&nbsp;I have read and understood the instructions given above.</p></td>
               </tr>
               <tr>  
                  <td>&nbsp;</td>
                  <td align="center">
                     <a style="cursor:pointer;" onclick="isChecked(); return false;">
                        <div class=" btn btn-primary btn-lg " style="width: 120px"><i class="icon-play-circle icon-1x"></i>&nbsp;  Start Exam</div>
                     </a>
                  </td>                 
               </tr>
          </table>
          </div> 
    </div>

  </div>
</div>

<footer class="container-fluid text-center footer">
 
</footer>

</body>
</html>
