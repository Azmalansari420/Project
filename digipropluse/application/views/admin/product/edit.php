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
                        



                         <div class="col-12">
                           <h1 class="page-header add-header">Add Plans Percentage </h1>
                        </div>

                        <div class="row card-body" id="content-area">
                           <?php
                           if(!empty($EDITDATA[0]->plancontent))
                              {
                                 $getallcontent = json_decode($EDITDATA[0]->plancontent);
                                 foreach ($getallcontent as $key => $value) 
                                 {

                               ?>
                           <div class="col-4 form-group m-b-0">
                              <label>Select Plan</label>
                              <select class=" form-control" required name="plan_id[]">
                                 <?php
                                 $plan = $this->db->get_where('plans',array('status'=>1))->result_object();
                                 foreach($plan as $data)
                                    { ?>
                                 <option <?php if($data->id==$value->plan_id) echo "selected"; ?> value="<?=$data->id ?>"><?=$data->name ?></option>
                              <?php } ?>
                              </select>
                           </div>

                          <div class="col-4 form-group ">
                              <label>Percentage</label>
                              <input type="text" class="form-control" name="plan_percentage[]" value="<?=$value->plan_percentage ?>"/>
                          </div>                              

                           <div class="col-4 form-group ">                    
                              <button type="button" class="btn btn-danger mt-4 btn-sm ml-2 remove-field">Remove</button>
                           </div> 
                           <?php } } ?>                               
                         </div>

                         <div class="col-12 form-group">
                            <button type="button" id="add-more" class="btn btn-primary mt-2">Add More</button>
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
                      
                        <div class="col-12 form-group m-b-0">
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
    $(document).ready(function () {
        $("#add-more").click(function () {
            let newField = `<div class="col-4 form-group m-b-0">
                              <label>Select Plan</label>
                              <select class=" form-control" required name="plan_id[]">
                                 <?php
                                 $plan = $this->db->get_where('plans',array('status'=>1))->result_object();
                                 foreach($plan as $data)
                                    { ?>
                                 <option value="<?=$data->id ?>"><?=$data->name ?></option>
                              <?php } ?>
                              </select>
                           </div>

                          <div class="col-4 form-group ">
                              <label>Percentage</label>
                              <input type="text" class="form-control" name="plan_percentage[]" />
                          </div> 
                             

                              <div class="col-4 form-group ">                    
                                 <button type="button" class="btn btn-danger mt-4 btn-sm ml-2 remove-field">Remove</button>
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