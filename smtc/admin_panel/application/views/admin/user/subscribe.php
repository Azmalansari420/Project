<?php $this->load->view('admin/header');?>
  

<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
        <h4 class="page-title">All Subscription  List</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">All Subscription List</li>
         </ol>
     </div>
    
     </div>
 


      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
          
                  
            </div>

                 
            <div class="card-body">

              <div class="table-responsive">
            <table id="example" class="table table-bordered table-striped">
                <thead>
          <tr>
            <th>SNo.</th>
          
            <th>Email</th>
           
            <th>Create Date</th>
           
          </tr>
                </thead>
        <?php if(count($RESULT)>0){ ?>
                <tbody>
        <?php $no=0; foreach($RESULT as $record){ $no++; ?>     
          <tr>
            <td width="7%"><?php echo $no; ?></td>
            
           
            <td><?php echo $record->email; ?></td>

            <td><?php echo $record->create_date; ?></td>
           
          
          </tr>
        <?php } ?>  
                </tbody> 
        <?php } ?>  
            </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->

    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
    <!--End Back To Top Button-->
  
  
<?php $this->load->view('admin/footer');?>