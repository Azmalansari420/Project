<?php 
include('include/header.php'); ?>

         <?php include('include/sidebar.php'); ?>

         <div class="page-wrapper">
            <div class="content container-fluid">
               <div class="page-header">
                  <div class="row">
                     <div class="col-sm-12">
                        <h3 class="page-title">Update <?php echo $page_title; ?></h3>
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                           <li class="breadcrumb-item active">Update <?php echo $page_title; ?></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-12">
                     <div class="card">
                        <div class="card-body custom-edit-service">
                           <form method="post" enctype="multipart/form-data" autocomplete="off" action="">
                              <div class="service-fields mb-3">
                                 <div class="row">

                                    <div class="col-lg-6">
                                       <div class="mb-3">
                                          <label class="mb-2">User Name<span class="text-danger">*</span></label>
                                          <input class="form-control" type="text" name="username" id="username" value="<?=$ambulance->username ?>" required="">
                                       </div>
                                    </div>
                                    <div class="col-lg-6">
                                       <div class="mb-3">
                                          <label class="mb-2">Mobile<span class="text-danger">*</span></label>
                                          <input class="form-control" type="text" name="mobile" id="mobile" value="<?=$ambulance->mobile ?>" required="">
                                       </div>
                                    </div>
                                    <div class="col-lg-6">
                                       <div class="mb-3">
                                          <label class="mb-2">Email<span class="text-danger">*</span></label>
                                          <input class="form-control" type="text" name="email" id="mobile" value="<?=$ambulance->email ?>" required="">
                                       </div>
                                    </div>

                                    <div class="col-lg-6">
                                       <div class="mb-3">
                                          <label class="mb-2">Password<span class="text-danger">*</span></label>
                                          <input class="form-control" type="text" name="password" id="password" value="<?=$ambulance->password ?>" required="">
                                       </div>
                                    </div>
                                    
                                    
                                    <div class="col-lg-12">
                                       <div class="mb-3">
                                          <label class="mb-2">Address<span class="text-danger">*</span></label>
                                          <input class="form-control" type="text" name="address" id="address" value="<?=$ambulance->address ?>" >
                                       </div>
                                    </div>


                                    <div class="col-lg-4">
                                       <div class="mb-3">
                                          <label class="mb-2">Bank Name<span class="text-danger">*</span></label>
                                          <input class="form-control" type="text" name="bankname" id="password" value="<?=$ambulance->bankname ?>" required="">
                                       </div>
                                    </div>
                                    <div class="col-lg-4">
                                       <div class="mb-3">
                                          <label class="mb-2">Bank IFSC Code<span class="text-danger">*</span></label>
                                          <input class="form-control" type="text" name="bankifcs" id="password" value="<?=$ambulance->bankifcs ?>" required="">
                                       </div>
                                    </div>
                                    <div class="col-lg-4">
                                       <div class="mb-3">
                                          <label class="mb-2">Bank A/C<span class="text-danger">*</span></label>
                                          <input class="form-control" type="text" name="bankac" id="password" value="<?=$ambulance->bankac ?>" required="">
                                       </div>
                                    </div>
                                    
                                    

                                    <div class="col-lg-4">
                                       <div class="mb-3">
                                          <label class="mb-2">Image<span class="text-danger">*</span></label>
                                          <input  type="hidden" class="form-control" name="oldimage" value="<?php echo $ambulance->image; ?>">
                                          <input class="form-control" type="file" name="image" id="log44o" value="<?=$ambulance->image ?>" >
                                          <br>
                                          <img src="<?php echo base_url($upload_path); ?><?php echo $EDITDATA[0]->image; ?>" width="200">
                                       </div>
                                    </div>



                                 </div>
                              </div>
                              
                                                          
                              <div class="submit-section">
                                 <button class="btn btn-primary submit-btn" type="submit" name="submit" value="submit">Submit</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      
<?php include('include/footer.php'); ?> 
<script>
   CKEDITOR.replace('editor');
   CKEDITOR.replace('editor2');
</script>