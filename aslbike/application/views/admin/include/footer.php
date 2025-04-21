	

	<!--start switcher-->
	<div class="switcher-wrapper">
		<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
		</div>
		<div class="switcher-body">
			<div class="d-flex align-items-center">
				<h5 class="mb-0 text-uppercase">Theme Customizer</h5>
				<button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
			</div>
			<hr/>
			<p class="mb-0">Gaussian Texture</p>
			  <hr>
			  
			  <ul class="switcher">
				<li id="theme1"></li>
				<li id="theme2"></li>
				<li id="theme3"></li>
				<li id="theme4"></li>
				<li id="theme5"></li>
				<li id="theme6"></li>
			  </ul>
               <hr>
			  <p class="mb-0">Gradient Background</p>
			  <hr>
			  
			  <ul class="switcher">
				<li id="theme7"></li>
				<li id="theme8"></li>
				<li id="theme9"></li>
				<li id="theme10"></li>
				<li id="theme11"></li>
				<li id="theme12"></li>
				<li id="theme13"></li>
				<li id="theme14"></li>
				<li id="theme15"></li>
			  </ul>
		</div>
	</div>
	<!--end switcher-->

<!-- Bootstrap JS -->
	<script src="<?php echo base_url(); ?>media/admin/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="<?php echo base_url(); ?>media/admin/js/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>media/admin/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="<?php echo base_url(); ?>media/admin/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="<?php echo base_url(); ?>media/admin/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="<?php echo base_url(); ?>media/admin/plugins/chartjs/js/Chart.min.js"></script>
	<script src="<?php echo base_url(); ?>media/admin/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?php echo base_url(); ?>media/admin/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="<?php echo base_url(); ?>media/admin/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="<?php echo base_url(); ?>media/admin/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
	<script src="<?php echo base_url(); ?>media/admin/plugins/jquery-knob/excanvas.js"></script>
	<script src="<?php echo base_url(); ?>media/admin/plugins/jquery-knob/jquery.knob.js"></script>
	<script src="<?php echo base_url(); ?>media/admin/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url(); ?>media/admin/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
	  <script>
		  $(function() {
			  $(".knob").knob();
		  });
	  </script>
	  <script src="<?php echo base_url(); ?>media/admin/js/index.js"></script>
	<!--app JS-->
	<script src="<?php echo base_url(); ?>media/admin/js/app.js"></script>

	<script src="//cdn.ckeditor.com/4.19.0/full/ckeditor.js"></script>



<script>

	  $(document).ready(function() {
	  $('#example').DataTable()
	});
	  
</script>
	
	
<script>
	$(document).ready(function() {
		var table = $('#example2').DataTable( {
			lengthChange: false,
			buttons: [ 'copy', 'excel', 'pdf', 'print']
			} );
		 
		table.buttons().container()
			.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
		} );
</script>

<script>
	$(document).ready(function () {
		$("#show_hide_password a").on('click', function (event) {
			event.preventDefault();
			if ($('#show_hide_password input').attr("type") == "text") {
				$('#show_hide_password input').attr('type', 'password');
				$('#show_hide_password i').addClass("bx-hide");
				$('#show_hide_password i').removeClass("bx-show");
			} else if ($('#show_hide_password input').attr("type") == "password") {
				$('#show_hide_password input').attr('type', 'text');
				$('#show_hide_password i').removeClass("bx-hide");
				$('#show_hide_password i').addClass("bx-show");
			}
		});
	});
</script>


 <script>
    function readURL(input) {
    	// alert('sdfd');
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $("#blah").css("display","block");
            $('#blah').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#imgInp").change(function(){
    readURL(this);
});
    </script>


	
 <script>
      tinymce.init({
        selector: '#mytextarea',
        plugins: [
          'a11ychecker','advlist','advcode','advtable','autolink','checklist','export',
          'lists','link','image','charmap','preview','anchor','searchreplace','visualblocks',
          'powerpaste','fullscreen','formatpainter','insertdatetime','media','table','help','wordcount'
        ],
        toolbar: 'undo redo | formatpainter casechange blocks | bold italic backcolor | ' +
          'alignleft aligncenter alignright alignjustify | ' +
          'bullist numlist checklist outdent indent | removeformat | a11ycheck code table help'
      });
    </script>