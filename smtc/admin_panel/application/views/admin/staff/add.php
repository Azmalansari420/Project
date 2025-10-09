
<?php $this-> load->view('admin/header');?>
<!-- Content Wrapper. Contains page content -->
<div class="clearfix"></div>
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumb-->
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <h4 class="page-title">Add Staff</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo  base_url('dashboard')  ?>">Dashboard</a> </li>
                    <li class="breadcrumb-item"><a href="<?php echo  base_url('Staff/listing')  ?>">Staff </a> </li>
                    <li class="breadcrumb-item">Add New </li>
                </ol>
            </div>
        </div>
        <style type="text/css">
            .ng-hide {
                display: none;
            }
            
            input[type=checkbox], input[type=radio] {
                    box-sizing: border-box;
                    padding: 0;
                    margin-left: 10px;
                    margin-right: 10px;
                    width: 100px;
                    height: 20px;
                }

        </style>
        <!-- End Breadcrumb-->
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title"> <?=$this->session->flashdata('msg')?></div>
                       
                            <form role="form" method="post" id="form" enctype="multipart/form-data">
                                        <div class="box-body row">
                                             <div class="form-group col-sm-12">
                                              <label for="exampleInputEmail1">Name*</label>
                                              <input type="text" class="form-control" name="name" required placeholder="Enter name" required>         
                                              <?php echo form_error('name'); ?>
                                            </div>
                                          
                                            <div class="form-group col-sm-6">
                                                <label for="exampleInputEmail1"> Contact Number*</label>
                                                <input type="number" class="form-control" name="contact_no" required value=""  placeholder="Enter Host Contact Number">
                                                <?php echo form_error('contact_no'); ?>
                                            </div> 
                                            <div class="form-group col-sm-6">
                                                <label for="exampleInputEmail1">Email*</label>
                                                <input type="email" class="form-control" name="email" value="" required placeholder="Enter Email">
                                                <?php echo form_error('email'); ?>
                                            </div> 
                                          
                                            <div class="form-group col-sm-6">
                                                <label for="exampleInputEmail1">Password*</label>
                                                <input type="text" class="form-control" name="password" value=""  required placeholder="Enter password">
                                                <?php echo form_error('password'); ?>
                                            </div> 
                                            <div class="form-group col-sm-6">
                                                <label for="exampleInputEmail1">Designation*</label>
                                                <input type="text" class="form-control" name="designation" value="" required  placeholder="Enter designation">
                                                <?php echo form_error('designation'); ?>
                                            </div> 
                                           <div class="form-group col-sm-6">
                                                <label for="exampleInputPassword1">Status</label>
                                                <select class="form-control" name="status" required>
                                                    <option value='1'  >Active</option>
                                                    <option value='0' >Inactive</option>
                                                </select>
                                                <?php echo form_error( 'status'); ?>
                                            </div>  
                                           <div class="col-sm-12">
                    						    <div class="form-group">
                    								<label>User Access</label><br>
                    								<hr>
                    								
                    								<label class="checkbox-inline"><input type="checkbox" value="1" name="permission[]"> Student</label>
                    								<label class="checkbox-inline"><input type="checkbox" value="2" name="permission[]"> Payment</label>
                    								<label class="checkbox-inline"><input type="checkbox" value="3" name="permission[]"> State</label>
                    								<label class="checkbox-inline"><input type="checkbox" value="4" name="permission[]"> Course</label>
                    								<label class="checkbox-inline"><input type="checkbox" value="5" name="permission[]"> Media</label>
                    			                    <label class="checkbox-inline"><input type="checkbox" value="6" name="permission[]"> Specialization</label>
                    			                    <label class="checkbox-inline"><input type="checkbox" value="7" name="permission[]">Exam</label>
                    			                    <label class="checkbox-inline"><input type="checkbox" value="8" name="permission[]">Exam Held</label>
                    			                    <label class="checkbox-inline"><input type="checkbox" value="9" name="permission[]">Result</label>
								                </div>
								
                                                        						
                                            </div>
						 
                                        </div>
                                        <!-- /.box-body -->
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-primary" name="submitform">Add Staff</button>
                                            <a href="<?php echo base_url()?>/Staff/listing"> <button type="button" class="btn btn-primary" name="submitform">Cancel </button></a>
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