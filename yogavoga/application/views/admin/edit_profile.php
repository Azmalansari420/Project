<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>User Details</title>
     <?php $this->load->view('admin/include/css'); ?>
      
  </head>
  <body class="  ">
    <!-- loader Start -->
    <?php echo loder; ?> 
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
     <?php $this->load->view('admin/include/sidebar'); ?>
     <?php $this->load->view('admin/include/topbar'); ?>

       

      <div class="content-page">
         <div class="container-fluid">
            <div class="row">

               <div class="col-lg-12">
                  <div class="iq-edit-list-data">
                     <div class="tab-content">
                        <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                           <div class="card">
                              <div class="card-header d-flex justify-content-between">
                                 <div class="header-title">
                                    <h4 class="card-title">User Information</h4>
                                 </div>
                              </div>
                              <div class="card-body">
                                 <form method="post" enctype="multipart/form-data">
                                    <div class="form-group row align-items-center">
                                       <div class="col-md-12">
                                          <div class="profile-img-edit">
                                             <div class="crm-profile-img-edit">
                                             	<label  style="width:150px;position: relative;border: 1px solid black;text-align: center;height: 110px;">
   	                                             <img id="blah" class="crm-profile-pic rounded-circle avatar-100 sd" src="<?php echo base_url($upload_path); ?><?php echo $EDITDATA[0]->image; ?>" alt="profile-pic">
   	                                             <input  type="hidden" class="form-control" name="oldimage" value="<?php echo $EDITDATA[0]->image; ?>">
               												<input style="display: none;" type="file" class="form-control" name="image"  id="imgInp">
               											</label>
                                             </div>                                          
                                          </div>
                                       </div>
                                    </div>
                                    
                                    <div class=" row align-items-center">
                                       <div class="form-group col-sm-6">
                                          <label for="fname">First Name:</label>
                                          <input type="text" class="form-control" id="fname" name="first_name" value="<?php echo $EDITDATA[0]->first_name; ?>">
                                       </div>
                                       <div class="form-group col-sm-6">
                                          <label for="lname">Last Name:</label>
                                          <input type="text" class="form-control" id="lname" name="last_name" value="<?php echo $EDITDATA[0]->last_name; ?>">
                                       </div>

                                       <div class="form-group col-sm-6">
                                          <label for="uname">User Name:</label>
                                          <input type="text" class="form-control" id="uname" name="username" value="<?php echo $EDITDATA[0]->username; ?>">
                                       </div>

   	                                <div class="form-group col-sm-6">
   	                                    <label for="npass">New Password:</label>
   	                                    <input type="text" class="form-control" id="npass" name="password" value="<?php echo $EDITDATA[0]->password; ?>">
   	                                 </div>

   	                                <div class="form-group col-sm-6">
                                         <label for="cno">Contact Number:</label>
                                         <input type="text" class="form-control" id="cno" name="mobile" value="<?php echo $EDITDATA[0]->mobile; ?>">
                                       </div>
                                       
                                       <div class="form-group col-sm-6">
                                         <label for="email">Email:</label>
                                         <input type="text" class="form-control" id="email" name="email" value="<?php echo $EDITDATA[0]->email; ?>">
                                       </div>


                                       <div class="form-group col-sm-6">
                                          <label for="grnder">Gender:</label>
                                          <input type="text" class="form-control" id="grnder" name="gender" value="<?php echo $EDITDATA[0]->gender; ?>">
                                       </div>

                                       
                                       <div class="form-group col-sm-6">
                                          <label for="dob">Date Of Birth:</label>
                                          <input type="text" class="form-control" id="dob" name="dob" value="<?php echo $EDITDATA[0]->dob; ?>">
                                       </div>

                                       <div class="form-group col-sm-6">
                                          <label for="ms">Marital Status:</label>
                                          <input type="text" class="form-control" id="ms" name="martial" value="<?php echo $EDITDATA[0]->martial; ?>">
                                       </div>

                                       <div class="form-group col-sm-6">
                                          <label for="age">Age:</label>
                                          <input type="text" class="form-control" id="age" name="age" value="<?php echo $EDITDATA[0]->age; ?>">
                                       </div>

                                       <div class="form-group col-sm-6">
                                          <label for="country">Country:</label>
                                          <input type="text" class="form-control" id="country" name="country" value="<?php echo $EDITDATA
                                          [0]->country; ?>">
                                       </div>

                                       <div class="form-group col-sm-6">
                                          <label for="state">State:</label>
                                          <input type="text" class="form-control" id="state" name="state" value="<?php echo $EDITDATA
                                          [0]->state; ?>">
                                       </div>


                                       <div class="form-group col-sm-12">
                                          <label>Address:</label>
                                          <textarea class="form-control" name="address" rows="5" style="line-height: 22px;"><?php echo $EDITDATA[0]->address; ?></textarea>
                                       </div>
                                    </div>

                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                 </form>
                              </div>
                           </div>
                        </div>

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
    </div>
  

<?php $this->load->view('admin/include/footer'); ?>

   </body>
</html>