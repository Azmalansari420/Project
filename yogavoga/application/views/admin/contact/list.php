<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title><?php echo $page_title; ?> list</title>
      
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
                    <div class="d-flex flex-wrap align-items-center justify-content-between my-schedule mb-4">
                       <div class="d-flex align-items-center justify-content-between">
                            <h4 class="font-weight-bold"><?php echo $page_title; ?></h4>
                        </div>  

                                       
                    </div>                
                    <div class="row">
                        <div class="col-lg-12">
                            <?php echo $this->session->flashdata('message') ?>

                            <div class="card card-block card-stretch">
                                <div class="card-body p-0">
                                    <div class="d-flex justify-content-between align-items-center p-3">
                                        <h5 class="font-weight-bold">Enquiry List</h5>
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table data-table mb-0">
                                            <thead class="table-color-heading">
                                                <tr class="">
                                                    <th scope="col">#</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Subject</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Mobile</th>
                                                    <th scope="col" class="text-right">Action</th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                                <?php $i=0;
                                                    foreach($ALLDATA as $data)
                                                     { $i++; 

                                                     ?> 
                                                <tr class="white-space-no-wrap">
                                                    <td class="pr-0 "><?php echo $i; ?></td>
                                                    <td><?php echo $data->name; ?></td>
                                                    <td><?php echo $data->subject; ?></td>
                                                    <td><?php echo $data->email; ?></td>
                                                    <td><?php echo $data->mobile; ?></td>

                                                    <td>
                                                        <div class="d-flex justify-content-end align-items-center">

                                                            <!-- ---View--------- -->
                                                            <a href="<?php echo $view_url.$data->id; ?>" class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="View" >
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary mx-4" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                                </svg>
                                                            </a>
                                                            <!----delete--------- -->
                                                            <a href="<?php echo $delete_url.$data->id; ?>" class="badge bg-danger delete" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>

                                              <?php } ?>
                                              
                                            </tbody>
                                        </table>
                                    </div>
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

 </body>
</html>