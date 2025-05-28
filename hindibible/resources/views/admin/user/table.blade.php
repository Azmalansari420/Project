<div>
    <div class="table-responsive">
        <table class="table align-middle mb-0">
            <thead class="table-light">
                <tr>                    
                    <th>Name</th>
                    <th>Status</th>
                    <th>Email</th>
                    <th>Date Created</th>
                    <th>Date Activate</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($data_list as $key=> $value)
                <tr>
                    <td>
                        <div class="d-flex gap-2 align-items-center">
                            <div class="flex-shrink-0">
                                <img class="avatar-xs rounded-circle"
                                    onerror="this.src='{{asset('storage/app/public/upload/default.jpg')}}'"
                                    src="{{asset('storage/app/public/upload/')}}/{{$value->image}}" alt="banner image"/>
                            </div>
                            <div class="flex-grow-1">
                                {{$value->name}}<br>
                                <b>{{sort_name.$value->affiliate_id}}</b>
                            </div>
                        </div>
                    </td>
                    <td>
                        @if($value->is_paid==1)
                        <span class="badge bg-success">Paid</span>
                        @endif
                        @if($value->is_paid==0)
                        <span class="badge bg-danger">UnPaid</span>
                        @endif

                        <br>

                        @if($value->kyc_step==1)
                        <span class="badge bg-success">KYC Complete</span>
                        @endif

                        @if($value->kyc_step==2)
                        <span class="badge bg-info">KYC Under Review</span>
                        @endif

                        @if($value->kyc_step==3)
                        <span class="badge bg-warning">KYC Rejected</span>
                        @endif

                        @if($value->kyc_step==0)
                        <span class="badge bg-info">KYC Not Update</span>
                        @endif



                    </td>
                    <td>{{$value->email}}</td>
                    <td>{{date("D d F Y h:i A", strtotime($value->add_date_time))}}</td>
                    <td>
                        @if(!empty($value->activate_date_time))
                        {{date("D d F Y h:i A", strtotime($value->activate_date_time))}}
                        @endif
                    </td>
                    <td>                        
                            <a href="{{route('user.dashboard').'/'.Crypt::encryptString($value->id)}}" class="btn btn-sm btn-primary mb-1">Dashboard</a>
                            <a href="{{route('user.team').'/'.Crypt::encryptString($value->id)}}" class="btn btn-sm btn-success mb-1">All Team</a>
                            <a href="{{route('user.reffral').'/'.Crypt::encryptString($value->id)}}" class="btn btn-sm btn-danger mb-1">Reffrals</a>
                            <a href="{{route('user.team-reffral').'/'.Crypt::encryptString($value->id)}}" class="btn btn-sm btn-danger mb-1">Team Reffrals</a>
                            <a href="{{route('user.account-action').'/'.Crypt::encryptString($value->id)}}" class="btn btn-sm btn-info mb-1 w-100">Account View</a>
                            <!-- <a href="{{$data['edit_btn_url'].'/'.Crypt::encryptString($value->id)}}" class="btn btn-sm btn-success edit-item-btn mb-1">Edit Basic Detail</a> -->
                            <!-- <a href="{{route('bank.edit').'/'.Crypt::encryptString($value->id)}}" class="btn btn-sm btn-success mb-1">Edit Bank Detail</a><br> -->
                            <!-- <a href="{{route('user.change-password').'/'.Crypt::encryptString($value->id)}}" class="btn btn-sm btn-warning mb-1">Change Password</a> -->
                            <!-- <a href="#" class="btn btn-sm btn-info mb-1">Upgrade</a> -->
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
