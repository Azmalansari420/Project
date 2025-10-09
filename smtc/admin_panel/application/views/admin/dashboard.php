<?php $this->load->view('admin/header');?>

<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row mt-3">
      <div class="col-12 col-lg-6 col-xl-3">
         <div class="card gradient-orange">
           <div class="card-body">
              <h5 class="text-white mb-0"><?php echo count($registration) ?> <span class="float-right"><i class="fa fa-user"></i></span></h5>
                <div class="progress my-3" style="height:3px;">
                   <div class="progress-bar" style="width:<?php echo count($registration) ?>%"></div>
                </div>
              <p class="mb-0 text-white small-font">Total Registration  <span class="float-right"><i class="zmdi zmdi-long-arrow-up"></i></span></p>
            </div>
         </div>
       </div>
       <div class="col-12 col-lg-6 col-xl-3">
         <div class="card gradient-orange">
           <div class="card-body">
              <h5 class="text-white mb-0"><?php echo count($course) ?> <span class="float-right"><i class="fa fa-user"></i></span></h5>
                <div class="progress my-3" style="height:3px;">
                   <div class="progress-bar" style="width:<?php echo count($course) ?>%"></div>
                </div>
              <p class="mb-0 text-white small-font">Total Course  <span class="float-right"><i class="zmdi zmdi-long-arrow-up"></i></span></p>
            </div>
         </div>
       </div>
     
       <div class="col-12 col-lg-6 col-xl-3">
         <div class="card gradient-orange">
           <div class="card-body">
              <h5 class="text-white mb-0"><?php echo count($exam) ?> <span class="float-right"><i class="fa fa-user"></i></span></h5>
                <div class="progress my-3" style="height:3px;">
                   <div class="progress-bar" style="width:<?php echo count($exam) ?>%"></div>
                </div>
              <p class="mb-0 text-white small-font">Total Exam  <span class="float-right"><i class="zmdi zmdi-long-arrow-up"></i></span></p>
            </div>
         </div>
       </div> 
     </div>

     <hr>
   
      <div class="row " >
      <div class="col-lg-12">
           <div class="card">
                 
            <div class="card-body">

          <div class="table-responsive">
              <table id="example" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>SNo.</th>
                    <th>Exam</th>
                    <th>Semester</th>
                    <th> Date</th>
                    <th> Time</th>
                    <th>Enrollment No </th>
                    <th>Status</th>
                    <th>Total Marks</th>
                    <th>O/B Marks</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <?php 
                 $userExamList =  $this->exam_model->get_all_user_exam(20)  ; 
                if(count($userExamList)>0){ ?>
                <tbody>
                  <?php $no=0; foreach($userExamList as $record){ $no++; ?>
                  
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $record->title; ?></td>                  
                    <td><?php echo $record->semester; ?></td>                  
                    <td><?php echo date('d-M-Y', strtotime($record->date)); ?></td>
                      <td>
                      <?php echo date('h:i A', strtotime($record->startTime)); ?>-<?php echo date('h:i A', strtotime($record->endTime)); ?>
                    </td>
                    <td><a href="<?php echo base_url('user/profile/'.$record->user_refid  ); ?>"  title="View Profile"><?php echo $record->reg_id; ?></a></td>
                    <td><?php echo $record->status; ?></td>
                    <td><?php echo $record->totalMarks; ?></td>
                    <td><?php echo $record->obtained_marks; ?></td>
                
                    <td> 
                    <?php if($record->status == "Completed"){ ?>
                      <a href="<?php echo base_url('user/viewExamAnswersheet/'.$record->id); ?>"  target="_blank" title="View Answer Sheet"> View </a> 
                   <?php   } ?>
                 </td>
                  </tr>
                  <?php } ?> </tbody>
                <?php } ?> </table>
            </div>
          </div>
        </div>
        
      </div>
    </div><!--End Row-->
   </div>
 </div>

 

<?php $this->load->view('admin/footer');?>