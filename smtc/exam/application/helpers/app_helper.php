<?php
function create_slug($string)
{
   $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
   return strtolower($slug);
}

function get_timeago($ptime)
{
    $estimate_time = time() - $ptime;
    if( $estimate_time < 1 )
    {
        return 'less than 1 second ago';
    }
    $condition = array( 
                12 * 30 * 24 * 60 * 60  =>  'year',
                30 * 24 * 60 * 60       =>  'month',
                24 * 60 * 60            =>  'day',
                60 * 60                 =>  'hour',
                60                      =>  'minute',
                1                       =>  'second'
    );
    foreach( $condition as $secs => $str )
    {
        $d = $estimate_time / $secs;
        if( $d >= 1 )
        {
            $r = round( $d );
            //return 'about ' . $r . ' ' . $str . ( $r > 1 ? 's' : '' ) . ' ago';
			return  $r . ' ' . $str . ( $r > 1 ? 's' : '' ) . ' ago';
        }
    }
}

function get_date_with_time($date)
{
	return date('d-m-Y h:i:A',strtotime($date));
}

function encode_url($str)
{
	return $str; //urlencode(base64_encode($str));
}

function decode_url($str)
{
	return $str; //urldecode(base64_decode($str));
}

function get_cat_id($str)
{
	$create_array = explode('_',$str);
	return $create_array[1];
}

function create_image_unique($file_name)
{
	$array = explode('.',$file_name);
	$file_extension = end($array);
	$new_file = substr(str_shuffle('12345678910'),0,1).str_shuffle(time()).substr(str_shuffle('12345678910'),0,1).'.'.$file_extension;
	return $new_file;
}

function image_extension($file_name)
{
	$array = explode('.',$file_name);
	$file_extension = end($array);
	return $file_extension;
}

function check_profile_pic($dir,$file)
{
	if(is_file($dir.$file))
	{
		return base_url($dir).$file;
	}
	else
	{
		return base_url("assets/front/images/")."default-avatar.png";
	}
}

function delete_file($dir,$file)
{
	if(is_file($dir.$file))
	{
		return unlink($dir.$file);
	}	
}

function admin_caregory_breadcrumbs($data)
{
	if($data=='Root')
	{
		echo '<strong>Root</strong>';
	}
	else
	{
		echo $data;
	}	
}

function home_slider_class($no)
{
	if($no%2==0)
	{
		return 'slide_style_left';
	}
	else
	{
		return 'slide_style_right';
	}
	//slide_style_center
}

function inclusions( $values = array() ) {
	$options = array(
		'validate' => array(
							array(
								'type' => 'header_js',
								'value' => 'assets/js/validator'
							),
						),
		'datepicker' => array(
							array(
								'type' => 'css',
								'value' => 'assets/datepicker/datetimepicker.min'
							),
							array(
								'type' => 'js',
								'value' => 'assets/datepicker/moment.min'
							),
							array(
								'type' => 'js',
								'value' => 'assets/datepicker/datetimepicker.min'
							)
						),
		'chart' => array(
							array(
								'type' => 'header_js',
								'value' => 'assets/chart/charts'
							),
							array(
								'type' => 'header_js',
								'value' => 'assets/chart/light'
							),
							array(
								'type' => 'header_js',
								'value' => 'assets/chart/serial'
							)
						),
		'jquery-ui' => array(
							array(
								'type' => 'js',
								'value' => 'assets/js/jquery-ui.min'
							),
						),
		'jquery-browser' => array(
							array(
								'type' => 'header_js',
								'value' => 'assets/js/jquery-browser'
							)
						),
		'fancybox' => array(
							array(
								'type' => 'js',
								'value' => 'assets/fancybox/jquery.fancybox'
							),
							array(
								'type' => 'js',
								'value' => 'assets/js/jquery-browser'
							),
							array(
								'type' => 'css',
								'value' => 'assets/fancybox/jquery.fancybox'
							),
						),
		'datatable' => array(
							array(
								'type' => 'header_js',
								'value' => 'assets/datatables/jquery.dataTables.min'
							),
							array(
								'type' => 'header_js',
								'value' => 'assets/datatables/dataTables.bootstrap.min'
							),
							array(
								'type' => 'header_js',
								'value' => 'assets/datatables/dataTable.editor.min'
							),
							array(
								'type' => 'header_js',
								'value' => 'assets/datatables/dataTable.select.min'
							),
							array(
								'type' => 'header_js',
								'value' => 'assets/datatables/dataTable.button.min'
							),
							array(
								'type' => 'css',
								'value' => 'assets/datatables/dataTables.bootstrap'
							),
						),
		'chosen' => array(
							array(
								'type' => 'css',
								'value' => 'assets/chosen/chosen'
							),
							array(
								'type' => 'js',
								'value' => 'assets/chosen/chosen'
							),
						),
	);
	
	$output['header_js'] = array(
		'assets/js/jquery-2.2.3.min',
		'assets/js/slimscroll'
	);

	foreach( $values as $value ) {
		$inputs = $options[$value];
		foreach( $inputs as $input ) {
			$output[$input['type']][] = $input['value'];
		}
	}

	return $output;
}

