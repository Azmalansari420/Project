<!-- html -->
    <div class="col-lg-12 col-12 form-group">
         <label class="form-label">Image *</label>
         <div class="images">
             <?php 
                 $file_data = array(
                     "position"=>3,
                     "columna_name"=>"image",
                     "multiple"=>false,
                     "accept"=>'image/*',
                     "col"=>"col-md-12",
                     "alt_text"=>"none",
                     "row"=>$row,
                 );
                 $this->load->view('upload-multiple/index',$file_data);
             ?>
         </div>
     </div>
<!-- html end -->


<!-- controller -->
$this->load->model('Image_model');
    $all_image_column_names = array("image");
            $return_image_array = $this->Image_model->upload_image($all_image_column_names);
            if(!empty($return_image_array))
            {
                foreach ($return_image_array as $key => $value)
                {
                    $user_data[$key] = $value;
                }
            }
<!-- controller end -->