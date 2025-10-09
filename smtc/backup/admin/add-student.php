<?php 
   include_once('include/topmenu.php');
   
//get url value
	$c_id = @$_GET['id']; 
	$table_name    = "user_register";
	$old_specilation = array();
	//fetch data 
	if(isset($c_id) and !empty($c_id) and is_numeric($c_id)){
		$fs = fs('user_register',array('id'=>$c_id));
		if(is_array($fs) || is_object($fs)){
			$form_action = 2;
			
			
			$string_to_array = explode('#',$fs->specialization);
            if(is_array($string_to_array) || is_object($string_to_array)){
                 
                 foreach($string_to_array as $sta){
                     $old_specilation[] = $sta;
                 }
            }
			
		}else{
			url('all_student.php');
		}
	}else{
		$form_action = 1;
	}
	
	 
//ADD     
if(isset($add_course_btn)){
       $arr        = explode("-",$add_date);
	   $ser_nu     = substr(time(),2,8);
	   
       $pp         = rand();
	   $col_val = array(
			'oauth_uid'=>$ser_nu,
			'join_date'=>$add_date,
			'state'=>$state_id,
			'district'=>$district_id,
			'city'=>$city_id,
			'address'=>$b_full_address,
			'first_name'=>$s_name,
			'father_name'=>$s_f_name,
			'mother_name'=>$s_m_name,  
			'email'=>$email,
			'mobile'=>$b_m_1,  
			'gender'=>$s_gender,  
			//'user_add_by_id'=>10000,  
			'dob'=>$s_dob, 
			'course_id'=>$s_course,
			'add_by'=>'Branch',
			'marital_status'=>$marital_status,
			'husband_wife_name'=>$hwn,
			'payment_status'=>1,
			'order_id'=>$all_order_id,
			'work_experience'=>$work_experience,
            'exam_option'=>$exam_option,
            'exam_session'=>$exam_session,
            'received_amount'=>$received_amount,
            'payment_mode'=>$payment_mode,
            'last_qualification'=>$last_qualification,
            
            'late_fees'=>$late_fees,
            'exam_fees'=>$exam_fees,
            'reg_fees'=>$reg_fees,
            
            
			'specialization'=>implode("#",$specialization)
			);
			
			 
	  //student pic
	  $f_name   = $_FILES['stu_img']['name'];
	  $f_t_name = $_FILES['stu_img']['tmp_name'];
	  if(!empty($f_name)){
		  $f_new_img = time().$f_name;
		  $file_Path    = '../upload/'.$f_new_img; 
		  $col_val['picture'] = $f_new_img; 
		  move_uploaded_file($f_t_name,$file_Path);
	  }


	   //student qualification
	  $f_name_one   = $_FILES['stu_min_qual_img']['name'];
	  $f_t_name_one = $_FILES['stu_min_qual_img']['tmp_name'];
	   if(!empty($f_name_one)){
		  $f_new_img1 = time().$f_name_one;
		  $file_Paths    = '../upload/'.$f_new_img1; 
		  $col_val['cover'] = $f_new_img1; 
		  move_uploaded_file($f_t_name_one,$file_Paths);
	  }

      //student Aadhar Card Image
	  $stu_aadhar_card_name   = $_FILES['stu_aadhar_card']['name'];
	  $stu_aadhar_card_tn     = $_FILES['stu_aadhar_card']['tmp_name'];
	  if(!empty($stu_aadhar_card_name)){
		  $f_new_img3 = time().$stu_aadhar_card_name;
		  $file_Pathss    = '../upload/'.$f_new_img3; 
		  $col_val['adhar_pic'] = $f_new_img3; 
		  move_uploaded_file($stu_aadhar_card_tn,$file_Pathss);
	  }
	  
	  
	  
	  //student student signature
	  $stu_aadhar_card_name   = $_FILES['student_signature']['name'];
	  $stu_aadhar_card_tn     = $_FILES['student_signature']['tmp_name'];
	  if(!empty($stu_aadhar_card_name)){
		  $f_new_img3 = time().$stu_aadhar_card_name;
		  $file_Pathss    = '../upload/'.$f_new_img3; 
		  $col_val['student_signature'] = $f_new_img3; 
		  move_uploaded_file($stu_aadhar_card_tn,$file_Pathss);
	  }


    if(isset($c_id) and !empty($c_id) and is_numeric($c_id)){
        $where   = array('id'=>$c_id);
        $row     = $con->update($table_name,$col_val,$where);
        alert('Student Data Successfully Update','add-student.php?id='.$c_id);
        
    }else{
        $col_val['password'] = $pp;
	   $row  = $con->insert($table_name,$col_val);
	   $last_insert_id = $con->last_id($con->con);
	   //$reg_id  = "SMTC".$arr[0].$arr[1].$last_insert_id;
	   $reg_id  = "SMTC/2016".$last_insert_id;
	   
	   $fsc_d = fs('course',array('id'=>$s_course));
	   $student_id = substr($fsc_d->c_code."-".$last_insert_id.rand(),0,10);
	   
	   $update = $con->update($table_name,array('reg_id'=>$reg_id,'student_id_number'=>$student_id),array('id' => $last_insert_id ));

	   include('user-register-mail.php');

	  alert('Student Register Successfully','add-student.php');
    }
	 
}

 
 
