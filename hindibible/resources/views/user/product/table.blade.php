@foreach($data_list as $key=> $value)
    <div class="col-md-3 mt-4">
        <div class="products-list-card card">
            <div class="products-image"><img class="img-thumbnail" src="{{Helpers::image_check(@$value->display_image)}}"></div>
            <div class="products-list-detail">
                <h1>{{$value->name}}</h1>
                <h1>{{Helpers::price_formate($value->sale_price)}}</h1>
                <div class="products-button">
                    <!-- <a href="#" class="btn btn-success add-to-cart" data-id="{{$value->id}}">Add to cart</a> -->

                    <div class="add-cart-btn-group">
                        <button type="button" class="plus-btn" data-id="{{$value->id}}" data-type="1">-</button>
                        <input type="number" value="{{$value->qty}}">
                        <button type="button" class="devide-btn" data-id="{{$value->id}}" data-type="2">+</button>
                    </div>

                </div>                
            </div>
        </div>
    </div>





@endforeach
            

<div class="col-lg-12 pagination" >
    {{$data_list->links()}}
</div>
