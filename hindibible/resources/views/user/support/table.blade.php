<div>
    <div class="table-responsive">
        <table class="table">
            <thead class="bg-success text-white">
                <tr>                    
                    <th scope="col">#</th>
                      <th scope="col">Date Time</th>
                      <th scope="col">Subject</th>
                      <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
            @foreach($data_list as $key=> $value)
                <tr>
                    <th scope="row"><a href="{{$data['view_btn_url'].'/'.Crypt::encryptString($value->id)}}">{{$value->ticket_id}}</a></th>
                    <td>{{date("d M, Y h:i A", strtotime($value->add_date_time))}}</td>
                    <td>{!!$value->subject!!}</td>
                    <td>
                        @if($value->status==0)
                        <span class="badge btn btn-default">Pending</span>
                        @elseif($value->status==2)
                        <span class="badge btn btn-info">Proccess</span>
                        @elseif($value->status==1)
                        <span class="badge btn btn-success">Complete</span>
                        @elseif($value->status==3)
                        <span class="badge btn btn-danger">Reject</span>
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