function CheckUserLastPackageHistoryByPackageID($packageId,$type)
{
	$CI = get_instance();
	
	$user_id =$CI->session->userdata('USER_ID');
 	if(empty($user_id)){ redirect('user/login'); }

    // You may need to load the model if it hasn't been pre-loaded
    $CI->load->model('user_model');
    $CI->load->model('package_model');

 		$OrderHistory = $CI->user_model->getLastOrderHistoryByUserid($user_id,$packageId);
 		$package = $CI->package_model->get_package_by_id($packageId) ; 
 	
		if(!$OrderHistory){
		
				$CI->session->set_flashdata('msg','<div class="alert alert-danger">Your have not  <b> '.$package[0]->title.' </b>  plan.<br> Please purchase package</div><a href="'.base_url('packages').'"> <button type="button" class="btn btn-primary"> Purchase Package </button></a>');
		  		 redirect("user/response");

		}else{



		    if($OrderHistory[0]->status == 'Expired'){ // Check Order Expiration 

					$CI->session->set_flashdata('msg','<div class="alert alert-danger">Your plan has been expired. <br>Please purchase new  <b> '.$package[0]->title.' </b> .   </div><a href="'.base_url('packages').'"> <button type="button" class="btn btn-primary"> Purchase Packages </button></a>');
					 redirect("user/response");
			}
			
			if($OrderHistory[0]->status == 'Inactive'){

				$CI	->session->set_flashdata('msg','<div class="alert alert-danger"> Your plan has been inactive, <br>Please contact admin.  </div><a href="'.base_url('contact-us').'"> <button type="button" class="btn btn-primary"> Drop Mail </button></a>');
				 redirect("user/response");
			}


			$data['studyMaterials']=  $CI->package_model->getPaidStudyMaterialsDetailsByPackageId($OrderHistory[0]->package_id);
			$data['paidExam']=  $CI->package_model->getPaidExamDetailsByPackageId($OrderHistory[0]->package_id);
			$data['paidModelQA']=  $CI->package_model->getPaidModelQADetailsBypackageId($OrderHistory[0]->package_id);

			return $data ;  
		  }

			
}


function CheckUserLastPackageHistory()
{
	$CI = get_instance();
	
	$user_id =$CI->session->userdata('USER_ID');
 	if(empty($user_id)){ redirect('user/login'); }

    // You may need to load the model if it hasn't been pre-loaded
    $CI->load->model('user_model');
    $CI->load->model('package_model');

 		$OrderHistory = $CI->user_model->getLastOrderHistoryByUserid($user_id);
 
 	
		if(!$OrderHistory){
		
				$CI->session->set_flashdata('msg','<div class="alert alert-danger">Your have not  any plan.<br> Please purchase package</div><a href="'.base_url('packages').'"> <button type="button" class="btn btn-primary"> Purchase Package </button></a>');
		  		 redirect("user/response");

		}else{

			$package = $CI->package_model->get_package_by_id($packageId) ; 

		    if($OrderHistory[0]->status == 'Expired'){ // Check Order Expiration 

					$CI->session->set_flashdata('msg','<div class="alert alert-danger">Your plan has been expired. <br>Please purchase new    </div><a href="'.base_url('packages').'"> <button type="button" class="btn btn-primary"> Purchase Packages </button></a>');
					 redirect("user/response");
			}
			
			if($OrderHistory[0]->status == 'Inactive'){

				$CI	->session->set_flashdata('msg','<div class="alert alert-danger"> Your plan has been inactive, <br>Please contact admin.  </div><a href="'.base_url('contact-us').'"> <button type="button" class="btn btn-primary"> Drop Mail </button></a>');
				 redirect("user/response");
			}


			$data['studyMaterials']=  $CI->package_model->getPaidStudyMaterialsDetailsByPackageId($OrderHistory[0]->package_id);
			$data['paidExam']=  $CI->package_model->getPaidExamDetailsByPackageId($OrderHistory[0]->package_id);
			$data['paidModelQA']=  $CI->package_model->getPaidModelQADetailsBypackageId($OrderHistory[0]->package_id);

			return $data ;  
		  }

			
}



