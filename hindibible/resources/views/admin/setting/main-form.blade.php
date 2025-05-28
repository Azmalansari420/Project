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
                                            

                                            <div class="col-lg-4 hide">
                                                <label class="form-label" for="product-title-input">Email</label>
                                                <input type="text" class="form-control" placeholder="Enter Email" name="email" value="{{@$form_data->email}}" required>
                                            </div>

                                            <div class="col-lg-4 hide">
                                                <label class="form-label" for="product-title-input">Phone</label>
                                                <input type="text" class="form-control" placeholder="Enter Mobile" name="mobile" value="{{@$form_data->mobile}}" required>
                                            </div>

                                            <div class="col-lg-4 hide">
                                                <label class="form-label" for="product-title-input">Facebook Link</label>
                                                <input type="text" class="form-control" placeholder="#" name="facebook" value="{{@$form_data->facebook}}" required>
                                            </div>
                                            <div class="col-lg-4 hide">
                                                <label class="form-label" for="product-title-input">Twitter Link</label>
                                                <input type="text" class="form-control" placeholder="#" name="twitter" value="{{@$form_data->twitter}}" required>
                                            </div>
                                            <div class="col-lg-4 hide">
                                                <label class="form-label" for="product-title-input">Linkedin Link</label>
                                                <input type="text" class="form-control" placeholder="#" name="linkedin" value="{{@$form_data->linkedin}}" required>
                                            </div>
                                            <div class="col-lg-4 hide">
                                                <label class="form-label" for="product-title-input">Instagram Link</label>
                                                <input type="text" class="form-control" placeholder="#" name="instagram" value="{{@$form_data->instagram}}" required>
                                            </div>
                                            <div class="col-lg-4 hide">
                                                <label class="form-label" for="product-title-input">Telegram Link</label>
                                                <input type="text" class="form-control" placeholder="#" name="telegram" value="{{@$form_data->telegram}}" required>
                                            </div>
                                            <div class="col-lg-4 hide">
                                                <label class="form-label" for="product-title-input">WhatsApp Link</label>
                                                <input type="text" class="form-control" placeholder="#" name="whatsapp" value="{{@$form_data->whatsapp}}" required>
                                            </div>
                                            <div class="col-lg-4 hide">
                                                <label class="form-label" for="product-title-input">Youtube Channel Link</label>
                                                <input type="text" class="form-control" placeholder="#" name="youtube" value="{{@$form_data->youtube}}" required>
                                            </div>
                                            <div class="col-lg-12 hide">
                                                <label class="form-label" for="product-title-input">Address</label>
                                                <textarea class="form-control" name="address" required>{{@$form_data->address}}</textarea>
                                                <!-- <script>CKEDITOR.replace( 'description' );</script> -->
                                            </div>

                                            <div class="col-lg-6">
                                                <label class="form-label" for="product-title-input">Min Deposit</label>
                                                <input type="text" class="form-control" placeholder="0" name="min_deposit" value="{{@$form_data->min_deposit}}" required>
                                            </div>

                                            <div class="col-lg-6">
                                                <label class="form-label" for="product-title-input">Withdrawal Charge (%)</label>
                                                <input type="text" class="form-control" placeholder="0" name="withdrawal_amount" value="{{@$form_data->withdrawal_amount}}" required>
                                            </div>

                                            <div class="col-lg-12">
                                                <label class="form-label" for="product-title-input">UPI</label>
                                                <input type="text" class="form-control" placeholder="0" name="upi" value="{{@$form_data->upi}}" required>
                                            </div>

                                            <div class="col-lg-4 hide">
                                                <label class="form-label" for="product-title-input">Top Bar Hide/Show</label>
                                                <select class="form-control" name="top_bar_hide_show">
                                                    <option value="1" @if($form_data->top_bar_hide_show==1) selected @endif >Show</option>
                                                    <option value="0" @if($form_data->top_bar_hide_show==0) selected @endif >Hide</option>
                                                </select>
                                            </div>

                                            <div class="col-lg-8 hide">
                                                <label class="form-label" for="product-title-input">Instructor Form Link</label>
                                                <input type="text" class="form-control" placeholder="#" name="instructor_form_link" value="{{@$form_data->instructor_form_link}}" required>
                                            </div>


                                        </div>
                                        <!-- end card -->
                                        <div class="text-center mt-2 mb-3">
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