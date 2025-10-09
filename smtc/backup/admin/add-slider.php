<?php 
   include_once('include/topmenu.php'); 
  	$update_id = @$_GET['id'];
	if(isset($update_id) and !empty($update_id)){
	   	$text = "Update";
	}else{
		$text = "Add";
	}

?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><?=$text;?> Slider</h1>
      <ol class="breadcrumb">
        <li><a href="welcome.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Slider</a></li>
        <li class="active"><?=$text;?> Slider</li>
      </ol>
    </section>
	
	<section class="content" id="ppg">
	 <!-- Default box -->
      <div class="box box-info">
          	  <?php  
	if(isset($update_id) and !empty($update_id)){
		   $cms_info = $con->all_fetch("home_slider",array('id'=>$update_id));
		   if(is_array($cms_info) || is_object($cms_info)){
			  foreach($cms_info as $cinfo){
				  $banner_id         = $cinfo->id; 
				  $banner_link       = $cinfo->banner_link;
				  $banner_title      = $cinfo->banner_title;
				  $banner_img  	     = $cinfo->banner_img;  
				  $target            = $cinfo->target;
				  $sort_order        = $cinfo->sort_order;
				  $type              = $cinfo->type;
				  $status            = $cinfo->status;
			  } 
		   }else{
			    
		   }
		?>
	  <form class="form-horizontal" id="edit_slider_form"  method="post" enctype="multipart/form-data">
        <div class="box-header">
          <span class="box-title"><i class="fa fa-shopping-cart"></i> <?=$text;?> Slider :  
		   <span id="cms_error" style="color:#f00;"></span> 
		  </span>
			<div class="box-tools pull-right">
             
			  <button type="submit" id="cms_submit_btn" class="btn btn-info btn-sm">
              <i class="fa fa-save"></i> Save </button>
			  <a href="all-slider.php" title="Cancel" class="btn btn-info btn-sm" >
                 <i class="fa fa-reply"></i> Back 
			  </a>
                
          </div>
        </div>
        <div class="box-body">
		
			<ul class="nav nav-tabs">
			   <li class="active"><a data-toggle="tab" href="#General">General</a></li>
			</ul>
       
		<div class="tab-content">
			 <div id="General" class="tab-pane fade in active">
			  	   
				  
				  	<div class="form-group"> 
					<label class="control-label col-sm-2" for="edit_banner_title">Banner Title </label>
					<div class="col-sm-10">
					<input type="text" value="<?=@$banner_title;?>" class="form-control" id="edit_banner_title" name="edit_banner_title" placeholder="CMS Title">
					</div>
				</div>
				  
			  	   
				    
				  <div class="form-group">
					<label class="control-label col-sm-2" for="edit_banner_link">Banner Link <?=$req;?></label>
					<div class="col-sm-10">
					<input type="text" value="<?=@$banner_link;?>" class="form-control" id="edit_banner_link" name="edit_banner_link" placeholder="CMS Link Url LIke http://google.com">
					</div>
				  </div>
				   
				    
			  	   
				    
				 
				   <div class="form-group">
					<label class="control-label col-sm-2" for="edit_cms_pic">Banner Images <?=$req;?></label>
					<div class="col-sm-10">
					  <input type="file" class="form-control" id="edit_cms_pic" name="edit_cms_pic" accept="image/*">
					  <img src="../upload/<?=$banner_img;?>" style="width:250px;">
					  <input type="hidden" name="banner_old_pic" value="<?=$banner_img;?>">
					  <input type="hidden" name="banner_update_id" value="<?=$banner_id;?>">
					</div>
				</div>
				 <div class="form-group">
					<label class="control-label col-sm-2" for="sort_order">Sort Order </label>
					<div class="col-sm-10"> 
					  <input type="number" value="<?=$sort_order;?>"  min="1" class="form-control" id="sort_order" name="sort_order" autocomplete="off" placeholder="Sort Order">
					</div>
				  </div> 
				  <div class="form-group">
					<label class="control-label col-sm-2" for="edit_slider_status">CMS Status </label>
					<div class="col-sm-10">
					  <select class="form-control" id="edit_slider_status" name="edit_slider_status">
					     <?php 
						   $arrs = array('Show'=>'Yes','hide'=>'No');
						   foreach($arrs as $k=>$v){
							   
						    if($status == $v){?>
						<option value="<?=$v;?>" selected="selected"><?=$k;?></option>
							<?php }else{?>
						<option value="<?=$v;?>"><?=$k;?></option>
							<?php } } ?>
					  </select>
					  
					</div>
				  </div>
			</div>
			  
		</div>
	 </form>
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 <?php }else{ ?>
	  	 <form class="form-horizontal" id="add_slier_form"  method="post" enctype="multipart/form-data">
        <div class="box-header">
          <span class="box-title"><i class="fa fa-shopping-cart"></i> <?=$text;?> CMS :  
		   <span id="cms_error" style="color:#f00;"></span> 
		  </span>
			<div class="box-tools pull-right">
             
			  <button type="submit" id="cms_submit_btn" class="btn btn-info btn-sm">
              <i class="fa fa-save"></i> Save </button>
			  <a href="all-slider.php" title="Cancel" class="btn btn-info btn-sm" >
                 <i class="fa fa-reply"></i> Back 
			  </a>
                
          </div>
        </div>
        <div class="box-body">
		
			<ul class="nav nav-tabs">
			   <li class="active"><a data-toggle="tab" href="#General">General</a></li>
			</ul>
       
		<div class="tab-content">
			 <div id="General" class="tab-pane fade in active">
			  	   
			  	   
			  	   
			  	   
			  	    
				  <div class="form-group">
					<label class="control-label col-sm-2" for="banner_title">Banner Title </label>
					<div class="col-sm-10">
					<input type="text" value="<?=@$banner_title;?>" class="form-control" id="banner_title" name="banner_title" placeholder="CMS Title">
					</div>
				</div>
			  	   
				 
				  
				  
				  <div class="form-group"  id="outer_cms_link">
					<label class="control-label col-sm-2" for="banner_link">Banner Link <?=$req;?></label>
					<div class="col-sm-10">
					<input type="text" class="form-control" id="banner_link" name="banner_link" placeholder="CMS Link Url LIke http://google.com">
					</div>
				  </div>
				  
				    
			  	    
				 
				   <div class="form-group">
					<label class="control-label col-sm-2" for="banner_pic">Banner Images <?=$req;?></label>
					<div class="col-sm-10">
					  <input type="file" class="form-control" id="banner_pic" name="banner_pic" accept="image/*">
					</div>
				</div>
				
				 <div class="form-group">
					<label class="control-label col-sm-2" for="sort_order">Sort Order </label>
					<div class="col-sm-10">
					  <input type="number" min="1" class="form-control" id="sort_order" name="sort_order" autocomplete="off" placeholder="Sort Order">
					</div>
				  </div> 
				  
				  <div class="form-group">
					<label class="control-label col-sm-2" for="slider_status">CMS Status </label>
					<div class="col-sm-10">
					  <select class="form-control" id="slider_status" name="slider_status">
					      <option value="Yes">Show</option>
					      <option value="No">Hide</option>
					  </select>
					  
					</div>
				  </div>
			</div>
			  
		</div>
	 </form>
	 <?php }?>	
        </div>
        <!-- /.box-body -->
        
      </div>
      <!-- /.box -->
    </section>
	
 
  </div>
  <!-- /.content-wrapper -->
   <?php include_once('include/footer.php');?>
 
  