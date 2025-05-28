<div>
    <div class="table-responsive">
        <table class="table align-middle mb-0">
            <thead class="table-light">
                <tr>                    
                    <th>Affiliate ID </th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Sponser Detail </th>
                    <th>Status</th>
                    <th>Date Created</th>
                    <th>Date Activate</th>
                </tr>
            </thead>
            <tbody>
            @foreach($data_list as $key=> $value)
             @php($sponser = \App\Models\MemberModel::GetSponserData($value->sponser_id))
                <tr>                    
                    <td>{{sort_name.$value->affiliate_id}}</td>
                    <td><a href="{{route('income-history.list').'/?id='.Crypt::encryptString($value->id)}}">{{$value->name}}</a></td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->phone}}</td>
                    <th>
                        {{sort_name.@$value->sponser_id}}<br>
                        {{@$sponser->name}}
                    </th>
                    <td>
                        @if($value->is_paid==1)
                        <span class="badge bg-success">Paid</span>
                        @endif
                        @if($value->is_paid==0)
                        <span class="badge bg-danger">UnPaid</span>
                        @endif
                    </td>
                    <td>{{date("D d F Y h:i A", strtotime($value->add_date_time))}}</td>
                    <td>
                        @if(!empty($value->activate_date_time))
                            {{date("D d F Y h:i A", strtotime($value->activate_date_time))}}
                        @else
                            <span class="badge btn btn-danger">Not Activate</span>
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
