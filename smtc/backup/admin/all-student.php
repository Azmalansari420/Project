<?php 
   include_once('include/topmenu.php');
   $page_name= "add-student.php";
   $view_page_name= "full-student.php";

?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header"> 
      <h1>All Students List <small><b> Manage View</b></small>
      </h1>
     
    </section>
<section class="content" id="ppg">
      <div class="row">
        <div class="col-xs-12">

          <div class="box box-info">
            <div class="box-header">
          <h3 class="box-title"><i class="fa fa-shopping-cart"></i> All Students</h3>
			<div class="box-tools pull-right">
				<!--   <a href="student_export_to_excel.php" class="btn btn-info btn-sm">
              <i class="fa fa-save"></i>Export To Excel</a> -->
              <?php if($user_type=="A"){?>
              <a href="add-student.php" class="btn btn-info btn-sm">
              <i class="fa fa-save"></i> Add New</a>
              <?php } ?>
			 
			  <a href="welcome.php" data-toggle="tooltip" title="Cancel" class="btn btn-info btn-sm" >
              <i class="fa fa-reply"></i> Cancel </a>
            
          </div>
        </div>
            <!-- /.box-header -->
            <div class="box-body">
			<div class="table-responsive">
              <table id="example1" class="table table-hover table-bordered table-striped">
                <thead>
               <tr>
			   <th>Sr.No.</th>      
			   <th>Admission Date</th>    
			   <th>Registration Id</th>   
			   <th>Student Id</th>   
			   <th>Course Name</th>
			   <th>Specialization</th>
			   <th>Student Details</th>     
			   <th>Payment Status</th> 
			       
			   <th>Image</th>    
			   <th>Action</th>   
			   </tr>
                </thead>
               
				<?php
					$i=1;
					 if(isset($_GET['p_s']) && !empty($_GET['p_s'])){
              $gst_list = $con->all_fetch("user_register",array('p_s'=>$_GET['p_s'] ),"order by id desc");
          }else{
					$gst_list = $con->get("user_register","order by id desc");
				}
					if (is_array($gst_list) || is_object($gst_list)){
					foreach($gst_list as $g){
						$slider_id	   = $g->id;  
						$services_img  = $g->picture;
						$status  	   = $g->status; 
						
						$fetch_course = fs('course',array('id'=>$g->course_id));
                    
						 
					
				?>
                <tr class="delete_slider<?=$slider_id;?>">
                  <td><?=$i++;?></td> 
				  <td><?=$g->join_date;?></td>
				  <td><?=$g->reg_id;?></td>
				  <td><?=$g->student_id_number;?></td>
				   
				
				  <td><?php 
				  if(is_array($fetch_course) || is_object($fetch_course)){
				      echo $fetch_course->name;
				  }else{
				      echo "invalid course id";
				  }
				  ?></td> 
				   <td><?php 
				   $string_to_array = explode('#',$g->specialization);
 if(is_array($string_to_array) || is_object($string_to_array)){
     $user_specialization = "";
     foreach($string_to_array as $sta){
         echo $user_specialization = id_to_name('specialization',$sta)." - <br/>";
     }
     
 }
				  ?></td> 
				    <td>
				    	<b>Name :</b> <?=$g->first_name;?><br/>
			            <b>Father Name :</b> <?=$g->father_name;?><br/>
			            <b>Mobile :</b> <?=$g->mobile;?><br/>
			            <b>Email :</b> <?=$g->email;?><br/>
			            <b>Password :</b> <?=$g->password;?>
			       </td> 
				 <td><?php 
				 if($g->payment_status==1){
				     echo "Paid";
				 }else{
				     echo "Pending";
				 }
				 ?>
				 <select class="order_items<?php echo $g->id; ?>">
						<option value="">Select Payment Status</option>
						<?php 
						$raf = array('1'=>'Paid','2'=>'Pending');
						foreach($raf as $k=>$v){
							if($k==$g->payment_status){?>
								<option value="<?php e($k); ?>" selected><?php e($v); ?></option>
						
						<?php	}else{ ?>
						<option value="<?php e($k); ?>"><?php e($v); ?></option>
								
							<?php } 
						}?>
						
					</select>
					<?php 
					if($user_type=="A"){?>
					
					<a href="javascript:;" class="btn btn-xs btn-info vend_btn_success" data-id="<?php echo $g->id; ?>">Update</a>
					<?php } ?>
				 </td>
				  
				  <td>
				      <img src="../upload/<?=$services_img;?>" style="width:50px;height:50px"></td>
				   
				    
				  <td>
				      <?php if($user_type=="A"){?>
				  <a href="<?php e($page_name);?>?id=<?=$slider_id ;?>" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i> Edit</a>
				  <?php } ?>
				  <a href="<?php e($view_page_name);?>?id=<?=$slider_id ;?>" class="btn btn-xs btn-info"><i class="fa fa-eye"></i> View</a><br/><br/>
				  <a href="student-barcode.php?reg_id=<?=$g->reg_id;?>" class="btn btn-xs btn-primary" target="_blank"><i class="fa fa-picture-o"></i> Generate Barcode </a><br/><br/>
				  <a href="admit-setting.php?id=<?=$slider_id ;?>" class="btn btn-xs btn-success"><i class="fa fa-file-text-o"></i> Result,Marksheet,Certificate </a><br/><br/>
				  <!--<a href="set_user_number.php?id=<?=$slider_id ;?>" class="btn btn-xs btn-danger">Set Number</a><br/><br/>-->
				  
				  <?php if($user_type=="A"){?>
			 <a href="javascript:;" class="btn btn-xs btn-danger" onclick="all_delete(<?=$slider_id;?>,'.delete_slider','delete_user_list','ajax_to_php/admin_file','<?=$services_img;?>');"><i class="fa fa-trash-o"></i> Delete</a> 
			 <?php } ?>
			 </td>
                </tr>
					<?php } }?>
                
              </table>
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
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   <?php include_once('include/footer.php');?>
   <script type="text/javascript">
   	//Approved Vendor by admin side
	$(document).on('click','.vend_btn_success',function(){
		var app_vendor_id = $(this).data('id');
		var sdf = $('.order_items'+app_vendor_id).val();
		if(sdf !==""){
			$.ajax({
				url:'ajax_to_php/admin_file.php',
				method:'POST',
				data:{app_vendor_id:app_vendor_id,vendor_action:sdf},			
				success:function(data){
					if(data==1){
						alert('Successfully Chagne Status');
						window.location.href="";
					}else{
						alert(data);
					}
				}
			});
		}
	});
   </script>

  
