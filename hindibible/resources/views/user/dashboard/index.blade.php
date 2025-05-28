@include('user.headers.header')
@php($user = Helpers::get_user_user())
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1>Dashboard</h1>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><i class="fa fa-angle-right"></i> Dashboard</li>
      </ol>
    </div>
    
    <!-- Main content -->
    <div class="content"> 
      <!-- Small boxes (Stat box) -->

      @if($user->is_paid==0)
        <div class="alert alert-warning"><strong>You have no active plan!</strong> Please contact your sponser or {{env('APP_NAME')}}.</div>

      @elseif($user->kyc_step==0)
        <div class="alert alert-warning"><strong>Your Kyc is pending!</strong> Please update your Kyc.<a href="{{route('user.kyc.index')}}">Click Here</a></div>
      @endif


      <div class="row">
        <div class="col-lg-7 col-xlg-9" style="margin: 0 auto;">
          <div class="info-box">


            <div class="box box-widget widget-user"> 
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-black" style="background: url('{{url('public/user/')}}/dist/img/user-bg.jpg');">
                <h3 class="widget-user-username">{{$user->name}}</h3>
                <h5 class="widget-user-desc "><b class="text-white">Rank: </b>@if($user->rank<1) Not upgrade @else {{\App\Models\MemberModel::rank($user->rank)}} @endif</h5>
              </div>
              <div class="widget-user-image"> <img class="img-circle" src="{{Helpers::image_check($user->image,'user.png')}}" alt="User Avatar"> 
              </div>
              <div class="box-footer">
                <strong>ID: {{$user->user_id}}</strong>
                
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <span class="description-text">Total Income</span>
                      <h5 class="description-header">{{Helpers::price_formate(@\App\Models\MemberModel::all_time_income($user->id))}}</h5>
                    </div>
                    <!-- /.description-block --> 
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <span class="description-text">Today Income</span>
                      <h5 class="description-header">{{Helpers::price_formate(@\App\Models\MemberModel::today_income($user->id))}}</h5>
                    </div>
                    <!-- /.description-block --> 
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <span class="description-text">Package</span>
                      <h5 class="description-header">{{@\App\Models\MemberModel::active_package($user->id)->package_name}}</h5>
                    </div>
                    <!-- /.description-block --> 
                  </div>
                  <!-- /.col --> 
                </div>
                <!-- /.row --> 
              </div>
            </div>


            
            



          
            <p class="clearfix">
              <span class="float-left">My Team</span>
              <span class="float-right"><i class="fa fa-rupee-sign"></i>{{@\App\Models\MemberModel::totalTeam($user->id)}} Members</span>
            </p>
            <p class="clearfix">
              <span class="float-left">My Direct Paid</span>
              <span class="float-right"><i class="fa fa-rupee-sign"></i>{{@\App\Models\MemberModel::totalDirect($user->id,1)}} Members</span>
            </p>
            <p class="clearfix">
              <span class="float-left">My Direct UnPaid</span>
              <span class="float-right"><i class="fa fa-rupee-sign"></i>{{@\App\Models\MemberModel::totalDirect($user->id,2)}} Members</span>
            </p>
            <p class="clearfix">
              <span class="float-left">My Matching</span>
              <span class="float-right"><i class="fa fa-rupee-sign"></i>{{$user->total_pairs}} Pairs</span>
            </p>
            <p class="clearfix">
              <span class="float-left">Total BV</span>
              <span class="float-right"><i class="fa fa-rupee-sign"></i>{{$user->total_bv}}</span>
            </p>
            <p class="clearfix">
              <span class="float-left">Left Paid Members</span>
              <span class="float-right"><i class="fa fa-rupee-sign"></i>{{$user->total_left_paid}}</span>
            </p>
            <p class="clearfix">
              <span class="float-left">Right Paid Members</span>
              <span class="float-right"><i class="fa fa-rupee-sign"></i>{{$user->total_right_paid}}</span>
            </p>
            <p class="clearfix">
              <span class="float-left">Left Unpaid Members</span>
              <span class="float-right"><i class="fa fa-rupee-sign"></i>{{$user->total_left_unpaid}}</span>
            </p>
            <p class="clearfix">
              <span class="float-left">Right Unpaid Members</span>
              <span class="float-right"><i class="fa fa-rupee-sign"></i>{{$user->total_right_unpaid}}</span>
            </p>
            <p class="clearfix">
              <span class="float-left">Activation Date</span>
              <span class="float-right"><i class="fa fa-rupee-sign"></i>
                @if(!empty($user->activate_date_time))
                  {{date("d D M, Y", strtotime($user->activate_date_time))}}
                @endif

                @if($user->is_paid!=1)
                  <span class="badge badge-danger">ID Not Active</span>
                @endif

              </span>
            </p>
            

            
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><h4>All Income</h4></div>
            <div class="card-body row">
              
              <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="info-box bg-darkblue"> 
                  <div class="info-box-content">
                    <h6 class="info-box-text text-white">Direct Income</h6>
                    <h1 class="text-white">{{Helpers::price_formate(@\App\Models\MemberModel::getTypeAllIncome($user->id)->income1)}}</h1> 
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="info-box bg-darkblue"> 
                  <div class="info-box-content">
                    <h6 class="info-box-text text-white">Pair Income</h6>
                    <h1 class="text-white">{{Helpers::price_formate(@\App\Models\MemberModel::getTypeAllIncome($user->id)->income2)}}</h1> 
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="info-box bg-darkblue"> 
                  <div class="info-box-content">
                    <h6 class="info-box-text text-white">Downline Income</h6>
                    <h1 class="text-white">{{Helpers::price_formate(@\App\Models\MemberModel::getTypeAllIncome($user->id)->income3)}}</h1> 
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="info-box bg-darkblue"> 
                  <div class="info-box-content">
                    <h6 class="info-box-text text-white">Upline Income</h6>
                    <h1 class="text-white">{{Helpers::price_formate(@\App\Models\MemberModel::getTypeAllIncome($user->id)->income4)}}</h1> 
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="info-box bg-darkblue"> 
                  <div class="info-box-content">
                    <h6 class="info-box-text text-white">Rank Bonus Income</h6>
                    <h1 class="text-white">{{Helpers::price_formate(@\App\Models\MemberModel::getTypeAllIncome($user->id)->income5)}}</h1> 
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="col-lg-12 mt-3">
          <div class="card">
            <div class="card-header"><h4>Joining Links</h4></div>
            <div class="card-body row">
              
              <div class="col-sm-12">
                <div class="info-box"> 
                  <p>{{url('/registration?sponser_id=6&side=left')}}</p>
                  <button class="btn btn-success" onclick="copyToClipboard('{{url('/registration?sponser_id=6&side=left')}}')" >Copy Left Link</button>
                </div>
              </div>

              <div class="col-sm-12">
                <div class="info-box"> 
                  <p>{{url('/registration?sponser_id=6&side=right')}}</p>
                  <button class="btn btn-success" onclick="copyToClipboard('{{url('/registration?sponser_id=6&side=right')}}')">Copy Right Link</button>
                </div>
              </div>
              

            </div>
          </div>
        </div>

        <div class="col-lg-12 mt-3">
          <div class="card">
            <div class="card-header"><h4>Rank List</h4></div>
            <div class="card-body row">
              
              <table class="table table-respinsive">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Rank</th>
                    <th>Target</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Sr. Executive</td>
                    <td>2 ID : 1 ID</td>
                    <td>@if($user->rank>=1) <span class="text-bold text-green">Completed</span> @else <i class="fa fa-spinner fa-spin"></i> @endif 500/-</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Star Executive</td>
                    <td>2 Sr. Ex. : 1 Sr. Ex.</td>
                    <td>@if($user->rank>=2) <span class="text-bold text-green">Completed</span> @else <i class="fa fa-spinner fa-spin"></i> @endif 1500/-</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Super Star Executive</td>
                    <td>2 Star Ex. : 1 Star Ex.</td>
                    <td>@if($user->rank>=3) <span class="text-bold text-green">Completed</span> @else <i class="fa fa-spinner fa-spin"></i> @endif 2500/-</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Silver Executive</td>
                    <td>2 Super Satr Ex. : 1 Super Satr Ex.</td>
                    <td>@if($user->rank>=4) <span class="text-bold text-green">Completed</span> @else <i class="fa fa-spinner fa-spin"></i> @endif 10,000/-</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Gold Executive</td>
                    <td>3 Silver Ex. : 2 Silver Ex.</td>
                    <td>@if($user->rank>=5) <span class="text-bold text-green">Completed</span> @else <i class="fa fa-spinner fa-spin"></i> @endif 50,000/-</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Super Gold Executive</td>
                    <td>3 Gold Ex. : 2 Gold Ex.</td>
                    <td>@if($user->rank>=6) <span class="text-bold text-green">Completed</span> @else <i class="fa fa-spinner fa-spin"></i> @endif 2,50,000/-</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>Daimond Executive</td>
                    <td>3 Super Gold Ex. : 2 Super Gold Ex.</td>
                    <td>@if($user->rank>=7) <span class="text-bold text-green">Completed</span> @else <i class="fa fa-spinner fa-spin"></i> @endif 10,00,000,00/-</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>Super Daimond Executive</td>
                    <td>3 Daimond Ex. : 2 Daimond Ex.</td>
                    <td>@if($user->rank>=8) <span class="text-bold text-green">Completed</span> @else <i class="fa fa-spinner fa-spin"></i> @endif 50,00,000/-</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>Saphire Daimond Executive</td>
                    <td>1 Super Daimond Ex. : 1 Super Daimond</td>
                    <td>@if($user->rank>=9) <span class="text-bold text-green">Completed</span> @else <i class="fa fa-spinner fa-spin"></i> @endif 1,00,000,00 </td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>Crown Daimond Executive</td>
                    <td>1 Saphire Daimond Ex. : 1 Saphire Daimond Ex.</td>
                    <td>@if($user->rank>=10) <span class="text-bold text-green">Completed</span> @else <i class="fa fa-spinner fa-spin"></i> @endif 2,50,000,00/-</td>
                  </tr>
                </tbody>
              </table>
              

            </div>
          </div>
        </div>

      </div>


     
      
    </div>
  </div>
  <!-- /.content-wrapper -->




@include('user.headers.footer')
