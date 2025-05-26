<?php
$page_name="page";
$page_name_list="page_list";
$page_name_add="page_add";
$page_name_edit="page_edit";
$array=combine_array();
$cat_type=$page_type;
if($page_type==2){$cat_type=0;}
if($page_type==3){$cat_type=1;}
$category=getcatlistmenu('tbl_pages','title','asc',array('status'=>'1','page_type'=>$cat_type));
$arrf=explode(",",$user->page_filter);
$uri = service('uri');
$currentpage1=$uri->getSegment(4);

$new_description= str_replace(array_in(),array_out(),$user->description); 
$new_description2= str_replace(array_in(),array_out(),$user->description2); 
$new_attachment_link= str_replace('#base_url#',base_url(),$user->attachment_link);
$new_redirect= str_replace('#base_url#',base_url(),$user->redirect_url);
$current_page_id=$user->id;
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
         
          
		  <div class="col-sm-12">
            <h1><?=$title;?> (<a href="<?=base_url($currentpage1.'/'.$user->slug.'');?>" target="_blank">View Now</a>)</h1> 
            <hr />
            <div class="row">
				<div class="col-md-3"><a class="form-control btn btn-primary" href="<?=base_url('cpdadmin/page_list/'.$currentpage1.'');?>">List All</a></div>
				<div class="col-md-3"><a class="form-control btn btn-success" href="<?=base_url('cpdadmin/page_add/'.$currentpage1.'');?>">Add New</a></div>
				<div class="col-md-3"><a class="form-control btn btn-danger" href="<?=base_url('cpdadmin/page_add/'.$currentpage1.'?copy_id='.$user->id.'');?>">Copy New</a></div>
				<div class="col-md-3"><a class="form-control btn btn-warning" href="<?=base_url('cpdadmin/multigallery1/'.$user->id.'');?>" target="_blank">Add Gallery</a></div>
				
				<!--<div class="col-md-3"><a class="form-control btn btn-danger" href="<?=base_url('cpdadmin/tab/'.$user->id.'');?>">Add Tab</a></div>
				<div class="col-md-3"><a class="form-control btn btn-primary" href="<?=base_url('cpdadmin/faq/'.$user->id.'');?>">FAQ Tab</a></div>-->
            </div>
          </div>
		  
		  
        </div>
		<?php if(isset($success)){ echo $success; } ?>
      </div><!-- /.container-fluid -->
	  
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       <form action="<?=base_url('cpdadmin/page_edit/'.$user->id.'');?>/<?=$currentpage1;?>" method="post" enctype = "multipart/form-data">
	   	 <div class="row">
          <!-- left column -->
		  
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update <?=$currentpage1;?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" required class="form-control" name="title" value="<?=$user->title;?>" placeholder="Enter Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <textarea name="description" class="form-control ckeditor" id="exampleInputPassword1 myEditor">
					<?php echo $new_description; ?>
					</textarea>
                  </div>
				  <div class="form-group">
                    <label for="exampleInputPassword1">Description2</label>
                    <textarea name="description2" class="form-control ckeditor">
					<?php echo $new_description2; ?>
					</textarea>
                  </div>
				  
				  
				  
				  <?php if($page_type == 0 OR $page_type == 1 OR $page_type == 3 OR $page_type == 2){ ?>
				  <div class="row">
				  <div class="col-md-6">
				  <div class="form-group">
                    <label for="exampleInputEmail1">Meta Tags (Separate With , Commas)</label>
                    <textarea class="form-control" name="meta_tags" id="exampleInputEmail1" placeholder="Meta Tags"><?=$user->meta_tags;?></textarea>
                  </div>
				  </div>
				  <div class="col-md-6">
				  <div class="form-group">
                    <label for="exampleInputEmail1">Meta Description (Separate With , Commas)</label>
                    <textarea class="form-control" name="meta_description" id="exampleInputEmail1" placeholder="Meta Description"><?=$user->meta_description;?></textarea>
                  </div>
				  </div>
				  </div>
				  <?php } ?>
				  <?php if($page_type == 0 or $page_type == 2){ ?>
				  <div class="row">
				  <div class="col-md-6">
				  <div class="form-group">
                    <label for="exampleInputEmail1">Redirect URL (Page Redirects)</label>
                    <input type="URL" class="form-control" name="redirect_url" value="<?php echo $new_redirect; ?>" id="exampleInputEmail1" placeholder="Redirect URL">
                  </div>
				  </div>
				  <div class="col-md-6">
				  <div class="form-group">
                  <label>Link (Target)</label>
                  <select class="form-control" name="target_link">
                    
                    <option value="0" <?php if($user->target_link=='0'){ echo "selected";}?>>Open In Same Tab</option>
                    <option value="1" <?php if($user->target_link=='1'){ echo "selected";}?>>Open In New Tab</option>
                  </select>
                </div>
				  
				  </div>
				  </div>
				   <?php } ?>
				   <?php if($page_type == 1 or $page_type == 2 or $page_type == 0){ ?>
				  <div class="row">
				  <div class="col-md-4">
				  <div class="form-group">
                  <label>Catalog Style (Parent)</label>
                  <select class="form-control" name="catalog_style">
                    <option value="">None</option>
                    <?php foreach($array['CatalogStyle'] as $values) { ?>
					<option value="<?=$values['id'];?>" <?php if(in_array($values['id'],$arrf)){ echo "selected";}?>><?=$values['name'];?></option>
					<?php } ?>
                  </select>
                </div>
                </div>
				
				<div class="col-md-4">
				  <div class="form-group">
                  <label>Catalog Sorting (Order)</label>
                  <select class="form-control" name="catalog_sorting">
                    <option value="">None</option>
                    <?php foreach($array['catalog_sorting'] as $values) { ?>
					<option value="<?=$values['id'];?>" <?php if(in_array($values['id'],$arrf)){ echo "selected";}?>><?=$values['name'];?></option>
					<?php } ?>
                  </select>
                </div>
                </div>
				
				<div class="col-md-4">
				  <div class="form-group">
                  <label>Catalog Excerpt (Summary)</label>
                  <select class="form-control" name="catalog_excerpt">
                   <option value="">None</option>
                    <?php foreach($array['catalog_excerpt'] as $values) { ?>
					<option value="<?=$values['id'];?>" <?php if(in_array($values['id'],$arrf)){ echo "selected";}?>><?=$values['name'];?></option>
					<?php } ?>
					
                  </select>
                </div>
                </div>
				
                </div>
				   <?php } ?>
				   <?php if($page_type == 3){ ?>
				  <div class="row">
				  <div class="col-md-6">
				  <div class="form-group">
                  <label>MRP</label>
                  <input type="text" placeholder="Mrp" class="form-control" name="udf1" value="<?=$user->udf1;?>">
                    
                </div>
                </div>
				<div class="col-md-6">
				  <div class="form-group">
                  <label>Price</label>
                  <input type="text" class="form-control" placeholder="Price" name="udf2" value="<?=$user->udf2;?>">
                    
                </div>
                </div>
				
				
				
                </div>
                 <?php } ?>
                </div>
                <!-- /.card-body -->

             
            </div>
            <!-- /.card -->

            
          </div>
		  
		  
		  <div class="col-md-4">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">More Options</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
                <div class="card-body">
				<div class="form-group">
                  <label>Show Featured Image On</label>
                  <select class="form-control" name="featured_image_status">
                    <?php foreach($array['featured_image'] as $values) { ?>
					<option value="<?=$values['id'];?>" <?php if(in_array($values['id'],$arrf)){ echo "selected";}?>><?=$values['name'];?></option>
					<?php } ?>
                  </select>
                </div>
				<?php if($user->file!='') { ?>
                  <img src="<?=base_url('public/uploads/'.$user->file.'');?>" style="max-width:100%;height:100px;">
				<?php } ?>
				   <div class="form-group">
				   
                    
					<div class="input-group">
                      
                        <input type="file" name="file" class="form-control image_file" id="exampleInputFile">
                       
                    </div>
                  </div>
				  <?php if($user->file != ""){ ?>
					<input type="checkbox" name="remove_img" value="1"> Remove Image
                  <?php } ?>
				  <div class="form-group">
                  <label>Category (Parent Page)</label>
                  <select class="form-control" name="parent_page">
                    <option value="0" <?php if($user->parent_page=='0'){ echo "selected";}?>>None</option>
                    <?php if($category) {foreach($category as $values) {
					if($values->parent_page=='0') { 
					$subcat=getdatabyslug('tbl_pages',array('parent_page'=>$values->id));
						if($current_page_id!=$values->id){
					?>
                     <option value="<?=$values->id;?>" <?php if($user->parent_page==$values->id){ echo "selected";}?>><?=$values->title;?></option>
					 <?php if($subcat) { foreach($subcat as $svalues) { 
						$child=getdatabyslug('tbl_pages',array('parent_page'=>$svalues->id));
						if($current_page_id!=$svalues->id){
					 ?>
					 <option value="<?=$svalues->id;?>" <?php if($user->parent_page==$svalues->id){ echo "selected";}?>>-<?=$svalues->title;?></option>
					   <?php if($child) { foreach($child as $chvalues) { if($current_page_id!=$chvalues->id){ ?>
					   <option value="<?=$chvalues->id;?>" <?php if($user->parent_page==$chvalues->id){ echo "selected";}?>>--<?=$chvalues->title;?></option>
					   <?php } } } ?>
					 <?php } } } ?>
					<?php } } } } ?>
                  </select>
                  </div>
				
               <input type="hidden" name="page_type" value="<?php echo $page_type; ?>">
				<div class="form-group">
                  <label>Status</label>
                  <select class="form-control" name="page_display">
                    <option value="1" <?php if($user->status=='1'){ echo "selected";}?>>Show</option>
                    <option value="0" <?php if($user->status=='0'){ echo "selected";}?>>Hide</option>
                    
                  </select>
                </div>
				
				<?php if($page_type=='3') { ?>
				<div class="form-group">
                    <label for="exampleInputFile">Designation</label>
                    <div class="input-group" >
                      
                        <input type="text" name="designation" class="form-control" value="<?=$user->designation;?>" id="exampleInputFile" placeholder="Designation">
                       
                    </div>
                  </div>
				<?php } ?>
				
				<?php if($page_type!='3') { ?>
				<div class="form-group">
                  <label>Template Style</label>
                  <select class="form-control" name="page_style">
                    <option value="">None</option>
                    <?php foreach($array['page_style'] as $values) { ?>
					<option value="<?=$values['id'];?>" <?php if(in_array($values['id'],$arrf)){ echo "selected";}?>><?=$values['name'];?></option>
					<?php } ?>
                    
                  </select>
                </div>
				
				<div class="form-group">
				<?php if($user->page_banner!='') { ?>
				 <img src="<?=base_url('public/uploads/'.$user->page_banner.'');?>" style="max-width:100%;height: 100px;"></br>
				<?php } ?>
                    <label for="exampleInputFile">Page Banner</label>
                    <div class="input-group">
                      
                        <input type="file" name="page_banner" class="form-control image_file" id="exampleInputFile">
                       
                    </div>
					<?php if($user->page_banner != ""){ ?>
					<input type="checkbox" name="remove_page_banner" value="1"> Remove Page Banner
                  <?php } ?>
                  </div>
				
				  <div class="form-group">
                    <?php if($user->embed_code!='') { ?>
					<iframe width="300" height="315" src="<?=$user->embed_code;?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
					<?php } ?>
					<label for="exampleInputEmail1">Featured Video (Embed Code)</label>
					
                    <textarea type="text" name="embed_code" value="" class="form-control" id="exampleInputEmail1" placeholder="Enter Meta Tags"><?=$user->embed_code;?></textarea>
                  </div>
				  <?php } ?>
				  <?php if($page_type == 0 OR $page_type == 1){ ?>
				 <div class="form-group">
                  <label>Show In Menu (Top Menu)</label>
                  <select class="form-control" name="top_menu">
                    <option value="">None</option>
                    <?php foreach($array['top_menu'] as $values) { ?>
					<option value="<?=$values['id'];?>" <?php if(in_array($values['id'],$arrf)){ echo "selected";}?>><?=$values['name'];?></option>
					<?php } ?>
                  </select>
                </div>
				  <?php } ?>
				  <?php if($page_type == 0){ ?>
				<div class="row">
				<div class="col-md-8">
				<div class="form-group">
                    <label for="exampleInputEmail1">Menu Name (Custom)</label>
                    <input type="text" name="menu_name" value="<?=$user->menu_name;?>" class="form-control" id="exampleInputEmail1" placeholder="Menu Name (Custom)">
                 </div> 
                 </div> 
				<div class="col-md-4">
				<div class="form-group">
                    <label for="exampleInputEmail1">Sort Order</label>
                    <input type="text" name="sort_order" value="<?=$user->sort_order;?>" class="form-control" id="exampleInputEmail1" placeholder="Sort Order">
                 </div> 
                 </div> 
                 </div> 
				 <?php } ?>
				 <?php if($page_type!=0) { ?>
				<div class="form-group">
                    <label for="exampleInputEmail1">Sort Order</label>
                    <input type="number" min="0" name="sort_order" class="form-control" value="<?=$user->sort_order;?>" id="exampleInputEmail1" placeholder="Sort Order">
                 </div> 
				<?php } ?>
				 <?php if($page_type == 0 OR $page_type == 1){ ?>
				 
				<div class="form-group">
                  <label>Footer Links</label>
                  <select class="form-control" name="footer_link">
                    <option value="">None</option>
                    <?php foreach($array['footer_link'] as $values) { ?>
					<option value="<?=$values['id'];?>" <?php if(in_array($values['id'],$arrf)){ echo "selected";}?>><?=$values['name'];?></option>
					<?php } ?>
                  </select>
                </div>
				<?php } ?>
				<div class="form-group">
                  <label>Display Home Page</label>
                  <select class="form-control" name="display">
                    <option value="0" <?php if($user->display==0){ echo "selected";}?>>No</option>
                    <option value="1" <?php if($user->display==1){ echo "selected";}?>>Yes</option>
					
                  </select>
                </div>
				<?php if($page_type == 0 or $page_type==3){ ?>
				<div class="form-group">
                  <label>Contact Form</label>
                  <select class="form-control" name="contact_form">
                    <option value="">None</option>
                    <?php foreach($array['contact_form'] as $values) { ?>
					<option value="<?=$values['id'];?>" <?php if(in_array($values['id'],$arrf)){ echo "selected";}?>><?=$values['name'];?></option>
					<?php } ?>
                  </select>
                </div>
				<?php } ?>
				<?php if($page_type == 0 OR $page_type == 1 or $page_type==3){ ?>
				<div class="form-group">
                    <label for="exampleInputEmail1">Attachment Link</label>
                    <input type="URL" name="attachment_link" value="<?php echo $new_attachment_link; ?>" class="form-control" id="exampleInputEmail1" placeholder="Attachment Link">
                 </div> 
				 
				 <div class="form-group">
                    <label for="exampleInputEmail1">Unique Code</label>
                    <input type="text" name="unique_code" value="<?=$user->unique_code;?>" class="form-control" id="exampleInputEmail1" placeholder="Unique Code">
                 </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Unique Code2</label>
                    <input type="text" name="udf2" value="<?=$user->udf2;?>" class="form-control" id="exampleInputEmail1" placeholder="Unique Code">
                 </div>
				 
				 
				 
				
				 
				  <div class="form-group">
                    <label for="exampleInputEmail1">Menu Type</label>
                      <select name="udf5" class="form-control">
					  <option value="">--Select Menu Type--</option>
					  <option value="1" <?php if($user->udf5==1){ echo "selected";}?>>Left</option>
					  <option value="2" <?php if($user->udf5==2){ echo "selected";}?>>Right</option>
					</select>
                 </div> 
				 
				 <div class="form-group">
                    <label for="exampleInputEmail1">Custome Url</label>
                    <input type="text" name="udf1" value="<?=$user->udf1;?>" class="form-control" id="exampleInputEmail1" placeholder="Custome Url">
                 </div>
				 
				 <?php } ?>
				
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
             
            </div>
            <!-- /.card -->

            
          </div>
		   
          <!--/.col (left) -->
          <!-- right column -->
          
          <!--/.col (right) -->
        </div>
		</form>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  