<?php 
   include_once('include/topmenu.php');
   $page_name     = "admit-setting.php";
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
     
	 
	  
	  //two pic
	  $f_name_one   = $_FILES['stu_min_qual_img']['name'];
	  $f_t_name_one = $_FILES['stu_min_qual_img']['tmp_name'];
	 
	  
	   if(!empty($f_name_one)){
		  $f_new_img1 = time().$f_name_one;
		  $file_Paths    = AUP.$f_new_img1; 
		  $col_val['admit_card'] = $f_new_img1; 
		  move_uploaded_file($f_t_name_one,$file_Paths);
	  }
	    
	    if(isset($url_id)){
	    	$update = $con->update($table_name,$col_val,array('id' => $select_student_id ));
			if($update==1){
			   alert('Successful Upload Admit Card','admit-setting.php?id='.$url_id);   
		    }
	    }else{
	    	$update = $con->update($table_name,$col_val,array('id' => $select_student_id ));
			if($update==1){
			   alert('Successful Upload Admit Card','admit-setting.php');   
		    }
	    }
        
}



//Update Student
include_once('update_students.php');
 
?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
	
	
<section class="content" id="ppg">
      <div class="row">
        <div class="col-xs-12">

          <div class="box box-info">
            <div class="box-header">
          <h3 class="box-title"><i class="fa fa-shopping-cart"></i> Upload Admit Card</h3>
			 
        </div>
            <!-- /.box-header -->
            <div class="box-body">
                 <form action="" class="student_add_form" enctype="multipart/form-data" method="post">
				 
					<div class="row">
						<div class="col-sm-12">
							 
							<div class="form-group">
								<label for="">Select Student *</label>
							    <select name="select_student_id" class="form-control select2">
							<option value="">Select Student *</option>
							<?php
							    $all_fetch_b = $con->get('user_register',"order by id desc");
								if(is_array($all_fetch_b) || is_object($all_fetch_b)){
								foreach($all_fetch_b as $afb){ 
								if(@$fs->user_add_by_id==$afb->id){?>
									<option selected value="<?php e($afb->id); ?>"><?php e($afb->first_name); ?> | <?php e($afb->email); ?> | <?php e($afb->mobile); ?></option>
								<?php }else{ ?>
									<option value="<?php e($afb->id); ?>"><?php e($afb->first_name); ?>  | <?php e($afb->email); ?> | <?php e($afb->mobile); ?></option>
								<?php }?>
									
								<?php } }
							?>
					   </select> 
						</div>
						</div>
					</div>
				 
					
					<div class="row">
					 
						 <div class="col-sm-4">
							<div class="form-group">
								<label for="">Upload Admit Card</label>
							   <?php if(isset($url_id) and !empty($url_id)){ ?>
			<input type="file" accept="image/*"  name="stu_min_qual_img" />
            <input type="hidden" name="old_stu_min_qual_img" value="<?php e(@$fs->admit_card); ?>"/>
			<img src="../upload/<?php e(@$fs->admit_card); ?>" alt="" style="width:100px;height:100px;" />
									
								<?php }else{?>
									<input type="file" accept="image/*"  name="stu_min_qual_img" required />
								<?php } ?>
								<small style="color:#f00">upload file size 1MB JPG,PNG</small>
							</div>
						 </div>
						 
					</div>
					 
					
					<?php if(isset($url_id)){ ?>
						<input type="submit" name="add_course_btn" value="Update Admit Card" class="btn btn-info" /> 
					<?php }else{ ?>
						<input type="submit" name="add_course_btn" value="submit Admit Card" class="btn btn-info" />
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
   </script>

  
 