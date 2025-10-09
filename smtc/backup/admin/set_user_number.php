<?php 
   include_once('include/topmenu.php'); 
   $url_id        = @$_GET['id'];
   $del_id        = @$_GET['del_id'];
   $table_name= "user_register";
   
//Reset user number
if(isset($del_id) and is_numeric($del_id) and !empty($del_id) and $del_id==1){
	$re_set_url = "set_user_number.php?id=".$url_id;
	$con->all_delete('user_course_subject',array('user_id'=>$url_id));	
	$con->update('user_register',array('p_s'=>''),array('id'=>$url_id));
	goto_c_url($re_set_url);
}
   
//FETCH user details
if(isset($url_id) and is_numeric($url_id) and !empty($url_id)){
	    $fs = fs($table_name,array('id'=>$url_id));   
	    $fcd = fs('course',array('id'=>$fs->course_id));   
		if(is_array($fs) || is_object($fs)){
			

		}else{
			goto_c_url('all-student.php');
		}
}

if(isset($set_btn_submit)){
	$count_all = $_POST['sub_name'];
	//update pass status
	$con->update('user_register',array('p_s'=>'Passed'),array('id'=>$url_id));
	$ch_set_numbers = $con->check('user_course_subject',array('user_id'=>$url_id));
	if($ch_set_numbers==1){
	     $con->all_delete('user_course_subject',array('user_id'=>$url_id));	
	}
	
	$is=0;
	foreach($count_all as $k=>$v){
		$iso        = $is++;
		$s_n        =  $_POST['sub_name'][$is-1];
		$s_min_mark =  $_POST['min_mark'][$is-1];
		$s_max_mark =  $_POST['max_mark'][$is-1];
		$s_pre_num  =  $_POST['per_num'][$is-1];
		$s_ther_num =  $_POST['ther_num'][$is-1];
		$s_sort_order =  $_POST['sort_order'][$is-1];
		$col_val = array(
			'user_id'=>$url_id,
			'subject_id'=>$s_n,
			'max_number'=>$s_max_mark,
			'min_number'=>$s_min_mark,
			'practical_number'=>$s_pre_num,
			'theory_number'=>$s_ther_num,
			'sort_order'=>$s_sort_order
			);
			$row = $con->insert('user_course_subject',$col_val);
			if($row==1){
				$s_u = "set_user_number.php?id=".$url_id;
				alert('Successful Set Numbers',$s_u); 
			}
		
	}
	 
}


include_once('set_second_year_number.php');
				  

?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header"> 
      <h1>Set Number in Subject</h1>
     
    </section>

<!------------------------------ Start First Year ------------------------------>
<!------------------------------ Start First Year ------------------------------>
<section class="content" id="ppg">

      <div class="row">
	  <form action="" method="POST">
        <div class="col-xs-12">

          <div class="box box-info">
            <div class="box-header">
          <h3 class="box-title"><i class="fa fa-shopping-cart"></i> Student Registration Id :- (<?php e($fs->reg_id);?>)</h3>
			<div class="box-tools pull-right">
               
			  <input type="submit" value="Form Submit" class="btn btn-info btn-sm"name="set_btn_submit"   />
			 
			<a href="set-marks.php" data-toggle="tooltip" title="Cancel" class="btn btn-info btn-sm" >
              <i class="fa fa-reply"></i> Back </a>
			  
			  <a href="all-student.php" data-toggle="tooltip" title="Cancel" class="btn btn-info btn-sm" >
              <i class="fa fa-reply"></i> Back User List</a>
			  
			  <a href="set_user_number.php?id=<?php e($url_id); ?>&del_id=1" data-toggle="tooltip" title="Cancel" class="btn btn-info btn-sm" >Reset number</a>
            
          </div>
        </div>
            <!-- /.box-header -->
            <div class="box-body">
            	 
			<table class="table table-bordered">
				<thead>
				    <tr>
					   <th>Sr No</th>
					   <th>Subject Name</th>
					   <th>Min</th>
					   <th>Max</th>
					   <th>Practical</th>
					   <th>Theory</th>
					   <th>Sort order</th>
				    </tr>
				    
				</thead>
			<tbody>
			      <?php
				  
				  //check allready data
				  $ch_set_numbers = $con->check('user_course_subject',array('user_id'=>$url_id));
				   if($ch_set_numbers==1){
					   $fetch_all_subjcet = $con->all_fetch('user_course_subject',array('user_id'=>$url_id));
					  if(is_array($fetch_all_subjcet) || is_object($fetch_all_subjcet)){
						   $iss=1;
						     foreach($fetch_all_subjcet as $fas){ ?>
							<tr>
								<td><?php e($iss++); ?></td>
								<td><input type="hidden" value="<?php e($fas->subject_id);?>" name="sub_name[]"><?php echo $fas->subject_id;?></td>
								<td><input type="hidden" value="<?php e($fas->min_number);?>" name="min_mark[]"><?php echo $fas->min_number;?></td>
								<td><input type="hidden" value="<?php e($fas->max_number) ;?>" name="max_mark[]"><?php echo $fas->max_number;?></td>
								<td><input type="number" value="<?php e($fas->practical_number) ;?>" required name="per_num[]"></td>
								<td><input type="number" value="<?php e($fas->theory_number) ;?>" required name="ther_num[]"></td> 
								<td><input type="number" value="<?php e($fas->sort_order) ;?>" name="sort_order[]"></td> 
							   </tr>
					<?php 		}
					  }
				  }else{
				       $main_fs = fs('course',array('id'=>$fs->course_id));
					   $pass = "WHERE id IN ($main_fs->subject)";
					   $fetch_all_subjcet = $con->get('subject',$pass);
					   if(is_array($fetch_all_subjcet) || is_object($fetch_all_subjcet)){
						    
						   $iss=1;
						   foreach($fetch_all_subjcet as $fas){ ?>
							   <tr>
								<td><?php e($iss++); ?></td>
								<td><input type="hidden" value="<?php echo $fas->name;?>" name="sub_name[]"><?php echo $fas->name;?></td>
								<td><input type="hidden" value="<?php echo $fas->min_mark;?>" name="min_mark[]"><?php echo $fas->min_mark;?></td>
								<td><input type="hidden" value="<?php echo $fas->max_mark;?>" name="max_mark[]"><?php echo $fas->max_mark;?></td>
								<td><input type="number" required name="per_num[]"></td>
								<td><input type="number" required name="ther_num[]"></td> 
								<td><input type="number" name="sort_order[]"></td> 
							   </tr>
						   <?php }
					   }
	                      		
				  }								
					  ?>
					  
			</tbody>
			
				</table>
			 
               
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
	  </form>
    </section>
