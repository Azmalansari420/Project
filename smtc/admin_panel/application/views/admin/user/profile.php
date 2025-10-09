<?php $this->load->view('admin/header');?>
<div class="clearfix"></div>
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
            <h4 class="page-title">Student Profile</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('dasboard') ?>">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url('user/all') ?>">All Student</a></li>
                <li class="breadcrumb-item active" aria-current="page">Student Profile </a></li>
             </ol>
         </div>
        </div>
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <h4 class="page-title">   Enrollment No : <?php echo $RESULT[0]->reg_id; ?> </h4> </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <?php echo $this->session->flashdata('msg'); ?> </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                                        <li class="nav-item"> <a href="javascript:void();" data-target="#profile" data-toggle="pill" class="nav-link active"><i class="icon-user"></i> <span class="hidden-xs">Profile</span></a> </li>
                                        <li class="nav-item"> <a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link"><i class="icon-note"></i> <span class="hidden-xs">Edit</span></a> </li>
                                        <li class="nav-item"> <a href="javascript:void();" data-target="#UpdatePic" data-toggle="pill" class="nav-link"><i class="icon-picture"></i> <span class="hidden-xs">Picture</span></a> </li>
                                        <li class="nav-item"> <a href="javascript:void();" data-target="#cerificate" data-toggle="pill" class="nav-link"><i class="icon-picture"></i> <span class="hidden-xs">Status</span></a> </li>
                                        <li class="nav-item"> <a href="javascript:void();" data-target="#payment" data-toggle="pill" class="nav-link"><i class="icon-picture"></i> <span class="hidden-xs">Payment</span></a> </li>
                                        <li class="nav-item"> <a href="javascript:void();" data-target="#Exam" data-toggle="pill" class="nav-link"><i class="icon-layers"></i> <span class="hidden-xs">Exam</span></a> </li>
                                        <li class="nav-item"> <a href="javascript:void();" data-target="#result" data-toggle="pill" class="nav-link"><i class="icon-note"></i> <span class="hidden-xs">Add Results</span></a> </li>
                                        <li class="nav-item"> <a href="javascript:void();" data-target="#resultlist" data-toggle="pill" class="nav-link"><i class="icon-list"></i> <span class="hidden-xs">Results List</span></a> </li>
                                    </ul>
                                    <div class="tab-content p-3">
                                        <div class="tab-pane active" id="profile">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <div class="box box-primary">
                                                        <div class="box-body box-profile">
                                                            <center> <img src="<?php echo base_url('uploads/user/').$RESULT[0]->photo ?>" style="width:150px;height:150px"> </center>
                                                            <hr>
                                                      
                                                            <h6 class="profile-username text-center">Enrollment No: <?php echo $RESULT[0]->reg_id; ?></h6>
                                                            <h6 class="profile-username text-center">Stundet Id: <?php echo $RESULT[0]->student_id_number; ?></h6>
                                                            <h6 class="profile-username text-center">Password: <?php echo $RESULT[0]->password; ?></h6>
                                                            <p class="text-muted text-center">Join Date: <?php echo date( 'd-M-Y', strtotime($RESULT[0]->join_date)) ?></p>
                                                            <?php if($RESULT[0]->status==1){ ?> <a href="#" class="btn btn-success btn-block"><b>Active</b></a>
                                                            <?php }else{ ?> <a href="#" class="btn btn-danger btn-block"><b>Inactive</b></a>
                                                            <?php } ?>  
                                                            
                                                            <?php if($RESULT[0]->approval_status=='1'){ ?> <a href="#" class="btn btn-success btn-block"><b>Approved</b></a>
                                                            <?php }else{ ?> <a href="#" class="btn btn-danger btn-block"><b>Not Approved</b></a>
                                                            <?php } ?>
                                                            
                                                            
                                                            
                                                            
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="post">
                                                        <table>
                                                            <tr>
                                                                <td><strong>Name: </strong> </td>
                                                                <td>
                                                                    <?php echo ucwords($RESULT[0]->name); ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Course: </strong> </td>
                                                                <td>
                                                                    <?php echo ucwords($RESULT[0]->course); ?></td>
                                                            </tr> 
                                                         
                                                            <tr>
                                                                <td><strong>Specialization </strong> </td>
                                                                <td>
                                                                     <?php 
                                                                    
                                                                    	$string_to_array = explode('#',$RESULT[0]->specialization);
                                                                    	foreach($string_to_array as $key=>$row_id){
                                                                    	    if($row_id){
                                                                    	         $specialization = $this->specialization_model->get_specialization_by_id($row_id) ; 
                                                                    	    echo $specialization[0]->name.'<br>'; 
                                                                    	    }
                                                                    	   
                                                                    	}
                                                                    	
                                                                    	
                                                                        
                                            				            ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Lateral Entry : </strong> </td>
                                                                <td>
                                                                    <?php echo $RESULT[0]->lateral_entry; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Father Name: </strong> </td>
                                                                <td>
                                                                    <?php echo ucwords($RESULT[0]->father_name); ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Mother Name: </strong> </td>
                                                                <td>
                                                                    <?php echo ucwords($RESULT[0]->mother_name); ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>DOB: </strong> </td>
                                                                <td>
                                                                    <?php echo date( 'd-M-Y', strtotime($RESULT[0]->dob)) ?> </td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Gender: </strong> </td>
                                                                <td>
                                                                    <?php echo $RESULT[0]->gender; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Martial Status: </strong> </td>
                                                                <td>
                                                                    <?php echo $RESULT[0]->marital_status; ?></td>
                                                            </tr>
                                                      
                                                            <tr>
                                                                <td><strong>Email: </strong> </td>
                                                                <td>
                                                                    <?php echo $RESULT[0]->email; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Phone: </strong> </td>
                                                                <td>
                                                                    <?php echo $RESULT[0]->mobile; ?></td>
                                                            </tr>
                                                              <tr>
                                                                <td><strong>State: </strong> </td>
                                                                <td>
                                                                     <?php
                                                                      $state = $this->state_model->get_state_by_id($RESULT[0]->state_id) ; 
                                                                    	    echo $state[0]->name .'  ('.$state[0]->code.')' ; 
                                                                    	    
                                                                    	    
                                                                    	    ?>
                                                            	     
                                                                </td>
                                                            </tr>
                                                            
                                                            <tr>
                                                                <td><strong>Present Address: </strong> </td>
                                                                <td>
                                                                    <?php echo $RESULT[0]->address; ?></td>
                                                            </tr>
                                                      
                                                            <tr>
                                                                <td><strong>Last Qualification: </strong> </td>
                                                                <td>
                                                                    <?php echo $RESULT[0]->last_qualification; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Work Experience: </strong> </td>
                                                                <td>
                                                                    <?php echo $RESULT[0]->work_experience; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Exam Option: </strong> </td>
                                                                <td>
                                                                    <?php echo $RESULT[0]->exam_option; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Exam Session: </strong> </td>
                                                                <td>
                                                                    <?php echo $RESULT[0]->exam_session; ?></td>
                                                            </tr>
                                                            
                                                            <tr>
                                                                <td><strong>Fees Payment : </strong> </td>
                                                                <td>
                                                                    <?php echo $RESULT[0]->received_amount; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Payment Option : </strong> </td>
                                                                 
                                                                <td><?php if($RESULT[0]->payment_mode==1){ ?>  Cash
                                                                    <?php }else if($RESULT[0]->payment_mode==2 ){  ?>Credit Card
                                                                    <?php }else if($RESULT[0]->payment_mode==3){  ?>Online Payment
                                                                    <?php }else if($RESULT[0]->payment_mode==4 ){  ?>Cheque Card
                                                                    <?php } ?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Enter Late Fee Amount : </strong> </td>
                                                                <td>
                                                                    <?php echo $RESULT[0]->late_fees; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Enter Exam Fee Amount : </strong> </td>
                                                                <td>
                                                                    <?php echo $RESULT[0]->exam_fees; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Enter Registration Fee Amount : </strong> </td>
                                                                <td>
                                                                    <?php echo $RESULT[0]->reg_fees; ?></td>
                                                            </tr>  
                                                            <tr>
                                                                <td><strong>Year Of Passing : </strong> </td>
                                                                <td>
                                                                    <?php echo $RESULT[0]->year_of_passing; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Year Of Passing : </strong> </td>
                                                                <td>
                                                                    <?php echo $RESULT[0]->grade; ?></td>
                                                            </tr>
                                                            
                                                            <tr>
                                                                <td><strong>Result status : </strong> </td>
                                                                <td><?php echo ($RESULT[0]->result_status == '1')?"Active": "Inactive" ; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Marksheet status : </strong> </td>
                                                                <td><?php echo ($RESULT[0]->marksheet_status == '1')?"Active": "Inactive" ; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Certificate Status : </strong> </td>
                                                                <td><?php echo ($RESULT[0]->certificate_status == '1')?"Active": "Inactive" ; ?></td>
                                                         
                                                            </tr>  
                                                            <tr>
                                                                <td><strong>Marksheet Verification Status : </strong> </td>
                                                                <td><?php echo ($RESULT[0]->mc_status == '1')?"Active": "Inactive" ; ?></td>
                                                         
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="edit">
                                            <form class="form-horizontal post" method="post" id="profile_form" enctype="multipart/form-data">
                                                <table class="">
                                                    <tr>
                                                        <td ><strong> Enrollment No: </strong> </td>
                                                        <td style="width: 70%">
                                                            <input type="text" name="reg_id" class="form-control" value="<?php echo $RESULT[0]->reg_id; ?>" required> </td>
                                                    </tr>
                                                    <tr>
                                                        <td ><strong> Student Id No: </strong> </td>
                                                        <td style="width: 70%">
                                                            <input type="text" name="student_id_number" class="form-control" value="<?php echo $RESULT[0]->student_id_number; ?>" required> </td>
                                                    </tr>
                                                    <tr>
                                                        <td ><strong>Email: </strong> </td>
                                                        <td style="width: 70%">
                                                            <input type="text" name="email" class="form-control" value="<?php echo $RESULT[0]->email; ?>" required> </td>
                                                    </tr> 
                                                    <tr>
                                                        <td ><strong> Name: </strong> </td>
                                                        <td style="width: 70%">
                                                            <input type="text" name="name" class="form-control" value="<?php echo $RESULT[0]->name; ?>" required> </td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Father Name: </strong> </td>
                                                        <td>
                                                            <input type="text" name="father_name" class="form-control" value="<?php echo $RESULT[0]->father_name; ?>" required> </td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Mother Name: </strong> </td>
                                                        <td>
                                                            <input type="text" name="mother_name" class="form-control" value="<?php echo $RESULT[0]->mother_name; ?>" required> </td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Course Name: </strong> </td>
                                                        <td>
                                                            <select class="form-control" name="course_id" required>
                        			                          <option value='<?php echo $RESULT[0]->course_id; ?>'><?php echo $RESULT[0]->course; ?></option>
                        			                          <?php echo $this->course_model->get_all_child_course(0); ?>
                        			                        </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Specialization : </strong> </td>
                                                        <td>
                                                              <?php $all_fetch_specialization = $this->specialization_model->get_all_specialization() ;  ?>
                                                              <?php 
                                                            	$string_to_array = explode('#',$RESULT[0]->specialization); ?>
                                                                <select class="form-control js-example-basic-multiple" required name="specialization[]" multiple="multiple">
                                							  	<option value="">Select specialization</option>
                                							  	
                                							  	 <?php
                                                        			  
                                                        			 
                                                        				  foreach($all_fetch_specialization as $afs){
                                                        				      if(in_array($afs->id,$string_to_array)){
                                                        				          $seld_s = "selected";   
                                                        				      }else{
                                                        				         $seld_s = "";   
                                                        				      }
                                                        				?>
                                                        				<option <?php echo $seld_s; ?> value="<?php echo $afs->id; ?>"><?php echo $afs->name; ?></option>
                                                        				<?php }   ?>	
                                                        				
                                                        				</select>
				
				
				
                                    							  
                                                           </td>
                                                    </tr> 
                                                
                                                     
                                                    <tr>
                                                        <td><strong>Marital Status: </strong> </td>
                                                        <td>
                                                            <select class="form-control marital_status" required="" name="marital_status">
                                							  	<option value="Unmarried" <?php echo($RESULT[0]->marital_status=='Unmarried')?'selected':''; ?>  >Unmarried</option>
                                							  	<option value="Married" <?php echo($RESULT[0]->marital_status=='Married')?'selected':''; ?>  >Married</option>							  	
                                							  </select>
                                						</td>
                                                    </tr>
                                                   
                                                    <tr>
                                                        <td><strong>DOB: </strong> </td>
                                                        <td>
                                                            <input type="date" name="dob"  required class="form-control" value="<?php echo $RESULT[0]->dob; ?>"> </td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Gender: </strong> </td>
                                                        <td>
                                                            <select class="form-control"  name="gender" required>
                                                                <option value="Male" <?php echo($RESULT[0]->gender=='Male')?'selected':''; ?> >Male</option>
                                                                <option value="Female" <?php echo($RESULT[0]->gender=='Female')?'selected':''; ?> >Female</option>
                                                                <option value="Others" <?php echo($RESULT[0]->gender=='Others')?'selected':''; ?> >Others</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Email: </strong> </td>
                                                        <td>
                                                            <input type="email" required name="email" class="form-control" value="<?php echo $RESULT[0]->email; ?>"> </td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Mobile: </strong> </td>
                                                        <td>
                                                            <input type="text" required name="mobile" class="form-control" value="<?php echo $RESULT[0]->mobile; ?>"> </td>
                                                    </tr>
                                                     <tr>
                                                        <td><strong>State: </strong> </td>
                                                        <td>
                                                             <?php $all_state = $this->state_model->get_all_state() ;  ?>
                                                    	     <select class="form-control "  name="state_id" >
                            							     	<option value="">Select State</option>
                                							    <?php foreach($all_state as $afs){ ?>
                                            				    <option  value="<?php echo $afs->id; ?>" <?php echo($RESULT[0]->state_id==$afs->id)?'selected':''; ?>><?php echo $afs->name; ?> (<?php echo $afs->code; ?>)</option>
                                            				    <?php }   ?>						  	
                            							     </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Present Address: </strong> </td>
                                                        <td>
                                                            <textarea name="address" class="form-control"><?php echo $RESULT[0]->address; ?></textarea>
                                                        </td>
                                                    </tr>
                                                 
                                                    <tr>
                                                        <td><strong>Last Qualification: </strong> </td>
                                                        <td>
                                                           
                                                            <select name="last_qualification" class="form-control" required="">
                                    						       <option value="">Select Last Qualification</option>
                                    						   <option value="10th Based" <?php echo($RESULT[0]->last_qualification=='10th Based')?'selected':''; ?> >10th Based</option>
                                    						   <option value="12th Based" <?php echo($RESULT[0]->last_qualification=='12th Based')?'selected':''; ?> >12th Based</option>
                                    						   <option value="ITI Based" <?php echo($RESULT[0]->last_qualification=='ITI Based')?'selected':''; ?> >ITI Based</option>
                                    						   <option value="Diploma Based" <?php echo($RESULT[0]->last_qualification=='Diploma Based')?'selected':''; ?> >Diploma Based</option>
                                    						   <option value="Graduation Based" <?php echo($RESULT[0]->last_qualification=='Graduation Based')?'selected':''; ?> >Graduation Based</option>
                                    						   </select>
                                                        </td>
                                                    </tr>
                                                 
                                                    <tr>
                                                        <td><strong>Lateral Entry Status: </strong> </td>
                                                        <td>
                                                            <select class="form-control" name="lateral_entry" required>
                                                               
                                                                <option value="No" <?php echo($RESULT[0]->lateral_entry=='No')?'selected':''; ?> >No</option>
                                                                 <option value="Yes" <?php echo($RESULT[0]->lateral_entry=='Yes')?'selected':''; ?> >Yes</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    
                                                 
                                                  
                                                    <tr>
                                                        <td><strong>Exam Option: </strong> </td>
                                                        <td>
                                                            <select name="exam_option" class="form-control" required="">
                                    						       <option value="">Select Exam Option</option>
                                    						   <option value="Online Exam" <?php echo($RESULT[0]->exam_option=='Online Exam')?'selected':''; ?>>Online Exam</option>
                                    						   <option value="Center Exam" <?php echo($RESULT[0]->exam_option=='Center Exam')?'selected':''; ?>>Center Exam</option>
                                    						   <option value="Assignment" <?php echo($RESULT[0]->exam_option=='Assignment')?'selected':''; ?>>Assignment</option>
                                    						   </select>
                                                           
                                                        </td>
                                                    </tr>
                                                       <tr>
                                                        <td><strong>Exam Session: </strong> </td>
                                                        <td>
                                                            <input type="text" name="exam_session" required class="form-control"  value="<?php echo $RESULT[0]->exam_session; ?>">
                                                        </td>
                                                    </tr>
                                                       <tr>
                                                        <td><strong>Work Experience: </strong> </td>
                                                        <td>
                                                             <input type="text" name="work_experience" class="form-control"  value="<?php echo $RESULT[0]->work_experience; ?>">
                                                            
                                                        </td>
                                                    </tr> 
                                                    
                                                    <tr>
                                                        <td><strong>Fees Amount: </strong> </td>
                                                        <td>
                                                            <input type="number" name="received_amount" class="form-control" required value="<?php echo $RESULT[0]->received_amount; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Payment Option: </strong> </td>
                                                        <td>
                                                           <select name="payment_mode" required="" class="form-control">
						                                        <option value="">Select Payment Mode</option>
						       						               <option value="1" <?php echo($RESULT[0]->payment_mode==1)?'selected':''; ?> >Cash</option>
					           						               <option value="2" <?php echo($RESULT[0]->payment_mode==2)?'selected':''; ?> >Credit Card</option>
					           						               <option value="3" <?php echo($RESULT[0]->payment_mode==3)?'selected':''; ?> >Online Payment</option>
					           						               <option value="4" <?php echo($RESULT[0]->payment_mode==4)?'selected':''; ?> >Cheque Card</option>
						           						   </select>
                                                    </tr>
                                                  
                                                    <tr>
                                                        <td><strong>Enter Late Fee Amount: </strong> </td>
                                                        <td>
                                                            <input type="number" name="late_fees" class="form-control"  value="<?php echo $RESULT[0]->late_fees; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Enter Exam Fee Amount</strong> </td>
                                                        <td>
                                                            <input type="number" name="exam_fees" class="form-control"  value="<?php echo $RESULT[0]->exam_fees; ?>">
                                                        </td>
                                                    </tr>  <tr>
                                                        <td><strong>Enter Registration Fee Amount</strong> </td>
                                                        <td>
                                                            <input type="number" name="reg_fees" class="form-control"   value="<?php echo $RESULT[0]->reg_fees; ?>">
                                                        </td>
                                                    </tr>
                                                     <tr>
                                                        <td><strong>Date Of Admission: </strong> </td>
                                                        <td>
                                                            <input type="date" name="join_date" class="form-control" required value="<?php echo $RESULT[0]->join_date; ?>"> </td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Old Student Passing Year</strong> </td>
                                                        <td><input type="text" name="year_of_passing" class="form-control" value="<?php echo $RESULT[0]->year_of_passing; ?>"> </td>
                                                    </tr> 
                                                    <tr>
                                                        <td><strong>Old Student Passing Grade</strong> </td>
                                                        <td><input type="text" name="grade" class="form-control" value="<?php echo $RESULT[0]->grade; ?>"> </td>
                                                    </tr>
                                                  
                                                </table>
                                                <hr>
                                                <div class="form-group">
                                                    <div class="col-sm-offset-2 col-sm-10">
                                                        <button type="submit" class="btn btn-danger" name="update_profile">Update Profile</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane" id="payment">
                                            <form class="form-horizontal post" method="post" id="payment_status" enctype="multipart/form-data">
                                                <table class="">
                                             
                                                    <tr>
                                                        <td><strong>Payment Status: </strong> </td>
                                                        <td>
                                                            <select class="form-control" name="payment_status" required>
                                                                <option value="1" <?php echo($RESULT[0]->payment_status==1)?'selected':''; ?> >Paid</option>
                                                                <option value="0" <?php echo($RESULT[0]->payment_status==0)?'selected':''; ?> >Pending</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                   
                                                    
                                                </table>
                                                <hr>
                                                <div class="form-group">
                                                    <div class="col-sm-offset-2 col-sm-10">
                                                        <button type="submit" class="btn btn-danger" name="update_payment">Update Payment</button>
                                                    </div>
                                                </div>
                                            </form>
                                            
                                            <h3> Total Course Payment  Rs <?php echo $RESULT[0]->received_amount ; ?>  </h3>
                                            <table class="table table-bordered table-striped table-responsive">
                                                <thead>
                                                    <tr>
                                                       
                                                        <th>Sr.No.</th>
                                                        <th>Payment Date</th>
                                                        
                                                        <th>	Payment Mode</th>
                                                        <th>	Remark</th>
                                                        <th>	Amount</th>
                                              
                                                    </tr>
                                                </thead>
                                                <?php if(count($payment)>0){ ?>
                                                <tbody>
                                                    <?php $no=0;$total=0; foreach($payment as $record){ $no++; ?>
                                                    <tr>
                                                        <td width="7%">
                                                            <?php echo $no; ?>
                                                        </td>
                                                       
                                                        <td><?php echo $record->add_date_time; ?></td>
                                                       
                                                        <td><?php echo $record->payment_mode; ?></td>
                                                        <td><?php echo $record->remark; ?></td>
                                                         <td><?php echo $record->price; ?></td>
                                                    </tr>
                                                    
                                                    <?php $total =  $record->price + $total; ?>
                                                    <?php } ?> 
                                                    </tbody>
                                                    <tfooter>
                                                        <tr>
                                                            <td colspan="4">Total</td>
                                                            <td> Rs <?php echo $total ; ?></td>
                                                         
                                                        </tr>
                                                         <tr>
                                                            <td colspan="4">Remaining</td>
                                                            <td>Rs <?php echo $RESULT[0]->received_amount-$total ; ?></td>
                                                          
                                                        </tr>
                                                    </tfooter>
                                                <?php } ?> 
                                                </table>
                                                
                                              
                                        </div>
                                        <div class="tab-pane" id="cerificate">
                                            <form class="form-horizontal post" method="post" id="payment_status" enctype="multipart/form-data">
                                                <table class="">
                                             
                                                    <tr>
                                                        <td><strong>Result Status: </strong> </td>
                                                        <td> 
                                                            <select class="form-control" name="result_status" required>
                                                                <option value="">-- Select--</option>
                                                                <option value="1" <?php echo($RESULT[0]->result_status==1)?'selected':''; ?> >Yes</option>
                                                                <option value="0" <?php echo($RESULT[0]->result_status==0)?'selected':''; ?> >No</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Result File</strong> </td>
                                                        <td>
                                                             <input class="form-horizontal post"  type="file" name="result">
                        									<small style="color:#f00">upload file size 1MB JPG,PNG</small>
                        									<br>
                        									<?php if($RESULT[0]->marksheet){ ?>
                        									<a href="<?php echo base_url('uploads/user/').$RESULT[0]->result ?>" style="width:150px;" target="_blank"> Download </a>
                        									<?php } ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Marksheet Status: </strong> </td>
                                                        <td>
                                                            <select class="form-control" name="marksheet_status" required>
                                                                <option value="">-- Select--</option>
                                                                <option value="1" <?php echo($RESULT[0]->marksheet_status==1)?'selected':''; ?> >Yes</option>
                                                                <option value="0" <?php echo($RESULT[0]->marksheet_status==0)?'selected':''; ?> >No</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Marksheet File: </strong> </td>
                                                        <td>
                                                             <input class="form-horizontal post"  type="file" name="marksheet">
                        									<small style="color:#f00">upload file size 1MB JPG,PNG</small>
                        									<br>
                        									<?php if($RESULT[0]->marksheet){ ?>
                        									<a href="<?php echo base_url('uploads/user/').$RESULT[0]->marksheet ?>" style="width:150px;" target="_blank"> Download </a>
                        									<?php } ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Certificate Status: </strong> </td>
                                                        <td>
                                                            <select class="form-control" name="certificate_status" required>
                                                                <option value="">-- Select--</option>
                                                                <option value="1" <?php echo($RESULT[0]->certificate_status==1)?'selected':''; ?> >Yes</option>
                                                                <option value="0" <?php echo($RESULT[0]->certificate_status==0)?'selected':''; ?> >No</option>
                                                            </select>
                                                        </td> 
                                                    </tr>
                                                    <tr>                         
                                                        <td><strong>Certificate : </strong> </td>
                                                        <td>
                                                            <input class="form-horizontal post" type="file" name="certificate">
                        									<small style="color:#f00">upload file size 1MB JPG,PNG</small>
                        									<br>
                        									<?php if($RESULT[0]->certificate){ ?>
                        									<a href="<?php echo base_url('uploads/user/').$RESULT[0]->certificate ?>" style="width:150px;" target="_blank"> Download </a>
                        									<?php } ?>
                                                        </td>
                                                    </tr>
                                                     
                                                  <tr>
                                                        <td><strong>Marksheet Certificate Verification Status: </strong> </td>
                                                        <td>
                                                            <select class="form-control" name="mc_status" required>
                                                                <option value="">-- Select--</option>
                                                                <option value="1" <?php echo($RESULT[0]->mc_status==1)?'selected':''; ?> >Yes</option>
                                                                <option value="0" <?php echo($RESULT[0]->mc_status==0)?'selected':''; ?> >No</option>
                                                            </select>
                                                        </td> 
                                                    </tr>
                                                 
                                                    <tr>
                                                        <td><strong>Status: </strong> </td>
                                                        <td>
                                                            <select class="form-control" name="status" required>
                                                                <option value="1" <?php echo($RESULT[0]->status==1)?'selected':''; ?> >Active</option>
                                                                <option value="0" <?php echo($RESULT[0]->status==0)?'selected':''; ?> >Inactive</option>
                                                            </select>
                                                        </td>
                                                    </tr>  
                                                    <tr>
                                                        <td><strong>Approval Status: </strong> </td>
                                                        <td>
                                                            <select class="form-control" name="approval_status" required>
                                                                <option value="1" <?php echo($RESULT[0]->approval_status=='1')?'selected':''; ?> >Approved</option>
                                                                <option value="0" <?php echo($RESULT[0]->approval_status=='0')?'selected':''; ?> >Not Approved</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                   
                                                    <tr>
                                                        <td><strong>Ebook Status: </strong> </td>
                                                        <td>
                                                            <select class="form-control" name="ebook_status" required>
                                                                <option value="1" <?php echo($RESULT[0]->ebook_status==1)?'selected':''; ?> >Active</option>
                                                                <option value="0" <?php echo($RESULT[0]->ebook_status==0)?'selected':''; ?> >Inactive</option>
                                                            </select>
                                                        </td>
                                                    </tr>  
                                                    <tr>
                                                        <td><strong>Question Status: </strong> </td>
                                                        <td>
                                                            <select class="form-control" name="question_status" required>
                                                                <option value="1" <?php echo($RESULT[0]->question_status==1)?'selected':''; ?> >Active</option>
                                                                <option value="0" <?php echo($RESULT[0]->question_status==0)?'selected':''; ?> >Inactive</option>
                                                            </select>
                                                        </td>
                                                    </tr>  
                                                    
                                                </table>
                                                <hr>
                                                <div class="form-group">
                                                    <div class="col-sm-offset-2 col-sm-10">
                                                        <button type="submit" class="btn btn-danger" name="cerificate_status">Update Status</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane" id="UpdatePic">
                                              <form class="form-horizontal post" method="post" id="profile_form" enctype="multipart/form-data">
                                            <div class="row">
                        						 <div class="col-sm-3">
                        							<div class="form-group">
                        								<label for="">Students Image</label>
                        								   <input class="form-horizontal post" accept="image/png, image/jpeg,image/png,image/JPEG,image/JPG,image/PNG" type="file" name="photo">
                        									<small style="color:#f00">upload file size 1MB JPG,PNG</small>
                        									<br>
                        									<img src="<?php echo base_url('uploads/user/').$RESULT[0]->photo ?>" style="width:150px;">
                        									
                        																
                        							</div>
                        						 </div>
                        						 <div class="col-sm-3">
                        							<div class="form-group">
                        								<label for="">Signature</label>
                        								<input type="file"  name="student_signature" accept="image/png, image/jpeg,image/png,image/JPEG,image/JPG,image/PNG" >
                        								    <small style="color:#f00">upload file size 1MB JPG,PNG</small><br>
                        								 <img src="<?php echo base_url('uploads/user/').$RESULT[0]->student_signature ?>" style="width:150px;">
                        															
                        							</div>
                        						 </div>
                        						 <div class="col-sm-3">
                        							<div class="form-group">
                        								<label for="">Aadhar Card Image</label>
                        								 
                        								 
                        								
                        									<input type="file"  name="adhar_pic" accept="image/png, image/jpeg,image/png,image/JPEG,image/JPG,image/PNG">
                        								    <small style="color:#f00">upload file size 1MB JPG,PNG</small><br>
                        									 <img src="<?php echo base_url('uploads/user/').$RESULT[0]->adhar_pic ?>" style="width:150px;">
                        															
                        							</div>
                        						 </div>
                        						 <div class="col-sm-3">
                        							<div class="form-group">
                        								<label for="">Minimum Qualification 10<sup>th</sup> or 12<sup>th</sup></label>
                        							   
                        								 
                        								
                        								<input type="file" accept="image/png, image/jpeg,image/png,image/JPEG,image/JPG,image/PNG" name="cover">
                        									 <small style="color:#f00">upload file size 1MB JPG,PNG</small><br>
                        								 <img src="<?php echo base_url('uploads/user/').$RESULT[0]->cover ?>" style="width:150px;">
                        															</div>
                        						 </div>
                        						 
					                        </div>
					                         <button type="submit" class="btn btn-danger" name="update_pic"  accept="image/png, image/jpeg,image/png,image/JPEG,image/JPG,image/PNG">Update Picture</button>
					

                                            </form>
                                        </div>
                                        <div class="tab-pane" id="result">
                                            <form class="form-horizontal post" method="post">
                                                <div class="row">
                                                    <div class="form-group col-sm-6">
                                                      <label> Semester </label>
                                                        <select class="form-control" name="semester" required id="semester">
                                                            <option value=""> --Select--</option>
                                                             <?php for ($i=1; $i <= $RESULT[0]->total_semester; $i++) {  ?>
                                                        	 <option   value="<?php echo $i ?>">  Semester <?php echo $i ?> </option>
                                                        <?php } ?>
                                                        </select>
                                                    </div>
                                                  
                                                    <div class="form-group col-sm-6" id="year">
                                                        <label for="exampleInputEmail1">Year <span class="error"> * </span> </label>
                                                        <input type="text" name="year" class="form-control" > 
                                                    </div>
                                                   
                                                    <div class="form-group col-sm-6">
                                                        <label for="exampleInputEmail1">Result Status </label>
                                                        <select class="form-control" name="result" id="result" required>
                                                            <option value=""> Select--</option>
                                                            <option>Passed</option>
                                                            <option>Failed</option>
                                                            <option>Awaited</option>
                                                            <option>Promoted</option>
                                                            <option>LE</option>
                                                        </select>
                                                    </div>
                                                      <div class="form-group col-sm-6"  id="declared_date">
                                              		    <label for="exampleInputEmail1">Declared Date</label>
                                                        <input class="form-control" type="date" name="declared_date" >
                                                           
                                                    </div>
                                                    <div class="form-group col-sm-6"  id="declared_date">
                                              		    <label for="exampleInputEmail1">Exam Center Code</label>
                                                        <input class="form-control" type="text" name="exam_center_code" >
                                                           
                                                    </div> 
                                                    <div class="form-group col-sm-6"  id="declared_date">
                                              		    <label for="exampleInputEmail1">Exam Center</label>
                                                        <textarea name="exam_center" class="form-control" >Saunit Management Technical Council</textarea>
                                                           
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="form-group col-sm-12 box box-success box-solid" id="marksheet">
                                                    <div class="box-header with-border">
                                                        <h3> Add Marksheet</h3> </div>
                                                    <hr>
                                                    <div class="box-body">
                                                        <div class="fille_group row" style="margin-bottom: 20px;padding: 10px;">
                                                            <div class="col-md-4"><b>Subject </b> </div>
                            							    <div class="col-md-2"><b>Max Marks </b>  </div>
                            							 
                            							    <div class="col-md-2"><b>Total Marks </b> </div>
                            							    <div class="col-md-1"><b> </b> </div>
                                                        </div>
                                                        <hr>
                                                        <div id="add_marksheet"> </div>
                                                       
                                                        <div id="append_image"></div> <span class="clearfix"></span>
                                                        <div class="col-md-2" style="margin-top:10px;"> <a type="button"id="addImage" class="btn btn-primary" title="Add Image"><i class="fa fa-plus-circle"></i> Add More Fileds</a> </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-offset-2 col-sm-10">
                                                        <button type="submit" class="btn btn-danger btn-lg" name="insertResult">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane" id="resultlist">
                                        <?php if(count($RESULTLIST) > 0 ) { ?>
                                           <table class="table table-bordered table-striped text-center">
    					                 		<thead>
    					                 			<th>#</th>
    					                 		
    					                 			<th style="width: 100px">Semester</th>
    					                 			<th style="width: 100px">Year/Month</th>
    					                 			<th style="width: 100px">Grade</th>
    					                 			<th style="width: 100px">Result</th>
    					                 			<th style="width: 100px">Declared Date</th>
    					                 			<th style="width: 100px">Create Date</th>
    					                 			<th></th>
    					                 			
    					                 		</thead>
    					                 		<tbody>
    					                 			<?php 
    					                 			$i=1;
    					                 			foreach ($RESULTLIST as $key => $value) { ?>
    					                 				<tr>
    					                 				<td><?php echo $i++ ;  ?></td>
    					                 			
    					                 				<td><?php echo $value->semester ?></td>
    						                 			<td><?php echo $value->year ?> </td>
    						                 				
    						                 			<td><?php echo $value->grade	 ?></td>
    						                 			<td><?php echo $value->result	 ?></td>
    						                 			<td><?php echo date('d-M-Y' ,strtotime($value->declared_date) ) 	 ?></td>
    						                 			<td><?php echo date('d-M-Y' ,strtotime($value->create_date) ) 	 ?></td>
    						                 			<td>
    						                 			<a href="<?php echo base_url('user/edit_result/').$value->id; ?>"  target="_blank" class="btn btn-success btn-xs" title="Edit Result"><i class="fa fa-fw fa-eye"></i> Edit Result</a>
    						                 			<a href="<?php echo base_url('user/view_result/').$value->id; ?>"  target="_blank" class="btn btn-success btn-xs" title="View Result" target="_blank"><i class="fa fa-fw fa-eye"></i> View Result</a>
    						                 			<a href="<?php echo base_url('user/deleteResult/'.$RESULT[0]->id.'/'.$value->id); ?>" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger btn-xs" title="Delete Result"><i class="fa fa-fw fa-trash"></i> Delete</a>
    						                 			&nbsp; 
    						                 			</td>
    
    
    						                 			</tr>
    					                 			 <?php	} ?>
    					                 			
    					                 		</tbody>
    					                 	</table>
    					                 <?php } ?>	
                                        </div>
                                        <div class="tab-pane" id="Exam">
                                            <form class="form-horizontal post" method="post" id="">
                                                <input type="hidden" name="user_refid" value="<?php echo $RESULT[0]->id; ?>">
                                                <div class="form-group">
                                                    <table style="width:100%">
                                                        <tr>
                                                            <td><strong>Select Exam : </strong> </td>
                                                            <td>
                                                                <select class="form-control" name="exam_refid" required>
                                                                    <option value=""> Select--</option>
                                                                    <?php foreach ($ActiveExam as $key=> $value) { ?>
                                                                    <option value="<?php echo $value->id ?>">
                                                                        <?php echo ucwords($value->title); ?> </option>
                                                                    <?php } ?> </select>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-offset-2 col-sm-10">
                                                        <button type="submit" class="btn btn-danger pull-right" name="userExamActive">Activate</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <br>
                                            <br>
                                            <hr>
                                            <h4>Exam Sheduled</h4>
                                            <br>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <th>No</th>
                                                    <th>Exam</th>
                                                    <th>Semseter</th>
                                                    <th>Status </th>
                                                    <th>Activate </th>
                                                    <th>Answersheet </th>
                                                    <th> </th>
                                                </thead>
                                                <tbody>
                                                    <?php $i=1 ; foreach ($userExam as $key=> $value) { $exam = $this->exam_model->get_exam_by_id($value->exam_refid) ; $res = $this->exam_model->getUserExamAttemptStatus($value->exam_refid ,$RESULT[0]->id ,$value->exam_session_id ) ; ?>
                                                    <tr>
                                                        <td>
                                                            <?php echo $i++ ; ?> </td>
                                                        <td>
                                                            <?php echo $exam[0]->title ; ?></td>
                                                        <td>
                                                            <?php echo $exam[0]->semester ; ?></td>
                                                        <td>
                                                            <?php echo $value->status ?></td>
                                                        <td>
                                                            <?php echo date( 'd-M-Y h:i A' ,strtotime( $value->create_date)) ?></td>
                                                       
                                                        <td>
                                                            <?php if($res){ ?> <a href="<?php echo base_url('user/viewExamAnswersheet/').$res['id'] ;   ?>" target="blank" title="view Result"> Result </a>
                                                            <?php }?> </td>
                                                        <td>
                                                             <a href="<?php echo base_url('user/examStatusChange/'.$RESULT[0]->id.'/'.$value->id); ?>" class="btn btn-danger btn-xs"><i class="fa fa-fw fa-eye"></i></a> 
                                                             <a href="<?php echo base_url('user/examdelete/'.$RESULT[0]->id.'/'.$value->id); ?>" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger btn-xs"><i class="fa fa-fw fa-trash"></i></a> 
                                                        </td>
                                                    </tr>
                                                    <?php } ?> </tbody>
                                            </table>
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
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>
<script class="example">
$(document).ready(function(){ 
	$(document).on(' change click keyup  ', '#addImage', function () {
	  	var a = $(this).attr('data-id'); 
	   $('#append_image').append('<div class="row add-row" style="margin-bottom: 10px;padding: 10px;"><div class="col-md-4"><input type="text" class="form-control" name="subjectName[]" value="" required Placeholder="" ></div><div class="col-md-2"><input type="number" class="form-control subjet_max_marksRowId'+a+'" name="subjet_max_marks[]" value="100" required placeholder=""></div><div class="col-md-2"><input type="number"  class="form-control total_marks total_marksRowId'+a+'" name="total_marks[]" required placeholder=""></div><div class="col-md-1"><a class="delete-row"> <i class="fa fa-trash"></i></a></div></div>');
        b = parseFloat(a)+1;
        $(this).attr('data-id' , b); 
	 });
    $(document).on('  click   ', '.delete-row', function () {
    $(this).parents(".add-row").remove();

    });
});

