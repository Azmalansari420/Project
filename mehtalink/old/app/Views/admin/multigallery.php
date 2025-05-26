<style>
#drop_file_zone1 {
    background-color: #EEE;
    border: #999 5px dashed;
    width: 100%;
    height: 200px;
    padding: 8px;
    font-size: 18px;
}
#drag_upload_file1 {
  width:100%;
  margin:0 auto;
}
#drag_upload_file1 p {
  text-align: center;
}
#drag_upload_file1 #selectfile {
  display: none;
}
</style>
<?php 
$uri=current_url(true);
$pro_id=$uri->getSegment(4);
$prop=getdatasingle('tbl_pages',array('id'=>$pro_id));
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Add images for <span style="color:blue"><?php echo $prop->title;?></span></h1>
            <hr />
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
<section class="content">
	<div class="container">
        <div class="row">
			<div class="col-md-12">
				<div id="drop_file_zone1" ondrop="upload_file1(event)" ondragover="return false">
				<div id="drag_upload_file1">
					<p>Drop file here</p> <p>or</p> <p><input type="button" value="Select File" onclick="file_explorer1();"></p> 
					<input type="file" id="selectfile">
				</div>
			</div>
		</div>
	</div>
</section>
<section class="list_contents" style="padding:20px 0;">
	<div class="container">
		<div class="row">
			<?php if($user) {$grid_count=1; $div_count=3; foreach($user as $suvalues) { ?>
			<div class="col-md-4" style="margin:10px 0;">
				<div class="row">
					<div class="col-md-12">
						<center><img id="imgset" src="<?=base_url('uploads/'.$suvalues->file.'');?>" style="max-width: 100%; max-height: 150px;"></center>
					</div>
				</div>
				<div class="row">
					<div class="col-md-1"><input type="checkbox" class="form-control" name="remove_page_banner"></div>
					<div class="col-md-9">
						<form class="gallery">
							 <input type="file" class="form-control" name="image">
							 <input type="hidden" value="<?=$suvalues->id;?>" name="proid">
							 <input type="hidden" value="<?=$prop->id;?>" name="productid">
						 </form>
					</div>
					<div class="col-md-2">
						<button type="button" class="form-control btn btn-danger btn-xs" onclick="deletemulimage1(<?=$suvalues->id;?>)">X</button>
					</div>
				</div>
			</div>
			<?php if($grid_count%$div_count==0){echo "<div class='clearfix'></div>";} $grid_count++;} } ?>
		</div>
	</div>
</section>
</div>