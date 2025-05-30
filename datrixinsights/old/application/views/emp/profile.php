<div class="page-wrapper">
      <!--page-content-wrapper-->
      <div class="page-content-wrapper">
        <div class="page-content">
      <div class="row">
        <div class="card">
                                   <div class="card-body page-title-box">

                                       <h4 class="card-title "><?php echo $page;?></h4>
                                       <p class="card-title-desc"></p>

                                       <!-- Nav tabs -->
                                       <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                           <li class="nav-item">
                                               <a class="nav-link active" data-toggle="tab" href="#home1" role="tab" aria-selected="true">
                                                   <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                   <span class="d-none d-sm-block">Profile View</span>
                                               </a>
                                           </li>
										   
										   <li class="nav-item">
                                               <a class="nav-link" data-toggle="tab" href="#profile1" role="tab" aria-selected="false">
                                                   <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                   <span class="d-none d-sm-block">Update Profile</span>
                                               </a>
                                           </li>
                                           
                                           <li class="nav-item">
                                               <a class="nav-link" data-toggle="tab" href="#messages1" role="tab" aria-selected="false">
                                                   <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                                   <span class="d-none d-sm-block">Change Password</span>
                                               </a>
                                           </li>

                                       </ul>

                                       <!-- Tab panes -->
                                       <div class="tab-content p-3 text-muted">
                                           <div class="tab-pane active" id="home1" role="tabpanel">
                                               <div class="row">
                                                  <div class="col-md-6">
                                                    <div class="row">
                                                      <div class="col-md-4">
                                                        <p class="profile-logo"><?php echo substr($this->session->userdata('name'),0,1)?></p>
                                                        <h4><?php echo $this->session->userdata('name');?></h4>
                                                      </div>
                                                      <div class="col-md-8">
                                                        <table class="table table-striped mb-0">
                                                           <tr>
                                                              <td>User Name</td><td> <?php echo $profile->name;?></td>
                                                           </tr>
														   <tr>
                                                              <td>Mobile</td><td> <?php echo $profile->mobile;?></td>
                                                           </tr>
                                                           <tr>
                                                              <td>Email</td><td> <?php echo $profile->email;?></td>
                                                           </tr>
                                                           <tr>
                                                              <td>Account Since</td><td> <?php echo $profile->created;?></td>
                                                           </tr>
                                                           <tr>
                                                              <td>Address</td><td> <?php echo $profile->address;?></td>
                                                           </tr>
                                                           <tr>
                                                              <td>Status</td><td> <span class="badge badge-success">Verified</span></td>
                                                           </tr>
                                                        </table>
                                                      </div>
                                                  </div>
                                                </div>
                                                  <div class="col-md-6">
                                                      <table class="table table-striped mb-0">
                                                        <tr >
                                                          <th colspan="2">Last Login Information</th>
                                                        </tr>
                                                        <tr>
                                                          <td>Last Login  </td><td>@ <?php echo $profile->last_login;?></td>
                                                        </tr>
                                                        <?php foreach(json_decode($profile->login_info) as $key=>$info) {?>

                                                        <tr>
                                                          <td><?php echo $key;?></td><td><?php echo $info;?></td>
                                                        </tr>
                                                      <?php } ?>
                                                      </table>
                                                  </div>
                                               </div>
                                           </div>
                                           <div class="tab-pane" id="profile1" role="tabpanel">
                                               <?php echo form_open(base_url( 'employee/profile_update' ), array( 'id' => 'profile', 'class' => 'profile', 'method' => 'post', 'autocomplete'=>'off'));?>
                                               <p class="mb-0">
                                                <div class="row">
                                                   <div class="col-md-12">
                                                     <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Username</label>
                                            <div class="col-md-10">
                                                <input class="form-control" name="username" type="text" value="<?php echo $profile->name;?>" id="example-text-input">
                                            </div>
                                        </div>
                                                   </div>
                                                   <div class="col-md-12">
                                                     <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Email ID</label>
                                            <div class="col-md-10">
                                                <input class="form-control emailchanger" name="email" type="text" value="<?php echo $profile->email;?>" id="email-changed">
                                           </div>
                                          </div>
                                                   </div>
												   
												   <div class="col-md-12">
                                                     <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Mobile</label>
                                            <div class="col-md-10">
                                                <input class="form-control emailchanger" name="mobile" type="number" value="<?php echo $profile->mobile;?>" id="email-changed">
                                           </div>
                                          </div>
                                                   </div>
												   
												   <div class="col-md-12">
                                                     <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Address</label>
                                            <div class="col-md-10">
                                                <input class="form-control emailchanger" name="address" type="text" value="<?php echo $profile->address;?>" id="email-changed">
                                           </div>
                                          </div>
                                                   </div>
                                                   
                                                   <div class="col-md-10 offset-md-2">
                                                       <input type="submit" name="submit" value="UPDATE" class="form-control btn btn-primary btn-update-submit" />
                                                   </div>
                                                </div>
                                               </p>
                                             </form>
                                           </div>
                                           <div class="tab-pane" id="messages1" role="tabpanel">
                                             <?php echo form_open(base_url( 'employee/password_change' ), array( 'id' => 'password', 'class' => 'password', 'method' => 'post', 'autocomplete'=>'off'));?>
                                             <p class="mb-0">
                                              <div class="row">
                                                 <div class="col-md-12">
                                                   <div class="form-group row">

                                          <label for="example-text-input" class="col-md-2 col-form-label">Old Password</label>
                                          <div class="col-md-10">
                                            <div class="input-group">
                                            <div class="input-group-prepend">
                                                            <span class="input-group-text" id="validationTooltipUsernamePrepend"><i class="ri-eye-off-fill pwd-show" ></i></span>
                                                            </div>
                                              <input class="form-control pwd" name="old_pass" type="password" value="" placeholder="Enter Your Old Password">
                                          </div>
                                        </div>
                                      </div>
                                                 </div>
                                                 <div class="col-md-12">
                                                   <div class="form-group row">
                                          <label for="example-text-input" class="col-md-2 col-form-label">New Password</label>
                                          <div class="col-md-10">
                                            <div class="input-group">
                                            <div class="input-group-prepend">
                                                            <span class="input-group-text" id="validationTooltipUsernamePrepend"><i class="ri-eye-off-fill pwd-show" ></i></span>
                                                            </div>
                                              <input class="form-control pwd new_pass1" name="new_pass1" type="password" placeholder="Enter New Password">
                                              <p id="pwd-strong-msg"></p>

                                          </div>
                                        </div>
                                        </div>
                                                 </div>
                                                 <div class="col-md-12">
                                                   <div class="form-group row">
                                          <label for="example-text-input" class="col-md-2 col-form-label">Re-Enter Password</label>
                                          <div class="col-md-10">
                                            <div class="input-group">
                                            <div class="input-group-prepend">
                                                            <span class="input-group-text" id="validationTooltipUsernamePrepend"><i class="ri-eye-off-fill pwd-show" ></i></span>
                                                            </div>
                                              <input class="form-control pwd new_pass2" name="new_pass2" type="password" placeholder="Re-Enter New password Again">
                                                      <p id="pwdcheck"></p>
                                          </div>
                                        </div>
                                        </div>
                                                 </div>


                                                 <div class="col-md-10 offset-md-2">
                                                     <input type="submit" name="submit" value="CHANGE PASSWORD" class="form-control btn btn-primary" />
                                                 </div>
                                              </div>
                                             </p>
                                           </form>
                                           </div>

                                       </div>

                                   </div>
       </div>
</div>
      </div>

      <style>
      .card{
        width:100%;
      }
      .profile-logo{
        width: 100px;
height: 100px;
background-color: #ff3d60;
color: #fff;
text-align: center;
vertical-align: middle;
border-radius: 100%;
font-size: 65px;
      }
      .pwd-show{
        cursor: pointer;
      }
      .ri-eye-off-fill{
    color:  #ff3d60;
    }
    .ri-eye-fill{
      color:#26a206;
    }
    .input-group .short{
	color:#FF0000;
}

.input-group .weak{
	color:#E66C2C;
}

  .input-group .good{
	color:#2D98F3;
}

  .input-group .strong{
	color:#006400;
}
.pwd{
  width:90% !important;
}
      </style>
