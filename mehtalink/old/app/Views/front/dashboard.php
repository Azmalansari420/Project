 <?php
 $session=session();
 $userdata=getdatasingle('tbl_user',array('id'=>$session->get('uid')));
 ?>

<!-- Title Bar -->
      <div class="pbmit-title-bar-wrapper">
         <div class="container">
            <div class="pbmit-title-bar-content">
               <div class="pbmit-title-bar-content-inner">
                  <div class="pbmit-tbar">
                     <div class="pbmit-tbar-inner">
                        <h1 class="pbmit-tbar-title">Profile</h1>
                     </div>
                  </div>
                  <div class="pbmit-breadcrumb">
                     <div class="pbmit-breadcrumb-inner">
                        <span><a title="" href="<?= base_url();?>" class="home"><span>Home</span></a></span>
                        <span class="sep">-</span>
                        <span><span class="post-root post post-post current-item">Profile</span></span>
                     </div>
                  </div>
               </div>
            </div> 
         </div> 
      </div>
      <!-- Title Bar End-->

      <section class="section-lg">
               <div class="container">
                  <div class="row">
                     <div class="col-12">
                        <div class="pbmit-team-details">
                           <div class="row g-3">
                              <div class="col-lg-4">
                                 <div class="pbmit-team-details-inner">
                                    <div class="pbmit-team-img">
                                       <h2 class="pbmit-team-title"><a href="<?=base_url('profile');?>"> <i class="fa fa-user-plus"></i> Add Profile</a></h2>
									    <?php if($userdata->file!='') { ?>
									   <img src="<?=base_url('uploads/'.$userdata->file.'');?>" class="w-100" alt="">
										<?php } ?>
                                    </div>
                                    <div class="pbmit-team-summary">
                                       
                                       <h4 class="pbmit-team-title"> <?=$userdata->name;?></h4>
                                       <h4 class="pbmit-team-designation"> Website Designer</h4>
                                       <h4 class="pbmit-team-designation"> <a href="<?=base_url('userlogout');?>">Logout</a></h4>
                                       
                                       
                                      
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-8">
                                 <div class="candidate-detail-description mb-5">
                                     
                                     <h4 class="mb-3"> PROFILE:</h4>
                                     <p><?=$userdata->profile;?></p>
                                    <h4 class="mb-3"> PERSONAL DETAILS:</h4>
                                    <ul class="pbmit-single-team-info">
                                       <li><label>Name</label> <?=$userdata->name;?></li>
                                       <li><label>Phone</label> <?=$userdata->mobile;?></li>
                                       <li><label>Email</label> <a href="mailto:<?=$userdata->email;?>"><span class="__cf_email__" data-cfemail="553c3b333a1536273034213c2330262539343b30217b363a38"> <?=$userdata->email;?></span></a></li>
                                       <li><label>Date of Birth</label> <?=$userdata->dob;?> </li>
                                       <li><label>Marital Status</label> <?=$userdata->marital_status;?></li>
                                       <li><label>Father's Name</label> <?=$userdata->father_name;?></li>
                                       <li><label>Mother's Name</label> <?=$userdata->mother_name;?></li>
                                       <li><label>Nationality</label> <?=$userdata->nationality;?></li>
                                       <li><label>Language Known</label> <?=$userdata->language;?></li>
                                       <li><label>Gender </label> <?=$userdata->gender;?></li>
                                       <li><label>Address </label> <?=$userdata->address;?></li>
                                       


                                    </ul>
                                    
                                 </div>
                                 
                                 <div class="candidate-detail-qualification mb-2">
                                    <h4 class="mb-3">EXPERIENCE:</h4>
                                    <p><?=$userdata->experience;?></p>
                                    
                                 </div>
                                 <div class="candidate-detail-contact-detail pb-2 mb-2">
                                    <h4>Qualification:</h4>
                                    <p><?=$userdata->qualification;?>
                                       </p>
                                 </div>
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>