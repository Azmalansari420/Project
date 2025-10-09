<?php $this-> load->view('admin/header');?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="clearfix"></div>
<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumb-->
    <div class="row pt-2 pb-2">
      <div class="col-sm-9">
        <h4 class="page-title">Edit course</h4>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo  base_url('Dashboard')  ?>">Dashboard</a> </li>
          <li class="breadcrumb-item"><a href="<?php echo  base_url('course/listing')  ?>">course </a> </li>
          <li class="breadcrumb-item">Edit New </li>
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
              <hr>
              <form role="form" method="post" id="form" autocomplete="off" enctype="multipart/form-data">
                <div class="box-body">
                    <div class="row">
                    <div class="form-group col-sm-6">
                      <label for="exampleInputPassword1">Parent course</label>
                      <select class="form-control" name="parent_id" required id="select_cat">
                        <option value=""></option>
                        <option value='0'>Root</option>
                        <?php echo $this->course_model->get_all_child_course(0); ?> </select>
                      <?php echo form_error( 'parent_id'); ?> 
                    </div>
                     <div class="form-group col-sm-6">
                      <label for="exampleInputPassword1">Status</label>
                      <select class="form-control" name="status" required>
                        <option value='1' <?php echo($RESULT[0]->status==1)?'selected':''; ?> >Active</option>
                        <option value='0' <?php echo($RESULT[0]->status==0)?'selected':''; ?>>Inactive</option>
                      </select>
                      <?php echo form_error( 'status'); ?> </div>
                    <div class="form-group col-sm-6">
                      <label for="exampleInputEmail1">Title</label>
                      <input type="text" class="form-control" name="title" onkeyup="return set_slug(this.value);" value="<?php echo $RESULT[0]->title; ?>" required placeholder="Enter Title">
                      <?php echo form_error( 'title'); ?> </div>
                       <div class="form-group col-sm-6">
                        <label for="exampleInputEmail1">Code *</label>
                        <input type="text" class="form-control" name="code"  value="<?php echo $RESULT[0]->code; ?>" required placeholder="Enter code">
                        <?php echo form_error( 'code'); ?>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="exampleInputEmail1">Year *</label>
                        <input type="text" class="form-control" name="year" value="<?php echo $RESULT[0]->year; ?>" required placeholder="Enter year">
                        <?php echo form_error( 'year'); ?>
                    </div>
                    <div class="form-group col-sm-6">
                      <label for="exampleInputEmail1">Url Slug</label>
                      <input type="text" class="form-control" name="url_slug" id="url_slug" readonly value="<?php echo $RESULT[0]->url_slug; ?>">
                      <?php echo form_error( 'url_slug'); ?> </div>
                   
                    <div class="col-sm-12">    
                                       <div class="form-group col-sm-12 mar10bot box box-success box-solid">
                                        <div class="box-header with-border"> <h3> Add Semseter</h3> </div>
                                        <hr>
                                        <div class="box-body">
                                            <div class="form-group col-sm-6">
                                             <label for="exampleInputEmail1">Total Semester *</label>
                                                <select class="form-control" name="total_semester" id="total_semester" >
                                                    <option <?php echo ($RESULT[0]->total_semester ==  '1') ?"Selected" : "" ; ?>>1</option>
                                                    <option <?php echo ($RESULT[0]->total_semester ==  '2') ?"Selected" : "" ; ?>>2</option>
                                                    <option <?php echo ($RESULT[0]->total_semester ==  '3') ?"Selected" : "" ; ?>>3</option>
                                                    <option <?php echo ($RESULT[0]->total_semester ==  '4') ?"Selected" : "" ; ?>>4</option>
                                                    <option <?php echo ($RESULT[0]->total_semester ==  '5') ?"Selected" : "" ; ?>>5</option>
                                                    <option <?php echo ($RESULT[0]->total_semester ==  '6') ?"Selected" : "" ; ?>>6</option>
                                                    <option <?php echo ($RESULT[0]->total_semester ==  '7') ?"Selected" : "" ; ?>>7</option>
                                                    <option <?php echo ($RESULT[0]->total_semester ==  '8') ?"Selected" : "" ; ?>>8</option>
                                                    
                                                </select>
                                                <?php echo form_error( 'fees'); ?>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3" style="display:<?php echo ($RESULT[0]->total_semester  >=  '1' ) ?"block;" : "none" ; ?>" id="1">
                                                    <h6> SEMESTER 1 </h6>
                                                    <?php  
                                                    $semester_1 = $this->db->get_where('tbl_course_subject' ,array('course_id' => $RESULT[0]->id , 'semester'=>'1' ))->result() ; 
                                                    foreach ($semester_1 as $key => $value) { ?>
                                                         <input type="hidden" name="semesteronesubject_id[]" value="<?php echo $value->id ?>">
                                                       <input type="text" name="semesteronesubject[]"  value="<?php echo $value->subject ?>" class="form-control" placeholder="Subject One">
                                                    
                                                   <?php   }     ?>
                                                   <div>
                                                      <div id="append_subject_one"></div>                       
                                                      <span class="clearfix"></span>
                                                        <div class="col-md-2" style="margin-top:10px;">
                                                        <a type="button" onclick="append_subject_one();" class="btn btn-primary" title="Add Image"><i class="fa fa-plus-circle"></i> Add More Fileds</a>
                                                        </div>
                                                   </div>
                                                  
    
                                                </div>
                                                <div class="col-sm-3" style="display:<?php echo ($RESULT[0]->total_semester   >=   '2' ) ?"block;" : "none" ; ?>" id="2">
                                                    <h6> SEMESTER 2 </h6>
                                                     <?php  
                                                    $semester_1 = $this->db->get_where('tbl_course_subject' ,array('course_id' => $RESULT[0]->id , 'semester'=>'2' ))->result() ; 
                                                    foreach ($semester_1 as $key => $value) { ?>
                                                         <input type="hidden" name="semestertwosubject_id[]" value="<?php echo $value->id ?>">
                                                       <input type="text" name="semestertwosubject[]"  value="<?php echo $value->subject ?>" class="form-control" placeholder="Subject One">
                                                    
                                                   <?php   }     ?>
                                                    <div>
                                                      <div id="append_subject_two"></div>                       
                                                      <span class="clearfix"></span>
                                                        <div class="col-md-2" style="margin-top:10px;">
                                                        <a type="button" onclick="append_subject_two();" class="btn btn-primary" title="Add Image"><i class="fa fa-plus-circle"></i> Add More Fileds</a>
                                                        </div>
                                                   </div>
                                                  
                                                </div>
                                                <div class="col-sm-3" style="display:<?php echo ($RESULT[0]->total_semester   >=   '3' ) ?"block;" : "none" ; ?>" id="3">
                                                    <h6> SEMESTER 3 </h6>
                                                     <?php  
                                                    $semester_1 = $this->db->get_where('tbl_course_subject' ,array('course_id'  =>  $RESULT[0]->id , 'semester'=>'3' ))->result() ; 
                                                    foreach ($semester_1 as $key => $value) { ?>
                                                         <input type="hidden" name="semesterthreesubject_id[]" value="<?php echo $value->id ?>">
                                                       <input type="text" name="semesterthreesubject[]"  value="<?php echo $value->subject ?>" class="form-control" placeholder="Subject One">
                                                    
                                                   <?php   }     ?>
                                                    <div>
                                                      <div id="append_subject_three"></div>                       
                                                      <span class="clearfix"></span>
                                                        <div class="col-md-2" style="margin-top:10px;">
                                                        <a type="button" onclick="append_subject_three();" class="btn btn-primary" title="Add Image"><i class="fa fa-plus-circle"></i> Add More Fileds</a>
                                                        </div>
                                                   </div>

                                                   
                                                    
                                                </div>
                                                <div class="col-sm-3" style="display:<?php echo ($RESULT[0]->total_semester   >=   '4' ) ?"block;" : "none" ; ?>" id="4">
                                                    <h6> SEMESTER 4 </h6>
                                                       <?php  
                                                    $semester_1 = $this->db->get_where('tbl_course_subject' ,array('course_id'  => $RESULT[0]->id , 'semester'=>'4' ))->result() ; 
                                                    foreach ($semester_1 as $key => $value) { ?>
                                                         <input type="hidden" name="semesterfoursubject_id[]" value="<?php echo $value->id ?>">
                                                       <input type="text" name="semesterfoursubject[]"  value="<?php echo $value->subject ?>" class="form-control" placeholder="Subject One">
                                                    
                                                   <?php   }     ?>
                                                    <div>
                                                      <div id="append_subject_four"></div>                       
                                                      <span class="clearfix"></span>
                                                        <div class="col-md-2" style="margin-top:10px;">
                                                        <a type="button" onclick="append_subject_four();" class="btn btn-primary" title="Add Image"><i class="fa fa-plus-circle"></i> Add More Fileds</a>
                                                        </div>
                                                   </div>
                                                   
                                                    
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-3" style="display:<?php echo ($RESULT[0]->total_semester   >=  '5' ) ?"block;" : "none" ; ?>" id="5"> 
                                                    <h6>SEMESTER 5  </h6>
                                                        <?php  
                                                    $semester_1 = $this->db->get_where('tbl_course_subject' ,array('course_id'  =>  $RESULT[0]->id , 'semester'=>'5' ))->result() ; 
                                                    foreach ($semester_1 as $key => $value) { ?>

                                                       <input type="hidden" name="semesterfivesubject_id[]" value="<?php echo $value->id ?>">
                                                       <input type="text" name="semesterfivesubject[]"  value="<?php echo $value->subject ?>" class="form-control" placeholder="Subject One">
                                                    
                                                   <?php   }     ?>
                                                    <div>
                                                      <div id="append_subject_five"></div>                       
                                                      <span class="clearfix"></span>
                                                        <div class="col-md-2" style="margin-top:10px;">
                                                        <a type="button" onclick="append_subject_five();" class="btn btn-primary" title="Add Image"><i class="fa fa-plus-circle"></i> Add More Fileds</a>
                                                        </div>
                                                   </div>

                                                    
                                                  
                                                </div>
                                                <div class="col-sm-3" style="display:<?php echo ($RESULT[0]->total_semester   >=  '6' ) ?"block;" : "none" ; ?>" id="6">
                                                    <h6> SEMESTER 6 </h6>
                                                        <?php  
                                                    $semester_1 = $this->db->get_where('tbl_course_subject' ,array('course_id' => $RESULT[0]->id , 'semester'=>'4' ))->result() ; 
                                                    foreach ($semester_1 as $key => $value) { ?>
                                                         <input type="hidden" name="semestersixsubject_id[]" value="<?php echo $value->id ?>">
                                                       <input type="text" name="semestersixsubject[]"  value="<?php echo $value->subject ?>" class="form-control" placeholder="Subject One">
                                                    
                                                   <?php   }     ?>
                                                    <div>
                                                      <div id="append_subject_six"></div>                       
                                                      <span class="clearfix"></span>
                                                        <div class="col-md-2" style="margin-top:10px;">
                                                        <a type="button" onclick="append_subject_six();" class="btn btn-primary" title="Add Image"><i class="fa fa-plus-circle"></i> Add More Fileds</a>
                                                        </div>
                                                   </div>
                                                   
                                                    
                                                </div>
                                                <div class="col-sm-3" style="display:<?php echo ($RESULT[0]->total_semester  >=   '7' ) ?"block;" : "none" ; ?>" id="7">
                                                    <h6> SEMESTER 7 </h6>
                                                        <?php  
                                                    $semester_1 = $this->db->get_where('tbl_course_subject' ,array('course_id' => $RESULT[0]->id , 'semester'=>'7' ))->result() ; 
                                                    foreach ($semester_1 as $key => $value) { ?>
                                                         <input type="hidden" name="semestersevensubject_id[]" value="<?php echo $value->id ?>">
                                                       <input type="text" name="semestersevensubject[]"  value="<?php echo $value->subject ?>" class="form-control" placeholder="Subject One">
                                                    
                                                   <?php   }     ?>
                                                    <div>
                                                      <div id="append_subject_seven"></div>                       
                                                      <span class="clearfix"></span>
                                                        <div class="col-md-2" style="margin-top:10px;">
                                                        <a type="button" onclick="append_subject_seven();" class="btn btn-primary" title="Add Image"><i class="fa fa-plus-circle"></i> Add More Fileds</a>
                                                        </div>
                                                   </div>
                                                   
                                                   
                                                </div>
                                                <div class="col-sm-3" style="display:<?php echo ($RESULT[0]->total_semester   >=   '8' ) ?"block;" : "none" ; ?>" id="8"> 
                                                    <h6>SEMESTER 8  </h6>
                                                        <?php  
                                                    $semester_1 = $this->db->get_where('tbl_course_subject' ,array('course_id' => $RESULT[0]->id , 'semester'=>'8' ))->result() ; 
                                                    foreach ($semester_1 as $key => $value) { ?>
                                                         <input type="hidden" name="semestereightsubject_id[]" value="<?php echo $value->id ?>">
                                                       <input type="text" name="semestereightsubject[]"  value="<?php echo $value->subject ?>" class="form-control" placeholder="Subject One">
                                                    
                                                   <?php   }     ?>
                                                    <div>
                                                      <div id="append_subject_eight"></div>                       
                                                      <span class="clearfix"></span>
                                                        <div class="col-md-2" style="margin-top:10px;">
                                                        <a type="button" onclick="append_subject_eight();" class="btn btn-primary" title="Add Image"><i class="fa fa-plus-circle"></i> Add More Fileds</a>
                                                        </div>
                                                   </div>
                                                  
                                                </div>
                                            </div>
                                            
                    
                                         
                                        </div>  
                                    </div>
                                    </div>
                  </div>
                </div>
                <!-- /.box-body -->
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
<script>
  $(document).ready(function () {
      // $('#form').parsley();
      $('#select_cat') .val('<?php echo $RESULT[0]->parent_id; ?>').change();
      $("#select_cat > option[value="+<?php echo $RESULT[0]->parent_id; ?>+"]").prop("selected",true);
    });

