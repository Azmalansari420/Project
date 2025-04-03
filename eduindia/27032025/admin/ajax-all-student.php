<?php  
session_start();
$session_admin  =  @$_SESSION['session_admin'];
include_once("../lib/all_files.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$page_name= "add-student.php";
   $view_page_name= "full-student.php";
?>

<table id="example12" class="table table-hover table-bordered table-striped">
                <thead>
               <tr>
			   <th>Sr.No.</th>      
			   <th>Admission Date</th>  
			   <th>Registration Id</th>    
			   <th>Branch Name</th> 
			   <th>Course Name</th>    
			   <th>Student Details</th>   
			   <th>Course Duration</th>    
			   <th>Image</th>    
			   <th>Action</th>  
			   <th>Delete</th> 
			   </tr>
                </thead>
               
				<?php
					ini_set("memory_limit","1000M");
					$i=1;

					$limit = 50;
					$page = 1;
					$page1 = 1;
					$offset = 0;
					$p_s = '';
					$keys = '';

					$post_data = [];
					if(isset($_POST['post_data']))
					$post_data = $_POST['post_data'];
					if(!empty($post_data))
					{
						$post_data = json_decode($post_data);
						
						if(!empty($post_data->page))
							$page = $post_data->page;

						if(!empty($post_data->filter_search_value))
							$filter_search_value = $post_data->filter_search_value;

						if(!empty($post_data->keys))
							$keys = $post_data->keys;

						if(!empty($post_data->table_id))
							$table_id = $post_data->table_id;

						if(!empty($post_data->p_s))
							$p_s = $post_data->p_s;
					}
					$page = $page1 = $page;
					if ($page==1|| $page==0)
					{
						$offset = 0;
					}
					else
					{
						--$page;
						$offset = $limit * $page;
					}
				
					
					$i = $offset;
					if($i==0)
					{
						$i=1;
					}
					else
					{
						$i = $i+1;
					}

					if(!empty($filter_search_value))
					{
						$where_query = '';
						if(!empty($p_s)) $where_query = "p_s='$p_s' and ";
            $gst_list = $con->get_custom("SELECT user_register.*,
						branch.b_name,
						course.name
						FROM user_register
						LEFT JOIN branch ON branch.id=user_register.user_add_by_id 
						LEFT JOIN course ON course.id=user_register.course_id 
						where concat($keys) like '%$filter_search_value%'
						order by user_register.id desc limit $limit offset $offset");

        		$count = $con->get_custom("SELECT user_register.id
						FROM user_register
						LEFT JOIN branch ON branch.id=user_register.user_add_by_id 
						LEFT JOIN course ON course.id=user_register.course_id 
						where $where_query concat($keys) like '%$filter_search_value%'
						order by user_register.id desc ");
						if(!empty($count)) $count = count($count);else $count = 0;        		
					}
				  else if(!empty($p_s))
				  {
          	$count = $con->all_count("user_register",array('p_s'=>$p_s ));
          	$gst_list = $con->get_custom("SELECT user_register.*,
						branch.b_name,
						course.name
						FROM user_register 
						LEFT JOIN branch ON branch.id=user_register.user_add_by_id 
						LEFT JOIN course ON course.id=user_register.course_id 
						where p_s='$p_s'
						order by user_register.id desc limit $limit offset $offset");
        	}
        	else
        	{
        		$count = $con->all_count("user_register",[]);
						$gst_list = $con->get_custom("SELECT user_register.*,
						branch.b_name,
						course.name
						FROM user_register
						LEFT JOIN branch ON branch.id=user_register.user_add_by_id 
						LEFT JOIN course ON course.id=user_register.course_id 
						order by user_register.id desc limit $limit offset $offset");
					}


					$extra_data['table_id'] = 1;
					$extra_data['url'] = 'all-student.php';
					
					$pagenation_data = pagination_custom($count,$limit,$page1,$extra_data);


					if (is_array($gst_list) || is_object($gst_list)){
					foreach($gst_list as $g){
						$slider_id	   = $g->id;  
						$services_img  = $g->picture;
						$status  	   = $g->status; 
						
				?>
                <tr class="delete_slider<?=$slider_id;?>">
                  <td><?=$i++;?></td> 
                  
                  
				  <td><?=$g->join_date;?></td>
				  
				  <td><?=$g->reg_id;?></td>
				  <td><?php echo id_to_name('branch',$g->user_add_by_id,'b_name');; ?></td>
				
				  <td><?php echo id_to_name('course',$g->course_id); ?></td> 
				    <td>
				    	<b>Name :</b> <?=$g->first_name;?><br/>
			            <b>Father Name :</b> <?=$g->father_name;?><br/>
			            <b>Mobile :</b> <?=$g->mobile;?><br/>
			            <b>Email :</b> <?=$g->email;?><br/>
			            <b>Password :</b> <?=$g->password;?>
			       </td> 
				   <td><?php 
					  echo id_to_name('institutes_courses',$g->institute_course_id);
					  ?>
					  </td>
				  <td><img src="../upload/<?=$services_img;?>" style="width:50px;height:50px"></td>
				   
				    
				  <td>
				  <a href="<?php e($page_name);?>?id=<?=$slider_id ;?>" class="btn btn-xs btn-success">Edit</a>
				  <a href="<?php e($view_page_name);?>?id=<?=$slider_id ;?>" class="btn btn-xs btn-info">View</a><br/>
				  <a href="admit-setting.php?id=<?=$slider_id ;?>" class="btn btn-xs btn-success">Upload Admit Card</a>
				  <a href="set_user_number.php?id=<?=$slider_id ;?>" class="btn btn-xs btn-danger">Set Number</a>
				  </td>
				  
				  <td><a href="javascript:;" onclick="all_delete(<?=$slider_id;?>,'.delete_slider','delete_user_list','ajax_to_php/admin_file','<?=$services_img;?>');"><i class="fa fa-trash-o"></i> Delete</a></td> 
                </tr>
					<?php  } 
					
				// 
					
					}?>
                
              </table>


              <?php include"../pagination/index.php"; ?>