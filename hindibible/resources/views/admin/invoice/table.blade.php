<div>
    <div class="table-responsive">
        <table class="table align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th scope="col">Transection ID.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Type</th>
                    <th scope="col">Date Time</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($data_list as $key=> $value)
                <tr>
                    <td>
                        {{$value->transaction_id}}<br>
                        
                        @if($value->is_paid==1)
                            <span class="badge bg-success" style="font-size: 15px;margin-top: 5px;">ID Active</span>
                        @endif
                        @if($value->is_paid==0)
                            <span class="badge bg-danger" style="font-size: 15px;margin-top: 5px;">ID Inactive</span>
                        @endif

                    </td>
                    <td>
                        {{$value->user_name}}<br>
                        <b>{{sort_name.$value->affiliate_id}}</b>
                    </td>
                    <td>{{$value->user_email}}</td>
                    <td>{{$value->user_phone}}</td>
                    <td>
                        @if($value->order_type==1)
                            <div class="badge badge bg-info" style="margin: 0 auto;font-size: 12px;">Perchase</div>
                        @endif
                        @if($value->order_type==2)
                            <div class="badge badge bg-vertical-gradient-4" style="margin: 0 auto;font-size: 12px;">Upgrade</div>
                        @endif
                    </td>
                    <td>
                        <b>Create Date Time: </b>{{date("Y M, d",strtotime($value->add_date_time))}} - {{date("h:i A",strtotime($value->add_date_time))}}<br>
                        <b>Payment Date Time: </b>
                            @if(!empty($value->payment_date_time))
                                {{date("Y M, d",strtotime($value->payment_date_time))}} - {{date("h:i A",strtotime($value->payment_date_time))}}
                            @endif
                    </td>
                    <td>{!!Helpers::status_get($value->status,'invoice')!!}</td>
                    <td>
                        <div class="d-flex gap-2">
                            <div class="edit">
                                <a href="{{$data['view_btn_url'].'/'.Crypt::encryptString($value->id)}}" class="btn btn-sm btn-info edit-item-btn">Invoice</a>
                            </div>
                        </div>
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
