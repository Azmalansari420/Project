<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Edit <?php echo $page_title; ?></title>
      <?php $this->load->view('admin/include/allcss') ?>

   </head>
   <body>
       <?php echo loder; ?> 
      <div id="app" class="app app-header-fixed app-sidebar-fixed ">


          <?php $this->load->view('admin/include/header') ?>
          <?php $this->load->view('admin/include/sidebar') ?>


         
         <div id="content" class="app-content">
            <div class="d-flex align-items-center justify-content-between mb-3">
               <div>
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>">Home</a></li>
                     <li class="breadcrumb-item active"><i class="fa fa-arrow-back"></i> Edit <?php echo $page_title; ?></li>
                  </ol>
                  <h1 class="page-header mb-0">Edit <?php echo $page_title; ?></h1>
               </div>
                <div>
                  <button onclick="history.back();" class="btn btn-primary">Back</button>
               </div>
            </div>



               <form  class="row" method="post" enctype="multipart/form-data" action="#">
                  <div class="col-lg-8">
                     <div class="card border-0 mb-4">
                        <div class="card-header h6 mb-0 bg-none p-3">
                           <i class="fa fa-fa fa-lg fa-fw text-dark text-opacity-50 me-1"></i> Content
                        </div>
                        <div class="card-body">
                           <div class="row">
                              <div class="col-lg-6 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Country Name</label>
                                    <input type="text" class="form-control" name="name"  value="<?php echo $EDITDATA[0]->name; ?>">
                                 </div>
                              </div>

                              <div class="col-lg-6 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title" value="<?php echo $EDITDATA[0]->title; ?>">
                                 </div>
                              </div>
                              
                              <div class="col-lg-12 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Content</label>
                                    <textarea class="form-control" name="content" id="editor"  placeholder="Enter text ..." rows="12"><?php echo $EDITDATA[0]->content; ?></textarea>
                                 </div>
                              </div>


                              <div class="col-md-12">
                                <h2 class="mb-3" style="font-size: 20px;">Documnent</h2>                               
                                <ul id="add-more-field" style="padding: 0;">
                                    <?php  
                                        $data = array();
                                        $count = 1;
                                        if(!empty($EDITDATA[0]->document))
                                        {
                                            $document = json_decode($EDITDATA[0]->document);
                                            $count = count($document);
                                        }
                                        
                                        $i=0;
                                        while($i<$count)
                                        {
                                            $data['i'] = $i;
                                            if(!empty($document))
                                            {
                                                $data['document'] = $document[$i];
                                            }
                                            $this->load->view("admin/country/add-document",$data);
                                            $i++;
                                        }
                                       ?>
                                 </ul>
                                 <div class="col-md-12 text-right mt-3">
                                    <input type="button" class="btn btn-sm btn-secondary" id="add-more-btn" value="Add card">
                                 </div>
                               </div>

                              <div class="col-md-12 mt-4">
                                <h2 class="mb-3" style="font-size: 20px;">Non Documnent</h2>                               
                                <ul id="add-more-field2" style="padding: 0;">
                                    <?php  
                                        $data = array();
                                        $count = 1;
                                        if(!empty($EDITDATA[0]->nondocument))
                                        {
                                            $nondocument = json_decode($EDITDATA[0]->nondocument);
                                            $count = count($nondocument);
                                        }
                                        
                                        $i=0;
                                        while($i<$count)
                                        {
                                            $data['i'] = $i;
                                            if(!empty($nondocument))
                                            {
                                                $data['nondocument'] = $nondocument[$i];
                                            }
                                            $this->load->view("admin/country/add-nondocument",$data);
                                            $i++;
                                        }
                                       ?>
                                 </ul>
                                 <div class="col-md-12 text-right mt-3">
                                    <input type="button" class="btn btn-sm btn-secondary" id="add-more-btn2" value="Add card">
                                 </div>
                               </div>

                              




                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="col-lg-4">
                      <div class="card border-0 mb-4">
                        <div class="card-header h6 mb-0 bg-none p-3">
                           <i class="fa fa-fa fa-lg fa-fw text-dark text-opacity-50 me-1"></i> Upload Image
                        </div>
                        <div class="card-body">
                           <div class="row">

                           
                              <div class="col-lg-12 mb-3">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Select Country Type</label>
                                    <select class="form-select" name="type" id="colorselector">
                                       <option value="1"  <?php if($EDITDATA[0]->type==1)echo 'selected'; ?>>Top Country</option>
                                       <option value="2" <?php if($EDITDATA[0]->type==2)echo 'selected'; ?>>Other Country</option>
                                    </select>
                                 </div>
                              </div>

                              <div class="col-lg-12 mb-4" id="divid" style="display:<?php if($EDITDATA[0]->type==1){echo 'block';}else{echo 'none'; } ?>;">
                                 <div class="mb-lg-0 mb-3 bg-light">
                                    <label class="form-label"style="width: 100%;text-align: center; position: relative;border: 1px solid aliceblue;">Upload image
                                       <img id="blah" src="<?php echo base_url($upload_path); ?><?php echo $EDITDATA[0]->image; ?>" class="sd" style="width: 100%; height: 100%; position: relative; top: -22px;">
                                       <input  type="hidden" class="form-control" name="oldimage" value="<?php echo $EDITDATA[0]->image; ?>">
                                       <input style="display: none;" type="file" class="form-control" name="image"  id="imgInp">
                                   </label>
                                 </div>
                              </div>
                           
                              <div class="col-lg-12 mb-3">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Status</label>
                                    <select class="form-select" name="status">
                                       <option value="">-- Select Status --</option>
                                       <option value="1"  <?php if($EDITDATA[0]->status==1)echo 'selected'; ?>>Show</option>
                                       <option value="0" <?php if($EDITDATA[0]->status==0)echo 'selected'; ?>>Hide</option>
                                    </select>
                                 </div>
                              </div>

                              <div class="col-lg-12 mb-4 text-center">
                                 <div class="mb-lg-0 mb-3">
                                    <button class="btn btn-primary d-block" type="submit" name="submit">
                                       Update <?php echo $page_title; ?>
                                   </button>
                                 </div>
                              </div>

                              
                             
                           </div>
                        </div>
                     </div>                  
                  </div>
               </form>
           
         </div>
       
      </div>



   <?php $this->load->view('admin/include/footer') ?>
