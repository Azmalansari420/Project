 <?php 

 include ('header.php');


$id = $_GET['id'];
$row = $con->all_fetch('course_new',array( 'id'=>$id));

// print_r($row[0]->name);
// die;

 ?>
		<!-- Page Heading Section Start -->	
	<div class="pagehding-sec">
		<div class="images-overlay"></div>		
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="page-heading">
						<h1><?=$row[0]->name ?></h1>
					</div>
					<div class="breadcrumb-list">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="#"><?=$row[0]->name ?></a></li>
						</ul>
					</div>					
				</div>				
			</div>
		</div>
	</div>
	<!-- Page Heading Section End -->		
	<!-- About Us Section Start -->	
	<div class="about-us-sec pt-100 pb-100">
		<div class="container">
			<div class="row">	
				<div class="col-md-12">		
				<?=$row[0]->content ?>	
					<!-- <iframe id="iframepdf" src="Management-Course.pdf#toolbar=0&navpanes=0"style="width:100%;height:1000px;"></iframe> -->
				</div>
			</div>
				</div>
				
			</div>	
		</div>	
	</div>	
	<!-- About Us Section End -->	
			
	 <?php include ('footer.php');?>
