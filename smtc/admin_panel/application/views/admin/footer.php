<!--Start footer-->
<?php $link = $this->setting_model->get_all_setting();?>
  <footer class="footer">
      <div class="container">
        <div class="text-center">
         ©Copyright  <?php echo $link[0]->title ?> All Rights Reserved  
        </div>
      </div>
    </footer>
  <!--End footer-->
  
 
   
  </div><!--End wrapper-->

  <!-- Bootstrap core JavaScript-->
  <script src="<?=base_url();?>assets/panel_assets/js/jquery.min.js"></script>
  <script src="<?=base_url();?>assets/panel_assets/js/popper.min.js"></script>
  <script src="<?=base_url();?>assets/panel_assets/js/bootstrap.min.js"></script>
  
 <!-- simplebar js -->
  <script src="<?=base_url();?>assets/panel_assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="<?=base_url();?>assets/panel_assets/js/sidebar-menu.js"></script>
  <!-- loader scripts -->
  <!-- <script src="<?=base_url();?>assets/panel_assets/js/jquery.loading-indicator.html"></script> -->
  <!-- Custom scripts -->
  <script src="<?=base_url();?>assets/panel_assets/js/app-script.js"></script>
  <!-- Chart js -->
  
  <script src="<?=base_url();?>assets/panel_assets/plugins/Chart.js/Chart.min.js"></script>
  <!-- Vector map JavaScript -->
  <script src="<?=base_url();?>assets/panel_assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
  <script src="<?=base_url();?>assets/panel_assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- Easy Pie Chart JS -->
  <script src="<?=base_url();?>assets/panel_assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
  <!-- Sparkline JS -->
  <script src="<?=base_url();?>assets/panel_assets/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
  <script src="<?=base_url();?>assets/panel_assets/plugins/jquery-knob/excanvas.js"></script>
  <script src="<?=base_url();?>assets/panel_assets/plugins/jquery-knob/jquery.knob.js"></script>
  
  <script src="<?=base_url();?>assets/panel_assets/plugins/summernote/dist/summernote-bs4.min.js"></script>
   <!--Bootstrap Touchspin Js-->
    <script src="<?=base_url();?>assets/panel_assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.js"></script>
    <script src="<?=base_url();?>assets/panel_assets/plugins/bootstrap-touchspin/js/bootstrap-touchspin-script.js"></script>

    <!--Select Plugins Js-->
    <script src="<?=base_url();?>assets/panel_assets/plugins/select2/js/select2.min.js"></script>
    <!--Inputtags Js-->
    <script src="<?=base_url();?>assets/panel_assets/plugins/inputtags/js/bootstrap-tagsinput.js"></script>

    <!--Bootstrap Datepicker Js-->
    <script src="<?=base_url();?>assets/panel_assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
      <script src="<?=base_url();?>assets/panel_assets/plugins/summernote/dist/summernote-bs4.min.js"></script>

  <script src="<?=base_url();?>assets/panel_assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js"></script>
  <script src="<?=base_url();?>assets/panel_assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?=base_url();?>assets/panel_assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js"></script>
  <script src="<?=base_url();?>assets/panel_assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js"></script>
  <script src="<?=base_url();?>assets/panel_assets/plugins/bootstrap-datatable/js/buttons.html5.min.js"></script>
  <script src="<?=base_url();?>assets/panel_assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js"></script>
  <script src="<?=base_url();?>assets/panel_assets/plugins/bootstrap-datatable/js/buttons.print.min.js"></script>
  <script src="<?=base_url();?>assets/panel_assets/plugins/bootstrap-datatable/js/jszip.min.js"></script>
  <script src="<?=base_url();?>assets/panel_assets/plugins/bootstrap-datatable/js/pdfmake.min.js"></script>
  <script src="<?=base_url();?>assets/panel_assets/plugins/bootstrap-datatable/js/vfs_fonts.js"></script>


    <script>
     $(document).ready(function() {
      //Default data table
       $('#example').DataTable();


       var table = $('#example2').DataTable( {
        lengthChange: false,
        buttons: [  'excel' ]
      } );
 
     table.buttons().container()
        .appendTo( '#example2_wrapper .col-md-6:eq(0)' );
      
      } );

    </script>
 
    <script>
      $('#default-datepicker').datepicker({
        todayHighlight: true,
         format: 'yyyy-mm-dd',
      });
      $('#autoclose-datepicker').datepicker({
        autoclose: true,
         minDate: 0,
        todayHighlight: true,
         format: 'yyyy-mm-dd',
      });

      $('#inline-datepicker').datepicker({
         todayHighlight: true,
          format: 'yyyy-mm-dd',
      });

       $('#dateragne-picker .input-daterange').datepicker({

          format: 'yyyy-mm-dd',
       
       });

    </script>

    <!--Multi Select Js-->
  
  <script src="<?=base_url();?>assets/panel_assets/js/index.js"></script>


</body>

</html>
