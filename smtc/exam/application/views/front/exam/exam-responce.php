<!DOCTYPE html>
<?php $link = $this->setting_model->get_all_setting();?>
<html lang="en">
<head>
  <title>Mock Test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/front/css/exam.css') ?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url('assets/processbar/') ?>jQuery-plugin-progressbar.css">
  <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="<?php echo base_url('assets/processbar/') ?>jQuery-plugin-progressbar.js"></script>
  <style type="text/css">
    .table-bordered>thead>tr>td, .table-bordered>thead>tr>th {
    border-bottom-width: 2px;
    font-size: 12px;
}
  </style>
</head>
<body>
<div class="tophead">
  <div class="container">
  <div class="row">
    <div class="col-sm-3 col-xs-5" >
      <center>
               <a  href="<?php echo base_url('') ?>">   <img src="<?php echo $this->config->item('site_url').'/admin_panel/uploads/logo/'.$link[0]->logo ?>" style="width:100px"></a>
      </center>
    </div>
   
   
    <div class="col-sm-9 col-xs-7"> 
      <div class="pull-right">
         <a href="<?php echo base_url('user/logout'); ?>"  style="color: #ffff" > Logout</a>
      </div>
     </div>
  </div>
</div>
</div>
  
<div class="container content-justify-center">    
  <div class="row content">

    <div class="col-sm-12">
      <br>
      <br>
      <br>

      <h3 class="text-center"><?php echo $exam['title'] ?></h3>
          <br>
      <br>
      <br>
    </div>



      <div class="col-sm-12">  

          <table  class="table table-bordered text-center" style="margin: auto;">
            <thead>
              <tr>
                <th class="text-center">Total Question</th>
                <th class="text-center">Attempt Question</th>
               
                
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><?php echo $exam['totalQues'] ;  ?></td>
                <td><?php echo $exam['totalAttemptQue'] ;  ?></td>
              </tr>
            </tbody>
          </table> 
          <br>
          <br>
          <center>
                 <a href="<?php echo base_url('user/logout'); ?>"  class="btn btn-primary bnt-large"  > Logout</a>
          </center>
       
         
    </div>

  </div>
</div>

<footer class="container-fluid text-center footer">

</footer>
</body>
</html>
