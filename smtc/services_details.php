<?php 

include ('header.php');

if(isset($_GET['c_id']) and !empty($_GET['c_id'])){
  $id = $_GET['c_id'];
  $fetch_course = $con->all_fetch("course",array('status' => "Yes",'ins_id'=>$id ),"order by sort_id ASC");
  $cate = fs("institutes",array('status' => "Yes",'id'=>$id ));
}else if(isset($_GET['s_id']) and !empty($_GET['s_id'])){
   $id = $_GET['s_id'];
  $fetch_course = $con->all_fetch("course",array('status'=>"Yes",'ins_cat_id'=>$id ),"order by sort_id ASC");
  $cate = fs("institutes_courses",array('status' => "Yes",'id'=>$id ));
}



?>
<!-- Page Heading Section Start -->	
	<div class="pagehding-sec"style="margin-bottom:30px;">
		<div class="images-overlay"></div>		
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="page-heading">
						<h1><?php echo $cate->name; ?></h1>
					</div>
					<div class="breadcrumb-list">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="#"><?php echo $cate->name; ?></a></li>
						</ul>
					</div>					
				</div>				
			</div>
		</div>
	</div>
	<!-- Page Heading Section End -->		
<div class="container">
	<?php
	if(is_array($fetch_course) || is_object($fetch_course)){
		foreach ($fetch_course as $f_c) {
	
	?>
	<div class="row">
       <h4  class="text-center"><?php echo $f_c->name; ?> </h4>           
		   <?php echo html_entity_decode($f_c->description); ?> 
   
</div>
<?php
		
		}
	}


?>
</div>
    
    <?php include ('footer.php');?>