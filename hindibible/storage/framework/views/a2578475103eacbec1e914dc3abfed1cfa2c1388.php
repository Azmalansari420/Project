<div>
    <div class="table-responsive">
        <table class="table align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th scope="col">Transection ID.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Type</th>
                    <th scope="col">Date Time</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $data_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <?php echo e($value->transaction_id); ?><br>
                        
                        <?php if($value->is_paid==1): ?>
                            <span class="badge bg-success" style="font-size: 15px;margin-top: 5px;">ID Active</span>
                        <?php endif; ?>
                        <?php if($value->is_paid==0): ?>
                            <span class="badge bg-danger" style="font-size: 15px;margin-top: 5px;">ID Inactive</span>
                        <?php endif; ?>

                    </td>
                    <td>
                        <?php echo e($value->user_name); ?><br>
                        <b><?php echo e(sort_name.$value->affiliate_id); ?></b>
                    </td>
                    <td><?php echo e($value->user_email); ?></td>
                    <td><?php echo e($value->user_phone); ?></td>
                    <td>
                        <?php if($value->order_type==1): ?>
                            <div class="badge badge bg-info" style="margin: 0 auto;font-size: 12px;">Perchase</div>
                        <?php endif; ?>
                        <?php if($value->order_type==2): ?>
                            <div class="badge badge bg-vertical-gradient-4" style="margin: 0 auto;font-size: 12px;">Upgrade</div>
                        <?php endif; ?>
                    </td>
                    <td>
                        <b>Create Date Time: </b><?php echo e(date("Y M, d",strtotime($value->add_date_time))); ?> - <?php echo e(date("h:i A",strtotime($value->add_date_time))); ?><br>
                        <b>Payment Date Time: </b>
                            <?php if(!empty($value->payment_date_time)): ?>
                                <?php echo e(date("Y M, d",strtotime($value->payment_date_time))); ?> - <?php echo e(date("h:i A",strtotime($value->payment_date_time))); ?>

                            <?php endif; ?>
                    </td>
                    <td><?php echo Helpers::status_get($value->status,'invoice'); ?></td>
                    <td>
                        <div class="d-flex gap-2">
                            <div class="edit">
                                <a href="<?php echo e($data['view_btn_url'].'/'.Crypt::encryptString($value->id)); ?>" class="btn btn-sm btn-info edit-item-btn">Invoice</a>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <!-- end table -->
    </div>
</div>


<div class="card pagination" >
    <?php echo e($data_list->links()); ?>

</div>
<?php /**PATH C:\xamp\htdocs\projects\hindibible\resources\views/admin/invoice/table.blade.php ENDPATH**/ ?>