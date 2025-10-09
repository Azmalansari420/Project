<?php $this->load->view('admin/header');?>             

<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">
    <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
            <h4 class="page-title">Add Result</h4>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo  base_url('dashboard')  ?>">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="<?php echo  base_url('result/listing')  ?>">Result </a></li>
            <li class="breadcrumb-item">Add New </li>
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
                    <div class="card-title"></div>
                      <!-- /.box-header -->
                            <?php echo $this->session->flashdata('msg'); ?>
                            <!-- form start -->
                            <form role="form" method="post" id="form" autocomplete="off" enctype="multipart/form-data">
                                <div class="box-body row">

                                    <div class="form-group col-sm-6">
                                        <label for="exampleInputEmail1">Enrollment Number </label>
                                        <?php $student = $this->user_model->get_all_users();  ?>
                                        <select class="form-control"  name="eno" required id="Eno">
                                            <option value="" > --Select--</option>
                                            <?php foreach ($student as $key => $value) { ?>

                                                   <option><?php echo $value->Eno ?></option>
                                               
                                            <?php } ?>                   
                                        </select>
                                    </div>  
      
                                    <div class="form-group col-md-6">
                                        <label>Course </label>

                                        <input type="hidden" name="course_id" value="" id="course_id"  >
                                        <input type="text"  value="" id="course" readonly="" class="form-control" >
                                    </div>
                                     <div class="form-group col-md-6">
                                        <label>Name </label>

                                        <input type="text"  value="" id="Name" readonly="" class="form-control" >
                                    </div> 

                                      <div class="form-group col-sm-6">
                                                <label for="exampleInputEmail1">Lateral Entry </label>
                                                <select class="form-control"  name="lateral_entry"  id="lateral_entry">
                                                    <option  > No</option>
                                                    <option  > Yes</option>
                                                       
                                                </select>
                                           </div>
                              
                                
                                    <div class="form-group col-sm-6">
                                        <label for="exampleInputEmail1">Semester </label>
                                       <select class="form-control"  name="semester" required id="semester">
                                        <option   value="" > --Select--</option>
                                        <option   value="1">  Semester 1 </option>
                                        <option   value="2">  Semester 2 </option>
                                        <option   value="3" >  Semester 3 </option>
                                        <option    value="4">  Semester 4 </option>
                                        <option    value="5">  Semester 5 </option>
                                        <option   value="6" >  Semester 6 </option>
                                        <option    value="7">  Semester 7 </option>
                                        <option   value="8">  Semester 8 </option>
                                        
                                    </select>
                                    </div>  

                                    <div class="form-group col-sm-6">
                                        <label for="exampleInputEmail1">Month <span class="error"> * </span></label>
                                        <select class="form-control"  name="Month" required>
                                            <option value="" > --Select--</option>
                                            <option>        January </option>
                                            <option>        February</option>   
                                            <option>        days </option>
                                            <option>        March</option>
                                            <option>        April</option>  
                                            <option>        May </option>
                                            <option>        June</option>   
                                            <option>        July</option>   
                                            <option>        August  </option>
                                            <option>        September</option>  
                                            <option>        October </option>
                                            <option>        November</option>   
                                            <option>        December</option>
                                            
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="exampleInputEmail1">Year <span class="error"> * </span></label>
                                         <select class="form-control"  name="Year" required>
                                            <option value="" > --Select--</option>
                                            <?php for ($i=2020; $i < 2100 ; $i++) {  ?>

                                                <option>  <?php echo $i ?> </option>
                                              
                                           <?php } ?>
                                            
                                         
                                            
                                        </select>
                                    </div>

                                    <div class="form-group col-sm-6">
                                        <label for="exampleInputEmail1">Garde </label>
                                        <select class="form-control"  name="Grade" required>
                                            <option value="" > Select--</option>
                                                <option>A+</option>
                                                <option>A</option>
                                                <option>B</option>
                                                <option>C</option>
                                                
                                                
                                            </select>
                                    </div>
                                     <div class="form-group col-sm-6">
                                                <label for="exampleInputEmail1">Result Status </label>
                                                <select class="form-control"  name="result" required>
                                                    <option value="" > Select--</option>
                                                        <option>Passed</option>
                                                        <option>Failed</option>
                                                        <option>Awaited</option>
                                                        <option>Lateral Entry</option>
                                                        
                                                        
                                                    </select>
                                            </div>
                                   
                                </div>

                                 <div class="form-group col-sm-12 box box-success box-solid" id="marksheet">
                                    <div class="box-header with-border"> <h3> Add Marksheet</h3> </div>
                                    <hr>
                                    <div class="box-body">
                                       <div class="fille_group row" style="margin-bottom: 20px;padding: 10px;"><div class="col-md-4"><b>Subject </b> </div><div class="col-md-2"><b>Max Marks </b>  </div><div class="col-md-1"><b>Theory 1 </b> </div><div class="col-md-1"><b>Theory 2 </b> </div><div class="col-md-2"><b>Praticals </b> </div><div class="col-md-2"><b>Total Marks </b> </div></div>
                                    <hr>
                                    <div id="add_marksheet">

                                    </div>

                                    


                                        <div id="append_image"></div>                       
                                        <span class="clearfix"></span>
                                        <div class="col-md-2" style="margin-top:10px;">
                                    <a type="button" onclick="addImage();" class="btn btn-primary" title="Add Image"><i class="fa fa-plus-circle"></i> Add More Fileds</a>
                                        </div>
                                    </div>  
                                </div>

                                <hr>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary" name="submitform">Submit</button>
                                </div>
                            </form>
               </div>
            </div>
        </div>
    </div><!--End Row-->


    </div>
  </div>

  <script type="text/javascript">
    $(document).ready(function(){ 
    $('#semester').on('change', function() {
         
            var semesterID = $(this).val();
            var course_id = $('#course_id').val();
            if (semesterID) {
                $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url('user/getCourseSemesterSubject') ?>',
                    data: { 'semester': semesterID, 'course': course_id },
                   
                    success: function(data) {
                    
                       $('#add_marksheet').html(data);
                           
                    }
                });
            } 
        });
        });
