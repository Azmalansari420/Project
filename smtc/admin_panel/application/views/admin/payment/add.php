<?php $this-> load->view('admin/header');?>
<!-- Content Wrapper. Contains page content -->
<div class="clearfix"></div>
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumb-->
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <h4 class="page-title">Add payment</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo  base_url('dashboard')  ?>">Dashboard</a> </li>
                    <li class="breadcrumb-item"><a href="<?php echo  base_url('payment/listing')  ?>">payment </a> </li>
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
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name *</label>
                                        <select class="form-control" name="user_id" required>
                                            <option value=""> --Select  Student-- </option>
                                            <?php foreach($user as $key=>$value){ ?>
                                                <option value="<?php echo $value->id  ; ?>" ><?php echo $value->name ; ?> | <?php echo $value->email ; ?>| <?php echo $value->mobile ; ?> </option>
                                            <?php } ?>
                                        </select>
                                        
                                    </div>
                     
                                     <div class="form-group">
                                         <label>Fee Create Date</label>
                					   <input type="date" required="" name="add_date_time" value="" class="form-control" placeholder="Institutes Name">
                					</div>
                					
                					<div class="form-group">
                					    <label>Fee Amount</label>
                					   <input type="text" required="" name="price" value="" class="form-control" placeholder="Fee Amount">
                					</div>
                					<div class="form-group">
                                         <label>Payment Mode</label>
                					   <input type="text" required="" name="payment_mode" value="" class="form-control" placeholder="Payment Mode">
                					</div>
                						<div class="form-group">
                                         <label>Remark</label>
                					   <input type="text" name="remark" value="" class="form-control" placeholder="Remark">
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
