<?php 
    include_once('include/topmenu.php'); 
 
  
	//fetch data 
	$c_id = @$_GET['id']; 
	if(isset($c_id) and !empty($c_id) and is_numeric($c_id)){
		$c_fsd = fs('top_admin',array('id'=>$c_id));
		$c_role_array = explode(',',$c_fsd->role_list);
		if(is_array($c_fsd) || is_object($c_fsd)){

			  $form_action = 2;

			  //menu role 
			  $sel_menu_array = array();
			  $step_a = explode('|', $c_fsd->role_list);
			  foreach($step_a as $step_a_k){
			         $step_b = explode('@', $step_a_k); 
			          
			         $get_menu_id = $step_b[0]; 
			         $step_c = @explode(',',$step_b[1]); 

			         $sel_menu_list_array = array();
			         foreach($step_c as $step_c_k){
			            $sel_menu_list_array[] = $step_c_k;
			                  
			         }

			         $sel_menu_array[$step_b[0]] = $sel_menu_list_array;
			             
			   } 

		}else{
			url('add-admin-role.php');
		}
	}else{
		$form_action = 1;
	}


	//Delete data
	if(isset($_GET['del_id']) and !empty($_GET['del_id'])){
		$del_sdf = $con->all_delete('top_admin',array('id'=>$_GET['del_id']));
		//alert message
			if($del_sdf==1){
				alert('Successfully delete',"add-admin-role.php");
			}
	}
	
	//add & update client 
	if(isset($form_submit)){

		$join_menu_id_string = "";

        // echo "string";
        // die;

		if(isset($role) and !empty($role)){
			if(count($role) > 0){
                foreach($role as $menu){
					
					$join_menu_id_string .=  $menu;

					$create_menu_list_input_name = $_POST[$menu."menu_list"];

					if(isset($create_menu_list_input_name) and !empty($create_menu_list_input_name)){

						if(count($create_menu_list_input_name) > 0){
							$join_menu_id_string .=  "@";
							foreach($create_menu_list_input_name as $menu_list){

								$join_menu_id_string .= $menu_list.",";
							}
							$join_menu_id_string = rtrim($join_menu_id_string,',');
						}

						 
					}
					$join_menu_id_string .= "|";
				}

				$join_menu_id_string = rtrim($join_menu_id_string,'|');				 

			}
		}
		
	  
		//user table column name and input text fields name
		$col_val = array(
			'admin_name'=> $a_name,
			'admin_password'=> $a_password,
			'admin_confirm_password'=>$a_password,
			'role_list'=>$join_menu_id_string,
			'type'=>'V'
			);  
			
		 print_r($col_val);
		
		if($form_action==2){
			//update code
			$where = array('id'=>$c_id);
		 	$row   = $con->update('top_admin',$col_val,$where);
			
		    //alert message
			if($row==1){
				$reload_path = "add-admin-role.php?id=".$c_id;
				alert('Successfully Update',$reload_path);
			}
		}else{
			//insert code
			
			$col_val['admin_email'] = $a_email;
			$row = $con->insert('top_admin',$col_val); 
			//alert message
			if($row==1){
				alert('Successfully Added','add-admin-role.php');
			}
			
		}
		
	}	 
