@include('user.headers.header')
@php($cartDetail = \App\Models\MemberModel::cartDetail(@$row->user_id))

  
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
              <h5 class="text-white m-b-0">Cart Products </h5>
            </div>
            <div class="card-body row ">
              <div class="info-box">
                  <div class="table-responsive">
                    <table class="table">
                        <thead class="bg-success text-white">
                            <tr>                    
                                <th scope="col">#</th>
                                <th scope="col">Product name</th>
                                <th scope="col">Unit Price</th>
                                <th scope="col">QTY</th>
                                <th scope="col">Total Price</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($cartDetail['cartProducts'] as $key=>$value)
                            <tr>
                              <td>{{$key+1}}</td>
                              <td>{{$value->name}}</td>
                              <td>{{Helpers::price_formate($value->sale_price)}}</td>
                              <td style="width:150px">
                                <div class="add-cart-btn-group">
                                    <button type="button" class="plus-btn" data-id="{{$value->product_id}}" data-type="1">-</button>
                                    <input type="number" value="{{$value->qty}}">
                                    <button type="button" class="devide-btn" data-id="{{$value->product_id}}" data-type="2">+</button>
                                </div>
                              </td>
                              <td>{{Helpers::price_formate($value->sale_price*$value->qty)}}</td>
                              
                            </tr>
                          @endforeach


                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <th>Cart Total</th>
                            <th>{{Helpers::price_formate($cartDetail['cartTotal'])}}</th>
                          </tr>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <th>Gst</th>
                            <th>{{Helpers::price_formate($cartDetail['gst'])}}</th>
                          </tr>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <th>Final Amount</th>
                            <th>{{Helpers::price_formate($cartDetail['cartFinalAmount'])}}</th>
                          </tr>

                        </tbody>
                      </table>
                    <!-- end table -->
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="col-lg-12 mt-3">
          <div class="card card-outline">
            <div class="card-header bg-blue">
              <h5 class="text-white m-b-0">Shipping Address </h5>
            </div>
            <div class="card-body row ">
              <div class="info-box">
                  <form class="form row form_data" action="{{route('user.checkout.place_order')}}" method="post" enctype="multipart/form-data" id="form_data_submit" novalidate>
                    @csrf                

                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Name</label>
                        <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-user"></i></div>
                          <input class="form-control" placeholder="Name" type="text" name="name" value="{{@$orders->name}}" required>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Email</label>
                        <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                          <input class="form-control" placeholder="Email" type="email" name="email" value="{{@$orders->email}}" required>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Phone</label>
                        <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                          <input class="form-control" placeholder="Phone" type="number" name="phone" value="{{@$orders->phone}}" required>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>State</label>
                        <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-circle-o"></i></div>
                          <select class="form-select mb-3" aria-label="Default select example" name="state" required>
                              <option value=""  >Select</option>
                              @php($states = DB::table('states')->get())
                              @foreach($states as $key => $value)
                                  <option value="{{$value->id}}" @if(@$orders->state==$value->id) selected @endif >{{$value->name}}</option>
                              @endforeach
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>City</label>
                        <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-circle-o"></i></div>
                          <input class="form-control" placeholder="City" type="text" name="city" value="{{@$orders->city}}" required>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Address</label>
                        <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-map-marker"></i></div>
                          <input class="form-control" placeholder="Address" type="text" name="address" value="{{@$orders->address}}" required>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Place Order</button>
                    </div>



                  </form>
              </div>
            </div>
          </div>
        </div>






      </div>
      
    </div>
    <!-- /.content --> 
  </div>
  <!-- /.content-wrapper -->







<script>
     var type = 0;
   var p_id = 0;
   var input = 0;
   var qty = 0;
   $(document).on("click", ".plus-btn, .devide-btn",(function(e) {
      type = $(this).data("type");
      p_id = $(this).data("id");
      input = $(this).parent().find('input');

      if(type=='2') qty = parseInt($(input).val())+1;
      else qty = parseInt($(input).val())-1;
      if(qty<1) qty = 0;


      $(input).val(qty);

      event.preventDefault();
      loader("show");
        var form = new FormData();
        form.append("id",p_id);
        form.append("qty",qty);
        var settings = {
          "url": "{{route('user.cart.add')}}",
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
</script>


@include('user.headers.footer')