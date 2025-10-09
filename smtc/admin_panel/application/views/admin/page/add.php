<?php $this->load->view('admin/header');?>
  <!-- Content Wrapper. Contains page content -->
 <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
//<![CDATA[
   
         bkLib.onDomLoaded(function() {
        new nicEditor().panelInstance('summernoteEditor');
        
  });
     
  //]]>
  </script>

  
<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">
    <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
            <h4 class="page-title">Add page</h4>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo  base_url('Dashboard')  ?>">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="<?php echo  base_url('page/listing')  ?>">page </a></li>
            <li class="breadcrumb-item">Add New </li>
         </ol>
       </div>
      
     </div>
     <style type="text/css">
       .ng-hide{
          display: none;
       }
     </style>
    <!-- End Breadcrumb-->


    <div class="row">

      <div class="col-lg-12">
        <div class="card">
           <div class="card-body">
           <div class="card-title"></div>
          
                                    <?=$this->session->flashdata('msg')?>

           <hr>
            <form  method="post" class="login_validator" id="login_validator"  enctype="multipart/form-data" style="padding: 15px"> 

           <div class="box-body">

 
                  <div class="row mar0" style="padding: 10px">
                      


                        <div class="col-sm-6">
                            <div class="form-group mar10bot">
                         
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" class="form-control" name="title"  placeholder="Enter Title" value="<?php echo set_value('title'); ?>" onkeyup="return set_slug(this.value);"  required="">          
                              </div>
                              <?php echo form_error('title'); ?>
                           
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mar10bot">
                               <label for="exampleInputEmail1">Url Slug</label>

                              <input type="text" class="form-control" name="url_slug" id="url_slug" readonly value="<?php echo set_value('url_slug'); ?>">

                               <?php echo form_error('url_slug'); ?> 
                            </div>
                        </div> 
                        <div class="col-sm-6">
                            <div class="form-group mar10bot">
                               <label for="exampleInputEmail1">Youtube link</label>

                              <input type="text" class="form-control" name="youtube_link" id="youtube_link"  value="<?php echo set_value('youtube_link'); ?>">

                               <?php echo form_error('youtube_link'); ?> 
                            </div>
                        </div> 
                        <div class="col-sm-6">

                           <div class="form-group" style="    background: aliceblue;padding: 20px">
                           <div class="form-group">
                                <label for="exampleInputEmail1">Image</label>
                                <input type="file" class="form-control" name="image" >          
                              </div>
  
                          </div>
                        </div>
                   
                </div>       


              
                <div class="row mar0" style="padding: 10px">
                   
                        <div class="col-sm-12">


                              <div class="form-group mar10bot">
                                   <label for="exampleInputEmail1"> Short Description</label>
                                  <textarea class="form-control"  name="description" placeholder="Enter description"> <?php echo set_value('description'); ?></textarea>
                              </div>  

                              <div class="form-group mar10bot">
                                   <label for="exampleInputEmail1">Full Description</label>
                                  <textarea class="form-control" id="summernoteEditor2"  name="description" placeholder="Enter description"> <?php echo set_value('description'); ?></textarea>
                              </div>

                             

                            
                              <div class="form-group mar10bot">
                                  <label for="exampleInputEmail1">Meta Title</label>
                                  <input type="text" class="form-control" name="meta_title" value=""  placeholder="Enter Meta Title">
                                  <?php echo form_error('meta_title'); ?>
                              </div>
                              <div class="form-group mar10bot">
                                  <label for="exampleInputEmail1">Meta Keyword</label>
                                  <input type="text" class="form-control" name="meta_keyword"  placeholder="Enter meta Keywords" value="">
                                    <?php echo form_error('meta_keyword'); ?>
                              </div>
                              <div class="form-group mar10bot">
                                  <label for="exampleInputEmail1">Meta description</label>

                                  <textarea class="form-control" name="meta_description"  cols="5" ></textarea>
                                 
                                    <?php echo form_error('meta_description'); ?>
                              </div>

                  
                              <div class="form-group mar10bot">
                                      <label for="exampleInputPassword1">Status</label>
                                      <select class="form-control" name="status" required>
                                        <option value='1' >Active</option>
                                        <option value='0' >Inactive</option>
                                     </select>
                               </div>
                        </div>
                      

                </div>
                
                
                <hr style="margin: 10px 0px;border-color: #eee;">
            
               
                  
                     <button type="submit" name="submitform" class="btn btn-primary btn-lg">  Submit </button>
                    
                 

            </div>

          </form>
         </div>
         </div>
      </div>
    </div><!--End Row-->


    </div>
  </div>
<?php $this->load->view('admin/footer');?>
   <!-- Custom scripts -->

<script>

 
function addImage()
{ 
  $('#append_image').append('<span class="row fille_group"><div class="col-md-5"><input type="file" class="form-control" name="image[]" required></div><div class="col-md-3" style="padding-bottom:5px"><a class="btn btn-danger removedata"><i class="fa fa-fw fa-trash"></i></a></div><span>');
}


$(document).ready(function(){
$(".chosen-control").chosen();
});
</script>

<script class="example">





function set_slug(VALUE)

{

  //alert(VALUE);

  $("#url_slug").val(string_to_slug(VALUE));

}



function string_to_slug(str) {

    str = str.replace(/^\s+|\s+$/g, ''); // trim

    str = str.toLowerCase();  

    // remove accents, swap ñ for n, etc

    var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";

    var to   = "aaaaeeeeiiiioooouuuunc------";

    for (var i=0, l=from.length ; i<l ; i++) {

        str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));

    }

    str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars

        .replace(/\s+/g, '-') // collapse whitespace and replace by -

        .replace(/-+/g, '-'); // collapse dashes

    return str;

}

</script>
<script>
   $('#summernoteEditor2').summernote({
            height: 400,
            tabsize: 2
        });
  </script>