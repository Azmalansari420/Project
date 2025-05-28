<li class="mt-2 dz-processing dz-image-preview dz-success dz-complete" id="">
  <input type="hidden" value="<?=$i ?>" name="imagepositions[]">
  <input type="hidden" value="1" name="imagedelete[]" id="mutiimage<?=$i ?>">
  <input type="hidden" value="<?=$value->image ?>" name="images_temp_old_image[]">
  <input type="hidden" value="<?=$value->image_name ?>" name="images_temp_old_image_name[]">
  <input type="hidden" value="<?=$value->file_size ?>" name="file_size[]">
    <div class="border rounded">
      <div class="d-flex p-2">
         <div class="flex-shrink-0 me-3">                                                   
            <div class="avatar-sm bg-light rounded">
               <img data-dz-thumbnail="" class="img-fluid rounded d-block" src="<?=base_url($upload_path.$value->image) ?>" alt="1.png" style="width: 100%;height: 100%;">
            </div>                                                
         </div>
         <div class="flex-grow-1">
            <div class="pt-1">   
               <h5 class="fs-14 mb-1" data-dz-name=""><?=$value->image_name ?></h5> 
               <p class="fs-13 text-muted mb-0" data-dz-size=""><strong><?=file_size_convert($value->file_size) ?></strong> KB</p>
               <strong class="error text-danger" data-dz-errormessage=""></strong> 
            </div>
         </div>
         <div class="flex-shrink-0 ms-3">
            <button type="button" data-id="<?=$i ?>" class="btn btn-sm btn-danger cremovemulti">Delete</button>
         </div>
      </div>
    </div>                                       
  </li>