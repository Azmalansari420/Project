
<?php 
  include_once('lib/all_files.php');
  
  
   $page_name     = "add-student.php";
   $show_all_list = "all-student.php";
   $table_name    = "user_register";
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
	   $f_c_d      = fs('course',array('id'=>$s_course));
       $ins_id     = $f_c_d->ins_id;
       $ins_cat_id = $f_c_d->ins_cat_id;

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
			'user_add_by_id'=>10000,  
			'dob'=>$s_dob,
			'institute_id'=>$ins_id,
			'institute_course_id'=>$ins_cat_id,
			'course_id'=>$s_course,
			'add_by'=>'Branch',
			'marital_status'=>$marital_status,
			'husband_wife_name'=>$hwn,
			'password'=>rand(),
			'order_id'=>$all_order_id,
			'detail_show'=>1
			);
			
			 
	  //student pic
	  $f_name   = $_FILES['stu_img']['name'];
	  $f_t_name = $_FILES['stu_img']['tmp_name'];
	  if(!empty($f_name)){
		  $f_new_img = time().$f_name;
		  $file_Path    = 'upload/'.$f_new_img; 
		  $col_val['picture'] = $f_new_img; 
		  move_uploaded_file($f_t_name,$file_Path);
	  }


	   //student qualification
	  $f_name_one   = $_FILES['stu_min_qual_img']['name'];
	  $f_t_name_one = $_FILES['stu_min_qual_img']['tmp_name'];
	   if(!empty($f_name_one)){
		  $f_new_img1 = time().$f_name_one;
		  $file_Paths    = 'upload/'.$f_new_img1; 
		  $col_val['cover'] = $f_new_img1; 
		  move_uploaded_file($f_t_name_one,$file_Paths);
	  }

      //student Aadhar Card Image
	  $stu_aadhar_card_name   = $_FILES['stu_aadhar_card']['name'];
	  $stu_aadhar_card_tn     = $_FILES['stu_aadhar_card']['tmp_name'];
	  if(!empty($stu_aadhar_card_name)){
		  $f_new_img3 = time().$stu_aadhar_card_name;
		  $file_Pathss    = 'upload/'.$f_new_img3; 
		  $col_val['adhar_pic'] = $f_new_img3; 
		  move_uploaded_file($stu_aadhar_card_tn,$file_Pathss);
	  }

	   $row  = $con->insert($table_name,$col_val);
	   $last_insert_id = $con->last_id($con->con);
	   $reg_id  = "EI".$arr[0].$arr[1].$last_insert_id;
	   $update = $con->update($table_name,array('reg_id'=>$reg_id),array('id' => $last_insert_id ));

	   url('student-payment.php?id='.$last_insert_id);
	 
}

 
 
?>
  <!DOCTYPE html>
<html>
<head>
	<title>Edu India Foundation - 08950071777</title>
	 <!-- Bootstrap -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
  
	
	
