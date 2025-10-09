<!--  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      
    </div>
  <p>Copyright &copy; 2015-2018 <a href="http://codediffusion.in" target="_blank"> CODEDIFFUSION </a>. All rights
    reserved.</p>
  </footer>-->
  </div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="dist/js/jquery.js"></script>


<!-- Add Google map -->
		 
<script>
 
 function initMap(){
  
		   google.maps.event.addDomListener(window, 'load', function(){
			    //Delivery points input search
			    var dp  =  document.getElementById("listing_address");
			   
				var delivery_place      = new google.maps.places.Autocomplete(dp);
				
				//Get starting Place address lat & long
				delivery_place.addListener('place_changed',function(){
					var from_place = delivery_place.getPlace();
					 
					var from_address = from_place.formatted_address;
					//set straing address
					$('#origan').val(from_address);
					$('#address_lat_long').val(from_place.geometry.location);
					
				});
		   });
	} 
	
	$(document).ready(function(e) { initialize() });
 
</script>

<!-- Google map api -->
<script src="https://maps.googleapis.com/maps/api/js?language=en&key=AIzaSyDyNGdERaDY8nlApHPWpYhSA9kXBqDLMQE&libraries=places&callback=initMap"
        async defer></script>


<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>

<!-- pdf jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.debug.js" integrity="sha384-THVO/sM0mFD9h7dfSndI6TS0PgAGavwKvB5hAxRRvc0o9cPLohB0wb/PTA7LdUHs" crossorigin="anonymous"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);  
</script>
 
 
<!-- Select2 -->
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="plugins/input-mask/jquery.inputmask.js"></script>
<script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
 
<!-- daterangepicker -->

<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<!-- bootstrap color picker -->
<script src="bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>

<!-- bootstrap time picker -->
<script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
 
 
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
 
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- CK Editor -->
<script src="bower_components/ckeditor/ckeditor.js"></script>
<script>
  $(function () {
  $('#example1').DataTable({'ordering'    : false})
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

<!--Start Custom Js---->
<script src="dist/js/menu.js"></script>
<script src="dist/js/home_page.js"></script>
<script src="dist/js/top_custom.js"></script>

<!--End Custom Js---->

<script>
 $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    

    
	
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
	
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

     
	 
    
    

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

  })
 
 $(function () {
	 //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    });
 });
 
 
 $(function () {
	  CKEDITOR.replace('page_content')
	  CKEDITOR.replace('editor1')
 });
</script>

 

</body>
</html>