<?php $this->load->view('admin/header');?>
<div class="clearfix"></div>

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumb-->
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <h4 class="page-title">Add exam Question</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo  base_url('dashboard')  ?>">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item"><a href="<?php echo  base_url('exam/listing')  ?>">Exam </a>
                    </li>
                    <li class="breadcrumb-item">Add Question </li>
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

                        <div class="row card-header">
                            <div class="col-sm-4">
                        
                                    
                                   <h5><?php echo $exam[0]->title; ?></h5>
                            </div>
                             <div class="col-sm-4">
                               <?=$this->session->flashdata('msg')?>
                            </div>
                             <div class="col-sm-4">
                      
                              <a href="<?php echo base_url('exam/questionlisting/'.$exam[0]->id); ?>" class="btn  btn-warning btn-xs"><i class="fa fa-fw fa-eye"></i>View All Question </a>
                            </div>
                          </div>

                      
                        <!-- form start -->
                        <?php echo $this->session->flashdata('msg'); ?>


                        <form role="form" method="post" id="form" action="<?php echo base_url('exam/editExamQueProcess/') ?>" autocomplete="off" enctype="multipart/form-data">

                            <div class="box-body row">
                              <input type="hidden" name="exam_id" value="<?php echo $exam[0]->id; ?>">
                              <input type="hidden" name="ques_id" value="<?php echo $RESULT[0]->id; ?>">



                                  <div class="form-group col-sm-6 ">

                                  <label for="exampleInputPassword1">Status</label>

                                  <select class="form-control" name="status" required>

                                    <option value='1' <?php echo($RESULT[0]->status==1)?'selected':''; ?> >Active</option>

                                    <option value='0' <?php echo($RESULT[0]->status==0)?'selected':''; ?>>Inactive</option>

                                  </select>

                                  <?php echo form_error('status'); ?>

                                        </div> 

                                <div class="form-group col-sm-3">

                                  <label for="exampleInputEmail1">Marks <span class="error"> * </span></label>

                                  <input type="number" class="form-control" name="marks" id="marks" value="<?php echo $RESULT[0]->marks; ?>" required>

                                  <?php echo form_error('marks'); ?> 

                               </div>
    
                              

                          
                                <div class="form-group col-sm-12">

                                    <label for="exampleInputEmail1"> Question <?php echo count($allexam) ;  ?> <span class="error"> * </span></label>

                                    <textarea class="form-control" name="question" id="summernoteEditor1" placeholder="Enter short description" required><?php echo $RESULT[0]->question; ?></textarea>

                                </div>



                               
                            </div>


                            <hr>
                            <div style="background: #f6f6f6;padding: 10px">

                              <div class="row">
                                <div class="col-1"> SNo </div>
                                <div class="col-8"> Option<span class="error"> * </span></div>
                                <div class="col-2">Mark Correct<span class="error"> * </span> </div>
                                
                              </div>
                              <div class="row">
                                <div class="col-1">1</div>
                                <div class="col-8"> 
                                 <textarea class="form-control" name="optionA" id="summernoteEditor2" placeholder="Enter short option" required><?php echo $RESULT[0]->optionA; ?></textarea></div>
                                <div class="col-2">
                                  <input type="radio" name="correct" value="A" required  <?php echo($RESULT[0]->correct=='A')?'checked':''; ?>>
                                </div>
                              </div>
                               <div class="row">
                                <div class="col-1">2</div>
                                <div class="col-8"> 
                                 <textarea class="form-control" name="optionB" id="summernoteEditor3" placeholder="Enter short option" required><?php echo $RESULT[0]->optionB; ?></textarea></div>
                                <div class="col-2">
                                  <input type="radio" name="correct" value="B"  <?php echo($RESULT[0]->correct=='B')?'checked':''; ?>>
                                </div>
                              </div>
                               <div class="row">
                                <div class="col-1">3</div>
                                <div class="col-8"> 
                                 <textarea class="form-control" name="optionC" id="summernoteEditor4" placeholder="Enter short option" required><?php echo $RESULT[0]->optionC; ?></textarea></div>
                                <div class="col-2">
                                  <input type="radio" name="correct" value="C"  <?php echo($RESULT[0]->correct=='C')?'checked':''; ?>>
                                </div>
                              </div>
                               <div class="row">
                                <div class="col-1">4</div>
                                <div class="col-8"> 
                                 <textarea class="form-control" name="optionD" id="summernoteEditor5" placeholder="Enter short option" required><?php echo $RESULT[0]->optionD; ?></textarea></div>
                                <div class="col-2">
                                  <input type="radio" name="correct" value="D"  <?php echo($RESULT[0]->correct=='D')?'checked':''; ?>>
                                </div>
                              </div>
                            </div>
                            <!-- /.box-body -->

                            <hr>

                            <div class="box-footer">

                                <button type="submit" class="btn btn-primary" name="submitform">Submit</button>

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

<script>
 
        
        $('#summernoteEditor1').summernote({
            height:200,
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', [ 'picture']],
                ['height', ['height']]
            ]
        });


</script>
<script>
        $('#summernoteEditor2').summernote({
            height:100,
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', [ 'picture']],
                ['height', ['height']]
            ]
        });$('#summernoteEditor3').summernote({
            height:100,
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', [ 'picture']],
                ['height', ['height']]
            ]
        });$('#summernoteEditor4').summernote({
            height:100,
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', [ 'picture']],
                ['height', ['height']]
            ]
        });$('#summernoteEditor5').summernote({
            height:100,
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', [ 'picture']],
                ['height', ['height']]
            ]
        });
</script>