<div class="container">
      <div class="row">
        <div class="col-xs-12">

          <div class="box box-info">
            <div class="box-header">
          <h3 class="box-title"><i class="fa fa-shopping-cart"></i> Student Register</h3>
			 
        </div>
            <!-- /.box-header -->
            <div class="box-body">
                 <form action="" class="student_add_form" enctype="multipart/form-data" method="post">
				 
					<!-- <div class="row">
						<div class="col-sm-12">
							 
							<div class="form-group">
								<label for="">Referal Branch *</label>
							    <select name="referal_branch" class="form-control select2">
							<option value="">Referal Branch *</option>
							<?php
							    $all_fetch_b = $con->get('branch',"order by id desc");
								if(is_array($all_fetch_b) || is_object($all_fetch_b)){
								foreach($all_fetch_b as $afb){ 
								if(@$fs->user_add_by_id==$afb->id){?>
									<option selected value="<?php e($afb->id); ?>"><?php e($afb->b_name); ?> | <?php e($afb->b_code); ?></option>
								<?php }else{ ?>
									<option value="<?php e($afb->id); ?>"><?php e($afb->b_name); ?>  | <?php e($afb->b_code); ?></option>
								<?php }?>
									
								<?php } }
							?>
					   </select> 
						</div>
						</div>
					</div> -->
					
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
								<label for="">DOB (M-D-Y)</label>
							   <input type="date" value="<?php e(@$fs->dob)?>" required name="s_dob" class="form-control" />
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label for="">Marital status *</label>
							  <select class="form-control marital_status" required name="marital_status">
							  	<option value="">Select Marital status</option>
							  	<option value="1">Single</option>
							  	<option value="2">Married</option>							  	
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
					
						 
						 <div class="col-sm-4">
							<div class="form-group">
								<label for="">Students Image</label>
								 
									<input type="file" accept="image/*"  name="stu_img" required />
								 
								<small style="color:#f00">upload file size 1MB JPG,PNG</small>
								
							</div>
						 </div>

						 <div class="col-sm-4">
							<div class="form-group">
								<label for="">Aadhar Card Image</label>
								 <input type="file" accept="image/*"  name="stu_aadhar_card" required />
								 
								<small style="color:#f00">upload file size 1MB JPG,PNG</small>
								
							</div>
						 </div>
						 <div class="col-sm-4">
							<div class="form-group">
								<label for="">Minimum Qualification 10<sup>th</sup> or 12<sup>th</sup></label>
							    <input type="file" accept="image/*"  name="stu_min_qual_img" required />
								 
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
		<textarea name="b_full_address"  required placeholder="Full Address" class="form-control" cols="30" rows="02"><?php e(@$fs->address);?></textarea>
						</div>
					
					</div>
					
					
					<div class="row">
						<div class="col-sm-12">
							<h2 style="padding-bottom:5px;border-bottom:2px  solid #333;">Select Course</h2>
						</div>
					<!-- 	<div class="col-sm-4">
					<div class="form-group">
					<label for="">Select Institute *</label>
					   <select required name="ins_id" class="form-control select2" id="ins_id"> 
						  <option value="">Select Institute</option>
						<?php
						  $all_fetch_institue  = $con->get('institutes');
						  if(is_array($all_fetch_institue) || is_object($all_fetch_institue)){
							  foreach($all_fetch_institue as $afi){
							if(@$fs->institute_id==$afi->id){ ?>
							<option selected value="<?php e($afi->id);?>"><?php e($afi->name);?></option>
						<?php }else{ ?>
							<option value="<?php e($afi->id);?>"><?php e($afi->name);?></option>
						  <?php  } } } ?>
					   </select>
					</div>
					</div> -->
					
					<!--  <div class="col-sm-4">
					<div class="form-group">
					<label for="">Institutes Course Category</label>
					  <select required name="ins_cat_id" class="form-control select2" id="ins_cat_id"> 
						  <option value="">Select Course Category</option>
						<?php
						  $all_fetch_institue  = $con->get('institutes_courses',array('status'=>'Yes','ins_id'=>@$fs->institute_id));
						  if(is_array($all_fetch_institue) || is_object($all_fetch_institue)){
							  foreach($all_fetch_institue as $afi){
							if(@$fs->institute_course_id==$afi->id){ ?>
							<option selected value="<?php e($afi->id);?>"><?php e($afi->name);?></option>
						<?php }else{ ?>
							<option value="<?php e($afi->id);?>"><?php e($afi->name);?></option>
						  <?php  } } } ?>
					   </select>
					</div>
					</div> -->
					
					<div class="col-sm-4">
					<div class="form-group">
					<label for="">Select Course</label>
					  <select required name="s_course" class="form-control select2" id="s_course"> 
						  <option value="">Select Course</option>
			<?php
			  $all_fetch_institue  = $con->all_fetch('course',array('status'=>'Yes','fstatus'=>'Yes'));
			  if(is_array($all_fetch_institue) || is_object($all_fetch_institue)){
				  foreach($all_fetch_institue as $afi){
				?>
				<option value="<?php e($afi->id);?>"><?php e($afi->name);?></option>
			  <?php  } } ?>
					   </select>
					</div>
					</div>
					  				
					</div>
					 
					 
					 
						 
						
					
				<input type="submit" name="add_course_btn" value="Form Submit" class="btn btn-info" />
					
				 
					
				 </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
		 
      </div>
      <!-- /.row -->
    </div>
     

</body>
    
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
</html>
 
  
