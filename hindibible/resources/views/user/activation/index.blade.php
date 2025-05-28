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
            <div class="card-body">

                 <div class="wallet mb-4">
                   <i class="icon-wallet"></i>
                   <h2 class="wallet-balance">{{Helpers::price_formate(@\App\Models\MemberModel::getTypeAllIncome(Session::get('user')['id'])->wallet)}}</h2>
                 </div>

              
              <form class="form row form_data" action="{{$data['submit_url']}}" method="post" enctype="multipart/form-data" id="form_data_submit" novalidate>
                @csrf


                <div class="col-md-6">
                  <div class="form-group">
                    <label>Member ID.</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-star"></i></div>
                      <input class="form-control" placeholder="Member ID." type="number" name="member_id" id="sponser_id">
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Member Name</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-user"></i></div>
                      <input class="form-control" placeholder="Member Name" type="text" disabled id="sponser_name">
                    </div>
                  </div>
                </div>

                

                <div class="col-md-12">
                  <div class="form-group">
                    <label>Select Package</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-globe"></i></div>
                      <select class="form-select mb-3" aria-label="Default select example" name="package" required>
                          <option value=""  >Select</option>
                          @php($packages = DB::table('package')->get())
                          @foreach($packages as $key => $value)
                              <option value="{{$value->id}}" >{{$value->name}} ({{Helpers::price_formate($value->sale_price)}})</option>
                          @endforeach
                      </select>
                    </div>
                  </div>
                </div>

                
                
                
                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                
              </form>


             
            </div>
          </div>
        </div>
      </div>
      
    </div>
    <!-- /.content --> 
  </div>
  <!-- /.content-wrapper -->






  <script>
    function check_sponser()
    {
        $(search_input).parent().find(".alert").remove();
        input_loader(search_input,1);

        var sponser_id = $("#sponser_id").val();
        var form = new FormData();
        form.append("sponser_id", sponser_id);
        var settings = {
          "url": "{{url('check-sponser')}}",
          "method": "POST",
          "processData": false,
          "mimeType": "multipart/form-data",
          "headers": {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
           },
          "contentType": false,
          "dataType":"json",
          "data": form
        };
        $.ajax(settings).always(function (response) {
            input_loader(search_input,0);
          
          response = admin_response_data_check(response);
          console.log(response);

          if(response.status==200)
          {            
            print_input_search_success_error(search_input,response.message,1);
            $("#sponser_name").val(response.data.name);
          }
          else
          {
            if(sponser_id!='')
            {
                print_input_search_success_error(search_input,response.message,2);
            }
            $("#sponser_name").val('');
          }   


        });
    }
    $(document).on("keyup", "#sponser_id",(function(e) {
        search_input = $(this);
        check_sponser();
    }));
  </script>







@include('user.headers.footer')