
   <!-- Custom scripts -->

<?php $this->load->view('admin/header');?>             

<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">
    <!-- Breadcrumb-->
    <div class="row pt-2 pb-2">
        <div class="col-sm-9">
        <h4 class="page-title">All Student List</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
            <li class="breadcrumb-item " aria-current="page"><a href="<?php echo base_url('user/all/') ?>">All Student</a> </li>
            <li class="breadcrumb-item " aria-current="page"><a href="<?php echo base_url('user/profile/').$RESULT[0]->user_refid ?>">Student profile</a></li>
            <li class="breadcrumb-item active" aria-current="page">Student Result</li>
         </ol>
     </div>
     </div>
     <style type="text/css">
       .ng-hide{
          display: none;
       }
     </style>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
               <div class="card-body">
                    <div class="card-title"> <?php echo $this->session->flashdata('msg'); ?></div>
                      <!-- /.box-header -->
                            <?php  $marksheet =  $this->result_model->getMarksheetOFResult($RESULT[0]->id);  ?>
                          
                            <table class="table table-bordered">
                                  <tr>
                                    <td>Name :</td>
                                    <td> <strong><?php echo $user[0]->name; ?></strong> </td>
                                </tr>
                                <tr>
                                    <td>Enrollment Number :</td>
                                    <td> <strong><?php echo $user[0]->reg_id; ?></strong> </td>
                                </tr>
                                <tr>
                                    <td>Course:</td>
                                    <td> <?php echo $user[0]->course;; ?></td>
                                </tr>
                                <tr>
                                    <td>Lateral Entry:</td>
                                    <td> <?php echo $user[0]->lateral_entry; ?></td>
                                </tr>
                                <tr>
                                    <td>Semester:</td>
                                    <td> <?php echo $RESULT[0]->semester  ?> Semester</td>
                                </tr>
                                
                            </table>
                            <form class="form-horizontal post" method="post">
                            <div class="row">
                 
                              
                                <div class="form-group col-sm-6" id="year">
                                    <label for="exampleInputEmail1">Year <span class="error"> * </span> </label>
                                    <input type="text" name="year" class="form-control" value= <?php echo $RESULT[0]->year  ?> > 
                                </div>
                              
                                <div class="form-group col-sm-6">
                                    <label for="exampleInputEmail1">Result Status </label>
                                    <select class="form-control" name="result" required>
                                        <option value=""> Select--</option>
                                        <option <?php echo ($RESULT[0]->result == 'Passed' ) ?" Selected ":" "  ;  ?> >Passed</option>
                                        <option <?php echo ($RESULT[0]->result == 'Failed' ) ?" Selected ":" "  ;  ?> >Failed</option>
                                        <option <?php echo ($RESULT[0]->result == 'Awaited' ) ?" Selected ":" "  ;  ?> >Awaited</option>
                                        <option <?php echo ($RESULT[0]->result == 'Promoted' ) ?" Selected ":" "  ;  ?> >Promoted</option>
                                        <option <?php echo ($RESULT[0]->result == 'LE' ) ?" Selected ":" "  ;  ?> >LE</option>
                                    </select>
                                </div>
                                  <div class="form-group col-sm-6"  id="declared_date">
                          		    <label for="exampleInputEmail1">Declared Date</label>
                                    <input class="form-control" type="date" value="<?php echo $RESULT[0]->declared_date  ?>" name="declared_date" >
                                       
                                </div>
                                
                                 <div class="form-group col-sm-6"  id="declared_date">
                              		    <label for="exampleInputEmail1">Exam Center Code</label>
                                        <input class="form-control" type="text" name="exam_center_code" value="<?php echo $RESULT[0]->exam_center_code  ?>" >
                                           
                                    </div> 
                                    <div class="form-group col-sm-6"  id="declared_date">
                              		    <label for="exampleInputEmail1">Exam Center</label>
                                        <textarea name="exam_center" class="form-control" ><?php echo $RESULT[0]->exam_center  ?></textarea>
                                           
                                    </div>
                            </div>
                            <hr>
                           
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-danger btn-lg" name="updateResult">Submit</button>
                                </div>
                            </div>
                        </form>
       
              
               </div>
            </div>
        </div>
    </div><!--End Row-->


    </div>
  </div>
<?php $this->load->view('admin/footer');?>
<script>

 
function addImage()
{ 
  $('#append_image').append('<div class="fille_group row" style="margin-bottom: 10px;padding: 10px;""><div class="col-md-2"><input type="text" class="form-control" name="subjectName[]" required Placeholder=""></div><div class="col-md-2"><input type="number" class="form-control" name="subjet_max_marks[]" required placeholder=""></div><div class="col-md-1"><input type="number" class="form-control" name="subjet_marks_theory_first[]" required placeholder=""></div><div class="col-md-1"><input type="number" class="form-control" name="subjet_marks_theory_second[]" required placeholder=""></div><div class="col-md-2"><input type="number" class="form-control" name="subjet_marks_pratical[]"  placeholder=""></div><div class="col-md-2"><input type="number" class="form-control" name="total_marks[]" required placeholder=""></div><div class="col-md-2"></div></div>');
}

</script>

