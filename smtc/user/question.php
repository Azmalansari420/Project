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
             <?php if($fs->question_status == '1'){ ?> 
            
             <?php 
                    $show_multipal_img = $con->all_fetch('tbl_media',array('course_id'=>$admin->course_id,'type'=>'R','status'=>'1'));
					if(is_array($show_multipal_img) || is_object($show_multipal_img)){
                       foreach($show_multipal_img as $smi){
                           
                          $path_info = pathinfo($smi->file);

                           $path_info['extension'];
                          
					?>
					<div class="col-sm-12 appic delet_edit_pro_pic<?=$smi->id;?>">
					   <?php if($path_info['extension'] == 'pdf'){  ?>
    					<iframe src="../admin_panel/uploads/user/<?php e(@$smi->file); ?>" style="width:100%;height:500px;"/></iframe>
    					<?php }else{  ?>
    					
    					<?php e(@$smi->title); ?>
    					<?php e(@$smi->file); ?>
    					<?php } ?>
    					
					
					<h2><a href="../admin_panel/uploads/user/<?php e(@$smi->file); ?>" target="_blank" class="btn btn-success">View Full</a>
					<a href="../admin_panel/uploads/user/<?php e(@$smi->file); ?>" target="_blank" download="<?php e(@$smi->file); ?>" class="btn btn-info">Download</a>
					</h2>
					</div>
					<?php }  }	?> 
					
					
            
                  
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


