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
          <div class="row card-header">
            <div class="col-sm-4">
              <h5><?php echo $exam[0]->title; ?></h5> </div>
            <div class="col-sm-4">
              <?=$this->session->flashdata('msg')?> </div>
            <div class="col-sm-4"> <a href="<?php echo base_url('exam/addExamQues/'.$exam[0]->id); ?>" class="btn  btn-warning btn-xs"><i class="fa fa-fw fa-edit"></i>Add Exam Que</a> </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="example" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>SNo.</th>
                    <th>Question</th>
                    <th>Marks</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <?php if(count($RESULT)>0){ ?>
                <tbody>
                  <?php $no=0; foreach($RESULT as $record){ $no++; ?>
                  <tr>
                    <td width="7%">
                      <?php echo $no; ?>
                    </td>
                    <td>
                      <?php echo $record->question; ?></td>
                    <td>
                      <?php echo $record->marks; ?></td>
                  
                    <td>
                      <?php if($record->status==1){ ?> <span class="label label-success">Active</span>
                      <?php }else{ ?> <span class="label label-danger">Inactive</span>
                      <?php }?> </td>
                    <td> <a href="<?php echo base_url('exam/editExamQuestion/'.$exam[0]->id.'/'.$record->id); ?>" class="btn  btn-info btn-xs"><i class="fa fa-fw fa-edit"></i></a> <a href="<?php echo base_url('exam/ExamQuesdelete/'.$exam[0]->id.'/'.$record->id); ?>" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger btn-xs"><i class="fa fa-fw fa-trash"></i></a> </td>
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
