<div>
    <div class="table-responsive">
        <table class="table align-middle mb-0">
            <thead class="table-light">
                <tr>                    
                    <th>Name</th>
                    <!-- <th>URL</th> -->
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($data_list as $key=> $value)
                <tr>
                    <td>
                        <div class="d-flex gap-2 align-items-center">
                            <div class="flex-shrink-0">
                                <img class="" style="width: 150px;height: 150px;" 
                                    onerror="this.src='{{asset('storage/app/public/upload/default.jpg')}}'"
                                    src="{{asset('storage/app/public/upload/')}}/{{$value->image}}" alt="banner image"/>
                            </div>
                        </div>
                    </td>
                    
                    <!-- <td>{{$value->url}}</td> -->
                    <td>                        
                        <div class="d-flex gap-2">
                            <div class="remove">
                                <a href="{{$data['delete_btn_url'].'/'.Crypt::encryptString($value->id)}}" class="btn btn-sm btn-danger remove-item-btn">Delete</a>
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
