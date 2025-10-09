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
                    <li class="breadcrumb-item active" aria-current="page">All Payment History  List</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-4">
                                 <?php
                        $all_amt = 0;
                        $pending_amt = 0;
                        $r_amt = 0;
                        
                        foreach($RESULT as $record){
                            	$r_amt +=$record->price;
                        }
            		    foreach($user as $record){
                            $all_amt +=$record->received_amount;
                        }
            		
            			$pending_amt = $all_amt - $r_amt;
            			 	
            			?>



			<h6 class="amt-section1">Total Amount: Rs. <span class="amt-section"><?=$all_amt ?></span></h6>
			<h6 class="amt-section1">Total Recieve Amount: Rs. <span class="amt-section"><?=$r_amt ?></span></h6>
			<h6 class="amt-section1">Total Pending Amount: Rs. <span class="amt-section"><?=$pending_amt ?></span></h6>
                            </div>
                            <div class="col-lg-6">
                                <?=$this->session->flashdata('msg')?> 
                                
                            </div>
                        </div>
                       
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                          	<table id="example2" class="table table-bordered table-striped ">
                                <thead>
                                    <tr>
                                       
                                        <th>Sr.No.</th>
                                        <th>reg_id</th>
                                        <th>Student </th>
                                        <th>Mobile </th>
                                        <th>	Payment Date</th>
                                        <th>	Amount</th>
                                        <th>	Payment Mode</th>
                                        <th>	Remark</th>
                                        <th>	Action</th>
                              
                                    </tr>
                                </thead>
                                <?php if(count($RESULT)>0){ ?>
                                <tbody>
                                    <?php $no=0; foreach($RESULT as $record){ $no++; ?>
                                    <tr>
                                        <td width="7%">
                                            <?php echo $no; ?>
                                        </td>
                                        <td> <?php echo $record->reg_id; ?> </td>
                                        <td><?php echo $record->name; ?> </td>
                                        <td><?php echo $record->mobile; ?></td>
                                        <td><?php echo $record->add_date_time; ?></td>
                                        <td><?php echo $record->price; ?></td>
                                        <td><?php echo $record->payment_mode; ?></td>
                                        <td><?php echo $record->remark; ?></td>
                                     
                                        <td width="15%"> 
                                        <a href="<?php echo base_url('payment/edit/'.$record->id); ?>" class="btn  btn-success btn-xs"><i class="fa fa-fw fa-edit"></i>Edit</a>
                                        	<a href="<?php echo base_url('payment/delete/'.$record->id); ?>" class="btn  btn-danger btn-xs"   onclick="return confirm('Are you sure you want to delete this item?');"  title=" Delete">Delete</a>
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
