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
                    <!-- end page title -->
                    <form class="needs-validation form_data" action="{{$data['submit_url']}}" method="post" enctype="multipart/form-data" id="form_data_submit" novalidate>
                        @csrf
                        <input type="hidden" name="id" value="{{Crypt::encryptString(@$row->id)}}">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body frm">
                                        <div class="row">
                                            
                                            <div class="col-lg-4">
                                                <label class="form-label" for="product-title-input">Your Name as per Bank Account </label>
                                                <input type="text" class="form-control" placeholder="Enter Package Name" name="bank_holder_name" value="{{@$row->bank_holder_name}}" required>
                                            </div>
                                            
                                            <div class="col-lg-4">
                                                <label class="form-label" for="product-title-input">Bank Name</label>
                                                <input type="text" class="form-control" placeholder="Enter Package Name" name="bank_name" value="{{@$row->bank_name}}" required>
                                            </div>
                                            
                                            <div class="col-lg-4">
                                                <label class="form-label" for="product-title-input">Account Number</label>
                                                <input type="text" class="form-control" placeholder="Enter Package Name" name="account_number" value="{{@$row->account_number}}" required>
                                            </div>
                                            
                                            <div class="col-lg-4">
                                                <label class="form-label" for="product-title-input">Account Type </label>
                                                <select class="form-select mb-3" aria-label="Default select example" name="account_type">
                                                    <option value="Saving" @if(@$row->account_type=='Saving')selected @endif >Saving</option>
                                                    <option value="Current" @if(@$row->account_type=='Current')selected @endif >Current</option>
                                                </select>
                                            </div>
                                            
                                            <div class="col-lg-4">
                                                <label class="form-label" for="product-title-input">IFSC </label>
                                                <input type="text" class="form-control" placeholder="Enter Package Name" name="ifsc" value="{{@$row->ifsc}}" required>
                                            </div>
                                            
                                            <div class="col-lg-4">
                                                <label class="form-label" for="product-title-input">PAN Card</label>
                                                <input type="text" class="form-control" placeholder="Enter Package Name" name="pan" value="{{@$row->pan}}" required>
                                            </div>
                                            
                                            <div class="col-lg-4">
                                                <label class="form-label" for="product-title-input">Bank Registered Mobile</label>
                                                <input type="text" class="form-control" placeholder="Enter Package Name" name="rg_mobile" value="{{@$row->rg_mobile}}" required>
                                            </div>
                                            
                                            <div class="col-lg-4">
                                                <label class="form-label" for="product-title-input">Bank Registered Email</label>
                                                <input type="text" class="form-control" placeholder="Enter Package Name" name="rg_email" value="{{@$row->rg_email}}" required>
                                            </div>
                                            
                                            <div class="col-lg-4">
                                                <label class="form-label" for="product-title-input">Address </label>
                                                <input type="text" class="form-control" placeholder="Enter Package Name" name="address" value="{{@$row->address}}" required>
                                            </div>
                                            
                                            
                                            <div class="col-lg-4">
                                                <label for="formFile" class="form-label">Kyc Status</label>
                                                <select class="form-select mb-3" aria-label="Default select example" name="kyc_step">
                                                    <option value="1" @if(@$row->kyc_step==1)selected @endif >Approve</option>
                                                    <option value="2" @if(@$row->kyc_step==2)selected @endif >New</option>
                                                    <option value="3" @if(@$row->kyc_step==3)selected @endif >Reject</option>
                                                    <option value="4" @if(@$row->kyc_step==4)selected @endif >Change Request</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-8">
                                                <label class="form-label" for="product-title-input">Kyc Message </label>
                                                <input type="text" class="form-control" placeholder="Enter Package Name" name="kyc_message" value="{{@$row->kyc_message}}" required>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <label for="formFile" class="form-label">Bank Passbook Image</label>
                                                <label style="display:block">
                                                    <input class="form-control upload-single-image" type="file" name="passbook_image" data-target="passbook_image">
                                                    <img class="upload-img-view img-thumbnail mt-2 mb-2 passbook_image" id="viewer"
                                                        onerror="this.src='{{asset('storage/app/public/upload/default.jpg')}}'"
                                                        src="{{asset('storage/app/public/upload/')}}/{{@$row->passbook_image}}" alt="banner image"/>
                                                </label>
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