?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header"> 
      <h1>Add Students <small>
	  <a href="all-student.php" class="btn btn-primary">All Students  List </a>
	  
	  </small>
      </h1>
     
    </section>
	
	
<section class="content" id="ppg">
      <div class="row">
        <div class="col-xs-12">

          <div class="box box-info">
            <div class="box-header">
          <h3 class="box-title"><i class="fa fa-shopping-cart"></i> Add Students</h3>
			 
        </div>
            <!-- /.box-header -->
            <div class="box-body">
                  <form action="" class="student_add_form" enctype="multipart/form-data" method="post">
				 
					 
					
					<div class="row">
						<div class="col-sm-12">
					<div class="form-group">
					<label for="">Select Course</label>
					  <select required name="s_course" class="form-control select2" id="s_course"> 
						  <option value="">Select Course</option>
			<?php
			  $all_fetch_institue  = $con->all_fetch('course',array('status'=>'Yes'));
			  if(is_array($all_fetch_institue) || is_object($all_fetch_institue)){
				  foreach($all_fetch_institue as $afi){
				      if($afi->id==$fs->course_id){
				            $sel_d = "selected";
				      }else{
				            $sel_d = "";
				      }
				?>
				<option <?php echo $sel_d; ?> value="<?php e($afi->id);?>"><?php e($afi->name);?></option>
			  <?php  } } ?>
					   </select>
					</div>
					</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label for="">Student  Name *</label>
							   <input type="text" required name="s_name" value="<?php e(@$fs->first_name); ?>" placeholder="Student Name" class="form-control" />
							   <input type="hidden" value="<?php e(@$admin_id);?>" name="b_id"  />
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label for="">Student Father Name *</label>
				<input type="text" required name="s_f_name" value="<?php e(@$fs->father_name); ?>" placeholder="Student Father Name " class="form-control" />
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label for="">Student Mother Name *</label>
				<input type="text" required name="s_m_name" value="<?php e(@$fs->mother_name); ?>" placeholder="Student Mother Name" class="form-control" />
							</div>
						</div> 
						
					</div>
					
					
					<div class="row">
					
					<div class="col-sm-4">
							<div class="form-group">
								<label for="">Email*</label>
							   <input type="email" required name="email" value="<?php e(@$fs->email); ?>" placeholder="Email " class="form-control check_mail_id" />
							   <input type="hidden" class="temp_check_email_id" value="1">
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label for="">Mobile Number *</label>
							   <input type="number" required name="b_m_1" value="<?php e(@$fs->mobile); ?>" placeholder="Mobile Number*" class="form-control check_mobile_id" />
							    <input type="hidden" class="temp_check_mobile_id" value="1">

							</div>
						</div> 
						<div class="col-sm-4">
							<div class="form-group">
								<label for="">Select Gender</label>
							    <select name="s_gender" required class="form-control">
								<option value="">Select Gender</option>
								<?php 
								  
								  foreach($s_g as $k=>$v){
									  if(@$fs->gender==$k){?>
										<option selected value="<?php e($k); ?>"><?php e($v); ?></option>    
									  <?php }else{ ?>
										  <option value="<?php e($k); ?>"><?php e($v); ?></option>  
									  <?php }
									   }
								?>
								   
								</select>
							</div>
						</div> 
						 
					</div>
					
					<div class="row">
						<div class="col-sm-4">
							<div class="form-group">
								<label for="">DOB (M-D-Y)</label>
							   <input type="date" value="<?php e(@$fs->dob)?>" required name="s_dob" class="form-control" />
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label for="">Marital status *</label>
							  <select class="form-control marital_status" required name="marital_status"> 
							  	<option value="1">Single</option>
							  	<option value="2">Married</option>							  	
							  </select>
							</div>
						</div> 
							<div class="col-sm-4">
							<div class="form-group">
								<label for="">Specialization *</label>
							    <select class="form-control select2" required name="specialization[]" multiple="multiple">
							  	<option value="">Select specialization</option>
							  <?php
			  $all_fetch_specialization  = $con->all_fetch('specialization',array('status'=>1));
			  if(is_array($all_fetch_specialization) || is_object($all_fetch_specialization)){
				  foreach($all_fetch_specialization as $afs){
				      if(in_array($afs->id,$old_specilation)){
				          $seld_s = "selected";   
				      }else{
				         $seld_s = "";   
				      }
				?>
				<option <?php echo $seld_s; ?> value="<?php echo $afs->id; ?>"><?php echo $afs->name; ?></option>
				<?php }  } ?>						  	
							  </select>
							</div>
						</div>
						<div class="col-sm-4 show_hwn" style="display: none">
							<div class="form-group">
								<label for="">Husband or wife name *</label>
							    <input type="text"  name="hwn" class="form-control hwn" placeholder="Husband or wife name " />
							</div>
						</div>
					</div>
					
					<div class="row">
					
						 
						 <div class="col-sm-3">
							<div class="form-group">
								<label for="">Students Image</label>
								 
									 
								 
								
									<?php if(isset($fs->picture) and !empty($fs->picture)){ ?>
									<input type="file" accept="image/*"  name="stu_img"  />
									<small style="color:#f00">upload file size 1MB JPG,PNG</small>
									<br/>
									<img src="../upload/<?php echo $fs->picture; ?>" style="width:50px;height:50px;">
									
								<?php }else{?>
								<input type="file" accept="image/*"  name="stu_img" required />
								<small style="color:#f00">upload file size 1MB JPG,PNG</small>
								<?php } ?>
								
							</div>
						 </div>

						 <div class="col-sm-3">
							<div class="form-group">
								<label for="">Aadhar Card Image</label>
								 
								 
								
								<?php if(isset($fs->adhar_pic) and !empty($fs->adhar_pic)){ ?>
								    <input type="file" accept="image/*"  name="stu_aadhar_card" />
								    <small style="color:#f00">upload file size 1MB JPG,PNG</small><br/>
									<img src="../upload/<?php echo $fs->adhar_pic; ?>" style="width:50px;height:50px;">
							<?php }else{?>
								<input type="file" accept="image/*"  name="stu_aadhar_card" required />
								<small style="color:#f00">upload file size 1MB JPG,PNG</small>
								<?php } ?>
								
							</div>
						 </div>
						 <div class="col-sm-3">
							<div class="form-group">
								<label for="">Minimum Qualification 10<sup>th</sup> or 12<sup>th</sup></label>
							   
								 
								
									<?php if(isset($fs->cover) and !empty($fs->cover)){ ?>
									 <input type="file" accept="image/*"  name="stu_min_qual_img" />
									 <small style="color:#f00">upload file size 1MB JPG,PNG</small><br/>
									<img src="../upload/<?php echo $fs->cover; ?>" style="width:50px;height:50px;">
								<?php }else{?>
								<input type="file" accept="image/*"  name="stu_min_qual_img" required/>
								
								<?php } ?>
							</div>
						 </div>
						 
						 
						 
						 
						 <div class="col-sm-3">
							<div class="form-group">
								<label for="">Signature</label>
								 
								 
								
								<?php if(isset($fs->student_signature) and !empty($fs->student_signature)){ ?>
								    <input type="file" accept="image/*"  name="student_signature" />
								    <small style="color:#f00">upload file size 1MB JPG,PNG</small><br/>
									<img src="../upload/<?php echo $fs->student_signature; ?>" style="width:50px;height:50px;">
							<?php }else{?>
								<input type="file" accept="image/*"  name="student_signature" required />
								<small style="color:#f00">upload file size 1MB JPG,PNG</small>
								<?php } ?>
								
							</div>
						 </div>
						 
						 
						 
						 
						   <div class="col-sm-3">
						   <div class="form-group">
						   <label for="">Last Qualification *</label>
						   <select name="last_qualification" class="form-control" required>
						       <option value="">Select Last Qualification</option>
						   <option value="10th Based">10th Based</option>
						   <option value="12th Based">12th Based</option>
						   <option value="ITI Based">ITI Based</option>
						   <option value="Diploma Based">Diploma Based</option>
						   <option value="Graduation Based">Graduation Based</option>
						   </select>
						   </div>
						   </div>
						 
					</div>
					 
					<div class="row">
						<div class="col-sm-2">
							<div class="form-group">
							<label for="">Select State *</label>
								<select name="state_id" id="state_id" required class="form-control select2">
							<option value="">Select State</option>
							<?php
							    $all_fetch_category = $con->all_fetch('state');
								if(is_array($all_fetch_category) || is_object($all_fetch_category)){
								foreach($all_fetch_category as $afc){ 
								if(@$fs->state==$afc->id){?>
									<option selected value="<?php e($afc->id); ?>"><?php e($afc->name); ?></option>
								<?php }else{ ?>
									<option value="<?php e($afc->id); ?>"><?php e($afc->name); ?></option>
								<?php }?>
									
								<?php } }
							?>
					   </select>
							</div>
						</div>
						<div class="col-sm-4" style="display:none">
						    <div class="form-group">
							<label for="">Select District *</label>
							<select name="district_id" class="form-control select2" id="district_id">
							<option value="">Select District</option>
							<?php
							    $all_fetch_category = $con->all_fetch('district',array('s_id'=>@$fs->state));
								if(is_array($all_fetch_category) || is_object($all_fetch_category)){
								foreach($all_fetch_category as $afc){ 
								if(@$fs->district==$afc->id){?>
									<option selected value="<?php e($afc->id); ?>"><?php e($afc->name); ?></option>
								<?php }else{ ?>
									<option value="<?php e($afc->id); ?>"><?php e($afc->name); ?></option>
								<?php }?>
									
								<?php } }
							?>
					   </select>
							</div>
						</div>
						<div class="col-sm-4" style="display:none">
						   <div class="form-group">
						   <label for="">Select City *</label>
								<select name="city_id" class="form-control select2" id="city_id">
							<option value="">Select City</option>
							<?php
							    $all_fetch_category = $con->all_fetch('city',array('d_id'=>@$fs->district));
								if(is_array($all_fetch_category) || is_object($all_fetch_category)){
								foreach($all_fetch_category as $afc){ 
								if(@$fs->city==$afc->id){?>
									<option selected value="<?php e($afc->id); ?>"><?php e($afc->name); ?></option>
								<?php }else{ ?>
									<option value="<?php e($afc->id); ?>"><?php e($afc->name); ?></option>
								<?php }?>
									
								<?php } }
							?>
					   </select>
							</div>
						</div>
						
						<div class="col-sm-4">
						   <div class="form-group">
						   <label for="">Select Exam Option *</label>
						   <select name="exam_option" class="form-control" required>
						       <option value="">Select Exam Option</option>
						   <option value="Online Exam">Online Exam</option>
						   <option value="Center Exam">Center Exam</option>
						   <option value="Assignment">Assignment</option>
						   </select>
						   </div>
						   </div>
						   
						   <div class="col-sm-4">
						   <div class="form-group">
						   <label for="">Exam Session</label>
						    <input type="text" name="exam_session" class="form-control" value="<?php e(@$fs->exam_session);?>" placeholder="Exam Session">
						   </div>
						   </div>
						   
						   	<div class="col-sm-4">
						   <div class="form-group">
						   <label for="">Work Experience</label>
						    <input type="text" name="work_experience" class="form-control" value="<?php e(@$fs->work_experience);?>" placeholder="Work Experience">
						   </div>
						   </div>
						   
						   	<div class="col-sm-4">
						   <div class="form-group">
						   <label for="">Enter Fee Amount</label>
						    <input type="text" name="received_amount" required class="form-control" value="<?php e(@$fs->received_amount);?>" placeholder="Enter Fee Amount">
						   </div>
						   </div>
						   <div class="col-sm-2">
						   <div class="form-group">
						   <label for="">Payment Mode *</label>
						   <select name="payment_mode" required class="form-control">
						       <option value="">Select Payment Mode</option>
						       <?php 
						       if(is_array($payment_mode_list) || is_object($payment_mode_list)){
						           foreach($payment_mode_list as $pmlk=>$pmlv){
						               if($pmlk==$fs->payment_mode){
						                   $seld = "selected";
						               }else{
						                   $seld = "";
						               }
						           ?>
						               <option <?php echo $seld; ?> value="<?php echo $pmlk; ?>"><?php echo $pmlv; ?></option>
						           <?php }
						       }?>
						   </select>
						   </div>
						   </div>
						   
						   
						   
						   
						   
						   
						   
						   	<div class="col-sm-4">
						   <div class="form-group">
						   <label for="">Enter Late Fee Amount</label>
						    <input type="number" name="late_fees" required class="form-control" value="<?php e(@$fs->late_fees);?>" placeholder="Enter Late Fee Amount">
						   </div>
						   </div>
						   
						   <div class="col-sm-4">
						   <div class="form-group">
						   <label for="">Enter Exam Fee Amount</label>
						    <input type="number" name="exam_fees" required class="form-control" value="<?php e(@$fs->exam_fees);?>" placeholder="Enter Exam Fee Amount">
						   </div>
						   </div>
						   
						   <div class="col-sm-4">
						   <div class="form-group">
						   <label for="">Enter Registration Fee Amount</label>
						    <input type="number" name="reg_fees" required class="form-control" value="<?php e(@$fs->reg_fees);?>" placeholder="Enter Registration Fee Amount">
						   </div>
						   </div>
						   
						   
						   
						   
						   
						   
						   
						
						<div class="col-sm-12">
						    <label for="">Full Address *</label>
		<textarea name="b_full_address"  required placeholder="Full Address" class="form-control"><?php e(@$fs->address);?></textarea>
						</div>
					
					</div>
				 
					
				<input type="submit" name="add_course_btn" value="Form Submit" class="btn btn-info btn-block" style="margin-bottom: 25px;margin-top: 25px;" />
					
				 
					
				 </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
		 
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   <?php include_once('include/footer.php');?>
   <style type="text/css">
   	.c_green{border: 3px solid #158815;}
   	.c_red{border:3px solid #d81426}
   </style>
   <script type="text/javascript">
    /*
    //check mail id
   	$(document).on('keyup','.check_mail_id',function(){
       var temp_check_email_id =  $(this).val();

       if( temp_check_email_id !== ""){
	        $.ajax({
	        	url:'ajax_to_php/admin_file.php',
	        	method:'post',
	        	data:{temp_check_email_id:temp_check_email_id},
	        	success:function(data){ 
	        		if(data==0){
	        			$('.check_mail_id').addClass('c_green').removeClass('c_red');
	        			$('.temp_check_email_id').val(0);
	        		}else{
	        			$('.check_mail_id').addClass('c_red').moveClass('c_green');
	        			$('.temp_check_email_id').val(1);
	        		}
	        	}

	        });
		}

   	});

   	   
   	//check mobile id  
   	$(document).on('keyup','.check_mobile_id',function(){
       var temp_check_mobile_id =  $(this).val();

       if( temp_check_mobile_id !== ""){
	        $.ajax({
	        	url:'ajax_to_php/admin_file.php',
	        	method:'post',
	        	data:{temp_check_mobile_id:temp_check_mobile_id},
	        	success:function(data){
	        		if(data==0){
	        			$('.check_mobile_id').addClass('c_green').removeClass('c_red');
	        			$('.temp_check_mobile_id').val(0);
	        		}else{
	        			$('.check_mobile_id').removeClass('c_green').addClass('c_red');
	        			$('.temp_check_mobile_id').val(1);
	        		}
	        	}

	        });
		}

   	});

   	//form submit check
    $(document).on('submit','.student_add_form',function(){
    	var temp_check_email_id   = $('.temp_check_email_id').val();
    	var temp_check_mobile_id  = $('.temp_check_mobile_id').val();

    	if(temp_check_email_id==1){
    		alert('Email id is Already used');
    		return false;
    	}else if(temp_check_mobile_id==1){
    		alert('Mobile Number is already used');
    		return false;
    	}else{
    		return true;
    	}
   		return false;
   	});
   	*/
   </script>

  
 