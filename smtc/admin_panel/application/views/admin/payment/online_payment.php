<?php $this->load->view('admin/header');?>
<div class="clearfix"></div>
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumb-->
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <h4 class="page-title">All Payment History List</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">All Online Payment History  List</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-4">
                              
                            </div>
                            <div class="col-lg-6">
                                <?=$this->session->flashdata('msg')?> 
                                
                            </div>
                        </div>
                       
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                          	<table id="example" class="table table-bordered table-striped table-responsive">
                                <thead>
                                    <tr>
                                       
                                        <th>Sr.No.</th>
                                        <th>Name</th>
                                        <th>Mobile </th>
                                        <th>Email </th>
                                        <th>Payment Date</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Order Id</th>
                                        <th></th>                              
                                    </tr>
                                </thead>
                                <?php if(count($RESULT)>0){ ?>
                                <tbody>
                                    <?php $no=0; foreach($RESULT as $record){ $no++; ?>
                                    <tr>
                                        <td width="7%">
                                            <?php echo $no; ?>
                                        </td>
                                        <td><?php echo $record->full_name; ?> </td>
                                        <td><?php echo $record->mobile; ?></td>
                                        <td><?php echo $record->email; ?></td>
                                        <td><?php echo $record->add_date; ?></td>
                                        <td><?php echo $record->amount; ?></td>
                                        <td><?php echo $record->payment_status; ?></td>
                                        <td><?php echo $record->order_id; ?></td>
                                        <tD><a href="<?php echo base_url('payment/online_delete/'.$record->id); ?>"   class="btn  btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete this item?');"  title=" Delete">Delete</a></tD>
                                     
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
