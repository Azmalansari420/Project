<?php $this->load->view('admin/header');?>
<div class="clearfix"></div>
<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumb-->
    <div class="row pt-2 pb-2">
      <div class="col-sm-9">
        <h4 class="page-title">All Exam List</h4>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">All Exam List</li>
        </ol>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-lg-4">
                <a href="<?php echo base_url('exam/add_new/') ;  ?>">
                  <button type="submit" class="btn btn-primary" name="submitform">Add New Exam</button>
                </a>
              </div>
              <div class="col-lg-6">
                <?=$this->session->flashdata('msg')?> </div>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="example" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>SNo.</th>
                    <th>Title</th>
                    <th>Course</th>
                    <th>Semester</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <?php if(count($RESULT)>0){ ?>
                <tbody>
                  <?php $no=0; foreach($RESULT as $record){ $no++; ?>
                    <?php $rows = $this->exam_model->rowof_question_by_exam_id( $record->id) ?> 
                  <tr>
                    <td>
                      <?php echo $no; ?>
                    </td>
              
                    <td><?php echo $record->title; ?></td>
                    <td><?php echo $record->category; ?></td>
                    <td><?php echo $record->semester; ?></td>
                    <td>
                      <?php if($record->status==1){ ?> <span class="label label-success">Lived</span>
                      <?php }else{ ?> <span class="label label-danger">Not Lived</span>
                      <?php }?> </td>
                    <td> 
                      <a href="<?php echo base_url('exam/addExamQues/'.$record->id); ?>" class="btn  btn-info btn-xs">Add  Que</a> 
                      <a href="<?php echo base_url('exam/questionlisting/'.$record->id); ?>" class="btn  btn-info btn-xs">View  Ques (<?php echo $rows ?> ) </a>
                      <a href="<?php echo base_url('exam/edit/'.$record->id); ?>" class="btn  btn-warning btn-xs"><i class="fa fa-fw fa-edit"></i></a>

                      <a href="<?php echo base_url('exam/prodelete/'.$record->id); ?>" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger btn-xs"><i class="fa fa-fw fa-trash"></i></a> </td>
                  </tr>
                  <?php } ?> </tbody>
                <?php } ?> </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Row-->
  </div>
  <!-- End container-fluid-->
</div>
<!--End content-wrapper-->
<!--End Back To Top Button-->
<?php $this->load->view('admin/footer');?>
