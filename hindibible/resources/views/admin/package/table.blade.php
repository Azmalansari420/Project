<div>
    <div class="table-responsive">
        <table class="table align-middle mb-0">
            <thead class="table-light">
                <tr>                    
                    <th scope="col">Position</th>
                    <th scope="col">Package Name</th>
                    <!-- <th scope="col">Total Sale</th> -->
                    <th scope="col">Real Price</th>
                    <th scope="col">Sale Price</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($data_list as $key=> $value)
                <tr>                    
                    <td>{{$value->position}}</td>
                    <td>
                        <div class="d-flex gap-2 align-items-center">
                            <div class="flex-shrink-0">
                                <img class="avatar-xs rounded-circle" src="{{Helpers::image_check($value->offer_image)}}" alt="banner image"/>
                            </div>
                            <div class="flex-grow-1">
                                {{$value->name}}
                            </div>
                        </div>
                    </td>
                    <!-- <td><span class="badge bg-secondary">{{$value->total_sale}}</span></td> -->
                    <td>{{Helpers::price_formate($value->real_price)}} </td>
                    <td>{{Helpers::price_formate($value->sale_price)}} </td>
                    <td>{!!Helpers::active_inactive($value->status)!!}</td>
                    <td>
                        <div class="d-flex gap-2">

                            <div class="edit">
                                <a href="{{$data['edit_btn_url'].'/'.Crypt::encryptString($value->id)}}" class="btn btn-sm btn-success edit-item-btn">Edit</a>
                            </div>
                            <!-- <div class="remove">
                                <a href="{{$data['delete_btn_url'].'/'.Crypt::encryptString($value->id)}}" class="btn btn-sm btn-danger remove-item-btn">Delete</a>
                            </div> -->
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
