<?php 
   include_once('include/topmenu.php');
   $page_name = "add-course.php";
   $show_all_list = "all-enquiry.php";
   $url_id  = @$_GET['id'];
   $table_name  = "franchisee_enquiry";
   
//FETCH
   if(isset($url_id) and is_numeric($url_id) and !empty($url_id)){
	    $fs = fs($table_name,array('id'=>$url_id));   
		if(is_array($fs) || is_object($fs)){
			
		}else{
			goto_c_url($page_name);
		}
   }


?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header"> 
      <h1>View Enquiry<small>
	  <a href="<?php e($show_all_list ); ?>" class="btn btn-primary">View Enquiry </a>
	  
	  </small>
      </h1>
     
    </section>
	
	
<section class="content" id="ppg">
      <div class="row">
        <div class="col-xs-12">

          <div class="box box-info">
            <div class="box-header">
          <h3 class="box-title"><i class="fa fa-shopping-cart"></i> Add Institutes Course Category</h3>
			 
        </div>
            <!-- /.box-header -->
            <div class="box-body">
                 <form action="" method="post">
				<div class="row">
				<div class="col-sm-3">
					<div class="form-group">
					<label for="">Name</label>
					 <p><?php e(@$fs->name); ?></p>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="form-group">
					<label for="">Email</label>
					  <p><?php e(@$fs->email); ?></p>
					</div>
					</div>
					
					 <div class="col-sm-3">
					<div class="form-group">
					<label for="">Number</label>
					  <p><?php e(@$fs->mobile); ?></p>
					</div>
					</div>
					 <div class="col-sm-3">
					<div class="form-group">
					<label for="">Date Of Birth</label>
					  <p><?php e(@$fs->dob); ?></p>
					</div>
					</div>
					 <div class="col-sm-3">
					<div class="form-group">
					<label for="">Branch Name</label>
					  <p><?php e(@$fs->branch_name); ?></p>
					</div>
					</div>
					 <div class="col-sm-3">
					<div class="form-group">
					<label for="">Facilities at Training Centre </label>
					  <p><?php e(@$fs->facilities); ?></p>
					</div>
					</div>
					 <div class="col-sm-3">
					<div class="form-group">
					<label for="">Address </label>
					  <p><?php e(@$fs->address); ?></p>
					</div>
					</div>
					 <div class="col-sm-3">
					<div class="form-group">
					<label for="">State</label>
					  <p><?php e(@$fs->state); ?></p>
					</div>
					</div>
					 <div class="col-sm-3">
					<div class="form-group">
					<label for="">City</label>
					  <p><?php e(@$fs->city); ?></p>
					</div>
					</div> 
					<div class="col-sm-3">
					<div class="form-group">
					<label for="">District </label>
					  <p><?php e(@$fs->dis); ?></p>
					</div>
					</div>
					

					</div>
					<div class="row">
						<h3>Attachments</h3>
						<div class="col-sm-3">
					<div class="form-group">
					<label for="">Id Card </label><br>
					 <a href="<?php e(@AUP.$fs->id_proof); ?>" download="">Download</a>
					</div>
					</div>
					<div class="col-sm-3">
					<div class="form-group">
					<label for="">Franchises Form </label><br>
					 <a href="<?php e(@AUP.$fs->franchises_form); ?>" download="">Download</a>
					</div>
					</div>
					</div>
					
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
		 
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   <?php include_once('include/footer.php');?>

  
