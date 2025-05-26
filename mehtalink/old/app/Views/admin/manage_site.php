
<?php
$category=getdataorderby('tbl_pages','title','asc');
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1><?=$title;?></h1>
          </div>
         
        </div>
		<?php if(isset($success)){ echo $success; } ?>
      </div><!-- /.container-fluid -->
	  
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       <form action="<?=base_url('cpdadmin/manage_site/'.$user->id.'');?>" method="post" enctype = "multipart/form-data">
	   <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Manage Settings</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
                <div class="card-body">
                  <?php if($page_type=='3') { ?>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Site Name</label>
                    <input type="text" class="form-control" name="setting1" value="<?=$user->setting1;?>" placeholder="Site Name">
                  </div>
				  
				  <div class="row">
				  <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Site Keywords</label>
                    <textarea  rows="5" name="setting2" class="form-control" id="exampleInputPassword1"><?=$user->setting2;?></textarea>
                  </div>
				  </div>
				  <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Site Descritpion</label>
                    <textarea  rows="5" name="setting3" class="form-control" id="exampleInputPassword1"><?=$user->setting3;?></textarea>
                  </div>
				  </div>
				  </div>
				  
				 <div class="row">
				  <div class="col-md-4">
				  <?php if($user->setting4 != ""){ ?>
				  <img src="<?=base_url('uploads/'.$user->setting4.'');?>" style="max-width:100%;height:80px;">
				  <?php } ?>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Site Banner</label>
                    
					<input type="file" name="page_banner" class="form-control">
					
                  </div>
				  <?php if($user->setting4 != ""){ ?>
					<input type="checkbox" name="remove_img" value="1"> Remove Site Banner
                  <?php } ?>
				  </div>
				  <div class="col-md-4">
				  <?php if($user->setting5 != ""){ ?>
				  <img src="<?=base_url('uploads/'.$user->setting5.'');?>" style="max-width:100%;height:80px;">
				  <?php } ?>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Site Logo</label>
                    
					<input type="file" name="site_logo" class="form-control">
					
                  </div>
				  <?php if($user->setting5 != ""){ ?>
					<input type="checkbox" name="remove_img" value="2"> Remove Site Logo
                  <?php } ?>
				  </div>
				   <div class="col-md-4">
				   <?php if($user->setting6 != ""){ ?>
				   <img src="<?=base_url('uploads/'.$user->setting6.'');?>" style="max-width:100%;height:80px;">
				   <?php } ?>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Favicon</label>
                    <input type="file" class="form-control" name="favicon" value="<?=$user->setting6;?>" placeholder="setting6">
                  </div>
				  <?php if($user->setting6 != ""){ ?>
					<input type="checkbox" name="remove_img" value="3"> Remove Site Favicon
                  <?php } ?>
				  </div>
				  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Main Address</label>
                    <textarea rows="4" class="form-control" name="setting7"  placeholder="Main Address"><?=$user->setting7;?></textarea>
                  </div>
				  
				  <div class="row">
				  <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email1</label>
                     <input type="text" class="form-control" name="setting8" value="<?=$user->setting8;?>" placeholder="Email 1">
                  </div>
				  </div>
				  <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email 2</label>
                   <input type="text" class="form-control" name="setting9" value="<?=$user->setting9;?>" placeholder="Email 2">
                  </div>
				  </div>
				  </div>
				  
				  <div class="row">
				  <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Phone1 </label>
                     <input type="text" class="form-control" name="setting10" value="<?=$user->setting10;?>" placeholder="Phone 1">
                  </div>
				  </div>
				  <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Phone 2</label>
                   <input type="text" class="form-control" name="setting11" value="<?=$user->setting11;?>" placeholder="Phone 2">
                  </div>
				  </div>
				  <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Phone 3</label>
                   <input type="text" class="form-control" name="setting12" value="<?=$user->setting12;?>" placeholder="Phone 3">
                  </div>
				  </div>
				  </div>
				  
				  <?php } else if($page_type=='2') { ?>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Facebook URL</label>
                    <input type="text" class="form-control" name="setting1" value="<?=$user->setting1;?>" placeholder="Facebook URL">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Twitter URL</label>
                    <input type="text" class="form-control" name="setting2" value="<?=$user->setting2;?>" placeholder="Twitter URL">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">LinkedIn URL</label>
                    <input type="text" class="form-control" name="setting3" value="<?=$user->setting3;?>" placeholder="LinkedIn URL">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">YouTube URL</label>
                    <input type="text" class="form-control" name="setting4" value="<?=$user->setting4;?>" placeholder="YouTube URL">
                  </div>
				 <div class="form-group">
                    <label for="exampleInputEmail1">Instagram URL</label>
                    <input type="text" class="form-control" name="setting5" value="<?=$user->setting5;?>" placeholder="Instagram URL">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">WhatsApp URL</label>
                    <input type="text" class="form-control" name="setting6" value="<?=$user->setting6;?>" placeholder="WhatsApp URL">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Telegram URL</label>
                    <input type="text" class="form-control" name="setting7" value="<?=$user->setting7;?>" placeholder="Telegram URL">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Social 8</label>
                    <input type="text" class="form-control" name="setting8" value="<?=$user->setting8;?>" placeholder="Social 8">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Android APP</label>
                    <input type="text" class="form-control" name="setting9" value="<?=$user->setting9;?>" placeholder="Android APP">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">iOS App</label>
                    <input type="text" class="form-control" name="setting10" value="<?=$user->setting10;?>" placeholder="iOS App">
                  </div>
				  <?php } else if($page_type=='4') { ?>
				  <div class="form-group">
                    <label for="exampleInputPassword1">Home About</label>
                    <textarea  name="setting1" class="form-control ckeditor" id="myEditor"><?=$user->setting1;?></textarea>
                  </div>
				   <?php if($user->setting2 != ""){ ?>
				   <img src="<?=base_url('uploads/'.$user->setting2.'');?>" style="max-width:100%;height:80px;">
				   <?php } ?>
                  <div class="form-group">
                    <label for="exampleInputPassword1">About Image</label>
                    <input type="file" class="form-control" name="about_img" value="<?=$user->setting2;?>" placeholder="About Image">
                  </div>
				  <?php if($user->setting2 != ""){ ?>
					<input type="checkbox" name="remove_img" value="3"> Remove About Image
                  <?php } ?>
                 
<?php if($user->setting3!='') { ?>
<?=$user->setting3;?>
<?php } ?>
				 
				  <div class="form-group">
                    <label for="exampleInputEmail1">Google Maps (Embed Code)</label>
                    <textarea rows="4" class="form-control" name="setting3"  placeholder="Google Maps (Embed Code)"><?=$user->setting3;?></textarea>
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Custom HTML 1</label>
                    <textarea rows="4" class="form-control" name="setting4" placeholder="Custom HTML 1"><?=$user->setting4;?></textarea>
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Custom HTML 2</label>
                    <textarea rows="4" class="form-control" name="setting5" placeholder="Custom HTML 2"><?=$user->setting5;?></textarea>
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Custom HTML 3</label>
                    <textarea rows="4" class="form-control" name="setting6" placeholder="Custom HTML 3"><?=$user->setting6;?></textarea>
                  </div>
                  <hr />
                  <center><h3>Master Section</h3></center>
                  <hr />
				  <div class="row">
				  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Custom CSS</label>
                    <textarea rows="4" class="form-control" name="setting9"  placeholder="Custom CSS"><?=$user->setting9;?></textarea>
                  </div>
				  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Head Scripts</label>
                    <textarea rows="4" class="form-control" name="setting10"  placeholder="Head Scripts"><?=$user->setting10;?></textarea>
                  </div>
				  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Sidebar Scripts</label>
                    <textarea rows="4" class="form-control" name="setting11"  placeholder="Sidebar Scripts"><?=$user->setting11;?></textarea>
                  </div>
				  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Footer Scripts</label>
                    <textarea rows="4" class="form-control" name="setting12"  placeholder="Footer Scripts"><?=$user->setting12;?></textarea>
                  </div>
                  </div>
				  <?php } ?>
				   <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
		</form>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>