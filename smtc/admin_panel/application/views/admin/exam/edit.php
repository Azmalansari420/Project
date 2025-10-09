<?php $this->load->view('admin/header');?>
<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
<div class="clearfix"></div>
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumb-->
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <h4 class="page-title">Edit Mock Test</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo  base_url('crm/Dashboard')  ?>">Dashboard</a> </li>
                    <li class="breadcrumb-item"><a href="<?php echo  base_url('crm/exam/listing')  ?>">Mock Test </a> </li>
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
                                <div class="box-body row">
                                    <div class="form-group col-sm-6">
                                        <label for="exampleInputPassword1">Select Category</label>
                                        <select class="form-control" name="cat_id" id="select_cat" required>
                                            <option value=''>select Category</option>
                                            <?php $course=$this->course_model->get_all_course(); ?>
                                            <?php foreach($course as $key=>$value){ ?>
                                            <?php if($value->parent_id!=0){ ?>
                                            <option value="<?php echo $value->id; ?>" <?php echo($RESULT[0]->cat_id==$value->id)?'selected':''; ?>>
                                                <?php echo $value->title; ?></option>
                                            <?php } ?>
                                            <?php } ?> </select>
                                        <?php echo form_error( 'cat_id'); ?> </div>
                                    <div class="form-group col-sm-3">
                                        <label for="exampleInputPassword1">Select Semseter</label>
                                        <select class="form-control" name="semester" required>
                                            <option value=""> Select--</option>
                                            <option <?php echo($RESULT[0]->semester == 'Semester 1')?'selected':''; ?> >Semester 1</option>
                                            <option <?php echo($RESULT[0]->semester == 'Semester 2')?'selected':''; ?> >Semester 2</option>
                                            <option <?php echo($RESULT[0]->semester == 'Semester 3')?'selected':''; ?> >Semester 3</option>
                                            <option <?php echo($RESULT[0]->semester == 'Semester 4')?'selected':''; ?> >Semester 4</option>
                                            <option <?php echo($RESULT[0]->semester == 'Semester 5')?'selected':''; ?> >Semester 5</option>
                                            <option <?php echo($RESULT[0]->semester == 'Semester 6')?'selected':''; ?> >Semester 6</option>
                                            <option <?php echo($RESULT[0]->semester == 'Semester 7')?'selected':''; ?> >Semester 7</option>
                                            <option <?php echo($RESULT[0]->semester == 'Semester 8')?'selected':''; ?> >Semester 8</option>
                                        </select>
                                        <?php echo form_error( 'semester'); ?> </div>
                                    <div class="form-group col-sm-3 ">
                                        <label for="exampleInputPassword1">Status</label>
                                        <select class="form-control" name="status" required>
                                            <option value='1' <?php echo($RESULT[0]->status==1)?'selected':''; ?> >Active</option>
                                            <option value='0' <?php echo($RESULT[0]->status==0)?'selected':''; ?>>Inactive</option>
                                        </select>
                                        <?php echo form_error( 'status'); ?> </div>
                                    <div class="form-group col-sm-12">
                                        <label for="exampleInputEmail1">Exam Name</label>
                                        <input type="text" class="form-control" name="title" onkeyup="return set_slug(this.value);" value="<?php echo $RESULT[0]->title; ?>" required placeholder="Enter Title">
                                        <input type="hidden" class="form-control" name="url_slug" id="url_slug" readonly value="<?php echo $RESULT[0]->url_slug; ?>">
                                        <?php echo form_error( 'title'); ?> </div>
                                    <div class="form-group col-sm-8">
                                        <label for="exampleInputEmail1">Short description</label>
                                        <input type="text" class="form-control" name="short_description" value="<?php echo $RESULT[0]->short_description; ?>" placeholder="Enter short description">
                                        <?php echo form_error( 'title'); ?> </div>
                                    <div class="form-group col-sm-4">
                                        <label for="exampleInputEmail1">Time (24hours : Mintues) </label>
                                        <input type="text" class="form-control timepicker" name="time" id="time" value="<?php echo date( 'h:i' ,strtotime($RESULT[0]->time)); ?>" required>
                                        <?php echo form_error( 'time'); ?> </div>
                                    <div class="form-group col-sm-12">
                                        <label for="exampleInputEmail1">terms Condition</label>
                                        <textarea class="form-control" name="termsCondition" placeholder="Enter termsCondition">
                                            <?php echo $RESULT[0]->termsCondition; ?></textarea>
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
<script type="text/javascript">
    $(document)
        .ready(function() {
            $('#select_cat')
                .val('<?php echo $RESULT[0]->cat_id; ?>')
                .change();
            $("form")
                .on('click', '.removedata', function() {
                    $(this)
                        .parents(".fille_group")
                        .remove();
                });
        });

</script>
<?php $this->load->view('admin/footer');?>
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
<script class="example">
    function set_slug(VALUE) {
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
    CKEDITOR.replace('termsCondition');

</script>
<script>
    $('.timepicker')
        .timepicker({
            timeFormat: 'h:mm',
            interval: 30,
            minTime: '01',
            maxTime: '3:00',
            defaultTime: '<?php echo date( '
            h: i ' ,strtotime($RESULT[0]->time)); ?>',
            startTime: '01:00',
            dynamic: true,
            dropdown: true,
            scrollbar: true
        });

</script>
