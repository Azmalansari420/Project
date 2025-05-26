
<form action="<?=base_url('check-status');?>" method="GET">
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Employee Code:</label>
    <input type="text" class="form-control" id="email" placeholder="Enter Employee Code" name="emp_code">
  </div>
 
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php if(isset($_GET['emp_code'])) {
$codedes=getdatasingle('tbl_media',array('status'=>'1','emp_code'=>$_GET['emp_code']));
//echo "<pre>";
//print_r($codedes);
$student=getdatabyslug('tbl_student',array('status'=>'1','emp_code'=>$_GET['emp_code']));
if($codedes) { 
$new_description= str_replace(array_in(),array_out(),$codedes->description); 

?>
<a target="_blank" href="<?=base_url('home/icard?emp='.$codedes->emp_code.'');?>">Icard</a>
<?php if($student) { foreach($student as $values) { ?>
</br><a target="_blank" href="<?=base_url('home/salary_slip?m='.$values->title.'&emp='.$values->emp_code.'');?>">Salary Slip (<?=$values->title;?>)</a>
<?php } } ?>
<?php } } ?>