</script>

<?php $this->load->view('admin/footer');?>
   <!-- Custom scripts -->




<script>
   $('#summernoteEditor2').summernote({
            height: 400,
            tabsize: 2
        });
</script>
       
<script class="example">
        $(document).ready(function() {
            $('#form').parsley();
        });
</script>
<script type="text/javascript">
    $('#Eno').on('change', function() {
            var EnoID = $(this).val();
            if (EnoID) {
                $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url('user/getUserByEnrollmmentId') ?>',
                    data: 'Eno=' + EnoID,
                    dataType:"JSON",
                    success: function(data) {
                   
                         $('#Name').val(data.name);
                    
                         $('#course').val(data.course);
                         $('#course_id').val(data.course_id);
                        
                           
                    }
                });
            } 
        });

</script>

<script>

 
function addImage()
{ 
  $('#append_image').append('<div class=" row" style="margin-bottom: 10px;padding: 10px;"><div class="col-md-4"><input type="text" class="form-control" name="subjectName[]" value="" required Placeholder="" ></div><div class="col-md-2"><input type="number" class="form-control" name="subjet_max_marks[]" required placeholder=""></div><div class="col-md-1"><input type="number" class="form-control" name="subjet_marks_theory_first[]" required placeholder=""></div><div class="col-md-1"><input type="number" class="form-control" name="subjet_marks_theory_second[]"  placeholder=""></div><div class="col-md-2"><input type="number" class="form-control" name="subjet_marks_pratical[]"  placeholder=""></div><div class="col-md-2"><input type="number" class="form-control" name="total_marks[]" required placeholder=""></div></div>');
}

</script>
<script type="text/javascript">

    $(document.body).on('change',"#lateral_entry",function (e) {
   //doStuff
   var lateral_entry= $("#lateral_entry option:selected").val();
   if (lateral_entry=="Yes"){
    $('#marksheet').remove();
    
    }else {
    $('#marksheet').show();

    }
});
</script>