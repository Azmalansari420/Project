<?php 

include_once("include/topmenu.php");


//Vender Count and live and status
$all_branch_count  = $con->all_count('branch');
$all_user_count    = $con->all_count('user_register');
$all_institute     = $con->all_count('institutes');  
  $all_student_pass         = $con->all_count('user_register',array('p_s'=>"Passed"));  

 
 

?>




  <!-- Content Wrapper. Contains page Content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
       
		 <?php  
		 if($user_type=="A")
		 {
		 
		 ?>
		 
		<div class="row">
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>
			  <?=$all_branch_count;?>
			   </h3>

              <p>All Branchs</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-pricetags"></i>
            </div>
            <a href="all-branch.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		<div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>
			  <?=$all_user_count;?>
			   </h3>

              <p>All Students</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="all-student.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

          <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>
        <?=$all_student_pass;?>
         </h3>

              <p>All Students Passed</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
           <a href="all-student.php?p_s=Passed" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		
		<div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>
			  <?=$all_institute;?>
			   </h3>

              <p>All Institute</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="add-instiute.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		
		 
		
		
		
		 
		 
		 
        <!-- ./col -->
      </div>
	  
	   <?php } ?>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
<?php include_once('include/footer.php');?>


