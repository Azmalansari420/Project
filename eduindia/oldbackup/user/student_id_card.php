<?php 

include_once("include/topmenu.php");


//Vender Count and live and status
$all_branch_count  = $con->all_count('branch');
$all_user_count    = $con->all_count('user_register');
$all_institute     = $con->all_count('institutes');  
 

 
 

?>

<style type="text/css">
.custombody{
}
</style>

  <!-- Content Wrapper. Contains page Content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
 <!-- Small boxes (Stat box) -->
<div style="width:400px !important; background:#fff !important; border:1px solid #ededed !important; height:248px!important; margin:0 auto;">
<div class="bgimg">
<img class="img-responsive" src="images/edu.png"style="">
</div>
       
<div style="margin-top:-256px;padding:10px;overflow:hidden;">

<table>
<thead>
<tr>
<td style="width:70%;"><img src="images/logo-1.png" style="float: left;margin-top:-50px;"></td>
<td style="width:30%;"><img width="69" height="89" src="<?php e(AUP.$fs->picture);?>" style="float:right;margin-left: 30px;"></td>
</tr>
</thead>
</table>
<table style="margin-top:-42px;">
<tbody>
<tr>
<td style="width:30%;"><strong>Student Name &nbsp;&nbsp; &nbsp;&nbsp;:<strong></td>
<td style="width:70%;"><span style="color:#000; display:block; font-size:12px;font-weight:600;"><?php e($fs->first_name);?></span></td>
</tr>
<tr>
<td style="width:30%;"><strong>Father Name &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;:<strong></td>
<td style="width:70%;"><span style="color:#000; display:block; font-size:12px;font-weight:600;"><?php e($fs->father_name);?> </span></td>
</tr>
<tr>
<td style="width:30%;"><strong>Course &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;:<strong></td>
<td style="width:70%;"><span style="color:#000; display:block; font-size:12px;font-weight:600;"><?php echo id_to_name('course',$fs->course_id); ?></span></td>
</tr>
<tr>
<td style="width:30%;"><strong>Address &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<strong></td>
<td style="width:70%;"><span style="color:#000; display:block; font-size:12px;font-weight:600;"><?php e($fs->address.",".id_to_name('state',$fs->state));?></span></td>
</tr>
<tr>
<td style="width:30%;"><strong>Admission Date &nbsp;&nbsp; :<strong></td>
<td style="width:70%;"><span style="color:#000; display:block; font-size:12px;font-weight:600;"><?php e($fs->join_date);?></span></td>
</tr>
<tr>
<td style="width:30%;"><strong>Training Center &nbsp;&nbsp; :<strong></td>
<td style="width:70%;"><span style="color:#000; display:block; font-size:12px;font-weight:600;"><?php echo id_to_name('branch',$fs->user_add_by_id,'b_name'); ?></span></td>
</tr>
<tr>
<td style="width:30%;"><strong>Registration No.&nbsp; :<strong></td>
<td style="width:70%;"><span style="color:#000; display:block; font-size:12px;font-weight:600;"><?php e($fs->reg_id);?></span></td>
</tr>
<tr>
<td style="width:30%;"><strong>Valid Date &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; :<strong></td>
<td style="width:70%;"><span style="color:#000; display:block; font-size:12px;font-weight:600;"><?php e($issue_date); ?></span><span><div style="float:right; margin-top:-39px;">
<span>Seal & Sign.</span>
<br />

<span>Authority</span>

</div></span></td>
</tr>
</tbody>
</table>

</div>
</div>



</div>


</div>
</div>
    </section> 
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
<?php include_once('include/footer.php');?>


v