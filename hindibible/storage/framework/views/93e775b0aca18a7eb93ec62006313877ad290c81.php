<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">
<head>
    <meta charset="utf-8" />
    <title>Dashboard | <?php echo e(env("APP_NAME")); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <!-- Start Include Css -->
    <?php echo $__env->make('admin.headers.maincss', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End Include Css -->
    <script src="<?php echo e(url('public/assetsadmin/')); ?>/libs/fullcalendar/index.global.min.js"></script>
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
                    <div class="row">
                        <div class="col">
                            <div class="h-100">

                                <form class="row m-0">
                                    <div class="card card-animate p-0">
                                        <div class="card-body row" >
                                            <div class="col-md-6" style="margin: 0 auto;">
                                                <div class="row">                                            
                                                    <div class="col-md-3">
                                                        <input type="date" class="form-control" name="from_date" value="<?php echo e(date('Y-m-d', strtotime($from_date))); ?>">
                                                    </div>
                                                    <div class="col-md-3" >
                                                        <input type="date" class="form-control" name="to_date" value="<?php echo e(date('Y-m-d', strtotime($to_date))); ?>">
                                                    </div>
                                                    <div class="col-md-3" >
                                                        <button type="submit" class="btn btn-primary">Search</button>
                                                    </div>

                                                   

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="row">
                                    

                                    <div class="col-xl-3 col-md-6">
                                        <!-- card -->
                                        <div class="card card-animate">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> All time Income</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-end justify-content-between mt-4">
                                                    <div>
                                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><?php echo e(\App\Helper\Helpers::currency_simble()); ?> <span class="counter-value" data-target="<?php echo e($all_time_income); ?>" id="all_time_income">0</span> </h4>
                                                    </div>
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-success-subtle rounded fs-3">
                                                            <i class="bx bx-dollar-circle text-success"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->









                                    <div class="col-xl-3 col-md-6">
                                        <!-- card -->
                                        <div class="card card-animate">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">All Paid Users</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-end justify-content-between mt-4">
                                                    <div>
                                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4">
                                                        <?php ($users = DB::table("users")
                                                            ->select('id')
                                                            ->where('is_paid',1)
                                                            ->count()); ?>
                                                        <span class="counter-value" data-target="<?php echo e($users); ?>"><?php echo e($users); ?></span>
                                                    </h4>
                                                    </div>
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-warning-subtle rounded fs-3">
                                                            <i class="bx bx-user-circle text-warning"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->
                                    <div class="col-xl-3 col-md-6">
                                        <!-- card -->
                                        <div class="card card-animate">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> All Unpaid Users</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-end justify-content-between mt-4">
                                                    <div>
                                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4">
    <?php ($users = DB::table("users")
        ->select('id')
        ->where('is_paid',0)
        ->count()); ?>
    <span class="counter-value" data-target="<?php echo e($users); ?>"><?php echo e($users); ?></span>
</h4>
                                                    </div>
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-primary-subtle rounded fs-3">
                                                            <i class="bx bx-wallet text-primary"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->




                                    <div class="col-xl-12">

                                <div class="card p-3">
                                    <div class="card-body">
                                        <div class="col-lg-12">
                                            <div id='calendar-container'>
                                                <div id='calendar'></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
</div>






                                </div> <!-- end row-->
                                
                            </div> <!-- end .h-100-->
                        </div> <!-- end col -->
                    </div>
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
        <!-- Start Include Footer -->
        <?php echo $__env->make('admin.headers.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- End Include Footer -->
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->
    <!-- Start Include Script -->
    <?php echo $__env->make('admin.headers.mainjs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End Include Script -->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
                  },
                events: function(fetchInfo, successCallback, failureCallback) {
                    // Perform an AJAX request to fetch events
                    var start = fetchInfo.startStr;
                    var end = fetchInfo.endStr;

                    fetch("<?php echo e(route('admin_earning_calendar')); ?>"+'?start=' + start + '&end=' + end )
                        .then(response => response.json())
                        .then(data => {
                            successCallback(data.events); // Pass the event data to FullCalendar
                        })
                        .catch(error => {
                            console.error('Error fetching events:', error);
                            failureCallback(error); // Handle the error
                        });
                },
                datesSet: function(info) {
                    var startDate = info.start;
                    // console.log('View start date:', startDate.toISOString());
                }
            });

            calendar.render();
        });
    </script>

</body>
</html><?php /**PATH C:\xamp\htdocs\projects\hindibible\resources\views/admin/dashboard/index.blade.php ENDPATH**/ ?>