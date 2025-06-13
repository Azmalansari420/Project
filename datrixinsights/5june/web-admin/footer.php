    
   </div>
    </div>

    <script src="assets/js/vendor.js"></script>

    <script src="assets/js/app.min.js"></script>
    
    

    <!-- page js -->
    <script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="assets/vendor/jquery.sparkline/jquery.sparkline.min.js"></script>
    <script src="assets/js/dashboard/default.js"></script>
     <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
    
<!--    <script src="https://redacademy.in/assets/vendor/datatables/jquery.dataTables.min.js"></script>-->
<!--<script src="https://redacademy.in/assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>-->



<!-- <script src="https://redacademy.in/assets/admin/js/jquery.dataTables.min.js"></script>  -->
<!--<script src="https://redacademy.in/assets/vendor/excel/dataTables.buttons.min.js"></script>-->
<!--<script src="https://redacademy.in/assets/vendor/excel/jszip.min.js"></script>-->
<!--<script src="https://redacademy.in/assets/vendor/excel/pdfmake.min.js"></script>-->
<!--<script src="https://redacademy.in/assets/vendor/excel/vfs_fonts.js"></script>-->
<!--<script src="https://redacademy.in/assets/vendor/excel/buttons.html5.min.js"></script>-->




<!-- Page level custom scripts -->
<!--<script src="https://redacademy.in/assets/js/demo/datatables-demo.js"></script>-->

// <script>
//         $(document).ready(function() {
//             $('#table_data').DataTable( {
//                 "bSort": true,
//                 dom: 'Bfrtip',
//                 buttons: [
//                     'copyHtml5',
//                     'excelHtml5',
//                     'csvHtml5',
//                     'pdfHtml5'
//                 ]
//             } );
//         });
//     </script>
    
    
<script type="text/javascript">
  //add more listing images
$(document).on('click','.add_more_product_images',function(){ 
  var apend_img = "<div class='col-sm-12 innermultiimg' id='innermultiimg'><div class='col-sm-4'><input type='file' id='multi_product_images' accept='image/*' name='multi_product_images[]' class='form-control'><span id='show_img__error'></span></div><br><span class='remove_more_product_images'>Remove </span></div>";
  $('.outmultiimg').append(apend_img);
});
//Remove images option
$(document).on('click','.remove_more_product_images',function(){
    var revome_img = $(this).parent().remove();

});

</script>
<script type="text/javascript">
   
    $(document).on('change','.category',function(){
        var cat_id = $(this).val();
        if(cat_id !== ""){
            $.ajax({
                url : 'ajax/ajax_to_php.php',
                method :'POST',
                data :{cate_id : cat_id},
                success :function(abc){
                    $('#sub_cate_id').html(abc);
                }
            });
        }

    });

</script>
<script type="text/javascript">
     function fill(Value) {

   //Assigning value to "search" div in "search.php" file.

   $('#search').val(Value);

   //Hiding "display" div in "search.php" file.

   $('#display').hide();

}
    $(document).ready(function() {

   //On pressing a key on "Search box" in "search.php" file. This function will be called.

   $("#search").keyup(function() {

       //Assigning search box value to javascript variable named as "name".

       var name = $('#search').val();

       //Validating, if "name" is empty.

       if (name == "") {

           //Assigning empty value to "display" div in "search.php" file.

           $("#display").html("");

       }

       //If name is not empty.

       else {

           //AJAX is called.

           $.ajax({

               //AJAX type is "Post".

               type: "POST",

               //Data will be sent to "ajax.php".

               url: "ajax/ajax_to_php.php",

               //Data, that will be sent to "ajax.php".

               data: {

                   //Assigning value of "name" into "search" variable.

                   search: name

               },

               //If result found, this funtion will be called.

               success: function(html) {

                   //Assigning result to "display" div in "search.php" file.

                   $("#display").html(html).show();
                   
               }

           });

       }

   });

});
</script>

<script src="select2/select2.full.min.js"></script>
                <!-- Footer START -->
<script type="text/javascript">
  $(function () { 
//Initialize Select2 Elements 
$('.select2').select2() 
}); 
</script> 
</body>


</html>