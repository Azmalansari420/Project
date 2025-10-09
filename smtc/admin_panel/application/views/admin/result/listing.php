<?php $this->load->view('admin/header');?>   
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
              <h4 class="page-title">All  Result  List</h4>
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">All  Result  List</li>
               </ol>
           </div>
    
     </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <div class="row">
                 <div class="col-lg-4">
                      <a href="<?php echo base_url('result/add_new/') ;  ?>"> 
                     <button type="submit" class="btn btn-primary" name="submitform">Add New Result  </button>
                    </a></div>
                   <div class="col-lg-6">
                    <?=$this->session->flashdata('msg')?>
                  </div>

              </div>
                  
            </div>
            <div class="card-body">


		  <div class="table-responsive">
							<table id="example" class="table table-bordered table-striped">
                <thead>
					<tr>
						<th></th>
					
						<th>Enroll-No</th>
						<th>Course</th>
					
						<th>Semester</th>
						<th>Grade</th>  
						<th>Result</th>  
						<th>Month/Year</th>  
						<th>Create Date</th>  
						<th>Action</th>	
					</tr>
                </thead>
				<?php if(count($RESULT)>0){
				 ?>

                <tbody>
				<?php $no=0; foreach($RESULT as $record){ $no++; 

					 $courserow = $this->db->get_where('tbl_course' ,  array('id' =>  $record->course_id))->row_array();  ?>			


					<tr>
						<td width="5%"><?php echo $no; ?></td>
						<td><?php echo $record->eno  ?></td>
						<td><?php echo $courserow['title']   ?></td>
						<td><?php echo $record->semester  ?></td>
						<td><?php echo $record->grade  ?></td>
						<td><?php echo $record->result  ?></td>
						<td><?php echo $record->month  ?> /<?php echo $record->year  ?></td>
					   <td><?php echo date('d-M-Y' ,strtotime($record->create_date) ) 	 ?></td>
				
					
						<td >
							<a href="<?php echo base_url('result/edit/'.$record->id); ?>" class="btn  btn-success btn-xs" title="View Result"><i class="fa fa-fw fa-eye"></i></a>
							<a href="<?php echo base_url('result/delete_result/'.$record->id); ?>" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger btn-xs" title="Delete Result"><i class="fa fa-fw fa-trash"></i></a>
						</td>	
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
<?php $this->load->view('admin/footer'); ?>

</body>
</html>

