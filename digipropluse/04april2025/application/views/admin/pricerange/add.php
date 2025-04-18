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
                           <label>--Select Plan--</label>
                           <select class=" form-control" required name="plan_id">
                              <?php
                              $device = $this->db->get_where('plans',array('status'=>1))->result_object();
                              foreach ($device as $key => $data) 
                                 { ?>
                              <option value="<?=$data->id ?>"><?=$data->name ?></option>
                           <?php } ?>
                           </select>
                        </div>

                        <div class="col-6 form-group">
                           <label>--Select Device--</label>
                           <select class=" form-control" required name="device_id">
                              <?php
                              $device = $this->db->get_where('device',array('status'=>1))->result_object();
                              foreach ($device as $key => $data) 
                                 { ?>
                              <option value="<?=$data->id ?>"><?=$data->name ?></option>
                           <?php } ?>
                           </select>
                        </div>

                        <div class="col-4 form-group">
                           <label>Price From </label>
                           <input type="number" class="form-control" name="price_from" />
                        </div>

                        <div class="col-4 form-group">
                           <label>Price To </label>
                           <input type="number" class="form-control" name="price_to" />
                        </div>

                        <div class="col-4 form-group">
                           <label>Price </label>
                           <input type="number" class="form-control" name="price" />
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
   </body>
</html>