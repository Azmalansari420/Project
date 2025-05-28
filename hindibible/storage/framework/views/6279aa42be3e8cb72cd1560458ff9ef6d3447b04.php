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
    $('#category').select2({
      ajax: {
        url: "<?php echo e(route('category')); ?>",
        method:"post",
        "headers": {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
       },
        data: function (params) {
          var query = {
            search: params.term,
            type: 'public',
            id: 0
          }
          return query;
        }
      }
    });
    $('#sub-category').select2({
      ajax: {
        url: "<?php echo e(route('sub-category')); ?>",
        method:"post",
        "headers": {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
       },
        data: function (params) {
          var query = {
            search: params.term,
            type: 'public',
            id: $("#category").val()
          }
          return query;
        }
      }
    });
    $('#sub-sub-category').select2({
      ajax: {
        url: "<?php echo e(route('sub-sub-category')); ?>",
        method:"post",
        "headers": {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
       },
        data: function (params) {
          var query = {
            search: params.term,
            type: 'public',
            id: $("#sub-category").val()
          }
          return query;
        }
      }
    });
    $('#sub-sub-sub-category').select2({
      ajax: {
        url: "<?php echo e(route('sub-sub-sub-category')); ?>",
        method:"post",
        "headers": {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
       },
        data: function (params) {
          var query = {
            search: params.term,
            type: 'public',
            id: $("#sub-sub-category").val()
          }
          return query;
        }
      }
    });
</script>

<?php /**PATH /home/u346521377/domains/digitalnamo.com/public_html/azmal/2025/april/hindibible/resources/views/admin/headers/mainjs.blade.php ENDPATH**/ ?>