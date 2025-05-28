<?php ($user = DB::table("users")->select('id','name','email','phone','sponser_id','image','user_id','address','city','state')->where("id",$row->user_id)->first()); ?>

<?php ($tax_amount = $row->amount); ?>
<?php ($discount = 0); ?>
<?php ($final_price = $row->final_amount); ?>

<?php ($detail = json_decode($row->detail)); ?>



<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">
<head>
    <meta charset="utf-8" />
    <title><?php echo e($data['page_title']); ?> | <?php echo e(env("APP_NAME")); ?>-<?php echo e($user->user_id); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Start Include Css -->
    <?php echo $__env->make('admin.headers.maincss', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End Include Css -->
</head>
<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
        <!-- Start Include Header -->
        <?php echo $__env->make('admin.headers.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- End Include Header -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div
                                class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                                <h4 class="mb-sm-0"><?php echo e($data['page_title']); ?></h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Home</a></li>
                                        <li class="breadcrumb-item active">View Invoice
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="card" id="demo">
                                <div class="row">
                                    
                                        <div class="col-lg-3" style="background: #405189;padding: 20px 10px 0 10px;width: 15%;">
                                            <img src="<?php echo e(url('public/assetsadmin/images/logo.png')); ?>" style="width: 100%;height: auto;" class="card-logo card-logo-dark" alt="logo dark" height="17">
                                            <img src="<?php echo e(url('public/assetsadmin/images/logo.png')); ?>" style="width: 100%;height: auto;" class="card-logo card-logo-light" alt="logo light" height="17">
                                        </div>
                                        <div class="col-lg-9" style="width: 85%;">
                                            <div class="card-header border-bottom-dashed p-4">

                                                <?php if($row->status==1): ?>
                                                    <span class="btn btn-success">PAID</span>
                                                <?php endif; ?>
                                                <?php if($row->status==0): ?>
                                                    <span class="btn btn-danger">UNPAID</span>
                                                <?php endif; ?>

                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <div class="mt-sm-5 mt-4">
                                                            <h6 class="text-muted text-uppercase fw-semibold">Bill To</h6>

                                                            <p class="text-muted mb-0" id="zip-code"><span><b>Contact Name:</b></span> <?php echo e($user->name); ?></p>

                                                            <p class="text-muted mb-0" id="zip-code"><span><b>Contact Phone:</b></span> <?php echo e($user->phone); ?></p>

                                                            <p class="text-muted mb-0" id="zip-code"><span><b>Address:</b></span> <?php echo e($user->address); ?> <?php if(!empty($user->address)): ?>,<?php endif; ?> <?php echo e($user->state); ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="flex-shrink-0 mt-sm-0 mt-3">
                                                        <h6><span class="text-muted fw-normal">GSTIN No:</span><span id="legal-register-no">fasfsa</span></h6>

                                                        <h6><span class="text-muted fw-normal">Date:</span><span id="date"><?php echo e(date("Y M, d",strtotime($row->payment_date_time))); ?></span></h6>

                                                        <h6><span class="text-muted fw-normal">Invoice No.:</span><span id="date"><?php echo e(sort_name.$user->user_id); ?></span></h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end card-header-->
                                        
                                           
                                        
                                           
                                        
                                            <div class="card-body p-4">
                                                <div class="table-responsive">
                                                    <table class="table table-borderless text-center table-nowrap align-middle mb-0">
                                                        <thead>
                                                            <tr class="table-active">
                                                                <th scope="col">Description</th>
                                                                <th scope="col">QTY</th>
                                                                <th scope="col" class="text-end">Total</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="products-list">
                                                            <?php $__currentLoopData = $detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td class="text-start">
                                                                        <p class="text-muted mb-0"><?php echo e($value->name); ?></p>
                                                                    </td>
                                                                    <td><?php echo e($value->qty); ?></td>
                                                                    <td class="text-end"><?php echo e(Helpers::price_formate($tax_amount)); ?></td>
                                                                </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            
                                                            
                                                        </tbody>
                                                    </table><!--end table-->
                                                </div>
                                                <div class="border-top border-top-dashed mt-2">
                                                    <table class="table table-borderless table-nowrap align-middle mb-0 ms-auto" style="width:250px">
                                                        <tbody>
                                                            <tr>
                                                                <td>Sub Total</td>
                                                                <td class="text-end"><?php echo e(Helpers::price_formate($tax_amount)); ?> (GST Included)</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Discount </td>
                                                                <td class="text-end"><?php echo e(Helpers::price_formate($discount)); ?></td>
                                                            </tr>
                                                            <tr class="border-top border-top-dashed fs-15">
                                                                <th scope="row">Total Amount</th>
                                                                <th class="text-end"><?php echo e(Helpers::price_formate($final_price)); ?></th>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <!--end table-->
                                                </div>
                                                
                                                <div class="hstack gap-2 justify-content-end d-print-none mt-4">
                                                    <a href="javascript:window.print()" class="btn btn-success"><i class="ri-printer-line align-bottom me-1"></i> Print</a>
                                                </div>
                                            </div>
                                            <!--end card-body-->
                                        </div>


                                </div><!--end row-->
                            </div>
                </div>
            </div>
            <!-- End Page-content -->
            <!-- Start Include Footer -->
            <?php echo $__env->make('admin.headers.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- End Include Footer -->
        </div>
    </div>
    <!-- END layout-wrapper -->
    <!-- Start Include Script -->
    <?php echo $__env->make('admin.headers.mainjs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End Include Script -->
</body>
</html><?php /**PATH /home/u346521377/domains/digitalnamo.com/public_html/azmal/2025/april/hindibible/resources/views/admin/invoice/view.blade.php ENDPATH**/ ?>