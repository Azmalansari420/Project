
<?php 
  include_once('lib/all_files.php');
   $page_name     = "add-student.php";
   $show_all_list = "all-student.php";
   $table_name    = "tbl_user";
   $url_id        = @$_GET['id'];
   
   
//FETCH
if(isset($url_id) and is_numeric($url_id) and !empty($url_id)){
	    $fs = fs($table_name,array('id'=>$url_id));   
		if(is_array($fs) || is_object($fs)){
			
		}else{
			goto_c_url($page_name);
		}
}

//ADD     
if(isset($add_course_btn)){
	
       $arr        = explode("-",$add_date);
	   $ser_nu     = substr(time(),2,8);
	   $student_password = rand();
	   $col_val = array(
			'typetab'=>1,
			'oauth_uid'=>$ser_nu,
			'join_date'=>$add_date,
			'state_id'=>$state_id,
			'work_experience'=>$work_experience,
            'exam_option'=>$exam_option,
            'received_amount'=>$received_amount,
            'payment_mode'=>$payment_mode,
			'address'=>$b_full_address,
			'name'=>$s_name,
			'father_name'=>$s_f_name,
			'mother_name'=>$s_m_name,  
			'email'=>$email,
			'mobile'=>$b_m_1,  
			'gender'=>$s_gender,  
			'dob'=>$s_dob,
			'course_id'=>$s_course,
			'add_by'=>'Branch',
			'marital_status'=>$marital_status,
			'status'=>1,
			'password'=>$student_password,
			'order_id'=>$all_order_id,
			'last_qualification'=>$last_qualification,
			'lateral_entry'=>$lateral_entry,
			'specialization'=>implode("#",$specialization)
			);
			
			 
	  //student pic
	  $f_name   = $_FILES['stu_img']['name'];
	  $f_t_name = $_FILES['stu_img']['tmp_name'];
	  if(!empty($f_name)){
		  $f_new_img = time().$f_name;
		  $file_Path    = 'admin_panel/uploads/user/'.$f_new_img; 
		  $col_val['photo'] = $f_new_img; 
		  move_uploaded_file($f_t_name,$file_Path);
	  }


	   //student qualification
	  $f_name_one   = $_FILES['stu_min_qual_img']['name'];
	  $f_t_name_one = $_FILES['stu_min_qual_img']['tmp_name'];
	   if(!empty($f_name_one)){
		  $f_new_img1 = time().$f_name_one;
		  $file_Paths    = 'admin_panel/uploads/user/'.$f_new_img1; 
		  $col_val['cover'] = $f_new_img1; 
		  move_uploaded_file($f_t_name_one,$file_Paths);
	  }

      //student Aadhar Card Image
	  $stu_aadhar_card_name   = $_FILES['stu_aadhar_card']['name'];
	  $stu_aadhar_card_tn     = $_FILES['stu_aadhar_card']['tmp_name'];
	  if(!empty($stu_aadhar_card_name)){
		  $f_new_img3 = time().$stu_aadhar_card_name;
		  $file_Pathss    = 'admin_panel/uploads/user/'.$f_new_img3; 
		  $col_val['adhar_pic'] = $f_new_img3; 
		  move_uploaded_file($stu_aadhar_card_tn,$file_Pathss);
	  }
	  
	  //student Singnature Image
	  $stu_aadhar_card_name   = $_FILES['student_signature']['name'];
	  $stu_aadhar_card_tn     = $_FILES['student_signature']['tmp_name'];
	  if(!empty($stu_aadhar_card_name)){
		  $f_new_img3 = time().$stu_aadhar_card_name;
		  $file_Pathss    = 'admin_panel/uploads/user/'.$f_new_img3; 
		  $col_val['student_signature'] = $f_new_img3; 
		  move_uploaded_file($stu_aadhar_card_tn,$file_Pathss);
	  }
        
	   $row  = $con->insert($table_name,$col_val);
	   $last_insert_id = $con->last_id($con->con);
	   
	   //fetch single course id
	   $fsc_d = fs('tbl_course',array('id'=>$s_course));
	   
	 
	   $student_id = substr($fsc_d->code."-".$last_insert_id.rand(),0,10);
	   $first_character = mb_substr($fsc_d->code, 0, 1);
	    $reg_id  ="SMTC/".$first_character."/".rand ( 10000 , 99999 ).$last_insert_id;
	   $update = $con->update($table_name,array('reg_id'=>$reg_id,'student_id_number'=>$student_id),array('id' => $last_insert_id ));
	   //fetch user details
	   $fud = fs($table_name,array('id'=>$last_insert_id));
	   include_once('user-register-mail.php');
	 
}

 
 