function CheckUserLastPackageHistoryByPackageFor($packageFor)
{
	$CI = get_instance();
	
	$user_id =$CI->session->userdata('USER_ID');
 	if(empty($user_id)){ redirect('user/login'); }

    // You may need to load the model if it hasn't been pre-loaded
    $CI->load->model('user_model');
    $CI->load->model('package_model');

 		$OrderHistory = $CI->user_model->getLastOrderHistoryByUserid($user_id);

		if(!$OrderHistory){
		
				$CI->session->set_flashdata('msg','<div class="alert alert-danger">Your have not  <b> any '.$packageFor.' </b>  plan.<br> Please purchase '.$packageFor.' plan.</div><a href="'.base_url('packages').'"> <button type="button" class="btn btn-primary"> Purchase Package  </button></a>');
		  		 redirect("user/response");

		}else{


		    if($OrderHistory[0]->packageFor != $packageFor){ // Check Order Expiration 

				$CI->session->set_flashdata('msg','<div class="alert alert-danger">Your have not  <b> any  '.$packageFor.'  </b>  plan.<br> Please purchase '.$packageFor.' plan.</div><a href="'.base_url('packages').'"> <button type="button" class="btn btn-primary"> Purchase Package </button></a>');
		  		 redirect("user/response");
			}

		    if($OrderHistory[0]->status == 'Expired'){ // Check Order Expiration 

					$CI->session->set_flashdata('msg','<div class="alert alert-danger">Your '.$packageFor.' plan has been expired. <br>Please purchase new  <b> '.$package[0]->title.' </b> .   </div><a href="'.base_url('packages').'"> <button type="button" class="btn btn-primary"> Purchase   study materials plan </button></a>');
					 redirect("user/response");
			}
			
			if($OrderHistory[0]->status == 'Inactive'){

				$CI	->session->set_flashdata('msg','<div class="alert alert-danger"> Your '.$packageFor.'s plan has been inactive, <br>Please contact admin.  </div><a href="'.base_url('contact-us').'"> <button type="button" class="btn btn-primary"> Drop Mail </button></a>');
				 redirect("user/response");
			}


			$data['studyMaterials']=  $CI->package_model->getPaidStudyMaterialsDetailsByPackageId($OrderHistory[0]->package_id);
			$data['paidExam']=  $CI->package_model->getPaidExamDetailsByPackageId($OrderHistory[0]->package_id);
			$data['paidModelQA']=  $CI->package_model->getPaidModelQADetailsBypackageId($OrderHistory[0]->package_id);

			return $data ;  
		  }

			
}


function checkUserLastPackageStudyMaterials($studyMaterials='' , $studyMaterialsId)
{
	$CI = get_instance();
	if(!$studyMaterials){

		$CI ->session->set_flashdata('msg','<div class="alert alert-danger"> In your package this study materials not included. </div><a href="'.base_url('study-materials').'"> <button type="button" class="btn btn-primary">View Study Materials </button></a>');
					 redirect("user/response");
	}else{
		foreach ($studyMaterials as $key => $value) {
			
			$studyMaterialsArray[] = $value->studyMaterialId ; 
		}
		if(!in_array($studyMaterialsId, $studyMaterialsArray)){

				$CI->session->set_flashdata('msg','<div class="alert alert-danger"> In your package this study materials not included. </div><a href="'.base_url('study-materials').'"> <button type="button" class="btn btn-primary">View Study Materials </button></a>');
					 redirect("user/response");
		}
		
	}
	
}

function checkUserLastPackageExam($exams='' , $ExamId)
{
	$CI = get_instance();
	if(!$exams){
		$CI ->session->set_flashdata('msg','<div class="alert alert-danger"> In your package this  <b>exam  </b> not included. </div><a href="'.base_url('exam').'"> <button type="button" class="btn btn-primary">View Exam </button></a>');
					 redirect("user/response");
	}else{
		foreach ($exams as $key => $value) {
			
			$examsArray[] = $value->examId ; 
		}
		if(!in_array($ExamId, $examsArray)){

		$CI->session->set_flashdata('msg','<div class="alert alert-danger"> In your package this <b> exam </b>  not included. </div><a href="'.base_url('exam').'"> <button type="button" class="btn btn-primary">View Exam </button></a>');
					 redirect("user/response");
		}
		
	}
	
}

function checkUserLastPackagModelQA($ModelQA='' , $ModelQAId)
{
	$CI = get_instance();
	if(!$ModelQA){
		$CI ->session->set_flashdata('msg','<div class="alert alert-danger"> In your package this <b> Model Question Answer </b> not included. </div><a href="'.base_url('model-question-answer').'"> <button type="button" class="btn btn-primary">View Model Question Answer </button></a>');
					 redirect("user/response");
	}else{
		foreach ($ModelQA as $key => $value) {
			$ModelQAArray[] = $value->modelQAId ; 
		}
		if(!in_array($ModelQAId, $ModelQAArray)){
				$CI->session->set_flashdata('msg','<div class="alert alert-danger"> In your package this  <b> Model Question Answer </b> not included. </div><a href="'.base_url('model-question-answer').'"> <button type="button" class="btn btn-primary">View Model Question Answer </button></a>');
					 redirect("user/response");
		}
	}
}

function CheckUserExamHistory($examHistory='' , $userExamId)
{
	$CI = get_instance();
	if(!$examHistory){
		$CI ->session->set_flashdata('msg','<div class="alert alert-danger"> No exam has been given. </div><a href="'.base_url('model-question-answer').'"> <button type="button" class="btn btn-primary">View Model Question Answer </button></a>');
					 redirect("user/response");
	}else{
		foreach ($examHistory as $key => $value) {
			$examHistoryArray[] = $value->id ; 
		}
		if(!in_array( $userExamId,$examHistoryArray)){
			$CI->session->set_flashdata('msg','<div class="alert alert-danger"> Illegal access.   </div><a href="'.base_url('user/exam_history').'"> <button type="button" class="btn btn-primary">View Exam History </button></a>');
			redirect("user/response");
		}
	}
}
?>