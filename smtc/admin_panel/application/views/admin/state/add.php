<?php $this-> load->view('admin/header');?>
<!-- Content Wrapper. Contains page content -->
<div class="clearfix"></div>
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumb-->
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <h4 class="page-title">Add State</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo  base_url('dashboard')  ?>">Dashboard</a> </li>
                    <li class="breadcrumb-item"><a href="<?php echo  base_url('State/listing')  ?>">State </a> </li>
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
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name *</label>
                                        <input type="text" class="form-control" name="name" value="<?php echo set_value('name'); ?>" required placeholder="Enter name">
                                        <?php echo form_error( 'name'); ?> </div>
                                        <div class="form-group">
                                        <label for="exampleInputEmail1">Code *</label>
                                        <input type="text" class="form-control" name="code" value="<?php echo set_value('code'); ?>" required placeholder="Enter Code">
                                        <?php echo form_error( 'code'); ?> </div>
                                   
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
