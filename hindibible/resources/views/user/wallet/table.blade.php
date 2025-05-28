<div>
    <div class="table-responsive">
        <table class="table">
            <thead class="bg-success text-white">
                <tr>                    
                    <th scope="col">#</th>
                      <th scope="col">Amount</th>
                      <th scope="col">Date Time</th>
                      <th scope="col">Message</th>
                </tr>
            </thead>
            <tbody>
            @foreach($data_list as $key=> $value)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                      <td>
                            @if($value->type==1)
                                <span class="text-green text-bold">+ {{Helpers::price_formate($value->amount)}}</span>
                            @endif
                            @if($value->type==2)
                                <span class="text-danger text-bold">- {{Helpers::price_formate($value->amount)}}</span>
                            @endif
                        </td>
                      <td>{{date("d M, Y h:i A", strtotime($value->add_date_time))}}</td>
                      <td>{!!$value->message!!}</td>
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
