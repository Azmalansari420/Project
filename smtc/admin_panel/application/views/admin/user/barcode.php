
   <!-- Custom scripts -->

<?php $this->load->view('admin/header');?>             

<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">
    <!-- Breadcrumb-->
    <div class="row pt-2 pb-2">
        <div class="col-sm-9">
        <h4 class="page-title">All Student List</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
            <li class="breadcrumb-item " aria-current="page"><a href="<?php echo base_url('user/all/') ?>">All Student</a> </li>
           
            <li class="breadcrumb-item active" aria-current="page">Generate Barcode</li>
         </ol>
     </div>
     </div>
     <style type="text/css">
       .ng-hide{
          display: none;
       }
     </style>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
               <div class="card-body">
                    <div class="card-title"> <?php echo $this->session->flashdata('msg'); ?></div>
                    <form class="form-horizontal post" action="<?php echo base_url('user/') ; ?>generate_barcode_new" method="post">
                        <div class="row">
             
                          
                            <div class="form-group col-sm-12" id="year">
                                <label for="exampleInputEmail1">Student <span class="error"> * </span> </label>
                                <div class="form-group">
                       
                                        <select class="form-control" name="user_id" required>
                                            <option value=""> --Select  Student-- </option>
                                            <?php foreach($user as $key=>$value){ ?>
                                                <option value="<?php echo $value->id  ; ?>" ><?php echo ucwords($value->reg_id ) ; ?>&nbsp;|&nbsp;<?php echo ucwords($value->name) ; ?> &nbsp;|&nbsp; <?php echo $value->email ; ?>&nbsp;| &nbsp;<?php echo $value->mobile ; ?> </option>
                                            <?php } ?>
                                        </select>
                                        
                                    </div>
                            </div>
                  
                        </div>
                        <hr>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-danger btn-lg" name="generate_barcode ">Generate Barcode </button>
                            </div>
                        </div>
                    </form>
       
              
               </div>
            </div>
        </div>
    </div><!--End Row-->


    </div>
  </div>
<?php $this->load->view('admin/footer');?>
<script>

 
function addImage()
{ 
  $('#append_image').append('<div class="fille_group row" style="margin-bottom: 10px;padding: 10px;""><div class="col-md-2"><input type="text" class="form-control" name="subjectName[]" required Placeholder=""></div><div class="col-md-2"><input type="number" class="form-control" name="subjet_max_marks[]" required placeholder=""></div><div class="col-md-1"><input type="number" class="form-control" name="subjet_marks_theory_first[]" required placeholder=""></div><div class="col-md-1"><input type="number" class="form-control" name="subjet_marks_theory_second[]" required placeholder=""></div><div class="col-md-2"><input type="number" class="form-control" name="subjet_marks_pratical[]"  placeholder=""></div><div class="col-md-2"><input type="number" class="form-control" name="total_marks[]" required placeholder=""></div><div class="col-md-2"></div></div>');
}

</script>

