@include('user.headers.header')
@php($orderProducts = DB::table("order_products")->where("order_id",$order->order_id)->get())
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1 class="text-black">{{$data['page_title']}}</h1>
      <ol class="breadcrumb">
        <li><a href="{{url('user/dashboard')}}">Home</a></li>
        @foreach($data['pagenation'] as $key => $value)
          <li class="sub-bread"><i class="fa fa-angle-right"></i> {{$value}}</li>
        @endforeach
      </ol>
    </div>
    
    <!-- Main content -->
    <div class="content">
      <div class="row">
        


        <div class="col-lg-12 mt-3">
          <div class="card card-outline">
            <div class="card-header bg-blue">
              <h5 class="text-white m-b-0">Shipping Address 

                @if($order->status==0)
                  <span class="badge btn btn-default">Confirm</span>
                @elseif($order->status==1)
                  <span class="badge btn btn-info">Proccess</span>
                @elseif($order->status==2)
                  <span class="badge btn btn-dark">Shipped</span>
                @elseif($order->status==3)
                  <span class="badge btn btn-success">Delivered</span>
                @elseif($order->status==4)
                  <span class="badge btn btn-danger">Cancel</span>
                @endif
              </h5>
            </div>
            <div class="card-body row ">
              <div class="row" style="padding:0 15px;width: 100%;">
                    
                    <div class="col-md-4">
                      <p><strong>Name: </strong>{{$order->name}}</p>
                    </div>

                    <div class="col-md-4">
                      <p><strong>Email: </strong>{{$order->email}}</p>
                    </div>

                    <div class="col-md-4">
                      <p><strong>Phone: </strong>{{$order->phone}}</p>
                    </div>

                    <div class="col-md-4">
                      @php($states = DB::table('states')->where('id',$order->state)->first())
                      <p><strong>State: </strong>{{@$states->name}}</p>
                    </div>

                    <div class="col-md-4">
                      <p><strong>City: </strong>{{$order->city}}</p>
                    </div>

                    <div class="col-md-4">
                      <p><strong>Address: </strong>{{$order->address}}</p>
                    </div>

                   

                   

              </div>
            </div>
          </div>
        </div>




        <div class="col-lg-12 mt-3">
          <div class="card card-outline">
            <div class="card-header bg-blue">
              <h5 class="text-white m-b-0">Order Products </h5>
            </div>
            <div class="card-body row ">
              <div class="info-box">
                  <div class="table-responsive">
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
                            <th>{{Helpers::price_formate($order->amount)}}</th>
                          </tr>
                          <tr>
                            <td></td>
                            <td></td>
                            <th>Gst</th>
                            <th>{{Helpers::price_formate($order->gst)}}</th>
                          </tr>
                          <tr>
                            <td></td>
                            <td></td>
                            <th>Total Amount</th>
                            <th>{{Helpers::price_formate($order->final_amount)}}</th>
                          </tr>

                        </tbody>
                      </table>
                    <!-- end table -->
                </div>
              </div>
            </div>
          </div>
        </div>


        






      </div>
      
    </div>
    <!-- /.content --> 
  </div>
  <!-- /.content-wrapper -->










@include('user.headers.footer')