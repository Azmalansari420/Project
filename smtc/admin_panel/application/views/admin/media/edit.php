<?php $this->load->view('admin/header');?>
<div class="clearfix"></div>
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumb-->
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <h4 class="page-title">Edit Media</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo  base_url('Dashboard')  ?>">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item"><a href="<?php echo  base_url('Media/listing')  ?>">Media </a>
                    </li>
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
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title"></div>
                        <?=$this->session->flashdata('msg')?>
                            <hr>
                               <form role="form" method="post" id="form" autocomplete="off" enctype="multipart/form-data">
                                <div class="box-body row">
                                    <div class="form-group col-sm-12">
                                        <label for="exampleInputPassword1"> Course*</label>
                                        <select class="form-control" name="course_id" id="select_cat" required>
                                            <option value='0'>Root</option>
                                            <?php echo $this->course_model->get_all_child_course(0); ?>
                                        </select>
                                        <?php echo form_error( 'parent_id'); ?>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="exampleInputPassword1">Status</label>
                                        <select class="form-control" name="status" required>
                                            <option value='1'  <?php echo($RESULT[0]->status== '1')?'selected':''; ?>>Active</option>
                                            <option value='0'  <?php echo($RESULT[0]->status== '0')?'selected':''; ?>>Inactive</option>
                                        </select>
                                        <?php echo form_error( 'status'); ?>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="exampleInputPassword1">Type</label>
                                        <select class="form-control" name="type" required>
                                            <option value="">--Select--</option>
                                            <option value='M'  <?php echo($RESULT[0]->type== 'M')?'selected':''; ?> >E book</option>
                                            <option value='R'  <?php echo($RESULT[0]->type== 'R')?'selected':''; ?> >Question</option>
                                        </select>
                                        <?php echo form_error( 'status'); ?>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label for="exampleInputEmail1">Title *</label>
                                        <input type="text" class="form-control" name="title"  value="<?php echo $RESULT[0]->title; ?>"  placeholder="Enter Title">
                                        <?php echo form_error( 'title'); ?>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label for="exampleInputEmail1">File *</label>
                                        <input type="file" class="form-control" name="file"    placeholder="Enter Title">
                                        <?php echo form_error( 'file'); ?>
                                        <?php if(!empty($RESULT[0]->file)){ ?> 
                                        <a href="<?php echo base_url('uploads/user/').$RESULT[0]->file; ?>" width="20%"> Download </a>
                                        <?php } ?>
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
      $('#select_cat') .val('<?php echo $RESULT[0]->course_id; ?>').change();
      $("#select_cat > option[value="+<?php echo $RESULT[0]->course_id; ?>+"]").prop("selected",true);
    });

</script>
<?php $this->load->view('admin/footer');?>
