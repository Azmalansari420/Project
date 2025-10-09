<?php 
   include_once('include/topmenu.php');
   $page_name= "add-student.php";
   $view_page_name= "full-student.php";
// echo $admin->id;
   $total_recived_amount = $con->all_sum('fee_payment_histroy','price',array('user_id'=>$admin->id));
   
   $late_fees = 0;
   $exam_fees = 0;
   $reg_fees = 0;
   
   if(!empty($admin->late_fees))
       $late_fees = $admin->late_fees;
       
   if(!empty($admin->exam_fees))
        $exam_fees = $admin->exam_fees;
   if(!empty($admin->reg_fees))
       $reg_fees = $admin->reg_fees;
       
       $fee_amount = $admin->received_amount+$late_fees+$exam_fees+$reg_fees;
?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header"> 
      <h1>Payment History</h1>
     
    </section>
<section class="content" id="ppg">
      <div class="row">
        <div class="col-xs-12">

          <div class="box box-info">
            <div class="box-header">
          <h3 class="box-title"> Late fees : <i class="fa fa-inr"></i> <?php echo $late_fees; ?></h3><br>
          <h3 class="box-title"> Exam fees : <i class="fa fa-inr"></i> <?php echo $exam_fees; ?></h3><br>
          <h3 class="box-title"> Registration fees : <i class="fa fa-inr"></i> <?php echo $reg_fees; ?></h3><br>
          
          
          
	 <div class="box-tools pull-right">
	     <h3 class="box-title"> Course Total Fee : <i class="fa fa-inr"></i> <?php echo $fee_amount; ?></h3><br>
	      <h3 class="box-title"> Remaning Amount : <i class="fa fa-inr"></i> <?php echo ($fee_amount-$total_recived_amount); ?></h3>
	      
	     </div>
        </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-hover table-bordered table-striped">
                <thead>
                   <tr>
        			   <th>Sr.No.</th>      
        			   <th>Date Time</th>    
        			   <th>Amount</th>    
        			   <th>Payment Mode</th>
    			   
    			   </tr>
                </thead>
                <tbody>
				<?php
					$i=1;
      
					$gst_list = $con->all_fetch("fee_payment_histroy",array('user_id'=>$admin_id),"order by id desc");
       
					if (is_array($gst_list) || is_object($gst_list)){
					foreach($gst_list as $g){
						
				?>
                <tr class="delete_slider<?=$slider_id;?>">
                  <td><?=$i++;?></td> 
                  <td><?php echo date_format(date_create("$g->add_date_time"),"d M Y"); ?></td>  
                  
                  <td><?php echo $g->price; ?></td> 
                  <td><?php echo $g->payment_mode; ?></td> 
				  
                </tr>
					<?php } }?>
                </tfoot>
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

  
