<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Edit <?php echo $page_title; ?></title>
      <?php $this->load->view('admin/include/allcss') ?>

   </head>
   <body>
       <?php echo loder; ?> 
      <div id="app" class="app app-header-fixed app-sidebar-fixed ">


          <?php $this->load->view('admin/include/header') ?>
          <?php $this->load->view('admin/include/sidebar') ?>


         
         <div id="content" class="app-content">
            <div class="d-flex align-items-center justify-content-between mb-3">
               <div>
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>">Home</a></li>
                     <li class="breadcrumb-item active"><i class="fa fa-arrow-back"></i> Edit <?php echo $page_title; ?></li>
                  </ol>
                  <h1 class="page-header mb-0">Edit <?php echo $page_title; ?></h1>
               </div>
                <div>
                  <button onclick="history.back();" class="btn btn-primary">Back</button>
               </div>
            </div>



               <form  class="row" method="post" enctype="multipart/form-data" action="#">
                  <div class="col-lg-12">
                     <div class="card border-0 mb-4">
                        <div class="card-header h6 mb-0 bg-none p-3">
                           <i class="fa fa-fa fa-lg fa-fw text-dark text-opacity-50 me-1"></i> Content
                        </div>
                        <div class="card-body">
                           <div class="row">
                              <div class="col-lg-4 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Date/Time</label>
                                    <input type="text" class="form-control" value="<?php echo date('d M, Y h:i A',strtotime($EDITDATA[0]->addeddate)); ?>" disabled>
                                 </div>
                              </div>

                              <?php
                              $vendor = $this->crud->selectDataByMultipleWhere('tbl_admin',array('id'=>$EDITDATA[0]->vendor_id,));
                              ?>
                              <div class="col-lg-4 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Vendor Name</label>
                                    <input type="text" class="form-control"   value="<?php if(!empty($vendor)) echo $vendor[0]->first_name; ?>" disabled>
                                 </div>
                              </div>

                              <div class="col-lg-4 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Subject</label>
                                    <input type="text" class="form-control"   value="<?php echo $EDITDATA[0]->subject; ?>" disabled>
                                 </div>
                              </div>

                              <div class="col-lg-12 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Content</label>
                                    <textarea class="form-control" name="content" disabled id="editor"  placeholder="Enter text ..." rows="12"><?php echo $EDITDATA[0]->content; ?></textarea>
                                 </div>
                              </div>

                              <div class="col-lg-12 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Reply By Admin</label>
                                    <textarea class="form-control" name="admin_reply" id="editor1"  placeholder="Enter text ..." rows="12"><?php echo $EDITDATA[0]->admin_reply; ?></textarea>
                                 </div>
                              </div>

                              <div class="col-lg-12 mb-3">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Status</label>
                                    <select class="form-select" name="status">
                                       <option value="1"  <?php if($EDITDATA[0]->status==1)echo 'selected'; ?>>Approved</option>
                                       <option value="0" <?php if($EDITDATA[0]->status==0)echo 'selected'; ?>>Under Review</option>
                                       <option value="2" <?php if($EDITDATA[0]->status==2)echo 'selected'; ?>>Reject</option>
                                    </select>
                                 </div>
                              </div>

                              <div class="col-lg-12 mb-4 text-center">
                                 <div class="mb-lg-0 mb-3">
                                    <button class="btn btn-primary d-block" type="submit" name="submit">
                                       Update <?php echo $page_title; ?>
                                   </button>
                                 </div>
                              </div>

                           </div>
                        </div>
                     </div>
                  </div>

         
               </form>
           
         </div>
       
      </div>



   <?php $this->load->view('admin/include/footer') ?>
<script>
   CKEDITOR.replace('editor');
   CKEDITOR.replace('editor1');
</script>
   </body>
</html>