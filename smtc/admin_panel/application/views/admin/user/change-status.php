<?php $this->load->view('admin/header');?>
  <!-- Content Wrapper. Contains page content -->
 <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
//<![CDATA[
   
         bkLib.onDomLoaded(function() {
        new nicEditor().panelInstance('summernoteEditor');
        
  });
     
  //]]>
  </script>
<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">
    <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
            <h4 class="page-title">Change User Assigned Exam Status</h4>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo  base_url('Dashboard')  ?>">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="">Change User Assigned Exam Status </a></li>
            
         </ol>
       </div>
      
     </div>
     <style type="text/css">
       .ng-hide{
          display: none;
       }
     </style>
    <!-- End Breadcrumb-->


    <div class="row">

      <div class="col-lg-6">
        <div class="card">
           <div class="card-body">
           <div class="card-title"></div>
          
                                    <?=$this->session->flashdata('msg')?>

           <hr>
            <form  method="post" class="login_validator" id="login_validator"  enctype="multipart/form-data" style="padding: 15px"> 

           <div class="box-body">

            <h6>Exam:  <?php echo $Exam['title'] ; ?> </h6>
            <h6>Student Name:  <?php echo $user['name'] ; ?> </h6>
            <h6>Enrollment No:  <?php echo $user['reg_id'] ; ?> </h6>

             
              
                <div class="row mar0" style="padding: 10px">
                   
                        <div class="col-sm-12">
                  
                              <div class="form-group mar10bot">
                                      <label for="exampleInputPassword1">Status</label>
                                      <select class="form-control" name="status" required>
                                        <option value='Active'  <?php  echo (($userExam['status'] == "Active" ) ?"selected" : "" ) ?>>Active</option>
                                        <option value='Inactive' <?php  echo (($userExam['status'] == "Inactive" ) ?"selected" : "" ) ?> >Inactive</option>
                                        <option value='Exam Held' <?php  echo( ($userExam['status'] == "Exam Held" ) ?"selected" : "" ) ?> >Process</option>
                                        <option value='Process' <?php  echo( ($userExam['status'] == "Process" ) ?"selected" : "" ) ?> >Process</option>
                                     </select>
                               </div>
                        </div>
                      

                </div>
                
                
                <hr style="margin: 10px 0px;border-color: #eee;">
            
               
                  
                     <button type="submit" name="submitform" class="btn btn-primary btn-lg">  Submit </button>
                    
                 

            </div>

          </form>
         </div>
         </div>
      </div>
    </div><!--End Row-->


    </div>
  </div>
<?php $this->load->view('admin/footer');?>
   <!-- Custom scripts -->
