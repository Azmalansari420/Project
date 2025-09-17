<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title><?php echo $page_title; ?> Edit</title>
      
     <?php $this->load->view('admin/include/css'); ?>  
      
</head>
  <body class="  ">
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
                    </div>
                </div>
                <div class="col-lg-12 mb-3 d-flex justify-content-between">
                    <h4 class="font-weight-bold d-flex align-items-center">Edit <?php echo $page_title; ?></h4>
                </div>



                <div class="col-lg-12">
				<?php echo $this->session->flashdata('message') ?>
                    <div class="card">
                        <div class="card-body">
                            <!-- <div > --> 
                            	<form class="row" method="post" enctype="multipart/form-data">
	                                <div class="col-md-3 mb-3">
	                                    <div class="card-body rounded bg-light">
	                                        <label class="form-label"style="width: 100%;text-align: center; position: relative;border: 1px solid aliceblue;">Upload logo
	                                            <img id="blah" src="<?php echo base_url($upload_path); ?><?php echo $EDITDATA[0]->logo; ?>" class="sd" style="width: 100%; height: 100%; position: relative; top: -22px;">
	                                            <input  type="hidden" class="form-control" name="oldimage" value="<?php echo $EDITDATA[0]->logo; ?>">
												<input style="display: none;" type="file" class="form-control" name="logo"  id="imgInp">
	                                        </label>
	                                    </div>
	                                </div>

	                                <div class="col-md-9">
	                                    <div class="row g-3 date-icon-set-modal">
	                                        <div class="col-md-6 mb-3">
	                                            <label for="mobile" class="form-label font-weight-bold text-muted text-uppercase">Mobile</label>
	                                            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile" value="<?php echo $EDITDATA[0]->mobile; ?>">
	                                        </div>

	                                        <div class="col-md-6 mb-3">
	                                            <label for="alt" class="form-label font-weight-bold text-muted text-uppercase">Alt Mobile</label>
	                                            <input type="text" class="form-control" id="alt" name="alt_mobile" placeholder="Enter Alt Mobile" value="<?php echo $EDITDATA[0]->alt_mobile; ?>">
	                                        </div>

	                                        <div class="col-md-6 mb-3">
	                                            <label for="email" class="form-label font-weight-bold text-muted text-uppercase">Email</label>
	                                            <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email" value="<?php echo $EDITDATA[0]->email; ?>">
	                                        </div>


	                                        <div class="col-md-6 mb-3">
	                                            <label for="Text4" class="form-label font-weight-bold text-muted text-uppercase">Alt Email</label>
	                                            <input type="text" class="form-control" id="Text4" name="alt_email" placeholder="Enter Alt Email" value="<?php echo $EDITDATA[0]->alt_email; ?>">
	                                        </div>

	                                        <div class="col-md-12 mb-3">
	                                            <label for="add" class="form-label font-weight-bold text-muted text-uppercase" name="address">Address</label>
	                                            <textarea class="form-control" id="add" rows="4" placeholder="Enter Address" name="address"><?php echo $EDITDATA[0]->address; ?></textarea>
	                                        </div>

	                                        <div class="col-md-6 mb-3">
	                                            <label for="Text7" class="form-label font-weight-bold text-muted text-uppercase">Facebook</label>
	                                            <input type="text" class="form-control" id="Text7" placeholder="Enter Facebook" name="facebook" value="<?php echo $EDITDATA[0]->facebook; ?>">
	                                        </div>

	                                        <div class="col-md-6 mb-3">
	                                            <label for="Text7" class="form-label font-weight-bold text-muted text-uppercase">Instagram</label>
	                                            <input type="text" class="form-control" id="Text7" placeholder="Enter Instagram" name="instagram" value="<?php echo $EDITDATA[0]->instagram; ?>">
	                                        </div>

	                                        <div class="col-md-6 mb-3">
	                                            <label for="Text7" class="form-label font-weight-bold text-muted text-uppercase">Twitter</label>
	                                            <input type="text" class="form-control" id="Text7" placeholder="Enter Twitter" name="twitter" value="<?php echo $EDITDATA[0]->twitter; ?>">
	                                        </div>

	                                        <div class="col-md-6 mb-3">
	                                            <label for="Text7" class="form-label font-weight-bold text-muted text-uppercase">Youtube</label>
	                                            <input type="text" class="form-control" id="Text7" placeholder="Enter youtube" name="youtube" value="<?php echo $EDITDATA[0]->youtube; ?>">
	                                        </div>

	                                        <div class="col-md-12 mb-3">
	                                            <label for="Text9" class="form-label font-weight-bold text-muted text-uppercase" name="address">Map</label>
	                                            <textarea class="form-control" id="Text9" rows="4" placeholder="Enter Map" name="map"><?php echo $EDITDATA[0]->map; ?></textarea>
	                                        </div>


	                                        <div class="d-flex flex-wrap justify-content-between mt-3">
		                                        <button type="submit" name="submit" class="btn btn-primary font-weight-bold btn-sm">
		                                            Submit
		                                        </button>
		                                    </div>


	                                                                           
	                                    </div>
	                                    
	                                </div>
	                            </form>
                            <!-- </div> -->
                        </div>
                    </div>                
                </div>
            </div>
        </div>

      </div>
    </div>
    <!-- Wrapper End-->
   <?php $this->load->view('admin/include/footer'); ?>

  </body>
</html>