?>
  <?php include ('header.php');?>
	
<div class="container">
    </br>
    </br>
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">

          <div class="box box-info">
            <div class="box-header">
          <h1 class="box-title">Online Student Registration</h1>
			 
        </div>
           <hr>
            <div class="box-body">
                 <form action="" class="student_add_form" enctype="multipart/form-data" method="post">
				 
					 
					
					<div class="row">
						<div class="col-sm-12">
					<div class="form-group">
					<label for="">Select Course</label>
					  <select required name="s_course" class="form-control select2" id="s_course"> 
						  <option value="">Select Course</option>
					

			 <?php
			  $all_fetch_institue  = $con->all_fetch('tbl_course');
			  if(is_array($all_fetch_institue) || is_object($all_fetch_institue)){
				  foreach($all_fetch_institue as $afi){
				      if($afi->parent_id > 0){
				?>
				<option value="<?php e($afi->id);?>"><?php e($afi->title);?></option>
			  <?php  } } } ?> 
					   </select>
					</div>
					</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label for="">Student  Name *</label>
							   <input type="text" required name="s_name" value="<?php e(@$fs->name); ?>" placeholder="Student Name" class="form-control" />
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
							   <input type="email" required name="email" value="" placeholder="Email " class="form-control check_mail_id" />
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
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Others">Others</option>
                        
								</select>
							</div>
						</div> 
						 
					</div>
					
					<div class="row">
						<div class="col-sm-4">
							<div class="form-group">
								<label for="">DOB (DD-MM-YYYY)</label>
							   <input type="date" value="" required name="s_dob" class="form-control" />
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label for="">Marital status *</label>
							    <select class="form-control marital_status" required name="marital_status">
							  	<option value="">Select Marital status</option>
							  	<option value="Unmarried">Unmarried</option>
							  	<option value="Married">Married</option>							  	
            								  	
							  </select>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label for="">Specialization *</label>
							    <select class="form-control js-example-basic-multiple" required name="specialization[]" multiple="multiple">
							  	<option value="">Select specialization</option>
							  <?php
                			  $all_fetch_specialization  = $con->all_fetch('specialization',array('status'=>1));
                			  if(is_array($all_fetch_specialization) || is_object($all_fetch_specialization)){
                				  foreach($all_fetch_specialization as $afs){
                				?>
                				<option value="<?php echo $afs->id; ?>"><?php echo $afs->name; ?></option>
                				<?php }  } ?>						  	
							  </select>
							</div>
						</div>
					</div>
					
					<div class="row">
					
						 
						 <div class="col-sm-6">
							<div class="form-group">
								<label for="">Students Image</label>
								 
									<input type="file" accept="image/*"  name="stu_img" required />
								 
								<small style="color:#f00">upload file size 1MB JPG,PNG</small>
								
							</div>
						 </div>

						 <div class="col-sm-6">
							<div class="form-group">
								<label for="">Aadhar Card Image</label>
								 <input type="file" accept="image/*"  name="stu_aadhar_card" required />
								 
								<small style="color:#f00">upload file size 1MB JPG,PNG</small>
								
							</div>
						 </div>
						 <div class="col-sm-6">
							<div class="form-group">
								<label for="">Minimum Qualification 10<sup>th</sup> or 12<sup>th</sup> Graduation</label>
							    <input type="file" accept="image/*"  name="stu_min_qual_img" required />
								 
								<small style="color:#f00">upload file size 1MB JPG,PNG</small>
							</div>
						 </div>
						 
						 <div class="col-sm-6">
							<div class="form-group">
								<label for="">Student Signature</label>
								 <input type="file" accept="image/*"  name="student_signature" required />
								 
								<small style="color:#f00">upload file size 1MB JPG,PNG</small>
								
							</div>
						 </div>
						 
						 
					</div>
					 
					<div class="row">
					    <div class="col-sm-4">
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
						    <div class="col-sm-4">
						   <div class="form-group">
						   <label for="">Lateral Entry Status*</label>
					
                                    <select class="form-control" name="lateral_entry" required>
                                       
                                        <option value="No" >No</option>
                                         <option value="Yes"  >Yes</option>
                                    </select>
                                                      
                                                    
                                                    
						 
						   </div>
						   </div>
						   
						   
						<div class="col-sm-4">
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
						   <label for="">Work Experience</label>
						    <input type="text" name="work_experience" class="form-control" placeholder="Work Experience">
						   </div>
						   </div>
						   
						   	<div class="col-sm-4">
						   <div class="form-group">
						   <label for="">Enter Fee Amount</label>
						    <input type="text" name="received_amount" required class="form-control" placeholder="Enter Fee Amount">
						   </div>
						   </div>
						   <div class="col-sm-4">
						   <div class="form-group">
						   <label for="">Payment Mode *</label>
						  <select name="payment_mode" required="" class="form-control">
                                    <option value="">Select Payment Mode</option>
   						               <option value="1">Cash</option>
   						               <option value="2">Credit Card</option>
   						               <option value="3">Online Payment</option>
   						               <option value="4">Cheque Card</option>
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
						
						<div class="col-sm-12">
						    <label for="">Full Address *</label>
		<textarea name="b_full_address"  required placeholder="Full Address" class="form-control" cols="30" rows="02"><?php e(@$fs->address);?></textarea>
						</div>
					
					</div>
					
					
					 
					 
					 <div class="col-md-12 message-input">
							<div class="g-recaptcha"
								data-sitekey="6Ld8ksUpAAAAALsZ15LLxTaHenmdQo9m0x0-5tCM">
							</div>
						</div>
					 
						 
						
					
				<input type="submit" name="add_course_btn" value="Form Submit" class="btn btn-info btn-block" style="margin-bottom: 25px;margin-top: 25px;" />
					
				 
					
				 </form>
				 </br>
				 </br>
				 </br>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
		 
      </div>
      <!-- /.row -->
    </div>
     

