<?php 
include("header.php");
    $get_url    = @$_GET['id'];
	$table_name = "institutes";
	$c_page = "about-course.php";
	if(isset($get_url) and !empty($get_url) and is_numeric($get_url)==1){
		$fs = fs($table_name,array('id'=>$get_url));   
		if(is_array($fs) || is_object($fs)){
			
		}else{
			goto_c_url('Our-Institutes.php');
		}
	}else{
		goto_c_url('Our-Institutes.php');
	}
?>


<div class="inner has-base-color-overlay text-center" style="background: url(upload/<?php e($fs->img);?>);">
    <div class="container">
        <div class="box">
		<?php if($fs->img==""){?>
			<h3><?php e($fs->name); ?></h3>
		<?php }else{ } ?>
            
        </div><!-- /.box -->
    </div><!-- /.container -->
</div>



<div class="container" style="margin-top:10%;">


  <ul class="nav nav-pills nav-justified nav-tabs">
  
  	<?php
		$all_fetch_inst_course = $con->all_fetch('institutes_courses',array('ins_id'=>$fs->id,'status'=>'Yes'),"order by id desc");
		if(is_array($all_fetch_inst_course) || is_object($all_fetch_inst_course)){
			$iss=0;
		foreach($all_fetch_inst_course as $df){
			$iss++;
			if($iss==1) { ?>
	       <li class="active"><a data-toggle="tab" href="#home<?php e($iss); ?>"><?php e($df->name); ?></a> </li>						
						<?php } else{?>
		   <li><a data-toggle="tab" href="#home<?php e($iss); ?>"><?php e($df->name); ?></a> </li>			
		 <?php } }  } ?>
     
  </ul>

  <div class="tab-content">
  <?php
		$all_fetch_inst_course_1 = $con->all_fetch('institutes_courses',array('ins_id'=>$fs->id,'status'=>'Yes'),"order by id desc");
		if(is_array($all_fetch_inst_course_1) || is_object($all_fetch_inst_course_1)){
			$iss=0;
		foreach($all_fetch_inst_course_1 as $dfs){
			$iss++;
			if($iss==1) {
               echo "<div id='home$iss' class='tab-pane fade in active'>";
		    }else{
			   echo "<div id='home$iss' class='tab-pane fade in'>";
		     }
			 ?>
      
          <h4><?php e($dfs->name); ?></h4>
         <?php e(html_entity_decode($dfs->description)); ?>
          <?php 
		     $count_course = $con->all_count('course',array('ins_cat_id'=>$dfs->id));
		  ?>
          
            <h4>All Courses List (<?php e(@$count_course);?>)</h4>
          
		  <?php if($count_course >=1){ ?>
		  
          <table class="table table-bordered">
            <tr>
              <td class="text-center font-16 font-weight-600 bg-theme-color-2 text-white" colspan="4">Courses Criteria</td>
            </tr>
            <tr>
              <th>Sr. no.</th>
              <th>Course Name</th>
              <th>Duration</th>
            </tr>
            <tbody>
			<?php 
			
			$all_fetch_courses = $con->all_fetch('course',array('ins_cat_id'=>$dfs->id));
			if(is_array($all_fetch_courses) || is_object($all_fetch_courses)){
				$isd = 0;
				foreach($all_fetch_courses as $afc){
					$isd++;
					?>
					
			
              <tr>
                <th scope="row"><?php e($isd); ?></th>
                <td><?php e($afc->name); ?></td>
                <td>
				<?php e($afc->c_time); ?> 
				<?php 
				foreach($arr_d_t as $ks=>$vs){
					if($afc->c_time_type==$ks){
						echo $vs;
					}
					
				}?> 
				</td>
              </tr>	<?php }
			}
			
			?>
               
               
            </tbody>
          </table>
		  <?php } ?>
        
    </div>
  
		<?php  }  } ?>
     
  </div>
</div>











<?php include("footer.php");?>