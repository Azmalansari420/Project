<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
            Copyright © 2023. All rights reserved by <?php echo e(env("APP_NAME")); ?>

            </div>
            <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                    Design & Develop by <a href="https://www.codediffusion.in/" target="_blank">Code Diffusion</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close" id="btn-close"></button>
            </div>
            <div class="modal-body">
                <div class="mt-2 text-center">
                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json"
                        trigger="loop" colors="primary:#f7b84b,secondary:#f06548"
                        style="width:100px;height:100px"></lord-icon>
                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        <h4>Are you Sure ?</h4>
                        <p class="text-muted mx-4 mb-0">Are you Sure You want to
                            Remove this Record ?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light"
                        data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn w-sm btn-danger delete-ok "
                        id="delete-record">Yes, Delete It!</button>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="modal fade zoomIn" id="PayoutPinModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close" id="btn-close"></button>
            </div>
            <div class="modal-body">
                <div class="mt-2 text-center">
                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        <h4>Enter Payout PIN</h4>
                        <input type="number" class="form-control" id="payout-pin">
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-danger "
                        id="payout-confirm">Payout Confirm</button>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="modal fade zoomIn" id="bigImageModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button class="btn btn-success" id="bigImageModalRotate"> <i class="fa fa-roate"></i> Rotate</button>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close" id="btn-close"></button>
            </div>
            <div class="modal-body">
                <div class="mt-2 text-center">
                    
                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        
                        <img src="" id="bigImage" class="img-thumbnail">

                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>



    <!-- Account Disable Modal -->
    <div class="modal fade zoomIn" id="accountBlock" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center p-3 pb-4" id="accountBlockBodyDisable">
                    <lord-icon src="https://cdn.lordicon.com/urmrbzpi.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:120px;height:120px"></lord-icon>
                    <div class="mt-2">
                        <h4 class="mb-1">Are you sure?</h4>
                        <p class="text-muted mb-4">Are you sure you want to disable this account? You will be able to revert this!</p>
                        <div class="hstack gap-2 justify-content-center">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                            <a href="javascript:void(0);" class="btn btn-danger status-change-ok">Yes, disable it!</a>
                        </div>
                    </div>
                </div>
                <div class="modal-body text-center p-3 pb-4" id="accountBlockBodyEnable">
                    <lord-icon src="https://cdn.lordicon.com/awmkozsb.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:120px;height:120px"></lord-icon>
                    <div class="mt-2">
                        <h4 class="mb-1">Are you sure?</h4>
                        <p class="text-muted mb-4">Are you sure you want to enable this account? You will be able to revert this!</p>
                        <div class="hstack gap-2 justify-content-center">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                            <a href="javascript:void(0);" class="btn btn-danger status-change-ok">Yes, enable it!</a>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->



<!-- approve reject -->
<div class="modal fade zoomIn" id="approveModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close" id="btn-close"></button>
            </div>
            <div class="modal-body">
                <div class="mt-2 text-center">
                    <lord-icon src="https://cdn.lordicon.com/awmkozsb.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:120px;height:120px"></lord-icon>
                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        <h4>Are you Sure ?</h4>
                        <p class="text-muted mx-4 mb-0">Are you Sure You want to
                            Approve this ?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light"
                        data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn w-sm btn-danger approve-reject-ok "
                        id="delete-record">Yes, Approve It!</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade zoomIn" id="rejectModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close" id="btn-close"></button>
            </div>
            <div class="modal-body">
                <div class="mt-2 text-center">
                    <lord-icon src="https://cdn.lordicon.com/urmrbzpi.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:120px;height:120px"></lord-icon>
                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        <h4>Are you Sure ?</h4>
                        <p class="text-muted mx-4 mb-0">Are you Sure You want to
                            Reject this ?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light"
                        data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn w-sm btn-danger approve-reject-ok "
                        id="delete-record">Yes, Reject It!</button>
                </div>
            </div>
        </div>
    </div>
</div>




<?php /**PATH D:\xamp\htdocs\projects\codediffusion\hindibible\resources\views/admin/headers/footer.blade.php ENDPATH**/ ?>