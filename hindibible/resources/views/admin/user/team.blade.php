<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">
<head>
    <meta charset="utf-8" />
    <title>{{$data['page_title']}} | {{env("APP_NAME")}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Start Include Css -->
    @include('admin.headers.maincss')
    <!-- End Include Css -->
</head>
<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
        <!-- Start Include Header -->
        @include('admin.headers.header')
        <!-- End Include Header -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div
                                class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                                <h4 class="mb-sm-0">{{$data['page_title']}}</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                                        <li class="breadcrumb-item active">{{$data['page_title']}}
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body frm">
                                        



                                       <!--  <select class="form-control mb-3" id="select-user">
                                            <option value="">Select user</option>
                                        </select> -->
                                        <span class="mb-2" style="display: block;"></span>















<link rel="stylesheet" href="<?=url('public/tree/hic');?>/hierarchy-view.css">
<link rel="stylesheet" href="<?=url('public/tree/hic');?>/main.css">
<style>
    .person img{ width:45px; height:50px !important;}
    .bl{color:#900;}
    .bc{color:#060;}
    .management-hierarchy .person > p.name {text-transform: capitalize;}
</style>










<section class="management-hierarchy hiten" style="padding-bottom: 50px;">
          
          
          <div class="col-lg-3 col-xs-6" style="position: absolute; top: 0; margin-top: 10px;display: none;">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  
    
                  <p>Grand Total Net Sale Volume</p>
                   <h4><i class="fa fa-fw fa-inr"></i> </h4>
                   <p>Team Network : 0</p>
                  <!-- <p>Monthly Bonus % : </p>-->
                   
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
               <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>-->
              </div>
            </div>
        
        
        
<?php

$memberlist = $tree_view['memberlist'];
                
$member_detail = $user = \App\Models\MemberModel::GetUserData($id);
$member_log = $user;
$user_id=$id;

$imgae_path = 'green.png';




    $total_bp = 0;

            ?>
       
        <div class="hv-container">
            <div class="hv-wrapper">

                <!-- Key component -->
                <div class="hv-item">

                    <div class="hv-item-parent">
                        <div class="person">
                            @if($member_detail->is_paid==1)
                                <img class="avatar-xs rounded-circle" src="{{asset('public/tree/images/rank/green.png')}}" alt="banner image"/>
                            @elseif($member_detail->is_paid==0)
                                <img class="avatar-xs rounded-circle" src="{{asset('public/tree/images/rank/red.png')}}" alt="banner image"/>
                            @endif
                            <p class="name">
                                {{$member_detail->name}}/<b>{{sort_name}}{{$member_detail->user_id}}</b><br>
                                Total Income: <b>{{Helpers::price_formate(@$member_detail->all_time_earning)}}</b>
                            </p>
                            <div class="detail-popup">
                                <p><b>Mobile : </b>{{$member_detail->phone}}</p>
                                <p><b>Package : </b>{{$member_detail->package_name}}</p>
                                <p><b>KYC : </b>
                                    @if($member_detail->kyc_step==1)
                                    <span class="badge bg-success">KYC Complete</span>
                                    @endif

                                    @if($member_detail->kyc_step==2)
                                    <span class="badge bg-info">KYC Under Review</span>
                                    @endif

                                    @if($member_detail->kyc_step==3)
                                    <span class="badge bg-warning">KYC Rejected</span>
                                    @endif

                                    @if($member_detail->kyc_step==0)
                                    <span class="badge bg-info">KYC Not Update</span>
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>


















<div class="hv-item-children">
                         
                    <?php foreach($memberlist as $level_one){ ?>    
                        
                        <div class="hv-item-child">
                            <!-- Key component -->
                            <div class="hv-item">
                                <div class="hv-item-parent">
                                    <?php 
                                        $data = $level_one;
                                        echo \Illuminate\Support\Facades\View::make('admin/user/team-card',compact('data'))->render();
                                    ?>
                                </div>


                                <div class="hv-item-children">

                                 <?php foreach($level_one['L_3'] as $three){ ?>  
                                     <div class="hv-item-child">
                                        <?php 
                                            $data = $three;
                                            echo \Illuminate\Support\Facades\View::make('admin/user/team-card',compact('data'))->render();
                                        ?>
                                        
                                       
                                       <!--Level 4 -->
                                            <div class="hv-item-child">
                                                <!-- Key component -->
                                                <div class="hv-item">
                                                     <div class="hv-item-parent">
                                                     </div>
                                                     <div class="hv-item-children">
                                                     <?php foreach($three['L_4'] as $four){  ?>  
                                                         <div class="hv-item-child">
                                                            
                                    <?php 
                                        $data = $four;
                                        echo \Illuminate\Support\Facades\View::make('admin/user/team-card',compact('data'))->render();
                                    ?>
                                                            

                                                            <div class="hv-item-child">
                                                <!-- Key component -->
                                                <div class="hv-item">
                                                     <div class="hv-item-parent">
                                                     </div>
                                                     <div class="hv-item-children">

                                                     <?php foreach($four['L_5'] as $five){  ?>  
                                                         <div class="hv-item-child">
                                    <?php 
                                        $data = $five;
                                        echo \Illuminate\Support\Facades\View::make('admin/user/team-card',compact('data'))->render();
                                    ?>
                                                            
                                                            
                                                                <div class="hv-item-child">
                                                                    <!-- Key component -->
                                                                    <div class="hv-item">
                                                                         <div class="hv-item-parent">
                                                                         </div>
                                                                         <div class="hv-item-children">
                                                                        <?php foreach($five['L_6'] as $six){  ?>
                                                                             <div class="hv-item-child">
                                            
                                    <?php 
                                        $data = $six;
                                        echo \Illuminate\Support\Facades\View::make('admin/user/team-card',compact('data'))->render();
                                    ?>
                                            
                                                                                
                                                                                    <div class="hv-item-child">
                                                                                        <!-- Key component -->
                                                                                        <div class="hv-item">
                                                                                             <div class="hv-item-parent">
                                                                                             </div>
                                                                                             <div class="hv-item-children">
                                    <?php foreach($six['L_7'] as $seven){  ?>
                                         <div class="hv-item-child">
                                    <?php 
                                        $data = $seven;
                                        echo \Illuminate\Support\Facades\View::make('admin/user/team-card',compact('data'))->render();
                                    ?>


<div class="hv-item-child">
  <!-- Key component -->
  <div class="hv-item">
       <div class="hv-item-parent">
       </div>
       <div class="hv-item-children">
      <?php foreach($seven['L_8'] as $eight){  ?>
           <div class="hv-item-child">

            <?php 
                $data = $eight;
                echo \Illuminate\Support\Facades\View::make('admin/user/team-card',compact('data'))->render();
            ?>



<div class="hv-item-child">
  <!-- Key component -->
  <div class="hv-item">
       <div class="hv-item-parent">
       </div>
       <div class="hv-item-children">
      <?php foreach($eight['L_9'] as $nine){  ?>
           <div class="hv-item-child">

        <?php 
            $data = $nine;
            echo \Illuminate\Support\Facades\View::make('admin/user/team-card',compact('data'))->render();
        ?>
              



<div class="hv-item-child">
  <!-- Key component -->
  <div class="hv-item">
       <div class="hv-item-parent">
       </div>
       <div class="hv-item-children">
      <?php foreach($nine['L_10'] as $ten){ ?>
           <div class="hv-item-child">

            <?php 
                $data = $ten;
                echo \Illuminate\Support\Facades\View::make('admin/user/team-card',compact('data'))->render();
            ?>
              


<div class="hv-item-child">
  <!-- Key component -->
  <div class="hv-item">
       <div class="hv-item-parent">
       </div>
       <div class="hv-item-children">
      <?php foreach($ten['L_11'] as $eleven){  ?>
           <div class="hv-item-child">
              
            <?php 
                $data = $eleven;
                echo \Illuminate\Support\Facades\View::make('admin/user/team-card',compact('data'))->render();
            ?>


<div class="hv-item-child">
  <!-- Key component -->
  <div class="hv-item">
       <div class="hv-item-parent">
       </div>
       <div class="hv-item-children">
      <?php foreach($eleven['L_12'] as $twelb){  ?>
           <div class="hv-item-child">
              
            <?php 
                $data = $twelb;
                echo \Illuminate\Support\Facades\View::make('admin/user/team-card',compact('data'))->render();
            ?>



<div class="hv-item-child">
  <!-- Key component -->
  <div class="hv-item">
       <div class="hv-item-parent">
       </div>
       <div class="hv-item-children">
      <?php foreach($twelb['L_13'] as $thrteen){  ?>
           <div class="hv-item-child">
              
       <?php 
            $data = $thrteen;
            echo \Illuminate\Support\Facades\View::make('admin/user/team-card',compact('data'))->render();
        ?>


           </div>
      <?php }//end of level_tweleb?>      
        </div>
   </div>
</div>



           </div>
      <?php }//end of level_tweleb?>      
        </div>
   </div>
</div>





           </div>
      <?php }//end of level_eleven?>      
        </div>
   </div>
</div>



           </div>
      <?php }//end of level_ten?>      
        </div>
   </div>
</div>
         

           </div>
           
      <?php }//end of level_nine?>      
        </div>
   </div>
</div>






           </div>
           
      <?php }//end of level_eight?>      
        </div>
   </div>
</div>



                                                                                                 </div>
                                                                                                 
                                                                                            <?php }//end of level_seven?>      
                                                                                              </div>
                                                                                         </div>
                                                                                    </div>




                                                                             </div>
                                                                          <?php }//end of level_six?> 
                                                                          </div>
                                                                     </div>
                                                                </div>
                                                        </div>
                                                                    
                                                       <?php }//end of level_five?>   
                                                      
                                                     </div>
                    
                                                </div>
                                            </div>
                                                            
                                                        </div>
                                                                    
                                                       <?php }//end of level_four?>   
                                                      
                                                     </div>
                    
                                                </div>
                                            </div>
                                         <!--Level 4 -->     
                                    </div>
                                    
                                    
                                 <?php }//end of level_three?>
                                 
                                    
                                  </div>
                                   
                                        
                                         

                            </div>
                        </div>                        
                       
                     
                     <?php }//end of level_one?>
 
                    </div>
























































                

                </div>

            </div>
        </div>
    </section>












































                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                   
                </div>
            </div>
            <!-- End Page-content -->
            <!-- Start Include Footer -->
            @include('admin.headers.footer')
            <!-- End Include Footer -->
        </div>
    </div>
    <!-- END layout-wrapper -->
    <!-- Start Include Script -->
    @include('admin.headers.mainjs')
    <!-- End Include Script -->


<script>
    $('#select-user').select2({
      ajax: {
        url: "{{route('search-my-member')}}?user_id={{Crypt::encryptString($row->id)}}",
        method:"post",
        "headers": {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
       },
        data: function (params) {
          var query = {
            search: params.term,
            type: 'public'
          }
          // Query parameters will be ?search=[term]&type=public
          return query;
        }
      }
    });
    $(document).on("change", "#select-user",(function(e) {      
        window.location.href="{{url('admin/user/team')}}/"+$(this).val();
    }));
</script>


</body>
</html>