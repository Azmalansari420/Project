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
          <h3 class="box-title">Question Paper</h3>
   
    
        </div>
        <div class="box-body">
            
                  
            <?php 
                            $show_multipal_img = $con->all_fetch('all_media',array('in_used_media_id'=>$admin->course_id,'type'=>'R'));
								if(is_array($show_multipal_img) || is_object($show_multipal_img)){
                                   foreach($show_multipal_img as $smi){
								?>
								<div class="col-sm-12 appic delet_edit_pro_pic<?=$smi->id;?>">
								<iframe src="../upload/<?php e(@$smi->media_name); ?>" style="width:100%;height:500px;"/></iframe>
								
								</div>
								<?php }  }	?> 
            
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


