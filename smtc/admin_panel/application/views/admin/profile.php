<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
        <h4 class="page-title">Admin Profile</h4>
        <ol class="breadcrumb">
            
            <li class="breadcrumb-item active" aria-current="page">Admin Profile</li>
         </ol>
     </div>
     
     </div>
    <!-- End Breadcrumb-->
<?php $link = $this->setting_model->get_all_setting();?>
      <div class="row">


        <div class="col-lg-12">

           <div class="card">
            <BR>
             <?=$this->session->flashdata('msg')?><BR>
            <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#profile" data-toggle="pill" class="nav-link active"><i class="icon-user"></i> <span class="hidden-xs">Profile</span></a>
                </li>
               
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link"><i class="icon-note"></i> <span class="hidden-xs">Edit</span></a>
                </li>
                 <li class="nav-item">
                    <a href="javascript:void();" data-target="#Password" data-toggle="pill" class="nav-link"><i class="icon-note"></i> <span class="hidden-xs">Change Password</span></a>
                </li>
            </ul>
            <div class="tab-content p-3">
                <div class="tab-pane active" id="profile">
                    <h5 class="mb-3">Admin Profile</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Name</h6>
                            <p>
                                <?php echo $result['name']?>
                            </p> 
                              <h6>Email</h6>
                            <p>
                                <?php echo $result['email']?>
                            </p>
                          
                           
                           
                        </div>
                       
                       
                    </div>
                    <!--/row-->
                </div>
             
                <div class="tab-pane" id="edit">
                    <form method="post">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"> Name</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="name" type="text" value="<?php echo $result['name']?>">
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="email" type="text" value="<?php echo $result['email']?>">
                            </div>
                        </div>
                    
                      
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                                <input type="reset" class="btn btn-secondary" value="Cancel">
                                <input type="submit" class="btn btn-primary" value="Save Changes">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="tab-pane" id="Password">

                    <form class="form-horizontal post" action="<?php echo base_url('dashboard/changepassword') ;  ?>" method="post" id="changepassword_form">
                            <table>
                                <tr>
                                    <td><strong>New Password: </strong></td>
                                    <td><input type="password" name="npwd" class="form-control" value="" required></td>
                                </tr>
                                <tr>
                                    <td><strong>Confirm Password: </strong></td>
                                    <td><input type="password" name="opwd" class="form-control" value="" required></td>
                                </tr>                               
                            </table> 
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                  <button type="submit" class="btn btn-danger" name="update_password">Submit</button>
                                </div>
                            </div>
                        </form>
                  
                </div>
            </div>
        </div>
      </div>
      </div>
        
    </div>

    </div>
    <script class="example">
$(document).ready(function(){ 
    $('#profile_form').parsley();
   
    $('#dispaypass').click(function(){
        var check_event = $(this).html();
        if(check_event=='show')
        {
            $('.hidden_password').prop('type','text');
            $(this).html('hide');
        }
        else
        {
            $('.hidden_password').prop('type','password');
            $(this).html('show');
        }
    });
    
});
</script>