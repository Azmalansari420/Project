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


              @if($row->kyc_step==1)
              <div class="alert alert-success show" role="alert"><strong>Success</strong> - Your Kyc Is Approved. You can change your kyc.
              </div>

              @elseIf($row->kyc_step==0)
              <div class="alert alert-info show" role="alert"><strong>Information</strong> - Update Your Kyc 
              </div>

              @elseIf($row->kyc_step==2)
              <div class="alert alert-info show" role="alert"><strong>Information</strong> - Your Kyc Is Under Review
              </div>

              @elseIf($row->kyc_step==3)
              <div class="alert alert-danger show" role="alert"><strong>Warning</strong> - Your Kyc Rejected!
              </div>
              @endif

              
              <form class="form row form_data" action="{{$data['submit_url']}}" method="post" enctype="multipart/form-data" id="form_data_submit" novalidate>
                @csrf



                <div class="col-md-4">
                  <div class="form-group">
                    <label>Your Name as per Bank Account</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-star"></i></div>
                      <input class="form-control" placeholder="Name" type="text" name="bank_holder_name" value="{{@$kyc->bank_holder_name}}">
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>Bank Name</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-star"></i></div>
                      <input class="form-control" placeholder="Bank Name" type="text" name="bank_name" value="{{@$kyc->bank_name}}">
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>Account Number</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-star"></i></div>
                      <input class="form-control" placeholder="Account Number" type="number" name="account_number" value="{{@$kyc->account_number}}">
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>Account Type</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-star"></i></div>
                      <select class="form-select mb-3" aria-label="Default select example" name="account_type" id="placement">
                        <option value="0" >Select Type</option>
                        <option value="Saving" @if(@$kyc->account_type=='Saving') selected @endif >Saving</option>
                        <option value="Current" @if(@$kyc->account_type=='Current') selected @endif>Current</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>IFSC</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-star"></i></div>
                      <input class="form-control" placeholder="IFSC" type="text" name="ifsc" value="{{@$kyc->ifsc}}">
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>PAN Card</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-star"></i></div>
                      <input class="form-control" placeholder="PAN Card" type="text" name="pan" value="{{@$kyc->pan}}">
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>Bank Registered Mobile</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-star"></i></div>
                      <input class="form-control" placeholder="Bank Registered Mobile" type="number" name="rg_mobile" value="{{@$kyc->rg_mobile}}">
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>Bank Registered Email</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-star"></i></div>
                      <input class="form-control" placeholder="Bank Registered Email" type="email" name="rg_email" value="{{@$kyc->rg_email}}">
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>Address</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-star"></i></div>
                      <input class="form-control" placeholder="Address" type="text" name="address" value="{{@$kyc->address}}">
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>Bank Passbook Image</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-star"></i></div>
                      <label class="custom-file center-block block">
                        <input type="file" id="file" class="custom-file-input" name="passbook_image">
                        <span class="custom-file-control"></span>
                      </label>
                    </div>
                    <img src="{{Helpers::image_check(@$kyc->passbook_image)}}" class="img-thumbnail mt-2" style="width:250px">
                  </div>
                </div>


                
                
                <div class="col-md-12">
                  @if($row->kyc_step==1)
                    <button type="button" class="btn btn-primary waves-effect waves-light m-r-10" id="changeKycBtn">Change KYC</button>
                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10" id="submitKycBtn" @if($row->kyc_step==1) style="display:none;" @endif>Submit</button>
                  @endif
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
  $(document).on("click", "#changeKycBtn",(function(e) {
    $("#submitKycBtn").show();
    $("#changeKycBtn").hide();
  }));
</script>

@include('user.headers.footer')