</script>
<?php $this->load->view('admin/footer');?>
<!-- Custom scripts -->

<script class="example">
  function set_slug(VALUE) {
    //alert(VALUE);
    $("#url_slug")
      .val(string_to_slug(VALUE));
  }

  function string_to_slug(str) {
    str = str.replace(/^\s+|\s+$/g, ''); // trim
    str = str.toLowerCase();
    // remove accents, swap ñ for n, etc
    var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
    var to = "aaaaeeeeiiiioooouuuunc------";
    for (var i = 0, l = from.length; i < l; i++) {
      str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
    }
    str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
      .replace(/\s+/g, '-') // collapse whitespace and replace by -
      .replace(/-+/g, '-'); // collapse dashes
    return str;
  }

</script>
<script>
  $('#summernoteEditor2')
    .summernote({
      height: 200,
      tabsize: 2
    });

</script>
<script>
  $('#summernoteEditor3')
    .summernote({
      height: 200,
      tabsize: 2
    });

</script>
  <script type="text/javascript">

    $(document.body).on('change',"#total_semester",function (e) {
   //doStuff
   var selectedValue= $("#total_semester option:selected").val();
    var i=1 ;  
    for (var i = 1; i <= selectedValue; i++) {
        
        $('#'+i).show();

    }

    for (var i ; i < 9 ; i++) {
       $('#'+i).hide();
    }
 
  });

    function append_subject_one() {
   
    $('#append_subject_one').append('<input type="text" name="semesterone[]" class="form-control" placeholder="Subject ">');
  }
  function append_subject_two() {
    $('#append_subject_two').append('<input type="text" name="semestertwo[]" class="form-control" placeholder="Subject ">');
  
  }
  function append_subject_three() {
    $('#append_subject_three')
      .append('<input type="text" name="semesterthree[]" class="form-control" placeholder="Subject ">');
  
  }
  function append_subject_four() {
    $('#append_subject_four').append('<input type="text" name="semesterfour[]" class="form-control" placeholder="Subject ">');
  
  }
  function append_subject_five() {
    $('#append_subject_five').append('<input type="text" name="semesterfive[]" class="form-control" placeholder="Subject ">');
  
  }
  function append_subject_six() {
    $('#append_subject_six').append('<input type="text" name="semestersix[]" class="form-control" placeholder="Subject ">');
  
     
  }
  function append_subject_seven() {
    $('#append_subject_seven').append('<input type="text" name="semesterseven[]" class="form-control" placeholder="Subject ">');
  
     
  }
  function append_subject_eight() {
    $('#append_subject_eight').append('<input type="text" name="semestereight[]" class="form-control" placeholder="Subject ">');
  
  }
</script>