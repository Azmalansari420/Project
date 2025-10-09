
   <!-- Custom scripts -->

<?php $this->load->view('admin/header');?>             

<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">
    <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
            <h4 class="page-title">View Result</h4>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo  base_url('dashboard')  ?>">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="<?php echo  base_url('result/listing')  ?>">Result </a></li>
            <li class="breadcrumb-item"><?php echo $user[0]->reg_id; ?>-<?php echo $RESULT[0]->semester  ?> -Result </li>
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
                            <?php  $marksheet =  $this->result_model->getMarksheetOFResult($RESULT[0]->id);  ?>
                          
                            <table class="table table-bordered">
                                <tr>
                                    <td>Enrollment Number :</td>
                                    <td> <strong><?php echo $user[0]->reg_id; ?></strong> </td>
                                </tr>
                                <tr>
                                    <td>Course:</td>
                                    <td> <?php echo$user[0]->course;; ?></td>
                                </tr>
                                <tr>
                                    <td>Lateral Entry:</td>
                                    <td> <?php echo $RESULT[0]->lateral_entry; ?></td>
                                </tr>
                                <tr>
                                    <td>Semester:</td>
                                    <td> <?php echo $RESULT[0]->semester  ?> Semester</td>
                                </tr>
                                <tr>
                                    <td>Declared Date:</td>
                                    <td> <?php echo $RESULT[0]->declared_date  ?> </td>
                                </tr>
                                  <tr>
                                    <td></td>
                                    <td>  <?php echo $RESULT[0]->year  ?></td>
                                </tr>
                            </table>
                       
                                <?php if(count($marksheet)>1) { ?>
                                <?php $total = $total_Max  = 0 ;  ?>
                                 <div class="form-group col-sm-12 box box-success box-solid">
                                    <div class="box-header with-border"> <h3>  Marksheet</h3> </div>
                                    <div class="box-body table-responsive">
                                        <table class=" table table-bordered">
                                            <tr>
                                                 <td style="width:30%"><b> Subject</b></td>
                                                 <td><b> Max  Marks </b></td>
                                                 
                                                 <td><b> Total </b></td>
                                            </tr>
                                             <?php  
                                              foreach ($marksheet as $key => $row2) {?>
                                                 <tr>
                                                     <td><? echo @$row2['subject']; ?> </td>
                                                     <td><? echo @$row2['max_marks']; ?> </td>
                                              
                                                     <td><? echo @$row2['total_marks']; ?> </td>
                                                
                                                </tr>
                                                <?php 
                                                	$total = $total + $row2['total_marks'] ; 
			    	                                $total_Max = $total_Max + $row2['max_marks'] ; 
			    	                             ?>
                                             <?php } ?>
                                         </table>
                                    </div>  
                                </div>
                                 <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Maximum Marks</th>
                                            <th> Obatined Marks</th>
                                            <th> Result %</th>
                                            <th> Garde</th>
                                        </tr>
                                        <tr>
                                            <td> <?php echo @$total_Max  ?></td>
                                            <td> <?php echo @$total  ?></td>
                                            <td><?php echo  @$percentage = $total*100/$total_Max ;   ?></td>
                                            <td><?php echo @$RESULT[0]->grade  ?></td>
                                            
                                        </tr>
                                    </thead>
                                </table>
                                <?php } ?>
                               
                                <br>
                                <h3>
                                    Result Status : <?php echo @$RESULT[0]->result  ?>
                                </h3>
                            
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