</body>
     <?php include ('footer.php');?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
   	.c_green{border: 3px solid #158815;}
   	.c_red{border:3px solid #d81426}
   </style>
   <script type="text/javascript">
    
    //check mail id
   	$(document).on('keyup','.check_mail_id',function(){
       var temp_check_email_id =  $(this).val();

       if( temp_check_email_id !== ""){
	        $.ajax({
	        	url:'ajax_to_php.php',
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
	        	url:'ajax_to_php.php',
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
   </script>

   <script type="text/javascript">
	//show marital_status
	$(document).on('change','.marital_status',function(){

        if($(this).val() !==""){

         	if($(this).val() == 2){
 			$('.show_hwn').show();
 			$('.hwn').attr('required','required');
         	}else{
         		$('.show_hwn').hide();
 			$('.hwn').removeAttr('required','required');

         	}
        }

	});

	//get city by state id 
$(document).on('change','#state_id',function(){
	var get_state_id = $(this).val(); 
	$('#city_id').html('<option value="">Select City</option>');
	if(get_state_id !==""){
		$.ajax({
			url:'ajax_to_php.php',
			type:'POST',
			data:{get_state_id:get_state_id},
			success:function(r_data){  
					$('#district_id').html(r_data);
				 
			}
		});
	}
}); 


//get District by City id 
$(document).on('change','#district_id',function(){
	var get_dis_id = $(this).val(); 
	if(get_dis_id !==""){
		$.ajax({
			url:'ajax_to_php.php',
			type:'POST',
			data:{get_dis_id:get_dis_id},
			success:function(r_data){  
					$('#city_id').html(r_data);
				 
			}
		});
	}
}); 


//fetch course Category
$(document).on('change','#ins_id',function(){
	var ins_id = $(this).val(); 
	$('#s_course').html('<option value="">Select Course</option>');
	if(ins_id !==""){
		$.ajax({
			url:'ajax_to_php.php',
			type:'POST',
			data:{ins_id:ins_id},
			success:function(r_data){  
					$('#ins_cat_id').html(r_data);
				 
			}
		});
	}
}); 
 
 
//Get fetch course by course cat id
$(document).on('change','#ins_cat_id',function(){
	var ins_cat_id = $(this).val(); 
	if(ins_cat_id !==""){
		$.ajax({
			url:'ajax_to_php.php',
			type:'POST',
			data:{ins_cat_id:ins_cat_id},
			success:function(r_data){  
					$('#s_course').html(r_data);
				 
			}
		});
	}
}); 
</script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>
</html>
 
  
