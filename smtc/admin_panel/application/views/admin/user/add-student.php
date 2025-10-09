<?php $this->load->view('admin/header');?>
<!-- Content Wrapper. Contains page content -->


<div class="clearfix"></div>

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumb-->
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <h6 class="page-title">Add Student</h6>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo  base_url('dashboard')  ?>">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item"><a href="<?php echo  base_url('user/listing')  ?>">Student </a>
                    </li>
                    <li class="breadcrumb-item">Add New Student</li>
                </ol>
            </div>

        </div>
        <style type="text/css">
            .ng-hide {
                display: none;
            }

        </style>
        <!-- End Breadcrumb-->


        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title"></div>

                        <?=$this->session->flashdata('msg')?>
                        <form class="form-horizontal post" method="post" id="profile_form" enctype="multipart/form-data">
                            <table class="">
                                <tr>
                                    <td ><strong> Name: </strong> </td>
                                    <td style="width: 70%">
                                        <input type="text" name="name" class="form-control" value="" required Placeholder ="Enter Name"> </td>
                                </tr>
                                <tr>
                                    <td><strong>Father Name: </strong> </td>
                                    <td>
                                        <input type="text" name="father_name" class="form-control" value="" required Placeholder ="Enter Father Name"> </td>
                                </tr>
                                <tr>
                                    <td><strong>Mother Name: </strong> </td>
                                    <td>
                                        <input type="text" name="mother_name" class="form-control" value="" required Placeholder ="Enter Mother Name"> </td>
                                </tr>
                                <tr>
                                    <td><strong>Course Name: </strong> </td>
                                    <td>
                                        <select class="form-control" name="course_id" required>
    			                          <option value=''>--Select--</option>
    			                          <?php echo $this->course_model->get_all_child_course(0); ?>
    			                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Specialization One: </strong> </td>
                                    <td>
                                        <?php $all_fetch_specialization = $this->specialization_model->get_all_specialization() ;  ?>
                                	     <select class="form-control "  name="specialization[]" >
        							     	<option value="">Select specialization</option>
            							    <?php foreach($all_fetch_specialization as $afs){ ?>
                        				    <option  value="<?php echo $afs->id; ?>" ><?php echo $afs->name; ?></option>
                        				    <?php }   ?>						  	
        							     </select>
                    
                							  
                                       </td>
                                </tr> 
                                <tr>
                                    <td><strong>Specialization Two: </strong> </td>
                                    <td>
                                        <?php $all_fetch_specialization = $this->specialization_model->get_all_specialization() ;  ?>
                                	     <select class="form-control "  name="specialization[]" >
        							     	<option value="">Select specialization</option>
            							    <?php foreach($all_fetch_specialization as $afs){ ?>
                        				    <option  value="<?php echo $afs->id; ?>" ><?php echo $afs->name; ?></option>
                        				    <?php }   ?>						  	
        							     </select>
                    
                							  
                                       </td>
                                </tr>
                                 
                                <tr>
                                    <td><strong>Marital Status: </strong> </td>
                                    <td>
                                        <select class="form-control marital_status" required="" name="marital_status">
            							  	<option value="Unmarried"   >Unmarried</option>
            							  	<option value="Married"   >Married</option>							  	
            							  </select>
            						</td>
                                </tr>
                               
                                <tr>
                                    <td><strong>DOB: </strong> </td>
                                    <td>
                                        <input type="date" name="dob" class="form-control" value="" required> </td>
                                </tr>
                                <tr>
                                    <td><strong>Gender: </strong> </td>
                                    <td>
                                        <select class="form-control" name="gender" required>
                                            <option value="Male" >Male</option>
                                            <option value="Female"  >Female</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Email: </strong> </td>
                                    <td>
                                        <input type="email" name="email" class="form-control" value="" required> </td>
                                </tr>
                                <tr>
                                    <td><strong>Mobile: </strong> </td>
                                    <td>
                                        <input type="number" name="mobile" class="form-control" value="" required> </td>
                                </tr>
                                <tr>
                                    <td><strong>State: </strong> </td>
                                    <td>
                                         <?php $all_state = $this->state_model->get_all_state() ;  ?>
                                	     <select class="form-control "  name="state_id" >
        							     	<option value="">Select State</option>
            							    <?php foreach($all_state as $afs){ ?>
                        				    <option  value="<?php echo $afs->id; ?>" ><?php echo $afs->name; ?> (<?php echo $afs->code; ?>)</option>
                        				    <?php }   ?>						  	
        							     </select>
                                    </td>
                                </tr>
                               
                                <tr>
                                    <td><strong>Present Address: </strong> </td>
                                    <td>
                                        <textarea name="address" class="form-control" required></textarea>
                                    </td>
                                </tr>
                             
                                <tr>
                                    <td><strong>Last Qualification: </strong> </td>
                                    <td>
                                       
                                        <select name="last_qualification" class="form-control" required="">
                						       <option value="">Select Last Qualification</option>
                						   <option value="10th Based">10th Based</option>
                						   <option value="12th Based">12th Based</option>
                						   <option value="ITI Based">ITI Based</option>
                						   <option value="Diploma Based">Diploma Based</option>
                						   <option value="Graduation Based" >Graduation Based</option>
                						   </select>
                                    </td>
                                </tr>
                             
                              
                             
                              
                                <tr>
                                    <td><strong>Exam Option: </strong> </td>
                                    <td>
                                        <select name="exam_option" class="form-control" required="">
                						       <option value="">Select Exam Option</option>
                						   <option value="Online Exam">Online Exam</option>
                						   <option value="Center Exam">Center Exam</option>
                						   <option value="Assignment">Assignment</option>
                						   </select>
                                       
                                    </td>
                                </tr>
                                   <tr>
                                    <td><strong>Exam Session: </strong> </td>
                                    <td>
                                        <input type="text" name="exam_session" required class="form-control"  value="">
                                    </td>
                                </tr>
                                   <tr>
                                    <td><strong>Work Experience: </strong> </td>
                                    <td>
                                         <input type="text" name="work_experience" class="form-control"  value="">
                                        
                                    </td>
                                </tr> 
                                
                                <tr>
                                    <td><strong>Fees Amount: </strong> </td>
                                    <td>
                                        <input type="number" name="received_amount" class="form-control" required value="">
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Payment Option: </strong> </td>
                                    <td>
                                       <select name="payment_mode" required="" class="form-control">
	                                        <option value="">Select Payment Mode</option>
	       						               <option value="1">Cash</option>
           						               <option value="2">Credit Card</option>
           						               <option value="3">Online Payment</option>
           						               <option value="4">Cheque Card</option>
	           						   </select>
                                </tr>
                              
                                <tr>
                                    <td><strong>Enter Late Fee Amount: </strong> </td>
                                    <td>
                                        <input type="number" name="late_fees" class="form-control"  value="">
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Enter Exam Fee Amount</strong> </td>
                                    <td>
                                        <input type="number" name="exam_fees" class="form-control"  value="">
                                    </td>
                                </tr>  <tr>
                                    <td><strong>Enter Registration Fee Amount</strong> </td>
                                    <td>
                                        <input type="number" name="reg_fees" class="form-control"   value="">
                                    </td>
                                </tr>
                                 <tr>
                                    <td><strong>Date Of Admission: </strong> </td>
                                    <td>
                                        <input type="date" name="join_date" class="form-control" required value=""> </td>
                                </tr>
                                <tr>
                                    <td><strong>Passing Year</strong> </td>
                                    <td><input type="text" name="year_of_passing" class="form-control" value=""> </td>
                                </tr>
                                <tr>
                                    <td><strong>Status: </strong> </td>
                                    <td>
                                        <select class="form-control" name="status" required>
                                            <option value="1"  >Active</option>
                                            <option value="0" >Inactive</option>
                                        </select>
                                    </td>
                                </tr>  
                                <tr>
                                    <td><strong>Approval Status: </strong> </td>
                                    <td>
                                        <select class="form-control" name="approval_status" required>
                                            <option value="1">Approved</option>
                                            <option value="0"  >Not Approved</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Lateral Entry Status: </strong> </td>
                                    <td>
                                        <select class="form-control" name="lateral_entry" required>
                                           
                                            <option value="No">No</option>
                                             <option value="Yes">Yes</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Students Profile  Image</strong></td>
                                    <td> <input class="form-control post" accept="image/png, image/jpeg,image/png,image/JPEG,image/JPG,image/PNG" type="file"  required name="photo">
                        									<small style="color:#f00">upload file size 1MB JPG,PNG</small></td>
                                </tr> 
                                <tr>
                                    <td><strong>Students Signatcontrolure Image</strong></td>
                                    <td> <input class="form-control post" accept="image/png, image/jpeg,image/png,image/JPEG,image/JPG,image/PNG" type="file"  required name="student_signature">
                        									<small style="color:#f00">upload file size 1MB JPG,PNG</small></td>
                                </tr> 
                                <tr>
                                    <td><strong>Students Aadhar Card Image</strong></td>
                                    <td> <input class="form-control post" accept="image/png, image/jpeg,image/png,image/JPEG,image/JPG,image/PNG" type="file"  required name="adhar_pic">
                        									<small style="color:#f00">upload file size 1MB JPG,PNG</small></td>
                                </tr>
                     
                                <tr>
                                    <td><strong>Students Minimum Qualification 10<sup>th</sup> or 12<sup>th</sup>  Image</strong></td>
                                    <td> <input class="form-control post" accept="image/png, image/jpeg,image/png,image/JPEG,image/JPG,image/PNG" type="file" required  name="cover">
                        									<small style="color:#f00">upload file size 1MB JPG,PNG</small></td>
                                </tr>
                                
                            </table>
                            
                            <hr>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-danger" name="add_profile">Add Profile</button>
                                </div>
                            </div>
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
        <!--End Row-->


    </div>
</div>
<?php $this->load->view('admin/footer');?>
<!-- Custom scripts -->
