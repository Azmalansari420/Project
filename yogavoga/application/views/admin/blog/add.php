<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title><?php echo $page_title; ?> Add</title>
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
                                    <li class="breadcrumb-item active" aria-current="page">Add <?php echo $page_title; ?></li>
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
                    <h4 class="font-weight-bold0 d-flex align-items-center">Add New <?php echo $page_title; ?></h4>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <form method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-3 mb-3">
                                        <div class="card-body rounded bg-light">
                                            <label class="form-label"style="width: 100%;text-align: center; position: relative;border: 1px solid aliceblue;">Upload image
                                                <img id="blah" src="#" class="sd" style="display: none;width: 100%; height: 100%; position: relative; top: -22px;">
                                                <input style="display: none;" type="file" class="form-control" name="image"  id="imgInp">
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-9">
                                        <div class="row g-3 date-icon-set-modal">

                                            <div class="col-md-12 mb-3">
                                                <label  class="form-label font-weight-bold text-muted text-uppercase">Name</label>
                                                <input type="text" name="name" class="form-control"  placeholder="Enter Name">
                                            </div>

                                            
                                            <div class="col-md-12 mb-3">
                                                <label  class="form-label font-weight-bold text-muted text-uppercase">Content</label>
                                                <textarea class="form-control" name="content" rows="5" placeholder="Enter Content"></textarea>
                                            </div>

                                            

                                            <div class="col-md-12 mb-3">
                                                <label  class="form-label font-weight-bold text-muted text-uppercase">Status</label>
                                                <select id="inputState" name="status" class="form-select form-control choicesjs">
                                                    <option value="1" selected>Show</option>
                                                    <option value="0">Hide</option>
                                                </select>
                                            </div>

                                            
                                                                           
                                        </div>
                                        <div class="d-flex justify-content-end mt-3">
                                            <button class="btn btn-primary" type="submit" name="submit">
                                                Add <?php echo $page_title; ?>
                                            </button>
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