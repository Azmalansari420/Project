
  <footer class="main-footer">
    <div class="pull-right hidden-xs">Version 1.0</div>
    Copyright © 2025 {{env('APP_NAME')}}. All rights reserved.</footer>
</div>
<!-- ./wrapper --> 






<!-- Modal -->
<div id="createAccountModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body create-account-modal">
        <div class="alert alert-success show">ID Create Successfully!</div>
        <i class="fa fa-check-circle-o"></i>
        <table class="table">
          <tbody>
            <tr>
              <th>Name</th>
              <td id="createAccountName"></td>
            </tr>
            <tr>
              <th>Email</th>
              <td id="createAccountEmail"></td>
            </tr>
            <tr>
              <th>Phone</th>
              <td id="createAccountPhone"></td>
            </tr>
            <tr>
              <th>ID. No.</th>
              <td id="createAccountIDNo"></td>
            </tr>
            <tr>
              <th>Password</th>
              <td id="createAccountPassword"></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

  </div>
</div>









<!-- v4.0.0-alpha.6 --> 
<script src="{{url('public/user/')}}/dist/bootstrap/js/bootstrap.min.js"></script> 

<!-- template --> 
<script src="{{url('public/user/')}}/dist/js/niche.js"></script> 

<!-- Chartjs JavaScript --> 
<!-- <script src="{{url('public/user/')}}/dist/plugins/chartjs/chart.min.js"></script> -->
<!-- <script src="{{url('public/user/')}}/dist/plugins/chartjs/chart-int.js"></script> -->

<!-- Chartist JavaScript --> 
<!-- <script src="{{url('public/user/')}}/dist/plugins/chartist-js/chartist.min.js"></script>  -->
<!-- <script src="{{url('public/user/')}}/dist/plugins/chartist-js/chartist-plugin-tooltip.js"></script>  -->
<!-- <script src="{{url('public/user/')}}/dist/plugins/functions/chartist-init.js"></script> -->







<script src="{{url('public/')}}/toast/saber-toast.js"></script>
<script src="{{url('public/')}}/toast/script.js"></script>
<script src="{{url('public/')}}/assetsadmin/select2/js/select2.full.min.js"></script>

<script>
  
$("select").select2();
$('.tags').select2({
  tags: true,
  tokenSeparators: ['||', '\n']
});

$(document).on('click',".logout",function (e) {
  event.preventDefault();
  loader('show');
  $.ajax({
      url:"{{route('user.user-logout')}}",
      type:"GET",
      dataType:"json",
      success:function(d)
      {
        admin_response_data_check(d)  
      },
      error: function(e) 
    {
      admin_response_data_check(e)
    } 
  });
});

$(".upload-single-image").on('change', function(){
  var files = [];
  var j=1;
  var upload_div = $(this).data("target");
  var name = $(this).data('name');
  $( "."+upload_div ).empty();
    for (var i = 0; i < this.files.length; i++)
    {
        if (this.files && this.files[i]) 
        {
            var reader = new FileReader();
            reader.onload = function (e) {
            $('.'+upload_div).attr("src",e.target.result);
            j++;
        }
        reader.readAsDataURL(this.files[i]);
    }
  }      
});


</script>

<script>
function copyToClipboard(text) {
    // const textToCopy = document.getElementById('text-to-copy').innerText; // Or use .value for input fields
    const textToCopy = text;
    navigator.clipboard.writeText(textToCopy)
        .then(() => {
            console.log('Text successfully copied to clipboard');
        })
        .catch(err => {
            console.error('Failed to copy text: ', err);
        });
}

</script>




</body>

</html>
