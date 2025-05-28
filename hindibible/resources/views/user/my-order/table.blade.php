<div>
    <div class="table-responsive">
        <table class="table">
            <thead class="bg-success text-white">
                <tr>                    
                    <th scope="col">#</th>
                      <th scope="col">Order Date</th>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Mobile</th>
                      <th scope="col">Amount</th>
                      <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
            @foreach($data_list as $key=> $value)
                <tr>
                    <th scope="row"><a href="{{route('user.my-order.view')}}/{{$value->order_id}}">#{{$value->order_id}}</a></th>
                    <td>{{date("d M, Y h:i A", strtotime($value->add_date_time))}}</td>
                    <th scope="row">{{$value->name}}</th>
                    <th scope="row">{{$value->email}}</th>
                    <th scope="row">{{$value->phone}}</th>
                    <td><span class="text-danger text-bold">{{Helpers::price_formate($value->amount)}}</span></td>
                    <td>
                        @if($value->status==0)
                        <span class="badge btn btn-default">Confirm</span>
                        @elseif($value->status==1)
                        <span class="badge btn btn-info">Proccess</span>
                        @elseif($value->status==2)
                        <span class="badge btn btn-dark">Shipped</span>
                        @elseif($value->status==3)
                        <span class="badge btn btn-success">Delivered</span>
                        @elseif($value->status==4)
                        <span class="badge btn btn-danger">Cancel</span>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <!-- end table -->
    </div>
</div>


<div class="card pagination" >
    {{$data_list->links()}}
</div>
