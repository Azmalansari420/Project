<div>
    <div class="table-responsive">
        <table class="table align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Prefix</th>
                    <th scope="col">Keys</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($data_list as $key=> $value)
            @php($keys = json_decode($value->data))
                <tr>
                    <td>
                        <div class="d-flex gap-2 align-items-center">
                            <div class="flex-grow-1">
                                {{$value->name}}
                            </div>
                        </div>
                    </td>
                    <td>
                        {{$keys->prefix}}
                    </td>
                    <td>
                        <b>Key:- </b> {{$keys->key}}<br>
                        <b>Salt:- </b> {{$keys->salt}}
                    </td>
                    <td>
                        {!!Helpers::status_get($value->status,'')!!}
                        <label for="planclasses" class="form-label d-block" style="text-align: center;">
                            <div class="form-check form-switch form-check-inline" style="margin: 0 auto;" dir="planclasses">
                               <input type="checkbox" class="form-check-input status-change-item-btn" data-url="{{$data['status_btn_url'].'/'.Crypt::encryptString($value->id)}}" value="1"  @if(!empty($value->status)) checked @endif >
                            </div>
                        </label>
                    </td>
                    <td>
                        <div class="d-flex gap-2">

                            <div class="edit">
                                <a href="{{$data['edit_btn_url'].'/'.Crypt::encryptString($value->id)}}" class="btn btn-sm btn-success edit-item-btn">Edit</a>
                            </div>
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