?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
     

	<section class="content" id="ppg">
	   <form action="" method="post" enctype="multipart/form-data">
				<div class="panel panel-success">
					 <div class="panel panel-heading">
						<i class="fa fa-users"></i> Add Users
						<span class="pull-right"><a href="add-admin-role.php" class="btn btn-xs btn-danger">
 Add New</a></span>
					</div>
					 <div class="panel-body">
						<div class="row">
						   <div class="col-sm-4">
								<div class="form-group">
									<label for="">Name *</label>
									<input type="text"  value="<?php e(@$c_fsd->admin_name); ?>" required placeholder="Name" name="a_name" class="form-control" />
								</div>
							</div>
							  <div class="col-sm-4">
								<div class="form-group">
									<label for="">Email </label>
									<input type="email"  value="<?php e(@$c_fsd->admin_email); ?>" required placeholder="Email" name="a_email" class="form-control" />
								</div>
							</div>
							  <div class="col-sm-4">
								<div class="form-group">
									<label for="">Password </label>
									<input type="text"  value="<?php e(@$c_fsd->admin_password); ?>" required placeholder="Password" name="a_password" class="form-control" />
								</div>
							</div>

							<div class="col-sm-12">
								<div class="form-group">
								<label>Assign Menu</label><br>
								<hr>
								<?php 

  
								foreach($menu_bar_list as $mblk=>$mblv){
									


									if(@array_key_exists($mblk,$sel_menu_array)){
										$checked = "checked";
									}else{
										$checked = "";
										}
									?>
									<div class="col-sm-4">
<label class="checkbox-inline my_strong"><input <?php echo $checked;?> type="checkbox" name="role[]" value="<?php echo $mblk; ?>"><?php echo $mblv['menu_name']; ?></label>
		<ul type="none">
			<?php 
			$menu_list_array = $mblv['menu_list'];
			if(is_array($menu_list_array)){
				foreach($menu_list_array as $mlk=>$mlv){
					   if(@in_array($mlk,$sel_menu_array[$mblk])){
					   	$sub_checked = "checked";
					   }else{
					   	$sub_checked = "";
					   }
						$menu_list = explode('|', $mlv);
					?>
					<li><input <?php echo $sub_checked;?> type="checkbox" name="<?php echo $mblk; ?>menu_list[]" value="<?php echo $mlk; ?>"> <?php echo $menu_list[0]; ?>
					</li>
				<?php }
			}
			?>
		</ul>
</div>
								<?php }?>
								</div>
						 	</div>
							
									<div class="col-sm-12">
							<input type="submit" value="Form Submit" name="form_submit" class="btn btn-danger"
							 />
						</div>
						
						</div>
					 </div>
					 
				</div>
				</form>
    </section>

    <section class="content"> 
				<div class="panel panel-primary">
					 <div class="panel panel-heading">
						<i class="fa fa-users"></i> Admin Role Lists
						<span class="pull-right"><a href="add_teacher.php" class="btn btn-xs btn-danger">Add New</a></span>
					 </div>
					 <div class="panel-body">
						 <table id="example" class="table table-striped table-bordered" style="width:100%">
							<thead>
							<tr>
								<th>Sr no</th>
								<th>Name</th>
								<th>Email</th>
								<th>Password</th>
								 
								<th>Action</th>
							</tr>
							</thead>
							<tbody>
							<?php
							 $fetch_all_clients = $con->all_fetch('top_admin',array('type'=>'V'),'order by id desc');
							 if(is_array($fetch_all_clients) || is_object($fetch_all_clients)){
								 $is = 1;
								 foreach($fetch_all_clients as $fac){ ?>
									 <tr>
								<td><?php echo $is++; ?></td>
								<td><?php echo $fac->admin_name; ?></td>
								<td><?php echo $fac->admin_email; ?></td>
								<td><?php echo $fac->admin_password; ?></td>
							 
								 
								
								  
								 
								<td>
									<a href="add-admin-role.php?id=<?php e($fac->id); ?>" class="btn btn-xs btn-success"><i class="fa fa-edit"></i> Edit</a>

									<a href="add-admin-role.php?id=<?php e($fac->id); ?>" class="btn btn-xs btn-success">
										<i class="fa fa-eye"></i> View Role</a>

									<a href="?del_id=<?php e($fac->id); ?>" class="btn btn-xs btn-danger del_confirm">Delete</a>
								</td>
							</tr>
<?php 								 }
								 
							 }
							?>
							
							    </tbody>
						 </table>
					 </div>
					  
				</div> 
            </section>
    
	
 
  </div>
  <!-- /.content-wrapper -->
   <?php include_once('include/footer.php');?>
 
  