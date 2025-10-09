<?php $this->load->view('admin/header');?>
<div class="clearfix"></div>
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumb-->
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <h4 class="page-title">Edit Course New</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo  base_url('Dashboard')  ?>">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item"><a href="<?php echo  base_url('course_new/listing')  ?>">Course New </a>
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
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" class="form-control" name="name"  value="<?php echo $RESULT[0]->name; ?>" required placeholder="Enter name">
                                        <?php echo form_error( 'name'); ?> </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Content *</label>
                                        <textarea id="editor" class="form-control" name="content"><?php echo $RESULT[0]->content; ?></textarea>
                                        <?php echo form_error( 'content'); ?> 

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
<script src="https://cdn.ckeditor.com/4.7.0/full/ckeditor.js"></script>

<script>
   CKEDITOR.replace('editor');
</script>