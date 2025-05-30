<?php include"header.php";?>
<style type="text/css">
    p,h2{
        color:#fff;
    }
</style>
            <!-- Page Container START -->
            <div class="page-container">
                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="card card_my">
                                    <div class="card-body">
                                        <div class="media justify-content-between">
                                            <div>
                                                <p class="">Admin</p>
                                                <h2 class="font-size-28 font-weight-light">
                                                    <?php echo $count = $con->count("admin"); ?></h2>
                                               
                                            </div>
                                            <div class="align-self-end">
                                                <i class="fa fa-user font-size-70 text-success"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="col-sm-3">
                                <div class="card card_my">
                                    <div class="card-body">
                                        <div class="media justify-content-between">
                                            <div>
                                                <p class="">Total User</p>
                                                <h2 class="font-size-28 font-weight-light"><?php echo $count = $con->count("user"); ?></h2>
                                               
                                            </div>
                                            <div class="align-self-end">
                                                <i class="fa fa-users font-size-70 text-success"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-3">
                                <div class="card card_my">
                                    <div class="card-body">
                                        <div class="media justify-content-between">
                                            <div>
                                                <p class="">Completed</p>
                                                <h2 class="font-size-28 font-weight-light">
                                                    <?php echo $count = $con->count_where("user","status = 'Complete'"); ?>
                                                </h2>
                                               
                                            </div>
                                            <div class="align-self-end">
                                                <i class="fa fa-users font-size-70 text-success"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="col-sm-3">
                                <div class="card card_my">
                                    <div class="card-body">
                                        <div class="media justify-content-between">
                                            <div>
                                                <p class="">Quotafull</p>
                                                <h2 class="font-size-28 font-weight-light">
                                                    <?php echo $count = $con->count_where("user","status = 'Quotafull'"); ?>
                                                </h2>
                                               
                                            </div>
                                            <div class="align-self-end">
                                                <i class="fa fa-users font-size-70 text-success"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="col-sm-3">
                                <div class="card card_my">
                                    <div class="card-body">
                                        <div class="media justify-content-between">
                                            <div>
                                                <p class="">Terminated</p>
                                                <h2 class="font-size-28 font-weight-light">
                                                    <?php echo $count = $con->count_where("user","status = 'Terminated'"); ?>
                                                </h2>
                                               
                                            </div>
                                            <div class="align-self-end">
                                                <i class="fa fa-users font-size-70 text-success"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                             
                            
                            
                            
                            
                            
                        </div>
                    </div>
                </div>
                <!-- Content Wrapper END -->

              

            </div>
            <!-- Page Container END -->

     <?php include"footer.php";?>