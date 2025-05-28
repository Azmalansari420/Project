<div>
    <div class="table-responsive">
        <table class="table">
            <thead class="bg-success text-white">
                <tr>                    
                    <th scope="col">#</th>
                      <th scope="col">Amount</th>
                      <th scope="col">Payment Mode</th>
                      <th scope="col">Date</th>
                      <th scope="col">Status</th>
                      <th scope="col">Message</th>
                </tr>
            </thead>
            <tbody>
            @foreach($data_list as $key=> $value)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                      <td>{{Helpers::price_formate($value->amount)}}</td>
                      <td><span class="btn btn-sm btn-dark">{{$value->payment_mode}}</span></td>   
                      <td>{{date("d M, Y", strtotime($value->add_date_time))}}</td>
                      <td>
                        @if($value->status==0)
                            <span class="badge bg-danger">Pending</span>
                        @elseIf($value->status==1)
                            <span class="badge bg-success">Accepted</span>
                        @elseIf($value->status==2)
                            <span class="badge bg-danger">Rejected</span>
                        @endif
                      </td>
                      <td>{{$value->message}}</td>                  
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
