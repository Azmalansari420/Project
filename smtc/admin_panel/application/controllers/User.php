<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller 
{
	
	function __construct()
	{
		parent::__construct();
		$admin_id = $this->session->userdata('adminid');
		if(empty($admin_id))
		{
			redirect('admin');
		}
		$this->load->library('form_validation');
	   // $this->load->library('phpqrcode/qrlib');
        $this->load->helper('url');
	}
	
	
	public function qrcodeGenerator ($qrtext )
	{
		
			//file path for store images
		     $SERVERFILEPATH = $_SERVER['DOCUMENT_ROOT'].'/admin_panel/uploads/qrcodeci/';
			$text = $qrtext;
			$text1= substr($text, 0,9);
			$folder = $SERVERFILEPATH;
			
			$file =time() . ".png";
			$file_name = $folder.$file;
			// $ecc stores error correction capability('L')
            $ecc = 'L';
            $pixel_Size = 10;
            $frame_size = 10;
            // Generates QR Code and Stores it in directory given
            QRcode::png($text, $file_name, $ecc, $pixel_Size, $frame_size);
			$msg = "<center style='background: #ffff;width: 70px;'><img src=".base_url().'uploads/qrcodeci/'.$file." style='width:70px'></center";
			return $msg ; 
	
	}

	
	
	public function barcode ( )
	{
   	    $data['user'] = $this->user_model->get_all_user(); 
		$this->load->view('admin/user/barcode',$data);

	}

	
	public function generate_barcode_new ( )
	{
	    if(isset($_POST['user_id']))
		{
		    $data['user'] = $this->user_model->get_user_by_id($_POST['user_id']); 
    		$data['reg_id']  =$data['user'][0]->reg_id ; 
    		$this->load->view('admin/user/barcode-view',$data);
		}

	}
	

	public function all()
	{
		$data['RESULT'] = $this->user_model->get_all_user(); 
		$this->load->view('admin/user/listing',$data);
	}
	

	public function profile()
	{
		$args = func_get_args();
		$data['RESULT'] = $this->user_model->get_user_by_id($args[0]); 
		if(isset($_POST['update_profile']))
		{
			$post_data = $this->input->post();	
			//unset($post_data['old_image']);
			unset($post_data['update_profile']);
			
			$post_data['specialization'] = implode('#' , $post_data['specialization'] );
			$this->db->where('id',$args[0]);
			$this->db->update('tbl_user',$post_data);
			$this->session->set_flashdata('msg','<div class="alert alert-success">Profile has been updated successfully</div>');
			redirect('user/profile/'.$args[0]);
		}
		if(isset($_POST['update_payment']))
		{
			$post_data = $this->input->post();	
			unset($post_data['update_payment']);
			$this->db->where('id',$args[0]);
			$this->db->update('tbl_user',$post_data);
			$this->session->set_flashdata('msg','<div class="alert alert-success">Payment Status has been updated successfully</div>');
			redirect('user/profile/'.$args[0]);
		}
		
		if(isset($_POST['cerificate_status']))
		{
			$post_data = $this->input->post();	
			unset($post_data['cerificate_status']);
			if(isset($_FILES['result']['name']) && !empty($_FILES['result']['name']))
			{
				
					$file_name = 'result-'.$data['RESULT'][0]->reg_id.$_FILES['result']['name'];
					$tmp_name = $_FILES['result']['tmp_name'];
					$path = 'uploads/user/'.$file_name;
					move_uploaded_file($tmp_name,$path);
					$post_data['result'] = $file_name;					
				
			}
			if(isset($_FILES['marksheet']['name']) && !empty($_FILES['marksheet']['name']))
			{
				
					$file_name = 'marksheet-'.$data['RESULT'][0]->reg_id.$_FILES['marksheet']['name'];
					$tmp_name = $_FILES['marksheet']['tmp_name'];
					$path = 'uploads/user/'.$file_name;
					move_uploaded_file($tmp_name,$path);
					$post_data['marksheet'] = $file_name;					
				
			}
			if(isset($_FILES['certificate']['name']) && !empty($_FILES['certificate']['name']))
			{
				
					$file_name = 'certificate-'.$data['RESULT'][0]->reg_id.$_FILES['certificate']['name'];
					$tmp_name = $_FILES['certificate']['tmp_name'];
					$path = 'uploads/user/'.$file_name;
					move_uploaded_file($tmp_name,$path);
					$post_data['certificate'] = $file_name;					
				
			}
	
			$this->db->where('id',$args[0]);
			$this->db->update('tbl_user',$post_data);
			$this->session->set_flashdata('msg','<div class="alert alert-success"> Status has been updated successfully</div>');
			redirect('user/profile/'.$args[0]);
		}	

		if(isset($_POST['update_pic'])){

			if(isset($_FILES['photo']['name']) && !empty($_FILES['photo']['name']))
			{
				$allow_ext = array('png','jpg','jpeg','JPEG','gif');
				$file_ext = image_extension($_FILES['photo']['name']);
				if(in_array($file_ext,$allow_ext))
				{
					$file_name = time().$_FILES['photo']['name'];
					$tmp_name = $_FILES['photo']['tmp_name'];
					$path = 'uploads/user/'.$file_name;
					move_uploaded_file($tmp_name,$path);
					$postdata['photo'] = $file_name;					
				}
			}
			if(isset($_FILES['cover']['name']) && !empty($_FILES['cover']['name']))
			{
				$allow_ext = array('png','jpg','jpeg','JPEG','gif');
				$file_ext = image_extension($_FILES['cover']['name']);
				if(in_array($file_ext,$allow_ext))
				{
					$file_name = time().$_FILES['cover']['name'];
					$tmp_name = $_FILES['cover']['tmp_name'];
					$path = 'uploads/user/'.$file_name;
					move_uploaded_file($tmp_name,$path);
					$postdata['cover'] = $file_name;					
				}
			}
			if(isset($_FILES['adhar_pic']['name']) && !empty($_FILES['adhar_pic']['name']))
			{
				$allow_ext = array('png','jpg','jpeg','JPEG','gif');
				$file_ext = image_extension($_FILES['adhar_pic']['name']);
				if(in_array($file_ext,$allow_ext))
				{
					$file_name = time().$_FILES['adhar_pic']['name'];
					$tmp_name = $_FILES['adhar_pic']['tmp_name'];
					$path = 'uploads/user/'.$file_name;
					move_uploaded_file($tmp_name,$path);
					$postdata['adhar_pic'] = $file_name;					
				}
			}
			if(isset($_FILES['student_signature']['name']) && !empty($_FILES['student_signature']['name']))
			{
				$allow_ext = array('png','jpg','jpeg','JPEG','gif');
				$file_ext = image_extension($_FILES['student_signature']['name']);
				if(in_array($file_ext,$allow_ext))
				{
					$file_name = time().$_FILES['student_signature']['name'];
					$tmp_name = $_FILES['student_signature']['tmp_name'];
					$path = 'uploads/user/'.$file_name;
					move_uploaded_file($tmp_name,$path);
					$postdata['student_signature'] = $file_name;					
				}
			}

			$this->db->where('id',$args[0]);
			$this->db->update('tbl_user',$postdata);
			$this->session->set_flashdata('msg','<div class="alert alert-success">Profile has been photo updated successfully</div>');
			redirect('user/profile/'.$args[0]);

		}
		
		if(isset($_POST['insertResult']))
		{
			 $post_data = $this->input->post();

    		     if(isset($_POST['subjectName'] ) ) { 
    
    
    				    $subjectNameArray = $post_data['subjectName'];
    				    $subjet_max_marksArray = $post_data['subjet_max_marks'];
    				    $total_marksArray = $post_data['total_marks'];
    				    $post_data['create_date'] = date('Y-m-d H:i');
    				  
    				    unset($post_data['Submit']) ;
    				    unset($post_data['subjectName']) ;
    				    unset($post_data['subjet_max_marks']) ;
    				    unset($post_data['total_marks']) ;
    			}
					  
				unset($post_data['course_id']);
				unset($post_data['insertResult']);
				$post_data['user_refid'] = $args[0] ;
				$post_data['create_date'] = date('Y-m-d H:i:s');
				if( $post_data['result']=='LE'){
				     $post_data['grade'] = 'LE'; 
				}
               
			    $this->db->insert('tbl_result',$post_data);

			    $insert_id = $this->db->insert_id() ; 
                $totalmax_marks =$totalobtd= 0 ; 
			    if(isset($_POST['subjectName'] ) ) { 
				    foreach ($subjectNameArray as $key => $value) {
				    	
				    	if($total_marksArray[$key]){
    				    	$resultdata['subject'] = $subjectNameArray[$key];
    				    	$resultdata['user_refid'] =$args[0] ;
    				    	$resultdata['max_marks'] = $subjet_max_marksArray[$key];
    				    	$resultdata['total_marks'] = $total_marksArray[$key];
    				    	$resultdata['result_id'] =   $insert_id;
    				    	$this->db->insert('tbl_result_marksheet' , $resultdata) ; 
    				    	
    				    	$totalobtd = $total_marksArray[$key] +  $totalobtd ;
    				    	$totalmax_marks = $subjet_max_marksArray[$key] +  $totalmax_marks ;
				    	}
				       
				    }
				}
				if($totalmax_marks){
				   $update['grade'] = $this->grade ($totalobtd,$totalmax_marks); 
                   $this->result_model->update_result_by_id($insert_id,$update); 
				}
                
                
			    $this->session->set_flashdata('msg','<div class="alert alert-success">Result Inserted</div>');
				redirect('user/profile/'.$args[0]);


			
		}	

		if(isset($_POST['userExamActive']))
		{
			$post_data = $this->input->post();	

			$count = $this->db->get_where('tbl_user_active_exam' ,array('exam_refid'=>$post_data['exam_refid']  , 'user_refid'=>$post_data['user_refid']  ) )->num_rows() ;
			if($count == 0 ){

				unset($post_data['userExamActive']);
				$post_data['create_date'] = date('Y-m-d H:i');
				$post_data['status'] = 'Active' ;
			    $this->db->insert('tbl_user_active_exam',$post_data);
			    $this->session->set_flashdata('msg','<div class="alert alert-success">User Exam Active</div>');
			    redirect('user/profile/'.$args[0]);

			}else{
				 $this->session->set_flashdata('msg','<div class="alert alert-danger">User Exam alreday Allotted</div>');
			}  		
		}	

		$userExam = $this->db->get_where('tbl_user_active_exam' ,array( 'user_refid'=>$args[0]  ) )->result() ;
		$data['RESULT'] = $this->user_model->get_user_by_id($args[0]); 
		$data['RESULTLIST'] = $this->user_model->get_userresults_by_id($args[0]); 
		$data['payment'] = $this->payment_model->get_all_payment_by_user_id($args[0]); 
		$data['ActiveExam'] = $this->exam_model->get_all_active_exam_by_course_id($data['RESULT'][0]->course_id) ;  
		$data['userExam'] = $userExam ; 
		$this->load->view('admin/user/profile',$data);
	} 
	
	public function add()
	{
		$args = func_get_args();
		if(isset($_POST['add_profile']))
		{
			$postdata = $this->input->post();	
			unset($postdata['add_profile']);
			$postdata['oauth_uid'] = substr(time(),2,8);
			$postdata['password'] = rand();
			$postdata['oauth_provider'] = 'website';
			$postdata['specialization'] = implode('#' , $postdata['specialization'] );
			if(isset($_FILES['photo']['name']) && !empty($_FILES['photo']['name']))
			{
				$allow_ext = array('png','jpg','jpeg','JPEG','gif');
				$file_ext = image_extension($_FILES['photo']['name']);
				if(in_array($file_ext,$allow_ext))
				{
					$file_name = time().$_FILES['photo']['name'];
					$tmp_name = $_FILES['photo']['tmp_name'];
					$path = 'uploads/user/'.$file_name;
					move_uploaded_file($tmp_name,$path);
					$postdata['photo'] = $file_name;					
				}
			}
			if(isset($_FILES['cover']['name']) && !empty($_FILES['cover']['name']))
			{
				$allow_ext = array('png','jpg','jpeg','JPEG','gif');
				$file_ext = image_extension($_FILES['cover']['name']);
				if(in_array($file_ext,$allow_ext))
				{
					$file_name = time().$_FILES['cover']['name'];
					$tmp_name = $_FILES['cover']['tmp_name'];
					$path = 'uploads/user/'.$file_name;
					move_uploaded_file($tmp_name,$path);
					$postdata['cover'] = $file_name;					
				}
			}
			if(isset($_FILES['adhar_pic']['name']) && !empty($_FILES['adhar_pic']['name']))
			{
				$allow_ext = array('png','jpg','jpeg','JPEG','gif');
				$file_ext = image_extension($_FILES['adhar_pic']['name']);
				if(in_array($file_ext,$allow_ext))
				{
					$file_name = time().$_FILES['adhar_pic']['name'];
					$tmp_name = $_FILES['adhar_pic']['tmp_name'];
					$path = 'uploads/user/'.$file_name;
					move_uploaded_file($tmp_name,$path);
					$postdata['adhar_pic'] = $file_name;					
				}
			}
			if(isset($_FILES['student_signature']['name']) && !empty($_FILES['student_signature']['name']))
			{
				$allow_ext = array('png','jpg','jpeg','JPEG','gif');
				$file_ext = image_extension($_FILES['student_signature']['name']);
				if(in_array($file_ext,$allow_ext))
				{
					$file_name = time().$_FILES['student_signature']['name'];
					$tmp_name = $_FILES['student_signature']['tmp_name'];
					$path = 'uploads/user/'.$file_name;
					move_uploaded_file($tmp_name,$path);
					$postdata['student_signature'] = $file_name;					
				}
			}
	
			$this->db->insert('tbl_user',$postdata);
			$last_insert_id = $this->db->insert_id();
			
        	$course = $this->db->get_where('tbl_course', array('id'=> $postdata['course_id'] ))->result() ;  
            $update['student_id_number'] = $student_id = substr($course[0]->code."-".$last_insert_id.rand(),0,10);
            $first_character = mb_substr($course[0]->code, 0, 1);
            $update['reg_id'] = $reg_id  = "SMTC/".$first_character."/".rand ( 10000 , 99999 ).$last_insert_id;
            $this->db->where('id',$last_insert_id);
			$this->db->update('tbl_user',$update);
        	$this->student_mail($postdata['name'] , $reg_id ,$postdata['email'],$postdata['mobile'],$postdata['password'] ) ; 
        	$this->admin_mail($postdata['name'] , $reg_id ,$postdata['email'],$postdata['mobile'],$postdata['password'] ) ; 
			$this->session->set_flashdata('msg','<div class="alert alert-success">Student Register Successfully has been successfully register</div>');
			redirect('user/profile/'.$last_insert_id);
		}	
		
		$this->load->view('admin/user/add-student');
	} 
	
	public  function student_mail( $name, $reg_id ,$email,$mobile,$password ){
	    
	 $message = '
	    <h1>Dear '.$name.'</h1>
	    <p>Thank you for Registration </p>
		<h3> Student Login Details</h3>
		<table border="1" width="100%" cellpadding="5" cellspacing="5">
		    <tr>
				<td width="30%"> Registration Id </td>
				<td width="70%">'.$reg_id.'</td>
			</tr>
			<tr>
				<td width="30%"> Email id </td>
				<td width="70%">'.$email.'</td>
			</tr>
			<tr>
				<td width="30%">Mobile No.</td>
				<td width="70%">'.$mobile.'</td>
			</tr>
			<tr>
				<td width="30%">Password</td>
				<td width="70%">'.$password.'</td>
			</tr>
			<tr>
				<td width="30%">Student Login</td>
				<td width="70%"><a href="https://smtc.org.in/user/" >Login Here</a></td>
			</tr>
		  
		</table>
	';
	$link = $this->setting_model->get_all_setting();
    $this->load->library('email');
	$this->email->set_mailtype("html");
	$this->email->set_newline("\r\n");				
	$this->email->to($email);
	$this->email->from($link[0]->email2,$link[0]->title);
    $this->email->subject(' Online Student Registration!');  
	$this->email->message($message);				
	$this->email->send();	

	}
	

	
	public  function admin_mail( $name, $reg_id ,$email,$mobile,$password ){
	    
	 $message = '
	    <h1>Dear '.$name.'</h1>
		<h3> Student Login Details</h3>
		<table border="1" width="100%" cellpadding="5" cellspacing="5">
		    <tr>
				<td width="30%"> Registration Id </td>
				<td width="70%">'.$reg_id.'</td>
			</tr>
	
			<tr>
				<td width="30%"> Email id </td>
				<td width="70%">'.$email.'</td>
			</tr>
			<tr>
				<td width="30%">Mobile No.</td>
				<td width="70%">'.$mobile.'</td>
			</tr>
			<tr>
				<td width="30%">Password</td>
				<td width="70%">'.$password.'</td>
			</tr>
			<tr>
				<td width="30%">Student Login</td>
				<td width="70%"><a href="https://smtc.org.in/user/" >Login Here</a></td>
			</tr>
		  
		</table>
	';
	$link = $this->setting_model->get_all_setting();
    $this->load->library('email');
	$this->email->set_mailtype("html");
	$this->email->set_newline("\r\n");				
	$this->email->to($link[0]->email);
	$this->email->from($link[0]->email2,$link[0]->title);
    $this->email->subject('Student Registration!');  
	$this->email->message($message);				
	$this->email->send();	

	}


    public function grade($marks , $total ){
        
    
        $percentage = ($marks / $total) * 100;
        
        if ($percentage >= 75)
            $grade = "A+";
        else if ($percentage >= 65 && $percentage < 75)
            $grade = "A";
        else if ($percentage >= 55 && $percentage < 65)
            $grade = "B";
        else if ($percentage >= 50 && $percentage < 55)
            $grade = "C";
        else
            $grade = "D";   
            
        
        
        return $grade ; 
        
    }
    
	public function view_result($value='')
	{
		$args = func_get_args();
      
		$data['RESULT'] = $this->result_model->get_result_by_id($args[0]); 
		$data['user'] = $this->user_model->get_user_by_id($data['RESULT'][0]->user_refid); 
		$data['RESULTLIST'] = $this->user_model->get_userresults_by_id($data['RESULT'][0]->user_refid); 
		$this->load->view('admin/user/per-semester-result',$data);
	}
	
	
	public function edit_result($value='')
	{   $args = func_get_args();
		$data['RESULT'] = $this->result_model->get_result_by_id($args[0]); 

		$data['user'] = $this->user_model->get_user_by_id($data['RESULT'][0]->user_refid); 
		
		if(isset($_POST['updateResult']))
		{
			
				$post_data = $this->input->post();
				unset($post_data['updateResult']);
				$this->result_model->update_result_by_id($args[0],$post_data);
				$this->session->set_flashdata('msg','<div class="alert alert-success">record has been successfully updated.</div>');
				redirect('user/edit_result/'.$args[0]);
		
		}
	
		$this->load->view('admin/user/edit',$data);
	}
	
	public function result(){
	    error_reporting(0) ; 
	    $args = func_get_args();
	   
		$data['user'] = $this->user_model->get_user_by_id($args[0]); 
		$data['RESULT'] = $this->user_model->get_userlast_results_by_id($args[0]); 
		$data['RESULTLIST'] = $this->user_model->get_userresults_by_id($args[0]); 
		$this->load->view('admin/user/per-semester-result',$data);
	    
	}
	public function marksheet(){
	    error_reporting(0) ; 
	    $args = func_get_args();
		$data['RESULTLIST'] = $this->user_model->get_userresults_by_id($args[0]); 
		$data['Last_Result'] = $this->user_model->get_userlast_results_by_id($args[0]); 
		$data['RESULT'] = $this->user_model->get_user_by_id($args[0]); 
		$data['user'] = $this->user_model->get_user_by_id($args[0]); 
		$this->load->view('admin/user/marksheet.php',$data);
	    
	}
	
	public function certificate(){
	    
	    $args = func_get_args();
	    
		$data['RESULTLIST'] = $this->user_model->get_userresults_by_id($args[0]); 
		$data['Last_Result'] = $this->user_model->get_userlast_results_by_id($args[0]); 
		$data['user'] = $this->user_model->get_user_by_id($args[0]); 
		$this->load->view('admin/user/certificate-view',$data);
	    
	}

	public function examStatusChange($value='')
	{
		$args = func_get_args();

		if (isset($_POST['status'])) {

			$data['status'] = 	$_POST['status'] ; 
			$data['update_date'] = 	date('Y-m-d H:i:s') ; 
			$this->db->where('id',$args[1]);
		    $this->db->update('tbl_user_active_exam',$data);

		    $this->session->set_flashdata('msg','<div class="alert alert-success">Exam status changed.</div>');
			redirect('user/profile/'.$args[0]);
			# code...
		}

		$data['userExam'] = $this->db->get_where('tbl_user_active_exam' ,array( 'id'=>$args[1]  ) )->row_array() ;
		$data['Exam'] = $this->db->get_where('tbl_exams' ,array( 'id'=>$data['userExam']['exam_refid']  ) )->row_array() ;
		$data['user'] = $this->db->get_where('tbl_user' ,array( 'id'=>$data['userExam']['user_refid']  ) )->row_array() ;
		$this->load->view('admin/user/change-status',$data);
	}
	public function userdelete()
	{
	    $args = func_get_args();
	    $RESULT = $this->user_model->get_user_by_id($args[0]); 
	    // Delete User 
		$this->db->where('id',$args[0]);
		$this->db->delete('tbl_user');
		// Delete Result
		$this->db->where('user_refid',$args[0]);
		$this->db->delete('tbl_result');
		//Delete Marksheet
		$this->db->where('user_refid',$args[0]);
		$this->db->delete('tbl_result_marksheet');
		

		$this->session->set_flashdata('msg','<div class="alert alert-success">Record has been successfully deleted.</div>');
		redirect('user/all');
	}
	public function examdelete()
	{
		$args = func_get_args();
		$this->db->where('id',$args[1]);
		$this->db->delete('tbl_user_active_exam');
	
		$this->session->set_flashdata('msg','<div class="alert alert-success">Record has been successfully deleted.</div>');
		redirect('user/profile/'.$args[0]);
	}

	public function deleteResult($value='')
	{
		$args = func_get_args();
		$this->db->where('id',$args[1]);
		$this->db->delete('tbl_result');
	   $this->db->where('result_id',$args[1]);
		$this->db->delete('tbl_result_marksheet');
		$this->session->set_flashdata('msg','<div class="alert alert-success">Record has been successfully deleted.</div>');
		redirect('user/profile/'.$args[0]);
	}
	
	
	public function viewExamAnswersheet($value='')
	{   error_reporting(0) ; 
		$args = func_get_args();
		 $data['exam'] = $this->exam_model->getUserExamByUserExamId($args[0]) ; 
		 $data['question'] =  $this->exam_model->get_question_by_exam_id($data['exam']['exam_refid']);
		  $data['user'] = $this->user_model->get_user_by_id($data['exam']['user_refid']); 


		 $this->load->view('admin/user/answer-sheet' ,$data);
	}
	public function userExamList($value='')
	{
		$args = func_get_args();
		$data['user'] = $this->user_model->get_user_by_id($args[0]); 
		$data['examlist'] = $this->exam_model->get_user_exam($args[0]) ; 
		$this->load->view('admin/user/user-exam-list',$data);
	}
	
	public function getCourseSemesterSubject($value='')
	{
		$semester = $_POST['semester'];
		$course = $_POST['course'];
		$courseSubject = $this->db->get_where('tbl_course_subject' ,  array('course_id' => $course , 'semester' => $semester ))->result();
		$i = 1;
		foreach ($courseSubject as $key => $value) {
			echo '<div class=" row" style="margin-bottom: 10px;padding: 10px;">
			<div class="col-md-4"><input type="text"   class="form-control " name="subjectName[]" value="'.$value->subject.'"  Placeholder="" ></div>
			<div class="col-md-2"><input type="number" step="0.01"  class="form-control subjet_max_marksRowId'.$i.'" name="subjet_max_marks[]" value="100"  Placeholder="100"></div>
			<div class="col-md-2"><input type="number" step="0.01"  data-id="'.$i.'" class="form-control total_marks total_marksRowId'.$i.'" name="total_marks[]"  Placeholder="" ></div>
			<div class=""col-md-1"></div>
			</div>' ; 
			$i++ ; 
		 } 
		 die;
	}

    function image(){
        
        $this->load->view('admin/user/per-semester-result-img');
    }





    public function delete_multiple_users()
	{
	    $ids = $this->input->post('id'); // Array of selected IDs

	    if(!empty($ids))
	    {
	        foreach($ids as $id)
	        {
	            $this->db->where('id', $id);
    			$this->db->delete('tbl_user');
	        }

	        echo "success";
	    }
	    else
	    {
	        echo "error";
	    }
	}























}