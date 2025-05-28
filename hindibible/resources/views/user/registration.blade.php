<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>{{env('APP_NAME')}}</title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />

 <meta name="_token" content="{{csrf_token()}}">

<!-- v4.0.0-alpha.6 -->
<link rel="stylesheet" href="{{url('public/user/')}}/dist/bootstrap/css/bootstrap.min.css">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- Theme style -->
<link rel="stylesheet" href="{{url('public/user/')}}/dist/css/style.css">
<link rel="stylesheet" href="{{url('public/user/')}}/dist/css/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="{{url('public/user/')}}/dist/css/et-line-font/et-line-font.css">
<link rel="stylesheet" href="{{url('public/user/')}}/dist/css/themify-icons/themify-icons.css">





<link rel="stylesheet" href="{{url('public')}}/toast/saber-toast.css">
<link rel="stylesheet" href="{{url('public')}}/toast/style.css">
<link rel="stylesheet" href="{{url('public')}}/front_css.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="{{url('public')}}/front_script.js"></script>
<link rel="stylesheet" href="{{url('public/')}}/assetsadmin/select2/css/select2.min.css">


<style>
  .select2-container--default .select2-selection--multiple .select2-selection__choice {
    background-color: #71519d;
    border: 1px solid #71519d;
  }
  .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
    color: white;
  }
  .select2-container .select2-selection--single
  {
    height: calc(2.25rem + 2px);
  }
  .select2-container--default .select2-selection--single {
      padding: 5px 5px;
      padding-top: 6px;
  }
  .select2-container--default .select2-selection--single .select2-selection__arrow b {
    top: 70%;
  }
  .select2-container--default .select2-selection--single {
    border: 1px solid #d2d6de;
    border-top-left-radius: 0 !important;
    border-bottom-left-radius: 0 !important;
  }
  span.select2.select2-container.select2-container--default {
      width: 100% !important;
  }

</style>

</head>
<body class="hold-transition login-page">
<div class="login-box col-md-8" style="width: auto;">
  <div class="login-box-body">
    
    

    <form class="account__form row form_data" action="{{route('user.user-register-otp-send-action')}}" method="post" enctype="multipart/form-data" id="form_data_submit" novalidate>
    @csrf

      <div class="auth-login">
        <img src="{{url('public/user/')}}/dist/img/logo.png" alt="">
      </div>

      <h3 class="login-box-msg mb-2">Register</h3>
      <div class="col-12"></div>




      <div class="col-md-4">
        <div class="form-group">
          <label>Sponser ID.</label>
          <div class="input-group">
            <div class="input-group-addon"><i class="fa fa-star"></i></div>
            <input class="form-control" placeholder="Sponser ID." type="number" name="sponser_id" id="sponser_id" required value="{{@$data['sponser_id']}}">
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="form-group">
          <label>Placement</label>
          <div class="input-group">
            <div class="input-group-addon" style="display: flow-root;"><i class="fa fa-arrow-left"></i><i class="fa fa-arrow-right"></i></div>
            <select class="form-select mb-3" aria-label="Default select example" name="placement" id="placement" required >
              <option value="" >Select Placement</option>
              <option value="1" @if(@$data['placement']=='left') selected @endif>Left</option>
              <option value="2" @if(@$data['placement']=='right') selected @endif>Right</option>
            </select>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="form-group">
          <label>Sponser Name</label>
          <div class="input-group">
            <div class="input-group-addon"><i class="fa fa-user"></i></div>
            <input class="form-control" placeholder="Sponser Name" type="text" id="sponser_name" readonly required value="{{$data['sponser_name']}}">
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
            <input class="form-control" placeholder="Email" type="email" name="email" required>
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
            <input class="form-control" placeholder="Phone" type="number" name="mobile" required>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label>State</label>
          <div class="input-group">
            <div class="input-group-addon"><i class="fa fa-circle-o"></i></div>
            <select class="form-select mb-3" aria-label="Default select example" name="state" required>
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
            <input class="form-control" placeholder="City" type="text" name="city" required>
          </div>
        </div>
      </div>

      <div class="col-md-12">
        <div class="form-group">
          <label>Address</label>
          <div class="input-group">
            <div class="input-group-addon"><i class="fa fa-map-marker"></i></div>
            <input class="form-control" placeholder="Address" type="text" name="address" required>
          </div>
        </div>
      </div>


      <div class="col-md-6">
        <div class="form-group">
          <label>Password</label>
          <div class="input-group">
            <div class="input-group-addon"><i class="fa fa-lock"></i></div>
            <input class="form-control" placeholder="Password" type="password" name="password" required>
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
            <input class="form-control" placeholder="Confirm Password" type="password" name="cpassword" required>
            <i class="fa fa-eye pwd-eye pwd-eye-open password_show_hide"></i>
            <i class="fa fa-eye-slash pwd-eye pwd-eye-close password_show_hide" style="display: none;"></i>
          </div>
        </div>
      </div>



      <div class="col-md-12">
       
        <!-- /.col -->
        <div class="col-xs-4 m-t-1">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
        </div>
        <!-- /.col --> 
      </div>
    </form>
    
    
    
  </div>
  <!-- /.login-box-body --> 
</div>
<!-- /.login-box --> 

<!-- jQuery 3 --> 


<!-- v4.0.0-alpha.6 --> 
<script src="{{url('public/user/')}}/dist/bootstrap/js/bootstrap.min.js"></script> 

<!-- template --> 
<script src="{{url('public/user/')}}/dist/js/niche.js"></script>


<script src="{{url('public/')}}/toast/saber-toast.js"></script>
<script src="{{url('public/')}}/toast/script.js"></script>
<script src="{{url('public/')}}/assetsadmin/select2/js/select2.full.min.js"></script>


<script>
  $("select").select2();
$('.tags').select2({
  tags: true,
  tokenSeparators: ['||', '\n']
});
</script>




    <script>
        function check_sponser()
    {
        
        $("#SignUp").attr('disabled',true);

        $(search_input).parent().find(".alert").remove();
        input_loader(search_input,1);

        var sponser_id = $("#sponser_id").val();
        var placement = $("#placement").val();
        var form = new FormData();
        form.append("sponser_id", sponser_id);
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

          
          if(response.status==200)
          {
            $("#SignUp").attr('disabled',false);
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

          if(sponser_id=='') $("#SignUp").attr('disabled',false);

          search_input2 = $("#coupon");
          if($("#coupon").val()!='' && $("#coupon").val()) check_coupon();


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




</body>
</html>