



<div class="container-fluid">
                  <div class="profile-foreground position-relative mx-n4 mt-n15">
                     <div class="profile-wid-bg"></div>
                  </div>
                  <div class="pt-4 mb-4 mb-lg-3 pb-lg-4 profile-wrapper">
                     <div class="row g-4">
                        <div class="col-auto">
                           <div class="avatar-lg">
                              <img src="{{Helpers::image_check($row->image)}}" alt="user-img" class="img-thumbnail rounded-circle" />
                           </div>
                        </div>
                        <!--end col-->
                        <div class="col">
                           <div class="p-2">
                              <h3 class="text-white mb-1">{{$row->name}}</h3>
                              <p class="text-white text-opacity-75 m-0">{{$row->email}}</p>
                              <p class="text-white text-opacity-75 m-0">{{sort_name.$row->user_id}}</p>
                           </div>
                        </div>
                        <!--end col-->
                     </div>
                     <!--end row-->
                  </div>
                  <div class="row">
                     <div class="col-lg-12">
                        <div>
                           
                           <!-- Tab panes -->
                           <div class="tab-content pt-4 text-muted">
                              <div class="tab-pane active" id="overview-tab" role="tabpanel">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="card">
                                          <div class="card-body">
                                             <h5 class="card-title mb-5">Complete Your Profile</h5>
                                             <div class="progress animated-progress custom-progress progress-label">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: {{$profile_percent = Helpers::profile_percent($row->id)}}%" aria-valuenow="{{$profile_percent = Helpers::profile_percent($row->id)}}" aria-valuemin="0" aria-valuemax="100">
                                                   <div class="label">{{$profile_percent = Helpers::profile_percent($row->id)}}%</div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       
                                    </div>
                                 
                                 </div>
                                 <!--end row-->
                              </div>
                            
                              <!--end tab-pane-->
                           </div>
                           <!--end tab-content-->
                        </div>
                     </div>
                     <!--end col-->
                  </div>
                  <!--end row-->
               </div>