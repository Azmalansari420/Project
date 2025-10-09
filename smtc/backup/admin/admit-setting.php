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

//student upload result and marksheet certificate
if(isset($add_course_btn)){
     
     
     $col_val = array(
                'year_of_passing'=>$year_of_passing,
                'grade'=>$grade,
                'result_status'=>$result_status,
                'marksheet_status'=>$marksheet_status,
                'certificate_status'=>$certificate_status,
                'mc_status'=>$mc_status,
                );
	 
	  
	  //Result UPload
	  $f_name_one   = $_FILES['result']['name'];
	  $f_t_name_one = $_FILES['result']['tmp_name'];
	   if(!empty($f_name_one)){
		  $f_new_img1 = time().$f_name_one;
		  $file_Paths    = AUP.$f_new_img1; 
		  $col_val['result'] = $f_new_img1; 
		  move_uploaded_file($f_t_name_one,$file_Paths);
		  @unlink(AUP.$fs->result);
	  }
	  
	  
	  //Marksheet 
	  $m_name_one   = $_FILES['marksheet']['name'];
	  $m_t_name_one = $_FILES['marksheet']['tmp_name'];
	   if(!empty($m_name_one)){
		  $f_new_img1 = time().$m_name_one;
		  $file_Paths    = AUP.$f_new_img1; 
		  $col_val['marksheet'] = $f_new_img1; 
		  move_uploaded_file($m_t_name_one,$file_Paths);
		  @unlink(AUP.$fs->marksheet);
	  }
	  
	  
	  //Certificate UPload
	  $c_name_one   = $_FILES['certificate']['name'];
	  $c_t_name_one = $_FILES['certificate']['tmp_name'];
	   if(!empty($c_name_one)){
		  $f_new_img1 = time().$c_name_one;
		  $file_Paths    = AUP.$f_new_img1; 
		  $col_val['certificate'] = $f_new_img1; 
		  move_uploaded_file($c_t_name_one,$file_Paths);
		  @unlink(AUP.$fs->certificate);
	  }
	  
	  //marksheet Certificate verification UPload
	 /* $mc_name_one   = $_FILES['mc_verfication']['name'];
	  $mc_t_name_one = $_FILES['mc_verfication']['tmp_name'];
	   if(!empty($mc_name_one)){
		  $f_new_img1 = time().$mc_name_one;
		  $file_Paths    = AUP.$f_new_img1; 
		  $col_val['mc_verfication'] = $f_new_img1; 
		  move_uploaded_file($mc_t_name_one,$file_Paths);
		  @unlink(AUP.$fs->mc_verfication);
	  }
	  */
	  
	    
	     
	$update = $con->update($table_name,$col_val,array('id' =>$url_id ));
	if($update==1){
	   alert('Successful Upload','admit-setting.php?id='.$url_id);   
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
          <h3 class="box-title"><i class="fa fa-file-text-o"></i> Upload Result, Marksheet, Certificate </h3>
			 
        </div>
            <!-- /.box-header -->
            <div class="box-body">
                 <form action="" class="student_add_form" enctype="multipart/form-data" method="post">
				 
					 
					
					<div class="row">
					 <?php if(in_array(1,$user_asd)){?>
						 <div class="col-sm-3">
						     
						     <div class="form-group">
						        <label>Result Status</label>    
						        <select name="result_status" class="form-control">
						            <?php 
						            $rs_a = array('0'=>'Hide Result','1'=>'Show Result');
						            foreach($rs_a as $rk=>$rv){
						                if($rk==$fs->result_status){
						                  $ss_d = "selected";      
						                }else{
						                    $ss_d = "";
						                }?>
						                <option <?php echo $ss_d; ?> value="<?php echo $rk; ?>"><?php echo $rv; ?></option>
						            <?php }
						            ?>
						        </select>
						        </div>
						        
						        <div class="form-group">
						        <label>Grade</label>    
						        <input type="text" name="grade" value="<?php echo $fs->grade; ?>" class="form-control" placeholder="Grade">
						        </div>
						        
						        
						        <div class="form-group">
						        <label>Year OF Passing</label>    
						         <input type="text" name="year_of_passing"  value="<?php echo $fs->year_of_passing; ?>" class="form-control" placeholder="Year OF Passing">
						        </div>
						        
						        
						     
							<div class="form-group">
								<label for="">Upload Result</label>
								<input type="file"  name="result" class="form-control"/> 
							   <?php if(isset($url_id) and !empty($url_id)){
							   	if($fs->result!="" || $fs->result!=NULL){

							    ?>
			
            <iframe src="../upload/<?php e(@$fs->result); ?>" alt="" style="width:100%;height:300px;" /></iframe>
			
			<a href="deleteimage.php?remove_id=<?=$url_id ?>&image_name=<?php e(@$fs->result); ?>&table_name=user_register&column_name=result" class="btn btn-danger">Remove</a>
								<?php }}?>
									
								
								
							</div>
						 </div>
						 <?php }?>
						 
						  <?php if(in_array(2,$user_asd)){?>
						  <div class="col-sm-3">
						       <div class="form-group">
						        <label>Marksheet Status</label>    
						        <select name="marksheet_status" class="form-control">
						            <?php 
						            $rs_a = array('0'=>'Hide Result','1'=>'Show Result');
						            foreach($rs_a as $rk=>$rv){
						                if($rk==$fs->marksheet_status){
						                  $ss_d = "selected";      
						                }else{
						                    $ss_d = "";
						                }?>
						                <option <?php echo $ss_d; ?> value="<?php echo $rk; ?>"><?php echo $rv; ?></option>
						            <?php }
						            ?>
						        </select>
						        </div>
							<div class="form-group">
								<label for="">Upload Marksheet</label>
								<input type="file"    name="marksheet" class="form-control"/> 
							   <?php if(isset($url_id) and !empty($url_id)){

							   if($fs->marksheet!="" || $fs->marksheet!=NULL){ ?>
			<iframe src="../upload/<?php e(@$fs->marksheet); ?>" alt="" style="width:100%;height:300px;" /></iframe>
            <a href="deleteimage.php?remove_id=<?=$url_id ?>&image_name=<?php e(@$fs->marksheet); ?>&table_name=user_register&column_name=marksheet" class="btn btn-danger">Remove</a>		
								<?php }}?>
								
								
								
							</div>
						 </div>
						 <?php }?>
						  <?php if(in_array(3,$user_asd)){?>
						  <div class="col-sm-3">
						      <div class="form-group">
						        <label>Certificate Status</label>    
						        <select name="certificate_status" class="form-control">
						            <?php 
						            $rs_a = array('0'=>'Hide Result','1'=>'Show Result');
						            foreach($rs_a as $rk=>$rv){
						                if($rk==$fs->certificate_status){
						                  $ss_d = "selected";      
						                }else{
						                    $ss_d = "";
						                }?>
						                <option <?php echo $ss_d; ?> value="<?php echo $rk; ?>"><?php echo $rv; ?></option>
						            <?php }
						            ?>
						        </select>
						        </div>
							<div class="form-group">
								<label for="">Upload Certificate</label>
								
			<input type="file"  name="certificate" class="form-control" /> 
							   <?php if(isset($url_id) and !empty($url_id)){if($fs->certificate!="" || $fs->certificate!=NULL){ ?>
			<iframe src="../upload/<?php e(@$fs->certificate); ?>" alt="" style="width:100%;height:300px;"></iframe>
			<a href="deleteimage.php?remove_id=<?=$url_id ?>&image_name=<?php e(@$fs->certificate); ?>&table_name=user_register&column_name=certificate" class="btn btn-danger">Remove</a>		
								<?php }}?>
									
								
								
								
							</div>
						 </div>
						 <?php }?>
						 
						 <?php if(in_array(4,$user_asd)){?>
						 <div class="col-sm-3">
						     <div class="form-group">
						        <label>Marksheet Certificate Verification Status</label>    
						        <select name="mc_status" class="form-control">
						            <?php 
						            $rs_a = array('0'=>'Hide Result','1'=>'Show Result');
						            foreach($rs_a as $rk=>$rv){
						                if($rk==$fs->mc_status){
						                  $ss_d = "selected";      
						                }else{
						                    $ss_d = "";
						                }?>
						                <option <?php echo $ss_d; ?> value="<?php echo $rk; ?>"><?php echo $rv; ?></option>
						            <?php }
						            ?>
						        </select>
						        </div>
						     
							<div class="form-group"  style="display:none">
								<label for="">Upload Marksheet Certificate Verification</label>
								<input type="file"  name="mc_verfication" class="form-control"/> 
							   <?php if(isset($url_id) and !empty($url_id)){ ?>
			
            <iframe src="../upload/<?php e(@$fs->mc_verfication); ?>" alt="" style="width:100%;height:300px;" /></iframe>
			<a href="deleteimage.php?remove_id=<?=$url_id ?>&image_name=<?php e(@$fs->mc_verfication); ?>&table_name=user_register&column_name=mc_verfication" class="btn btn-danger">Remove</a>								
								<?php }?>
									
								
								
							</div>
						 </div>
						 <?php }?>
					</div>
					 
					
					
						<input type="submit" name="add_course_btn" value="Submit Form" class="btn btn-block btn-info" /> 
					
					
				 
					
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

  
 