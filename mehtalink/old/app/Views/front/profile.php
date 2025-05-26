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
 <?php
 $session=session();
 $userdata=getdatasingle('tbl_user',array('id'=>$session->get('uid')));
 ?>
<section class="home-5-appointment-section-bg pbmit-bg-color-global">
               <div class="container-fluid p-0">
                  <div class="row g-0">
                     <div class="col-md-12 home-5-appointment-section-bg-left">
                        <div role="form" class="home-5-appointment-form bg-white">
                           <h5 class="mb-4">Create Your Profile</h5>
						   <?php if(isset($success)) { echo $success; }?>
                           <form action="" method="post" class="" enctype = "multipart/form-data">
                              <div class="pbmit-main-form pbmit-form-style-3">
                                 <div class="row">
                                    <div class="col-sm-6">
                                       <div class="input-group">
                                           
                                          <span class="input-item" data-name="your-name">
                                             <input type="text" name="name" required value="<?=$userdata->name;?>" size="40" class="form-control" aria-invalid="false" placeholder="Your Name*">
                                          </span>
                                       </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="input-group">
                                          <span class="input-item" data-name="your-name">
                                             <input type="text" name="mobile" value="<?=$userdata->mobile;?>" required class="form-control" aria-invalid="false" placeholder="Phone No*">
                                          </span>
                                       </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="input-group">
									   
									   <?php if($userdata->file!='') { ?>
									   <img src="<?=base_url('uploads/'.$userdata->file.'');?>" style="    width: 27% !important;
    height: 95px;" class="w-100" alt="">
									   <?php } ?>
                                          <span class="input-item" data-name="your-name">
                                             <input type="file" name="file" class="form-control" aria-invalid="false" placeholder="Photo*">
                                          </span>
                                       </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="input-group">
                                          <span class="input-item" data-name="your-name">
                                             <input type="text" name="dob" value="<?=$userdata->dob;?>" required class="form-control" aria-invalid="false" placeholder="Date of Birth*">
                                          </span>
                                       </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="input-group">
                                          <span class="input-item" data-name="your-email">
                                             <input type="email" name="email" readonly value="<?=$userdata->email;?>" required value="" size="40" class="form-control" aria-required="true" aria-invalid="false" placeholder="Email address*">
                                          </span>
                                       </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="input-group">
                                          <span class="input-item" data-name="ChooseaAdviser">
                                             <span class="pbmit-select">
                                                <select name="marital_status" required class="wpcf7-form-control" aria-invalid="false">
                                                   <option value="">Marital Status</option>
                                                   <option value="Unmarried" <?php if($userdata->marital_status=='Unmarried') { echo "selected";}?>>Unmarried</option>
                                                   <option value="Married" <?php if($userdata->marital_status=='Married') { echo "selected";}?>>Married</option>
                                                </select>
                                             </span>
                                          </span>
                                       </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="input-group">
                                          <span class="input-item" data-name="your-name">
                                             <input type="text" name="father_name" value="<?=$userdata->father_name;?>" required class="form-control" aria-invalid="false" placeholder="Father's Name*">
                                          </span>
                                       </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="input-group">
                                          <span class="input-item" data-name="your-name">
                                             <input type="text" name="mother_name" value="<?=$userdata->mother_name;?>" required class="form-control" aria-invalid="false" placeholder="Mother's Name*">
                                          </span>
                                       </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="input-group">
                                          <span class="input-item" data-name="your-name">
                                             <input type="text" name="nationality" value="<?=$userdata->nationality;?>" required class="form-control" aria-invalid="false" placeholder="Nationality*">
                                          </span>
                                       </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="input-group">
                                          <span class="input-item" data-name="ChooseaTraining">
                                             <span class="pbmit-select">
                                                <select name="gender" required class="wpcf7-form-control">
                                                   <option value="Choose a Gender">Choose a Gender</option>
                                                   <option value="Male" <?php if($userdata->gender=='Male') { echo "selected";}?>>Male</option>
                                                   <option value="Female" <?php if($userdata->gender=='Female') { echo "selected";}?>>Female</option>
                                                   <option value="Other" <?php if($userdata->gender=='Other') { echo "selected";}?>>Other</option>
                                                </select>
                                             </span>
                                          </span>
                                       </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="input-group">
                                          <span class="input-item" data-name="ChooseaTraining">
                                             <span class="pbmit-select">
                                                <select name="language" required class="wpcf7-form-control">
                                                   <option value="">Language Known</option>
                                                   <option value="Hindi" <?php if($userdata->language=='Hindi') { echo "selected";}?>>Hindi </option>
                                                   <option value="English" <?php if($userdata->language=='English') { echo "selected";}?>>English</option>
                                                   <option value="Both" <?php if($userdata->language=='Both') { echo "selected";}?>>Both</option>
                                                </select>
                                             </span>
                                          </span>
                                       </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="input-group">
                                          <span class="input-item" data-name="ChooseaTraining">
                                             <span class="pbmit-select">
                                                <select name="category" required class="wpcf7-form-control">
                                                   <option value="">Choose a Job Category</option>
                                                   <?php
	$other3=getdatasingle('tbl_pages',array('status'=>'1','display'=>'1','id'=>'7'));
	   if($other3) {
	   $other1=getdatabyslug('tbl_pages',array('status'=>'1','display'=>'1','parent_page'=>$other3->id));   
	?>
												   <?php $i=1; if($other1) { foreach($other1 as $values) { 
						
							?> 
												   <option value="<?=$values->id;?>" <?php if($userdata->category==$values->id) { echo "selected";}?>><?=$values->title;?></option>
												   <?php } } ?> 
                                                 <?php } ?> 
                                                   
                                                </select>
                                             </span>
                                          </span>
                                       </div>
                                    </div>
                                    
                                    <div class="col-lg-12 col-sm-12">
                                       <br>
                                       <label > Profile</label>
                                       <textarea class="form-control" name="profile" required rows="100" placeholder="Profile*"><?=$userdata->profile;?></textarea>
                                    </div>
                                    
                                    <div class="col-lg-6 col-sm-6">
                                        <br>
                                        <label > Address</label>
                                       <textarea class="form-control" name="address"  required rows="100" placeholder="Address"><?=$userdata->address;?></textarea>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <br>
                                        <label > Qualification</label>
                                       <textarea class="form-control" name="qualification" required rows="100" placeholder="Qualification*"><?=$userdata->qualification;?></textarea>
                                    </div>
                                    <div class="col-lg-12 col-sm-12">
                                       <br>
                                       <label > Experience</label>
                                       <textarea class="form-control" name="experience" required rows="100" placeholder="Experience*"><?=$userdata->experience;?></textarea>
                                    </div>
                                    <div class="col-sm-12">
                                       <div class="input-button">
                                          <br>
                                          <button id="submit" name="update" class="input-form-control pbmit-btn"> Submit</button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>                  
                     </div>
                  </div>
               </div>
            </section>