<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>
    <meta charset="utf-8" />
    <title><?php echo e($data['page_title']); ?> | <?php echo e(env("APP_NAME")); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Start Include Css -->
   <?php echo $__env->make('admin.headers.maincss', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End Include Css -->
</head>

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
        <!-- Start Include Header -->
       <?php echo $__env->make('admin.headers.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>        <!-- End Include Header -->
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
                                        <li class="breadcrumb-item active"><?php echo e($data['page_title']); ?></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card" id="applicationList">


                                <div class="card-header border-bottom-dashed">
                                    <div class="row g-4 align-items-center">

                                        <div class="col-md-8">
                                            
                                        </div>
                                        <div class="col-md-2">
                                            <a href="<?php echo e($data['add_btn_url']); ?>" class="btn btn-primary add-btn w-100" id="create-btn"><i class="ri-add-line align-bottom me-1"></i> Add New User</a>
                                        </div>
                                        <div class="col-md-2">
                                            <button type="button" class="btn btn-success" id="excel-export">Excel</button>
                                            <button type="button" class="btn btn-danger">PDF</button>                                            
                                        </div>

                                        
                                    </div>
                                </div>


                                <div class="card-header  border-0">
                                    <div class="row">
                                        
                                        <div class="col-md-2">
                                            <select class="form-control kyc" id="kycchange">
                                                    <option value="">All</option>
                                                    <option value="1">Approve</option>
                                                    <option value="2">Under Review</option>
                                                    <option value="3">Reject</option>
                                                    <option value="0">Document Not Uploaded</option>
                                            </select>
                                         </div>
                                        <div class="col-md-2">
                                            <select class="form-control status" id="statuschange">
                                               <option value="0">Paid/Unpaid Users</option>
                                               <option value="1">Paid Users</option>
                                               <option value="2">Unpaid Users</option>
                                            </select>
                                         </div>
                                         <div class="col-md-2 hide">
                                            <select class="form-control order_by" id="order_by">
                                               <option value="id asc">All</option>
                                            </select>
                                         </div>
                                         <div class="col-md-2">
                                            <select class="form-control daywise" id="daywise">
                                               <option value="">All</option>
                                               <option value="1">Last Weak</option>
                                               <option value="2">Last Month</option>
                                               <option value="3">Last Year</option>
                                            </select>
                                         </div>
                                         <div class="col-md-1">
                                            <select class="form-control limit" id="limit">
                                               <option value="12">12</option>
                                               <option value="24">24</option>
                                               <option value="36">36</option>
                                               <option value="100">100</option>
                                            </select>
                                         </div>   
                                         <div class="col-sm-2">
                                            <div class="">
                                                <input type="date" class="form-control" id="from-date">
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="">
                                                <input type="date" class="form-control" id="to-date">
                                            </div>
                                        </div>
                                        <div class="col-md-2 mt-1">
                                            <div class="navbar-item navbar-form">
                                                  <div class="form-group">
                                                    <select class="form-control search_type" id="search_type">
                                                       <option value="">Select Search Type</option>
                                                       <option value="1">ID</option>
                                                       <option value="2">Name</option>
                                                       <option value="3">Email</option>
                                                       <option value="4">Mobile</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>   
                                        <div class="col-md-5 mt-1">
                                            <div class="navbar-item navbar-form">
                                                  <div class="form-group">
                                                     <input type="text" class="form-control search-input" placeholder="Enter keyword">
                                                  </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 mt-1">
                                            <div class="navbar-item navbar-form">
                                                  <div class="form-group">
                                                    <select class="form-control gender" id="gender">
                                                       <option value="">Select Gender</option>
                                                       <option value="1">Male </option>
                                                       <option value="2">Female</option>
                                                       <option value="3">Transgender</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>                                             
                                         
                                         <div class="col-md-3 mt-1">
                                            <button href="<?php echo e($data['back_btn']); ?>" class="btn btn-dark search w-100"><i class="ri-search-line align-bottom me-1"></i> Search</button>
                                         </div>
                                    </div>
                                </div>
                                <div class="card-body pt-0" id="data-list">
                                </div>
                            </div>

                            



                        </div>
                        <!--end col-->
                    </div>


                    <!--end row-->
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
   var data = '';
   var main_url = "<?php echo e($data['back_btn']); ?>/load_data";

   function get_url_data()
   {
       var gender = $("#gender").val();
       var search_type = $("#search_type").val();
       var daywise = $("#daywise").val();
       var from_date = $("#from-date").val();
       var to_date = $("#to-date").val();
       var kyc = $("#kycchange").val();
       var status = $("#statuschange").val();
       var order_by = $("#order_by").val();
       var limit = $("#limit").val();
       var filter_search_value = $(".search-input").val();
       data = `gender=${gender}&search_type=${search_type}&daywise=${daywise}&to_date=${to_date}&from_date=${from_date}&status=${status}&kyc=${kyc}&order_by=${order_by}&limit=${limit}&filter_search_value=${filter_search_value}`;
   }
   get_url_data();
   url = main_url+'?'+data;
   load_table();
   $(document).on("change", "#statuschange,#kycchange, .order_by, .limit, #from-date, #to-date, #daywise",(function(e) {
      get_url_data();
      url =main_url+"?"+data;
      load_table();
   }));
   $(document).on("click", ".search",(function(e) {
      get_url_data();
      url =main_url+"?"+data;
      load_table();
   }));
   $(document).on("click", ".pagination a",(function(e) {      
      event.preventDefault();
      get_url_data()
      url = $(this).attr("href")+'&'+data;
      load_table();
   }));

   function load_table()
   {
        data_loader("#data-list",1);
        var form = new FormData();
        var settings = {
          "url": url,
          "method": "GET",
          "timeout": 0,
          "processData": false,
          "headers": {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
           },
          "mimeType": "multipart/form-data",
          "contentType": false,
          "dataType": "json",
          "data": form
        };
        $.ajax(settings).always(function (response) {
            data_loader("#data-list",0);
            response = admin_response_data_check(response);
            $("#data-list").html(response.data.list);

        });
   }


   $(document).on("click", "#excel-export",(function(e) {
      excel_export();
   }));
   function excel_export()
   {
        get_url_data();
        loader("show");
        var form = new FormData();
        var settings = {
          "url": "<?php echo e($data['excel_export']); ?>?"+data,
          "method": "GET",
          "timeout": 0,
          "processData": false,
          "headers": {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
           },
          "mimeType": "multipart/form-data",
          "contentType": false,
          "dataType": "json",
          "data": form
        };
        $.ajax(settings).always(function (response) {
            loader("hide");
            response = admin_response_data_check(response);
            if(response.status==200)
            {
                window.location.href=response.url;
            }
            // $("#data-list").html(response.data.list);

        });
   }


</script>


</body>

</html><?php /**PATH D:\xamp\htdocs\projects\codediffusion\hindibible\resources\views/admin/technician/index.blade.php ENDPATH**/ ?>