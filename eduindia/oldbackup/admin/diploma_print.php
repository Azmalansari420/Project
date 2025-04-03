<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="UTF-8">
	<title>Document</title>
    <link href="diploma.css" rel="stylesheet">
    <style>
    .barcode_set{    width: 38%;
    float: left;
    padding: 70px 0 0 467px;
    }
    </style>
</head>
<body>
<section class="diploma" style="background:none;">
<div class="r_top">
	<div class="sno"><span><?php e($fs->oauth_uid);?></span></div>
    <div class="regno"><span><?php e($fs->reg_id);?></span></div>
</div>



<div class="student_details">
	<div class="this_is_certified_that_mr"><span><?php e($fs->first_name);?></span></div>
    <div class="son_daughter"><span><?php e($fs->father_name);?></span></div>
    
    <div class="successful_pass"><span><?php echo id_to_name('course',$fs->course_id); ?></span></div>
    <div class="odw_row">
        <div class="of"><span> <?php echo id_to_name('course',$fs->course_id,"c_time"); ?> <?php echo dmy(id_to_name('course',$fs->course_id,"c_time_type")); ?> </span></div>    
        <div class="duration_on"><span><?php e($fs->join_date);?></span>  <span style="margin-left:70px"><?php echo date("Y-m-d", strtotime($re_issue_date));?></span></div>
        <div class="with_grade"><span>A</span></div>
    </div>
    
    
    <div class="from"><span><?php echo id_to_name('branch',$fs->user_add_by_id,'b_name'); ?></span></div>
    <div class="issued_under"><span><?php e($issue_date); ?></span></div>
     <div class="barcode_set">
        <?php echo $barcode; ?>
    </div> 
    
</div>

</section>
	
</body>
</html>