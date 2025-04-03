<?php include("header.php");?>
<title>JKCS Edu India Foundation - Training Centre Verification</title>		
<meta name="keywords" content="Edu India Foundation, JKCS Edu India Foundation"/>
<meta name="description" content="Edu India Foundation: Enter your registration number for verification." />



<section class="our-services style-2">
    <div class="container"> 
        <div class="row">
		<?php 
		 
		    if(isset($_GET['branc_id'])){
		        $branch_id = $_GET['branc_id']; 
		    
		    $table_name = "branch"; 
			$regis  = $con->check($table_name,array('id'=>$branch_id,'letter_status'=>1));
			 $fs = fs($table_name,array('id'=>$branch_id));  
			 
			 $from_date      = $add_date; 
             $to_date = date ("Y", strtotime('-1 Year', strtotime($add_date)));
    
			if($regis >=1){ ?>
				<div class="col-sm-8 col-sm-offset-2"> 
			<div class="panel panel-primary">
						<div class="panel-heading">
						   Training Centre Verification 
						</div>
						<div class="panel-body">
						 <table class="table table-bordered">
			           <tr>
						<th>Center Name</th>
						<td>
						 <?php e($fs->b_name);?>
						</td>
					  </tr>
					  <tr><th>Center Code</th>
					  <td> <?php e($fs->b_code);?>
					  </td>
					  </tr>
					  <tr><th>Person Name</th>
					  <td> <?php e($fs->p_name);?>
					  </td>
					  </tr>
					  </tr>
			          <tr><th>Address *</th><td><?php e($fs->address);?></td></tr>
			          <tr><th>State *</th><td><?php echo id_to_name('state',$fs->sta_id);?></td></tr>
			          <tr><th>District *</th>
					  <td><?php echo id_to_name('district',$fs->dis_id);?></td></tr>
			          <tr><th>City *</th>					  
					  <td>
					  <?php echo id_to_name('city',$fs->city_id);?>
					  </td>
					  
					  <tr>
							<th>Image</th>
							<td><img src="upload/<?php e(@$fs->picture); ?>" alt="" style="width:100px;height:100px;" /></td>
					  </tr>
					   
			    
			          
					  <tr><th>For the Session </th><td><?php echo $to_date; ?> - <?php echo date_format(date_create("$from_date"),"y");?></td></tr>
					  <tr><th>Status </th><td>Active</td></tr>
							 
			   </table>
						</div>
						
				   </div>
			</div>
	<?php }else{ ?>
		    <h2 style="text-align:center;">Not available </h2>
		<?php } }else{
		    url('index.php');
		} ?> 
        </div>
    </div>
</section>








<?php include("footer.php");?>