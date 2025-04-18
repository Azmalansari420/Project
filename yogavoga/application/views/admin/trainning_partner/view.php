<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title><?php echo $page_title; ?> Enquiry View</title>
      
     <?php $this->load->view('admin/include/css'); ?>  
      
</head>
  <body class="  ">
    <!-- loader Start -->
    <?php echo loder; ?> 
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
                                    <li class="breadcrumb-item active" aria-current="page"><?php echo $page_title; ?> Enquiry</li>
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
                    <h4 class="font-weight-bold d-flex align-items-center"><?php echo $page_title; ?> Enquirys</h4>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                               
                                <div class="col-md-12">
                                    <form class="row g-3 date-icon-set-modal">
                                        <div class="col-md-12 mb-3">
                                            <label for="Text1" class="form-label font-weight-bold text-muted text-uppercase">Name</label>
                                            <input type="text" class="form-control" name="name" value="<?php echo $EDITDATA[0]->name; ?>" disabled>
                                        </div>

                                        <div class="col-md-12 mb-3">
                                            <label for="Text3" class="form-label font-weight-bold text-muted text-uppercase">mobile</label>
                                            <input type="text" class="form-control" name="mobile" value="<?php echo $EDITDATA[0]->mobile; ?>" disabled>
                                        </div>

                                       
                                        <div class="col-md-12 mb-3">
                                            <label for="Text3" class="form-label font-weight-bold text-muted text-uppercase">Emergency Details</label>
                                            <input type="text" class="form-control" name="emergency_details" value="<?php echo $EDITDATA[0]->emergency_details; ?>" disabled>
                                        </div>

                                        

                                        <div class="col-md-12 mb-3">
                                            <label for="Text3" class="form-label font-weight-bold text-muted text-uppercase">Aadhar Card</label>
                                            <br>
                                            <a href="<?php echo $EDITDATA[0]->aadhar_card; ?>" target="_blank">
                                                <img src="<?php echo base_url(); ?>media/uploads/trainning_partner/<?php echo $EDITDATA[0]->aadhar_card; ?>">
                                            </a>
                                        </div>

                                        <div class="col-md-12 mb-3">
                                            <label for="Text3" class="form-label font-weight-bold text-muted text-uppercase">Yoga Certificate</label>
                                            <br>
                                            <a href="<?php echo $EDITDATA[0]->yoga_certificate; ?>" target="_blank">
                                                <img src="<?php echo base_url(); ?>media/uploads/trainning_partner/<?php echo $EDITDATA[0]->yoga_certificate; ?>">
                                            </a>
                                        </div>
                                                                            
                                    </form>
                                
                                </div>
                            </div>
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
  CKEDITOR.replace( 'message' );
</script>

  </body>
</html>