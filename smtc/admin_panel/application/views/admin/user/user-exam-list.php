<?php $this->load->view('admin/header');?>
  

<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">


                 
            <div class="card-body">
            		<div class="row">
          		
          		<div class="col-sm-2">
          			 <center>
							         <img src="<?php echo base_url('uploads/user/').$user[0]->photo ?>" style="width:80px;height:80px" >
							    
							         <p>     <br>
							      <?php if($user[0]->status==1){ ?>
								<a href="#" class="btn btn-success btn-block"><b>Active</b></a>
								<?php }else{ ?>
								<a href="#" class="btn btn-danger btn-block"><b>Inactive</b></a>
								<?php } ?></p>	
					</center>

          		</div>
          		<div class="col-sm-6">
          			<h6> Enrollment Number :  <b><?php echo $user[0]->reg_id ?></b></h6>
          			<h6> Name : <b><?php echo $user[0]->name ?></b> </h6>
          			<h6> Course : <b><?php echo $user[0]->course ?></b> </h6>
          		</div>
          		<div class="col-sm-4">
          			<h6> Gender :  <b><?php echo $user[0]->gender ?> </b>	</h6>
          			
          		</div>
          	</div>

			<?php echo $this->session->flashdata('msg'); ?>
                 <table id="example" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>SNo.</th>
                    <th>Exam</th>
                    <th>Semester</th>
                    <th>Total Time (h:m)</th>
                    <th>Attempt Date-time</th>
                    <th>Status</th>
                    <th>Total Marks</th>
                    <th>O/B Marks</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <?php if(count($examlist)>0){ ?>
                <tbody>
                  <?php $no=0; foreach($examlist as $record){ $no++; ?>
                  
                  <tr>
                    <td>
                      <?php echo $no; ?>
                    </td>
              
                    <td><?php echo $record->title; ?></td>
                    <td><?php echo $record->semester; ?></td>
                    <td><?php echo date('H:i', strtotime($record->totalTime)); ?></td>
                   
                    <td><?php echo date('d-m-Y', strtotime($record->date)); ?>
                      <br>
                      <?php echo date('h:i A', strtotime($record->startTime)); ?>-<?php echo date('h:i A', strtotime($record->endTime)); ?>
                    </td>
                  
                    <td><?php echo $record->status; ?></td>
                    <td><?php echo $record->totalMarks; ?></td>
                    <td><?php echo $record->obtained_marks; ?></td>
                  
                
                    <td> 
             <?php if($record->status == "Completed"){ ?>
                      <a href="<?php echo base_url('user/viewExamAnswersheet/'.$record->id); ?>"  target="_blank" title="View Answer Sheet"> View </a>
                   <?php   } ?>
                      </td>
                  </tr>
                  <?php } ?> </tbody>
                <?php } ?> </table>
            </div>
		</div>
    </section>
    <!-- /.content -->
</div>
  <!-- /.content-wrapper -->  
<?php $this->load->view('admin/footer'); ?>
