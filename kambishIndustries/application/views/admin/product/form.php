<!DOCTYPE html>
<html lang="en">
<title><?=$page_title ?></title>
   <?php $this->load->view('admin/include/allcss') ?>
   <body>
      <div id="app" class="app app-header-fixed app-sidebar-fixed">
         <?php $this->load->view('admin/include/topbar') ?>
         <?php $this->load->view('admin/include/sidebar') ?>
         <div id="content" class="app-content">
            <h1 class="page-header add-header"><?=$page_title ?> </h1>
            <form class="row" method="post" enctype="multipart/form-data" action="<?=base_url($formURL) ?>">

               <input type="hidden" name="id" value="<?=@$EDITDATA->id ?>">

               <div class="col-lg-8">
                  <div class="card m-b-15">
                     <div class="row card-body">

                        <div class="col-6 form-group">
                           <label>Order Line </label>
                           <input type="text" class="form-control" name="orderline" value="<?=@$EDITDATA->orderline ?>" />
                        </div>
                        
                        <div class="col-6 form-group">
                           <label>Name </label>
                           <input type="text" class="form-control" name="name" value="<?=@$EDITDATA->name ?>" />
                        </div>
                        
                        <div class="col-12 form-group">
                           <label>Content </label>
                           <textarea name="content" id="editor" class="form-control"><?=@$EDITDATA->content ?></textarea>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="card m-b-15">
                     <div class="row card-body">
                        <div class="col-12 form-group">
                           <label>Click to Upload Main Image (295x354 px)</label>
                           <input type="file" id="image-input" class="form-control" name="image">

                           <!-- Single Image Preview -->
                           <img id="image-preview" 
                                src="<?= !empty($EDITDATA->image) ? base_url($upload_path . $EDITDATA->image) : '' ?>" 
                                alt="Image Preview" 
                                width="100px" 
                                style="<?= !empty($EDITDATA->image) ? '' : 'display:none;' ?>">

                           <!-- Hidden input to keep old image -->
                           <input type="hidden" class="form-control" name="oldimage" value="<?= @$EDITDATA->image; ?>">
                        </div>


                        <div class="col-12 form-group">
                            <label>Click to Upload Multiple Image (295x354 px)</label>
                            <input type="file" id="multi-image-input" multiple class="form-control mb-2" name="multiple_image_json[]">

                            <div id="multi-image-previews" style="display:flex; overflow: auto;">
                                <?php 
                                if (!empty($EDITDATA->multiple_image_json)) {
                                    $allimage = json_decode($EDITDATA->multiple_image_json); 
                                    foreach ($allimage as $value) { ?>
                                        <div class="image-preview old-image" style="display: grid; text-align: center;">
                                            <input type="hidden" name="oldmultiple_image_json[]" value="<?= $value ?>">
                                            <img src="<?= base_url($upload_path . $value) ?>" alt="Image Preview" width="75px">
                                            <span class="remove-image">Remove</span>
                                        </div>
                                <?php } } ?>
                                <div id="new-image-previews" style="display:contents;"></div>
                            </div>
                        </div>

                        <div class="col-12 form-group ">
                           <label>Select Status</label>
                           <select class="selectpicker  form-control" required name="status" data-style="btn-default" data-live-search="true" >
                              <option value="1"  <?= (isset($EDITDATA->status) && $EDITDATA->status == '1') ? 'selected' : '' ?>>Show</option>
                              <option value="0" <?= (isset($EDITDATA->status) && $EDITDATA->status == '0') ? 'selected' : '' ?>>Hide</option>
                           </select>
                        </div>
                        <div class="col-12 form-group mt-4">
                           <button type="submit" name="submit" class="btn btn-purple"><?=$page_title ?></button>
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

      <script>
  CKEDITOR.replace( 'editor' );
</script>
   </body>
</html>