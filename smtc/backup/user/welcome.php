<?php 
 
include_once("include/topmenu.php");


//Vender Count and live and status
$all_product_count         = 0;
$all_categories_count      = 0;
$all_sub_categories_count  = $con->all_count('user_register',array('user_add_by_id'=>$admin_id));  
 $all_student_pass         = $con->all_count('user_register',array('user_add_by_id'=>$admin_id,'p_s'=>"Passed")); 
 
 
 $fscd = fs('course',array('id'=>$fs->course_id));

 
 

?>
<style>
    .not_message{
        text-align: center;
    color: #f00;
    margin: 0px;
    margin-bottom: 15px;
    }
</style>

  <!-- Content Wrapper. Contains page Content -->
  <div class="content-wrapper">
   

     <section class="content" id="ppg">
      <div class="row">
        <div class="col-xs-12">
            <h3 class="not_message">Send assignment in this mail id info@smtc.org.in / smtcinstitute.dwarka@gmail.com</h3>
          <div class="box box-info">
            <div class="box-header">
          <h3 class="box-title">Student Profile and Course Detail</h3>
    
        </div>
            <!-- /.box-header -->
            <div class="box-body">
      <div class="row">
          <div class="col-sm-6">
              <table class="table table-bordered">
                <tr><th>Student Registration Id</th><td><?php e($fs->reg_id);?></td></tr>
                <tr><th>Student Id Number</th><td><?php e($fs->student_id_number);?></td></tr>
                <tr><th>Student Name</th><td><?php e($fs->first_name);?></td></tr>
                <tr><th>Student Father Name *</th><td><?php e($fs->father_name);?></td></tr>
                <tr><th>Student Mother Name *</th><td><?php e($fs->mother_name);?></td></tr>
                <tr><th>Email*</th><td><?php e($fs->email);?></td></tr>
                <tr><th>Mobile Number *</th><td><?php e($fs->mobile);?></td></tr>
                <tr><th>Gender</th><td><?php e(c_g($fs->gender));?></td></tr>
                <tr><th>Marital Status</th><td><?php e(s_m_s($fs->marital_status));?></td></tr>
                <tr><th>DOB </th><td><?php echo date_format(date_create("$fs->dob"),"d-m-Y");?></td></tr>
                <tr><th>Select State *</th><td><?php echo id_to_name('state',$fs->state);?></td></tr>
                <tr><th>Exam Option *</th><td><?php echo e($fs->exam_option); ?></td></tr>
                <tr><th>Exam Session *</th><td><?php echo e($fs->exam_session); ?> <br/><small class="text-danger">if you change this session paid by 2000 extra</small></small></td></tr>
                <tr><th>Work Experience *</th><td><?php echo e($fs->work_experience); ?></td></tr>
                <tr><th>Full Address *</th><td><?php e($fs->address);?></td></tr>
           
         </table>
        </div>
        <div class="col-sm-6">
               <table class="table table-bordered">
                 <tr>
              <th>Student Image</th>
              <td><img src="../upload/<?php e(@$fs->picture); ?>" alt="" style="width:100px;height:100px;" /></td>
            </tr>
            <tr>
              <th>Minimum Qualification 10th or 12th Graduation</th>
              <td><img src="../upload/<?php e(@$fs->cover); ?>" alt="" style="width:100px;height:100px;" /></td>
            </tr>
            <tr>
              <th>Adhar Card</th>
              <td><img src="../upload/<?php e(@$fs->adhar_pic); ?>" alt="" style="width:100px;height:100px;" /></td>
            </tr> 
            <tr>
              <th>Signature</th>
              <td><img src="../upload/<?php e(@$fs->student_signature); ?>" alt="" style="width:100px;height:100px;" /></td>
            </tr> 
             <tr>
              <th>Last Qualification </th>
              <td><?php e($fs->last_qualification);?></td>
            </tr>
            <tr><th>Course *</th><td><?php 
            echo id_to_name('course',$fs->course_id);
            ?></td></tr>
            <?php
             /*
             $main_fs = fs('course',array('id'=>$fs->course_id));
             $pass = "WHERE id IN ($main_fs->subject)";
             $fetch_all_subjcet = $con->get('subject',$pass);
             if(is_array($fetch_all_subjcet) || is_object($fetch_all_subjcet)){
               echo "<tr style='background-color:#f00;text-align:center;'><td colspan='2'><b>Subject list</b></td></tr>";
               $iss=1;
               foreach($fetch_all_subjcet as $fas){?>
                 <tr>
                <td><?php e($iss++); ?></td>
                <td><?php echo $fas->name;?> | <?php echo $fas->code;?></td>
                 </tr>
               <?php }
             }
                             */     
            ?>
            
            <tr style="display:none"><th>Admission Date</th><td><?php e($fs->join_date);?></td></tr>
            <tr>
                <th>Specialization</th>
                <td><?php 
				   $string_to_array = explode('#',$fs->specialization);
 if(is_array($string_to_array) || is_object($string_to_array)){
     $user_specialization = "";
     foreach($string_to_array as $sta){
         echo $user_specialization = id_to_name('specialization',$sta)." <br/>";
     }
     
 }
				  ?></td>
            </tr>
            
           <tr><th>Total Fee</th><td><?php e($fs->received_amount);?></td></tr>
           <tr><th>Payment Mode</th><td><?php e($payment_mode_list[$fs->payment_mode]);?></td></tr>
         </table>
        </div>
      </div>
               
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


