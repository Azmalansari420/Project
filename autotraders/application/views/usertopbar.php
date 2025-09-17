<?php
$sitesetting = $this->crud->fetchdatabyid('1','site_setting');
$user = $this->crud->selectDataByMultipleWhere('registration',array('id'=>$this->session->userdata("id"),));
?>
         <div class="container-fluid g-0">
            <div class="row">
               <div class="col-lg-12 p-0">
                  <div class="header_iner d-flex justify-content-between align-items-center">
                     <div class="sidebar_icon d-lg-none">
                        <i class="ti-menu"></i>
                     </div>
                     <div class="serach_field-area" style="text-align: center;    font-size: 34px;font-weight: 700;">
                       WELCOME TO AUTOTRADERS
                     </div>
                     
                     <div class="header_right d-flex justify-content-between align-items-center">                       
                        <div class="profile_info" >
                           <img src="<?php echo base_url(); ?>media/uploads/user/<?php echo $user[0]->image; ?>" alt="#">
                           <div class="profile_info_iner" style="text-align: left!important;">
                              <!-- <p>Welcome Admin!</p> -->
                              <h5><?php echo $user[0]->username; ?></h5>
                              <div class="profile_info_details">
                                 <a href="<?php echo base_url('userprofile'); ?>">My Profile <i class="ti-user"></i></a>
                                 <a href="<?php echo base_url('user/userlogout'); ?>">Log Out <i class="ti-shift-left"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- <div class="col-lg-12">
                        <div class="white_box ">
                           <div class="alert alert-success alert-dismissible fade show" role="alert" style="color: black;
    background-color: #89db89;
    border-color: #badbcc;">
                              <i class="fa fa-check-circle" aria-hidden="true" style="font-size: 36px;position: relative;
    top: 15px;"></i> <strong>Welcome</strong><br> 
                              <span style="    padding-left: 40px;">HEY! Lets do something greate Today.</span>
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">×</span>
                              </button>
                           </div>
                        </div>
                     </div> -->
            </div>
         </div>