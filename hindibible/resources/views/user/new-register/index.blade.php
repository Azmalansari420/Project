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



              
              <form class="form row form_data" action="{{$data['submit_url']}}" method="post" enctype="multipart/form-data" id="form_data_submit" novalidate>
                @csrf


                <div class="col-md-4">
                  <div class="form-group">
                    <label>Sponser ID.</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-star"></i></div>
                      <input class="form-control" placeholder="Sponser ID." type="number" name="sponser_id" id="sponser_id" required>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>Placement</label>
                    <div class="input-group">
                      <div class="input-group-addon" style="display: flow-root;"><i class="fa fa-arrow-left"></i><i class="fa fa-arrow-right"></i></div>
                      <select class="form-select mb-3" aria-label="Default select example" name="placement" id="placement" required>
                        <option value="" >Select Placement</option>
                        <option value="1">Left</option>
                        <option value="2">Right</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>Sponser Name</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-user"></i></div>
                      <input class="form-control" placeholder="Sponser Name" type="text" id="sponser_name" disabled required>
                    </div>
                      <div class="alert alert-info" style="display:none;" id="parent_id"></div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Name</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-user"></i></div>
                      <input class="form-control" placeholder="Name" type="text" name="name" required>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Email</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                      <input class="form-control" placeholder="Email" type="email" name="email" >
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>Select Country</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-globe"></i></div>
                      <select class="form-select mb-3" aria-label="Default select example" name="country" required>
                          <option value=""  >Select</option>
                          @php($countries = DB::table('countries')->get())
                          @foreach($countries as $key => $value)
                              <option value="{{$value->id}}" @if(99==$value->id)selected @endif >{{$value->name}} (+{{$value->phonecode}})</option>
                          @endforeach
                      </select>
                    </div>
                  </div>
                </div>

                <div class="col-md-8">
                  <div class="form-group">
                    <label>Phone</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                      <input class="form-control" placeholder="Phone" type="number" name="phone" >
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>State</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-circle-o"></i></div>
                      <select class="form-select mb-3" aria-label="Default select example" name="state" >
                          <option value=""  >Select</option>
                          @php($states = DB::table('states')->get())
                          @foreach($states as $key => $value)
                              <option value="{{$value->id}}" >{{$value->name}}</option>
                          @endforeach
                      </select>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>City</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-circle-o"></i></div>
                      <input class="form-control" placeholder="City" type="text" name="city" >
                    </div>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label>Address</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-map-marker"></i></div>
                      <input class="form-control" placeholder="Address" type="text" name="address" >
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Password</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                      <input class="form-control" placeholder="Enter Password" type="password" name="password" required>
                      <i class="fa fa-eye pwd-eye pwd-eye-open password_show_hide"></i>
                      <i class="fa fa-eye-slash pwd-eye pwd-eye-close password_show_hide" style="display: none;"></i>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Confirm Password</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                      <input class="form-control" placeholder="Confirm Password" type="password"  name="confirm_password" required>
                      <i class="fa fa-eye pwd-eye pwd-eye-open password_show_hide"></i>
                      <i class="fa fa-eye-slash pwd-eye pwd-eye-close password_show_hide" style="display: none;"></i>
                    </div>
                  </div>
                </div>
                
                <div class="col-md-6">
                  <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                </div>

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
        var package_id = $("#package_id").val();
        var placement = $("#placement").val();
        var form = new FormData();
        form.append("sponser_id", sponser_id);
        form.append("package_id", package_id);
        form.append("placement", placement);
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

          $("#package_id").html(response.package);
          $("#package_id").select2();

          if(response.status==200)
          {
            
            print_input_search_success_error(search_input,response.message,1);
            $("#sponser_name").val(response.data.name);
            $("#parent_id").html('<strong>Parent Name: </strong>'+response.parent_id+' '+response.parent_name);
            if(response.parent_id!=0) $("#parent_id").show();
          }
          else
          {
            $("#parent_id").hide();
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
    $(document).on("change", "#placement",(function(e) {
        search_input = $(this);
        check_sponser();
    }));
    </script>



@include('user.headers.footer')