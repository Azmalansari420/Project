<?php 
 
include_once("include/topmenu.php");

 
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
 
 

?>
<style type="text/css">
	.sp{
		margin-bottom: 10px;
	}
</style>
  <!-- Content Wrapper. Contains page Content -->
  <div class="content-wrapper">
   

     <section class="content" id="ppg">
      <div class="row">
        <div class="col-xs-12">

          <div class="box box-info">
            <div class="box-header">
          <h3 class="box-title">Admit Card</h3>
          <div class="box-tools pull-right">
              <a href="javascript:;" class="btn btn-info btn-sm">
              <i class="fa fa-save"></i> Print</a>
			 
            
          </div>
    
        </div>
            <!-- /.box-header -->
            <div class="box-body" style="padding:25px;">
             
     		    <?php if(!empty($fs->admit_card)){ ?>
              <iframe src="../upload/<?php echo $fs->admit_card; ?>"></iframe>  <br>
              <a href="../upload/<?php echo $fs->admit_card; ?>" download="<?php echo rand();?>" class="btn btn-info">Download Admin Card</a>
            <?php } ?>
     		   
     		    
               
            </div>
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


