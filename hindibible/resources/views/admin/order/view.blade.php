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



                                            <div class="col-6">
                                                <h4>User Detail</h4>
                                                <p><strong>User ID.</strong> {{$user->user_id}}</p>
                                                <p><strong>Name</strong> {{$user->name}}</p>
                                                <p><strong>Email</strong> {{$user->email}}</p>
                                                <p><strong>Phone</strong> {{$user->phone}}</p>
                                            </div>

                                            <div class="col-6">
                                                <h4>Shipping Detail</h4>
                                                <p><strong>Order ID.</strong> #{{$row->order_id}}</p>
                                                <p><strong>Name</strong> {{$row->name}}</p>
                                                <p><strong>Email</strong> {{$row->email}}</p>
                                                <p><strong>Phone</strong> {{$row->phone}}</p>
                                                <p><strong>State</strong> {{$row->state}}</p>
                                                <p><strong>City</strong> {{$row->city}}</p>
                                                <p><strong>Address</strong> {{$row->address}}</p>
                                            </div>


                                           <div class="col-12">
                                               @php($orderProducts = DB::table("order_products")->where("order_id",$row->order_id)->get())
                                                <table class="table">
                                                    <thead class="bg-success text-white">
                                                        <tr>                    
                                                            <th scope="col">#</th>
                                                            <th scope="col">Product name</th>
                                                            <th scope="col">Price</th>
                                                            <th scope="col">QTY</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                      @foreach($orderProducts as $key=>$value)
                                                        <tr>
                                                          <td>{{$key+1}}</td>
                                                          <td>{{$value->name}}</td>
                                                          <td>{{Helpers::price_formate($value->price)}}</td>
                                                          <td>{{$value->qty}}</td>
                                                        </tr>
                                                      @endforeach


                                                      <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <th>Sub Total</th>
                                                        <th>{{Helpers::price_formate($row->amount)}}</th>
                                                      </tr>
                                                      <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <th>Gst</th>
                                                        <th>{{Helpers::price_formate($row->gst)}}</th>
                                                      </tr>
                                                      <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <th>Total Amount</th>
                                                        <th>{{Helpers::price_formate($row->final_amount)}}</th>
                                                      </tr>

                                                    </tbody>
                                                </table>
                                           </div>

                                            
                                            <div class="col-lg-4">
                                                <label for="formFile" class="form-label">Update Status</label>
                                                <select class="form-select mb-3" aria-label="Default select example" name="status">
                                                    <option value="0" @if(@$row->status==0)selected @endif >New</option>
                                                    <option value="1" @if(@$row->status==1)selected @endif >Proccess</option>
                                                    <option value="2" @if(@$row->status==2)selected @endif >Shipped</option>
                                                    <option value="3" @if(@$row->status==3)selected @endif >Delivered</option>
                                                    <option value="4" @if(@$row->status==4)selected @endif >Cancel</option>
                                                </select>
                                            </div>
                                           
                                                                                  
                                           
                                            
                                            
                                            
                                        </div>
                                        <!-- end card -->
                                        <div class="text-center mt-5 mb-3">
                                            <button type="submit" class="btn btn-success w-sm">Update</button>
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