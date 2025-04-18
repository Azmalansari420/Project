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

                        <div class="col-6 form-group ">
                           <label>Select Category</label>
                           <select class="selectpicker  form-control" required name="cat_id" data-style="btn-default" data-live-search="true" id="category">
                              <option>Select Category</option>
                              <?php
                              $cat = $this->db->get_where('categories',array('status'=>1))->result_object();
                              foreach($cat as $data)
                                 { ?>
                              <option <?php if($EDITDATA[0]->cat_id==$data->id) echo "selected"; ?> value="<?=$data->id ?>"><?=$data->name ?></option>
                           <?php } ?>
                           </select>
                        </div>

                        <div class="col-6 form-group ">
                           <label>Select Sub Category</label>
                           <select class="form-control" required name="sub_cat_id" data-style="btn-default" data-live-search="true" id="sub-category">
                              <?php
                              $cat = $this->db->get_where('sub_categories',array('status'=>1))->result_object();
                              foreach($cat as $data)
                                 { ?>
                              <option <?php if($EDITDATA[0]->sub_cat_id==$data->id) echo "selected"; ?> value="<?=$data->id ?>"><?=$data->name ?></option>
                           <?php } ?>
                           </select>
                        </div>


                        <div class="col-6 form-group">
                           <label>Name </label>
                           <input type="text" class="form-control" name="name" value="<?=$EDITDATA[0]->name ?>" required>
                        </div>

                        <div class="col-6 form-group">
                           <label>Brand Name </label>
                           <input type="text" class="form-control" name="brand_name"  value="<?=$EDITDATA[0]->brand_name ?>" />
                        </div>

                        <div class="col-6 form-group">
                           <label>Material </label>
                           <input type="text" class="form-control" name="material"  value="<?=$EDITDATA[0]->material ?>" />
                        </div>

                        <div class="col-6 form-group">
                           <label>Cultivation Type </label>
                           <input type="text" class="form-control" name="cultivation_type"  value="<?=$EDITDATA[0]->cultivation_type ?>" />
                        </div>

                        <div class="col-6 form-group">
                           <label>Color </label>
                           <input type="text" class="form-control" name="color"  value="<?=$EDITDATA[0]->color ?>" />
                        </div>

                        <div class="col-6 form-group">
                           <label>Application </label>
                           <input type="text" class="form-control" name="application"  value="<?=$EDITDATA[0]->application ?>" />
                        </div>

                        <div class="col-6 form-group">
                           <label>Bussiness Type </label>
                           <input type="text" class="form-control" name="bussiness_type"  value="<?=$EDITDATA[0]->bussiness_type ?>" />
                        </div>


                        <div class="col-6 form-group">
                           <label>Amount </label>
                           <input type="text" class="form-control" name="amount"  value="<?=$EDITDATA[0]->amount ?>" />
                        </div>

                        <div class="col-6 form-group">
                           <label>MOQ </label>
                           <input type="text" class="form-control" name="moq"  value="<?=$EDITDATA[0]->moq ?>" />
                        </div>

                        <div class="col-6 form-group">
                           <label>Prefered Buyer </label>
                           <input type="text" class="form-control" name="prefered_buyer"  value="<?=$EDITDATA[0]->prefered_buyer ?>" />
                        </div>




                        <div class="col-12 form-group">
                           <label>Product Details </label>
                           <textarea name="product_details" class="summernote form-control"><?=$EDITDATA[0]->product_details ?></textarea>
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

                        <div class="col-12 form-group ">
                           <label>Featured Products</label>
                           <select class=" form-control" required name="featured_pro">
                              <option value="1"  <?php if($EDITDATA[0]->featured_pro==1)echo 'selected'; ?>>Yes</option>
                              <option value="2" <?php if($EDITDATA[0]->featured_pro==2)echo 'selected'; ?>>No</option>
                           </select>
                        </div>


                        <div class="col-12 form-group ">
                           <label>Hot Product</label>
                           <select class=" form-control" required name="hot_pro">
                              <option value="1"  <?php if($EDITDATA[0]->hot_pro==1)echo 'selected'; ?>>Yes</option>
                              <option value="2" <?php if($EDITDATA[0]->hot_pro==2)echo 'selected'; ?>>No</option>
                           </select>
                        </div>


                        <div class="col-12 form-group ">
                           <label>Select Status</label>
                           <select class=" form-control" required name="status">
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



      <script>

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

          $(document).on("change", "#category",(function(e) {
            login_distibuter();
          }));

          function login_distibuter()
          {
              var cat_id = $("#category").val();

              var form = new FormData();
              form.append("cat_id", cat_id);
             
              var settings = {
                "url": "<?=base_url() ?>admin_con/product/sub_categ",
                "method": "POST",
                "dataType": "json",
                "timeout": 0,
                "processData": false,
                "mimeType": "multipart/form-data",
                "contentType": false,
                "data": form
              };

              $.ajax(settings).done(function (response) 
              {
                console.log(response.data);
                $("#sub-category").html(response.data);
                
              });
          }

      </script>



   </body>
</html>