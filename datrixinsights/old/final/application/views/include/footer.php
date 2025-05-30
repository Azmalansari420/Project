
	<!--plugins-->
	<script src="<?php echo base_url();?>assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="<?php echo base_url();?>assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="<?php echo base_url();?>assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!-- Vector map JavaScript -->
	<script src="<?php echo base_url();?>assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
	<script src="<?php echo base_url();?>assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="<?php echo base_url();?>assets/plugins/vectormap/jquery-jvectormap-in-mill.js"></script>
	<script src="<?php echo base_url();?>assets/plugins/vectormap/jquery-jvectormap-us-aea-en.js"></script>
	<script src="<?php echo base_url();?>assets/plugins/vectormap/jquery-jvectormap-uk-mill-en.js"></script>
	<script src="<?php echo base_url();?>assets/plugins/vectormap/jquery-jvectormap-au-mill.js"></script>
	<script src="<?php echo base_url();?>assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/index.js"></script>
	<!-- App JS -->
	<script src="<?php echo base_url();?>assets/js/app.js"></script>
	<script>
		new PerfectScrollbar('.dashboard-social-list');
		new PerfectScrollbar('.dashboard-top-countries');
	</script>
	<!--Data Tables js-->
	<script src="<?php echo base_url();?>assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script>
		$(document).ready(function () {
			//Default data table
			$('#example').DataTable();
			var table = $('#example2').DataTable({
				lengthChange: false,
				 "order": [],
				buttons: ['copy', 'excel', 'pdf', 'print', 'colvis']
			});
			table.buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
		});
	</script>
	<script src="<?php echo base_url();?>assets/plugins/select2/js/select2.min.js"></script>
	<script>
		$('.single-select').select2({
			theme: 'bootstrap4',
			width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
			placeholder: $(this).data('placeholder'),
			allowClear: Boolean($(this).data('allow-clear')),
		});
		$('.multiple-select').select2({
			theme: 'bootstrap4',
			width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
			placeholder: $(this).data('placeholder'),
			allowClear: Boolean($(this).data('allow-clear')),
		});
	</script>
	<?php $this->load->view('extra') ?>
</body>

</html>