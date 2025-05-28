@include('user.headers.header')
@php($withdrawdeduct = json_decode(DB::table('setting')->where('name','main')->first()->data)->withdrawal_amount)


  
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
            <div class="card-body">


              <div class="wallet">
               <i class="icon-wallet"></i>
               <h2 class="wallet-balance">{{Helpers::price_formate(@\App\Models\MemberModel::getTypeAllIncome(Session::get('user')['id'])->commision_wallet)}}</h2>
             </div>

              
              <form class="form row form_data" action="{{$data['submit_url']}}" method="post" enctype="multipart/form-data" id="form_data_submit" novalidate>
                @csrf

                <div class="col-md-4">
                  <div class="form-group">
                    <label>UPI Address</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="icon-wallet"></i></div>
                      <input class="form-control" placeholder="UPI Address" type="text" name="upi" required>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>Enter Amount</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-inr"></i></div>
                      <input class="form-control" placeholder="Enter Amount" type="number" name="amount" required id="amount">
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>Withdrawal Amount</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-inr"></i></div>
                      <input class="form-control" placeholder="Withdrawal Amount" type="number" name="withdrawal_amount" required readonly id="withdrawal_amount">
                    </div>
                  </div>
                </div>

                
                <div class="col-md-4">
                  <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                </div>
                
              </form>


             
            </div>
          </div>
        </div>


        <div class="col-lg-12 mt-3">
          <div class="card card-outline">
            <div class="card-header bg-blue">
              <h5 class="text-white m-b-0">{{$data['title']}} History</h5>
            </div>
            <div class="card-body">              
              <div id="data-list"></div>             
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


   $(document).on("keyup", "#amount",(function(e) {      
      var amount = $("#amount").val();
      $("#withdrawal_amount").val(amount-(amount/100*<?=$withdrawdeduct ?>));
   }));


</script>


@include('user.headers.footer')