</script>
<script type="text/javascript">
	$(document).ready(function(){ 
        $('#semester').on('change', function() {
            var semesterID = $(this).val();
            if (semesterID) {
                $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url('user/getCourseSemesterSubject') ?>',
                    data: { 'semester': semesterID, 'course': <?php echo  $RESULT[0]->course_id; ?> },
                    success: function(data) {
                   	   $('#add_marksheet').html(data);
                    }
                });
            } 
        });
    });
</script>
<script type="text/javascript">
    $(document.body).on('change',"#result",function () {
       var lateral_entry= $("#result option:selected").val();
       if (lateral_entry=="LE"){
        	$('#marksheet').hide();
        	$('#year').hide();
        	$('#declared_date').hide();
    	}else {
        	$('#marksheet').show();
        	$('#year').show();
        	$('#declared_date').show();
    	}
    });
</script>
<!-- /.content-wrapper -->
<?php $this->load->view('admin/footer'); ?>
<script class="example">
    $(document)
        .ready(function() {
            $('#profile_form')
                .parsley();
            var hashStr = location.hash.replace("#", "");
            if (hashStr == 'settings') {
                $('.edit_profile_tab')
                    .click();
            }
            $('#dispaypass')
                .click(function() {
                    var check_event = $(this)
                        .html();
                    if (check_event == 'show') {
                        $('.hidden_password')
                            .prop('type', 'text');
                        $(this)
                            .html('hide');
                    } else {
                        $('.hidden_password')
                            .prop('type', 'password');
                        $(this)
                            .html('show');
                    }
                });
        });

</script>
