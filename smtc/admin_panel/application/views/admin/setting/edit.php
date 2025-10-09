

<?php $this->load->view('admin/header');?>
  <!-- Content Wrapper. Contains page content -->
 
<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">
    <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
            <h4 class="page-title">Edit Setting</h4>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo  base_url('admin/Dashboard')  ?>">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="<?php echo  base_url('setting/listing')  ?>">Setting </a></li>
            <li class="breadcrumb-item">Edit New </li>
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
        <div class="col-lg-2"> </div>
      <div class="col-lg-8">
        <div class="card">
           <div class="card-body">
           <div class="card-title"></div>
          
                                    <?=$this->session->flashdata('msg')?>

           <hr>
           <form role="form" method="post" id="form" autocomplete="off"  enctype="multipart/form-data">
              <div class="box-body">

                 <div class="form-group" style="    background: aliceblue;padding: 20px">
                                <div class="form-group">
                                <label for="exampleInputEmail1">logo</label>
                                <input type="file" class="form-control" name="logo">
                                <input type="hidden" name="old_file" value="<?php echo $RESULT[0]->logo; ?>" >
                                <?php if(!empty($RESULT[0]->logo)){ ?>
                                <img src="<?php echo base_url('uploads/logo/').$RESULT[0]->logo; ?>" width="20%">
                                <?php } ?>
                              </div>

                       </div>

  
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Project/Website  Name</label>
                  <input type="text" class="form-control" name="title" value="<?php echo $RESULT[0]->title; ?>"
                      placeholder="Enter Project/Website  Name " required>
                  <?php echo form_error('title'); ?> </div> 

                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="text" class="form-control" name="email" value="<?php echo $RESULT[0]->email; ?>"
                      placeholder="Enter Email ">
                  <?php echo form_error('email'); ?> 
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Phone</label>
                  <input type="text" class="form-control" name="phone" value="<?php echo $RESULT[0]->phone; ?>"
                      placeholder="Enter Phone ">
                </div>

                 <div class="form-group">
                  <label for="exampleInputEmail1">Alt Email</label>
                  <input type="text" class="form-control" name="email2" value="<?php echo $RESULT[0]->email2; ?>"
                      placeholder="Enter Email ">
                  <?php echo form_error('email'); ?> </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Alt Phone</label>
                  <input type="text" class="form-control" name="phone2" value="<?php echo $RESULT[0]->phone2; ?>"
                      placeholder="Enter Phone ">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Address Content</label>
                  <input type="text" class="form-control" name="address_content" value="<?php echo $RESULT[0]->address_content; ?>"
                      placeholder="Enter Address Content ">
                </div>
              
                <div class="form-group">
                  <label for="exampleInputEmail1">Marquee</label>
                  <textarea class="form-control" name="marquee"><?php echo $RESULT[0]->marquee; ?></textarea>
                
                </div>
             
            
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="submitform">Submit</button>
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
  $('#append_image').append('<span class="row fille_group"><div class="col-md-5"><input type="file" class="form-control" name="image[]" ></div><div class="col-md-3" style="padding-bottom:5px"><a class="btn btn-danger removedata"><i class="fa fa-fw fa-trash"></i></a></div><span>');
}

function remove_image(IMG_ID,IMG,TYPE)

{

  var confirm_event = confirm('are you sure you want to delete this image?');
  if(confirm_event==true)
  {
    $.ajax({

      url:'<?php echo base_url('admin/Setting/image_delete'); ?>',

      type:'POST',

      data:{'id':IMG_ID,'image':IMG},

      success: function(response)

      {

        if(response==1)

        {

          $(".pro_img"+IMG_ID).fadeOut(300, function(){ $(this).remove(); });

        }

        if(response==0)

        {

          alert('oops somthing wrong!');  

        } 

      }

    });

  }   

}




$(document).ready(function(){
$(".chosen-control").chosen();
});
</script>