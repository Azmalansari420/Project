<?php 
 
include_once("include/topmenu.php");


 
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
          <h3 class="box-title">Student Result</h3>
   
    
        </div>
        <div class="box-body">
            <?php 
            if($fs->result_status==1){?>
            <iframe src="../upload/<?php e(@$fs->result); ?>"  style="width:100%;height:450px;" /></iframe>
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
   <script type="text/javascript">
 //Print Invoice
  
function printDiv(divName) {
  var printContents    = document.getElementById(divName).innerHTML; 
  document.body.innerHTML = printContents;
  window.print();
}

   </script>


