<?php $this-> load->view('admin/header');?>
<!-- Content Wrapper. Contains page content -->
<div class="clearfix"></div>
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumb-->
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <h4 class="page-title">Add Course New</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo  base_url('dashboard')  ?>">Dashboard</a> </li>
                    <li class="breadcrumb-item"><a href="<?php echo  base_url('Course_new/listing')  ?>">Course New </a> </li>
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
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title"></div>
                        <?=$this->session->flashdata('msg')?>
                            <form role="form" method="post" id="form" autocomplete="off" enctype="multipart/form-data">
                                <div class="box-body">
                                    <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="exampleInputEmail1">Title *</label>
                                        <input type="text" class="form-control" name="name" onkeyup="return set_slug(this.value);" value="<?php echo set_value('name'); ?>" required placeholder="Enter Name">
                                        <?php echo form_error( 'name'); ?>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label for="exampleInputEmail1">Content *</label>
                                        <textarea id="editor" class="form-control" name="content"><?php echo set_value('content'); ?></textarea>
                                        <!--<input type="text" class="form-control" name="name" onkeyup="return set_slug(this.value);" value="<?php echo set_value('name'); ?>" required placeholder="Enter Name">-->
                                        <?php echo form_error( 'content'); ?>
                                    </div>
                                    <div class="form-group col-sm-6" style="display:none;">
                                        <label for="exampleInputPassword1">Status</label>
                                        <select class="form-control" name="status" required>
                                            <option value='1' selected>Active</option>
                                            <option value='0'>Inactive</option>
                                        </select>
                                        <?php echo form_error( 'status'); ?>
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