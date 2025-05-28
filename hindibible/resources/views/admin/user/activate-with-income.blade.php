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
                    @include('admin.user.profile-card')
                    <!-- end page title -->
                    <form class="mt-2 needs-validation form_data" action="{{route('user.activate-with-income-action')}}" method="post" enctype="multipart/form-data" id="form_data_submit" novalidate>
                        @csrf
                        <input type="hidden" name="id" value="{{Crypt::encryptString(@$row->id)}}">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body frm">
                                        <div class="row">
                                            

                                            <div class="col-lg-12">
                                                <label class="form-label" for="product-title-input">Sponser Name</label>
                                                <span class="badge badge-gradient-info">{{$row->sponser_name}}</span>
                                            </div>

                                            <div class="col-lg-12">
                                                <label class="form-label" for="product-title-input">Sponser ID</label>
                                                <span class="badge badge-gradient-info">{{sort_name.$row->sponser_id}}</span>
                                            </div>

                                            <div class="col-lg-12">
                                                <label class="form-label" for="product-title-input">Package Name</label>
                                                <span class="badge badge-gradient-info">{{$row->package_name}}</span>

                                                <div class="col-lg-4">
                                                    <div class="mtlicat">
                                                        <select class="form-select mb-3" aria-label="Default select example" name="package" required>
                                                            <option value=""  >Select</option>
                                                            @php($packages = DB::table('package')->get())
                                                            @foreach($packages as $key => $value)
                                                                <option value="{{$value->id}}" @if(@$row->package==$value->id)selected @endif >{{$value->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                            
                                        </div>
                                        <!-- end card -->
                                        <div class="text-center mt-5 mb-3">
                                            <button type="submit" class="btn btn-success w-sm">Save</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                    </form>
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
</body>
</html>