<?php $this->load->view('admin/header');?>

<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">
   
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
                 $userExamList =  $this->exam_model->get_all_user_exam()  ; 
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