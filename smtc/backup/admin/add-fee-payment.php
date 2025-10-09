<?php 
   include_once('include/topmenu.php');
   $page_name = "add-fee-payment.php";
   $table_name = "fee_payment_histroy";
   $url_id  = @$_GET['id'];
//fetch
   if(isset($url_id) and is_numeric($url_id) and !empty($url_id)){
	    $fs = fs($table_name,array('id'=>$url_id));   
		if(is_array($fs) || is_object($fs)){
			
		}else{
			goto_c_url($page_name);
		}
   }

//Create Update   
   if(isset($add_course_btn) || isset($update_course_btn)){
       
	   $col_val = array(
	             'user_id'=>$user_id,
	             'price'=>$price,
	             'add_date_time'=>$add_date_time,
	             'payment_mode'=>$payment_mode, 
	             'remark'=>$remark, 
	             );
	   
	  
	   if(isset($url_id) and !empty($url_id)){
	   	// echo "string";
	   	// die;
	       $row     = $con->update('fee_payment_histroy',$col_val,array('id'=>$url_id));
    	   if($row==1){
    		   alert('Successful Add specialization',$page_name."?id=".$url_id);   
    	   }
	   }else{
	        $row     = $con->insert('fee_payment_histroy',$col_val);
    	   if($row==1){
    		   alert('Successful Fee Add',$page_name);   
    	   }    
	       
	   }
	   
   }
 
?>
<style>
	.amt-section1 {
    font-weight: 700;
    font-size: 20px;
    margin: 8px 0 0 0;
}
.amt-section1 span {
    font-weight: 500;
    font-size: 18px;
}
</style>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header"> 
      <h1>All Fee Payment History <small><b> Manage View </b> <a href="<?php e($page_name); ?>" class="btn btn-xs btn-primary">Add New</a></small>
      </h1>
     
    </section>
	
	
<section class="content" id="ppg">
      <div class="row">
        <div class="col-xs-4">

          <div class="box box-info">
            <div class="box-header">
          <h3 class="box-title"><i class="fa fa-shopping-cart"></i> Add Fee Payment</h3>
			 
        </div>
            <!-- /.box-header -->
            <div class="box-body">
                 <form action="" enctype="multipart/form-data" method="post">
                     
                     <div class="form-group">
                         <label>Select Student</label>
					   <select name="user_id" class="form-control select2">
					       <option value="">Select Student</option>
					       <?php 
					       
					       	$student_list = $con->get("user_register","order by first_name asc");
					       	if(is_array($student_list) || is_object($student_list)){
					       	    foreach($student_list as $sl){

					       	    	$selected = "";
					       	    	if(isset($_GET['id']))
					       	    	{
						       	    	if($fs->user_id==$sl->id)
						       	    		$selected = "selected";
						       	    	else
						       	    		$selected = "";
						       	    }
					       	    	?>
					       	        <option value="<?php echo $sl->id; ?>" <?=$selected ?>><?php echo $sl->first_name; ?> | <?php echo $sl->email; ?> | <?php echo $sl->mobile; ?></option>
					       	    <?php }
					       	    
					       	}
					       	
					       ?>
					   </select>
					</div>
                     
                     <div class="form-group">
                         <label>Fee Create Date</label>
					   <input type="date" required name="add_date_time" value="<?php e(@$fs->add_date_time); ?>"  class="form-control" placeholder="Institutes Name" />
					</div>
					
					<div class="form-group">
					    <label>Fee Amount</label>
					   <input type="text" required name="price" value="<?php e(@$fs->price); ?>"  class="form-control" placeholder="Fee Amount" />
					</div>
					<div class="form-group">
                         <label>Payment Mode</label>
					   <input type="text" required name="payment_mode" value="<?php e(@$fs->payment_mode); ?>"  class="form-control" placeholder="Payment Mode" />
					</div>
						<div class="form-group">
                         <label>Remark</label>
					   <input type="text" name="remark" value="<?php e(@$fs->remark); ?>"  class="form-control" placeholder="Remark" />
					</div>
			 
					<?php if(isset($url_id)){ ?>
						<input type="submit" name="update_course_btn" value="Update Specialization" class="btn btn-info" />
						 
					<?php }else{ ?>
						<input type="submit" name="add_course_btn" value="Add Specialization" class="btn btn-info" />
					<?php } ?>
					
				 </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
		
		
		
		<div class="col-xs-8">

          <div class="box box-info">
            <div class="box-header">
          <h3 class="box-title"><i class="fa fa-shopping-cart"></i> Fee Payment History List</h3>

          <?php
            $all_amt = 0;
            $pending_amt = 0;
            $r_amt = 0;
			$gst_list = $con->get($table_name,"order by id desc");
			if (is_array($gst_list) || is_object($gst_list)){
			foreach($gst_list as $g){
				$r_amt +=$g->price;
			}}


			$gst_list = $con->get("user_register","order by id desc");
			if (is_array($gst_list) || is_object($gst_list)){
			foreach($gst_list as $g){
				$all_amt +=$g->received_amount;
			}}

			$pending_amt = $all_amt - $r_amt;
			 	
			?>



			<h2 class="amt-section1">Total Amount: <span class="amt-section"><?=$all_amt ?></span></h2>
			<h2 class="amt-section1">Total Recieve Amount: <span class="amt-section"><?=$r_amt ?></span></h2>
			<h2 class="amt-section1">Total Pending Amount: <span class="amt-section"><?=$pending_amt ?></span></h2>
        </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-hover table-bordered table-striped">
                <thead>
               <tr>
			   <th>Sr.No.</th>      
			   <th>Student Details</th>  
			   <th>Payment Date</th>  
			   <th>Amount</th>
			   <th>Payment Mode</th>
			   <th>Remark</th>
			   <th>Action</th>
			   </tr>
                </thead> 
				<?php
					$i=1;
					$gst_list = $con->get($table_name,"order by id desc");
					if (is_array($gst_list) || is_object($gst_list)){
					foreach($gst_list as $g){
						$q_id	     = $g->id; 
						$fsud = fs('user_register',array('id'=>$g->user_id));
				 	
				?>
                <tr class="delete_cat<?=$q_id;?>">
                  <td><?=$i++;?></td> 
				  <td><?=$fsud->first_name;?> / <?=$fsud->mobile; ?></td>  
				  <td><?=$g->add_date_time;?></td>
				  <td><?=$g->price;?></td>
				  <td><?=$g->payment_mode;?></td>
				  <td><?=$g->remark;?></td>
				  <td><a class="btn btn-default" href="add-fee-payment.php?id=<?=$g->id;?>">Edit</a></td>
				  
                </tr>
					<?php } } ?>
            
              </table>
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

  
