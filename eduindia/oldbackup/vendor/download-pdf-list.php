<?php 
 
include_once("include/topmenu.php");


//Vender Count and live and status
$all_product_count         = 0;
$all_categories_count      = 0;
$all_sub_categories_count  = $con->all_count('user_register',array('user_add_by_id'=>$admin_id));  
 $all_student_pass         = $con->all_count('user_register',array('user_add_by_id'=>$admin_id,'p_s'=>"Passed"));  

 
 

?>
<style>
    .my_pdf_list{
        border: 1px solid #c7c5c5;
    background: #dcdcdc;
    border-radius: 10px;
    padding: 13px 0px;
    }
</style>
  <!-- Content Wrapper. Contains page Content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Download
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Download</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
       
		 
		 
		<div class="row">
        <?php 
        $fetch_all_pdf_list = $con->all_fetch('pdf_list',array('status'=>'Yes'),"ORDER BY id desc");
        if(is_array($fetch_all_pdf_list) || is_object($fetch_all_pdf_list)){
            foreach($fetch_all_pdf_list as $faldl){?>
                <div class="col-sm-3">
		     <div class="my_pdf_list">
		     <p class="text-center"><?php echo $faldl->name; ?></p>
		     <p class="text-center"><a href="../upload/<?php echo $faldl->img; ?>" download="<?php echo $faldl->name; ?>" class="btn btn-success">Download Pdf</a></p>
		     </div>
		 </div>
            <?php }
        }
        ?>
		 
		 
      </div>
	  
	   

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
<?php include_once('include/footer.php');?>


