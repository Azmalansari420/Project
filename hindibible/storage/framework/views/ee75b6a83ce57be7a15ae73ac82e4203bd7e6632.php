<div>
    <div class="table-responsive">
        <table class="table align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Prefix</th>
                    <th scope="col">Keys</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $data_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php ($keys = json_decode($value->data)); ?>
                <tr>
                    <td>
                        <div class="d-flex gap-2 align-items-center">
                            <div class="flex-grow-1">
                                <?php echo e($value->name); ?>

                            </div>
                        </div>
                    </td>
                    <td>
                        <?php echo e($keys->prefix); ?>

                    </td>
                    <td>
                        <b>Key:- </b> <?php echo e($keys->key); ?><br>
                        <b>Salt:- </b> <?php echo e($keys->salt); ?>

                    </td>
                    <td>
                        <?php echo Helpers::status_get($value->status,''); ?>

                        <label for="planclasses" class="form-label d-block" style="text-align: center;">
                            <div class="form-check form-switch form-check-inline" style="margin: 0 auto;" dir="planclasses">
                               <input type="checkbox" class="form-check-input status-change-item-btn" data-url="<?php echo e($data['status_btn_url'].'/'.Crypt::encryptString($value->id)); ?>" value="1"  <?php if(!empty($value->status)): ?> checked <?php endif; ?> >
                            </div>
                        </label>
                    </td>
                    <td>
                        <div class="d-flex gap-2">

                            <div class="edit">
                                <a href="<?php echo e($data['edit_btn_url'].'/'.Crypt::encryptString($value->id)); ?>" class="btn btn-sm btn-success edit-item-btn">Edit</a>
                            </div>
                            <div class="remove">
                                <a href="<?php echo e($data['delete_btn_url'].'/'.Crypt::encryptString($value->id)); ?>" class="btn btn-sm btn-danger remove-item-btn">Delete</a>
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
<?php /**PATH D:\xamp\htdocs\projects\codediffusion\hindibible\resources\views/admin/payment-setting/table.blade.php ENDPATH**/ ?>