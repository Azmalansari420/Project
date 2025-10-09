<?php $this-> load->view('admin/header');?>
<!-- Content Wrapper. Contains page content -->
<div class="clearfix"></div>
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumb-->
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <h4 class="page-title">Add Media</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo  base_url('dashboard')  ?>">Dashboard</a> </li>
                    <li class="breadcrumb-item"><a href="<?php echo  base_url('Media/listing')  ?>">Media </a> </li>
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
                        <div class="card-title"> <?=$this->session->flashdata('msg')?></div>
            
                            <form role="form" method="post" id="form" autocomplete="off" enctype="multipart/form-data">
                                <div class="box-body row">
                                     <div class="form-group col-sm-12">
                                        <label for="exampleInputPassword1"> Course*</label>
                                        <select class="form-control" name="course_id" required>
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
                                        <label for="exampleInputPassword1">Type</label>
                                        <select class="form-control" name="type" required>
                                            <option value="">--Select--</option>
                                            <option value='M'>E book</option>
                                            <option value='R'>Question</option>
                                        </select>
                                        <?php echo form_error( 'status'); ?>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label for="exampleInputEmail1">Title *</label>
                                        <input type="text" class="form-control" name="title"  value="<?php echo set_value('title'); ?>" required placeholder="Enter Title">
                                        <?php echo form_error( 'title'); ?>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label for="exampleInputEmail1">File *</label>
                                        <input type="file" class="form-control" name="file"   required placeholder="Enter Title">
                                       
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
