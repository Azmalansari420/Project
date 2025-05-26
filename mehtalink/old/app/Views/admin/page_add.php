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
$uri = service('uri');
$currentpage=$uri->getSegment(3);
$last_id=getdatasingledesc('tbl_pages');
$sort_order=(1+$last_id->id)*5;
$arrf=explode(",",$user->page_filter);
$new_description= str_replace(array_in(),array_out(),$user->description); 
$new_description2= str_replace(array_in(),array_out(),$user->description2); 
$new_attachment_link= str_replace('#base_url#',base_url(),$user->attachment_link);
$new_redirect= str_replace('#base_url#',base_url(),$user->redirect_url);
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          
          <div class="col-sm-12">
            <h1><?=$title;?></h1>
            <hr />
            <div class="row">
				<div class="col-md-3"><a class="form-control btn btn-primary" href="<?=base_url('cpdadmin/page_list/'.$currentpage.'');?>">List All</a></div>
            </div>
          </div>
        </div>
		<?php if(isset($success)){ echo $success; } ?>
      </div><!-- /.container-fluid -->
	  
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       <?php if(isset($_GET['copy_id'])) { ?>
	   <form action="<?=base_url("cpdadmin/page_add/$currentpage");?>?copy_id=<?=$_GET['copy_id'];?>" method="post" enctype = "multipart/form-data">
	   <?php } else { ?>
	    <form action="<?=base_url("cpdadmin/page_add/$currentpage");?>" method="post" enctype = "multipart/form-data">
	   <?php } ?>
	   <input type="hidden" name="udf1">
	   <input type="hidden" name="udf2">
	   <input type="hidden" name="udf3">
	   <input type="hidden" name="udf4">
	   <input type="hidden" name="udf5">
	   <input type="hidden" name="custom_data">
	   	<div class="row">
          <!-- left column -->
		  
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create New <?php echo $currentpage; ?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" required name="title" value="" id="exampleInputEmail1" placeholder="Enter Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
					<textarea class="ckeditor" id="" name="description" cols="35" rows="20">
					<?=$new_description;?>
					</textarea>
					
                  </div>
				  
				  <div class="form-group">
                    <label for="exampleInputPassword1">Description2</label>
					<textarea class="ckeditor" id="" name="description2" cols="35" rows="20">
					<?=$new_description2;?>
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
                    <input type="URL" class="form-control" name="redirect_url" value="<?=$new_redirect;?>" placeholder="Redirect URL">
                  </div>
				  </div>
				  <div class="col-md-6">
				  <div class="form-group">
                  <label>Link (Target)</label>
                  <select class="form-control" name="target_link">
                    
                    <option value="0">Open In Same Tab</option>
                    <option value="1">Open In New Tab</option>
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
                  <input type="text" placeholder="Mrp" class="form-control" name="udf1">
                    
                </div>
                </div>
				<div class="col-md-6">
				  <div class="form-group">
                  <label>Price</label>
                  <input type="text" class="form-control" placeholder="Price" name="udf2">
                    
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
				   <div class="form-group">
                    <div class="input-group">
                      
                        <input type="file" name="file" class="form-control image_file" id="exampleInputFile">
                       
                    </div>
                  </div>
				  
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
					 <option value="<?=$svalues->id;?>" <?php if($values->parent_page==$svalues->id){ echo "selected";}?>>-<?=$svalues->title;?></option>
					   <?php if($child) { foreach($child as $chvalues) { if($current_page_id!=$chvalues->id){ ?>
					   <option value="<?=$user->parent_page;?>" <?php if($user->parent_page==$svalues->id){ echo "selected";}?>>--<?=$chvalues->title;?></option>
					   <?php } } } ?>
					 <?php } } } ?>
					<?php } } } } ?>
                  </select>
                </div>
				<input type="hidden" name="page_type" value="<?php echo $page_type; ?>">
				<div class="form-group">
                  <label>Status</label>
                  <select class="form-control" name="page_display">
                    <option value="1">Show</option>
                    <option value="0">Hide</option>
                  </select>
                </div>
				
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
				<?php } ?>
				
				<div class="form-group">
                    <label for="exampleInputFile">Page Banner</label>
                    <div class="input-group">
                      
                        <input type="file" name="page_banner" class="form-control image_file" id="exampleInputFile">
                       
                    </div>
                  </div>
				<?php if($page_type!='3') { ?>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Featured Video (Embed Code)</label>
                    <textarea type="text" name="embed_code" class="form-control" id="exampleInputEmail1" placeholder="Enter Featured Video"></textarea>
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
                    <input type="text" name="menu_name" class="form-control" id="exampleInputEmail1" placeholder="Menu Name (Custom)">
                 </div> 
                 </div> 
				 <div class="col-md-4">
				<div class="form-group">
                    <label for="exampleInputEmail1">Sort Order</label>
                    <input type="number" min="0" name="sort_order" class="form-control" value="<?php echo $sort_order; ?>" id="exampleInputEmail1" placeholder="Sort Order">
                 </div> 
                 </div> 
                 </div> 
                <?php } ?>
				<?php if($page_type!=0) { ?>
				<div class="form-group">
                    <label for="exampleInputEmail1">Sort Order</label>
                    <input type="number" min="0" name="sort_order" class="form-control" value="<?php echo $sort_order; ?>" id="exampleInputEmail1" placeholder="Sort Order">
                 </div> 
				<?php } ?>
				 
             <?php if($page_type == 0 OR $page_type == 1){ ?>	<div class="form-group">
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
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                   
                  </select>
                </div> 
				 
				 
               <?php if($page_type == 0 or $page_type == 3){ ?>
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
                <?php if($page_type == 0 OR $page_type == 1 OR $page_type == 3){ ?>
				<div class="form-group">
                    <label for="exampleInputEmail1">Attachment Link</label>
                    <input type="URL" name="attachment_link" class="form-control" value="<?=$new_attachment_link;?>" placeholder="Attachment Link">
                 </div> 
				 
				 <div class="form-group">
                    <label for="exampleInputEmail1">Unique Code</label>
                    <input type="text" name="unique_code" class="form-control" id="exampleInputEmail1" placeholder="Unique Code">
                 </div>
				 
				 <div class="form-group">
                    <label for="exampleInputEmail1">Unique Code2</label>
                    <input type="text" name="udf2" class="form-control" id="exampleInputEmail1" placeholder="Unique Code2">
                 </div>
				 
				 
				  <div class="form-group">
                    <label for="exampleInputEmail1">Menu Type</label>
                      <select name="udf5" class="form-control">
					  <option value="">--Select Menu Type--</option>
					  <option value="1">Left</option>
					  <option value="2">Right</option>
					</select>
                 </div> 
				 
				 
				 <div class="form-group">
                    <label for="exampleInputEmail1">Custome Url</label>
                    <input type="text" name="udf1" class="form-control" id="exampleInputEmail1" placeholder="Custome Url">
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
  