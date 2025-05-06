<!DOCTYPE html>
<html lang="en">
   <title>Update <?=$page_title ?></title>
   <?php $this->load->view('admin/include/allcss') ?>
   <body>
      <div id="app" class="app app-header-fixed app-sidebar-fixed">
         <?php $this->load->view('admin/include/topbar') ?>
         <?php $this->load->view('admin/include/sidebar') ?>
         <div id="content" class="app-content">
            <h1 class="page-header add-header">Update <?=$page_title ?> </h1>
            <form class="row" method="post" enctype="multipart/form-data" action="#">
               <div class="col-lg-8">
                  <div class="card m-b-15">
                     <div class="row card-body">
                        <div class="col-12 form-group">
                           <label>Name </label>
                           <input type="text" class="form-control" name="name" value="<?=$EDITDATA[0]->name ?>">
                        </div>

                        <div class="col-12 form-group">
                           <label>Content </label>
                           <textarea name="content" class="summernote form-control"><?=$EDITDATA[0]->content ?></textarea>
                        </div>

                        
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="card m-b-15">
                     <div class="row card-body">
                        <div class="col-12 form-group">
                           <label>Click to Upload Image</label>
                           <input type="file" id="image-input" class="form-control" name="image">
                           <input  type="hidden" class="form-control" name="oldimage" value="<?php echo $EDITDATA[0]->image; ?>">
                           <?php
                           if(!empty($EDITDATA[0]->image))
                              { ?>
                           <img id="image-preview" src="<?php echo base_url($upload_path); ?><?php echo $EDITDATA[0]->image; ?>" alt="Image Preview" width="100px" >
                        <?php } ?>
                        </div>

                        <div class="col-12 form-group">
                          <label>Click to Upload Multiple Image</label>
                          <input type="file" id="multi-image-input-2" multiple class="form-control mb-2" name="multiple_image_json[]">
                          <div id="multi-image-previews" style="display:flex;overflow: auto;">
                            <?php 
                           if(!empty($EDITDATA[0]->multiple_image_json))
                           {
                            $allimage = json_decode($EDITDATA[0]->multiple_image_json); 
                            foreach ($allimage as $key => $value) 
                              { 
                              ?>
                              <div class="image-preview old-image" style="display: grid; text-align: center;">
                                 <input type="hidden" name="oldmultiple_image_json[]" value="<?php echo $value; ?>">
                                 <img src="<?php echo base_url($upload_path); ?><?php echo $value; ?>" alt="Image Preview" width="75px">
                                 <span class="remove-image">Remove</span>
                              </div>
                            <?php } } ?>
                            <div id="new-image-previews" style="display:contents;"></div>
                          </div>
                        </div>


                        <div class="col-12 form-group">
                           <label>Show Home</label>
                           <select class="selectpicker form-control" required name="show_home" data-style="btn-default" data-live-search="true">
                              <option value="1"  <?php if($EDITDATA[0]->show_home==1)echo 'selected'; ?>>Show</option>
                              <option value="0" <?php if($EDITDATA[0]->show_home==0)echo 'selected'; ?>>Hide</option>
                           </select>
                        </div>

                        <div class="col-12 form-group">
                           <label>Select Status</label>
                           <select class="selectpicker form-control" required name="status" data-style="btn-default" data-live-search="true">
                              <option value="1"  <?php if($EDITDATA[0]->status==1)echo 'selected'; ?>>Show</option>
                              <option value="0" <?php if($EDITDATA[0]->status==0)echo 'selected'; ?>>Hide</option>
                           </select>
                        </div>


                        <div class="col-12 form-group mt-4">
                           <button type="submit" name="submit" class="btn btn-purple">Update <?=$page_title ?></button>
                        </div>
                     </div>
                  </div>
               </div>
            </form>
         </div>
         <a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
      </div>
      <?php $this->load->view('admin/include/theams') ?>
      <?php $this->load->view('admin/include/allscript') ?>
      <script type="text/javascript">
          $(document).on('click', '.remove-image', function() {
       $(this).parent('.image-preview').remove();
     });

     $('#multi-image-input-2').on('change', function() {
     var files = $(this)[0].files;
     var newImagePreviews = $('#new-image-previews');
     newImagePreviews.html('');
     $.each(files, function(i, file) {
       var reader = new FileReader();
       reader.onload = function(e) {
         newImagePreviews.append('<div class="image-preview new-image" style="display: grid; text-align: center;"><img src="' + e.target.result + '" alt="Image Preview" width="75px"><span class="remove-image">Remove</span></div>');
       };
       reader.readAsDataURL(file);
     });
   });

      </script>
   </body>
</html>