<script>
   CKEDITOR.replace('editor');

 var i = 1;
    $(document).on("click", "#add-more-btn",(function(e) {
        var button = $(this);
        $(button).attr("disabled",true);
        $(button).val("Wait...");
        var html =  ``;
        $.ajax({
        url : "<?php echo base_url('admin_con/country/addmore_document'); ?>",
        method : "POST",
        data : {i:i},
            success: function(data)
            {
                console.log(data);
                $("#add-more-field").append(data);
                $(button).attr("disabled",false);
                $(button).val("Add");
                const choies = document.querySelectorAll('.choicesjs')
                Array.from(choies,(elem) => {
                    new Choices(elem, {
                        removeItemButton: true,
                    })
                });
                i++;
            }
        });
    }));
    $(document).on("click", ".remove-btn",(function(e) {
        $(this).parent().parent().remove();
    }));
     $(document).ready(function(){
        $(document).on("click", ".remove-multi",(function(e) {
            $(this).parent().remove();
        }));
    });


 var i = 1;
    $(document).on("click", "#add-more-btn2",(function(e) {
        var button = $(this);
        $(button).attr("disabled",true);
        $(button).val("Wait...");
        var html =  ``;
        $.ajax({
        url : "<?php echo base_url('admin_con/country/addmore_nondocument'); ?>",
        method : "POST",
        data : {i:i},
            success: function(data)
            {
                console.log(data);
                $("#add-more-field2").append(data);
                $(button).attr("disabled",false);
                $(button).val("Add");
                const choies = document.querySelectorAll('.choicesjs')
                Array.from(choies,(elem) => {
                    new Choices(elem, {
                        removeItemButton: true,
                    })
                });
                i++;
            }
        });
    }));
    $(document).on("click", ".remove-btn",(function(e) {
        $(this).parent().parent().remove();
    }));
     $(document).ready(function(){
        $(document).on("click", ".remove-multi",(function(e) {
            $(this).parent().remove();
        }));
    });





$(document).ready(function(){
    $('#colorselector').on('change', function() {
      if ( this.value == '1')
      {
        $("#divid").show();
      }
      else
      {
        $("#divid").hide();
      }
    });
});











</script>
   </body>
</html>