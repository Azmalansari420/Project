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

    <script src="{{url('public/assetsadmin/')}}/libs/fullcalendar/index.global.min.js"></script>

    <style>
        .fc .fc-view-harness-active > .fc-view {
            inset: 0px;
            position: inherit;
            height: 500px;
        }
        .text-green {
            color: #00a65a !important;
            font-weight: 900;
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
                    
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body frm">
                                        <div class="row" style="align-items: center;">
                                            <div class="col-lg-12">
                                                <div class="" style="text-align: center;background: #00528f;border-radius: 5px;">
                                                       <div class="col-md-12">
                                                          <h2 style="margin: 10px 0 0 0;color: white;font-weight: 800;padding-top: 20px;">{{sort_name.$row->user_id}}</h2>
                                                       </div>
                                                       <div class="col-md-12">
                                                            <img src="{{Helpers::image_check($row->image,'user.png')}}" id="ctl00_ContentPlaceHolder1_userimage" class="img-circle user-d-img" alt="User Avatar">
                                                       </div>
                                                       <div class="col-md-12">
<h2 id="ctl00_ContentPlaceHolder1_lblusername" style="font-size: 27px;margin: 0 0 10px 0;font-weight: 900;color: black;background: #ffffff;padding: 7px 0;text-transform: uppercase;width: fit-content;display: block;margin: 0px auto;margin-bottom: 10px;padding: 5px 10px;">{{$row->name}}</h2>

                                                          
                                                          <!--<button id="btnCopy" onclick="copyToClipboard('#text')" class="btn btn-danger block" style="width: 100%;background: #febe4c !important;color: black;border: 0;margin-bottom: 15px;width: fit-content;border-radius: 0;">Click Referral Link</button>-->
                                                             

                                                          <button id="btnCopy" class="btn btn-danger block" style="width: 100%;background: #febe4c !important;color: black;border: 0;margin-bottom: 15px;width: fit-content;border-radius: 0;">Total Income: {{Helpers::price_formate(@\App\Models\MemberModel::all_time_income($row->id))}}</button>

                                                          <h1 style="color: white;padding-bottom: 20px;"><b class="text-white">Rank: </b>@if($row->rank<1) Not upgrade @else {{\App\Models\MemberModel::rank($row->rank)}} @endif</h1>

                                                          <h1 style="color: white;padding-bottom: 20px;">Package: {{@\App\Models\MemberModel::active_package($row->id)->package_name}}</h1>

                                                          <h1 style="color: white;padding-bottom: 20px;">Total BV: {{$row->total_bv}}</h1>

                                                       </div>
                                                    </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-xl-3 col-md-6">
                                                    <div class="card card-animate">
                                                        <div class="card-body">
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-grow-1 overflow-hidden">
                                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Total Team</p>
                                                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                                                        <div>
                                                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">{{@\App\Models\MemberModel::totalTeam($row->id)}} Members</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-md-6">
                                                    <div class="card card-animate">
                                                        <div class="card-body">
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-grow-1 overflow-hidden">
                                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Total Direct</p>
                                                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                                                        <div>
                                                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">{{@\App\Models\MemberModel::totalDirect($row->id)}} Members</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-md-6">
                                                    <div class="card card-animate">
                                                        <div class="card-body">
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-grow-1 overflow-hidden">
                                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Total Matching</p>
                                                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                                                        <div>
                                                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">{{$row->total_pairs}} Pair </h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-md-6">
                                                    <div class="card card-animate">
                                                        <div class="card-body">
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-grow-1 overflow-hidden">
                                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Activation Date</p>
                                                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                                                        <div>
                                                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">
                                                                                @if(!empty($row->activate_date_time))
                                                                                  {{date("d D M, Y", strtotime($row->activate_date_time))}}
                                                                                @endif

                                                                                @if($row->is_paid!=1)
                                                                                  <span class="badge badge-danger btn btn-danger">ID Not Active</span>
                                                                                @endif
                                                                            </h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>                                                            
                                                        </div>
                                                    </div>
                                                </div>                                                
                                            </div>










                                            
                                        </div>
                                    </div>
                                </div>


                                


                                <!-- end card -->
                            </div>












                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>All Income</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row" style="align-items: center;">
                                            

                                            <div class="row">
                                                
                                                

                                                <div class="col-xl-3 col-md-6">
                                                    <div class="card card-animate">
                                                        <div class="card-body">
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-grow-1 overflow-hidden">
                                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Direct Income</p>
                                                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                                                        <div>
                                                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">{{Helpers::price_formate(@\App\Models\MemberModel::getTypeAllIncome($row->id)->income1)}}</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                

                                                <div class="col-xl-3 col-md-6">
                                                    <div class="card card-animate">
                                                        <div class="card-body">
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-grow-1 overflow-hidden">
                                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Pair Income</p>
                                                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                                                        <div>
                                                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">{{Helpers::price_formate(@\App\Models\MemberModel::getTypeAllIncome($row->id)->income2)}}</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                

                                                <div class="col-xl-3 col-md-6">
                                                    <div class="card card-animate">
                                                        <div class="card-body">
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-grow-1 overflow-hidden">
                                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Downline Income</p>
                                                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                                                        <div>
                                                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">{{Helpers::price_formate(@\App\Models\MemberModel::getTypeAllIncome($row->id)->income3)}}</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                

                                                <div class="col-xl-3 col-md-6">
                                                    <div class="card card-animate">
                                                        <div class="card-body">
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-grow-1 overflow-hidden">
                                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Upline Income</p>
                                                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                                                        <div>
                                                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">{{Helpers::price_formate(@\App\Models\MemberModel::getTypeAllIncome($row->id)->income4)}}</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                

                                                <div class="col-xl-3 col-md-6">
                                                    <div class="card card-animate">
                                                        <div class="card-body">
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-grow-1 overflow-hidden">
                                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Rank Bonus Income</p>
                                                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                                                        <div>
                                                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">{{Helpers::price_formate(@\App\Models\MemberModel::getTypeAllIncome($row->id)->income5)}}</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                                
                                                
                                                                                             
                                            </div>










                                            
                                        </div>
                                    </div>
                                </div>


                                


                                <!-- end card -->
                            </div>








                            <div class="col-lg-12">
                                <div class="card">                                    
                                    <div class="card-body">
                                        <div class="row" style="align-items: center;">
                                            <div class="row">

                                                
                                                <div class="col-xl-3 col-md-6">
                                                    <div class="card card-animate">
                                                        <div class="card-body">
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-grow-1 overflow-hidden">
                                                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                                                        <div>
                                                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">Left Paid Members: {{$row->total_left_paid}}</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>                                                            
                                                        </div>
                                                    </div>
                                                </div> 

                                                <div class="col-xl-3 col-md-6">
                                                    <div class="card card-animate">
                                                        <div class="card-body">
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-grow-1 overflow-hidden">
                                                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                                                        <div>
                                                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">Right Paid Members: {{$row->total_right_paid}}</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>                                                            
                                                        </div>
                                                    </div>
                                                </div> 

                                                <div class="col-xl-3 col-md-6">
                                                    <div class="card card-animate">
                                                        <div class="card-body">
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-grow-1 overflow-hidden">
                                                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                                                        <div>
                                                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">Left Unpaid Members: {{$row->total_left_unpaid}}</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>                                                            
                                                        </div>
                                                    </div>
                                                </div> 

                                                <div class="col-xl-3 col-md-6">
                                                    <div class="card card-animate">
                                                        <div class="card-body">
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-grow-1 overflow-hidden">
                                                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                                                        <div>
                                                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">Right Unpaid Members: {{$row->total_right_unpaid}}</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>                                                            
                                                        </div>
                                                    </div>
                                                </div>                                                
                                                
                                                                                             
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="card"> 
                                    <div class="card-header">
                                        <h4>Rank List</h4>
                                    </div>                                   
                                    <div class="card-body">
                                        <div class="row" style="align-items: center;">
                                            <div class="row">

                                                <table class="table table-respinsive">
                                                    <thead>
                                                      <tr>
                                                        <th>#</th>
                                                        <th>Rank</th>
                                                        <th>Target</th>
                                                        <th>Status</th>
                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                      <tr>
                                                        <td>1</td>
                                                        <td>Sr. Executive</td>
                                                        <td>2 ID : 1 ID</td>
                                                        <td>@if($row->rank>=1) <span class="text-bold text-green">Completed</span> @else <i class="bx bx-loader-circle bx-spin"></i> @endif 500/-</td>
                                                      </tr>
                                                      <tr>
                                                        <td>2</td>
                                                        <td>Star Executive</td>
                                                        <td>2 Sr. Ex. : 1 Sr. Ex.</td>
                                                        <td>@if($row->rank>=2) <span class="text-bold text-green">Completed</span> @else <i class="bx bx-loader-circle bx-spin"></i> @endif 1500/-</td>
                                                      </tr>
                                                      <tr>
                                                        <td>3</td>
                                                        <td>Super Star Executive</td>
                                                        <td>2 Star Ex. : 1 Star Ex.</td>
                                                        <td>@if($row->rank>=3) <span class="text-bold text-green">Completed</span> @else <i class="bx bx-loader-circle bx-spin"></i> @endif 2500/-</td>
                                                      </tr>
                                                      <tr>
                                                        <td>4</td>
                                                        <td>Silver Executive</td>
                                                        <td>2 Super Satr Ex. : 1 Super Satr Ex.</td>
                                                        <td>@if($row->rank>=4) <span class="text-bold text-green">Completed</span> @else <i class="bx bx-loader-circle bx-spin"></i> @endif 10,000/-</td>
                                                      </tr>
                                                      <tr>
                                                        <td>5</td>
                                                        <td>Gold Executive</td>
                                                        <td>3 Silver Ex. : 2 Silver Ex.</td>
                                                        <td>@if($row->rank>=5) <span class="text-bold text-green">Completed</span> @else <i class="bx bx-loader-circle bx-spin"></i> @endif 50,000/-</td>
                                                      </tr>
                                                      <tr>
                                                        <td>6</td>
                                                        <td>Super Gold Executive</td>
                                                        <td>3 Gold Ex. : 2 Gold Ex.</td>
                                                        <td>@if($row->rank>=6) <span class="text-bold text-green">Completed</span> @else <i class="bx bx-loader-circle bx-spin"></i> @endif 2,50,000/-</td>
                                                      </tr>
                                                      <tr>
                                                        <td>7</td>
                                                        <td>Daimond Executive</td>
                                                        <td>3 Super Gold Ex. : 2 Super Gold Ex.</td>
                                                        <td>@if($row->rank>=7) <span class="text-bold text-green">Completed</span> @else <i class="bx bx-loader-circle bx-spin"></i> @endif 10,00,000,00/-</td>
                                                      </tr>
                                                      <tr>
                                                        <td>8</td>
                                                        <td>Super Daimond Executive</td>
                                                        <td>3 Daimond Ex. : 2 Daimond Ex.</td>
                                                        <td>@if($row->rank>=8) <span class="text-bold text-green">Completed</span> @else <i class="bx bx-loader-circle bx-spin"></i> @endif 50,00,000/-</td>
                                                      </tr>
                                                      <tr>
                                                        <td>9</td>
                                                        <td>Saphire Daimond Executive</td>
                                                        <td>1 Super Daimond Ex. : 1 Super Daimond</td>
                                                        <td>@if($row->rank>=9) <span class="text-bold text-green">Completed</span> @else <i class="bx bx-loader-circle bx-spin"></i> @endif 1,00,000,00 </td>
                                                      </tr>
                                                      <tr>
                                                        <td>10</td>
                                                        <td>Crown Daimond Executive</td>
                                                        <td>1 Saphire Daimond Ex. : 1 Saphire Daimond Ex.</td>
                                                        <td>@if($row->rank>=10) <span class="text-bold text-green">Completed</span> @else <i class="bx bx-loader-circle bx-spin"></i> @endif 2,50,000,00/-</td>
                                                      </tr>
                                                    </tbody>
                                                  </table>
                                                                                              
                                                
                                                                                             
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>











                            <!-- end col -->
                            <div class="card p-3">
                                <div class="col-lg-12">
                                    <div id='calendar-container'>
                                        <div id='calendar'></div>
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

                    fetch("{{$data['earning_calendar']}}"+'?start=' + start + '&end=' + end + "&id={{$data['user_id']}}")
                        .then(response => response.json())
                        .then(data => {
                            successCallback(data); // Pass the event data to FullCalendar
                        })
                        .catch(error => {
                            console.error('Error fetching events:', error);
                            failureCallback(error); // Handle the error
                        });
                },
                datesSet: function(info) {
                    var startDate = info.start;
                    console.log('View start date:', startDate.toISOString());
                }
            });

            calendar.render();
        });
    </script>




</body>
</html>