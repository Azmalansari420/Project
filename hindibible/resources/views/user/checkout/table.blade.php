@foreach($data_list as $key=> $value)
    <div class="col-md-3 mt-4">
        <div class="products-list-card card">
            <div class="products-image"><img class="img-thumbnail" src="{{Helpers::image_check(@$value->display_image)}}"></div>
            <div class="products-list-detail">
                <h1>{{$value->name}}</h1>
                <div class="products-button">
                    <a href="cart" class="btn btn-success">Add to cart</a>
                </div>                
            </div>
        </div>
    </div>
@endforeach
            

<div class="col-lg-12 pagination" >
    {{$data_list->links()}}
</div>
