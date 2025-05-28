@include('user.headers.header')
@php($cartDetail = \App\Models\MemberModel::cartDetail(@$row->user_id))

  
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
              <h5 class="text-white m-b-0">Ticket Detail 
                @if($row->status==0)
                <span class="badge btn btn-default">Pending</span>
                @elseif($row->status==2)
                <span class="badge btn btn-info">Proccess</span>
                @elseif($row->status==1)
                <span class="badge btn btn-success">Complete</span>
                @elseif($row->status==3)
                <span class="badge btn btn-danger">Reject</span>
                @endif
               </h5>
            </div>
            <div class="card-body row ">
              <div class="info-box">
                  <form class="form row form_data" action="{{$data['submit_url']}}" method="post" enctype="multipart/form-data" id="form_data_submit" novalidate>
                    @csrf                

                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Subject</label>
                        <div class="input-group">
                          <input class="form-control" placeholder="Name" type="text" name="subject" value="{{$row->subject}}" required readonly>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Detail</label>
                        
                          <textarea name="message" class="form-control" rows="10" readonly>{{$row->message}}</textarea>
                          <script>CKEDITOR.replace( 'message' );</script>
                        
                      </div>
                    </div>

                    <!-- <div class="col-md-12">
                      <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                    </div> -->



                  </form>
              </div>
            </div>
          </div>
        </div>






      </div>
      
    </div>
    <!-- /.content --> 
  </div>
  <!-- /.content-wrapper -->










@include('user.headers.footer')