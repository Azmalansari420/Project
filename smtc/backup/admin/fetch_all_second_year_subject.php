
<?php
include_once("../lib/all_files.php");

//select fetch course id
$sc_id = @$_GET['sc_id'];
if(isset($sc_id) and !empty($sc_id) and is_numeric($sc_id)){
	$s_w = array('id'=>$sc_id);
	$s_n = fs('course',$s_w);
	
	if(is_array($s_n) || is_object($s_n)){
		        $s_n_sub = $s_n->second_year_subject;
		        $arsd = explode(',',$s_n_sub);
				if(is_array($arsd) || is_object($arsd)){
					$che_s_array = array();
					foreach($arsd as $a){
						
						$s_w = array('id'=>$a);
						$s_n = fs('subject',$s_w);
						$che_s_array[] = $s_n->id;
					}
				} 
	}
}


$i=1;
$gst_list = $con->all_fetch("subject",array('status'=>'Yes'),"order by name asc");
if (is_array($gst_list) || is_object($gst_list)){
  foreach($gst_list as $g){
	$q_id	     = $g->id;
	
		
?>
	<div class="col-sm-2">
		<div class="form-group">
			<label class="checkbox-inline">
			<?php if(in_array($q_id,$che_s_array)){ ?>
			<input type="checkbox" checked name="subject_series[]" value="<?php e($q_id); ?>">
			<?php e($g->name); ?>	
			<?php }else{ ?>
			<input type="checkbox" name="subject_series[]" value="<?php e($q_id); ?>">
			<?php e($g->name); ?>
			<?php } ?>
			
			</label> 
		</div>
	</div>
				
<?php  } } ?>
