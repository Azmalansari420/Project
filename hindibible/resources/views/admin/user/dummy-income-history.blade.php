<div>
    <div class="table-responsive">
        <table class="table align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th>Amount </th>
                    <th>Income Date Time </th>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
            @foreach($data_list as $key=> $value)            
                <tr>
                    <th>{{Helpers::price_formate($value->final_amount)}}</th>                    
                    <th>{{$value->package_payment_date_time}}</th>                    
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
