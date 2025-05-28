<div class="person">
    @php( $member_detail = $data['member_detail'])
    <!-- <img class="avatar-xs rounded-circle" src="{{asset('storage/app/public/upload/')}}/{{$member_detail->image}}" alt="banner image"/> -->

    @if($member_detail->is_paid==1)
        <img class="avatar-xs rounded-circle" src="{{asset('public/tree/images/rank/green.png')}}" alt="banner image"/>
    @elseif($member_detail->is_paid==0)
        <img class="avatar-xs rounded-circle" src="{{asset('public/tree/images/rank/red.png')}}" alt="banner image"/>
    @endif
    <p class="name">
        <a style="color: #000000;" href="{{route('user.team').'/'.Crypt::encryptString($member_detail->id)}}">{{$member_detail->name}}/<b>{{sort_name}}{{$member_detail->user_id}}</b></a><br>
        Sponser ID: <b>{{$member_detail->sponser_id}}</b><br>
        Position: <b>@if($member_detail->position==1) Left @else Right @endif</b>
    </p>
    <div class="detail-popup">
        <p><b>Mobile : </b>{{$member_detail->phone}}</p>
        <p><b>Rank : </b>{{@\App\Models\MemberModel::active_package($member_detail->rank)}}</p>
        <p><b>Total Left : </b>{{$member_detail->total_left_unpaid+$member_detail->total_left_paid}}</p>
        <p><b>Total Right : </b>{{$member_detail->total_right_unpaid+$member_detail->total_right_paid}}</p>
        <p><b>Package : </b>{{@\App\Models\MemberModel::active_package($member_detail->id)->package_name}}</p>
        <p><b>KYC : </b>
            @if($member_detail->kyc_step==1)
            <span class="badge bg-success">KYC Complete</span>
            @endif

            @if($member_detail->kyc_step==2)
            <span class="badge bg-info">KYC Under Review</span>
            @endif

            @if($member_detail->kyc_step==3)
            <span class="badge bg-warning">KYC Rejected</span>
            @endif

            @if($member_detail->kyc_step==0)
            <span class="badge bg-info">KYC Not Update</span>
            @endif
        </p>
    </div>    
</div>