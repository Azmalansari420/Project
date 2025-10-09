<?php $this->load->view('admin/header');?>
<!-- Content Wrapper. Contains page content -->


<div class="clearfix"></div>

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumb-->
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <h6 class="page-title">Add course</h6>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo  base_url('dashboard')  ?>">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item"><a href="<?php echo  base_url('course/listing')  ?>">course </a>
                    </li>
                    <li class="breadcrumb-item">Add New </li>
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

                            <form role="form" method="post" id="form" autocomplete="off" enctype="multipart/form-data">
                                <div class="box-body">
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label for="exampleInputPassword1">Parent Course*</label>
                                        <select class="form-control" name="parent_id" required>
                                            <option value='0'>Root</option>
                                            <?php echo $this->course_model->get_all_child_course(0); ?>
                                        </select>
                                        <?php echo form_error( 'parent_id'); ?>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="exampleInputPassword1">Status</label>
                                        <select class="form-control" name="status" required>
                                            <option value='1'>Active</option>
                                            <option value='0'>Inactive</option>
                                        </select>
                                        <?php echo form_error( 'status'); ?>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="exampleInputEmail1">Title *</label>
                                        <input type="text" class="form-control" name="title" onkeyup="return set_slug(this.value);" value="<?php echo set_value('title'); ?>" required placeholder="Enter Title">
                                        <?php echo form_error( 'title'); ?>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="exampleInputEmail1">Year *</label>
                                        <input type="text" class="form-control" name="year" value="<?php echo set_value('year'); ?>" required placeholder="Enter year">
                                        <?php echo form_error( 'year'); ?>
                                    </div>
               
                                    <div class="form-group col-sm-6">
                                        <label for="exampleInputEmail1">Code *</label>
                                        <input type="text" class="form-control" name="code"  value="<?php echo set_value('code'); ?>" required placeholder="Enter code">
                                         <input type="hidden" class="form-control" name="url_slug" id="url_slug" readonly value="<?php echo set_value('url_slug'); ?>" required>
                                        <?php echo form_error( 'code'); ?>
                                    </div>
                                
                                    <div class="col-sm-12">    
                                       <div class="form-group col-sm-12 mar10bot box box-success box-solid">
                                        <div class="box-header with-border"> <h3> Add Semseter</h3> </div>
                                        <hr>
                                        <div class="box-body">
                                            <div class="form-group col-sm-6">
                                             <label for="exampleInputEmail1">Total Semester *</label>
                                                <select class="form-control" name="total_semester" id="total_semester" >
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    
                                                </select>
                                                <?php echo form_error( 'fees'); ?>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3" style="display:none" id="1">
                                                    <h6> SEMESTER 1 </h6>
                                                   <input type="text" name="semesterone[]" class="form-control" placeholder="Subject One">
                                                   <input type="text" name="semesterone[]" class="form-control" placeholder="Subject Two">
                                                   <input type="text" name="semesterone[]" class="form-control" placeholder="Subject Three">
                                                   <input type="text" name="semesterone[]" class="form-control" placeholder="Subject Four">
                                                   <input type="text" name="semesterone[]" class="form-control" placeholder="Subject Five">
                                                   <input type="text" name="semesterone[]" class="form-control" placeholder="Subject Six">
                                                   <input type="text" name="semesterone[]" class="form-control" placeholder="Subject Seven">
                                                   <input type="text" name="semesterone[]" class="form-control" placeholder="Subject Eight">
                                                   <input type="text" name="semesterone[]" class="form-control" placeholder="Subject Nine ">
                                                   <input type="text" name="semesterone[]" class="form-control" placeholder="Subject Ten">
                                                </div>
                                                <div class="col-sm-3" style="display:none" id="2">
                                                    <h6> SEMESTER 2 </h6>
                                                    <input type="text" name="semestertwo[]" class="form-control"  placeholder="Subject One">
                                                    <input type="text" name="semestertwo[]" class="form-control"  placeholder="Subject Two">
                                                    <input type="text" name="semestertwo[]" class="form-control"  placeholder="Subject Three">
                                                    <input type="text" name="semestertwo[]" class="form-control"  placeholder="Subject Four">
                                                    <input type="text" name="semestertwo[]" class="form-control"  placeholder="Subject Five">
                                                    <input type="text" name="semestertwo[]" class="form-control"  placeholder="Subject Six">
                                                    <input type="text" name="semestertwo[]" class="form-control"  placeholder="Subject Seven">
                                                    <input type="text" name="semestertwo[]" class="form-control"  placeholder="Subject Eight">
                                                    <input type="text" name="semestertwo[]" class="form-control"  placeholder="Subject Nine">
                                                    <input type="text" name="semestertwo[]" class="form-control"  placeholder="Subject Ten">
                                                </div>
                                                <div class="col-sm-3" style="display:none" id="3">
                                                    <h6> SEMESTER 3 </h6>
                                                    <input type="text" name="semesterthree[]" class="form-control"  placeholder="Subject One">
                                                    <input type="text" name="semesterthree[]" class="form-control"  placeholder="Subject Two">
                                                    <input type="text" name="semesterthree[]" class="form-control"  placeholder="Subject Three">
                                                    <input type="text" name="semesterthree[]" class="form-control"  placeholder="Subject Four">
                                                    <input type="text" name="semesterthree[]" class="form-control"  placeholder="Subject Five">
                                                    <input type="text" name="semesterthree[]" class="form-control"  placeholder="Subject Six">
                                                    <input type="text" name="semesterthree[]" class="form-control"  placeholder="Subject Seven">
                                                    <input type="text" name="semesterthree[]" class="form-control"  placeholder="Subject Eight">
                                                    <input type="text" name="semesterthree[]" class="form-control"  placeholder="Subject Nine">
                                                    <input type="text" name="semesterthree[]" class="form-control"  placeholder="Subject Ten">
                                                    
                                                </div>
                                                <div class="col-sm-3" style="display:none" id="4">
                                                    <h6> SEMESTER 4 </h6>
                                                    <input type="text" name="semesterfour[]" class="form-control"  placeholder="Subject One">
                                                    <input type="text" name="semesterfour[]" class="form-control"  placeholder="Subject Two">
                                                    <input type="text" name="semesterfour[]" class="form-control"  placeholder="Subject Three">
                                                    <input type="text" name="semesterfour[]" class="form-control"  placeholder="Subject Four">
                                                    <input type="text" name="semesterfour[]" class="form-control"  placeholder="Subject Five">
                                                    <input type="text" name="semesterfour[]" class="form-control"  placeholder="Subject Six">
                                                    <input type="text" name="semesterfour[]" class="form-control"  placeholder="Subject Seven">
                                                    <input type="text" name="semesterfour[]" class="form-control"  placeholder="Subject Eight">
                                                    <input type="text" name="semesterfour[]" class="form-control"  placeholder="Subject Nine">
                                                    <input type="text" name="semesterfour[]" class="form-control"  placeholder="Subject Ten">
                                                    
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-3" style="display:none" id="5"> 
                                                    <h6>SEMESTER 5  </h6>
                                                    <input type="text" name="semesterfive[]" class="form-control"   placeholder="Subject One">
                                                    <input type="text" name="semesterfive[]" class="form-control"   placeholder="Subject Two">
                                                    <input type="text" name="semesterfive[]" class="form-control"   placeholder="Subject Three">
                                                    <input type="text" name="semesterfive[]" class="form-control"   placeholder="Subject Four">
                                                    <input type="text" name="semesterfive[]" class="form-control"   placeholder="Subject Five">
                                                    <input type="text" name="semesterfive[]" class="form-control"   placeholder="Subject Six">
                                                    <input type="text" name="semesterfive[]" class="form-control"   placeholder="Subject Seven">
                                                    <input type="text" name="semesterfive[]" class="form-control"   placeholder="Subject Eight">
                                                    <input type="text" name="semesterfive[]" class="form-control"   placeholder="Subject Nine">
                                                    <input type="text" name="semesterfive[]" class="form-control"   placeholder="Subject Ten">
                                                  
                                                </div>
                                                <div class="col-sm-3" style="display:none" id="6">
                                                    <h6> SEMESTER 6 </h6>
                                                    <input type="text" name="semestersix[]" class="form-control"   placeholder="Subject One">
                                                    <input type="text" name="semestersix[]" class="form-control"   placeholder="Subject Two">
                                                    <input type="text" name="semestersix[]" class="form-control"   placeholder="Subject Three">
                                                    <input type="text" name="semestersix[]" class="form-control"   placeholder="Subject Four">
                                                    <input type="text" name="semestersix[]" class="form-control"   placeholder="Subject Five">
                                                    <input type="text" name="semestersix[]" class="form-control"   placeholder="Subject Six">
                                                    <input type="text" name="semestersix[]" class="form-control"   placeholder="Subject Seven">
                                                    <input type="text" name="semestersix[]" class="form-control"   placeholder="Subject Eight">
                                                    <input type="text" name="semestersix[]" class="form-control"   placeholder="Subject Nine">
                                                    <input type="text" name="semestersix[]" class="form-control"   placeholder="Subject Ten">
                                                    
                                                </div>
                                                <div class="col-sm-3" style="display:none" id="7">
                                                    <h6> SEMESTER 7 </h6>
                                                    <input type="text" name="semesterseven[]" class="form-control"   placeholder="Subject One">
                                                    <input type="text" name="semesterseven[]" class="form-control"   placeholder="Subject Two">
                                                    <input type="text" name="semesterseven[]" class="form-control"   placeholder="Subject Three">
                                                    <input type="text" name="semesterseven[]" class="form-control"   placeholder="Subject Four">
                                                    <input type="text" name="semesterseven[]" class="form-control"   placeholder="Subject Five">
                                                    <input type="text" name="semesterseven[]" class="form-control"   placeholder="Subject Six">
                                                    <input type="text" name="semesterseven[]" class="form-control"   placeholder="Subject Seven">
                                                    <input type="text" name="semesterseven[]" class="form-control"   placeholder="Subject Eight">
                                                    <input type="text" name="semesterseven[]" class="form-control"   placeholder="Subject Nine">
                                                    <input type="text" name="semesterseven[]" class="form-control"   placeholder="Subject Ten">
                                                   
                                                </div>
                                                <div class="col-sm-3" style="display:none" id="8"> 
                                                    <h6>SEMESTER 8  </h6>
                                                    <input type="text" name="semestereight[]" class="form-control"   placeholder="Subject One">
                                                    <input type="text" name="semestereight[]" class="form-control"   placeholder="Subject Two">
                                                    <input type="text" name="semestereight[]" class="form-control"   placeholder="Subject Three">
                                                    <input type="text" name="semestereight[]" class="form-control"   placeholder="Subject Four">
                                                    <input type="text" name="semestereight[]" class="form-control"   placeholder="Subject Five">
                                                    <input type="text" name="semestereight[]" class="form-control"   placeholder="Subject Six">
                                                    <input type="text" name="semestereight[]" class="form-control"   placeholder="Subject Seven">
                                                    <input type="text" name="semestereight[]" class="form-control"   placeholder="Subject Eight">
                                                    <input type="text" name="semestereight[]" class="form-control"   placeholder="Subject Nine">
                                                    <input type="text" name="semestereight[]" class="form-control"   placeholder="Subject Ten">
                                                  
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
<?php $this->load->view('admin/footer');?>
<!-- Custom scripts -->

<script>
    function addImage() {
        $('#append_image')
            .append('<span class="row fille_group"><div class="col-md-4"><input type="file" class="form-control" name="image[]" required></div><div class="col-md-4"><input type="text" class="form-control" name="alt_image[]" required></div><div class="col-md-3" style="padding-bottom:5px"><a class="btn btn-danger removedata"><i class="fa fa-fw fa-trash"></i></a></div><span>');
    }


    $(document)
        .ready(function() {
            $(".chosen-control")
                .chosen();
        });

</script>



<script class="example">
    function set_slug(VALUE)

    {

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
</script>