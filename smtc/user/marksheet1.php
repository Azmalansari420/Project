<?php 
 
include_once("include/topmenu.php");


//check number status
$check_marksheet = $con->check('user_course_subject',array('user_id'=>$fs->id));
 
//issue date 
$c_day_type = id_to_name('course',$fs->course_id,"c_time_type");
$c_day      = id_to_name('course',$fs->course_id,"c_time");
if($c_day_type == 1){
    $dd_y = "+".$c_day." day";
}else if($c_day_type==2){
	$dd_y = "+".$c_day." Month";
}else if($c_day_type==3){
	$dd_y = "+".$c_day." Year";
}
	
	
 $re_issue_date = date ("Y-m-d", strtotime($dd_y, strtotime($fs->join_date)));
 $issue_date = date ("Y-m-d", strtotime('+ 35 day', strtotime($re_issue_date)));
 
 $arrs = explode('-',date_format(date_create("$re_issue_date"),"Y-M-d"));

?>
<style type="text/css">
	.sp{
		margin-bottom: 10px !important; 
	}
  .sp div{
  margin-bottom: 05px !important; 
  }
  
</style>
  <!-- Content Wrapper. Contains page Content -->
  <div class="content-wrapper">
   

     <section class="content" id="ppg">
      <div class="row">
        <div class="col-xs-12">

          <div class="box box-info">
            <div class="box-header">
          <h3 class="box-title">Student Marksheet</h3>
          <div class="box-tools pull-right">
            <?php if($check_marksheet==1){ ?>
              <a href="javascript:;" onclick="printDiv('print_box')" class="btn btn-info btn-sm">
              <i class="fa fa-save"></i> Print</a>
			 <?php } ?>
            
          </div>
    
        </div>
        <?php 
        if($check_marksheet==1){
            ?>

        
            <!-- /.box-header -->
            <div id="print_box" class="box-body" style="padding:25px;">
            	<div class="mark_header" style="border-bottom: 2px dotted #ccc;margin-bottom: 15px;">
            		<p style="text-align: center;"><img src="homepagelogo.png"></p>
     			<p style="text-align: center;margin:0px;">(An Autonomous Organization Redg. Under Ministry of Corporate Affairs, NCT Govt. of India, Regd. under Ministry of Labour & Employment as Skill Provider,</p>
     		    <p style="text-align: center;">NBQP Member of QCI, ISO Certified, Training Provider with MSDE, Member of Early Childhood Association, Regd. at NITI Ayog, MSME.)</p>
     		   </div>
                
                <div class="row">
                    <h2 style="text-align: center;">Result: Examination - <?php echo $arrs[1]; ?> - <?php echo $arrs[0]; ?></h2>
                </div>
 

     		   <div class="sp" style="width:60%;float: left;">
	     		    <div style="width:50%;float: left;"><b>Candidate Name</b></div>
	     		    <div style="width:50%;float: left;"><b>: <?php echo $fs->'name'; ?></b></div>
              
              <div style="width:50%;float: left;"><b>Fateher’s Name</b></div>
              <div style="width:50%;float: left;"><b>: <?php echo $fs->father_name; ?></b></div>
              
              <div style="width:50%;float: left;"><b>Registration / Enrolment No</b></div>
              <div style="width:50%;float: left;"><b>: <?php echo $fs->reg_id; ?></b></div>

              <!-- <div style="width:50%;float: left;"><b>Roll No</b></div>
              <div style="width:50%;float: left;"><b>: </b></div> -->
     		 
  
	     		   <div style="width:50%;float: left;"><b>Course</b></div>
	     		   <div style="width:50%;float: left;"><b>: <?php echo id_to_name('course',$fs->course_id); ?></b></div>

             <div style="width:50%;float: left;"><b>Training Centre</b></div>
             <div style="width:50%;float: left;"><b>: <?php echo id_to_name('branch',$fs->user_add_by_id,'b_name'); ?></b></div>

<div style="width:50%;float: left;"><b>Training Duration</b></div>
             <div style="width:50%;float: left;"><b>: <?php echo $fs->join_date; ?> To <?php echo $re_issue_date; ?>
                    <!--  <?php echo id_to_name('course',$fs->course_id,"c_time"); ?> <?php echo dmy(id_to_name('course',$fs->course_id,"c_time_type")); ?> --></b></div>

               </div>

           <div class="sp" style="width:40%;float: left;">
            <img src="../upload/<?php echo $fs->photo; ?>" style="width:125px;height:125px;float:right"/>
           </div> 
     		  
   		   
     		   
     		   
     		   <table class="table table-bordered">
     		   	<thead>
     		   		<tr>
     		   			<th>S. No.</th>
     		   			<th>Subjects</th>
     		   			<th>Maximum Marks</th>
     		   			<th>Minimum Marks</th>
     		   			<th>Marks Obtained</th>
     		   		</tr>
     		   		<?php
				  
				  //check allready data
				  $ch_set_numbers = $con->check('user_course_subject',array('user_id'=>$fs->id));
				   if($ch_set_numbers==1){
					   $fetch_all_subjcet = $con->all_fetch('user_course_subject',array('user_id'=>$fs->id),"order by sort_order asc");
					  if(is_array($fetch_all_subjcet) || is_object($fetch_all_subjcet)){
						   $iss=1;
						   $ts = 0;
						   $min_c = 0;
						   $max_c = 0;
						     foreach($fetch_all_subjcet as $fas){
								$ts = $ts+$fas->practical_number+$fas->theory_number;
								$max_c = $max_c+$fas->max_number;;
								$min_c = $min_c+$fas->min_number;
							 ?>
							 
			<tr>				    
        	<td><?php echo $iss++; ?></td>
        	<td><?php echo $fas->subject_id;?></td>
            <td><?php echo $fas->max_number;?></td>
            <td><?php echo $fas->min_number;?></td>
            <td><?php e($fas->practical_number+$fas->theory_number) ;?></td>
        </tr>
					<?php 		}
					  }
				  }else{
				    
	                  echo "<tr><td colspan='6'>Not Set Number</td></tr>";    		
				  }								
					  ?>
     		   	</thead>
     		   	<tr>				    
        	
        	<td colspan="2" style="text-align: right;"><b>Total marks</b></td>
            <td><?php e($max_c);?></td>
            <td><?php e($min_c);?></td>
            <td><?php e($ts);?></td>
            
        </tr>
     		   	
     		   </table>

     		    <div style="width:100%;margin-top: 50px;">
	     		   <div style="width:33%;float: left;">Date <b><?php e($issue_date); ?></b></div>
	     		   <div style="width:33%;float: left;">Result <b> Passed </b></div>
	     		   <div style="width:33%;float: left;">Grade <b> A</b></div>
	     		    
     		   </div>
               
            </div>
            <?php } ?>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
  </div>
  <!-- /.content-wrapper -->
  
<?php include_once('include/footer.php');?>
   <script type="text/javascript">
 //Print Invoice
  
function printDiv(divName) {
  var printContents    = document.getElementById(divName).innerHTML; 
  document.body.innerHTML = printContents;
  window.print();
}

   </script>


