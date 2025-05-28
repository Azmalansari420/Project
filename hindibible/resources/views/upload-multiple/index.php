  <div class="drag-area"> 
    <div class="upload-icon">
      <i class="ri-file-upload-line"></i> 
    </div>
    <input type="file" accept="<?=$file_data['accept'] ?>" <?php if($file_data['multiple']==true)echo 'multiple'; ?> class="multiimagesuploadimages" data-target="multiimagesuploadimages<?=$file_data['position'] ?>" data-position="<?=$file_data['position'] ?>" data-cname="<?=$file_data['columna_name'] ?>" data-type="<?php if($file_data['multiple']==true)echo 'multiple';else echo'single'; ?>"  data-col="<?=$file_data['col'] ?>" data-alt_text="<?=$file_data['alt_text'] ?>">
  </div>
  <ul class="csulli row  <?php if($file_data['multiple']==true)echo 'ui-sortable'; ?>  " id="multiimagesuploadimages<?=$file_data['position'] ?>">
	<?php  
	if(!empty($row))
	{
		$images_array = array();
		$images = $row->$file_data['columna_name'];
		if(!empty($images))
		{
			$images_array = json_decode($images);
		}
		if(!empty($images_array))
		{
			foreach ($images_array as $key_image => $value_image)
			{
				$image_path = FCPATH.'upload/'.$value_image->image_path;
				if(file_exists($image_path))
				{
					$image = base64_encode(file_get_contents($image_path));
				
	?>
	  	<li class="<?=$file_data['col'] ?>">
		 <div class="csulli-iiner">
		    <button class="btn btn-sa-muted btn-sm mx-n3 multiimagesremovebtnimages" type="button" title="Delete image" style="float: right;">
		        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="currentColor">
		           <path d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6 c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4 C11.2,9.8,11.2,10.4,10.8,10.8z"></path>
		        </svg>
		     </button>
		    <img src="data:image/png;base64,<?=$image ?>" name="image_string<?=$file_data['columna_name'] ?>[]">
		    <input type="hidden" value="<?=$value_image->image_name ?>" name="image_name<?=$file_data['columna_name'] ?>[]">
		    <input type="hidden" value="data:image/png;base64,<?=$image ?>" name="image_string<?=$file_data['columna_name'] ?>[]">
		    <input type="text" name="image_alt_text<?=$file_data['columna_name'] ?>[]" value="<?=$value_image->image_alt_text ?>" class="form-control form-control-sm" style="display:none;">
		    </div>
		  </li>
	<?php } } } } ?>
  </ul>