<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">
<head>
    <meta charset="utf-8" />
    <title>{{$data['page_title']}} | {{env("APP_NAME")}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Start Include Css -->
    @include('admin.headers.maincss')
    <!-- End Include Css -->

    <style>
        .select2-container {
            z-index: 1111;
        }
        #deleteRecordModal {
            z-index: 9999999999999;
        }
        #deleteRecordModal.show:before {
            content: '';
            background: rgb(0 0 0 / 61%);
            width: 100%;
            height: 100%;
            position: fixed;
            z-index: 0;
        }

    </style>
</head>
<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
        <!-- Start Include Header -->
        @include('admin.headers.header')
        <!-- End Include Header -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div
                                class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                                <h4 class="mb-sm-0">{{$data['page_title']}}</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                                        <li class="breadcrumb-item active">{{$data['page_title']}}
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->







                    @include('admin.user.profile-card')






                   
                        <div class="row mt-4">
                                    


                            <div class="col-xl-3 col-md-6">
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <a href="{{route('user.dashboard').'/'.Crypt::encryptString($row->id)}}">
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-success-subtle rounded fs-3">
                                                    <i class="bx ri-dashboard-fill text-success"></i>
                                                </span>                                                
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Dashboard</p>
                                                </div>
                                            </div>      
                                        </a>                                  
                                    </div>
                                </div>
                            </div>



                            <div class="col-xl-3 col-md-6">
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <a href="{{route('user.team').'/'.Crypt::encryptString($row->id)}}">
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-success-subtle rounded fs-3">
                                                    <i class="bx ri-team-fill text-success"></i>
                                                </span>                                                
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Team Tree</p>
                                                </div>
                                            </div>      
                                        </a>                                  
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <a href="{{route('user.reffral').'/'.Crypt::encryptString($row->id)}}">
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-success-subtle rounded fs-3">
                                                    <i class="bx bx-share-alt text-success"></i>
                                                </span>                                                
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Reffrals</p>
                                                </div>
                                            </div>      
                                        </a>                                  
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <a href="{{route('user.team-reffral').'/'.Crypt::encryptString($row->id)}}">
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-success-subtle rounded fs-3">
                                                    <i class="bx bx-share-alt text-success"></i>
                                                </span>                                                
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Team Reffrals</p>
                                                </div>
                                            </div>      
                                        </a>                                  
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <a href="{{route('income-history.list').'/?id='.Crypt::encryptString($row->id)}}">
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-success-subtle rounded fs-3">
                                                    <i class="bx bx-history text-success"></i>
                                                </span>                                                
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Income History</p>
                                                </div>
                                            </div>      
                                        </a>                                  
                                    </div>
                                </div>
                            </div>





                            <div class="col-xl-3 col-md-6">
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <a href="{{route('user.edit').'/'.Crypt::encryptString($row->id)}}">
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-success-subtle rounded fs-3">
                                                    <i class="bx bx-edit text-success"></i>
                                                </span>                                                
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Edit Basic Detail</p>
                                                </div>
                                            </div>      
                                        </a>                                  
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-3 col-md-6">
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <a href="{{route('bank.edit').'/'.Crypt::encryptString($row->id)}}">
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-success-subtle rounded fs-3">
                                                    <i class="bx ri-bank-fill text-success"></i>
                                                </span>                                                
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Edit Bank Detail</p>
                                                </div>
                                            </div>      
                                        </a>                                  
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-3 col-md-6">
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <a href="{{route('user.change-password').'/'.Crypt::encryptString($row->id)}}">
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-success-subtle rounded fs-3">
                                                    <i class="bx bx-hide text-success"></i>
                                                </span>                                                
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Change password</p>
                                                </div>
                                            </div>      
                                        </a>                                  
                                    </div>
                                </div>
                            </div>



                            <div class="col-xl-3 col-md-6">
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <a href="{{route('user.change-sponser').'/'.Crypt::encryptString($row->id)}}">
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-success-subtle rounded fs-3">
                                                    <i class="bx bx-abacus text-success"></i>
                                                </span>                                                
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Change Sponser</p>
                                                </div>
                                            </div>      
                                        </a>                                  
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-3 col-md-6">
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <a href="{{route('user.activate-with-income').'/'.Crypt::encryptString($row->id)}}">
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-success-subtle rounded fs-3">
                                                    <i class="bx ri-account-box-fill text-success"></i>
                                                </span>                                                
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Activate Account</p>
                                                </div>
                                            </div>      
                                        </a>                                  
                                    </div>
                                </div>
                            </div>
                          
                            
                            <div class="col-xl-3 col-md-6">
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <a >
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-success-subtle rounded fs-3">
                                                    <i class="bx bx-envelope text-success"></i>
                                                </span>                                                
                                            </div>                                                    
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Send Password On Mail</p>
                                                </div>
                                            </div>      
                                            <button class="btn btn-success" id="send_password">Send</button>
                                        </a>                                  
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <a >
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-success-subtle rounded fs-3">
                                                    <i class="bx bx-block text-success"></i>
                                                </span>                                                
                                            </div>                                                    
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Account Block/Unblock</p>
                                                </div>
                                            </div>      
                                            <button class="btn btn-success block_unblock block-button">Block</button>
                                            <button class="btn btn-success block_unblock unblock-button">Unblock</button>
                                        </a>                                  
                                    </div>
                                </div>
                            </div>


                            
                            
                            
                        </div>




                </div>
            </div>
            <!-- End Page-content -->
            <!-- Start Include Footer -->
            @include('admin.headers.footer')
            <!-- End Include Footer -->
        </div>
    </div>
    <!-- END layout-wrapper -->


  


    <!-- Start Include Script -->
    @include('admin.headers.mainjs')
    <!-- End Include Script -->

    <!-- leaderboard_show_hide -->

    <script>
        
        $(document).on("click", "#send_password",(function(e) {
          loader("show");
            var form = new FormData();
            form.append("user_id","{{Crypt::encryptString($row->id)}}");
            var settings = {
              "url": "{{$data['back_btn']}}/send_password",
              "method": "POST",
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
            });
       }));
        $(document).on("click", ".block_unblock",(function(e) {
          loader("show");
            var form = new FormData();
            form.append("user_id","{{Crypt::encryptString($row->id)}}");
            var settings = {
              "url": "{{$data['back_btn']}}/block_unblock",
              "method": "POST",
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
                
                $(".block-button, .unblock-button").hide();
                if(response.data.status==1) $(".block-button").show();
                else $(".unblock-button").show();

            });
       }));

        var status = "{{$row->status}}";
        $(".block-button, .unblock-button").hide();
        if(status==1) $(".block-button").show();
        else $(".unblock-button").show();

    </script>









</body>
</html>