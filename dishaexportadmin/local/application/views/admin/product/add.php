<!DOCTYPE html>
<html lang="en">
<title>Add <?=$page_title ?></title>
   <?php $this->load->view('admin/include/allcss') ?>
   <body>
      <div id="app" class="app app-header-fixed app-sidebar-fixed">
         <?php $this->load->view('admin/include/topbar') ?>
         <?php $this->load->view('admin/include/sidebar') ?>
         <div id="content" class="app-content">
            <h1 class="page-header add-header">Add <?=$page_title ?> </h1>
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
                              <option value="<?=$data->id ?>"><?=$data->name ?></option>
                           <?php } ?>
                           </select>
                        </div>

                        <div class="col-6 form-group ">
                           <label>Select Sub Category</label>
                           <select class="form-control" required name="sub_cat_id" data-style="btn-default" data-live-search="true" id="sub-category">
                              
                           </select>
                        </div>
                        
                        <div class="col-6 form-group">
                           <label>Name </label>
                           <input type="text" class="form-control" name="name" required />
                        </div>

                        <div class="col-6 form-group">
                           <label>Brand Name </label>
                           <input type="text" class="form-control" name="brand_name" />
                        </div>

                        <div class="col-6 form-group">
                           <label>Material </label>
                           <input type="text" class="form-control" name="material" />
                        </div>

                        <div class="col-6 form-group">
                           <label>Cultivation Type </label>
                           <input type="text" class="form-control" name="cultivation_type" />
                        </div>

                        <div class="col-6 form-group">
                           <label>Color </label>
                           <input type="text" class="form-control" name="color" />
                        </div>

                        <div class="col-6 form-group">
                           <label>Application </label>
                           <input type="text" class="form-control" name="application" />
                        </div>

                        <div class="col-6 form-group">
                           <label>Bussiness Type </label>
                           <input type="text" class="form-control" name="bussiness_type" />
                        </div>


                        <div class="col-6 form-group">
                           <label>Amount </label>
                           <input type="text" class="form-control" name="amount" />
                        </div>

                        <div class="col-6 form-group">
                           <label>MOQ </label>
                           <input type="text" class="form-control" name="moq" />
                        </div>

                        <div class="col-6 form-group">
                           <label>Prefered Buyer </label>
                           <input type="text" class="form-control" name="prefered_buyer" />
                        </div>


                        <div class="col-12 form-group">
                           <label>Product Details </label>
                           <textarea name="product_details" class="summernote form-control"></textarea>
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
                           <img id="image-preview" src="" alt="Image Preview" width="100px" style="display:none;">
                        </div>

                        <div class="col-12 form-group">
                           <label>Click to Upload Multiple Image</label>
                           <input type="file" id="multi-image-input" multiple class="form-control mb-2" name="multiple_image_json[]">
                           <div id="multi-image-previews" style="display:flex;overflow: auto;"></div>
                        </div>

                        <div class="col-12 form-group ">
                           <label>Featured Products</label>
                           <select class=" form-control" required name="featured_pro">
                              <option value="1"  >Yes</option>
                              <option value="2" >No</option>
                           </select>
                        </div>


                        <div class="col-12 form-group ">
                           <label>Hot Product</label>
                           <select class=" form-control" required name="hot_pro">
                              <option value="1"  >Yes</option>
                              <option value="2" >No</option>
                           </select>
                        </div>


                        <div class="col-12 form-group ">
                           <label>Select Status</label>
                           <select class=" form-control" required name="status">
                              <option value="1" selected>Show</option>
                              <option value="0">Hide</option>
                           </select>
                        </div>
                        <div class="col-12 form-group mt-4">
                           <button type="submit" name="submit" class="btn btn-purple">Add <?=$page_title ?></button>
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