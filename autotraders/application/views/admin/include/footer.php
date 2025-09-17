  <footer class="iq-footer">
        <div class="container-fluid">
            <div class="row">
              
                <div class="col-lg-12 text-center">
                    <span class="mr-1">
                        © <a href="<?php echo base_url(); ?>" target="_blank" class=""><?php echo website_name; ?></a>. All Rights Reserved.
                    </span>
                </div>
            </div>
        </div>
    </footer>   
     <!-- Backend Bundle JavaScript -->
    <script src="<?php echo base_url(); ?>media/admin/js/backend-bundle.min.js"></script>
    <!-- Chart Custom JavaScript -->
    <script src="<?php echo base_url(); ?>media/admin/js/customizer.js"></script>
    
    <script src="<?php echo base_url(); ?>media/admin/js/sidebar.js"></script>
    
    <!-- Flextree Javascript-->
    <script src="<?php echo base_url(); ?>media/admin/js/flex-tree.min.js"></script>
    <script src="<?php echo base_url(); ?>media/admin/js/tree.js"></script>
    
    <!-- Table Treeview JavaScript -->
    <script src="<?php echo base_url(); ?>media/admin/js/table-treeview.js"></script>
    
    <!-- SweetAlert JavaScript -->
    <script src="<?php echo base_url(); ?>media/admin/js/sweetalert.js"></script>
    
    <!-- Vectoe Map JavaScript -->
    <script src="<?php echo base_url(); ?>media/admin/js/vector-map-custom.js"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="<?php echo base_url(); ?>media/admin/js/chart-custom.js"></script>
    <script src="<?php echo base_url(); ?>media/admin/js/charts/01.js"></script>
    <script src="<?php echo base_url(); ?>media/admin/js/charts/02.js"></script>
    
    <!-- slider JavaScript -->
    <script src="<?php echo base_url(); ?>media/admin/js/slider.js"></script>
    
    <!-- Emoji picker -->
    <script src="<?php echo base_url(); ?>media/admin/vendor/emoji-picker-element/index.js" type="module"></script>
    
    
    <!-- app JavaScript -->
    <script src="<?php echo base_url(); ?>media/admin/js/app.js"></script> 

    <!-- -------ck editor----------- -->
    <script src="//cdn.ckeditor.com/4.19.0/full/ckeditor.js"></script>



    <script>
        function readURL(input) 
        {
            if (input.files && input.files[0]) 
            {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $("#blah").css("display","block");
                    $('#blah').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
         $("#imgInp").change(function()
         {
            readURL(this);
        });
    </script>