<div class="row" style="float: left;">
	<?php 
	//echo "<pre>";
	//print_r($user);
	if($user) { foreach($user as $suvalues) { ?>
	<div class="col-md-4">	
	<img id="imgset" src="<?=base_url('uploads/'.$suvalues->image.'');?>" style="width: 100%;
    height: 102px;">
	<form class="submitForm">
	 <input type="file" class="custom-file-input" name="image">
	 <input type="hidden" value="<?=$suvalues->id;?>" name="proid">
	 <input type="hidden" value="<?=$productid->id;?>" name="productid">
	</form>
	<button class="text1">Delete</button>
	</div>
	<?php } } ?>
	</div>