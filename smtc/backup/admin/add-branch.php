<?php 
   include_once('include/topmenu.php');
   $page_name     = "add-branch.php";
   $show_all_list = "all-branch.php";
   $url_id        = @$_GET['id'];
   $table_name    = "branch";
   
//FETCH
   if(isset($url_id) and is_numeric($url_id) and !empty($url_id)){
	    $fs = fs($table_name,array('id'=>$url_id));   
		if(is_array($fs) || is_object($fs)){
			
		}else{
			goto_c_url($page_name);
		}
   }
//ADD     
   if(isset($add_course_btn)){
	   
	   //GET STATE ID
	   $sit     = fs('state',array('id'=>$state_id));
	   $s_code  = $sit->code;
	   
	   $c_code  = "EITC".$s_code.rand();
	   $col_val = array(
			'add_date_time'=>$add_date,
			'sta_id'=>$state_id,
			'dis_id'=>$district_id,
			'city_id'=>$city_id,
			'address'=>$b_full_address,
			'b_name'=>$b_name,
			'b_code'=>$c_code,
			'b_u_name'=>$c_code,
			'b_password'=>$b_password,
			'p_name'=>$b_p_name,
			'email'=>$email,
			'mobile'=>$b_m_1,
			'mobile2'=>$b_m_2,
			'ref_branch_id'=>$referal_branch,
			'address'=>$b_full_address,
			'status'=>$status,
			'training_partner' =>$t_p
			
	      );
	   $row     = $con->insert($table_name,$col_val);
	   $vendor_login_url = BASE_URL."vendor/";
	   $message = "Dear $b_name welcome to Edu India Foundation. Your login id is $c_code and Password is $b_password ".$vendor_login_url;
	   $sms_check = run_sms_api($b_m_1,$message);
	   if($row==1){
		   alert('Successful Add Branch',$page_name);   
	   }
   }
//UPDATE 
   if(isset($update_course_btn)){
	   $where   = array('id'=>$update_id);
	    $col_val = array( 
			'sta_id'=>$state_id,
			'dis_id'=>$district_id,
			'city_id'=>$city_id,
			'address'=>$b_full_address,
			'b_name'=>$b_name,  
			'b_password'=>$b_password,
			'p_name'=>$b_p_name,
			'email'=>$email,
			'mobile'=>$b_m_1,
			'mobile2'=>$b_m_2,
			'ref_branch_id'=>$referal_branch,
			'address'=>$b_full_address,
			'status'=>$status,
			'training_partner' =>$t_p
			
	      );
	   $row     = $con->update($table_name,$col_val,$where);
	   if($row==1){
		   
		   alert('Successful Update Branch',$page_name);   
	   }
	   
   }
?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header"> 
      <h1>Add Branch <small>
	  <a href="<?php e($show_all_list ); ?>" class="btn btn-primary">All Branch  List </a>
	  
	  </small>
      </h1>
     
    </section>
	
	
