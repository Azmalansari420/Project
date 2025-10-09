
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
                       
                             <form role="form" method="post" id="form" autocomplete="off" enctype="multipart/form-data">
                                <div class="box-body row">
                                    <div class="form-group col-sm-12">
                                      <label for="exampleInputEmail1">Name*</label>
                                      <input type="text" class="form-control" name="name" required placeholder="Enter name" value="<?php echo $RESULT[0]->name; ?>" required>         
                                      <?php echo form_error('name'); ?>
                                    </div>
                       
                                    <div class="form-group col-sm-6">
                                        <label for="exampleInputEmail1"> Contact Number*</label>
                                        <input type="number" class="form-control" name="contact_no" required value="<?php echo $RESULT[0]->contact_no; ?>"  placeholder="Enter Host Contact Number">
                                        <?php echo form_error('contact_no'); ?>
                                    </div> 
                                    <div class="form-group col-sm-6">
                                        <label for="exampleInputEmail1">Email*</label>
                                        <input type="email" class="form-control" name="email" value="<?php echo $RESULT[0]->email; ?>" required placeholder="Enter Email">
                                        <?php echo form_error('email'); ?>
                                    </div> 
                                   
                     
                                    <div class="form-group col-sm-6">
                                        <label for="exampleInputEmail1">Designation*</label>
                                        <input type="text" class="form-control" name="designation" value="<?php echo $RESULT[0]->designation; ?>" required  placeholder="Enter designation">
                                        <?php echo form_error('designation'); ?>
                                    </div> 
                                     <div class="form-group col-sm-6">
                                        <label for="exampleInputPassword1">Status</label>
                                        <select class="form-control" name="status" required>
                                            <option value='1' <?php echo($RESULT[0]->status==1)?'selected':''; ?> >Active</option>
                                            <option value='0' <?php echo($RESULT[0]->status==0)?'selected':''; ?>>Inactive</option>
                                        </select>
                                        <?php echo form_error( 'status'); ?>
                                    </div>
                                    
                                     <div class="col-sm-12">
            						    <div class="form-group">
            								<label>User Access</label><br>
            								<hr>
            								<?php $permission = explode('@' , $RESULT[0]->permission) ; ?>
            								<label class="checkbox-inline"><input type="checkbox" value="1"  <?php echo(in_array('1',$permission))?'checked':''; ?>  name="permission[]"> Student</label>
            								<label class="checkbox-inline"><input type="checkbox" value="2"  <?php echo(in_array('2',$permission))?'checked':''; ?>  name="permission[]"> Payment</label>
            								<label class="checkbox-inline"><input type="checkbox" value="3"  <?php echo(in_array('3',$permission))?'checked':''; ?>  name="permission[]"> State</label>
            								<label class="checkbox-inline"><input type="checkbox" value="4"  <?php echo(in_array('4',$permission))?'checked':''; ?>  name="permission[]"> Course</label>
            								<label class="checkbox-inline"><input type="checkbox" value="5"  <?php echo(in_array('5',$permission))?'checked':''; ?>  name="permission[]"> Media</label>
            			                    <label class="checkbox-inline"><input type="checkbox" value="6"  <?php echo(in_array('6',$permission))?'checked':''; ?>  name="permission[]"> Specialization</label>
            			                    <label class="checkbox-inline"><input type="checkbox" value="7"  <?php echo(in_array('7',$permission))?'checked':''; ?>  name="permission[]">Exam</label>
            			                    <label class="checkbox-inline"><input type="checkbox" value="8"  <?php echo(in_array('8',$permission))?'checked':''; ?>  name="permission[]">Exam Held</label>
            			                    <label class="checkbox-inline"><input type="checkbox" value="9"  <?php echo(in_array('9',$permission))?'checked':''; ?>  name="permission[]">Result</label>
						                </div>
						
                                                						
                                    </div>
						 
                                  
                                 
                                </div>
                                
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary" name="submitform">Submit</button>
                                    <a href="<?php echo base_url()?>/staff/listing">
                                        <button type="button" class="btn btn-primary" name="submitform">Cancel </button>
                                    </a>
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
