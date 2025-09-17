<?php
$wallet = $this->crud->selectDataByMultipleWhere('wallet',array('user_id'=>$EDITDATA[0]->id,)); 
$sponser = $this->crud->selectDataByMultipleWhere('registration',array('user_id'=>$EDITDATA[0]->sponser_id,)); 

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title><?php echo $page_title; ?> Edit</title>

      <?php $this->load->view('admin/include/css'); ?>  
     
    </head>
  <body class="  ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center"></div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
      <?php $this->load->view('admin/include/sidebar'); ?>

      <?php $this->load->view('admin/include/topbar'); ?>

      <div class="content-page">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                       <div class="d-flex align-items-center justify-content-between">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb p-0 mb-0">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard');?>">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit <?php echo $page_title; ?></li>
                                </ol>
                            </nav>
                        </div>
                        
                        <a href="<?php echo $back_url; ?>" class="btn btn-primary btn-sm d-flex align-items-center justify-content-between">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-2">Back</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-12 mb-3 d-flex justify-content-between">
                    <h4 class="font-weight-bold0 d-flex align-items-center">Edit <?php echo $page_title; ?></h4>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <form method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-3 mb-3">
                                        <div class="card-body rounded bg-light">
                                            <label class="form-label"style="width: 100%;text-align: center; position: relative;border: 1px solid aliceblue;">Upload image
                                                <img id="blah" src="<?php echo base_url($upload_path); ?><?php echo $EDITDATA[0]->image; ?>" class="sd" style="width: 100%; height: 100%; position: relative; top: -22px;">
                                                <input  type="hidden" class="form-control" name="oldimage" value="<?php echo $EDITDATA[0]->image; ?>">
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-9">
                                        <div class="row g-3 date-icon-set-modal">

                                            <div class="col-md-6 mb-3">
                                                <label  class="form-label font-weight-bold text-muted text-uppercase">Refferd By</label>
                                                <input type="text" name="password" class="form-control"  value="<?php if(!empty($sponser[0]->username)){ echo $sponser[0]->username;}else{echo 'Not Refferd';} ?>" disabled>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label  class="form-label font-weight-bold text-muted text-uppercase">Username</label>
                                                <input type="text" name="username" class="form-control"  value="<?php echo $EDITDATA[0]->username; ?>" disabled>
                                            </div>


                                            <div class="col-md-6 mb-3">
                                                <label  class="form-label font-weight-bold text-muted text-uppercase">Mobile</label>
                                                <input type="text" name="mobile" class="form-control"  value="<?php echo $EDITDATA[0]->mobile; ?>" disabled>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label  class="form-label font-weight-bold text-muted text-uppercase">Email</label>
                                                <input type="text" name="email" class="form-control"  value="<?php echo $EDITDATA[0]->email; ?>" disabled>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label  class="form-label font-weight-bold text-muted text-uppercase">Password</label>
                                                <input type="text" name="password" class="form-control"  value="<?php echo $EDITDATA[0]->password; ?>" disabled>
                                            </div>


                                            <div class="col-md-6 mb-3">
                                                <label  class="form-label font-weight-bold text-muted text-uppercase">Total Amount</label>
                                                <input type="text"class="form-control"  value="<?php echo $wallet[0]->total_amount; ?>" disabled>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label  class="form-label font-weight-bold text-muted text-uppercase">Principle Amount</label>
                                                <input type="text" class="form-control"  value="<?php echo $wallet[0]->principal_amt; ?>" disabled>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label  class="form-label font-weight-bold text-muted text-uppercase">Refferal Amount</label>
                                                <input type="text" class="form-control"  value="<?php echo $wallet[0]->refferal_amt; ?>" disabled>
                                            </div>


                                           

                                             
                                            
                                            
                                                                           
                                        </div>
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
    <!-- Wrapper End-->
   <?php $this->load->view('admin/include/footer'); ?>

<script>
  CKEDITOR.replace( 'content' );
</script>
    </body>

</html>