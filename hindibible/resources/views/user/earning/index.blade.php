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
        <div class="col-lg-12">
          <div class="card card-outline">
            <!-- <div class="card-header bg-blue">
              <h5 class="text-white m-b-0">Basic Example</h5>
            </div> -->
            <div class="card-body text-center">

              <div class="row mb-3" style="align-items: center;">
                 <div class="wallet">
                   <i class="icon-wallet"></i>
                   <h2 class="wallet-balance">{{Helpers::price_formate($data['paid'])}}</h2>
                   <p>Total Paid Payout</p>
                 </div>               
                 <div class="wallet">
                   <i class="icon-wallet"></i>
                   <h2 class="wallet-balance">{{Helpers::price_formate($data['unpaid'])}}</h2>
                   <p>Total Unpaid Payout</p>
                   <button class="btn btn-primary transfer-amount">Transfer in wallet</button>
                 </div>
              </div>

                <button class="btn btn-primary type-btn" data-type=''>All</button>
                <button class="btn btn-primary type-btn" data-type='1'>Direct Income</button>
                <button class="btn btn-primary type-btn" data-type='2'>Pair Income</button>
                <button class="btn btn-primary type-btn" data-type='3'>Downline Income</button>
                <button class="btn btn-primary type-btn" data-type='4'>Upline Income</button>
                <button class="btn btn-primary type-btn" data-type='5'>Rank Bonus Income</button>

              



             
            </div>
          </div>
        </div>



        <div class="col-lg-12 mt-3">
          <div class="card card-outline">
            <div class="card-header bg-blue">
              <h5 class="text-white m-b-0">{{$data['title']}} History</h5>
            </div>
            <div class="card-body" id="data-list">
                         
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
   var type = 1;
   function get_url_data()
   {       
       var filter_search_value = $(".search-input").val();
       data = `type=${type}`;
   }
   url = main_url+'?'+data;
   load_table();
   $(document).on("click", ".type-btn",(function(e) {
      type = $(this).data('type');
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
   $(document).on("click", ".transfer-amount",(function(e) {      
      event.preventDefault();
      loader("show");
        var form2 = new FormData();
        var settings = {
          "url": "{{route('user.earning.transfer')}}",
          "method": "POST",
          "timeout": 0,
          "processData": false,
          "headers": {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
           },
          "mimeType": "multipart/form-data",
          "contentType": false,
          "dataType": "json",
          "data": form2
        };
        $.ajax(settings).always(function (response) {
            loader("hide");
            response = admin_response_data_check(response);
        });
   }));


</script>






@include('user.headers.footer')