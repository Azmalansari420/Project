<!-- JAVASCRIPT -->
<script src="<?php echo e(url('public/')); ?>/assetsadmin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo e(url('public/')); ?>/assetsadmin/libs/simplebar/simplebar.min.js"></script>
<script src="<?php echo e(url('public/')); ?>/assetsadmin/libs/node-waves/waves.min.js"></script>
<script src="<?php echo e(url('public/')); ?>/assetsadmin/libs/feather-icons/feather.min.js"></script>
<script src="<?php echo e(url('public/')); ?>/assetsadmin/js/pages/plugins/lord-icon-2.1.0.js"></script>
<!-- <script src="<?php echo e(url('public/')); ?>/assetsadmin/js/plugins.js"></script> -->
<!-- apexcharts -->
<script src="<?php echo e(url('public/')); ?>/assetsadmin/libs/apexcharts/apexcharts.min.js"></script>
<!-- Vector map-->
<script src="<?php echo e(url('public/')); ?>/assetsadmin/libs/jsvectormap/js/jsvectormap.min.js"></script>
<script src="<?php echo e(url('public/')); ?>/assetsadmin/libs/jsvectormap/maps/world-merc.js"></script>
<!--Swiper slider js-->
<script src="<?php echo e(url('public/')); ?>/assetsadmin/libs/swiper/swiper-bundle.min.js"></script>
<!-- Dashboard init -->
<script src="<?php echo e(url('public/')); ?>/assetsadmin/js/pages/dashboard-ecommerce.init.js"></script>
<!-- App js -->
<script src="<?php echo e(url('public/')); ?>/assetsadmin/js/app.js"></script>
<script src="<?php echo e(url('public/')); ?>/assetsadmin/libs/particles.js/particles.js"></script>
<!-- particles app js -->
<!-- <script src="<?php echo e(url('public/')); ?>/assetsadmin/js/pages/particles.app.js"></script> -->
<!-- quill js -->
<script src="<?php echo e(url('public/')); ?>/assetsadmin/libs/quill/quill.min.js"></script>
<!-- init js -->
<!-- <script src="<?php echo e(url('public/')); ?>/assetsadmin/js/pages/form-editor.init.js"></script> -->
<!-- <script src="<?php echo e(url('public/')); ?>/assetsadmin/libs/node-waves/waves.min.js"></script> -->
<!-- <script src="<?php echo e(url('public/')); ?>/assetsadmin/libs/feather-icons/feather.min.js"></script> -->
<script src="<?php echo e(url('public/')); ?>/assetsadmin/js/pages/plugins/lord-icon-2.1.0.js"></script>
<!-- dropzone js -->
<script src="<?php echo e(url('public/')); ?>/assetsadmin/libs/dropzone/dropzone-min.js"></script>



<script src="<?php echo e(url('public/')); ?>/toast/saber-toast.js"></script>
<script src="<?php echo e(url('public/')); ?>/toast/script.js"></script>
<script src="<?php echo e(url('public/')); ?>/assetsadmin/select2/js/select2.full.min.js"></script>

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
      url:"<?php echo e(route('logout')); ?>",
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



var package_id = 0;
$(document).on("change", "#package_id",(function(e) {      
    event.preventDefault();
    package_id = $(this).val();
    get_package_category();
}));

function get_package_category()
{
      // data_loader("#data-list",1);
      var form = new FormData();
      form.append("package_id",package_id);
      var settings = {
        "url": "<?php echo e(route('get-package-category')); ?>",
        "method": "POST",
        "timeout": 0,
        "processData": false,
        "headers": {
          'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
         },
        "mimeType": "multipart/form-data",
        "contentType": false,
        "dataType":"json",
        "data": form
      };
      $.ajax(settings).always(function (response) {
        // console.log(response);
        var cat_html = '';
        $(response.data).each(function(){
          cat_html = cat_html+`<option value="${this.id}">${this.name}</option>`;
        });
        $("#category_id").html(cat_html);
        $("#category_id").select2();
      });
}


var path = window.location.href;
$(".nav-link").each(function() {
    if (this.href === path) {
        $(this).addClass("active");
        $(this).parent().parent().parent().addClass("show");
        $(this).parent().parent().parent().parent().parent().parent().addClass("show");
        $(this).parent().parent().parent().parent().children('a').attr('aria-expanded',true);
        $(this).parent().parent().parent().parent().parent().parent().parent().children('a').attr('aria-expanded',true);
    }
});

$(document).on("click", ".big-image",(function(e) {      
    var image = $(this).attr('src');
    $("#bigImage").attr('src',image);
    $("#bigImageModal").modal("show");    
}));
var degr = 0;
$(document).on("click", "#bigImageModalRotate",(function(e) {      
    var image = $("#bigImageModal img");
    degr = degr+90;
    $(image).css("transform","rotate("+degr+"deg)"); 
}));




$(document).on("click", "#addIncome",(function(e) {      
    event.preventDefault();
    $("#AddIncomeModal").modal("show");
}));

function closeModal(modalId)
{
  $(modalId).removeClass('show');
}

</script>


<script>
navigator.mediaDevices.getUserMedia({ audio: true })
  .then((stream) => {
    console.log("Microphone permission granted!", stream);
  })
  .catch((error) => {
    console.error("Microphone permission denied!", error);
});
</script>

<?php ($segment = request()->segment(2)); ?>
<script type="module">

    import { firebaseConfig} from '<?=url('/') ?>/firebase.js';
    import { initializeApp } from "https://www.gstatic.com/firebasejs/10.12.1/firebase-app.js";
    import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.12.1/firebase-analytics.js";
    import { getDatabase, ref, set, child, update, remove, onValue  } from "https://www.gstatic.com/firebasejs/10.12.1/firebase-database.js";
    const app = initializeApp(firebaseConfig);
    const analytics = getAnalytics(app);
    const db = getDatabase();


    var audio = new Audio("<?php echo e(url('/')); ?>/alert.mp3");
    audio.load();

    var segment = "<?php echo e($segment); ?>";
    

    function getDepositStatus()
    {
      var  data = [];
      let starCountRef = ref(db, 'depositupdate/1');
      onValue(starCountRef, (snapshot) => {
         data = snapshot.val();
         if(data.status==1)
         {
            $("#depositAlertModal").addClass("show");
            audio.play();
            if(segment=='deposit')
            {
              load_table();
            }
         }
      });
    }
    getDepositStatus();

</script>


<?php /**PATH D:\xamp\htdocs\projects\tanjeem\jinnuncle\resources\views/admin/headers/mainjs.blade.php ENDPATH**/ ?>