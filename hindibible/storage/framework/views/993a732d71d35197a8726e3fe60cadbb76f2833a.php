<div>
    <div class="table-responsive">
        <table class="table align-middle mb-0">
            <thead class="table-light">
                <tr>                    
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email </th>
                    <th>Status </th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $data_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($value->name); ?></td>
                    <td><?php echo e($value->phone); ?></td>                    
                    <td><?php echo e($value->email); ?></td>                    
                    <td>
                       


                        <?php if($value->status==0): ?>
                        <span class="badge bg-primary">New</span>
                        <?php elseif($value->status==1): ?>
                        <span class="badge bg-info">Proccess</span>
                        <?php elseif($value->status==2): ?>
                        <span class="badge bg-dark">Shipped</span>
                        <?php elseif($value->status==3): ?>
                        <span class="badge bg-success">Delivered</span>
                        <?php elseif($value->status==4): ?>
                        <span class="badge bg-danger">Cancel</span>
                        <?php endif; ?>



                    </td>                    
                    <td><a href="<?php echo e($data['back_btn'].'/view/'.Crypt::encryptString($value->id)); ?>" class="btn btn-sm btn-success mb-1">View</a><br></td>                    
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
<?php /**PATH /home/u346521377/domains/digitalnamo.com/public_html/azmal/2025/april/hindibible/resources/views/admin/order/table.blade.php ENDPATH**/ ?>