<div>
    <div class="table-responsive">
        <table class="table align-middle mb-0">
            <thead class="table-light">
                <tr>                    
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email </th>
                    <th>Status </th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($data_list as $key=> $value)
                <tr>
                    <td>{{$value->name}}</td>
                    <td>{{$value->phone}}</td>                    
                    <td>{{$value->email}}</td>                    
                    <td>
                       


                        @if($value->status==0)
                        <span class="badge bg-primary">New</span>
                        @elseif($value->status==1)
                        <span class="badge bg-info">Proccess</span>
                        @elseif($value->status==2)
                        <span class="badge bg-dark">Shipped</span>
                        @elseif($value->status==3)
                        <span class="badge bg-success">Delivered</span>
                        @elseif($value->status==4)
                        <span class="badge bg-danger">Cancel</span>
                        @endif



                    </td>                    
                    <td><a href="{{$data['back_btn'].'/view/'.Crypt::encryptString($value->id)}}" class="btn btn-sm btn-success mb-1">View</a><br></td>                    
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
