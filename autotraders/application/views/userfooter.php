<div class="footer_part">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-lg-12 col-sm-12">
                     <div class="footer_iner text-center">
                        <p>2022 © Autotraders -</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <script src="<?php echo base_url(); ?>user/js/jquery1-3.4.1.min.js"></script>
      <script src="<?php echo base_url(); ?>user/js/popper1.min.js"></script>
      <script src="<?php echo base_url(); ?>user/js/bootstrap1.min.js"></script>
      <script src="<?php echo base_url(); ?>user/js/metisMenu.js"></script>
      <script src="<?php echo base_url(); ?>user/vendors/count_up/jquery.waypoints.min.js"></script>
      <script src="<?php echo base_url(); ?>user/vendors/chartlist/Chart.min.js"></script>
      <script src="<?php echo base_url(); ?>user/vendors/count_up/jquery.counterup.min.js"></script>
      <script src="<?php echo base_url(); ?>user/vendors/swiper_slider/js/swiper.min.js"></script>
      <script src="<?php echo base_url(); ?>user/vendors/niceselect/js/jquery.nice-select.min.js"></script>
      <script src="<?php echo base_url(); ?>user/vendors/owl_carousel/js/owl.carousel.min.js"></script>
      <script src="<?php echo base_url(); ?>user/vendors/gijgo/gijgo.min.js"></script>
      <script src="<?php echo base_url(); ?>user/vendors/datatable/js/jquery.dataTables.min.js"></script>
      <script src="<?php echo base_url(); ?>user/vendors/datatable/js/dataTables.responsive.min.js"></script>
      <script src="<?php echo base_url(); ?>user/vendors/datatable/js/dataTables.buttons.min.js"></script>
      <script src="<?php echo base_url(); ?>user/vendors/datatable/js/buttons.flash.min.js"></script>
      <script src="<?php echo base_url(); ?>user/vendors/datatable/js/jszip.min.js"></script>
      <script src="<?php echo base_url(); ?>user/vendors/datatable/js/pdfmake.min.js"></script>
      <script src="<?php echo base_url(); ?>user/vendors/datatable/js/vfs_fonts.js"></script>
      <script src="<?php echo base_url(); ?>user/vendors/datatable/js/buttons.html5.min.js"></script>
      <script src="<?php echo base_url(); ?>user/vendors/datatable/js/buttons.print.min.js"></script>
      <script src="<?php echo base_url(); ?>user/js/chart.min.js"></script>
      <script src="<?php echo base_url(); ?>user/vendors/progressbar/jquery.barfiller.js"></script>
      <script src="<?php echo base_url(); ?>user/vendors/tagsinput/tagsinput.js"></script>
      <script src="<?php echo base_url(); ?>user/vendors/text_editor/summernote-bs4.js"></script>
      <script src="<?php echo base_url(); ?>user/vendors/apex_chart/apexcharts.js"></script>
      <script src="<?php echo base_url(); ?>user/js/custom.js"></script>
      <script src="<?php echo base_url(); ?>user/js/active_chart.js"></script>
      <script src="<?php echo base_url(); ?>user/vendors/apex_chart/radial_active.js"></script>
      <script src="<?php echo base_url(); ?>user/vendors/apex_chart/stackbar.js"></script>
      <script src="<?php echo base_url(); ?>user/vendors/apex_chart/area_chart.js"></script>
      <script src="<?php echo base_url(); ?>user/vendors/apex_chart/bar_active_1.js"></script>
      <script src="<?php echo base_url(); ?>user/vendors/chartjs/chartjs_active.js"></script>

<script>
function reffer_link() {
  // Get the text field
  var copyText = document.getElementById("reffer_link");

  // Select the text field
  copyText.select();
  // copyText.setSelectionRange(0, 99999); // For mobile devices

  // Copy the text inside the text field
  navigator.clipboard.writeText(copyText.value);
  
  // Alert the copied text
  // alert("Copied the text: " + copyText.value);
}
</script>


<script>
            var options = {
                colors: ['#A66DD4'],
                series: [{
                    name: 'Day wise',
                    type: 'column',
                    data: <?=$total_day_income_json ?>,
                }],
                chart: {
                    height: 265,
                    type: 'line',
                    toolbar: {
                        show: false
                    }
                },
                stroke: {
                    width: [0, 4]
                },
                dataLabels: {
                    enabled: false,
                    enabledOnSeries: [1]
                },
                legend: {
                    show: false
                },
                labels: <?=$total_day_in_month_json ?>,
                
                yaxis: [{
                    title: {},
                }, {
                    opposite: true,
                    title: {}
                }]
            };
            var chart = new ApexCharts(document.querySelector("#bar_active"), options);
            chart.render();
         </script>

         <script>
             function copyToClipboard(element) {
                  var $temp = $("<input>");
                  $("body").append($temp);
                  $temp.val($(element).text()).select();
                  document.execCommand("copy");
                  $temp.remove();
                  alert("Copied..");
                }
         </script>

   </body>
</html>