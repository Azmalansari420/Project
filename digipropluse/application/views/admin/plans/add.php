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
                        <div class="col-6 form-group">
                           <label>Name </label>
                           <input type="text" class="form-control" name="name" />
                        </div>
                        <div class="col-6 form-group d-none">
                           <label>Percentage </label>
                           <input type="text" class="form-control" name="percentage" />
                        </div>


                        <div class="col-12">
                           <h1 class="page-header add-header">Add Plans Points </h1>
                        </div>

                        <div class="row card-body" id="content-area">
                             <div class="col-12 form-group d-flex align-items-center">
                                 <label>Add Content</label>
                                 <input type="text" class="form-control" name="get_line[]" />
                                 <button type="button" class="btn btn-danger btn-sm ml-2 remove-field">Remove</button>
                             </div>                             
                         </div>

                         <div class="col-12 form-group">
                            <button type="button" id="add-more" class="btn btn-primary mt-2">Add More</button>
                         </div>
                        


                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="card m-b-15">
                     <div class="row card-body">
                      
                        <div class="col-12 form-group m-b-0">
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
    $(document).ready(function () {
        $("#add-more").click(function () {
            let newField = `<div class="col-12 form-group d-flex align-items-center">
                              <label>Add More</label>
                               <input type="text" class="form-control" name="get_line[]" />
                               <button type="button" class="btn btn-danger btn-sm ml-2 remove-field">Remove</button>
                            </div>`;
            $("#content-area").append(newField);
        });

        // Remove input field on click
        $(document).on("click", ".remove-field", function () {
            $(this).closest(".form-group").remove();
        });
    });
</script>







   </body>
</html>