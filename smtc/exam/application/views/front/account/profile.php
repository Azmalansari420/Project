<!DOCTYPE html>
<?php $link = $this->setting_model->get_all_setting();?>
<html lang="en">
<head>
  <title>Exam</title>
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
    <div class="col-sm-9 col-xs-7"> 
      <div class="pull-right">
         <a href="<?php echo base_url('user/logout'); ?>"  style="color: #ffff" > Logout</a>
      </div>
     </div>
  </div>
</div>
</div>

<div class="container">    
 <div class="row" style="margin-top: 60px;">        
      
        
          <div class="col-sm-8">
              <table class="table table-bordered">
                   <tr>
                      <td>Enrollment Number</td>
                      <td><strong><?php echo $RESULT[0]->reg_id; ?> </strong></td>
                   </tr> 
                   <tr>
                      <td>Stundet Id:</td>
                      <td><strong><?php echo $RESULT[0]->student_id_number; ?> </strong></td>
                   </tr>
                   <tr>
                      <td>Student Name</td>
                      <td><strong><?php echo ucwords($RESULT[0]->name); ?> </strong></td>
                   </tr> 
                   <tr>
                      <td>Father Name</td>
                      <td><strong><?php echo ucwords($RESULT[0]->father_name); ?> </strong></td>
                   </tr>
                   <tr>
                      <td>Date Of Birth</td>
                      <td><strong><?php echo ucwords(date('d-M-Y'),strtotime($RESULT[0]->dob)); ?> </strong></td>
                   </tr> 
                   <tr>
                      <td>Course</td>
                      <td><strong><?php echo $RESULT[0]->course; ?> </strong></td>
                   </tr>  
                  <tr>
                      <td>Specialization</td>
                      <td><strong><?php 
                                                                    
                            	$string_to_array = explode('#',$RESULT[0]->specialization);
                            	foreach($string_to_array as $key=>$row_id){
                            	    if($row_id){
                            	         $specialization = $this->specialization_model->get_specialization_by_id($row_id) ; 
                            	    echo $specialization[0]->name.'<br>'; 
                            	    }
                            	   
                            	}
                            	
                            	
                                
    				            ?></strong></td>
                  </tr>
              </table>
               
          </div>
           <div class="col-sm-4">
            
              <center>
                   <img src="<?php echo $this->config->item('site_url').'/admin_panel/uploads/user/'.$RESULT[0]->photo ?>" style="height:250px" >
                
              </center>
          </div>
          <div class="col-sm-12">
              <hr>
              
                <?php if($userProcessExam){  ?>


                  <h5><b>Exam Uncompleted :</b>  <?php echo $userProcessExam['title'] ?> </h5>
                  <h5><?php echo $userProcessExam['semester'] ?> </h5>
                  <br>
                  <p> It seen , you have not completed exam.  Please contact to administration for reactivate to continue exam. </p>
              

                <?php }else{ ?>


                <?php if($userActiveExam){  ?>
                
                   
                    <table class="table table-bordered">
                        <tr>
                            <td></td>
                            <td>Examination</td>
                            <td>Semester</td>
                            <td>Active Date</td>
                            <td>Total Time</td>
                            <td></td>
                        </tr>
                         <?php foreach($userActiveExam as $key=>$value){ ?>
                        <tr>
                            <td><?php echo $key+1;  ?></td>
                            <td><?php echo $value->title;  ?></td>
                            <td><?php echo $value->semester; ?></td>
                            <td><?php echo date('d-M-Y' ,strtotime($value->active_date)) ;;  ?></td>
                            <td><?php
                            $time=$value->time;
                                $timesplit=explode(':',$time);
                                $min=($timesplit[0]*60)+($timesplit[1])+($timesplit[2]>30?1:0);
                                echo $min.' Min'  // 62 Min
                                ?>
                            </td>
                            <td> <a class="btn btn-primary" href="<?php echo base_url('start-exam/').$value->examid ?>"> Start Exam   </a></td>
                        </tr>
                         <?php } ?>
                        
                    </table>
                   
                <?php }else{ ?>
                <center>
                     <h3> No Exam Sheduled. Please wait for next exam shedule.</h3>
                </center>

                 


               <?php  } ?> 


                <?php } ?> 
               
               


                  <br>
                <br>  <br>
                <br>  <br>
                <br>

                                
              </div>
            </div>
          
</div>

<footer class="container-fluid text-center footer">
 
</footer>

</body>
</html>