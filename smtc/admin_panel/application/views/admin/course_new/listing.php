<?php $this->load->view('admin/header');?>
<div class="clearfix"></div>
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumb-->
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <h4 class="page-title">All Course New List</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">All Course New List</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-4">
                                <a href="<?php echo base_url('course_new/add_new/') ;  ?>">
                                    <button type="submit" class="btn btn-primary" name="submitform">Add New Course New</button>
                                </a>
                            </div>
                            <div class="col-lg-6">
                                <?=$this->session->flashdata('msg')?> </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>SNo.</th>
                                        <th>Name</th>
                                        <!-- <th>Code</th> -->
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <?php if(count($RESULT)>0){ ?>
                                <tbody>
                                    <?php $no=0; foreach($RESULT as $record){ $no++; ?>
                                    <tr>
                                        <td width="7%">
                                            <?php echo $no; ?>
                                        </td>
                                        <td><?php echo $record->name; ?></td>
                                        <!-- <td><?php echo $record->code; ?></td> -->
                                       
                                        <td width="15%"> 
                                        <a href="<?php echo base_url('Course_new/edit/'.$record->id); ?>" class="btn  btn-success btn-xs"><i class="fa fa-fw fa-edit"></i>Edit</a>

                                        <a href="<?php echo base_url('Course_new/delete/'.$record->id); ?>" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger btn-xs">
                                        <i class="fa fa-fw fa-trash"></i>Delete
                                        </a>
                                        
                                        </td>
                                    </tr>
                                    <?php } ?> </tbody>
                                <?php } ?> </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Row-->
    </div>
    <!-- End container-fluid-->
</div>
<!--End content-wrapper-->
<!--End Back To Top Button-->
<?php $this->load->view('admin/footer');?>