<!------------------------------ End First Year ------------------------------>
<!------------------------------ End First Year ------------------------------>

<?php if($fcd->c_time==24 and $fcd->c_time_type==2){ ?>


<!------------------------------ Start Second Year ------------------------------>
<!------------------------------ Start Second Year ------------------------------>

    <section class="content" id="ppg">

      <div class="row">
	  <form action="" method="POST">
        <div class="col-xs-12">

          <div class="box box-info">
            <div class="box-header">
          <h3 class="box-title">Second Year Set Number</h3>
			<div class="box-tools pull-right">
               
			  <input type="submit"  value="Form Submit" class="btn btn-info btn-sm"name="set_second_btn_submit"   />
			  
			   
			  
			  <a href="set_user_number.php?id=<?php e($url_id); ?>&del_se_id=1" data-toggle="tooltip" title="Cancel" class="btn btn-info btn-sm">Reset number</a>

			  <a href="print-second-year-marksheet.php?id=<?php e($url_id); ?>" data-toggle="tooltip" title="Cancel" class="btn btn-info btn-sm" target="_blank">Print Second Year Marksheet</a>

            
          </div>
        </div>
            <!-- /.box-header -->
            <div class="box-body">
            	 
			<table class="table table-bordered">
				<thead>
				    <tr>
					   <th>Sr No</th>
					   <th>Subject Name</th>
					   <th>Min</th>
					   <th>Max</th>
					   <th>Practical</th>
					   <th>Theory</th>
					   <th>Sort order</th>
				    </tr>
				    
				</thead>
			<tbody>
			      <?php
				  
				  //check allready data
				  $ch_set_numbers = $con->check('user_course_subject_2',array('user_id'=>$url_id));
				   if($ch_set_numbers==1){
					   $fetch_all_subjcet = $con->all_fetch('user_course_subject_2',array('user_id'=>$url_id));
					  if(is_array($fetch_all_subjcet) || is_object($fetch_all_subjcet)){
						   $iss=1;
						     foreach($fetch_all_subjcet as $fas){ ?>
							<tr>
								<td><?php e($iss++); ?></td>
								<td><input type="hidden" value="<?php e($fas->subject_id);?>" name="sub_name[]"><?php echo $fas->subject_id;?></td>
								<td><input type="hidden" value="<?php e($fas->min_number);?>" name="min_mark[]"><?php echo $fas->min_number;?></td>
								<td><input type="hidden" value="<?php e($fas->max_number) ;?>" name="max_mark[]"><?php echo $fas->max_number;?></td>
								<td><input type="number" value="<?php e($fas->practical_number) ;?>" required name="per_num[]"></td>
								<td><input type="number" value="<?php e($fas->theory_number) ;?>" required name="ther_num[]"></td> 
								<td><input type="number" value="<?php e($fas->sort_order) ;?>" name="sort_order[]"></td> 
							   </tr>
					<?php 		}
					  }
				  }else{
				       $main_fs = fs('course',array('id'=>$fs->course_id));
					   $pass = "WHERE id IN ($main_fs->second_year_subject)";
					   $fetch_all_subjcet = $con->get('subject',$pass);
					   if(is_array($fetch_all_subjcet) || is_object($fetch_all_subjcet)){
						    
						   $iss=1;
						   foreach($fetch_all_subjcet as $fas){ ?>
							   <tr>
								<td><?php e($iss++); ?></td>
								<td><input type="hidden" value="<?php echo $fas->name;?>" name="sub_name[]"><?php echo $fas->name;?></td>
								<td><input type="hidden" value="<?php echo $fas->min_mark;?>" name="min_mark[]"><?php echo $fas->min_mark;?></td>
								<td><input type="hidden" value="<?php echo $fas->max_mark;?>" name="max_mark[]"><?php echo $fas->max_mark;?></td>
								<td><input type="number" required name="per_num[]"></td>
								<td><input type="number" required name="ther_num[]"></td> 
								<td><input type="number" name="sort_order[]"></td> 
							   </tr>
						   <?php }
					   }
	                      		
				  }								
					  ?>
					  
			</tbody>
			
				</table>
			 
               
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
	  </form>
    </section>
 
<?php } ?>
<!------------------------------ End Second Year ------------------------------>
<!------------------------------ End Second Year ------------------------------>

  </div>
  <!-- /.content-wrapper -->
   <?php include_once('include/footer.php');?>

  