<section class="content" id="ppg">
      <div class="row">
        <div class="col-xs-12">

          <div class="box box-info">
            <div class="box-header">
          <h3 class="box-title"><i class="fa fa-shopping-cart"></i> Add Branch</h3>
			 
        </div>
            <!-- /.box-header -->
            <div class="box-body">
                 <form action="" method="post">
				 
					<div class="row">
						<div class="col-sm-4">
							<div class="form-group">
								<label for="">Branch Name *</label>
							   <input type="text" required name="b_name" value="<?php e(@$fs->b_name); ?>" placeholder="Branch Name" class="form-control" />
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label for="">Contact Person Name *</label>
							   <input type="text" required name="b_p_name" value="<?php e(@$fs->p_name); ?>" placeholder="Contact Person Name " class="form-control" />
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label for="">Email</label>
							   <input type="text" name="email" value="<?php e(@$fs->email); ?>" placeholder="Email " class="form-control" />
							</div>
						</div>
					</div>
					
					
					<div class="row">
						<div class="col-sm-4">
							<div class="form-group">
								<label for="">Mobile Number 1 *</label>
							   <input type="number" required name="b_m_1" value="<?php e(@$fs->mobile); ?>" placeholder="Mobile Number 1 *" class="form-control" />
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label for="">Mobile Number 2 *</label>
							   <input type="number" required name="b_m_2" value="<?php e(@$fs->mobile2); ?>" placeholder="Mobile Number 2 * " class="form-control" />
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label for="">Referal Branch</label>
							    <select name="referal_branch" class="form-control select2">
							<option value="">Referal Branch *</option>
							<?php
							    $all_fetch_b = $con->get('branch',"order by id desc");
								if(is_array($all_fetch_b) || is_object($all_fetch_b)){
								foreach($all_fetch_b as $afb){ 
								if(@$fs->ref_branch_id==$afb->id){?>
									<option selected value="<?php e($afb->id); ?>"><?php e($afb->b_name); ?></option>
								<?php }else{ ?>
									<option value="<?php e($afb->id); ?>"><?php e($afb->b_name); ?></option>
								<?php }?>
									
								<?php } }
							?>
					   </select>
							</div>
						</div>
					</div>
					
					
					
					
					<div class="row">
						<div class="col-sm-4">
							<div class="form-group">
							<label for="">Select State</label>
								<select name="state_id" id="state_id" required class="form-control select2">
							<option value="">Select State</option>
							<?php
							    $all_fetch_category = $con->all_fetch('state');
								if(is_array($all_fetch_category) || is_object($all_fetch_category)){
								foreach($all_fetch_category as $afc){ 
								if(@$fs->sta_id==$afc->id){?>
									<option selected value="<?php e($afc->id); ?>"><?php e($afc->name); ?></option>
								<?php }else{ ?>
									<option value="<?php e($afc->id); ?>"><?php e($afc->name); ?></option>
								<?php }?>
									
								<?php } }
							?>
					   </select>
							</div>
						</div>
						<div class="col-sm-4">
						    <div class="form-group">
							<label for="">Select District</label>
							<select name="district_id" required class="form-control select2" id="district_id">
							<option value="">Select District</option>
							<?php
							    $all_fetch_category = $con->all_fetch('district',array('s_id'=>@$fs->sta_id));
								if(is_array($all_fetch_category) || is_object($all_fetch_category)){
								foreach($all_fetch_category as $afc){ 
								if(@$fs->dis_id==$afc->id){?>
									<option selected value="<?php e($afc->id); ?>"><?php e($afc->name); ?></option>
								<?php }else{ ?>
									<option value="<?php e($afc->id); ?>"><?php e($afc->name); ?></option>
								<?php }?>
									
								<?php } }
							?>
					   </select>
							</div>
						</div>
						<div class="col-sm-4">
						   <div class="form-group">
						   <label for="">Select City</label>
								<select name="city_id" required class="form-control select2" id="city_id">
							<option value="">Select City</option>
							<?php
							    $all_fetch_category = $con->all_fetch('city',array('d_id'=>@$fs->dis_id));
								if(is_array($all_fetch_category) || is_object($all_fetch_category)){
								foreach($all_fetch_category as $afc){ 
								if(@$fs->city_id==$afc->id){?>
									<option selected value="<?php e($afc->id); ?>"><?php e($afc->name); ?></option>
								<?php }else{ ?>
									<option value="<?php e($afc->id); ?>"><?php e($afc->name); ?></option>
								<?php }?>
									
								<?php } }
							?>
					   </select>
							</div>
						</div>
						
						<div class="col-sm-12">
						    <label for="">Branch Full Address</label>
		<textarea name="b_full_address"  placeholder="Branch Full Address" class="form-control" cols="30" rows="02"><?php e(@$fs->address);?></textarea>
						</div>
					
					</div>
					
					
					<div class="row">
					
						 
						
						
						
						
						<div class="col-sm-4">
						   <div class="form-group">
								<label for="c_dur">Password *</label>
							   <input type="text" placeholder="Password *" name="b_password" value="<?php e(@$fs->b_password); ?>" class="form-control" />
							</div>
						</div>
						
						<div class="col-sm-4">
						    
					<div class="form-group">
						<label for="">Status</label>
					  <select class="form-control" name="status">
					     <?php 
						   $arrs = array('Enable'=>'Yes','Disable'=>'No');
						   foreach($arrs as $k=>$v){
							   
						    if(@$fs->status == $v){?>
						<option value="<?=$v;?>" selected="selected"><?=$k;?></option>
							<?php }else{?>
						<option value="<?=$v;?>"><?=$k;?></option>
							<?php } } ?>
					  </select>
					  
					 
				  </div>
				 
						</div>
						 <div class="col-sm-4">
						 	 <div class="form-group">
						<label for="">Training Partner</label>
					  <select class="form-control" name="t_p">
					  	<option value=""> Select Training Partner</option>
					     <?php 
						   $arrs = array('Yes'=>'Yes','No'=>'No');
						   foreach($arrs as $k=>$v){
							   
						    if(@$fs->training_partner == $v){?>
						<option value="<?=$v;?>" selected="selected"><?=$k;?></option>
							<?php }else{?>
						<option value="<?=$v;?>"><?=$k;?></option>
							<?php } } ?>
					  </select>
					  
					 
				  </div>
						 </div>
						
					</div>
					
					 
					
					<?php if(isset($url_id)){ ?>
						<input type="submit" name="update_course_btn" value="Update Branch" class="btn btn-info" />
						<input type="hidden" name="update_id" value="<?php e($url_id);?>" />
					<?php }else{ ?>
						<input type="submit" name="add_course_btn" value="Add Branch" class="btn btn-info" />
					<?php } ?>
					
				 </form>
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

  
