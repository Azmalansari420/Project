@include('user.headers.header')
@php($setting = json_decode(DB::table('setting')->where('name','main')->first()->data))
@php($upi = @$setting->upi)

  
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
        <div class="col-lg-6" style="margin: 0 auto;">
          <div class="card card-outline">
            <!-- <div class="card-header bg-blue">
              <h5 class="text-white m-b-0">Basic Example</h5>
            </div> -->
            <div class="card-body">



              
              <form class="form row form_data" action="{{$data['submit_url']}}" method="get" enctype="multipart/form-data" id="form_data_submit" novalidate>
                @csrf

                <input type="hidden" name="amount" value="{{$data['amount']}}" required>


                <div class="col-md-12">
                  <div class="qr-div">
                    <h2>Pay <br><span>{{Helpers::price_formate($data['amount'])}}</span></h2>
                    <p>Pay to given address. <br>Send Payment Proof for approval to company.</p>
                    <!-- <img src="https://api.qrserver.com/v1/create-qr-code/?data=upi://pay?pa={{urlencode($upi)}}&am={{$data['amount']}}&cu=INR&size=300x300" alt="UPI QR Code for Payment"> -->

                    <img src="https://api.qrserver.com/v1/create-qr-code/?data={{ urlencode('upi://pay?pa='.$upi.'&am='.$data['amount'].'&cu=INR') }}&size=300x300" alt="UPI QR Code for Payment">


                  </div>

                  <div class="upi-copy-section">
                    <span class="upi-copy-text" onclick="copyToClipboard('{{$upi}}')">{{$upi}} <i class="fa fa-copy"></i></span>
                  </div>
                </div>



                <div class="col-md-12">
                  <div class="form-group">
                    <label>Payment Mode</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-circle-o"></i></div>
                      <select class="form-select mb-3" aria-label="Default select example" name="payment_mode" id="payment_mode" required>
                        <option value="" >Select</option>
                        <option value="PhonePe">PhonePe</option>
                        <option value="Gpay">Gpay</option>
                        <option value="AmazonPe">AmazonPe</option>
                        <option value="PayTm">PayTm</option>
                        <option value="Other UPI">Other UPI</option>
                      </select>
                    </div>
                  </div>
                </div>


                <div class="col-md-12">
                  <div class="form-group">
                    <label>Upload Payment Screenshot</label>
                    <div class="input-group">
                      <label class="custom-file center-block block w-100">
                        <input type="file" id="file" class="custom-file-input upload-single-image" required name="image" data-target="image" accept="image/*">
                        <span class="custom-file-control"></span>
                      </label>


                    </div>
                      <img class="upload-img-view img-thumbnail mt-2 mb-2 image" style="width: 100%;height: 250px;" src="{{Helpers::image_check('','default.jpg')}}" alt="banner image"/>
                  </div>
                </div>
                
                
                <div class="col-md-12">
                  <button type="button" id="pay-submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
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

<script type="module">

    import { firebaseConfig} from '<?=url('/') ?>/firebase.js';
    import { initializeApp } from "https://www.gstatic.com/firebasejs/10.12.1/firebase-app.js";
    import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.12.1/firebase-analytics.js";
    import { getDatabase, ref, set, child, update, remove, onValue  } from "https://www.gstatic.com/firebasejs/10.12.1/firebase-database.js";
    const app = initializeApp(firebaseConfig);
    const analytics = getAnalytics(app);
    const db = getDatabase();


    function setUpdateDeposit(url)
    {
      set(ref(db, 'depositupdate/' + 1), {
          status: 1,
          dateTime: Date.now(),
      });
      set(ref(db, 'depositupdate/' + 1), {
          status: 0,
          dateTime: Date.now(),
      });
      window.location.href=url;
    }

    $(document).on("click", "#pay-submit",(function(e) {      
      event.preventDefault();
      loader("show");
      var form = new FormData();
      form.append("amount",{{$data['amount']}});
      form.append("payment_mode",$("#payment_mode").val());

      var fileInput = $("#file")[0].files[0];
      if (fileInput) {
          form.append("image", fileInput);
      }


      var settings = {
        "url": "{{$data['submit_url']}}",
        "method": "POST",
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
          loader("hide");
          response = admin_response_data_check(response);
          // setUpdateDeposit(response.url);

          const depositRef = ref(db, 'depositupdate/1');
          set(depositRef, {
              status: 1,
              dateTime: Date.now(),
          }).then(() => {
              update(depositRef, {
                  status: 0,
                  dateTime: Date.now(),
              }).then(() => {
                  // console.log("Status updated to 0");
                  window.location.href = response.url; // Redirect after update
              }).catch(error => console.error("Error updating status:", error));              
          }).catch(error => console.error("Error setting status:", error));


      });
      
   }));





</script>
