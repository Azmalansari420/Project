@include('user.headers.header')


  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1 class="text-black">{{$data['page_title']}}</h1>
      <ol class="breadcrumb">
        <li><a href="{{url('user/dashboard')}}">Home</a></li>
        @foreach($data['pagenation'] as $key => $value)
          <li class="sub-bread"><i class="fa fa-angle-right"></i> {{$value}}</li>
        @endforeach
      </ol>
    </div>
    
    <!-- Main content -->
    <div class="content">
      <div class="row">
        



        <div class="col-lg-12 mt-3">
          <div class="card card-outline">
            <div class="card-header bg-blue">
              <h5 class="text-white m-b-0">{{$data['title']}} </h5>
            </div>
            <div class="card-body row" id="data-list">
                         
            </div>
          </div>
        </div>

        <div class="col-lg-12 mt-3">
          <div class="card card-outline">
            <div class="card-body ">
                <a href="checkout" class="btn btn-primary">CheckOut</a>
            </div>
          </div>
        </div>






      </div>
      
    </div>
    <!-- /.content --> 
  </div>
  <!-- /.content-wrapper -->






<script>
   var data = '';
   var main_url = "{{$data['back_btn']}}/load_data";

   function get_url_data()
   {
       var status = $("#statuschange").val();
       var order_by = $("#order_by").val();
       var limit = $("#limit").val();
       var filter_search_value = $(".search-input").val();
       data = `status=${status}&order_by=${order_by}&limit=${limit}&filter_search_value=${filter_search_value}`;
   }
   url = main_url+'?'+data;
   load_table();
   $(document).on("change", "#statuschange, .order_by, .limit",(function(e) {
      get_url_data();
      url =main_url+"?"+data;
      load_table();
   }));
   $(document).on("click", ".search",(function(e) {
      get_url_data();
      url =main_url+"?"+data;
      load_table();
   }));
   $(document).on("click", ".pagination a",(function(e) {      
      event.preventDefault();
      get_url_data()
      url = $(this).attr("href")+'&'+data;
      load_table();
   }));



   function load_table()
   {
        data_loader("#data-list",1);
        var form = new FormData();
        var settings = {
          "url": url,
          "method": "GET",
          "timeout": 0,
          "processData": false,
          "headers": {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
           },
          "mimeType": "multipart/form-data",
          "contentType": false,
          "dataType": "json",
          "data": form
        };
        $.ajax(settings).always(function (response) {
            data_loader("#data-list",0);
            response = admin_response_data_check(response);
            $("#data-list").html(response.data.list);

        });
   }

   var type = 0;
   var p_id = 0;
   var input = 0;
   var qty = 0;
   $(document).on("click", ".plus-btn, .devide-btn",(function(e) {
      type = $(this).data("type");
      p_id = $(this).data("id");
      input = $(this).parent().find('input');

      if(type=='2') qty = parseInt($(input).val())+1;
      else qty = parseInt($(input).val())-1;
      if(qty<1) qty = 0;


      $(input).val(qty);

      event.preventDefault();
      loader("show");
        var form = new FormData();
        form.append("id",p_id);
        form.append("qty",qty);
        var settings = {
          "url": "{{route('user.cart.add')}}",
          "method": "POST",
          "timeout": 0,
          "processData": false,
          "headers": {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
           },
          "mimeType": "multipart/form-data",
          "contentType": false,
          "dataType": "json",
          "data": form
        };
        $.ajax(settings).always(function (response) {
            loader("hide");
            response = admin_response_data_check(response);
        });
   }));

   $(document).on("click", ".add-to-cart",(function(e) {      
      
      
   }));

</script>






@include('user.headers.footer')