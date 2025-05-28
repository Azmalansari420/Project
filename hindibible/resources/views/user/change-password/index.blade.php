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
                      <input class="form-control" placeholder="Confirm Password" type="password" name="cpassword" required>
                      <i class="fa fa-eye pwd-eye pwd-eye-open password_show_hide"></i>
                      <i class="fa fa-eye-slash pwd-eye pwd-eye-close password_show_hide" style="display: none;"></i>
                    </div>
                  </div>
                </div>
                
                <div class="col-md-12">
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




@include('user.headers.footer')